
<?php
//login page
require_once 'conf.php';
require_once 'loginfun.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//call the function
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	//mysql_escape_string(unescaped_string)
	$message = Authentication($conn,$username,$password);
} 
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label>UserName:</label><input type="text" name="username"></br>
	<label>Password:</label><input type="password" name="password"><br>
	<input type="submit" value="Login">
	<?php
		//display error message
		if (isset($message)) {
			echo $message;
		}
	?>
</form>
</body>
</html>
