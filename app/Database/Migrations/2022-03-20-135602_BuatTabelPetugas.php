<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTabelPetugas extends Migration
{
    private $table = 'petugas';

    public function up()
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
                'unique'     => true
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
            'level' => [
                'type'       => 'TINYINT',
                'constraint' => 3
            ]
        ];

        $this->forge
            ->addField($fields)
            ->addPrimaryKey('id')
            ->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
