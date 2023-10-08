<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US | Zero Waste</title>
    <link rel='icon' href='images/d.png'/>
   <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1;
}
.about{
    background: url(images/about.jpg) no-repeat left;
    background-size: 55%;
    background-color: #fdfdfd;
    overflow: hidden;
    padding: 100px 0;
}
.inner-section{
    width: 55%;
    float: right;
    background-color: #C1E1C1;
    padding: 140px;
    box-shadow: 13px 12px 8px rgba(0,0,0,0.3);
}
.inner-section h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
    color: #2F4C39;
}
.text{
    font-size: 18px;
    color: #2F4C39;
    line-height: 40px;
    text-align: justify;
    margin-bottom: 40px;
}
.contact button{
    font-size: 22px;
    text-align: center;
    letter-spacing: 2px;
    border: none;
    border-radius: 20px;
    padding: 8px;
    width: 200px;
    background-color: #8FBC8B;
    color: white;
    cursor: pointer;
}
.contact button:hover{
    transition: 1s;
    background-color: #ecf5f5;
    color: #8FBC8B;
}
@media screen and (max-width:1200px){
    .inner-section{
        padding: 80px;
    }
}
@media screen and (max-width:1000px){
    .about{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-section{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about{
        padding: 0;
    }
    .inner-section{
        padding: 60px;
    }
    .contact button{
        font-size: 19px;
        padding: 5px;
        width: 160px;
    }
}
    
    </style>
</head>
<body>
    <div class="about">
        <div class="inner-section">
            <h1>About Us</h1>
            <p class="text">
                This website is created to help the poor needy people.<br>
                In Bangladesh nearly about 1000 of people sleep without food who are really unfortunate to get food and cause disease like Starvation, Malnutrition etc.<br>
                Our main aim is to stop hunger and provide them food.
        
            </p>
            <div class="contact">
                  <button onclick="window.location.href='contact.php';">Contact Us</button>
            </div>
        </div>
    </div>
</body>
</html>