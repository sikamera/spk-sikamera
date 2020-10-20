<?php namespace App\Controllers;

use App\Models\KriteriaModel;

class Home extends BaseController
{
	public function __construct() {
		$this->kriteriaModel = new KriteriaModel();
	}

	public function index()
	{
		$data = [
			'judul' => 'Home'
		];
		return view('admin/pages/home', $data);
	}

	public function kriteria()
	{
		$data = [
			'judul'=> 'Data kriteria',
			'kriteria'=> $this->kriteriaModel->getKriteria()

		];

		return view('admin/pages/kriteria', $data);
	}

	//--------------------------------------------------------------------

}
