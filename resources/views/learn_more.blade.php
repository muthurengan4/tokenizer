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
    background-color: #5e7997;
    color: #fff;
    padding: 5px 5px;
    /*border: solid 1px #064c06;*/
    cursor: pointer;
}
.button_paid:hover
{
    background-color: #5e7997;
    color: #fff;
    padding: 5px 5px;
    /*border: solid 1px #077307;*/
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
    <div class="wrapper">
           <section>
            <p style="font-weight: bold;font-size: 20px;color: black;">How to get and set up a Custom ERC-20 tokens supported Ethereum Wallet</p>
            <p style="color: black">Learn how to get and set up an Ethereum (ETHER) Wallet. </p><br><br>
              <p style="color:red"><span style="font-weight: bold">IMPORTANT NOTE:</span> Please DO NOT USE Normal Exchange based wallets as they do not offer ERC-20 compatibility. Please create a wallet on an ERC-20 token supported platform like MyEtherWallet or MetaMask so you can view, accept and send the tokens from it. 
              </p><br>
              <p style="font-weight: bold;font-size: 20px;color: black;">Method 1: MYEtherWallet (MEW) Method (Supported Browsers Chrome, Firefox, Safari)</p><br>
              <p style="font-weight: bold;color: black;">Here are the Steps to get your Ether Wallet address on MyEtherWallet (MEW)</p><br>
              <p style="color: black;">For this quick tutorial, we use <a href="https://myetherwallet.com/" target="_blank">myetherwallet.com</a><span style="font-weight: bold">(MEW)</span> and MetaMask as a reference to show how you can get an Ethereum Wallet address easily. It is NOT mandatory that you use these particular services, You can use any Etherium Wallet that supports the addition of custom ERC-20 tokens as per your convenience.</p><br>
              <p style="color: black;"><span style="font-weight: bold">Step 1:</span> If you haven't created an Ether wallet yet, go to an Ether Wallet creation site like <a href="https://myetherwallet.com/" target="_blank">https://myetherwallet.com</a> </p><br>
              <p style="color: black;"><span style="font-weight: bold">Step 2:</span> Follow the instructions shown on MyEtherWallet.com to create your wallet. Save the JSON Private Key file and save your Private key securely. Do NOT Share it with anyone.</p><br>
              <p style="color: black;"><span style="font-weight: bold">Step 3:</span> Choose a way to access your wallet, using either on the <span style="font-weight: bold">MEW</span> interface directly or Install <span style="font-weight: bold">Meta Mask on the Browser of your choice to access it</span>. Follow the instruction present there and connect to Meta Mask.</p><br>
              <p style="color: black;"> <span style="font-weight: bold">Step 4: If you want to view the wallet on the browser itself, use KEystore or Json file, Nuemonic phrase or Private key and</span> Click Unlock. View your wallet account information on the MyEtherWallet Website this should display your Ether Address.
              </p><br>
              <p style="color: black;"><span style="font-weight: bold">Step 5:</span> Copy the address and paste it in the Ethereum Wallet address input field in the previous page.</p><br>
              <p style="color: black;font-weight: bold;">Next Steps:</p>
              <p style="color:black; ">Follow this to View and add Custom ERC-20 Tokens to your wallet. Read more on Adding Custom ERC-20 Token <a href="https://kb.myetherwallet.com/tokens/adding-custom-ethereum-tokens.html" style="text-decoration: underline;">here</a> </p><br><br><br>
              <p style="font-weight: bold;font-size: 20px;color:black !important;">Method 2: METAMASK METHOD (supported by Chrome, Firefox, Brave)</p><br>
              <p style="font-weight: bold;color:black;">Alternatively, If you choose to use only META MASK, they have a great tutorial on How to import and send custom ERC-20 accounts to other accounts.</p><br>
              <p style="color: black;"><span style="font-weight: bold">Step 1:</span> Download the Metamask Extension/Addon on your browser (FF, Chrome or Brave)</p><br>
              <p style="color: black;"><span style="font-weight: bold">Step 2:</span> Create New Password, click on Create, after accepting the Terms and Conditions, the wallet is created.</p><br>
              <p style="color: black;"><span style="font-weight: bold">Step 3:</span> By default, your wallet is created on the MainNet. Make sure the address is generated in the Main net. </p><br>
              <p style="color: black;"><span style="font-weight: bold">Step 4:</span> Click on the Menu icon, and then choose Details, to see your Wallet Address and other details.</p><br>
              <p style="color:black;"><span style="font-weight: bold">Step 5:</span> Copy the Wallet address and Paste it in Your Ether Wallet address field on the previous page of the Tokenizer. </p><br>
               <p style="color: black;font-weight: bold;">Next Steps:</p>
              <p><span style="font-weight: bold;color:black;">Importing an Account (New UI):</span> <a href="https://metamask.zendesk.com/hc/en-us/articles/360015489331-Importing-an-Account-New-UI-" target="_blank" class="button_paid" style="text-decoration: underline;">Learn How</a></p><br>
              <p><span style="font-weight: bold;color:black;">How to add and manage Custom ERC-20 Tokens to the wallet? (New UI):</span> <a href="https://metamask.zendesk.com/hc/en-us/articles/360015489031-Adding-and-Managing-Tokens-ERC20-In-The-New-UI" target="_blank" class="button_paid" style="text-decoration: underline;">Learn How</a></p>
           </section><br><br><br>
    </div>

    <script src="{{ URL::asset('public/asset/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ URL::asset('public/asset/js/jquery.steps.js')}}"></script>
    <script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.js')}}"></script>
    <script src="{{ URL::asset('public/asset/vendor/date-picker/js/datepicker.en.js')}}"></script>
    <script src="{{ URL::asset('public/asset/js/main.js')}}"></script>
      
</body>
</html>