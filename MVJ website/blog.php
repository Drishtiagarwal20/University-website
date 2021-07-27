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

        <h1>Certificate & Online Programs.</h1>
</section>

<!--blog page conytent-->

<section class="blog-content">
    <div class="row">
        <div class="blog-left">
            <img src="images/certificate.jpg" alt="">
            <h2>Our Certificate & Online Programs for 2021</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id exercitationem, beatae laboriosam ipsa quos itaque nam inventore deserunt nihil magnam nulla atque quia quidem facere repellat veniam. Dolorum assumenda numquam eius deserunt, quia consequatur hic amet praesentium. Deleniti, distinctio est! Exercitationem ex alias possimus laboriosam architecto porro quae ipsa praesentium.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aspernatur quia est pariatur deleniti blanditiis illo! Unde saepe inventore repellat quis, et eius! Accusamus dicta unde reiciendis a dolorum et minima aperiam possimus aliquam eos tenetur iste error, soluta laudantium omnis recusandae! Blanditiis ex a fugiat rerum vel, enim impedit itaque consequatur illum sit possimus ratione nostrum dicta minus asperiores in aspernatur dolores quasi quia optio repellat? Repellat similique nam, velit molestias illum recusandae dolores, nostrum, praesentium consectetur veniam laborum.</p>
            <br>
            <button onclick="view()" class="red-btn hero-btn">Show more</button>
            <p id="abcd" style="display: none;">Lorem ipsum dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium deleniti dignissimos vitae omnis possimus iusto reiciendis. Non ipsum dolor molestias.consectetur adipisicing elit. Illum deserunt autem perferendis, incidunt quisquam ad inventore impedit, culpa accusantium expedita explicabo odio earum tempora, harum eius sapiente eaque ipsum. Et quae, similique fugit placeat voluptatibus est sit soluta. Cupiditate deserunt molestiae iure voluptate perspiciatis optio maxime harum veritatis ex soluta ad quaerat voluptas cum vero, labore, voluptatibus provident minima doloribus laborum dolorem officiis repellendus, quos voluptatum inventore? Omnis placeat, corrupti distinctio autem natus alias hic fugiat modi voluptatibus, officia dicta?<br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis possimus asperiores consequuntur quod eos perspiciatis commodi aut! Et quod consequatur, veritatis itaque illo saepe recusandae modi dolorem explicabo officia iusto blanditiis, deserunt quos impedit delectus molestias, quis non vitae cum mollitia quaerat optio? Suscipit, iure aliquid neque nesciunt perferendis est. Sit omnis quia dicta, debitis voluptas distinctio repellendus labore saepe magni eveniet fugiat modi aut doloribus praesentium nemo pariatur? Eos perspiciatis iste debitis culpa quisquam delectus ab inventore maxime harum mollitia. Explicabo nihil in rerum totam! Odio ipsa ab quo sit quidem.<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem itaque ipsum eum dolorum, totam voluptatibus distinctio, nulla molestias veritatis soluta veniam eveniet autem qui voluptatem quam, doloremque corrupti nihil. Voluptates deserunt quae voluptas recusandae dolorum animi, ut reiciendis alias dolore consequatur vel. Dolor quas natus impedit autem? Sint ipsum illo distinctio aspernatur molestias ipsam! Iste, itaque. Totam quia consectetur adipisci.</p>


            <div class="comment-box">
                <h4>Leave a Comment.</h4>
                <form class="comment-form">
                    <input type="text" placeholder="Enter Name">
                    <input type="text" placeholder="Enter Email">
                    <textarea rows="6" placeholder="Your Comment"></textarea>
                    <button type="submit" class="hero-btn red-btn">Post Comment</button>

                </form>
            </div>
        </div>
        <div class="blog-right">
            <h3>Programmes</h3>
            <div>
                <span>Civil Engineering</span>
            </div>
            <div>
                <span>Data Science</span>
            </div>
            <div>
                <span>Machine Learning</span>
            </div>
            <div>
                <span>Computer Science Engineering</span>
            </div>
            <div>
                <span>Mechanical Engineering</span>
            </div>
            <div>
                <span>Chemical Engineering</span>
            </div>
            <div>
                <span>Aeronautical Engineering</span>
            </div>
            <div>
                <span>Aerospace Engineering</span>
            </div>
            <div>
                <span>Master of Business Administration</span>
            </div>
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
        
        function view(){
            var x =document.getElementById('abcd');
            if (x.style.display==='block'){
                x.style.display='none';
            }
            else{
                x.style.display='block';
            }
        }

    </script>

</body>

</html>