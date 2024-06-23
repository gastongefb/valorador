<?php

namespace App\Models;

use CodeIgniter\Model;

class CarrerasModel extends Model
{
    protected $table = 'carreras';

    protected $primaryKey = 'id_carrera';

    protected $useAutoIncrement = true;

    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre_carrera'];

  
    public function traerCarreras()
    {
        return $this->findAll();
    }
 
    
    public function traerUnaCarrera($id)
    {
        return $this->where('id_carrera', $id)->first();
    }

}