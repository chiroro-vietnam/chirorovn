<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\BackendController;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Models\Inquiry;

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


class InquiryController extends BackendController
{ 
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }
    
    public function index()
    {
        $lang = DB::table('language')
                    ->where('is_deleted', ACTIVE)
                    ->lists('name', 'locale');
        $data = Inquiry::getContact();
        return view('admin.inquiry.index', compact('data', 'lang'));
    }

    public function getDetail($id)
    {
         $lang = DB::table('language')
                    ->where('is_deleted', ACTIVE)
                    ->lists('name', 'locale');
        $data = Inquiry::getContactById($id);
        $this->reader($id);
        return view('admin.inquiry.detail', compact('data', 'lang'));
    }

    public function reader($id)
    {
        DB::table('contact')
                    ->where('id', $id)
                    ->update(array('reader' => 0));
    }  

    public function delete($id)
    {
        DB::table('contact')
                    ->where('id', $id)
                    ->update(array('is_deleted' => INACTIVE));
         Session::flash('success', trans('common.inquiry_del_succ_msg'));
        return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/inquiry');  
    }   

}