<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dokter extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_depan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_belakang' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
                'null' => true,
            ],
            'gelar_depan' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
                'null' => true,
            ],
            'gelar_belakang' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
                'null' => true,
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM("L","P")',
                'null' => true,
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
                'null' => true,
            ],
            'tgl_lahir' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
                'null' => true,
            ],
            'kota' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => true,
            ],
            'no_telp_rmh' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true,
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true,
            ],
            'no_wa' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
                'null' => true,
            ],
            'sandi' => [
                'type' => 'VARCHAR',
                'constraint' => '60',
                'null' => true,
            ],
            'token_reset' => [
                'type' => 'VARCHAR',
                'constraint' => '16',
                'null' => true,
            ],
            'no_izin_praktek' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
                'null' => true,
            ],
            'tgl_sk_izin' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('dokter');
    }

    public function down()
    {
        $this->forge->dropTable('dokter');
    }
}
