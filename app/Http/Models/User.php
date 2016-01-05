<?php namespace App\Http\Models;
use App\Http\Models\User;
use Illuminate\Support\Facades\URL;
use Html;
use Form;
use View;
use Request;
use Validator;
use Pagination;
use Input;
use DB;

class User extends Model {
    protected static $table = 'users';

    public static $rules = array(
                            'username'          => 'required|alpha_num|unique:users,username|min:4|max:16',
                            'email'             => 'required|email|unique:users,email',
                            'password'          => 'required|min:6',
                            'confirm_password'  => 'same:password',
                            'name'              => 'required',
                        );

    public static $ruleJp = array(
                            'username'          => 'required|alpha_num|unique:users,username|alpha|min:4|max:16',
                            'email'             => 'required|email|unique:users,email',
                            'password'          => 'required|min:6',
                            'confirm_password'  => 'same:password',
                            'name'              => 'required',
                            'furigana'          => 'regex:/[^\wぁ-ゔァ-ヺー\x{4E00}-\x{9FAF}_\-]+/u',
                        );

    public static $vi_msg = array(
        'username.required'         => 'Vui lòng nhập tên người dùng',
        'username.alpha_num'        => 'Tên người dùng phải là ký tự chữ và số',
        'username.unique'           => 'Tên ngưởi dùng này đã tồn tại',
        'username.min'              => 'Tên người dùng tối thiểu 4 ký tự',
        'username.max'              => 'Tên người dùng tối đa 16 ký tự',
        'email.required'            => 'Vui lòng nhập email',
        'email.email'               => 'Vui lòng nhập đúng định dạng email',
        'email.unique'              => 'Email này đã tồn tại',
        'password.required'         => 'Vui lòng nhập mật khẩu',
        'password.min'              => 'Mật khẩu dài tối thiểu 4 ký tự',
        'confirm_password.same'     => 'Mật khẩu và xác nhận mật khẩu phải giống nhau',
        'name.requred'              => 'Vui lòng nhập họ và tên',

    );

    public static $en_msg = array(
        'username.required'         => 'Please enter username',
        'username.alpha_num'        => 'The username must be alpha numeric',
        'username.unique'           => 'This username existed',
        'username.min'              => 'The username least 4 characters length',
        'username.max'              => 'The username max 16 characters length',
        'email.required'            => 'Please enter email',
        'email.email'               => 'Vui lòng nhập đúng định dạng email',
        'email.unique'              => 'This E-mail existed',
        'password.required'         => 'Please enter password',
        'password.min'              => 'The password must be least 4 characters length',
        'confirm_password.same'     => 'The password and confirm password not same',
        'name.requred'              => 'Please enter full name',

    );

    public static $ja_msg = array(
        'username.required'         => 'Vui lòng nhập tên người dùng',
        'username.alpha_num'        => 'Tên người dùng phải là ký tự chữ và số',
        'username.unique'           => 'Tên ngưởi dùng này đã tồn tại',
        'username.min'              => 'Tên người dùng tối thiểu 4 ký tự',
        'username.max'              => 'Tên người dùng tối đa 16 ký tự',
        'email.required'            => 'Vui lòng nhập email',
        'email.email'               => 'Vui lòng nhập đúng định dạng email',
        'email.unique'              => 'Email này đã tồn tại',
        'password.required'         => 'Vui lòng nhập mật khẩu',
        'password.min'              => 'Mật khẩu dài tối thiểu 4 ký tự',
        'confirm_password.same'     => 'Mật khẩu và xác nhận mật khẩu phải giống nhau',
        'name.requred'              => 'Vui lòng nhập họ và tên',
        'furigana.regex'            => 'Phải nhập đúng kiểu chữ kana',

    );


    //get list admin users
    public static function getUserAll(){
        return DB::table(static::$table)
                        ->select('users.*')
                        ->where('is_deleted', '=', ACTIVE)
                        ->paginate(LIMIT_PAGE);
    }     
       
    //get  users by id
    public static function getUserById($id){
        return DB::table(static::$table)
                        ->select('users.*')
                        ->where('is_deleted', '=', ACTIVE)
                        ->find($id);
    } 


}
