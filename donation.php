

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
<title> Donation Form | Zero Waste</title>
      <link rel='icon' href='images/d.png'/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background:radial-gradient(circle, rgba(211,245,230,1) 30%, rgba(184,227,205,1) 63%, rgba(176,224,203,1) 94%);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: radial-gradient(circle, rgba(88,196,148,1) 23%, rgba(159,224,194,1) 88%, rgba(185,227,196,1) 100%);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9fe0c2;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: radial-gradient(circle, rgba(88,196,148,1) 23%, rgba(159,224,194,1) 88%, rgba(185,227,196,1) 100%);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: radial-gradient(circle, rgba(88,196,148,1) 23%, rgba(159,224,194,1) 88%, rgba(185,227,196,1) 100%);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}


      
      </style>
   </head>
<body>
    <?php

    $servername = "localhost"; 
		$username = "root"; 
		$pass = "";
		$dbname = "zero_waste"; 
		// Create connection 
		$db = mysqli_connect($servername, $username, $pass, $dbname); // Using database connection file here
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
    

if(isset($_POST['submit']))
{	
  
  $name =  $_POST['name'];
    
  $email =  $_POST['email'];
  $type_of_food =  $_POST['type_of_food'];
  $date_of_cooking = $_POST['date_of_cooking'];
  $time_of_cooking = $_POST['time_of_cooking'];
  $quantity =  $_POST['quantity'];
  $location =  $_POST['location'];

     $query = "INSERT INTO donation (name,email, type_of_food,date_of_cooking,time_of_cooking,quantity,location) 
  			  VALUES('$name','$email', '$type_of_food','$date_of_cooking','$time_of_cooking' ,'$quantity','$location')";
    
  	mysqli_query($db, $query);
  
}

mysqli_close($db); // Close connection
?>
  <div class="container">
    <div class="title">Donation Form</div>
    <div class="content">
      <form method="POST" action="donation.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Type of Food</span>
            <input type="text" name="type_of_food" placeholder="Enter type of food" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Cooking</span>
            <input type="text" name="date_of_cooking" placeholder="Enter date of cooking" required>
          </div>
          <div class="input-box">
            <span class="details">Time of Cooking</span>
            <input type="text" name="time_of_cooking" placeholder="Enter time of cooking" required>
          </div>
          <div class="input-box">
            <span class="details">Quantity</span>
            <input type="text" name ="quantity" placeholder="Enter quntity of food" required>
          </div>
            
            <div class="input-box">
            <span class="details">Location</span>
            <input type="text" name="location" placeholder="Enter location" required>
          </div>
        </div>
          
        <div class="button">
          <input type="submit" name ="submit" value="DONATE NOW">
        </div>
      </form>
    </div>
  </div>
   
</body>
</html>
