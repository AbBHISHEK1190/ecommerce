 <!DOCTYPE html>
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->
<head><meta charset="utf-8">
<title>Venedor - Responsive eCommerce Template</title>
<meta name="description" content="Responsive modern ecommerce Html5 Template">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300" rel="stylesheet" id="googlefont">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"><link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/prettyPhoto.css')}}"><link rel="stylesheet" href="{{asset('assets/css/colpick.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}"><link rel="stylesheet" href="{{asset('assets/css/revslider.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}"><link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
<link rel="icon" type="image/png" href="{{asset('assets/images/icons/icon.png')}}">
<link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/images/icons/apple-icon-57x57.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/icons/apple-icon-72x72.png')}}">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>
<script>window.jQuery||document.write('<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"><\/script>');</script>
<!--[if lt IE 9]><script src="https://localhost/devansh/assets/js/html5shiv.js"></script>
            <script src="https://localhost/devansh/assets/js/respond.min.js"></script>
			<![endif]--><style id="custom-style"></style></head><body>
    @include('layouts.alert')
<!--    <div id="option-panel">
			<div id="option-panel-wrapper">
                      <div id="option-panel-btn"></div>
                      <div id="option-panel-container">
			<ul id="option-panel-tabs-container" class="clearfix"><li class="active">
			<a href="#panel-layout" data-toggle="tab" data-panel-title="Layout"></a>
			</li><li><a href="#panel-home" data-toggle="tab" data-panel-title="Background Settings">
			</a></li><li><a href="#panel-color" data-toggle="tab" data-panel-title="Color Settings"></a>
			</li><li><a href="#panel-font" data-toggle="tab" data-panel-title="Font Settings"></a></li>
			<li><a id="option-close" href="#"></a></li>
			</ul>
			<div id="option-panel-title" class="clearfix">
			<span>Layout</span>
			<a href="#" id="option-panel-reset">Reset</a>
                  </div>
                          <div id="option-panel-content" class="tab-content">
			<div class="tab-pane fade in active" id="panel-layout">
			<div id="panel-option-layout" class="panel-group custom-accordion sm-accordion"><div class="panel">
			<div class="accordion-header">
			<div class="accordion-title"><span>Layout</span></div>
			<a class="accordion-btn opened" data-toggle="collapse" data-target="#document-layout" data-parent="#panel-option-layout"></a>
			</div>
			<div id="document-layout" class="collapse in">
			<div class="panel-body"><ul class="layout-style-list clearfix">
			<li data-layout="fullwidth"><img src="https://localhost/devansh/assets/images/panel/fullwidth.png" alt="Fullwidth">
			<p>Fullwidth</p>
			</li>
			<li data-layout="boxed">
			<img src="https://localhost/devansh/assets/images/panel/boxed.png" alt="Boxed">
			<p>Boxed</p>
			</li>
			</ul>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="tab-pane fade" id="panel-home">
			<div id="panel-home-accordion" class="panel-group custom-accordion sm-accordion">
			<div class="panel">
			<div class="accordion-header">
			<div class="accordion-title">
			<span>Basic Color</span>
			</div>
			<a class="accordion-btn opened" data-toggle="collapse" data-target="#body-background-color" data-parent="#panel-home-accordion">
			</a>
			</div>
			<div id="body-background-color" class="collapse in">
			<div class="panel-body">
			<div id="panel-color-picker">
			</div>
			</div>
			</div>
			</div>
			<div class="panel">
			<div class="accordion-header">
			<div class="accordion-title">
			<span>Patterns</span>
			</div>
			<a class="accordion-btn" data-toggle="collapse" data-target="#body-background-pattern" data-parent="#panel-home-accordion">
			</a>
			</div>
			<div id="body-background-pattern" class="collapse">
			<div class="panel-body">
			<ul class="clearfix pattern-box-list">
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern1.png" src="https://localhost/devansh/assets/images/patterns/pattern1.png" alt="pattern 1"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern2.png" src="https://localhost/devansh/assets/images/patterns/pattern2.png" alt="pattern 2"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern3.png" src="https://localhost/devansh/assets/images/patterns/pattern3.png" alt="pattern 3"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern4.png" src="https://localhost/devansh/assets/images/patterns/pattern4.png" alt="pattern 4"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern5.png" src="https://localhost/devansh/assets/images/patterns/pattern5.png" alt="pattern 5"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern6.png" src="https://localhost/devansh/assets/images/patterns/pattern6.png" alt="pattern 6"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern7.png" src="https://localhost/devansh/assets/images/patterns/pattern7.png" alt="pattern 7"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern8.png" src="https://localhost/devansh/assets/images/patterns/pattern8.png" alt="pattern 8"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern9.png" src="https://localhost/devansh/assets/images/patterns/pattern9.png" alt="pattern 9"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern10.png" src="https://localhost/devansh/assets/images/patterns/pattern10.png" alt="pattern 10"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern11.png" src="https://localhost/devansh/assets/images/patterns/pattern11.png" alt="pattern 11"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern12.png" src="https://localhost/devansh/assets/images/patterns/pattern12.png" alt="pattern 12"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern13.png" src="https://localhost/devansh/assets/images/patterns/pattern13.png" alt="pattern 13"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern14.png" src="https://localhost/devansh/assets/images/patterns/pattern14.png" alt="pattern 14"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern15.png" src="https://localhost/devansh/assets/images/patterns/pattern15.png" alt="pattern 15"></li><li>
			<img data-src="https://localhost/devansh/assets/images/patterns/pattern16.png" src="https://localhost/devansh/assets/images/patterns/pattern16.png" alt="pattern 16"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern17.png" src="https://localhost/devansh/assets/images/patterns/pattern17.png" alt="pattern 17"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern18.png" src="https://localhost/devansh/assets/images/patterns/pattern18.png" alt="pattern 18"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern19.png" src="https://localhost/devansh/assets/images/patterns/pattern19.png" alt="pattern 19">
			</li><li><img data-src="https://localhost/devansh/assets/images/patterns/pattern20.png" src="https://localhost/devansh/assets/images/patterns/pattern20.png" alt="pattern 20"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern21.png" src="https://localhost/devansh/assets/images/patterns/pattern21.png" alt="pattern 21"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern22.png" src="https://localhost/devansh/assets/images/patterns/pattern22.png" alt="pattern 22"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern23.png" src="https://localhost/devansh/assets/images/patterns/pattern23.png" alt="pattern 23"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern24.png" src="https://localhost/devansh/assets/images/patterns/pattern24.png" alt="pattern 24"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern25.png" src="https://localhost/devansh/assets/images/patterns/pattern25.png" alt="pattern 25"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern26.png" src="https://localhost/devansh/assets/images/patterns/pattern26.png" alt="pattern 26"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern27.png" src="https://localhost/devansh/assets/images/patterns/pattern27.png" alt="pattern 27"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern28.png" src="https://localhost/devansh/assets/images/patterns/pattern28.png" alt="pattern 28"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern29.png" src="https://localhost/devansh/assets/images/patterns/pattern29.png" alt="pattern 29"></li>
			<li><img data-src="https://localhost/devansh/assets/images/patterns/pattern30.png" src="https://localhost/devansh/assets/images/patterns/pattern30.png" alt="pattern 30"></li>
			</ul>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="tab-pane fade" id="panel-color">
			<div id="panel-color-accordion" class="panel-group custom-accordion sm-accordion">
			<div class="panel"><div class="accordion-header">
			<div class="accordion-title">
			<span>Green Mode</span>
			</div>
			<a class="accordion-btn opened" data-toggle="collapse" data-target="#color-mode" data-parent="#panel-color-accordion">
			</a>
			</div>
			<ul class="colorbox-list clearfix collapse in" id="color-mode">
			<li>
			<div class="color-box first-color">
			<span>
			</span>
			</div>
			<p>First Color</p>
			</li>
			<li>
			<div class="color-box second-color">
			<span></span>
			</div>
			<p>Second Color</p>
			</li>
			<li>
			<div class="color-box third-color">
			<span>
			</span>
			</div>
			<p>Third Color</p>
			</li>
			<li>
			<div class="color-box fourth-color">
			<span></span>
			</div>
			<p>Fourth Color</p>
			</li>
			</ul>
			</div>
			</div>
			</div>
			<div class="tab-pane fade" id="panel-font">
			<div id="panel-font-accordion" class="panel-group custom-accordion sm-accordion">
			<div class="panel">
			<div class="accordion-header">
			<div class="accordion-title">
			<span>First Font</span>
			</div>
			<a class="accordion-btn opened" data-toggle="collapse" data-target="#first-font-container" data-parent="#panel-font-accordion">
			</a>
			</div>
			<div class="collapse in" id="first-font-container">
			<select class="form-control" name="first-font" id="first-font">
			<option value="Arial">Arial</option>
			<option value="Open Sans">Open Sans</option>
			<option value="PT Sans">PT Sans</option>
			<option value="Lato">Lato</option>
			<option value="Roboto">Roboto</option>
			<option value="Droid Sans">Droid Sans</option>
			<option value="Ubuntu">Ubuntu</option>
			<option value="Arvo">Arvo</option>
			<option value="Droid Serif">Ubuntu</option>
			<option value="Nunito">Nunito</option>
			</select></div></div><div class="panel">
			<div class="accordion-header">
			<div class="accordion-title">
			<span>Second Font</span>
			</div>
			<a class="accordion-btn" data-toggle="collapse" data-target="#second-font-container" data-parent="#panel-font-accordion"></a>
			</div>
			<div class="collapse" id="second-font-container">
			<select class="form-control" name="second-font" id="second-font">
			<option value="Oswald">Oswald</option>
			<option value="Gudea">Gudea</option>
			<option value="Open Sans">Open Sans</option>
			<option value="PT Sans">PT Sans</option>
			<option value="Lato">Lato</option>
			<option value="Roboto">Roboto</option>
			<option value="Droid Sans">Droid Sans</option>
			<option value="Ubuntu">Ubuntu</option>
			<option value="Arvo">Arvo</option>
			<option value="Droid Serif">Droid Serif</option>
			<option value="Nunito">Nunito</option>
			</select></div></div><div class="panel">
			<div class="accordion-header">
			<div class="accordion-title">
			<span>Third Font</span>
			</div><a class="accordion-btn" data-toggle="collapse" data-target="#third-font-container" data-parent="#panel-font-accordion">
			</a>
			</div>
			<div class="collapse" id="third-font-container">
			<select class="form-control" name="third-font" id="third-font">
			<option value="PT Sans">PT Sans</option>
			<option value="Gudea">Gudea</option>
			<option value="Open Sans">Open Sans</option>
			<option value="Lato">Lato</option>
			<option value="Roboto">Roboto</option>
			<option value="Droid Sans">Droid Sans</option>
			<option value="Ubuntu">Ubuntu</option>
			<option value="Arvo">Arvo</option>
			<option value="Droid Serif">Droid Serif</option>
			<option value="Nunito">Nunito</option>
			</select>
			</div>
			</div>
			<div class="panel">
			<div class="accordion-header">
			<div class="accordion-title">
			<span>Fourth Font</span>
			</div>
			<a class="accordion-btn" data-toggle="collapse" data-target="#fourth-font-container" data-parent="#panel-font-accordion">
			</a>
			</div>
			<div class="collapse" id="fourth-font-container">
			<select class="form-control" name="fourth-font" id="fourth-font">
			<option value="Gudea">Gudea</option>
			<option value="Open Sans">Open Sans</option>
			<option value="PT Sans">PT Sans</option>
			<option value="Lato">Lato</option>
			<option value="Roboto">Roboto</option>
			<option value="Droid Sans">Droid Sans</option>
			<option value="Ubuntu">Ubuntu</option>
			<option value="Arvo">Arvo</option>
			<option value="Droid Serif">Droid Serif</option>
			<option value="Nunito">Nunito</option>
			</select>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>-->
			<div id="wrapper">
			<header id="header" class="header2">
			<div id="header-top">
			<div class="container">
			<div class="row">
			<div class="col-md-12">
			<div class="header-top-left">
			<ul id="top-links" class="clearfix">
<!--			<li>
			<a href="#" title="My Wishlist">
			<span class="top-icon top-icon-pencil">
			</span><span class="hide-for-xs">My Wishlist</span>
			</a>
			</li>-->
			<li>
                       
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<script type="text/javascript">




</script>                      <a href="{{url('login')}}" title="My Account">
			<span class="top-icon top-icon-user">
			</span><span class="hide-for-xs">My Account</span>
			</a>
			</li>
<!--			<li>
			<a href="https://localhost/devansh/cart" title="My Cart"><span class="top-icon top-icon-cart">
			</span><span class="hide-for-xs">My Cart</span>
			</a>
			</li>-->
<!--			<li>
			<a href="https://localhost/devansh/checkout" title="Checkout">
			<span class="top-icon top-icon-check">
			</span><span class="hide-for-xs">Checkout</span>
			</a>
			</li>-->
<li>
<marquee class="topic-title text-danger top-right">we're grateful for the trust you've placed in us. We hope you are satisfied with your purchase. Thank you for putting your trust and confidence in our company.</marquee>
                  </li>
<!--<li>
<marquee class="topic-title text-success text-black-50

">We are welcoming you for your trust on us.</marquee>
                  </li>-->

			</ul>
			</div>
			<div class="header-top-right">
                      @if(Auth::check() )
			<div class="header-text-container pull-right">
                      
                                            <p class="header-text">Hello  <span class="header-link font-weight-bold text-success">{{ Auth::user()->name }}</span> have nice day!</p>
                                           
                      			<p class="header-link">
                                      <a href="{{url('logout')}}">logout</a>
                      			</p>
			</div>
                      @else
                      <div class="header-text-container pull-right">
                      
                                           
                                           
                      			<p class="header-link">
                                     
                                       <a href="{{url('login')}}">login</a>&nbsp;or&nbsp;<a href="{{url('register')}}">create an account</a>

                      			</p>
			</div>
                      
                       @endif
			</div>
			</div>
			</div>
			</div>
			</div>
			<div id="inner-header">
			<div class="container">
			<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12 logo-container">
			<h1 class="logo clearfix"><span>Responsive eCommerce Template</span>
			<a href="{{url('')}}" title="Venedor eCommerce Template">
			<img src="{{asset('assets/images/IMG-20210630-WA0030.png')}}" alt="Venedor Commerce Template" width="188" height="67">
			</a>
			</h1>
			</div>
<!--			<div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">
			<div class="header-inner-right-wrapper clearfix">
			<div class="dropdown-cart-menu-container pull-right">
			<div class="btn-group dropdown-cart">
			<button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
			<span class="cart-menu-icon">
			</span>
			0 item(s) <span class="drop-price">- $0.00</span>
			</button><div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
			<p class="dropdown-cart-description">Recently added item(s).</p>
			<ul class="dropdown-cart-product-list">
			<li class="item clearfix"><a href="#" title="Delete item" class="delete-item">
			<i class="fa fa-times"></i></a> <a href="#" title="Edit item" class="edit-item">
			<i class="fa fa-pencil"></i>
			</a>
			<figure>
			<a href="product.html">
			<img src="https://localhost/devansh/assets/images/products/thumbnails/item12.jpg" alt="phone 4">
			</a>
			</figure>
			<div class="dropdown-cart-details">
			<p class="item-name">
			<a href="product.html">Cam Optia AF Webcam</a>
			</p>
			<p>1x <span class="item-price">$499</span>
			</p>
			</div>
			</li>
			<li class="item clearfix">
			<a href="#" title="Delete item" class="delete-item">
			<i class="fa fa-times">
			</i>
			</a> 
			<a href="#" title="Edit item" class="edit-item">
			<i class="fa fa-pencil">
			</i>
			</a>
			<figure>
			<a href="product.html">
			<img src="https://localhost/devansh/assets/images/products/thumbnails/item13.jpg" alt="phone 2">
			</a>
			</figure>
			<div class="dropdown-cart-details">
			<p class="item-name"><a href="product.html">Iphone Case Cover Original</a></p>
			<p>1x <span class="item-price">$499<span class="sub-price">.99</span></span></p>
			</div>
			</li>
			</ul>
			<ul class="dropdown-cart-total">
			<li>
			<span class="dropdown-cart-total-title">Shipping:</span>$7</li><li><span class="dropdown-cart-total-title">Total:</span>$1005<span class="sub-price">.99</span></li></ul>
			<div class="dropdown-cart-action">
			<p>
			<a href="cart.html" class="btn btn-custom-2 btn-block">Cart</a>
			</p>
			<p>
			<a href="checkout.html" class="btn btn-custom btn-block">Checkout</a>
			</p>
			</div>
			</div>
			</div>
			</div>
			<div class="header-top-dropdowns pull-right">
			<div class="btn-group dropdown-money">
			<button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
			<span class="hide-for-xs">US Dollar</span>
			<span class="hide-for-lg">$</span>
			</button><ul class="dropdown-menu pull-right" role="menu"><li><a href="#">
			<span class="hide-for-xs">Euro</span>
			<span class="hide-for-lg">&euro;</span>
			</a>
			</li>
			<li>
			<a href="#"><span class="hide-for-xs">Pound</span>
			<span class="hide-for-lg">&pound;</span>
			</a>
			</li>
			</ul>
			</div>
			<div class="btn-group dropdown-language">
			<button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
			<span class="flag-container">
			<img src="https://localhost/devansh/assets/images/england-flag.png" alt="flag of england">
			</span>
			<span class="hide-for-xs">English</span>
			</button>
			<ul class="dropdown-menu pull-right" role="menu"><li>
			<a href="#">
			<span class="flag-container">
			<img src="https://localhost/devansh/assets/images/italy-flag.png" alt="flag of england">
			</span>
			<span class="hide-for-xs">Italian</span>
			</a>
			</li>
			<li>
			<a href="#"><span class="flag-container">
			<img src="https://localhost/devansh/assets/images/spain-flag.png" alt="flag of italy">
			</span>
			<span class="hide-for-xs">Spanish</span>
			</a>
			</li>
			<li>
			<a href="#"><span class="flag-container">
			<img src="https://localhost/devansh/assets/images/france-flag.png" alt="flag of france">
			</span>
			<span class="hide-for-xs">French</span>
			</a>
			</li>
			<li>
			<a href="#"><span class="sm-separator">
			<img src="https://localhost/devansh/assets/images/germany-flag.png" alt="flag of germany">
			</span>
			<span class="hide-for-xs">German</span>
			</a>
			</li>
			</ul>
			</div>
			</div>
			</div>
			</div>-->
			</div>
			</div>
			<div id="main-nav-container">
			<div class="container">
			<div class="row">
			<div class="col-md-12 clearfix">
			<nav id="main-nav">
			<div id="responsive-nav">
			<div id="responsive-nav-button">Menu <span id="responsive-nav-button-icon">
			</span>
			</div>
			</div>
			<ul class="menu clearfix">
			<li>
			<a class="active" href="{{url('')}}">HOME</a>
<!--			<ul><li>
			<a href="../green/index.html">Home 1</a>
			</li><li><a href="../blue/index.html">Home 2</a></li><li>
			<a href="../orange/index.html">Home 3</a>
			</li>
			<li>
			<a href="../pink/index.html">Home 4</a></li>
			<li><a href="../brown/index.html">Home 5</a></li>
			<li><a href="../green2/index.html">Home 6</a></li>
			<li><a href="../blueorange/index.html">Home 7</a></li>
			<li><a href="../blueorange2/index.html">Home 8</a></li>
			<li><a href="../browngreen/index.html">Home 9</a></li>
			</ul>-->
			</li>
<!--			<li class="mega-menu-container">
			<a href="#">SHOP</a>
			<div class="mega-menu clearfix">
			<div class="col-5">
			<a href="category.html" class="mega-menu-title">Clothing</a>
			<ul class="mega-menu-list clearfix">
			<li>
			<a href="#">Dresses</a>
			</li>
			<li>
			<a href="#">Jeans &amp; Trousers</a>
			</li>
			<li>
			<a href="#">Blouses &amp; Shirts</a>
			</li>
			<li>
			<a href="#">Tops &amp; T-Shirts</a>
			</li>
			<li>
			<a href="#">Jackets &amp; Coats</a>
			</li>
			<li>
			<a href="#">Skirts</a>
			</li>
			</ul>
			</div>
			<div class="col-5">
			<a href="category.html" class="mega-menu-title">
			Shoes</a>
			<ul class="mega-menu-list clearfix">
			<li><a href="#">Formal Shoes</a>
			</li>
			<li><a href="#">Casual Shoes</a></li>
			<li><a href="#">Sandals</a></li>
			<li><a href="#">Boots</a></li>
			<li><a href="#">Wide Fit</a></li>
			<li><a href="#">Slippers</a></li>
			</ul>
			</div>
			<div class="col-5">
			<a href="category.html" class="mega-menu-title">Accessories</a>
			<ul class="mega-menu-list clearfix">
			<li>
			<a href="#">Bags &amp; Purses</a>
			</li>
			<li>
			<a href="#">Belts</a>
			</li>
			<li>
			<a href="#">Gloves</a>
			</li>
			<li>
			<a href="#">Jewellery</a>
			</li>
			<li>
			<a href="#">Sunglasses</a>
			</li>
			<li>
			<a href="#">Hair Accessories</a>
			</li>
			</ul>
			</div>
			<div class="col-5">
			<a href="category.html" class="mega-menu-title">Sports</a>
			<ul class="mega-menu-list clearfix">
			<li>
			<a href="#">Sport Tops &amp; Vests</a>
			</li>
			<li>
			<a href="#">Swimwear</a>
			</li>
			<li>
			<a href="#">Footwear</a>
			</li>
			<li>
			<a href="#">Sports Underwear</a>
			</li>
			<li>
			<a href="#">Bags</a>
			</li>
			</ul>
			</div>
			<div class="col-5">
			<a href="category.html" class="mega-menu-title">Maternity</a>
			<ul class="mega-menu-list clearfix">
			<li>
			<a href="#">Tops &amp; Skirts</a>
			</li>
			<li>
			<a href="#">Dresses</a>
			</li>
			<li>
			<a href="#">Trousers &amp; Shorts</a>
			</li>
			<li>
			<a href="#">Knitwear</a>
			</li>
			<li>
			<a href="#">Jackets &amp; Coats</a>
			</li>
			</ul>
			</div>
			</div>
			</li>-->
<!--			<li>
			<a href="#">Categories</a>
			<ul>
			<li>
			<a href="#">Headers</a>
			<ul>
			<li>
			<a href="header1.html">Header Version 1</a>
			</li>
			<li>
			<a href="header2.html">Header Version 2</a>
			</li>
			<li>
			<a href="header3.html">Header Version 3</a>
			</li>
			<li>
			<a href="header4.html">Header Version 4</a>
			</li>
			<li>
			<a href="header5.html">Header Version 5</a>
			</li>
			<li>
			<a href="header6.html">Header Version 6</a>
			</li>
			<li>
			<a href="header7.html">Header Version 7</a>
			</li>
			</ul>
			</li>
			<li>
			<a href="#">Footers</a>
			<ul>
			<li>
			<a href="footer1.html">Footer Version 1</a>
			</li>
			<li>
			<a href="footer2.html">Footer Version 2</a>
			</li>
			<li>
			<a href="footer3.html">Footer Version 3</a>
			</li>
			</ul>
			</li>
			<li>
			<a href="product.html">Product</a>
			</li>
			<li>
			<a href="cart.html">Cart</a>
			</li>
			<li>
			<a href="category.html">Category</a>
			<ul>
			<li>
			<a href="category-list.html">Category list</a>
			</li>
			<li>
			<a href="category.html">Category Banner 1</a>
			</li>
			<li>
			<a href="category-banner-2.html">Category Banner 2</a>
			</li>
			<li>
			<a href="category-banner-3.html">Category Banner 3</a>
			</li>
			</ul>
			</li>
			<li>
			<a href="blog.html">Blog</a>
			<ul>
			<li>
			<a href="blog.html">Right Sidebar</a>
			</li>
			<li>
			<a href="blog-sidebar-left.html">Left Sidebar</a>
			</li>
			<li>
			<a href="blog-sidebar-both.html">Both Sidebar</a>
			</li>
			<li>
			<a href="single.html">Blog Post</a>
			</li>
			</ul>
			</li>
			<li>
			<a href="checkout.html">Checkout</a>
			</li>
			<li>
			<a href="aboutus.html">About Us</a>
			</li>
			<li>
			<a href="register-account.html">Register Account</a>
			</li>
			<li>
			<a href="compare-products.html">Compare Products</a>
			</li>
			<li><a href="login.html">Login</a></li>
			<li><a href="404.html">404 Page</a></li>
			</ul>
			</li>-->
<!--			<li>
			<a href="#">Categories</a>
			<ul>
			<li>
			<a href="#">Portfolio Posts</a>
			</li>
			</ul>
			</li>-->
			<li>
        
			<a class="categoriesmenu" href="#">Categories</a>
			<ul>
                      <li class="resultcategoriesmenu">
                           
                      </li>                     			
                      			</ul>
			</li>
                  <li>
			<a href="{{url('about_us')}}">About Us</a>
			</li>
			<li>
			<a href="{{url('contact_us')}}">Contact Us</a>
			</li>
                  <li>
			<a href="{{url('cart')}}" title="My Cart"><span class="top-icon top-icon-cart">
			</span><span class="hide-for-xs">My Cart</span>
			</a>
			</li>
			</ul>
			</nav>
			<div id="quick-access">
                      <form class="form-inline quick-search-form" action="{{url('search')}}" method="post" role="form" >
                          @csrf
			<div class="form-group">
			<input type="text" name="sd"  class="form-control" placeholder="Search here">
			</div>
			<button type="submit" id="quick-search" class="btn btn-custom">
			</button>
			</form>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</header>
     <script type="text/javascript">
         function addcart(proids)
         {
//             alert(proids);
               $.ajax({
        type: 'get',
        url: '{{url('add_to_cart')}}/'+proids,
        dataType: 'html',
        crossDomain: true,
        data: {_token:'{{csrf_token()}}'},
        success: function(data){
toastr.success(data);
//    location.reload();  

        } 
    }); 
    
         
     }
     
//     for coupon
  function check_applycoupons()
{
    
    $.ajax({
        type: "post",
        url: "{{url('check_coupon')}}",
        dataType: "html",
        crossDomain: true,
//        processData: false,
//  contentType: false,

        data: {_token:'{{csrf_token()}}'},
        success: function(data){
         toastr.success(data);
		location.reload();

   //$('#result').html(data);
    
        } 
    }); 
}

function deletecartdata(pidpid)
{
    
      $.ajax({
        type: 'get',
        url:'{{url('delete_cart')}}/'+pidpid,
        dataType: 'html',
        crossDomain: true,
        data: {_token:'{{csrf_token()}}'},
        success: function(data){

     check_applycoupons();

        } 
    }); 
    
}


//    for quantity
    
   function quantitys(quant,proid,iede)	
    {
//       alert(iede);
       if(iede=='increase')
       {
           var newquant=parseInt(quant) + parseInt('1');
          
       $.ajax({
    type : 'post',
    url  : '{{('update_quantity')}}',
    data : {_token:'{{csrf_token()}}',proid: proid,quant: newquant},
    datatype: 'html',
    success : function(data){
        check_applycoupons();
//       location.reload();  
        
    }
});
    }
    
     if(iede=='decrease' && quant>1)
       {
           var newquant=parseInt(quant) - parseInt('1');
          
       $.ajax({
    type : 'post',
    url  : '{{('update_quantity')}}',
    data : {_token:'{{csrf_token()}}',proid: proid,quant: newquant},
    datatype: 'html',
    success : function(data){
        check_applycoupons();
//       location.reload();  
        
    }
});
    }
    }
    

         </script>  
   
   @yield('content') 
    <div class="lg-margin">
                          
                      </div>
                      <div id="brand-slider-container" class="carousel-wrapper">
                          <header class="content-title">
                              <div class="title-bg">
                                  <h2 class="title">Trusted</h2>
                              </div>
                          </header>
                          <div class="carousel-controls">
                              <div id="brand-slider-prev" class="carousel-btn carousel-btn-prev">
                                  
                              </div>
                              <div id="brand-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                                  
                              </div>
                                  
                          </div>
                          <div class="sm-margin">
                              
                          </div>
                          <div class="row">
                              <div class="brand-slider owl-carousel">
                                  <a href="#">
                                      <img src="{{asset('assets/images/brands/Swachh-Bharat-Logo-PNG.png')}}" alt="Brand Logo 1">
                                  </a>
                                  <a href="#"><img src="{{asset('assets/images/brands/searchpng.com-make-in-india-png-image-free-download.png')}}" alt="Brand Logo 2">
                                  </a>
                                  <a href="#">
                                      <img src="{{asset('assets/images/brands/searchpng.com-fssai-logo-png-image-free-download.png')}}" alt="Brand Logo 3">
                                  </a>
                                  <a href="#">
                                      <img src="{{asset('assets/images/brands/lab-tested-round-stamp-ribbon-label-sign-196577134.jpg')}}" alt="Brand Logo 4">
                                  </a> 
                                  <a href="#">
                                      <img src="{{asset('assets/images/brands/Visa_Inc._logo.png')}}" alt="Brand Logo 5">
                                  </a> 
                                  <a href="#">
                                      <img src="{{asset('assets/images/brands/Mastercard-Logo-PNG9.png')}}" alt="Brand Logo 6">
                                  </a> 
                                  <a href="#">
                                      <img src="{{asset('assets/images/brands/pngaaa.com-2538748.png')}}" alt="Brand Logo 7">
                                  </a> 
                                  
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                  </div>
                  </section> 
                      <footer id="footer">
<!--                          <div id="newsletter-container">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-xs-12 clearfix">
                                          <h3>Sing up to receive the latest fashion news</h3>
                                          <form id="register-newsletter">
                                              <input type="text" name="newsletter" required="" placeholder="Enter your email address">
                                              <input type="submit" class="btn btn-custom-3" value="SIGN UP">
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>-->
                          <div id="inner-footer">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-3 col-sm-4 col-xs-12 widget">
                                          <h3>MY ACCOUNT</h3>
                                          <ul class="links">
                                              <li>
                                                  <a href="{{ route('register') }}">Register</a>
                                              </li>
                                              <li>
                                                  <a href="{{ route('login') }}">Login</a>
                                              </li>
<!--                                              <li>
                                                  <a href="#">Addresses</a>
                                              </li>
                                              <li>
                                                  <a href="#">Discount</a></li>
                                              <li>
                                                  <a href="#">Order History</a>
                                              </li>
                                              <li>
                                                  <a href="#">Your Vouchers</a>
                                              </li>-->
                                          </ul>
                                      </div>
                                      <div class="col-md-3 col-sm-4 col-xs-12 widget">
                                          <h3>INFORMATION</h3>
                                          <ul class="links">
                                              <li>
                                                  <a href="{{url('')}}">Home</a>
                                              </li>
                                              <li>
                                                  <a href="{{url('about_us')}}">About us</a>
                                              </li>
                                              <li>
                                                  <a href="{{url('contact_us')}}">Contact us</a></li>
<!--                                              <li>
                                                  <a href="#">Manufacturers</a>
                                              </li>
                                              <li>
                                                  <a href="#">Suppliers</a>
                                              </li>
                                              <li>
                                                  <a href="#">Our stores</a>
                                              </li>-->
                                          </ul>
                                      </div>
                                      <div class="col-md-3 col-sm-4 col-xs-12 widget">
                                          <h3>Cart</h3>
                                          <ul class="links">
                                              <li>
                                                  <a href="{{url('cart')}}">Cart</a>
                                              </li>
                                              
                                          </ul>
                                              
                                      </div>
                                      <div class="clearfix visible-sm">
                                          
                                      </div>
                                      <div class="col-md-3 col-sm-12 col-xs-12 widget">
                                          <h3></h3>
                                          <div class="facebook-likebox">
<!--                                              <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"></iframe>-->
                                              <img src="{{asset('assets/images/IMG-20210630-WA0030.png')}}" alt="Venedor Commerce Template" width="188" height="67">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div id="footer-bottom">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
                                          <ul class="social-links clearfix">
                                              <li>
                                                  <a href="#" class="social-icon icon-facebook">
                                                      
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#" class="social-icon icon-twitter">
                                                      
                                                  </a>
                                              </li>
<!--                                              <li>
                                                  <a href="#" class="social-icon icon-rss">
                                                      
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#" class="social-icon icon-delicious">
                                                      
                                                  </a>
                                              </li>-->
                                              <li>
                                                  <a href="#" class="social-icon icon-linkedin">
                                                      
                                                  </a>
                                              </li>
<!--                                              <li>
                                                  <a href="#" class="social-icon icon-flickr">
                                                      
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#" class="social-icon icon-skype">
                                                      
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#" class="social-icon icon-email">
                                                      
                                                  </a>
                                              </li>-->
                                          </ul>
                                      </div>
                                      <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container"><p>&copy; 2014 Powered by Company&trade;. All Rights Reserved.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </footer>
                  </div>
    <a href="#" id="scroll-top" title="Scroll to Top">
        <i class="fa fa-angle-up">
            
        </i>
    </a> <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.debouncedresize.js')}}"></script>
    <script src="{{asset('assets/js/retina.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.placeholder.js')}}"></script>
    <script src="{{asset('assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('assets/js/twitter/jquery.tweet.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jflickrfeed.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('assets/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('assets/js/colpick.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        $(function(){jQuery("#slider-rev").revolution({delay:5e3,startwidth:1170,startheight:600,onHoverStop:"true",hideThumbs:250,navigationHAlign:"center",navigationVAlign:"bottom",navigationHOffset:0,navigationVOffset:20,soloArrowLeftHalign:"left",soloArrowLeftValign:"center",soloArrowLeftHOffset:0,soloArrowLeftVOffset:0,soloArrowRightHalign:"right",soloArrowRightValign:"center",soloArrowRightHOffset:0,soloArrowRightVOffset:0,touchenabled:"on",stopAtSlide:-1,stopAfterLoops:-1,dottedOverlay:"none",fullWidth:"on",spinned:"spinner2",shadow:0,hideTimerBar:"on"})});
//        $(function(){
//  $("#img_qwe").jqZoom({
//    selectorWidth: 30,
//    selectorHeight: 30,
//    viewerWidth: 400,
//    viewerHeight: 300
//  });
//})
            </script>
<!--            <script type="text/javascript">
                $("#onbuttonsubmit").click(function()
         {
             alert('hfjhsc');
                      }
         );
    
    </script>-->
            
           		<script type="text/javascript">

	  $(document).ready(function(){
categoriesdata();

function applycoupons()
{
var con_updat_name = $("input#codesname").val();
var con_updat_namesss =$("#testing #mrprpcost").text();

      $.ajax({
        type: "POST",
        url: "{{url('apply_coupon')}}",
        dataType: "html",
        crossDomain: true,
//        processData: false,
//  contentType: false,

        data: {_token:'{{csrf_token()}}',code:con_updat_name,total:con_updat_namesss},
        success: function(data){
            toastr.success(data);
//		location.reload();
//$('#result').html(data);
    
        } 
    });
    }

function categoriesdata()
{
var id=$("input#urldata").val();
  $.ajax({
        type: "POST",
        url:"{{url('getcategoriesdata')}}",
        dataType: "json",
        data:{id:id,_token:'{{csrf_token()}}'},
     
        success: function(data){
		console.log(data);
//alert(data);
   $('.resultcategoriesmenucategoriesdata').html(data);
    
        },
            error: function(data, textStatus, errorThrown){
        alert("fail");
    }
                
    });  
}
  
   $(".categoriesmenu").hover(function()
   {
    

      $.ajax({
        type: "POST",
        url:"{{url('categorymenu')}}",
        dataType: "json",
        data:{_token:'{{csrf_token()}}'},
     
        success: function(data){
//		console.log(data);
//alert(data);
   $('.resultcategoriesmenu').html(data);
    
        }
                
    });
  });
  
     $("#mycoupons").click(function()
   {
    
applycoupons();
  });

      $("#onbuttonsubmit").click(function()
         {
             toastr.success('You are not login please login for checkout');

              window.location.href='login';
                      
         }
         );
     $("#onbuttonsubmitonbuttonsubmit").click(function()
         {
             toastr.success('You cart is empty.');

             
                      
         }
         );

  });
  </script>
    </body>
    
    
</html><!--        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            /.col

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            /.col

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            /.col

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            /.col

            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-facebook"></i>
                    <ul>
                        <li>
                            <span class="count">40</span> k
                            <span>friends</span>
                        </li>
                        <li>
                            <span class="count">450</span>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                /social-box
            </div>
            /.col


            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-twitter"></i>
                    <ul>
                        <li>
                            <span class="count">30</span> k
                            <span>friends</span>
                        </li>
                        <li>
                            <span class="count">450</span>
                            <span>tweets</span>
                        </li>
                    </ul>
                </div>
                /social-box
            </div>
            /.col


            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-linkedin"></i>
                    <ul>
                        <li>
                            <span class="count">40</span> +
                            <span>contacts</span>
                        </li>
                        <li>
                            <span class="count">250</span>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                /social-box
            </div>
            /.col


            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-google-plus"></i>
                    <ul>
                        <li>
                            <span class="count">94</span> k
                            <span>followers</span>
                        </li>
                        <li>
                            <span class="count">92</span>
                            <span>circles</span>
                        </li>
                    </ul>
                </div>
                /social-box
            </div>
            /.col

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0">Traffic</h4>
                                <div class="small text-muted">October 2017</div>
                            </div>
                            /.col
                            <div class="col-sm-8 hidden-sm-down">
                                <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i class="fa fa-cloud-download"></i></button>
                                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                                        <label class="btn btn-outline-secondary">
                                            <input type="radio" name="options" id="option1"> Day
                                        </label>
                                        <label class="btn btn-outline-secondary active">
                                            <input type="radio" name="options" id="option2" checked=""> Month
                                        </label>
                                        <label class="btn btn-outline-secondary">
                                            <input type="radio" name="options" id="option3"> Year
                                        </label>
                                    </div>
                                </div>
                            </div>
                            /.col


                        </div>
                        /.row
                        <div class="chart-wrapper mt-4">
                            <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
                        </div>

                    </div>
                    <div class="card-footer">
                        <ul>
                            <li>
                                <div class="text-muted">Visits</div>
                                <strong>29.703 Users (40%)</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Unique</div>
                                <strong>24.093 Users (20%)</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="text-muted">Pageviews</div>
                                <strong>78.706 Views (60%)</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">New Users</div>
                                <strong>22.123 Users (80%)</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Bounce Rate</div>
                                <strong>40.15%</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <section class="card">
                    <div class="twt-feed blue-bg">
                        <div class="corner-ribon black-ribon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="fa fa-twitter wtt-mark"></div>

                        <div class="media">
                            <a href="#">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="https://localhost/devansh/assets/images/admin.jpg">
                            </a>
                            <div class="media-body">
                                <h2 class="text-white display-6">Jim Doe</h2>
                                <p class="text-light">Project Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="weather-category twt-category">
                        <ul>
                            <li class="active">
                                <h5>750</h5>
                                Tweets
                            </li>
                            <li>
                                <h5>865</h5>
                                Following
                            </li>
                            <li>
                                <h5>3645</h5>
                                Followers
                            </li>
                        </ul>
                    </div>
                    <div class="twt-write col-sm-12">
                        <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                    </div>
                    <footer class="twt-footer">
                        <a href="#"><i class="fa fa-camera"></i></a>
                        <a href="#"><i class="fa fa-map-marker"></i></a>
                        New Castle, UK
                        <span class="pull-right">
                            32
                        </span>
                    </footer>
                </section>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Profit</div>
                                <div class="stat-digit">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">New Customer</div>
                                <div class="stat-digit">961</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>World</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap" style="height: 265px;"></div>
                    </div>
                </div>
                 /# card 
            </div>


        </div>  .content 
   -->