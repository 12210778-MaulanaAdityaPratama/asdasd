<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Poli extends Migration
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
                'constraint' => '30',
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => '512',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('poli');
    }

    public function down()
    {
        $this->forge->dropTable('poli');
    }
}
