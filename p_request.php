<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
<title> Donation Request | Zero Waste</title>
      <link rel='icon' href='images/d.png'/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <style>
      
      @import url('https://fonts.googleapis.com/css?family=Roboto');

*{
  margin: 0;
  padding: 0;
}

body{
  background: #e3eee2;
  background-size: cover;
  height: 800px;
  font-family: 'Roboto';
}


.container{
   
  max-width: 1060px;
  height: 600px;
  background: #C1E1C1;
  margin: 130px auto;
  box-shadow: 0 0 20px rgba(72,98,85, 0.6);
  box-sizing: border-box;
  padding: 40px;
}
          th{
              margin-top: 50px;
          }
          
                  th, td {
                      
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
}

p{
  text-align: center;
  letter-spacing: 1px;  
  font-size: 45px;
  margin-bottom: 0px;
  color: #486255;
}



::-webkit-input-placeholder{
  font-family: 'roboto';
}




      </style>
      
    </head>
    <body>
    <div class="container">
    <p>DONATION REQUEST</p>
        <br>
        <br>
        <br>
         <?php 
		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "zero_waste"; 
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if (!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 
		$sql = "SELECT *FROM donation"; 
		$result = mysqli_query($conn, $sql); 
		echo "<table border='3' BORDERCOLOR=#8FBC8B>"; 
       
		echo "<tr>"; 
		echo "<th style= color:#486255>Donar's Name</th><th style= color:#486255>Email</th><th style= color:#486255>Type of Food</th><th style= color:#486255>Date of Cooking</th><th style= color:#486255>Time of Cooking</th><th style= color:#486255>Quantity</th>
        <th style= color:#486255>Location</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				 echo "<td>" . $row['name'] . "</td>"; 
				 echo "<td>" . $row['email'] . "</td>"; 
                  echo "<td>" . $row['type_of_food'] . "</td>"; 
				 echo "<td>" . $row['date_of_cooking'] . "</td>"; 
                  echo "<td>" . $row['time_of_cooking'] . "</td>"; 
				 echo "<td>" . $row['quantity'] . "</td>";  
				 
                  echo "<td>" . $row['location'] . "</td>"; 
				 
                 echo "</tr>"; 
			 } 
		} 
		else 
		{ 
			echo "0 results"; 
		} 
		echo "</table>"; 
		mysqli_close($conn); 
	?>
    
        </div>



    
    
    </body>
</html>