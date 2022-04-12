<?php

namespace App\Models;

use App\Entities\Kamar as KamarEntity;
use CodeIgniter\Model;

class Kamar extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kamar';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = KamarEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // Custom FUnctions

    /**
     * Merubah beberapa kamar menjadi dipesan
     * 
     * @param int $id_tipe_kamar
     * @param int $jumlah_kamar
     * 
     * @return bool
     */
    public function reserve(int $id_tipe_kamar, int $jumlah_kamar): bool
    {
        return true;
    }

    /**
     * Merubah beberapa kamar menjadi dipakai
     * 
     * @param int $id_tipe_kamar
     * @param int $jumlah_kamar
     * 
     * @return bool
     */
    public function checkIn(int $id_tipe_kamar, int $jumlah_kamar): bool
    {
        return true;
    }

    /**
     * Merubah kamar kamar yang ditempati menjadi tersedia
     * 
     * @param array $id_kamar
     * 
     * @return bool
     */
    public function checkOut(array $id_kamar): bool
    {
        return true;
    }
}