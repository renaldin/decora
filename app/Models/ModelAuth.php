<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{

    public function login_user($username, $password, $role)
    {
        return $this->db->table('user')->where([
            'username' => $username,
            'password' => $password,
            'role' => $role,
        ])->get()->getRowArray();
    }

    public function register($data)
    {
        $this->db->table('user')->insert($data);
    }
}
