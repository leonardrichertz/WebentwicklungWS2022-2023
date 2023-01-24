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
        $data['title']= 'Reiter';
        echo view('templates/ueberschrift.php',$data);
        echo view('pages/Reiter.php', $data);
    }

    public function reiter_edit_delete(){
        if (isset($_POST['btnBearbeiten']))
        {
            $data['title'] = 'Reiter bearbeiten';
            $id = $_POST['id'];
            $data['reiter'] = $this->ReiterModel->getReiter();
            $data['aktueller_reiter'] = $this->ReiterModel->getReiter($id);

            echo view('templates/ueberschrift.php', $data);
            echo view( 'pages/Reiter', $data);
        }
        if (isset($_POST['btnLoeschen'])){
            $this->ReiterModel->deleteReiter();
            return redirect()->to(base_url('Reiter'));
        }

    }
   /* public function reiter_submit()
    {
        if (isset($_POST['btnSpeichern'])) {
            if (isset($_POST['name']) && isset($_POST['beschreibung']) && isset($_POST['aktueller_reiter'])) {
                    $this->ReiterModel->updateReiter();
                }
                else if (isset($_POST['name']) && isset($_POST['beschreibung']))
                {
                    $this->ReiterModel->createReiter();
                }
            }
            return redirect()->to(base_url('Reiter'));
    }*/

    public function reiter_submit(){
        if (isset($_POST['btnSpeichern'])){
            if (isset($_POST['id'])&&$_POST['id'] != ''){
                $this->ReiterModel->updateReiter();
            }
            else{
                $this->ReiterModel->createReiter();
            }
            return redirect()->to(base_url('Reiter'));

        }
        if (isset($_POST['btnBestaetigen'])){
            $this->ReiterModel->deleteReiter();
            return redirect()->to(base_url('Reiter'));
        }
        if (isset($_POST['btnReset'])){
            return redirect()->to(base_url('Reiter'));
        }
    }
}