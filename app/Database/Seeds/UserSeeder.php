<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // 1 data
        // $data = [
        //     'name_user'     => 'Admin',
        //     'email_user'    => 'nandawahyubi6121@gmail.com',
        //     'password_user' => password_hash('12345', PASSWORD_BCRYPT)
        // ];
        // $this->db->table('users')->insert($data);

        // multi data
        $data = [
            [
                'name_user'     => 'Nanda',
                'email_user'    => 'nandawahyubi@gmail.com',
                'password_user' => password_hash('nanda', PASSWORD_BCRYPT)
            ],
            [
                'name_user'     => 'Mowly',
                'email_user'    => 'mowly@gmail.com',
                'password_user' => password_hash('12345', PASSWORD_BCRYPT)
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
