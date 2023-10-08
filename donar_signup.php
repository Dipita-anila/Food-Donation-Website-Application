<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration | Zero Waste</title>
    <link rel='icon' href='images/d.png'/>
	<style type="text/css">
		*
		{
			margin:0;
			font-family: sans-serif; 
		}
		.background
		{	width: 1566px;
    		height:750px;
			background-image:url('images/back.jpg');
			background-size: cover;
			z-index: -1;
			filter: blur(3px);
			position: absolute;
		}
		.form
		{
			height: 619px;
			width: 465px;
			background: rgba(187,187,187,0.7);
			position: relative;
			top: 25px;
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
		.txt1
		{
			width: 50px;
			float: left;
			margin-left: 40px;
			font-size: 14px;
			text-align: center;
			
		}
		.txt2
		{
			width: 80px;
			float: left;
			margin-left: 5px;
			font-size: 14px;
			text-align: center;
		
		}
		.txt3
		{
			width: 120px;
			float: left;
			margin-left: 5px;
			font-size: 14px;
			text-align: center;
		
		}
		.txt4
		{
			margin-left: 51px;
			width: 250px;
			text-align: center;
			font-size: 14px;
		}
		.txt5
		{
			margin-left: 146px;
			width: 250px;
			text-align: center;
			font-size: 14px;
		}
		.txt6
		{
			margin-left: 146px;
			width: 100px;
			text-align: center;
			font-size: 14px;
			float: left;
		}
		.txt7
		{
			margin-left: 14px;
			width: 100px;
			text-align: center;
			font-size: 14px;
			float: left;
		}
		.txt8
		{
			width: 200px;
			margin-left: 35px;
			font-size: 14px;
			text-align: center;
			
		}
		.txt9
		{
			margin-left: 35px;
			width: 200px;
			text-align: center;
			font-size: 14px;
		}
		.Submitbtn
		{
			height: 25px;
			width: 100px;
			border-radius:30px;
			border-style: groove;
			border: 1px groove red;
			border-radius:20px;  
		}
		.cb
		{
			margin-left: 155px;
			float: left;
		}
	</style>
	
</head>
<body >


	<div class="background"></div>
	<div class="form">
		<form method="POST" action="donar_signup.php">
            <?php include('errors.php'); ?>
			<p class="form-p1">Donar Registration Form</p>
			<p class="form-p2">Please fill in the form below</p><br>
			<hr style="width: 400px; color:gray; margin-left: 25px;"><br><br>
			<p class="Name">Full Name <span style="color: red">*</span></p>
			<input type="text" class="txt1" name="prefix" value="<?php echo $prefix; ?>"placeholder="prefix">
			<input type="text" class="txt2" name="firstname" value="<?php echo $firstname; ?>"placeholder="firstname"> 
			<input type="text" class="txt3" name="lastname" value="<?php echo $lastname; ?>"placeholder="lastname"><br><br><br><br>
			<p class="Name">Address <span style="color: red">*</span></p>
			<input type="text" class="txt4" name="streetAddress" value="<?php echo $streetAddress; ?>"placeholder="street address"><br><br>
			<input type="text" class="txt5" name="streetAddresslinetwo" value="<?php echo $streetAddresslinetwo; ?>"placeholder="street address line two"><br><br>
			<input type="text" class="txt6" 
                   name="city" value="<?php echo $city; ?>"placeholder="city">
			<input type="text" class="txt7" name="state" value="<?php echo $state; ?>"placeholder="state"><br><br>
			<input type="Number" class="txt6" name="zipcode" value="<?php echo $zipcode; ?>"placeholder="zipcode"><br><br><br><br>
			<p class="Name">Mobile NO.<span style="color: red">*</span></p>
			<input type="Number" class="txt8" name="number" value="<?php echo $number; ?>"placeholder="+000000000"><br><br><br>
			<p class="Name">Email Add.<span style="color: red">*</span></p>
			<input type="email" class="txt9" name="email" value="<?php echo $email; ?>"placeholder="example@gmail.com"><br><br>
			<p class="Name">Password<span style="color: red">*&nbsp;</span></p>
			<input type="Password" class="txt9" name="password" value="<?php echo $password; ?>"><br><br>
			<input type="Checkbox" class="cb"><p class="Name1" style="color: blue">Terms&Conditions</p><br><br>
			<center>
				<button type="Submit" class="Submitbtn" name="reg_user">Submit</button>
				<a href="donar_login.php"><input type="button" Class="Submitbtn" value="LOGIN"></a>
			</center>

		</form>
	</div>
	
</body>
</html>


