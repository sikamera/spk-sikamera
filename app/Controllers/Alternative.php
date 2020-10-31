<?php namespace App\Controllers;

use App\Models\AlternativeModel;
use App\Models\KameraModel;

class Alternative extends BaseController
{
    protected $kamera;
    protected $alternative;

    public function __construct() {
        $this->kamera = new KameraModel();
        $this->alternative = new AlternativeModel();
    }
	public function index()
	{
		$data = [
            'judul' => 'Alternative',
            'alternative' => $this->alternative->getAlternative()
		];
		return view('admin/alternative/index', $data);
    }

    public function compare($id) 
    {
        $dataKamera = $this->kamera->getKameraById($id);
        $brandtype = $dataKamera['brand'].' '.$dataKamera['type'];
        $this->alternative->save([
            'id_kamera' => $dataKamera['id_kamera'],
            'kamera' => $brandtype,
            'iso' => $dataKamera['iso'],
            'pixels' => $dataKamera['pixels'],
            'sensor_size' => $dataKamera['sensor_size'],
            'focus' => $dataKamera['focus'],
            'shutter' => $dataKamera['shutter'],
            'price' => $dataKamera['price']
        ]);
     
        return redirect()->to('/alternative');
    }

    public function delete($id = false)
    {
        if ($id == false) {
            $this->alternative->deleteAllData();
        }else {
            $this->alternative->delete($id);
        }
        return redirect()->to('/alternative');
    }

	//--------------------------------------------------------------------

}