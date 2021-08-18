<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Productcategorie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class Product_categories extends Controller
{
    private $fileName;
    public function index()
    {
         $category['category']=Productcategorie::all();
      

        return view('admin.allcategories',$category);
    }
      public function add_categories(Request $request)
    {

          if(!empty($request->post()))
          {
             $request->validate([
            'category_name'=>'required',
            'category_description'=>'required',
             'cat_image'=>'required|mimes:jpeg,png|max:2048',
            
        ]);
             $fileName = time().'.'.$request->cat_image->extension(); 
             $request->cat_image->move(public_path('assets\images\products\categories'),$fileName);
             
             $categoeies=new Productcategorie();
              $categoeies->category_name =  $request->get('category_name');
        $categoeies->category_description =  $request->get('category_description');
         $categoeies->cat_image=$fileName;
         $categoeies->status='0';
         $categoeies->save();
        
       return   redirect('admin/all_category')->with('successs', 'Category added successfully');
          }

        return view('admin.add_categories');
    }
      public function delete_categories(Request $request,$id,$status)
    {
          
 $id=base64_decode($id);
if($status==0)
{
    $categoeies=new Productcategorie(); 
    $dataarrray['status']=1;
    $categoeies->find($id)->update($dataarrray); 
    return   redirect('admin/all_category')->with('successs', 'status changed successfully');
}
else
{
   $categoeies=new Productcategorie(); 
    $dataarrray['status']=0;
    $categoeies->find($id)->update($dataarrray); 
    return   redirect('admin/all_category')->with('successs', 'status changed successfully'); 
}
       
    }
    
    
    public function edit_category(Request $request,$id)
    {
     $id= base64_decode($id);
     $category['category']= Productcategorie::find($id);
    
      return view('admin.edit_productcategories',$category);
    }
    
     public function save_edit_category(Request $request)
    {
        if(!empty($request->post()))
    {
         $request->validate([
            'category_name'=>'required',
            'category_description'=>'required',
        ]);
         if(!empty($request->cat_image))
         {
              $request->validate([
             'cat_image'=>'mimes:jpeg,png|max:2048',
            
        ]);
             $this->fileName = time().'.'.$request->cat_image->extension(); 
//             print_r($this->fileName);die;
             $request->cat_image->move(public_path('assets\images\products\categories'),$this->fileName);
             }
             
              $dataarrray=array(
        "category_name" => $request->get('category_name'),
        "category_description" =>  $request->get('category_description'),
        "cat_image" =>  $this->fileName?$this->fileName:$request->get('cat_image_old')
                      );
              Productcategorie::find($request->id)->update($dataarrray);
               return   redirect('admin/all_category')->with('successs', 'Updated  successfully');
             
    }
            
    }
}
