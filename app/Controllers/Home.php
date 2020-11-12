<?php

namespace App\Controllers;

use App\Models\KameraModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->catalogModel = new KameraModel();
	}

	public function index()
	{
		$data = [
			'judul' => 'Home'
		];
		return view('/pages/home', $data);
	}

	public function catalog()
	{
		$data = [
			'judul' => 'katalog kamera',
			'catalog' => $this->catalogModel->getKamera()
		];

		return view('pages/catalog', $data);
	}

	//--------------------------------------------------------------------

}
