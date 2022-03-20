<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTabelTamu extends Migration
{
    private $table = 'tamu';

    public function up()
    {
        $fields = [
            'nik' => [
                'type' => 'CHAR',
                'constraint' => 20,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => 15,
                'null'       => true
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
                'unique'     => true
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'verifikasi_email' => [
                'type'    => 'BOOLEAN',
                'default' => 0
            ],
            'verifikasi_no_hp' => [
                'type' => 'BOOLEAN',
                'default' => 0
            ]
        ];

        $this->forge
            ->addField($fields)
            ->addPrimaryKey('nik')
            ->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
