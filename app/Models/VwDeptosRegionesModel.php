<?php

namespace App\Models;

use CodeIgniter\Model;

class VwDeptosRegionesModel extends Model
{
    protected $table            = 'vw_deptos_regiones';
    protected $primaryKey       = 'cod_depto';
    protected $allowedFields    = [
        'cod_depto',
        'nombre_depto',
        'cod_region',
        'nombre'
    ];

}
