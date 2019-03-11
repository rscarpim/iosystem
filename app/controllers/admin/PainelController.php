<?php

namespace app\controllers\admin;

use app\controllers\Controller;
use app\controllers\admin\CompanyController;



class PainelController extends Controller{

    private $Company;

    public function __construct()
    {

        $this->Company = new CompanyController;
    }


    public function index(){
      

        $this->view('admin.painel',[
            'Title' => 'Administrative Panel'
        ]);
    }
    
}