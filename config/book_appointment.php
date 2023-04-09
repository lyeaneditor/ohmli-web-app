<?php
	if (isset($_POST['book'])){
	$first_name=$_POST['fn'];
	$last_name=$_POST['ln'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$sex=$_POST['sex'];
	$bd=$_POST['bd'];
	$address=$_POST['address'];
	$ref=$_POST['ref'];
	$service=$_POST['service'];
	$ad=$_POST['ad'];
	$at=$_POST['at'];
	
	$conn= mysqli_connect("localhost", "root", "", "db_ohmli");
	
	$query ="INSERT INTO `tbl_appointment`(`first_name`, `last_name`, `email`, `contact_num`, `sex`, `date_of_birth`, `address`, `referral`, `service`, `appointment_date`, `appointment_time`) 
					VALUES ('$first_name', '$last_name', '$email', '$contact', '$sex', '$bd', '$address', '$ref', '$service', '$ad', '$at');";
	mysqli_query($conn, $query);
	header("Location:../index.php");
	}
	if (isset($_POST['cancel'])){
	header("Location:../index.php");
	}
?>