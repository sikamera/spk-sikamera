<?php namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table = 'criteria';
    protected $primaryKey = 'id_criteria';
    protected $allowedFields = ['weight', 'atribute'];

    public function getKriteria($id=false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_criteria'=>$id])->first();
       
    }
}