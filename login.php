<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST["username"];
$password = $_POST["password"];

// Perform authentication logic here
// Compare the entered username and password with the stored credentials
// You can use a database or other authentication methods

if ($username === "admin" && $password === "password123") {
// Authentication successful, redirect to the desired page
header("Location: welcome.php");
exit();
} else {
// Authentication failed, display an error message
echo "Invalid username or password";
}
}
?>