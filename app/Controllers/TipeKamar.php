<?php

namespace App\Controllers;

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
        $tipe_kamar = (new TipeKamarModel())->findAll();
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
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
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
        //
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
