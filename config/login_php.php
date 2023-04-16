<?php
	session_start(); 

	include "config.php";

	if (isset($_POST['login'])){
	$_SESSION['emp_id'] = $_POST['u'];
	$username = $_POST['u'];
	$password = $_POST['p'];
	
	$mysqli = mysqli_connect("localhost", "root", "", "db_ohmli");
	
	$result = mysqli_query($mysqli, "SELECT * FROM tbl_user WHERE emp_id = $username");
	$res = mysqli_fetch_array($result);
	$user_type1 = "Admin";
	$user_type2 = "HR";
	$user_type3 = "Nurse";
	
	if($res['emp_id'] == $username && $res['password'] == $password){
		if($res['user_type'] == $user_type1){
			$_SESSION['emp_id'] = $res['emp_id'];
			$_SESSION['first_name'] = $res['first_name'];
			$_SESSION['last_name'] = $res['last_name'];
			$_SESSION['id'] = $res['id'];
		header('Location: ../admin/emp_view.php');
		}
		elseif($res['user_type'] == $user_type2){
			$_SESSION['emp_id'] = $res['emp_id'];
			$_SESSION['first_name'] = $res['first_name'];
			$_SESSION['last_name'] = $res['last_name'];
			$_SESSION['id'] = $res['id'];
		header('Location: ../hr/emp_view.html');
		}
		elseif($res['user_type'] == $user_type3){
			$_SESSION['emp_id'] = $res['emp_id'];
			$_SESSION['first_name'] = $res['first_name'];
			$_SESSION['last_name'] = $res['last_name'];
			$_SESSION['id'] = $res['id'];
		header('Location: ../nurse/fem_doctor_view.html');
		}
	}
	else{
		header('Location: ../../ohmli_web/login.php');
	}
}
?>