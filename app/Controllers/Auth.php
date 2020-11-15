<?php namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
	public function __construct() {
		$this->validation = \Config\Services::validation();
		$this->userModel = new UsersModel();
	}

	public function index()
	{
		$data = [
			'judul' => 'Login',
			'validation' => $this->validation
		];
		return view('auth/login', $data);
	}
	
	public function login()
	{
		if (!$this->validate([
			'username'=>[
				'rules'=>'required',
				'errors'=>[
					'required'=>'username tidak boleh kosong!'
				]
			],
			'password'=>[
				'rules'=>'required',
				'errors'=>[
					'ruquired'=>'password tidak boleh kosong!'
				]
			]
		])) {
			return redirect()->to('/auth')->withInput()->with('validation',$this->validation);
		}


	}

    public function register()
	{

		$data = [
			'judul' => 'Register',
			'validation' => $this->validation
		];

		return view('auth/register', $data);
	}
	
	public function save()
	{
		if (!$this->validate([
			'firstname'=> [
				'rules'=>'required',
				'errors'=>[
					'required'=>'Nama depan harus diisi'
				]
			],'lastname'=> [
				'rules'=>'required',
				'errors'=>[
					'required'=>'Nama belakang harus diisi'
				]
			],'email'=> [
				'rules'=>'required|valid_email',
				'errors'=>[
					'required'=>'email harus diisi',
					'valid_email'=>'email harus sesuai format email'
				]
			],'password'=> [
				'rules'=>'required|min_length[8]',
				'errors'=>[
					'required'=>'password harus diisi',
					'min_length'=>'password minimal 8 karakter'
				]
			],'passwordconfirm'=> [
				'rules'=>'required|matches[password]',
				'errors'=>[
					'required'=>'password harus diisi',
					'matches'=>'password harus sama'
				]
			],
		])) {
			return redirect()->to('/auth/register')->withInput()->with('validation',$this->validation);
		}
		$firstname = $this->request->getVar('firstname');
		$lastname = $this->request->getVar('lastname');
		$username = url_title("$firstname $lastname",'_',true);
		$passwordEncrypt = md5($this->request->getVar('password'));


		$this->userModel->save([
			'first_name' => $this->request->getVar('firstname'),
			'last_name' => $this->request->getVar('lastname'),
			'username' => $username,
			'email' => $this->request->getVar('email'),
			'password'=> $passwordEncrypt,
			'role'=> 'user'
		]);
		session()->setFlashdata('message', '
		<div class="alert alert-success" role="alert">
  			akun anda berhasil dibuat!
		</div>
		');
		return redirect()->to('/auth');
	}

	//--------------------------------------------------------------------

}