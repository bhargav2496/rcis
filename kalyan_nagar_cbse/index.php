<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/jSlider.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/bootstrap-dropdownhover.min.css">

    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="primary-nav">
        <a class="navbar-brand" id="nav-logo" href="index.php"><img id="Logo" src="../images/rcis_logo.png" alt="" style="width: 100%;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" data-value="home" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="about_school.php">About School</a>
                        <a class="dropdown-item" href="management.php">Management</a>
                        <a class="dropdown-item" href="mission.php">Mission</a>
                        <a class="dropdown-item" href="location.php">Location</a>
                        <a class="dropdown-item" href="locations.php">Basic School Details</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Curriculum
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">RCIS, Kalyan Nagar, CBSE</a>
                        <a class="dropdown-item" href="#">RCIS, Kalyan Nagar, ICSE</a>
                        <a class="dropdown-item" href="#">RCIS, MS Palya</a>
                        <a class="dropdown-item" href="#">RCIS, Mysuru</a>
                        <a class="dropdown-item" href="#">RCIS, Chamrajpet</a>
                        <a class="dropdown-item" href="#">RCIS, Sarjapur</a>
                        <a class="dropdown-item" href="#">RCIS, Begur</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Facilities
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">RCIS, Kalyan Nagar, PUC</a>
                        <a class="dropdown-item" href="#">RCIS, Begur, PUC</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admissions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="career_kalyan_nagar_cbse.php">RCIS, Kalyan Nagar, CBSE</a>
                        <a class="dropdown-item" href="career_kalyan_nagar_icse.php">RCIS, Kalyan Nagar, ICSE</a>
                        <a class="dropdown-item" href="career_ms_palya.php">RCIS, MS Palya</a>
                        <a class="dropdown-item" href="career_mysuru.php">RCIS, Mysuru</a>
                        <a class="dropdown-item" href="career_chamrajpet.php">RCIS, Chamrajpet</a>
                        <a class="dropdown-item" href="career_sarjapur.php">RCIS, Sarjapur</a>
                        <a class="dropdown-item" href="career_begur.php">RCIS, Begur</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="blogs.php" data-value="about" class="nav-link">Achievements</a>
                </li>
                <li class="nav-item">
                    <a href="gallery.php" data-value="about" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="#footer" data-value="about" class="nav-link">Contact Us</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="" data-value="about" class="nav-link">Parent Login</a>
                </li> -->
                <li class="nav-item">
                    <a href="" data-value="about" class="nav-link">Careers</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- -------------home banner-------------- -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/kalyan_nagar_cbse/home_banner/banner1.jpg" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="../images/kalyan_nagar_cbse/home_banner/banner2.jpg" alt="Chicago">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/kalyan_nagar_cbse/home_banner/banner3.jpg" alt="New York">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- ----------welcome message------------ -->
    <div class="welcome">
        <h1 class="text-center" id="media" style="color: #1ca250;margin-top: 15px;">Welcome to Royale Concorde International School, Kalyan Nagar</h1>
        <h5 class="text-center">Fourteen years and still counting!</h5>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-right">
                    <p style="text-align: justify">Royale Concorde International School, Kalyan Nagar remains a kaleidoscope of learning, and a favourable influence on the young impressionable minds. This prestigeousInstitution, exhibiting dynamism and discipline, inculcates a quest
                        for knowledge and understanding thereby, preparing students to be lifelong learners. RCIS-K undoubtedly sojourns with a dream destination for those who seek security, artistry, ingenuity and competence. In such a scenario where
                        there is recognition, appreciation of efforts and accomplishments, every Concordian evolves as a reliable citizen for a better tomorrow.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------mission---------- -->
    <div class="mission">
        <h1 class="text-center" style="color: #1ca250;margin-top: 15px;"> Our Mission</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p style="text-align: justify">
                        Our endeavour is to impart education that goes beyond the formal schooling and empowers individuals to be achievers in their chosen fields through experience.We envisage a system which aims at a multifaceted development of the child’s physical, emotional,
                        mental and spiritual personality by nurturing their innate potential, encouraging creative freedom and self expression.Our mission is to inspire, educate, challenge and support all students to reach their highest level of learning
                        and personal development
                    </p>
                    <!-- <ul>
                        <li>Our endeavour is to impart education that goes beyond the formal schooling and empowers individuals to be achievers in their chosen fields through experience.</li>
                        <li>We envisage a system which aims at a multifaceted development of the child’s physical, emotional, mental and spiritual personality by nurturing their innate potential, encouraging creative freedom and self expression.</li>
                        <li>Our mission is to inspire, educate, challenge and support all students to reach their highest level of learning and personal development</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------school-video----notice-board-------------- -->
    <div class="school-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4 class="text-center" style="color: #1ca250;margin-top: 15px;">Our School</h4>
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RAa_yBumFFE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4 class="text-center" style="color: #1ca250;margin-top: 15px;">Notice Board</h4>
                    <marquee behavior="scroll" scrollamount="1" direction="up">
                        <ul>
                            <li>AISSCE - 2018-19 CLASS XII RESULTS</li>
                            <li>AISSCE 2018-19 CLASS XII RESULTS SUBJECT TOPPERS</li>
                            <li>AISSE - 2018-19 CLASS X RESULTS</li>
                            <li>AISSE 2018-19 CLASS X RESULTS SUBJECT TOPPERS</li>
                            <li>INTERNATIONAL SCHOOL AWARD (ISA) FROM BRITISH COUNCIL</li>
                        </ul>
                    </marquee>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------news-events-------------- -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="../images/parallax-image.png">
        <div class="news-video">
            <h1 class="text-center " style="color: #1ca250;margin-top: 15px; ">News & Events</h1>
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-sm-12 ">
                        <ul>
                            <li class="news">Teachers Day 2019</li>
                            <li class="news">International Doctor's Day</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 ">
                        <ul>
                            <li class="news">Teachers Day 2019</li>
                            <li class="news">International Doctor's Day</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 ">
                        <ul>
                            <li class="news">Teachers Day 2019</li>
                            <li class="news">International Doctor's Day</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------three sections----------- -->
    <div class="three-sections">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <h3 style="color: #1ca250;margin-top: 15px; ">Year Planner</h3>
                    <div class="card">
                        <div class="card-img">
                            <img src="images\three-sections\year-planner.jpg" alt="" style="width: 100%" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Download the year planner, this will give you a holistic view of the various activities of your Kids and the School</p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Download Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <h3 style="color: #1ca250;margin-top: 15px; ">Facilities</h3>
                    <div class="card">
                        <div class="card-img">
                            <img src="images\three-sections\facilities.png" alt="" style="width: 100%; height: 270px;" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <p class="card-text">The library also has access to electronic media, with internet connections for online browsing, for knowledge and reference.</p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Find More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <h3 style="color: #1ca250;margin-top: 15px; ">From The Principal's Desk</h3>
                    <div class="card">
                        <div class="card-img">
                            <img src="images\three-sections\principal.jpg" alt="" style="width: 100%; height: 245px;" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <p class="card-text">"Education is not the filling of a pail, but the lighting of a fire". RCIS has been conceived to meet the highest educational expectation.</p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -----------recent-events------------- -->
    <div class="recent">
        <h1 class="text-center " style="color: #1ca250;margin-top: 15px; ">Recent Events</h1>
        <div class="container">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner" id="recent-events">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images\recent-events\image1.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images\recent-events\image2.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images\recent-events\image3.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images\recent-events\image4.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images\recent-events\image1.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images\recent-events\image2.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images\recent-events\image3.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images\recent-events\image4.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
    </div>

    <!-- ---------------footer-------------- -->
    <!-- <section id="footer " style="background-color: #1ca250; margin-top: 65px;">
        <div class="container ">
            <div class="row text-center text-xs-center text-sm-left text-md-left ">
                <div class="col-xs-12 col-sm-4 col-md-4 ">
                    <h5 class="branches-section " style="color: #ffe302; ">Our Address</h5>
                    <h3 class="school-name">Royale Concorde International School</h3>
                    <p> 6th 'B' Main, II Block, HRBR Layout, Kalyan Nagar, Bangalore-560043.
                    </p>
                    <p>
                        <a href="tel:08025435458" style="color: black;">080 2543 5458</a>/
                        <a href="tel:08025435459" style="color: black;">080 2543 5459</a>/<br>
                        <a href="tel:08025435454" style="color: black;">080 2543 5454</a>/
                        <a href="tel:08025435455" style="color: black;">080 2553 5455</a>
                    </p>
                    <p>
                        <a href="mailto: principal@rcis.in" style="color: black;">principal@rcis.in</a>
                        <a href="mailto: info@rcis.in" style="color: black;">info@rcis.in</a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 ">
                    <h5 class="locate-section ">Locate Us</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d779164.2324994423!2d77.04948735296092!3d12.811830429009628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sroyal%20concorde%20international%20schools%20in%20karnataka!5e0!3m2!1sen!2sin!4v1583951663281!5m2!1sen!2sin "
                        width="100% " height="100% " frameborder="0 " style="border:0; " allowfullscreen=" " aria-hidden="false " tabindex="0 "></iframe>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 " id="get-in ">
                    <h5 class="touch-section ">Get in Touch</h5>
                    <ul class="list-unstyled quick-links ">
                        <li><input type="text " class="text-input " placeholder="Your Name " name=" "></li>
                        <li><input type="email " class="text-input " placeholder="Your Email " name="email "></li>
                        <li><input type="tel " class="text-input " placeholder="Mobile Number " name="mobile "></li>
                        <li><textarea class="text-input " type="text " placeholder="Enter Message* " rows="4 " cols="20 "></textarea></li>
                        <li>
                            <a href=" "><input type="submit " id="submit-button " class="btn btn-secondary btn-block " value="Send " name=" "></li>
                    </ul>
                </div>
            </div>
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5 ">
                    <ul class="list-unstyled list-inline social text-center ">
                        <li class="list-inline-item "><a href="# "><i class="fab fa-facebook "></i></a></li>
                        <li class="list-inline-item "><a href="# "><i class="fab fa-twitter "></i></a></li>
                        <li class="list-inline-item "><a href="# "><i class="fab fa-instagram "></i></a></li>
                        <li class="list-inline-item "><a href="# "><i class="fab fa-google-plus "></i></a></li>
                        <li class="list-inline-item "><a href="# " target="_blank "><i class="fa fa-envelope "></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white ">
                    <p class="h6 ">© 2020 <a class="text-green ml-2 " href="# " target="_blank ">Royale Concorde
                            International School</a></p>
                </div>
                </hr>
            </div>
        </div>
    </section> -->
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Our Address</h5>
                    <h3 class="school-name">Royale Concorde International School</h3>
                    <p> 6th 'B' Main, II Block, HRBR Layout, Kalyan Nagar, Bangalore-560043.
                    </p>
                    <p>
                        <a href="tel:08025435458" style="color: black;">080 2543 5458</a>/
                        <a href="tel:08025435459" style="color: black;">080 2543 5459</a>/<br>
                        <a href="tel:08025435454" style="color: black;">080 2543 5454</a>/
                        <a href="tel:08025435455" style="color: black;">080 2553 5455</a>
                    </p>
                    <p>
                        <a href="mailto: principal@rcis.in" style="color: black;">principal@rcis.in</a>
                        <a href="mailto: info@rcis.in" style="color: black;">info@rcis.in</a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Our Location</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.166056568223!2d77.64030131430485!3d13.02509521722757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae172ff41a8d9b%3A0x579ddbfe8e3e88e3!2sRoyale%20Concorde%20International%20School!5e0!3m2!1sen!2sin!4v1584526183407!5m2!1sen!2sin"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4" id="footer-form">
                    <h5>Enquire Now</h5>
                    <form>
                        <fieldset class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Name">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Email">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
                        </fieldset>
                        <fieldset class="form-group">
                            <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                        </fieldset>
                        <fieldset class="form-group text-xs-right">
                            <button type="button" class="btn btn-secondary-outline btn-lg">Send</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6">© 2020 <a class="text-green ml-2" href="#" target="_blank">Royale Concorde
                        International School</a></p>
                </div>
                </hr>
            </div>
        </div>
    </section>
    <!-- ./Footer -->
    <!-- form popout -->
    <div class="form-popup wow fadeInLeft " id="myForm ">
        <form id=" " class="form-container ">
            <h1 class="sticky-form ">Know about the admissions</h1>
            <button type="button " class="btn cancel " onclick="closeForm() ">X</button>

            <input type="text " placeholder=" Name* " id="side_name " name="side_name " required><br />

            <input type="email " placeholder="Email* " id="side_email " name="side_email " required>

            <input type="tel " placeholder="Phone* " id="side_phone " name="side_phone " required><br />

            <select class="branches " id="side_branches " name="side_branches ">
                <option selected hidden value=" ">Select a branch</option>
                <option value="RCIS,Kalyan Nagar ICSE ">RCIS,Kalyan Nagar ICSE</option>
                <option value="RCIS,Kalyan Nagar CBSE ">RCIS,Kalyan Nagar CBSE</option>
                <option value="mysore ">RCIS,Mysuru</option>
                <option value="RCIS,Mysuru ">RCIS,Sarjapur</option>
                <option value="RCIS,Begur ">RCIS,Begur</option>
                <option value="RCIS,MS Palya< ">RCIS,MS Palya</option>
                <option value="RCIS,Chamrajpet ">RCIS,Chamrajpet</option>
            </select><br />

            <input type="text " placeholder="Grade for Applying* " id="side_grade " name="side_grade " required><br />

            <input type="text " placeholder="Date of Birth* " id="side_dob " name="side_dob " required><br />

            <input type="text " placeholder="Residing area* " id="side_dob " name="side_dob " required><br />

            <textarea class="text-input " type="text " id="side_message " name="side_message " placeholder="Enter Message* " rows="2 " cols="20 "></textarea>

            <button type="submit " class="btn " name="side-enquiry " id="side-enquiry ">Enquire Now</button>
        </form>
    </div>
    <!-- ------------bottom-top------------------- -->
    <!-- <a id="button "><i class="fa fa-angle-double-up " id="bottom-top " aria-hidden="true "></i></a> -->
</body>

<script src="../js/jquery.min.js "></script>
<script src="../js/popper.min.js "></script>
<script src="../js/bootstrap.min.js "></script>

<script src="../js/main.js "></script>
<script src=" "></script>
<script>
    $(document).ready(function() {
        $("#myModal ").modal('show');
    });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js "></script>
<script>
    AOS.init();
</script>
<script src="../js/jSlider.js "></script>
<script>
    $("#mySlider ").jSlider();
</script>
<script>
    $("#mySlider ").jSlider({
        slidingTime: 500,
        rotateDelay: 2000
    });
</script>
<script>
    // ============form==========
    function openForm() {
        document.getElementById("myForm ").style.display = "block ";
    }

    function closeForm() {
        document.getElementById("myForm ").style.display = "none ";
    }
</script>
<script>
    // form is opened when website is loaded

    window.addEventListener("load ", function() {
        openForm();
    });
</script>

<script src="../js/parallax.js "></script>

<script type="text/javascript ">
    // if ($(window).outerWidth() > 768) {

    // }
    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $('a.navbar-brand img').css({
                'height': '50'
            });
        } else {
            $('a.navbar-brand img').css({
                'height': '100'
            });
        }

    });
</script>
<script>
    $('#blogCarousel').carousel({
        interval: 5000
    });
</script>
</html>