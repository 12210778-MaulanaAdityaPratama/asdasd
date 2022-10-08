<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tagihan extends Migration
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
            'pendaftaran_id' =>[
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'tgl' =>[
                'type' => 'DATETIME',
            ],
            'subtotal' =>[
                'type' => 'DOUBLE',
            ],
            'ppn' =>[
                'type' => 'DOUBLE',
            ],
            'total' =>[
                'type' => 'DOUBLE',
            ],
            'dibayar' =>[
                'type' => 'DOUBLE',
            ],
            'petugas_id' =>[
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'created_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('pendaftaran_id','pendaftaran_konsultasi','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('petugas_id','petugas_id','id','CASCADE','CASCADE');
        $this->forge->createTable('tagihan');
    }

    public function down()
    {
        $this->forge->dropTable('tagihan');
    }
}
