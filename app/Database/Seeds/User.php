<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class User extends Seeder
{
    public function run()
    {
        $createdAt = new Time('now', 'Asia/Jakarta');
        $data = [
            'username' => 'admin12',
            'password' => 'admin1234',
            'created_at' => $createdAt,
        ];

        $this->db->table('user')->insert($data);
    }
}
