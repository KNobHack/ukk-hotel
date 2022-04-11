<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Kamar extends Entity
{
    protected $datamap = [];
    protected $dates   = [];
    protected $casts   = [];

    protected $status = [
        1 => 'Tersedia',
        2 => 'Dipesan',
        3 => 'Dipakai'
    ];

    /**
     * Warna setiap status untuk dipakai di view
     */
    protected $statusColor = [
        1 => 'Success',
        2 => 'Warning',
        3 => 'Danger'
    ];

    public function getStatusId()
    {
        return $this->attributes['status'];
    }

    public function getStatus()
    {
        $key = $this->attributes['status'];
        return $this->status[$key];
    }

    public function getStatusColor()
    {
        $key = $this->attributes['status'];
        return $this->statusColor[$key];
    }
}
