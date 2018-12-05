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
			<h1>Cupcakes Survey Results</h1>
		</section>

	</header>
	
	<main>
		<h2>View Records</h2>

		<?php
		// connect to the database
		include('../connect-db.php');

		// get results from database
		$result = mysqli_query($connection, "SELECT * FROM survey");
		?>

<table border>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Favorite Cupcake</th>
    <th>Favorite Frosting</th>
    <th>Sprinkles?</th>
    <th>Recipe</th>
    <th colspan="2"><em>functions</em></th>
  </tr>
<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array( $result )) {
?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['cupcake']; ?></td>
    <td><?php echo $row['frosting']; ?></td>
    <td><?php echo $row['sprinkles']; ?></td>
    <td><?php echo $row['user_recipe']; ?></td>
    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["id"]; ?>?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
  </tr>
<?php
// close the loop
}
?>
</table>

<div>
  <br>
	<a href="new.php">Add a new record</a>
</div>
	</main>

	<footer>
		<section>
			<h1><a href = "../index.php">Back to Website Home page</a></h1>
			<a href="logout.php">Logout</a>
		</section>
	</footer>
	</body>
</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>