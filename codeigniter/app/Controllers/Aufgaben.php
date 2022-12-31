<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Aufgaben extends BaseController
{
    public function getIndex(){
        $data = [ 'title' => 'Aufgaben'];

        echo view('templates/ueberschrift.php', $data);
        echo view('pages/Aufgaben.php');

    }
}