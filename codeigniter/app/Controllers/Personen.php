<?php

namespace App\Controllers;

use App\Models\PersonenModel;

class Personen extends BaseController
{
    public function __construct()
    {
        $this->PersonenModel = new PersonenModel();
    }

    public function index()
    {
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['passwort']))
        {
            $this->PersonenModel->createPerson();
        }
        $data['mitglieder'] = $this->PersonenModel->getPersonen();
        $data['mitglieder_in_projekt'] = $this->PersonenModel->getPersoneninProjekt();
        $data ['title'] = 'Personen';
        echo view('templates/ueberschrift.php',$data);
        echo view('pages/Personen.php',$data);
    }

    public function edit($id=0){
        $data['title'] = 'Personen bearbeiten';
        $id = $_POST['id'];
        if ($id>0) {
            $data['mitglied'] = $this->PersonenModel->getPersonen($id);
        }
        echo view( 'templates/ueberschrift.php', $data);
        echo view( 'pages/Personen_edit', $data);
    }

    public function loeschen($id=0){
        $data['title'] = 'Person löschen';
        $id = $_POST['id'];
            $data['mitglied'] = $this->PersonenModel->getPersonen($id);
            echo view('templates/ueberschrift.php', $data);
            echo view('pages/Personen_delete.php', $data);

        if (isset($_POST['btnAbbrechen'])){
            return redirect()->to(base_url('Personen'));
        }
    }

    public function submit_edit(){
        if (isset($_POST['btnSpeichern'])){
            if (isset($_POST['id'])&&$_POST['id'] != ''){
                $this->PersonenModel->updatePerson();
            }
            else{
                $this->PersonenModel->createPerson();
            }
            return redirect()->to(base_url('Personen'));
        }
        if (isset($_POST['btnLoeschen'])){
            $this->PersonenModel->deletePerson();
            return redirect()->to(base_url('Personen'));
        }
        if (isset($_POST['btnAbbrechen'])){
            return redirect()->to(base_url('Personen'));
        }
    }
}