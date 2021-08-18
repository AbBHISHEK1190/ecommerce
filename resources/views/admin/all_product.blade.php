@extends('layouts.admin')
@section('content') 
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            @if (\Session::has('successs'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('successs') !!}</li>
        </ul>
    </div>
@endif
                            <div class="card-header">
                                <strong class="card-title"></strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Category</th>
                                            <th>Product name</th>
                                            <th>Product description</th>
                                            <th>mrp</th>
                                            <th>Discount</th>
                                            <th>image1</th>
                                            <th>image2</th>
                                            <th>image3</th>
                                            <th>image4</th>
                                            <th>image5</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $key => $cat)
                                        
                                        <tr>
                                          
                                            <td>{{++$key}}</td>
                                            <td>{{$cat->category_name}}</td>
                                            <td>{{$cat->product_name}}</td>
                                            <td>{{$cat->product_description}}</td>
                                            <td>{{$cat->mrp}}</td>
                                            <td>{{$cat->discount_available}}%</td>
                                            
                                            <td><img src="{{asset('assets/images/products/')}}/{{$cat->image1}}" alt="" class="img-fluid"></td>
                                            <td><img src="{{asset('assets/images/products/')}}/{{$cat->image2}}" alt="" class="img-fluid"></td>
                                            <td><img src="{{asset('assets/images/products/')}}/{{$cat->image3}}" alt="" class="img-fluid"></td>
                                            <td><img src="{{asset('assets/images/products/')}}/{{$cat->image4}}" alt="" class="img-fluid"></td>
                                            <td><img src="{{asset('assets/images/products/')}}/{{$cat->image5}}" alt="" class="img-fluid"></td>
                                                                                                                                                                  <td>   
                                                @if($cat->status==1)
                                                  <a href="{{url('admin/delete_product',[base64_encode($cat->product_id),$cat->status])}}"> <button style='font-size:14px;color:#3366ff'>Button <i class='fa fa-toggle-on'></i></button></a>
                                                  @else
                                                   <a href="{{url('admin/delete_product',[base64_encode($cat->product_id),$cat->status])}}"> <button style='font-size:14px;color:#3366ff'>Button <i class='fa fa-toggle-off'></i></button></a>
                                                   @endif
                                                  
                                            </td>
                                            <td>
                                                <a href="{{url('admin/edit_product',[base64_encode($cat->product_id)])}}">  <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
        

                                            </td>
                                        </tr>
                                      @endforeach  
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>
@endsection