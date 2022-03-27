<?php

namespace Tests\Support\Database\Migrations;

class BuatTabelFasilitasKamar extends Migration
{
    private $table = 'fasilitas_kamar';

    public function up()
    {
        $field = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'id_tipe_kamar' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ]
        ];

        $this->forge
            ->addField($field)
            ->addPrimaryKey('id')
            ->addForeignKey('id_tipe_kamar', 'tipe_kamar', 'id')
            ->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
