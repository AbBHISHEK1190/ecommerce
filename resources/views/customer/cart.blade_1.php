@extends('layouts.customer')
@section('content') 

     <section id="content">
	<div id="breadcrumb-container">
		<div class="container">
			<ul class="breadcrumb">
				<li>
                            <a href="https://localhost/devansh/">Home</a>
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
										<a href="https://localhost/devansh/product/NDc=">
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
											<i class="fa fa-angle-up"  onclick="quantitys('3','47','increase');">

											</i>
										</a> 
										<a href="#" onclick="return!1" class="quantity-btn quantity-input-down">
											<i class="fa fa-angle-down" onclick="quantitys('3','47','decrease');">

											</i>
										</a>
									</div>
								</td>
								<td class="item-total-col">
									<span class="item-price-special">₹ {{(int) ($data->mrp-($data->mrp*$data->discount_available/100))*$data->quantity}}</span>
                                                      <a href="{{url('delete_cart',$data->product_id)}}" class="close-button">

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
                                                                                                                        <td id="mrprpcost">{{$mrps}}</td>
									</tr>
								</tfoot>
							</table>
							<div class="md-margin">

							</div>
    <a href="https://localhost/devansh/" class="btn btn-custom-2">CONTINUE SHOPPING</a> 
    
    <a href="https://localhost/devansh/checkout" class="btn btn-custom" id="onbuttonsubmit">CHECKOUT</a>
    
						</div>
					</div>
<!--					<div class="md-margin2x">

					</div>

										</div>
									</div>
								</div>
							</section>
    -->

    
@endsection