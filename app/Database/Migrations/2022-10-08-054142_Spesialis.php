<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Spesialis extends Migration
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
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '90',
                'null' => true,
            ],
            'gelar' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('spesialis');
    }

    public function down()
    {
        $this->forge->dropTable('spesialis');
    }
}
