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
                
                <div class="col-lg-6">
                    <h2>Location and Overview:</h2>
                    <p>Established in the year 2015, The Shivanya Computer Education in Bokaro, Bokaro is a top player in the category Computer Academy in the Bokaro. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Bokaro. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day.</p>
                </div>
                <div class="col-lg-6">
                    <img src="images/comm.jpg" alt="com" class="img-fluid">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                     <p>This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Bokaro, this establishment occupies a prominent location in Bokaro. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is known to provide top service in the following categories: DNITC, DCITC, PG-DCSC, MDCSC, ADCPC, DCOMPC, ADCSC, DCOAC, MCCSC etc.</p>

                    <h2>Products and Services offered:</h2>
                    <p>The Shivanya Computer Education in Bokaro has a wide range of products and services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of payment, such as Cash,Visa Card,Debit Card,Cheques,Credit Card. This establishment is functional from 09:00-00:00 - 21:00-00:00.</p>
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