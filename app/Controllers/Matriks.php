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

        // return dd($optimasi);

        return view('admin/pages/proses-moora', $data);
    }

    public function penilaian() {
        $alternative = $this->alternatifModel->getAlternative();
        $criteria = $this->criteriaModel->getKriteria();
        $id_criteria = [];
        foreach ($criteria as $crit) {
            $id_criteria[] = $crit['id_criteria'];
        }
        foreach ($alternative as $alt) {

            if ($alt['iso'] <= 6400) {
                $nilaiIso = 1;
            }elseif ($alt['iso']<= 12800) {
                $nilaiIso = 2;
            }elseif ($alt['iso']<= 25600) {
                $nilaiIso = 3;
            }elseif ($alt['iso']<= 51200) {
                $nilaiIso = 4;
            }elseif ($alt['iso']>= 102400) {
                $nilaiIso = 5;
            }else {
                $nilaiIso = 0;
            }

            if ($alt['pixels'] <= 12) {
                $nilaiPixels = 1;
            }elseif ($alt['pixels']<=16) {
                $nilaiPixels = 2;
            }elseif ($alt['pixels']<=24) {
                $nilaiPixels = 3;
            }elseif ($alt['pixels']<=36) {
                $nilaiPixels = 4;
            }elseif ($alt['pixels']> 36) {
                $nilaiPixels = 5;
            }else {
                $nilaiPixels = 0;
            }

            if ($alt['sensor_size']=="full frame") {
                $nilaiSensor = 5;
            }else {
                $nilaiSensor = 3;
            }

            if ($alt['focus'] < 5) {
                $nilaiFocus = 1;
            }elseif ($alt['focus']< 19) {
                $nilaiFocus = 2;
            }elseif ($alt['focus']< 35) {
                $nilaiFocus = 3;
            }elseif ($alt['focus']< 75) {
                $nilaiFocus = 4;
            }elseif ($alt['focus']>= 75) {
                $nilaiFocus = 5;
            }else {
                $nilaiFocus = 0;
            }

            if (doubleval( $alt['shutter']) <= 1/16000) {
                $nilaiShutter = 5;
            }elseif (doubleval( $alt['shutter']) <= 1/8000) {
                $nilaiShutter = 4;
            }elseif (doubleval( $alt['shutter']) <= 1/4000) {
                $nilaiShutter = 3;
            }elseif (doubleval( $alt['shutter']) <= 1/2000) {
                $nilaiShutter = 2;
            }elseif (doubleval( $alt['shutter']) >= 1/1000 ) {
                $nilaiShutter = 1;
            }else {
                $nilaiShutter = 0;
            }

            if ($alt['price'] <= 800000000 || $alt['price'] > 80000000 ) {
                $nilaiPrice = 1;
            }elseif ($alt['price']<= 60000000) {
                $nilaiPrice = 2;
            }elseif ($alt['price']<= 45000000 ) {
                $nilaiPrice = 3;
            }elseif ($alt['price']<= 30000000) {
                $nilaiPrice = 4;
            }elseif ($alt['price']<= 15000000) {
                $nilaiPrice = 5;
            }else {
                $nilaiPrice = 0;
            }

            $nilai = array($nilaiIso, $nilaiPixels, $nilaiSensor, $nilaiFocus, $nilaiShutter, $nilaiPrice);

            for ($i=0; $i < count($id_criteria) ; $i++) { 
               $this->matriksModel->save([
                   'id_alternative'=> $alt['id_alternative'],
                   'id_criteria'=> $id_criteria[$i],
                   'nilai'=> $nilai[$i]
               ]);
            }
            
        }  
        return redirect()->to('/matriks');
    }

}
