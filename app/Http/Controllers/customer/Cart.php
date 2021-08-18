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

        
        if(Auth::check()==1)
        {
            $cardata=new Cart_data();
         $vardata=$cardata::select('*')->where('user_id',Auth::user()->id)->get();  
       
//       echo '<pre>';  print_r(count($vardata));die;
       if(count($vardata)>0)
       {
            for($i=0;$i<count($vardata);$i++)
            {
                
                
                $result[]= DB::table('products')
    ->select('products.product_id','products.category_id','products.product_name','products.product_description','products.mrp','products.discount_available','products.product_available','products.image1','products.image2','products.image3','products.image4','products.image5','products.status','productcategories.category_name','productcategories.category_description','cart_datas.quantity')
    ->join('productcategories', 'products.category_id', '=', 'productcategories.category_id')
                          ->join('cart_datas', 'products.product_id', '=', 'cart_datas.product_id')
                        ->where('cart_datas.user_id',$vardata[$i]->user_id)
    ->where('products.product_id',$vardata[$i]->product_id)
                               
    ->get();
                
                
            }
// echo '<pre>';  print_r($result);die;
        $cardata['mycartdata']= $result;

        return view('customer.cart',$cardata);
          
        }
        return view('customer.cart');
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
          $this->insertdataintocart($id); 
      }
else
{
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

	
}
else
{
       $idnew= array_merge($ids,$cartsavedid);
       for($i=0;$i<count($idnew);$i++)
       {
         $alldata[]= \App\Product::where('product_id',$idnew[$i])->first();
              
       }
        $request->session()->put('cart_data',$alldata);

       return 'Cart updated successfully.';
}
            

           }
           else
           {
               $alldata[]= \App\Product::where('product_id',$id)->first();
            $request->session()->put('cart_data',$alldata)  ;  

          return  'Item added  successfully.';
           }
}
    }
    
    
    public function insertdataintocart($id)
    {
         $cardata=new Cart_data();
         $vardata=$cardata::select('*')->where('user_id',Auth::user()->id)->where('product_id',$id)->get()->count();  

         if($vardata==0)
         {
             $dataArray=array(
              "user_id" =>Auth::user()->id,
                "product_id" =>$id,
                "quantity"=>'1',
               );
              $cardata->create($dataArray);
              echo  'Item added  successfully.';
         }
         else
         {
             echo 'Item is already in your cart.';
         }
         
         
    }
    
    
    
    
    
    
    public function delete_cart(Request $request,$id='')
    {
 if(Auth::check()==1)
      {
        $cardata=new Cart_data();
         $vardata=$cardata::where('user_id',Auth::user()->id)->where('product_id',$id)->delete();  
    
      }
      else
      {
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
}
