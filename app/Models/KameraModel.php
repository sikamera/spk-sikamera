<?php namespace App\Models;

use CodeIgniter\Model;

class KameraModel extends Model
{
    protected $table = 'kamera';
    protected $primaryKey = 'id_kamera';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_kamera',
                                'brand',
                                 'type',
                                 'slug',
                                 'release_date',
                                 'price',
                                 'sensor_type',
                                 'resolution',
                                 'iso',
                                 'shutter',
                                 'lcd',
                                 'video_resolution',
                                 'flash',
                                 'bluetooth',
                                 'wifi',
                                 'nfc',
                                 'weight',
                                 'long',
                                 'width',
                                 'height',
                                 'image',
                                 'description'];

}