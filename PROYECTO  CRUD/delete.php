<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joncrud";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//
$id = $_POST["id"];
$sql = "DELETE FROM empleados WHERE id=$id";

$result = $conn->query($sql);
header("Location: delete_form.php");