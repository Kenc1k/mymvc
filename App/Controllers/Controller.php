<?php

namespace App\Controllers;

class Controller{

    public function index() {
        
        return view("auth/login","Login Page");
    }

    public function register()
    {
        return view("auth/register" ,"Registiration Page" );
    }
}

?>