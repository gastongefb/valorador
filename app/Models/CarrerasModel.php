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

    /*
    public function getMaterias()
    {
        return $this->findAll();
    }

    public function getUnaMateria($id_m)
    {
        $db = \Config\Database::connect();
        $builder = $this->db->query("select * from materias where id_materia = $id_m");
        return $builder->getResult();
    }
    */
}