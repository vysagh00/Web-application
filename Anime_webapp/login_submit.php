<?php
session_start();
require("database_connect.php");

$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}


$row_count = mysqli_num_rows($result);
if ($row_count == 0) {
    $response = array("success" => false, "message" => "Login failed! Invalid email or password.");
    echo json_encode($response);
    return;
}


$row = mysqli_fetch_assoc($result);
$_SESSION['id'] = $row['id'];
$_SESSION['name'] = $row['name'];
$_SESSION['email'] = $row['email'];

// header("location: Anime_dashboard.php");
// mysqli_close($conn);
$response = array("success" => true, "message" => "Login successful!");
echo json_encode($response);
mysqli_close($conn);