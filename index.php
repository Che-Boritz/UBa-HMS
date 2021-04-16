<!DOCTYPE html>
<html lang="en"> 
<head>

<!-- meta tags -->
<meta charset="utf-8">
<meta name="keywords" content="Bootstrap 4, Medical, multipurpose, Health, RTL" />
<meta name="description" content="Bootstrap 4 HTML5 Template" />
<meta name="author" content="www.themeht.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Title -->
<title>UBa HMS</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/vendor/images/favicon.ico" />

<!-- inject css start -->

<!--== bootstrap -->
<link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/vendor/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--== animate -->
<link href="<?php echo base_url(); ?>assets/vendor/css/animate.css" rel="stylesheet" type="text/css" />

<!--== fontawesome -->
<link href="<?php echo base_url(); ?>assets/vendor/css/fontawesome-all.css" rel="stylesheet" type="text/css" />

<!--== themify-icons -->
<link href="<?php echo base_url(); ?>assets/vendor/css/themify-icons.css" rel="stylesheet" type="text/css" />

<!--== audioplayer -->
<link href="<?php echo base_url(); ?>assets/vendor/css/audioplayer/plyr.css" rel="stylesheet" type="text/css" />

<!--== magnific-popup -->
<link href="<?php echo base_url(); ?>assets/vendor/css/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

<!--== owl-carousel -->
<link href="<?php echo base_url(); ?>assets/vendor/css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

<!--== slit-slider -->
<link href="<?php echo base_url(); ?>assets/vendor/css/slit-slider/slit-slider.css" rel="stylesheet" type="text/css" />

<!--== datepicker -->
<link href="<?php echo base_url(); ?>assets/vendor/css/date-picker/date-picker.css" rel="stylesheet" type="text/css" />

<!--== base -->
<link href="<?php echo base_url(); ?>assets/vendor/css/base.css" rel="stylesheet" type="text/css" />

<!--== shortcodes -->
<link href="<?php echo base_url(); ?>assets/vendor/css/shortcodes.css" rel="stylesheet" type="text/css" />

<!--== default-theme -->
 <link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet" type="text/css" />
 
<!--== responsive -->
<link href="<?php echo base_url(); ?>assets/vendor/css/responsive.css" rel="stylesheet" type="text/css" />

<!--== color-customizer -->
<link href="#" data-style="styles" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendor/css/color-customize/color-customizer.css" rel="stylesheet" type="text/css" />
</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->



<!-- preloader end -->


<!--header start-->

<header id="site-header" class="header"> 
  <div id="header-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="index.html">
              <img id="logo-img" class="img-center" src="<?php echo base_url(); ?>assets/vendor/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <!-- Left nav -->
              <ul class="nav navbar-nav ml-auto mr-auto">
                <li class="nav-item"> <a class="nav-link active" href="#" >Home</a>
                </li>  
                <li class="nav-item"><a href="#NurseModal" class=" nav-link trigger-btn" data-toggle="modal">Nurse</a>
                </li> 
                <li class="nav-item"><a href="#LabTechModal" class=" nav-link trigger-btn" data-toggle="modal">LabTech</a>
                </li> 
                <li class="nav-item"><a href="#DoctorModal" class=" nav-link trigger-btn" data-toggle="modal">Doctor</a>
                </li>  
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Indexcontroller/new_student'); ?>" >Student</a>
                </li>  
              </ul>
            </div> 
            <div class="dropdown"> 
                <button class="btn btn-theme btn-theme-green btn-sm appoint-btn" type="button" data-toggle="dropdown">Log In As
                </button>
                <ul class="dropdown-menu">  
                    <li  class="subNav"><a class="nav-link" href="<?php echo base_url('Indexcontroller/new_student'); ?>" >Student</a>
                    </li>  
                    <li class="subNav"><a href="#NurseModal" class=" nav-link trigger-btn" data-toggle="modal">Nurse</a>
                    </li> 
                    <li class="subNav"><a href="#LabTechModal" class=" nav-link trigger-btn" data-toggle="modal">LabTech</a>
                    </li> 
                    <li  class="subNav"><a href="#DoctorModal" class=" nav-link trigger-btn" data-toggle="modal">Doctor</a>
                    </li>  
                </ul>
            </div>  
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<!--header end-->


<!--hero section start-->

<section class="fullscreen-banner p-0 o-hidden">
  <div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">
      <div class="sl-slide sl-trans-elems" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
        <div class="sl-slide-inner" data-bg-img="<?php echo base_url(); ?>assets/vendor/images/bg/01.jpg">
          <div class="align-center">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-md-12 mr-auto">
                  <h5 class="text-white letter-space-1 mb-3 wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="2s">UBa Medical System</h5>
                  <h1 class="text-white mb-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="1s">UBaHMS <span>Provide Best</span> Solution</h1> 
                  <p class="lead text-white mb-3 wow zoomIn" data-wow-duration="1.1s" data-wow-delay="3s">We try to make maximum use of all our experience, accumulated potential,
                    <br>knowledge of modern medicine.</p> <a class="btn btn-theme" href="about-us.html">Learn More</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
        <div class="sl-slide-inner" data-bg-img="<?php echo base_url(); ?>assets/vendor/images/bg/05.jpg" data-overlay="0">
          <div class="align-center">
            <div class="container">
              <div class="row text-center">
                <div class="col-lg-10 col-md-12 ml-auto mr-auto">
                  <h5 class="text-white letter-space-1 mb-3 wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="2s">UBa Medical System</h5> 
                  <h1 class="mb-3 wow fadeInUp text-white" data-wow-duration="0.9s" data-wow-delay="1s">What Makes UBa Medical System different</h1> 
                  <p class="lead text-white mb-3 wow zoomIn" data-wow-duration="1.1s" data-wow-delay="3s">We try to make maximum use of all our experience, accumulated potential,
                    <br>knowledge of modern medicine.</p> <a class="btn btn-theme btn-radius wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="3s" href="about-us.html">Learn More</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner" data-bg-img="<?php echo base_url(); ?>assets/vendor/images/bg/03.jpg">
          <div class="align-center">
            <div class="container">
              <div class="row text-right">
                <div class="col-lg-8 col-md-12 ml-auto">
                  <h5 class="text-white letter-space-1 mb-3 wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="2s">UBa Medical System</h5> 
                  <h1 class="text-white mb-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="1s">We<span>Provide the Best</span> at UBA Medical Center</h1> 
                  <p class="lead text-white mb-3 wow zoomIn" data-wow-duration="1.1s" data-wow-delay="3s">We try to make maximum use of all our experience, accumulated potential,
                    <br>knowledge of modern medicine.</p> <a class="btn btn-theme btn-radius wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="3s" href="about-us.html">Learn More</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /sl-slider -->
    <nav id="nav-dots" class="nav-dots"> <span class="nav-dot-current"></span>
      <span></span>
      <span></span>
    </nav>
  </div>
  <!-- /slider-wrapper -->
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

 


<!--about us start-->

<section class="pt-0 pb-lg-0 bnr-form py-5">
  <div class="container bnr-form">
    <div class="row align-items-center">   
      <div class="col-lg-5 col-md-12">
        <img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/images/about/00.png" alt="">
      </div>
      <div class="col-lg-7 col-md-12"> 
      <div class="col-lg-12 col-md-12">
          <img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/images/logo-removebg-preview.png" alt="UBa HMS">
      </div> 
        <div class="section-title mb-2"> 
          <h2 class="title">Welcome To <span>UBa HMS</span></h2>
        </div>
        <p class="text-black mb-3 lead font-w-5">The UBa health center is there to help students so long as their health issues are concern, when students are sick and need assistance or councelling our services are open and free of charge.</u></span> Here at the health unit we have the emergency ward where 
          consultation are done there after which the patient is being sent to the lab for diagnosis after that to the doctor for further investigations.</p>
        <p class="line-h-3 mb-4">We also have the pharmacy where drugs are given to the students  free of charge because they have been in-secured or covered by insurance</p>
        <div class="row text-center">
          <div class="col-sm-4">
            <div class="ht-rounded-skill">
              <div class="rounded-skill" data-circle-startTime=0 data-circle-maxValue="79" data-circle-dialWidth=12 data-circle-type="progress">
                <div class="skill-bg">
                  <div class="skill-num">00:00:00</div>
                </div>
              </div> <span class="skill-title">Medical Center</span>
            </div>
          </div>
          <div class="col-sm-4 xs-mt-5">
            <div class="ht-rounded-skill">
              <div class="rounded-skill" data-circle-startTime=0 data-circle-maxValue="80" data-circle-dialWidth=12 data-circle-type="progress">
                <div class="skill-bg">
                  <div class="skill-num">00:00:00</div>
                </div>
              </div> <span class="skill-title">Success Case</span>
            </div>
          </div>
          <div class="col-sm-4 xs-mt-5">
            <div class="ht-rounded-skill">
              <div class="rounded-skill" data-circle-startTime=0 data-circle-maxValue="90" data-circle-dialWidth=12 data-circle-type="progress">
                <div class="skill-bg">
                  <div class="skill-num">00:00:00</div>
                </div>
              </div> <span class="skill-title">Happy Patients</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--about us end-->


<!--timetable start-->

<section class="p-0 o-hidden text-white">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-12 px-5 py-5 lg-px-3 md-py-3 theme-bg">
        <h4 class="text-white text-capitalize">Top Doctor</h4>
        <p class="lead">To most of the male students we give them adviceson too much taking of alcohol, drug abuse cigarette smoking and even marijuanner.Some of these students are being influenced by others. <u class="font-w-8"> So we tell them the consequences of these things</u> which we see some of them staet behaving in funny ways and eventually madness and school dropout. </p>
      </div>
      <div class="col-lg-4 col-md-12 px-5 py-5 lg-px-3 md-py-3 dark-bg">
        <h4 class="text-white text-capitalize">Working Hours</h4>
        <ul class="list-unstyled working-hours">
          <li><span>Monday - Friday</span> 8:00 to 17:00</li>
          <li><span>Saturday</span> 9:00 to 18:00</li>
          <li><span>Sunday</span> 9:00 to 13:00</li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-12 px-5 py-5 lg-px-3 md-py-3 theme-bg">
        <h4 class="text-white text-capitalize">Advice on HIV/AIDs</h4>
        <p class="lead">As it concerns advice on good health one of the priorities is to give students pre-counseling on HIV and AIDS, Since most of them already most of the ways to prevent the disease. We just revise with them and then talk to them on how you can 
          live with the virus and don't infect other people when you have been tested positive </p>
         
      </div>
    </div>
  </div>
</section>

<!--timetable end-->


<!--featured start-->

<section>
  <div class="container">
          
    <div class="section-title mb-2 py-5"> 
        <h2 class="title">What We Do For <span>Uba Students</span></h2>
    </div>
    <div class="row"> 
      <div class="col-lg-4 col-md-6">
        <div class="featured-item text-center">
          <div class="featured-icon"> <i class="flaticon-stethoscope"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h5>Health Education</h5>
          </div>
          <div class="featured-desc">
            <p>Sensitization on hygene and general health tips for a healthy living</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 sm-mt-5">
        <div class="featured-item text-center">
          <div class="featured-icon"> <i class="flaticon-doctor-1"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h5>Minor Surgeries</h5>
          </div>
          <div class="featured-desc">
            <p>A dynamic health team to attend to minor problems</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 md-mt-5">
        <div class="featured-item text-center">
          <div class="featured-icon"> <i class="flaticon-drug"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h5>Pharmacy Services</h5>
          </div>
          <div class="featured-desc">
            <p>A well equipped pharmacy to serve the student population</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="featured-item text-center">
          <div class="featured-icon"> <i class="flaticon-blood-donation"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h5>Hospitalization</h5>
          </div>
          <div class="featured-desc">
            <p>Hospitalization of both students and staff for serious health cases</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="featured-item text-center">
          <div class="featured-icon"> <i class="flaticon-doctor"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h5>Specialized Consultation</h5>
          </div>
          <div class="featured-desc">
            <p>Well qualified and specialist to attend to different health conditions of both staff and students </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="featured-item text-center">
          <div class="featured-icon"> <i class="flaticon-ambulance"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h5>Emergency Care</h5>
          </div>
          <div class="featured-desc">
            <p>A stand-by team in case of any accidents or emergencies</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--featured end-->


<!--video start-->

<section class="theme-bg text-center custom-pb-18">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto"> 
        <div class="section-title mb-0 mt-8"> 
          <h2 class="mb-0 text-white font-w-4">Various Services offered at the University Of Bamenda (UBa) <span class="font-w-7"> Health Center </span></h2>
        </div>
      </div>
    </div>
  </div>
</section>

<!--video end-->


<!--service start-->

<section class="text-center pt-0 custom-mt-10">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-carousel owl-theme dark-service" data-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-margin="30" data-autoplay="true">
          <div class="item">
            <div class="service-item">
              <div class="service-<?php echo base_url(); ?>assets/vendor/images">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/images/service/01.jpg" alt="">
                <div class="service-icon"> <i class="flaticon-doctor"></i>
                </div>
              </div>
              <h4>Adolescence <Health>
              <Counselling></Counselling></h4>
              <div class="service-description">
                <p>During adolescence social adn biological changes can create health issues in teenagers and staff as a whole.</p> 
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="service-images">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/images/service/02.jpg" alt="">
                <div class="service-icon"> <i class="flaticon-health"></i>
                </div>
              </div>
              <h4>Routine Systematic Medical Visit</h4>
              <div class="service-description">
                <p>At the Health center we offer routine systematic medical visits to both students and staff to check on their health. </p> 
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="service-<?php echo base_url(); ?>assets/vendor/images">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/images/service/03.jpg" alt="">
                <div class="service-icon"> <i class="flaticon-brain"></i>
                </div>
              </div>
              <h4>Pharmacy Services 24/7</h4>
              <div class="service-description">
                <p>The university pharmacy is open 24/7, equipped with drugs and at the service of the university population. </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="service-<?php echo base_url(); ?>assets/vendor/images">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/images/service/04.jpg" alt="">
                <div class="service-icon"> <i class="flaticon-tooth"></i>
                </div>
              </div>
              <h4>Laboratory Services</h4>
              <div class="service-description">
                <p>Our laboratories and well equipped and have skilled Lab-technicians at your disposal and we do offer a variety of tests</p> 
              </div>
            </div>
          </div>

          <div class="item">
            <div class="service-item">
              <div class="service-<?php echo base_url(); ?>assets/vendor/images">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/images/service/06.jpg" alt="">
                <div class="service-icon"> <i class="flaticon-orthopedics"></i>
                </div>
              </div>
              <h4>General Consultation</h4>
              <div class="service-description">
                <p>The Health center also does offer general consultation to both staff and students in case of any ill health</p> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--service end-->


<!--counter start-->

<section class="pt-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <div id="accordion" class="accordion style-1">
          <div class="card active">
            <div class="card-header">
              <h6 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">Counseling Sessions</a>
              </h6>
            </div>
            <div id="collapse1" class="collapse show" data-parent="#accordion">
              <div class="card-body">What is also very important is that has been added to our counselling session is the new pandemic which is COVID-19 what we do is that for any patient 
                who comes to consult, you are obliged to be tested for COVID-19
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h6 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">General Health </a>
              </h6>
            </div>
            <div id="collapse2" class="collapse" data-parent="#accordion">
              <div class="card-body">Health is define as the state of complete physical mental and social well-being in the absent of diseases. Being healthy should be 
                the number one priority of every human being living on th planet earth. Student leaving a healthy life style can help prevent chronic diseases and long term illnesses such as HBsAg, STDs, UTI.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h6 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Systematic Medical Visit</a>
              </h6>
            </div>
            <div id="collapse3" class="collapse" data-parent="#accordion">
              <div class="card-body">This is a system put in place in all state universities to check the health condition of students that have enrolled into the institution both new and old
                This exercise is very important because it helps students discover potential health problems that are asymptomatic, there by saving them from future chronic health issues
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-12 md-mt-5">
        <div class="row">
          <div class="col-sm-6">
            <div class="counter"> <span class="count-number" data-to="0" data-speed="10000">150</span>
              <label>Hospital rooms</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="counter"> <span class="count-number" data-to="1000" data-speed="10000">175</span>
              <label>Success Cases</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="counter mt-5"> <span class="count-number" data-to="4" data-speed="10000">344</span>
              <label>Our Doctors</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="counter mt-5"> <span class="count-number" data-to="15350" data-speed="10000">125</span>
              <label>Happy Patients</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--counter end-->


<!--testimonial start-->

<section class="grey-bg">
  <div class="container">
    <div class="row">
    <div class="section-title mb-2"> 
        <h2 class="title">How To Prevent Your Self From <span>Covid-19</span></h2>
    </div>           
      <div class="col-lg-10 col-md-12 ml-auto py-5 mr-auto">
        <div class="owl-carousel owl-theme no-pb slide-arrow-2" data-items="1" data-dots="false" data-nav="true" data-autoplay="true">
          <div class="item">
            <div class="testimonial">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="testimonial-avatar box-shadow">
                    <div class="testimonial-img">
                      <img class="img-center w-100 radius" src="<?php echo base_url(); ?>assets/vendor/images/testimonial/01.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="testimonial-content"><span><i class="fas fa-quote-left"></i></span>
                      <ol>
                        <li>Avoid touching your eyes, nose, and mouth</li>
                        <li>Avoid direct contact with live animals if this is impossible, make sure to clean your hands afterwards</li>
                        <li>Do not eat raw or poorly cooked animal products and wash your hands, clean surfaces and utensils afterwards</li>
                        <li>If you develop a fever cough or difficulty breathing seek Medical care</li>
                      </ol>
                    <div class="testimonial-caption">
                      <h6>Dr Babila</h6>
                      <label>-Doctor-</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="testimonial-avatar box-shadow">
                    <div class="testimonial-img">
                      <img class="img-center w-100 radius" src="<?php echo base_url(); ?>assets/vendor/images/testimonial/02.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="testimonial-content"> <span><i class="fas fa-quote-left"></i></span>
                    <p>
                      <ol>
                        <li>Wash your hands regularily with soap and water or with an alcohol based gel</li>
                        <li>Need to cough or sneeze? Do it into a tisue or bent elbow and then wash your hands</li>
                        <li>Stay at least a metrre away fro other people, especially if they are coughing, sneezing or have a fever</li>
                      </ol>
                    </p>
                    <div class="testimonial-caption">
                      <h6>Mme </h6>
                      <label>- Head Nurse</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--testimonial end-->
 
<!--client start-->

<section class="text-center theme-bg py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       <div class="owl-carousel owl-theme no-pb" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="1" data-margin="30" data-dots="false" data-autoplay="true">
          <div class="item">
            <img class="img-center" src="<?php echo base_url(); ?>assets/vendor/images/client/01.png" alt="">
          </div>
          <div class="item">
            <img class="img-center" src="<?php echo base_url(); ?>assets/vendor/images/client/02.png" alt="">
          </div>
          <div class="item">
            <img class="img-center" src="<?php echo base_url(); ?>assets/vendor/images/client/03.png" alt="">
          </div>
          <div class="item">
            <img class="img-center" src="<?php echo base_url(); ?>assets/vendor/images/client/04.png" alt="">
          </div>
          <div class="item">
            <img class="img-center" src="<?php echo base_url(); ?>assets/vendor/images/client/05.png" alt="">
          </div>       
        </div>
      </div>
    </div>
  </div>
</section>

<!--client end-->

</div>

<!--body content end--> 


<!--footer start-->

<footer class="footer grey-bg">
  <div class="primary-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-logo mb-3">
            <img id="footer-logo-img" class="img-center" src="<?php echo base_url(); ?>assets/vendor/images/logo.png" alt="">
          </div>
          <p class="mb-3">UBa Medical and Health Ut wisi enim ad minim veniam, wisi nibh tristique risus. quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis nisl ut aliquip erat volutpat</p> <a class="btn-simple" href="#"><span>Read More <i class="ml-2 fas fa-long-arrow-alt-right"></i></span></a>
        </div>
        <div class="col-lg-3 col-md-6 sm-mt-5 footer-list pl-lg-5">
          <h5>Our <span class="text-theme"> Department</span></h5>
          <ul class="list-unstyled">
            <li><a href="outpatient-depertment.html">Outpatient Depertment</a>
            </li>
            <li><a href="pediatrics-depertment.html">Pediatrics Depertment</a>
            </li>
            <li><a href="neurology-depertment.html">Neurology Depertment</a>
            </li>
            <li><a href="dental-depertment.html">Dental Depertment</a>
            </li>
            <li><a href="cardiology-depertment.html">Cardiology Depertment</a>
            </li>
            <li><a href="diagnostic-depertment.html">Diagnostic Depertment</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-12 md-mt-5 pl-lg-5">
          <div class="row">
            <div class="col-sm-5 footer-list">
              <h5>Quick <span class="text-theme"> Link</span></h5>
              <ul class="list-unstyled">
                <li><a href="about-us.html">About us</a>
                </li>
                <li><a href="contact-1.html">Contact Us</a>
                </li>
                <li><a href="privacy-policy.html">Privacy Policy</a>
                </li>
                <li><a href="terms-and-conditions.html">Terms & Condition</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-7 xs-mt-5">
              <h5>Get In <span class="text-theme"> Touch</span></h5>
              <ul class="media-icon list-unstyled">
                <li class="mb-4"> <i class="flaticon-paper-plane"></i>
                  <p class="mb-0">Out Of Main Compus</p>
                </li>
                <li class="mb-4"> <i class="flaticon-email"></i>
                  <a href="mailto:themeht23@gmail.com">UBaHMS@gmail.com</a>
                </li>
                <li> <i class="flaticon-phone-call"></i>
                  <a href="tel:+237673335913">+237 677 557 788</a>
                </li>
                <br/>
                <li><i class="fa fa-clock"></i>
                  <a href="#">Woking Hours Tuesday to Saturday (8am to 3pm)</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="subscribe-form">
              <form id="mc-form" class="group row align-items-center no-gutters">
                <div class="col-sm-8">
                  <input type="email" value="" name="EMAIL" class="email box-shadow" id="mc-email" placeholder="Email Address" required="">
                </div>
                <div class="col-sm-4 xs-mt-1">
                  <input class="btn btn-theme btn-circle" type="submit" name="subscribe" value="Subscribe">
                </div>
                <label for="mc-email" class="subscribe-message"></label>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
  <div class="secondary-footer text-center">
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-12"> <span>All Rights Copyright <a href="UBaHMS"> UBaHMS</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->


</div>

<!-- page wrapper end -->

<!-- Nurse Modal start --> 
<div id="NurseModal" class="modal modal-login-contianer fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Log In As Nurse</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo base_url(); ?>index.php/Indexcontroller/login_nurse" name="form" id="form">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="text" class="form-control" name="password" placeholder="Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
					</div>
					<p class="hint-text"><a href="#">Forgot Password?</a></p>
				</form>
			</div>
			<div class="modal-footer">Don't have an account? <a href="#">Create one</a></div>
		</div>
	</div>
</div> 
<!-- Nurse Modal end --> 
<!-- LabTech Modal start --> 
<div id="LabTechModal" class="modal modal-login-contianer fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Log In As LabTech</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo base_url(); ?>index.php/Indexcontroller/login_labtech" name="form" id="form">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="text" class="form-control" name="password" placeholder="Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
					</div>
					<p class="hint-text"><a href="#">Forgot Password?</a></p>
				</form>
			</div>
			<div class="modal-footer">Don't have an account? <a href="#">Create one</a></div>
		</div>
	</div>
</div> 
<!-- LabTech Modal end --> 

<!-- Doctor Modal start --> 
<div id="DoctorModal" class="modal modal-login-contianer fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Log In As Doctor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo base_url(); ?>index.php/Indexcontroller/login_doctor" name="form" id="form">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="text" class="form-control" name="password" placeholder="Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primar btn-block btn-lg">Sign In</button>
					</div>
					<p class="hint-text"><a href="#">Forgot Password?</a></p>
				</form>
			</div>
			<div class="modal-footer">Don't have an account? <a href="#">Create one</a></div>
		</div>
	</div>
</div> 
<!-- Doctor Modal end --> 
 
 
<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-stethoscope"></i></a></div>

<!--back-to-top end-->

 
<!-- inject js start -->

<!--== theme -->
<script src="<?php echo base_url(); ?>assets/vendor/js/theme.js"></script>

<!--== audioplayer -->
<script src="<?php echo base_url(); ?>assets/vendor/js/audioplayer/plyr.min.js"></script>

<!--== magnific-popup -->
<script src="<?php echo base_url(); ?>assets/vendor/js/magnific-popup/jquery.magnific-popup.min.js"></script> 

<!--== owl-carousel -->
<script src="<?php echo base_url(); ?>assets/vendor/js/owl-carousel/owl.carousel.min.js"></script> 

<!--== slit-slider -->
<script src="<?php echo base_url(); ?>assets/vendor/js/slit-slider/jquery.ba-cond.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/slit-slider/jquery.slitslider.js"></script>

<!--== jarallax -->
<script src="<?php echo base_url(); ?>assets/vendor/js/jarallax/jarallax.min.js"></script> 

<!--== counter -->
<script src="<?php echo base_url(); ?>assets/vendor/js/counter/counter.js"></script> 

<!--== skill -->
<script src="<?php echo base_url(); ?>assets/vendor/js/skill/circle-progressbar.js"></script> 

<!--== countdown -->
<script src="<?php echo base_url(); ?>assets/vendor/js/countdown/jquery.countdown.min.js"></script> 

<!--== isotope -->
<script src="<?php echo base_url(); ?>assets/vendor/js/isotope/isotope.pkgd.min.js"></script> 

<!--== contact-form -->
<script src="<?php echo base_url(); ?>assets/vendor/js/contact-form/contact-form.js"></script>

<!--== datepicker -->
<script src="<?php echo base_url(); ?>assets/vendor/js/date-picker/date-picker.js"></script>

<!--== nice-select -->
<script src="<?php echo base_url(); ?>assets/vendor/js/jquery.nice-select.js"></script>

<!--== color-customize -->
<script src="<?php echo base_url(); ?>assets/vendor/js/color-customize/color-customizer.js"></script> 

<!--== wow -->
<script src="<?php echo base_url(); ?>assets/vendor/js/wow.min.js"></script>

<!--== theme-script -->
<script src="<?php echo base_url(); ?>assets/vendor/js/theme-script.js"></script>
 
</body> 
</html>
