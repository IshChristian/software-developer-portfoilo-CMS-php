<?php
include "admin/include/connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IshChristian - portfoilo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">IshChristian</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#work">Work</a></li>
          <li><a class="nav-link scrollto " href="#blog">Blog</a></li>
          <li class="dropdown"><a href="https://codewithchristian.blogspot.com"><span>tutorials</span>8U</i></a>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(admin/uploads/croped.jpg">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">I am Ishimwe Christian</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="admin/uploads/croped.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>Ishimwe Christian</span></p>
                        <p><span class="title-s">Profile: </span> <span>full stack developer</span></p>
                        <p><span class="title-s">Email: </span> <span>ishimwechristia94@gmail.com</span></p>
                        <p><span class="title-s">Phone: </span> <span>(250) 791364641</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <?php
                        $sel=mysqli_query($con, "SELECT * FROM skill");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){ 
                                ?>
                    <span><?php echo $rows['s_name'] ?></span> <span class="pull-right"><?php echo $rows['s_proficiency'] ?>%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $rows['s_proficiency'] ?>%;" aria-valuenow="<?php echo $rows['s_proficiency'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php
                            }
                          }
                          ?>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <?php
                        include "admin/include/connection.php";
                        $sel=mysqli_query($con, "SELECT * FROM about");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                $_SESSION['sid']=$rows['s_id'];
                                ?>
                    <p class="lead">
                      <?php echo $rows['Description']; ?>
                    </p>
                    <?php
                            }
                          }else{
                            echo "Data not found";
                          }
                          ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
         
          $sel=mysqli_query($con, "SELECT * FROM service");
          if(mysqli_num_rows($sel)>0){
              while($rows=mysqli_fetch_array($sel)){
                  $_SESSION['sid']=$rows['s_id'];
                  ?>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><?php echo $rows['s_icon'] ?></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?php echo $rows['s_name'] ?></h2>
                <p class="s-description text-center">
                <?php echo $rows['s_description'] ?>
                </p>
              </div>
            </div>
          </div>
          <?php
              }
            }else{
              echo "Data not found";
            }
            ?>
          <div class="col-md-4">
          
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio - Project
              </h3>
              <p class="subtitle-a">
                Demo / Downloads / Donate / Reply
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
        <?php
        
        $sel=mysqli_query($con, "SELECT * FROM project");
        if(mysqli_num_rows($sel)>0){
            while($rows=mysqli_fetch_array($sel)){
                
                ?>
          <div class="col-md-4">
            <div class="work-box">
              <a href="<?php echo $rows['Link'] ?>">
                <div class="work-img">
                  <img src="admin/uploads/<?php echo $rows['Image']; ?>" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?php echo $rows['Title'] ?></h2><br>
                    <p class="s-description"><?php echo $rows['Title'] ?></p>
                    <a href="" class='btn btn-primary text-while'>Donate Now</a>
                    <div class="w-more">
                      <span class="w-ctegory"><?php echo $rows['Link'] ?></span> / <span class="w-date"><?php echo $rows['date'] ?></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="admin/uploads/<?php echo $rows['Title'] ?>.zip"> <span class="bi bi-download"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
            }
          }else{
            echo "Data not found";
          }
          ?>
         

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Clients Worked
              </h3>
              <p class="subtitle-a">
                Company / Group / Cooperation / Person
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
              <?php
        
              $sel=mysqli_query($con, "SELECT * FROM user");
              if(mysqli_num_rows($sel)>0){
                  while($rows=mysqli_fetch_array($sel)){
                      
                ?>
                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="admin/uploads/<?php echo $rows['image'] ?>" width="180" height="180" alt="" class="rounded-circle b-shadow-a">
                      <span class="author"><?php echo $rows['name'] ?></span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                      <?php echo $rows['about'] ?>
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
                    <?php
                  }
                }else{
                  echo "Data not found";
                }
                ?>
                
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <p class="subtitle-a">
                Courses / Tips / Tutorials
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
        <?php
        
        $sel=mysqli_query($con, "SELECT * FROM video");
        if(mysqli_num_rows($sel)>0){
            while($rows=mysqli_fetch_array($sel)){
                
          ?>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <div class="embed-responsive embed-responsive-4by4">
                    <iframe class="embed-responsive-item" width="354" height="634" src="<?php echo $rows['url'] ?>" frameborder="0"></iframe>
                </div>
                <a href="blog-single.html"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category"><?php echo $rows['category'] ?></h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html"><?php echo $rows['name'] ?></a></h3>
                <p class="card-description">
                <?php echo $rows['about'] ?>
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Ishimwe Christian</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> <?php echo $rows['date'] ?>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
          }else{
            echo "Data not found";
          }
          ?>
          
        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Whether you're a startup looking to make a splash in the digital world or an
                        established enterprose seeking to enhance your online presence, i'm here to help
                        .let's collaborate to turn your ideas into reality and take business to new height.
                        get in touch today to discuss your project and take the first step towards digital seccess!
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> Rwanda - Kigali / Nyarugenge - Muhima</li>
                        <li><span class="bi bi-phone"></span> (250) 791364641</li>
                        <li><span class="bi bi-envelope"></span> ishimwechristia94@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>IshChristian</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by IshChristian
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>