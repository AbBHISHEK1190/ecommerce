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
                                            <th>Coupon code</th>
                                            <th>Minimum amount</th>
                                            <th>Dicount money</th>
                                            <th>Start date</th>
                                            <th>End date</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $key => $cat)
                                        <tr>
                                          
                                            <td>{{++$key}}</td>
                                            <td>{{$cat->code}}</td>
                                            <td>{{$cat->minimum_amount}}</td>
                                            <td>{{$cat->discount_money}}</td>
                                            <td>{{$cat->start_date}}</td>
                                            <td>{{$cat->end_date}}</td>
                                          
                                                                                       <td>   
                                                @if($cat->status==1)
                                                  <a href="{{url('admin/delete_coupons',[base64_encode($cat->c_id),$cat->status])}}"> <button style='font-size:14px;color:#3366ff'>Button <i class='fa fa-toggle-on'></i></button></a>
                                                  @else
                                                   <a href="{{url('admin/delete_coupons',[base64_encode($cat->c_id),$cat->status])}}"> <button style='font-size:14px;color:#3366ff'>Button <i class='fa fa-toggle-off'></i></button></a>
                                                   @endif
                                                  
                                            </td>
                                            <td>
                                                <a href="{{url('admin/edit_coupon',[base64_encode($cat->c_id)])}}">  <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
        

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