<?php

namespace App\Controllers;

use App\Entities\Kamar as KamarEntity;
use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\Kamar as KamarModel;
use App\Models\TipeKamar;

class Kamar extends ResourcePresenter
{
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $kamar_model = new KamarModel();
        $kamar = $kamar_model
            ->select('kamar.*, tipe')
            ->withTipeKamar()
            ->findAll();

        $tipe_kamar = (new TipeKamar())->findAll();

        $status_kamar = $kamar_model->getStatuses();

        $data['kamar']      = $kamar;
        $data['tipe_kamar'] = $tipe_kamar;
        $data['status_kamar'] = $status_kamar;
        return view('kamar/index', $data);
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        // Needs validation

        $kamar = new KamarEntity($this->request->getPost());

        $kamar_model = new KamarModel();
        $berhasil    = $kamar_model->insert($kamar);

        return redirect()
            ->to('/kamar')
            ->with('alert', [
                'type'    => 'success',
                'message' => 'Kamar berhasil ditambahkan'
            ]);
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $kamar_model = new KamarModel();
        $kamar = $kamar_model->find($id);

        if (!$kamar) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $kamar->fill($this->request->getPost());
        $kamar->setDalamPerbaikan($this->request->getPost('dalam-perbaikan') == 'on');

        $kamar_model->save($kamar);

        return redirect()
            ->to('/kamar')
            ->with('alert', [
                'type'    => 'success',
                'message' => 'Kamar berhasil diedit'
            ]);
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $kamar_model = new KamarModel();
        $kamar = $kamar_model->find($id);

        if (!$kamar) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $kamar_model->delete($id);

        return redirect()
            ->to('/kamar')
            ->with('alert', [
                'type' => 'success',
                'message' => 'Kamar berhasil di hapus'
            ]);
    }
}
