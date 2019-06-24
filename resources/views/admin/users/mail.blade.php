<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ADMIN - AUTOMATIC TOKENIZER </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('public/asset/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('public/asset/vendor/date-picker/css/datepicker.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('public/asset/css/style.css')}}">
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDoujGbr86VY2F6vhh-bzZjsebCFoRn0ik"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112610716-2"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-112610716-2');
    </script>

        
    <style>
    .form-col
    {
        width: 100% !important;
    }
    .form-holder
    {
        width: 100% !important;
    }
    .steps, .actions, .second
    {
        display: none !important;
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
    .actions ul {
        display: flex;
        justify-content: space-between;
        margin: 42px 0px !important;
    }
    .button_paid
    {
        border: none;
        display: inline-flex;
        height: 42px;
        width: 182px;
        align-items: center;
        color: #fff;
        cursor: pointer;
        background: #3377c0;
        text-transform: uppercase;
        /*justify-content: center;*/
        float:right;
        letter-spacing: 1px;
         margin:2px;
    }
    .button_paid:hover
    {
        background: #3b87d9;
        cursor: pointer;
    }
    .button_back
    {
        border: 1px solid #3377c0;
        display: inline-flex;
        height: 42px;
        width: 112px;
        align-items: center;
        color: #3377c0;
        cursor: pointer;
        background: #fff;
        text-transform: uppercase;
        justify-content: center;
        letter-spacing: 1px;

    }
    .button_back:hover
    {
        border-color: transparent;
        color: #fff;
        background: #3b87d9;
    }
    .error_message
    {
        color: red;
        font-style: italic;
        font-size: 12px;
        font-weight: normal;
    }
  
    .table_class{
    margin: auto;
    margin-left: 120px;
    }
    .wrap_text{
    max-height: 32px;
    min-width: 39px;
    max-width: 160px;
}
    table {
  border-collapse: collapse;
  width: 80%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>


     
            <h3 style="float-left">Send Mail 

            <br>

            <span style="float-right"> <a href="{{URL('/')}}/logout"><button type="button"  class="button_paid" onclick=""><i class="zmdi zmdi-forward"></i>  &nbsp; &nbsp; Logout</button></a> <a href="{{URL('/')}}/change_password" ><button type="button" name="next" class="button_paid"><i class="zmdi zmdi-edit"></i> &nbsp; &nbsp;Change Password</button></a> </span></h3>
            
        
            <div class="container">
                @if(session('error')) 
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif
                @if(session('success')) 
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <form  action="{{route('admin_send_email')}}" method="POST">
                                @csrf()
                                <div class="form-group">
                                    <p>Mail Status: {{$event_type}}</p>
                                    <p>Mail Date: {{$event_occured}}</p>
                                </div>
                                <div class="form-group">
                                    <label>Email 
                                        <span class="label_text {{$user->verified ? 'success':'danger'}}">{{$user->verified ? 'verified':'not verified'}}</span>
                                    </label>
                                    <input type="text" value="{{$user->email}}" name="email" class="form-control">
                                    <input type="hidden" value="{{$user->id}}" name="user" >
                                </div>

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="{{$user->firstname}} {{$user->lastname}}" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" value="Can we transfer your {{$user->asset}} to your wallet?" name="subject" class="form-control">
                                </div>
                                <div class="form-group mail-box">
                                    <label>Mail Body</label>
                                    <textarea style="display:none" name="body" id="editor_text"></textarea>
                                    <input type="hidden" value="{{$user->id}}" name="table_id"/>
                                    <div id="editor">
                                        {!! $html !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 pull-right pd0">
                                    <input type="button" class="btn btn-primary btn-block" value="Send" onclick="getContents()"/>
                                </div>
                            </form>
            </div>

</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
  var quill = new Quill('#editor', {
      theme:'snow',
      formats:'all'
    });
    function getContents() {
        var delta =$('.ql-editor').html();
        $('#editor_text').val(delta);
        setTimeout(function(){
            $('form').submit()
        }, 0)
    }
</script>
</body>

</html>
