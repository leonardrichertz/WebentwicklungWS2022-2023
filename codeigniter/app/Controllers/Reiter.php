<?php

namespace App\Controllers;

class Reiter extends BaseController
{
    public function getIndex()
    {
        $data = [ 'title' => 'Reiter'];
        echo view('templates/ueberschrift.php',$data);
        echo view('pages/Reiter.php');
    }

}