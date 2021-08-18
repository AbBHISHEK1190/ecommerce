<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Coupons;
class Createcoupons extends Controller
{
    public function index()
    {
         $category['category']=Coupons::all();
      

        return view('admin.all_coupons',$category);
    }
    
    public function codegenerator()
{
    $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$res = "";
for ($i = 0; $i < 10; $i++) {
       $res .= $chars[mt_rand(0, strlen($chars)-1)];
}
return $res;
}

    public function add_coupons(Request $request)
    {
//        print_r($request->all());die;
if(!empty($request->post()))
          {
            $request->validate([
            'minimum_amount'=>'required|min:1|digits_between: 1,4',
            'discount_money'=>'required|min:1|digits_between: 1,4',
             'start_date'=>'required',
            'end_date'=>'required',
            
        ]);
             
             $Coupons=new Coupons();
             $Coupons->code = $this->codegenerator();
              $Coupons->minimum_amount =  $request->get('minimum_amount');
        $Coupons->discount_money =  $request->get('discount_money');
         $Coupons->start_date=date("Y-m-d",strtotime($request->get('start_date')));
          $Coupons->end_date=date("Y-m-d",strtotime($request->get('end_date')));
         $Coupons->status='0';
         $Coupons->save();
        
       return   redirect('admin/all_coupons')->with('successs', 'Coupon created successfully'); 
          }

        return view('admin.add_coupons');
    }
    
    public function delete_coupons(Request $request,$id,$status)
    {
        $id=base64_decode($id);
if($status==0)
{
    $Coupons=new Coupons(); 
    $dataarrray['status']=1;
    $Coupons->where('c_id',$id)->update($dataarrray); 
    return   redirect('admin/all_coupons')->with('successs', 'status changed successfully');
}
else
{
   $Coupons=new Coupons(); 
    $dataarrray['status']=0;
    $Coupons->where('c_id',$id)->update($dataarrray); 
    return   redirect('admin/all_coupons')->with('successs', 'status changed successfully'); 
}
 
    }
    
    
      public function edit_coupon(Request $request,$id)
    {
     $id= base64_decode($id);
     $category['category']= Coupons::find($id);
  if(!empty($request->post()))
    {
          $request->validate([
            'minimum_amount'=>'required|min:1|digits_between: 1,4',
            'discount_money'=>'required|min:1|digits_between: 1,4',
             'start_date'=>'required',
            'end_date'=>'required',
            
        ]);
         
             
              $dataarrray=array(
        "minimum_amount" => $request->get('minimum_amount'),
        "discount_money" =>  $request->get('discount_money'),
        "start_date" => date("Y-m-d",strtotime($request->get('start_date'))),
                  "end_date" => date("Y-m-d",strtotime($request->get('end_date'))),
       
        
                      );
              Coupons::find($id)->update($dataarrray);
               return   redirect('admin/all_coupons')->with('successs', 'Updated  successfully');
             
    }
      return view('admin.edit_coupon',$category);
    }
  
}
