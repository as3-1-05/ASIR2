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
    
</body>
</html>