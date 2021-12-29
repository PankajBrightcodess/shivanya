<?php 
session_start();
  include_once('admin/connection.php');
  $msg = "";
  if (isset($_SESSION['msg'])) {
    $msg=$_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  if ($msg != "") {
    echo "<script> alert('$msg') </script>";
  }
  
  $id= $_SESSION['enroll'];
  $query="SELECT * FROM `result` WHERE `enroll`='$id'";
  $run=mysqli_query($conn,$query);
  while ($data=mysqli_fetch_assoc($run)) {
    $center[]=$data;
  }
  // echo '<pre>';
  // print_r();die;
?>
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
            <h2><center><u>Student Details</u></center></h2>
             <div class="row all-center">
              <div class="col-md-8">
                  <div class="row" style="border:1px">
                      <div class="col-md-6 mb-3"><strong>Roll No:</strong> </div>
                      <div class="col-md-6 mb-3"><?php echo $center[0]['enroll'];?></div>
                      <div class="col-md-6 mb-3"><strong>Course: </strong> </div>
                      <div class="col-md-6 mb-3"><?php echo $center[0]['course'];?>     </div>
                      <div class="col-md-6 mb-3"><strong>Name: </strong> </div>
                      <div class="col-md-6 mb-3"><?php echo $center[0]['name'];?></div>
                  </div>
              </div>     
              <div class="col-md-4">
                  <img src="upload/<?php echo $center[0]['upload_image']?>" height="200" width="200" class="img-fluid">
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