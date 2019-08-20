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
        }
        .congratrs-otr{
            padding: 2em 3em;
        }
        .btn-theme{
            border: 2px solid #ae8641;
            margin: 0 3px;
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
            .alt-coins{
                justify-content: center;
            }
            .alt-coins .logo-container{
                text-align: center;
                width: 100%;
            }
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
                    <div class="wrapper" >
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
                            <a href="#accordion1" class="btn btn-success anchor-scroll">Make Payment</a>
                            <a href="https://assetplatform.net/" target="_blank" class="btn btn-theme pull-right">I want to re-create my tokens from Start</a>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p class="text-center black-text">209+ Tokens created using this A.I. platform</p>
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
                            <p><b class="black-text">Final Step:&nbsp;  Transfer of the above tokens to your Wallet ( So you can start selling them to your users )</b></p>   -->
                            <p ><b class="black-text">&#x2022; Once you make the one time payment of $9, the tokens will be transferred to your wallet. You can make the payment using any of the below methods:</b>
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
                                <input type="hidden" value="{{$token_details['id']}}" id="token_id" name="token_id">
                                    <div class="checkbox">
                                    <label>
                                    <input type="checkbox" name="confirm" id="confirm" value="confirm"> I confirm the above payment is made.
                                    </label>
                                    </div>

                                <div class="form-row" style="margin-left: 31%;">
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
                    @include('partials.footer')
                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <script src='https://www.google.com/recaptcha/api.js'></script>
                <script>
                $(document).ready(function(){
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
        </body>
    </html>