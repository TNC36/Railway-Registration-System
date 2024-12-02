<!DOCTYPE HTML>
<!--
	Online Railway Reservation System
	Tanishk Chandel| @tanishkchandel
-->
<html>
	<head>
		<title>Online Railway Reservation System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="includes/css/main.css" />
		<style>
/* Center the entire header */
#header {
			padding: 0;
			margin: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			}
            .navbar {
				background:blur(30px);
				box-shadow: inset 0px 0px 30px rgba(227,228,237,0.2);
				border:rgba(92, 111, 163, 0.2);
				width: 50%;
				padding: 0;
				margin: 0;
				display: flex;
				justify-content: center;
				align-items: center;
				overflow: hidden;
			/* Other styles (e.g., background, box shadow, etc.) go here */
			}

			/* Additional styling for navbar items (if needed) */
			.navbar ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: space-evenly;
			}

			.navbar ul li {
			float: left;
			}

			.navbar ul li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 20px;
			text-decoration: none;
			transition: background-color 0.3s;
			}

			.navbar ul li a:hover {
			background-color:rgba(92, 111, 163, 0.2);
			}

            /*places*/
            .holiday{
                text-align: center;
                font-size: larger;
                font-weight: 800;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                letter-spacing: 3px;
                font-size: 25px;
            }

            .container {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                margin: 40px 0;
              }
              .container .card {
                position: relative;
                width: 400px;
                height: 300px;
                margin: 20px;
                overflow: hidden;
                box-shadow: inset 0 5px 15px rgba(0, 0, 0, 0.2);
                border-radius: 15px;
                display: flex;
                justify-content: center;
                align-items: center;
              }
              .container .card .content{
                position: absolute;
                bottom: -160px;
                width: 100%;
                height: 160px;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 10;
                flex-direction: column;
                backdrop-filter: blur(15px);
                box-shadow: 0 -10px 10px rgba(0,0,0,0.1);
                border: 1px solid rgba(255,255,255,0.2);
                transition: bottom 0.5s;
                transition-delay: 0.8s;
              }
              .container .card:hover .content{
                bottom: 0px;
                transition-delay: 0s;
              }
              .container .card .content .contentBx h3{
                color: #fff;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-weight: 500;
                font-size: 12px;
                line-height: 1.1em;
                text-align: center;
                margin: 5px 0 15px;
                transition: 0.5s;
                opacity: 0;
                transform: translateY(-20px);
                transition-delay: 0.6s;
              }
              .container .card:hover .content .contentBx h3{
                opacity: 1;
                transform: translateY(0px);
              }
              .container .card .content .contentBx h3 span{
                font-size: 9px;
                font-weight: 300;
                text-transform: initial;
              }
              .container .card .content .sci{
                position: relative;
                bottom: 10px;
                display: flex;
              }
              .container .card .content .sci li{
                list-style: none;
                margin:  10px;
                transform: translateY(40px);
                transition: 0.5s;
                opacity: 0;
                transition-delay: calc(0.2s * var(--i));
              }
              .container .card:hover .content .sci li{
                transform: translateY(0px);
                opacity: 1;
              }
              
              .container .card .content .sci li a{
                color: #fff;
              }


              /*footer*/
              .footer {
                backdrop-filter: blur(5px);
                display: flex;
                flex-flow: row wrap;
                padding: 30px 30px 20px 30px;
                color: #2f2f2f;
                background-color:rgba(231, 250, 255, 0.2);
                border-top: 1px solid #e5e5e5;
              }
              
              .footer > * {
                flex:  1 100%;
              }
              
              .footer__addr {
                margin-right: 1.25em;
                margin-bottom: 2em;
              }
              
              .footer__logo {
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-weight: 400;
                text-transform: uppercase;
                font-size: 1.5rem;
                color: black;
              }
              
              .footer__addr h2 {
                margin-top: 1.3em;
                font-size: 15px;
                font-weight: 400;
              }
              
              .nav__title {
                font-weight: 600;
                font-size: 15px;
                color: black;
              }
              
              .footer address {
                font-style: normal;
                color: #999;
              }
              
              .footer__btn {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 36px;
                max-width: max-content;
                background-color: rgb(33, 33, 33, 0.07);
                border-radius: 100px;
                color: #2f2f2f;
                line-height: 0;
                margin: 0.6em 0;
                font-size: 1rem;
                padding: 0 1.3em;
              }
              
              .footer ul {
                list-style: none;
                padding-left: 0;
              }
              
              .footer li {
                line-height: 2em;
              }
              
              .footer a {
                text-decoration: none;
                color: black;
              }
              
              .footer__nav {
                display: flex;
                  flex-flow: row wrap;
              }
              
              .footer__nav > * {
                flex: 1 50%;
                margin-right: 1.25em;
              }
              
              .nav__ul a {
                color: #999;
              }
              
              .nav__ul--extra {
                column-count: 2;
                column-gap: 1.25em;
              }
              
              .legal {
                display: flex;
                flex-wrap: wrap;
                color: #999;
              }
                
              .legal__links {
                display: flex;
                align-items: center;
              }
              
              .heart {
                color: #2f2f2f;
              }
              
              @media screen and (min-width: 24.375em) {
                .legal .legal__links {
                  margin-left: auto;
                }
              }
              
              @media screen and (min-width: 40.375em) {
                .footer__nav > * {
                  flex: 1;
                }
                
                .nav__item--extra {
                  flex-grow: 2;
                }
                
                .footer__addr {
                  flex: 1 0px;
                }
                
                .footer__nav {
                  flex: 2 0px;
                }
              }
		</style>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<!-- <h1><a href="index.php">Online Railway Reservation System</a></h1> -->
						<!-- <nav>
							<a href="#menu">Menu</a>
						</nav> -->
						<nav class="navbar">
                            <ul class="links">
                                    <li><a href="index.php"  class="nav-home" id="nav-home">Home</a></li>
                                    <li><a href="pass-login.php" class="nav-reservation" id="nav-reservation">Make Reservation</a></li>
                                    <li><a href="pass-signup.php" class="nav-sign" id="nav-sign">Sign up</a></li>
                                    <!-- <li><a href="employee/emp-login.php">Employee Login</a></li> -->
                                    <li><a href="admin/emp-login.php" class="nav-admin" id="nav-admin">Admin Login</a></li>
                            </ul>
                        </nav>
					</header>

				<!-- Menu -->
					<!-- <nav id="menu">
						<div class="inner" style="background-color:#111;">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.php">Home</a></li>
								<li><a href="pass-login.php">Make Reservation</a></li>
								<li><a href="pass-signup.php">Sign up</a></li>
								<!-- <li><a href="employee/emp-login.php">Employee Login</a></li> -->
								<!-- <li><a href="admin/emp-login.php">Admin Login</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav> -->
				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon solid fa-train"></span></div>
							<h2>Online Railway Reservation System</h2>
							<p>your journey our priority</a></p>
						</div>
					</section>


                    <section id="places">
                        <div class="title-hol">
                            <p class="holiday">HOLIDAY</p>
                        </div>
                        <div class="container">
                            <div class="card">
                              <div class="imgBx">
                                <img src="./images/places-mah.jpg">
                              </div>
                              <div class="content">
                                <div class="contentBx">
                                  <h3><a href="#">Mahrajas Express</a><br><span><a href="#">Redefining Royalty, Luxury and Comfort, Maharajas' express takes you on a sojourn to the era of bygone stately splendour of princely states</a></span></h3>
                                </div>
                              </div>
                            </div>
                        
                            <div class="card">
                              <div class="imgBx">
                                <img src="./images/places-bha.jpg">
                              </div>
                              <div class="content">
                                <div class="contentBx">
                                  <h3><a href="#">Bharat Gaurav Tourist Train</a><br><span><a href="#">RCTC operates Bharat Gaurav Tourist Train having AC III-Tier accommodation on train specially designed to promote domestic tourism in India.</a></span></h3>
                                </div>
                              </div>
                            </div>
                        
                            <div class="card">
                              <div class="imgBx">
                                <img src="./images/places-darjeeling.jpeg">
                              </div>
                              <div class="content">
                                <div class="contentBx">
                                  <h3><a href="#">Rail Tour Packages</a><br><span><a href="#">IRCTC offers Exclusive Rail tour packages with confirmed train tickets, sight-seeing Nilgiri Mountains, Darjeeling, or divine tours of Mata Vaishno Devi, Rameswaram, Shirdi, Tirupati etc.</a></span></h3>
                                </div>
                              </div>
                            </div>

                            <div class="card">
                                <div class="imgBx">
                                  <img src="./images/vande bharat.jpeg">
                                </div>
                                <div class="content">
                                  <div class="contentBx">
                                    <h3><a href="#">Bharat Gaurav Tourist Train</a><br><span><a href="#">RCTC operates Bharat Gaurav Tourist Train having AC III-Tier accommodation on train specially designed to promote domestic tourism in India.</a></span></h3>
                                  </div>
                                </div>
                              </div>
                        
                          </div>
                    </section>







					<!-- <section id="footer">
						<div class="inner">
							<h2 class="major">Get in touch</h2>
							
							<ul class="contact">
								<li class="icon solid fa-home">
									Online Railway Reservation System<br />
									Sem - 5 project<br />
									
								</li>
								<li class="icon solid fa-phone">(+91) 7984942427</li>
								<li class="icon solid fa-envelope"><a href="#"  class="mail"id="mail">mail@mtc.com</a></li>
								<li class="icon brands fa-twitter"><a href="#" class="twitter" id="twitter">twitter.com/mtc</a></li>
								<li class="icon brands fa-facebook-f"><a href="#"class="face" id="face">facebook.com/mtc</a></li>
								<li class="icon brands fa-instagram"><a href="#" class="insta" id="insta">instagram.com/mtc</a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Online Railway Reservation System.</li><li>Developed By:Tanishk Chandel</li>
							</ul>
						</div>
					</section> -->
                    <footer class="footer">
                        <div class="footer__addr">
                          <h1 class="footer__logo">MTC</h1>
                              
                          <h2>Contact</h2>
                          
                          <address>
                            Online Railway Reservation System<br />
									Sem - 5 project<br>
                                
                            <a class="footer__btn" href="MTC:example@gmail.com">Email Us</a>
                          </address>
                        </div>
                        
                        <ul class="footer__nav">
                          <li class="nav__item">
                            <h2 class="nav__title">Media</h2>
                      
                            <ul class="nav__ul">
                              <li>
                                <a href="#">Online</a>
                              </li>
                      
                              <li>
                                <a href="#">Print</a>
                              </li>
                            </ul>
                          </li>
                          
                          <li class="nav__item nav__item--extra">
                            <h2 class="nav__title">Technology</h2>
                            
                            <ul class="nav__ul nav__ul--extra">
                              <li>
                                <a href="#"> UI Design</a>
                              </li>
                              
                              <li>
                                <a href="#">PHP</a>
                              </li>
                              
                              <li>
                                <a href="#">SQL</a>
                              </li>
                              
                              <li>
                                <a href="#">HTML</a>
                              </li>
                              
                              <li>
                                <a href="#">CSS</a>
                              </li>
                            </ul>
                          </li>
                          
                          <li class="nav__item">
                            <h2 class="nav__title">Legal</h2>
                            
                            <ul class="nav__ul">
                              <li>
                                <a href="#">Privacy Policy</a>
                              </li>
                              
                              <li>
                                <a href="#">Terms of Use</a>
                              </li>
                              
                              <li>
                                <a href="#">Sitemap</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        
                        <div class="legal">
                          <p>&copy; 2024 MTC. All rights reserved.</p>
                          
                          <div class="legal__links">
                            <span>Made with <span class="heart">♥</span>from MTC</span>
                          </div>
                        </div>
                      </footer>

			</div>

		<!-- Scripts -->
			<script src="includes/js/jquery.min.js"></script>
			<script src="includes/js/jquery.scrollex.min.js"></script>
			<script src="includes/js/browser.min.js"></script>
			<script src="includes/js/breakpoints.min.js"></script>
			<script src="includes/js/util.js"></script>
			<script src="includes/js/main.js"></script>
			<script>
				import { driver } from "driver.js";
				import "node_modules/driver.js/dist/driver.css";

					const driverObj = driver();
					driverObj.highlight({
					element: "#nav-admin",
					popover: {
						title: "Title",
						description: "Description"
					}
					});
			</script>
	</body>
</html>