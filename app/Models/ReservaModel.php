<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservaModel extends Model
{
    protected $table      = 'reservas';
    protected $primaryKey = 'id_reserva';

    protected $allowedFields = ['id_cliente', 'id_servicio', 'fecha_reserva', 'hora_inicio', 'hora_fin', 'estado'];
}
