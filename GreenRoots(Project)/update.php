<?php
$conn = mysqli_connect("localhost", "root", "", "mydb");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $number = $_POST['number'];

    $sql = "UPDATE users SET name='$name', email='$email', age=$age, number='$number' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
header("Location: GreenRoots.php");
?>
