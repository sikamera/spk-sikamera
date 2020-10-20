<?php namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table = 'criteria';
    protected $primaryKey = 'id_criteria';

    public function getKriteria()
    {
        return $this->findAll();
    }
}