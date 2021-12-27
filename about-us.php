<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>About | Shivanya Computer Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include"head-links.php" ; ?>

  </head>
  <body>
  <?php include"header.php" ;?>

    <section class="pages">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h2>Location and Overview:</h2><hr class="border-warning"></div>
                <div class="col-lg-6">
                    
                    <p>Established in the year 2017, The Shivanya Computer Education in Bokaro, Bokaro is a top player in the category Computer Academy in the Bokaro. Shivanya Computer Education Private Limited to offer quality education which will ultimately lead the young minds to a successful career. We do not limit ourselves only to classroom teaching but we think beyond it. Registered Under Ministry of Corporate Affairs, Govt. of India and Registered under Income Tax Department, Govt. of India.The Company is also Certified by Quality Management System An ISO 9001:2015 Certified.The Institution Conducting Computer Oriented Courses. It Offers Courses of One Month, Two Months, Three Months, Six Months, One Year, One Year Six Months, Two Years and Short Term Duration Courses.The Institute Provide Value Based Quality Education For Computer Technology.</p>
                </div>
                <div class="col-lg-6">
                    <img src="images/img01.jpg" alt="com" class="img-fluid">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12">
                     <p>We embrace a learning environment that will prepare you for the path ahead. Our classes incorporate traditional learning styles as well as hands-on experiences. It is known to provide top service in the following categories: DNITC, DCITC, PG-DCSC, MDCSC, ADCPC, DCOMPC, ADCSC, DCOAC, MCCSC etc. Your success is our priority. To support our inclusive community, we provide a personal approach, tailoring learning methods to each student's needs. our time duration is 07:00 AM to 05:00 PM.</p>
                </div>
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