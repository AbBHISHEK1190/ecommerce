<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class Searchmanager extends Controller
{
    public function index(Request $request)
    {

      $search=  $request->get('sd');
       $Product['productsearch']=Product::where('product_name','LIKE','%'.$search.'%')->where('product_description','LIKE','%'.$search.'%')->get();


        return view('customer.Searchmanager',$Product);
    }
}
