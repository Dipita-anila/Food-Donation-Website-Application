<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard | Zero waste</title>
    <link rel='icon' href='images/d.png'/>
    
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">Donar's Dashboard</div>
      <ul>
        <li><a href="#" class="active">HOME</a>
         </li>
        <li><a href="donations.php">MY DONATIONS</a></li>
        <li><a href="donation.php">DONATE NOW</a></li>
		<li><a href="msg.php">MESSAGE FROM ADMIN</a></li>
		<li><a href="index.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="home.php">
          <span class="icon"></span>
          <span class="title">HOME</span></a></li>
        <li><a href="about.php">
          <span class="icon"></span>
          <span class="title">ABOUT US</span>
          </a></li>
        <li><a href="mission.php">
          <span class="icon"></span>
          <span class="title">OUR MISSION</span>
          </a></li>
        <li><a href="contact.php" >
          <span class="icon"></span>
          <span class="title">CONTACT US</span>
          </a></li>
      
    </ul>
  </div>
  
  <div class="main_container">
   
  </div>
</div>
	
</body>
</html>