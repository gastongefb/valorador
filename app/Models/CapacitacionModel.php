<?php

namespace App\Models;

use CodeIgniter\Model;

class CapacitacionModel extends Model
{
    //protected $table = 'materias';

    protected $primaryKey = 'id_capacitacion';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_valoracion','detalle_capacitacion','fecha','id_detalle_capacitacion'];

    protected $table = 'capacitacion';

    public function getValidacion()
    {
        return $this->findAll();
    }

    public function getUnaValidacion($d)
    {
        $db = \Config\Database::connect();
        $builder = $this->db->query("select * from validación where dni = $d");
        return $builder->getResult();
    }
}