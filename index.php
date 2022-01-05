<?php 
session_start();
 include_once('admin/connection.php');
$msg = "";
    if (isset($_SESSION['msg'])) {
        $msg = $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    if ($msg != "") {
        echo "<script> alert('$msg')</script>";
    }
    $query="SELECT * FROM `testimonial` WHERE `status`='1'";
    $run=mysqli_query($conn,$query);
    while ($data=mysqli_fetch_assoc($run)) {
      $testimonial[]=$data;
    }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shivanya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include"head-links.php" ; ?>
    <!-- Start Slider HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End Slider HEAD section -->

  </head>
  <body>
  <?php include"header.php" ;?>
<section class="banner">
    <!-- Start Slider BODY section -->
    <div id="wowslider-container1">
    <div class="ws_images"><ul>
            <li><a href="#"><img src="data1/images/New/01.jpg" alt="b1" title="" id="wows1_0"/></a></li>
            <li><a href="#"><img src="data1/images/New/02.jpg" alt="b2" title="" id="wows1_1"/></a></li>
            <li><a href="#"><img src="data1/images/New/03.jpg" alt="b2" title="" id="wows1_2"/></a></li>
            <li><a href="#"><img src="data1/images/New/04.jpg" alt="b2" title="" id="wows1_3"/></a></li>
            <li><a href="#"><img src="data1/images/New/05.jpg" alt="b2" title="" id="wows1_4"/></a></li>
            <li><a href="#"><img src="data1/images/New/06.jpg" alt="b2" title="" id="wows1_5"/></a></li>


        </ul></div>
        <div class="ws_bullets"><div>
            <a href="#" title=""><span><img src="data1/tooltips/b1.jpg" alt="b1"/></span></a>
            <a href="#" title=""><span><img src="data1/tooltips/b2.jpg" alt="b2"/></span></a>

        </div></div>
    <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <!-- End Slider BODY section -->
</section>
<section class="news-scroll" >
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-4 pr-0"><h4>New Batch Start From  :</h4></div>
            <div class="col-5 col-sm-5 col-md-5  col-lg-4 pl-0"><marquee behavior="scroll" direction="left" scrollamount="4" onMouseOver="this.stop()" onMouseOut="this.start()">1st january 2022 , Online Classes is also Available</marquee></div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mob-btn"><a href="pay.php" class="btn btn-success">Pay Now</a></div>
        </div>
    </div>
</section>
<section class="banner-bottom" >
	<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2>
                    <a href="center/" class="btn btn-warning blink"><strong>Centre Login</strong></a>
                    <a href="student/" class="btn btn-warning blink"><strong>Student Login</strong></a>
                    <a href="centerlist.php" class="btn btn-warning blink"><strong>Centre List</strong></a>
                    <a href="newcenterenquery.php?page=courses" class="btn btn-warning blink"><strong>Apply For New Centre Franchise</strong></a>
                    <!-- <a href="results.php" class="btn btn-warning blink"><strong>Results</strong></a> -->
                    
                </h2>
            </div>
        </div>

    </div>
</section>
  <!-- <section class="notice-news">
      <hr style="border:1px solid#61300B;width: 14%;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="notice">
              <h4>Notice Borad</h4>
              <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="3" style="overflow: hidden; max-height:75%!important; z-index: 99;">
                <?php $i=0; foreach ($notice as $notices) { ++$i; ?>
                <p><i class="fas fa-angle-right"></i>&nbsp;&nbsp;<a target="_blank" href="<?php echo "admin/uploads/".$notices['doc']; ?>"><?php echo $notices['notice']; ?></a></p>
                <?php } ?>
              </marquee>
            </div>
          </div>
         
          <div class="clearfix"></div>
        </div>
      </div>
    </section> -->
<section class="intro">
	<div class="container-fluid">
    	<div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="news">
                <h2>Enquiry for New Franchise</h2>
                <form action="sendmail.php" method="post" enctype="multipart/form-data">
                  <input type="text" name="name" placeholder="Name :" class="form-control py-2 my-3" required="">
                  <input type="tel" maxlength="10" name="contact" placeholder="Contact :" class="form-control py-2 mb-3" required="">
                  <input type="email" name="email" placeholder="Email :" class="form-control py-2 mb-3" required="">
                  <textarea name="query" placeholder="Message :" class="form-control py-2 mb-3" required style="min-height:75px;"></textarea>
                  <button type="submit" class="my-2 btn btn-success btn-block" name="SendMessage">Send</button>
                  </form>
              </div>
            </div>

        	<div class="col-md-6 col-lg-4">
            	<h1>THE SHIVANYA COMPUTER EDUCATION</h1>
                <p>Shivanya Computer Education Private Limited to offer quality education which will ultimately lead the young minds to a successful career. We do not limit ourselves only to classroom teaching but we think beyond it. Quality education is possible only through quality teachers who come out from quality institution in order to achieve target of quality teacher education, it is great pleasure to announce that our institution would do its best for the upliftment of the society through quality education and development of skills.</span></p>
                <p class="text-center"><a href="#" class="btn btn-warning">Read More</a></p>
            </div>
            <div class="col-md-12 col-lg-4">
                <video controls="" autoplay="" muted="">
                    <source src="video/class.mp4" type="video/mp4">
                </video>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
 <section class="successful-students">
     <div class="successful-students-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <h2>Our Successful Students</h2><hr class="w-50 mb-5 border-warning">
                   <div class="customer-logos slider">
                   
                   </div>
                </div>
           </div>
        </div>
	</div>
</section>
<section class="testimonial">
	<div class="container">
    	<div class="row">
                    <div class="col-lg-6" >
                <div class="card bg-danger" style="height:410px">
                    <div class=" card-header"><h2>Testimonial</h2></div>
                    <div class="card-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                                        <div class="testi-pic mb-3"><h5 style="color: #FFFB26;font-style: italic;"><?php echo $testimonial[0]['testimonial']?></h5></div>
                                        <div class="testi-pic"><strong style="color:#C6F7EF;"><?php echo $testimonial[0]['testi_name']?></strong></div>
                                    </div>
                            <?php if(!empty($testimonial)){
                                foreach ($testimonial as $key => $value) {
                                    if($value['testimonial']!=$testimonial[0]['testimonial']){
                                        ?>
                                        <div class="carousel-item">
                                            <div class="testi-pic mb-3"><h5 style="color: #FFFB26;font-style: italic;"><?php echo $value['testimonial']?></h5></div>
                                            <div class="testi-pic"><strong style="color:#C6F7EF;"><?php echo $value['testi_name']?></strong></div>
                                        </div>
                                    <?php

                                    }  
                                }
                            }
                            ?>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                            <span class="sr-only"></span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                            <span class="sr-only"></span>
                          </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" style="box-shadow: 5px 10px 8px #888888; background: #DDD8DA;">
            <h2 class="text-danger">Why Choose Us?</h2><hr class="border-light">
                <ul style="font-size: 15px; font-weight: 600;">
                    <li><i class="fas fa-pencil-alt"></i>&nbsp; Highly Effective system of teachings.</li>
                    <li><i class="fas fa-pencil-alt"></i>&nbsp; Equiped with latest assignments.</li>
                    <li><i class="fas fa-pencil-alt"></i>&nbsp; Special attention for weak students.</li>
                    <li><i class="fas fa-pencil-alt"></i>&nbsp; Weekly  class test.</li>
                    <li><i class="fas fa-pencil-alt"></i>&nbsp; Modified study materials.</li>
                    <li><i class="fas fa-pencil-alt"></i>&nbsp; Difficult concepts broken down to easily understand.</li>
                    <li><i class="fas fa-pencil-alt"></i>&nbsp; Completion of syllabus in due time with revision.</li>
                    <li><i class="fas fa-pencil-alt"></i>&nbsp; Customized plan to study.</li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>





<?php include"footer.php"; ?>
<?php include"bootstrap-body-links.php"; ?>
    <!--  setting pop up cookie -->
    <!--//<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>-->

    <!-- Successful students slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script>
		$(document).ready(function(){
		$('.customer-logos').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,
			arrows: false,
			dots: false,
			pauseOnHover: false,
			responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 4
				}
			}, {
				breakpoint: 520,
				settings: {
					slidesToShow: 3
				}
			}]
		});
	});
    </script>
   <!-- //Successful students slider -->

  </body>
</html>
