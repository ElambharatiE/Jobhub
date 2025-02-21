<?php
header("Content-Type: application/json");

$username = $_POST['username'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost", "sql_noorlibas_sh", "akdevpro@786", "sql_noorlibas_sh");
$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    echo json_encode(['status' => 'success', 'username' => $username]);
} else {
    echo json_encode(['status' => 'error', 'username' => $username]);
}
