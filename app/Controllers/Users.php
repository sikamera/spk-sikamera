<?php namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected $usersModel;

    public function __construct() {
        $this->usersModel = new UsersModel();
    }

	public function index()
	{
        $data = [
            'judul'=> 'Data Users',
            'users' => $this->usersModel->getUser()
        ];

		return view('admin/users/index', $data);
    }
    
    public function tambah_user()
    {
        $data = [
            'judul'=> 'Tambah User'
        ];

        return view('admin/users/tambah_user', $data);
    }

    public function save()
    {
        $this->usersModel->save([
            'first_name'=>$this->request->getVar('first_name'),
            'last_name'=>$this->request->getVar('last_name'),
            'username'=>$this->request->getVar('username'),
            'email'=>$this->request->getVar('email'),
            'password'=>$this->request->getVar('password'),
            'birthday'=>$this->request->getVar('birthday'),
            'gender'=>$this->request->getVar('gender')
        ]);
    }

	//--------------------------------------------------------------------

}