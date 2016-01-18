<?php namespace App\Http\Models;

use Illuminate\Support\Facades\URL;
use DB;

class Company extends Model {
    protected static $table = 'setting';

    public static $rules = array(
                            'title'					=> 'required',
                            'meta_key'				=> 'required',
                            'meta_desc'				=> 'required',
                            'email'					=> 'required',
                            'title_logo'			=> 'max:2000|mimes:jpeg,bmp,png,gif,ico',
                            'site_logo'				=> 'max:5000|mimes:jpeg,bmp,png,gif',                        
                        );   

    public static $vi_msg = array(
                            'title.required'          	=> 'Vui lòng nhập tiêu đề website',
                            'meta_key.required'       	=> 'Vui lòng nhập meta keyword',
                            'meta_desc.required'     	=> 'Vui lòng nhập meta description',
                            'email.required'          	=> 'Vui lòng nhập e-mail',
                            'title_logo.max'     		=> 'Vui lòng chọn file nhỏ hơn 2 MB',
                            'title_logo.mimes'     		=> 'Vui lòng chọn file đúng định dạng (.jpeg,.bmp,.png,.gif,.ico)',
                            'site_logo.max'     		=> 'Vui lòng chọn file nhỏ hơn 5 MB',
                            'site_logo.mimes'     		=> 'Vui lòng chọn file đúng định dạng (.jpeg,.bmp,.png,.gif)',
                        );

    public static $en_msg = array(
                            'title.required'          	=> 'Please enter title website',
                            'meta_key.required'       	=> 'Please enter meta keyword',
                            'meta_desc.required'     	=> 'Please enter meta description',
                            'email.required'          	=> 'Please enter e-mail',
                            'title_logo.max'     		=> 'Please choose file size less than 2 MB',
                            'title_logo.mimes'     		=> 'Please choose file format correct(.jpeg,.bmp,.png,.gif,.ico)',
                            'site_logo.max'     		=> 'Please choose file size less than 5 MB',
                            'site_logo.mimes'     		=> 'Please choose file format correct (.jpeg,.bmp,.png,.gif)',
                        );

    public static $ja_msg = array(
                            'title.required'          	=> 'Please enter title website',
                            'meta_key.required'       	=> 'Please enter meta keyword',
                            'meta_desc.required'     	=> 'Please enter meta description',
                            'email.required'          	=> 'Please enter e-mail',
                            'title_logo.max'     		=> 'Please choose file size less than 2 MB',
                            'title_logo.mimes'     		=> 'Please choose file format correct(.jpeg,.bmp,.png,.gif,.ico)',
                            'site_logo.max'     		=> 'Please choose file size less than 5 MB',
                            'site_logo.mimes'     		=> 'Please choose file format correct (.jpeg,.bmp,.png,.gif)',
                        );


    // //get  setting company
    public static function getSetting(){
        return DB::table(static::$table)
                        ->select('setting.*')
                        ->where('is_deleted', '=', ACTIVE)
                        //->where('locale', $locale)
                        ->find(1);
    } 
}