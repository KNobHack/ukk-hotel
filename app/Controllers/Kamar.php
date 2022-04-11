<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\Kamar as KamarModel;

class Kamar extends ResourcePresenter
{
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $kamar = (new KamarModel)->findAll();
        $data['kamar'] = $kamar;

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
