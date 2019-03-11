<?php

namespace app\controllers\admin;

use app\controllers\Controller;

class ProfileController extends Controller{

    public function index()
    {

        $this->view('admin.profile', [
            'Title' => 'User Profile'
        ]);
    }

}