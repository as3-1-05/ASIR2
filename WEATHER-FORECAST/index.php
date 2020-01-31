<?php

    $coordinates = '34.5794,-118.1165';

    $api_url = 'https://api.darksky.net/forecast/e41d8193b1312dc0eb8f4916dcfe5e1a/34.5794,-118.1165'.$coordinates>

    $forecast = json_decode(file_get_contents($api_url));

    echo '<pre>';
    print_r($forecast);
    echo '</pre>';

    // Datuak
    $temperature_current = $forecast->currently->temperature;
    $summary_current = $forecast->currently->summary;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Eguraldia</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <main class="container text-center">
            <h1 class="display-1">Forecast</h1>
                <div class="card p-4" style="margin: 0 auto; max-width: 320px;">
                    <h2>Eguraldia</h2>
                    <h3 class="display-2"><?php echo $temperature_current; ?>&deg;</h3>
                </div>
        </main>
    </body>
</html>