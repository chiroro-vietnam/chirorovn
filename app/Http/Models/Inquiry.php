<?php namespace App\Http\Models;

use Illuminate\Support\Facades\URL;
use DB;
use Pagination;

class Inquiry extends Model {
    protected static $table = 'contact';

     public static $rules = array(
                            'company'           => 'required',
                            'title'             => 'required',
                            'name'              => 'required',
                            'address'           => 'required',
                            'phone'             => 'required|numeric',
                            'email'             => 'required|email',
                            'comment'           => 'required',
                        );

    public static $ruleJp = array(
                            'company'           => 'required',
                            'title'             => 'required',
                            'name'              => 'required',
                            'address'           => 'required',
                            'phone'             => 'required|numeric',
                            'email'             => 'required|email',
                            'comment'           => 'required',
                            'furigana'          => 'required|regex:/^[\x{3000}\x{3041}-\x{3096}\x{30A0}-\x{30FF}]+$/u',
                        );

    public static $vi_msg = array(
                            'company.required'          => 'Vui lòng nhập tên công ty',
                            'title.required'            => 'Vui lòng nhập tiêu đề',
                            'email.required'            => 'Vui lòng nhập e-mail',
                            'email.email'               => 'Vui lòng nhập đúng định dạng email',                            
                            'name.required'             => 'Vui lòng nhập họ tên',
                            'address.required'          => 'Vui lòng nhập địa chỉ',
                            'phone.required'            => 'Vui lòng nhập số điện thoại',
                            'phone.numeric'             => 'Vui lòng nhập đúng số điện thoại',
                            'comment.required'          => 'Vui lòng nhập nội dung',
                        );

    public static $en_msg = array(
                            'company.required'          => 'Please enter company name',
                            'title.required'            => 'Please enter title',
                            'email.required'            => 'Please enter e-mail',
                            'email.email'               => 'Please enter e-mail format correct',                            
                            'name.required'             => 'Please enter full name',
                            'address.required'          => 'Please enter your address',
                            'phone.required'            => 'Please enter phone number',
                            'phone.numeric'             => 'Please enter correct phone number',
                            'comment.required'          => 'Please enter content',
                        );

    public static $ja_msg = array(
                            'company.required'          => '会社名をご入力ください。',
                            'title.required'            => '役職をご入力ください。',
                            'email.required'            => 'メールアドレスをご入力ください。',
                            'email.email'               => '正しいメール形式を入力してください。',                            
                            'name.required'             => 'お名前をご入力ください。',
                            'address.required'          => '住所をご入力ください。',
                            'phone.required'            => '電話番号をご入力ください',
                            'phone.numeric'             => '正しい電話番号を入力してください。',
                            'furigana.required'         => 'ふりがな名前を入力してください。',
                            'furigana.regex'            => '正しいかな文字を入力してください。',
                            'comment.required'          => 'お問い合わせ内容をご入力ください',
                        );


    //get list contact
    public static function getContact(){
        return DB::table(static::$table)
                        ->select('contact.*')
                        ->where('is_deleted', '=', ACTIVE)
                        ->paginate(LIMIT_PAGE);
    } 

    //get contact by id
    public static function getContactById($id){
        return DB::table(static::$table)
                        ->select('contact.*')
                        ->where('is_deleted', '=', ACTIVE)
                        ->find($id);
    }
}