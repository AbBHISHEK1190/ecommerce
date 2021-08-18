@extends('layouts.admin')
@section('content')  
<div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
<!--                            <div class="card-header"><strong>Company</strong><small> Form</small></div>-->
                            <p style="color:red">@if($errors->any())
    {{ implode('', $errors->all()) }}
@endif
  </p>
                            <form action="{{url('admin/add_categories')}}" method="post"  enctype="multipart/form-data">
                      @csrf                   
                            <div class="card-body card-block">
                                 
                                <div class="form-group"><label for="company" class=" form-control-label">Category Name</label><input type="text" name="category_name" id="company" placeholder="Product Name" class="form-control" required></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">Category Description</label>
                                  
                                      <textarea class="form-control" name="category_description" rows="2" cols="50" required>

</textarea>
                                </div>
                                         
                                                     <div class="form-group"><label for="country" class=" form-control-label">Category image</label><input type="file" name="cat_image" id="file" class="form-control"   required></div>
                                                    
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