<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PoliDokter extends Migration
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
            'poli_id' => [
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
            ],
            'dokter_id' => [
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('poli_id','poli','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('dokter_id','dokter','id','CASCADE','CASCADE');
        $this->forge->createTable('poli_dokter');
    }

    public function down()
    {
        $this->forge->dropTable('poli_dokter');
    }
}
