<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login|Zero_Waste</title>
	<link rel='icon' href='images/d.png'/>
	<style type="text/css">
		*
		{
			margin:0;
			font-family: sans-serif; 
		}
		.background
		{	width: 1700px;
    		height: 750px;
			background-image:url('images/back.jpg');
			background-size: cover;
			z-index: -1;
			filter: blur(3px);
			position: absolute;
		}
		.form
		{
			height: 300px;
			width: 465px;
			background: rgba(187,187,187,0.7);
			position: relative;
			top: 180px;
			left: 783px;
			left: 465px;
			color: white;
			font-size: 15px;
			font-weight: bold;	
			position: absolute;
		}
		.form-p1
		{	margin-top: 25px;
			color: white;
			font-size: 24px;
			font-weight: bold;
			margin-left: 25px; 
		}
		.form-p2
		{
			color: white;
			font-size: 13px;
			font-weight: bold;
			margin-left: 25px;
		}
		.Name
		{
			margin-left: 25px;
			float: left;
		}
		
		.txt4
		{
			margin-left: 51px;
			width: 180px;
			text-align: center;
			font-size: 14px;
			border: 1px groove red;
			border-radius:4px; 
		}
		
		.Submitbtn
		{
			height: 25px;
			width: 100px;
			border-radius:30px;
			border-style: groove;
			border: 1px groove red;
			border-radius:10px;  
		}
		.cb
		{
			margin-left: 155px;
			float: left;

		}
		.Name1
		{
			margin-left: 25px;
		}
	</style>
	<script type="text/javascript">
		function Result()
		{
			var EMAIL = document.getElementById('email').value;
			var PASSWORD = document.getElementById('password').value;
			
			if (EMAIL=='')
			{
				alert("Email Can't be blank" );
				document.getElementById('email').focus();
				return false;
			}
			if(PASSWORD=='')
			{
				alert('Enter your password');
				document.getElementById('password').focus();
				return false;
			}

		}
	</script>
</head>
<body >
	<div class="background"></div>
	<div class="form">
		<form method="POST" action="donar_login.php">
            	<?php include('errors.php'); ?>
			<p class="form-p1">Donar Login Form</p>
			<p class="form-p2">Please fill in the form below</p><br>
			<hr style="width: 400px; color:gray; margin-left: 25px;"><br><br>
			<p class="Name">Email<span style="color: red">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
			<input type="text" class="txt4" name="email" placeholder="example@mail.com" ><br><br>
			<p class="Name">Password<span style="color: red">*</span></p>
			<input type="text" class="txt4" name="password"placeholder="Your Password" ><br><br>
			
			<input type="Checkbox" class="cb" required="Checkbox"><p class="Name1" style="color: blue">Terms&Conditions</p><br><br>
			<center>
                <button type="Submit" class="Submitbtn" name="login_user">Submit</button>
				<a href="donar_signup.php"><input type="button" class="Submitbtn" value="Registration"></a>
			</center>

		</form>
	</div>
	
</body>