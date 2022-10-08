<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JasaBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' =>true,
            ],
            'nama' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jenis' =>[
                'type' => 'ENUM("J","B")',
            ],
            'harga' =>[
                'type' => 'DOUBLE',
                'unsigned' => true,
            ],
            'keterangan' =>[
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('jasa_barang');
    }

    public function down()
    {
        $this->forge->dropTable('jasa_barang');
    }
}
