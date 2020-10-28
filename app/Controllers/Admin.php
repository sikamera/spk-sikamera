<?php namespace App\Controllers;

use App\Models\KriteriaModel;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'Admin'
		];
		return view('admin/pages/home', $data);
    }

	//--------------------------------------------------------------------

}
