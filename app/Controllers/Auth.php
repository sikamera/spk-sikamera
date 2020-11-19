<?php namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
	public function __construct() {
		$this->validation = \Config\Services::validation();
		$this->userModel = new UsersModel();
		$this->db = \Config\Database::connect();
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
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');
		$builder = $this->db->table('users');
		$session = session();
		$user = $builder->getWhere(['username'=>$username])->getRowArray();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'firstname'=> $user['first_name'],
					'lastname'=> $user['last_name'],
					'image'=>$user['image'],
					'username'=>$user['username'],
					'role'=>$user['id_role']
				];
				$session->set($data);
				if ($user['id_role']==1) {
					return redirect()->to('/admin');
				}else{
					return redirect()->to('/home');
				}
			}else {
				session()->setFlashdata('message', '
				<div class="alert alert-danger" role="alert">
					  password yang anda masukkan salah!
				</div>
				');
				return redirect()->to('/auth');
			}			
		}else {
			session()->setFlashdata('message', '
			<div class="alert alert-danger" role="alert">
				  username tidak terdaftar!
			</div>
			');
			return redirect()->to('/auth');
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
		$username = $firstname.$lastname;
		$passwordHash = $this->request->getVar('password');

		$this->userModel->save([
			'first_name' => $this->request->getVar('firstname'),
			'last_name' => $this->request->getVar('lastname'),
			'username' => $username,
			'image' => "default.jpg",
			'email' => $this->request->getVar('email'),
			'password'=> password_hash($passwordHash, PASSWORD_DEFAULT),
			'id_role'=> 2
		]);
		session()->setFlashdata('message', '
		<div class="alert alert-success" role="alert">
  			akun anda berhasil dibuat!
		</div>
		');
		return redirect()->to('/auth');
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		
		return redirect()->to('/home');
	}

	//--------------------------------------------------------------------

}