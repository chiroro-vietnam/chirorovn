<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\BackendController;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Acme\Repositories\UserRepository as UserRepository;
use Acme\Services\UserValidation as UserValidation;

use Acme\Interfaces\UserValidationInterface as UserValidationInterface;
use Acme\Interfaces\UserInterface as UserInterface;

use Illuminate\Database\Eloquent\Model;

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
use Auth;
use Hash;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class UserController extends BackendController
{ 
    public function __construct(Guard $auth, Registrar $registrar)
    {
        parent::__construct();
        $this->auth = $auth;
        $this->registrar = $registrar;
        $this->middleware('auth', ['except' => array('getLogin', 'postLogin')]);

        $languages = LaravelLocalization::getSupportedLocales();
        foreach($languages as $language => $values) {
            $supportedLocales[] = $language;
        }
        $locale = Request::segment(1);
        if(in_array($locale, $supportedLocales)) {
            LaravelLocalization::setLocale($locale);
        }

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
    	$data_kana = array(
                'username'      => Input::get('username'),
                'email'         => Input::get('email'),
                'password'      => Hash::make(Request::input('password')),
                'full_name'          => Input::get('full_name'),
                'furigana'      => Input::get('furigana'),
                'status'        => Input::get('status'),
                'last_login'    => date('Y-m-d H:i:s'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            );

         $data = array(
                'username'      => Input::get('username'),
                'email'         => Input::get('email'),
                'password'      => Hash::make(Request::input('password')),
                'full_name'          => Input::get('full_name'),               
                'status'        => Input::get('status'),
                'last_login'    => date('Y-m-d H:i:s'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            );

        if(LaravelLocalization::getCurrentLocale() == 'vi')
        {
            $massages = User::$vi_msg;
            $inputData = $data;
        }elseif(LaravelLocalization::getCurrentLocale() == 'en'){
            $massages = User::$en_msg;
            $inputData = $data;
        }else{
            $massages = User::$ja_msg;
            $inputData = $data_kana;
        }

        $validator = Validator::make(Input::all(), User::$rules, $massages);
        if($validator->passes()){
            DB::table('users')
                    ->insert($inputData);

            Session::flash('success', trans('common.user_add_succ_msg'));
            return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/account');
        }

        return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/account/add/')
                                ->withErrors($validator)
                                ->withInput();
    }

    //get edit user
    public function getEdit($id){
        $data = User::getUserById($id);
    	return view('admin.users.edit', compact('data'));
    }

    //post edit user
    public function postEdit($id){
        $data = User::getUserById($id);
        $username   = $data->username;
        $email      = $data->email;
        $rls        = User::$rules;
        $rljp       = User::$ruleJp;

        if($username == Input::get('username')){
            unset($rls['username']);
            unset($rljp['username']);
        }

        if($email == Input::get('email')){
            unset($rls['email']);
            unset($rljp['email']);
        }

        if(Input::get('password') == null){
            unset($rls['password']);
            unset($rljp['password']);
        }

        if(Input::get('password') == null){
            $data_kana = array(
                'username'      => Input::get('username'),
                'email'         => Input::get('email'),              
                'full_name'     => Input::get('full_name'),
                'furigana'      => Input::get('furigana'),
                'status'        => Input::get('status'),
                'last_login'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            );

            $data = array(
                'username'      => Input::get('username'),
                'email'         => Input::get('email'),               
                'full_name'     => Input::get('full_name'),               
                'status'        => Input::get('status'),
                'last_login'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ); 
        }else{            
            $data_kana = array(
                'username'      => Input::get('username'),
                'email'         => Input::get('email'),
                'password'      => Hash::make(Request::input('password')),
                'full_name'     => Input::get('full_name'),
                'furigana'      => Input::get('furigana'),
                'status'        => Input::get('status'),
                'last_login'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            );

            $data = array(
                'username'      => Input::get('username'),
                'email'         => Input::get('email'),
                'password'      => Hash::make(Request::input('password')),
                'full_name'     => Input::get('full_name'),               
                'status'        => Input::get('status'),
                'last_login'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            );
        }        

        if(LaravelLocalization::getCurrentLocale() == 'vi')
        {
            $massages = User::$vi_msg;
            $rule     = $rls;
            $inputData = $data;
        }elseif(LaravelLocalization::getCurrentLocale() == 'en'){
            $inputData = $data;
            $massages = User::$en_msg;
            $rule     = $rls;
        }else{
            $massages = User::$ja_msg;
            $inputData = $data_kana;
            $rule     = $rljp;
        }

        $validator = Validator::make(Input::all(), $rule, $massages);
        if($validator->passes()){
            DB::table('users')
                    ->where('id', $id)
                    ->update($inputData);

            Session::flash('success', trans('common.user_edit_succ_msg'));
            return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/account');
        }

        return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/account/edit/'.$id)
                                ->withErrors($validator)
                                ->withInput();       
    }

    //post delete user
    public function delUser($id){
        DB::table('users')
                    ->where('id', $id)
                    ->update(array('is_deleted' => INACTIVE));
        Session::flash('success', trans('common.user_del_succ_msg'));
        return Redirect::to(LaravelLocalization::getCurrentLocale().'/admin/account');	
    }

    //get login
    public function getLogin(){
        if(Auth::check()) return redirect()->route('admin.dashboard');
        return view('admin.auth.login');
    }

    //post login
    public function postLogin(){
       if(LaravelLocalization::getCurrentLocale() == 'vi')
        {
            $msg_login = User::$msg_login_vi;
        }elseif(LaravelLocalization::getCurrentLocale() == 'en'){
            $msg_login = User::$msg_login_en;
        }else{
            $msg_login = User::$msg_login_ja;
        }
        
        $validator = Validator::make(Input::all(), User::$rule_login, $msg_login);
        if($validator->passes()){               
            if(Auth::attempt(array(
                    'email'     =>  Input::get('username'),
                    'password'  =>  Input::get('password'),
                    'status'    =>  1,
                    ), false)){                  
                return redirect()->to(LaravelLocalization::getCurrentLocale().'/admin/dashboard');
            }else
            Session::flash('error', trans('common.msg_login_fail'));
            return redirect()->route('admin.auth.login');
        }

        return Redirect::to(LaravelLocalization::getCurrentLocale().'/auth/login')
                                ->withErrors($validator)
                                ->withInput(); 
    }

    //logout
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('admin.auth.login');
    }

}

