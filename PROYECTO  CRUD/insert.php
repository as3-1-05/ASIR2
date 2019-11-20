<?php

    $result = false;

    $dbhost = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'joncrud';

    if( $_SERVER['REQUEST_METHOD']=='POST' ){

        $conn = new mysqli ( $dbhost,$username, $password, $db );
        if( $conn ){

            $sql='insert into `empleados` ( `nombre`,`apellido`,`img` ) values (?,?,?);';
            $stmt=$conn->prepare( $sql );
            $stmt->bind_param('sss', $_POST['nombre'], $_POST['apellido'], $_POST['img'] );
            $result = $stmt->execute();

        }
        $conn->close();
    }

?>
<!doctype html>
<html>
    <head>
        <title>Simple Form submission example</title>
    </head>
    <body>
        <form method='post'>
            <input type='text' name='nombre' />
            <input type='text' name='apellido' />
            <input type='text' name='img' />

            <input type='submit' value='Submit' />

            <?php
                echo $result ? '<div>The database was updated</div>' : '';
            ?>
        </form>
    </body>
</html>