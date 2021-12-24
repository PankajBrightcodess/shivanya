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
	<title>Admin Login | Shivanya Computer Education</title>
</head>
<body style="background:#e8e7e5;">
<?php include 'menu.php'; ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 dashboard mb-3">
				<h1 style="color:#403226; margin-top: 2rem; text-align: center;">Shivanya Computer Education</h1>
			</div>
		</div>
		<div class="row">
                 
               <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="small-box bg-info" >
                                <div class="inner">
                                    <h3> 10</h3>

                                    <p>Center </p>
                                <a href="" style="color:#fff">More Details</a>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                          <div class="col-md-3 mb-3">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3> 286</h3>

                                    <p>Students </p>
                                <a href="" style="color:#fff">More Details</a>
                                </div>
                                <div class="icon">
                                    <i class="far fa-money-bill-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-3 mb-3">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3> 20</h3>

                                    <p>Today Addmission</p>
                                <a href="" style="color:#fff">More Details</a>
                                </div>
                                <div class="icon">
                                   <i class="fas fa-table" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="small-box bg-dark">
                                <div class="inner">
                                    <h3>18</h3>
                                    <p>Total Employees</p>
                                <a href="" style="color:#fff">More Details</a>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-money-bill-wave" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
             </div>
	</div>
</section>
	<?php include 'footer-links.php'; ?>
</body>
</html>