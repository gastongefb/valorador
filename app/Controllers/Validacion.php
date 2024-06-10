<?php

namespace App\Controllers;

use App\Models\ValidacionModel;
use App\Models\MateriasModel;
use App\Models\ValoracionModel;
use App\Models\ValoracionPostgradoModel;
use App\Models\TitulosModel;
use App\Models\CondicionDocenteModel; 
use CodeIgniter\Controller;
use App\Models\TitulosPostgradoModel;
use App\Models\CapacitacionModel;
use App\Models\AntecedentesDocModel;
use App\Models\AntecedentesLabModel;

use App\Models\DetalleCapacitacionModel;
use App\Models\DetalleAntLabModel;
use App\Models\DetalleAntDocModel;

class Validacion extends BaseController
{

    // ESTO ES EL CONSTRUCTOR
    private $materiaModel;
    private $valoracionModel;
    private $vpModel;
    public function __construct()
    {
        $this->materiaModel = new MateriasModel();
        $this->valoracionModel = new ValidacionModel();
        $this->vpModel = new ValoracionPostgradoModel();
    }
     //

   

    
    public function index()
    {
        {
            $db = \Config\Database::connect();
    
            $sql = $db->table('validacion');
            $sql->select('id_validacion,dni,titulo,j1,j2,j3,id_validacion_condicion,nombre_materia');
            $sql->join('materias', 'id_materia_validacion = materias.id_materia')->where('dni', 27269774);
            $query = $sql->get();
            $resultado = $query->getResultArray();
            
    
            //echo $db->getLasTQuery(); //CON ESTO HAGO QUE SE VEA EN LA VISTA LA CONSULTA QUE ESTOY EJECUTANDO

    
            $data = ['titulo'=> 'Listado de Validaciones', 'validaciones'=>$resultado];
            return view('mostrarValidaciones', $data);
        }
    }

    public function busca($n, $m)
    {
        
        $crud = new ValidacionModel();
        $data = [
            'testos'=> $crud->getUnaValidacion($n),
            'variable'=>'funciona'
        ];
        

       //$mat = $crud->getUnaMateria();
        $crud2 = new MateriasModel();
        $data2 = [
            'testos2'=> $crud2->getUnaMateria($m),
            'variable2'=>'funciona'
        ];
        
        //$dato = $crud->getValidacion();

        echo view('validacion.php', $data + $data2);


        //echo view('validacion.php', $data);
    }

    public function busca2()
    {
        
        print_r($_POST);
    }

    //ASÍ LO HACE EL DEL CURSO
    public function buscarporid($id)
    {
        $cc = new MateriasModel();
        $re = $cc->find($id);



        $data2 = ['titulo'=> 'Buscar por un Id', 'materia'=> $re];

        
        return view('buscarporid.php', $data2);


        //$re = $cc->find($id);
        //echo view('buscarporid.php', $re); 

    }

    public function mostrar_validaciones()
    {

       /*
        $cc = new ValidacionModel();
        $re = $cc->find($dni);
        $data2 = ['titulo'=> 'Mostrar validaciones por DNI', 'validaciones'=> $re];
   
        return view('mostrarValidaciones.php', $data2);
        */

        {
            $db = \Config\Database::connect();

            $var = ($_POST['codigo']);
            //echo $var;
    
            $sql = $db->table('valoracion v');
            $sql->select('v.*, m.nombre_materia');
            $sql->join('materias m', 'v.id_materia_valoracion = m.id_materia')->where('dni', $var);
            $query = $sql->get();
            $resultado = $query->getResultArray();

            $sql2 = $db->table('valoracion v');
            $sql2->select('c.detalle_condicion');
            $sql2->join('condicion_docente c', 'v.id_condicion = c.id_condicion')->where('dni', $var);;
            $query2 = $sql2->get();
            $resultado2 = $query2->getResultArray();

            $sql3 = $db->table('valoracion v');
            $sql3->select('t.detalle_titulo');
            $sql3->join('titulos t', 'v.id_titulo = t.id_titulo')->where('dni', $var);
            $query3 = $sql3->get();
            $resultado3 = $query3->getResultArray();
            
    
            //echo $db->getLasTQuery(); //CON ESTO HAGO QUE SE VEA EN LA VISTA LA CONSULTA QUE ESTOY EJECUTANDO

    
            $data = ['validaciones'=>$resultado, 'validaciones2'=>$resultado2, 'validaciones3'=>$resultado3];
            return view('mostrarValoraciones', $data);
        }

    }

    public function mostrar_valoraciones()
    {
            $db = \Config\Database::connect();


            $validacionModel = new ValidacionModel();
            
            $mat = new MateriasModel();

            $tit = new TitulosModel();

            $con = new CondicionDocenteModel();

            $valpos = new ValoracionPostgradoModel();

            $Titulopostgrado = new TitulosPostgradoModel();
            $cap = new CapacitacionModel();
            $antLab = new AntecedentesLabModel();
            $antDoc = new AntecedentesDocModel();

        // Obtener todos los registros de la tabla 'valoracion'
        $registros = $validacionModel->findAll();

        //print_r($registros);
        //$titulo=[];
        // Iterar sobre los registros y trabajar con los valores
        foreach ($registros as $registro) {
            $dni = $registro['dni'];
            $idTitulo = $registro['id_titulo'];
            $j1 = $registro['j1'];
            $j2 = $registro['j2'];
            $j3 = $registro['j3'];
            $idMateriaValoracion = $registro['id_materia_valoracion'];
            $idCondicion = $registro['id_condicion'];
            $id_va = $registro['id_valoracion'];
            //echo $id_va;
            //echo" ";
            $tt = $mat->getNombreMateria($idMateriaValoracion);
            $materia = $tt[0]['nombre_materia'];
            
            $t = $tit->getDatosByCodigo($idTitulo);
            $titulo_det = $t[0]['detalle_titulo'];

            $c = $con->getDetalleConcidion($idCondicion);
            $condicion = $c[0]['detalle_condicion'];

            //PASOS PARA ARMAR EL PUNTAJE
            $val = $valpos->getCodigoById_valoracion($id_va);
            $suma = 0;
            foreach($val as $vv) {
                $valor = $vv['id_titulo_postgrado'];
                $puntaje = $Titulopostgrado->getCodigoByPuntaje($valor);
                $suma=$suma + $puntaje[0]['puntaje']; 
            }

            
            $datos_capacitacion = $cap->getCodigoById_detallae_cap($id_va);
            $ca = new DetalleCapacitacionModel();
            foreach ($datos_capacitacion as $c) {
                $capacitacion = $ca->find($c['id_detalle_capacitacion']);
                $suma = $suma + $capacitacion['puntaje'];
                
            }

            
            $datosTabla4 = $antLab->getDatosById_detalle_lab($id_va);//ACÁ PUEDE TRAER 
            $dl = new DetalleAntLabModel();
            foreach ($datosTabla4 as $de) {
               $detalle_la = $dl->find($de['id_detalle_lab']); // Suponiendo que el método find busca por la clave primaria
               $suma = $suma + $detalle_la['puntaje'];
            }

                        
            $datosTabla5 = $antDoc->getDatosById_ant_doc($id_va);//ACÁ PUEDE TRAER VARIOS
            $do = new DetalleAntDocModel();
            foreach ($datosTabla5 as $dc) {
               $detalle_do = $do->find($dc['id_detalle_doc']); // Suponiendo que el método find busca por la clave primaria
               $suma = $suma + $detalle_do['puntaje'];
            }
        
            //PUNTAJE DEL TÍTULO DE BASE
            
            $datosTabla2 = $tit->getDatosByCodigo($idTitulo);//ACÁ TRAE UN DATO
            $vv = $datosTabla2[0]['detalle_titulo']; 
            $vv2 = $datosTabla2[0]['puntaje']; 
        
            $suma = $suma + $vv2;
    


            //ARMO UN ARREGLO CON TODOS LOS DATOS QUE NECESITO MOSTRAR
          
            $titulo[] = [
                'dni' => $dni,
                'titulo_det' => $titulo_det,
                'j1' => $j1,
                'j2' => $j2,
                'j3' => $j3,
                'materia' => $materia,
                'condicion' => $condicion,
                'puntaje' => $suma,

            ];

          
        } 
       
        //PASAMOS LOS DATOS A LA VISTA  
        return view('mostrarValoraciones', ['datosTabla1' => $titulo,]);
    

         /*
        
     */  

    }

    public function Mostrar_Valoraciones_Por_Materia()
    {
        $db = \Config\Database::connect();

    
        $sql2 = $db->table('materias');
        //$sql->select('id_carrera,nombre_carrera');
        $query2 = $sql2->get();
        $resultado2 = $query2->getResultArray();

        $data2 = ['titulo'=> 'Listado de Materias', 'materias'=>$resultado2];
        //return view('mostrarValidaciones', $data);
      


        helper('form');
        //return view('cargarValoracion', $data+$data2+$data3);
        return view('Mostrar_Valoraciones_Por_Materia2', $data2);
    }

    public function Mostrar_Valoraciones_Por_Materia3()
    {
         // Recuperar los datos del formulario
         $datos = $this->request->getPost();

        //ACA TENGO QUE HACER ALGO PARECIDO A mostrar_valoraciones(), PERO PARA LA MATERIA PARTICULAR

        $db = \Config\Database::connect();


        $validacionModel = new ValidacionModel();
        
        $mat = new MateriasModel();

        $tit = new TitulosModel();

        $con = new CondicionDocenteModel();

        $valpos = new ValoracionPostgradoModel();

        $Titulopostgrado = new TitulosPostgradoModel();
        $cap = new CapacitacionModel();
        $antLab = new AntecedentesLabModel();
        $antDoc = new AntecedentesDocModel();

    // Obtener todos los registros de la tabla 'valoracion'
    $registros = $validacionModel->getValidacionesPorMateria($datos);

    //print_r($registros);
    //$titulo=[];
    // Iterar sobre los registros y trabajar con los valores
    foreach ($registros as $registro) {
        $dni = $registro['dni'];
        $idTitulo = $registro['id_titulo'];
        $j1 = $registro['j1'];
        $j2 = $registro['j2'];
        $j3 = $registro['j3'];
        $idMateriaValoracion = $registro['id_materia_valoracion'];
        $idCondicion = $registro['id_condicion'];
        $id_va = $registro['id_valoracion'];
        //echo $id_va;
        //echo" ";
        $tt = $mat->getNombreMateria($idMateriaValoracion);
        $materia = $tt[0]['nombre_materia'];
        
        $t = $tit->getDatosByCodigo($idTitulo);
        $titulo_det = $t[0]['detalle_titulo'];

        $c = $con->getDetalleConcidion($idCondicion);
        $condicion = $c[0]['detalle_condicion'];

        //PASOS PARA ARMAR EL PUNTAJE
        $val = $valpos->getCodigoById_valoracion($id_va);
        $suma = 0;
        foreach($val as $vv) {
            $valor = $vv['id_titulo_postgrado'];
            $puntaje = $Titulopostgrado->getCodigoByPuntaje($valor);
            $suma=$suma + $puntaje[0]['puntaje']; 
        }

        
        $datos_capacitacion = $cap->getCodigoById_detallae_cap($id_va);
        $ca = new DetalleCapacitacionModel();
        foreach ($datos_capacitacion as $c) {
            $capacitacion = $ca->find($c['id_detalle_capacitacion']);
            $suma = $suma + $capacitacion['puntaje'];
            
        }

        
        $datosTabla4 = $antLab->getDatosById_detalle_lab($id_va);//ACÁ PUEDE TRAER 
        $dl = new DetalleAntLabModel();
        foreach ($datosTabla4 as $de) {
           $detalle_la = $dl->find($de['id_detalle_lab']); // Suponiendo que el método find busca por la clave primaria
           $suma = $suma + $detalle_la['puntaje'];
        }

                    
        $datosTabla5 = $antDoc->getDatosById_ant_doc($id_va);//ACÁ PUEDE TRAER VARIOS
        $do = new DetalleAntDocModel();
        foreach ($datosTabla5 as $dc) {
           $detalle_do = $do->find($dc['id_detalle_doc']); // Suponiendo que el método find busca por la clave primaria
           $suma = $suma + $detalle_do['puntaje'];
        }
    
        //PUNTAJE DEL TÍTULO DE BASE
        
        $datosTabla2 = $tit->getDatosByCodigo($idTitulo);//ACÁ TRAE UN DATO
        $vv = $datosTabla2[0]['detalle_titulo']; 
        $vv2 = $datosTabla2[0]['puntaje']; 
    
        $suma = $suma + $vv2;



        //ARMO UN ARREGLO CON TODOS LOS DATOS QUE NECESITO MOSTRAR
      
        $titulo[] = [
            'dni' => $dni,
            'titulo_det' => $titulo_det,
            'j1' => $j1,
            'j2' => $j2,
            'j3' => $j3,
            'materia' => $materia,
            'condicion' => $condicion,
            'puntaje' => $suma,

        ];

      
    } 
   
    //PASAMOS LOS DATOS A LA VISTA  
    return view('mostrarValoraciones', ['datosTabla1' => $titulo,]);


     /*
    
 */  

        
    }

    public function insertar()
    {
        $arreglo = [
        
            'nombre_materia'=> "matematica III",
            'cuatrimestre'=> "2"
        ];

        //echo $this->materiaModel->insert($arreglo); // DEVUELVE EL ID DEL REGISTRO INGRESADO
        echo $this->materiaModel->insert($arreglo ,false); //SI LO PONGO ASÍ ME DEVUELVE 1 SI INSERTO Y 0 SINO
        echo $this->materiaModel->getInsertID(); //CON ESTO OBTENGO EL ÚLTIMO ID INSERTADO
    }

    public function insertar_materia1()
    {

        $db = \Config\Database::connect();

    
            $sql = $db->table('carreras');
            //$sql->select('id_carrera,nombre_carrera');
            $query = $sql->get();
            $resultado = $query->getResultArray();
            
    
            //echo $db->getLasTQuery(); //CON ESTO HAGO QUE SE VEA EN LA VISTA LA CONSULTA QUE ESTOY EJECUTANDO

    
            $data = ['titulo'=> 'Listado de Validaciones', 'carreras'=>$resultado];
            //return view('mostrarValidaciones', $data);

        helper('form');
        return view('cargar_materia',$data);

    }

    public function mostrarPlanes()
    {

        $db = \Config\Database::connect();

    
            $sql = $db->table('carreras');
            //$sql->select('id_carrera,nombre_carrera');
            $query = $sql->get();
            $resultado = $query->getResultArray();
            
    
            //echo $db->getLasTQuery(); //CON ESTO HAGO QUE SE VEA EN LA VISTA LA CONSULTA QUE ESTOY EJECUTANDO

    
            $data = ['titulo'=> 'Listado de Validaciones', 'carreras'=>$resultado];
            //return view('mostrarValidaciones', $data);

        helper('form');
        return view('mostrarPlanes2',$data);

    }

    public function mostrarPlanes3()
    {


        {
            $db = \Config\Database::connect();

            $var = ($_POST['id_carrera']);
            //echo $var;
            
            $sql = $db->table('materias m');
            $sql->select('m.*');
            $sql->where('id_carrera_materia', $var);
            $query = $sql->get();
            $resultado = $query->getResultArray();
            
    
            //echo $db->getLasTQuery(); //CON ESTO HAGO QUE SE VEA EN LA VISTA LA CONSULTA QUE ESTOY EJECUTANDO

    
            $data = ['titulo'=> 'Listado de Validaciones', 'validaciones'=>$resultado];
            return view('mostrarPlanes4', $data);
            
        }

    }

    public function insertar_materia2()
    {

        $n = ($_POST['nombre']);
        $c = ($_POST['cuatrimestre']);
        $cc = ($_POST['id_carrera']);
        //echo $var;

        $arreglo = [
        
            'nombre_materia'=> $n,
            'cuatrimestre'=> $c,
            'id_carrera_materia'=> $cc
        ];

        //echo $this->materiaModel->insert($arreglo); // DEVUELVE EL ID DEL REGISTRO INGRESADO
        echo $this->materiaModel->insert($arreglo ,false); //SI LO PONGO ASÍ ME DEVUELVE 1 SI INSERTO Y 0 SINO
        echo $this->materiaModel->getInsertID(); //CON ESTO OBTENGO EL ÚLTIMO ID INSERTADO

        return  redirect()->to(base_url().'/');

        //redirect(base_url('http://localhost/framework_ci4_ministerio/public/'));
    }

    public function actualizar()
    {
        $arreglo = [
        
            'nombre_materia'=> "matematica I",
            'cuatrimestre'=> "2"
        ];

        
        echo $this->materiaModel->update(5, $arreglo); //ACÁ NECESITO PASARLE EL ID DE LA MATERIA , EN ESTE CASO ES EL 11
        //echo $this->materiaModel->update([5,9], $arreglo);//SI QUIERO MOIFICAR VARIOS REGISTROS A LA VEZ, AGREGO UN ARREGLO CON LOS ID A MODIFICAR    
    }

    public function eliminar()
    {
               
        echo $this->materiaModel->delete(11); // RECORDAR QUE PARA ELIMINAR ES NECESARIO MODIFICAR LA PEOPIEDAD  $useSoftDeletes = false;
                                              // DEL MODELO Y COLOCARLA EN false. SI ESTÁ EN TRUE SOLO SE VA A GUARDAR LA FECHA DE ELIMINACIÓN,
                                              // PERO PARA ESTO VAMOS A TENER QUE TENER UN CAMPO fecha_de_eliminacion EN LA TABLA 
                                              //PARA ELIMINAR TAMBIÉN PODEMOS PASAR UN ARREGLO DE VARIOS ELEMENTOS [1,4,8]
                                              //SI HAGO EL SOFTDELETE LUEGO CUANDO EJECUTE EL findALL() NO ME VA MOSTRAR LOS REGISTROS ELIMINADOS, PARA 
                                              //PODER VER ESOS REGISTROS DEBO EJECUTAR withDleted->findAll(), SI QUIERO VER SOLO LOS ELIMINADOS
                                              //DEBO EJECUTAR onlyDeleted->findAll()
                                              //SI QUIERO ELIMINAR LOS ARCHIVOS ELIMINADOS CON softDeleted EJECUTO purgeDeleted() Y LOS VOY A ELIMINAR
                                              //EFECTIVAMENTE DE LA TABLA
    }

    public function mostrar_materias()
    {
        $db = \Config\Database::connect();

        $query = $db->table('materias')
        //->where('cuatrimestre', 1)
        //->where('id_materia <', 5)
        ->orderBy('nombre_materia', 'asc')
        ->get();
        $resultado = $query->getResultArray();// SI PONGO getResult() ME VA A DEVOLVER EL RESULTADO EN OBJETOS


        //echo $db->getLasTQuery(); //CON ESTO HAGO QUE SE VEA EN LA VISTA LA CONSULTA QUE ESTOY EJECUTANDO

        $data = ['titulo'=> 'Listado de Materias', 'materias'=>$resultado];
        return view('mostrarMaterias', $data);
    }

    public function nuevo()
    {
        helper('form');
        return view('nuevo');

    }

    public function guardar()
    {
        $var = ($_POST['codigo']);
        echo $var;
    }


    public function cargarValoracion()
    {
        $db = \Config\Database::connect();

    
        $sql = $db->table('titulos');
        //$sql->select('id_carrera,nombre_carrera');
        $query = $sql->get();
        $resultado = $query->getResultArray();

        $data = ['titulo'=> 'Listado de Títulos', 'titulos'=>$resultado];
        //return view('mostrarValidaciones', $data);

        $sql2 = $db->table('materias');
        //$sql->select('id_carrera,nombre_carrera');
        $query2 = $sql2->get();
        $resultado2 = $query2->getResultArray();

        $data2 = ['titulo'=> 'Listado de Materias', 'materias'=>$resultado2];
        //return view('mostrarValidaciones', $data);
        

        //echo $db->getLasTQuery(); //CON ESTO HAGO QUE SE VEA EN LA VISTA LA CONSULTA QUE ESTOY EJECUTANDO


        

        helper('form');
        return view('cargarValoracion', $data+$data2);
    }

    public function cargarValoracion2()
    {

        $db = \Config\Database::connect();


      
        
        $p = ($_POST['id_titulo']);
        $di = ($_POST['diplomatura']);
        $cant = ($_POST['cantidad_dipo']);
        $es = ($_POST['especializacion']);
        $ce = ($_POST['cant_espe']);

        $id_m = ($_POST['id_materia']);

        $dd = ($_POST['detalle_dipo']);
        $de = ($_POST['detalle_espe']);

        $f_dipo=($_POST['fecha_dipo']);
        $f_espe=($_POST['fecha_espe']);

        echo $p;

        echo $di;

        echo $cant;
        echo $es;
        echo $ce;

       
       
        //echo $var;
      
        $arreglo = [
        
            'dni'=> 27269774,
            'id_titulo'=>$p,
            'j1'=>23568978,
            'j2'=>25368596,
            'j3'=>45784578,
            'id_materia_valoracion'=>$id_m,
            'id_condicion'=>1
        ];

      

        //echo $this->materiaModel->insert($arreglo); // DEVUELVE EL ID DEL REGISTRO INGRESADO
        echo $this->valoracionModel->insert($arreglo ,false); //SI LO PONGO ASÍ ME DEVUELVE 1 SI INSERTO Y 0 SINO
        $ii = $this->valoracionModel->getInsertID(); //CON ESTO OBTENGO EL ÚLTIMO ID INSERTADO


        /*
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $emails = $_POST["emails"];
            foreach ($emails as $email) {
                echo "Email: " . $email . "<br>";
            }

            $emails2 = $_POST["emails2"];
            foreach ($emails2 as $email2) {
                echo "Email: " . $email2 . "<br>";
            }
        }
        */
      
        if ($di == 'diplomatura'){

            echo "entro por diplomatura";

        $query2 = $db->table('titulos_postgrado')
        ->where('detalle_postgrado', $di)
        //->where('id_materia <', 5)
        //->orderBy('nombre_materia', 'asc')
        ->get();
        $resultado3 = $query2->getResultArray();

        $data3 = ['titulo'=> 'Listado de Materias', 'mm'=>$resultado3];
            
        //echo $data3[mm=>'id_postgrado'];

        foreach($resultado3 as $r):

            $ddd = $r['id_titulo_postgrado'];

        endforeach;    
        //$hh = $resultado3;
       
            $post = [
        
                'id_valoracion'=>$ii,
                'detalle_valoracion_postgrado'=>$dd,
                'fecha'=>$f_dipo,
                'id_titulo_postgrado'=> $ddd
               
            ];

            echo $this->vpModel->insert($post ,false);

            //echo $data3=>resultados3;
      
        }
        
        //echo $hh;

        if ($es == 'especializacion'){

            echo "entro por especializacion";

            $query2 = $db->table('titulos_postgrado')
            ->where('detalle_postgrado', $es)
            //->where('id_materia <', 5)
            //->orderBy('nombre_materia', 'asc')
            ->get();
            $resultado3 = $query2->getResultArray();
            $data3 = ['titulo'=> 'Listado de Materias', 'mm'=>$resultado3];

            foreach($resultado3 as $r):

                $ddd = $r['id_titulo_postgrado'];
    
            endforeach; 
            
        //$hh = $resultado3;

            $post = [
        
                'id_valoracion'=>$ii,
                'detalle_valoracion_postgrado'=>$dd,
                'fecha'=>$f_dipo,
                'id_titulo_postgrado'=> $ddd
               
            ];
    
            echo $this->vpModel->insert($post ,false);
        }
        //SI LO PONGO ASÍ ME DEVUELVE 1 SI INSERTO Y 0 SINO
        //$ii = $this->valoracionModel->getInsertID();
        //echo "$ii";
        return  redirect()->to(base_url().'/');

        //redirect(base_url('http://localhost/framework_ci4_ministerio/public/cargarValoracion'));
    }


}
