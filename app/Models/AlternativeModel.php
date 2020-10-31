<?php namespace App\Models;

use CodeIgniter\Model;

class AlternativeModel extends Model
{
    protected $table = 'alternative';
    protected $primaryKey = 'id_alternative';
    protected $allowedFields = ['id_kamera', 
                                'kamera', 
                                'iso', 
                                'pixels', 
                                'sensor_size', 
                                'focus', 
                                'shutter', 
                                'price'];

    public function getAlternative()
    {
        return $this->findAll();
    }

    public function deleteAllData()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('alternative');
        return $builder->emptyTable('alternative');
    }
}