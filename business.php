<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business</title>
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
					DML <span> PARTNERSHIPS</span>
				</div>
			</div>

			<div class="container">
				<a id="top"></a>
				<div class="content">
				<div class="item">
				<a id="partner"></a>	
				<b>PARTNERSHIPS</b>
				<hr><br>
				<b>MZ. A BUSINESS CONSULTANCY SERVICES</b>
				<br>Mz. A Business Consultancy Services owned by Ms. Alecs Dianne H. Pacuan. She was the former Marketing Head at DML Business Solutions Co.
				<br><br>
				<div class="card" id="mc2" data-about="MZ. A BUSINESS CONSULTANCY SERVICES">
                		<img src="mz.jpg" alt="" class="card_image">
            		</div>
				<br><hr><br>
				<b>JBC TAX AND ACCOUNTING SERVICE</b>
				<br>BC Tax and Accounting Service owned by Jocelyn B. Cristobal. The office is located at 16 Cherry Blossom Street Payatas A, Quezon City. 
				<br><br>
				<div class="card" id="mc2" data-about="JBC TAX AND ACCOUNTING SERVICES">
                		<img src="jbc.jpg" alt="" class="card_image">
            		</div>
				<br><hr><br>
				<b>TAXWORTHY ACCOUNTING AND TAX SERVICES</b>
				<br>Taxworthy Accounting and Tax Services owned by Mr. Nico D. De Guzman. He is also the Administrative Head at DML Business Solutions Co.
				<br><br>
				<div class="card" id="mc2" data-about="TAXWORTHY ACCOUNTING AND TAX SERVICES">
                		<img src="taxworthy.jpg" alt="" class="card_image">
            		</div>
				<br><hr><br>
				<b>RVS TAX & ACCOUNTING SERVICES</b>	
				<br>RVS Tax & Accounting Services is owned by Vicky Vale Reyes located at 125B N. Cuevas St. Kalawaaan Pasig City.
				<br><br>
				<div class="card" id="mc2" data-about="RVS TAX & ACCOUNTING SERVICES">
                		<img src="rvs.jpg" alt="" class="card_image">
            		</div>
			</div>

			<div class="item">	
				<a id="partners"></a>
				<b>DML PARTNERS</b>
					<hr><br>
					<table><tr>
					<th><div class="card" id="mc1" data-about="PARTNER" data-title="Jerriel Jay F. Belza">
               		 	<img src="belza.jpg" alt="" class="card_image">
           			</div></th>
            		<th><div class="card" id="mc2" data-about="PARTNER" data-title="Deomel M. Lucban ">
                		<img src="Lucban.png" alt="" class="card_image">
            		</div></th>
					<th><div class="card" id="mc2" data-about="PARTNER" data-title=" Alecs Dianne H. Pacuan">
                		<img src="pacuan.jpg" alt="" class="card_image">
            		</div></th>
				</div>
				</tr></table>
			</div><br>

			<div class="totop" title="Back To Top">
					<a href="#top"><i class="fas fa-chevron-up" style="font-size:36px"></i></a>		
				</div>
			</div>
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
</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital@1&display=swap');

.header{
    background-color: grey;    
    height: 7vh;
    margin-bottom: 2%;
}

.header__title {
    font-family: "Old Standard TT";
    font-size: 22pt;
    text-align: center;
    color: white;
}

.main {
    display: flex;
    align-items: flex-start;
    justify-content: space-around;
    flex-wrap: wrap;
    padding-right: 150px;
    padding-left: 150px;
}

.card {
    display: flex;
    position: relative;
    flex-direction: column;
    background-color: #FFFAE7;
    font-family: 'Balsamiq Sans';
    width: 20vw;
    padding: 2vh 1vw 5vh 1vw;
    margin-bottom: 5%;
    box-shadow: 1vh 1vh 10px rgba(0,0,0,0.5);
    
    overflow: hidden;
    transition: all .6s ease;
}

.card::after {
    content: attr(data-title);
    font-weight: 700;
    font-size: 2vw;
    color: #363d42a4       
}


.card_image {
    width: 100%;
}


.card:nth-child(odd) {
    transform: rotate(2deg) translateY(1vh);
}


.card:nth-child(even) {
    transform: rotate(-3deg) translateX(-1vh);
}

.card:hover {
    transform: scale(1.25);
    box-shadow: 1.5vh 1.5vh 10px rgba(0,0,0,0.7);
}

.card::before {
    content: attr(data-about);
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    transform: translateY(16pt);
    text-align: center;
    z-index: 0;
    background-image: linear-gradient(to right, #4b0900,#8a0e00,#dd1600);	
    font-size: 10pt;
    color: white;
    opacity: 0;
    transition: all .6s ease;
    
}

.card:hover::before {
    z-index: 1;
    opacity: 1;
    transform: translateY(0);
}

div.pagemenu {       
	display: flex;  
	gap: 1em;
	background-color: red;
	}	
div.pagemenu:hover{
color:red;}
    </style>
</html>