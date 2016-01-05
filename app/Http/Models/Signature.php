<?php namespace App\Http\Models;

use Illuminate\Support\Facades\URL;
use DB;

class Signature extends Model {
    protected static $table = 'signature';


    //get  signature by locale
    public static function getSignByLocale($locale){
        return DB::table(static::$table)
                        ->select('signature.*')
                        ->where('is_deleted', '=', ACTIVE)
                        ->where('locale', $locale)
                        ->get();
    } 
}