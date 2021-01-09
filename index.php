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
    <title>Wefix</title>
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
                        <h6>Monitors</h6>
                        <p>Lorem ipsum, or lipsum as sometimes known, is dummy text used in</p>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <img src="images/laptoppurple.png">
                        <h6>Laptops</h6>
                        <p>Lorem ipsum, or lipsum as sometimes known, is dummy text used in</p>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <img src="images/smartphonepurple.png">
                        <h6>Smart Phones</h6>
                        <p>Lorem ipsum, or lipsum as sometimes known, is dummy text used in</p>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Create Account Section -->
    <?php include('userRegistration.php') ?>


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
                            <img src="images/Vicki.jpeg">
                            <div class="carousel-caption">
                                <h6>Vignesh Vicky</h6>
                                <small>Frontend Engineer @ Razorpay</small>
                                <p>Lorem ipsum, or lipsum as sometimes <br>known, is dummy text used in lorem ipsum, or
                                    lipsum as sometimes <br>known, is dummy text used in</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/sahithya.jpeg">
                            <div class="carousel-caption">
                                <h6>Sahithya Sathish</h6>
                                <small>Fashion Designer @ Myntra</small>
                                <p>Lorem ipsum, or lipsum as sometimes <br>known, is dummy text used in lorem ipsum, or
                                    lipsum as sometimes <br>known, is dummy text used in</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/vikram.jpeg">
                            <div class="carousel-caption">
                                <h6>Vikram Kumar</h6>
                                <small>Backend Engineer @ Freshworks</small>
                                <p>Lorem ipsum, or lipsum as sometimes <br>known, is dummy text used in lorem ipsum, or
                                    lipsum as sometimes <br>known, is dummy text used in</p>
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