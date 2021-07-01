<!DOCTYPE HTML>
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js</script>
<script src="script/script.js"></script>
<style>
    *{
	padding:0;
	margin:0;
	text-decoration:none;
	font-family: 'Montserrat', sans-serif;
	box-sizing:border-box;
}
html{
	scroll-behavior: smooth;
}
::selection{
	background-color:#FFCD00;
}
::-webkit-scrollbar{
	width:10px;
	background-color:#FFCD00;
}
::-webkit-scrollbar-thumb{
	background-color:#2f2f2f;
}
.navbar{
	position:fixed;
	background-color:transparent;
	width:100%;
	padding: 30px 0;
	z-index:999;
	transition: .3s linear;
}
.inner-width{
	max-width:1300px;
	margin:auto;
	padding: 0 40px;
}
.navbar .inner-width{
	display:flex;
	align-items:center;
	justify-content:space-between;
}
.logo{
	width:80px;
	background-size:contain;
}
.menu-toggler{
	background:none;
	width:30px;
	border:none;
	cursor:pointer;
	position:relative;
	outline:none;
	z-index:999;
	display:none;
}
.menu-toggler span{
	display:block;
	height:3px;
	background-color:black;
	margin:6px 0 ;
	position:relative;
	transition: .3s linear;
	
}
.navbar-menu a{
	color:#FFCD00;
	font-size:15px;
	font-weight:500;
	margin-left:30px;
	transition:.2s linear
}
.navbar-menu a:hover{
	color:white !important;
}
.h1logo{
    color:#FFCD00;
	font-size:15px;
	font-weight:500;
	margin-left:30px;
	transition:.2s linear
}
.sticky{
	background-color:#FFCD00;
	padding:18px 0;
}
.sticky .navbar-menu a{
	color:black;
}
.sticky .menu-toggler span{
	background-color:black;
}
#home{
	height:100vh;
	min-height:500px;
	background-size:cover;
	background-attachment:fixed;
}
#home .inner-width{
	display:flex;
	align-items:center;
	justify-content:center;
	height:100%;
	text-align:center;
}
#home .content{
	width:100%;
	color:#FFCD00;
}
#home .content h1{
	font-size:60px;
	margin-bottom:60px;
	background-color:black;
	width:500px;
}
#home .content h1::after{
	content: " Inovas";
	animation: textanim 10s linear infinite;
}
@keyframes textanim{
	25%{
		content: " Engineers";
	}
	50%{
		content: "  Developers";
	}
	%75{
		content: "  Youtubers";
	}
}
.sm a{
	color:#FFCD00;
	font-size:22px;
	margin: 0 10px;
	transition: .2s linear;
}
.sm a:hover{
	color:white;
}
#home .buttons{
	margin:top: 60px;
	
}
#home .buttons a{
	display:inline-block;
	margin: 15px 30px;
	padding:15px 30px;
	color: #FFCD00;
	font-size:15px;
	font-weight:500;
	width:180px;
	border:1px solid;
	border-radius:6px;
	transition: .2s linear;
}
#home .buttons a:hover,
#home .buttons a:nth-child(2)
{
	background-color:#FFCD00;
	color:black;
}
section{
	padding:100px 0;
	background-color:#f1f1f1;
}
.section-title{
	text-align:center;
	margin-bottom:80px;
	position:relative;
	font-size:26px;
	padding-bottom:20px;
	color:black;
}
.section-title::before{
	content:"";
	position:absolute;
	width:80px;
	height:3px;
	background-color:#FFCD00;
	bottom:0;
	left: calc(50% - 40px);
	
}
.about-content{
	display:flex;
	align-items:center;
	flex-wrap:wrap;
}
.about-pic{
	width:200px;
	border-radius:50%;
	margin-right:100px;
}
.about-text{
	flex:1;
}
.about-text h3{
	margin:10px 0;
	font-size:16px;
}
.about-text h3 span:nth-child(1):after,
.about-text h3 span:nth-child(2):after{
	content: "";
	width:6px;
	height:6px;
	background-color:#FFCD00;
	display:inline-block;
	border-radius:50%;
	margin: 0 14px;
}
.about-text p{
	font-size:17px;
	text-align:justify;
	line-height:26px;
	margin-top:20px;
}
.skills{
	margin-top:40px;
	display:flex;
	justify-content:space-between;
	flex-wrap:wrap;
}
.skill{
	width: calc(50% - 20px);
	margin: 15px 0;
}
.skill-info{
	display:flex;
	justify-content:space-between;
}
.skill-bar{
	height:3px;
	background-color:#FFCD00;
	margin-top:14px;
	position:relative;
	
}
.skill-bar::after{
	content:"";
	position:absolute;
	height:6px;
	background-color:black;
	width:50%;
	bottom: 0;
}
.html:after{
	width:90%;
}
.css3:after{
	width:80%;
}
.photoshop:after{
	width:80%;
}
.js:after{
	width:80%;
}
.python:after{
	width:100%;
}
.aftereffect:after{
	width:80%;
}
section.servicebar{
	background-color:#2F2F2F;
}
section.servicebar .section-title{
	color:white;
}
.services{
	display:flex;
	justify-content:space-between;
	flex-wrap:wrap;
}
.service{
	width: calc(33% - 20px);
	text-align:center;
	border:1px solid #FFCD00;
	border-radius:6px;
	margin:20px 0;
	padding: 40px 20px;
	color:white;
	cursor:pointer;
	transition: .3s linear;
}
.service ion-icon{
	color:#FFCD00;
	font-size:40px;
	margin-bottom:20px;
	transition: .3s linear;
}
.servie h4{
	font-size: 16px;
	margin-bottom:6px;
}
.service:hover{
background-color:#FFCD00;
}
.service ion-icon:hover{
	color:#2F2F2F;
}
.time-line, .works{
	display:flex;
	justify-content:space-between;
	flex-wrap:wrap;
}
.block{
	width: calc(50% - 20px);
	background-color:#2F2F2F;
	border:1px solid #FFCD00;
	margin:10px 0;
	padding:30px;
	color:white;
	position:relative;
	
}
.block::before{
content: "";
position:absolute;
width:1px;
height:120%;
background-color:#ddd;
left:-20px;
top:50%;
transform: translateY(-50%);
}
.block::after{
	content: "";
	position:absolute;
	width:16px;
	height:16px;
	background-color:#FFCD00;
	left: -28px;
	top:30px;
	border-radius:50%;
}
.block h3{
	font-size:16px;
	margin:10px 0;
	
}
.block p{
	font-size:15px;
}
.work{
	width: calc(33% - 10px);
	overflow:hidden;
	border-radius:6px;
	margin: 30px 0;
	cursor:pointer;
	position:relative;
}
.work img{
	width:100%;
	height:100%;
	transition: .4s linear;
}
.work::before{
	content: "";
	position:absolute;
	width:100%;
	height:100%;
	z-index:1;
	background-color:#FFCD00;
	transition: .2s linear;
	opacity:0;
	transform: scale(0);
}
.work .info{
	position:absolute;
	z-index:2;
	bottom:40px;
	left:40px;
	color:black;
	transition: .4s linear;
	opacity:0;
}
.work:hover img{
	transform: scale(1.6) rotate(25deg);
}
.work:hover::before,
.work:hover .info
{
	opacity:1;
	transform : scale(1);
}

.contact-info{
	display:flex;
	justify-content:space-between;
	flex-wrap:wrap;
	margin-bottom:60px;
}
.contact-info .item{
	width: calc(33% - 20px);
	height:160px;
	background-color:#2F2F2F;
	color:#FFCD00;
	text-align:center;
	cursor:pointer;
	transition: .3s linear;
}
.contact-info ion-icon{
	font-size:40px;
	line-height:120px;
	height:100px;
}
.contact-info .item:hover{
	background-color:#FFCD00,
}
.contact-form{
	display:flex;
	justify-content:space-between;
	flex-wrap:wrap;
}
.contact-form input, .contact-form textarea{
	width:100%;
	height:50px;
	margin:10px 0;
	background-color:#2f2f2f;
	border:none;
	outline:none;
	padding:20px;
	border-radius:4px;
	color:#FFCD00;
}
.name, .email{
	max-width: calc(50% - 10px);
	
}
.message{
	min-height:200px;
	resize:vertical;
}
.contact-form .btn{
	width:180px;
	font-size:16px;
	border:2px solid #FFCD00;
	padding: 0;
	margin-left:auto;
	cursor:pointer;
	transition: .3s linear;	
}
.contact-form .btn:hover{
	background-color:#FFCD00;
	color:black;
}
footer{
	background-color:#2f2f2f;
	color:#FFCD00;
	padding:80px 0;
	text-align:center;
	
}
.copyright{
	margin-bottom:20px;
	font-size:15px;
}
.copyright a {
	font-size:16px;
	color:black;
	font-weight:500;
	
}
.goTop{
	position:fixed;
	z-index:999;
	bottom:40px;
	right:40px;
	width:40px;
	height:40px;
	background-color:#FFCD00;
	border:none;
	border-radius:4px;
	cursor:pointer;
	color:black;
	outline:none;
	display:none;
}
.goTop ion-icon{
	font-size:30px;
}
@media screen and(max-width: 980px){
	.menu-toggler{
		display:block;
		
	}
	.navbar-menu{
		position:fixed;
		height:100vh;
		width:100%;
		background-color:black;
		top:0;
		right:-100%;
		max-width:400px;
		padding:80px 50px;
		transition .3s linear;
	}
	.navbar-menu a{
		display:block;
		font-size:30px;
		margin: 30px 0;
		
	}
	.sticky .navbar-menu{
		background-color:white;
		
	}
	.navbar-menu.active{
		right:0;
	}
	.menu-toggler.active span:nth-child(1){
		transform: rotate(-45deg);
		top: 4px;
	}
	.menu-toggler.active span:nth-child(2){
		opacity:0;
	}
	.menu-toggler.active span:nth-child(3){
		transform: rotate(45deg);
		bottom: 14px;
	}
	.inner-width{
		max-width:800px;
	}
	.about-pic{
		margin. 0 auto 60px;
		
	}
	.about-text{
		flex:100%;
		text-align:center;
	}
	.service{
		width: calc(50% - 20px);
	}
	.block{
		width: calc(100% - 20px);
		margin-left:auto;
	}
	.work{
		width: calc(50% - 10px);
	}
	.content-info .item{
		width:100%;
		margin:10px 0;
		
	}
}
@media screen and(max-width: 600px){
	.inner-width{
		padding:0 20px;
	}
	.skill{
		width:100%;
	}
	.service{width:100%;}
	.work{
		width:100%;
	}
	.name, .email{
		max-width:100%;
	}
}
	

</style>
<title>DEVELOPER'S HUB</title>
</head>
<body>
	<!-- Header -->
	<nav class="navbar">
		<div class="inner-width">
        <div class="h1logo">
            <h1>DEVELOPER'S HUB</h1>
        </div>
			<button class="menu-toggler">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<div class="navbar-menu">
			<a href="#home">Home</a>
			<a href="#about">About</a>
			<a href="#services">Service</a>
			<a href="#education">Experience</a>
			<a href="#works">Works</a>
            <a href="#contact">Contact</a>
            <a href="index.php">LOG OUT</a>
			
		</div>
	</div>
</nav>
	<section id="home" style="background-image:url('#');">
	<div class="inner-width">
		<div class="content">
			<h1>We are</h1>
			<div class="sm">
				<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
				<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
				<a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
				<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>		
			</div>
			<div class="buttons">
				<a href="#contact">Contact</a>
				<a href="#"> Download CV</a>
			</div>
		</div>
	</div>
</section>
		<section id="about">
			<div class="inner-width">
				<h1 class="section-title">About</h1>
				<div class="about-content">
					<div class="about-text">
					<h2>Hi, We are Inovas</h2>
					<h3>
						<span>Engineers</span>
						<span>developers</span>
						<span>Youtubers</span>
					</h3>
					<p>
					Computer programmers, sometimes called a software developers,  programmers or more recently  coders, also is a person who creates computer software. The term computer programmer can refer to a specialist in one area of computers, or to a generalist who writes code for many kinds of software.
					</p>
				</div>
				</div>
			<div class="skills">
			<div class="skill">
				<div class="skill-info">
					<span>HTML</span>
					<span>90%</span>
				</div>
				<div class="skill-bar html"></div>
			</div>
			
			<div class="skill">
				<div class="skill-info">
					<span>CSS3</span>
					<span>80%</span>
				</div>
				<div class="skill-bar css"></div>
			</div>
			
			<div class="skill">
				<div class="skill-info">
					<span>JS</span>
					<span>80%</span>
				</div>
					<div class="skill-bar js"></div>
			</div>
		
			<div class="skill">
				<div class="skill-info">
					<span>Python</span>
					<span>100%</span>
				</div>
				<div class="skill-bar python"></div>
			</div>
			
			<div class="skill">
				<div class="skill-info">
					<span>Photoshop</span>
					<span>80%</span>
				</div>
					<div class="skill-bar photoshop"></div>
			</div>
		
			<div class="skill">
				<div class="skill-info">
					<span>After Effect</span>
					<span>80%</span>
				</div>
					<div class="skill-bar aftereffect"></div>
			</div>
		
		</div>
			</div>
		</section>
	<section id="services" class="servicebar">
		<div class="inner-width">
			<h1 class="section-title">Services</h1>
			<div class="services">
			<div class="service">
			<ion-icon name="brush-outline"></ion-icon>
			<h4>Design</h4>
			<p>We do all sorts of designing like adobe illustrate and photoshop.</p>
			</div>
			<div class="service">
			<ion-icon name="logo-html5"></ion-icon>
			<h4>Web Programming</h4>
			<p>We are good in web development with most of our work on github.</p>
			</div>
			<div class="service">
			<ion-icon name="keypad-outline"></ion-icon>
			<h4>UI Design</h4>
			<p>We deal in all type of User Interfaces (UI) for mobile sites and applications.</p>
			</div>
			<div class="service">
			<ion-icon name="server-outline"></ion-icon>
			<h4>Database Management</h4>
			<p>Here you have reached the home of the best database analysits and designers.</p>
			</div>
			<div class="service">
			<ion-icon name="logo-python"></ion-icon>
			<h4>Python Developer</h4>
			<p>We are good in python language which we mostly use while developing sites and systems.</p>
			</div>
		</div>
	</section>
	
	<section id="education">
		<div class="inner-width">
		<h1 class="section-title">Experience & Education </h1>
		<div class="time-line">
			<div class="block">
				<h4>2020-2021</h4>
				<h3>PROGRAMMING</h3>
				<p>We have been doing programming for almost three years back.</p>
			</div>
			<div class="block">
				<h4>2020-2021</h4>
				<h3>APP DEVELOPERS</h3>
				<p>We have developed a number of mobile Apps and with good user interfaces.</p>
			</div>
			<div class="block">
				<h4>2020-2021</h4>
				<h3>CYBER SECURITY</h3>
				<p>We have some experience in all sorts of cyber security and mobile security.</p>
			</div>
			<div class="block">
				<h4>2020-2021</h4>
				<h3>COULD COMPUTING</h3>
				<p>We good in all sorts of could Computing and mobile computing.</p>
			</div>
		</div>
		</div>
	</section>
<section id="works" class="workbar">
	<div class="inner-width">
	<h1 class="section-title">Works</h1>
		<div class="works">
		<a href="#" class="work">
		<img src="image1.jpg" alt="" width="600"></img>
		<div class="info">
			<h3>Work Title</h3>
			<div class="dev">Programing</div>
		
		</div>
		</a>
			<a href="#" class="work">
            <img src="image2.png" alt="" width="600"></img>
		<div class="info">
			<h3>Work Title</h3>
			<div class="dev">App Developers</div>
		
		</div>
		</a>
			<a href="#" class="work">
		<img src="image3.jpg" alt="" width="600"></img>
		<div class="info">
			<h3>Work Title</h3>
			<div class="dev">Cyber Security</div>
		
		</div>
		</a>
			<a href="#" class="work">
            <img src="image4.jpg" alt="" width="600"></img>
		<div class="info">
			<h3>Work Title</h3>
			<div class="dev">Cloud Computing</div>
		
		</div>
		</a>
		</div>
	</div>
</section>
	<section id="contact">
		<div class="inner-width">
		<h1 class="section-title">Contact</h1>
		<div class="contact-info">
			<div class="item">
			<ion-icon name="phone-portrait-outline"></ion-icon>
            +256757870938 <br> <br>
            +256753177021
		</div>
		<div class="item">
			<ion-icon name="pencil-outline"></ion-icon>
			email@developer'shub.com
		</div>
		<div class="item">
			<ion-icon name="location-outline"></ion-icon>
			KAMPALA-UGANDA
		</div>
		</div>
		
	<form action="" method="post" class="contact-form" >
		<input type="text" class="name"  placeholder="Your Full Name" required>
		<input type="text" class="email" placeholder="Email" required>
		<input type="text" class="subject"  placeholder="Subject" required>
		<textarea class="message" placeholder="Message" required></textarea>
		<input type="submit" value="Send Message" class="btn">
	
	</form>
	</div>
	</section>
<footer>
	<div class="inner-width">
	<div class="copyright">
	&copy;2021 || Designed by DEVELOPER'S HUB
	</div>
		<div class="sm">
			<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
			<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
			<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
			<a href="#"><ion-icon name="logo-youtube"></ion-icon></a>

		
		</div>
	</div>
</footer>
<button class="goTop">
<ion-icon name="chevron-up-circle-outline"></ion-icon></button>
	<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script>
    $(document).ready(function(){
	$(window).scroll(function(){
		if(this.scrollY > 20){
			$(".navbar").addClass("sticky");
			$(".goTop").fadeIn();
		}
		else{
			$(".navbar").removeClass("sticky");
			$(".goTop").fadeOut();
			
		}
	});
	$(".goTop").click(function(){scroll(0,0)});
	$(".menu-toggler").click(function(){
		$(this).toggleClass("active");
		$(".navbar-menu").toggleClass("active");
	});
	$(".works").magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery:{enabled:true}
	});
});
</script>
</body>
</html>