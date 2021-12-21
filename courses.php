<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cource | The Sankalp Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include"head-links.php" ; ?>

  </head>
  <body>
  <?php include"header.php" ;?>

   
<section class="pages">
        <div class="container">
            <h2><center><u>Our Valuable Courses</u></center></h2>
            <div class="row">
                 
               
                    <div class="col-lg-3" id="round">
                        <div id="rou">
                             <img src="images/iit.jpg" height="200" width="200" class="rounded-circle">
                        </div>
                        <p><b>IIT JEE</b></p>
                    </div>
                    <div class="col-lg-3" id="round">
                        <div id="rou">
                            <img src="images/nda.jpg" height="200" width="200" class="rounded-circle">
                        </div>
                        <p><b>   NDA</b></p>
                    </div>
                    <div class="col-lg-3" id="round">
                        <div id="rou">
                            <img src="images/med.jpg" height="200" width="200" class="rounded-circle">
                        </div>
                        <p><b>Medical</b></p>
                    </div>
                    <div class="col-lg-3" id="round">
                        <div id="rou">
                             <img src="images/board.jpg" height="200" width="200" class="rounded-circle">
                        </div>
                        <p><b>Board Exam</b></p>
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