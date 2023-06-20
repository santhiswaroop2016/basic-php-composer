<?php

require __DIR__ . '/vendor/autoload.php';
use Carbon\Carbon;


printf("Right now in sumeet is %s.\n", Carbon::now('US/Eastern')->format('Y-m-d g:i:s A'));

printf("Tomorrow in balakrishna will be %s.\n", Carbon::tomorrow('US/Eastern')->format('Y-m-d'));

printf("Right now in uoender is %s\n", Carbon::now('Europe/Paris'));
