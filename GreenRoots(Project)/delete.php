<?php
$conn = mysqli_connect("localhost", "root", "", "mydb");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $conn->query("DELETE FROM users WHERE id=$id");
}
header("Location: GreenRoots.php");
?>
