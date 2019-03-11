<?php

require "../bootstrap.php";

/* Pagina inicial  */
$app->get('/', 'app\controllers\site\HomeController:index');

/* Login */
$app->get('/login',         'app\controllers\site\LoginController:index');
$app->post('/login/store',  'app\controllers\site\LoginController:store');


/* Agrupamento do Painel Administrativo. */
$app->group('/admin', function () use ($app){


    $app->get('/painel', 'app\controllers\admin\PainelController:index');

    $app->get('/profile', 'app\controllers\admin\ProfileController:index');



    $app->get('/vehicles-list', 'app\controllers\admin\VehiclesController:index');

    
})->add($middlewares->admin());

$app->run();