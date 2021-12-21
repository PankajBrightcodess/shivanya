<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gallery | The Sankalp Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include"head-links.php" ; ?>

  </head>
  <body>
  <?php include"header.php" ;?>

    <section class="pages">
        <div class="container imghov">
          <h2><center>Gallery</center></h2>
            <div class="row">
               
            <div class="col-lg-3 my-3 ">
            <img src="images/1.jpg" alt="ref.jpg" class="w-100 h-100 img-thumbnail my-1"  >
            
          </div>
          <div class="col-lg-3 my-3">
             <img src="images/2.jpg" alt="wash.jpg" class="w-100 h-100 img-thumbnail my-1">
            
          </div>
          <div class="col-lg-3 my-3">
            <img src="images/3.jpg" alt="ac.jpg" class="w-100 h-100 img-thumbnail my-1">
            
          </div>
          <div class="col-lg-3 my-3">
             <img src="images/4.jpg" alt="wat.jpg" class="w-100 h-100 img-thumbnail my-1">
          
          </div>
          <div class="clearfix"></div>
        </div><hr>

<div class="row">
               
            <div class="col-lg-3 my-3 ">
            <img src="images/5.jpg" alt="ref.jpg" class="w-100 h-100 img-thumbnail my-1"  >
            
          </div>
          <div class="col-lg-3 my-3">
             <img src="images/6.jpg" alt="wash.jpg" class="w-100 h-100 img-thumbnail my-1">
            
          </div>
          <div class="col-lg-3 my-3">
            <img src="images/7.jpg" alt="ac.jpg" class="w-100 h-100 img-thumbnail my-1">
            
          </div>
          <div class="col-lg-3 my-3">
             <img src="images/8.jpg" alt="wat.jpg" class="w-100 h-100 img-thumbnail my-1">
          
          </div>
          <div class="clearfix"></div>
        </div><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
               
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