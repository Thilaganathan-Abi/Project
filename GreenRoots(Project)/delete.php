<?php
$conn = mysqli_connect("127.0.0.1:3306", "root", "mariadb", "tree");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $conn->query("DELETE FROM users WHERE id=$id");
}
header("Location: GreenRoots.php");
?>
