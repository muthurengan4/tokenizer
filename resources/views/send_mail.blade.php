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
                                        <td bgcolor="#f1f1f1" style="padding: 40px 0 30px 0;">
                                                <p style="color: #000;font-weight: 800;text-align: center;margin-top: 0;font-size: 20px;letter-spacing: .5px;">Asset Tokenization Platform </p>
                                                <!-- <img src="images/logo.png" alt=""  style="display: block;margin:auto;" /> -->
                                            </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;border-left:1px solid #f1f1f1;border-right: 1px solid #f1f1f1; " >
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td>
                                                            Hi {{$user_fname}} {{$user_lname}},
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 20px 0 0 0;">
                                                            Following are the information about your tokens:
                                                        <ol>
                                                            <li>Number of Tokens Created: {{$total_supply}}</li>
                                                            <li>Name of Token: {{$token_name}}</li>
                                                            <li>Date and time of creation: {{$date_of_creation}}</li>
                                                        </ol>
                                                    </td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <table class="table-invoice">
                                                                        <tr>
                                                                            <td style="padding: 15px 0;border-bottom: 1px dashed #ddd;">&#x2022; Money spent on creating your Contracts:</td>
                                                                            <td align="right" style="padding: 15px 0; border-bottom: 1px dashed #ddd;color:#5e7997;font-weight: 600;">
                                                                                <span>$20</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding: 15px 0;border-bottom: 1px dashed #ddd;">&#x2022; Blockchain fee required to transfer <span>{{$total_supply}}</span> tokens
                                                                                to your wallet:</td>
                                                                            <td align="right" style="padding: 15px 0;border-bottom: 1px dashed #ddd;color:#5e7997;font-weight: 600;">
                                                                                <span>$29</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding: 15px 0;border-bottom: 1px dashed #ddd;">&#x2022; Token creation fee:</td>
                                                                            <td align="right" style="padding: 15px 0;border-bottom: 1px dashed #ddd;color:#5e7997;font-weight: 600;">
                                                                                <span>$49</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding: 15px 0;border-bottom: 1px dashed #ddd;"> Total:</td>
                                                                            <td align="right" style="padding: 15px 0;border-bottom: 1px dashed #ddd;color:#5e7997;font-weight: 600;">
                                                                                <span>$9 ( One time charges )</span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                        </td>
                                                <tr>
                                                <tr>
                                                    <td>
                                                        <p style="color:#333;"><b>Final Step: Transfer of the above tokens to your Wallet ( So you can start selling them to your users )</b></p>
                                                        <p style="color:#333;"><b>Once you make the one time payment of $9, the tokens will be transferred. You can make the payment using any of the below methods:</b></p>
                                                        <p style="color:#333;"> Bitcoin Wallet Address:&nbsp;<br/>  <b style="color:#999;font-weight: 400;">18z24LMedkAV4dXSYHfy7YG9HW6UXQmfME</b></p>
                                                        <p style="color:#333;">Ether Wallet Address:&nbsp;<br/>  <b style="color:#999;font-weight: 400;">0x25dC1A39a627B030eFC06f8E31AE6Cf4F198B10e</b></p>
                                                        <p style="color:#333;">USDT ( TetherUS ) Wallet Address:<br/> <b style="color:#999;font-weight: 400;">19ZDtfwQzmYnb2p6jEwDZm3du94hrQSyep</b></p>
                                                        <p style="color:#333;">XLM ( Stellar Lumens ) Wallet Address:<br/> <b style="color:#999;font-weight: 400;">GA5QO5DMFT3TBNRBYBVCQBWNOVSHNGPHO24LWNF3F5NGWSF5RKCLPDB6</b></p>
                                                        <p style="color:#333;">TRX ( TRON ) Wallet Address:<br/> <b style="color:#999;font-weight: 400;">TMaLzR2G2P7DzPJXPhX6DkFCL9ZQWpncjT</b></p>
                                                        <p>Once the payment is made, please click <a href="https://assetplatform.net/Payment_Details/{{$fetch_id}}">HERE</a>.</p>
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
                                                            <img src="public/images/fb.png" alt="Facebook" width="25" height="25" style="display: block;" border="0" />
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