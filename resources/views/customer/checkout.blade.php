@extends('layouts.customer')

@section('content')
<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{url('')}}">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
<!--                    <h1 class="title">Checkout</h1>-->
<!--                    <p class="title-desc">Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra.</p>-->
                </header>
                <div class="xs-margin">
                    
                </div>
                <span class="alert-warning">@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif</span>
                                 <form action="{{url('add_address')}}" id="checkout-form" method="post">
                    @csrf
                    <div class="panel-group custom-accordion" id="checkout">

                        <div class="panel">
<!--                            <div class="accordion-header">
                                <div class="accordion-title">2 Step: <span>Billing Information</span>
                                </div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#billing"></a>
                            </div>-->
<!--                            <div  class="collapse">
                                <div class="panel-body">-->
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h2 class="checkout-title">Your billing details</h2>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="input-icon input-icon-user">
                                                        
                                                    </span>
                                                    <span class="input-text">Name&#42;</span></span>
                                                    <input type="text" required class="form-control input-lg" name="name" placeholder="Your  Name" value="{{Auth::user()->name}}">
                                            </div>
                                           
<!--                                           <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="input-icon input-icon-email">
                                                        
                                                    </span>
                                                    <span class="input-text">Email&#42;</span>
                                                        
                                                </span>
                                                <input type="text" required class="form-control input-lg" placeholder="Your Email">
                                            </div>-->
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="input-icon input-icon-phone">
                                                        
                                                    </span>
                                                    <span class="input-text">Mobile&#42;</span></span> 
                                                    <input type="text" required class="form-control input-lg" placeholder="Your mobile" name="mobile" value="{{Auth::user()->mobile}}">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="input-icon input-icon-address"></span>
                                                    <span class="input-text">Address 1</span></span>
                                                    <input type="text" class="form-control input-lg" name="address1" placeholder="Address 1" value="{{Auth::user()->address1}}"></div>
                                                    <div class="input-group xlg-margin">
                                                        <span class="input-group-addon">
                                                            <span class="input-icon input-icon-address"></span>
                                                            <span class="input-text">address 2&#42;</span>
                                                                
                                                        </span>
                                                        <input type="text" required class="form-control input-lg" name="address2" placeholder="address 2" value="{{Auth::user()->address2}}">
                                                    </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="input-icon input-icon-city">
                                                        
                                                    </span>
                                                    <span class="input-text">City&#42;</span>
                                                        
                                                </span>
                                                <input type="text"  class="form-control input-lg" name="city" placeholder="City" value="{{Auth::user()->city}}">
                                            </div>
                                            <div class="input-group xlg-margin">
                                                <span class="input-group-addon">
                                                    <span class="input-icon input-icon-region"></span>
                                                    <span class="input-text">State&#42;</span>
                                                        
                                                </span> 
                                                <input type="text" name="state" required class="form-control input-lg" placeholder="Your state" value="{{Auth::user()->state}}">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="input-icon input-icon-postcode"></span>
                                                    <span class="input-text">Pin Code&#42;</span>
                                                        
                                                </span> 
                                                <input type="text" required class="form-control input-lg" name="postal_code" placeholder="Your Postal Code" value="{{Auth::user()->postal_code}}">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="input-icon input-icon-country"></span>
                                                    <span class="input-text">Country&#42;</span>
                                                        
                                                </span> 
                                                <input type="text"  class="form-control input-lg" name="country" placeholder="Country" value="India">
                                            </div>
                                            
<!--                                            <div class="input-group custom-checkbox sm-margin">
                                                <input type="checkbox"> 
                                                <span class="checbox-container">
                                                    <i class="fa fa-check"></i>
                                                </span> My delivery and billing addresses are the same.</div>
                                            <a href="#" class="btn btn-custom-2">CONTINUE</a>-->

                                        </div>
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h2 class="checkout-title">Your Address</h2>
                                            
                                            
                                            <div class="input-group custom-checkbox md-margin">
                                                <input type="checkbox"> 
                                                <span class="checbox-container">
                                                    <i class="fa fa-check"></i>
                                                </span> I have reed and agree to the <a href="#">Privacy Policy</a>.</div>
                                            <a href="#" class="btn btn-custom-2">CONTINUE</a>
                                        </div>-->
                                    </div>
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                        
                        
<!--                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">5 Step: <span>Payment Method</span>
                                </div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#payment-method">
                                    
                                </a>
                            </div>
                            <div id="payment-method" class="collapse">
                                <div class="panel-body">
                                    <p>Choose your payment method.</p>
                                </div>
                            </div>
                        </div>-->
                        
                    </div>
                    
                  <button class="btn btn-custom-2"  type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save/Edit address</button>
				  
                
                </form>
                <div class="xlg-margin">
                    
                </div>
<!--                  <div class="lg-margin">
                          
                      </div>
                       
            </div>
                
        </div>
            
    </div>
</section>-->
    
@endsection