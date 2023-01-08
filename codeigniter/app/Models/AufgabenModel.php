<?php

namespace App\Models;

use CodeIgniter\Model;

class AufgabenModel extends Model
{
    public function getAufgaben($aufgaben_id = NULL){
        $this->aufgaben = $this->db->table('aufgaben');
        $this->personen->select('*');

        IF ($aufgaben_id != NULL)
            $this->aufgaben->where('aufgaben.id', $aufgaben_id);

        $this->aufgaben->orderBy('name');
        $result = $this->aufgaben->get();

        if ($aufgaben_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createAufgabe() {

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->insert(array('name' => $_POST['name'],
            'beschreibung' => $_POST['beschreibung'],
            'erstellungsdatum' => $_POST['erstellungsdatum'],
            'faelligkeitsdatum' => $_POST['faelligkeitsdatum']));
    }

    public function updateAufgabe() {

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.id', $_POST['id']);
        $this->aufgaben->update(array('name' => $_POST['name'],
            'beschreibung' => $_POST['beschreibung'],
            'erstellungsdatum' => $_POST['erstellungsdatum'],
            'faelligkeitsdatum' => $_POST['faelligkeitsdatum']));
    }

    public function deleteAufgabe() {
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.id', $_POST['id']);
        $this->aufgaben->delete();
    }
}