<?php
$databaseHost = 'localhost';
$databaseName = 'db_ohmli';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
session_start();
$_SESSION["id"]= $_GET['id'];
?>
<html>
<body>
<link href="blend.css" rel="stylesheet" type="text/css"/>
<center>
<table>
<?php
$id = $_GET['id'];
$_SESSION["id"]= $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM tbl_user WHERE id=$id");
while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<th>Employee ID: </th>";
		echo "<td>" .$res['emp_id']. "</td>";	
		echo "</tr>";
		echo "<tr>";
		echo "<th>First Name: </th>";
		echo "<td>" .$res['first_name']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Last Name: </th>";
		echo "<td>" .$res['last_name']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>user_type: </th>";
		echo "<td>" .$res['user_type']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Password: </th>";
		echo "<td>" .$res['password']. "</td>";
		echo "</tr>";
		echo "</table>";
}
		echo "<br/><br/>";
		echo "<a href=\"collegeedit.php?id=$res[id]\">Edit</a>";
		echo "&nbsp&nbsp&nbsp&nbsp";
		echo "<a href=\"prof_view.php\">Go back
		<script></a>";
?>
</center>
</body>
</html>