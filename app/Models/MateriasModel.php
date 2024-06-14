<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriasModel extends Model
{
    protected $table = 'materias';

    protected $primaryKey = 'id_materia';

    protected $useAutoIncrement = true;

    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre_materia', 'cuatrimestre','id_carrera_materia'];

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

    public function getNombreMateria($codigo)
   {
       $builder = $this->db->table($this->table);
       $builder->select('*');
       $builder->where('id_materia', $codigo);
       $query = $builder->get();

       return $query->getResultArray(); // Devuelve los resultados como un array asociativo
   }

}