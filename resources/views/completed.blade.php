    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Tokenizer</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="colorlib.com">
            <link rel="stylesheet" href="{{ URL::asset('public/asset/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('public/asset/vendor/date-picker/css/datepicker.min.css')}}">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ URL::asset('public/asset/css/style.css')}}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112610716-2"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-112610716-2');
            </script>
        
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
            
                    <!-- SECTION 1 -->
                    <section class="preview-form">
                        <h3 style="color:green">Hi {{$data->firstname}} {{$data->lastname}},</h3>

                        <h3>Thank you!</h3>
                        <p>We are processing all the information you have submitted. Once the payment is verified, we will be transferring:</p></br>
                        <p><span style="font-weight: bold"> {{$data->total_supply}}</span> tokens to <span style="font-weight: bold">{{$data->address}}</span></p><br>
                        <p>Meanwhile, You can contact us for any questions on these channels:</p><br>
                        <p>Facebook Messenger: <a href="https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Ft%2F354279558686858" target="_blank">Click HERE</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Email: <a href="mailto:contact@assetplatform.net?Subject=subjecthere&Body=bodytext">contact@assetplatform.net</a></p><br>
                        
                    </section>
            
            </div>
            @include('partials.footer')
            <script src="{{ URL::asset('public/asset/js/jquery-3.3.1.min.js')}}"></script>
            <script src="{{ URL::asset('public/asset/js/jquery.steps.js')}}"></script>
            <script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.js')}}"></script>
            <script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.en.js')}}"></script>
            
        <script>
    $(document).ready(function(){
        document.getElementById('demo').innerText = Math.floor(Math.random() * (1053 - 976) + 976) ;
        setInterval(function(){
        document.getElementById('demo').innerText = Math.floor(Math.random() * (1053 - 976) + 976) ;
        }, 10000);
    });

    </script>
            <script src="{{ URL::asset('public/asset/js/main.js')}}"></script>
            
    </body>
    </html>