<?php
	session_start();
	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: login.php");
		exit;
	}

	require_once '../connect-db.php';

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Survey Results</title>
	</head>

	<body>
	<header>
		<section>
			<h1>Cupcakes</h1>
		</section>

		<section>
			<h1><a href = "../index.php">Back to Website Home page</a></h1>
			<a href="logout.php">Logout</a>
		</section>
	</header>

	<main>
		<h1>View Records</h1>

		
	</main>

	<footer>
		
	</footer>
	</body>
</html>