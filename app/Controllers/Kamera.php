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
      $data = [
          'judul' => 'Data Kamera',
          'kamera' => $this->kameraModel->getKamera(),
      ];

      return view('admin/kamera/index', $data);;
    }


    public function detail($slug)
    {
        $data = [
            'judul' => 'Detail Kamera',
            'kamera' => $this->kameraModel->getKamera($slug)
        ];
        if (empty($data['kamera'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($slug. ' tidak ditemukan!');
        }
        return view('admin/kamera/detail', $data);
    }

	public function tambah_kamera()
	{
        $data = [
            'judul' => 'Tambah Kamera',
            'validation'=> \Config\Services::validation()
        ];
        
		return view('admin/kamera/tambah_kamera', $data);
    }
    
    public function save()
    {
        if (!$this->validate([
            'type' => [
                'rules'=> 'required|is_unique[kamera.type]',
                'errors'=>[
                    'required'=>'{field} kamera harus diisi.',
                    'is_unique'=> '{field} Kamera sudah ada di database.'
                ]
            ],
            'price'=>[
                'rules'=> 'required',
                'errors'=>[
                    'required'=>'{field} kamera harus diisi.'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kamera/tambah_kamera')->withInput()->with('validation', $validation);
        }
        //gambar
        $gambarKamera = $this->request->getFile('image');

        if ($gambarKamera->getError() == 4) {
            $namaImage = 'default.jpg';
        }else{
            $namaImage = $gambarKamera->getRandomName();
            $gambarKamera->move('img/kamera', $namaImage);
           
        }

        $brand = $this->request->getVar('brand');
        $type = $this->request->getVar('type');
        $slug = url_title("$brand $type", '-', true);
        $this->kameraModel->save([
            'brand' => $this->request->getVar('brand'),
            'type'=> $this->request->getVar('type'),
            'slug'=>$slug,
            'release_date' =>$this->request->getVar('release_date'),
            'price'=>$this->request->getVar('price'),
            'image'=>$namaImage,
            'description'=>$this->request->getVar('description'),
            'max_resolution'=> $this->request->getVar('max_resolution'),
            'pixels'=>$this->request->getVar('pixels'),
            'sensor_size'=>$this->request->getVar('sensor_size'),
            'min_iso' => $this->request->getVar('min_iso'),
            'max_iso' => $this->request->getVar('max_iso'),
            'lens'=>$this->request->getVar('lens'),
            'focus'=>$this->request->getVar('focus'),
            'screen'=>$this->request->getVar('screen'),
            'min_shutter'=>$this->request->getVar('min_shutter'),
            'max_shutter'=>$this->request->getVar('max_shutter'),
            'weight'=>$this->request->getVar('weight'),
            'dimension'=>$this->request->getVar('dimension')
        ]);
        return redirect()->to('/kamera');
    }

    public function delete($id)
    {
        $kamera = $this->kameraModel->find($id);

       if ($kamera['image'] != 'default.jpg') {
            unlink('img/kamera/'.$kamera['image']);
       }

        $this->kameraModel->delete($id);
        return redirect()->to('/kamera');
    }

    public function edit($slug)
    {
        $data = [
            'judul' => 'Edit Data Kamera',
            'kamera'=> $this->kameraModel->getKamera($slug),
            'validation'=> \Config\Services::validation()
        ];
        
		return view('admin/kamera/edit', $data);
    }

    public function update($id){
        //cek judul
        $oldData = $this->kameraModel->getKamera($this->request->getVar('slug'));
        if ($oldData['type']==$this->request->getVar('type')) {
            $rule_type = 'required';
        }else{
            $rule_type = 'required|is_unique[kamera.type]';
        }
        if (!$this->validate([
            'type' => [
                'rules'=> $rule_type,
                'errors'=>[
                    'required'=>'{field} kamera harus diisi.',
                    'is_unique'=> '{field} Kamera sudah ada di database.'
                ]
            ],
            'price'=>[
                'rules'=> 'required',
                'errors'=>[
                    'required'=>'{field} kamera harus diisi.'
                ]
            ]

        ])) {
            return redirect()->to('/kamera/edit/'.$this->request->getVar('slug'))->withInput();
        }

        $fileImage = $this->request->getFile('image');

        //cek gambar berubah enggak
        if ($fileImage->getError() == 4) {
            $namaImage = $this->request->getVar('oldImage');
        }else {
            $namaImage = $fileImage->getRandomName();

            $fileImage->move('img/kamera', $namaImage);

            unlink('img/kamera/'.$this->request->getVar('oldImage'));
        }


        $brand = $this->request->getVar('brand');
        $type = $this->request->getVar('type');
        $slug = url_title("$brand $type", '-', true);
        $this->kameraModel->save([
            'id_kamera' => $id,
            'brand' => $this->request->getVar('brand'),
            'type'=> $this->request->getVar('type'),
            'slug'=>$slug,
            'release_date' =>$this->request->getVar('release_date'),
            'price'=>$this->request->getVar('price'),
            'image'=>$namaImage,
            'description'=>$this->request->getVar('description'),
            'max_resolution'=> $this->request->getVar('max_resolution'),
            'pixels'=>$this->request->getVar('pixels'),
            'sensor_size'=>$this->request->getVar('sensor_size'),
            'min_iso' => $this->request->getVar('min_iso'),
            'max_iso'=> $this->request->getVar('max_iso'),
            'lens'=>$this->request->getVar('lens'),
            'focus'=>$this->request->getVar('focus'),
            'screen'=>$this->request->getVar('screen'),
            'min_shutter'=>$this->request->getVar('min_shutter'),
            'max_shutter'=>$this->request->getVar('max_shutter'),
            'weight'=>$this->request->getVar('weight'),
            'dimension'=>$this->request->getVar('dimension')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/kamera');
    }

	//--------------------------------------------------------------------

}