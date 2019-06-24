<style>
.steps, .actions
{
    display: none !important;
}
.form-col
{
    width: 100% !important;
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
.eth_value
{
    font-size: 20px;
    font-weight: bold;
    color: #ff8300;
}
.button_paid
{
    background-color: green;
    color: #fff;
    padding: 10px 20px;
    border: solid 1px #064c06;
    cursor: pointer;
}
.button_paid:hover
{
    background-color: #039a03;
    color: #fff;
    padding: 10px 20px;
    border: solid 1px #077307;
    cursor: pointer;
}
.tooltips
{
    background-color: #00000096;
    color: #fff;
    padding: 3px 15px;
    border-radius: 5px;
    display: none;
}
</style>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tokenizer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
		<link rel="stylesheet" href="{{ URL::asset('public/asset/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">
		<link rel="stylesheet" href="{{ URL::asset('public/asset/vendor/date-picker/css/datepicker.min.css')}}">
		<link rel="stylesheet" href="{{ URL::asset('public/asset/css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>        
		<div class="wrapper">
            <form action="#" id="wizard" name="wizard" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h4></h4>
                <section>
                    <h3 style="color:green">Great! Mail Sent Successfully!.</h3>
                    <br><br><br><br><br>

                    <div class="form-row">
                        <div class="form-col">
                            <label for="" style="text-align:center;">
                                  <a href="{{url('/')}}"><button type="button" name="paid" class="button_paid">Home</button></a>
                            </label>
                        </div>                                     
                    </div>
                </section>
            </form>
		</div>

		<script src="{{ URL::asset('public/asset/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{ URL::asset('public/asset/js/jquery.steps.js')}}"></script>
		<script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.js')}}"></script>
		<script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.en.js')}}"></script>
		<script src="{{ URL::asset('public/asset/js/main.js')}}"></script>
</body>
</html>