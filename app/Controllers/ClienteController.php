<?php

namespace App\Controllers;
use App\Models\ClienteModel;

class ClienteController extends BaseController
{
    public function listado() {
        $modelo = new ClienteModel();
        $datos['clientes'] = $modelo->findAll();

        return view('clientes/listado', $datos);
    }

    public function delete($id = null)
    {
        $modelo = new ClienteModel();
        $modelo -> delte($id);

        return redirect()->to('/clientes');
    }

    public function crear(){
        return view('clientes/nuevo');
    }

    public function guardar() {
        $modelo = new ClienteModel();
        $datos = [
            'nombres' => $this->request->getPost('nombres'),
            'apellidos' => $this->request->getPost('apellidos'),
            'cedula' => $this->request->getPost('cedula'),
            'telefono' => $this->request->getPost('telefono'),
            'email' => $this->request->getPost('email'),
        ];
        $modelo -> insert($datos);
        return redirect()->to('/clientes');
    }
}