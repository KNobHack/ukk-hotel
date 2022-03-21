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
        # code...
    }
}
