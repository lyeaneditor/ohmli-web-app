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
	<link rel="stylesheet" href="./style/modal.css">
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
	<button class="book" id="myBtn">BOOK NOW!</button>
	<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
	<div class="modal-header">
		<span class="close">&times;</span>
		<h2>Modal Header</h2>
	</div>
	<div class="modal-body">
	<span class="close">&times;</span>
	<form action="./config/book_appointment.php" method="POST">
	<table>
			<tr>
			<p><th>First Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
			<td><input type="text" id="fn" name="fn" placeholder="Enter your first name" ></td>
			</p>
			</tr>
			<p>Last Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" id="ln" name="ln" placeholder="Enter your last name" ></p></p>
			<p>Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" id="email" name="email" placeholder="Enter your email" ></p>			
			<p>Contact: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" id="contact" name="contact" placeholder="Enter your contact number" ></p>
			<p>Sex: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<select name="sex" id="sex">
			<option value="Select Type" selected>Select Sex</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			</select></p>
			<p>Birthdate: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="date" id="bd" name="bd"></p>
			<p>Address: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<textarea id="address" name="address" placeholder="Enter your address" ></textarea></p>
			<p>Referral/Agency: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" id="ref" name="ref" placeholder="Enter your referral/agency" ></p>
			<p>Service: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<select name="service" id="service">
			<option value="Select Service" selected>--- Select Service ---</option>
			<option value="Local Pre-employment Medical Examination">Local Pre-employment Medical Examination</option>
			<option value="Overseas Pre-employment Medical Examination Sea-based Preemployment Medical Examination">Overseas Pre-employment Medical Examination Sea-based Preemployment Medical Examination</option>
			<option value="Mobile Service (Annual Check-up) ">Mobile Service (Annual Check-up)</option>
			<option value="Neuro-psychological Examination omplete Laboratory Diagnostics">Neuro-psychological Examination omplete Laboratory Diagnostics</option>
			</select></p>
			<p>Appointment Date: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="date" id="ad" name="ad"></p>
			<p>Appointment Time: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<select name="at" id="at">
			<option value="Select Time" selected>Select Time</option>
			<option value="7:00:00">7:00AM</option>
			<option value="9:00:00">9:00AM</option>
			<option value="11:00:00">11:00AM</option>
			<option value="13:00:00">1:00PM</option>
			<option value="15:00:00">3:00PM</option>
			</select></p>
			<br/>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="book" value="Book Now!">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="submit" name="cancel" value="Cancel">
	</table>
			</form>
	</div>
	<div class="modal-footer">
		<h3>Modal Footer</h3>
	</div>
	</div>
	
	</div>
	</div>
	<br>
	<div class="about" id="about">
	<h1>About</h1>
	<br>
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
	<br>
	<div id="services">
		<div class="left">
		</div>
		<div class="right">
			<h1>We commit to 100% accurate and fast results, all the time!</h1>
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
	
	<div id="contacts">
		<div class="left">
		</div>
		<div class="right">
		<h1>Feel free to call, email, or hit us up on our social media accounts</h1>
		<table>
			<tr>
				<td>EMAIL</td>
				<td>PHONE</td>
			</tr>
			<tr>
				<td>1healthmedical@gmail.com</td>
				<td>28522-0728</td>
			</tr>
		</table>
		</div>
	</div>
	<script src="./style/modal.js"></script>
</body>
</html>