<?php
$conn = mysqli_connect("localhost", "root", "", "mydb");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $number = $_POST['number'];

    $sql = "INSERT INTO users (name, email, age, number) VALUES ('$name', '$email', $age, '$number')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
header("Location: GreenRoots.php");
?>