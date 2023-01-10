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
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['passwort'])){
            $this->PersonenModel->createPerson();
            }
        $data['mitglieder'] = $this->PersonenModel->getPersonen();
        $data ['title'] = 'Personen';
        echo view('templates/ueberschrift.php',$data);
        echo view('pages/Personen.php',$data);
    }

    public function ced_edit($id = 0, $todo = 0) {
        // Todo: 0 = create, 1 = Bearbeiten, 2 = löschen
        $data['todo'] = $todo;
        $data['title'] = 'Personen bearbeiten';
        // Person bearbeiten oder löschen
        if($id > 0 && ($todo == 1 || $todo == 2 ))
            $data['mitglieder'] = $this->PersonenModel->getpersonen($id);

        echo view( 'templates/ueberschrift.php', $data);
        echo view( 'pages/Personen_edit', $data);
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
        if ($id == session()->get('id')){
            $data['mitglied'] = $this->PersonenModel->getPersonen($id);
            echo view('templates/ueberschrift.php', $data);
            echo view('pages/Personen_delete.php', $data);
        }
        else
        {
            return redirect()->to('Personen');
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
    }
}