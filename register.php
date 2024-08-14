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
    <title>Book Now</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body class="register-body">

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
                 
                       


                    

                   <!-- <a href="login.php"  class="btnLogin-popup">Login</a> -->
                    
                    
                </li>
            </ul>
            
        </nav>


        <br />    


    <section class="register" style="background-color: #101010;">
        <div class="register-form">
            <h1>Register</h1>
            <form action="" method="post" onsubmit="return validateForm()">
    
                <input type="text" name="fullname" placeholder="Full Name" id="name" required>
                <input type="text" name="nic" placeholder="NIC" id="nic" required>
                <input type="email" name="email" placeholder="Email-Id" id="email" required>
                <input type="tel" name="phoneno" placeholder="Phone No." id="phonenum" required>
                <input type="number" name="age" placeholder="Age" id="age" required>
                <input type="password" name="password" placeholder="Enter your password" id="password" required>
    
                <h4>Gender</h4>
                <input type="radio" name="gender" id="gender-male" value="male" required> Male &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="radio" name="gender" id="gender-female" value="female"> Female
                <br><br>
    
                <input type="submit" value="Submit" name="submit" class="submitbtn">
            </form>
        </div>
    </section>

    <br />
    <br />
    
    <script>
        function validateForm() {
            // Get form elements
            var fullName = document.getElementById('name').value;
            var nic = document.getElementById('nic').value;
            var email = document.getElementById('email').value;
            var phoneNum = document.getElementById('phonenum').value;
            var age = document.getElementById('age').value;
            var password = document.getElementById('password').value;
    
            // Regular expression to validate email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
            // Regular expression to validate NIC format (you may modify this according to your country's format)
            var nicRegex = /^[0-9]{9}[vVxX]$/;
    
            // Regular expression to validate phone number format (10 digits)
            var phoneRegex = /^[0-9]{10}$/;
    
            // Check if all fields are filled
            if (!fullName || !nic || !email || !phoneNum || !age || !password) {
                alert("Please fill in all fields.");
                return false;
            }
    
            // Validate email format
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }
    
            // Validate NIC format
            if (!nicRegex.test(nic)) {
                alert("Please enter a valid NIC number.");
                return false;
            }
    
            // Validate phone number format
            if (!phoneRegex.test(phoneNum)) {
                alert("Please enter a valid phone number (10 digits).");
                return false;
            }
    
            // Age should be a positive number
            if (age <= 0) {
                alert("Please enter a valid age.");
                return false;
            }
    
            // Password should be at least 6 characters long
            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }
    
            // All validations passed, form can be submitted
            return true;
        }
    </script>

    <?php
    
    include 'connect.php';
    
    if (isset($_POST['submit'])) {
        $firstname = $_POST['fullname'];
        $NIC = $_POST['nic'];
        $Email = $_POST['email'];
        $Phone = $_POST['phoneno'];
        $Age = $_POST['age'];
        $Password = $_POST['password'];
        $Gender = $_POST['gender'];
    
        // Prepare the SQL statement with placeholders
        $stmt = $conn->prepare("INSERT INTO `register` (fullname, nic, email, phoneno, age, password, gender) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
        // Bind parameters to the statement
        $stmt->bind_param("ssssiss", $firstname, $NIC, $Email, $Phone, $Age, $Password, $Gender);
    
        // Execute the statement
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
                    <li><a href="index.php#about">About Us</a></li>
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



