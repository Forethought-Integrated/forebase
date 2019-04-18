<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {
  margin: 0;
  padding: 0;
  background-image:url('http://localhost:8000/img/Background.jpg');
  background-repeat: no-repeat;
  background-size:1366px 725px;
}

@media only screen and (max-width: 600px) { 
  body {
    background-color: lightblue !important;
  }
}
/*.form-control{
    width:85%;
}
#sign .container #login-row #login-column #login-box {
  margin-top: 20px;
  max-width: 600px;
  height: 500px;
}
#sign .container #login-row #login-column #login-box #login-form {
  padding: 50px;

}
#sign .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}


.form{
	padding-left:30px !important;

}
*/
#btn-color{

  background-image: linear-gradient(90deg, #f28242, #3BABB8);
  padding:10px;
}
    </style>

</head>
<body>
	<div class="container">
<div class="row">
	<div class="col-sm-5">
		<!-- hi -->
	</div>
                            

	<div class="col-sm-6">
		<div class="container-fluid">
			<div class="row" style="    margin-top: 25px;">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-10">
					<b><h2>Almost there...</h2></b>
				</div>
			</div>
			<div class="row" style="margin-top: 14px;margin-left: -75px;">
				<div class="col-sm-12">
		<h3 class="text-center">Finish creating your TechEela account</h3>
					
				</div>
			</div>
		</div>
   <!-- <bold><center><h2>Almost there...</h2></center></bold>    -->
   <br>

		<!-- <h3 class="text-center">Finish creating your TechEela account</h3> -->
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-10"  style="padding-top: 20px;">
							<form class="form" action="" method="post">
                            

                            <div class="form-group">
                               
                                <input type="varchar" name="email" id="email"  placeholder="your@email.address"class="form-control">
                            </div>

                            <div class="form-group">
                                
                                <input type="varchar" name="password" id="password" placeholder="Your Password" class="form-control">
                            </div>

                            
                              <!-- <div style="padding:30px; margin-top: -14px">  By creating an account, I accept TechEela’s<br>
                                 &nbsp; &nbsp;  <u>Terms of Service</u> and <u>Privacy Policy</u></div> -->
                                 <div class="form-group">
                                <label for="remember-me" class="text"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                
                            </div>
                               
                                <br>
                               <center><input type="submit" name="submit" class="btn btn-info btn-md" id="btn-color" value="Login" style="margin-left: -280px; margin-top: -25px;     width: 140px"></center>
                            </div>
                            
                        </form>

				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<br>
		</div>
                        <!-- You’ll receive an email from TechEela to verify your account.<br>
                         &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; Verify to continue creating your account. -->
	</div>
	<div class="col-sm-2">
		<!-- hi -->
	</div>
</div>
</div>
</body>
</html>