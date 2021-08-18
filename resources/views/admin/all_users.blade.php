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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Address1</th>
                                            <th>Address2</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Pincode</th>
                                            <th>Country</th>
                                            <th>Joining date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $key => $cat)
                                        <tr>
                                          
                                            <td>{{++$key}}</td>
                                            <td>{{$cat->name}}</td>
                                            <td>{{$cat->email}}</td>
                                            <td>{{$cat->mobile}}</td>
                                            <td>{{$cat->address1}}</td>
                                            <td>{{$cat->address2}}</td>
                                            <td>{{$cat->city}}</td>
                                            <td>{{$cat->state}}</td>
                                            <td>{{$cat->postal_code}}</td>
                                            <td>{{$cat->country}}</td>
                                            <td>{{$cat->created_at}}</td>
                                            
                                                                                                                      
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