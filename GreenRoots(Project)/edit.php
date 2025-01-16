<?php
$conn = mysqli_connect("127.0.0.1:3306", "root", "mariadb", "tree");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id=$id";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
<h2>Edit User</h2>
<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>

    <label>Age:</label><br>
    <input type="number" name="age" value="<?php echo $row['age']; ?>" required><br>

    <label>Phone Number:</label><br>
    <input type="text" name="number" value="<?php echo $row['number']; ?>" required><br><br>

    <input type="submit" value="Update">
</form>
</body>
</html>
