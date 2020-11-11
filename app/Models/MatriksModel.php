<?php namespace App\Models;

use CodeIgniter\Model;

class MatriksModel extends Model
{
    protected $table = 'matriks';
    protected $primaryKey = 'id_matriks';
    protected $allowedFields = ['id_alternative', 'id_criteria', 'nilai'];
    
    public function getMatriks()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('matriks');
        $builder->select('*');
        $builder->orderBy('id_alternative, id_criteria');
        $query = $builder->get()->getResultArray();

        return $query;
    }

}