<?php

namespace App\Database\Seeds;

use App\Entities\Petugas as PetugasEntity;
use App\Models\Petugas as PetugasModel;
use CodeIgniter\Database\Seeder;

class PetugasSeeder extends Seeder
{
    public function run()
    {
        $petugas_model = new PetugasModel();
        $petugas       = new PetugasEntity();

        $petugas->nama     = "Administrator";
        $petugas->username = 'admin';
        $petugas->password = '123456789';
        $petugas->level    = 1;
        $petugas_model->save($petugas);

        $petugas->nama     = "Resepsionis";
        $petugas->username = 'resepsionis';
        $petugas->password = '123';
        $petugas->level    = 2;
        $petugas_model->save($petugas);
    }
}
