<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$languages = LaravelLocalization::getSupportedLocales();
foreach($languages as $language => $values) {
    $supportedLocales[] = $language;
}

$locale = Request::segment(1);
if(in_array($locale, $supportedLocales)) {
    LaravelLocalization::setLocale($locale);
    App::setLocale($locale);
}

Route::get('/', function () {

    return Redirect::to(LaravelLocalization::getCurrentLocale(), 302);
});


Route::group(array('prefix' => LaravelLocalization::getCurrentLocale(), 'before' => array('localization', 'before')), function () {

    Session::put('my.locale', LaravelLocalization::getCurrentLocale());

    //Frontend
    Route::group(array('namespace' => 'Frontend'), function () {
        //homepage
        Route::get('/', ['as' => 'frontend.homepage', 'uses' => 'HomepageController@index']);

        Route::get('inquiry', ['as' => 'frontend.inquiry', 'uses' => 'InquiryController@getInput']);
        Route::post('inquiry', ['as' => 'frontend.inquiry.input', 'uses' => 'InquiryController@postInput']);
        Route::get('inquiry/confirm', ['as' => 'frontend.inquiry.confirm', 'uses' => 'InquiryController@getConfirm']);
        Route::post('inquiry/confirm', ['as' => 'frontend.inquiry.confirm', 'uses' => 'InquiryController@postConfirm']);
        Route::get('inquiry/complete', ['as' => 'frontend.inquiry.complete', 'uses' => 'InquiryController@getComplete']);
        
    });

});


Route::group(array('prefix' => LaravelLocalization::getCurrentLocale()), function () {
    //login and logout
     Route::get('auth/login', ['as' => 'admin.auth.login', 'uses' => 'Admin\UserController@getLogin']);
     Route::post('auth/login', ['as' => 'admin.auth.login', 'uses' => 'Admin\UserController@postLogin']);
     Route::get('auth/logout', ['as' => 'admin.auth.logout', 'uses' => 'Admin\UserController@logout']);
        
    //Admin
    Route::group(array('namespace' => 'Admin'), function () {       
        Route::get('admin/dashboard', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@dashboard']);
        Route::get('admin/account', ['as' => 'admin.users.list', 'uses' => 'UserController@index']);
        Route::get('admin/account/add', ['as' => 'admin.users.add', 'uses' => 'UserController@getAdd']);
        Route::post('admin/account/add', ['as' => 'admin.users.add', 'uses' => 'UserController@postAdd']);
        Route::get('admin/account/edit/{id}', ['as' => 'admin.users.edit', 'uses' => 'UserController@getEdit']);
        Route::post('admin/account/edit/{id}', ['as' => 'admin.users.edit', 'uses' => 'UserController@postEdit']);
        Route::get('admin/account/del/{id}', ['as' => 'admin.users.del', 'uses' => 'UserController@delUser']);

        //Setting signature
        Route::get('admin/setting/signature', ['as' => 'admin.setting.signature', 'uses' => 'SettingController@getSignature']);
        Route::post('admin/setting/signature', ['as' => 'admin.setting.signature', 'uses' => 'SettingController@postSignatute']);
        //Setting company
        Route::get('admin/setting/company', ['as' => 'admin.setting.company', 'uses' => 'SettingController@getCompany']);
        Route::post('admin/setting/company', ['as' => 'admin.setting.company', 'uses' => 'SettingController@postCompany']);

        //Inquiry
        Route::get('admin/inquiry', ['as' => 'admin.inquiry.index', 'uses' => 'InquiryController@index']);
        Route::post('admin/inquiry/{id}', ['as' => 'admin.inquiry.read', 'uses' => 'InquiryController@reader']);
        Route::get('admin/inquiry/detail/{id}', ['as' => 'admin.inquiry.detail', 'uses' => 'InquiryController@getDetail']);
        Route::get('admin/inquiry/reader/{id}', ['as' => 'admin.inquiry.reader', 'uses' => 'InquiryController@reader']);
        Route::get('admin/inquiry/delete/{id}', ['as' => 'admin.inquiry.del', 'uses' => 'InquiryController@delete']);

        //Recruit
        Route::get('admin/recruit', ['as' => 'admin.recruit.index', 'uses' => 'RecruitController@index']);
        Route::get('admin/recruit/add', ['as' => 'admin.recruit.add', 'uses' => 'RecruitController@getAdd']);
        Route::post('admin/recruit/add', ['as' => 'admin.recruit.add', 'uses' => 'RecruitController@postAdd']);
        Route::get('admin/recruit/edit/{id}', ['as' => 'admin.recruit.edit', 'uses' => 'RecruitController@getEdit']);
        Route::post('admin/recruit/edit/{id}', ['as' => 'admin.recruit.edit', 'uses' => 'RecruitController@postEdit']);
        Route::get('admin/recruit/publish/{id}', ['as' => 'admin.recruit.publish', 'uses' => 'RecruitController@publish']);
        Route::get('admin/recruit/unpublish/{id}', ['as' => 'admin.recruit.unpublish', 'uses' => 'RecruitController@unpublish']);
        Route::get('admin/recruit/delete/{id}', ['as' => 'admin.recruit.del', 'uses' => 'RecruitController@delete']);

    });    

});

Route::get('auth/login', function () {
        return redirect()->to('en/auth/login');
    });

Route::get('admin/login', function () {
        return redirect()->to('en/auth/login');
    });
Route::get('admin', function () {
        return redirect()->to('en/auth/login');
    });
Route::get('admin/logout', function () {
        return redirect()->to('en/auth/logout');
    });

// //prefix locale
// Route::get(LaravelLocalization::getCurrentLocale().'/auth/login', function () {
//         return redirect()->to(LaravelLocalization::getCurrentLocale().'/auth/login');
//     });

