<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table         = 'clientes';
    protected $allowedFields = [
        'cliente_id', 'apellido', 'nombre', 'correo_electronico', 'calle_avenida', 'no_casa', 'zona',
    ];
}