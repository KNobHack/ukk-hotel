<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Petugas extends Entity
{
    protected $datamap = [];
    protected $dates   = [];
    protected $casts   = [];

    protected $level = [
        1 => 'administrator',
        2 => 'resepsionis'
    ];

    public function getLevel()
    {
        # code...
    }

    public function setPassword($password)
    {
        # code...
    }

    public function checkPassword($password)
    {
        # code...
    }
}
