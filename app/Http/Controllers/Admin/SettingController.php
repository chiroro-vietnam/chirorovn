<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\BackendController;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Models\Signature;
use App\Http\Models\Company;
use Html;
use URL;
use Form;
use View;
use Request;
use Validator;
use Pagination;
use Input;
use Lang;
use LaravelLocalization;
use Redirect;
use DB;
use Session;


class SettingController extends BackendController
{ 
    public function __construct()
    {
        parent::__construct();
        // $this->middleware('auth');
    }
    
    public function getSignature()
    {
        $locale = LaravelLocalization::getCurrentLocale();
        $data = Signature::getSignByLocale($locale);
        return view('admin.setting.signature', compact('data'));
    }

    public function postSignatute()
    {

    }

    public function getCompany()
    {
        // $locale = LaravelLocalization::getCurrentLocale();
        // $data = Signature::getSignByLocale($locale);
        return view('admin.setting.company');
    }

    public function postCompany()
    {

    }

}