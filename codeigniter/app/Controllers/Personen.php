<?php

namespace App\Controllers;

class Personen extends BaseController
{
    /*public array $data = array(
        array('name' => 'Max Mustermann', 'E-Mail' => 'mustermann@muster.de'),
        array('name' => 'Petra Müller', 'E-Mail' => 'petra@mueller.de'));*/

public array $data = array('name' => 'Max Mustermann', 'email'=>'mustermann@muster.de');

public array $data1 = [0 => array('name' => 'Max Mustermann', 'email'=>'mustermann@muster.de'),
    1=>array('name'=>'Petra Müller', 'email'=>'petra@mueller.de')];

    public function getIndex()
    {
        $data_title = [ 'title' => 'Personen'];
        echo view('templates/ueberschrift.php',$data_title);
        echo view('pages/Personen.php', $this->data);
    }
}