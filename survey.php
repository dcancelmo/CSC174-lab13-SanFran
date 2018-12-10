<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Cupcake Survey!</title>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script
			src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
		</script>
	</head>

	<body>
	<?php include 'inc/header.php'; ?>
	<main class='container'>
		<section>
		<h2>The Important cupcake survey!</h2>
			<form class="col s12" method="post" action="survey-thanks.php">

				<label class="fixed" for="username">* Your Name: </label>
				<input type="text" name="username" id="username" maxlength="30" required>

				<label class="fixed" for="cupcake">* Favorite Cupcake: </label>
				<input type="text" name="cupcake" id="cupcake" maxlength="25" required>

				<label class="fixed" for="frosting">Favorite frosting: </label>
				<input type="text" name="frosting" id="frosting" maxlength="25">

				<label
					class="fixed"
					for="sprinkles">
					<span>* Do you like sprinkles?</span>
				</label>

				<label>
					<input
						type="radio"
						name="sprinkles"
						value="yes"
						required>
					<span>Yes</span>
				</label>

				<label>
					<input
						type="radio"
						name="sprinkles"
						value="no">
					<span>No</span>
				</label>

				<label>
					<input
						type="radio"
						name="sprinkles"
						value="sometimes">
					<span>Sometimes</span>
				</label>

				<fieldset>
					<div class="row">
						<div class="input-field col s12">
							<textarea
								class="materialize-textarea"
								name="userrecipe"
								id="userrecipe"
								cols ="60"
								rows="30"
								maxlength="65535">
							</textarea>
							<label for="userrecipe">
								Submit your own cupcake recipe to be featured on the site!
							</label>
						</div>
					</div>
				</fieldset>
				<div>* = required field</div>
				<input
					class="waves-effect waves-light btn"
					type="submit"
					value="Here's my survey response!">
			</form>
		</section>
	</main>
	</body>
</html>
