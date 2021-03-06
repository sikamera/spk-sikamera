<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'first_name', 'last_name','image','username', 'email', 'password', 'birthday', 'gender', 'id_role'];

    public function getUser($username = false)
    {
        if ($username == false) {
            return $this->findAll();
        }
        
        return $this->where(['username' => $username])->first();
    }

}