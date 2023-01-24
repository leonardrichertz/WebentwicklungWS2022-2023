<?php

namespace App\Controllers;

use App\Models\PersonenModel;

class Login extends BaseController
{

    public function __construct()
    {
        $this->PersonenModel = new PersonenModel();
    }

    public function index()
    {
        if (isset($_POST['email']) and isset($_POST['passwort']) and $this->validation->run($_POST, 'loginvalidieren')) {
            $passwort = $this->PersonenModel->login()['passwort'];
            $id = $this->PersonenModel->login()['id'];

            if (password_verify($_POST['passwort'], $passwort)) {
                session()->set('loggedin', true);
                session()->set('id', $id);
                //$this->session()->set('loggedin', true);
                //var_dump(session()->get('loggedin'));
                return redirect()->to(base_url('Projekte'));
            }
        } else{
            $data['login'] = $_POST;
            $data['error'] = $this->validation->getErrors();
            $data['title'] = 'Login';
        }
        $data['title'] = 'Login';
        echo view('templates/ueberschrift.php', $data);
        echo view('pages/Login.php', $data);
    }


    public function logout()
    {
        //destroys the session
        session()->destroy();
        return redirect()->to(base_url());
    }

    public function register()
    {
        if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['passwort']) && ($_POST['passwort'] == $_POST['passwort-bestätigt'])) {
            $this->PersonenModel->createPerson();
            return redirect()->to(base_url() . '/Login');
        }

        $data = ['title' => 'Registrierung'];
        echo view('templates/ueberschrift.php', $data);
        echo view('pages/Registrierung.php');
    }
}