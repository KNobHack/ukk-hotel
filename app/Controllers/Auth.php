<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class Auth extends BaseController
{
    public function petugas()
    {
        return view('auth/login-petugas');
    }

    public function petugasSubmit()
    {
        helper('form');
        $form_not_valid = !$this->validate('login_petugas');

        if ($form_not_valid) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $petugas = $this->petugas->whereUsername($username);

        if (!$petugas || $petugas->checkPassword($password) === false) {
            return redirect()
                ->withInput()
                ->with('alert', ['type' => 'danger', 'message' => 'Username atau Password salah'])
                ->back();
        }

        $session = Services::session();
        $session->set([
            'username' => $username,
            'level' => $petugas->level,
            'level_id' => $petugas->levelId
        ]);

        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        $session = Services::session();
        $level   = $session->get('level');

        $session->destroy();

        if ($level == 'Administrator') {
            return redirect()
                ->to('/petugas')
                ->with('alert', ['type' => 'success', 'message' => 'Anda berhasil logut']);
        }

        return redirect()
            ->to('/')
            ->with('alert', ['type' => 'success', 'message' => 'Anda berhasil logut']);;
    }
}
