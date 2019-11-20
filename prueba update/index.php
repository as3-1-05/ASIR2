<html>
<head>
<title> Update Record In MySQL Database using PHP </title>
<head>
<body>

<?php   
    //Connect with MYSQL
    $con = mysqli_connect ('127.0.0.1', 'root', '');
    //Select Database
    mysqli_select_db($con,'joncrud');

    //Select Query
    $sql = "SELECT * FROM empleados";

    //Execute the query
    $records = mysqli_query($con,$sql);

?>
<table>
    <tr>
        <th>nombre</th>
        <th>apellido</th>
        <th>img</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($records))
    {
            echo "<tr><form action="update.php" method=post>";
            echo "<td><input type=text name=pnombre value='".$row['nombre']
            echo "<td><input type=text name=apellido value='".$row['apellido']
            echo "<td><input type=text name=img value='".$row['img']
            echo "<td><input type=submit>";
            echo "</form></tr>";

</body>
</html>
