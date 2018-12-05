<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Cupcake Survey!</title>
	</head>

	<body>
	<?php include 'inc/header.php'; ?>
	<main>
		<h2>The Important cupcake survey!</h2>
			<form method="post" action="survey-thanks.php">
				<label class="fixed" for="username">* Your Name: </label>
				<input type="text" name="username" id="username" maxlength="30" required>
				<label class="fixed" for="cupcake">* Favorite Cupcake: </label>
				<input type="text" name="cupcake" id="cupcake" maxlength="25" required>
				<label class="fixed" for="frosting">Favorite frosting: </label>
				<input type="text" name="frosting" id="frosting" maxlength="25">
				<label class="fixed" for="sprinkles">* Do you like sprinkles? </label>
				<input type="radio" name="sprinkles" value="yes" required>Yes
				<input type="radio" name="sprinkles" value="no">No
				<input type="radio" name="sprinkles" value="sometimes">Sometimes


				<fieldset>
				<h3><label for="userrecipe">Submit your own cupcake recipe to be featured on the site!</label></h3>
				<textarea name="userrecipe" id="userrecipe" cols ="60" rows="30" maxlength="65535"></textarea>
				</fieldset>
				<div>* = required field</div>
				<input type="submit" value="Here's my survey response!">
			</form>
	</main>
	</body>
</html>