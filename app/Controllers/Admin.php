<?php namespace App\Controllers;


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
