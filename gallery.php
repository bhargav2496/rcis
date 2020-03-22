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
        <a class="navbar-brand" id="nav-logo" href="index.php"><img id="Logo" src="images\rcis_logo.png" alt="" style="width: 220px;"></a>
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
                        <a class="dropdown-item" href="kalyan_nagar_cbse/index.php" target="_blank">RCIS, Kalyan Nagar, CBSE</a>
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

    <!-- -------------location banner-------------- -->
    <div class="image-gallery-banner" style="margin-top:70px;height: 450px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="lg-text">Our Gallery</h1>
                    <p class="image-gallery-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------welcome------------ -->
    <div class="gallery">
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
    </div>


    <!-- ----------------videos------------- -->
    <div class="gallery">
        <h1 class="text-center">Our Recent Videos</h1>
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
    </div>

    <!-- -----------------footer with 3 sections------------------ -->

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
                                        <a href="tel:+918050000549" style="color: black;">+91 8050000549</a>/
                                        <a href="tel:+919945917529" style="color: black;">+91 9945917529</a>/<br>
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
                                        <a href="tel:08041252448" style="color: black;">080-41252448</a>/<br>
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
                                        <a href="tel:08041476200" style="color: black;">080-41476200</a>/<br>
                                        <a href="tel:08041476300" style="color: black;">080-41476300</a>/
                                        <a href="tel:08041476400" style="color: black;">080-41476400</a>/<br>
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

    <!-- form popout -->
    <div class="form-popup wow fadeInLeft" id="myForm">
        <form id="" class="form-container">
            <h1 class="sticky-form">Know about the admissions</h1>
            <button type="button" class="btn cancel" onclick="closeForm()">X</button>

            <input type="text" placeholder=" Name*" id="side_name" name="side_name" required><br />

            <input type="email" placeholder="Email*" id="side_email" name="side_email" required>

            <input type="tel" placeholder="Phone*" id="side_phone" name="side_phone" required><br />

            <select class="branches" id="side_branches" name="side_branches">
                <option selected hidden value="">Select a branch</option>
                <option value="RCIS,Kalyan Nagar ICSE">RCIS,Kalyan Nagar ICSE</option>
                <option value="RCIS,Kalyan Nagar CBSE">RCIS,Kalyan Nagar CBSE</option>
                <option value="mysore">RCIS,Mysuru</option>
                <option value="RCIS,Mysuru">RCIS,Sarjapur</option>
                <option value="RCIS,Begur">RCIS,Begur</option>
                <option value="RCIS,MS Palya<">RCIS,MS Palya</option>
                <option value="RCIS,Chamrajpet">RCIS,Chamrajpet</option>
            </select><br />

            <input type="text" placeholder="Grade for Applying*" id="side_grade" name="side_grade" required><br />

            <input type="text" placeholder="Date of Birth*" id="side_dob" name="side_dob" required><br />

            <input type="text" placeholder="Residing area*" id="side_dob" name="side_dob" required><br />

            <textarea class="text-input" type="text" id="side_message" name="side_message" placeholder="Enter Message*" rows="2" cols="20"></textarea>

            <button type="submit" class="btn" name="side-enquiry" id="side-enquiry">Enquire Now</button>
            <!-- <span id="error_message" class="text-danger">All Fields are required</span>
            <span id="success_message" class="text-success">Successfully submitted</span> -->
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