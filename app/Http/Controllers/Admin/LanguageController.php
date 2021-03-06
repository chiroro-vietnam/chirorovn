<?php namespace Fully\Http\Controllers\Admin;

use Fully\Http\Controllers\Controller;
use Redirect;
use View;
use Input;
use Config;

use LaravelLocalization;


class LanguageController extends Controller {

    public function setLocale($language) {

        var_dump($language);

        var_dump(Config::get('app.locale'));
        LaravelLocalization::setLocale($language);
        var_dump(Config::get('app.locale'));
    }
}