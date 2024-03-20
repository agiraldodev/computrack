<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DispositivoController extends BaseController
{
    public function index()
    {
        //
    }

    public function crear() {
        return view('dispositivos/crear');
    }
}
