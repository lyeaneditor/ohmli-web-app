<?php
	if (isset($_POST['login'])){
	session_start();
	$_SESSION['emp_id'] = $_POST['u'];
	$username = $_POST['u'];
	$password = $_POST['p'];
	
	$mysqli = mysqli_connect("localhost", "root", "", "db_ohmli");
	
	$result = mysqli_query($mysqli, "SELECT * FROM tbl_user WHERE emp_id = $username");
	$res = mysqli_fetch_array($result);
	$role1 = "Admin";
	$role2 = "HR";
	$role3 = "Nurse";
	
	if($res['emp_id'] == $username && $res['password'] == $password){
		if($res['role'] == $role1){
		header('Location: ../admin/emp_view.php');
		}
		elseif($res['role'] == $role2){
		header('Location: ../hr/emp_view.html');
		}
		elseif($res['role'] == $role3){
		header('Location: ../nurse/fem_doctor_view.html');
		}
	}
	else{
		header('Location: ../../ohmli_web/login.php');
	}
}
if (isset($_POST['addu'])){
	header('Location: auser.php');
}
?>