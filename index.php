<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Website</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Fondamento&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>
<body>
	<!-- *****************NAV BAR******************************************** -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">AMOGH KARANKAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-id">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services-id">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#gallery-id">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact-id">Contact</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- ********************************************************************** -->

<!-- ***************CAROUSEL********************************************** -->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/la.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chicago.png" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/ny.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- ************************************************************************* -->

<!-- *********************************ABOUT ME********************************* -->

<section class="my-5" id="about-id">
	<div class="py-5">
		<h3 class="text-center">About me</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/about.jpg" class="img-fluid about-img">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">Amogh Balkrishna Karankal</h2>
				<p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<a href="about.php" class="btn btn-success">Know me more</a>
			</div>
		</div>
	</div>
</section>
<!-- ************************************************************************** -->
<!-- ******************OUR SERVICES********************************************* -->

<section class="my-5" id="services-id">
	<div class="py-5">
		<h3 class="text-center">Our services</h3>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/la.png" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Los Angeles</h4>
				    <p class="card-text">Some example text.</p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>

			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/chicago.png" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Chicago</h4>
				    <p class="card-text">Some example text.</p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>

			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/ny.png" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">New York</h4>
				    <p class="card-text">Some example text.</p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- *************************************************************************** -->
<!-- *************************GALLERY******************************************* -->

<section class="my-5" id="gallery-id">
	<div class="py-5">
		<h3 class="text-center">Gallery</h3>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/la.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/chicago.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/ny.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/ny.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/la.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/chicago.png" class="img-fluid pb-4">
			</div>
		</div>		
	</div>
</section>

<!-- **************************************************************************** -->
<!-- *************************CONTACT ME***************************************** -->

<section class=" bg-secondary p-5 contactme" id="contact-id">
	<div class="py-5">
		<h3 class="text-center">Contact me</h3>
	</div>

	<div class="m-auto w-50">
		<form action="userinfo.php" method="post">
			<div class="form-group">
						 	<input type="text" class="form-control" placeholder="Enter your name" name="username" required autocomplete="off">
						</div>
						<div class="form-group">
						 	<input type="text" class="form-control" placeholder="Enter email" name="email" required autocomplete="off">
						</div>
						<div class="form-group">
						 	<input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile" required autocomplete="off">
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="Comment" rows="4" name="comment"></textarea>
						</div>
						  
						  <div class="d-flex justify-content-around align-item-center form-button">
						  <button type="submit" class="btn btn-primary">Submit</button>
						  </div>
				
			</div>
		</form>
	</div>
</section>

<!-- **************************************************************************** -->
<!-- ********************FOOTER************************************************** -->

<footer class="bg-dark p-3  text-white text-center">
	<div class="container text-center">
				<p>Follow me on:</p><br>
			    <a href="https://www.instagram.com/slaughter_8055/" target="_blank"><i class="fa fa-instagram fa-2x text-white p-3" aria-hidden="true" ></i></a>

		        <a href="https://www.linkedin.com/in/amogh-karankal-20dec2000/" target="_blank"><i class="fa fa-linkedin-square fa-2x text-white p-3" aria-hidden="true"></i></a>

		        <a href="https://www.facebook.com/profile.php?id=100004838985347" target="_blank"><i class="fa fa-facebook-square fa-2x text-white p-3" aria-hidden="true"></i></a>
	        </div>
	        <div class="mt-5 text-center">
				<p>Copyright &copy;2020 All rights reserved | This template is developed by Amogh Balkrishna Karankal.</p>
			</div>
</footer>

<!-- ***************************************************************************** -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
</body>
</html>