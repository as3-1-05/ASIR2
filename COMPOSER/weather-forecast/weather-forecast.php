<?php

require 'vendor/autoload.php';

use DarkSkyApi;
$forecast = DarkSkyApi::location(46.482, 30.723)
    ->units('si')
    ->language('es')
    ->forecast('currently');
echo $forecast->currently()->summary();
