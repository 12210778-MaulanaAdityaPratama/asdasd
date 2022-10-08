<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalPraktek extends Migration
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
            'poli_dokter_id' =>[
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'hari' =>[
                'type' => 'INT',
                'constraint' => 11,
            ],
            'jam_mulai' =>[
                'type' => 'TIME',
            ],
            'jam_selesai' =>[
                'type' => 'TIME',
                'null' =>true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('jadwal_praktek');
    }

    public function down()
    {
        $this->forge->dropTable('jadwal_praktek');
    }
}
