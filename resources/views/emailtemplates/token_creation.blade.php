<!DOCTYPE html>
 <html lang='en' class=''>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    </head>
    <body style="margin: 0; padding: 0;font-family: 'Poppins', sans-serif !important;font-size: 14px;color:#999;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
                        <tr>
                            <td>
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                                    <tr>
                                        <td bgcolor="#f1f1f1" style="padding: 40px 0 30px 0;text-align:center;">
                                                <img src = "{{asset('public/images/logo_ap.png')}}" width="125" alt="" style="display: block;margin:auto;" />
                                                <!-- <p style="color: #000;font-weight: 800;text-align: center;margin-top: 0;font-size: 20px;letter-spacing: .5px;">Asset Tokenization Platform </p> -->
                                                <!-- <img src="images/logo.png" alt=""  style="display: block;margin:auto;" /> -->
                                            </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;border-left:1px solid #f1f1f1;border-right: 1px solid #f1f1f1; " >
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td>
                                                            Hi {{$sql->firstname}}&nbsp;{{$sql->lastname}},
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 20px 0 0 0;">
                                                        <span style="color:#134f5c;font-weight: 800;">CONGRATS</span>, Following are the things that are completed:
                                                        <p>Step 1: You have successfully provided all the information required to create your Tokens.</p>
                                                        <p>Step 2: Using those information, your Tokens were created,</p>
                                                        <ol>
                                                            <li>Number of Tokens Created: <span style="color:#134f5c;">{{$sql->total_supply}}</span></li>
                                                            <li>Name of Token: <span style="color:#134f5c;">{{$sql->cname}}</span></li>
                                                            <li>Date an time of creation: <span style="color:#134f5c;">{{\Carbon\Carbon::parse($sql->date_of_creation)->format('F dS ,Y')}}</span></li>
                                                        </ol>
                                                        <p style="color:#134f5c;font-weight: 800;">WHAT NEXT?</p>
                                                        <p>All the above created tokens are stored securely in the system&apos;s temporary wallet. </p>
                                                        <p>These Tokens will be transferred to <span style="color:#134f5c;text-decoration: underline">your Wallet</span> ( So you can start selling them to your users )</p>
                                                        <p>Our one time Token Creation and Transfer Fee is just: <span style="color:#134f5c;">$9</span></p>
                                                        <p>Once you make the one time payment of $9, the tokens will be transferred. You can make the payment using any of the below methods:</p>
                                                    </td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>
                                                        <p style="color:#333;"> Bitcoin Wallet Address:&nbsp;<br/>  <b style="color:#999;font-weight: 400;">18z24LMedkAV4dXSYHfy7YG9HW6UXQmfME</b></p>
                                                        <p style="color:#333;">Ether Wallet Address:&nbsp;<br/>  <b style="color:#999;font-weight: 400;">0x25dC1A39a627B030eFC06f8E31AE6Cf4F198B10e</b></p>
                                                        <p style="color:#333;">USDT ( TetherUS ) Wallet Address:<br/> <b style="color:#999;font-weight: 400;">19ZDtfwQzmYnb2p6jEwDZm3du94hrQSyep</b></p>
                                                        <p style="color:#333;">XLM ( Stellar Lumens ) Wallet Address:<br/> <b style="color:#999;font-weight: 400;">GA5QO5DMFT3TBNRBYBVCQBWNOVSHNGPHO24LWNF3F5NGWSF5RKCLPDB6</b></p>
                                                        <p style="color:#333;">TRX ( TRON ) Wallet Address:<br/> <b style="color:#999;font-weight: 400;">TMaLzR2G2P7DzPJXPhX6DkFCL9ZQWpncjT</b></p>
                                                        <p>Once the payment is made, please click <a href="{{ route('Payment_Details', $sql->id) }}" style="color:#15c">HERE</a>.</p>
                                                        <p style="color:#15c;text-align: center;">209+ Tokens created using this A.I. platform</p>
                                                        <div class="alt-coins" style="text-align:center;display: table;width:100%;">
                                                            <div class="logo-container" style="display:inline-block;padding: 10px;vertical-align: middle;">
                                                                <img src="{{asset('public/images/cs-01.png')}}" alt="Asset Platform" style="height:auto;" width="130" /> 
                                                         </div>
                                                         <div class="logo-container" style="display:inline-block;padding: 10px;vertical-align: middle;">
                                                             <img src="{{asset('public/images/cs-02.jpg')}}" alt="Asset Platform" style="height:auto;" width="70" />
                                                         </div>
                                                         <div class="logo-container" style="display:inline-block;padding: 10px;vertical-align: middle;">
                                                              <img src="{{asset('public/images/cs-03.png')}}" alt="Asset Platform" style="height:auto;" width="130" />
                                                         </div>
                                                         <div class="logo-container" style="display:inline-block;padding: 10px;vertical-align: middle;">
                                                             <img src="{{asset('public/images/cs-04.png')}}" alt="Asset Platform" style="height:auto;" width="90" /> 
                                                         </div>
                                                         <div class="logo-container" style="display:inline-block;padding: 10px;vertical-align: middle;">
                                                             <img src="{{asset('public/images/cs-05.png')}}" alt="Asset Platform" style="height:auto;" width="130" /> 
                                                         </div>
                                                         <div class="logo-container" style="display:inline-block;padding: 10px;vertical-align: middle;">
                                                              <img src="{{asset('public/images/cs-06.png')}}" alt="Asset Platform" style="height:auto;" width="130" /> 
                                                         </div>
                                                         <div class="logo-container" style="display:inline-block;padding: 10px;vertical-align: middle;">
                                                              <img src="{{asset('public/images/cs-07.png')}}" alt="Asset Platform" style="height:auto;" width="95" /> 
                                                         </div>
                                                         <div class="logo-container" style="display:inline-block;padding: 10px;vertical-align: middle;">
                                                              <img src="{{asset('public/images/cs-08.png')}}" alt="Asset Platform" style="height:auto;" width="95" /> 
                                                         </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f1f1f1" style="padding: 30px 30px 30px 30px;font-size: 12px;">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td width="75%">
                                                        &copy; 2019 Asset Tokenization Platform
                                                        <br/>
                                                        Unsubscribe to this newsletter instantly
                                                    </td>
                                                    <td align="right">
                                                        <table border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                           
                                                            <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                            <td>
                                                            <a href="#">
                                                            <img src="{{asset('public/images/fb.png')}}" alt="Facebook" width="25" height="25" style="display: block;" border="0" />
                                                            </a>
                                                            </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        </body>
</html>