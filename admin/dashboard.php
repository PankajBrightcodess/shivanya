<?php 
session_start();
$msg = "";
	if (isset($_SESSION['msg'])) {
		$msg = $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	if($msg != ""){
		echo "<script> alert('$msg') </script>";
	}
	// print_r($_SESSION['role']);die;
	if($_SESSION['role']!='1'){
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include 'header-links.php'; ?>
	<title>Admin Login | Shivanya</title>
</head>
<body style="background:#0f4a65;">
<?php include 'menu.php'; ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 dashboard">
				<h1>Shivanya Computer Education</h1>
			</div>
		</div>
	</div>
</section>
	<?php include 'footer-links.php'; ?>
</body>
</html>