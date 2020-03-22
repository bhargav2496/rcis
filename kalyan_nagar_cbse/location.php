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

    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="primary-nav">
        <a class="navbar-brand" id="nav-logo" href="index.php"><img id="Logo" src="../images/rcis_logo.png" alt="" style="width: 275px;"></a>
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
    <div class="image-location-banner" style="margin-top:70px;height: 450px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="lg-text">Our Location</h1>
                    <p class="image-location-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------welcome message------------ -->
    <div class="welcome">
        <h1 class="text-center" id="media" style="color: #1ca250;margin-top: 15px;">Location</h1>
        <!-- <h5 class="text-center">Fourteen years and still counting!</h5> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.166056568223!2d77.64030131430485!3d13.02509521722757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae172ff41a8d9b%3A0x579ddbfe8e3e88e3!2sRoyale%20Concorde%20International%20School!5e0!3m2!1sen!2sin!4v1584526183407!5m2!1sen!2sin"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>          
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------footer-------------- -->

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
<script src="../js/parallax.js "></script>
</script>
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