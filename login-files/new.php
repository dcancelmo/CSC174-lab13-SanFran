<?php
include('renderform.php');

// connect to the database
include('../connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) {
	// get form data, making sure it is valid

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



	if ($name == '' || $cupcake == '' || $sprinkles == '') {
			// generate error message
			$error = 'ERROR: Please fill in all mandatory required fields!';

			//error, display form
			renderForm($id, $name, $cupcake, $frosting, $sprinkles, $user_recipe, $error);

		} else {
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO survey (name, cupcake, frosting, sprinkles, recipe) VALUES ('$name', '$cupcake', '$frosting', '$sprinkles', '$user_recipe')");

		// once saved, redirect back to the view page
		header("Location: survey-results.php");
	}
} else {
	// if the form hasn't been submitted, display the form
	renderForm('','','','','','','');
}
?>