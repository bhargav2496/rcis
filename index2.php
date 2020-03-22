<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./css/jSlider.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="primary-nav">
        <a class="navbar-brand" id="nav-logo" href="index.php"><img id="Logo" src="images\rcis_logo.png" alt="" style="width: 275px;"></a>
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
                        <a class="dropdown-item" href="locations.php">Locations</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Schools
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
                  Colleges
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">RCIS, Kalyan Nagar, PUC</a>
                        <a class="dropdown-item" href="#">RCIS, Begur, PUC</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="careers.php" data-value="about" class="nav-link">Careers</a>
                </li>
                <li class="nav-item">
                    <a href="blogs.php" data-value="about" class="nav-link">Blogs</a>
                </li>
                <li class="nav-item">
                    <a href="gallery.php" data-value="about" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="#footer" data-value="about" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="" data-value="about" class="nav-link">Parent Login</a>
                </li>
                <li class="nav-item">
                    <a href="" data-value="about" class="nav-link">Admissions</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- -------------home banner-------------- -->
    <div id="mySlider">
        <ul class="slider-box">
            <li class="slider-item"><img src="images\home_banners\banner1.jpg"></li>
            <li class="slider-item"><img src="images\home_banners\banner2.jpg"></li>
            <li class="slider-item"><img src="images\home_banners\banner3.jpg"></li>

            <a class="slider-left" role="button"></a>
            <a class="slider-right" role="button"></a>

            <ul class="slider-pointers">
            </ul>
        </ul>
    </div>
    <!-- ------------------about------------ -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="images\parallax-image.png">
        <div class="about">
            <h1 class="text-center" id="media">Welcome to RCIS</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 desc" data-aos="zoom-in-down">
                        <h3 style="font-size: 1.2rem;"><b>About RCIS</b></h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, accusamus sunt nobis expedita odio consequuntur ut, perferendis molestiae aperiam doloribus hic veritatis tempore corporis numquam reprehenderit quo quasi deserunt.
                            Ducimus!
                        </p><br>
                        <!-- <p><a href="#">Know more</a></p> -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 desc" id="chairman-message" data-aos="zoom-in-left">
                        <h3 style="font-size: 1.2rem;">Chairman's Message</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, accusamus sunt nobis expedita odio consequuntur ut, perferendis molestiae aperiam doloribus hic veritatis tempore corporis numquam reprehenderit quo quasi deserunt.
                            Ducimus!
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 desc" id="admission-form" data-aos="zoom-in-right">
                        <h3 style="font-size: 1.2rem;">Admissions Enquiry for 2020-21</h3>
                        <form action="#" method="post" id="form-style" class="p-3">
                            <div class="form-group" placeholder="Select a Grade">
                                <select id="select-menu" class="form-control">
                                <option value="volvo">* Select a Branch</option>
                                <option value="icse">RCIS,Kalyan Nagar ICSE</option>
                                <option value="cbse">RCIS,Kalyan Nagar CBSE</option>
                                <option value="mysore">RCIS,Mysuru</option>
                                <option value="sarjapur">RCIS,Sarjapur</option>
                                <option value="begur">RCIS,Begur</option>
                                <option value="mspalya">RCIS,MS Palya</option>
                                <option value="chamrajpet">RCIS,Chamrajpet</option>
                            </select><br />
                            </div>
                            <div class="form-group" class="form-control" style="margin-top: -36px;color:gray;">
                                <select id="select-menu" class="form-control" required="">
                                <option value="volvo">* Select a Grade</option>
                                <option value="icse">Play school</option>
                                <option value="cbse">Nursary</option>
                                <option value="mysore">Jr.KG</option>
                                <option value="sarjapur">Sr.KG</option>
                                <option value="begur">&#8544;</option>
                                <option value="mspalya">&#8545;</option>
                                <option value="chamrajpet">&#8546;</option>
                                <option value="icse">&#8547;</option>
                                <option value="cbse">&#8548;</option>
                                <option value="mysore">&#8549;</option>
                                <option value="sarjapur">&#8550;</option>
                                <option value="begur">&#8551;</option>
                                <option value="mspalya">&#8552;</option>
                                <option value="chamrajpet">&#8553;</option>
                                <option value="mspalya">&#8554;</option>
                                <option value="chamrajpet">&#8555;</option>
                            </select><br />
                            </div>
                            <div class="form-group" style="margin-top: -36px;">
                                <input type="text" id="form-input" class="form-control" placeholder="* Parent Full Name" name="Name" id="recipient-name2" required="">
                            </div>

                            <div class="form-group" style="margin-top: -12px;">
                                <input type="email" id="form-input" class="form-control" placeholder="* Email Id" name="Name" id="recipient-name4" required="">
                            </div>
                            <div class="form-group" style="margin-top: -12px;">
                                <input type="text" id="form-input" class="form-control" placeholder="* Mobile Number" name="Name" id="recipient-name5" required="">
                            </div>

                            <div class="form-group" style="margin-top: -12px;">
                                <input type="text" id="form-input" style="height: 50px" class="form-control" placeholder="* Remarks" name="Name" id="recipient-name3">
                            </div>
                            <button type="submit" id="enquire" class="btn">Enquire Now</button>
                            <h6 class="existing-parents"><i class="italic-existing">Existing parents </i><button type="submit" class="btn" id="exist-login">Sign-in</button></h6>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------------social media ---------------------------- -->
    <div class="social-media">
        <h1 class="text-center" id="media" style="color: maroon;margin-top: 15px;">Life at our school</h1>
        <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="https://www.facebook.com/RoyaleConcordeInternationalSchools/?ref=hl"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/rcischool"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/rcis.in/?hl=en"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCHy25fqeRvdRWYsLCLdMW3A"><i class="fab fa-youtube"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
        </ul>
        <!-- <p class="text-center">LIFE AT OUR SCHOOL</p> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12" data-aos="fade-right">
                    <!-- <h4 class="rcis-heading">We are RCIS</h4> -->
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RAa_yBumFFE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 facebook" data-aos="fade-left">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRoyaleConcordeInternationalSchools%2F%3Fref%3Dhl&tabs=timeline&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%"
                        height="450px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------------------gallery---------------------- -->
    <!-- <div class="gallery">
        <h1 class="text-center">Our Gallery</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="flip-up">
                    <img src="images\gallery\image1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="flip-up">
                    <img src="images\gallery\image2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="flip-up">
                    <img src="images\gallery\image3.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="flip-up">
                    <img src="images\gallery\image4.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="flip-up">
                    <img src="images\gallery\image5.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="flip-up">
                    <img src="images\gallery\image6.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="flip-up">
                    <img src="images\gallery\image7.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="flip-up">
                    <img src="images\gallery\image8.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="flip-up">
                    <img src="images\gallery\image9.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="parallax-window" data-parallax="scroll" data-image-src="images\parallax-image.png">
        <div class="gallery">

        </div>
    </div> -->
    <!-- ------------------News and updates---------------- -->
    <!-- <div class="container-fluid">
        <h1 class="text-center my-3 news">News & Announcements</h1>
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner row w-100 mx-auto">
                <div class="carousel-item col-md-4 active">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Card 1</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Card 2</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Card 3</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Card 4</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Card 5</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Card 6</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Card 7</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Card 8</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Card 9</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
                            <i class="fa fa-lg fa-chevron-left"></i>
                        </a>
                        <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
                            <i class="fa fa-lg fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- ---------------------our awards------------------ -->
    <div class="awards">
        <div class="container">
            <h1 class="text-center">Awards & Recognition</h1>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card">
                        <div class="card-img">
                            <img src="images\awards\isa-certified.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">International School Award (ISA) Award from British Council</h4>
                            <!-- <p class="card-text">RCIS has been awarded the ISA by the British Council for a period of 3 years from 2014-2017. The award recognizes and celebrates exemplary practices of internationalism in schools.</p> -->
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card">
                        <div class="card-img">
                            <img src="images\awards\isrd-board-london.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">ISRD London - International School for Global Leaders</h4>
                            <!-- <p class="card-text">Royale Concorde International School has won the second position in International Top Talent Award 2012 in Karnataka 4 students of RCIS have also won the SIGNATURE AWARDS from ISRD London</p> -->
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card">
                        <div class="card-img">
                            <img src="images\awards\fortius-world-school-governors-award.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Fortius World School Governors' Award</h4>
                            <!-- <p class="card-text">RCIS has been awarded the ISA by the British Council for a period of 3 years from 2014-2017. The award recognizes and celebrates exemplary practices of internationalism in schools.</p> -->
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card">
                        <div class="card-img">
                            <img src="images\awards\world-school-council.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 1.427em;">Nominated for World School Council by Fortius Universities</h4>
                            <!-- <p class="card-text">RCIS Kalyan Nagar has been nominated among 1270 schools as a member of the academic year 2015-18 for the World School council by Fortius universities. This branch of RCIS will work on programs towards best practices in learning
                                and pedagogy.</p> -->
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------maps----------- -->
    <!-- <div class="maps">
        <div class="container">
            <h1 class="text-center">Contact Us</h1>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 desc">
                    <h1 class="text-center">Our Locations</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d779164.2324994423!2d77.04948735296092!3d12.811830429009628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sroyal%20concorde%20international%20schools%20in%20karnataka!5e0!3m2!1sen!2sin!4v1583951663281!5m2!1sen!2sin"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 right">
                    <h1>Contact Us</h1>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Kalyan nagar <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p> 6th 'B' Main, II Block, HRBR Layout, Kalyan Nagar, Bangalore-560043.
                                    </p>
                                    <p>
                                        <a href="tel:08025435458" style="color: black;">080 2543 5458</a>/
                                        <a href="tel:08025435459" style="color: black;">080 2543 5459</a>/
                                        <a href="tel:08025435454" style="color: black;">080 2543 5454</a>/
                                        <a href="tel:08025435455" style="color: black;">080 2553 5455</a>
                                    </p>
                                    <p>
                                        <a href="mailto: principal@rcis.in" style="color: black;">principal@rcis.in</a>
                                        <a href="mailto: info@rcis.in" style="color: black;">info@rcis.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                MS Palya <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>No.14, Sharadha Hills, Hesarghatta Main Road, Vidyaranya Post, M S Palya, Bangalore–560097</p>
                                    <p>
                                        <a href="tel:+918050000549" style="color: black;">+91 8050000549</a>
                                        <a href="tel:+919945917529" style="color: black;">+91 9945917529</a>
                                        <a href="tel:+919071399777" style="color: black;">+91 9071399777</a>
                                    </p>
                                    <p>
                                        <a href="mailto: rcischool@gmail.com" style="color: black;">rcischool@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Mysuru <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>CA-Site No.2, Bogadi 2nd Stage, North Extension,Mysuru – 570026</p>
                                    <p>
                                        <a href="tel:+918214521275 " style="color: black;">082145 21275</a>
                                        <a href=" tel:+919071399777" style="color: black;"> /+91 90713 99777</a>
                                    </p>
                                    <p>
                                        <a href="mailto:principal.mysore@rcis.in" style="color: black;">principal.mysore@rcis.in</a>
                                        <a href="mailto:info.mysore@rcis.in" style="color: black;">info.mysore@rcis.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Begur <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>#81/1, Hongasandra, Begur Main Road, Bangalore – 560068</p>
                                    <p>
                                        <a href="tel:+918025742060" style="color: black;">080257 42060</a>
                                        <a href=" tel:+919071399777" style="color: black;"> /+91 90713 99777</a>
                                    </p>
                                    <p>
                                        <a href="mailto:principal.begur@rcis.in" style="color: black;">principal.begur@rcis.in</a>
                                        <a href="mailto:info.begur@rcis.in" style="color: black;">info.begur@rcis.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Chamrajpet <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>31, 1st Main Road, Near Prakash Cafe, Chamarajpet, Bangalore – 560018</p>
                                    <p>
                                        <a href="tel:08041278855" style="color: black;">080-41278855</a>/
                                        <a href="tel:08041252448" style="color: black;">080-41252448</a>/
                                        <a href=" tel:+919071399777" style="color: black;">+91 90713 99777</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Sarjapur <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>Sarjapur, Ring Road Junction, Bangalore</p>
                                    <p>
                                        <a href="tel:08041476100" style="color: black;">080-41476100</a>/
                                        <a href="tel:08041476200" style="color: black;">080-41476200</a>/
                                        <a href="tel:08041476300" style="color: black;">080-41476300</a>/
                                        <a href="tel:08041476400" style="color: black;">080-41476400</a>/
                                        <a href=" tel:+919071399777" style="color: black;">+91 90713 99777</a>
                                    </p>
                                    <p>
                                        Transport: <a href=" tel:+917090179944" style="color: black;">+91-7090179944</a>
                                    </p>
                                    <p>
                                        <a href="mailto:rcissarjapur@gmail.com" style="color: black;">rcissarjapur@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- ---------------contact form------------------- -->
    <!-- <div class="contact-form">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h1>Get in Touch</h1>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 right">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" placeholder="Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="mobile" class="form-control form-control-lg" placeholder="Mobile Number" name="mobile">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form-control-lg" placeholder="Your Message"></textarea>
                        </div>
                        <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                    </div>
                </div>
            </form>
        </div>
    </div> -->

    <!-- -------------------footer-------------------- -->


    <!-- -----------------footer with 3 sections------------------ -->
    <!-- <div class="footer">
        <footer class="section footer-classic context-dark bg-image">
            <div class="container">
                <div class="row row-30">
                    <div class="col-lg-4 col-md-4 col-xl-4">
                        <div class="pr-xl-4">
                            <h4>Our branches</h4>
                            <ul class="branches">
                                <li><a href="#">RCIS, Kalyan Nagar, CBSE</a></li>
                                <li><a href="#">RCIS, Kalyan Nagar, ICSE</a></li>
                                <li><a href="#">RCIS, Mysuru</a></li>
                                <li><a href="#">RCIS, MS Palya</a></li>
                                <li><a href="#">RCIS, Begur</a></li>
                                <li><a href="#">RCIS, Sarjapur</a></li>
                                <li><a href="#">RCIS, Chamrajpet</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xl-4">
                        <div class="pr-xl-4">
                            <h4>Important Links</h4>
                            <ul class="links">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">News & Updates</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xl-4">
                        <div class="pr-xl-4">
                            <h4>Get in Touch</h4>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" placeholder="Your Email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="mobile" class="form-control form-control-lg" placeholder="Mobile Number" name="mobile">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-lg" placeholder="Your Message"></textarea>
                            </div>
                            <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="copyright" style="color: white;text-align:center">
                            © 2020 Royale Concorde International School
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="credits">
                            <a href="">
                                <img src="images\socialicons\facebook.png" alt="" style="width:32px">
                            </a>
                            <a href="">
                                <img src="images\socialicons\instagram-icon.png" alt="" style="width:32px">
                            </a>
                            <a href="">
                                <img src="images\socialicons\twitter-logo-4.png" alt="" style="width:32px">
                            </a>
                            <a href="">
                                <img src="images\socialicons\youtube-icon.png" alt="" style="width:32px">
                            </a>
                            <a href="">
                                <img src="images\socialicons\linkedd.png" alt="" style="width:32px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div> -->

    <!-- <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Our Branches</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>RCIS, Kalyan Nagar, CBSE</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>RCIS, Kalyan Nagar, ICSE</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>RCIS, Mysuru</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>RCIS, MS Palya</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>RCIS, Begur</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>RCIS, Sarjapur</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>RCIS, Chamrajpet</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Gallery</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Blogs</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>News & Updates</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Careers</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Get in Touch</h5>
                    <ul class="list-unstyled quick-links">
                        <li><input type="text" class="text-input" placeholder="Your Name" name=""></li>
                        <li><input type="email" class="text-input" placeholder="Your Email" name="email"></li>
                        <li><input type="tel" class="text-input" placeholder="Mobile Number" name="mobile"></li>
                        <li><textarea class="text-input" type="text" placeholder="Enter Message*" rows="2" cols="20"></textarea></li>
                        <li>
                            <a href=""><input type="submit" class="btn btn-secondary btn-block" value="Send" name=""></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6">© 2020 <a class="text-green ml-2" href="#" target="_blank">Royale Concorde International School</a></p>
                </div>
                </hr>
            </div>
        </div>
    </section> -->
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5 class="branches-section" style="color: #ffe302;">Our Branches</h5>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Kalyan nagar <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p> 6th 'B' Main, II Block, HRBR Layout, Kalyan Nagar, Bangalore-560043.
                                    </p>
                                    <p>
                                        <a href="tel:08025435458" style="color: black;">080 2543 5458</a>/
                                        <a href="tel:08025435459" style="color: black;">080 2543 5459</a>/
                                        <a href="tel:08025435454" style="color: black;">080 2543 5454</a>/
                                        <a href="tel:08025435455" style="color: black;">080 2553 5455</a>
                                    </p>
                                    <p>
                                        <a href="mailto: principal@rcis.in" style="color: black;">principal@rcis.in</a>
                                        <a href="mailto: info@rcis.in" style="color: black;">info@rcis.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                MS Palya <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>No.14, Sharadha Hills, Hesarghatta Main Road, Vidyaranya Post, M S Palya, Bangalore–560097</p>
                                    <p>
                                        <a href="tel:+918050000549" style="color: black;">+91 8050000549</a>
                                        <a href="tel:+919945917529" style="color: black;">+91 9945917529</a>
                                        <a href="tel:+919071399777" style="color: black;">+91 9071399777</a>
                                    </p>
                                    <p>
                                        <a href="mailto: rcischool@gmail.com" style="color: black;">rcischool@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Mysuru <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>CA-Site No.2, Bogadi 2nd Stage, North Extension,Mysuru – 570026</p>
                                    <p>
                                        <a href="tel:+918214521275 " style="color: black;">082145 21275</a>
                                        <a href=" tel:+919071399777" style="color: black;"> /+91 90713 99777</a>
                                    </p>
                                    <p>
                                        <a href="mailto:principal.mysore@rcis.in" style="color: black;">principal.mysore@rcis.in</a>
                                        <a href="mailto:info.mysore@rcis.in" style="color: black;">info.mysore@rcis.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Begur <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>#81/1, Hongasandra, Begur Main Road, Bangalore – 560068</p>
                                    <p>
                                        <a href="tel:+918025742060" style="color: black;">080257 42060</a>
                                        <a href=" tel:+919071399777" style="color: black;"> /+91 90713 99777</a>
                                    </p>
                                    <p>
                                        <a href="mailto:principal.begur@rcis.in" style="color: black;">principal.begur@rcis.in</a>
                                        <a href="mailto:info.begur@rcis.in" style="color: black;">info.begur@rcis.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Chamrajpet <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>31, 1st Main Road, Near Prakash Cafe, Chamarajpet, Bangalore – 560018</p>
                                    <p>
                                        <a href="tel:08041278855" style="color: black;">080-41278855</a>/
                                        <a href="tel:08041252448" style="color: black;">080-41252448</a>/
                                        <a href=" tel:+919071399777" style="color: black;">+91 90713 99777</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Sarjapur <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>Sarjapur, Ring Road Junction, Bangalore</p>
                                    <p>
                                        <a href="tel:08041476100" style="color: black;">080-41476100</a>/
                                        <a href="tel:08041476200" style="color: black;">080-41476200</a>/
                                        <a href="tel:08041476300" style="color: black;">080-41476300</a>/
                                        <a href="tel:08041476400" style="color: black;">080-41476400</a>/
                                        <a href=" tel:+919071399777" style="color: black;">+91 90713 99777</a>
                                    </p>
                                    <p>
                                        Transport: <a href=" tel:+917090179944" style="color: black;">+91-7090179944</a>
                                    </p>
                                    <p>
                                        <a href="mailto:rcissarjapur@gmail.com" style="color: black;">rcissarjapur@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5 class="locate-section">Locate Us</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d779164.2324994423!2d77.04948735296092!3d12.811830429009628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sroyal%20concorde%20international%20schools%20in%20karnataka!5e0!3m2!1sen!2sin!4v1583951663281!5m2!1sen!2sin"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4" id="get-in">
                    <h5 class="touch-section">Get in Touch</h5>
                    <ul class="list-unstyled quick-links">
                        <li><input type="text" class="text-input" placeholder="Your Name" name=""></li>
                        <li><input type="email" class="text-input" placeholder="Your Email" name="email"></li>
                        <li><input type="tel" class="text-input" placeholder="Mobile Number" name="mobile"></li>
                        <li><textarea class="text-input" type="text" placeholder="Enter Message*" rows="4" cols="20"></textarea></li>
                        <li>
                            <a href=""><input type="submit" id="submit-button" class="btn btn-secondary btn-block" value="Send" name=""></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6">© 2020 <a class="text-green ml-2" href="#" target="_blank">Royale Concorde International School</a></p>
                </div>
                </hr>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="" style="background-color: black;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="copyright" style="color: white;text-align:center">
                            © 2020 Royale Concorde International School
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="credits">
                            <a href="">
                                <img src="images\socialicons\facebook.png" alt="" style="width:32px">
                            </a>
                            <a href="">
                                <img src="images\socialicons\instagram-icon.png" alt="" style="width:32px">
                            </a>
                            <a href="">
                                <img src="images\socialicons\twitter-logo-4.png" alt="" style="width:32px">
                            </a>
                            <a href="">
                                <img src="images\socialicons\youtube-icon.png" alt="" style="width:32px">
                            </a>
                            <a href="">
                                <img src="images\socialicons\linkedd.png" alt="" style="width:32px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ----------modal------------- -->
    <!-- <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>Re-Enroll Today!</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <img src="images\modal-image.png" alt="" width="50%" height="50%">
                    <p>The re-enrollment deadline for the academic year 2020-2021 is nearly here!</p>
                    <p>Re-enroll today to continue your investment in your child's future</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-primary">Re-Enroll Today</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <!-- form popout -->
    <div class="form-popup wow fadeInLeft" id="myForm">
        <form action="/action_page.php" class="form-container">
            <h1 class="sticky-form">Know about the admissions</h1>
            <button type="button" class="btn cancel" onclick="closeForm()">X</button>

            <input type="text" placeholder=" Name*" name="username" required><br/>

            <input type="email" placeholder="Email*" name="email" required>

            <input type="tel" placeholder="Phone*" name="phone" required><br/>

            <select class="branches">
                    <option value="volvo">Select a branch</option>
                    <option value="icse">RCIS,Kalyan Nagar ICSE</option>
                    <option value="cbse">RCIS,Kalyan Nagar CBSE</option>
                    <option value="mysore">RCIS,Mysuru</option>
                    <option value="sarjapur">RCIS,Sarjapur</option>
                    <option value="begur">RCIS,Begur</option>
                    <option value="mspalya">RCIS,MS Palya</option>
                    <option value="chamrajpet">RCIS,Chamrajpet</option>
            </select><br/>

            <input type="text" placeholder="Grade for Applying*" name="grade" required><br/>

            <input type="text" placeholder="Date of Birth*" name="dob" required><br/>

            <input type="text" placeholder="Residing area*" name="area" required><br/>

            <textarea class="text-input" type="text" placeholder="Enter Message*" rows="2" cols="20"></textarea>

            <button type="submit" class="btn">Enquire Now</button>
        </form>
    </div>

    <!-- -----------------sticky button---------- -->
    <div id="popup-container">
        <div id="popup-window">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <a href="#" class="your-class"></a>
                <div>
                    <div class="row text-center">
                        <h1>GET STARTED</h1>
                        <hr>
                        <p>Fill out the form below to get started today!</p>
                    </div>
                    <br>
                    <form action="" method="post" id="footer-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" name="first_name" id="first_name" placeholder="First Name *" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="last_name" id="last_name" placeholder="Last Name *" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" name="email" id="email" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="phone" placeholder="Phone *" id="phone">
                                <br>
                            </div>
                        </div>
                        <!-- <center>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </center> -->
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------bottom-top------------------- -->
    <a id="button"><i class="fa fa-angle-double-up" id="bottom-top" aria-hidden="true"></i></a>
</body>

<script src="./js/jquery.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

<script src="./js/main.js"></script>
<script src=""></script>
<script>
    $(document).ready(function() {
        $("#myModal").modal('show');
    });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="./js/jSlider.js"></script>
<script>
    $("#mySlider").jSlider();
</script>
<script>
    $("#mySlider").jSlider({
        slidingTime: 500,
        rotateDelay: 2000
    });
</script>
<script>
    // ============form==========
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
<script>
    // form is opened when website is loaded

    window.addEventListener("load", function() {
        openForm();
    });
</script>
<script>
    $('#get-started').on('click', function() {
        var $sidenav, $this;
        $this = $(this);
        $sidenav = $('#popup-container');
        if ($this.hasClass('active')) {
            $this.removeClass('active');
            return $sidenav.removeClass('active');
        } else {
            $this.addClass('active');
            return $sidenav.addClass('active');
        }
    });
    $('#get-started').on('click', function() {
        var $sidenav, $this;
        $this = $(this);
        $sidenav = $('#popup-container');
        if ($this.hasClass('open')) {
            $this.removeClass('open');
            return $sidenav.removeClass('open');
        } else {
            $this.addClass('open');
            return $sidenav.addClass('open');
        }
    });
    $('#popup-container').find('.close').on('click', function() {
        $(this).parent().removeClass('open');
        $('#get-started').removeClass('open')
        return $('#popup-container').removeClass('open');
        return $('#get-started').removeClass('open');
    });
</script>
<script src="./js/parallax.js"></script>
</script>
<!-- <script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("primary-nav").style.padding = "1px 10px";
            document.getElementById("nav-logo").style.fontSize = "2px";
        } else {
            document.getElementById("primary-nav").style.padding = "10px 10px";
            document.getElementById("nav-logo").style.fontSize = "50px";
        }
    }
</script> -->

<!-- <script>
    $(document).on("scroll", function() {

        if ($(document).scrollTop() > 80) {
            $("#primary-nav").addClass("shrink");
        } else {
            $("#primary-nav").removeClass("shrink");
        }

    });
</script> -->
<!-- <script type="text/javascript">
    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $('a.navbar-brand img').css({
                'height': '30'
            });
        } else {
            $('a.navbar-brand img').css({
                'height': '60'
            });
        }

    });
</script> -->
<script type="text/javascript">
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

</html>