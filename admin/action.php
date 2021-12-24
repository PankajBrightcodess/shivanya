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
// '''''''''''''''''''''''''''''''''''''''
if(isset($_POST['login'])){
	// print_r($_POST);die;
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
			
	}
	else{
		$_SESSION['msg']='Invalid details !!!';
		header("Location: " . $_SERVER['HTTP_REFERER']);
	}
}

if(isset($_POST['add_center'])){
	$cent_code = $_POST['cent_code'];
	$cent_name = $_POST['cent_name'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];
	$role = $_POST['role'];
	$added_on = date('Y-m-d');

	$query="INSERT INTO `sh_addcenter`(`cent_code`,`cent_name`,`address`,`mobile`,`added_on`) VALUES ('$cent_code','$cent_name','$address','$mobile','$added_on')";
	
	$sql=mysqli_query($conn,$query);
		if($sql){
			$query1="INSERT INTO `admin`(`name`,`email`,`password`,`role`) VALUES ('$cent_name','$mail','$pass','$role')";
			$sql1=mysqli_query($conn,$query1);
				if($sql1){
					header('Location:add_center.php');
					$_SESSION['msg']="Center Added Successfully !!!";
				}
				else{
					$_SESSION['msg']="Center Not Added !!!";
					header("location:$_SERVER[HTTP_REFERER]");
				}
			}
		else{
			        $_SESSION['msg']="Center Not Added !!!";
			        header("location:$_SERVER[HTTP_REFERER]");
		   }
	}
	
	if(isset($_POST['del_center'])){
	$id = $_POST['id'];	
	$query="DELETE FROM `sh_addcenter` WHERE `id`='$id'";
	$sql=mysqli_query($conn,$query);
	if($sql){
		 header('Location:add_center.php');
		$_SESSION['msg']="Center Deleted Successfully !!!";	
	}
	else{
		$_SESSION['msg']="Center Not Deleted!!!";
		header("location:$_SERVER[HTTP_REFERER]");
	}
   }
?>