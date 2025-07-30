<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'user';
    protected $allowedFields    = ['username', 'password'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    protected $validationRules = [
        'username' => 'required|is_unique[user.username]',
        'password' => 'required|min_length[8]'
    ];

    protected $validationMessages = [
        'username' => [
            'is_unique' => 'Username sudah ada'
        ]
    ];

    protected $skipValidation = false;
    protected $beforeInsert = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }

    public function conf_password($password, $dbpassword)
    {
        if ($password == $dbpassword) {
            return true;
        }

        return false;
    }
}
