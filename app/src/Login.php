<?php

namespace app\src;

use app\models\Model;
use app\src\Password;
use app\models\admin\UsersModel;

class Login{


    private $UserMD;

    public function __construct()
    {
    
        $this->UserMD = new UsersModel;
    }


    public function login($data){

        $Config = (object) Load::file('/config.php')['Login']['admin'];
        
        /* Localizando os Dados do Usuario para Logar. */
        $user = $this->UserMD->findBy('u_login', $data->user_name);


        /* Setando o Codigo do Client DataBase. */
        $DBClient = (object)Load::file('/config.php')['DBClient'];
        
        $DBClient->DBName           = 'db_simple_io_client_id_' . $user->u_company_id;
        $DBClient->userLanguage     = $user->u_language_id;
        $DBClient->userEmpID        = $user->u_company_id;
      
        
        if(!$user){

            return false;
        }

        /* Comparando as senhas.*/
        if(Password::verify($data->user_password, $user->u_password)){
            
            /* Adicionando a Sessao*/
            $_SESSION[$Config->idLoggedIn]      = $user->u_id;
            $_SESSION[$Config->loggedIn]        = true;
            $_SESSION[$Config->userLevel]       = $user->u_level_id;

            $_SESSION['DBName']                 = 'db_simple_io_client_id_' . $user->u_company_id;


            return true;
        }        
    
        return false;
    }
}