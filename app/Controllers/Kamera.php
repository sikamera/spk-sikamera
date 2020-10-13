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
        dd($this->request->getVar());
    }

	//--------------------------------------------------------------------

}