<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PetugasId extends Migration
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
            'email' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'nama_lengkap' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'level' =>[
                'type' => 'ENUM("REG","KASIR","MANAGER")',
                'null' => true,
            ],
            'sandi' =>[
                'type' => 'VARCHAR',
                'constraint' => '60',
            ],
            'foto' =>[
                'type' => 'VARCHAR',
                'constraint' => 126,
            ],
            'reset_token' =>[
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true,
            ],
            'reset_token' =>[
                'type' => 'DATETIME',
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
        $this->forge->createTable('petugas_id');
    }

    public function down()
    {
        $this->forge->dropTable('petugas_id');
    }
}
