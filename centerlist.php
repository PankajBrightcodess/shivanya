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
  $query="SELECT * FROM `sh_addcenter`";
  $run=mysqli_query($conn,$query);
  while ($data=mysqli_fetch_assoc($run)) {
    $center[]=$data;
  }
  // echo '<pre>';
  // print_r($center);die;
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
        <div class="container">
            <h2><center><u>Center List</u></center></h2>
            <div class="row">
               <div class="col-md-12 col-12">
                   <table class="table" style="border-radius: 20px;">
                   <thead>
                       <tr style="background: #702556; border-radius:10px; border:1px;color: white;" >
                           <th>S.N.</th>
                           <th>CENTER CODE</th>
                           <th>CENTER NAME</th>
                           <th>ADDRESS</th>
                           <th>CONTACT NUMBER</th>
                       </tr>
                   </thead>
                   <tbody style="background:white;">
                    <?php
                        if(!empty($center)){
                            $i=0;
                            foreach ($center as $key => $value) {
                                $i++;
                                ?>
                                <tr>
                                   <td><?php echo $i.'.';?></td>
                                   <td><?php echo $value['cent_code']?></td>
                                   <td><?php echo $value['cent_name']?></td>
                                   <td><?php echo $value['address']?></td>
                                   <td><?php echo $value['mobile']?></td>
                                </tr>



                                <?php
                            }
                        }
                    ?> 
                   </tbody>
               </table> 
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