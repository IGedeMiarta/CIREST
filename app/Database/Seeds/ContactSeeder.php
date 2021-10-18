<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactSeeder extends Seeder
{
        public function run()
        {
                $data = [
                        'name' => 'Urback',
                        'number'    => '08118277993'
                ];

                // Simple Queries
                // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

                // Using Query Builder
                $this->db->table('contacts')->insert($data);
        }
}