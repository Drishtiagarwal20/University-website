<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University website</title>
    <link rel="stylesheet" href="icon/all.min.css">
    <link rel="stylesheet" href="webfonts">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"> <!-- font awesome 4 cdn-->
</head>

<body>


<!-- first section -->


<section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/logo.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" aria-hidden="true" onclick=hideMenu()></i> <!--font awesome 4 closing icons-->
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" aria-hidden="true" onclick=showMenu()></i> <!--font awesome 4 menu icon-->
        </nav>

        <h1>About Us</h1>
</section>


<!-----------About us content--------->

<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>MVJ College of Engineering</h1>
            <p>Established in 1982; MVJCE, the flagship of Venkatesha Education Society, is one of the best engineering college in Bangalore and have been greatly successful in imparting education beyond engineering and management. MVJCE has state of the art infrastructure situated in a 15-acre campus in Whitefield, which has resulted in creating an environment for progressive learning and development. With inputs from motivated and quality faculty along with emphasis on a curriculum that builds knowledge and enhances thinking capability, students have been consistent in displaying higher academic performance which in turn has helped the college to be positioned among the top 10 engineering colleges in Bangalore, Karnataka. At MVJCE, we always strive hard to give students an unmatched experience at learning.</p>
            <a href="/" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>

        <div class="about-col">
            <img src="images/about.png" alt="">
        </div>
    </div>
</section>


<!-- Footer -->


<section class="footer">
    <h4>About Us</h4>
    <p>Established in 1982, MVJ College of Engineering, the flagship of Venkatesha Education Society, imparts education beyond engineering and management.</p>
    <div><a href="/" class="read">Read more</a></div>
    <div class="icons"><!--fab is used in the case of apps-->
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin"></i>
        <i class="fab fa-google"></i>
    </div>
</section>



    <script>
        var navLinks=document.getElementById("navLinks")
        /*to hide the nav bar tags*/
        function showMenu(){
            navLinks.style.right="0";
        }
        /*to show the nav bar tags*/
        function hideMenu(){
            navLinks.style.right="-300px";
        }

    </script>

</body>

</html>