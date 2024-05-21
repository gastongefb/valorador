<?php

namespace App\Models;

use CodeIgniter\Model;

class ValoracionPostgradoModel extends Model
{
    //protected $table = 'materias';

    protected $primaryKey = 'id_postgrado';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_valoracion','detalle_valoracion_postgrado','fecha','id_titulo_postgrado'];

    protected $table = 'valoracion_postgrado';

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