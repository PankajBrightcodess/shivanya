<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Results | Shivanya Computer Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include"head-links.php" ; ?>

  </head>
  <body>
  <?php include"header.php" ;?>

   
<section class="pages">
    <div class="container ">
            <h2><center><u>Results</u></center></h2>
             <div class="row all-center">
               <div class="col-md-9 mb-3 md-12"><input type="text" name="roll" placeholder="Enter Your Roll No." class="form-control"></div>
               <div class="col-md-3 md-12"><input type="submit" class="btn btn-sm btn-success"  value="Submit" name=""></div>      
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