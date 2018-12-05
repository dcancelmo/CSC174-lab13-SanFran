<?php 
	require_once('connect-db.php');

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['username']));
		$cupcake = mysqli_real_escape_string($connection, htmlspecialchars($_POST['cupcake']));
		$frosting = mysqli_real_escape_string($connection, htmlspecialchars($_POST['frosting']));
		$sprinkles = $_POST["sprinkles"];
		if ($sprinkles == "yes") {
			$sprinkles = 1;
		} else if ($sprinkles == "no") {
			$sprinkles = -1;
		} else {
			$sprinkles = 0;
		}
		$user_recipe = mysqli_real_escape_string($connection, htmlspecialchars($_POST['userrecipe']));
		$result = mysqli_query($connection, "INSERT INTO survey (name, cupcake, frosting, sprinkles, recipe) VALUES ('$name', '$cupcake', '$frosting', '$sprinkles', '$user_recipe')");
	//Prevents access to thank you without being sent from the form.
	} else {
		ob_start();
    	header('Location: survey.php');
    	ob_end_flush();
    	die();
	}
?>

<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Thank You</title>
	</head>

	<body>
	<?php include 'inc/header.php'; ?>
	<main>
		<h2>Thank you for your contribution, <?php echo $name; ?>!</h2>
		<p>Cupcake lovers like you increase the range of people we can reach and serve. Check in next month to see your recipe featured on the website! <a href="survey.php">Back to survey page</a></p>
	</main>

	<footer>
		
	</footer>
	</body>
</html>