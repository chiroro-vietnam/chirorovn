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
use File;
use Image;


class SettingController extends BackendController
{ 
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }
    
    public function getSignature()
    {
        $data = Signature::getSignByLocale();
        return view('admin.setting.signature', compact('data'));
    }

    public function postSignatute()
    {
        $locale = LaravelLocalization::getCurrentLocale();
        if($locale == 'ja'){
            $msg = Signature::$ja_msg;
        }elseif ($locale == 'vi') {
            $msg = Signature::$vi_msg;
        }else{
            $msg = Signature::$en_msg;
        }
        $input = array();
        $data = array();

        $input['content']       = Input::get('content');
        $input['locale']        = $locale;        

        $validator = Validator::make($input, Signature::$rules, $msg);
        if($validator->passes()){
            $id = Input::get('id');
            if($id == null){
                $input['created_at']    = date('Y-m-d : H:i:s');
                DB::table('signature')
                         ->insert($input); 
            }else{
                $input['updated_at']    = date('Y-m-d : H:i:s');
                DB::table('signature')
                         ->where('id', $id)
                         ->update($input);
            }

            Session::flash('success', 'Signature updated successful');
            return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/setting/signature');
        } 
        return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/setting/signature')
                                ->withErrors($validator)
                                ->withInput();
    }

    public function getCompany()
    {
        // $locale = LaravelLocalization::getCurrentLocale();
        $data = Company::getSetting();
        return view('admin.setting.company', compact('data'));
    }

    public function postCompany()
    {
        $locale = LaravelLocalization::getCurrentLocale();
        if($locale == 'ja'){
            $msg = Company::$ja_msg;
        }elseif ($locale == 'vi') {
            $msg = Company::$vi_msg;
        }else{
            $msg = Company::$en_msg;
        }
    

        $validator = Validator::make(Input::all(), Company::$rules, $msg);

        if($validator->passes()){
            $input_data = array();
            $input_data['title'] = Input::get('title');
            $input_data['meta_key'] = strtolower(Input::get('meta_key')); 
            $input_data['meta_desc'] = Input::get('meta_desc'); 
            $input_data['email'] = Input::get('email');
        
            if(!empty(Input::file('title_logo'))){
                $data_title = DB::table('setting')->find(1);
                if(!empty($data_title->title_logo)){
                    $fileDel = $data_title->title_logo;
                    if(File::isFile($fileDel)){
                        \File::delete($fileDel);
                    }
                }
                $extension = Input::file('title_logo')->getClientOriginalExtension();
                $file_name = 'favicon'.'.png';
                Image::make(Input::file('title_logo')->getRealPath())->resize(WIDTH_TITLE_LOGO, HEIGHT_TITLE_LOGO)->save(public_path().'/favicon/'.$file_name);
                $input_data['title_logo'] = '/favicon/'.$file_name;
            }

            if(!empty(Input::file('site_logo'))){
                $data_site = DB::table('setting')->find(1);
                if(!empty($data_site->site_logo)){
                    $fileDel = $data_site->site_logo;
                    if(File::isFile($fileDel)){
                        \File::delete($fileDel);
                    }
                }

                $extension1 = Input::file('site_logo')->getClientOriginalExtension();
                $fileName = 'logo_site'.'.png';               
                Image::make(Input::file('site_logo')->getRealPath())->resize(WIDTH_SITE_LOGO, HEIGHT_SITE_LOGO)->save(public_path().'/logo/'.$fileName);
                $input_data['site_logo'] = '/logo/'.$fileName;
            }
            
            $id = Input::get('id');
            if($id == null){
                $input_data['created_at']    = date('Y-m-d : H:i:s');
                DB::table('setting')
                         ->insert($input_data); 
            }else{
                $input_data['updated_at']    = date('Y-m-d : H:i:s');
                DB::table('setting')
                         ->where('id', $id)
                         ->update($input_data);
            }

            Session::flash('success', 'Company updated successful');
            return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/setting/company');
        } 
        return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/setting/company')
                                ->withErrors($validator)
                                ->withInput();

    }

}