<!DOCTYPE html>
<html lang="en">

<head>

     <title>Health - Medical Website Template</title>
     <!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Cursive:wght@400..700&display=swap" rel="stylesheet">






     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to a Professional Health Care</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->

                    <a href="/" class="care-logo text-decoration-none  ">
                         <div class="logo-icon ">
                              <i class="fas fa-heart"></i>
                         </div>
                         <div class="logo-text">
                              <strong>Care</strong><span class="grouplogo">Group</span>
                         </div>
                    </a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#cd" class="smoothScroll"> Dieases</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
                         <li style="position: relative;top:10px">
                              @if(Auth::user())
                              <div class="d-flex">
                                   <a href="/dashboard" class="text-decoration-none"><i class="fa-solid fa-user"></i> {{ Auth::user()->name }}</a>


                                   <form action="/logout" method="post">
                                        @csrf



                                        <button type="submit" class="btn btn-danger btn-sm d-flex logoutbtn">Logout</button>
                                   </form>
                              </div>
                              @else
                              <div class="d-flex">
                                   <a href="/login"><i class="fa-solid fa-user"></i>Sign In</a>
                                   <a href="/register"><i class="fa-solid fa-user"></i>Sign Up</a>
                              </div>
                              @endif
                         </li>


                    </ul>


               </div>



          </div>

     </section>



     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Let's make your life happier</h3>
                                        <h1>Healthy Living</h1>
                                        <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Aenean luctus lobortis tellus</h3>
                                        <h1>New Lifestyle</h1>
                                        <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Pellentesque nec libero nisi</h3>
                                        <h1>Your Health Benefits</h1>
                                        <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp " data-wow-delay="0.6s">Welcome to <span class="  care">Care</span> <span class="group">Group</span></h2>
                              <div class="wow fadeInUp " data-wow-delay="0.8s">
                                   <p class="colourtxt">CARE Group is dedicated to enhancing the delivery of medical services through the integration of advanced technology and patient-centric solutions.</p>
                                   <p class="colourtxt"> With a longstanding presence in the healthcare industry, we strive to provide a seamless platform that connects patients with qualified medical professionals across various specialties. Our objective is to simplify appointment scheduling, improve access to healthcare information, and foster efficient communication between patients and healthcare providers. This initiative reflects our commitment to innovation, excellence, and the continuous improvement of healthcare services.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Neil Jackson</h3>
                                        <p>General Principal</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/team-image1.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Nate Baston</h3>
                                   <p>General Principal</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 010-020-0120</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/team-image2.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Jason Stewart</h3>
                                   <p>Pregnancy</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">pregnancy@company.com</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-facebook-square"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        <li><a href="#" class="fa fa-flickr"></a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/team-image3.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Miasha Nakahara</h3>
                                   <p>Cardiology</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 010-040-0140</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">cardio@company.com</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h1>Latest News</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.html">
                                   <img src="images/news-image1.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>March 08, 2018</span>
                                   <h3><a href="{{ url('/news/about-amazing-technology') }}">About Amazing Technology</a></h3>
                                   <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Jeremie Carlson</h5>
                                             <p>CEO / Founder</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail.html">
                                   <img src="images/news-image2.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>February 20, 2018</span>
                                   <h3><a href="news-detail.html">Introducing a new healing process</a></h3>
                                   <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Jason Stewart</h5>
                                             <p>General Director</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail.html">
                                   <img src="images/news-image3.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>January 27, 2018</span>
                                   <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                                   <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Andrio Abero</h5>
                                             <p>Online Advertising</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- COMMON DISEASES -->

     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">

                              <h1 id="cd">Common dieases</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="">
                                   <img src="images/cancerr.webp" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <center>
                                        <h2>Cancer</h4>
                                   </center>
                                   <hr>
                                   <h4><a href="https://www.who.int/activities/preventing-cancer">Preventions</a></h4>
                                   <h4><a href="https://www.cancer.org/cancer/understanding-cancer/can-cancer-be-cured.html">Cure</a></h4>


                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail.html">
                                   <img src="images/diabetes.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">

                                   <center>
                                        <h2>Diabetes</h3>
                                   </center>
                                   <hr>
                                   <h4><a href="https://www.who.int/news-room/fact-sheets/detail/diabetes">Preventions</a></h4>
                                   <h4><a href="https://www.sciencefocus.com/the-human-body/reverse-type-2-diabetes">Cure</a></h4>

                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail.html">
                                   <img src="images/hypertension.jpeg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <h2>Hypertension</h2>

                                   <hr>
                                   <h4><a href="https://www.who.int/news-room/fact-sheets/detail/hypertension">Preventions</a></h4>
                                   <h4><a href="https://www.healthline.com/health/high-blood-pressure-hypertension#treatment">Cure</a></h4>
                              </div>
                         </div>
                    </div>



               </div>
          </div>
     </section>


     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="/register" onsubmit="return validation()">
                              <!-- SECTION TITLE -->
                              @csrf
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make an appointment</h2>
                              </div>

                              <div class="wow fadeInUp " data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Select Date</label>
                                        <input type="date" name="date" value="" class="form-control">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Select Department</label>
                                        <select class="form-control">
                                             <option>General Health</option>
                                             <option>Cardiology</option>
                                             <option>Dental</option>
                                             <option>Medical Research</option>
                                        </select>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                        <label for="Message">Additional Message</label>
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                                   </div>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>





     <!-- GOOGLE MAP -->
     <section id="google-map">
          <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#">
                                             <h5>Amazing Technology</h5>
                                        </a>
                                        <span>March 08, 2018</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#">
                                             <h5>New Healing Process</h5>
                                        </a>
                                        <span>February 20, 2018</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/tooplate" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2017 Your Company

                                        | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script>
          function validation() {
               var name = document.getElementById("name").value;
               var email = document.getElementById("email").value;
               var phone = document.getElementById("phone").value;
               var message = document.getElementById("message").value;

               if (name == "" || email == "" || phone == "" || message == "") {
                    alert("Please fill all fields");
                    return false;
               }
               return true;
          }
     </script>
</body>

</html>