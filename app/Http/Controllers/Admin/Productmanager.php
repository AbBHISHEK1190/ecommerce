<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Productcategorie;
use App\Product;
use Illuminate\Support\Facades\DB;
class Productmanager extends Controller
{
    private $image1;
    private $image2;
    private $image3;
    private $image4;
    private $image5;
    public function index()
    {

         
         $category['category'] = DB::table('products')
    ->select('products.product_id','products.category_id','products.product_name','products.product_description','products.mrp','products.discount_available','products.product_available','products.image1','products.image2','products.image3','products.image4','products.image5','products.status','productcategories.category_name','productcategories.category_description')
    ->join('productcategories', 'productcategories.category_id', '=', 'products.category_id')
   
//                               ->where('products.status','1')
                                 ->orderBy('products.product_id','DESC')
                                
    ->get();
//foreach ($category as $cat)
//         print_r($cat['0']->product_id);die;

        return view('admin.all_product',$category);
    }
    
    public function add_product(Request $request)
    {
        
         $category['category']=Productcategorie::all();
         if(!empty($request->post()))
         {
             $request->validate([
                 'category_id' => 'required',
                'product_name' => 'required',
                'product_description' => 'required',
                'mrp' => 'required',
                'discount_available' => 'required',
                'image1' => 'required|mimes:jpeg,jpg,png|max:2048',
                'image2' => 'required|mimes:jpeg,jpg,png|max:2048',
                'image3' => 'required|mimes:jpeg,jpg,png|max:2048',
                'image4' => 'required|mimes:jpeg,jpg,png|max:2048',
                'image5' => 'required|mimes:jpeg,jpg,png|max:2048',
            ]);
            $this->image1 = time() . '.' . $request->image1->extension();
            $request->image1->move(public_path('assets\images\products'), $this->image1);

            $this->image2 = time() . '.' . $request->image2->extension();
            $request->image2->move(public_path('assets\images\products'), $this->image2);
            $this->image3 = time() . '.' . $request->image3->extension();
            $request->image3->move(public_path('assets\images\products'), $this->image3);
            $this->image4 = time() . '.' . $request->image4->extension();
            $request->image4->move(public_path('assets\images\products'), $this->image4);
            $this->image5 = time() . '.' . $request->image5->extension();
            $request->image5->move(public_path('assets\images\products'), $this->image5);
            
             $prduct=new Product();
         $prduct->category_id =  $request->get('category_id');
        $prduct->product_name =  $request->get('product_name');
        $prduct->product_description =  $request->get('product_description');
        $prduct->product_name =  $request->get('product_name');
        $prduct->mrp =  $request->get('mrp');
        $prduct->discount_available =  $request->get('discount_available');
         $prduct->image1 =  $this->image1;
         $prduct->image2 =  $this->image2;
         $prduct->image3 =  $this->image3;
         $prduct->image4=  $this->image4;
         $prduct->image5 =  $this->image5;
         $prduct->image5 =  $this->image5;
         $prduct->product_available =  '10';
          $prduct->quantity =  '1';
           $prduct->status =  '0';
       $prduct->save();
        return   redirect('admin/all_product')->with('successs', 'Product added successfully');
        }
           return view('admin.add_product',$category);
    }

    
    public function edit_product(Request $request,$id)
    {
        $id= base64_decode($id);
         $category['category']=Productcategorie::all();
         $category['product']= Product::find($id);
        
        return view('admin.edit_product',$category);
    }

    public function save_edit_product(Request $request)
    {
        if(!empty($request->post()))
    {
//            print_r($request->image5);die;
        $request->validate([
                 'category_id' => 'required',
                'product_name' => 'required',
                'product_description' => 'required',
                'mrp' => 'required',
                'discount_available' => 'required',
                
            ]);
        if(!empty($request->image1))
         {
//            echo $request->image1;die;
//            print_r($request->get('image1'));die;
              $request->validate([
             'image1'=>'mimes:jpeg,jpg,png|max:2048',
        ]);
           $this->image1 = time() . '.' . $request->image1->extension();
            $request->image1->move(public_path('assets\images\products'), $this->image1);
    $a=$request->get('image1_old');
         $path_to_file="./assets/images/products/$a";

         unlink($path_to_file);
         }
                if(!empty($request->image2))
         {
              $request->validate([
             'image2'=>'mimes:jpeg,jpg,png|max:2048',
        ]);
              $this->image2 = time() . '.' . $request->image2->extension();
            $request->image2->move(public_path('assets\images\products'), $this->image2);
            $a=$request->get('image2_old');
         $path_to_file="./assets/images/products/$a";

         unlink($path_to_file);
         }

              if(!empty($request->image3))
         {
              $request->validate([
             'image3'=>'mimes:jpeg,jpg,png|max:2048',
        ]);
              $this->image3 = time() . '.' . $request->image3->extension();
            $request->image3->move(public_path('assets\images\products'), $this->image3);
$a=$request->get('image3_old');
         $path_to_file="./assets/images/products/$a";

         unlink($path_to_file);
    }
      if(!empty($request->image4))
         {
              $request->validate([
             'image4'=>'mimes:jpeg,jpg,png|max:2048',
        ]);
              $this->image4 = time() . '.' . $request->image4->extension();
            $request->image4->move(public_path('assets\images\products'), $this->image4);
$a=$request->get('image4_old');
         $path_to_file="./assets/images/products/$a";

         unlink($path_to_file);
         }
           if(!empty($request->image5))
         {
              $request->validate([
             'image5'=>'mimes:jpeg,jpg,png|max:2048',
        ]);
              $this->image5 = time() . '.' . $request->image5->extension();
//             echo $this->image5;die;
              $request->image5->move(public_path('assets\images\products'), $this->image5);
         $a=$request->get('image5_old');
         $path_to_file="./assets/images/products/$a";

         unlink($path_to_file);    

         }
        
          $dataarrray=array(
        "category_id" => $request->get('category_id'),
        "product_name" =>  $request->get('product_name'),
              "product_description" => $request->get('product_description'),
        "mrp" =>  $request->get('mrp'),
              "discount_available" => $request->get('discount_available'),
        "image1" =>  $this->image1?$this->image1:$request->get('image1_old'),
               "image2" =>  $this->image2?$this->image2:$request->get('image2_old'),
               "image3" =>  $this->image3?$this->image3:$request->get('image3_old'),
             "image4" =>  $this->image4?$this->image4:$request->get('image4_old'),  
                   "image5" =>  $this->image5?$this->image5:$request->get('image5_old')
                      );
                      Product::find($request->id)->update($dataarrray);
               return   redirect('admin/all_product')->with('successs', 'Updated  successfully');
        }
         
    }




    public function all_active_product()
    {

         
         $category['category'] = DB::table('products')
    ->select('products.product_id','products.category_id','products.product_name','products.product_description','products.mrp','products.discount_available','products.product_available','products.image1','products.image2','products.image3','products.image4','products.image5','products.status','productcategories.category_name','productcategories.category_description')
    ->join('productcategories', 'productcategories.category_id', '=', 'products.category_id')
   
                               ->where('products.status','1')
                                 ->orderBy('products.product_id','DESC')
                                
    ->get();
//foreach ($category as $cat)
//         print_r($cat['0']->product_id);die;

        return view('admin.all_product',$category);
    }
    public function all_inactive_product()
    {

         
         $category['category'] = DB::table('products')
    ->select('products.product_id','products.category_id','products.product_name','products.product_description','products.mrp','products.discount_available','products.product_available','products.image1','products.image2','products.image3','products.image4','products.image5','products.status','productcategories.category_name','productcategories.category_description')
    ->join('productcategories', 'productcategories.category_id', '=', 'products.category_id')
   
                               ->where('products.status','0')
                                 ->orderBy('products.product_id','DESC')
                                
    ->get();
//foreach ($category as $cat)
//         print_r($cat['0']->product_id);die;

        return view('admin.all_product',$category);
    }
         
    
    
      public function delete_product(Request $request,$id,$status)
    {
          
 $id=base64_decode($id);
if($status==0)
{
    $Product=new Product(); 
    $dataarrray['status']=1;
    $Product->find($id)->update($dataarrray); 
    return   redirect('admin/all_product')->with('successs', 'status changed successfully');
}
else
{
   $Product=new Product(); 
    $dataarrray['status']=0;
    $Product->find($id)->update($dataarrray); 
    return   redirect('admin/all_product')->with('successs', 'status changed successfully'); 
}
       
    }
    
    
         }

