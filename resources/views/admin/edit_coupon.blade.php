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
                            <form action="{{url('admin/edit_coupon',[base64_encode($category->c_id)])}}" method="get"  >
                      @csrf                   
                            <div class="card-body card-block">
                                <input type="hidden" name="id" value="{{$category->c_id}}">
                                
                                <div class="form-group"><label for="company" class=" form-control-label">Minimum amount required for shoping</label><input type="text" name="minimum_amount" id="company" placeholder="Product Name" class="form-control" required value='{{$category->minimum_amount}}'></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Dicount money amount</label><input type="text" name="discount_money" id="company" placeholder="Product Name" class="form-control" required value='{{$category->discount_money}}'></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Start date</label><input type="date" name="start_date" id="company" placeholder="Product Name" class="form-control" required value='{{$category->start_date}}'></div>
                                <div class="form-group"><label for="company" class=" form-control-label">End date</label><input type="date" name="end_date" id="company" placeholder="Product Name" class="form-control" required value='{{$category->end_date}}'></div>
                                
                                         
                                                     
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