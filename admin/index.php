<?php 
	session_start();
	$msg = "";
		if(isset($_SESSION['msg'])){
			$msg = $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		if($msg != ""){
			echo "<script> alert('$msg') </script>";
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include 'header-links.php'; ?>
	<title>Admin Login | Shivanya Computer Education</title>
</head>
<body style="background:#e69200; ">
	<section class="login" style="margin-top: 15rem;">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="login-form" style="background: #482300; padding:15px; border-radius: 15px;">
						<div class="logo-section">
							<h1 style="font-size: 35px; text-align:center; color: white;">Shivanya Computer Education</h1><hr>
						</div>
						<form action="action.php" method="POST">
							<div class="form-group">
								<!-- <i class="fa fa-envelope-square fa-lg passkey"></i> -->
								<input type="email" name="email" placeholder="Enter User Id:" class="form-control" required="" style="padding-left: 30px;">
							</div>
							<div class="form-group">
								<!-- <i class="fa fa-key fa-lg passkey"></i> -->
								<input type="password" name="pass" placeholder="Enter Password:" class="form-control" required="" style="padding-left: 30px;">
							</div>
							<input type="submit" class="btn btn-warning form-control" name="login" value="Login">
						</form>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</section>
	<?php include 'footer-links.php'; ?>
</body>
</html>