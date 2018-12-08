<!-- 
	Tutorial used: https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
	It is the same one that was given for lab11
 -->
<?php
require_once('connect-db.php');

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] === "POST"){

	// Validate username
	if(empty(trim($_POST["username"]))){
		$username_err = "Please enter a username.";
	} else{
		$sql = "SELECT username FROM credentials WHERE username = ?";
		
		if($stmt = mysqli_prepare($connection, $sql)){
			mysqli_stmt_bind_param($stmt, "s", $param_username);
			
			$param_username = trim($_POST["username"]);
			
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				mysqli_stmt_store_result($stmt);
				
				if(mysqli_stmt_num_rows($stmt) == 1){
					$username_err = "This username is already taken.";
				} else{
					$username = trim($_POST["username"]);
				}
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}
		}
		 
		mysqli_stmt_close($stmt);
	}
	
	// Validate password
	if(empty(trim($_POST["password"]))){
		$password_err = "Please enter a password.";     
	} elseif(strlen(trim($_POST["password"])) < 5){
		$password_err = "Password must have at least 5 characters.";
	} else{
		$password = trim($_POST["password"]);
	}
	
	// Validate confirm password
	if(empty(trim($_POST["confirm_password"]))){
		$confirm_password_err = "Please confirm password.";     
	} else{
		$confirm_password = trim($_POST["confirm_password"]);
		if(empty($password_err) && ($password != $confirm_password)){
			$confirm_password_err = "Password did not match.";
		}
	}
	
	// Check input errors before inserting in database
	if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
		
		$sql = "INSERT INTO credentials (username, password) VALUES (?, ?)";
		 
		if($stmt = mysqli_prepare($connection, $sql)){
			mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
			
			$param_username = $username;
			$param_password = password_hash($password, PASSWORD_DEFAULT);
			
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				header("location: login-files/login.php");
			} else{
				echo "Something went wrong. Please try again later.";
			}
		}
		 
		mysqli_stmt_close($stmt);
	}
	
	mysqli_close($connection);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register-Admin</title>
</head>
<body>
	<header>
		<h1>Register</h1>
	</header>
	<section>
		<h2>Fill out to create account</h2>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<div>
				<label>Username</label>
				<input type="text" name="username"value="<?php echo $username; ?>">
				<span><?php echo $username_err; ?></span>
			</div>    
			<div>
				<label>Password</label>
				<input type="password" name="password" value="<?php echo $password; ?>">
				<span><?php echo $password_err; ?></span>
			</div>
			<div>
				<label for="confirm_password">Confirm Password</label>
				<input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
				<span><?php echo $confirm_password_err; ?></span>
			</div>
			<div>
				<input type="submit" value="Submit">
			</div>
			<p>Already have an account? <a href="login-files/login.php">Login here</a>.</p>
		</form>
	</section>    
</body>
</html>