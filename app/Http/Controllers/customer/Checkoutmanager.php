<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Validator;
class Checkoutmanager extends Controller
{
    public function __construct() {
            $this->middleware('auth');

    }
    public function index()
    {
//        print_r(Auth::user());
        return view('customer.checkout');
    }
    
    public function add_address(Request $request)
    {
//        print_r($request->all());die;
        if(!empty($request->post()))
        {
             $request->validate([
                 'name' => 'required',
                'mobile' => 'required|min:10|max:10|unique:users,mobile,'.Auth::user()->id,
                'address1' => 'required',
                'address2' => 'required',
                'city' => 'required',
                 'state' => 'required',
                'postal_code' => 'required||min:6|max:6',
                'country' => 'required',
            ]);
            $dataArray=array(
                "name"=>$request->get('name')?$request->get('name'):'',
                "mobile"=>$request->get('mobile')?$request->get('mobile'):'',
                "address1"=>$request->get('address1')?$request->get('address1'):'',
                "address2"=>$request->get('address2')?$request->get('address2'):'',
                "city"=>$request->get('city')?$request->get('city'):'',
                "state"=>$request->get('state')?$request->get('state'):'',
                "postal_code"=>$request->get('name')?$request->get('postal_code'):'',
                "country"=>$request->get('country')?$request->get('country'):'',
                
                
            );
            $users=new User();
            $users::where('id',Auth::user()->id)->update($dataArray);
              return   redirect('checkout')->with('successs', 'Updated  successfully');
        }
    }
}
