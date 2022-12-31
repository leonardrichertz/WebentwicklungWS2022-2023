<?php

namespace App\Controllers;

class Personen extends BaseController
{
    public function getIndex()
    {

        $data['mitglieder'] = array(
            array(
                'Name'=> 'Max Mustermann', 'Email'=>'mustermann@muster.de'),
            array(
                'Name' => 'Petra Müller', 'Email' => 'petra@mueller.de')
        );
        $data ['title'] = 'Personen';
        echo view('templates/ueberschrift.php',$data);
        echo view('pages/Personen.php',$data);
    }
}