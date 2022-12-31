<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function index(){
        $data = [
            'title' => 'Login'
        ];
        echo view('templates/ueberschrift.php', $data);
        echo view('pages/Login.php');

    }
}