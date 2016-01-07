<?php namespace App\Http\Models;

use Illuminate\Support\Facades\URL;
use DB;

class Company extends Model {
    protected static $table = 'setting';


    // //get  signature by locale
    // public static function getSignByLocale($locale){
    //     return DB::table(static::$table)
    //                     ->select('signature.*')
    //                     ->where('is_deleted', '=', ACTIVE)
    //                     ->where('locale', $locale)
    //                     ->get();
    // } 
}