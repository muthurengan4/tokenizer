<!DOCTYPE html>
 <html lang='en' class=''>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    </head>
    <body style="margin: 0; padding: 0;font-family: 'Poppins', sans-serif !important;font-size: 14px;color:#999;padding-top: 3em;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
                        <tr>
                            <td>
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                                    <tr >
                                        <td bgcolor="#f1f1f1" style="padding: 40px 0 30px 0;text-align:center;">
                                                <img src = "{{asset('public/images/logo_ap.png')}}" width="125" alt="" style="display: block;margin:auto;" />
                                            </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;border-left:1px solid #f1f1f1;border-right: 1px solid #f1f1f1;color: #125dec;border-bottom: 1px solid #f1f1f1; " >
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                @if($status === 1 || $status === 2) 
                                                <tr>
                                                    <td >
                                                        <img src="{{asset('public/images/success.gif')}}"  width="125" alt="img" style="display: block;margin:auto;" />
                                                    </td>
                                                </tr>
                                                @endif
                                                @if($status === 0) 
                                                <tr>
                                                    <td >
                                                            <img src="{{asset('public/images/error.png')}}"  width="40" alt="img" style="display: block;margin:auto;" />
                                                        </td>
                                                </tr>
                                                @endif
                                                @if($status === 1)
                                                <tr>
                                                    <td style="padding: 5px 0 0 0;">
                                                        <p> Thank you :) </p>
                                                        <p> Your email is verified successfully.  </p>
                                                    </td>
                                                </tr>
                                                @endif
                                                @if($status === 2)
                                                <tr>
                                                    <td style="padding: 5px 0 0 0;">
                                                        <p> Thank you :) </p>
                                                        <p> Your email is already verified. </p>
                                                    </td>
                                                </tr>
                                                @endif
                                                @if($status === 0)
                                                 <tr  >
                                                    <td style="padding: 5px 0 0 0; color:red;">
                                                        <p> Email has not been verified.</p>
                                                    </td>
                                                </tr>
                                                @endif
                                                @if($status === 1 || $status === 2)
                                                 <tr  >
                                                    <td>
                                                        <p>
                                                            <span style="color:red">Important:</span> We would be sending very important email&apos;s and notifications to you about your tokens. Take a minute > Go back to the email you received > Mark the email you received as important. So our future notifications reach your INBOX on time.
                                                        </p>
                                                    </td>
                                                 </tr>
                                                 @endif
                                                <tr >

                                                    <td style="padding: 5px 0 0 0; color:red;">
                                                        <p>
                                                            <a href="{{url('/')}}">Return to home</a>
                                                        </p>
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