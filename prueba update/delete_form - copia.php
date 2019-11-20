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
$sql = "SELECT * FROM empleados";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br> nombre: " . $row["nombre"]. "<br> apellido:" . $row["apellido"]. "<br> img: " . $row["img"];
        ?>
        <form action="delete.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
            <input type="submit" value="Delete">
        </form>
        <hr/> 
        <?php
    }
} else {
    echo "0 results";
}

$conn->close();
