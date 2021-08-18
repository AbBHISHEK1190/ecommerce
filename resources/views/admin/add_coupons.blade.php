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
                            <form action="{{url('admin/add_coupons')}}" method="post" >
                      @csrf                   
                            <div class="card-body card-block">
                                 
                                <div class="form-group"><label for="company" class=" form-control-label">Minimum amount required for shoping</label><input type="text" name="minimum_amount" id="company" placeholder="Product Name" class="form-control" required></div>
                                  <div class="form-group"><label for="company" class=" form-control-label">Dicount money amount</label><input type="text" name="discount_money" id="company" placeholder="Product Name" class="form-control" required></div>       
                                  
                                  <div class="form-group"><label for="company" class=" form-control-label">Start date</label><input type="date" name="start_date" id="company" placeholder="Product Name" class="form-control" required></div>       
                                  <div class="form-group"><label for="company" class=" form-control-label">End date</label><input type="date" name="end_date" id="company" placeholder="Product Name" class="form-control" required></div>       
<!--                                                     <div class="form-group"><label for="country" class=" form-control-label">Category image</label><input type="file" name="cat_image" id="file" class="form-control"   required></div>-->
                                                    
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