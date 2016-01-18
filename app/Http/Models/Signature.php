<?php namespace App\Http\Models;

use Illuminate\Support\Facades\URL;
use DB;

class Signature extends Model {
    protected static $table = 'signature';

    public static $rules = array(
                            'content'           => 'required',                           
                        );   

    public static $vi_msg = array(
                            'content.required'          => 'Vui lòng nhập nội dung signature',
                        );

    public static $en_msg = array(
                            'content.required'          => 'Please enter signature',
                        );

    public static $ja_msg = array(
                            'content.required'          => 'Please enter signature',
                        );

    //get  signature by locale
    public static function getSignByLocale(){
        return DB::table(static::$table)
                        ->select('signature.*')
                        ->where('is_deleted', '=', ACTIVE)
                        ->find(1);
    } 
}