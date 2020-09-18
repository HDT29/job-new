<?php

namespace App\Http\Controllers;
use DB;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\CompanyUser;
use Auth;
use App\User;
use App\Models\SaveTheJob;
use App\Models\Rating;
use App\Models\Job;
use App\Models\Recruitment;
use App\Models\Zones;


session_start();
class UserController extends Controller
{
    public function getSignin()
    {
        return view('pages.users.signin');

    }

    public function add_signup()
    {
        $zones =Zones::all();
        return view('pages.users.signup',['zones'=> $zones]);
    }

    public function save_user(RegisterRequest $request)
    {

        $user = new User();
        $user ->name = $request->user_name;
        $user ->phone_number = $request->user_phone;
        $user->email= $request->user_email;
        $user->password = bcrypt($request->user_password);
        $user->address= $request->address;
        $user->birthday = $request->birthday;
        $user->id_zone = $request->id_zone;
        $user->language = $request->language;

        $user ->save();
        if ($user->id){
            return redirect()->route('signin-user')->with('dkuser','Đăng ký tài khoản thành công !');

        }else{
            return redirect()->back();
        }

    }


  public function postSignin(LoginRequest $request){

      $credentials = $request->only('email', 'password');

      if (Auth::attempt( $credentials)) {
          return redirect()->route('home');
      }else{
          return redirect()->back()->with('errorlogin','Thất Bại ! Vui lòng kiểm tra lại thông tin đăng nhập.');
      }
  }
  public function LogoutUser(){
        Auth::logout();
        return redirect()->route('home');
  }

  public function getUser(){
    $zones =Zones::all();
    $user = Auth::user();
    return view('pages.users.profile',['nguoidung'=>$user,'zones'=> $zones]);
  }

  public function getUserprofile(){
    $zones =Zones::all();
    $user = Auth::user();

    return view('pages.users.edit',['nguoidung'=>$user,'zones'=> $zones]);
  }
  public function postEdit(EditUserRequest $request){
    $zones =Zones::all();
    $user = Auth::user();

    $user->name = $request->name;
    $user->phone_number = $request->phone_number;

    $user->address = $request->address;
    $user->birthday = $request->birthday;
    $user->language = $request->language;
    $user->id_zone = $request->id_zone;

    if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();//kiểm tra đuôi

            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('edit-profile')->with('thongbao','file bạn chọn không phải ảnh');
            }

            $name = $file->getClientOriginalName();//lấy tên hình

            $name = uniqid() . '-' . $name;

            $avatar = $name;

            while (file_exists("images/users/".$avatar)){
                $avatar = $name;
            }
            $file->move("images/users/",$avatar);
            // unlink('images/users/'.$user->avatar);//xóa hình cũ
            $user->avatar = $avatar;

      }
    // if($request->hasFile('avatar')){

    //   $oriFileName = $request->avatar->getClientOriginalName();
    //         //thay thế ký tự khoảng trắng bằng ký tự -
    //   $filename = str_replace(' ', '-', $oriFileName);
    //         //thêm doạn chuỗi khoảng bị trùng dằng trước tên ảnh
    //   $filename = uniqid() . '-' . $filename;
    //         // trong storage phải đổi lại đường truyền config->filesystems
    //   $path=$request->file('avatar')->storeAs('users', $filename);


    //   $user->avatar ='images/'.$path;

    // }
    $user->save();




    return view('pages.users.profile',['nguoidung'=>$user,'zones'=> $zones]);
  }


  public function getUserpass(){
    $user = Auth::user();
    return view('pages.users.changepass',['nguoidung'=>$user]);
  }

  public function postUserpass(Request $request){
    $user = Auth::user();

    $validatedData =Validator::make($request->all(),[

        'password'=>'bail|required',
        'newpass'=>'bail|required',
        'repass_confirmation'=>'bail|required|same:newpass',


    ],[



      'password.required'=>"Nhập mật khẩu cũ của tài khoản",
      'newpass.required'=>"Nhập mật khẩu mới!",
      'repass_confirmation.required'=>"Vui lòng nhập lại mật khẩu",
      'repass_confirmation.same'=>"Mật khẩu không trùng khớp ",


      ]
    );
    if ($validatedData->fails()) {
        return View('pages.users.changepass',['nguoidung'=>$user])->withErrors($validatedData);
    }
    $user = Auth::user();
    if(password_verify($request->password, $user['password']) == false){
      $mess="Mật khẩu không trùng khớp";
        return view('pages.users.changepass', compact('mess'),['nguoidung'=>$user]);
        }
        //mã hóa mật khẩu mới


    $user = Auth::user();

    $user->password = bcrypt($request->get('newpass'));

    $user->save();


    return redirect()->route('changepass')->with('success',"Đổi mật khẩu thành công !");
  }


  // public function suggestions(){
  //   $user = Auth::user();
  //   $users = User::with('profile')->where('id', '!=', $id )->inRandomOrder()->get();

  // }

  public function getlistSavejob(){
        $user = Auth::user();
        $zones = Zones::all();
        $savejob = SaveTheJob::with('savejob','companyuser')->where('user_id', $user->id)->get();



        return view('pages.users.bookmark',compact('user','savejob','zones'));
  }

  public function saveJob($id){
      $job = Job::find($id);
      $user = Auth::user();
      $date = now();
        // // SaveTheJob::create([

        //  $job => $request->job_id

        // ]);
      $savejob = new SaveTheJob();



      $savejob->job_id = $job->id;
      $savejob->user_id = $user->id;
      $savejob->company_id = $job->company_user_id;
      $savejob->date = $date;


      $savejob->save();

  //       SaveTheJob::create([
    //     'job_id' => '$job->id',
    //     'user_id' => '$user->id',
    //     'date' => now(),
    // ]);


        return redirect()->back();

    }

    public function unsaveJob($id){
        $user = Auth::user();
        $job = Job::find($id);
        $unrecruitment = DB::table('save_the_job')->join('users', 'save_the_job.user_id', '=', 'users.id')
            ->join('jobs', 'save_the_job.job_id', '=', 'jobs.id')
            ->select('save_the_job.*', 'users.id', 'jobs.id')
            ->where([
                ['job_id', '=', $job->id],
                ['user_id', '=', $user->id],

            ])
            ->delete();
        return redirect()->back();
    }
  public function applyJob($id){
        $user = Auth::user();
        $job = Job::find($id);
        $date = now();

        $apply = new Recruitment();
        $apply->user_id = $user->id;
        $apply->job_id = $job->id;
        $apply->company_id = $job->company_user_id;
        $apply->date = $date;
        $apply->save();





        return redirect()->back();
  }

  public function unapplyJob($id){
        $user = Auth::user();
        $job = Job::find($id);
        $unrecruitment = DB::table('recruitment')->join('users', 'recruitment.user_id', '=', 'users.id')
            ->join('jobs', 'recruitment.job_id', '=', 'jobs.id')
            ->select('recruitment.*', 'users.id', 'jobs.id')
            ->where([
                ['job_id', '=', $job->id],
                ['user_id', '=', $user->id],

            ])
            ->delete();
        return redirect()->back();

  }

  public function getlistApplyjob(){
        $user = Auth::user();
        $company = CompanyUser::All();
        $listapplyjob = Recruitment::with('applyjob','companyuser')->where('user_id', $user->id)->get();



        return view('pages.users.applyjob',compact('user','listapplyjob','company'));
  }





}
