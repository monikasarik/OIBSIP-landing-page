<?php
$servername = "localhost";
$username = "root";
$password = "root@123";
$database = "ornament";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $message = $_POST["message"];

    // Insert data into database
    $sql = "INSERT INTO orders (name, email, phone, address, message) VALUES ('$name', '$email', '$phone', '$address', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your order, " . $name . "!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
