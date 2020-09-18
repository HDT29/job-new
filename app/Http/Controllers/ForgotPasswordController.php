<?php

namespace App\Http\Controllers;
use App\Http\Requests\ForgotPassword\RequestPassword;
use App\Http\Requests\ForgotPassword\RequestResetPassword;
use App\Http\Requests\ForgotPassword\RequestPasswordEmployer;
use Carbon\Carbon;
use App\User;
use App\Models\CompanyUser;
use Illuminate\Http\Request;
use Mail;
session_start();
class ForgotPasswordController extends Controller
{
    public function getforgotpassword()
    {
        return view('pages.users.ForgotPassword');
    }

    public function senCodeResetPassword(RequestPassword $request)
    {
        $email = $request->email;
        $checkUser = User::where('email', $email)->first();
        if (!$checkUser) {
            return redirect()->back();
        }
        $code = bcrypt(md5(time() . $email));
        $checkUser->code = $code;
        $checkUser->time_code = Carbon::now();
        $checkUser->save();

        $url = route('password-reset', ['code' => $checkUser->code, 'email' => $email]);
        $date = [
            'route' => $url
        ];

        Mail::send('pages.email.reset_password', $date, function ($message) use ($email) {
            $message->to($email, "Reset Password")->subject('Lấy lại mật khẩu!');
        });
        return redirect()->back()->with(['success' => 'Link lay lai mat khau da dc gui vao mail cua ban']);

    }

    public function resetPassword(Request $request)
    {
        $code = $request->code;
        $email = $request->email;

        $checkUser = User::where([
            'code' => $code,
            'email' => $email,

        ])->first();
        if (!$checkUser) {
            return redirect('/')->with('danger', 'Xin lỗi đường dẫn lấy lại mật khẩu không  vui lòng thử lại sau');
        }


        return view('pages.users.resetpassword');
    }

    public function saveResetPassword(RequestResetPassword $request)
    {
        if ($request->password) {

            $code = $request->code;
            $email = $request->email;

            $checkUser = User::where([
                'code' => $code,
                'email' => $email

            ])->first();

            if (!$checkUser) {
                return redirect()->back()->with(['danger' => 'Xin lỗi đường dẫn lấy lại mật khẩu không  vui lòng thử lại sau']);
            }
            $checkUser->password = bcrypt($request->password);
            $checkUser->save();

            return redirect()->route('signin-user')->with(['success' => 'Mật khẩu đã được đổi thành công ']);

        }
    }


    //Company
    public function getforgotPasswordEmployer()
    {
        return view('pages.employer.ForgotPasswordEmployer');
    }

    public function senCodeResetPasswordEmployer(RequestPasswordEmployer $request)
    {
        $email = $request->email;
        $checkUser = CompanyUser::where('email', $email)->first();
        if (!$checkUser) {
            return redirect()->back();
        }
        $code = bcrypt(md5(time() . $email));
        $checkUser->code = $code;
        $checkUser->time_code = Carbon::now();
        $checkUser->save();

        $url = route('password-reset-employer', ['code' => $checkUser->code, 'email' => $email]);
        $date = [
            'route' => $url
        ];

        Mail::send('pages.email.reset_password', $date, function ($message) use ($email) {
            $message->to($email, "Reset Password")->subject('Lấy lại mật khẩu!');
        });
        return redirect()->back()->with(['success' => 'Link lay lai mat khau da dc gui vao mail cua ban']);

    }

    public function resetPasswordEmployer(Request $request)
    {
        $code = $request->code;
        $email = $request->email;

        $checkUser = CompanyUser::where([
            'code' => $code,
            'email' => $email,

        ])->first();
        if (!$checkUser) {
            return redirect('/')->with('danger', 'Xin lỗi đường dẫn lấy lại mật khẩu không  vui lòng thử lại sau');
        }


        return view('pages.employer.resetpassword-Employer');
    }


    public function saveResetPasswordEmployer(RequestResetPassword $request)
    {
        if ($request->password) {

            $code = $request->code;
            $email = $request->email;

            $checkUser = CompanyUser::where([
                'code' => $code,
                'email' => $email

            ])->first();

            if (!$checkUser) {
                return redirect()->back()->with(['danger' => 'Xin lỗi đường dẫn lấy lại mật khẩu không  vui lòng thử lại sau']);
            }
            $checkUser->password = bcrypt($request->password);
            $checkUser->save();

            return redirect()->route('signin-employer')->with(['success' => 'Mật khẩu đã được đổi thành công ']);

        }

    }
}
