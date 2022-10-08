<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RincianTagihan extends Migration
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
            'tagihan_id' =>[
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'jasa_barang_id' =>[
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'qty' =>[
                'type' => 'DOUBLE',
            ],
            'harga' =>[
                'type' => 'DOUBLE',
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
        $this->forge->addForeignKey('tagihan_id','tagihan','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('jasa_barang_id','jasa_barang','id','CASCADE','CASCADE');
        $this->forge->createTable('rincian_tagihan');
    }

    public function down()
    {
        $this->forge->dropTable('rincian_tagihan');
    }
}
