<?php
session_start();
?>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../style/emp_style.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="../style/bootstrap.min.css">
	<link rel="stylesheet" href="../style/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../style/responsive.bootstrap.min.css">
	<script src="../style/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="../style/showData.js"></script>
	<script src="../style/bootstrap.min.js"></script>
	</head>
<body onload=display_ct();>
<div class="main">
	<div class="header">
	<table>
	<tr><td>
	<img src="../img/logo.png" height="120px" width="110px"/>
	</td>
	<td></td>
	<td>
	<span id='ct'></span>
	</td></tr>
	</table>
	</div>
	
	<div class="nav">
	<br>
	<img src="../img/profile.png" height="140px" width="140px"/>
	<br>
	<?php
	echo "<p>" .$_SESSION['last_name'] .", " .$_SESSION['first_name']. "</p>";
	?>
	<br>
	<center>
	<table>
	<tr><td><a href="emp_view.php"><button class="emp">Employees</button></a></td></tr>
	<tr><td><a href="attendance_view.html"><button>Attendance</button></a></td></tr>
	<tr><td><a href="payroll_view.html"><button>Payroll</button></a></td></tr>
	<tr><td><a href="fem_doctor_view.html"><button>Doctor</button></a></td></tr>
	<tr><td><a href="sched_view.html"><button>Schedule</button></a></td></tr>
	<tr><td><a href="prof_view.php"><button>Profile</button></a></td></tr>

	</table>
	<br><br>
	<a href="../login.php"><button class="logout">Logout</button></a>
	</center>
	</div>
	
	<div class="con">
		<div class="title">
		<p>Employees
		<table>
		<tr>
		<td><a href=""><img src="../img/print.png"/><a/></td>
		<td><a href=""><img src="../img/add-user.png"/><a/></td>
		<td><a href=""><img src="../img/edit-file.png"/><a/></td>
		</tr>
		</table>
		</p>
		</div>
		<div class="info table-wrapper-scroll-y my-custom-scrollbar">
		<center>
		<table class="table table-hover">
		<thead>
		<tr>
		<th scope="col">Name</th>
		<th scope="col">user_type</th>
		<th scope="col">Age</th>
		<th scope="col">Address</th>
		<th scope="col">Birthdate</th>
		<th scope="col">Contact #</th>
		<th scope="col">SSS</th>
		<th scope="col">PAG-IBIG</th>
		<th scope="col">PHILHEALTH</th>
		<th scope="col">TIN</th>
		<th scope="col">Contact Person</th>
		<th scope="col">Contact #</th>
		<th scope="col">Option</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$mysqli = mysqli_connect("localhost", "root", "", "db_ohmli");
		$search_result = mysqli_query($mysqli, "SELECT * FROM tbl_employee ORDER BY `last_name`");
		while($res = mysqli_fetch_array($search_result)) {
		echo "<tr>";
		echo "<td>" .$res['last_name'] .", " .$res['first_name']. "</td>";
		echo "<td>" .$res['user_type']. "</td>";
		echo "<td>" .$res['age']. "</td>";
		echo "<td>" .$res['address']. "</td>";
		echo "<td>" .$res['birthdate']. "</td>";
		echo "<td>" .$res['contact_num']. "</td>";
		echo "<td>" .$res['sss_num']. "</td>";
		echo "<td>" .$res['pagibig_num']. "</td>";
		echo "<td>" .$res['philhealth_num']. "</td>";
		echo "<td>" .$res['tin_num']. "</td>";
		echo "<td>" .$res['emerg_contact_last_name'] .", " .$res['emerg_contact_first_name']. "</td>";
		echo "<td>" .$res['emerga_contact']. "</td>";
		echo "<td><a href=\"view.php?id=$res[id]\">View</a> | <a href=\"delc.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
		}
		?>
		</tbody>
		</table>
		</center>
		</div>
	</div>
</div>
</body>
	<script type="text/javascript"> 
	function display_c(){
	var refresh=1000; // Refresh rate in milli seconds
	mytime=setTimeout('display_ct()',refresh)
	}
	function display_ct() {
	var x = new Date()
	document.getElementById('ct').innerHTML = x;
	display_c();
	}
</script>
</html>