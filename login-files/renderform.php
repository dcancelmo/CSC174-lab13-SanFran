<?php
// creates the edit record form
function renderForm($id, $name, $cupcake, $frosting, $sprinkles, $user_recipe, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Record</title>
</head>
<body>
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<strong>ID:</strong> <?php echo $id; ?><br>
	<strong>Name: *</strong> <input type="text" name="username" value="<?php echo $username; ?>"/><br>
	<input type="text" name="username" id="username" maxlength="30" required>
	<strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php echo $lastname; ?>"/><br>
	<strong>Phone: *</strong> <input type="text" name="phone" value="<?php echo $phone; ?>"/><br>
	<strong>Email: *</strong> <input type="text" name="email" value="<?php echo $email; ?>"/><br>
	<div>* required</div>
	<input type="submit" name="submit" value="Submit">
</form>

<div>
	<br>
	<a href=".">Cancel</a>
</div>

</body>
</html>
<?php
}
?>