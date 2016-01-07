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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(array('prefix' => LaravelLocalization::getCurrentLocale(), 'before' => array('localization', 'before')), function () {

    Session::put('my.locale', LaravelLocalization::getCurrentLocale());

    //Frontend
    Route::group(array('namespace' => 'Frontend'), function () {
        //homepage
        Route::get('/', ['as' => 'frontend.homepage', 'uses' => 'HomepageController@index']);
        
    });

});


Route::group(array('prefix' => LaravelLocalization::getCurrentLocale()), function () {
    //login and logout
    // Route::get('manage/login', ['as' => 'admin.auth.login', 'uses' => 'Admin\AdminController@getLogin']);
    // Route::post('manage/login', ['as' => 'admin.auth.login', 'uses' => 'Admin\AdminController@postLogin']);
    // Route::get('manage/logout', ['as' => 'admin.auth.logout', 'uses' => 'Admin\AdminController@logout']);
    //Admin
    Route::group(array('namespace' => 'Admin'), function () {
        
        Route::get('admin/dashboard', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@index']);
        Route::get('admin/account', ['as' => 'admin.users.list', 'uses' => 'UserController@index']);
        Route::get('admin/account/add', ['as' => 'admin.users.add', 'uses' => 'UserController@getAdd']);
        Route::post('admin/account/add', ['as' => 'admin.users.add', 'uses' => 'UserController@postAdd']);
        Route::get('admin/account/edit/{id}', ['as' => 'admin.users.edit', 'uses' => 'UserController@getEdit']);
        Route::post('admin/account/edit/{id}', ['as' => 'admin.users.edit', 'uses' => 'UserController@postEdit']);
        Route::post('admin/account/del/{id}', ['as' => 'admin.users.del', 'uses' => 'UserController@delUser']);

        //Setting signature
        Route::get('admin/setting/signature', ['as' => 'admin.setting.signature', 'uses' => 'SettingController@getSignature']);
        Route::post('admin/setting/signature', ['as' => 'admin.setting.signature', 'uses' => 'SettingController@postSignature']);
        //Setting company
        Route::get('admin/setting/company', ['as' => 'admin.setting.company', 'uses' => 'SettingController@getCompany']);
        Route::post('admin/setting/company', ['as' => 'admin.setting.company', 'uses' => 'SettingController@postCompany']);

        //Inquiry
        Route::get('admin/inquiry', ['as' => 'admin.inquiry.index', 'uses' => 'InquiryController@index']);
        Route::post('admin/inquiry/{id}', ['as' => 'admin.inquiry.read', 'uses' => 'InquiryController@reader']);
        Route::get('admin/inquiry/detail/{id}', ['as' => 'admin.inquiry.detail', 'uses' => 'InquiryController@getDetail']);

    });

    Route::get('auth/login', function () {
            return redirect()->route('admin.auth.login');
        });

    Route::get('admin/login', function () {
            return redirect()->route('admin.auth.login');
        });
    Route::get('admin', function () {
            return redirect()->route('admin.auth.login');
        });

});