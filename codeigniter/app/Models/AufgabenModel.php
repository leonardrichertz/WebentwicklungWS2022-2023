<?php

namespace App\Models;

use CodeIgniter\Model;
/*
class AufgabenModel extends Model
{

    public function getData( $id = NULL){
        $this->aufgaben=$this->db->table('aufgaben');
        $this->aufgaben->select('aufgaben.id as id, aufgaben.name As name, aufgaben.beschreibung As beschreibung, aufgaben.erstellungsdatum as erstellungsdatum, aufgaben.faelligkeitsdatum as fälligkeitsdatum , reiter.name As reiter, reiter.id as reiterid, group_concat("<li>", mitglieder.username, "</li>" SEPARATOR "") As zustaendig') ;
        $this->aufgaben->join('reiter', 'aufgaben.reiterid=reiter.id');
        $this->aufgaben->join('mitglieder_aufgaben', 'mitglieder_aufgaben.aufgabenid=aufgaben.id', 'left');
        $this->aufgaben->join('mitglieder', 'mitglieder_aufgaben.mitgliederid=mitglieder.id', 'left');


        if ($id!=NULL){
            $this->aufgaben->where('aufgaben.id',$id);
            $result= $this->aufgaben->get();
            return $result->getRowArray();
        }
        $this->aufgaben->orderBy('aufgaben.id');
        $this->aufgaben->groupBy('aufgaben.name');
        $result= $this->aufgaben->get();
        return $result->getResultArray();

    }

    public function getAufgabenMitglieder($id=NULL){
        $this->aufgabenmitglieder=$this->db->table('mitglieder_aufgaben');
        $this->aufgabenmitglieder->select('mitgliederid');
        $this->aufgabenmitglieder->where('aufgabenid', $id);
        $result = $this -> aufgabenmitglieder->get();
        return $result->getResultArray();
    }

    public function updateAufgabe() {

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.id', $_POST['id']);
        if (isset($_POST['reiter'])){
            $this->aufgaben->update(array('name' => $_POST['name'],
                'beschreibung' => $_POST['beschreibung'],
                'erstellungsdatum'=> $_POST['erstellungsdatum'],
                'fälligkeitsdatum'=>$_POST['fälligkeitsdatum'],
                'ersteller'=> $_SESSION ['id'],
                'reiter' => $_POST['reiter']));
        } else{
            $this->aufgaben->update(array('name' => $_POST['name'],
                'beschreibung' => $_POST['beschreibung'],
                'erstellungsdatum'=> $_POST['erstellungsdatum'],
                'fälligkeitsdatum'=>$_POST['fälligkeitsdatum'],
                'ersteller'=> $_SESSION ['id'],
            ));
        }
        if (isset($_POST['mitgliederids'])){
            $this->aufgabenmitglieder=$this->db->table('mitglieder_aufgaben');
            foreach ($_POST['mitgliederids'] as $mitgliederid) {
                $this->aufgabenmitglieder->insert(array('aufgabeid' => $_POST['id'],
                    'mitgliedid' => $mitgliederid));
            }

        }
    }

    public function getAufgaben($aufgaben_id = NULL){
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('*');

        IF ($aufgaben_id != NULL)
            $this->aufgaben->where('aufgaben.id', $aufgaben_id);

        $this->aufgaben->orderBy('name');
        $result = $this->aufgaben->get();

        if ($aufgaben_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function getReiter(){
        $this->reiter=$this->db->table('reiter');
        $this->reiter->select('*');
        $result = $this -> reiter->get();
        return $result->getResultArray();
    }

    public function getMitglieder(){
        $this->mitglieder=$this->db->table('mitglieder');
        $this->mitglieder->select('*');
        $result = $this -> mitglieder->get();
        return $result->getResultArray();
    }

    public function createAufgabe() {

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->insert(array('name' => $_POST['name'],
            'beschreibung' => $_POST['beschreibung'],
            'erstellungsdatum' => $_POST['erstellungsdatum'],
            'faelligkeitsdatum' => $_POST['faelligkeitsdatum'],
            'ersteller'=> $_SESSION['id'],
            'reiterid'=> $_POST['reiter']));

        $currentid = $this->db->insertID();
        $this->aufgabenmitglieder = $this->db->table('mitglieder_aufgaben');
        foreach ($_POST['mitgliederids'] as $item){
            $this->aufgabenmitglieder->insert(array('aufgabenid'=> $currentid,
        'mitgliederid'=>$item));
        }
    }


    public function deleteAufgabe() {
        $this->aufgabenmitglieder = $this->db->table('mitglieder_aufgaben');
        $this->aufgabenmitglieder->where('aufgabenid', $_POST['id']);
        $this->aufgabenmitglieder->delete();

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.id', $_POST['id']);
        $this->aufgaben->delete();
    }
}*/
class AufgabenModel extends Model
{

    public function getData( $id = NULL){
        $this->aufgaben=$this->db->table('aufgaben');
        $this->aufgaben->select('aufgaben.id as id, aufgaben.name As name, aufgaben.beschreibung As beschreibung, aufgaben.erstellungsdatum as erstellungsdatum, aufgaben.faelligkeitsdatum as fälligkeitsdatum , reiter.name As reiter, reiter.id as reiterid, group_concat("<li>", mitglieder.username, "</li>" SEPARATOR "") As zuständig') ;
        $this->aufgaben->join('reiter', 'aufgaben.reiterid=reiter.id');
        $this->aufgaben->join('mitglieder_aufgaben', 'mitglieder_aufgaben.aufgabenid=aufgaben.id', 'left');
        $this->aufgaben->join('mitglieder', 'mitglieder_aufgaben.mitgliederid=mitglieder.id', 'left');


        if ($id!=NULL){
            $this->aufgaben->where('aufgaben.id',$id);
            $result= $this->aufgaben->get();
            return $result->getRowArray();
        }
        $this->aufgaben->orderBy('aufgaben.id');
        $this->aufgaben->groupBy('aufgaben.name');
        $result= $this->aufgaben->get();
        return $result->getResultArray();

    }
    public function getAufgaben($aufgaben_id = NULL){
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('*');

        IF ($aufgaben_id != NULL)
            $this->aufgaben->where('aufgaben.id', $aufgaben_id);

        $this->aufgaben->orderBy('name');
        $result = $this->aufgaben->get();

        if ($aufgaben_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function getReiter(){
        $this->reiter=$this->db->table('reiter');
        $this->reiter->select('*');
        $result = $this->reiter->get();
        return $result->getResultArray();
    }

    public function getMitglieder(){
        $this->mitglieder=$this->db->table('mitglieder');
        $this->mitglieder->select('*');
        $result = $this->mitglieder->get();
        return $result->getResultArray();
    }

    public function getAufgabenMitglieder($id=NULL){
        $this->aufgabenmitglieder=$this->db->table('mitglieder_aufgaben');
        $this->aufgabenmitglieder->select('mitgliederid');
        $this->aufgabenmitglieder->where('aufgabenid', $id);
        $result = $this->aufgabenmitglieder->get();
        return $result->getResultArray();
    }

    public function createAufgabe() {
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->insert(array('name' => $_POST['name'],
            'beschreibung' => $_POST['beschreibung'],
            'erstellungsdatum'=> $_POST['erstellungsdatum'],
            'faelligkeitsdatum'=>$_POST['fälligkeitsdatum'],
            'ersteller'=> $_SESSION ['id'],
            'reiterid' => $_POST['reiter'],
        ));
        $currentid=$this->db->insertID();
        $this->aufgabenmitglieder=$this->db->table('mitglieder_aufgaben');
        foreach ($_POST['mitgliederids'] as $mitgliederid){
            $this->aufgabenmitglieder->insert(array('aufgabenid'=> $currentid,
                'mitgliederid'=> $mitgliederid));
        }
    }

    public function updateAufgabe() {

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.id', $_POST['id']);
        if (isset($_POST['reiter'])){
            $this->aufgaben->update(array('name' => $_POST['name'],
                'beschreibung' => $_POST['beschreibung'],
                'erstellungsdatum'=> $_POST['erstellungsdatum'],
                'faelligkeitsdatum'=>$_POST['fälligkeitsdatum'],
                'ersteller'=> $_SESSION ['id'],
                'reiterid' => $_POST['reiter']));
        } else{
            $this->aufgaben->update(array('name' => $_POST['name'],
                'beschreibung' => $_POST['beschreibung'],
                'erstellungsdatum'=> $_POST['erstellungsdatum'],
                'faelligkeitsdatum'=>$_POST['fälligkeitsdatum'],
                'ersteller'=> $_SESSION ['id'],
            ));
        }
        if (isset($_POST['mitgliederids'])){
            $this->aufgabenmitglieder=$this->db->table('mitglieder_aufgaben');
            foreach ($_POST['mitgliederids'] as $mitgliederid) {
                $this->aufgabenmitglieder->insert(array('aufgabenid' => $_POST['id'],
                    'mitgliederid' => $mitgliederid));
            }

        }
    }

    public function deleteAufgabe() {

        $this->aufgabenmitglieder= $this->db->table('mitglieder_aufgaben');
        $this->aufgabenmitglieder->where('aufgabenid', $_POST['id']);
        $this->aufgabenmitglieder->delete();

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.id', $_POST['id']);
        $this->aufgaben->delete();
    }

}