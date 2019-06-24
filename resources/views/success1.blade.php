<!DOCTYPE html>
 <html lang='en' class=''>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="colorlib.com">
            <link rel="stylesheet" href="https://assetplatform.net/public/asset/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
            <link rel="stylesheet" href="https://assetplatform.net/public/asset/vendor/date-picker/css/datepicker.min.css">
            <link rel="stylesheet" href="https://assetplatform.net/public/asset/css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112610716-2"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-112610716-2');
            </script>
           <style>
            body {
                background: #ffffff !important;
                font-family: 'Poppins', sans-serif !important;
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
                letter-spacing: 3px;
                margin-bottom: 10px !important;
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



.steps, .actions
{
    display: none !important;
}
.form-col
{
    width: 100% !important;
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
.eth_value
{
    font-size: 20px;
    font-weight: bold;
    color: #ff8300;
}

.tooltips
{
    background-color: #00000096;
    color: #fff;
    padding: 3px 15px;
    border-radius: 5px;
    display: none;
}
 .error_message
        {
            color: red;
            font-style: italic;
            font-size: 12px;
        }

* {
  margin:0px;
  padding:0px;
  font-family: 'Lato', sans-serif;
}

html,body{
    height: 100%;
}
body{
    width: 100%;  
    margin: 0;
}
.container{
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
  border:1px solid #666 !important;
  margin-top:4px;
  background-image:linear-gradient(135deg,rgb(97,135,242) 0%,rgb(97,135,242) 25%,rgb(86,121,217) 25%,rgb(86,121,217) 50%,rgb(97,135,242) 50%,rgb(97,135,242) 75%,rgb(86,121,217) 75%,rgb(86,121,217) 100%);
  background-size:16px 16px;
  background-position:0px 0px;
  background-clip:content-box;
  padding:1px;
  animation:mv 800ms linear 1;
  margin: 15px auto;
}
.loader:before {
  position:absolute;
  content:"";
  width:100%;
  height:10px;
  background:#fff;
  right:0px;
  animation:loading 30s ease-in-out 1;
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
   animation: delay-text 0s linear 7s 1 forwards;
}
.delayedShowTwo{
   animation: delay-text 0s linear 13s 1 forwards;
}
.delayedShowThree{
   animation: delay-text 0s linear 17s 1 forwards;
}
.delayedShowFour{
   animation: delay-text 0s linear 20s 1 forwards;
}
.delayedShowFive{
   animation: delay-text 0s linear 26s 1 forwards;
}
.text-success{
    color:#a97f6f;
}
@keyframes delay-text {
  to {
    visibility: visible;
  }
}

        </style>
    </head>
    <body>

             <div class="preloader" style=" position: fixed;width: 100%;height: 100%;top: 0;left: 0;z-index: 100000;backface-visibility: hidden;background: #ffffff;">       

         <div class="container">
            <div class="content-otr">
                <div class="inner">
                         <div class="text">
                            <h4>Your Tokens are getting created.</h4>
                             Please <b class="text-success">DONT</b> Refresh this page or Hit the <b class="text-success">BACK</b> button.</div>
                        <div class="loader" style=" border:1px solid #666 !important;"></div><br>
                        <p>Estimated creation time: 30 Seconds</p>
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
                                Tokens created.
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

        </div>

        <div class="wrapper">
            <div class="congratrs-otr">
                    <h3 class="text-left">Congrats</h3>
                    <p>
                        <svg style="width:20px;height:20px;position:relative;top:5px;" viewBox="0 0 24 24">
                            <path fill="#8bc34a" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z" />
                        </svg>
                        Number of Tokens Created: <span>{{$token_details->total_supply}}</span>
                    </p>
                    <p>
                        <svg style="width:20px;height:20px;position:relative;top:5px;" viewBox="0 0 24 24">
                            <path fill="#8bc34a" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z" />
                        </svg>
                        Name of Token: {{$token_details->cname}}
                    </p>
                    <p>
                        <svg style="width:20px;height:20px;position:relative;top:5px;" viewBox="0 0 24 24">
                            <path fill="#8bc34a" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z" />
                        </svg>
                        Date and time of creation: <span>{{$token_details->date_of_creation}}</span>
                    </p>
                    <table class="table-invoice">
                        <tr>
                            <td>&#x2022; Money spent on creating your Contracts:</td>
                            <td  class="text-right text-primary">
                                <span>$20</span>
                            </td>
                        </tr>
                        <tr>
                            <td>&#x2022; Blockchain fee required to transfer <span>{{$token_details->total_supply}}</span> tokens
                                to your wallet:</td>
                            <td  class="text-right text-primary">
                                <span>$29</span>
                            </td>
                        </tr>
                        <tr>
                            <td>&#x2022; Token creation fee:</td>
                            <td  class="text-right text-primary">
                                <span>$49</span>
                            </td>
                        </tr>
                        <tr>
                            <td> Total:</td>
                            <td  class="text-right text-primary">
                                <span>$98 ( One time charges )</span>
                            </td>
                        </tr>
                    </table>
                  
                    <p><b class="black-text"><span>Final Step:&nbsp;<br>  Transfer of the above tokens to your Wallet ( So you can start selling them to your users )</b></p>
                   <p class="black-text">&#x2022; Once you make the one time payment of $98, the tokens will be transferred to your Wallet ( Account ).<br> You can make the payment using any of the below methods:
                    </p>
            <form action="{{ route('Final') }}" id="wizard_success" name="wizard_success" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <img src="https://assetplatform.net/public/images/bitcoin.png" width="30" />&nbsp; Bitcoin 
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="panel-flex">
                                        <div class="panel-img">
                                            <img src="https://assetplatform.net/public/images/frame.png" width="100%" alt="" />
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
                                            <img src="https://assetplatform.net/public/images/ether.png" width="15" />&nbsp; Ether
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="panel-flex">
                                            <div class="panel-img">
                                                <img src="https://assetplatform.net/public/images/frame-one.png"  width="100%" alt="" />
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
                                            <img src="https://assetplatform.net/public/images/tether.png" width="25" />&nbsp; USDT ( TetherUS )
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="panel-flex">
                                            <div class="panel-img">
                                                <img src="https://assetplatform.net/public/images/frame-two.png" width="100%" alt="" />
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
                                            <img src="https://assetplatform.net/public/images/stellar.png" width="30" />&nbsp; XLM ( Stellar Lumens )
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapsefour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="panel-flex">
                                            <div class="panel-img">
                                                <img src="https://assetplatform.net/public/images/frame-three.png" width="100%" alt="" />
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
                                            <img src="https://assetplatform.net/public/images/tron.png" width="25" />&nbsp; TRX ( TRON )
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapsefive" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="panel-flex">
                                            <div class="panel-img">
                                                <img src="https://assetplatform.net/public/images/frame-four.png" width="100%" alt="" />
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
                         <input type="hidden" value="{{\Session::get('token_user_id')}}" id="token_id" name="token_id">
                        <div class="checkbox">
                        <label>
                           <input type="checkbox" name="confirm" id="confirm" value="confirm"> I confirm the above payment is made.
                        </label>
                        </div>

                    <div class="form-row" style="margin-left: 31%;">
                        <div class="form-col">
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

                    
                        <div class="text-right">
                            <button type="button" name="status" value='1' onclick="javascript:form_validation_1();" class="btn button_paid">I&apos;ve made the payment </button>    
                        </div>
                   
            </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

      <script src='https://www.google.com/recaptcha/api.js'></script>

        <script type="text/javascript">
            $( document ).ready(function() {
                
                setTimeout(function(){ 
                    $(".preloader").hide();
                }, 29000);
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
    </body>
</html>