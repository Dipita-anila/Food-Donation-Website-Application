<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Message | Zero Waste</title>
    <link rel='icon' href='images/d.png'/>
    <style>
    *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif;
}

body{
	height: 100vh;
	width: 100%;
}

.container{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.container:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("images/t2.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 920px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("images/t2.jpg") no-repeat ;
	background-size: cover;
    width: 100%;
	height: 100%;
    
}

.right{
	padding: 25px 40px;
}

form h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

form h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #96C7C1;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field :hover{
	background-color: rgba(0, 0, 0, 0.1);
}

form textarea{
	min-height: 150px;
}

.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #96C7C1;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #DFF3E3;
    color : #96C7C1;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 200px;
	}
}
    </style>
    </head>
    <body>
    <div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
                <form class ="contact_form" method="POST" action="msg_to_donar.php">
                    <?php include('errors.php'); ?>
				<h2>Message to Donar</h2>
				<input type="text" class="field" name="name" placeholder="Your Name" required>
				<input type="email"class="field" name="email" placeholder="Your Email" required>
                    <input type="email"class="field" name="d_email" placeholder="Donar's Email" required>
				
				<textarea placeholder="Message" class="field" name="text" required></textarea>
				<button class="btn" name="message">Send</button>
                    </form>
			</div>
		</div>
	</div>
    <script src ="https://smtpjs.com/v3/smtp.js"></script>
     <script>
    const form = document.querySelector('.contact_form'),
          name = document.querySelector
    
        
        </script>   
    </body>
</html>