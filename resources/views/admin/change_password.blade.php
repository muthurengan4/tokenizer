<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ADMIN LOGIN - AUTOMATIC TOKENIZER </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('public/asset/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('public/asset/vendor/date-picker/css/datepicker.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('public/asset/css/style.css')}}">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key={{env('GOOGLE_API_KEY')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112610716-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-112610716-2');
    </script>

        
    <style>
    .form-col
    {
        width: 100% !important;
    }
    .form-holder
    {
        width: 100% !important;
    }
    .steps, .actions, .second
    {
        display: none !important;
    }
    body {
        background: #ffffff !important;
    }
    h3 {
        font-family: "Poppins-SemiBold";
        font-size: 20px !important;
        color: #3377c0;
        text-transform: uppercase;
        text-align: center;
        font-weight: 600;
        letter-spacing: 3px;
        margin-bottom: 10px !important;
    }
    h4 {
        font-family: "Poppins-SemiBold";
        font-size: 15px;
        color: #e91e63;
        text-transform: uppercase;
        text-align: center;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 25px !important;
    }
    .wizard {
        position: relative;
        background: #fff;
        padding: 5px 58px 0 !important;
        height: 548px;
    }
    .title_logo
    {
        text-align: center !important;
        margin-left: 45%;
    }
    .logo
    {
        text-align: right !important;
        float: right;
        font-size: 12px;
    }
    .actions ul {
        display: flex;
        justify-content: space-between;
        margin: 42px 0px !important;
    }
    .button_paid
    {
        border: none;
        display: inline-flex;
        height: 42px;
        width: 192px;
        align-items: center;
        color: #fff;
        cursor: pointer;
        background: #3377c0;
        text-transform: uppercase;
        justify-content: center;
        letter-spacing: 1px;
    }
    .button_paid:hover
    {
        background: #3b87d9;
        cursor: pointer;
    }
    .button_back
    {
        border: 1px solid #3377c0;
        display: inline-flex;
        height: 42px;
        width: 112px;
        align-items: center;
        color: #3377c0;
        cursor: pointer;
        background: #fff;
        text-transform: uppercase;
        justify-content: center;
        letter-spacing: 1px;
    }
    .button_back:hover
    {
        border-color: transparent;
        color: #fff;
        background: #3b87d9;
    }
    .error_message
    {
        color: red;
        font-style: italic;
        font-size: 12px;
        font-weight: normal;
    }


    .modal-footer:after,.modal-footer:before,.modal-header:after,.modal-header:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{display:table;content:" "}.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.modal-header:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{clear:both}

    .modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5)}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{filter:alpha(opacity=0);opacity:0}.modal-backdrop.in{filter:alpha(opacity=50);opacity:.5}.modal-header{padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}
</style>
</head>
<body>
    <div class="wrapper">

        <section>
            @if(Session::get('alert'))
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 {{Session::get('alert')}}
            </div>
            @endif

          @if(Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{Session::get('success')}}
                    </div>
            @endif

            <div class="alert alert-info alert-dismissible fade show" style="display: none" id="show_error">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 Password and Confirm Password must be a same.
            </div>

                    
                    <h3>ADMIN CHANGE PASSWORD</h3>
                    <form action="{{route('change_password_post')}}" method="post">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div style="display: block;" id="section1">
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                <b>Old password</b>
                            </label>
                            <div class="form-holder">
                              <i class="zmdi zmdi-lock-outline"></i>
                                <input type="password" name="old_password" id="email" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                        <br>
                        <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                <b>New Password</b>
                            </label>
                            <div class="form-holder">
                             <i class="zmdi zmdi-lock-outline"></i>
                                <input type="password" name="new_password" id="password" class="form-control" value="">
                            </div>
                        </div>
                    </div>  
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                <b>Re-type New Password</b>
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-lock-outline"></i>
                                <input type="password" name="re_password" id="re_password" class="form-control" value="">
                            </div>
                        </div>
                    </div>  
                    <div class="form-row">
                     <div class="form-col">
                <label for="" style="text-align:right;">
                     <a href="{{URL('/')}}/index"><button type="button"  class="button_paid" onclick="">Back</button></a>
                    <button type="submit" name="next" class="button_paid" onclick="return Validate()">Change Password</button>
                   
                </label>
            </div> 
            </div>                                                
                        
                    </div>
                    </form>
    </section>
</div>
</body>

<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("re_password").value;
        if (password != confirmPassword) {
           $('#show_error').show();
           return false;
        }
         $('#show_error').hide();  

        return true;
    }
</script>
</html>

                                        

