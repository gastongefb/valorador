<?php

namespace App\Controllers;

use App\Models\TitulosPostgradoModel;
use App\Models\OtrosTitulosModel;
use App\Models\CapacitacionModel;
use App\Models\ValoracionPostgradoModel;
use App\Models\ValoracionOtrosTitulosModel;

use App\Models\ValidacionModel;



use App\Models\AntecedentesDocModel;
use App\Models\AntecedentesLabModel;

use App\Models\OtrosAntecedentesDocModel;


class NuevoController extends BaseController
{
    public function cargar_datos()
    {
        // Cargar datos existentes en caso de que ya haya información en la sesión
        $data4 = [
            'datos_titulos' => session()->get('datos_paso1') ?? [],
            'datos_otros_titulos_nuevo' => session()->get('datos_paso1') ?? [],
            'datos_postgrado' => session()->get('datos_postgrado') ?? [],
            'datos_otros_titulos' => session()->get('datos_otros_titulos') ?? [],
            'datos_capacitacion' => session()->get('datos_capacitacion') ?? [],
        ];

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

        $sql3 = $db->table('condicion_docente');
        //$sql->select('id_carrera,nombre_carrera');
        $query3 = $sql3->get();
        $resultado3 = $query3->getResultArray();

        $data3 = ['titulo'=> 'Listado de Materias', 'condicion'=>$resultado3];
        


        //helper('form');
        //return view('cargarValoracion', $data+$data2+$data3);
        //return view('valoracion/cargar_titulo.php', $data+$data2+$data3);

        return view('cargar_datos', $data+$data2+$data3+$data4);  // Vista con las pestañas
    }

    public function guardarTitulo()
    {
        $datos = $this->request->getPost();
        if (empty($datos)) {
            return $this->response->setStatusCode(400, 'No se recibieron datos del formulario de títulos');
        }

        // Guardar datos en la sesión
        $datosSesion = session()->get('datos_paso1') ?? [];
        $datosSesion = array_merge($datosSesion, $datos);
        session()->set('datos_paso1', $datosSesion);

        return $this->response->setStatusCode(200, 'Datos de título guardados');
    }

    public function guardarOtrosTitulosNuevo()
    {
        $datos = $this->request->getPost();
        if (empty($datos)) {
            return $this->response->setStatusCode(400, 'No se recibieron datos del formulario de otros títulos');
        }

        // Guardar datos en la sesión
        $datosSesion = session()->get('datos_otros_titulos_nuevo') ?? [];
        $datosSesion = array_merge($datosSesion, $datos);
        session()->set('datos_otros_titulos_nuevo', $datosSesion);

        return $this->response->setStatusCode(200, 'Datos de otros títulos guardados');
    }

    public function guardarPostgrado()
    {
        $datos = $this->request->getPost();
        if (empty($datos)) {
            return $this->response->setStatusCode(400, 'No se recibieron datos del formulario de postgrado');
        }

        // Guardar datos en la sesión
        $datosSesion = session()->get('datos_postgrado') ?? [];
        $datosSesion = array_merge($datosSesion, $datos);
        session()->set('datos_postgrado', $datosSesion);

        return $this->response->setStatusCode(200, 'Datos de postgrado guardados');
    }

    public function guardarOtrosTitulos()
    {
        $datos = $this->request->getPost();
        if (empty($datos)) {
            return $this->response->setStatusCode(400, 'No se recibieron datos del formulario de otros títulos');
        }

        // Guardar datos en la sesión
        $datosSesion = session()->get('datos_otros_titulos') ?? [];
        $datosSesion = array_merge($datosSesion, $datos);
        session()->set('datos_otros_titulos', $datosSesion);

        return $this->response->setStatusCode(200, 'Datos de otros títulos guardados');
    }

    public function guardarCapacitacion()
    {
        $datos = $this->request->getPost();
        if (empty($datos)) {
            return $this->response->setStatusCode(400, 'No se recibieron datos del formulario de capacitación');
        }

        // Guardar datos en la sesión
        $datosSesion = session()->get('datos_capacitacion') ?? [];
        $datosSesion = array_merge($datosSesion, $datos);
        session()->set('datos_capacitacion', $datosSesion);

        return $this->response->setStatusCode(200, 'Datos de capacitación guardados');
    }

    // Método para guardar todos los datos en la base de datos al finalizar todas las secciones
    public function guardarDatosFinales()
    {
        
        // Recuperar los datos de la sesión
        //$datosPaso1 = session()->get('datos_paso1');
        //$datosPaso2 = session()->get('datos_paso2');
        //$datosPaso3 = session()->get('datos_paso3');
        //$datosPaso4 = session()->get('datos_paso4');
        //$datosPaso5 = session()->get('datos_paso5');
        //$datosPaso6 = session()->get('datos_paso6');
        //$datosPaso7 = session()->get('datos_paso7');

        $datosPaso1 = session()->get('datos_paso1');
        $datosPaso2 = session()->get('datos_postgrado');
        $datosPaso7 = session()->get('datos_otros_titulos');
        $datosPaso3 = session()->get('datos_capacitacion');

        
      

        // Iterar sobre los datos de paso 1
    if ($datosPaso1) {
        //echo "Datos del Paso 1:<br>";
        foreach ($datosPaso1 as $key => $value) {
            //echo "$key: $value<br>";
        }
    } else {
        //echo "No hay datos en el Paso 1.<br>";
    }

    $val = new ValidacionModel();

    if ($datosPaso1) {
        $val->insert($datosPaso1);
    }

    $post = new TitulosPostgradoModel();

    
    $ult = $val->obtenerUltimoCampoDeseado();
    // Inicializar el id_valoracion que vamos a asignar
    $nuevoIdValoracion = $ult;// ? $ult + 1 : 1;
    //$nuevoIdValoracion++;

    // Iterar sobre los datos de paso 2 y añadir el nuevo campo
    if (isset($datosPaso2['persons']) && is_array($datosPaso2['persons'])) {
        //echo "Datos del Paso 2:<br>";
        foreach ($datosPaso2['persons'] as &$person) {
                        
            // Agregar el campo 'id_valoracion'
            $person['id_valoracion'] = $nuevoIdValoracion;
            //echo "Id Valoración: " . $person['id_valoracion'] . "<br><br>";
        }
        unset($person); // Romper la referencia
    } else {
        echo "No hay datos en el Paso 2.<br>";
    }


     
    // Iterar sobre los datos de paso 3 y añadir el nuevo campo
    if (isset($datosPaso3['persons2']) && is_array($datosPaso3['persons2'])) {
        //echo "Datos del Paso 3:<br>";
        foreach ($datosPaso3['persons2'] as &$person2) {
           
            
            // Agregar el campo 'id_valoracion'
            $person2['id_valoracion'] = $nuevoIdValoracion;
            //echo "Id Valoración: " . $person2['id_valoracion'] . "<br><br>";
        }
        unset($person2); // Romper la referencia
    } else {
        echo "No hay datos en el Paso 3.<br>";
    }

   /*
    // Iterar sobre los datos de paso 4 y añadir el nuevo campo
    if (isset($datosPaso4['persons3']) && is_array($datosPaso4['persons3'])) {
        //echo "Datos del Paso 4:<br>";
        foreach ($datosPaso4['persons3'] as &$person3) {
            
            
            // Agregar el campo 'id_valoracion'
            $person3['id_valoracion'] = $nuevoIdValoracion;
            //echo "Id Valoración: " . $person3['id_valoracion'] . "<br><br>";
        }
        unset($person3); // Romper la referencia
    } else {
        //echo "No hay datos en el Paso 4.<br>";
    }

    // Iterar sobre los datos de paso 5 y añadir el nuevo campo
    if (isset($datosPaso5['persons4']) && is_array($datosPaso5['persons4'])) {
        //echo "Datos del Paso 5:<br>";
        foreach ($datosPaso5['persons4'] as &$person4) {
                       
            // Agregar el campo 'id_valoracion'
            $person4['id_valoracion'] = $nuevoIdValoracion;
            //echo "Id Valoración: " . $person4['id_valoracion'] . "<br><br>";
        }
        unset($person4); // Romper la referencia
    } else {
        //echo "No hay datos en el Paso 5.<br>";
    }

    // Iterar sobre los datos de paso 6 y añadir el nuevo campo
    if (isset($datosPaso6['persons6']) && is_array($datosPaso6['persons6'])) {
        //echo "Datos del Paso 5:<br>";
        foreach ($datosPaso6['persons6'] as &$person6) {
                       
            // Agregar el campo 'id_valoracion'
            $person6['id_valoracion'] = $nuevoIdValoracion;
            //echo "Id Valoración: " . $person4['id_valoracion'] . "<br><br>";
        }
        unset($person6); // Romper la referencia
    } else {
        //echo "No hay datos en el Paso 5.<br>";
    }
    */
     // Iterar sobre los datos de paso 7 y añadir el nuevo campo
     if (isset($datosPaso7['persons7']) && is_array($datosPaso7['persons7'])) {
        //echo "Datos del Paso 5:<br>";
        foreach ($datosPaso7['persons7'] as &$person7) {
                       
            // Agregar el campo 'id_valoracion'
            $person7['id_valoracion'] = $nuevoIdValoracion;
            //echo "Id Valoración: " . $person4['id_valoracion'] . "<br><br>";
        }
        unset($person7); // Romper la referencia
    } else {
        //echo "No hay datos en el Paso 5.<br>";
    }
    
        
        $valp = new ValoracionPostgradoModel();
        $cap = new CapacitacionModel();
        $ant_doc = new AntecedentesDocModel();
        $ant_lab = new AntecedentesLabModel();
        $otros_t = new ValoracionOtrosTitulosModel();
        $otros_ant_d = new OtrosAntecedentesDocModel();

        //echo"datos paso 6";
        //print_r($datosPaso6);
          // Preparar los datos para la inserción
        $datosParaInsertar = $datosPaso2['persons'] ?? [];
        $datosParaInsertar3 = $datosPaso3['persons2'] ?? [];
        //$datosParaInsertar4 = $datosPaso4['persons3'] ?? [];
        //$datosParaInsertar5 = $datosPaso5['persons4'] ?? [];
        //$datosParaInsertar6 = $datosPaso6['persons6'] ?? [];
        $datosParaInsertar7 = $datosPaso7['persons7'] ?? [];
        


        //print_r($datosParaInsertar);
        
        if (!empty($datosParaInsertar)) {
         foreach ($datosParaInsertar as $dato) {
            $valp->insert($dato);
         }
            
        }
        
        
        //print_r($datosParaInsertar3);
        if (!empty($datosParaInsertar3)) {
            foreach ($datosParaInsertar3 as $dato3) {
               $cap->insert($dato3);
            }
           }

        /*   
        if (!empty($datosParaInsertar4)) {
            foreach ($datosParaInsertar4 as $dato4) {
                $ant_doc->insert($dato4);
            }
           }   

        if (!empty($datosParaInsertar5)) {
            foreach ($datosParaInsertar5 as $dato5) {
                $ant_lab->insert($dato5);
            }
           }   
           
           //echo"datos para insertar";
           //print_r($datosParaInsertar6);   
        if (!empty($datosParaInsertar6)) {
            foreach ($datosParaInsertar6 as $dato6) {
                $otros_t->insert($dato6);
            }
           }    
         */ 
        if (!empty($datosParaInsertar7)) {
            foreach ($datosParaInsertar7 as $dato7) {
                $otros_ant_d->insert($dato7);
            }
           } 
             
        // Borrar los datos de la sesión después de guardar en la base de datos
        session()->remove('datos_paso1');
        session()->remove('datos_paso2');      
        session()->remove('datos_paso3');
        /*
        session()->remove('datos_paso4');
        session()->remove('datos_paso5');
        session()->remove('datos_paso6');
        */
        session()->remove('datos_paso7');
        
        //return "Datos guardados correctamente.";
        // Redirigir o devolver una respuesta según se haya completado
        return redirect()->to('cargar_datos')->with('message', 'Datos guardados correctamente');
        //return  redirect()->to(base_url().'');

    }
}
