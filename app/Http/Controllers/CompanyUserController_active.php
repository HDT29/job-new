<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;
use App\Models\CompanyUser;
use App\Http\Requests;
use App\Http\Requests\AddJob;
use Illuminate\Http\Request;
use App\Http\Requests\Employer\LoginRequest;
use App\Http\Requests\Employer\RegisterRequest;
use App\Models\Formalitys;
use App\Models\Zones;
use App\Models\JobCategorie;
use App\Models\Language;
use App\Models\Job;
use Illuminate\Support\Str;
use App\Models\Rating;
use App\Models\Recruitment;
use App\Models\Contact;
use App\Models\WebSetting;
use Illuminate\Support\Facades\DB;
session_start();

class CompanyUserController extends  Controller
{
    public function add_employer()
    {
        return view('pages.employer.signup-employer');
    }
    public function save_employer(RegisterRequest $request)
    {

        $userCompany = new CompanyUser();
        $userCompany ->name = $request->user_name;
        $userCompany ->phone= $request->user_phone;
        $userCompany->email= $request->user_email;
        $userCompany->password = bcrypt($request->user_password);

        $userCompany ->save();
        if ($userCompany->id){
            return redirect()->route('signin-employer');

        }else{
            return redirect()->back();
        }

    }

    public function getSigninEmployer(){
        return view('pages.employer.signin-employer');
    }
    public function getEmployer(){
        return view('pages.employer.employer');
    }

    public function postSigninEmployer(LoginRequest  $request){

//
        $date =[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if (Auth::guard('company_user')->attempt($date)) {
            return redirect()->route('employer');
        }else{
            Session::put('message','Mật khẩu sai vui lòng nhập lại');
            return redirect()->back()->with('errorlogin','Thất Bại ! Vui lòng kiểm tra lại thông tin đăng nhập.');
        }
    }
    public function LogoutEmployer(){
        Auth::guard('company_user')->logout();
        return redirect()->route('home');
    }
    //company_user thanhnv//
    public function index(){
        $company =CompanyUser::find('id');
        $zones = Zones::all();
//        $jobs = Job::all()->where('company_user_id',)->count();
        return view('pages.company_users.profile',['zones'=>$zones,'company'=>$company]);
    }
//    public function getlistSavejob(){
//        $user = Auth::user();
//
//        $savejob = SaveTheJob::with('savejob')->where('user_id', $user->id)->get();
//
//
//
//        return view('pages.users.bookmark',compact('user','savejob'));
//    }
    public function getEditProfile($id){
        $profile = CompanyUser::find($id);
        $zones = Zones::all();
        return view ('pages.company_users.edit-profile',['profile'=>$profile,'zones'=>$zones]);
    }
    public function postEditProfile(Request $request,$id){
            $profile = CompanyUser::find($id);
//        if ($profile['name'] == $request['name'] && $profile['phone'] == $request['phone'] && $profile['website'] ==
//            $request['website'] && $profile['scales'] == $request['scales'] && $profile['address'] == $request['address'] &&
//            $profile['desc'] == $request['desc'] && $profile['email'] == $request['email']  && $profile['province'] == $request['province']){
//
//            $profile['name'] = $request['name'];
//            $profile['website'] = $request['website'];
//            $profile['scales'] = $request['scales'];
//            $profile['email'] = $request['email'];
//            $profile['province'] = $request['province'];
//            $profile['avatar'] = $request['avatar'];
//            $profile['phone'] = $request['phone'];
//            $profile['address'] = $request['address'];
//            $profile['desc'] = $request['desc'];
//            $profile->save();
//
//            return redirect()->route('company.get.index');
//
//        }

        $this->validate($request,[
            'name' => 'required|min:5|max:50',
            'phone' => 'required|numeric',
//            'id_zone' => 'required',
            'email' => 'required',
//             'avatar' => 'required',
            'scales' => 'required',
            'address' => 'required|max:150',
            'desc' => 'required',


        ],[
            'name.required' => 'Vui lòng điền tên công ty của bạn',
            'name.min' => 'Tên công ty không được ít hơn 5 ký tự',
            'name.max' => 'Tên công ty không được quá 50 ký tự',
            'phone.required' => 'Vui lòng điền số điện thoại ',
//            'id_zone.required' => 'Vui lòng chọn khu vực của bạn',
            'desc.required' => 'Thêm mô tả về công ty',
            'email.required' => 'Vui lòng điền địa chỉ email',
            'address.required' => 'Vui lòng điền địa chỉ của bạn',
            // 'avatar.required' => 'Vui lòng thêm ảnh đại diện',

        ]);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                $AvatarName = "avatar_" . Str::random(4). $name;
                if (file_exists($profile['avatar'])) {
                    unlink($profile['avatar']);
                    $profile['avatar'] = "";
                }
                $file->move('images/avatarcompany/', $AvatarName);
                $urlAvatar = 'images/avatarcompany/' . $AvatarName;
                $profile['avatar'] = $urlAvatar;
            } else {
                return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
            }
        }
        $profile['name'] = $request['name'];
        $profile['website'] = $request['website'];
        $profile['scales'] = $request['scales'];
        $profile['email'] = $request['email'];
        $profile['id_zone'] = $request['id_zone'];
        $profile['phone'] = $request['phone'];
        $profile['address'] = $request['address'];
        $profile['desc'] = $request['desc'];
        $profile->save();

        return redirect()->route('company.get.index');
    }
    public function getJob(){
        $company =Auth::guard('company_user')->user();
        $job = Job::all()->where('company_user_id', $company->id);
        $zones = Zones::all();
//        $language = Language::all();
        return view('pages.jobs.list-job',['job'=>$job,'zones'=> $zones,'company'=>$company]);
    }
    public function getAddJob(){
        $company =Auth::guard('company_user')->user();
        $zones =Zones::all();
        $job_categories = JobCategorie::all();
        $profile = CompanyUser::all('id');
        $jobs = Job::all()->where('company_user_id', $company->id)->count();
        $pack1 = DB::table('company_users')->where('id', $company->id)->select('pack')->get();
         $language = Language::all();
        if( $pack1[0]->pack == 1 && $jobs == 3){
            return redirect()->route('job.get.list')->with('errorpack','Số lượng công việc đã vượt quá giới hạn ! Vui lòng nâng cấp tài khoản để thêm
            nhiều công việc');
        }
        else {
               return view('pages.jobs.add-job', ['zones' => $zones, 'job_categories' => $job_categories, 'profile' => $profile,'company'=>$company,'language'=>$language]);
        }
    }
    public function postAddJob(AddJob $request){

        $request->validated();

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $name = $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                $AvatarName = "images_" . Str::random(4). $name;
                $file->move('images/images-job/', $AvatarName);
                $urlAvatar = 'images/images-job/' . $AvatarName;
                $jobs = new Job();
                $jobs['job_name'] = $request['job_name'];
                $jobs['company_user_id'] = Auth::guard('company_user')->user()->id;
                $jobs['job_category_id'] = $request['job_category_id'];
                $jobs['id_zone'] = $request['id_zone'];
                $jobs['address'] = $request['address'];
                $jobs['deadline_job'] = $request['deadline_job'];
                $jobs['amount_people'] = $request['amount_people'];
                $jobs['formality'] = $request['formality'];
                $jobs['experience'] = $request['experience'];
                $jobs['gender'] = $request['gender'];
                $jobs['id_language'] = $request['id_language'];
                $jobs['job_desc'] = $request['job_desc'];
                $jobs['salary_type'] = $request['salary_type'];
                $jobs['salary_from'] = $request['salary_from'];
                $jobs['salary_to'] = $request['salary_to'];
                $jobs['interest'] = $request['interest'];
                $jobs['request'] = $request['job_desc'];
                $jobs['email_get_cv'] = $request['email_get_cv'];
//                $jobs['id_language'] = $request['id_language'];
                $jobs['status'] = 0;
                $jobs['slug_name'] = 0;
                $jobs['images'] = $urlAvatar;

                $jobs->save();


                return redirect()->route('job.get.list')->with('thanhcong', 'Thêm việc làm thành công');
            } else {
                return redirect()->route('job.get.add')->with('error','Vui lòng thử lại');
            }
        }
        $jobs = new Job();
        $jobs['job_name'] = $request['job_name'];
        $jobs['company_user_id'] = $request['company_user_id'];
        $jobs['job_category_id'] = $request['job_category_id'];
        $jobs['id_zone'] = $request['id_zone'];
        $jobs['address'] = $request['address'];
        $jobs['deadline_job'] = $request['deadline_job'];
        $jobs['amount_people'] = $request['amount_people'];
        $jobs['formality'] = $request['formality'];
        $jobs['experience'] = $request['experience'];
        $jobs['gender'] = $request['gender'];
        $jobs['job_desc'] = $request['job_desc'];
        $jobs['salary_type'] = $request['salary_type'];
        $jobs['salary_from'] = $request['salary_from'];
        $jobs['salary_to'] = $request['salary_to'];
        $jobs['interest'] = $request['interest'];
        $jobs['request'] = $request['job_desc'];
//        $jobs['id_language'] = $request['id_language'];
        $jobs['email_get_cv'] = $request['email_get_cv'];
        $jobs['status'] = 0;
        $jobs['slug_name'] = 0;

        $jobs->save();
        return redirect()->route('job.get.list')->with('thanhcong', 'Thêm việc làm thành công');

    }

    public function getEditJob($id){
        $jobs = Job::find($id);
        $zones = Zones::all();
        $job_categories = JobCategorie::all();
        $profile = CompanyUser::all('id');
//        $language = Language::all();
        return view('pages.jobs.edit-job',['zones'=>$zones,'job_categories'=> $job_categories,'profile'=>$profile,'jobs'=>$jobs]);

    }
    public function postEditJob(Request $request,$id){
        $jobs = Job::find($id);
        $this->validate($request,[
            'job_name' => 'bail|required',
            'address' => 'required',
            'deadline_job' => 'required',
            'amount_people' => 'bail|required|integer',
            'formality' => 'required',
            'gender' => 'required',
            'job_desc' => 'required',
//            'salary_type' => 'required',
////            'salary_from' => 'required|between:0.5,99',
////            'salary_from' => 'required',
//            'salary_to' => 'accepted',
            'interest' => 'required',
            'request' => 'required',
            'email_get_cv' => 'required|email',

        ],[
            'job_name.required' => 'Vui lòng điền tên công việc',
//            'company_user_id.required' => 'Điền vào chỗ trống',
//            'job_category_id.required' => 'Điền vào chỗ trống',
//            'zone_id.required' => 'Điền vào chỗ trống',
            'address.required' => 'Vui lòng điền địa chỉ làm việc',
            'deadline_job.required' => 'Vui lòng thêm thời hạn nộp hồ sơ',
            'amount_people.required' => 'Vui lòng điền số lượng người cần tuyển',
            'formality.required' => 'Vui lòng chọn hình thức làm việc',
            'experience.required' => 'Vui lòng chọn yêu cầu kinh nghiệm',
            'gender.required' => 'Vui lòng chọn giới tính',
            'job_desc.required' => 'Không được để trống phần mô tả công việc',
//            'salary_type.required' => 'Chọn hình thức lương',
//            'salary_from.required' => 'Vui lòng chọn mức lương',
////            'salary_from.between' => 'Mức lương tối thiểu là 0.5 triệu và tối đa là 99 triệu',
////            'salary_from.to.accepted85' => 'Mức Lương Trong Khoảng Không Hợp Lý Vui lòng điền số khác',

            'interest.required' => 'Vui lòng điền các quyền lợi khi làm việc tại công ty',
            'request.required' => 'Vui lòng điền các yêu cầu của công ty đối với ứng viên',
            'email_get_cv.required' => 'Điền email nhận CV',
            'email_get_cv.email' => 'Vui lòng điền đúng định dạng email',
        ]);

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $name = $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                $AvatarName = "images_" . Str::random(4). $name;
                if (file_exists($jobs['images'])) {
                    unlink($jobs['images']);
                    $jobs['images'] = "";
                }
                $file->move('images/images-job/', $AvatarName);
                $urlAvatar = 'images/images-job/' . $AvatarName;
                $jobs['images'] = $urlAvatar;
            } else {
                return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
            }
        }
        $jobs['job_name'] = $request['job_name'];
        $jobs['company_user_id'] = $request['company_user_id'];
        $jobs['job_category_id'] = $request['job_category_id'];
        $jobs['id_zone'] = $request['id_zone'];
        $jobs['address'] = $request['address'];
        $jobs['deadline_job'] = $request['deadline_job'];
        $jobs['amount_people'] = $request['amount_people'];
        $jobs['formality'] = $request['formality'];
        $jobs['experience'] = $request['experience'];
        $jobs['gender'] = $request['gender'];
        $jobs['job_desc'] = $request['job_desc'];
        $jobs['salary_type'] = $request['salary_type'];
        $jobs['salary_from'] = $request['salary_from'];
        $jobs['salary_to'] = $request['salary_to'];
        $jobs['interest'] = $request['interest'];
        $jobs['request'] = $request['job_desc'];
        $jobs['email_get_cv'] = $request['email_get_cv'];
//        $jobs['id_language'] = $request['id_language'];
        $jobs['status'] = 0;
        $jobs['slug_name'] = 0;
        $jobs->save();
        return redirect()->route('job.get.list');
    }
    public function getDeleteJob($id){
        $jobs = Job::find($id);
        $jobs->delete();
        return redirect()->route('job.get.list')->with('thanhcong', 'Bạn đã xóa việc làm thành công');
    }
    public function getListUser(){
        $company =Auth::guard('company_user')->user();
        $zones = Zones::all();
        $jobs = Job::all()->where('company_user_id', $company->id);
        $users = User::all();
        $recruitment = Recruitment::all()->where('company_id',$company->id);
        return view('pages.list-user.list-user',['recruitment'=>$recruitment,'company'=>$company,'zones'=>$zones,'jobs'=>$jobs,'users'=>$users]);
    }
    public function getPricing(){

            return view('pages.pricing.pricing');
    }
    public function getContact(){
        $websetting = WebSetting::all();
        return view('pages.contact.contact',['websetting'=>$websetting]);
    }
    public function getIndex2(){

        return view('pages.employer.employer');
    }
    public function getUserpass(){
        $employer = Auth::company_user();
        return view('pages.employer.changepass',['employer'=>$employer]);
    }
//    public function postUserpass(Request $request){
//        $employer = Auth::company_user();
//
//        $validatedData =Validator::make($request->all(),[
//
//            'password'=>'bail|required',
//            'newpass'=>'bail|required',
//            'repass_confirmation'=>'bail|required|same:newpass',
//
//
//        ],[
//
//
//
//                'password.required'=>"Nhập mật khẩu cũ của tài khoản",
//                'newpass.required'=>"Nhập mật khẩu mới!",
//                'repass_confirmation.required'=>"Vui lòng nhập lại mật khẩu",
//                'repass_confirmation.same'=>"Mật khẩu không trùng khớp ",
//
//
//            ]
//        );
//        if ($validatedData->fails()) {
//            return View('pages.employer.changepass',['employer'=>$employer])->withErrors($validatedData);
//        }
//        $employer = Auth::company_user();
//        if(password_verify($request->password, $employer['password']) == false){
//            $mess="Mật khẩu không trùng khớp";
//            return view('pages.employer.changepass', compact('mess'),['employer'=>$employer]);
//        }
//        //mã hóa mật khẩu mới
//
//
//        $employer = Auth::company_user();
//
//        $employer->password = bcrypt($request->get('newpass'));
//
//        $employer->save();
//
//
//        return redirect()->route('changepass')->with('success',"Đổi mật khẩu thành công !");
//    }
 public function postContact(Request $request){
        $this->validate($request,[
            'fullname' => 'required|min:2|max:30',
            'email' => 'required|unique:contacts|email',
            'title' => 'required|max:50',
            'message'=>'required|max:500|min:25',

        ],[
            'fullname.required' => 'Vui lòng điền đầy đủ họ và tên',
            'fullname.min'=>'Tên không dưới 2 ký tự',
            'full.name.max'=>'Tên không được vượt quá 30 ký tự',
            'email.required' => 'Nhập địa chỉ email',
            'email.unique' =>'Email này đã được sử dụng để liên hệ',
            'email.email' =>'Email không hợp lệ',
            'title.required' => 'Vui lòng nhập tiêu đề của bạn',
            'title.max' => 'Tiêu đề nội dung không dài quá 50 ký tự',
            'message.required'=> 'Vui lòng điền nội dung cần gửi đi',
            'message.max' =>'Nội dung gửi vượt quá 500 ký tự',
            'message.min'=>'Nội dung không được ngắn hơn 25 ký tự',
        ]);
        $contact = new Contact;
        $contact['name'] = $request['fullname'];
        $contact['email'] = $request['email'];
        $contact['title'] = $request['title'];
        $contact['message'] = $request['message'];
        $contact['status'] = $request['status'];
        $contact->save();
     return redirect()->route('contact.get.form')->with('done','Đã gửi thành công ! Chúng tôi sẽ xem xét và phải hồi lại vấn đề của bạn.');
 }
 public function getSearchUser(){

    return view('pages.employer.searchuser');
 }
 public function DetailCompany(){
        $company = Auth::guard('company_user')->user();
        $zones = Zones::all();
        return view('pages.company_users.view-company',['company'=>$company,'zones'=>$zones]);
  }
  public function DetailListUser($id){

    $userapply = Recruitment::All()->where('job_id',$id);
    $users  = User::all();
    return view('pages.list-user.detail-list-user',['userapply'=>$userapply,'users'=>$users]);

}


}
