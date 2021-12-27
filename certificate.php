<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gallery | The Shivanya Computer Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include"head-links.php" ; ?>

  </head>
  <body>
  <?php include"header.php" ;?>

    <section class="pages">
        <div class="container">

        <!-- 1 -->
                <div class="row my-img">
                            <div class="col-md-3 mb-3">
                                    <a href="#"  >  <!-- data-toggle="modal" data-target="#myModal" -->
                                      <img src="images/certificate/cer01.jpeg" id="img1" class=" avoid-click" width="100%">   <!-- showimg -->
                                    </a>
                                </div>
                                <div class="col-md-3 my-img mb-3">
                                    <a href="#" id="link1">   <!-- data-toggle="modal" data-target="#myModal" -->
                                      <img src="images/certificate/cer02.jpeg" id="img2" class=" avoid-click" width="100%"> <!-- img-responsive showimg -->
                                    </a>
                                </div>
                                <div class="col-md-3 my-img mb-3">
                                    <a href="#" id="link1" >  <!-- data-toggle="modal" data-target="#myModal" -->
                                      <img src="images/certificate/cer03.jpeg" id="img3" class="img-responsive showimg avoid-click" width="100%">
                                    </a>
                                </div>
                                <div class="col-md-3 my-img mb-3">
                                  <a href="#" id="link1" >  <!-- data-toggle="modal" data-target="#myModal" -->
                                     <img src="images/certificate/cer08.jpeg" id="img4" class="img-responsive showimg avoid-click" width="100%">
                                  </a>  
                               </div> 
                                 
                                
                      </div>
           <!-- 2      -->
           
                  <div class="row my-img">
                        <div class="col-md-4 my-img mb-3">
                            <a href="#" id="link1" >  <!-- data-toggle="modal" data-target="#myModal" -->
                              <img src="images/certificate/cer07.jpeg" id="img4" class="img-responsive showimg avoid-click" width="100%">
                            </a>  
                        </div> 
                        <div class="col-md-4 my-img mb-3">
                            <a href="#" id="link1" >  <!-- data-toggle="modal" data-target="#myModal" -->
                              <img src="images/certificate/cer09.jpeg" id="img4" class="img-responsive showimg avoid-click" width="100%">
                            </a>  
                        </div> 
                        <div class="col-md-4 my-img mb-3">
                            <a href="#" id="link1" >  <!-- data-toggle="modal" data-target="#myModal" -->
                              <img src="images/certificate/cer10.jpeg" id="img4" class="img-responsive showimg avoid-click" width="100%">
                            </a>  
                        </div> 
                  </div>
                   <div class="row my-img">
                        <div class="col-md-4 my-img mb-3">
                            <a href="#" id="link1" >  <!-- data-toggle="modal" data-target="#myModal" -->
                              <img src="images/certificate/cer06.jpeg" id="img4" class="img-responsive showimg avoid-click" width="100%">
                            </a>  
                        </div> 
                        <div class="col-md-4 my-img mb-3">
                            <a href="#" id="link1" >  <!-- data-toggle="modal" data-target="#myModal" -->
                              <img src="images/certificate/cer11.jpeg" id="img4" class="img-responsive showimg avoid-click" width="100%">
                            </a>  
                        </div> 
                        <div class="col-md-4 my-img mb-3">
                            <a href="#" id="link1" >  <!-- data-toggle="modal" data-target="#myModal" -->
                              <img src="images/certificate/cer12.jpeg" id="img4" class="img-responsive showimg avoid-click" width="100%">
                            </a>  
                        </div> 
                  </div>

          <!-- 3 -->
            </div>


            
            <!-- Modal -->
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                    <!-- <h3 class="modal-title">Shivanya Computer Education</h3> -->
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" >
                    	<div class="row">
                        	<div class="col-md-12"> 
                            	<div id="showImg"> </div>
                            </div>
                        </div>
                      <!-- here we create the image dynamically -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--Modal-->
        </div>
    </section>
    <?php include"footer.php" ;?>     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
	<script>
    	$(document).ready(function() {
			$('.showimg').on('click', function() {
				$("#showImg").empty();
				var image = $(this).attr("src");
				$("#showImg").html("<img class='img-responsive avoid-click' width='100%' src='" + image + " ' />")
			})
		});
    </script>
  </body>
</html>