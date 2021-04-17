<?php 
	require_once 'src/autoload.php';
	$faker = Faker\Factory::create("fr_FR");

	$connection = mysqli_connect("127.0.0.1", "root", "", "fake");


	for ($i=0; $i <=100 ; $i++) { 
		$sql = "INSERT INTO user (name, username, telephone, password, email, ville, region, nbcard, card, url, datte) VALUES ('".$faker->name."', '".$faker->userName."', '".$faker->numberBetween($min = 657000000, $max = 697000000)."', '".$faker->password."', '".$faker->email."', '".$faker->city."', '".$faker->region."', '".$faker->creditCardNumber."', '".$faker->creditCardType."', '".$faker->url."', '".$faker->date($format = 'Y-m-d H:i:s', $max = 'now')."') ";
		mysqli_query($connection, $sql);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Génération</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="src/css/all.css">
	<link rel="stylesheet" type="text/css" href="src/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="src/css/sweetalert.css">
</head>
<body>

	<script type="text/javascript" src="src/js/all.js"></script>
	<script type="text/javascript" src="src/js/bootstrap.js"></script>
	<script type="text/javascript" src="src/js/sweetalert.js"></script>
	<script type="text/javascript" src="src/js/sweetalert.min.js"></script>
</body>
</html>