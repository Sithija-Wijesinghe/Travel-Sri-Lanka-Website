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
    <title>Contact Us</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">   
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
</head>

<body class="contactbody">
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


        <br />

        <section class="contact" style="background-color: #101010;">
            <div class="contact-form">
                <h1>Contact <span>Us</span></h1>
                <p>We are always out there to help you! Fill out the form given below and get a reply from us within 2 business days.</p>
                <form action="" method="post"  onsubmit="return validateForm()">
                    <input type="text" name="myname" id="myname" placeholder="Your Name" required>
                    <input type="email" name="email" id="email" placeholder="Your E-mail" required>
                    <input type="text" name="subject" id="subject" placeholder="What brings you here?" required>
                    <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                    <input type="submit" name="submit" value="Submit" class="submit-btn">
                </form>

                </div>

                </section>
                
                <script>
                function validateForm() {
                    var name = document.getElementById("myname").value;
                    var email = document.getElementById("email").value;
                    var subject = document.getElementById("subject").value;
                    var message = document.getElementById("message").value;
                
                    // Simple validation for name, email, and subject (you can add more validation rules)
                    if (name === "") {
                        alert("Please enter your name.");
                        return false;
                    }
                    
                    if (email === "") {
                        alert("Please enter your email.");
                        return false;
                    } else if (!validateEmail(email)) {
                        alert("Please enter a valid email address.");
                        return false;
                    }
                
                    if (subject === "") {
                        alert("Please enter a subject.");
                        return false;
                    }
                
                    // You can add more validation for the message field or customize as needed
                
                    return true;
                }
                
                function validateEmail(email) {
                    var re = /\S+@\S+\.\S+/;
                    return re.test(email);
                }
                </script>
                
<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['myname'];
    $Email = $_POST['email'];
    $Details = $_POST['subject'];
    $Mess = $_POST['message'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO `contact` (name, email, details, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $Email, $Details, $Mess);
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
