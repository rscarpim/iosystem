<?php

namespace app\src;

use Whoops\Handler\PrettyPageHandler;
use Dopesong\Slim\Error\Whoops as WhoopsError;


class Whoops extends WhoopsError
{

    private function slim($app){

        $container = $app->getContainer();

        $container['phpErrorHandler'] = $container['errorHandler'] = function () {

            return $this;
        };        
    }


    private function php(){

        $this->pushHandler(new PrettyPageHandler);

        $this->register();
    }


    public function run($app){

        $this->php();

        $this->slim($app);
    }
}