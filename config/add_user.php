<?php
	if (isset($_POST['save'])){
	$emp_id=$_POST['emp_id'];
	$first_name=$_POST['fn'];
	$last_name=$_POST['ln'];
	$password=$_POST['p'];
	$role=$_POST['role'];
	
	$conn= mysqli_connect("localhost", "root", "", "db_ohmli");
	
	$query ="INSERT INTO `tbl_user` (`emp_id`, `first_name`, `last_name`, `password`, `role`) VALUES ('$emp_id', '$first_name', '$last_name', '$password', '$role');";
	mysqli_query($conn, $query);
	header("Location:../admin/prof_view.php");
	}
	if (isset($_POST['cancel'])){
	header("Location:../admin/prof_view.php");
	}
?>