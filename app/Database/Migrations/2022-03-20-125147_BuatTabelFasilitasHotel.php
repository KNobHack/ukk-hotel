<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTabelFasilitasHotel extends Migration
{
    private $table = 'fasilitas_hotel';

    public function up()
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
            ],
            'foto' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'deskripsi' => [
                'type' => 'TEXT'
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
