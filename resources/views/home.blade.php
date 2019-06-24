<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AUTOMATIC TOKENIZER</title>
    <!--Meta-info-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--css-->
    <link rel="stylesheet" href="{{ URL::asset('public/asset/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('public/asset/vendor/date-picker/css/datepicker.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('public/asset/css/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('public/asset/css/modal.css')}}">
    <!--js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=AIzaSyDoujGbr86VY2F6vhh-bzZjsebCFoRn0ik"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112610716-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-112610716-2');
    </script>
</head>
<body class="home-bg">
    <!--header-->
    <div class="header">
        <a href="http://about.assetplatform.net/" target="_blank">
        <img src = "{{asset('public/images/logo_ap.png')}}" width="150" alt="" />
        </a>
        <a href="http://about.assetplatform.net/" target="_blank">
            <u>About</u>
        </a>
    </div><!--header-->
    <span class="dynamic-data center-align black-text">
        <span id="demo">1043</span> People Online Now
    </span>
    <div class="wrapper">
        <form action="{{ route('TokenPreview') }}" id="wizard" name="wizard" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <!-- SECTION 1 -->
            <div id="sec_1">
                <!-- <h4></h4> -->
                <section>
                    <span class="title_logo"></span>
                    <h3>AUTOMATIC TOKENIZER</h3>                              
                    <p><b>Using this tool, you can:</b></p>
                    <ul class="list">
                        <li>&#x2022; Easily create any number of Coins / Tokens / Cryptocurrency in just a few clicks.</li>
                        <li>&#x2022; Effortlessly create any type of Tokens: Utility Tokens for your ICO, Security Tokens for your STO, Asset Backed Tokens ( ABT ) etc.</li>
                        <li>&#x2022; Tokenize any of your real world assets ( Real Estate, Art, Agriculture etc. ) in a few clicks.</li>
                        <li>&#x2022; Create Tokens that has all the regulatory compliance of your Jurisdiction built in.</li>
                    </ul>
                    <p><a href="https://blog.gatecoin.com/why-asset-backed-tokens-will-be-mainstream-56f4aad704c4" target="_blank">Learn More.</a></p>
                    <br>
                    <h4>If you are ready, lets start with the basic details</h4>

                    <div style="display: block;" id="section1">
                        <div class="form-row">
                            <div class="form-col">
                                <label>
                                    First Name *
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-account-o"></i>
                                    <input type="text" name="firstname" id="firstname" class="form-control" onkeyUp="javascript:check_validation1('firstname','lastname','email','cemail');">
                                </div>
                            </div>
                            <div class="form-col">
                                <label>
                                    Last Name *
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-account-o"></i>
                                    <input type="text" name="lastname" id="lastname" class="form-control" onkeyUp="javascript:check_validation1('firstname','lastname','email','cemail');">
                                </div>
                            </div>
                        </div>                                        
                        <div class="form-row">
                            <div class="form-col">
                                <label>
                                    Email *
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-email"></i>
                                    <input type="email" name="email" id="email" class="form-control" onkeyUp="javascript:check_validation1('firstname','lastname','email','cemail');">
                                </div>
                            </div>
                            <div class="form-col">
                                <label>
                                    Confirm Email *
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-email"></i>
                                    <input type="email" name="cemail" id="cemail" class="form-control" onkeyUp="javascript:check_validation1('firstname','lastname','email','cemail');">
                                </div>
                            </div>                        
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label>
                                    Phone Number
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-smartphone-android"></i>
                                    <input type="number" name="phonenumber" id="phonenumber" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "10" class="form-control">
                                </div>
                            </div>
                        </div>                    
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <label>
                                <b>1. Country *</b>
                            </label>
                            <div class="form-holder" style="width: 100%;">
                                <i class="zmdi zmdi-map"></i>
                                <select name="country" id="country" class="form-control">
                                    <?php
                                    foreach($countries as $key=>$country)
                                    {
                                        echo '<option value="'.$country->country.'">'.$country->country.'</option>';
                                    }
                                    ?>
                                    <option value="Not Incorporated" class="option">Not Incorporated</option>
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                            <br><i>( This will help in knowing your jurisdiction. Based on the type of token you create, you can enforce compliance in future )</i>
                        </div>
                    </div> 

                    <div class="form-row captcha-otr">
                        <div class="form-col">
                            <div class="g-recaptcha" data-sitekey="6LeXCocUAAAAADxx3TR7ITrkTSHsp5msxLRyuA3-"></div>
                        </div>
                    </div>

                    <div class="form-row" style="margin-bottom: 10px;">
                        <div class="form-col">
                            <label  style="text-align:center;">
                                <span class="error_message" id="error_1"></span>                                  
                            </label>
                        </div>                                     
                    </div>
                    <p class="text-center mb-2em">
                        <span>
                            <a href="#" data-toggle="modal" data-target="#myModal1">Need Help?</a>
                        </span>
                    </p>

                    <div class="form-row">
                        
                                <!-- Modal -->
                                <div id="myModal1" class="modal fade" role="dialog">
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


                 <!--End Modal -->
                        <div class="form-col">
                            <label  style="text-align:right;">
                                <button type="button" name="next" class="button_paid" onclick="javascript:form_validation_1();">Next</button>
                            </label>
                        </div>                                     
                    </div>                                         

                </section>
            </div>
            <!--video-sec-->
            <div id="video-sec" style="display:none">
                <section>
                    <h4>2 minute video:<span class="vs-black-text"> Explains the entire process before hand <span>( Recommended )</span></span></h4>
                    <div class="video-iframe-otr">
                    <!-- <iframe width="640" height="360" src="https://www.youtube-nocookie.com/embed/YRiv9mBv4vY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <iframe width="640" height="360" src="https://www.youtube-nocookie.com/embed/lsI01xK4Ado?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="form-row">
                        <div class="form-col">
                            <label  style="text-align:right;">
                                <button type="button" name="next" class="button_paid width-auto" onclick="javascript:form_validation_video();">Skip &amp; Continue</button>
                            </label>
                        </div>
                    </div>
                    </div>  
                </section>
            </div>
            <!-- SECTION 3 -->
            <div id="sec_2" style="display: none;">
                <!-- <h4></h4> -->
                <section>
                    <span class="logo"> AUTOMATIC TOKENIZER</span>
                    <br><br>
                    <h4>SELECT TOKEN TYPE</h4>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                <b>1. Coin should be based on: </b>
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-check"></i>
                                {!!get_crypto_coin_select_box('crypto_coin')!!}
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                <b>2. What are you looking to Tokenize? * </b><br><i class="ialign">Choose the type of token you are trying to create (Utility, Asset, Equity) <a href="https://www.bitcoinmarketjournal.com/equity-token/" target="_blank">Learn more</a></i>
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-check"></i>
                                <select name="asset" id="token_type" class="form-control" onchange="javascript:show_block(this.value);" >
                                    <option value="" class="option">Please choose a token type</option>
                                    <option value="Equity" class="option">Equity Token</option>
                                    <option value="Fixed Asset" class="option">Asset Token</option>
                                    <option value="Utility" class="option">Utility Token</option>
                                    <option value="Stable Coins" class="option">Stable Coins</option>
                                    <option value="Other Type" class="option">Other Type</option>
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>                       
                    </div>
                    <div class="form-row" id="equity_block" style="display: none;">
                        <div class="form-col">
                            <label>
                                <b>Tokenize and distribute your Company&apos;s stocks (Equity) to interested shareholders. Equity tokens are backed by Stocks, Futures and options contract. <a href="https://www.investopedia.com/terms/t/tokenized-equity.asp">Learn more</a></b>
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-check"></i>
                                <select name="equity_value" id="equity_value" class="form-control" onchange="show_actions(this.value);">
                                    <option value="" class="option">Please Select Equity Type</option>
                                    <option value="Seed Round" class="option">Seed Round</option>
                                    <option value="Series A" class="option">Series A</option>
                                    <option value="Series B" class="option">Series B</option>
                                    <option value="Other" class="option">Other</option>
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>                       
                    </div>

                    <div class="form-row" id="other_equity" style="margin-bottom: 15px !important;display: none;">
                        <div class="form-col">                   
                            <label style="display: inline;"><b>Please define the nature of your Equity Token * : </b></label>
                            <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                <input type="text" name="other_equity_text" id="other_equity_text" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" >
                            </div>
                        </div>                                            
                    </div>

                    <div class="form-row" id="currency_block" style="display: none;">
                        <div class="form-col">
                            <label>
                                <b>Stable Coins are generally backed by a FIAT currency ( Eg: USDT ). The price of your Stale coin will always be the current price of the backing FIAT</b>
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-check"></i>
                                {!!get_country_select_box('currency','form-control currency_change')!!}
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>                       
                    </div>

                    <div class="form-row" id="other_type_block" style="display: none;">
                        <div class="form-col">                            
                            <label style="display: inline;"><b>Please define your token type * : </b></label>
                            <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                <input type="text" name="other_type" id="other_type" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" placeholder="Your token type">
                            </div>
                        </div>                       
                    </div>


                    <div class="form-row" id="fixed_block" style="display: none;">
                        <div class="form-col">
                            <label>
                                <b>Tokenize and distribute assets like Gold, Real estate, Art collectables etc to investors. <a href="https://medium.com/coinmonks/asset-tokenization-on-blockchain-explained-in-plain-english-f4e4b5e26a6d" target="_blank">Learn more</a></b>
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-check"></i>
                                <select name="fixed_value" id="fixed_value" class="form-control" onchange="javascript:show_calculator(this.value);">
                                    <option value="" class="option">Select an asset type</option>
                                    <option value="Agriculture" class="option">Agriculture</option>
                                    <option value="Art/Collectable" class="option">Art/Collectable</option>
                                    <option value="Real Estate" class="option">Real Estate</option>
                                    <option value="Quarry/Mine" class="option">Quarry/Mine</option>
                                    <option value="Others" class="option">Other Assets</option>
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>                       
                    </div>


                    {{-- Agriculture --}}
                    <div class="" id="agri_block" style="display: none;">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Name of the Farmland/Estate * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="estatename" id="estatename" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:$('#agri_name').html(this.value);validate_agri_form();">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Area of the Farmland/Estate  </b><i>(Square meters) : *</i> </label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="estate_area_mm" id="estate_area_mm" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onchange ="javascript:$('#estate_area_token').val(this.value);$('#token_supply').val(this.value);$('#total_agri_value').html(this.value);validate_agri_form();$('#total_supply').val(this.value);">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>How much of the above area would you want to tokenize </b><i>(Square meters) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="estate_area_token" id="estate_area_token" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onchange ="javascript:$('#token_supply').val(this.value*1);$('#total_agri_value').html(this.value);validate_agri_form();$('#total_supply').val(this.value*1);">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Token’s to be created:</b><br><i>( We have converted the Sq. MM to equal number of tokens. You can edit the value as to how much you want )</i> </label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="token_supply" id="token_supply" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:$('#total_agri_value').html(this.value);validate_agri_form();$('#total_supply').val(this.value);">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Type of Crop Grown * :</b><i> (Paddy, Coffee etc.)</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="cropgrown" id="cropgrown" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_agri_form();">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Farmland/Estate location * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <i class="zmdi zmdi-check"></i>
                                    <select name="estate_location" id="estate_location" class="form-control" style="display: inline;height: 30px !important;float:right;" onchange="javascript:validate_agri_form();get_state(this.value);">
                                        <option value="" class="option">Select Country</option>
                                        <?php
                                        foreach($countries as $key=>$country)
                                        {
                                            echo '<option value="'.$country->country.'">'.$country->country.'</option>';
                                        }
                                        ?>
                                        <option value="others" class="option">Others</option>
                                    </select>
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;display: none;" id="other_country">
                            <div class="form-col">                   
                                <label style="display: inline;">&nbsp;</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="estate_location_input" id="estate_location_input" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_agri_form();" placeholder="Type Country">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;" id="state_block">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>State * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <i class="zmdi zmdi-check"></i>
                                    <select name="estate_location_state" id="estate_location_state" class="form-control" style="display: inline;height: 30px !important;float:right;" onchange="javascript:validate_agri_form();">
                                    </select>
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;display: none;" id="other_state">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>State * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="estate_location_state_input" id="estate_location_state_input" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_agri_form();" placeholder="Type State">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Land Registration number (if any) : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="reg_no" id="reg_no" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;" id="calculation_part_agri"><b>Token value calculated at: </b> 1 Token = 1 Sq.mm <b><span id="total_agri_value"></span></b> of <b><span id="agri_name"></span></b> from the allocated area to tokenize.</label>                            
                            </div>                                            
                        </div>
                    </div>
                    {{-- End of Agriculture --}}



                    {{-- Art/Collectable --}}
                    <div class="" id="art_block" style="display: none;">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Name of the Artwork/Collectable * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="artname" id="artname" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:$('#artcoll_name').html(this.value);validate_artcoll_form();">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>What is the significance of the<br>artwork/collectable? </b><i>(Few Words) : *</i></label>
                                <div class="form-holder" style="width: 50% !important;float:right;margin-top:2em;">
                                    <!-- <input type="text" name="art_desc" id="art_desc" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_artcoll_form();"> -->
                                    <textarea name="art_desc" id="art_desc" style="float:right;border: 1px solid #ccc;" onkeyup="javascript:validate_artcoll_form();" rows="6" cols="46"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Name of the Artist/Creator * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="artist_name" id="artist_name" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_artcoll_form();">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Country of Origin * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="orgin" id="orgin" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_artcoll_form();">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Year Created * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="yearcreated" id="yearcreated" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_artcoll_form();">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Artwork/Collectable Medium </b><i><br>(Canvas,Photo,wood,Clay etc) : *</i> </label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="medium" id="medium" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_artcoll_form();">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Artwork Type </b><br><i>(Oil Painting, Water soluble,Sculpture etc) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="artwork_type" id="artwork_type" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_artcoll_form();">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Holding Gallery/ Collectors Name * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="collectorsname" id="collectorsname" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_artcoll_form();">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Copyright Information</b><i> (If any) : </i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="copyright" id="copyright" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Value of the Artwork(In USD) * : $ </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="artworkusd" id="artworkusd" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_artcoll_form();">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Max. Token Supply* :<br><i>( Total number of tokens you want to create )</i> </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="max_token" id="max_token" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:validate_artcoll_form();$('#total_supply').val(this.value);">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Per unit to tokenize *: </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <i class="zmdi zmdi-check"></i>
                                    <select name="perunit" id="perunit" class="form-control" style="display: inline;height: 30px !important;float:right;" onchange="javascript:$('#total_artcoll_value').html(this.value);">
                                        <option value="" class="option">Select Option</option>
                                        <option value="Square inch" class="option">Square inch</option>
                                        <option value="sq meter" class="option">sq meter</option>
                                        <option value="millimeter" class="option">millimeter</option>
                                        <option value="micrometer" class="option">micrometer</option>
                                    </select>
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Token value calculated at: 1 Token = 1 </b><b><span id="total_artcoll_value"></span></b> of <b><span id="artcoll_name"></span></b></label>                            
                            </div>                                            
                        </div>

                        {{-- Artwork Form --}}
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Charismatic power quotient :</b><i> <br>(self-evaluation of the art)</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="charismatic_power_quotient" id="charismatic_power_quotient" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Emotional quotient towards the work : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="quotient_work" id="quotient_work" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>AQRCP (Authenticity, Quality, Rarity, <br>Condition, Provenance) Quotient : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="aqrcp" id="aqrcp" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Previous owners : </b></label>
                                <div class="form-holder" style="display: inline;width: 100% !important;float:right;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <div class="form-holder" style="display: inline;width: 100% !important;float:right;" id="owner_block">
                                    <input type="text" name="previous_owner[]" class="form-control" style="display: inline;height: 30px !important;width:40%;" placeholder="Previous Owner">
                                    <input type="text" name="from_year[]" placeholder="From Year" class="form-control" style="padding:1px !important;display: inline;height: 30px !important;width:20%;">
                                    <input type="text" name="to_year[]" class="form-control" placeholder="To Year" style="padding:1px !important;display: inline;height: 30px !important;width:20%;">
                                    <button type="button" name="add_owner" id="add_owner_block" class="" style="display: inline;height: 30px !important;width:15%;text-align: center;background-color: #e26a19;border: solid 1px #b74f09;color: #fff;cursor: pointer;" onclick="javascript:add_owner_fn();">+ Add More</button>
                                </div>
                            </div>
                        </div> 
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Market demand quotient : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="market_demand_quotient" id="market_demand_quotient" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Auction House Name <i> ( if available ):</i></b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="auction_house" id="auction_house" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Auction house quotient (value of the <br>artwork increases when a popular<br> auction house holds the art) : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="auction_house_add" id="auction_house_add" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Is the artwork insured? : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="radio" name="artwork_insured" id="artwork_insured" value="1" class="" style="display: inline;" onclick="$('#insure_block').show('slow');">Yes
                                    <input type="radio" name="artwork_insured" id="artwork_insured" value="0" class="" style="display: inline;" onclick="$('#insure_block').hide('slow');">No
                                </div>
                            </div>
                        </div>
                        <div id="insure_block" style="display: none;">
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Insurance Id : </b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="text" name="insurance_id" id="insurance_id" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Insurance Company Name : </b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="text" name="insurance_company_name" id="insurance_company_name" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Insured On : </b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="text" name="insured_on" id="insured_on" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Expiry Date : </b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="text" name="insure_expiry_date" id="insure_expiry_date" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End of Artwork Form --}}

                    </div>
                    {{-- End of Art/Collectable --}}

                    {{-- Real Estate --}}
                    <div class="" id="real_block" style="display: none;">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>REAL ESTATE PROPERTY NAME *: </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="realestate_name" id="realestate_name" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:$('#realestate_value').html(this.value);">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Property Type : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <i class="zmdi zmdi-check"></i>
                                    <select name="property_type" id="property_type" class="form-control" style="display: inline;height: 30px !important;float:right;">
                                        <option value="Residential" class="option">Residential</option>
                                        <option value="Commercial" class="option">Commercial</option>
                                    </select>
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Property location : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input name="property_location_address" id="property_location_address" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onchange="initialize();">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="property_location" name="property_location">
                        <input type="hidden" id="property_location_state" name="property_location_state">
                        <div class="form-row" style="margin-bottom: 15px !important;display: none;" id="other_country1">
                            <div class="form-col">                   
                                <label style="display: inline;">&nbsp;</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="property_location_input" id="property_location_input" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" placeholder="Type Country">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;display: none;" id="state_block1">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>State : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <i class="zmdi zmdi-check"></i>
                                    <select class="form-control" style="display: inline;height: 30px !important;float:right;">                                    
                                    </select>
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;display: none;" id="other_state1">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>State : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="property_location_state_input" id="property_location_state_input" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" placeholder="Type State">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Property Value (in USD): $ *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="realestate_usd" id="realestate_usd" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Property Size </b><i>(In Sq meters) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="total_property_size" id="total_property_size" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:$('#property_size_mm').val(this.value*1000000);$('#property_size_mm_token').val(this.value*1000000);$('#max_token_supply').val(this.value*1000000);$('#total_supply').val(this.value*1000000);">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Property Size </b><i>(In Sq Millimeters) : *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="property_size_mm" id="property_size_mm" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onchange ="javascript:$('#property_size_mm_token').val(this.value);$('#max_token_supply').val(this.value);$('#total_supply').val(this.value);$('#total_property_size').val(parseFloat(this.value/1000000));">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Property Size to Tokenize (Sq. MM) : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="property_size_mm_token" id="property_size_mm_token" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:$('#max_token_supply').val(this.value);$('#total_supply').val(this.value);">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Maximum Token Supply (Tokens)</b><i><br>(Based on the Property size to tokenize): *</i></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="max_token_supply" id="max_token_supply" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:$('#total_supply').val(this.value);">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Token value calculated at:</b> 1 Token = 1 Sq. mm of <b><span id="realestate_value"></span></b> from the allocated area to tokenize.</label>                            
                            </div>                                            
                        </div>
                    </div>
                    {{-- End of Real Estate --}}


                    {{-- Quarry/Mine --}}
                    <div class="" id="quarry_block" style="display: none;">
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Mine / Quarry Name : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="quarry_name" id="quarry_name" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:$('#quarry_value').html(this.value);">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Type of Minerals/ Ore mined : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="mine_type" id="mine_type" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Quarry id (if any, optional) : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="quarry_id" id="quarry_id" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Quarry registered location : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="quarry_loc_address" id="quarry_loc_address" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onchange="initialize2();">
                                    <input type="hidden" name="quarry_loc" id="quarry_loc" class="form-control">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Quarry Permit id (if any, optional) : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="permit_id" id="permit_id" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>                                            
                        </div>
                        <div class="form-row" style="margin-bottom: 15px !important;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Do you want to Tokenize the entire Quarry or a specific Quantity of Mineral/Ore Mined? *</b></label>
                                <div class="form-holder" style="display: inline;width: 100% !important;">
                                    <select name="quarry_opt" id="quarry_opt" class="form-control" style="display: inline;height: 30px !important;float:right;" onchange="show_sub_block(this.value);">
                                        <option value="" class="option">select option</option>
                                        <option value="Entire Quarry" class="option">Entire Quarry</option>
                                        <option value="Specific Quantity" class="option">Specific Quantity</option>
                                    </select>
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                            </div>                                            
                        </div>

                        <div class="form-row" style="margin-bottom: 15px !important;display: none;" id="entire_quarry_sub">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Total Quarry Size in Square Meters : *</b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="number" name="quarry_size_meters" id="quarry_size_meters" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                </div>
                            </div>                                            
                        </div>

                        <div style="display: none;" id="specific_quarry_sub">
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Total Quantity of the mineral to tokenize : *</b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="number" name="total_quarry_size_meters" id="total_quarry_size_meters" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                    </div>
                                </div>                                            
                            </div>

                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Unit of the Total Quantity of Mineral : *</b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <i class="zmdi zmdi-check"></i>
                                        <select name="unit_total_qty_mineral" id="unit_total_qty_mineral" class="form-control" style="display: inline;height: 30px !important;float:right;">
                                            <option value="Gram" class="option">Gram</option>
                                            <option value="Kilogram" class="option">Kilogram</option>
                                            <option value="Tonne" class="option">Tonne</option>
                                            <option value="Mt" class="option">Mt</option>
                                        </select>
                                        <i class="zmdi zmdi-chevron-down"></i>                                
                                    </div>
                                </div>                                            
                            </div>

                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Per unit to tokenize : *</b></label>
                                        <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                            <i class="zmdi zmdi-check"></i>
                                            <select name="per_unit_to_tokenize" id="per_unit_to_tokenize" class="form-control" style="display: inline;height: 30px !important;float:right;" onchange="javascript:$('#quarry_token_unit').html(this.value);">
                                                <option value="" class="option">Select Option</option>
                                                <option value="milligram" class="option">milligram</option>
                                                <option value="gram" class="option">gram</option>
                                                <option value="pound" class="option">pound</option>
                                                <option value="ounce" class="option">ounce</option>
                                                <option value="milligram" class="option">milligram</option>
                                                <option value="stone" class="option">stone</option>
                                                <option value="microgram" class="option">microgram</option>
                                            </select>
                                            <i class="zmdi zmdi-chevron-down"></i>                                
                                        </div>
                                    </div>                                            
                                </div>

                            </div>


                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Total Supply of Tokens : *</b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="number" name="total_supply_of_tokens" id="total_supply_of_tokens" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:$('#total_supply').val(this.value);">
                                    </div>
                                </div>                                            
                            </div>                    
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Token value calculated at:</b> 1 Token = 1 <b><span id="quarry_token_unit"></span></b> of <b><span id="quarry_value"></span></b> from the allocated area to tokenize.</label>                            
                                </div>                                            
                            </div>
                        </div>
                        {{-- End of Quarry/Mine --}}

                        {{-- Others --}}
                        <div class="" id="other_block" style="display: none;">
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Name of the Asset</b><i> (Gold bar, <br>Kohinoor Diamond, a magnum of Chardonnay<br> 1820 etc) : *</i></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="text" name="asset_name" id="asset_name" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:$('#asset_name_value').html(this.value);">
                                    </div>
                                </div>                                            
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>What type of Asset is this?</b><i> (Precious <br>metal, Rare stone, etc) : *</i></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="text" name="asset_type" id="asset_type" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>What is this asset about? : *</b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="text" name="about_asset" id="about_asset" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Asset Id (if any) : </b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="text" name="asset_id" id="asset_id" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                    </div>
                                </div>                                            
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Total Asset value (in USD) : $ *</b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="number" name="asset_value_usd" id="asset_value_usd" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                    </div>
                                </div>                                            
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>What unit is the Asset measured? : *</b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <i class="zmdi zmdi-check"></i>
                                        <select name="asset_measure_unit" id="asset_measure_unit" class="form-control" style="display: inline;height: 30px !important;float:right;">
                                            <option value="kg" class="option">KG(s)</option>
                                            <option value="tonnes" class="option">Tonne(s)</option>
                                            <option value="liter" class="option">liter</option>
                                            <option value="gms" class="option">gms</option>
                                            <option value="sq meters" class="option">sq meters</option>
                                            <option value="feet" class="option">feet</option>
                                            <option value="units" class="option">units</option>
                                        </select>
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </div>
                                </div>                                            
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Total Asset Quantity : *</b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="number" name="asset_qty" id="asset_qty" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                    </div>
                                </div>                                            
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>unit for the quantity to tokenize : *</b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <i class="zmdi zmdi-check"></i>
                                        <select name="per_token_unit" id="per_token_unit" class="form-control" style="display: inline;height: 30px !important;float:right;" onchange="javascript:$('#per_token_unit_value').html(this.value);">
                                            <option value="" class="option">Select Unit</option>
                                            <option value="kg" class="option">KG(s)</option>
                                            <option value="tonnes" class="option">Tonne(s)</option>
                                            <option value="liter" class="option">liter</option>
                                            <option value="gms" class="option">gms</option>
                                            <option value="sq meters" class="option">sq meters</option>
                                            <option value="feet" class="option">feet</option>
                                            <option value="units" class="option">units</option>
                                            <option value="Not Applicable" class="option">Not Applicable</option>
                                        </select>
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </div>
                                </div>                                            
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Quantity to tokenize : *</b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="number" name="quantity_to_tokenize" id="quantity_to_tokenize" onchange ="javascript:$('#max_token_supply_asset').val(this.value*1);$('#total_supply').val(this.value*1);" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;">
                                    </div>
                                </div>                                            
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Total Token supply : *</b></label>
                                    <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                        <input type="number" name="max_token_supply_asset" id="max_token_supply_asset"  class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" onkeyup="javascript:$('#total_supply').val(this.value);">
                                    </div>
                                </div>                                            
                            </div>
                            <div class="form-row" style="margin-bottom: 15px !important;">
                                <div class="form-col">                   
                                    <label style="display: inline;"><b>Token value calculated at:</b> 1 Token = 1 <b><span id="per_token_unit_value"></span></b> of <b><span id="asset_name_value"></span></b></label>
                                </div>                                            
                            </div>
                        </div>
                        {{-- End of Others --}}


                        <div class="form-row" id="utility_block" style="display: none;">
                            <div class="form-col">
                                <label>
                                    <b>Utility tokens are tokens created for raising funds without any backed asset. It does not represent any security or share. They mainly derive their value from specific purposes they are built for. <a href="https://medium.com/coinmonks/utility-tokens-a-general-understanding-f6a5f9699cc0" target="_blank">Learn more</a> *</b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <select name="utility_value" id="utility_value" class="form-control" onchange="show_actions(this.value);">
                                        <option value="" class="option">Please Select</option>
                                        <option value="Reputation and Reward Tokens" class="option">Reputation and Reward Tokens</option>
                                        <option value="Other niche Utility Tokens" class="option">Other niche Utility Tokens</option>
                                    </select>
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                            </div>                       
                        </div>

                        <div class="form-row" id="other_niche" style="margin-bottom: 15px !important;display: none;">
                            <div class="form-col">                   
                                <label style="display: inline;"><b>Please define the nature of your Utility Token * : </b></label>
                                <div class="form-holder" style="display: inline;width: 50% !important;float:right;">
                                    <input type="text" name="other_niche_text" id="other_niche_text" class="form-control" style="display: inline;height: 30px !important;padding-left: 10px !important;float:right;" >
                                </div>
                            </div>                                            
                        </div>

                        <div class="form-row" id="fund_block" style="display: none;">
                            <div class="form-col">
                                <label>
                                    <b>A sum of money saved or made available for a particular purpose.</b>
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-check"></i>
                                    <select name="fund_value" id="" class="form-control">
                                        <option value="" class="option">Please Select</option>
                                        <option value="Venture Fund" class="option">Venture Fund</option>
                                        <option value="Private Fund" class="option">Private Fund</option>
                                        <option value="Public Fund" class="option">Public Fund</option>
                                        <option value="Realestate Fund" class="option">Realestate Fund</option>
                                        <option value="Other" class="option">Other</option>
                                    </select>
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                            </div>                       
                        </div>

                        <div class="form-row" id="debt_block" style="display: none;">
                            <div class="form-col">
                                <br>
                                <label>
                                    <b>A sum of money that is owed or due.</b>
                                </label>                            
                            </div>                       
                        </div>   

                        <div class="form-row" style="margin-bottom: 10px;">
                            <div class="form-col">
                                <label style="text-align:center;">
                                    <span class="error_message" id="error_2"></span>
                                </label>
                            </div>                                     
                        </div>

                        <div class="form-row">
                            <div class="form-col">
                                <label  style="text-align:left;">
                                    <button type="button" name="back" class="button_back" onclick="javascript:$('#sec_2').fadeOut('slow');$('#video-sec').delay(500).fadeIn('slow');">Back</button>
                                </label>
                            </div> 
                             <div class="form-col">
                                <label style="text-align:center;margin-left: 15%;text-decoration: underline;">
                                    <a href="#" data-toggle="modal" data-target="#myModal2">Need Help?</a>
                                </label>
                            </div>
                                   <!-- Modal -->
                                <div id="myModal2" class="modal fade" role="dialog">
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


                 <!--End Modal -->
                            <div class="form-col">
                                <label  style="text-align:right;">
                                    <button type="button" name="next" class="button_paid" onclick="javascript:form_validation_2();">Next</button>
                                </label>
                            </div>                                     
                        </div>                                              

    </section>
</div>

<!-- SECTION 4 -->


<!-- SECTION 5 -->
<div id="sec_3" style="display: none;">
    <!-- <h4></h4> -->
    <section>
        <span class="logo"> AUTOMATIC TOKENIZER</span>
        <br><br>
        <h4>Tokenizer</h4>
        <div class="form-row">
            <div class="form-col">
                <label >
                    <b>3. How much funding are you aiming to raise? *</b>
                </label>

                <div class="form-row">
                    <div class="form-col">                   
                        <div class="form-holder" >
                            
                            {!!get_country_select_box('fund_currency','currency_change form-control pl12')!!}
                            <i class="zmdi zmdi-chevron-down"></i>
                        </div>
                    </div> 
                    <div class="form-col">                   
                        <div class="form-holder" >
                        <input type="number" name="usd" id="usd" class="form-control pl12">
                        </div>
                    </div> 
                </div>     
            </div>                        
        </div>
        <div class="form-row" id="asset_currency_text" style="display:none;">
            <div class="form-col">
                <label>
                    <b>
                        4. Price of one token:&nbsp;
                        <span id="source_currency_value_bind"></span>
                    </b>
                </label> 
            </div>                        
        </div>
         <div class="form-row" id="asset_currency_div">
            <div class="form-col">
                <label>
                    <b>4. What should be the price of one token? *</b>
                </label>  
                <div class="form-row">
                    <div class="form-col">                   
                        <div class="form-holder" >
                            {!!get_country_select_box('asset_currency','form-control pl12','asset_currency_select')!!}
                            <i class="zmdi zmdi-chevron-down"></i>
                        </div>
                    </div> 
                    <div class="form-col">                   
                          <div class="form-holder">
                    <input type="number" name="price_per_token" id="price_per_token" class="form-control pl12">
                </div>
                    </div> 
                </div>  
            </div>                        
        </div>
        <div class="form-row">
            <div class="form-col"> 
                <label>
                    <b>5. In which parts of the world will you be marketing your offering? *</b>
                </label>                              
                <div class="form-holder" style="width: 100%;">
                    <input type="checkbox" name="marketing[]" value="Asia">Asia<br>
                    <input type="checkbox" name="marketing[]" value="USA">USA<br>
                    <input type="checkbox" name="marketing[]" value="Canada">Canada<br>
                    <input type="checkbox" name="marketing[]" value="Europe">Europe<br>
                    <input type="checkbox" name="marketing[]" value="Australia">Australia<br>
                    <input type="checkbox" name="marketing[]" value="Latin America">Latin America<br>
                    <input type="checkbox" name="marketing[]" value="Africa">Africa<br>
                </div>
            </div>                        
        </div> 
        


        <div class="form-row" style="margin-bottom: 10px;">
            <div class="form-col">
                <label style="text-align:center;">
                    <span class="error_message" id="error_3"></span>                                  
                </label>
            </div>                                     
        </div> 
        <div class="form-row">
            <div class="form-col">
                <label style="text-align:left;">
                    <button type="button" name="back" class="button_back" onclick="javascript:$('#sec_3').fadeOut('slow');$('#sec_2').delay(500).fadeIn('slow');">Back</button>
                </label>
            </div>
             <div class="form-col">
                                <label style="text-align:center;margin-left: 15%;text-decoration: underline;">
                                    <a href="#" data-toggle="modal" data-target="#myModal3">Need Help?</a>
                                </label>
                            </div>
                                   <!-- Modal -->
                                <div id="myModal3" class="modal fade" role="dialog">
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


                 <!--End Modal -->   
            <div class="form-col">
                <label style="text-align:right;">
                    <button type="button" name="next" class="button_paid" onclick="javascript:form_validation_3();">Next</button>
                </label>
            </div>                                      
        </div>    

    </section>
</div>


<!-- SECTION 7 -->
<div id="sec_4" style="display: none;">
    <!-- <h4></h4> -->
    <section>
        <span class="logo"> AUTOMATIC TOKENIZER</span>
        <br><br>
        <h4>Tokenizer</h4>
      <!--   <div class="form-row">
            <div class="form-col">
                <label >
                    <b>Your Ether Wallet Address *</b>
                </label>       
                <div class="form-holder">
                    <i class="zmdi zmdi-check"></i>
                    <input type="text" name="address" id="address" class="form-control" onkeyup="show_actions4();">
                </div>                     
            </div>                       
        </div>
        <div class="form-row">
            <div class="form-col">
                <label >
                    <b>Re-enter your Ether Wallet Address * </b>
                </label>       
                <i>(Tip: Always copy paste your wallet address to avoid mistakes)</i>
                <div class="form-holder">
                    <i class="zmdi zmdi-check"></i>
                    <input type="text" name="readdress" id="readdress" class="form-control" onkeyup="show_actions4();">
                </div>                     
            </div>                       
        </div> -->
        <div class="form-row">
            <div class="form-col">
                <label>
                    <b>Token's Name *</b>
                </label>                            
                <div class="form-holder">
                    <i class="zmdi zmdi-account-o"></i>
                    <input type="text" name="cname" id="cname" class="form-control" onkeyup="show_actions4();">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label>
                    <b>Total Supply of Tokens* </b>
                </label>                           
                <i class="ialign">(Max number of coins to be created)</i> 
                <div class="form-holder">
                    <i class="zmdi zmdi-check"></i>
                    <!-- <input type="text" name="total_supply" id="total_supply" class="form-control" onkeyup="show_actions4();$('#total_token_supply').html(this.value*apad('10',$('#decimals').val()));"> -->
                    <input type="number" name="total_supply" id="total_supply" class="form-control" onkeyup="show_actions4();$('#total_token_supply').html(this.value);">
                </div>
            </div>
            <div class="form-col">
                <label>
                    <b>Decimals *</b>
                </label>
                <!-- <i>(Maximum number of digits)? <a href="https://medium.com/@jgm.orinoco/understanding-erc-20-token-contracts-a809a7310aa5" target="_blank">What is this?</a></i> -->
                <i class="ialign">(Maximum number of decimals)? <a href="#" data-toggle="modal" data-target="#myModal">What is this?</a></i>

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
                    <!-- <input type="number" name="decimals" id="decimals" value="16" maxlength="18" class="form-control" onkeyup="show_actions4();$('#total_token_supply').html($('#total_supply').val()*apad('10',parseInt(this.value)));"> -->
                    <input type="number" name="decimals" id="decimals" value="16" maxlength="18" class="form-control" onkeyup="show_actions4();$('#total_token_supply').html($('#total_supply').val());">
                </div>
            </div>            
        </div>
        <div class="form-row">
            <div class="form-col"> 
                <label>
                    Total Tokens that will be created: <b><span id="total_token_supply"></span></b>
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
                        <input type="text" name="token_abbreviation" id="usd" class="form-control pl12">
                    </div>
                </div>
            </div>                        
        </div>
        <div class="form-row">
            <div class="form-col"> 
                <label>
                    <b>Starting letter for your token addresses*</b>
                </label>   
                <i class="ialign">( Ex: 15tc8rPLETQaHmqJDFTMJHr61jN7ge7KA8 )</i>                           
                <div class="form-holder" style="width: 100%;">
                    {!! get_start_letter_drop_down('pre_fix_token_address') !!}
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
                    <input type="text" name="verbal_timestamp" id="usd" class="form-control pl12">
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
                    <input type="text" name="smallest_unit_of_coin" id="usd" class="form-control pl12">
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
                    <input type="number" name="num_of_confirmations" id="usd" class="form-control pl12">
                </div>
            </div>                        
        </div>
        <div class="form-row" style="margin-bottom: 10px;">
            <div class="form-col">
                <label style="text-align:center;">
                    <span class="error_message" id="error_4"></span>                                  
                </label>
            </div>                                     
        </div>  

        <div class="form-row">
            <div class="form-col">
                <label style="text-align:left;">
                    <button type="button" name="back" class="button_back" onclick="javascript:$('#sec_4').fadeOut('slow');$('#sec_3').delay(500).fadeIn('slow');">Back</button>
                </label>
            </div>  
             <div class="form-col">
            <label style="text-align:center;margin-left: 15%;text-decoration: underline;">
                <a href="#" data-toggle="modal" data-target="#myModal4">Need Help?</a>
            </label>
        </div>
                   <!-- Modal -->
                <div id="myModal4" class="modal fade" role="dialog">
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


 <!--End Modal --> 
            <div class="form-col">
                <label  style="text-align:right;">
                    <button type="button" name="next" class="button_paid" onclick="javascript:form_validation_4();">Finish</button>
                </label>
            </div>                                      
        </div>  
    </section> 
</div>                               
</form>
</div>
@include('partials.footer')
<script src="{{ URL::asset('public/asset/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ URL::asset('public/asset/js/jquery.steps.js')}}"></script>
<script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.js')}}"></script>
<script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.en.js')}}"></script>
<script src="{{ URL::asset('public/asset/js/main.js')}}"></script>
<script>            
    function initialize() {
        var input = document.getElementById('property_location_address');             
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            var address = place.address_components;
            var state, country;
            address.forEach(function(component) {
                var types = component.types;                  
                if (types.indexOf('administrative_area_level_1') > -1) {
                    state = component.long_name;
                }
                if (types.indexOf('country') > -1) {
                    country = component.long_name;
                }
            });
            $("#property_location").val(country);
            $("#property_location_state").val(state);
        });              
    }

    function initialize2() {
        var input1 = document.getElementById('quarry_loc_address');             
        var autocomplete2 = new google.maps.places.Autocomplete(input1);
        google.maps.event.addListener(autocomplete2, 'place_changed', function () {
            var place2 = autocomplete2.getPlace();
            var address2 = place2.address_components;
            var country2;
            address2.forEach(function(component) {
                var types = component.types;                                    
                if (types.indexOf('country') > -1) {
                    country2 = component.long_name;
                }
            });
            $("#quarry_loc").val(country2);
        });              
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    google.maps.event.addDomListener(window, 'load', initialize2);

    function show_block(value) 
    {
        $('#asset_currency_text').hide(); 
        $('#asset_currency_div').show();
        if(value=='Equity')
        {
            $('#currency_block').hide('slow');
            $('#equity_value').val('');
            $('#other_type_block').hide('slow');
            $('#equity_block').show('slow');
            $('#fixed_block').hide('slow');
            $('#utility_block').hide('slow');
            $('#debt_block').hide('slow');
            $('#agri_block').hide('slow');
            $('#art_block').hide('slow');
            $('#real_block').hide('slow');
            $('#quarry_block').hide('slow');
            $('#other_block').hide('slow');
            // $('.actions').show();
            $('#fixed_value').val('');
            $('#fixed_value').val('');
            $('#other_niche').hide('slow');
            $('#other_equity').hide('slow');
        }
        else if(value=='Fixed Asset')
        {
            $('#currency_block').hide('slow');
            $('#other_type_block').hide('slow');
            $('#fixed_block').show('slow');
            $('#equity_block').hide('slow');
            $('#utility_block').hide('slow');
            $('#debt_block').hide('slow');
            $('#agri_block').hide('slow');
            $('#art_block').hide('slow');
            $('#real_block').hide('slow');
            $('#quarry_block').hide('slow');
            $('#other_block').hide('slow');
            // $('.actions').show();
            $('#fixed_value').val('');
            $('#other_niche').hide('slow');
            $('#other_equity').hide('slow');
        }
        else if(value=='Utility')
        {
            $('#currency_block').hide('slow');
            $('#other_type_block').hide('slow');
            $('#utility_block').show('slow');
            $('#fixed_block').hide('slow');
            $('#equity_block').hide('slow');
            $('#debt_block').hide('slow');
            $('#agri_block').hide('slow');
            $('#art_block').hide('slow');
            $('#real_block').hide('slow');
            $('#quarry_block').hide('slow');
            $('#other_block').hide('slow');
            // $('.actions').show();
            $('#fixed_value').val('');
            $('#other_niche').hide('slow');
            $('#other_equity').hide('slow');
        }
        else if(value=='Debt')
        {
            $('#debt_block').show('slow');
            $('#utility_block').hide('slow');
            $('#fixed_block').hide('slow');
            $('#equity_block').hide('slow');
            $('#agri_block').hide('slow');
            $('#art_block').hide('slow');
            $('#real_block').hide('slow');
            $('#quarry_block').hide('slow');
            $('#other_block').hide('slow');
            // $('.actions').show();
            $('#fixed_value').val('');
            $('#other_niche').hide('slow');
            $('#other_equity').hide('slow');
        }  
        else if(value=='Stable Coins')
        {
            $('#currency_block').show('slow');
            $('#other_type_block').hide('slow');
             $('#asset_currency_div').hide('slow'); 
             $('#asset_currency_text').show('slow'); 
            $('#debt_block').hide('slow');
            $('#utility_block').hide('slow');
            $('#fixed_block').hide('slow');
            $('#equity_block').hide('slow');
            $('#agri_block').hide('slow');
            $('#art_block').hide('slow');
            $('#real_block').hide('slow');
            $('#quarry_block').hide('slow');
            $('#other_block').hide('slow');
            // $('.actions').show();
            $('#fixed_value').val('');
            $('#other_niche').hide('slow');
            $('#other_equity').hide('slow');
        }
        else if(value=='Other Type')
        {
            $('#other_type_block').show('slow');
            $('#currency_block').hide('slow');
            $('#debt_block').hide('slow');
            $('#utility_block').hide('slow');
            $('#fixed_block').hide('slow');
            $('#equity_block').hide('slow');
            $('#agri_block').hide('slow');
            $('#art_block').hide('slow');
            $('#real_block').hide('slow');
            $('#quarry_block').hide('slow');
            $('#other_block').hide('slow');
            // $('.actions').show();
            $('#fixed_value').val('');
            $('#other_niche').hide('slow');
            $('#other_equity').hide('slow');
        }
        else
        {
            $('#currency_block').hide('slow');
            $('#other_type_block').hide('slow');
            $('#debt_block').hide('slow');
            $('#utility_block').hide('slow');
            $('#fixed_block').hide('slow');
            $('#equity_block').hide('slow');
            $('#agri_block').hide('slow');
            $('#art_block').hide('slow');
            $('#real_block').hide('slow');
            $('#quarry_block').hide('slow');
            $('#other_block').hide('slow');
            $('#fixed_value').val('');
            $('#other_niche').hide('slow');
            $('#other_equity').hide('slow');
            // $('.actions').show();
        }
        // $('.actions').hide('slow');
}

function show_calculator(value) 
{
    if(value=='Agriculture')
    {
    // $('.actions ul li').addClass('second'); 
    // $('.actions').hide();
    $('#agri_block').show('slow');
    $('#art_block').hide('slow');
    $('#real_block').hide('slow');
    $('#quarry_block').hide('slow');
    $('#other_block').hide('slow');
    }
    else if(value=='Art/Collectable')
    { 
    // $('.actions ul li').addClass('second');                    
    // $('.actions').hide();
    $('#art_block').show('slow');
    $('#agri_block').hide('slow');
    $('#real_block').hide('slow');
    $('#quarry_block').hide('slow');
    $('#other_block').hide('slow');
    }
    else if(value=='Real Estate')
    {      
    // $('.actions ul li').removeClass('second');              
    // $('.actions').show();
    $('#real_block').show('slow');
    $('#agri_block').hide('slow');
    $('#art_block').hide('slow');
    $('#quarry_block').hide('slow');
    $('#other_block').hide('slow');
    }
    else if(value=='Quarry/Mine')
    {            
    // $('.actions ul li').removeClass('second');        
    // $('.actions').show();
    $('#quarry_block').show('slow');
    $('#agri_block').hide('slow');
    $('#art_block').hide('slow');
    $('#real_block').hide('slow');
    $('#other_block').hide('slow');
    }
    else if(value=='Others')
    {
    // $('.actions ul li').removeClass('second');
    // $('.actions').show();
    $('#other_block').show('slow');
    $('#agri_block').hide('slow');
    $('#art_block').hide('slow');
    $('#real_block').hide('slow');
    $('#quarry_block').hide('slow');
    }
    else if(value=='')
    {
    // $('.actions ul li').addClass('second'); 
    // $('.actions').hide();
    $('#agri_block').hide('slow');
    $('#art_block').hide('slow');
    $('#real_block').hide('slow');
    $('#quarry_block').hide('slow');
    $('#other_block').hide('slow');
    }               
}

function show_sub_block(value) 
{    
    if(value=="Entire Quarry")
    {
        $('#entire_quarry_sub').show('slow');
        $('#specific_quarry_sub').hide('slow');
    }
    else if(value=="Specific Quantity")
    {
        $('#entire_quarry_sub').hide('slow');
        $('#specific_quarry_sub').show('slow');
    }
    else
    {
        $('#specific_quarry_sub').hide('slow');
        $('#entire_quarry_sub').hide('slow');
    }
}

function check_validation1(firstname, lastname, email, cemail) 
{
    var firstname= document.getElementById(firstname).value;
    var lastname= document.getElementById(lastname).value;
    var email= document.getElementById(email).value;
    var cemail= document.getElementById(cemail).value;
    if(firstname!='' && lastname!='' && email!='' && cemail!='')
    {
        if(email!=cemail)
        {
            $('.actions').hide();
        }
        else
        {
            $('.actions').show();
        }
    }
    else
    {
        $('.actions').hide();
    }
}
function validate_agri_form() 
{
    var value=document.getElementById('fixed_value').value;
    if(value=='Agriculture' || value=='Art/Collectable')
    {
        var estatename= document.getElementById('estatename').value;
        var estate_area_mm= document.getElementById('estate_area_mm').value;
        var estate_area_token= document.getElementById('estate_area_token').value;
        var token_supply= document.getElementById('token_supply').value;
        var cropgrown= document.getElementById('cropgrown').value;
        var estate_location= document.getElementById('estate_location').value;
        var estate_location_state= document.getElementById('estate_location_state').value;
        if(estate_location=='others')
        {
            var estate_location_input= document.getElementById('estate_location_input').value;
            var estate_location_state_input=document.getElementById('estate_location_state_input').value;
        }
        else if(estate_location!='')
        {
            var estate_location_input= 1;   
            var estate_location_state_input=1;
        }
        else
        {
            var estate_location_input= '';   
            var estate_location_state_input='';   
        }
        if(estatename!='' && estate_area_mm!='' && estate_area_token!='' && token_supply!='' && cropgrown!='' && (estate_location!='' && estate_location_input!='') && (estate_location_state!='' || estate_location_state_input!=''))
        {
        // $('.actions ul li').removeClass('second');
        // $('.actions').show();
        }
        else
        {
        // $('.actions ul li').addClass('second');
        // $('.actions').hide();
        }
    }
}



function validate_artcoll_form() 
{
    var value=document.getElementById('fixed_value').value;
    if(value=='Agriculture' || value=='Art/Collectable')
    {
        var artname= document.getElementById('artname').value;
        var art_desc= document.getElementById('art_desc').value;
        var artist_name= document.getElementById('artist_name').value;
        var orgin= document.getElementById('orgin').value;
        var yearcreated= document.getElementById('yearcreated').value;
        var medium= document.getElementById('medium').value;
        var artwork_type= document.getElementById('artwork_type').value;
        var collectorsname= document.getElementById('collectorsname').value;
        var artworkusd= document.getElementById('artworkusd').value;
        var max_token= document.getElementById('max_token').value;

        if(artname!='' && art_desc!='' && artist_name!='' && orgin!='' && yearcreated!='' && medium!='' && artwork_type!='' && collectorsname!='' && artworkusd!='' && max_token!='')
        {
        // $('.actions ul li').removeClass('second');
        // $('.actions').show();
        }
        else
        {
        // $('.actions ul li').addClass('second');
        // $('.actions').hide();
        }
    }
}

function get_state(country) 
{        
    if(country!='others')
    {
        var api_url = "get_state_ajax?country="+country;
        $.ajax({
            type: "GET",
            url: api_url,
            dataType:'json',
            success: function(data){
                var value="";
                data.forEach(function(element) {
                    value +="<option value='"+element.state+"'>"+element.state+"</option>";
                });
                $('#estate_location_state').html(value);
            }
        });
        $('#other_country').hide('slow');
        $('#state_block').show('slow');
        $('#other_state').hide('slow');
    }
    else
    {
        $('#other_country').show('slow');
        $('#state_block').hide('slow');
        $('#other_state').show('slow');
        $('#estate_location_state').html('');
    }
}
function get_state1(country) 
{ 
    if(country!='others')
    {       
        var api_url = "get_state_ajax?country="+country;
        $.ajax({
            type: "GET",
            url: api_url,
            dataType:'json',
            success: function(data){
                var value="";
                data.forEach(function(element) {
                    value +="<option value='"+element.state+"'>"+element.state+"</option>";
                });
                $('#property_location_state').html(value);
            }
        });
        $('#other_country1').hide('slow');
        $('#state_block1').show('slow');
        $('#other_state1').hide('slow');
    }
    else
    {
        $('#other_country1').show('slow');
        $('#state_block1').hide('slow');
        $('#other_state1').show('slow');
        $('#property_location_state').html('');
    }
}
function click_the_button(btn)
{
    btn.click();
}
function  get_file_name(e) 
{
    var fileName = e.target.files[0].name;
    $('#symbol_name').val(fileName);
}
function add_owner_fn()
{
    var content='<div id="sub_div"><input type="text" name="previous_owner[]" placeholder="Previous Owner" class="form-control" style="display: inline;height: 30px !important;width:40%;"> <input type="text" name="from_year[]" class="form-control"  placeholder="From Year" style="padding:1px !important;display: inline;height: 30px !important;width:20%;"> <input type="text" name="to_year[]"  placeholder="To Year" class="form-control" style="padding:1px !important;display: inline;height: 30px !important;width:20%;"> <button type="button" name="add_owner" class="remove_owner" style="display: inline;height: 30px !important;width:15%;text-align: center;background-color: #f75050;border: solid 1px red;color: #fff;cursor: pointer;">- Remove</button></div>';
    $('#owner_block').append(content);
}            
$(document.body).on('click', '.remove_owner', function()  {
    $(this).parent().remove();
});  
$(document.body).on('click', ' ul li a', function()  {
// $('.actions ul li').addClass('second');
// $('.second').css('display','none !important');
});
function show_actions(value) 
{
    if(value!='')
    {
// $('.actions ul li').removeClass('second');
// $('.actions').show('slow');
}
else
{
// $('.actions ul li').addClass('second');   
// $('.actions').hide('slow');
}

if(value=='Other niche Utility Tokens'){
    $('#other_niche').show('slow');
    $('#other_equity').hide('slow');
}else if(value=="Other"){
    $('#other_equity ').show('slow');
    $('#other_niche').hide('slow');
}else{
    $('#other_niche').hide('slow');  
    $('#other_equity').hide('slow');
}
}
function show_actions3() 
{
    var usd=document.getElementById('usd').value;
    var total_checked=$('input[name="marketing[]"]:checked').length;
    if(usd!='' && total_checked>0)
    {
    // $('.actions ul li').removeClass('second');
    // $('.actions').show('slow');
    }
    else
    {
    // $('.actions ul li').addClass('second');   
    // $('.actions').hide('slow');
    }
}
function show_actions4() 
{
    // var address=document.getElementById('address').value;
// var symbol_name=document.getElementById('symbol_name').value;
var cname=document.getElementById('cname').value;
var total_supply=document.getElementById('total_supply').value;
var decimals=document.getElementById('decimals').value;
if(cname!='' && total_supply!='' && decimals!='')
{
// $('.actions ul li').removeClass('second');
// $('.actions').show('slow');
}
else
{
// $('.actions ul li').addClass('second');   
// $('.actions').hide('slow');
}
}
function validateEmail(emailField){
    var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

    if(!emailField.match(reEmail)) {
        return false;
    }
    return true;
}  
function form_validation_video() {
   $('#video-sec').fadeOut('slow');
   $('#sec_2').delay(500).fadeIn('slow');

}            
function form_validation_1() 
{                
    var v = grecaptcha.getResponse();
    var firstname=document.getElementById('firstname').value;
    var lastname=document.getElementById('lastname').value;
    var email=document.getElementById('email').value;
    var cemail=document.getElementById('cemail').value;
    var country=document.getElementById('country').value;
    var phonenumber=document.getElementById('phonenumber').value;
    var email_val=validateEmail(email);
    var cemail_val=validateEmail(cemail);
    if(firstname=='' || lastname=='' || email=='' || cemail=='' || country=='')
    {
        $('#error_1').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
    }
    else if(email!=cemail)
    {
        $('#error_1').fadeIn().html('Both email ID’s need to be same.').delay(1500).fadeOut('slow');
    }
    else if(email_val==false || cemail_val==false)
    {
        $('#error_1').fadeIn().html('Invalid Email Id').delay(1500).fadeOut('slow');
    }
    else if(v.length == 0)
    {
        $('#error_1').fadeIn().html('Google Captcha Required').delay(1500).fadeOut('slow');
    }
    else
    {
      
        var form_name= 1;


        var data = {_token:'{{csrf_token()}}',form_name:form_name,email : email, phonenumber : phonenumber, firstname : firstname, lastname : lastname, country : country };
        console.log("1st fome save data",data);
        // var result= save_data_ajax(data);

        var url="create_token";
        console.log("data",data);
        var createToken= $.ajax({
                  type: 'POST',
                  url: url,
                  data: data,
                  dataType: "json",
                  success: function(response) { 
                    console.log("response form1",response);
                    if(response==1){
                        $('#sec_1').fadeOut('slow');
                        $('#video-sec').delay(500).fadeIn('slow');
                    }else{
                         $('#error_1').fadeIn().html('Something went wrong!. Please try again').delay(1500).fadeOut('slow');
                    }
                }
        });
       
    
    }
}
function form_validation_2() 
{
    var iserror = 0;
    var token_type = document.getElementById('token_type').value;
    if(token_type=="")
    {
    $('#error_2').fadeIn().html('Please select the token type to continue').delay(1500).fadeOut('slow');
    iserror = 1;
    }

    if(token_type=="Equity")
    {
        var equity_value = document.getElementById('equity_value').value;
        if(equity_value=="")
        {
            $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
            iserror = 1;
        }
        if(equity_value=="Other")
        {
            var other_equity_text= document.getElementById('other_equity_text').value;
            if(other_equity_text=="")
            {
                $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
                iserror = 1;
            }
        }
    }

    if(token_type=="Fixed Asset")
    {
        var fixed_value = document.getElementById('fixed_value').value;
        if(fixed_value=="")
        {
            $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
            iserror = 1;
        }

        if(fixed_value=="Agriculture")
        {
            var estatename = document.getElementById('estatename').value;
            var estate_area_mm = document.getElementById('estate_area_mm').value;
            var estate_area_token = document.getElementById('estate_area_token').value;
            var token_supply = document.getElementById('token_supply').value;
            var cropgrown = document.getElementById('cropgrown').value;
            var estate_location = document.getElementById('estate_location').value;
            var estate_location_state = document.getElementById('estate_location_state').value;
            var reg_no = document.getElementById('reg_no').value;
            if(estatename=="" || estate_area_mm=="" || estate_area_token=="" || token_supply=="" || cropgrown=="" || estate_location=="" ||  estate_location_state=="" )
            {
            $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
            iserror = 1;
            }
        }
        else if(fixed_value=="Art/Collectable")
        {
            var artname = document.getElementById('artname').value;
            var art_desc = document.getElementById('art_desc').value;
            var artist_name = document.getElementById('artist_name').value;
            var orgin = document.getElementById('orgin').value;
            var yearcreated = document.getElementById('yearcreated').value;
            var medium = document.getElementById('medium').value;
            var artwork_type = document.getElementById('artwork_type').value;
            var collectorsname = document.getElementById('collectorsname').value;
            var artworkusd = document.getElementById('artworkusd').value;
            var max_token = document.getElementById('max_token').value;
            var perunit = document.getElementById('perunit').value;
            var artworkusd = document.getElementById('artworkusd').value;
            if(artname=="" || art_desc=="" || artist_name=="" || orgin=="" || yearcreated=="" || medium=="" || artwork_type=="" || collectorsname=="" || artworkusd=="" || max_token=="" || perunit=="" || artworkusd=="")
            {
                $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
                iserror = 1;
            }
        }

        else if(fixed_value=="Real Estate")
        {
            var realestate_name = document.getElementById('realestate_name').value;
            var property_type = document.getElementById('property_type').value;
            var property_location_address = document.getElementById('property_location_address').value;
            var realestate_usd = document.getElementById('realestate_usd').value;
            var total_property_size = document.getElementById('total_property_size').value;
            var property_size_mm = document.getElementById('property_size_mm').value;
            var property_size_mm_token = document.getElementById('property_size_mm_token').value;
            var max_token_supply = document.getElementById('max_token_supply').value;

            if(realestate_name=="" || property_type=="" || property_location_address=="" || realestate_usd=="" || total_property_size=="" || property_size_mm=="" || property_size_mm_token=="" || max_token_supply=="" )
            {
                $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
                iserror = 1;
            }
        }
        else if(fixed_value=="Quarry/Mine")
        {
            var quarry_name = document.getElementById('quarry_name').value;
            var mine_type = document.getElementById('mine_type').value;
            var quarry_loc_address = document.getElementById('quarry_loc_address').value;
            var quarry_opt = document.getElementById('quarry_opt').value;
            if(quarry_opt=="Entire Quarry")
            {
                var quarry_size_meters = document.getElementById('quarry_size_meters').value;
                if(quarry_size_meters=="")
                {
                    $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
                    iserror = 1;
                }
            }
            else if(quarry_opt=="Specific Quantity")
            {
                var total_quarry_size_meters = document.getElementById('total_quarry_size_meters').value;
                var unit_total_qty_mineral = document.getElementById('unit_total_qty_mineral').value;
                var per_unit_to_tokenize = document.getElementById('per_unit_to_tokenize').value;
                if(total_quarry_size_meters=="" || unit_total_qty_mineral=="" || per_unit_to_tokenize=="" )
                {
                    $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
                    iserror = 1;
                }
            }
            var total_supply_of_tokens = document.getElementById('total_supply_of_tokens').value;
            if(quarry_name=="" || mine_type=="" || quarry_loc_address=="" || quarry_opt=="" || total_supply_of_tokens=="" )
            {
                $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
                iserror = 1;
            }
        }

        else if(fixed_value=="Others")
        {
            var asset_name = document.getElementById('asset_name').value;
            var asset_type = document.getElementById('asset_type').value;
            var about_asset = document.getElementById('about_asset').value;
            var asset_value_usd = document.getElementById('asset_value_usd').value;
            var asset_measure_unit = document.getElementById('asset_measure_unit').value;
            var asset_qty = document.getElementById('asset_qty').value;
            var per_token_unit = document.getElementById('per_token_unit').value;
            var quantity_to_tokenize = document.getElementById('quantity_to_tokenize').value;
            var max_token_supply_asset = document.getElementById('max_token_supply_asset').value;

            if(asset_name=="" || asset_type=="" || about_asset=="" || asset_value_usd=="" || asset_measure_unit=="" || asset_qty=="" || per_token_unit=="" || quantity_to_tokenize=="" || max_token_supply_asset=="" )
            {
                $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
                iserror = 1;
            }
        }
    }

    if(token_type=="Utility")
    {
        var utility_value = document.getElementById('utility_value').value;
        if(utility_value=="")
        {
            $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
            iserror = 1;
        }
        if(utility_value=="Other niche Utility Tokens")
        {
            var other_niche_text = document.getElementById('other_niche_text').value;
            if(other_niche_text=="")
            {
                $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
                iserror = 1;
            }
        }
    }
    if(token_type=="Stable Coins")
    {

    }
    if(token_type=="Other Type")
    {
        var other_type=document.getElementById('other_type').value;
        if(other_type=="")
        {
            $('#error_2').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
            iserror = 1;
        }
    }
    if(iserror == 0)
    {
        $('#sec_2').fadeOut('slow');
        $('#sec_3').delay(500).fadeIn('slow');
    }
}

function form_validation_3() 
{
    var usd = document.getElementById('usd').value;
    var price_per_token = document.getElementById('price_per_token').value;
    var total_checked=$('input[name="marketing[]"]:checked').length;
    var iserror = 0;
    if(usd=="" || price_per_token=="")
    {
        $('#error_3').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
        iserror = 1;
    }
    else if(total_checked<=0)
    {
        $('#error_3').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
        iserror = 1;
    }
    if(iserror == 0)
    {
        $('#sec_3').fadeOut('slow');
        $('#sec_4').delay(500).fadeIn('slow');
        // $('#total_token_supply').html($('#total_supply').val()*apad('10',parseInt($('#decimals').val())));
        $('#total_token_supply').html($('#total_supply').val());
    }
}

function form_validation_4() 
{
    // var address = document.getElementById('address').value;
    // var readdress = document.getElementById('readdress').value;
    var cname = document.getElementById('cname').value;
    var total_supply = document.getElementById('total_supply').value;
    var decimals = document.getElementById('decimals').value;
    var iserror = 0;
    if(cname=="" || total_supply=="" || decimals=="")
    {
        $('#error_4').fadeIn().html('Please fill all the mandatory(*) fields to continue').delay(1500).fadeOut('slow');
        iserror = 1;

    } else if(parseInt(decimals) > 18)
    {
        $('#error_4').fadeIn().html('Maximum Decimal value can be 18').delay(1500).fadeOut('slow');
        iserror = 1;
    }

    if(iserror == 0)
    {
        document.getElementById("wizard").submit();
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

async function save_data_ajax(formData) {
    var url="create_token";
    console.log("url",url);
    console.log("data",formData);
    // console.log("form_name",form_name);
    var createToken= $.ajax({
              type: 'POST',
              url: url,
              data: formData,
              // contentType: "application/json",
              dataType: "json",
              success: function(response) { 
                console.log("response",response);
                return 1;
            }
    });
        // createToken.error(function() {
        //     return 0;
        //      });
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
@include('partials.scripts')

</body>
</html>