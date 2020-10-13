<?php namespace App\Controllers;

use App\Models\KameraModel;

class Kamera extends BaseController
{
    protected $kameraModel;
    public function __construct() {
        $this->kameraModel = new KameraModel();
    }
    public function index()
    {
      
    }
	public function tambah_kamera()
	{
		return view('kamera/tambah_kamera');
    }
    
    public function save()
    {
        $brand = $this->request->getVar('brand');
        $type = $this->request->getVar('type');
        $slug = url_title($brand+" "+$type, '-', true);
        $digit = 4;
        $id = rand(pow(10, $digit-1), pow(10, $digit)-1);

        $this->kameraModel->save([
            'id_kamera' => $id,
            'brand' => $this->request->getVar('brand'),
            'type' => $this->request->getVar('type'),
            'slug' => $slug,
            'release_date' => $this->request->getVar('release_date'),
            'price' => $this->request->getVar('price'),
            'sensor_type' => $this->request->getVar('sensor_type'),
            'resolution' => $this->request->getVar('resolution'),
            'iso' => $this->request->getVar('iso'),
            'shutter' => $this->request->getVar('shutter'),
            'lcd'=>$this->request->getVar('lcd'),
            'video_resolution'=>$this->request->getVar('video_resolution'),
            'flash'=>$this->request->getVar('flash'),
            'bluetooth'=>$this->request->getVar('bluetooth'),
            'wifi' => $this->request-getcwd('wifi'),
            'nfc'=>$this->request->getVar('nfc'),
            'weight'=>$this->request->getVar('weight'),
            'long'=>$this->request->getVar('long'),
            'width'=>$this->request->getVar('width'),
            'height'=>$this->request->getVar('heigt'),
            'image'=>$this->request->getVar('image'),
            'description'=>$this->request->getVar('description')
        ]);


        return redirect()->to('/');
    }

	//--------------------------------------------------------------------

}