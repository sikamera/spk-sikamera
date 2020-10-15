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
		return view('pages/home');
    }
    
    public function tambah_user()
    {
        return view('users/tambah_user');
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