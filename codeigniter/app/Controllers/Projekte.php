<?php

namespace App\Controllers;

use App\Models\ProjekteModel;

class Projekte extends BaseController
{
    public function __construct()
    {
        $this->ProjekteModel = new ProjekteModel();
    }

    public function index()
    {
        $data['projekte'] = $this->ProjekteModel->getProjekt();
        $data = [ 'title' => 'Projekte'];
        echo view('templates/ueberschrift.php', $data);
        echo view('pages/Projekte.php');
    }


}