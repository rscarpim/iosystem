<?php

use app\src\Flash;
use app\models\site\courses\CoursesListModel;
use app\models\site\courses\SubCategoryModel;





/* Funcao que Retorna a URL do Site. */
$FSiteURL = new \Twig_SimpleFunction('FSiteURL', function () {

    return 'http://' . $_SERVER['SERVER_NAME'] . ':8888';
});




/* Retorna Boolean se Usuario Esta ou nao Logado */
$LogdUser = new \Twig_SimpleFunction('LogdUser', function (){


    return false;
});


$FMessages = new \Twig_SimpleFunction('FMessages', function ($index) {


    return Flash::get($index);
});








return [

    $FSiteURL,
    $LogdUser,
    $FMessages
];