<?php namespace App\Models;

use CodeIgniter\Model;

class MatriksModel extends Model
{
    protected $table = 'matriks';
    protected $primaryKey = 'id_matriks';
    protected $allowedFields = ['id_alternative', 'id_criteria', 'nilai'];

    // protected $db;

    // public function __construct() {
    //     $this->db = $db = \Config\Database::connect();
    // }
    
    public function getMatriks()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('matriks');
        $builder->select('*');
        $builder->orderBy('id_alternative','id_kriteria');
        $query = $builder->get()->getRowArray();

        return $query;
    }

}