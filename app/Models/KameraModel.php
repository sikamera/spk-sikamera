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

}