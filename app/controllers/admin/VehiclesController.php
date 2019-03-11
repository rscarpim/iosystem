<?php

namespace app\controllers\admin;

use app\controllers\Controller;


class VehiclesController extends Controller
{


    public function index(){

        $this->view('admin.vehicles-list', [
            'Title' => 'Inventory - Vehicle List'
        ]);        
    }
    
}
