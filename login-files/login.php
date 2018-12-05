<!-- 
	Tutorial used: https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
	It is the same one that was given for lab11
 -->
<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
	header("location: index.php");
	exit;
}
 
require_once("../connect-db.php");
 
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] === "POST"){
 
	// Check if username is empty
	if(empty(trim($_POST["username"]))){
		$username_err = "Please enter username.";
	} else{
		$username = trim($_POST["username"]);
	}
	
	// Check if password is empty
	if(empty(trim($_POST["password"]))){
		$password_err = "Please enter your password.";
	} else{
		$password = trim($_POST["password"]);
	}
	
	// Validate credentials
	if(empty($username_err) && empty($password_err)){
		$sql = "SELECT username, password FROM credentials WHERE username = ?";
		
		if($stmt = mysqli_prepare($connection, $sql)){
			mysqli_stmt_bind_param($stmt, "s", $param_username);
			
			$param_username = $username;
			
			if(mysqli_stmt_execute($stmt)){
				mysqli_stmt_store_result($stmt);
				
				// Check if username exists, if yes then verify password
				if(mysqli_stmt_num_rows($stmt) == 1){                    
					mysqli_stmt_bind_result($stmt, $username, $hashed_password);
					if(mysqli_stmt_fetch($stmt)){
						if(password_verify($password, $hashed_password)){
							// Password is correct, so start a new session
							session_start();
							
							// Store data in session variables
							$_SESSION["loggedin"] = true;
							$_SESSION["username"] = $username;                            
							
							header("location: index.php");
						} else{
							$password_err = "The password you entered was not valid.";
						}
					}
				} else{
					$username_err = "No account found with that username.";
				}
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}
		}
		
		mysqli_stmt_close($stmt);
	}
	
	mysqli_close($connection);
}
?>
 
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
</head>
<body>
	<div>
		<header>
			<section>
				<h1>Cupcakes</h1>
			</section>
		</header>
		<h2>Login</h2>
		<div>Please fill in your credentials to login.</div>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<div>
				<label for="username">Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>">
				<span><?php echo $username_err; ?></span>
			</div>    
			<div>
				<label for="password">Password</label>
				<input type="password" name="password">
				<span><?php echo $password_err; ?></span>
			</div>
			<div>
				<input type="submit" value="Login">
			</div>
			<div>Don't have an account? <a href="../register.php">Register here</a>.</div>
		</form>
	</div>    
</body>
</html>