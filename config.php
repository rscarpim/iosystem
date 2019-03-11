<?php

return [

    'DataBase'     =>[
        
        'DBHost'        => 'localhost',
        'DBName'        => 'db_simple_io',
        'DBCharset'     => 'utf8',
        'DBUserName'    => 'root',
        'DBPassword'    => '',
    ],

    'DBClient'  => [

        'DBHost'        => 'localhost',
        'DBName'        => '',
        'DBCharset'     => 'utf8',
        'DBUserName'    => 'root',
        'DBPassword'    => '',
        'userEmpID'     => '',
        'userLanguage'  => '',               
    ],

    'Login'     =>[

        'admin' =>[

            'loggedIn'      => 'admin_login',
            'redirect'      => '/login',
            'idLoggedIn'    => 'id_admin',
            'userLevel'     => 'userLevel',
        ],
        'user'  =>[],
    ],

    'activeUser'    => [

        'userEmpID'     => '',
        'userLanguage'  => '',
    ]
];