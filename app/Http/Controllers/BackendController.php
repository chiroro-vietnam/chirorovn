<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Request;
use DB;
use LaravelLocalization;


abstract class BackendController extends BaseController {
    use DispatchesCommands, ValidatesRequests;
    public function __construct(){
    	$contact = DB::table('contact')
	                            ->where('is_deleted', ACTIVE)
	                            ->where('reader', 1)
	                            ->select('id', 'reader')
	                            ->get();
	    $notify = count($contact);
	    define('NOTIFY', $notify);
    }

}
