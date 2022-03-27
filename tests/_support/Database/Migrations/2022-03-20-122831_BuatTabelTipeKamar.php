<?php

namespace Tests\Support\Database\Migrations;

class BuatTabelTipeKamar extends Migration
{
    private $table = 'tipe_kamar';

    public function up()
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'tipe' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
            'harga' => [
                'type'       => 'BIGINT',
                'constraint' => 20
            ],
            'foto' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'deskripsi' => [
                'type'       => 'TEXT'
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
