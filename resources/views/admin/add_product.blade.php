@extends('layouts.admin')
@section('content')  
<div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
<!--                            <div class="card-header"><strong>Company</strong><small> Form</small></div>-->
                            <p style="color:red">  </p>
                            <form action="{{url('admin/add_product')}}" method="post"  enctype="multipart/form-data">
                                         @csrf
                            <div class="card-body card-block">
                                 <div class="form-group">
                                     <p class="text-danger" id="gstdiv1"></p>
                                     <label for="street" class=" form-control-label">Category Name</label>
                                     
                                     <select name="category_id" class="form-control"  required>
                                         <option></option>
                                        @foreach($category as $cat)
                                        <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                                        @endforeach
                                     </select>
                                 </div>
                                <div class="form-group"><label for="company" class=" form-control-label">Product Name</label><input type="text" name="product_name" id="company" placeholder="Product Name" class="form-control" required></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">Product Description</label>
                                  
                                      <textarea class="form-control" name="product_description" rows="2" cols="50" required>

</textarea>
                                </div>
                                    <div class="form-group"><label for="street" class=" form-control-label">Price(mrp)</label><input type="number" name="mrp" id="street" placeholder="Price(mrp)" class="form-control" required></div>
                                                  
                                                    
                                    <div class="form-group"><label for="country" class=" form-control-label">Discount Percentage</label><input type="number" name="discount_available" id="country" placeholder="Discount percentage" class="form-control" required></div>
<!--                                     <div class="form-group"><label for="country" class=" form-control-label">Product Available</label>-->
<!--                                         <input type="hidden" name="product_available" id="country" placeholder="Product Available" class="form-control" value="0">-->
<!--                                     </div>-->
                                    
                                             <div class="form-group"><label for="country" class=" form-control-label">Upload product image1</label><input type="file" name="image1"  id="file" class="form-control"   required></div>
                                             
                                  
                                             
                                             <div class="form-group"><label for="country" class=" form-control-label">Upload product image2</label><input type="file" name="image2" id="file" class="form-control"   required></div>
                                                 <div class="form-group"><label for="country" class=" form-control-label">Upload product image3</label><input type="file" name="image3" id="file" class="form-control"   required></div>
                                                 
                                                   <div class="form-group"><label for="country" class=" form-control-label">Upload product image4</label><input type="file" name="image4" id="file" class="form-control"   required></div>
                                                     <div class="form-group"><label for="country" class=" form-control-label">Upload product image5</label><input type="file" name="image5" id="file" class="form-control"   required></div>
                                                    
                                                    <button type="submit" class="btn btn-primary btn-sm" id="myBtn">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                       </form>
                                                    
                                                    </div>
                                                </div>
                                            </div>

                                        
                                            </div>
                                        </div><!-- .animated -->
                                    </div>
@endsection