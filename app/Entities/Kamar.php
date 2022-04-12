<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Kamar extends Entity
{
    protected $attributes = [
        'id_tipe_kamar' => null,
        'no_kamar'      => null,
        'status'        => 1
    ];

    protected $datamap = [];
    protected $dates   = [];
    protected $casts   = [];

    protected $status = [
        1 => 'Tersedia',
        2 => 'Dipesan',
        3 => 'Dipakai',
        4 => 'Dalam perawatan'
    ];

    /**
     * Warna setiap status untuk dipakai di view
     */
    protected $statusColor = [
        1 => 'success',
        2 => 'warning',
        3 => 'danger',
        4 => 'danger'
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

    public function getNoKamar()
    {
        return str_pad($this->attributes['no_kamar'], 3, 0, STR_PAD_LEFT);
    }

    public function getTipeKamar()
    {
        if (!isset($this->attributes['tipe'])) {
            return $this->attributes['id_tipe_kamar'];
        }

        return $this->attributes['tipe'];
    }

    public function getModifiable(): bool
    {
        $status = $this->attributes['status'];

        return
            $status == '1' ||
            $status == '4';
    }

    public function getStatuses()
    {
        return $this->status;
    }

    public function getDalamPerbaikan()
    {
        return $this->attributes['status'] == '4';
    }

    public function setDalamPerbaikan(bool $val = true)
    {
        if ($val) {
            $this->attributes['status'] = '4';
            return $this;
        }

        $this->attributes['status'] = '1';
        return $this;
    }
}
