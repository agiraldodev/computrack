<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\DispositivoModel;

class OrdenController extends BaseController
{
    public function listado()
    {
        return view('ordenes/listado');
    }

    public function crear() {
        $dispositivoModel = new DispositivoModel();
        $dispositivos = $dispositivoModel->obtenerDispositivosConCliente();

        // Pasar los datos a la vista
        $data['dispositivos'] = $dispositivos;

        return view('ordenes/nueva', $data);
    }
}
