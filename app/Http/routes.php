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

        Route::get('admin/signature', ['as' => 'admin.signature.index', 'uses' => 'SignatureController@getSignature']);
        Route::post('admin/signature', ['as' => 'admin.signature.index', 'uses' => 'SignatureController@postSignature']);

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