<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Faculty | The Shivanya Computer Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include"head-links.php" ; ?>

  </head>
  <body>
  <?php include"header.php" ;?>

    <section class="pages" id="faculty">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><h2 class="text-center">Faculty</h2><hr class="w-50 border-warning"></div>
            </div>
            <div class="row">
                    <div class="col-md-4">
                    <img src="images/sce1.jpeg" alt="faculty" class="img-fluid" style="height: 200px; width: 346px;">
                    <h5>Kumar Kundan</h5>
                    <p><strong>Qualification :</strong>Maths Honours, MDCC-MASTER DIPLOMA IN COMPUTER, PG-DCC- Post Graduate Diploma In Computer Course</p>
                    <p><strong>Post :</strong>Director</p>

                </div>
                <div class="col-md-4">
                    <img src="images/sce2.jpeg" alt="faculty" class="img-fluid" style="height: 200px; width: 346px;">
                    <h5>Vibha Kumari</h5>
                    <p><strong>Qualification :</strong> M.Com, PG-DCC-post graduate diploma in Computer Course.</p>
                    <p><strong>Post :</strong>Co-Director</p>
                </div>
                 <div class="col-md-4">
                    <img src="images/sce3.jpeg" alt="faculty" class="img-fluid" style="height: 200px; width: 346px;">
                    <h5>Muskan Kumari</h5>
                    <p><strong>Qualification :</strong> B Com, Account honours, DCIT(Diploma in Computer Instructor Training).</p>
                    <p><strong>Post :</strong> Senior Instructor</p>
                    
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