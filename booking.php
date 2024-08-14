<?php
 include 'connect.php';


 
 session_start();
 
 if (isset($_SESSION['user_id'])) {
     $user_id = $_SESSION['user_id'];
 } else {
     $user_id = '';
     header('location: login.php');
 }

 if($user_id==1){
    $show="Log Out";
}

 ?>

<?php
//include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['myname1'];
    $Email = $_POST['myemail'];
    $phone = $_POST['myphone'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $departuredate = $_POST['departuredate'];
    $returndate = $_POST['returndate'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO `booking` (firstname, Email, Phone, Age, location, departuredate, returndate) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters with appropriate data types
    $stmt->bind_param("ssissss", $name, $Email, $phone, $age, $location, $departuredate, $returndate);

    if ($stmt->execute()) {
        // Record inserted successfully
        $alert_message = "Record inserted successfully";
        echo "<script type='text/javascript'>alert('$alert_message');</script>";
    } else {
        // Error inserting record
        echo "Error inserting record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();

    // Close the database connection (uncomment this if necessary)
    // $conn->close();
}
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body class="booking-body">

    <!-- Header -->

    <div id="menu-bar" class="fas fa-bars"></div>

    

    <div class="content"> 
        <nav>
            <a href="#" class="logo">Travel SriLanka🌴</a>
           <!--img src="./files/logo.png" class="logo" alt="Logo" title="FirstFlight Travels"-->
           
            
            
            <ul class="navbar">
                <li>
                    <a href="index.php">Home</a>
                    <a href="index.php#locations">Destination</a>
                    <a href="index.php#package">Hotels</a>
                    <a href="index.php#about">About Us</a>
                    <a href="./contact.php">Contact Us</a>

                    
                   <?php 
                   
                        if($user_id==1){

                   
                            echo "<a href=logout.php  class=btnLogin-popup>$show</a>";

                        }

                   
                ?>
                            <!-- <a href="login.php"  class="btnLogin-popup"><?php // echo $show; ?></a>
                       


                    

                    <a href="login.php"  class="btnLogin-popup">Login</a> -->
                    
                    
                </li>
            </ul>
            
        </nav>


        <br />

    <section class="booking">
        <div class="booking-form">
            <h1>Book <span>Now</span></h1>
        <form action="" method="post">

            <input type="text" name="myname1" placeholder="Name" id="name" required>
            <input type="email" name="myemail" placeholder="Email-Id" id="" required>
            <input type="text" name="myphone" placeholder="Phone No." id="phonenum" required>
            <input type="text" name="age" placeholder="Age" id="" required>
            <h4>Location</h4>
            <input type="text" name="location" placeholder="Location" id="" required>
            <h4>CheckIn</h4>
            <input type="date" name="departuredate" id="" required>
            <h4>CheckOut</h4>
            <input type="date" name="returndate" id="" required>
            
            <br> <br> 
            <input type="checkbox" name="t&c" id="" checked required> I accept the Terms & Conditions.
            <br> <br> 
            <input type="submit" value="submit" name="submit" class="submitbtn">

        </form>
        </div>
    </section>
    <br /> 
    <br /> 
    <br />  
    <br /> 
    <br /> 
    <br />
    <br /> 
    <br /> 
    <br />
    <br /> 
    <br /> 
    <br />                  
    

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

<!-- Javascript -->


</body>
</html>
