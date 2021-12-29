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
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cource | The Shivanya Computer Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include"head-links.php" ; ?>

  </head>
  <body>
  <?php include"header.php" ;?>

   
<section class="pages">
    <div class="container">
        <form method="post" action="admin/action.php">
       <div class="row enqueryform">
        <div class="col-lg-12 col-12 mb-3">
            <h2>New Centre Franchise Form</h2>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Name<span style="color: Red;">*</span></label>
            <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Gender<span style="color: Red;">*</span></label>
            <select class="form-control" name="gender">
                <option>---SELECT---</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
         <div class="col-md-6 col-12 mb-2">
            <label>Date Of Birth<span style="color: Red;">*</span></label>
            <input type="date" name="dob" placeholder="Active Mobile Number" class="form-control" required>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Mobile<span style="color: Red;">*</span></label>
            <input type="text" name="mobile" placeholder="Active Mobile Number" class="form-control" required>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Email<span style="color: Red;">*</span></label>
            <input type="mail" name="email" placeholder="Active Email" class="form-control" required>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Location Address<span style="color: Red;">*</span></label>
            <input type="text" name="location" placeholder="Address" class="form-control" required>
        </div>
       
        <div class="col-md-6 col-12 mb-2">
            <label>City<span style="color: Red;">*</span></label>
            <input type="text" name="city" placeholder="Enter City" class="form-control" required>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>State<span style="color: Red;">*</span></label>
            <input type="text" name="state" placeholder="Enter State" class="form-control" required>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Pin code<span style="color: Red;">*</span></label>
            <input type="text" name="pincode" placeholder="Enter Pin code" class="form-control" required>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Are You Already Running Center?<span style="color: Red;">*</span></label>
            <select class="form-control" name="precenter">
                <option>---SELECT---</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Select Your language<span style="color: Red;">*</span></label>
            <select class="form-control" name="language">
                <option>---SELECT---</option>
                <option value="hindi">Hindi</option>
                <option value="english">English</option>
                <option value="both">Both</option>
            </select>
        </div>
         <div class="col-md-6 col-12 mb-2">
            <label>Other Info.</label>
            <input type="text" name="otherinfo" placeholder="Enter Other Info." class="form-control">
        </div>
        <div class="col-md-6 col-12 mb-5">
            <label>Amount.</label>
            <input type="number" name="amount" placeholder="Enter Amount" class="form-control">
        </div>
        <div class="col-md-4 col-4"></div>
        <div class="col-md-4 col-4"><input type="submit" name="center_request" class="btn btn-sm btn-success form-control" value="Submit"></div>
        <div class="col-md-4 col-4"></div>

      </div> 
      </form>
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