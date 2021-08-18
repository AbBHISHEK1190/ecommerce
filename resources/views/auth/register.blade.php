@extends('layouts.customer')
@section('content')  
<style>
            .formerror {
            color: red;
        }
</style>
<section id="content"><div id="breadcrumb-container"><div class="container"><ul class="breadcrumb"><li><a href="index.html">Home</a></li><li class="active">Register</li></ul></div></div><div class="container"><div class="row"><div class="col-md-12"><header class="content-title"><h1 class="title">Login or Create An Account</h1><div class="md-margin"></div></header><div class="row"><div class="col-md-6 col-sm-6 col-xs-12"><h2>Registered Customers</h2><p>If you have an account with us, please log in.</p><div class="md-margin"></div><a href="{{ route('login') }}" class="btn btn-custom-2">Login</a><div class="lg-margin"></div></div><div class="col-md-6 col-sm-6 col-xs-12"><h2>New Customer</h2><p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p><div class="xs-margin"></div>
                        
                        <form id="login-form"  action="{{ route('register') }}" name="myForm" onsubmit="return validateForm()" method="post">
                             @csrf
                             <div class="input-group" id="names"><span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Name&#42;</span></span> <input type="text" name="name" required class="form-control input-lg" placeholder="Your User Name">
                                   @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="formerror">{{ $message }}</strong>
                                    </span>
                                @enderror
                                 <b><span class="formerror"> </span</b></div>
                 <div class="input-group" id="emails"><span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span> <input type="text" name="email" required class="form-control input-lg" placeholder="Your Email">
                       @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="formerror">{{ $message }}</strong>
                                    </span>
                                @enderror
                     <b><span class="formerror"> </span</b></div> 
                 <div class="input-group xs-margin" id="pass"><span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span> <input type="password" name="password" required class="form-control input-lg" placeholder="Your Password"><b><span class="formerror">
                           @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="formerror">{{ $message }}</strong>
                                    </span>
                                @enderror
                         </span</b></div> 
                                <div class="input-group xs-margin" id="cpass"><span class="input-group-addon"><span class="input-icon input-icon-password" id="pass"></span><span class="input-text">Conform Password&#42;</span></span> <input type="password" name="password_confirmation" required class="form-control input-lg" placeholder="Your Conform Password"><b><span class="formerror"> </span</b></div> 
<!--                 <span class="help-block text-right"><a href="#">Forgot your password?</a></span> -->
                 <button class="btn btn-custom-2" type="submit">Create An Account</button>
        <!--<input class="but" type="submit" value="Submit">-->
                </form><div class="sm-margin"></div></div></div>
                            
<!--            </div></div></div></section>-->
                        <script type="text/javascript">
    function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
    function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}
                                	 
                function validateForm(){
                        clearErrors();
                        var returnval = true;
//                                    alert('kjkjf');
                     var name = document.forms['myForm']["name"].value;
                                            if (name.length<5){
        seterror("names", "*Length of name is too short");
        returnval = false;
    }
    var email = document.forms['myForm']["email"].value;
    if (email.length>255){
        seterror("emails", "*Email length is too long");
        returnval = false;
    }
             var password = document.forms['myForm']["password"].value;
    if (password.length < 8){

        // Quiz: create a logic to allow only those passwords which contain atleast one letter, one number and one special character and one uppercase letter
        seterror("pass", "*Password should be atleast 6 characters long!");
        returnval = false;
    }                                      
        var cpassword = document.forms['myForm']["password_confirmation"].value;
    if (cpassword != password){
        seterror("cpass", "*Password and Confirm password should match!");
        returnval = false;
    }
        return returnval;
    }
                                
                          
                                </script>                               
 
@endsection
                        