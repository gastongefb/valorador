<?php

namespace App\Models;

use CodeIgniter\Model;

class TitulosModel extends Model
{
    //protected $table = 'materias';

    protected $primaryKey = 'id_titulo';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['detalle_titulo','puntaje'];

    protected $table = 'titulos';

    public function getValidacion()
    {
        return $this->findAll();
    }

 

    
}