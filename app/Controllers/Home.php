<?php namespace App\Controllers;

use App\Models\KameraModel;

class Home extends BaseController
{
	public function __construct() {
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

	public function detail($slug)
	{
		$data = [
            'judul' => 'Detail Kamera',
            'kamera' => $this->catalogModel->getKamera($slug)
        ];
        if (empty($data['kamera'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($slug. ' tidak ditemukan!');
        }
        return view('pages/detail', $data);
	}

	public function blog()
	{
		$data = [
            'judul' => 'Blog'
		];
		
		return view('pages/blog', $data);
	}

	public function moora()
	{
		$data = [
            'judul' => 'Proses SPK'
		];
		return view('pages/spk', $data);
	}

	//--------------------------------------------------------------------

}
