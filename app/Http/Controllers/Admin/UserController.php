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
use Validation;
use Pagination;

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
    	return view('admin.users.edit');
    }

    //post edit user
    public function postEdit($id){
    	
    }

    //post delete user
    public function delUser($id){
    	
    }

}

