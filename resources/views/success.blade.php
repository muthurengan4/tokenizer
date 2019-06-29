    <!DOCTYPE html>
    <html lang='en' class=''>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <link rel="stylesheet" href="http://18.216.231.115/token/public/asset/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="http://18.216.231.115/token/public/asset/vendor/date-picker/css/datepicker.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('public/asset/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body {
            background: #ffffff !important;
            font-family: 'Poppins', sans-serif !important;
        }
        .wrapper{
            max-width: 850px;
            margin: auto;
        }
        .text-left{
            text-align: left;
        }
        .congratrs-otr h3 {
            font-family: "Poppins-SemiBold";
            font-size: 20px !important;
            color: #3377c0;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: .2px;
            margin-bottom: 10px !important;
        }
        .congratrs-otr h3 span {
            text-transform: none;
            letter-spacing: .2px;
        }
        .congratrs-otr ul{
            margin: 1em 0;
            color: #555;
            padding: 1em 0;
            border-radius: 4px;
        }
        .congratrs-otr ul li{
            border-bottom: 1px dashed #f1f1f1;
            padding: 1em 0;
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
        p{
            margin: 0 0 7px;
            color:#999;
        }
        .accordion-toggle:after {
        font-family: 'Glyphicons Halflings'; 
        content: "\e114";    
        float: right;   
        color: #fff;   
        font-size: 9px;
        position: relative;
        top: -27px;
        right: 13px;
        }
        .accordion-toggle.collapsed:after {
            content: "\e080";    
        }
        a, a:hover, a:focus, a:active{
            text-decoration: none;
        }
        .panel-group{
            margin: 3em 0;
        }
        .panel-group .panel+.panel{
            margin-top: 10px;
        }
        .panel-flex{
            display: flex;
            flex-wrap: wrap;
        }
        .panel-flex .panel-img{
            flex: 25%;
        }
        .panel-flex .panel-data{
            flex: 75%;
        }
        p.caption{
            font-size: 18px;
            line-height: 28px;
            color:#333;
        }
        .well{
            color:#b48728;
            font-weight: 600;
            border: none;
            margin: 1em 0;
        }
        .panel-group .panel-heading{
            color: #fff;
        font-size: 14px;
        background-color: #5a789b;
        }
        .panel-group .panel-heading a.accordion-toggle{
            display: inline-block;
            width: 100%;
        }
        .panel-group .panel-title{
            font-size: 14px;
        }
        
        .black-text{
            color:#333;
            font-weight: 800;
        }
        .table-invoice{
            display: inline-table;
            width: 100%;
            margin: 2em 0 3em;
            color:#888;
        }
        .table-invoice td{
            padding: 15px 0;
        }
        .table-invoice tr{
            border-bottom: 1px dashed #ddd;
        }
        .text-right{
            text-align: right;
            font-weight: 600;
        }
        
        .button_paid, .button_paid:hover, .button_paid:focus {
            border: none;
            display: inline-flex;
            height: 42px;
            align-items: center;
            color: #fff;
            cursor: pointer;
            background: #5e7997;
            text-transform: uppercase;
            justify-content: center;
            letter-spacing: 1px;
            border-radius: 2px;
            -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
        }
        .congratrs-otr{
            padding: 2em 3em;
        }
        
        .btn-theme{
            border: 2px solid #ae8641;
            margin: 0 3px ;
            color: #000;
            text-transform: capitalize;
            font-weight: 900;
            border-radius: 3px;
            padding: 8px 18px;
            white-space: normal;
        }
        
        .alt-coins{
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
            align-items: center;
        }
        /* .alt-coins .logo-container img{
            width: 130px;
        } */
        .alt-coins .logo-container{
            padding: 2em;
        }
        .mb-2em{
            margin-bottom: 2em;
        }
        @media (max-width: 767px){
            .btn-theme{
                width: 100%;
                margin-bottom: 5px;
                padding: 8px;
            }
            .btn-success{
                width: 100%;
            }
            .alt-coins{
                justify-content: center;
            }
            .alt-coins .logo-container{
                text-align: center;
                width: 100%;
            }
            iframe{
                width: 100%;
            }
        }
        .container.preloader"{
            display: table;
            position: absolute;
            height: 100%;
            width: 100%;
        }
        .content-otr{
            display: table-cell;
            vertical-align: middle;
        }
        .inner{
            max-width: 750px;
            margin: auto;
            text-align: center;
        }
        .container .text {
        color:#151719;
        font-size:15px;
        font-weight:600;
        line-height: 25px;
        }
        .container .text h4{
            font-size: 19px;
            line-height: 38px;
        }
        .container .loader {
        position:relative;
        max-width:320px;
        height:13px;
        border:1px solid #ff0000;
        margin-top:4px;
        background-image:linear-gradient(135deg,rgb(97,135,242) 0%,rgb(97,135,242) 25%,rgb(86,121,217) 25%,rgb(86,121,217) 50%,rgb(97,135,242) 50%,rgb(97,135,242) 75%,rgb(86,121,217) 75%,rgb(86,121,217) 100%);
        background-size:16px 16px;
        background-position:0px 0px;
        background-clip:content-box;
        padding:1px;
        animation:mv 88500ms linear 1;
        margin: 15px auto;
        }
        .loader:before {
        position:absolute;
        content:"";
        width:100%;
        height:10px;
        background:#fff;
        right:0px;
        animation:loading 121s ease-in-out 1;
        }
        @keyframes loading {
        0% {width: 100%;}
        30% {width: 83%;}
        50% {width: 65%;}
        69% {width: 17%;}
        85% {width: 0;}
        100% {width: 0;}
        }
        @keyframes mv {
        to {
            background-position-x:-16px;
        }
        }
        .delay-text{
            visibility: hidden;
            max-width: 265px;
            margin: auto;
            text-align: left;
            font-size: 14px;
            line-height: 24px;
            font-weight: 600;
        }
        .delayedShowOne{
            margin-top: 10px;
        }
        .delayedShowOne{
        animation: delay-text 0s linear 30s 1 forwards;
        }
        .delayedShowTwo{
        animation: delay-text 0s linear 50s 1 forwards;
        }
        .delayedShowThree{
        animation: delay-text 0s linear 70s 1 forwards;
        }
        .delayedShowFour{
        animation: delay-text 0s linear 90s 1 forwards;
        }
        .delayedShowFive{
        animation: delay-text 0s linear 105s 1 forwards;
        }
        .text-success{
            color:#a97f6f;
        }
        .btn-success{
            padding: 10px 18px;
            border: none;
            margin-right: 10px;
            position: relative;
            top: -2px;
            border-radius: 3px;
        }
        @keyframes delay-text {
        to {
            visibility: visible;
        }
        }

        .header img{
            display: inline-block;
            padding-right: 10px;
        }
        .captcha-otr div{
                margin: auto;
            }
            footer .widgets_wrapper .widget {
        padding: 15px 0;
        margin-bottom: 0;
        }
        footer .container{
            width: 100%;
            max-width: 83%;
        }
        .footer_copy .container{
            text-align: left;
            max-width: 100%;
        }
        .content-otr{
            min-height: 100vh;
            margin-bottom: 4em;
        }
        .video-otr{
            margin: 3em 0;
        }
        .text-danger{
            color:#ff0000;
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
                <div class="container preloader">
                    <div class="content-otr">
                        <div class="inner">
                                <div class="text">
                                    <h4>Your Tokens are getting created.</h4>
                                    Please <b class="text-danger">DONT</b> Refresh this page or Hit the <b class="text-danger">BACK</b> button.</div>
                                    <div class="video-otr">
                                        <!-- <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ByygLMERnFA?rel=0&amp;controls=0&amp;showinfo=0;&amp;autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                            <iframe width="853" height="480" src="https://www.youtube-nocookie.com/embed/SDu_rTV_XA8?rel=0&amp;controls=0&amp;showinfo=0;&amp;autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="loader"></div>
                                <p>Estimated creation time:  <span id="time">01:45</span></p>
                                <div class="delayedShowOne delay-text">
                                        <svg style="width:20px;height:20px;position:relative;top:5px;" viewBox="0 0 24 24">
                                            <path fill="#8bc34a" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z" />
                                        </svg>
                                        Smart Contract created.
                                </div>
                                <div class="delayedShowTwo delay-text">
                                        <svg style="width:20px;height:20px;position:relative;top:5px;" viewBox="0 0 24 24">
                                            <path fill="#8bc34a" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z" />
                                        </svg>
                                        Tokenomics applied.
                                </div>
                                <div class="delayedShowThree delay-text">
                                        <svg style="width:20px;height:20px;position:relative;top:5px;" viewBox="0 0 24 24">
                                            <path fill="#8bc34a" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z" />
                                        </svg>
                                        Token&apos;s created.
                                </div>
                                <div class="delayedShowFour delay-text">
                                        <svg style="width:20px;height:20px;position:relative;top:5px;" viewBox="0 0 24 24">
                                            <path fill="#8bc34a" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z" />
                                        </svg>
                                        Verification & Check-up done.
                                </div>
                                <div class="delayedShowFive delay-text">
                                        <svg style="width:20px;height:20px;position:relative;top:5px;" viewBox="0 0 24 24">
                                            <path fill="#8bc34a" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z" />
                                        </svg>
                                        All Complete.
                                </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper" style="display:none" >
                    <div class="congratrs-otr">
                            <h3 class="text-left">CONGRATS, <span>Following are the things that are completed:</span> </h3>
                            <p class="mb-2em">Step 1: You have successfully provided all the information required to create your Tokens.</p>
                            <p>Step 2: Using those information, your Tokens were created,</p>
                            <p>
                                <svg style="width:20px;height:20px;position:relative;top:5px;" viewBox="0 0 24 24">
                                    <path fill="#8bc34a" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z" />
                                </svg>
                                Number of Tokens Created:  <span class="black-text">{{$token_details->total_supply}}</span>
                            </p>
                            <p>
                                <svg style="width:20px;height:20px;position:relative;top:5px;" viewBox="0 0 24 24">
                                    <path fill="#8bc34a" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z" />
                                </svg>
                                Name of Token: <span class="black-text">{{$token_details->cname}}</span>
                            </p>
                            <p>
                                <svg style="width:20px;height:20px;position:relative;top:5px;" viewBox="0 0 24 24">
                                    <path fill="#8bc34a" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z" />
                                </svg>
                                Date and time of creation: <span class="black-text">{{$token_details->date_of_creation}}</span>
                            </p>
                        <p>&nbsp;</p>
                        <h3 class="text-left">WHAT NEXT?</h3>
                        <p>All the above created tokens are stored securely in the system&apos;s temporary wallet. </p>
                        <p>These Tokens will be transferred to <u class="black-text">your Wallet</u> ( So you can start selling them to your users )</p>
                        <p>&nbsp;</p>
                        <p>Our one time Token Creation and Transfer Fee is just: <span class="black-text">$9</span></p><br/>
                        <div>
                        <a href="#accordion1" class="btn btn-success anchor-scroll">Make Payment</a>
                        <a href="https://assetplatform.net/" target="_blank" class="btn btn-theme pull-right">I want to re-create my tokens from Start</a><br/>
                        <a data-toggle="modal" data-target="#needhelp" class="pull-right"><u>Need help?</u></a>
                        </div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p class="text-center">209+ Tokens created using this A.I. platform</p>
                        <div class="alt-coins">
                            <div class="logo-container">
                                <a href="https://bitbay.net/en" target="_blank" rel="nofollow"> <img src="{{asset('public/images/cs-01.png')}}" alt="Asset Platform" style="height:auto;" width="130" /> </a>
                            </div>
                            <div class="logo-container">
                                <a href="https://www.cloakcoin.com/" target="_blank" rel="nofollow"> <img src="{{asset('public/images/cs-02.jpg')}}" alt="Asset Platform" style="height:auto;" width="70" /> </a>
                            </div>
                            <div class="logo-container">
                                <a href="http://delphy.org/en/" target="_blank" rel="nofollow"> <img src="{{asset('public/images/cs-03.png')}}" alt="Asset Platform" style="height:auto;" width="130" /> </a>
                            </div>
                            <div class="logo-container">
                                <a href="https://www.synereo.com/" target="_blank" rel="nofollow"> <img src="{{asset('public/images/cs-04.png')}}" alt="Asset Platform" style="height:auto;" width="90" /> </a>
                            </div>
                            <div class="logo-container">
                                <a href="https://www.rubycoin.org/" target="_blank" rel="nofollow"> <img src="{{asset('public/images/cs-05.png')}}" alt="Asset Platform" style="height:auto;" width="130" /> </a>
                            </div>
                            <div class="logo-container">
                                <a href="https://bounty0x.io/" target="_blank" rel="nofollow"> <img src="{{asset('public/images/cs-06.png')}}" alt="Asset Platform" style="height:auto;" width="130" /> </a>
                            </div>
                            <div class="logo-container">
                                <a href="https://rise.vision/" target="_blank" rel="nofollow"> <img src="{{asset('public/images/cs-07.png')}}" alt="Asset Platform" style="height:auto;" width="95"> </a>
                            </div>
                            <div class="logo-container">
                                <a href="https://www.neutroncoin.com/" target="_blank" rel="nofollow"> <img src="{{asset('public/images/cs-08.png')}}" alt="Asset Platform" style="height:auto;" width="95"> </a>
                            </div>
                        </div>
                        <p id="accordion1">&nbsp;</p>
                        <p>&nbsp;</p>
                            <!-- <p>Make your one time payment of <span class="black-text">$9</span> using any of the below methods:</p>
                        <p><b class="black-text">Final Step:&nbsp;  Transfer of the above tokens to your Wallet ( So you can start selling them to your users )</b></p> -->
                        <p ><b class="black-text">&#x2022; Once you make the one time payment of $9, the tokens will be transferred to your wallet. You can make the payment using any of the below methods:
                            </p></p>
                        <form action="{{ route('Final') }}" id="wizard_success" name="wizard_success" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <img src="{{asset('public/images/bitcoin.png')}}" width="30" />&nbsp; Bitcoin 
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="panel-flex">
                                                <div class="panel-img">
                                                    <img src="{{asset('public/images/frame.png')}}" width="100%" alt="" />
                                                </div>
                                                <div class="panel-data">
                                                    <p class="caption">Send to this address</p>
                                                    <p>18z24LMedkAV4dXSYHfy7YG9HW6UXQmfME</p>
                                                    <div class="well">
                                                            Important <br/>
                                                            &#x2022; Send only BTC to this deposit address. Sending any other coin or token to this address may result in the loss of your deposit.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <img src="{{asset('public/images/ether.png')}}" width="15" />&nbsp; Ether
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="panel-flex">
                                                    <div class="panel-img">
                                                        <img src="{{asset('public/images/frame-one.png')}}" width="100%" alt="" />
                                                    </div>
                                                    <div class="panel-data">
                                                        <p class="caption">Send to this address</p>
                                                        <p>0x25dC1A39a627B030eFC06f8E31AE6Cf4F198B10e</p>
                                                        <div class="well">
                                                                Important <br/>
                                                                &#x2022; Send only ETH to this deposit address. Sending any other coin or token to this address may result in the loss of your deposit.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <img src="{{asset('public/images/tether.png')}}" width="25" />&nbsp; USDT ( TetherUS )
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="panel-flex">
                                                    <div class="panel-img">
                                                        <img src="{{asset('public/images/frame-two.png')}}" width="100%" alt="" />
                                                    </div>
                                                    <div class="panel-data">
                                                        <p class="caption">Send to this address</p>
                                                        <p>19ZDtfwQzmYnb2p6jEwDZm3du94hrQSyep</p>
                                                        <div class="well">
                                                                Important <br/>
                                                                &#x2022; Send only USDT to this deposit address. Sending any other coin or token to this address may result in the loss of your deposit.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <img src="{{asset('public/images/stellar.png')}}" width="30" />&nbsp; XLM ( Stellar Lumens )
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapsefour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="panel-flex">
                                                    <div class="panel-img">
                                                        <img src="{{asset('public/images/frame-three.png')}}" width="100%" alt="" />
                                                    </div>
                                                    <div class="panel-data">
                                                        <p class="caption">Send to this address</p>
                                                        <p>GA5QO5DMFT3TBNRBYBVCQBWNOVSHNGPHO24LWNF3F5NGWSF5RKCLPDB6</p>
                                                        <div class="well">
                                                                Important <br/>
                                                                &#x2022; Send only XLM to this deposit address. Sending any other coin or token to this address may result in the loss of your deposit.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <img src="{{asset('public/images/tron.png')}}" width="25" />&nbsp; TRX ( TRON )
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapsefive" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="panel-flex">
                                                    <div class="panel-img">
                                                        <img src="{{asset('public/images/frame-four.png')}}" width="100%" alt="" />
                                                    </div>
                                                    <div class="panel-data">
                                                        <p class="caption">Send to this address</p>
                                                        <p>TMaLzR2G2P7DzPJXPhX6DkFCL9ZQWpncjT  </p>
                                                        <div class="well">
                                                                Important <br/>
                                                                &#x2022; Send only TRX to this deposit address. Sending any other coin or token to this address may result in the loss of your deposit.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <input type="hidden" value="{{\Session::get('token_user_id')}}"  id="token_id" name="token_id">
                                <div class="checkbox">
                                <label>
                                <input type="checkbox" name="confirm" id="confirm" value="confirm"> I confirm the above payment is made.
                                </label>
                                </div>

                            <div class="form-row captcha-otr" >
                                <div class="form-col">
                                    <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_SITE_KEY')}}"></div>
                                </div>
                            </div>

                            <div class="form-row" style="margin-bottom: 10px;">
                                <div class="form-col">
                                    <label for="" style="text-align:center;">
                                        <span class="error_message" id="error_1"></span>        
                                    </label>
                                </div>                                     
                            </div>

                            
                                <div class="text-right">
                                    <button type="button" name="status" value='1' onclick="javascript:form_validation_1();" class="btn button_paid">I&apos;ve made the payment </button>    
                                </div>
                            </form>
                    </div>
                </div>
                <!-- Modal -->
                <div id="needhelp" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <!--  <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                        </div> -->
                        <div class="modal-body">
                        <br>
                        <p>Have questions? Shoot us an email at : <a href="mailto:contact@assetplatform.net?Subject=subject here&Body=bodytext">contact@assetplatform.net</a></p>
                        <p>-or- Live Chat with us on FB Messenger <a href="https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Ft%2F354279558686858" target="_blank">HERE</a></p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                    </div>
                </div>
                @include('partials.footer')

                <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <script>
            $(document).ready(function(){
                        setTimeout(function(){ 
                        $(".preloader").hide();
                        $(".wrapper").show();
                        }, 106500);
                // Add smooth scrolling to all links
                $(".anchor-scroll").on('click', function(event) {
            
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();
            
                    // Store hash
                    var hash = this.hash;
            
                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                    scrollTop: $(hash).offset().top
                    }, 800, function(){
                
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                    });
                } // End if
                });
            });
            function copy_function() {
                    var copyText = document.getElementById("mytext");
                    copyText.select();
                    document.execCommand("copy");
                    $('.tooltips').css('display','inline');
                    $('.tooltips').fadeIn(1000).delay(500).fadeOut(1000);
                    // alert("Copied the text: " + copyText.value);
                    }        
                    function form_validation_1() 
                    {                
                        var v = grecaptcha.getResponse();
                        var check=document.getElementById('confirm').checked;

                        if(v.length == 0)
                        {
                            $('#error_1').fadeIn().html('Google Captcha Required').delay(1500).fadeOut('slow');
                        }else if (check != true) {

                            $('#error_1').fadeIn().html('Select the checkbox for confirming your payment').delay(1500).fadeOut('slow');
                        }
                        else
                        {
                            document.getElementById("wizard_success").submit();
                        }
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
        <script type="text/javascript">
    
            function startTimer(duration, display) {
                var timer = duration, minutes, seconds;
                setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.text(minutes + ":" + seconds);

                    if (--timer < 0) {
                        timer = duration;
                    }
                }, 1000);
            }

            jQuery(function ($) {
                var oneMinutes = (60 * 1) + 45,
                    display = $('#time');
                startTimer(oneMinutes, display);
            });

        </script>
            </body>
        </html>