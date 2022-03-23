<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function petugas()
    {
        return view('auth/login-petugas');
    }

    public function petugasSubmit()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $petugas = $this->petugas
            ->where(['username' => $username])
            ->first();

        if (!$petugas || $petugas->checkPassword($password) === false) {
            return redirect()->to('/petugas');
        }


        return redirect()->to('/dashboard');
    }
}
