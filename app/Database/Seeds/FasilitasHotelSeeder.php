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
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Kamar bersih',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Koneksi internet gratis',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Layanan resepsionis 24 jam',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Restoran/kafe',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Area bebas rokok',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Sarapan gratis',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Tempat parkir',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Kolam renang',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Pendingin udara',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Televisi',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Pusat kebugaran',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'nama' => 'Ruang tamu',
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
        ];

        (new FasilitasHotel())->insertBatch($data);
    }
}
