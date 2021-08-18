<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class Categoriesdata extends Controller
{
    public function index(Request $request,$id)
    {
//        print_r(base64_decode($id)); die;
         $alldata['categories']= \App\Productcategorie::where('category_id',base64_decode($id))->first();
         
        return view('customer.categories',$alldata);
    }
    
    public function getcategoriesdata(Request $request)
    {
     $id= base64_decode($request->get('id'));
     $alldata= Product::where('category_id',$id)->get();
     $html='';
      foreach($alldata as $data)
      {
          $product_desc=url('product_description',[base64_encode($data->product_id)]);
         $encode= base64_encode($data->product_id);
        $addcart=$encode;
          $img1=url("assets/images/products/$data->image1");
          $img2=url("assets/images/products/$data->image2");
          $finalprice=(int)$data->mrp-($data->mrp*$data->discount_available/100);
        $html .=" <div class='col-md-4 col-sm-6 col-xs-12'>".
"<div class='item item-hover'>".
"<div class='item-image-wrapper'>".
"<figure class='item-image-container'>".
"<a href='$product_desc'>".
"<img src='$img1' alt='item1' class='item-image'>".

 "<img src='$img1' alt='item1  Hover' class='item-image-hover'>".
 "</a>".
 "</figure>".
 "<div class='item-price-container'>".
 "<span class='old-price'>₹ $data->mrp<span class='sub-price'></span></span>".
 "<span class='item-price'>₹ $finalprice<span class='sub-price'></span></span>".
 "</div>".
 "<span class='new-rect'>New</span>".
 "<span class='discount-rect'>-15%</span>".
 "</div>".
 "<div class='item-meta-container'>".
 "<div class='ratings-container'>".
 "<div class='ratings'>".
 "<div class='ratings-result' data-result='80'>".
 "</div>".
 "</div>".
 "<span class='ratings-amount'>5 Reviews</span>".
 "</div>".
 "<h3 class='item-name'>".
 "<a href='product.html'>$data->product_name</a>".
 "</h3>".
 "<div class='item-action'>".
 "<a onclick='addcart($data->product_id)' class='item-add-btn'>".
 "<span class='icon-cart-text'>Add to Cart</span>".
 "</a>".
 "<div class='item-action-inner'>".
 "<a href='#' class='icon-button icon-like'>Favourite</a>".
 "<a href='#' class='icon-button icon-compare'>Checkout</a>".
 "</div>".
 "</div>".
 "</div>".
 "</div>".
 "</div>";
                 
      }
       return response()->json($html);
        
    }
}
