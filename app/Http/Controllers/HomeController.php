<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Productcategorie;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Cart_data;
//use Illuminate\Support\Facades\Auth;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $categories['categories'] = Productcategorie::select('category_id','category_name','category_description')
                           ->where('status', '=', '1')
                 ->get();
         //
         
          $Cart_data=new Cart_data();

//      $Cartdata=$request->Session()->get('cart_data');
$Cartdata=Session::get('cart_data');
//echo '<pre>';print_r($Cartdata);die;
      if(count($Cartdata)>0)
      {
//             for($i=0;$i<count($Cartdata);$i++)
          foreach($Cartdata as $key=>$data)
            {
//             echo '<pre>'; print_r($data->product_id);die;
                $arraydata=array(
                    "user_id"=>Auth::user()->id,
                    "product_id"=>$data->product_id,
                    "quantity"=>$data->quantity,
//                    "updated_date"=>date("Y-m-d"),
                    
                );
                
             
             $var=   $this->checkcart($arraydata); 
            if(count($var)==0)
            {
               $Cart_data->create($arraydata); 
            }
      }
      
      
    }
         
         
         //

               return view('customer.index',$categories);
    }
    
    public function checkcart($arraydata)
    {
        $Cart_data=new Cart_data();
     return     $Cart_data::select('*')->where('user_id',$arraydata['user_id'])->where('product_id',$arraydata['product_id'])->get();
    }

    public function categorymenu()
    {
        
        $categories = Productcategorie::select('category_id', 'category_name', 'category_description','cat_image','status')
                           ->where('status', '=', '1')
                           ->get();
        $html='';
        foreach($categories as $cat)
        {
//            category/$id;
            $urlplusid=url('category',[base64_encode($cat->category_id)]);
        $html .= "<li>".
           "<a"." "."href='$urlplusid'>".$cat->category_name."</a>".
			"</li>";
        }
        
        return response()->json($html);
//        echo '<pre>';      print_r($a); die;
    }
    
    public function proructbyid()
    {
//        $html='';
           $categories = Productcategorie::select('category_id','category_name','category_description')
                           ->where('status', '=', '1')
                           ->get();
//            
//                   echo $categories['0']['category_id'];
                   $html='';
                   $htmlnew='';
                   for($i=0;$i<count($categories);$i++)
                   {
                      
                       $alldata = DB::table('products')
    ->select('products.product_id','products.category_id','products.product_name','products.product_description','products.mrp','products.discount_available','products.product_available','products.image1','products.image2','products.image3','products.image4','products.image5','products.status','productcategories.category_name','productcategories.category_description')
    ->join('productcategories', 'productcategories.category_id', '=', 'products.category_id')
    ->where('products.category_id',$categories[$i]['category_id'])
                               ->where('products.status','1')
    ->get();
 
                    $html .=   "<div class='latest-items carousel-wrapper'>".
			"<header class='content-title'>".
			"<div class='title-bg'>".
			"<h2 class='title'>".$categories[$i]['category_name']."</h2>".
			"</div>".
			"<p class='title-desc'>".$categories[$i]['category_description']."</p>".
			"</header>".
			"<div class='carousel-controls'><div id='latest-items-slider-prev' class='carousel-btn carousel-btn-prev'>".
			"</div>".
			"<div id='latest-items-slider-next' class='carousel-btn carousel-btn-next carousel-space'>".
			"</div>".
			"</div>".
			"<div class='latest-items-slider owl-carousel'>"
                     
                 
                      
                ." @foreach($alldata as $data){"
                     
			."<div class='item item-hover'>".
			"<div class='item-image-wrapper'>".
			"<figure class='item-image-container'>".
                      "<a href=''>".
			"<img src='assets/images/products/$data->image1' alt='item1' class='item-image'>". 
			"<img src='assets/images/products/$data->image2' alt='item1  Hover' class='item-image-hover'>".
			"</a>".
			"</figure>".
			"<div class='item-price-container'>".
			"<span class='item-price'>₹"
."0</span>".
			"</div>".
			"<span class='new-rect'>New</span>".
			"</div>".
			"<div class='item-meta-container'>".
			"<div class=ratings-container'>".
			"<div class='ratings'>".
			"<div class='ratings-result' data-result='80'>".
			"</div>".
			"</div>".
			
			"</div>".
			"<h3 class='item-name'>".
			"<a>".'$data->product_name'."</a>".
			"</h3>".
			"<div class='item-action'>".
        
                       "<a onclick='' class='item-add-btn'>".
                           
			"<span class='icon-cart-text'>Add to Cart</span>".
			"</a>".
			"</div>".
			"</div>".
			"</div>".
//                   return response()->json($htmlnew);
                "@endforeach".
                 "</div>".
                  "</div>";
                   
                      }
               
//                     . "<div class='lg-margin'>";
                   
          
            return response()->json($html);
    
    }
      
    public function logout(Request $request) {
  Auth::logout();
  return redirect('/login');
}

    }

