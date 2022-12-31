<?php

namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model
{
    public function getTodo($todo_id = null){
        $this->todo = $this->db->table('todo');
        $this->todo->select('*');

        IF ($todo_id != NULL)
            $this->personen->where('todo.id', $todo_id);

        $result = $this->personen->get();

        if ($todo_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }
}