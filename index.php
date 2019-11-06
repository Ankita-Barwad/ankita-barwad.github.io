<!DOCTYPE html>
<html>
<title>Ankita Barwad | CV</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/NewFile.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	crossorigin="anonymous"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
<head>
</head>

<body class="w3-black">
	<!-- Icon Bar (Sidebar - hidden on small screens) -->
	<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
		<!-- Avatar image in top left corner -->
		<!-- 		<img src="/w3images/avatar_smoke.jpg" style="width: 100%">  -->
		<a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
			<i class="fa fa-home w3-xxlarge"></i>
			<p>HOME</p>
		</a> <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black"> <i
				class="fa fa-user w3-xxlarge"></i>
			<p>ABOUT</p>
		</a> <a href="#projects" class="w3-bar-item w3-button w3-padding-large w3-hover-black"> <i
				class="fa fa-user w3-xxlarge"></i>
			<p>PROJECTS</p>
		</a> <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black"> <i
				class="fa fa-envelope w3-xxlarge"></i>
			<p>CONTACT</p>
		</a>
	</nav>

	<!-- Navbar on small screens (Hidden on medium and large screens) -->
	<div class="w3-top w3-hide-large w3-hide-medium w3-black" id="myNavbar" style="height:30px;padding:2%;">
		<div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small" style="display: flex;">
			<a href="#" class="w3-bar-item w3-button " style="width:24%;">HOME</a> <a href="#about"
				class="w3-bar-item w3-button " style="width:24%;">ABOUT</a>
			<a href="#projects" class="w3-bar-item w3-button " style="width:24%;">PROJECTS</a> <a href="#contact"
				class="w3-bar-item w3-button " style="width:24%;">CONTACT</a>
		</div>
	</div>

	<div id="main">

		<!-- Page Content -->
		<div class="w3-padding-large">
			<!-- Header/Home -->
			<header class="w3-container header-padding w3-center w3-black" id="home">
				<div class="intro">
					<h4 class="absolute" style="font-size:40px;">
						<div class=" bgimg-1 parallax1"></div> <br>
						<span class="w3-hide-small">I'm</span>
						Ankita Barwad
					</h4>
					<p class="absolute"> Full Stack Developer!</p>
				</div>
			</header>

			<!-- About Section -->
			<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
				<h2 class="w3-text-light-grey" style="margin-bottom: 5%;">About
					Me</h2>
				<br>
				<!-- <hr style="width: 200px" class="w3-opacity heading_hr"> -->




				<div class="w3-row-padding">
					<div class="w3-container w3-third " id="hobby-image">
						<img src="./images/hobby-background.jpg" alt="hobby" style="width: 50%;"
							onclick="document.getElementById('modal-hobby').style.display='block'"
							class="w3-hover-opacity">
						<p class="w3-wide" style="text-align: center;">Hobby</p>
					</div>
					<div class="w3-container w3-third " id="hobby-image">
						<img src="./images/skills-background.jpg" alt="skills" style="width: 50%; height: 150%;"
							onclick="document.getElementById('modal-skills').style.display='block'"
							class="w3-hover-opacity">
						<p class="w3-wide" style="text-align: center;">Skills</p>
					</div>
					<div class="w3-container w3-third education-image" id="hobby-image">
						<img src="./images/education-background.png" alt="Education" style="width: 55%; height: 135px;"
							onclick="document.getElementById('modal-education').style.display='block'"
							class="w3-hover-opacity">
						<p class="w3-wide" style="text-align: center;">Education</p>
					</div>
				</div>

				<div id="modal-hobby" class="w3-modal" onclick="this.style.display='none'">
					<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
					<div class="w3-modal-content w3-animate-zoom hobby-modal">
						<h4>Dancing is my passion. I'm dancing ever since I was 14.</h4>
					</div>
				</div>

				<div id="modal-skills" class="w3-modal" onclick="this.style.display='none'">
					<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
					<div class=" w3-modal-content w3-animate-zoom hobby-modal">

						<!-- About Section -->
						<div class="padding-16  small-headings my-exposures-padding my-skills-background"
							style="text-align: center; margin: 1%; height: 300px">
							<h3>
								<b>My Skills</b>
							</h3>

							<div class="row1">
								<div class="col-sm-4">
									<img src="./images/html-logo.jpg" class="img-circle" alt="HTML" width="70"
										height="70">
								</div>
								<div class="col-sm-4">
									<img src="./images/visual-studio-code-logo.jpg" class="img-circle"
										alt="visual studio code" width="70" height="70">
								</div>
								<div class="col-sm-4">
									<img src="./images/css-logo.jpg" class="img-circle" alt="css" width="70"
										height="70">
								</div>
							</div>

							<div class="row2">
								<div class="col-sm-4">
									<img src="./images/bootstrap-logo.jpg" class="img-circle" alt="bootstrap" width="70"
										height="70">
								</div>
								<div class="col-sm-4">
									<img src="./images/java-logo.jpg" class="img-circle" alt="java" width="70"
										height="70">
								</div>
								<div class="col-sm-4">
									<img src="./images/js-logo.jpg" class="img-circle" alt="jQuery" width="70"
										height="70">
								</div>
							</div>
							<div class="row3">
								<div class="col-sm-4">
									<img src="./images/git-logo.jpg" class="img-circle" alt="git" width="70"
										height="70">
								</div>
								<div class="col-sm-4">
									<img src="./images/eclipse-logo.jpg" class="img-circle" alt="eclipse" width="70"
										height="70">
								</div>
								<div class=col-sm-4>
									<img src="./images/spring-logo.png" class="img-circle" alt="eclipse" width="70"
										height="70">
								</div>
								<div class=col-sm-4>
									<img src="./images/angular-logo.jpg" class="img-circle" alt="angular" width="70"
										height="70">
								</div>
								<div class=col-sm-4>
									<img src="./images/agile-logo.png" class="img-circle" alt="agile" width="110"
										height="70">
								</div>
								<div class=col-sm-4>
									<img src="./images/python-logo.jpg" class="img-circle" alt="python" width="70"
										height="70">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="modal-education" class="w3-modal" onclick="this.style.display='none'">
				<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
				<div class="w3-modal-content w3-animate-zoom hobby-modal" style="background-color: transparent;">
					<div class="container " style="color: black; text-align: center;">
						<div class="w3-container w3-card w3-white education-container">
							<h2 class="w3-text-grey w3-padding-16">
								<i class="	fa fa-bookmark fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education
							</h2>
							<div class="w3-container">
								<h5 class="w3-opacity">
									<b>Lakshmi Narain College Of Technology, Bhopal</b>
								</h5>
								<h6 class="w3-text-teal">
									<i class="fa fa-calendar fa-fw w3-margin-right"></i>2013-2017
								</h6>
								<p>Graduate Degree<br>CGPA- 8.09</p>
								<hr>
							</div>
							<div class="w3-container">
								<h5 class="w3-opacity">
									<b>Green Valley School, Bhopal</b>
								</h5>
								<h6 class="w3-text-teal">
									<i class="fa fa-calendar fa-fw w3-margin-right"></i>2013
								</h6>
								<p>Grade XII<br>CGPA- 7.98</p>
								<hr>
							</div>
							<div class="w3-container">
								<h5 class="w3-opacity">
									<b>St. Marys Convent Sr. Sec. School, Bhopal</b>
								</h5>
								<h6 class="w3-text-teal">
									<i class="fa fa-calendar fa-fw w3-margin-right"></i>2011
								</h6>
								<p>Grade X<br>CGPA- 9.4</p>
								<br>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- Projects Section -->
			<div class="w3-padding-64 w3-content" id="projects">
				<h2 class="w3-text-light-grey">My Projects</h2>
				<hr style="width: 200px" class="w3-opacity heading_hr">



				<!-- Second Parallax Image with Text -->
				<div class="bgimg-2 parallax2 w3-display-container w3-opacity-min " id="projects"
					style="margin-top: 0px;    background-size: cover;">



					<div class="container">

						<div id="myCarousel" class="carousel slide" data-ride="carousel">


							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<h3>Project 1</h3>
									<h2 class="project-name ">Grizzly Store</h2>
									<p class="project-details left">
										<i style="font-size: 24px" class="fa">&#xf101;</i><b>Type</b>:Shopping
										Website <br>
										<i style="font-size: 24px" class="fa">&#xf101;</i>
										<b>Layers</b>: Admin, Vendor and Customer. <br>
										<i style="font-size: 24px" class="fa">&#xf101;</i> <b>Basic
											functionalities:</b> Admins can login and maintain the Vendors,
										Vendors can login and maintain their products, Customers can
										Sign Up, Login, Shop, and maintain their orders. <br>
										<i style="font-size: 24px" class="fa">&#xf101;</i><b>Technologies
											Used:</b> <b>Front End:</b> HTML, CSS, BOOTSTRAP, JQUERY, JavaScript;<b>
											Back End:
											JAVA,
											Springboot, Spring MVC </b><br>
										<i style="font-size: 24px" class="fa">&#xf101;</i><b>IDE:</b>VISUAL
										STUDIO CODE, Spring-Tool-Suit<br>
										<b>DataBase tool:</b> My SQL Workbench.
										<i style="font-size: 24px" class="fa">&#xf101;</i><b>Frameworks:</b>Angular5;
										Springboot; spring
										MVC<br>
										Server: Apache Tomcat Server 9
									</p>
									<!-- <div class="loader"> </div> -->
									<p class="project-details" id="ongoing"></p>


									</p>
								</div>

								<div class="item">
									<h3>Project 2</h3>
									<h2 class="project-name">CKlub</h2>
									<p class="project-details left">
										<i style="font-size: 24px" class="fa">&#xf101;</i><b>Type:</b>In-house
										Portal<br>
										<br> <i style="font-size: 24px" class="fa">&#xf101;</i> <b>Basic
											functionalities:</b> Trainers can register and volunteer for training
										sessions.
										Participants
										can provide thier feedback for a particular trainer on the website. <br>
										<i style="font-size: 24px" class="fa">&#xf101;</i><b>Technologies
											Used:</b> <b>Front End:</b> HTML, CSS, BOOTSTRAP, JQUERY, JavaScript;<b>
											Back End:
											JAVA,
											Springboot, Spring MVC </b><br>
										<i style="font-size: 24px" class="fa">&#xf101;</i><b>IDE:</b>VISUAL
										STUDIO CODE, Spring-Tool-Suit<br>
										<b>DataBase tool:</b> My SQL Workbench.
										<i style="font-size: 24px" class="fa">&#xf101;</i><b>Frameworks:</b>Angular5;
										Springboot; spring
										MVC<br>
										Server: Apache Tomcat Server 9
									</p>
									<!-- <div class="loader"> </div> -->
									<p class="project-details" id="ongoing"></p>
								</div>

								<!-- <div class="item">
									<h3>Project 3</h3>
									<h2 class="project-name">Solar Powered Car</h2>
									<p class="project-details">
										<i style="font-size: 24px" class="fa">&#xf101;</i><b>Type:</b>Remote
										controlled car <br> <i style="font-size: 24px" class="fa">&#xf101;</i>
										Description: A remote controlled vehicle that saves energy, runs
										by using Solar energy and is Economical. Hence, works on
										non-conventional source. <br> <i style="font-size: 24px"
											class="fa">&#xf101;</i><b>Technology Used:</b> PV technology.<br>

									</p>
								</div> -->

								<div class="item">
									<h3>Project 3</h3>
									<h2 class="project-name">Google AMP</h2>
									<p class="project-details left">
										<i style="font-size: 24px" class="fa">&#xf101;</i><b>Type:</b>Front End
										Develpoment<br> <i style="font-size: 24px" class="fa">&#xf101;</i>
										<b>Description</b>:AMP pages are faster loading pages. Faster load time leads to
										better
										engagement, which reduces bounce rate and improves mobile ranking.<br> <i
											style="font-size: 24px" class="fa">&#xf101;</i><b>Technology Used:</b> HTML,
										CSS,
										Google-AMP<br>

									</p>
								</div>
								<div class="item">
									<h3>Project 4</h3>
									<h2 class="project-name">mUX- Mobile User Experience</h2>
									<p class="project-details left">
										<i style="font-size: 24px" class="fa">&#xf101;</i><b>Type:</b>Quality Audit and
										Analysis<br> <i style="font-size: 24px" class="fa">&#xf101;</i>
										<b>Description</b>: Auditing the client's mobile websites and suggesting ways to
										increase their transactions.
									</p>
								</div>
							</div>

						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span
								class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span>
						</a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span
								class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span>
						</a>
					</div>
				</div>

			</div>
			<!-- End Project Section -->

			<!-- Contact Section -->
			<div class=" w3-content w3-text-grey" id="contact">
				<h2 class="w3-text-light-grey">Contact Me</h2>
				<hr style="width: 200px" class="w3-opacity heading_hr">

				<div class="w3-section">
					<p>
						<i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>
						Bangalore, India.
					</p>
					<p>
						<i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>
						Phone: +91 8871672850
					</p>
					<p>
						<i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right">
						</i> Email: ankitabarwad@gmail.com
					</p>
				</div>
				<br>
				<p>Lets get in touch. Send me a message:</p>

				<form action="mailto:ankitabarwad@gmail.com" method="GET">
					<p>
						<input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"
							style="border-radius:4px;">
					</p>
					<p>
						<input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"
							style="border-radius:4px;">
					</p>
					<p>
						<input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"
							style="border-radius:4px;">
					</p>
					<p>
						<input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"
							style="border-radius:4px;">
					</p>
					<p>
						<button class="w3-button w3-light-grey w3-padding-large" type="submit" value="Send"
							style="border-radius:4px;">
							<i class="fa fa-paper-plane"></i> Send MESSAGE
						</button>
					</p>
				</form>
				<!-- End Contact Section -->
			</div>


			<!-- Footer -->
			<footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge"
				style="display:flex; justify-content: space-evenly; padding-bottom: 20px !important;">
				<a style="color: grey;" href="https://www.facebook.com/ankita.barwad.2810"> <i
						class="fa fa-facebook-official w3-hover-opacity"></i>
				</a> <a style="color: grey;" href="https://www.instagram.com/_coldplayero_/"> <i
						class="fa fa-instagram w3-hover-opacity"> </i>
				</a> <a style="color: grey;" href="https://twitter.com/AnkitaBarwad">
					<i class="fa fa-twitter w3-hover-opacity"> </i>
				</a> <a style="color: grey;" href="https://www.linkedin.com/in/ankita-barwad-24b74711a/"> <i
						class="fa fa-linkedin w3-hover-opacity"> </i>
				</a>

				<!-- End footer -->
			</footer>
			<!-- END PAGE CONTENT -->
		</div>
	</div>
	</div>


	</div>
	</div>
</body>

</html>
