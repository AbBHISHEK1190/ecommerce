<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<script type="text/javascript">

@if(session()->has('success'))
    <div class="alert alert-success">
       toastr.success({{ session()->get('message') }})
    </div>
    @elseif(session()->has('error'))
     
       toastr.error({{ session()->get('error') }})
    
            @elseif(session()->has('warning'))
      
       toastr.warning({{ session()->get('warning') }})
    @elseif(session()->has('info'))
      
       toastr.warning({{ session()->get('info') }})
   
@endif


</script>