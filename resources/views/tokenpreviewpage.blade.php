
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>AUTOMATIC TOKENIZER</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="colorlib.com">
            
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="{{ URL::asset('public/asset/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('public/asset/vendor/date-picker/css/datepicker.min.css')}}">
            <!-- Latest compiled and minified CSS -->
            <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
            <link rel="stylesheet" href="{{ URL::asset('public/asset/css/style.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('public/asset/css/modal.css')}}">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDoujGbr86VY2F6vhh-bzZjsebCFoRn0ik"></script>

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
        </head>
        <body>
            <div class="header">
                <a href="http://about.assetplatform.net/" target="_blank">
                <img src = "{{asset('public/images/logo_ap.png')}}" width="150" alt="" />
                </a>
                <a href="http://about.assetplatform.net/" target="_blank">
                    <u>About</u>
                </a>
            </div>
            <span class="dynamic-data center-align black-text">
                <span id="demo">1043</span> People Online Now
            </span>
            <div class="wrapper">
                <form action="{{ route('CreateToken') }}" id="wizard_confirm" name="wizard" method="POST" enctype="multipart/form-data" class="preview-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- SECTION 1 -->
                    <h4></h4>
                    <section>
                        {{-- <span class="title_logo"><img src="{{ URL::asset('public/asset/images/logo.png') }}" style="width: 12%;"/></span> --}}
                        <h3>AUTOMATIC TOKENIZER</h3>
                        <p style="text-align: center;">* Please check all the details you have entered below. Edit it if required.<br>
                        * Scroll down and click the “Create my Tokens”</p>
                        <br>
                        <div style="display: block;" id="section1">
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>First Name *</b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-account-o"></i>
                                    <input type="text" name="firstname" id="firstname" class="form-control" value="{{$data['firstname']}}">
                                </div>
                            </div>
                            <div class="form-col">
                                <label for="">
                                    <b>Last Name *</b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-account-o"></i>
                                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{$data['lastname']}}">
                                </div>
                            </div>
                        </div>                                        
                        <div class="form-row" id="email_row">
                            <div class="form-col">
                                <label for="">
                                    <b>Email *</b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-email"></i>
                                    <input type="text" name="email" id="email" class="form-control" value="{{$data['email']}}">
                                </div>
                                <a style="display:none;" href="javascript:resend_ver_mail_trigger()" class="mt3">Resend verification mail</a>
                            </div>
                            <div class="form-col">
                                <label for="">
                                    <b>Phone Number</b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-smartphone-android"></i>
                                    <input type="number" name="phonenumber" class="form-control"  value="{{$data['phonenumber']}}">
                                </div>
                            </div>
                        </div>                    
                        </div>

                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>Country *</b>
                                </label>
                                <div class="form-holder" style="width: 100%;">
                                    <i class="zmdi zmdi-map"></i>
                                    <input type="text" name="country" id="country" class="form-control"  value="{{$data['country']}}">                                
                                </div>
                            </div>
                        </div>                      
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>1. Coin should be based on</b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    {!!get_crypto_coin_select_box('crypto_coin','','', $data['crypto_coin'])!!}
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                            </div>                       
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>2. What are you looking to Tokenize?</b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="asset" id="asset" class="form-control" value="{{$data['asset']}}">
                                </div>
                            </div>                       
                        </div>
                        <?php if($data['asset']=='Equity') { ?>
                        <div class="form-row" id="equity_block">
                            <div class="form-col">
                                <label for="">
                                    <b>Tokenize and distribute your Company&apos;s stocks (Equity) to interested shareholders. Equity tokens are backed by Stocks, Futures and options contract.</b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="equity_value" id="equity_value" class="form-control" value="{{$data['equity_value']}}">
                                </div>
                            </div>                       
                        </div>
                        <?php if($data['equity_value']=='Other') { ?>
                        <div class="form-row" id="equity_block">
                            <div class="form-col">
                                <label for="">
                                    <b>Please define the nature of your Equity Token * :</b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="other_equity_text" id="other_equity_text" class="form-control" value="{{$data['other_equity_text']}}">
                                </div>
                            </div>                       
                        </div>
                        <?php } ?>
                        <?php } ?>

                        <?php if($data['asset']=='Fixed Asset') { ?>
                        <div class="form-row" id="fixed_block">
                            <div class="form-col">
                                <label for="">
                                    <b>Tokenize and distribute assets like Gold, Real estate, Art collectables etc to investors. <a href="https://medium.com/coinmonks/asset-tokenization-on-blockchain-explained-in-plain-english-f4e4b5e26a6d" target="_blank">Learn more</a></b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="fixed_value" id="fixed_value" class="form-control" value="{{$data['fixed_value']}}">
                                </div>
                            </div>                       
                        </div>
                        <?php } ?>


                        <?php if($data['fixed_value']=='Agriculture') { ?>
                        {{-- Agriculture --}}
                        <div class="" id="agri_block">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Name of the Farmland/Estate * :</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="estatename" id="estatename" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;"  value="{{$data['estatename']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Area of the Farmland/Estate</b><i class="ialign"> (Square meters) : *</i></b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="estate_area_mm" id="estate_area_mm" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['estate_area_mm']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>How much of the above area would you want to tokenize</b><i> (Square meters) : *</i></b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="estate_area_token" id="estate_area_token" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['estate_area_token']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Tokens to be created:</b><i>( We have converted the Sq. MM to equal number of tokens. You can edit the value as to how much you want ) : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="token_supply" id="token_supply" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['token_supply']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Type of Crop Grown : </b><i> (Paddy, Coffee etc.) *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="cropgrown" id="cropgrown" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['cropgrown']}}">
                                </div>
                            </div>                                            
                        </div>
                        <?php if($data['estate_location']!='others') { ?>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Farmland/Estate location * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="estate_location" id="estate_location" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['estate_location']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>State * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="estate_location_state" id="estate_location_state" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['estate_location_state']}}">
                                </div>
                            </div>                                            
                        </div>
                        <?php } else { ?>
                        <input type="hidden" name="estate_location" id="estate_location" class="form-control" value="{{$data['estate_location']}}">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Farmland/Estate location * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="estate_location_input" id="estate_location_input" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['estate_location_input']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>State * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="estate_location_state_input" id="estate_location_state_input" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['estate_location_state_input']}}">
                                </div>
                            </div>                                            
                        </div>
                        <?php } ?>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Land Registration number (if any) : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="reg_no" id="reg_no" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['reg_no']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;" id="calculation_part_agri"><b>Token value calculated at: </b> 1 Token = 1 Sq.mm <b>{{$data['estate_area_mm']}}</b> of <b>{{$data['estatename']}}</b> from the allocated area to tokenize.</label>
                            </div>                                            
                        </div>
                        </div>
                        {{-- End of Agriculture --}}
                        <?php } ?>


                        <?php if($data['fixed_value']=='Art/Collectable') { ?>
                        {{-- Art/Collectable --}}
                        <div class="" id="art_block">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Name of the Artwork/Collectable * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="artname" id="artname" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['artname']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>What is the significance of the<br>artwork/collectable? </b><i> (Few Words) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;margin-top:2em;">
                                    <!-- <input type="text" name="art_desc" id="art_desc" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['art_desc']}}"> -->
                                    <textarea name="art_desc" id="art_desc" style="float:right;border: 1px solid #ccc;" onkeyup="javascript:validate_artcoll_form();" rows="6" cols="54">{{$data['art_desc']}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Name of the Artist/Creator * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="artist_name" id="artist_name" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['artist_name']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Country of Origin * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="orgin" id="orgin" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['orgin']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Year Created * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="yearcreated" id="yearcreated" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;"  value="{{$data['yearcreated']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Artwork/Collectable Medium </b><i><br>(Canvas,Photo,wood,Clay etc) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="medium" id="medium" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['medium']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Artwork Type : </b><i>(Oil Painting, Water soluble,Sculpture etc) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="artwork_type" id="artwork_type" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;"  value="{{$data['artwork_type']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Holding Gallery/ Collectors Name * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="collectorsname" id="collectorsname" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['collectorsname']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Copyright Information</b><i> (If any) : </i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="copyright" id="copyright" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['copyright']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Value of the Artwork(In USD) * : $ </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="artworkusd" id="artworkusd" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['artworkusd']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Max. Token Supply * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="max_token" id="max_token" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['max_token']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Per unit to tokenize : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="perunit" id="perunit" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['perunit']}}">                                
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Token value calculated at: 1 Token = 1 </b><b>{{$data['perunit']}}</b> of <b>{{$data['artname']}}</b></label>                            
                            </div>                                            
                        </div>

                        {{-- Artwork Form --}}
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Charismatic power quotient : </b><i><br>(self-evaluation of the art)</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="charismatic_power_quotient" id="charismatic_power_quotient" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['charismatic_power_quotient']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Emotional quotient towards the work : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="quotient_work" id="quotient_work" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['quotient_work']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>AQRCP </b><i>(Authenticity, Quality, Rarity, <br>Condition, Provenance) Quotient : </i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="aqrcp" id="aqrcp" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['aqrcp']}}">
                                </div>
                            </div>
                        </div>
                        <?php 
                        $previous_owners=explode(',', $data['previous_owner']);
                        $from_years=explode(',', $data['from_year']);
                        $to_years=explode(',', $data['to_year']);
                        if(count($previous_owners)>0) { ?>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Previous owners : </b></label>
                                <div class="form-holder" style="display: inline;width: 100% !important;float:right;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">
                                <?php for($i=0; $i<count($previous_owners); $i++) { ?>
                                <div class="form-holder" style="display: inline;width: 100% !important;float:right;">
                                    <input type="text" name="sno[]" class="form-control" style="display: inline;height: 30px !important;width:15%;" value="{{($i+1)}}">
                                    <input type="text" name="previous_owner[]" class="form-control" style="display: inline;height: 30px !important;width:40%;" placeholder="Previous Owner" value="{{$previous_owners[$i]}}">
                                    <input type="text" name="from_year[]" placeholder="From Year" class="form-control" style="display: inline;height: 30px !important;width:20%;" value="{{$from_years[$i]}}">
                                    <input type="text" name="to_year[]" class="form-control" placeholder="To Year" style="display: inline;height: 30px !important;width:20%;" value="{{$to_years[$i]}}">
                                </div>
                                <?php } ?>
                            </div>
                        </div> 
                        <?php } ?>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Market demand quotient : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="market_demand_quotient" id="market_demand_quotient" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['market_demand_quotient']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Auction House Name : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="auction_house" id="auction_house" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['auction_house']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Below auction houses, add <br>Auction house quotient</b><i> (value of the <br>artwork increases when a popular<br> auction house holds the art) : </i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="auction_house_add" id="auction_house_add" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['auction_house_add']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Is the artwork insured? : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="radio" name="artwork_insured" value="1" <?php if($data['artwork_insured']==1) { echo 'checked'; } ?> style="display: inline;" onclick="$('#insure_block').show('slow');">Yes
                                    <input type="radio" name="artwork_insured" value="0" <?php if($data['artwork_insured']==0) { echo 'checked'; } ?> style="display: inline;" onclick="$('#insure_block').hide('slow');">No
                                </div>
                            </div>
                        </div>
                        <?php if($data['artwork_insured']==1) { ?>
                        <div id="insure_block">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Insurance Id : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="insurance_id" id="insurance_id" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['insurance_id']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Insurance Company Name : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="insurance_company_name" id="insurance_company_name" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['insurance_company_name']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Insured On : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="insured_on" id="insured_on" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['insured_on']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Expiry Date : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="insure_expiry_date" id="insure_expiry_date" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['insure_expiry_date']}}">
                                </div>
                            </div>
                        </div>
                        </div>

                        <?php } ?>
                        {{-- End of Artwork Form --}}

                        </div>
                        {{-- End of Art/Collectable --}}
                        <?php } ?>


                        <?php if($data['fixed_value']=='Real Estate') { ?>
                        {{-- Real Estate --}}
                        <div class="" id="real_block">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>REAL ESTATE PROPERTY NAME : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="realestate_name" id="realestate_name" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['realestate_name']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Property Type : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="property_type" id="property_type" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['property_type']}}">                                
                                </div>
                            </div>
                        </div>
                        <?php if($data['property_location']!='others') { ?>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Property location : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="property_location_address" id="property_location_address" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['property_location_address']}}">                                
                                    <input type="hidden" id="property_location" name="property_location" value="{{$data['property_location']}}">
                                    <input type="hidden" id="property_location_state" name="property_location_state" value="{{$data['property_location_state']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">
                                <iframe width="100%" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDoujGbr86VY2F6vhh-bzZjsebCFoRn0ik&q={{str_replace(' ', '+', $data['property_location_address'])}}" allowfullscreen></iframe>
                            </div>
                        </div>
                        <?php } else { ?>
                        <input type="hidden" name="property_location" id="property_location" class="form-control" value="{{$data['property_location']}}">  
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Property location : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="property_location_input" id="property_location_input" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['property_location_input']}}">                                
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>State : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="property_location_state_input" id="property_location_state_input" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['property_location_state_input']}}">                                
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Property Value (in USD): $ </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="realestate_usd" id="realestate_usd" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['realestate_usd']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Property Size </b><i>(In Sq meters) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="total_property_size" id="total_property_size" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['total_property_size']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Property Size</b><i> (In Sq Millimeters) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="property_size_mm" id="property_size_mm" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['property_size_mm']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Property Size to Tokenize </b><i>(Sq. Millimeters) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="property_size_mm_token" id="property_size_mm_token" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['property_size_mm_token']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Maximum Token Supply (Tokens)</b><br><i>(Based on the Property size to tokenize): *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="max_token_supply" id="max_token_supply" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['max_token_supply']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Token value calculated at:</b> 1 Token = 1 Sq. mm of <b>{{$data['realestate_name']}}</b> from the allocated area to tokenize.</label>                            
                            </div>                                            
                        </div>
                        </div>
                        {{-- End of Real Estate --}}
                        <?php } ?>


                        <?php if($data['fixed_value']=='Quarry/Mine') { ?>
                        {{-- Quarry/Mine --}}
                        <div class="" id="quarry_block">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Mine / Quarry Name : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="quarry_name" id="quarry_name" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['quarry_name']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Type of Minerals/ Ore mined : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="mine_type" id="mine_type" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['mine_type']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Quarry id </b><i>(if any, optional) : </i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="quarry_id" id="quarry_id" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['quarry_id']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Quarry registered location : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="quarry_loc_address" id="quarry_loc_address" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['quarry_loc_address']}}">
                                    <input type="hidden" name="quarry_loc" id="quarry_loc" class="form-control" value="{{$data['quarry_loc']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <iframe width="100%" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDoujGbr86VY2F6vhh-bzZjsebCFoRn0ik&q={{str_replace(' ', '+', $data['quarry_loc_address'])}}" allowfullscreen></iframe>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Quarry Permit id</b><i> (if any, optional) : </i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="permit_id" id="permit_id" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['permit_id']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Do you want to Tokenize the entire Quarry or a specific Quantity of Mineral/Ore Mined? *</b></label>
                                <div class="form-holder" style="display: inline;width: 100% !important;">
                                    <input type="text" name="quarry_opt" id="quarry_opt" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['quarry_opt']}}">                                
                                </div>
                            </div>                                            
                        </div>

                        <?php if($data['quarry_opt']=='Entire Quarry') { ?>
                        <div class="form-row" style="margin-bottom: 15px !important;" id="entire_quarry_sub">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Quarry Size in Sq Meters : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="quarry_size_meters" id="quarry_size_meters" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['quarry_size_meters']}}">
                                </div>
                            </div>                                            
                        </div>
                        <?php } ?>

                        <?php if($data['quarry_opt']=='Specific Quantity') { ?>
                        <div id="specific_quarry_sub">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Quantity of the mineral to tokenize : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="total_quarry_size_meters" id="total_quarry_size_meters" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['total_quarry_size_meters']}}">
                                </div>
                            </div>                                            
                        </div>

                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Unit of the Total Quantity of Mineral : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="unit_total_qty_mineral" id="unit_total_qty_mineral" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['unit_total_qty_mineral']}}">
                                </div>
                            </div>                                            
                        </div>

                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Per unit to tokenize : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="per_unit_to_tokenize" id="per_unit_to_tokenize" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['per_unit_to_tokenize']}}">
                                </div>
                            </div>                                            
                        </div>

                        </div>
                        <?php } ?>


                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Supply of Tokens : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="total_supply_of_tokens" id="total_supply_of_tokens" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['total_supply_of_tokens']}}">
                                </div>
                            </div>                                            
                        </div>                    
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Token value calculated at:</b> 1 Token = 1 <b>{{$data['per_unit_to_tokenize']}}</b> of <b>{{$data['quarry_name']}}</b> from the allocated area to tokenize.</label>                            
                            </div>                                            
                        </div>
                        </div>
                        {{-- End of Quarry/Mine --}}
                        <?php } ?>


                        <?php if($data['fixed_value']=='Others') { ?>
                        {{-- Others --}}
                        <div class="" id="other_block">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Name of the Asset : *</b><i> (Gold bar, <br>Kohinoor Diamond, a magnum of Chardonnay<br> 1820 etc) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="asset_name" id="asset_name" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['asset_name']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>What type of Asset is this? </b><i>(Precious <br>metal, Rare stone, etc) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="asset_type" id="asset_type" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['asset_type']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>What is this asset about? : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="about_asset" id="about_asset" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['about_asset']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Asset Id (if any) : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="asset_id" id="asset_id" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['asset_id']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Asset value (in USD) : $ </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="asset_value_usd" id="asset_value_usd" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['asset_value_usd']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>What unit is the Asset measured? : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="asset_measure_unit" id="asset_measure_unit" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['asset_measure_unit']}}">                                
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Asset Quantity : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="asset_qty" id="asset_qty" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['asset_qty']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>unit for the quantity to tokenize : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="per_token_unit" id="per_token_unit" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['per_token_unit']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Quantity to tokenize : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="quantity_to_tokenize" id="quantity_to_tokenize" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['quantity_to_tokenize']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Max Token Supply : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="max_token_supply_asset" id="max_token_supply_asset" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" value="{{$data['max_token_supply_asset']}}">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Token value calculated at:</b> 1 Token = 1 <b>{{$data['per_token_unit']}}</b> of <b>{{$data['asset_name']}}</b></label>
                            </div>                                            
                        </div>
                        </div>
                        {{-- End of Others --}}
                        <?php } ?>


                        <?php if($data['asset']=='Utility') { ?>
                        <div class="form-row" id="utility_block">
                            <div class="form-col">
                                <label for="">
                                    <b>Utility tokens are tokens created for raising funds without any backed asset. It does not represent any security or share. They mainly derive their value from specific purposes they are built for. <a href="https://medium.com/coinmonks/utility-tokens-a-general-understanding-f6a5f9699cc0" target="_blank">Learn more</a> *</b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="utility_value" id="utility_value" class="form-control" value="{{$data['utility_value']}}">
                                </div>
                            </div>                       
                        </div>
                        <?php if($data['utility_value']=='Other niche Utility Tokens') { ?>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>Please define the nature of your Utility Token * : </b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="other_niche_text" id="other_niche_text" class="form-control" value="{{$data['other_niche_text']}}">
                                </div>
                            </div>                       
                        </div>
                        <?php } ?>
                        <?php } ?>

                        <?php if($data['asset']=='Other Type') { ?>
                        <div class="form-row" id="other_type_block">
                            <div class="form-col">
                                <label for="">
                                    <b>Please define your token type * : </b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="other_type" id="other_type" class="form-control" value="{{$data['other_type']}}">
                                </div>
                            </div>                       
                        </div>
                        <?php } ?>

                    
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>3. How much funding are you aiming to raise?*</b>
                                </label>    
                                
                                <div class="form-row">
                                <div class="form-col">                    
                                    <div class="form-holder" >
                                        {!!get_country_select_box('fund_currency','currency_change form-control pl10','',$data['fund_currency'])!!}
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="form-col">                         
                                <div class="form-holder">
                                    <i class="zmdi zmdi-money"></i>
                                    <input type="number" name="usd" class="form-control" value="{{$data['usd']}}">
                                </div>
                                </div>
                                </div>
                            </div>                        
                        </div>
                        <?php if($data['asset']=='Stable Coins') { ?>
                        <div class="form-row" id="stable_block">
                            <div class="form-col">
                                <label for="">
                                    {{-- <b>Stable Coins are generally backed by a FIAT currency ( Eg: USDT ). The price of your Stale coin will always be the current price of the backing FIAT</b> --}}
                                    <b>4. Price of one token:&nbsp;
                            <span id="source_currency_value_bind"></span></b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    {!!get_country_select_box('currency','form-control pl10 currency_change','',$data['currency'])!!}

                                        <i class="zmdi zmdi-chevron-down"></i>
                                    {{-- <input type="text" name="currency" id="currency" class="form-control" value="{{$data['currency']}}"> --}}
                                </div>
                            </div>                       
                        </div>
                        <?php } ?>
                        <div class="form-row" id="asset_currency_div" @if($data['asset']=='Stable Coins') style="display:none"@endif>
                            <div class="form-col">
                                <label for="">
                                    <b>5. What should be the price of one token? *</b>
                                </label>  
                                
                                <div class="form-row">
                                <div class="form-col">                    
                                    <div class="form-holder" >

                                        <i class="zmdi zmdi-check"></i>
                                        {!!get_country_select_box('asset_currency','form-control currency_change','',$data['asset_currency'])!!}
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="form-col">                           
                                <div class="form-holder">
                                    <input type="number" name="price_per_token" id="price_per_token" value="{{$data['price_per_token']}}" class="form-control">
                                </div> 
                                </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="form-row">
                            <div class="form-col"> 
                                <label for="">
                                    <b>5. In which parts of the world will you be marketing your offering? *</b>
                                </label>                              
                                <div class="form-holder" style="width: 100%;">
                                    <i class="zmdi zmdi-check"></i>
                                    <?php if(isset($data['marketing'])) { ?>
                                    <input type="text" name="marketing" class="form-control" value="{{$data['marketing']}}">
                                    <?php } else { ?>
                                    <input type="text" name="marketing" class="form-control" value="">
                                    <?php } ?>
                                </div>
                            </div>                        
                        </div>
                        
                    <!--  <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>Your Ether Wallet Address *</b>
                                </label>       
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <input type="text" name="address" id="address" class="form-control" value="">
                                </div>                     
                            </div>                       
                        </div> -->
                    <!--   <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>Symbol *</b>
                                </label>                            
                                <div class="form-holder">
                                    <img src="{{ URL::asset('public/uploads/'.$data['symbol']) }}" style="width: 12%;"/>
                                </div>
                            </div>                        
                        </div> -->
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>Token's Name *</b>
                                </label>                            
                                <div class="form-holder">
                                    <i class="zmdi zmdi-account-o"></i>
                                    <input type="text" name="cname" id="cname" class="form-control" value="{{$data['cname']}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    <b>Total Supply of Tokens *</b>
                                </label>                           
                                <i class="ialign"> (Max number of coins to be created)</i> 
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <!-- <input type="text" name="total_supply" id="total_supply" class="form-control" value="{{$data['total_supply']}}" onkeyup="javascript:$('#total_token_supply').html(this.value*apad('10',$('#decimals').val()));"> -->
                                    <input type="number" name="total_supply" id="total_supply" class="form-control" value="{{$data['total_supply']}}" onkeyup="javascript:$('#total_token_supply').html(this.value);">
                                </div>
                            </div>
                            <div class="form-col">
                                <label for="">
                                    <b>Decimals *</b><br>
                                </label>
                                <i class="ialign">(Maximum number of digits)? <a href="#" data-toggle="modal" data-target="#myModal">What is this?</a></i>

                                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                        <!--  <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div> -->
                                        <div class="modal-body">
                                            <p>The decimals denote the minimum -or- maximum units you can split each token into ( when sending or receiving ) </p><br><br>


    <p>When picking a suitable value for decimals these rules should be followed:</p><br>
    <p>
    * Does the token contract represent an indivisible entity? Then set decimals to 0</p><br>
    <p>* Does the token contract represent an item with a fixed number of decimal places? Then set decimals to that number</p><br>
    <p>* If neither of the above apply set decimals to 18</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>

                                    </div>
                                    </div>


                    <!--End Modal -->

                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <!-- <input type="text" name="decimals" id="decimals" class="form-control" value="{{$data['decimals']}}" onkeyUp="javascript:$('#total_token_supply').html($('#total_supply').val()*apad('10',parseInt(this.value)));"> -->
                                    <input type="number" name="decimals" id="decimals" class="form-control" value="{{$data['decimals']}}" onkeyUp="javascript:$('#total_token_supply').html($('#total_supply').val());">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col"> 
                                <label for="">
                                    Total Tokens that will be created: <b><span id="total_token_supply"><?php $check =$data['total_supply']; echo number_format($check,0,'',''); ?></span></b>
                                </label>
                            </div>
                        </div>
                         <div class="form-row">
            <div class="form-col"> 
                <label>
                    <b>Your Coin/ Token abbreviation*</b>
                </label>   
                <i class="ialign">( Ex: BTC, EOS, ETH, XLM etc. )</i>                           
                <div class="form-holder" style="width: 100%;">
                    <div class="form-holder">
                        <input type="text" name="token_abbreviation" id="usd" class="form-control pl12" value="{{$data['token_abbreviation']}}">
                    </div>
                </div>
            </div>                        
        </div>
        <div class="form-row">
            <div class="form-col"> 
                <label>
                    <b>Starting letter for your token addresses*:</b>
                </label>   
                <i class="ialign">( Ex: 15tc8rPLETQaHmqJDFTMJHr61jN7ge7KA8 )</i>                           
                <div class="form-holder" style="width: 100%;">
                    {!! get_start_letter_drop_down('pre_fix_token_address', $data['pre_fix_token_address']) !!}
                </div>
            </div>                        
        </div>
        <div class="form-row">
            <div class="form-col"> 
                <label>
                    <b>Verbal timestamp</b>
                </label>      
                <i class="ialign">( Just give a random text, phrase or string Ex: TikTok is the clock going Tick Tok )</i>                        
                <div class="form-holder" style="width: 100%;">
                    <input type="text" value="{{$data['verbal_timestamp']}}" name="verbal_timestamp" id="usd" class="form-control pl12">
                </div>
            </div>                        
        </div>
        <div class="form-row">
            <div class="form-col"> 
                <label>
                    <b>Coin Unit</b>
                </label>   
                <i class="ialign">( Give a name for the smallest unit of your coin Ex: Satoshi )</i>                           
                <div class="form-holder" style="width: 100%;">
                    <input type="text"  value="{{$data['smallest_unit_of_coin']}}" name="smallest_unit_of_coin" id="usd" class="form-control pl12">
                </div>
            </div>                        
        </div>
        <div class="form-row">
            <div class="form-col"> 
                <label>
                    <b>Number of confirmations</b>
                </label> 
                <i class="ialign">( Minimum number of confirmations before a transaction is confirmed Ex: 3 )</i>                             
                <div class="form-holder" style="width: 100%;">
                    <input type="number" value="{{$data['num_of_confirmations']}}"  name="num_of_confirmations" id="usd" class="form-control pl12">
                </div>
            </div>                        
        </div>
                        <div class="form-row" style="text-align: center;">
                            <div class="form-col"> 
                                <div class="form-holder" style="width: 100%;">
                                    <input type="checkbox" name="confirm" id="confirm" value="confirm" onclick="javascript:show_button();">&nbsp;&nbsp;&nbsp;<b> I confirm the details are correct and agree to the terms and conditions of the Token Creator platform. </b>
                                </div>
                            </div>
                        </div>
                        <div class="form-row captcha-otr">
                            <div class="form-col">
                                <div class="g-recaptcha" data-sitekey="6LeXCocUAAAAADxx3TR7ITrkTSHsp5msxLRyuA3-"></div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 10px;">
                            <div class="form-col">
                                <label for="" style="text-align:center;">
                                    <span class="error_message" id="error"></span>
                                </label>
                            </div>                                     
                        </div>
                        <div class="form-row" id="button_block">
                            <div class="form-col">
                                <label for="" style="text-align:right;">
                                    <button type="button" name="createtoken" onclick="javascript:confirm_creation();" class="button_create_token">Create my Tokens</button>
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
                            <button onclick="closeModal('myModal4');" type="button" data-dismiss="modal" class="btn btn-default" >Close</button>
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
                                <p><u>Important:</u> Incase you have not received mail yet, Please check your SPAM folders. Also please mark the email as 'important' so our future notifications reach you.</p>
                                <p>Thanks.</p>
                            </div>
                            <div class="modal-footer">
                            <button onclick="closeModal('myModal3');" type="button" data-dismiss="modal" class="btn btn-default" >Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{ URL::asset('public/asset/js/jquery-3.3.1.min.js')}}"></script>
            <script src="{{ URL::asset('public/asset/js/jquery.steps.js')}}"></script>
            <script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.js')}}"></script>
            <script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.en.js')}}"></script>
            <script src="{{ URL::asset('public/asset/js/main.js')}}"></script>
            <script type="text/javascript">

        function resend_ver_mail_trigger() {
                var email = $('#email').val();
                $('#error_modal').html('');
                if(email === '') {
                            $('#myModal4').show();
                    $('#success_modal').html('');
                    $('#error_modal').html('Email is required.');
                    return;
                }
                else {
                    $.ajax({
                        url:'{{url("/resendMail")}}',
                        method: 'POST',
                        headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: 'JSON',
                        data: {
                            email: email,
                            token_id: "{{$data['token_id']}}"
                        },
                        success: function(res) {
                            $('#myModal4').show();
                            if(res.status){
                                $('#success_modal').html('Verification mail has been sent successfully.');
                                setTimeout(function() {
                                $('#success_modal').html('');
                                }, 3000);
                            }
                            else {
                                $('#error_modal').html('Verification mail has not been sent.');
                            }
                        }
                    })
                }
            }
                function show_button() 
                {
                    var check=document.getElementById('confirm').checked;
                    if(check==true)
                    {
                        $('#button_block').show('slow');
                    }
                    else
                    {
                        $('#button_block').hide('slow');
                    }
                }
                function confirm_creation() 
                {
                    var v = grecaptcha.getResponse();
                    var decimals=document.getElementById('decimals').value;
                    var total_supply=document.getElementById('total_supply').value;
                    if(v.length == 0 )
                    {
                        $('#error').fadeIn().html('Google Captcha Required').delay(1500).fadeOut('slow');
                    }else if(total_supply=='' || cname=='')
                    {
                        $('#error').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
                        
                    }else if(parseInt(decimals) > 18)
                    {
                        $('#error').fadeIn().html('Maximum Decimal value can be 18').delay(1500).fadeOut('slow');
                    }
                    else
                    {
                        return document.getElementById("wizard_confirm").submit();
                    }
                }
                function apad(number, length) 
                {   
                    var str = '' + number;
                    while (str.length <= length) {
                        str = str + '0';
                    }
                    return str;
                }
            </script>
            <script>
            function closeModal(id){
                return $('#'+id).hide();
            }
            $(document).ready(function(){
                document.getElementById('demo').innerText = Math.floor(Math.random() * (1053 - 976) + 976) ;
                setInterval(function(){
                document.getElementById('demo').innerText = Math.floor(Math.random() * (1053 - 976) + 976) ;
                }, 10000);
                
            });
            
            </script>
            @include('partials.scripts')
            @include('partials.footer')
    </body>
    </html>