<?php namespace App\Models;

use CodeIgniter\Model;

class KameraModel extends Model
{

    protected $table = 'kamera';
    protected $primaryKey = 'id_kamera';
    protected $useTimestamps = true;
    protected $allowedFields = ['brand',
                                'type',
                                'slug',
                                'release_date',
                                'price',
                                'image',
                                'description',
                                'max_resolution',
                                'pixels',
                                'sensor_size',
                                'iso',
                                'lens',
                                'focus',
                                'screen',
                                'shutter',
                                'weight',
                                'dimension'];

    public function getKamera($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getKameraById($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kamera');
        $builder->select('id_kamera, brand, type, iso, pixels, sensor_size, focus, shutter, price');
        $builder->where('id_kamera', $id);
        $query = $builder->get()->getRowArray();

        return $query;
    }
}