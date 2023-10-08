<?php
session_start();

// initializing variables
$prefix = "";
$firstname = "";
$lastname = "";
$streetAddress = "";
$streetAddresslinetwo = "";
$city ="";
$state = "";
$zipcode = "";
$number = "";
$email    = "";
$password ="";
$d_email =" ";

$errors = array(); 

// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'zero_waste');
		$servername = "localhost"; 
		$username = "root"; 
		$pass = "";
		$dbname = "zero_waste"; 
		// Create connection 
		$db = mysqli_connect($servername, $username, $pass, $dbname); 


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $streetAddress = mysqli_real_escape_string($db, $_POST['streetAddress']);
    $streetAddresslinetwo = mysqli_real_escape_string($db, $_POST['streetAddresslinetwo']);

  $state = mysqli_real_escape_string($db, $_POST['state']);
  $zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
$number = mysqli_real_escape_string($db, $_POST['number']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "firstname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin WHERE email='$email' ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  //encrypt the password before saving in the database

  	$query = "INSERT INTO admin (firstname, lastname,streetAddress,	streetAddresslinetwo,state,zipcode,number,email,password) 
  			  VALUES('$firstname', '$lastname','$streetAddress',	'$streetAddresslinetwo','$state','$zipcode','$number',	'$email','$password')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	//header('location: donar_login.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = ($password);
  	$query = "SELECT * FROM admin WHERE email='$email'AND password ='$password' ";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: admin_dashboard.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}



?>