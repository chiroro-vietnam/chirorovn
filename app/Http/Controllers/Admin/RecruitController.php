<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\BackendController;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Models\Recruit;

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


class RecruitController extends BackendController
{ 
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }
    
    public function index()
    {
        $locale = DB::table('language')
                            ->where('is_deleted', ACTIVE)
                            ->lists('name', 'locale');
        $recruits = Recruit::getRecruit();
        return view('admin.recruit.index', compact('recruits', 'locale'));
    }

    //get add recruit
    public function getAdd(){
        $max_order = DB::table('recruit')->max('order');
        $order = $max_order + 1;
        return view('admin.recruit.add', compact('order'));
    }

    //post add recruit
    public function postAdd(){
        $locale = LaravelLocalization::getCurrentLocale();
        $input = array();
        $input['position']      = Input::get('position');
        $input['content']       = Input::get('content');
        $input['locale']        = $locale;
        $input['order']         = Input::get('order');
        $input['publish']       = Input::get('publish');
        $input['is_deleted']    = ACTIVE;
        $input['created_at']    = date('Y-m-d : H:i:s');
        $input['updated_at']    = date('Y-m-d : H:i:s');

        if($locale == 'ja'){
            $msg = Recruit::$ja_msg;
        }elseif ($locale == 'vi') {
            $msg = Recruit::$vi_msg;
        }else{
            $msg = Recruit::$en_msg;
        }

        $validator = Validator::make(Input::all(), Recruit::$rules, $msg);
        if($validator->passes()){
            DB::table('recruit')
                    ->insert($input);

            Session::flash('success', trans('common.recruit_add_success'));
            return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/recruit');
        }

        return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/recruit/add')
                                ->withErrors($validator)
                                ->withInput();

    }

    //get edit recruit
    public function getEdit($id){
        $recruit = Recruit::getRecruitById($id);
        return view('admin.recruit.edit', compact('recruit'));
    }

    //post edit recruit
    public function postEdit($id){
        $locale = LaravelLocalization::getCurrentLocale();
        $input = array();
        $input['position']      = Input::get('position');
        $input['content']       = Input::get('content');
        $input['locale']        = $locale;
        $input['order']         = Input::get('order');
        $input['publish']       = Input::get('publish');
        $input['is_deleted']    = ACTIVE;
        $input['updated_at']    = date('Y-m-d : H:i:s');

        if($locale == 'ja'){
            $msg = Recruit::$ja_msg;
        }elseif ($locale == 'vi') {
            $msg = Recruit::$vi_msg;
        }else{
            $msg = Recruit::$en_msg;
        }

        $validator = Validator::make(Input::all(), Recruit::$rules, $msg);
        if($validator->passes()){
            DB::table('recruit')
                    ->where('id', $id)
                    ->update($input);

            Session::flash('success', trans('common.recruit_edit_success'));
            return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/recruit');
        }

        return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/recruit/edit/'.$id)
                                ->withErrors($validator)
                                ->withInput();
    }

    public function delete($id){
        DB::table('recruit')
                    ->where('id', $id)
                    ->update(array('is_deleted' => INACTIVE));
        Session::flash('success', trans('common.recruit_del_success'));
        return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/recruit');
    }

    public function publish($id)
    {
        DB::table('recruit')
                    ->where('id', $id)
                    ->update(array('publish' => 1));  
        return redirect()->route('admin.recruit.index');  
    }

    public function unpublish($id)
    {
        DB::table('recruit')
                    ->where('id', $id)
                    ->update(array('publish' => 0));  
        return redirect()->route('admin.recruit.index');
    }
}