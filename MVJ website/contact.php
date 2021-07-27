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
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link href="style.css" rel="stylesheet">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
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

        <h1>Contact Us</h1>
</section>

<!--Contact us content-->

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>MVJ College of Engineering</h5>
                    <p>Channasandra Main Road, Near Hope Farm, Whitefield, Kadugodi, Bengaluru, Karnataka 560067</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+1 0123456789</h5>
                    <p>Monday to Saturday, 8AM to 6PM</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <span>
                    <h5>principal@mvjce.edu.in</h5>
                    <p>Email us your query.</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <form id="frmContactus" method="POST">
                <input type="text" placeholder="Enter your Name" name="name" id="name" required>
                <input type="email" name="email" placeholder="Enter your Email id" id="email" required>
                <input type="number" name="mobile" placeholder="Enter your phone" id="mobile" required>
                <textarea rows="8" name="comment" placeholder="Comment" id="comment" ></textarea>
                <button type="submit" class="hero-btn red-btn" name="submit" id="submit">SUBMIT</button>
                <span style="color:green;" id="msg"></span>

            </form>
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

	  jQuery('#frmContactus').on('submit',function(e){
		jQuery('#msg').html('');
		jQuery('#submit').html('Please wait');
		jQuery('#submit').attr('disabled',true);
		jQuery.ajax({
			url:'submit.php',
			type:'post',
			data:jQuery('#frmContactus').serialize(),
			success:function(result){
				jQuery('#msg').html(result);
				jQuery('#submit').html('Submit');
				jQuery('#submit').attr('disabled',false);
				jQuery('#frmContactus')[0].reset();
			}
		});
		e.preventDefault();
	  });
	  </script>

</body>

</html>