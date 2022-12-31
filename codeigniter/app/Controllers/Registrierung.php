<?php

namespace App\Controllers;

class Registrierung extends BaseController
{
    public function getIndex($name = "Registrierung"){
        $data = [ 'title' => 'Registrierung'];
        echo view('templates/ueberschrift.php', $data);
        echo view('pages/Registrierung.php');
    }

}