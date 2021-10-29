<?php
require("database_connect.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);


$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
	$response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
	$response = array("success" => false, "message" => "This email id is already registered with us!");
    echo json_encode($response);
    return;
}

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
$result = mysqli_query($conn, $sql);
if (!$result) {
	$response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}


$response = array("success" => true, "message" => "Your account has been created successfully!");
echo json_encode($response);
mysqli_close($conn);
