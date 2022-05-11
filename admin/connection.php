<?php 
if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']=='localhost'){
	$conn=new mysqli("localhost","root","","db_shivanya");
}
else{
	// $conn=new MySQLi("localhost","softwarebss_shivanya","Shivanya@123#","softwarebss_shivanya");
	$conn=new MySQLi("localhost","brightwm_shivanyacomp","Shivanyacomp@123#","brightwm_shivanyacomp");
}
if($conn->connect_errno){
	echo "connection failed";
}
date_default_timezone_set('Asia/Kolkata');
?>
