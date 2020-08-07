<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Product;

use Session;

class FrontendController extends Controller
{
   
   public function index(){
   	// $x= Product::with(['category','Brand'])->get();
   	// dd($x);
   	$all_published_pro=Product::with(['Category','Brand']) 
   						->limit(9)
                    	->get();
    return view('pages.home_content',compact('all_published_pro'));
   }
}
