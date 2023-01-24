<?php

namespace App\Controllers;
use App\Models\AufgabenModel;
use App\Models\PersonenModel;
use App\Models\ReiterModel;
use CodeIgniter\Controller;
use function MongoDB\Driver\Monitoring\removeSubscriber;


class Aufgaben extends BaseController
{
    public function __construct()
    {
    $this->AufgabenModel = new AufgabenModel();
    }

    public function index(){
        if (isset($_POST['btnBearbeiten'])){
            $data['aufgabe']=$this->AufgabenModel->getData($_POST['id']);
            $data['aufgabenmitglieder']=$this->AufgabenModel->getAufgabenMitglieder($_POST['id']);
        }
        if (isset($_POST['btnLoeschen'])){
            $data['aufgabe']=$this->AufgabenModel->getData($_POST['id']);
            $data['title']='Aufgabe löschen?';
            echo view('templates/ueberschrift',$data);
            echo view('pages/Aufgaben_bestaetigen', $data);
            return;
        }
        $data['aufgaben']= $this->AufgabenModel->getData();
        $data['reiter'] =$this->AufgabenModel->getReiter();
        $data['mitglieder']= $this->AufgabenModel->getMitglieder();


        $data['title']='Aufgaben';
        echo view('templates/ueberschrift',$data);
        echo view('pages/Aufgaben', $data);
    }

    public function submit_edit(){
        if (isset($_POST['btnSpeichern'])){
            if (isset($_POST['id'])&&$_POST['id'] != ''){
                $this->AufgabenModel->updateAufgabe();
            }
            else{
                $this->AufgabenModel->createAufgabe();
            }
            return redirect()->to(base_url('Aufgaben'));

        }
        if (isset($_POST['btnBestaetigen'])){
            $this->AufgabenModel->deleteAufgabe();
            return redirect()->to(base_url('Aufgaben'));
        }
        if (isset($_POST['btnReset'])){
            return redirect()->to(base_url('Aufgaben'));
        }
    }
}