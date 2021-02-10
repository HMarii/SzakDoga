<!-- Örökbefogadó oldal -->
<!DOCTYPE html>
<html lang="HU">
<head>
	<title>Hope | Adoptálás</title>
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
  	<a class="navbar-brand" href="index.php"><span id="logoName">Remény</span><i class="fa fa-paw fa-2x"></i></a>
  	<p> <?php include 'loggedin.php';?> </p>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav nav">
      <a class="nav-item nav-link" href="index.php">Főoldal <span class="sr-only">(current)</span></a>
      <a id="log" class="nav-item nav-link" href="login.php">Bejelentkezés</a>
      <a id="reg" class="nav-item nav-link" href="register.php">Regisztráció</a>
      <a class="nav-item nav-link active text-primary" href="#">Adoptálás</a>
      <a class="nav-item nav-link" href="otthonba.php">Otthonba adás</a>
    </div>
    </div>
    </nav>

<?php


if(!isset($_SESSION['email'])) {
	echo "<script> alert('Ezt a felületet csak bejelentkezve érheted el!');</script>";
	header('Refresh:1;URL=login.php');
	exit;
}
else {
	echo "<script> 
		var e = document.getElementById('log');
		e.innerHTML = 'Kijelentkezés';
		e.href = 'logout.php';

		var r = document.getElementById('reg');
		r.classList.add('hide');
		</script>
	";

	// DB kapcsolat & Lekérjük az adatokat
	$con = mysqli_connect('localhost', 'root', 'root');
	$db = "shelter";
	mysqli_select_db($con, $db);
	$s = "SELECT animals.id, animals.name, animals.type, animals.weight, animals.age, animals.img FROM animals WHERE adopted = 0";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);

	// Oszlop és sorok tárolása tömbben
	while($row = mysqli_fetch_assoc($result)) {
		$animals_id[] = $row['id'];
		$animals_name[] = $row['name'];
		$animals_type[] = $row['type'];
		$animals_weight[] = $row['weight'];
		$animals_age[] = $row['age'];
		$animals_img[] = $row['img'];
	}

}
?>

	<div style="margin-top:125px;margin-bottom:125px;" class="container-fluid">
		<?php
			// img mappából képek keresése
			$imgs = [];
					foreach(glob("img/{*.gif,*.jpg,*.png,*.jpeg,*.bmp}", GLOB_BRACE) as $image){
    					$imgs[] = $image;
				}
// Az állatok megjelenítése, attól függően, hogy mennyi állat van a DB-ben
			if($num >= 1) {
			echo"<div class='row'>";
			$i = 0;
			include 'populate.php';
			
		} else {
			echo "<style> 
				h1 {
					text-align:center;
					margin-top: 30px;
				}
			</style>";
			echo "<h1> Jelenleg nem fogadható örökbe állat!</h1>";
			echo "<h1> Az <a href='otthonba.php'>otthonba adással</a>, megnyílik a lehetőség az adoptálásra.</h1>";
		}
			?>
			

			<?php
			

			if($num >= 2) {
			$i = 1;
			
			include 'populate.php';
		}
			?>

			<?php
			

			if($num >= 3) {
				$i = 2;
				
				include 'populate.php';

			echo"</div>";
			}
			?>

			<?php
			

			if($num >= 4) {
			$i = 3;
			
			echo"<div class='row'>";
			include 'populate.php';
		}
			?>

			<?php
			

			if($num >= 5) {
			$i = 4;
			
			include 'populate.php';
		}
			?>

			<?php
			

			if($num >= 6) {
			$i = 5;
			
			include 'populate.php';
			echo "</div>";
		}
		?>

		<?php
		if($num >= 7) {
			$i = 6;
			
			echo"<div class='row'>";
			include 'populate.php';
		}
			?>

		<?php
			

			if($num >= 8) {
			$i = 7;
			
			include 'populate.php';
		}
			?>

			<?php
			

			if($num >= 9) {
			$i = 8;
			
			include 'populate.php';
			echo "</div>";
		}
		?>

		
			
		</div>
		
			

		



<?php include 'footer.php';?>


</body>
</html>