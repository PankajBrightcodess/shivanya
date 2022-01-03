<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include"head-links.php" ; ?>

  </head>
  <body>

  <section class="centerlogin">
  	<div class="container">
        <form method="post" action="center/action.php">
		<div class="row">
            <div class="col-lg-12 ">
                <center><div class="logo-title"><a class="navbar-brand" href="index.php"><img src="images/logo/logo.jpeg" height="110" width="150" alt="logo"></a></div></center>
            </div>
            <div class="col-md-12">
            	<h2>Login</h2><hr class="border-warning">
                <form action="center/action">
                    <div class="form-row">
                        <div class="col"><input type="text" name="email" placeholder="Enter Email Id :" class="form-control py-1" required></div>
                        
                    </div>
                    <div class="form-row mt-4">                        
                        <div class="col"><input type="text" name="pass" placeholder="Enter Password :" class="form-control py-1" required></div>
                    </div>
                    
                    <button type="submit" name="center_login" class="my-3 btn btn-success btn-lg btn-block">Send</button>
                    
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        </form>
    </div>
 </section>

  </body>
</html>