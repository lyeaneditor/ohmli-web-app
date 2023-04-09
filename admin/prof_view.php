<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../style/emp_style.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="../style/bootstrap.min.css">
	<link rel="stylesheet" href="../style/modal.css">
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
	<p>Lyean Marielle R. Elisan</p>
	<br>
	<center>
	<table>
	<tr><td><a href="emp_view.php"><button>Employees</button></a></td></tr>
	<tr><td><a href="attendance_view.html"><button>Attendance</button></a></td></tr>
	<tr><td><a href="payroll_view.html"><button>Payroll</button></a></td></tr>
	<tr><td><a href="fem_doctor_view.html"><button>Doctor</button></a></td></tr>
	<tr><td><a href="sched_view.html"><button>Schedule</button></a></td></tr>
	<tr><td><a href="prof_view.php"><button class="prof">Profile</button></a></td></tr>

	</table>
	<br><br>
	<a href="../login.php"><button class="logout">Logout</button></a>
	</center>
	</div>
	
	<div class="con">
		<div class="title">
		<p>Profile
		<table>
		<tr>
		<td><button id="myBtn"><img src="../img/add-user.png"/></button></td>
		<!-- The Modal -->
		<div id="myModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
		<div class="modal-header">
		<span class="close">&times;</span>
		<h2>Modal Header</h2>
		</div>
		<div class="modal-body">
		<span class="close">&times;</span>
		<form action="../config/add_user.php" method="POST">
			<select name="role" id="role">
			<option value="Select Type" selected>Select Role</option>
			<option value="Admin">Admin</option>
			<option value="HR">HR</option>
			<option value="Nurse">Nurse</option>
			</select>
			<p>Employee ID: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" id="emp_id" name="emp_id" placeholder="Employee ID Number" ></p>
			<p>Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" id="p" name="p" placeholder="Password" ></p>
			<p>First Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" id="fn" name="fn" placeholder="First Name" ></p>
			<p>Last Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" id="ln" name="ln" placeholder="Last Name" ></p></p>
			<br/>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="save" value="Save">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="submit" name="cancel" value="Cancel">
		</form>
		</div>
		<div class="modal-footer">
		<h3>Modal Footer</h3>
		</div>
		</div>
		</div>
		</tr>
		</table>
		</p>
		</div>
		<div class="info table-wrapper-scroll-y my-custom-scrollbar">
		<center>
		<table class="table table-hover">
		<thead>
		<tr>
		<th scope="col">#</th>
		<th scope="col">Employee ID</th>
		<th scope="col">Name</th>
		<th scope="col">Role</th>
		<th scope="col">Option</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<?php
		$mysqli = mysqli_connect("localhost", "root", "", "db_ohmli");
		$search_result = mysqli_query($mysqli, "SELECT * FROM tbl_user ORDER BY `id`");
		while($res = mysqli_fetch_array($search_result)) {
		echo "<tr>";
		echo "<td>" .$res['id']. "</td>";
		echo "<td>" .$res['emp_id']. "</td>";
		echo "<td>" .$res['last_name'] .", " .$res['first_name']. "</td>";
		echo "<td>" .$res['role']. "</td>";
		echo "<td><a href=\"view.php?id=$res[id]\">View</a> | <a href=\"delc.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
		}
		?>
		</tr>
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
<script src="../style/modal.js"></script>
</html>