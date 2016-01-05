<?php namespace App\Http\Models;
use App\Http\Models\User;
use Illuminate\Support\Facades\URL;
use DB;

class User extends Model {
    protected static $table = 'users';

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
