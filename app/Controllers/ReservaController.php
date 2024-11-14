<?php

namespace App\Controllers;

use App\Models\ReservaModel;

class ReservaController extends BaseController
{
    public function index()
    {
        return view('pages/reserva');
    }

    public function reservar()
    {
        $reservaModel = new ReservaModel();
        
        $data = [
            'id_usuario'    => 1, // Cambia esto por el ID del cliente que inicia sesión
            'id_servicio'   => $this->request->getPost('id_servicio'),
            'fecha_reserva' => $this->request->getPost('fecha_reserva'),
            'hora_inicio'   => $this->request->getPost('hora_inicio'),
            'hora_fin'      => $this->request->getPost('hora_fin'),
            'estado'        => 'pendiente'
        ];
        
        $reservaModel->insert($data);
        
        return redirect()->to('<?php base_url(); ?>reservas')->with('mensaje', 'Reserva realizada con éxito.');
    }
}
