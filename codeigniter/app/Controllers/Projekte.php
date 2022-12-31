<?php

namespace App\Controllers;

class Projekte extends BaseController
{
    public function getIndex()
    {
        $data = [ 'title' => 'Projekte'];
        echo view('templates/ueberschrift.php', $data);
        echo view('pages/Projekte.php');
    }


}