<?php

namespace App\Controllers;
use App\Models\AufgabenModel;
use CodeIgniter\Controller;


class Aufgaben extends BaseController
{
    public function __construct()
    {
    $this->AufgabenModel = new AufgabenModel();
    }

    public function index(){
        $data = [ 'title' => 'Aufgaben'];

        echo view('templates/ueberschrift.php', $data);
        echo view('pages/Aufgaben.php');

    }
}