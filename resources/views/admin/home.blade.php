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


      <div class="table_class">
                <br>
            <h3 style="float-left">Token Creation Details 

            <br>

            <span style="float-right"> <a href="{{URL('/')}}/logout"><button type="button"  class="button_paid" onclick=""><i class="zmdi zmdi-forward"></i>  &nbsp; &nbsp; Logout</button></a> <a href="{{URL('/')}}/change_password" ><button type="button" name="next" class="button_paid"><i class="zmdi zmdi-edit"></i> &nbsp; &nbsp;Change Password</button></a> </span></h3>
            
        
            <div class="container">
            <div class="content-otr">
                <div class="inner">
                    <br>
        <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
            <table>
           <thead>     
         <tr>
            <th>#</th>
            <th>Full Name </th>
            <th>Email </th>
            <th>Phone</th>
            <th>Token Name</th>
            <th>Type of Token</th>
            <th>Payment Transaction HASH</th>
            <th>Payment wallet Address</th>
            <th>Email Verified?</th>
            <th>Date</th>
            <th>Link</th>
            <th>Action</th>
         </tr>
        </thead>
         <tbody>
            @foreach($data as $key=> $d)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$d->firstname}} {{$d->last_name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->phonenumber}}</td>
                <td>{{$d->cname}}</td>
                <td>{{$d->asset}}</td>
                <td><?php echo wordwrap($d->trans_hash, 25, '<br>',true);?></td>
                <td><?php echo wordwrap($d->address, 25, '<br>',true);?></td>
                <td>{{$d->email_verified?'Yes':'No'}}</td>
                <td>{{$d->created_at}}</td>
                <td>
                    @if($d->cname!=NULL)
                    <a href="https://assetplatform.net/Payment_Details/{{$d->id}}" target="_blank">Click Here</a>
                    @else
                    Not Yet Created
                    @endif
                </td>
                <td>
                    <a href="{{route('admin_mail_page',$d->id )}}" target="_blank">Send Mail</a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="10">{{ $data->links() }}</td>
            </tr>
         </tbody>
        </table>


    </div>
</div>
</div>
</div>
</body>

</html>
