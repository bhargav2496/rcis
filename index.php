<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./css/jSlider.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- <script src="./js/gen_validatorv4.js" type="text/javascript"></script> -->

    <title>Document</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="primary-nav">
        <a class="navbar-brand" id="nav-logo" href="index.php"><img id="Logo" class="rcis-logo"
                src="images\rcis_logo.png" alt="" style="width: 275px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" data-value="home" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-hover="dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="about_school.php">About School</a>
                        <a class="dropdown-item" href="management.php">Management</a>
                        <a class="dropdown-item" href="locations.php">Locations</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-hover="dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Schools
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="kalyan_nagar_cbse/index.php" target="_blank">RCIS, Kalyan Nagar,
                            CBSE</a>
                        <a class="dropdown-item" href="#">RCIS, Kalyan Nagar, ICSE</a>
                        <a class="dropdown-item" href="#">RCIS, MS Palya</a>
                        <a class="dropdown-item" href="#">RCIS, Mysuru</a>
                        <a class="dropdown-item" href="#">RCIS, Chamrajpet</a>
                        <a class="dropdown-item" href="#">RCIS, Sarjapur</a>
                        <a class="dropdown-item" href="#">RCIS, Begur</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Colleges
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">RCIS, Kalyan Nagar, PUC</a>
                        <a class="dropdown-item" href="#">RCIS, Begur, PUC</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-hover="dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Careers
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
                    <div class="col-lg-8 col-md-8 col-sm-12 desc" data-aos="zoom-in-down">
                        <h3 style="font-size: 1.2rem;"><b>About RCIS</b></h3>
                        <p style="text-align: justify">Envisioned by Sri L R Shivarame Gowda, Royale Concorde
                            International School is an English medium, Co-educational day school , set up under the RCIS
                            educational trust in the year 2005 . The School is affiliated to the Central Board of
                            Secondary Education , New Delhi and has classes from Pre-primary up to the secondary level.
                            The school offers Science and Computer-science at the Senior Secondary level and intends to
                            add Arts and Commerce streams in the near future.
                            An International School where children are taught to learn ,
                            study and improve their skills ,RCIS provides the students with necessary incentives to grow
                            and develop their skills . We believe that It is necessary to inculcate the habit of
                            questioning, self-expression and creative freedom in children As this will help them
                            construct a solid self-esteem and can help them bring out their confidence , Which at the
                            end of the day will be responsible for the students handling tough situations .
                        </p><br>
                        <p style="text-align: justify">An International School where children are taught to learn ,
                            study and improve their skills ,RCIS provides the students with necessary incentives to grow
                            and develop their skills . We believe that It is necessary to inculcate the habit of
                            questioning, self-expression and creative freedom in children As this will help them
                            construct a solid self-esteem and can help them bring out their confidence , Which at the
                            end of the day will be responsible for the students handling tough situations .
                        </p>
                    </div>
                    <!-- <div class="col-lg-4 col-md-4 col-sm-12 desc" id="chairman-message" data-aos="zoom-in-left">
                        <h3 style="font-size: 1.2rem;">Chairman's Message</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, accusamus sunt nobis
                            expedita odio consequuntur ut, perferendis molestiae aperiam doloribus hic veritatis tempore
                            corporis numquam reprehenderit quo quasi deserunt.
                            Ducimus!
                        </p>
                    </div> -->
                    <div class="col-lg-4 col-md-4 col-sm-12 desc" id="admission-form" data-aos="zoom-in-right">
                        <h3 style="font-size: 1.2rem;">Admissions Enquiry for 2020-21</h3>
                        <form method="post" name="admission" id="form-style" class="p-3"
                        onsubmit="alert('Thank you for your feedback.');">
                            <div class="form-group" placeholder="Select a Grade">
                                <select id="select_branch" required="" class="form-control" name="select_branch">
                                    <option selected hidden value="">* Select a Branch</option>
                                    <option value="RCIS,Kalyan Nagar ICSE">RCIS,Kalyan Nagar ICSE</option>
                                    <option value="RCIS,Kalyan Nagar CBSE">RCIS,Kalyan Nagar CBSE</option>
                                    <option value="RCIS,Mysuru">RCIS,Mysuru</option>
                                    <option value="RCIS,Sarjapur">RCIS,Sarjapur</option>
                                    <option value="RCIS,Begur">RCIS,Begur</option>
                                    <option value="RCIS,MS Palya">RCIS,MS Palya</option>
                                    <option value="RCIS,Chamrajpet">RCIS,Chamrajpet</option>
                                </select><br />
                            </div>
                            <div class="form-group" class="form-control" style="margin-top: -36px;color:gray;">
                                <select id="select_grade" class="form-control" required="" name="select_grade">
                                    <option selected hidden value="">* Select a Grade</option>
                                    <option value="Play school">Play school</option>
                                    <option value="Nursery">Nursery</option>
                                    <option value="Jr.KG">Jr.KG</option>
                                    <option value="Sr.KG">Sr.KG</option>
                                    <option value="1">&#8544;</option>
                                    <option value="2">&#8545;</option>
                                    <option value="3">&#8546;</option>
                                    <option value="4">&#8547;</option>
                                    <option value="5">&#8548;</option>
                                    <option value="6">&#8549;</option>
                                    <option value="7">&#8550;</option>
                                    <option value="8">&#8551;</option>
                                    <option value="9">&#8552;</option>
                                    <option value="10">&#8553;</option>
                                    <option value="11">&#8554;</option>
                                    <option value="12">&#8555;</option>
                                </select><br />
                            </div>
                            <div class="form-group" style="margin-top: -36px;">
                                <input type="text" id="parent_name" class="form-control" placeholder="*Parent Full Name"
                                    name="parent_name" required="">
                            </div>

                            <div class="form-group" style="margin-top: -12px;">
                                <input type="email" id="parent_email" class="form-control" placeholder="*Email Id"
                                    name="parent_email" required="">
                            </div>
                            <div class="form-group" style="margin-top: -12px;">
                                <input type="text" id="parent_phone" class="form-control" placeholder="*Mobile Number"
                                    name="parent_phone" required="" onkeypress='validate(event)'>
                            </div>

                            <div class="form-group" style="margin-top: -12px;">
                                <input type="text" id="parent_remarks" style="height: 50px" class="form-control"
                                    placeholder="* Remarks" name="parent_remarks">
                            </div>
                            <button type="submit" id="enquire" name="enquire" class="btn">Enquire Now</button>
                            <span id="error_message" class="text-danger"></span>
                            <span id="success_message" class="text-success"></span>
                            <h6 class="existing-parents"><i class="italic-existing">Existing parents </i><button
                                    type="submit" class="btn" id="exist-login">Sign-in</button></h6>
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
            <li class="list-inline-item"><a
                    href="https://www.facebook.com/RoyaleConcordeInternationalSchools/?ref=hl"><i
                        class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/rcischool"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/rcis.in/?hl=en"><i
                        class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCHy25fqeRvdRWYsLCLdMW3A"><i
                        class="fab fa-youtube"></i></a></li>
            <!-- <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li> -->
        </ul>
        <!-- <p class="text-center">LIFE AT OUR SCHOOL</p> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12" data-aos="fade-right">
                    <!-- <h4 class="rcis-heading">We are RCIS</h4> -->
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RAa_yBumFFE" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 facebook" data-aos="fade-left">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRoyaleConcordeInternationalSchools%2F%3Fref%3Dhl&tabs=timeline&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="100%" height="450px" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------our awards------------------ -->
    <div class="awards">
        <div class="container">
            <h1 class="text-center">Awards & Recognition</h1>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div class="card">
                        <div class="card-img">
                            <img src="images\awards\isa-certified.jpg" alt="" style="width: 100%" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center">International School Award (ISA) Award from British
                                Council</h4>
                            <!-- <p class="card-text">RCIS has been awarded the ISA by the British Council for a period of 3 years from 2014-2017. The award recognizes and celebrates exemplary practices of internationalism in schools.</p> -->
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div class="card">
                        <div class="card-img">
                            <img src="images\awards\isrd-board-london.png" alt="" style="width: 100%" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center">ISRD London - International School for Global Leaders
                            </h4>
                            <!-- <p class="card-text">Royale Concorde International School has won the second position in International Top Talent Award 2012 in Karnataka 4 students of RCIS have also won the SIGNATURE AWARDS from ISRD London</p> -->
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div class="card">
                        <div class="card-img">
                            <img src="images\awards\fortius-world-school-governors-award.jpg" alt="" style="width: 100%"
                                class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center">Fortius World School Governors' Award</h4>
                            <!-- <p class="card-text">RCIS has been awarded the ISA by the British Council for a period of 3 years from 2014-2017. The award recognizes and celebrates exemplary practices of internationalism in schools.</p> -->
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div class="card">
                        <div class="card-img">
                            <img src="images\awards\world-school-council.png" alt="" class="img-fluid"
                                style="width: 100%">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center" style="font-size: 1.427em;">Nominated for World School
                                Council by
                                Fortius Universities</h4>
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


    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5 class="branches-section" style="color: #ffe302;">Our Branches</h5>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Kalyan nagar <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
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
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        MS Palya <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>No.14, Sharadha Hills, Hesarghatta Main Road, Vidyaranya Post, M S Palya,
                                        Bangalore–560097</p>
                                    <p>
                                        <a href="tel:+918050000549" style="color: black;">+91 8050000549</a>/
                                        <a href="tel:+919945917529" style="color: black;">+91 9945917529</a>/<br>
                                        <a href="tel:+919071399777" style="color: black;">+91 9071399777</a>
                                    </p>
                                    <p>
                                        <a href="mailto: rcischool@gmail.com"
                                            style="color: black;">rcischool@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Mysuru <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>CA-Site No.2, Bogadi 2nd Stage, North Extension,Mysuru – 570026</p>
                                    <p>
                                        <a href="tel:+918214521275 " style="color: black;">082145 21275</a>
                                        <a href=" tel:+919071399777" style="color: black;"> /+91 90713 99777</a>
                                    </p>
                                    <p>
                                        <a href="mailto:principal.mysore@rcis.in"
                                            style="color: black;">principal.mysore@rcis.in</a>
                                        <a href="mailto:info.mysore@rcis.in"
                                            style="color: black;">info.mysore@rcis.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Begur <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>#81/1, Hongasandra, Begur Main Road, Bangalore – 560068</p>
                                    <p>
                                        <a href="tel:+918025742060" style="color: black;">080257 42060</a>
                                        <a href=" tel:+919071399777" style="color: black;"> /+91 90713 99777</a>
                                    </p>
                                    <p>
                                        <a href="mailto:principal.begur@rcis.in"
                                            style="color: black;">principal.begur@rcis.in</a>
                                        <a href="mailto:info.begur@rcis.in" style="color: black;">info.begur@rcis.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Chamrajpet <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>31, 1st Main Road, Near Prakash Cafe, Chamarajpet, Bangalore – 560018</p>
                                    <p>
                                        <a href="tel:08041278855" style="color: black;">080-41278855</a>/
                                        <a href="tel:08041252448" style="color: black;">080-41252448</a>/<br>
                                        <a href=" tel:+919071399777" style="color: black;">+91 90713 99777</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Sarjapur <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3 class="school-name">Royale Concorde International School</h3>
                                    <p>Sarjapur, Ring Road Junction, Bangalore</p>
                                    <p>
                                        <a href="tel:08041476100" style="color: black;">080-41476100</a>/
                                        <a href="tel:08041476200" style="color: black;">080-41476200</a>/<br>
                                        <a href="tel:08041476300" style="color: black;">080-41476300</a>/
                                        <a href="tel:08041476400" style="color: black;">080-41476400</a>/<br>
                                        <a href=" tel:+919071399777" style="color: black;">+91 90713 99777</a>
                                    </p>
                                    <p>
                                        Transport: <a href=" tel:+917090179944" style="color: black;">+91-7090179944</a>
                                    </p>
                                    <p>
                                        <a href="mailto:rcissarjapur@gmail.com"
                                            style="color: black;">rcissarjapur@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5 class="locate-section">Locate Us</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d779164.2324994423!2d77.04948735296092!3d12.811830429009628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sroyal%20concorde%20international%20schools%20in%20karnataka!5e0!3m2!1sen!2sin!4v1583951663281!5m2!1sen!2sin"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4" id="get-in">
                    <h5 class="touch-section">Get in Touch</h5>
                    <form action="" method="post" id="footer_form" name="footer_form">
                        <input type="text" class="text-input" placeholder="Your Name*" name="footer_name" id="footer_name" style="margin-bottom: 10px;" required>
                        <input type="email" class="text-input" placeholder="Your Email*" name="footer_email" id="footer_email" style="margin-bottom: 10px;" required>
                        <input type="tel" class="text-input" placeholder="Mobile Number*" onkeypress='validate(event)' name="footer_mobile" id="footer_mobile" style="margin-bottom: 10px;" required>
                        <textarea class="text-input" type="text" placeholder="Enter Message*" name="footer_message" id="footer_message" style="margin-bottom: 10px;" rows="4"
                            cols="20"></textarea>
                        <input type="submit" id="submit-button" class="btn btn-secondary btn-block" value="Send"
                            name="">
                            <span id="error_message" class="text-danger" style="display: none;"></span>
  <span id="success_message" class="text-success" style="display: none;"></span>
                    </form>
                    <!-- <ul class="list-unstyled quick-links">
                        <li><input type="text" class="text-input" placeholder="Your Name*" name="" required></li>
                        <li><input type="email" class="text-input" placeholder="Your Email*" name="email" required></li>
                        <li><input type="tel" class="text-input" placeholder="Mobile Number*" name="mobile" required>
                        </li>
                        <li><textarea class="text-input" type="text" placeholder="Enter Message*" rows="4"
                                cols="20"></textarea></li>
                        <li>
                            <a href=""><input type="submit" id="submit-button" class="btn btn-secondary btn-block"
                                    value="Send" name=""></li>
                    </ul> -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <!-- <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li> -->
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

    <!-- form popout -->
    <div class="form-popup wow fadeInLeft" id="myForm">
        <!--<form id="popout" class="form-container" name="popout" onsubmit="return submitClick();">-->
        <!--    <h1 class="sticky-form">Know about the admissions</h1>-->
        <!--    <button type="button" class="btn cancel" onclick="closeForm()">X</button>-->

        <!--    <input type="text" placeholder=" Name*" id="side_name" name="side_name"><br />-->

        <!--    <input type="email" placeholder="Email*" id="side_email" name="side_email">-->

        <!--    <input type="tel" placeholder="Phone*" onkeypress='validate(event)' id="side_phone" name="side_phone"><br />-->

        <!--    <select class="branches" id="side_branches" name="side_branches" required="" style="margin-bottom: 5px;">-->
        <!--        <option selected hidden value="">Select a branch*</option>-->
        <!--        <option value="RCIS,Kalyan Nagar ICSE">RCIS,Kalyan Nagar ICSE</option>-->
        <!--        <option value="RCIS,Kalyan Nagar CBSE">RCIS,Kalyan Nagar CBSE</option>-->
        <!--        <option value="RCIS,Mysuru">RCIS,Mysuru</option>-->
        <!--        <option value="RCIS,Sarjapur">RCIS,Sarjapur</option>-->
        <!--        <option value="RCIS,Begur">RCIS,Begur</option>-->
        <!--        <option value="RCIS,MS Palya<">RCIS,MS Palya</option>-->
        <!--        <option value="RCIS,Chamrajpet">RCIS,Chamrajpet</option>-->
        <!--    </select><br />-->
        <!--    <select id="side_grade" class="branches" name="side_grade" required="" style="margin-bottom: 5px;">-->
        <!--        <option selected hidden value="">Select a Grade*</option>-->
        <!--        <option value="Play school">Play school</option>-->
        <!--        <option value="Nursery">Nursery</option>-->
        <!--        <option value="Jr.KG">Jr.KG</option>-->
        <!--        <option value="Sr.KG">Sr.KG</option>-->
        <!--        <option value="1">&#8544;</option>-->
        <!--        <option value="2">&#8545;</option>-->
        <!--        <option value="3">&#8546;</option>-->
        <!--        <option value="4">&#8547;</option>-->
        <!--        <option value="5">&#8548;</option>-->
        <!--        <option value="6">&#8549;</option>-->
        <!--        <option value="7">&#8550;</option>-->
        <!--        <option value="8">&#8551;</option>-->
        <!--        <option value="9">&#8552;</option>-->
        <!--        <option value="10">&#8553;</option>-->
        <!--        <option value="11">&#8554;</option>-->
        <!--        <option value="12">&#8555;</option>-->
        <!--    </select>-->

        <!--    <input type="text" placeholder="Residing area*" id="side_address" name="side_address"><br />-->

        <!--    <textarea class="text-input" type="text" id="side_message" required="" name="side_message"-->
        <!--        placeholder="Enter Message*" rows="2" cols="20"></textarea>-->

        <!--    <button type="submit" class="btn" name="side-enquiry" id="side-enquiry" onclick="onSubmission()">Enquire Now</button>-->
        <!--    <span id="error_message" class="text-danger" style="display: none;">All Fields are required</span>-->
        <!--    <span id="success_message" class="text-success" style="display: none;">Successfully submitted</span>-->
        <!--</form>-->
        <form id="popout" class="form-container" name="popout" onsubmit="return validateform();">
  <h1 class="sticky-form">Know about the admissions</h1>
  <button type="button" class="btn cancel" onclick="closeForm()">X</button>

  <input type="text" placeholder=" Name*" id="side_name" name="side_name"><br />

  <input type="email" placeholder="Email*" id="side_email" name="side_email">

  <input type="tel" placeholder="Phone*" id="side_phone" name="side_phone" ><br />

  <select class="branches" id="side_branches" name="side_branches" >
    <option selected hidden value="">Select a branch*</option>
    <option value="RCIS,Kalyan Nagar ICSE">RCIS,Kalyan Nagar ICSE</option>
    <option value="RCIS,Kalyan Nagar CBSE">RCIS,Kalyan Nagar CBSE</option>
    <option value="RCIS,Mysuru">RCIS,Mysuru</option>
    <option value="RCIS,Sarjapur">RCIS,Sarjapur</option>
    <option value="RCIS,Begur">RCIS,Begur</option>
    <option value="RCIS,MS Palya<">RCIS,MS Palya</option>
    <option value="RCIS,Chamrajpet">RCIS,Chamrajpet</option>
  </select><br />
  <select id="side_grade" class="branches" name="side_grade"  style="margin-top: 2px;">
    <option selected hidden value="">Select a Grade*</option>
    <option value="Play school">Play school</option>
    <option value="Nursery">Nursery</option>
    <option value="Jr.KG">Jr.KG</option>
    <option value="Sr.KG">Sr.KG</option>
    <option value="1">&#8544;</option>
    <option value="2">&#8545;</option>
    <option value="3">&#8546;</option>
    <option value="4">&#8547;</option>
    <option value="5">&#8548;</option>
    <option value="6">&#8549;</option>
    <option value="7">&#8550;</option>
    <option value="8">&#8551;</option>
    <option value="9">&#8552;</option>
    <option value="10">&#8553;</option>
    <option value="11">&#8554;</option>
    <option value="12">&#8555;</option>
  </select>

  <!-- <input type="date" placeholder="Date of Birth*" id="side_dob" name="side_dob"><br /> -->

  <input type="text" placeholder="Residing area" id="side_address" name="side_address"><br />

  <textarea class="text-input" type="text" id="side_message"  name="side_message" placeholder="Enter Message*" rows="2" cols="20"></textarea>
  <!--<input type="submit" name="side-enquiry" id="side-enquiry" class="btn btn-info" value="Submit" onclick="validateform();"/>-->

   <button type="submit" class="btn" name="side-enquiry" id="side-enquiry" >Enquire Now</button> 
  <span id="error_message" class="text-danger" style="display: none;"></span>
  <span id="success_message" class="text-success" style="display: none;"></span>
</form>
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

<script src="./js/parallax.js"></script>

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
            'height': '80'
        });
    }

});
</script>
 <!-- <script>
function validateform() {
    var phone = document.forms['popout']['side_phone'].value;

    if (phone.length < 10) {
        alert("please enter 10 digits number");
        return false;
    }
}

function validateAdmission() {
    var parentNumber = document.forms['admission']['parent_phone'].value;
    if (parentNumber.length < 10) {
        alert("please enter 10 digits number");
        return false;
    }
}
</script> -->
<!-- <script>
var form = document.getElementById('f');

function myFunction() {
  if (form.checkValidity()) {
    alert("Adding Succesful!");
  }
}
</script> -->
 <!-- <script>
 function onSubmission(){
     alert("Thanks for Enquiry. We will get in touch with you");
 }

 </script> -->
<!-- <script type="text/javascript">
var frmvalidator = new Validator("popout");

frmvalidator.addValidation("side_name","req","Please enter your Name");

frmvalidator.addValidation("side_email","maxlen=50");
frmvalidator.addValidation("side_email","req","Please enter your Email");
frmvalidator.addValidation("side_email","email","Please enter valid email");



</script> -->
<!-- <script type="text/javascript">
var frmvalidator = new Validator("admission");

frmvalidator.addValidation("parent_name","req","Please enter your Name");

frmvalidator.addValidation("parent_email","maxlen=50");
frmvalidator.addValidation("parent_email","req","Please enter your Email");
frmvalidator.addValidation("parent_email","email","Please enter valid email");

frmvalidator.addValidation("parent_phone","maxlen=10","Please enter 10 digits only");
frmvalidator.addValidation("parent_phone","req","Please enter your Phone Number");
frmvalidator.addValidation("parent_phone","numeric","Please enter numbers only");

frmvalidator.addValidation("parent_remarks","maxlen=100");
frmvalidator.addValidation("parent_remarks","req","Type your message here");

</script> -->
<script>
function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>

    <!-- <script type="text/javascript">
var frmvalidator = new Validator("footer_form");

frmvalidator.addValidation("footer_name","req","Please enter your Name");

frmvalidator.addValidation("footer_email","maxlen=50");
frmvalidator.addValidation("footer_email","req","Please enter your Email");
frmvalidator.addValidation("footer_email","email","Please enter valid email");

frmvalidator.addValidation("footer_mobile","maxlen=10","Please enter 10 digits only");
frmvalidator.addValidation("footer_mobile","req","Please enter your Phone Number");
frmvalidator.addValidation("footer_mobile","numeric","Please enter numbers only");

frmvalidator.addValidation("footer_message","maxlen=100");
frmvalidator.addValidation("footer_message","req","Type your message here");


</script> -->

<script>
    function submitClick(){
    if(formValidation()){
        alert("thank");
        return true;
    }else{
        return false;
    }
    function formValidation(){
        flag = true;

        if(document.popout.side_name.value == "" || document.popout.side_email.value == "" || document.popout.side_phone.value == "" || document.popout.side_address.value == "" ){
            alert("Enter alphabetic characters as Name!");
      flag = false;
        }
    }
}
</script>
</html>