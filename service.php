<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="wrapper">
		<div class="wrapper_inner">
			<div class="vertical_wrap">
			<div class="backdrop"></div>
			<div class="vertical_bar">
				<div class="profile_info">
					<div class="img_holder">
					<a href="home.php">
						<img src="logo.png" alt="profile_pic">
					</div>
					<p class="title">DML Business Solutions Co.</p>
					</a>
					<p class="sub_title">mlbusinesssolutionsco.crd@gmail.com</p>
				</div>
				<ul class="menu">
					<li><a href="home.php">
						<span class="icon"><i class="fas fa-home"></i></span>
						<span class="text">Dashboard</span>
					</a></li>
					<li><a href="service.php">
						<span class="icon"><i class="fas fa-handshake"></i></span>
						<span class="text">Service Offers</span>
					</a></li>
					<li><a href="business.php">
						<span class="icon"><i class="fas fa-chart-pie"></i></span>
						<span class="text">Partnerships</span>
					</a></li>
					<li><a href="about.php">
						<span class="icon"><i class="fas fa-file-alt"></i></span>
						<span class="text">About</span>
					</a></li>
					<li><a href="contact.php">
						<span class="icon"><i class="fas fa-user"></i></span>
						<span class="text">Contact</span>
					</a></li>
			
				</ul>

				<ul class="social">
					<li><a href="https://www.facebook.com/DMLBusinessSolutionsCo" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://www.instagram.com/dmlbusiness/" target="_blank"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="main_container">
			<div class="top_bar">
				<div class="hamburger">
					<i class="fas fa-bars"></i>
				</div>
				<div class="logo">
					SERVICES <span>OFFERED</span>
				</div>
			</div>

			<div class="container">
				<a id="top"></a>
				<div class="content">
				<div id="box">
		
				<div class="item"><hr>
				<br><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">Tax Acoounting</i><br>
					</summary>
					details here...
				</details><br>
				
				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">	Auditing</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">	Filing of Monthly, Quarterly and Annual</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">	BIR Returns and Other Government</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">	Reportorial Requirements</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">	Bookkeeping of Financial Transaction</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">Preparation of Financial Statement</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">	Receipt Printing</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">	Payroll/Payslip</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">	Business Documentation</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">	SSS, Philhealth, HDMF Registration</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">	DOLE Registration and Clearance</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">	Special Permits</i><br>
					</summary>
					details here...
				</details><br>

				<details>
					<summary>
					<i class="fas fa-chevron-circle-right">		PACAB Licensing</i><br>
					</summary>
					details here...
				</details>

				<br><br>
				<hr>
				</div>
		
	</div>
	
			
			</div>
		</div>

		<script>
	var hamburger = document.querySelector(".hamburger");
	var wrapper  = document.querySelector(".wrapper");
	var backdrop = document.querySelector(".backdrop");

	hamburger.addEventListener("click", function(){
		wrapper.classList.add("active");
	})

	backdrop.addEventListener("click", function(){
		wrapper.classList.remove("active");
	})
</script>

		<div class="totop" title="Back To Top">
					<a href="#top"><i class="fas fa-chevron-up" style="font-size:36px;"></i></a>		
				</div>
		</div>
	</div>

</html>