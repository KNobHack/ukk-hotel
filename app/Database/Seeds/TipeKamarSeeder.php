<?php

namespace App\Database\Seeds;

use App\Models\TipeKamar;
use CodeIgniter\Database\Seeder;

class TipeKamarSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tipe' => 'Standard Room',
                'harga' => 200000,
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'tipe' => 'Superior Room',
                'harga' => 400000,
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'tipe' => 'Delux Room',
                'harga' => 1000000,
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'tipe' => 'Junior Suite Room',
                'harga' => 1500000,
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'tipe' => 'Suite Room',
                'harga' => 3000000,
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
            [
                'tipe' => 'Presindental Suite',
                'harga' => 4500000,
                'foto' => '/assets/argon/img/home-decor-1.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium distinctio neque, porro laboriosam quod sequi labore obcaecati harum beatae iusto quas consectetur architecto iure reiciendis pariatur modi nesciunt! Obcaecati.'
            ],
        ];

        (new TipeKamar())->insertBatch($data);
    }
}
