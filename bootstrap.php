<?php

session_start();

require "vendor/autoload.php";

use Slim\App;
use app\src\Whoops;
use app\src\Middlewares;

$config['displayErrorDetails'] = true;

$app        = new App(['settings' => $config]);

$whoops = new Whoops;

$whoops->run($app);


$middlewares = new Middlewares;