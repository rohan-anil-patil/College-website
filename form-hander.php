<!DOCTYPE html>
<html>

<head>
    <meta name="veiwport" content="with=device-width,initial-scale=1.0">
    <title>college management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="image/logo2.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-window-close" onclick="hideMenu()"></i>
                <ul>
                    <li> <a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li> <a href="course.html">COURSE</a></li>
                    <li> <a href="admission.html">ADMISSSION</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
     <h1>THANK YOU SO MUCH </h1>


    </section>
    
    <!------About us content-------> 
 <section class="about-us">
     <div class="row">
         <div class="about-col">
             <p>Thank you for contacting us through our website! We appreciate your interest and will get back to you as soon as possible. If you have any questions or concerns in the meantime, please don’t hesitate to reach out to us again. We are always happy to help our visitors and improve our services. Have a great day! 😊</p>
             <a href="index.html" class="hero-btn red-btn">EXPLORE MORE</a>
         </div>
         <div class="about-col">
             <img src="image/thnk.jpg">
         </div>
     </div>
    </section>

 
    
    
    
    
    
    
    
     <!------Footer------->
     <section class="footer">
         <h4>About Us</h4>
         <p>Wel-Come to Konkan Gyanpeeth College Of Engineering, Karjat.
                <br>Affiliated to University of Mumbai, Approved by AICTE, New Delhi</p>
                <div class="ions">
                     <i class="fab fa-facebook"></i>
                     <i class="fab fa-instagram"></i>
                     <i class="fab fa-twitter" ></i>
                     <i class="fab fa-linkedin" ></i>
                     
                </div>
                <p>Made With <i class="far fa-heart"></i> By KGCE </p>
     </section>
     
     
     
     

    <!------javascripts for------->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }

    </script>




</body>

</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $subject = $_POST ['subject'];
    $message = $_POST ['message'];
    
    $host = 'localhost';
    $user = 'root';
    $pass =  '';
    $dbname = 'com';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql ="INSERT INTO contact(name,email,subject,message) values ('$name','$email','$subject','$message')";
    mysqli_query($conn,$sql);
 
}

?>


   