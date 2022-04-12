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
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true
            ],
            'no_kamar' => [
                'type'       => 'SMALLINT',
                'constraint' => 5
            ],
            'status' => [
                'type'       => 'TINYINT',
                'default'    => 3
            ],
            'deleted_at' => [
                'type'       => 'TIMESTAMP',
                'null'       => true
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
