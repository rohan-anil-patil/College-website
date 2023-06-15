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
     <h1>We Will Email You </h1>


    </section>
    
    <!------About us content-------> 
 <section class="about-us">
     <div class="row">
         <div class="about-col">
             <p>    
Dear Student,

I am writing this letter to express my sincere gratitude for selecting konkan gyanpeeth college of engineering for my higher education. I am thrilled to be a part of this esteemed institution and I am looking forward to the opportunities that it will provide me.

I would like to thank you for considering my application and giving me the opportunity to study at konkan gyanpeeth college of engineering. I am confident that I will receive the best education and guidance from the faculty members and staff of this college.

Once again, thank you for selecting me for admission at konkan gyanpeeth college of engineering. I am excited to start this new chapter of my life and I hope to make the most of it.

Sincerely, 
Principal of KGCE</p>
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
    $cet = $_POST ['cet'];
    $markstwelfth= $_POST ['markstwelfth'];
    $marks_10th  = $_POST ['marks_10th'];
    $message = $_POST ['message'];
    
    $host = 'localhost';
    $user = 'root';
    $pass =  '';
    $dbname = 'com';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql ="INSERT INTO adm(name,email,cet,markstwelfth,marks_10th,message) values ('$name','$email','$cet','$markstwelfth','$marks_10th','$message')";
    mysqli_query($conn,$sql);
             
}

?>
