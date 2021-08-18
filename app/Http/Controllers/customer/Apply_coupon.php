<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Coupons;
use Illuminate\Support\Facades\Session;
use App\Cart_data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class Apply_coupon extends Controller
{
    public function index(Request $request)
    {
//        print_r($request->all());die;
         $result=Coupons::where('code',$request->get('code'))->where('status','1')->get(['c_id','code','minimum_amount','discount_money','start_date','end_date']);
         if(count($result)>0)
         {
             if($request->get('total')>=$result['0']->minimum_amount)
             {
                   $request->session()->put('coupon_codes',$result);
            return 'Coupon is implementd successfully';
             }
             else
             {
                 if(count($request->Session()::get('coupon_codes'))>0)
                 {
                     $request->session()->forget('coupon_codes');
                     return 'Minimum amount should be not less than Re '.$result['0']->minimum_amount.' in your cart';

                 }
                 else
                 {
                       return 'Minimum amount should be not less than Re '.$result['0']->minimum_amount.' in your cart';
                 }
             }
           
         }
    else
      {
          return 'coupon is invalid or expire';
      } 
    }
    
    
    public function check_coupon(Request $request)
    {
         if(Auth::check()==1 && count($request->session()->get('coupon_codes'))>0)
         {
                $cardata=new Cart_data();
         $vardata=$cardata::select('*')->where('user_id',Auth::user()->id)->get(); 
         if(count($vardata)>0)
         {
             for($i=0;$i<count($vardata);$i++)
            {
            
             $result[]= DB::table('products')
    ->select('products.product_id','products.mrp','products.discount_available','products.status','cart_datas.quantity')
                          ->join('cart_datas', 'products.product_id', '=', 'cart_datas.product_id')
                        ->where('cart_datas.user_id',$vardata[$i]->user_id)
    ->where('products.product_id',$vardata[$i]->product_id)
                               
    ->get();
         }
         $mrps=0;
        for($j=0;$j<count($result);$j++)
        {
             $mrps +=(int) ($result[$j]['0']->mrp-($result[$j]['0']->mrp*$result[$j]['0']->discount_available/100))*$result[$j]['0']->quantity; 
        }
        
        if($request->session()->get('coupon_codes')['0']['minimum_amount'] >$mrps)
        {
         $request->session()->forget('coupon_codes');
                     return 'This coupon is not valid on present cart amount.';   
        }
        
         }
         
         
//         end
         }
         else
         {
        if(count($request->session()->get('coupon_codes'))>0)
        {
               $data=$request->session()->get('cart_data');
        $mrps=0;
        foreach ($data as $cardatas)
        {
            
             $mrps +=(int) ($cardatas['mrp']-($cardatas['mrp']*$cardatas['discount_available']/100))*$cardatas['quantity'];
        }
      if($request->session()->get('coupon_codes')['0']['minimum_amount'] >$mrps)
        {
             $request->session()->forget('coupon_codes');
                     return 'This coupon is not valid on present cart amount.';
              
       
        }
        }
         return 'Quantity implemented successfully';
         }
    }
}
