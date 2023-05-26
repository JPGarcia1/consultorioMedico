<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = ['citas'];

    protected $allowedFields = ['fecha', 'hora', 'paciente', 'medico', 'diagnostico', 'tratamiento', 'observaciones'];
}