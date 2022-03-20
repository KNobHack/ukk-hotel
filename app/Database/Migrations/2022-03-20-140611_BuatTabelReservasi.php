<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTabelReservasi extends Migration
{
    private $table = 'reservasi';

    public function up()
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nik_tamu' => [
                'type'       => 'CHAR',
                'constraint' => 20,
            ],
            'id_tipe_kamar' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true
            ],
            'id_petugas' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true
            ],
            'check_in' => [
                'type'       => 'DATETIME'
            ],
            'check_out' => [
                'type'       => 'DATETIME'
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 3,
            ],
            'jumlah_kamar' => [
                'type'       => 'SMALLINT',
                'constraint' => 5,
            ]
        ];

        $this->forge
            ->addField($fields)
            ->addForeignKey('nik_tamu', 'tamu', 'nik')
            ->addForeignKey('id_tipe_kamar', 'tipe_kamar', 'id')
            ->addForeignKey('id_petugas', 'petugas', 'id')
            ->addPrimaryKey('id')
            ->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
