<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RekamMedis extends Migration
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
            'pendaftaran_konsultasi_id' =>[
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'pasien_id' =>[
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'diagnosa' =>[
                'type' => 'TEXT',
                'null' => true,
            ],
            'tindakan' =>[
                'type' => 'TEXT',
                'null' => true,
            ],
            'terapi' =>[
                'type' => 'TEXT',
                'null' => true,
            ],
            'resep_obat' =>[
                'type' => 'TEXT',
                'null' => true,
            ],
            'alergi' =>[
                'type' => 'TEXT',
                'null' => true,
            ],
            'dokter_id' =>[
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
        $this->forge->addForeignKey('pendaftaran_konsultasi_id','pendaftaran_konsultasi','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('pasien_id','pasien','id','CASCADE','CASACE');
        $this->forge->addForeignKey('dokter_id','dokter','id','CASCADE','CASCADE');
        $this->forge->createTable('rekam_medis');
    }

    public function down()
    {
        $this->forge->dropTable('rekam_medis');
    }
}
