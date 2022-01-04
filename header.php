    <?php
        if(!isset($_GET['page'])){
                $page="home";
            }else{
              $page=$_GET['page'];	
            }
        ?> 

<section class="top-strip">
  	<div class="container">
    	<div class="row">
        	<div class="col-12 col-sm-6 col-md-4 col-lg-4"><div class="top-mail"><a href=""><i class="fas fa-envelope-open"></i>&nbsp; support@shivanyacomputer.com</a></div></div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-5"><div class="top-contacts"><a href=""><span>Enquiry No:</span>&nbsp; +91 - 9852528104,&nbsp;<span>Support No:</span>&nbsp; +91 - 8340534016</a> </div></div>
            <div class="col-12 col-sm-12 col-md-2 col-lg-3">
                <div class="top-social-icons">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://web.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <!-- <a href="" target="_blank"><img src="images/jd.png" alt="justdial" class="img-fluid"></a> -->
                    <a href="https://youtu.be/1zpNp8aVK-0" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
  </section>
  <section class="logo-nav">
  	<div class="container-fluid">
    	<div class="row">
        	<div class="col-12 col-sm-12 col-md-3 col-lg-4">
            	<div class="logo-title"><a class="navbar-brand" href="index.php"><img src="images/logo/logo.jpeg" height="110" width="150" alt="logo"></a></div>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-8 mob-nav-bg">
            	  <nav class="navbar navbar-expand-md navbar-dark my-nav-bg">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item <?php if($page=="home"){ echo 'active';} ?>"><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></li>                                                                <!-- about-us.php -->
                      <li class="nav-item <?php if($page=="about-us"){ echo 'active';} ?>"><a class="nav-link" href="about-us.php?page=about-us">About Us</a></li>                                                                                                       <!-- courses.php?page=courses -->
                      <li class="nav-item <?php if($page=="courses"){ echo 'active';} ?>"><a class="nav-link" href="courses.php?page=courses">Courses</a></li>
                      <!-- results.php?page=results -->
                      <!-- <li class="nav-item <?php if($page=="results"){ echo 'active';} ?>"><a class="nav-link" href="results.php?page=results">Results</a></li> -->
                      <!-- facility.php?page=facility -->
                     <li class="nav-item <?php if($page=="facility"){ echo 'active';} ?>"><a class="nav-link" href="facility.php?page=facility">Facilities</a></li>
                         <li class="nav-item <?php if($page=="faculty"){ echo 'active';} ?>"><a class="nav-link" href="faculty.php?page=faculty">Faculty</a></li>
                     <!-- gallery.php?page=gallery -->
                      <li class="nav-item <?php if($page=="certificate"){ echo 'active';} ?>"><a class="nav-link" href="certificate.php?page=certificate">Certificate</a></li>
                      <!-- contact-us.php?page=contact-us -->
                      <li class="nav-item <?php if($page=="contact-us"){ echo 'active';} ?>"><a class="nav-link" href="contact-us.php?page=contact-us">Contact Us</a></li>
                      <li class="nav-item"><h4><a href="enqueryform.php" class="btn btn-warning blink"><strong>Admission Now</strong></a></h4></li>
                       &nbsp;<li class="nav-item"><h4><a href="results.php" class="btn btn-warning blink"><strong>Results</strong></a></h4></li>
                    </ul>
                  </div>
                </nav>
            </div><!-- /col-lg-8 -->
            <div class="clearfix"></div>
        </div>
    </div>
  </section>
