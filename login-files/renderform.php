<?php
// creates the edit record form
function renderForm($id, $name, $cupcake, $frosting, $sprinkles, $user_recipe, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit/ New Record</title>
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link rel="stylesheet" href="./css/override.css">
  <!-- Compiled and minified JavaScript -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
  </script>
</head>
<body>
<header class=container>
	<h1>Edit/ New Record</h1>
</header>
<main class="container">
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<strong>ID:</strong> <?php echo $id; ?><br>
	<strong>Name: *</strong> <input type="text" name="username" value="<?php echo $name; ?>"/><br>
	<strong>Favorite Cupcake: *</strong> <input type="text" name="cupcake" value="<?php echo $cupcake; ?>"/><br>
	<strong>Favorite Frosting: </strong> <input type="text" name="frosting" value="<?php echo $frosting; ?>"/><br>
	<strong>Sprinkles: *</strong>
	<input type="radio" name="sprinkles" value="yes" required>Yes
	<input type="radio" name="sprinkles" value="no">No
	<input type="radio" name="sprinkles" value="sometimes">Sometimes<br>
	<strong>User's Recipe: </strong> <input type="userrecipe" name="userrecipe" value="<?php echo $user_recipe; ?>"/><br>
	<div>* required</div>
	<input type="submit" name="submit" value="Submit">
</form>

<div>
	<br>
	<a href="index.php">Cancel</a>
</div>
</main>
</body>
</html>
<?php
}
?>
