<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SpesialisDokter extends Migration
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
            'dokter_id' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' =>true,
            ],
            'spesialis_id' => [
                'type' => 'INT',
                'constraint' => '11',
                'null' => true,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('dokter_id','dokter','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('spesialis_id','spesialis','id','CASCADE','CASCADE');
        $this->forge->createTable('spesialis_dokter');
    }

    public function down()
    {
        $this->forge->dropTable('spesialis_dokter');
    }
}
