<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTabelKamar extends Migration
{
    private $table = 'kamar';

    public function up()
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'id_tipe_kamar' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'no_kamar' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
            'tersedia' => [
                'type' => 'BOOLEAN',
                'default' => 1
            ]
        ];

        $this->forge
            ->addField($fields)
            ->addPrimaryKey('id')
            ->addForeignKey('id_tipe_kamar', 'tipe_kamar', 'id')
            ->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
