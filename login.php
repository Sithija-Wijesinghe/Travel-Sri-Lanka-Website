
 <?php
 include 'connect.php';


 
 session_start();
 
 if (isset($_SESSION['user_id'])) {
     $user_id = $_SESSION['user_id'];
 } else {
     $user_id = '';
 }
 
 if (isset($_POST['submit'])) {
     $email = $_POST['myemail'];
     $pass = $_POST['password'];
 
     // Create a MySQLi connection
     //$conn = mysqli_connect("localhost", "root", "", "travel");
 
     // Check the connection
     //if (!$conn) {
        // die("Connection Failed: " . mysqli_connect_error());
     //}
 
     // Prepare and execute the query
     $stmt = mysqli_prepare($conn, "SELECT * FROM `register` WHERE email = ? AND password = ?");
     $stmt->bind_param("ss", $email, $pass);
     $stmt->execute();
     $result=$stmt->get_result();
 
     /*if (mysqli_stmt_num_rows($stmt) > 0) {
         $_SESSION['user_id'] = $email;
         header('Location: index.php'); // Use 'Location:' to specify the redirect location
         exit;
     }*/
     if ($result->num_rows == 1) {
        // Assuming you have a 'user_id' column in the 'register' table
        $user_id = mysqli_stmt_insert_id($stmt);
        $id=1;
        $_SESSION['user_id'] = $id;
        header('Location: index.php'); // Use 'Location:' to specify the redirect location
        exit;
    }
    
     
     else {
         $alert_message = "Incorrect username or password!";
         echo "<script type='text/javascript'>alert('$alert_message');</script>";
     }
 
     // Close the statement and connection
     mysqli_stmt_close($stmt);
     mysqli_close($conn);
 }
 ?>
 







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>


<body class="login-body">

    <!--<nav>
        <img src="./files/logo.png" class="logo" alt="Logo" title="FirstFlight Travels">

        <ul class="navbar">
            <li>
                <a href="./index.php">Home</a>
                <a href="./index.php#locations">Locations</a>
                <a href="./index.php#package">Packages</a>
                <a href="./about.php">About Us</a>
                <a href="./contact.php">Contact Us</a>
            </li>
        </ul>
    </nav>-->

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

                    
                   
                       


                    

                    <!--<a href="login.php"  class="btnLogin-popup">Login</a> -->
                    
                    
                </li>
            </ul>
            
        </nav>


        <br />


    <section class="login" style="background-color: #101010;">
        <div class="login-form">
            <h1>Login</h1>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            

            
            <input type="email" name="myemail" placeholder="Enter your email" >
            
            <input type="password" name="password" placeholder="Enter your password" >
            
            <br><br>
            <input type="checkbox" name="t&c"  checked required> I accept the Terms & Conditions.
            <br> <br> 

           <input type="submit" name="submit" value="Login now" class="submitbtn">
           <br>
           <p>Don't have an account? <a href="register.php" class="register-link">Register here</a></p>
           

        </form>
        </div>
    </section>
    
    <!-- Footer -->

<section class="footer" style="margin-top: 0px;">
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

