<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Cart_data;
class Savesessioncartintotable extends Controller
{
    public function savedData()
    {
        $Cart_data=new Cart_data();

//      $Cartdata=$request->Session()->get('cart_data');
$Cartdata=Session::get('cart_data');
//print_r($Cartdata);die;
      if(count($Cartdata)>0)
      {
             for($i=0;$i<count($Cartdata);$i++)
            {
                $arraydata=array(
                    "user_id"=>Auth::user()->id,
                    "product_id"=>$Cartdata[$i]->product_id,
                    "quantity"=>$Cartdata[$i]->quantity,
//                    "updated_date"=>date("Y-m-d"),
                    
                );
                
             
             $var=   $this->checkcart($arraydata); 
            if(count($var)==0)
            {
               $Cart_data->create($arraydata); 
            }
      }
      
      
    }
    }
    
    public function checkcart($arraydata)
    {
        $Cart_data=new Cart_data();
     return     $Cart_data::select('*')->where('user_id',$arraydata['user_id'])->where('product_id',$arraydata['product_id'])->get();
    }
}
