<?php namespace App\Models;

use CodeIgniter\Model;

class PersonenModel extends Model {


    public function getPersonen($person_id = NULL) {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');

        IF ($person_id != NULL)
            $this->personen->where('mitglieder.id', $person_id);

        $this->personen->orderBy('username');
        $result = $this->personen->get();

        if ($person_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createPerson() {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->insert(array('username' => $_POST['username'],
            'email' => $_POST['email'],
            'passwort' => password_hash($_POST['passwort'], PASSWORD_DEFAULT)));
    }

    public function updatePerson() {

        $this->personen = $this->db->table('mitglieder');
        $this->personen->where('mitglieder.id', $_POST['id']);
        $this->personen->update(array('username' => $_POST['username'],
            'email' => $_POST['email'],
            'passwort' => password_hash($_POST['passwort'], PASSWORD_DEFAULT)));
    }

    public function deletePerson() {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->where('mitglieder.id', $_POST['id']);
        $this->personen->delete();
    }

    public function login(){
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');
        $this->personen->where('mitglieder.email', $_POST['email']);
        $result = $this->personen->get();

        return $result->getRowArray();
    }
}
