<?php

namespace App\Models;

use CodeIgniter\Model;

class AntecedentesLabModel extends Model
{
    //protected $table = 'materias';

    protected $primaryKey = 'id_ant_lab';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_valoracion','detalle_ant_lab','fecha','id_detalle_lab'];

    protected $table = 'antecedentes_laborales';

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