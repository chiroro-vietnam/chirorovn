<?php namespace App\Http\Models;

use Illuminate\Support\Facades\URL;
use DB;
use Pagination;

class Inquiry extends Model {
    protected static $table = 'contact';

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