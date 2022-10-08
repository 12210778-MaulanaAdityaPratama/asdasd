<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pasien extends Migration
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
            'no_rekammedik' =>[
                'type' => 'VARCHAR',
                'constraint' => 80,
                'null' => true,
                'unique' => true,
            ],
            'nama_depan' =>[
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'nama_belakang' =>[
                'type' => 'VARCHAR',
                'constraint' => 80,
                'null' => true,
           ],
            'nik' =>[
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'unique'=> true,
            ],
            'jenis_kelamin' =>[
                'type' => 'ENUM("L","P")',
                'null' => true,
            ],
            'tgl_lahir' =>[
                'type' => 'DATE',
                'null' => true,
            ],
            'tempat_lahir' =>[
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'alamat' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'kota' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'no_telp' =>[
                'type' => 'VARCHAR',
                'constraint' => 17,
                'null' => true,
            ],
            'email' =>[
                'type' => 'VARBINARY',
                'constraint' => 128,
                'null' => true,
            ],
            'golongan_darah' =>[
                'type' => 'ENUM("A","B","AB","O")',
                'null' => true,
            ],
            'foto' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'sandi' =>[
                'type' => 'VARCHAR',
                'constraint' => 60,
                'null' => true,
            ],
            'token_reset' =>[
                'type' => 'VARCHAR',
                'constraint' => 10,
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
        $this->forge->createTable('pasien');
    }

    public function down()
    {
        $this->forge->dropTable('pasien');
    }
}
