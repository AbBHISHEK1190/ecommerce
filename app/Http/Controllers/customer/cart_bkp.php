<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Cart_data;
use Illuminate\Support\Facades\Auth;
//use Symfony\Component\HttpFoundation\Session\Session;
class Cart extends Controller
{
    private $result;
    public function index(Request $request)
    {
//        $request->session()->forget('cart_data');
//         print_r(count(session()->get('cart_data')));die;
        $check=Auth::check()?Auth::check():'0';
        if($check==1)
        {
            $cardata=new Cart_data();
         $vardata=$cardata::select('*')->where('user_id',Auth::user()->id)->get();  
//         print_r($vardata['0']->cart_id);die;
            
            for($i=0;$i<count($vardata);$i++)
            {
                
                
                 $result[]= DB::table('products')
    ->select('products.product_id','products.category_id','products.product_name','products.product_description','products.mrp','products.discount_available','products.product_available','products.image1','products.image2','products.image3','products.image4','products.image5','products.status','productcategories.category_name','productcategories.category_description','cart_datas.quantity')
    ->join('productcategories', 'products.category_id', '=', 'productcategories.category_id')
                          ->join('cart_datas', 'products.product_id', '=', 'cart_datas.product_id')
    ->where('products.category_id',$vardata[$i]->cart_id)
                               
    ->get()->toArray();
                
                
            }
//            fore/ach ($this->result as $data)
//            print_r($result['0']['1']->product_id);die;
            
            
        $cardata['mycartdata']=$result['0'];
//        print_r($cardata['cart_id']['0']['0']['producct_id']);die;
        return view('customer.cart',$cardata);
        }
        else
        {
        return view('customer.cart');    
        }
    }
    
    public function add_to_cart(Request $request,$id)
    {
//        $id= base64_decode($id);
//      echo $id;die;
      if(Auth::check()==1)
      {
          $this->addproduct($id); 
      }
//        print_r($request->session()->get('cart_data'));die;
          $ids[]=$id;
           if($request->session()->has('cart_data') && !empty($request->session()->get('cart_data')))
           {
            $var=   $request->session()->get('cart_data');
//               print_r($var['1']);die;
for($i=0;$i<count($var);$i++)
{
    $cartsavedid[]=!empty($var[$i]->product_id)?$var[$i]->product_id:'';			

}

    if (in_array($id, $cartsavedid))
{
	return 'Item is already in your cart.';
//      session()->set('success', 'Item is already in your cart.');
	
}
else
{
       $idnew= array_merge($ids,$cartsavedid);
       for($i=0;$i<count($idnew);$i++)
       {
         $alldata[]= \App\Product::where('product_id',$idnew[$i])->first();
              
       }
        $request->session()->put('cart_data',$alldata);
//        session()->set('success', 'Cart updated successfully.');
       return 'Cart updated successfully.';
}
            
//             $request->session()->put('cart_data',$res_arr_values)  ;
           }
           else
           {
               $alldata[]= \App\Product::where('product_id',$id)->first();
            $request->session()->put('cart_data',$alldata)  ;  
//            session()->set('success', 'Item added  successfully.');
          return  'Item added  successfully.';
           }
       
    }
    
    
    public function addproduct($id)
    {
        echo $id;
    }
    
    
    
    
    
    
    public function delete_cart(Request $request,$id='')
    {
//        print_r($id); die;
      $var=   $request->session()->get('cart_data');
//   echo   $var['0']['product_id'];
   for($i=0;$i<count($var);$i++)
   {
       if($var[$i]['product_id']==$id?$id:'0')
       {
           unset($var[$i]);
       }
        $request->session()->put('cart_data',$var)  ;
   }
//        echo $id;
    }
}
