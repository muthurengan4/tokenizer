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
                                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;border-left:1px solid #f1f1f1;border-right: 1px solid #f1f1f1;color: #125dec; " >
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td>
                                                        Hi {{$data['firstname']}} {{$data['lastname']}},
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 20px 0 0 0;">
                                                        <p>Please verify your email ID by clicking this link 
                                                            <a 
                                                                href="{{$data['verify_url']}}" style="text-decoration:underline"
                                                                >
                                                                HERE
                                                            </a>.
                                                        </p>
                                                        <p>Incase the above link does not work, please copy-paste this on your browser: 
                                                            <a href="{{$data['verify_url']}}" target="_blank" style="text-decoration:underline;">{{$data['verify_url']}}</a>
                                                        </p>
                                                        <p>
                                                            <span style="color:#ff0000;font-weight:700;">Important</span>: We would be sending very important email's and notifications to you about your tokens. Please Mark this email as important. So our future notifications reach your INBOX on time.
                                                        </p>
                                                        <p>
                                                        Best regards,<br/>
                                                        The Asset Platform Team.
                                                        </p>
                                                        <p>
                                                        Address: 520 Broadway Suite 200 Santa Monica CA 90401<br/>
                                                        Phone: 646-491-9060
                                                        </p>
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
                                                        To Un-Subscribe to our emails, please click <a href="#" style="text-decoration:underline;">here</a>
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