<?php

namespace App\Controllers;

use App\Entities\TipeKamar as TipeKamarEntity;
use App\Models\TipeKamar as TipeKamarModel;
use CodeIgniter\RESTful\ResourcePresenter;

class TipeKamar extends ResourcePresenter
{
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $tipe_kamar_model = new TipeKamarModel();
        $tipe_kamar = $tipe_kamar_model
            ->select("*, ({$tipe_kamar_model->undeletableSubQuery()}) AS undeletable")
            ->findAll();

        $chunk_size = ceil(count($tipe_kamar) / 3);
        $tipe_kamar_batch = array_chunk($tipe_kamar, $chunk_size);
        $data['tipe_kamar_batch'] = $tipe_kamar_batch;

        $data['title']   = 'Tampil Tipe Kamar';
        $data['heading'] = 'Tampil Tipe Kamar';

        return view('tipekamar/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        // ADD VALIDATION

        $foto      = $this->request->getFile('foto');
        $foto_path = $foto->store(fileName: $foto->getClientName());

        $tipe_kamar = new TipeKamarEntity($this->request->getPost());
        $tipe_kamar->foto = '/uploads/' . $foto_path;

        helper('filesystem');
        directory_mirror(WRITEPATH . 'uploads/', FCPATH . 'uploads/', false);

        $tipe_kamar_model = new TipeKamarModel();
        $berhasil         = $tipe_kamar_model->insert($tipe_kamar);

        return redirect()
            ->to('/tipe-kamar')
            ->with('alert', ['type' => 'success', 'message' => 'Tipe Kamar berhasil ditambahkan']);
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
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
        //
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
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
        //
    }
}
