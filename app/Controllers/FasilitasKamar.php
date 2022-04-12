<?php

namespace App\Controllers;

use App\Models\FasilitasKamar as FasilitasKamarModel;
use CodeIgniter\RESTful\ResourcePresenter;

class FasilitasKamar extends ResourcePresenter
{
    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $fasilitas_kamar_model = new FasilitasKamarModel();
        $fasilitas_kamar = $fasilitas_kamar_model->find($id);

        if (!$fasilitas_kamar) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $id_tipe_kamar = $fasilitas_kamar->id_tipe_kamar;

        $fasilitas_kamar_model->delete($id);

        return redirect()
            ->to("/tipe-kamar/{$id_tipe_kamar}")
            ->with('alert', ['type' => 'success', 'message' => 'Fasiitas Kamar berhasil dihapus']);
    }
}
