<?php

namespace App\Controllers;

use App\Entities\FasilitasHotel as FasilitasHotelEntity;
use App\Models\FasilitasHotel as FasilitasHotelModel;
use CodeIgniter\RESTful\ResourcePresenter;

class FasilitasHotel extends ResourcePresenter
{
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $fasilitas_hotel = (new FasilitasHotelModel())
            ->findAll();


        $data['fasilitas_hotel'] = $fasilitas_hotel;
        return view('fasilitas-hotel/index', $data);
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

        $fasilitas_hotel = new FasilitasHotelEntity($this->request->getPost());
        $fasilitas_hotel->foto = '/uploads/' . $foto_path;

        helper('filesystem');
        directory_mirror(WRITEPATH . 'uploads/', FCPATH . 'uploads/', false);

        $fasilitas_hotel_model = new FasilitasHotelModel();
        $berhasil         = $fasilitas_hotel_model->insert($fasilitas_hotel);

        return redirect()
            ->to('/fasilitas-hotel')
            ->with('alert', ['type' => 'success', 'message' => 'Fasilitas Hotel berhasil ditambahkan']);
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
        $fasilitas_hotel_model = new FasilitasHotelModel();
        $fasilitas_hotel = $fasilitas_hotel_model->find($id);

        if (!$fasilitas_hotel) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $fasilitas_hotel->fill($this->request->getPost());
        $berhasil = $fasilitas_hotel_model->save($fasilitas_hotel);

        return redirect()
            ->to("/fasilitas-hotel")
            ->with('alert', ['type' => 'success', 'message' => 'Fasilitas Hotel berhasil']);
    }

    public function updateFoto($id = null)
    {
        $fasilitas_hotel_model = new FasilitasHotelModel();
        $fasilitas_hotel = $fasilitas_hotel_model->find($id);

        if (!$fasilitas_hotel) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $foto      = $this->request->getFile('foto');
        $foto_path = $foto->store(fileName: $foto->getClientName());

        $fasilitas_hotel->foto = '/uploads/' . $foto_path;

        helper('filesystem');
        directory_mirror(WRITEPATH . 'uploads/', FCPATH . 'uploads/', false);

        $berhasil         = $fasilitas_hotel_model->save($fasilitas_hotel);

        return redirect()
            ->to("/fasilitas-hotel")
            ->with('alert', ['type' => 'success', 'message' => 'Foto Fasilitas Hotel berhasil diubah']);
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
        $fasilitas_hotel_model = new FasilitasHotelModel();
        $fasilitas_hotel = $fasilitas_hotel_model->find($id);

        if (!$fasilitas_hotel) { // not found
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $fasilitas_hotel_model->delete($id);

        return redirect()
            ->to('/fasilitas-hotel')
            ->with('alert', [
                'type' => 'success',
                'message' => 'Fasilitas Hotel berhasil di hapus'
            ]);
    }
}
