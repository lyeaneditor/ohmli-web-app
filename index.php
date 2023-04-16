<!DOCTYPE html>
<html>
<body>
	<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./style/bootstrap.min.css">
	<script src="./style/jquery.min.js"></script>
	<script src="./style/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./style/style_lp.css">
	</head>
	<nav class="navbar sticky-top navbar-default">
		<div class="container-fluid bg-danger">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">OneHealth</a>
			</div>
				<ul class="nav navbar-nav">
				<li><a class="active" href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#contacts">Contacts</a></li>
				</ul>
			</div>
	</nav>
	<div id="home" class="home">
	<br><br>
	<h1>OneHealth Medical Laboratory Inc.</h1>
	<br><br><br>
	<p>We understand that your time is valuable, and we want to make sure you have the best care possible. That's why we work hard to give you the best experience possible when it comes to your medical needs</p>
	<br><br><br>
	<link rel="stylesheet" href="./style/modal.css">
	<button class="book" id="myBtn">BOOK NOW!</button>
	<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
	<div class="modal-header">
		<span class="close">&times;</span>
		<h2>Appointment</h2>
	</div>
	<div class="modal-body">
	<span class="close">&times;</span>
	<form action="./config/book_appointment.php" method="POST">
	<center>
	<br>
	<table style="width:400px;">
			<tr>
				<p><th>First Name: </th>
				<td><input type="text" id="fn" name="fn" placeholder="Enter your first name" ></td></p>
			</tr>
			<tr>
				<p><th>Last Name: </th>
				<td><input type="text" id="ln" name="ln" placeholder="Enter your last name" ></td></p>
			</tr>
			<tr>
				<p><th>Email: </th>
				<td><input type="text" id="email" name="email" placeholder="Enter your email" ></td></p>
			</tr>
			<tr>	
				<p><th>Contact: </th>
				<td><input type="text" id="contact" name="contact" placeholder="Enter your contact number" ></td></p>
			</tr>
			<tr>
				<p><th>Sex: </th>
				<td><select name="sex" id="sex">
				<option value="Select Type" selected>Select Sex</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				</select></td></p>
			</tr>
			<tr>
				<p><th>Birthdate: </th>
				<td><input type="date" id="bd" name="bd"></p>
			</tr>
			<tr>
				<p><th>Address: </th>
				<td><textarea id="address" name="address" placeholder="Enter your address" ></textarea></td></p>
			</tr>
			<tr>
				<p><th>Referral/Agency: </th>
				<td><input type="text" id="ref" name="ref" placeholder="Enter your referral/agency" ><td></p>
			</tr>
			<tr>
				<p><th>Service: </th>
				<td><select name="service" id="service" style="width:200px;">
				<option value="Select Service" selected>--- Select Service ---</option>
				<option value="Local Pre-employment Medical Examination">Local Pre-employment Medical Examination</option>
				<option value="Overseas Pre-employment Medical Examination Sea-based Preemployment Medical Examination">Overseas Pre-employment Medical Examination Sea-based Preemployment Medical Examination</option>
				<option value="Mobile Service (Annual Check-up) ">Mobile Service (Annual Check-up)</option>
				<option value="Neuro-psychological Examination omplete Laboratory Diagnostics">Neuro-psychological Examination omplete Laboratory Diagnostics</option>
				</select></td></p>
			</tr>
			<tr>
				<p><th>Appointment Date: </th>
				<td><input type="date" id="ad" name="ad"></td></p>
			</tr>
				<p><th>Appointment Time: </th>
				<td><select name="at" id="at">
				<option value="Select Time" selected>Select Time</option>
				<option value="7:00:00">7:00AM</option>
				<option value="9:00:00">9:00AM</option>
				<option value="11:00:00">11:00AM</option>
				<option value="13:00:00">1:00PM</option>
				<option value="15:00:00">3:00PM</option>
				</select></td></p>
			</tr>
	</table>
	<br/><br/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="book" value="Book Now!">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit" name="cancel" value="Cancel">
	</center>
	<br/><br/>
	</form>
	</div>
	<div class="modal-footer">
		<h4>One Health Medical Laboratory Inc.</h4>
	</div>
	</div>
	</div>
	</div>
	<div class="about" id="about">
		<h1>About</h1>
		<br/><br/>
		<p>
		Onehealth Medical Laboratory Inc. 
		was established in September 2011 headed by Dr. Marius W. Sing, MD, 
		an Licensed Occupational Health Physician that graduated from St. Luke’s College of Medicine in 2007 
		and licensed pharmacist from University of Sto.Tomas in 1999. It is a registered corporation under Securities 
		and Exchange Commission (SEC) and licensed by the Department of Health (DOH) as a Diagnostic Laboratory. 
		His goal is to give quality health care for the people at a minimal cost. <br><br>Dr Sing then recognized 
		the growth in the Philippine market, and the need for advanced laboratory equipments, 
		ONEHEALTH Medical Laboratory Inc. started venturing in diagnostic supplies. 
		Dedicated to deliver quality and accurate medical systems at cost effective pricing. 
		One Health Laboratory is also a trading company that primarily distributes orthopedic implants 
		and other goods in regard to health care consumables. One Health Laboratory is a “One Stop Shop” 
		service for laboratory, equipments, reagents and consumables.
		</p>
	</div>
	<br><br>
	<div class="mv" id="mv">
		<div class="left">
			<br>
			<h1>MISSION</h1>
			<br>
			<p>
			OneHealth Medical Laboratory's mission is to provide high quality skilled medical laboratory
			services at reasonable prices in the shortest time possible with the importance on quality, complete
			customer contentment, training and continous quality improvement. This will be achieved through ongoing development,
			implementation and evaluation of quality control methods appropriate to each department; testing performed efficiency 
			and accurately; and continuous evaluation and revision of current laboratory procedures.
			</p>
		</div>
		<div class="right">
		<br>
			<h1>VISION</h1>
			<br>
			<p>
			OneHealth Medical Laboratory Inc. will provide the highest quality of service to the medical staff by encouraging its 
			personnel to constantly update its educational and laboratory experience and to procure equipment for its personnel to use. 
			OneHealth Medical Laboratory will always provide the medical staff with capable reliable laboratory testing.
			</p>
		</div>
	</div>
	<br><br>
	<div class="serv" id="services">
		<div class="left">
		<br><br><br><br>
		<img src="./img/nurse.jpg" height="500px" width="470px"/>
		</div>
		<div class="right">
			<h1>We commit to 100% accurate and fast results, all the time!</h1>
			<br>
			<ul><p>Medical Examinations</p>
				<li>Local Pre-employment Medical Examination</li>
				<li>Overseas Pre-employment Medical Examination</li>
				<li>Sea-based Pre-employment Medical Examination</li>
				<li>Mobile Service (Annual Check-up)</li>
				<li>Neuro-psychological Examination</li>
				<li>Complete Laboratory Diagnostics</li>
			</ul>
			<ul><p>Specialty Clinics</p>
				<li>Dental Clinic</li>
				<li>Optical Clinic</li>
			</ul>
			<ul><p>Others</p>
				<li>Covid-19 Testing (Rapid Test)</li>
				<li>Drug Test</li>
				<li>Vccinations</li>
			</ul>
			<ul><p>Radiology</p>
				<li>X-Ray</li>
				<li>Ultrasound</li>
				<li>CT Scan</li>
			</ul>
		</div>
	</div>
	<div class="con" id="contacts">
		<div class="left">
		<br>
		<div class="mapouter">
		<div class="gmap_canvas">
		<iframe width="400px" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=Faura Medical Bldg, 577 P Padre Faura St, Ermita, Manila, Philippines&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		<style>.mapouter{position:relative;text-align:center;height:100%;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
		</div>
		</div>
		</div>
		<div class="right">
		<h1>Talk to us!</h1>
		<p>Feel free to call, email, or hit us up on our social media accounts</p>
		<table>
			<tr>
				<td>EMAIL</td>
				<td>PHONE</td>
			</tr>
			<tr>
				<td width="300px">1healthmedical@gmail.com</td>
				<td>28522-0728</td>
			</tr>
		</table>
		</table>
		<br>
			<tr>
				<td>Address:</td>
				<td>Faura Medical Bldg, 577 P Padre Faura St, Ermita, Manila</td>
			</tr>
		</table>
		</div>
	</div>
	<script src="./style/modal.js"></script>
</body>
</html>