<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ReiterModel;

class Reiter extends BaseController
{


    public function __construct()
    {
        $this->ReiterModel = new ReiterModel();
    }

    public function index()
    {
        $data['reiter'] = $this->ReiterModel->getReiter();
        $data = [ 'title' => 'Reiter'];
        echo view('templates/ueberschrift.php',$data);
        echo view('pages/Reiter.php');
    }

}