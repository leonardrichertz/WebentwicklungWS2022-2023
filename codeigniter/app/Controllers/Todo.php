<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Todo extends BaseController
{
    public function getIndex(){
        $data = [ 'title' => 'ToDo'];
        echo view('templates/ueberschrift.php', $data);
        echo view('pages/index.php');
    }
}