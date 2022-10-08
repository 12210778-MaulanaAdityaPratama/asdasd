<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PendaftaranKonsultasi extends Migration
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
            'tgl' =>[
                'type' => 'DATETIME',
            ],
            'jadwal_praktek_id' =>[
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'pasien_id' =>[
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'no_antrian' =>[
                'type' => 'VARCHAR',
                'constraint' => 3,
                'default' => 001,
               'null' => true,
            ], 
            'berat_badan' =>[
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'tinggi_badan' =>[
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'temp_badan' =>[
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'lingkar_kepala' =>[
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'keluhan' =>[
                'type' => 'VARCHAR',
                'constraint' => 512,
                'null' => true,
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
            'deleted_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('jadwal_praktek_id','jadwal_praktek','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('pasien_id','pasien','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('petugas_id','petugas_id','id','CASCADE','CASCADE');
        $this->forge->createTable('pendaftaran_konsultasi');
    }

    public function down()
    {
        $this->forge->dropTable('pendaftaran_konsultasi');
    }
}
