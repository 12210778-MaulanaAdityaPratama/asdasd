<?php

namespace App\Database\Seeds;

use App\Models\PendidikanGuruModel;
use CodeIgniter\Database\Seeder;

class PendidikanGuru extends Seeder
{
    public function run()
    {
        $pendidikan = (int)(new PendidikanGuruModel())-> insert([
            'pegawai_id' => 1,
            'jenjang' => 'S1',
            'jurusan' => 'Informatika',
            'asal_sekolah' => 'SMK',
            'tahun_lulus' => '2021',
            'nilai_ijasah' => 100,
        ]);
        echo "hasil insert $pendidikan";
    }
}
