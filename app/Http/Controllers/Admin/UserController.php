<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\BackendController;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Models\User;
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



class UserController extends BackendController
{ 
    public function __construct()
    {
        parent::__construct();
        // $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::getUserAll();
        return view('admin.users.list', compact('users'));
    }

    //get add user
    public function getAdd(){
    	return view('admin.users.add');
    }

    //post add user
    public function postAdd(){
    	
    }

    //get edit user
    public function getEdit($id){

        // echo "<pre>";
        // print_r( Lang::get('validation.account'));exit;

        $data = User::getUserById($id);
    	return view('admin.users.edit', compact('data'));
    }

    //post edit user
    public function postEdit($id){        

        $data_kana = array(
                'username'      => Input::get('username'),
                'email'         => Input::get('email'),
                'password'      => Input::get('password'),
                'name'          => Input::get('name'),
                'furigana'      => Input::get('furigana'),
                'status'        => Input::get('status'),
                'last_login'    => date('Y-m-d H:i:s')
            );

         $data = array(
                'username'      => Input::get('username'),
                'email'         => Input::get('email'),
                'password'      => Input::get('password'),
                'name'          => Input::get('name'),               
                'status'        => Input::get('status'),
                'last_login'    => date('Y-m-d H:i:s')
            );

        if(LaravelLocalization::getCurrentLocale() == 'vi')
        {
            $massages = User::$vi_msg;
        }elseif(LaravelLocalization::getCurrentLocale() == 'en'){
            $massages = User::$en_msg;
        }else{
            $massages = User::$ja_msg;
            $inputData = $data_kana;
        }

        $validator = Validator::make(Input::all(), User::$rules, $massages);
        if($validator->passes()){
            DB::table('users')
                    ->where('id', $id)
                    ->update($inputData);

            Session::flash('success', 'User updated successful');
            return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/account');
        }

        return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/account/edit/'.$id)
                                ->withErrors($validator)
                                ->withInput();
       
    }

    //post delete user
    public function delUser($id){
    	
    }

}

