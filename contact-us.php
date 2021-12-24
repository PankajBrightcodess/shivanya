<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact Us | Shivanya Computer Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include"head-links.php" ; ?>

  </head>
  <body>
  <?php include"header.php" ;?>

  <section class="pages" id="contactpg">
  	<div class="container">
		<div class="row">
            <div class="col-md-7">
            	<h2>Contact Us</h2><hr class="border-warning">
                <form action="#">
                    <div class="form-row">
                        <div class="col"><input type="text" name="name" placeholder="Name :" class="form-control py-4" required></div>
                        <div class="col"><input type="tel" name="contact" placeholder="Contact :" class="form-control py-4" required></div>
                    </div>
                    <div class="form-row mt-4">                        
                        <div class="col"><input type="email" name="email" placeholder="Email :" class="form-control py-4" required></div>
                    </div>
                    <div class="form-row">
                    	<div class="col mt-4"><textarea name="message" placeholder="Message :" class="form-control py-4" required style="min-height:75px;"></textarea></div>
                    </div>
                    <button type="submit" class="my-4 btn btn-success btn-lg btn-block">Send</button>
                </form>
            </div>
            <div class="col-md-5">
            	<h2>Official Address</h2><hr class="border-warning">
                <p>SHIVANYA COMPUTER EDUCATION PRIVATE LIMITED</p>
                <p>ADARSH CO OPERATIVE , SHOPPING CENTRE , SHOP NO - 24 , BOKARO</p>
                <p>Bokaro – 827012 (Jharkhand)</p>
                <p><strong><i class="fab fa-whatsapp text-success"></i></strong> <a href="tel:09703427163"  title="09703427163">+91 - 9852528104, </a></p>
                <p><strong><i class="fas fa-envelope text-success"></i></strong> <a href="shivanyacomputereducation@gmail.com">shivanyacomputereducation@gmail.com</a></p>
                <p><strong><i class="fas fa-globe text-success"></i></strong> <a href="https://shivanyacomputer.com/">www.shivanyacomputer.com</a></p>
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