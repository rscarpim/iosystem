<?php

namespace app\controllers\site;


use app\src\Load;
use app\src\Login;
use app\src\Password;
use app\src\Validate;
use app\controllers\Controller;
use app\models\admin\UsersModel;

class LoginController extends Controller{ 
    
    private $Config;
    
    public function __construct()
    {
        
        $this->Config = (object)Load::file('/config.php')['Login']['admin'];
    }



    public function index(){

        $this->view('site.login', []);
    }

    
    
    
    public function store(){
       
        $validate = new Validate;


        $data = $validate->validate([
            'user_name'     => 'required',
            'user_password' => 'required',
        ]);

        if ($validate->hasErrors()) {
            return back();
        }
        
        $Login = new login;

        $Logged = $Login->login($data);   
        
        if(!$Logged){

            Flash('ErrorMsg', Error('Invalid user name or Password'));

            return back();
        }        

        redirect('/admin/painel');
    }    
}