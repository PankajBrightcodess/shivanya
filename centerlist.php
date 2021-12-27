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
                       <tr>
                           <td>1.</td>
                           <td>SCE0001</td>
                           <td>NATIONAL EDUCATION CENTER</td>
                           <td>2nd Floor, Janki Tower,
                                Opp. Easy Day Club, Morabadi,
                                Ranchi – 834008, Jharkhand</td>
                           <td>******8436</td>
                       </tr>
                       <tr>
                           <td>2.</td>
                           <td>SCE0002</td>
                           <td>NEW DESHARI COMPUTER TRAINING CENTRE</td>
                           <td>JQR7, Near PNB Bnak, Ramgarh 897656 Jharkhand</td>
                           <td>******4973</td>
                       </tr>
                       <tr>
                           <td>3.</td>
                           <td>SCE0003</td>
                           <td>HIND COMPUTER EDUCATION</td>
                           <td>01TSC, Opp. Big Bazar, 834015 Ranchi Jharkhand</td>
                           <td>******7395</td>
                       </tr>
                       <tr>
                           <td>4.</td>
                           <td>SCE0004</td>
                           <td> NEED INFORMATION TECHNOLOGY</td>
                           <td>Street1, Near Ratu, ranchi 8200015 Jharkhand</td>
                           <td>******9246</td>
                       </tr>
                       <tr><td>5.</td>
                           <td>SCE0005</td>
                           <td>SATYAM COMPUTER</td>
                           <td>Gandhi nagar, Near bank Mode, Dhanbad 8270045 Jharkhand</td>
                           <td>******3481</td></tr>
                       <tr><td>6.</td>
                           <td>SCE0006</td>
                           <td>FUTURE GALAXY COMPUTER EDUCATION</td>
                           <td>ACC Colony, Near ASC Collage, Hazaribagh 845762 Jharkhand</td>
                           <td>******2886</td></tr>
                       <tr><td>7.</td>
                           <td>SCE0007</td>
                           <td>WAVE COMPUTERS</td>
                           <td>Subash nagar,Dhanbad 8309876,Jharkhand</td>
                           <td>******7936</td></tr>
                       <tr><td>8.</td>
                           <td>SCE0008</td>
                           <td>ULTRA COMPUTER CENTRE</td>
                           <td>ST-987, Ranchi road, Dhanbad 8245006 Jharkhand</td>
                           <td>******4917</td></tr>

                           <tr><td>9.</td>
                           <td>SCE0009</td>
                           <td> VIJAY COMPUTER INSTITUTE</td>
                           <td>762-BS,Near SO office, Khalari ranchi 827305 Jharkhand</td>
                           <td>******4910</td></tr>

                           <tr><td>10.</td>
                           <td>SCE0010</td>
                           <td>INSTITUTE OF YOUNG ENGINEERS</td>
                           <td>AV87-12,Near Durga Printers,Ratu ranchi 824570 Jharkhand</td>
                           <td>******3017</td></tr>
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