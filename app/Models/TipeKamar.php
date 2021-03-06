<?php

namespace App\Models;

use App\Entities\TipeKamar as TipeKamarEntity;
use CodeIgniter\Model;

class TipeKamar extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tipe_kamar';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = TipeKamarEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tipe', 'harga', 'foto', 'deskripsi'];

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

    // Callbacks
    public function undeletableSubQuery(): string
    {
        $kamar = new Kamar();
        return $kamar
            ->selectCount('id')
            ->where($kamar->table . '.id_tipe_kamar = ' . $this->table . '.id')
            ->getCompiledSelect();
    }
}
