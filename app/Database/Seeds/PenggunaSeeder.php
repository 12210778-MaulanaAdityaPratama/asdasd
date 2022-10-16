<?php

namespace App\Database\Seeds;

use App\Models\PenggunaModel;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $id = (new PenggunaModel())->insert([
            'nama' => 'Administrator',
            'gender' => 'L',
            'email' => "aditya.neo5@gmail.com",
            'sandi' => password_hash('kepadamu',PASSWORD_BCRYPT),
        ]);
        echo "hasil id = $id";
    }
}
