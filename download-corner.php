<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Downloads</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include"head-links.php" ; ?>

  </head>
  <body>
  <?php include"header.php" ;?>

    <section class="pages" id="downloads">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Download Corner</h2><hr>
                    <p><a href="downloads/admission/adform.pdf" target="_blank" class="btn btn-warning">Download Admission Form</a></p>
                   <!--  <p><a href="downloads/test/test-1.pdf" target="_blank" class="btn btn-warning">Download Test-1</a></p> -->
                    <hr><h4>Study Material : </h4><hr>
                    <!-- <p><a href="downloads/study-material/Continuity-and-Differentiablity-Differentiation.pdf" target="_blank" class="btn btn-warning">Continuity and Differentiablity, Differentiation</a></p>
                     -->
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