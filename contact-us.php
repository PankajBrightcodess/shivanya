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
               <p><span>Training Enquiry No. :</span><a href="tel:09852528104"  title="09852528104"> (+91) - 9852528104</a></p>
                <p><span>Another Contact No. :</span><a href="tel:08340534016"  title="08340534016"> (+91) - 8340534016</a></p>
                <p><strong><i class="fab fa-whatsapp text-success"></i></strong> <a href="tel:09703427163"  title="09703427163">+91 - 9852528104, </a></p>
                <p><strong><i class="fas fa-envelope text-success"></i></strong> <a href="supportshivanyacomputer@gmail.com">supportshivanya@gmail.com</a></p>
                <p><strong><i class="fas fa-globe text-success"></i></strong> <a href="https://shivanyacomputer.com/">www.shivanyacomputer.com</a></p>
            </div>
            <div class="col-md-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.476042260754!2d86.13541841538598!3d23.62311698465224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f42379b47dcc9f%3A0xcb08bfc6ca9ced8a!2sSHIVANYA%20COMPUTER%20EDUCATION%20PVT.LTD!5e0!3m2!1sen!2sin!4v1640603123250!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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