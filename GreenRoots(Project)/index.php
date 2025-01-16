<?php
session_start();
require_once 'conf.php';
//require_once 'loginpage.php'
//require_once 'GreenRoots.php';
if (isset($_SESSION['loginuser'])) {
	//echo "<h3>Hi user ".$_SESSION['loginuser']."</h3>";
	//echo "<a style='float:right' href='logout.php'>Logout</a>";
	echo "<a style='float:right; color: #fcff45; font-size: 16px;' href='logout.php'>Logout</a>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//include 'loginfun.php';
include 'GreenRoots.php';
}
else{
	header('location:loginpage.php');
}
?>

</body>
</html>