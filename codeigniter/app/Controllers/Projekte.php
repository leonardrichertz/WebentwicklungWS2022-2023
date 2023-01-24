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
        if (isset($_POST['projektname']) && isset($_POST['projektbeschreibung'])){
            $this->ProjekteModel->createProjekt();
        }
        $data['projekte'] = $this->ProjekteModel->getProjekte();
        $data['title'] = 'Projekte';
        echo view('templates/ueberschrift.php', $data);
        echo view('pages/Projekte.php', $data);
    }

    public function projekte_edit_auswahl_delete(){
        if (isset($_POST['btnBearbeiten'])){
            $data['title'] = 'Projekt bearbeiten';
            $id = $_POST['projektauswahl'];
            $data['projekte'] = $this->ProjekteModel->getProjekte();
            $data['projekt'] = $this->ProjekteModel->getProjekte($id);
            //Sollte eigentlich in der View erneut die Daten des Projektes übergeben und diese dann unter in die Felder laden
            echo view( 'templates/ueberschrift.php', $data);
            echo view( 'pages/Projekte', $data);
        }
        if (isset($_POST['btnAuswaehlen'])){
            $data['title'] = 'Projekte ';
            $id = $_POST['projektauswahl'];
            $data['projekte'] = $this->ProjekteModel->getProjekte();
            $data['projekt'] = $this->ProjekteModel->getProjekte($id);
            session()->set('projekt',$id);
            session()->set('projektname', $data['projekt']['name']);

            echo view('templates/ueberschrift.php', $data);
            echo view( 'pages/Projekte', $data);
        }
        if (isset($_POST['btnLoeschen'])){
            $data['title'] = 'Projekte';
            //$id = $_POST['projektauswahl'];
            $this->ProjekteModel->deleteProjekt();
            session()->set('projekt', NULL);
            return redirect()->to(base_url('Projekte'));
        }
    }

    public function projekte_submit(){
        if (isset($_POST['projektname']) && isset($_POST['projektbeschreibung'])){
            if (isset($_POST['projekt'])){
                $this->ProjekteModel->updateProjekt();
            }
            else{
                $this->ProjekteModel->createProjekt();
            }
        }
       return redirect()->to(base_url('Projekte'));
    }

}