<!-- Index oldal -->
<!DOCTYPE html>
<html>
<head>
	<title>Hope | Főoldal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">


	<!-- Google Fontok -->
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">

	<!--Bootstrap & Fontawesome & CSS -->
	<script src="https://kit.fontawesome.com/bc29ea71fe.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- JQuery & Scriptek-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<!-- Fejléc -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="#"><span id="logoName">Remény</span><i class="fa fa-paw fa-2x"></i></a>
  		<p><?php include 'loggedin.php';?></p>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>
	  	<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
	    	<div class="navbar-nav nav">
	      	<a class="nav-item nav-link active text-primary" href="#">Főoldal <span class="sr-only">(current)</span></a>
	      	<a id="log" class="nav-item nav-link" href="login.php">Bejelentkezés</a>
	      	<a id="reg" class="nav-item nav-link" href="register.php">Regisztráció</a>
	      	<a class="nav-item nav-link" href="adoptalas.php">Adoptálás</a>
	      	<a class="nav-item nav-link" href="otthonba.php">Otthonba adás</a>
	    	</div>
	  	</div>
	</nav>

	<?php


if(isset($_SESSION['email'])) {
	echo "<script> 
		var e = document.getElementById('log');
		e.innerHTML = 'Kijelentkezés';
		e.href = 'logout.php';

		var r = document.getElementById('reg');
		r.classList.add('hide');

		</script>
	";
}

?>		

	<div class="container">
		<div id="home">
			<div class="landing-text">
				<h1>HOPE</h1>
				<h3>Adj egy újabb reményt az állatoknak!</h3>
				<a href="adoptalas.php"><button type="button" class="btn btn-dark">Láss hozzá</button></a>
			</div>
		</div>
		<hr>
		<div class="padding">
			<div class="container">
				<div class="row">

					<div class="col-sm-6">
						<i class='fas fa-cat' style="font-size: 100px;"></i>
						<i class="fas fa-child" style="font-size: 100px;"></i>
					</div>
					
					<div class="col-sm-6 text-center">
						<h2 style="font-weight:bold;">Fogadj örökbe!</h2>
						<p class="lead">Ha örökbe fogadsz egy állatot, akkor adhatsz neki még egy esélyt, amit megérdemelnek.</p>
						<p class="lead">Az állatoknak szükségük van emberi szeretetre, ami jó hatással van az egészségükre.</p>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<i class='fas fa-dog' style="font-size: 100px;"></i>
						<i class="fas fa-home" style="font-size: 100px;"></i>
					</div>
					<div class="col-sm-6 text-center">
						<h2 style="font-weight: bold;">Adj otthont!</h2>
						<p class="lead">Sajnos felléphetnek számos problémák az állattartás közben, ez lehet anyagi gond vagy esetleg az állatra való allergia.</p>
						<p class="lead">Ez az oldal megadja az otthontkereső állat számára a megfelelő körülményeket, legyen az kutya, macska, tengerimalac.</p>
					</div>	
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php';?>
</body>
</html>