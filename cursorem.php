<!DOCTYPE HTML>
<!--
	Online Railway Reservation System
	Tanishk Chandel| @tanishkchandel
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Online Railway Reservation System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="includes/css/main.css" />
        <style>
            .circle {
                height: 24px;
                width: 24px;
                border-radius: 24px;
                background-color: black;
                position: fixed; 
                top: 0;
                left: 0;
                pointer-events: none;
                z-index: 99999999; /* so that it stays on top of all other elements */
              }
        </style>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php">Online Railway Reservation System</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.php">Home</a></li>
								<li><a href="pass-login.php">Make Reservation</a></li>
								<li><a href="pass-signup.php">Sign up</a></li>
								<!-- <li><a href="employee/emp-login.php">Employee Login</a></li> -->
								<li><a href="admin/emp-login.php">Admin Login</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon solid fa-train"></span></div>
							<h2>Online Railway Reservation System</h2>
							<p>Best, Simple, and User Friendly Way To Reserve Train Tickets Effectively</a></p>
						</div>
					</section>

					<section id="footer">
						<div class="inner">
							<h2 class="major">Get in touch</h2>
							
							<ul class="contact">
								<li class="icon solid fa-home">
									Online Railway Reservation System<br />
									Sem - 5 project<br />
									
								</li>
								<li class="icon solid fa-phone">(+91) 7984942427</li>
								<li class="icon solid fa-envelope"><a href="#">mail@mtc.com</a></li>
								<li class="icon brands fa-twitter"><a href="#">twitter.com/mtc</a></li>
								<li class="icon brands fa-facebook-f"><a href="#">facebook.com/mtc</a></li>
								<li class="icon brands fa-instagram"><a href="#">instagram.com/mtc</a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Online Railway Reservation System.</li><li>Developed By:Tanishk Chandel</li>
							</ul>
						</div>
					</section>

			</div>


            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>

		<!-- Scripts -->
			<script src="includes/js/jquery.min.js"></script>
			<script src="includes/js/jquery.scrollex.min.js"></script>
			<script src="includes/js/browser.min.js"></script>
			<script src="includes/js/breakpoints.min.js"></script>
			<script src="includes/js/util.js"></script>
			<script src="includes/js/main.js"></script>
            <script>const coords = { x: 0, y: 0 };
                const circles = document.querySelectorAll(".circle");
                
                const colors = [
                  "#ffb56b",
                  "#fdaf69",
                  "#f89d63",
                  "#f59761",
                  "#ef865e",
                  "#ec805d",
                  "#e36e5c",
                  "#df685c",
                  "#d5585c",
                  "#d1525c",
                  "#c5415d",
                  "#c03b5d",
                  "#b22c5e",
                  "#ac265e",
                  "#9c155f",
                  "#950f5f",
                  "#830060",
                  "#7c0060",
                  "#680060",
                  "#60005f",
                  "#48005f",
                  "#3d005e"
                ];
                
                circles.forEach(function (circle, index) {
                  circle.x = 0;
                  circle.y = 0;
                  circle.style.backgroundColor = colors[index % colors.length];
                });
                
                window.addEventListener("mousemove", function(e){
                  coords.x = e.clientX;
                  coords.y = e.clientY;
                  
                });
                
                function animateCircles() {
                  
                  let x = coords.x;
                  let y = coords.y;
                  
                  circles.forEach(function (circle, index) {
                    circle.style.left = x - 12 + "px";
                    circle.style.top = y - 12 + "px";
                    
                    circle.style.scale = (circles.length - index) / circles.length;
                    
                    circle.x = x;
                    circle.y = y;
                
                    const nextCircle = circles[index + 1] || circles[0];
                    x += (nextCircle.x - x) * 0.3;
                    y += (nextCircle.y - y) * 0.3;
                  });
                 
                  requestAnimationFrame(animateCircles);
                }
                
                animateCircles();
                </script>
	</body>
</html>