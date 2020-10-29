<?php namespace App\Controllers;

use App\Models\KriteriaModel;

class Home extends BaseController
{

	public function index()
	{
		$data = [
			'judul' => 'Home'
		];
		return view('/pages/home', $data);
	}

	//--------------------------------------------------------------------

}
