@extends('layouts.customer')
@section('content')
@if(!empty($mycartdata) && count($mycartdata)>0)

 <section id="content">
	<div id="breadcrumb-container">
		<div class="container">
			<ul class="breadcrumb">
				<li>
                            <a href="{{url('')}}">Home</a>
				</li>
				<li class="active">Shopping Cart</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header class="content-title">
					<h1 class="title">Shopping Cart</h1>
<!--					<p class="title-desc">Just this week, you can use the free premium delivery.</p>-->
				</header>
				<div class="xs-margin">

				</div>
				<div class="row">
					<div class="col-md-12 table-responsive">
						<table class="table cart-table">
							<thead>
								<tr>
									<th class="table-title">Product Name</th>
<!--									<th class="table-title">Product Code</th>-->
									<th class="table-title">Unit Price</th>
                                                      <th class="table-title">Discount %</th>
									<th class="table-title">Quantity</th>
									<th class="table-title">SubTotal</th>
								</tr>
							</thead>
                                      
							<tbody>
                                          
                                                
                     @for ($i = 0; $i <count($mycartdata); $i++)

                                            <tr>
									<td class="item-name-col"><figure>
										<a href="{{url('product_description')}}/{{base64_encode($mycartdata[$i]['0']->product_id)}}">
											<img src="{{asset("assets/images/products/")}}/{{$mycartdata[$i]['0']->image1}}" alt="Lowlands Lace Blouse">
										</a>
									</figure>
                                                          <header class="item-name"><a>{{$mycartdata[$i]['0']->product_name}}</a>
									</header>
<!--									<ul>
										<li>Color: White</li>
										<li>Size: SM</li>
									</ul>-->
								</td>
<!--								<td class="item-code">MP125984154</td>-->
								<td class="item-price-col">
									<span class="item-price-special">{{$mycartdata[$i]['0']->mrp}}</span>
								</td>
                                                <td class="item-price-col">
									<span class="item-price-special">{{$mycartdata[$i]['0']->discount_available}}</span>
								</td>
								<td>
                                                    <div class="custom-quantity-input">
										<input  name="quantity"  value="{{$mycartdata[$i]['0']->quantity}}">
										 <a href="#" onclick="return!1" class="quantity-btn quantity-input-up">
											<i class="fa fa-angle-up"  onclick="quantitys('{{$mycartdata[$i]['0']->quantity}}','{{$mycartdata[$i]['0']->product_id}}','increase');">

											</i>
										</a> 
										<a href="#" onclick="return!1" class="quantity-btn quantity-input-down">
											<i class="fa fa-angle-down" onclick="quantitys('{{$mycartdata[$i]['0']->quantity}}','{{$mycartdata[$i]['0']->product_id}}','decrease');">

											</i>
										</a>
									</div>
								</td>
								<td class="item-total-col">
									<span class="item-price-special">₹ {{(int) ($mycartdata[$i]['0']->mrp-($mycartdata[$i]['0']->mrp*$mycartdata[$i]['0']->discount_available/100))*$mycartdata[$i]['0']->quantity}}</span>
         <a onclick="deletecartdata('{{$mycartdata[$i]['0']->product_id}}');" class="close-button">

									 </a>
									</td>
								</tr>    
  								
                                              
                                                @endfor
                        								
                        								
                                                                
								
								
								</tbody>
							</table>
						</div>
					</div>
					<div class="lg-margin">
<!--discount-->
	<div class="row">
						<div class="col-md-8 col-sm-12 col-xs-12 lg-margin">
							<div class="tab-container left clearfix">
								<ul class="nav-tabs">
									
									<li>
										<a href="#discount" data-toggle="tab">Discount Code</a>
									</li>
									
								</ul>
								<div class="tab-content clearfix">

									<div class="tab-pane" id="discount">
										<p>Enter your discount coupon code here.</p>
                                                            <form  method="POST">
                                                              <input type="hidden" name="my_own_ecom_csrf_test_name" value="1c41106490b944653cd5f8c46ed7ab7a" id="csscscscrf" />

											<div class="input-group">
                                                                      <input type="text"   name="code" id="codesname" class="form-control" placeholder="Coupon code" required>
											</div>
<!--											<input type="button" id="mycoupons" class="btn btn-custom-2" value="APPLY COUPON">-->
<button type="button"  class="btn btn-custom-2" id="mycoupons"  name="submit" >APPLY COUPON</button>
										</form>
									</div>
									
								</div>
							</div>
						</div>
					
<!--					</div>-->
<!--end discount-->
<!--					</div>
					<div class="row">-->
<!--<div style="left: 780px;" class="col-md-4 col-sm-12 col-xs-12">-->
<div  class="col-md-4 col-sm-12 col-xs-12">
							<table id="testing" class="table total-table">
        <tr>
										<td>Total:</td>
                                                           <?php 
                                                           $mrps=0;
                                             for($j=0;$j<count($mycartdata);$j++){
                                                              
            $mrps +=(int) ($mycartdata[$j]['0']->mrp-($mycartdata[$j]['0']->mrp*$mycartdata[$j]['0']->discount_available/100))*$mycartdata[$j]['0']->quantity;
         
                                                           
                                                           }   
                                                           ?> 
                                                                                                                        <td id="mrprpcost">
                                                                                                                            
                                                                                                                                 @if(count(Session::get('coupon_codes'))>0)
           <?php $couponcode= Session::get('coupon_codes');
           echo $mrps-$couponcode['0']['discount_money'];
           
           ?>                                                                      @else  
           {{$mrps}} 
                  @endif                                                                                               
                                                                                                                            </td>
									</tr>

								<tfoot>
									
								</tfoot>
							</table>
							<div class="md-margin">

							</div>
    <a href="{{url('')}}" class="btn btn-custom-2">CONTINUE SHOPPING</a> 
    
    <a  href="{{url('checkout')}}" class="btn btn-custom">CHECKOUT</a>
    
						</div>
					</div>
<!--					<div class="md-margin2x">

					</div>

										</div>
									</div>
								</div>
							</section>
    -->





@elseif(count(Session::get('cart_data'))>0)
     <section id="content">
	<div id="breadcrumb-container">
		<div class="container">
			<ul class="breadcrumb">
				<li>
                            <a href="{{url('')}}">Home</a>
				</li>
				<li class="active">Shopping Cart</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header class="content-title">
					<h1 class="title">Shopping Cart</h1>
<!--					<p class="title-desc">Just this week, you can use the free premium delivery.</p>-->
				</header>
				<div class="xs-margin">

				</div>
				<div class="row">
					<div class="col-md-12 table-responsive">
						<table class="table cart-table">
							<thead>
								<tr>
									<th class="table-title">Product Name</th>
<!--									<th class="table-title">Product Code</th>-->
									<th class="table-title">Unit Price</th>
                                                      <th class="table-title">Discount %</th>
									<th class="table-title">Quantity</th>
									<th class="table-title">SubTotal</th>
								</tr>
							</thead>
                                      
							<tbody>
                                                @foreach(Session::get('cart_data') as $data)

  								<tr>
									<td class="item-name-col"><figure>
										<a href="{{url('product_description',[base64_encode($data->product_id)])}}">
											<img src="{{asset("assets/images/products/$data->image1")}}" alt="Lowlands Lace Blouse">
										</a>
									</figure>
                                                          <header class="item-name"><a>{{$data->product_name}}</a>
									</header>
<!--									<ul>
										<li>Color: White</li>
										<li>Size: SM</li>
									</ul>-->
								</td>
<!--								<td class="item-code">MP125984154</td>-->
								<td class="item-price-col">
									<span class="item-price-special">{{$data->mrp}}</span>
								</td>
                                                <td class="item-price-col">
									<span class="item-price-special">{{$data->discount_available}}</span>
								</td>
								<td>
                                                    <div class="custom-quantity-input">
										<input  name="quantity"  value="{{$data->quantity}}">
										 <a href="#" onclick="return!1" class="quantity-btn quantity-input-up">
											<i class="fa fa-angle-up"  onclick="quantitys('{{$data->quantity}}','{{$data->product_id}}','increase');">

											</i>
										</a> 
										<a href="#" onclick="return!1" class="quantity-btn quantity-input-down">
											<i class="fa fa-angle-down" onclick="quantitys('{{$data->quantity}}','{{$data->product_id}}','decrease');">

											</i>
										</a>
									</div>
								</td>
								<td class="item-total-col">
									<span class="item-price-special">₹ {{(int) ($data->mrp-($data->mrp*$data->discount_available/100))*$data->quantity}}</span>
         <a onclick="deletecartdata('{{$data->product_id}}');" class="close-button">

									 </a>
									</td>
								</tr>
                                                @endforeach
                        								
                        								
                                                                
								
								
								</tbody>
							</table>
						</div>
					</div>
					<div class="lg-margin">
<!--discount-->
	<div class="row">
						<div class="col-md-8 col-sm-12 col-xs-12 lg-margin">
							<div class="tab-container left clearfix">
								<ul class="nav-tabs">
									
									<li>
										<a href="#discount" data-toggle="tab">Discount Code</a>
									</li>
									
								</ul>
								<div class="tab-content clearfix">

									<div class="tab-pane" id="discount">
										<p>Enter your discount coupon code here.</p>
                                                            <form  method="POST">
                                                              <input type="hidden" name="my_own_ecom_csrf_test_name" value="1c41106490b944653cd5f8c46ed7ab7a" id="csscscscrf" />

											<div class="input-group">
                                                                      <input type="text"   name="code" id="codesname" class="form-control" placeholder="Coupon code" required>
											</div>
<!--											<input type="button" id="mycoupons" class="btn btn-custom-2" value="APPLY COUPON">-->
<button type="button"  class="btn btn-custom-2" id="mycoupons"  name="submit" >APPLY COUPON</button>
										</form>
									</div>
									
								</div>
							</div>
						</div>
					
<!--					</div>-->
<!--end discount-->
<!--					</div>
					<div class="row">-->
<!--<div style="left: 780px;" class="col-md-4 col-sm-12 col-xs-12">-->
<div  class="col-md-4 col-sm-12 col-xs-12">
							<table id="testing" class="table total-table">

								<tfoot>
									<tr>
										<td>Total:</td>
                                                           <?php 
                                                           $mrps=0;
                                          
                                                
                                                           if(!empty(Session::get('cart_data'))) foreach(Session::get('cart_data') as $cardatas){
                                                              
            $mrps +=(int) ($cardatas->mrp-($cardatas->mrp*$cardatas->discount_available/100))*$cardatas->quantity;
         
                                                           }
                                                              
                                                           ?> 
                                                                                                                        <td id="mrprpcost">
                                                                                                                            @if(count(Session::get('coupon_codes'))>0)
           <?php $couponcode= Session::get('coupon_codes');
           echo $mrps-$couponcode['0']['discount_money'];
           
           ?>                                                                      @else  
           {{$mrps}} 
                  @endif                                                                                                      </td>
									</tr>
								</tfoot>
							</table>
							<div class="md-margin">

							</div>
    <a href="{{url('')}}" class="btn btn-custom-2">CONTINUE SHOPPING</a> 
    
    <a  class="btn btn-custom" id="onbuttonsubmit">CHECKOUT</a>
    
						</div>
					</div>
<!--					<div class="md-margin2x">

					</div>

										</div>
									</div>
								</div>
							</section>
    -->

            @else
   
    
    <section id="content">
	<div id="breadcrumb-container">
		<div class="container">
			<ul class="breadcrumb">
				<li>
                            <a href="{{url('')}}">Home</a>
				</li>
				<li class="active">Shopping Cart</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header class="content-title">
					<h1 class="title">Shopping Cart</h1>
<!--					<p class="title-desc">Just this week, you can use the free premium delivery.</p>-->
				</header>
				<div class="xs-margin">

				</div>
				<div class="row">
					<div class="col-md-12 table-responsive">
						<table class="table cart-table">
							<thead>
								<tr>
									<th class="table-title">Product Name</th>
<!--									<th class="table-title">Product Code</th>-->
									<th class="table-title">Unit Price</th>
                                                      <th class="table-title">Discount %</th>
									<th class="table-title">Quantity</th>
									<th class="table-title">SubTotal</th>
								</tr>
							</thead>
                                      
							<tbody>
                                                                                                  
                                                <tr>
                                                    <td class="item-name-col">Cart is empty</td>
                                                     <td class="item-name-col">Cart is empty</td>
                                                      <td class="item-name-col">Cart is empty</td>
                                                       <td class="item-name-col">Cart is empty</td>
                                                        <td class="item-name-col">Cart is empty</td>
                                                </tr>
                                         
                        								
								
								</tbody>
							</table>
						</div>
					</div>
					<div class="lg-margin">

					</div>
					<div class="row">

<div style="left: 780px;" class="col-md-4 col-sm-12 col-xs-12">
							<table class="table total-table">
<!--								<tbody>
									<tr>
										<td class="total-table-title">Subtotal:</td>
										<td>$434.50</td>
									</tr>
									<tr>
										<td class="total-table-title">Shipping:</td>
										<td>$6.00</td>
									</tr>
									<tr>
										<td class="total-table-title">TAX (0%):</td>
										<td>$0.00</td>
									</tr>
								</tbody>-->
								<tfoot>
									<tr>
										<td>Total:</td>
                                                            
                                                                                                                      <td class="item-price-col">  0</td>
									</tr>
								</tfoot>
							</table>
							<div class="md-margin">

							</div>
    <a href="{{url('')}}" class="btn btn-custom-2">CONTINUE SHOPPING</a> 
        <a  class="btn btn-custom" id="onbuttonsubmitonbuttonsubmit">CHECKOUT</a>
    						</div>
					</div>
					<div class="md-margin2x">

					</div>

<!--											</div>
										</div>
									</div>
								</div>
							</section>-->
@endif
@endsection