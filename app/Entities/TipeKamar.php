<?php

namespace App\Entities;

use App\Models\FasilitasKamar as FasilitasKamarModel;
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

    public function getFasilitas()
    {
        if (!isset($this->attributes['fasilitas'])) {
            $fasilitas_kamar_model = new FasilitasKamarModel();
            $this->attributes['fasilitas'] = $fasilitas_kamar_model
                ->where('id_tipe_kamar', $this->attributes['id'])
                ->findAll();
        }

        return $this->attributes['fasilitas'];
    }
}
