<?php namespace App\Controllers;

use App\Models\KriteriaModel;

class Kriteria extends BaseController
{
	public function __construct() {
		$this->kriteriaModel = new KriteriaModel();
	}

	public function index()
	{
		$data = [
			'judul'=> 'Data kriteria',
			'kriteria'=> $this->kriteriaModel->getKriteria()

		];

		return view('admin/kriteria/index', $data);
	}

	public function editKriteria($id)
	{
		$data = [
            'judul' => 'Edit Data Kamera',
            'kriteria'=> $this->kriteriaModel->getKriteria($id),
            'validation'=> \Config\Services::validation()
		];
		return view('admin/kriteria/edit-kriteria', $data);
	}

	public function update($id)
	{
		if (!$this->validate([
			'weight' => [
				'rules'=>'required|numeric',
				'errors'=>[
					'required'=> 'Bobot kriteria harus diisi',
					'numeric'=> 'Bobot kriteria harus berisi angka'
				]
			]
		])) {
			return redirect()->to('/kriteria/editKriteria/'.$id)->withInput();
		}
		$this->kriteriaModel->save([
			'id_criteria' => $id,
			'information' => $this->request->getVar('information'),
			'weight' => $this->request->getVar('weight'),
			'atribute'=>$this->request->getVar('atribute')
		]);
		
		session()->setFlashdata('pesan', 'Data berhasil di update');

		return redirect()->to('/kriteria');
	}

	//--------------------------------------------------------------------

}
