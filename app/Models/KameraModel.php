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
                                'min_iso',
                                'max_iso',
                                'lens',
                                'focus',
                                'screen',
                                'min_shutter',
                                'max_shutter',
                                'weight',
                                'dimension'];

    public function getKamera($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getKameraBy($value)
    {
        if ($value == 'nikon') {
            return $this->where(['brand' => $value])->first();
        }elseif ($value == 'canon') {
            return $this->where(['brand' => $value])->first();
        }elseif ($value == 'full frame') {
            return $this->where(['sensor_size' => $value])->first();
        } elseif ($value == 'crop frame') {
            return $this->where(['sensor_size' => $value])->first();
        }
    }
    

    public function getKameraById($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kamera');
        $builder->select('id_kamera, brand, type, min_iso, max_iso, pixels, sensor_size, focus, min_shutter, max_shutter, price');
        $builder->where('id_kamera', $id);
        $query = $builder->get()->getRowArray();

        return $query;
    }
}