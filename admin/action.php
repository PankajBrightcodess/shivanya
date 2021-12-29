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
		$_SESSION['cent_id'] = $data['cent_id'];
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

	$query="INSERT INTO `sh_addcenter`(`cent_code`,`cent_name`,`address`,`mobile`,`email`,`password`,`added_on`) VALUES ('$cent_code','$cent_name','$address','$mobile','$mail','$pass','$added_on')";
	
	$sql=mysqli_query($conn,$query);
		if($sql){
			$last_id = $conn->insert_id;
			// print_r($last_id);die;
			$query1="INSERT INTO `admin`(`name`,`email`,`password`,`role`,`cent_id`) VALUES ('$cent_name','$mail','$pass','$role','$last_id')";
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
	
	if(isset($_POST['del'])){
		
	$id = $_POST['id'];	
	// print_r($id);die;
	$query="DELETE FROM `result` WHERE `id`='$id'";
	$sql=mysqli_query($conn,$query);
	
   }


   	if(isset($_POST['update_center'])){
  //  		echo '<pre>';
		// print_r($_POST);die;
	$id=$_POST['id'];
	$cent_code = $_POST['cent_code'];
	$cent_name = $_POST['cent_name'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];
	$role = $_POST['role'];
	// print_R($_POST);die;
    $query="UPDATE `sh_addcenter` SET `cent_code`='$cent_code',`cent_name`='$cent_name',`address`='$address',`email`='$mail',`password`='$pass',`mobile`='$mobile' WHERE `id`='$id'";
	$run=mysqli_query($conn,$query);	
	if($run==true)
	{
		if(!empty($mail) && !empty($pass)){
			$query="SELECT * FROM `admin` WHERE `cent_id`='$id' and `status`='1'";
	        $run=mysqli_query($conn,$query);
	        $num=mysqli_num_rows($run);
	        if($num){
	        	$query1="UPDATE `admin` SET `name`='$cent_name',`email`='$mail',`password`='$pass',`role`='$role' WHERE `cent_id`='$id'";
	             $run1=mysqli_query($conn,$query1);
	            if($run1){
	         	$_SESSION['msg']="Successfully Updated!!!";	
		        header('Location:add_center.php');
	            }

	        }
	        else{
	        	$query1="INSERT INTO `admin`(`name`,`email`,`password`,`role`,`cent_id`) VALUES ('$cent_name','$mail','$pass','$role','$id')";
			    $sql1=mysqli_query($conn,$query1);
			    if($sql1){
					header('Location:add_center.php');
					$_SESSION['msg']="Center Added Successfully !!!";
				}
				else{
					$_SESSION['msg']="Center Not Updated !!!";
					header("location:$_SERVER[HTTP_REFERER]");
				}
	        }	 
		}
	 	$_SESSION['msg']="Updated!!!";	
		header('Location:add_center.php');	
	}
	else{
	    $_SESSION['msg']="Recoard Updation Cancel!!!";	
	 }
   }

   if(isset($_POST['resultupload'])){
	 //    echo '<pre>';
		// print_r($_POST);die;
		$enroll=$_POST['enroll'];
		$course=$_POST['course'];
		$name=$_POST['name'];
		$center_id=$_POST['center_id']; 
		$added_on=date('Y-m-d');
		$photo = $_FILES['upload_image']['name'];
		$photo = explode('.',$photo);
		$image= time().$photo[0];
		$imagename = $_FILES['upload_image']['tmp_name'];
			list($width,$height)=getimagesize($_FILES['upload_image']['tmp_name']);
		$dir="../upload/";
		$allext=array("png","PNG","jpg","JPG","jpeg","JPEG","GIF","gif","pdf");
		$check = Imageupload($dir,'upload_image',$allext,"1800000","1800000",'100000000',$image);	
			// print_r($check);die;
		if($check===true){
			$image = $image.".jpg";	
			$query="INSERT INTO `result`(`enroll`,`course`,`name`,`upload_image`,`added_on`,`center_id`) VALUES ('$enroll','$course','$name','$image','$added_on','$center_id')";
			$sql=mysqli_query($conn,$query);
			if($sql){
				 header("Location:$_SERVER[HTTP_REFERER]");
				$_SESSION['msg']="Successfully Added!!!";	
			}
			else{
				$_SESSION['msg']="Not added result !!!";
				header("Location:$_SERVER[HTTP_REFERER]");
			}
		}
		else{
			$_SESSION['msg']=$check;
			header("location:$_SERVER[HTTP_REFERER]");	
		}
}

if(isset($_POST['del_result_admin'])){
		
	$id = $_POST['id'];	
	$query="DELETE FROM `result` WHERE `id`='$id'";
	$sql=mysqli_query($conn,$query);
	if($sql){
		 header('Location:uploadresult.php');
		$_SESSION['msg']="Center Deleted Successfully !!!";	
	}
	else{
		$_SESSION['msg']="Center Not Deleted!!!";
		header("location:$_SERVER[HTTP_REFERER]");
	}
   }

	if(isset($_POST['del_list'])){
		
	$id = $_POST['id'];	
	// print_r($id);die;
	$query="DELETE FROM `result` WHERE `id`='$id'";
	$sql=mysqli_query($conn,$query);
	
   }

   if(isset($_POST['del_franchise'])){
		
	$id = $_POST['id'];	
	// print_r($id);die;
	$query="DELETE FROM `centre_request` WHERE `id`='$id'";
	$sql=mysqli_query($conn,$query);
	
   }



   if(isset($_POST['center_request'])){
	   	// echo '<pre>';
	   	// print_r($_POST);die;
	   	$name=$_POST['name'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$mobile=$_POST['mobile']; 
		$email=$_POST['email']; 
		$location_address=$_POST['location']; 
		$city=$_POST['city']; 
		$state=$_POST['state']; 
		$pin=$_POST['pincode']; 
		$precenter=$_POST['precenter']; 
		$languages=$_POST['language']; 
		$otherinfo=$_POST['otherinfo']; 
		$added_on=date('Y-m-d'); 
		$query="INSERT INTO `centre_request`(`name`,`dob`,`gender`,`mobile`,`email`,`location`,`city`,`state`,`pincode`,`precenter`,`language`,`other_info`,`added_on`) VALUES ('$name','$dob','$gender','$mobile','$email','$location_address','$city','$state','$pin','$precenter','$languages','$otherinfo','$added_on')";
			$sql=mysqli_query($conn,$query);
			if($sql){
				 header("Location:$_SERVER[HTTP_REFERER]");
				$_SESSION['msg']="Successfully Added!!!";	
			}
			else{
				$_SESSION['msg']="Not added result !!!";
				header("Location:$_SERVER[HTTP_REFERER]");
			}

   }

   if(isset($_POST['student_enquiry'])){
   	// echo '<pre>';
   	// print_r($_POST);die;
   	    $name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$ac_qualify=$_POST['ac_qualify']; 
		$course=$_POST['course']; 
		$mode=$_POST['mode']; 
		$added_on = date('Y-m-d');
		$query="INSERT INTO `admission_enquiry`(`name`,`mobile`,`email`,`academic_qualification`,`course`,`training_mode`,`added_on`) VALUES ('$name','$mobile','$email','$ac_qualify','$course','$mode','added_on')";
			$sql=mysqli_query($conn,$query);
			if($sql){
				 header("Location:$_SERVER[HTTP_REFERER]");
				$_SESSION['msg']="Successfully Added!!!";	
			}
			else{
				$_SESSION['msg']="Not added result !!!";
				header("Location:$_SERVER[HTTP_REFERER]");
			}
   }

   if(isset($_POST['del_admission'])){
		
	$id = $_POST['id'];	
	// print_r($id);die;
	$query="DELETE FROM `admission_enquiry` WHERE `id`='$id'";
	$sql=mysqli_query($conn,$query);
	if($sql){
		 header('Location:student_enquiry.php');
		$_SESSION['msg']="Enquiry Deleted Successfully !!!";	
	}
	else{
		$_SESSION['msg']="Enquiry Not Deleted!!!";
		header("location:$_SERVER[HTTP_REFERER]");
	}
	
   }

   if(isset($_POST['getresult'])){
   	// echo '<pre>';
   	// print_r($_POST);die;
   	$enroll = $_POST['enroll'];	
   	$query="SELECT * FROM `result` WHERE `enroll`='$enroll'";
	$run=mysqli_query($conn,$query);
	$num=mysqli_num_rows($run);
	if($num){
		$data=mysqli_fetch_assoc($run);
		$_SESSION['enroll'] = $data['enroll'];
		
		if(!empty($_SESSION['enroll'])){
			header('location:../studentsDetails.php');
		}
			
	}
	else{
		$_SESSION['msg']='Invalid details !!!';
		header("Location: " . $_SERVER['HTTP_REFERER']);
	}
   }








   // ''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''Center Area Start'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''

?>