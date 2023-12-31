<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'adminuser',
                'password' => password_hash('adminpassword', PASSWORD_DEFAULT),
                'email' => 'admin@example.com',
                'level' => 'admin',
            ],
            [
                'username' => 'regularuser',
                'password' => password_hash('regularpassword', PASSWORD_DEFAULT),
                'email' => 'user@example.com',
                'level' => 'user',
            ],
        ];

        // Using the DB Seeder to insert data
        $this->db->table('users')->insertBatch($data);
    }
}