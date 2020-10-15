<?php namespace App\Controllers;

class Users extends BaseController
{
	public function index()
	{
		return view('pages/home');
    }
    
    public function tambah_user()
    {
        return view('users/tambah_user');
    }

	//--------------------------------------------------------------------

}