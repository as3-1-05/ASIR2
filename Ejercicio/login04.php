<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$user =  $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE user = '$user';";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($user == $row["user"]){
        if (password_verify($password, $row["password"])) {
            echo "OK";
        } else{
            echo "KO";
        }
    } else {
        echo "KO";
    }
} else {
    echo "KO";
}
$conn->close();