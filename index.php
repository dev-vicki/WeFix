<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!--Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <title>WeFix</title>
</head>
<body>
    <!-- Navigation Bar and Brand Logo -->
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php"><img src="./images/logo2a.png" alt="wefix logo"></a>
                <!-- <span>your device our service</span> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto text-right">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#register">REGISTER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Client/RequesterLogin.php">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/membership.php">MEMBERSHIP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blogs.php">BLOGS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactus">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <!-- Banner Image -->
            <div class="row banner">
                <div class="col-md-6">
                    <h1>Let's Start Fixing Device's</h1>
                    <p>WEFIX helps people to fix their gadgets without spending<br>too much money on unnecessary things.
                    </p>
                    <a href="#register" type="submit" value="send" name="submit"
                        class="btn btn-lg express-btn">REGISTER</a>
                    <a href="Client/RequesterLogin.php" type="submit" value="send" name="submit"
                        class="btn btn-lg express-btn">LOGIN</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/home-pic.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->

    <section id="services" class="service">
        <div class="container">
            <h2 class="title">We provide a wide range<br> of services</h2>
            <p class="subtitle">Let's start fixing with WEFIX app to save a huge money today</p>
            <div class="row">
                <div class="col-md-4 active">
                    <div class="service-box">
                        <img src="images/tvpurple.png">
                        <h6>Book a Service</h6>
                        <p>Book a service from your home or work at a time slot that suits best to your convenience.</p>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <img src="images/laptoppurple.png">
                        <h6>One stop solution</h6>
                        <p>A trained technician will be assigned to you and they will reach your destination at the required time.</p>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <img src="images/smartphonepurple.png">
                        <h6>Get it repaired</h6>
                        <p>Get your device repaired without much hassle.</p>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Register Account Section -->
    <?php include('userRegistration.php') ?>

    <!-- Membership Section -->
    <?php include('membership.php') ?>
    <!-- Blogs Section -->

    <!-- Testimonials Section -->

    <section class="review">
        <div class="container">
            <div class="testimonials">
                <h2 class="text-center">We always love to hear from our customers</h2>
                <br>
                <br>
            </div>
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/A.png">
                            <div class="carousel-caption">
                                <h6>Anaga</h6>
                                <small>Frontend Engineer @ Razorpay</small>
                                <p>Got the best service from WeFix and got my product deliverd on time.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/H.png">
                            <div class="carousel-caption">
                                <h6>Hardik</h6>
                                <small>Fashion Designer @ Myntra</small>
                                <p>My laptop needed a quick fix and WeFix helped me get it done on time and at affordable cost. </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/R.png">
                            <div class="carousel-caption">
                                <h6>Rohit</h6>
                                <small>Backend Engineer @ Freshworks</small>
                                <p>Thank you WeFix for proving such a good service.<br>Will
                                continue to use WeFix for further issues as well </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section and Contact Us Merged -->
    <?php include('contactForm.php') ?>


    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>

</body>

</html>