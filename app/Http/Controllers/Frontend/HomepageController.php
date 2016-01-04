<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Input;
use Redirect;
use Html;
use View;
use DB;
use App\Http\Models\CategoryProduct;
use App\Http\Models\SellProduct;
use App\Http\Models\CategoryRental;
use App\Http\Models\RentalProduct;
use Illuminate\Pagination\Paginator;

class HomepageController extends FrontendController
{
    /************************************************************************
    *Home page
    /************************************************************************/
    public function index() 
    {
    	return view('frontend.homepage');
    }
}
