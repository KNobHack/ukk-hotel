<?php

namespace App\Database\Seeds;

use App\Models\Kamar;
use CodeIgniter\Database\Seeder;

class KamarSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_tipe_kamar' => 1,
                'no_kamar' => 1,
                'status' => 1
            ],
            [
                'id_tipe_kamar' => 1,
                'no_kamar' => 2,
                'status' => 1
            ],
            [
                'id_tipe_kamar' => 1,
                'no_kamar' => 3,
                'status' => 1
            ],
            [
                'id_tipe_kamar' => 1,
                'no_kamar' => 4,
                'status' => 1
            ],
        ];

        (new Kamar())->insertBatch($data);
    }
}
