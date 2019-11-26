<?php session_start(); ?>
<html>
<head>
    <title>Homepage</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
 
<body>
    <div id="header">
        Ongi etorri!
    </div>
    <?php
    if(isset($_SESSION['valid'])) {            
        include("connection.php");                    
        $result = mysqli_query($mysqli, "SELECT * FROM login");
    ?>                
        Hola <?php echo $_SESSION['name'] ?> ! <a href='index.php'>Irten</a><br/>
        <br/>
        <a href='view.php'>Ikusi produktuak</a>
        <br/><br/>
    <?php    
    } else {
        echo "Kontua sortu behar duzu produktuak ikusteko.<br/><br/>";
        echo "<a href='login.php'>Sartu</a> | <a href='register.php'>Erregistratu</a>";
    }
    ?>
    
    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "test2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM products";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>qty</th>";
                echo "<th>price</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['qty'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

</body>
</html>