<?php namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\FrontendController;
use Input;
use Redirect;
use Request;
use URL;
use Html;
use View;
use DB;
use Paginator;
use LaravelLocalization;
use Route;

class HomepageController extends FrontendController
{
    /************************************************************************
    *Home page
    /************************************************************************/
    public function index() 
    {
        $locale = LaravelLocalization::getCurrentLocale();

        $setting = DB::table('setting')
                            ->where('is_deleted', ACTIVE)
                            ->find(1);

        $recruits = DB::table('recruit')
                            ->where('is_deleted', ACTIVE)
                            ->where('locale', $locale)
                            ->where('publish', PUBLISH)
                            ->orderBy('order', 'desc')
                            ->get();
    	return view('frontend.homepage', compact('recruits', 'setting'));
    }

}
