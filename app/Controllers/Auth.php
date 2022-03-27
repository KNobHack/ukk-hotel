<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function petugas()
    {
        helper('form');
        return view('auth/login-petugas', ['validation' => \Config\Services::validation()]);
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

        $petugas = $this->petugas
            ->where(['username' => $username])
            ->first();

        if (!$petugas || $petugas->checkPassword($password) === false) {
            return redirect()
                ->withInput()
                ->with('alert', ['type' => 'danger', 'message' => 'Username atau Password salah'])
                ->back();
        }


        return redirect()->to('/dashboard');
    }
}
