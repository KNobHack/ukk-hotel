<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class TipeKamar extends Entity
{
    protected $datamap = [];
    protected $dates   = [];
    protected $casts   = [];

    /**
     * get the full image URI path
     * 
     * @return string
     */
    public function getFoto(): string
    {
        // Not finished
        $uri = clone \Config\Services::uri();
        $uri->setURI($this->attributes['foto']);
        return $uri;
    }
}
