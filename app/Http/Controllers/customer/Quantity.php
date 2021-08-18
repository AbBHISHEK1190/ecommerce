<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use App\Cart_data;
use Illuminate\Support\Facades\Auth;
class Quantity extends Controller
{
    public function index(Request $request)
    {
     $a=1;
        $datarray=array(
         "product_id"=>$request->get('proid'),
         "quantity"=>$request->get('quant'),
     );
        
  if(Auth::check()==1)
  {
      $cardata=new Cart_data();
 
   $cardata::where('product_id',$datarray['product_id'])->where('user_id',Auth::user()->id)->update(['quantity'=>$datarray['quantity']]);
  }
  else
  {
  
         $sessdata=$request->session()->get('cart_data');
//     echo count($sessdata);
 for($i=0;$i<count($sessdata);$i++)
 {
    
 if($sessdata[$i]['product_id']==$datarray['product_id'])
 {
//     echo $sessdata[$i]['product_id'];die;
     $sessdata[$i]['quantity']=$datarray['quantity'];
     
 $request->session()->put('cart_data',$sessdata);  
 
 }
 }
 }
        
        
        
    }
}
