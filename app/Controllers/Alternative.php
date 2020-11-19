<?php namespace App\Controllers;

use App\Models\AlternativeModel;
use App\Models\KameraModel;
use App\Models\KriteriaModel;
use App\Models\MatriksModel;

class Alternative extends BaseController
{
    protected $kamera;
    protected $alternative;
    protected $matriks;

    public $nilaiIso;
    public $nilaiPixel;
    public $nilaiSensor;
    public $nilaiFocus;
    public $nilaiShutter;
    public $nilaiPrice;


    public function __construct() {
        $this->kamera = new KameraModel();
        $this->alternative = new AlternativeModel();
        $this->matriksModel = new MatriksModel();
        $this->criteriaModel = new KriteriaModel();
    }
	public function index()
	{
		$data = [
            'judul' => 'Alternative',
            'alternative' => $this->alternative->getAlternative()
		];
		return view('admin/pages/proses-moora', $data);
    }

    public function compare($id) 
    {
        $dataKamera = $this->kamera->getKameraById($id);
        $brandtype = $dataKamera['brand'].' '.$dataKamera['type'];
        $criteria = $this->criteriaModel->getKriteria();
        $id_criteria = [];
        $this->alternative->save([
            'id_kamera' => $dataKamera['id_kamera'],
            'kamera' => $brandtype,
            'iso' => $dataKamera['max_iso'],
            'pixels' => $dataKamera['pixels'],
            'sensor_size' => $dataKamera['sensor_size'],
            'focus' => $dataKamera['focus'],
            'shutter' => $dataKamera['max_shutter'],
            'price' => $dataKamera['price']
        ]);
        $alternative = $this->alternative->getAlternative();
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

            if ($alt['shutter'] == "1/1000") {
                $nilaiShutter = 1;
            }elseif ($alt['shutter'] == "1/2000") {
                $nilaiShutter = 2;
            }elseif ($alt['shutter'] == "1/4000") {
                $nilaiShutter = 3;
            }elseif ($alt['shutter'] == "1/8000") {
                $nilaiShutter = 4;
            }elseif ($alt['shutter'] == "1/16000") {
                $nilaiShutter = 5;
            }else {
                $nilaiShutter = 0;
            }

            if ($alt['price'] >= 800000000) {
                $nilaiPrice = 1;
            }elseif ($alt['price']>= 60000000) {
                $nilaiPrice = 2;
            }elseif ($alt['price']>= 40000000 ) {
                $nilaiPrice = 3;
            }elseif ($alt['price']>= 20000000) {
                $nilaiPrice = 4;
            }elseif ($alt['price']>= 3000000) {
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

    public function delete($id = false)
    {
        if ($id == false) {
            $this->alternative->deleteAllData();
        }else {
            $this->alternative->delete($id);
        }
        return redirect()->to('/matriks');
    }

	//--------------------------------------------------------------------

}