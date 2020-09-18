<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('','HomeController@getList' );
Route::get('/index','HomeController@getList')->name('home');



Route::get('detail/{id}','HomeController@getPost')->name('detail');

// Route::post('detail/save/{id}','HomeController@savePost')->name('savepost');

// Route::delete('detail/{id}/delete','HomeController@unsavePost')->name('unsavepost');

Route::get('/brand','HomeController@getlistCompany')->name('companys');
Route::get('brand/{id}','HomeController@getCompany')->name('detailc');
Route::get('brand/{id}/danhgia','HomeController@getRate')->name('rating');
Route::post('brand/{id}/danhgia/save','HomeController@postRate')->name('post-rate');

Route::post('/search', 'HomeController@search')->name('search');
Route::get('/all-jobs','HomeController@getAllJob')->name('get.all.jobs');
    // Route::post('/search', 'HomeController@searchFullText');


//Route::group(['prefix' => 'users' ],function(){
//    Route::get('/signin-user','UserController@signin_user');
//
//
//
//});

//user
Route::get('/signin-user','UserController@getSignin')->name('signin-user');
Route::post('/login-user','UserController@postSignin')->name('login-user');
Route::get('/logout','UserController@LogoutUser')->name('logout');

Route::get('/add-signup','UserController@add_signup')->name('add-signup');
Route::post('/save-signup','UserController@save_user')->name('save-signup');

Route::get('user/profile','UserController@getUser')->name('userprofile');
Route::get('user/edit-profile','UserController@getUserprofile')->name('edit-profile');
Route::post('user/post-edit','UserController@postEdit')->name('post-edit');
Route::get('user/change-pass','UserController@getUserpass')->name('changepass');
Route::post('user/post-userpass','UserController@postUserpass')->name('post-userpass');
Route::get('user/bookmark','UserController@getlistSavejob')->name('userbookmark');
Route::get('detail/{id}/savejob/','UserController@saveJob')->name('savejob');
Route::get('detail/{id}/unsavejob/','UserController@unsaveJob')->name('unsavejob');

Route::get('user/apllyjob','UserController@getlistApplyjob')->name('userapplyjob');
Route::get('detail/{id}/apply/','UserController@applyJob')->name('applyjob');
Route::get('detail/{id}/unapply/','UserController@unapplyJob')->name('unapplyjob');







//company_user//
Route::get('/pricing','CompanyUserController@getPricing')->name('pricing.get.list');
Route::get('/contact','CompanyUserController@getContact')->name('contact.get.form');
Route::post('/contact','CompanyUserController@postContact')->name('contact.post.form');


Route::get('/2','CompanyUserController@getIndex2')->name('company.get.index2');
Route::group(['prefix'=> 'company'],function (){
    Route::get('/','CompanyUserController@index')->name('company.get.index');
    Route::get('/edit-profile-company/{id}','CompanyUserController@getEditProfile')->name('company.get.editprofile');
    Route::post('/edit-profile-company/{id}','CompanyUserController@postEditProfile')->name('company.post.editprofile');
    Route::get('/change-pass-company','CompanyUserController@getCompanypass')->name('company.get.changepass');
    Route::post('/change-pass-company','CompanyUserController@postCompanypass')->name('company.post.changepass');

    //job//
    Route::group(['prefix'=> 'job'],function (){
        Route::get('/','CompanyUserController@getJob')->name('job.get.list');

        Route::get('/add-job','CompanyUserController@getAddJob')->name('job.get.add');
        Route::post('/add-job','CompanyUserController@postAddJob')->name('job.post.add');

        Route::get('/edit-job/{id}','CompanyUserController@getEditJob')->name('job.get.edit');
        Route::post('/edit-job/{id}','CompanyUserController@postEditJob')->name('job.post.edit');

        Route::get('/delete-job/{id}','CompanyUserController@getDeleteJob')->name('job.get.delete');
    });
    //ungvien//
    Route::group(['prefix'=> 'user-apply'],function (){
        Route::get('/','CompanyUserController@getListUser')->name('user.get.list');

        // Route::get('/delete-user/{id}','CompanyUserController@getDeleteUser')->name('user.get.delete');
    });

});
Route::get('/tim-kiem-ung-vien','CompanyUserController@getSearchUser')->name('company.get.searchuser');
Route::get('/detail-company','CompanyUserController@DetailCompany')->name('company.get.detail');
Route::get('/detail-list-user/{id}','CompanyUserController@DetailListUser')->name('company.get.detaillistuser');
Route::get('/delete-user/{id}','CompanyUserController@getDeleteUser')->name('company.get.deleteuser');



//Employer
Route::get('/signin-employer','CompanyUserController@getSigninEmployer')->name('signin-employer');
Route::post('/login-employer','CompanyUserController@postSigninEmployer')->name('login-employer');
Route::get('/employer','CompanyUserController@getEmployer')->name('employer');
Route::get('/logout-employer','CompanyUserController@LogoutEmployer')->name('logout-employer');

Route::get('/add-employer','CompanyUserController@add_employer')->name('add-employer');
Route::post('/save-employer','CompanyUserController@save_employer')->name('save-employer');


Route::get('payment', 'PaymentController@index');
Route::post('charge', 'PaymentController@charge')->name('charge');
Route::get('paymentsuccess', 'PaymentController@payment_success');
Route::get('paymenterror', 'PaymentController@payment_error');

//Forgotpassword
Route::get('forgot-password','ForgotPasswordController@getforgotPassword')->name('forgot-password');
Route::post('forgot-password','ForgotPasswordController@senCodeResetPassword');
Route::get('password-reset','ForgotPasswordController@resetPassword')->name('password-reset');
Route::post('password-reset','ForgotPasswordController@saveResetPassword');

//Forgotpassword Employer
Route::get('forgot-password-employer','ForgotPasswordController@getforgotPasswordEmployer')->name('forgot-password-employer');
Route::post('forgot-password-employer','ForgotPasswordController@senCodeResetPasswordEmployer');
Route::get('password-reset-employer','ForgotPasswordController@resetPasswordEmployer')->name('password-reset-employer');
Route::post('password-reset-employer','ForgotPasswordController@saveResetPasswordEmployer');
