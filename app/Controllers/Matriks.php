<?php namespace App\Controllers;

use App\Models\AlternativeModel;
use App\Models\KriteriaModel;
use App\Models\MatriksModel;

class Matriks extends BaseController
{
    
    protected $alternatifModel;
    protected $criteriaModel;
    protected $matriksModel;

    public function __construct() {
        $this->alternatifModel = new AlternativeModel();
        $this->criteriaModel = new KriteriaModel();
        $this->matriksModel = new MatriksModel();
    }
    

    public function index()
    {
        $nilai = $this->matriksModel->getMatriks();
        $kriteria = $this->criteriaModel->getKriteria();
        $alternatif = $this->alternatifModel->getAlternative();

        $criteria = array();
        foreach ($kriteria as $row) {
            $criteria[$row['id_criteria']]=array($row['code'],$row['information'],$row['atribute'], $row['weight']);
        }

        $alt = array();
        foreach ($alternatif as $row) {
            $alt[$row['id_alternative']] = array(
                $row['kamera'],
                $row['iso'],
                $row['pixels'],
                $row['sensor_size'],
                $row['focus'],
                $row['shutter'],
                $row['price']
            );
        }

        $sample =array();
        foreach ($nilai as $row) {
            $sample[$row['id_alternative']][$row['id_criteria']] = $row['nilai'];
        }

        $normal =  $sample;
        foreach ($criteria as $id_criteria => $k) {
            $pembagi =  0;
            foreach ($alt as $id_alternative => $a) {
                $pembagi += pow($sample[$id_alternative][$id_criteria],2);
            }
            foreach ($alt as $id_alternative => $a) {
                $normal[$id_alternative][$id_criteria]/=sqrt($pembagi);
            }
        }

        $optimasi = array();
        foreach ($alt as $id_alternative => $a) {
            $optimasi[$id_alternative] = 0;
            foreach ($criteria as $id_criteria => $k) {
                $optimasi[$id_alternative] += $normal[$id_alternative][$id_criteria] * ($k[2]=='Benefit'? 1 : -1) * $k[3];
            }
     
        }

        $data = [
            'judul' => 'Proses MOORA',
            'matriks' => $sample,
            'kriteria'=> $criteria,
            'normalisasi' => $normal,
            'optimasi'=> $optimasi,
            'alternative'=> $alt
        ];

        return view('admin/pages/proses-moora', $data);
    }



}
