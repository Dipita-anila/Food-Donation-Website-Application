<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPPORTS AND DONARS | Zero Waste</title>
 <link rel='icon' href='images/d.png'/>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <style>
    :root{
    --pink:#1A4314;

}

*{
    margin:0; padding:0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
        }
    .heading{
    text-align: center;
    font-size: 4rem;
    color:#333;
    padding:1rem;
    margin:2rem 0;
    background-color:#B1D8B7;
        /*rgba(255, 51, 153,.05)*/

}
}
        

        .heading span{
    color:var(--pink);;
}


.about .row{
    display: flex;
    align-items: center;
    gap:2rem;
    flex-wrap: wrap;
    padding:2rem 0;
    padding-bottom: 3rem;
}

.about .row .video-container{
    flex:1 1 40rem;
    position: relative;
}

.about .row .video-container video{
    width:100%;
    border:1.5rem solid #fff;
    border-radius: .5rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    height: 100%;
    object-fit: cover;
}

.about .row .video-container h3{
    position: absolute;
    top:50%; transform: translateY(-50%);
    font-size: 3rem;
    background:#fff;
    width:100%;
    padding:1rem 2rem;
    text-align: center;
    mix-blend-mode: screen;
}

.about .row .content{
    flex:1 1 40rem;
}

.about .row .content h3{
    font-size: 3rem;
    color:#333;
}

.about .row .content p{
    font-size: 1.5rem;
    color:#999;
    padding:.5rem 0;
    padding-top: 1rem;
    line-height: 1.5;
}


.review .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.review .box-container .box{
    flex:1 1 30rem;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border-radius: .5rem;
    padding:3rem 2rem;
    position: relative;
    border:.1rem solid rgba(0,0,0,.1);
}

.review .box-container .box .fa-quote-right{
    position: absolute;
    bottom:3rem; right:3rem;
    font-size: 6rem;
    color:#eee;
}

.review .box-container .box .stars i{
    color:var(--pink);
    font-size: 2rem;
}

.review .box-container .box p{
    color:#999;
    font-size: 1.5rem;
    line-height: 1.5;
    padding-top: 2rem;
}

.review .box-container .box .user{
    display: flex;
    align-items: center;
    padding-top: 2rem;
}

.review .box-container .box .user img{
    height:6rem;
    width:6rem;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 1rem;
}

.review .box-container .box .user h3{
    font-size: 2rem;
    color:#333;
}

.review .box-container .box .user span{
    font-size: 1.5rem;
    color:#999;
}

.contact .row{
    display: flex;
    flex-wrap: wrap-reverse;
    gap:1.5rem;
    align-items: center;
}




/* media queries  */
@media (max-width:991px){
    
    html{
        font-size: 55%;
    }

    header{
        padding:2rem;
    }

    section{
        padding:2rem;
    }

    .home{
        background-position: left;
    }

}

@media (max-width:768px){

    header .fa-bars{
        display: block;
    }

    header .navbar{
        position:absolute;
        top:100%; left:0; right:0;
        background:#eee;
        border-top: .1rem solid rgba(0,0,0,.1);
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header #toggler:checked ~ .navbar{
        clip-path:polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }

    header .navbar a{
        margin:1.5rem;
        padding:1.5rem;
        background:#fff;
        border:.1rem solid rgba(0,0,0,.1);
        display: block;
    }

    .home .content h3{
        font-size: 5rem;
    }

    .home .content span{
        font-size: 2.5rem;
    }

    .icons-container .icons h3{
        font-size: 2rem;
    }
    
    .icons-container .icons span{
        font-size: 1.7rem;
    }
    
}

@media (max-width:450px){
    
    html{
        font-size: 50%;
    }

    .heading{
        font-size: 3rem;
    }

}
    
    </style>

</head>
<body>

<!-- header section starts  -->

<header>

  

</header>

<!-- header section ends -->


<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> OUR INCREDIBLE FAMILY OF SUPPORTERS AND DONORS</h1>

    <div class="row">

        <div class="video-container">
            <video src="images/video.mp4" loop autoplay muted></video>
            <h3>Supporters and donors</h3>

        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>We adore and value the contribution of all of our food donors, financial donors and amazing supporters. On behalf of the entire team at ZERO WASTE and the people we support – THANK YOU for supporting us purpose to Nourish Our Nation through food rescue, education, engagement and innovation
</p>
            <p>If you want to make a difference and help us work towards zero food waste, please contact us to get your company or business name onto this page of our food rescue heroes.
</p>
           
            
        </div>

    </div>

</section>

<!-- about section ends -->







<section class="review" id="review">

<h1 class="heading"> SUPPORTS </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Basmah Foundation is a nonprofit and nonpolitical organization dedicated to helping the poor and disadvantaged people to ensure a better life for them. Basmah Foundation has a dream that one day all these helpless people suffering from poverty will establish themselves as prosperous communities. Basmah foundation is working continuously with your generous support to achieve this goal.
Bangladesh still has millions of people living with dismal poverty despite its progress. Wherever there are people with distress and difficulty, Basmah Foundation is there to provide aid and assistance to them to alleviate their sufferings.
.</p>
        <p><a href="  https://basmah-bd.org">VISIT BASMAH FOUNDATION</a></p>
        <div class="user">
            <img src="images/basmah.jpg" alt="">
            <div class="user-info">
                <h3>BASMAH FOUNDATION</h3>
               
            </div>
        </div>
     
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>We serve the underprivileged community with cooked food, dry essential edible items and with an opportunity to sit down and eat at our local eateries for free and for exchange of 1 taka.</p><p> Every day, we distribute about 10000 to 150000 boxes of foods and we have already distributed about 10 million boxes of foods.
</p>
        <p><a href=" https://onetakameal.org">VISIT ak taakar ahar</a></p>
        <div class="user">
            <img src="images/bidha.jpg" alt="">
            <div class="user-info">
                <h3>ak taakar ahar</h3>

               
            </div>
        </div>
        
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Bidyanondo is always with you at any crisis in Bangladesh to help and support you.
</p>
        <p><a href="http://bidyanondo.org/">VISIT BIDYANONDO</a></p>
        <div class="user">
            <img src="images/one.jpg" alt="">
            <div class="user-info">
                <h3>BIDYANONDO</h3>
              
            </div>
        </div>
     
    </div>

</div>
    
</section>

<!-- review section ends -->












    
</body>
</html>