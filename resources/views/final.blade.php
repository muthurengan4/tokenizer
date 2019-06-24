    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Tokenizer</title>
            <!--Meta-info-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="author" content="colorlib.com">
            <!--css-->
            <link rel="stylesheet" href="{{ URL::asset('public/asset/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('public/asset/vendor/date-picker/css/datepicker.min.css')}}">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ URL::asset('public/asset/css/style.css')}}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
            <!--js-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112610716-2"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-112610716-2');
            </script>
            
        </head>
        <style>
               .form-col
            {
                width: 100% !important;
            }
            .form-holder
            {
                width: 100% !important;
            }
            .steps, .actions, #button_block
            {
                display: none;
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
            .button_create_token, .button_create_token:hover
            {
                background-color: #3377c0;
                color: #fff;
                padding: 10px 20px;
                cursor: pointer;
                border: none;
                border-radius: 2px;
                -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
                box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
            }
            .error_message
            {
                color: red;
                font-style: italic;
                font-size: 12px;
                font-weight: normal;
            }
            .dynamic-data {
            max-width: 200px;
            width: 100%;
            background: #fff44f;
            position: fixed;
            right: 0;
            z-index: 999;
            text-align: center;
            top: 0;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            padding: 11px;
            -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
            box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
            }
            .black-text {
                color: #333;
                font-weight: 800;
            }
            .captcha-otr div{
                margin: auto;
            }
            .modal-footer:after,.modal-footer:before,.modal-header:after,.modal-header:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{display:table;content:" "}.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.modal-header:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{clear:both}

            .modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5)}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{filter:alpha(opacity=0);opacity:0}.modal-backdrop.in{filter:alpha(opacity=50);opacity:.5}.modal-header{padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}
            .modal{
                background: rgba(0,0,0,0.5);
            }
            .modal.fade .modal-dialog{
            top: 10%;
            }
            #myModal3 .btn,  #myModal4 .btn{
                background: transparent;
                border-radius: 3px;
                padding: 5px 11px;
            }
            #myModal3 .btn-primary{
                background-color: green;
                color:#fff;
            }
            #myModal3 .modal-body p{
                margin: 5px 0;
            }
            .error{
                color:red;
            }
            .success{
                color:green;
            }
            .text-primary{
                color: #0000ff;
            }
            .mt3{
                margin-top: 3px;
                display: inline-block;
            }
            @media (min-width: 992px)
            {
                .col-md-4 {
                    width: 33.33333333%;
                }
            }
            @media (min-width: 992px){
                    .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
                        float: left;
                    }
            }   
            @media (min-width: 1200px){
                .container {
                    width: 1170px;
                }
            }

            .container {
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
            
        </style>
        <body>
            <!--header-->       
            <div class="header">
                <a href="http://about.assetplatform.net/" target="_blank">
                <img src = "{{asset('public/images/logo_ap.png')}}" width="150" alt="" />
                </a>
                <a href="http://about.assetplatform.net/" target="_blank">
                    <u>About</u>
                </a>
            </div><!--header-->

            <!--dynamic-data-->
            <span class="dynamic-data center-align black-text">
                <span id="demo">1043</span> People Online Now
            </span><!--dynamic-data-->

            <!--wrapper-->
            <div class="wrapper final-wrap">
                <form action="{{ route('Final_Save') }}" id="wizard_final" name="wizard_final" method="POST" enctype="multipart/form-data"  class="preview-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- SECTION 1 -->
                    <section>
                        <h3 style="color:green">Just 5 more things,</h3>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>1. Please check again if your email ID is correct ( or just edit it here ).</b>
                                </label>
                                <div class="form-holder">
                                        <input type="text" value="{{$token_details->email}}" name="email" id="email" class="form-control pl12">
                                        <a class="mt3" data-toggle="modal" href="#myModal4" id="resend_mail_trigger">Resend verification mail</a>
                                </div> 
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>2. We noticed that you have not yet submitted a SYMBOL for your Token.</b><br><br>
                                    <b>Please upload a Symbol:</b><br>
                                    <i class="ialign">( Only .jpg, .png allowed )</i>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-image"></i>
                                    <input type="file" name="symbol" id="symbol" class="form-control" style="display: none;" onchange="javascript:get_file_name(event);">
                                    <input type="text" name="symbol_name" id="symbol_name" class="form-control" onclick="click_the_button(symbol);">
                                </div>
                                <p><br><input type="checkbox" name="confirm" id="confirm" value="confirm" onclick="javascript:show_button();">&nbsp;<b>I will provide my token symbol later.</b></p>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>2. Please provide the wallet address from which you made the payment in the previous step *</b>
                                </label>       
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="paid_address" id="paid_address" class="form-control">
                                </div>                     
                            </div>                       
                        </div>

                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>3. Also please provide the Transaction HASH of the payment *</b>
                                </label>       
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="trans_hash" id="trans_hash" class="form-control">
                                </div>                     
                            </div>                       
                        </div>

                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b class="text-success">4. Your Ether Wallet Address *</b><br>
                                    <p style="font-size:13px" class="text-success">Don&apos;t have an Ethereum wallet yet? <a href="{{url('/')}}/learn_more" target="_blank">Learn how to create one here.</a> </p>
                                </label>    

                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="address" id="address" class="form-control">
                                    <input type="hidden" value="{{$token_details->id}}" id="token_id" name="token_id">
                                </div>                     
                            </div>                       
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b class="text-success">5. Re-enter your Ether Wallet Address * </b><br/>
                                    <i class="text-success">(Tip: Always copy paste your wallet address to avoid mistakes)</i>
                               
                                </label>       
                                
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="readdress" id="readdress" class="form-control">
                                </div>                     
                            </div>                       
                        </div>

                    <!--   <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>4. Your Ether Wallet Address *</b>
                                    <br><br>( This is where all your tokens will be sent to, after getting created ) How to get it?
                                </label>       
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="confirm_address" id="confirm_address" class="form-control" value="{{$token_details->address}}">
                                    <input type="hidden" value="{{$token_details->id}}" id="token_id" name="token_id">
                                </div>                     
                            </div>                       
                        </div> -->

                        <div class="form-row">
                            <div class="form-col captcha-otr">
                                <div class="g-recaptcha" data-sitekey="6LeXCocUAAAAADxx3TR7ITrkTSHsp5msxLRyuA3-"></div>
                            </div>
                        </div>

                        <div class="form-row" style="margin-bottom: 10px;">
                            <div class="form-col">
                                <label for="" style="text-align:center;">
                                    <span class="error_message" id="error_1"></span>                                  
                                </label>
                            </div>                                     
                        </div>

                        <div class="form-row">
                            <div class="form-col">
                                <label for="" style="text-align:center;">    
                                    <button type="button" onclick="form_validation();" name="submit" class="button_paid" >Submit</button>
                                    <button style="display:none;" type="submit"  name="submit" id="button_paid" >Submit</button>
                                </label>
                            </div>                                     
                        </div> 
                    </section>
                </form>
                <div id="myModal4" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body text-primary">
                                <p class="error" id="error_modal"></p>
                                <p class="success" id="success_modal"></p>
                           
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="resend_ver_mail_trigger();" class="btn btn-default" >Resend verification mail</button>
                                <button type="button" data-dismiss="modal" class="btn btn-default" >Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModal3" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body text-primary">
                                <p>Hi,</p>
                                <p>Seems you have not yet verified your email id. Please check your inbox and click the verification link. </p>
                                <p><u>Note:</u> Incase you want to change the email address, just close this pop-up > Change the email id in the form beneath > click 'Resend verification email'.</p>
                                <p><u class="text-danger">Important:</u> Incase you have not received mail yet, Please check your SPAM folders. Also please mark the email as 'important' so our future notifications reach you.</p>
                                <p>Thanks.</p>
                            </div>
                            <div class="modal-footer">
                            <button onclick="closeModal('myModal3');" type="button" data-dismiss="modal" class="btn btn-default" >Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div><!--wrapper-->
            
            @include('partials.footer')
            <script src="{{ URL::asset('public/asset/js/jquery-3.3.1.min.js')}}"></script>
            <script src="{{ URL::asset('public/asset/js/jquery.steps.js')}}"></script>
            <script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.js')}}"></script>
            <script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.en.js')}}"></script>
            <script src="{{ URL::asset('public/asset/js/main.js')}}"></script>
        <script>
            function resend_ver_mail_trigger() {
                var email = $('#email').val();
                $('#error_modal').html('');
                $('#success_modal').html('Sending Mail...');
                if(email === '') {
                    $('#success_modal').html('');
                    $('#error_modal').html('Enter the email id in the input box.');
                    return;
                }
                else {
                    $.ajax({
                        url:'{{url("/resendMail")}}',
                        method: 'POST',
                        headers: {
                                'X-CSRF-TOKEN': '{{csrf_token()}}'
                        },
                        dataType: 'JSON',
                        data: {
                            email: email,
                            token_id: "{{$token_details->id}}"
                        },
                        success: function(res) {
                            if(res.status){
                                $('#success_modal').html('Verification mail has been sent successfully.');
                            }
                            else {
                                $('#error_modal').html('Verification mail has not been sent.');
                            }
                        }
                    })
                }
            }
        function  get_file_name(e) 
        {
            var fileName = e.target.files[0].name;
            $('#symbol_name').val(fileName);
            document.getElementById('confirm').checked=false;
        }
        function click_the_button(btn)
        {
            document.getElementById('confirm').checked=false;
            btn.click();
        }
        function form_validation() 
        {
        var symbol_name=document.getElementById('symbol_name').value;
        var confirm=document.getElementById('confirm').checked;      
        var paid_address=document.getElementById('paid_address').value;
        var trans_hash=document.getElementById('trans_hash').value;
        // var confirm_address=document.getElementById('confirm_address').value;
        var filevalue = $('#symbol').val().toLowerCase();
        var regex = new RegExp("(.*?)\.(png|jpg)$");      
        var v = grecaptcha.getResponse();
        var address=document.getElementById('address').value;
        var readdress=document.getElementById('readdress').value;
        var token_id=document.getElementById('token_id').value;
        if(token_id=='' && token_id==false)
        {
            $('#error_1').fadeIn().html('Token id is missing.').delay(1500).fadeOut('slow');
            return false;
        }
        else if(symbol_name=='' && confirm==false)
        {
            $('#error_1').fadeIn().html('Please select symbol!').delay(1500).fadeOut('slow');
            return false;
        }
        else if(regex.test(filevalue)==false && confirm==false)
        {
            $('#symbol').val('');
            $('#symbol_name').val('');
            $('#error_1').fadeIn().html('Please only upload .jpg, .png files').delay(1500).fadeOut('slow');
            return false;
        }
        else if(paid_address=='' || trans_hash=='' || address=='' || readdress=='')
        {
            $('#error_1').fadeIn().html('Please enter mandatory(*) fields!').delay(1500).fadeOut('slow');
            return false;
        }
        else if(v.length == 0)
        {
            $('#error_1').fadeIn().html('Google Captcha Required').delay(1500).fadeOut('slow');
            return false;
        }else if(address != readdress)
        {
            $('#error_1').fadeIn().html('Wallet address mismatch').delay(1500).fadeOut('slow');
            return false;
        }
        else
        {
            $.ajax({
                            url: '{{route("isMailVerified")}}',
                        headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                            data: {
                                token_id: token_id
                            },
                            method:'POST',
                            success:function(res) {
                            if(res.verified) {
                                return $("#button_paid").click();
                            }
                            {{--  $('#resend_mail_trigger').click();  --}}
                                $('#myModal3').show().addClass('modal fade in')
                            }
                        })
            // document.getElementById("wizard_final").submit();
        }
        }
        function closeModal(id){
                return $('#'+id).removeClass("in").hide();
            }
        </script>

        <script>
    $(document).ready(function(){
        document.getElementById('demo').innerText = Math.floor(Math.random() * (1053 - 976) + 976) ;
        setInterval(function(){
        document.getElementById('demo').innerText = Math.floor(Math.random() * (1053 - 976) + 976) ;
        }, 10000);
    });

    </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>        
    </body>
    </html>