<?php

namespace App\Models;

use CodeIgniter\Model;

class AntecedentesDocModel extends Model
{
    //protected $table = 'materias';

    protected $primaryKey = 'id_ant_doc';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_valoracion','cant_anos','detalle_ant_doc','fecha','id_detalle_doc'];

    protected $table = 'antecedentes_docentes';

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