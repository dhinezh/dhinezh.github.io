<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="57x57" href="./favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="./favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="./favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="./favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="./favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="./favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="./favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="./favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
	<link rel="manifest" href="./favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="./favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet/less" type="text/css" href="./assets/styles/styles.less" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
	<title>Login | Fast value inspection</title>
</head>

<body>
	<header class="site-header">
		<section class="container">
			<nav class="navbar navbar-expand-lg navbar-light sticky-top">
				<a class="navbar-brand" href="./index.php">
					<img src="./assets/images/logo.png" alt="Company Logo" class="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="#">Login <span class="sr-only">(current)</span></a>
						</li>
					</ul>
				</div>
			</nav>
		</section>
	</header>
	<div class="d-flex align-items-center justify-content-center">
		<div class="login-wrapper">
			<form>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="email" class="form-control" id="username" name="username" placeholder="Enter username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				</div>

				<button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
			</form>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>