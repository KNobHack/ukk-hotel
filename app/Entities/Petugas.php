<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Petugas extends Entity
{
    protected $datamap = [];
    protected $dates   = [];
    protected $casts   = [];

    protected $level = [
        1 => 'Administrator',
        2 => 'Resepsionis'
    ];

    public function getLevelId()
    {
        return $this->attributes['level'];
    }

    public function getLevel()
    {
        $key = $this->attributes['level'];
        return $this->level[$key];
    }

    public function setPassword($password)
    {
        $this->attributes['password'] = password_hash($password, PASSWORD_BCRYPT);
    }

    public function checkPassword($password)
    {
        return password_verify($password, $this->attributes['password']);
    }
}
