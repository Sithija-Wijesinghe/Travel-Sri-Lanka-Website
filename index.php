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
    <title>Travel SriLanka</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
   
</head>
<body>

<!-- Background Video & Header -->

    <div class="banner">
        <video src="./files/background_video1.mp4" type="video/mp4" autoplay muted loop></video>
    
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
                    <a href="#about">About Us</a>
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
        
 
        <div class="title">

            
            <h1>TRAVEL SRI LANKA</h1>
            <p>Discover Sri Lanka's beauty on a budget! Save 10% on our already affordable packages. 🌴🌟</p>
            
            <a href="#package" class="button">Book Now!</a>
            
        </div>
    </div>
    </div>

    
<!-- Services -->

<section class="container">
    <div class="text">
        <h2>Adventure Sport!</h2>
    </div>
    <div class="rowitems">
        <div class="container-box">
        <div class="container-image">
           <img src="./files/adv-1.jpg" alt="Flight Services">
        </div>
            <h4>surfing</h4>
            
            <p></p>
        </div>
    
        <div class="container-box">
        <div class="container-image">
           <img src="./files/adv-2.jpg" alt="Food Services">
        </div>
            <h4>Water Rafting</h4>
            <p></p>
        </div>

        <div class="container-box">
        <div class="container-image">
            <img src="./files/adv-3.jpg" alt="Travel Services">
        </div>
            <h4>Flaying Rawana</h4>
            <p></p>
        </div>

        <div class="container-box">
        <div class="container-image">
            <img src="./files/adv-.jpg.jpg" alt="Hotel Services">
        </div>
            <h4>Air Ballooning</h4>
            <p></p>
        </div>

    </div>

    </div>

</section>

<!-- Locations -->

<section class="locations" id="locations">
    <div class="package-title">
        <h2>Top Destination</h2>
    </div>

    <div class="location-content">
        
        <a href="locations.php#kashmir" target="_blank"><div class="col-content">
            <img src="./files/loc-1.jpg" alt="">
            <h5>Kandy</h5>
            <p>Kandy</p>
        </div></a>

       

        <a href="locations.php#istanbul" target="_blank"><div class="col-content">
            <img src="./files/loc-2.jpg" alt="">
            <h5>ella</h5>
            <p>nine arch</p>
        </div></a>

        <a href="locations.php#paris" target="_blank"><div class="col-content">
            <img src="./files/loc-3.jpg" alt="">
            <h5>Arugam bay</h5>
            <p>Beach</p>
        </div></a>

        <a href="locations.php#bali" target="_blank"><div class="col-content">
            <img src="./files/loc-4.jpg" alt="">
            <h5>Galle</h5>
            <p></p>
        </div></a>

        <a href="locations.php#dubai" target="_blank"><div class="col-content">
            <img src="./files/loc-5.jpg" alt="">
            <h5>Trincomalee</h5>
            <p></p>
        </div></a>

        <a href="locations.php#geneva" target="_blank"><div class="col-content">
            <img src="./files/loc-6.jpg" alt="">
            <h5>Yala national park</h5>
            <p></p>
        </div></a>

        <a href="locations.php#port-blair" target="_blank"><div class="col-content">
            <img src="./files/loc-7.jpg" alt="">
            <h5>seegiriya</h5>
            <p></p>
        </div></a>

        <a href="locations.php#rome" target="_blank"><div class="col-content">
            <img src="./files/loc-8.jpg" alt="">
            <h5>Mirissa</h5>
            <p></p>
        </div></a>

    </div>
</section>

<!-- Packages -->

<section class="package" id="package">
    <div class="package-title">
        <h2>Hotels</h2>
    </div>

    <div class="package-content">
        
        <div class="box">
            <div class="image">
                <img src="./files/h-1.jpg" alt="">
                <h3 style="color: black;">Rs.10000/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Kandalama Hotel</h4>
                <ul class="pac-details">
                    <li>5 Star Hotel</li>
                    <li>5 Nights Stay</li>
                    <li>Friendly Tour Guide</li>
                    <li>Rs.10000</li>
                    <br>
                    <a href="booking.php"  class="button">Book</a>
                    
                        
                </ul>
            </div>
        </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="./files/h-2.jpg" alt="">
                <h3 style="color: black;">Rs.20,000/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Shangri-La Hotel</h4>
                <ul class="pac-details">
                    <li>5 Star Hotel</li>
                    <li>7 Nights Stay</li>
                    <li>Free photo Session</li>
                    <li>Rs.20,000/</li>
                    <br>
                    
                    
                    <a href="booking.php"  class="button">Book</a>
                </ul>
            </div>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./files/h-3.jpg" alt="">
                <h3 style="color: black;">Rs.30,000/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Gold</h4>
                <ul class="pac-details">
                    <li>7 Star Hotel</li>
                    <li>10 Nights Stay</li>
                    <li>Breakfast and Dinner</li>
                    <li>Rs.30,000</li>
                    <br>
                    
                    <a href="booking.php"  class="button">Book</a>
                </ul>
            </div>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="files/h-4.jpg" alt="">
                <h3 style="color: black;">Rs.40,000/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>DH Galle fort hotel</h4>
                <ul class="pac-details">
                    <li>5 Star Hotel</li>
                    <li>14 Nights Stay</li>
                    <li>Breakfast, Lunch and Dinner</li>
                    <li>Rs.40,000/</li>
                    <br>
                    
                    <a href="booking.php"  class="button">Book</a>
                </ul>
            </div>
        </div>
        </div>

    </div>

</section>



<section class="about" id="about">
    
    <div class="main">
        
     <img src="./files/about.jpg" alt="My Photo">
     <div class="abt-text">
         <h1>About <span>Us</span></h1>
         <p>Visitsrilanka.Live Is Your Go-To Resource For Planning A Trip To Sri Lanka In 2023 Which Is A Product Of A Group Of Undergraduate Students In HORIZON Campus Under The Web Application Development Module.
             Our Website Features A Wide Range Of Information On The Top Attractions, Adventure Activities, Upcoming Events, A Blog Of Popular Tourist Destinations, Whether You're Looking To Relax On Beautiful Beaches, Explore Ancient Temples, Or Discover The Local Cuisine, Visitsrilanka.Live Has You Covered. We Can't Wait To Help You Plan An Unforgettable Trip To Sri Lanka.
             Visitsrilanka.Live Is Your Go-To Resource For Planning A Trip To Sri Lanka In 2023 Which Is A Product Of A Group Of Undergraduate Students In HORIZON Campus Under The Web Application Development Module.          <a href="./about.php"  class="btn3"><i><b>see more....</b></i></a></p>
             </p>

         </div>
         </div>
         </section>



<!-- Newsletter -->


<?php

include 'connect.php';

if (isset($_POST['subscribe'])) {
    
    $Email = $_POST['email'];
    
    

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO `subscribe` (email) VALUES (?)");
    $stmt->bind_param("s", $Email);
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        //echo "Record inserted successfully!";
        $alert_message = "Record inserted successfully";
     echo "<script type='text/javascript'>alert('$alert_message');</script>";
    } else {
        echo "Error inserting record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();

    // Close the database connection
    //$conn->close();
}
?>          

<section class="newsletter">
    <div class="newstext">
        <h2>Newsletter</h2>
        <p>Subscribe to get offers and latest<br>updates every week!</p>
    </div>

    <div class="send">
        <form action="" method="post">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="submit" name="subscribe" value="Subscribe">
        </form>
    </div>

</section>

<!-- Footer -->

<section class="footer">
    <div class="foot">
        <div class="footer-content">
            
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="./register.php">Register</a></li>
                    <li><a href="#about">About Us</a></li>
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
                    <a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a>
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
