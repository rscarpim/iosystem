<?php

namespace app\controllers\admin;

use app\src\Load;
use app\controllers\Controller;
use app\models\admin\CompanyModel;


class CompanyController extends Controller{

    private $Model;


    public function __construct()
    {
        
        $this->Model = new CompanyModel;
    }

    /* Bring all Data from table Company*/
    public function FGetCompanyData(){

        return print_r(json_encode($this->Model->select()->first()));
    }
}
