<?php

namespace App\Database\Seeds;

use App\Models\FasilitasHotel;
use CodeIgniter\Database\Seeder;

class FasilitasHotelSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Tempat tidur nyaman',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Kamar bersih',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Koneksi internet gratis',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Layanan resepsionis 24 jam',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Restoran/kafe',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Area bebas rokok',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Sarapan gratis',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Tempat parkir',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Kolam renang',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Pendingin udara',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Televisi',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Pusat kebugaran',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
            [
                'nama' => 'Ruang tamu',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.'
            ],
        ];

        (new FasilitasHotel())->insertBatch($data);
    }
}
