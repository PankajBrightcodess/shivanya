<?php 
session_start();
include 'connection.php';
function Imageupload($dir,$inputname,$allext,$pass_width,$pass_height,$pass_size,$newname){
	if(file_exists($_FILES["$inputname"]["tmp_name"])){
		// do this contain any file check
		$file_extension = strtolower( pathinfo($_FILES["$inputname"]["name"], PATHINFO_EXTENSION));
		$error="";
		if(in_array($file_extension, $allext)){
			// file extension check
			list($width, $height, $type, $attr) = getimagesize($_FILES["$inputname"]["tmp_name"]);
			$image_weight = $_FILES["$inputname"]["size"];
			if($width <= "$pass_width" && $height <= "$pass_height" && $image_weight <= "$pass_size"){
				// dimension check
				$tmp = $_FILES["$inputname"]["tmp_name"];
				$extension[1]="jpg";
				$name=$newname.".".$extension[1];
				if(move_uploaded_file($tmp, "$dir" .$name)){
					return true;
				}

			}
			else{
				$error .="Please upload photo size of $pass_width X $pass_height !!!";
			}
		}
		else{
			$error .="Please upload an image !!!";
		}
	}
	else{
		$error .="Please Select an image !!!";
	}
	return $error;
}
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$query="SELECT * FROM `admin` WHERE `email`='$email' and `password`='$pass' and `status`='1'";
	$run=mysqli_query($conn,$query);
	$num=mysqli_num_rows($run);
	if($num){
		$data=mysqli_fetch_assoc($run);
		$_SESSION['role'] = $data['role'];
		$_SESSION['id'] = $data['id'];
		if($_SESSION['role']==1){
			header('location:dashboard.php');
		}
		elseif ($_SESSION['role']==2){
			header('location:../member/dashboard.php'); 
		}	
	}
	else{
		$_SESSION['msg']='Invalid details !!!';
		header("Location: " . $_SERVER['HTTP_REFERER']);
	}
}