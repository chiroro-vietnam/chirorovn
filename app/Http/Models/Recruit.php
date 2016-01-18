<?php namespace App\Http\Models;

use Illuminate\Support\Facades\URL;
use DB;
use Pagination;

class Recruit extends Model {
    protected static $table = 'recruit';

     public static $rules = array(
                            'position'          => 'required',
                            'content'           => 'required',                           
                        );   

    public static $vi_msg = array(
                            'position.required'         => 'Vui lòng nhập vị trí tuyển dụng',
                            'content.required'          => 'Vui lòng nhập nội dung tuyển dụng',
                        );

    public static $en_msg = array(
                            'position.required'         => 'Please enter recruit position',
                            'content.required'          => 'Please enter recruit content',
                        );

    public static $ja_msg = array(
                            'position.required'         => 'Please enter recruit position',
                            'content.required'          => 'Please enter recruit content',
                        );


    //get list recruit
    public static function getRecruit(){
        return DB::table(static::$table)
                        ->select('recruit.*')
                        ->where('is_deleted', '=', ACTIVE)
                        ->paginate(LIMIT_PAGE);
    } 

    //get recruit by id
    public static function getRecruitById($id){
        return DB::table(static::$table)
                        ->select('recruit.*')
                        ->where('is_deleted', '=', ACTIVE)
                        ->find($id);
    }
}