<?php

require 'vendor/autoload.php';

use DmitryIvanov\DarkSkyApi\DarkSkyApi;
$forecast = (new DarkSkyApi('e41d8193b1312dc0eb8f4916dcfe5e1a'))
    ->location(46.482, 30.723)
    ->units('si')
    ->language('es')
    ->forecast('currently');
echo $forecast->currently()->summary();