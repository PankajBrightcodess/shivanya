<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Faculty | REX Home Tuition</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include"head-links.php" ; ?>

  </head>
  <body>
  <?php include"header.php" ;?>

    <section class="pages" id="faculty">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><h2 class="text-center">Faculty</h2><hr class="w-50"></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="images/faculty.jpg" alt="faculty" class="img-fluid">
                    <h5>Ajay Kumar</h5>
                    <p><strong>Qualification :</strong> B Tech.</p>
                    
                </div>
                <div class="col-md-3">
                    <img src="images/faculty.jpg" alt="faculty" class="img-fluid">
                    <h5>Manoj Kumar</h5>
                    <p><strong>Qualification :</strong> M.Sc.</p>
                </div>
                <div class="col-md-3">
                    <img src="images/female-faculty.jpg" alt="faculty" class="img-fluid">
                    <h5>Vandana Mishra</h5>
                    <p><strong>Qualification :</strong> M. Sc</p>
                </div>
                <div class="col-md-3">
                    <img src="images/faculty.jpg" alt="faculty" class="img-fluid">
                    <h5>Arun Kumar</h5>
                    <p><strong>Qualification :</strong> B.Tech</p>
                </div>
                <div class="clearfix"></div>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-3">
                    <img src="images/faculty.jpg" alt="faculty" class="img-fluid">
                    <h5>Rohit Singh</h5>
                    <p><strong>Qualification :</strong> M.Sc</p>
                </div>
                <div class="col-md-3">
                    <img src="images/faculty.jpg" alt="faculty" class="img-fluid">
                    <h5>Pankaj Mishra</h5>
                    <p><strong>Qualification :</strong> M.Tech</p>
                </div>
                <div class="col-md-3">
                    <img src="images/female-faculty.jpg" alt="faculty" class="img-fluid">
                    <h5>Puja Jain</h5>
                    <p><strong>Qualification :</strong> Ph.D</p>
                </div>
                <div class="col-md-3">
                    <img src="images/faculty.jpg" alt="faculty" class="img-fluid">
                    <h5>Anup Sinha</h5>
                    <p><strong>Qualification :</strong> M.Tech</p>
                </div>
                <div class="clearfix"></div>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-3">
                    <img src="images/female-faculty.jpg" alt="faculty" class="img-fluid">
                    <h5>Shweta Pandey</h5>
                    <p><strong>Qualification :</strong> M.Sc</p>
                </div>
                <div class="col-md-3">
                    <img src="images/female-faculty.jpg" alt="faculty" class="img-fluid">
                    <h5>Punam Das</h5>
                    <p><strong>Qualification :</strong> M.Sc</p>
                </div>
                <div class="col-md-3">
                    <img src="images/faculty.jpg" alt="faculty" class="img-fluid">
                    <h5> B. K Singh</h5>
                    <p><strong>Qualification :</strong> M.Sc</p>
                </div>
                <div class="col-md-3">
                    <img src="images/faculty.jpg" alt="faculty" class="img-fluid">
                    <h5>Vinod Mallik</h5>
                    <p><strong>Qualification :</strong> B.Tech</p>
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