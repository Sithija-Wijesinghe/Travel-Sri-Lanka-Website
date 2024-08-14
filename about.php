<?php

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}


?>

<?php 

if($user_id==1){
    $show="Log Out";
}

else{
    $show="Log In";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
</head>
<body class="aboutbody">

<!-- Header -->

    <div id="menu-bar" class="fas fa-bars"></div>

    

    <div class="content" id="home"> 
        <nav>
            <a href="#" class="logo">Travel SriLanka🌴</a>
           <!--img src="./files/logo.png" class="logo" alt="Logo" title="FirstFlight Travels"-->
           
            
            
            <ul class="navbar">
                <li>
                    <a href="#home">Home</a>
                    <a href="#locations">Destination</a>
                    <a href="#package">Hotels</a>
                    <a href="./about.php">About Us</a>
                    <a href="./contact.php">Contact Us</a>

                    
                   <?php 
                   
                        if($user_id==1){

                   
                            echo "<a href=logout.php  class=btnLogin-popup>$show</a>";

                        }

                    else{

                
                            echo "<a href=login.php  class=btnLogin-popup>$show</a>";
                         
                    }
                ?>
                            <!-- <a href="login.php"  class="btnLogin-popup"><?php // echo $show; ?></a>
                       


                    

                    <a href="login.php"  class="btnLogin-popup">Login</a> -->
                    
                    
                </li>
            </ul>
            
        </nav>
        
        
    <section class="about">
           <div class="main">
            <img src="./files/about.jpg" alt="My Photo">
            <div class="abt-text">
                <h1>About Us</h1>
                <p>Visitsrilanka.Live Is Your Go-To Resource For Planning A Trip To Sri Lanka In 2023 Which Is A Product Of A Group Of Undergraduate Students In NSBM Green University Under The Web Application Development Module.
                    Our Website Features A Wide Range Of Information On The Top Attractions, Adventure Activities, Upcoming Events, A Blog Of Popular Tourist Destinations, Whether You're Looking To Relax On Beautiful Beaches, Explore Ancient Temples, Or Discover The Local Cuisine, Visitsrilanka.Live Has You Covered. We Can't Wait To Help You Plan An Unforgettable Trip To Sri Lanka.</p>


                
            </div>
            

           </div>
           

    


    <section class="footer">
        <div class="foot">
            <div class="footer-content">
                
                <div class="footlinks">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="./register.php">Register</a></li>
                        <li><a href="./about.php">About Us</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                    </ul>
                </div>
    
                <div class="footlinks">
                    <h4>contact us</h4>
                    <ul>
                        <li><a href="#"><i class="fas fa-phone"></i>+94-705676766</a></li>
                        <li><a href="#">sithijawijesinghe1999@gmail.com</a></li>
                        <li><a href="#">colombo,srilanka</a></li>
                    </ul>
                </div>
    
                
    
                <div class="footlinks">
                    <h4>Follow Us</h4>
                    <div class="social">
                        <a href="https://www.facebook.com/mohd.rahil.blogger" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/mohdrahil101" target="_blank"><i class='bx bxl-instagram' ></i></a>
                        <a href="https://www.twitter.com/mohdrahil101" target="_blank"><i class='bx bxl-twitter' ></i></a>
                        <a href="https://www.linkedin.com/in/mohdrahil101" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                        <a href="https://www.youtube.com/techdollarz" target="_blank"><i class='bx bxl-youtube' ></i></a>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    
        <div class="end">
            <p>All Rights Reserved.</p>
        </div>
    </section>
</body>
</html>
