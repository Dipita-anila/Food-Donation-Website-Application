<?php
session_start();

// initializing variables
$prefix = "";
$firstname = "";
$lastname = "";
$streetAddress = "";
$streetAddresslinetwo = "";
$city = "";
$state = "";
$zipcode = "";
$number = "";
$email    = "";
$password ="";
$name ="";
$phone="";
$text=" ";
$succes="";
$d_email =" ";
$type_of_food=" ";
$date_of_cooking=" ";
$quantity=" ";
$location=" ";

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
  $prefix = mysqli_real_escape_string($db, $_POST['prefix']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $streetAddress = mysqli_real_escape_string($db, $_POST['streetAddress']);
    $streetAddresslinetwo = mysqli_real_escape_string($db, $_POST['streetAddresslinetwo']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
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
  $user_check_query = "SELECT * FROM donar WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = ($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO donar (prefix,firstname, lastname	,streetAddress,	streetAddresslinetwo,city,state,zipcode,number,	email,password) 
  			  VALUES('$prefix','$firstname', '$lastname','$streetAddress',	'$streetAddresslinetwo','$city','$state','$zipcode','$number',	'$email','$password')";
  	mysqli_query($db, $query);
  	/*$_SESSION['email'] = $email;*/
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
  	$query = "SELECT * FROM donar WHERE email='$email'AND password ='$password' ";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
        
  	  $_SESSION['success'] = "You are now logged in";
        echo($_SESSION['success']);
        
  	  header('location: donar_dashboard.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}


if (isset($_POST['contact']))
{
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $text = mysqli_real_escape_string($db, $_POST['text']); 
    
    $query = "INSERT INTO contact (name,email, phone,text) 
  			  VALUES('$name','$email', '$phone','$text')";
  	mysqli_query($db, $query);
  	/*$_SESSION['email'] = $email;*/
  	$_SESSION['success'] = "Thanks for contacting us";
    
}

if (isset($_POST['message']))
{
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $d_email = mysqli_real_escape_string($db, $_POST['d_email']);
  $text = mysqli_real_escape_string($db, $_POST['text']); 
    
    $query = "INSERT INTO message (name,email, d_email,text) 
  			  VALUES('$name','$email', '$d_email','$text')";
  	mysqli_query($db, $query);
  	$_SESSION['d_email'] = $d_email;
  	$_SESSION['success'] = "Thanks for contacting us";
    
}


if (isset($_POST['donation']))
{
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $type_of_food = mysqli_real_escape_string($db, $_POST['type_of_food']);
  $date_of_cooking = mysqli_real_escape_string($db, $_POST['date_of_cooking']);
  $time_of_cooking = mysqli_real_escape_string($db, $_POST['time_of_cooking']);
  $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  $location = mysqli_real_escape_string($db, $_POST['location']);

    
    $query = "INSERT INTO donation (name,email, type_of_food,date_of_cooking,time_of_cooking,quantity,location) 
  			  VALUES('$name','$email', '$type_of_food','$date_of_cooking', '$quantity','$location')";
    
  	mysqli_query($db, $query);
     if(!$query)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "Thanks for contacting us";
    
}

?>