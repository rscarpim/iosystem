<?php

namespace app\controllers\site;

use app\controllers\Controller;


class HomeController extends Controller{

    

    public function index(){        

        $this->view('site.Home',[
            'Title' => 'IO - Welcome.'
        ]);
    }
}