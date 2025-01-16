<?php
	Define('SERVER','127.0.0.1:3306');
	Define('USER','root');
	Define('PASSWORD','mariadb');
	Define('DB','mydb');

	$conn = mysqli_connect(SERVER,USER,PASSWORD,DB);

	if (!$conn) {
		die("Mysql Connection failed".mysqli_connect_error());
	} 
?>