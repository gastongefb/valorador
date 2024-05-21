<?php
// app/Controllers/DynamicInputs.php

namespace App\Controllers;

use App\Models\PersonModel;
use CodeIgniter\Controller;
use App\Models\ValoracionPostgradoModel;
use App\Models\ValidacionModel;
use App\Models\TitulosPostgradoModel;
use App\Models\CapacitacionModel;
use App\Models\AntecedentesDocModel;
use App\Models\AntecedentesLabModel;

//PRUEBA DE PAGINACION
use App\Models\paginacion\Model1;
use App\Models\paginacion\Model2;




class PersonController extends Controller
{
    
    private $vpModel;
    //private $valModel;
    public function __construct()
    {
       $this->vpModel = new ValoracionPostgradoModel();
       //$this->valModel = new ValidacionModel();
    }

    
    public function index()
    {
        return view('add_persons');
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

        $sql3 = $db->table('condicion_docente');
        //$sql->select('id_carrera,nombre_carrera');
        $query3 = $sql3->get();
        $resultado3 = $query3->getResultArray();

        $data3 = ['titulo'=> 'Listado de Materias', 'condicion'=>$resultado3];
        

        //echo $db->getLasTQuery(); //CON ESTO HAGO QUE SE VEA EN LA VISTA LA CONSULTA QUE ESTOY EJECUTANDO

        
        $modelo = new ValidacionModel();
                
        $ultimoCampoDeseado = $modelo->obtenerUltimoCampoDeseado();

        // Pasar $ultimoCampoDeseado a la vista
        //$data_id_valoracion['ultimoCampoDeseado'] = $ultimoCampoDeseado;

              

        helper('form');
        return view('cargarValoracion', $data+$data2+$data3);
    }
    
    /*
    public function save()
    {
        $valPosModel = new ValoracionPostgradoModel();
        $personModel = new PersonModel();

        $valModel2 = new ValidacionModel();
        //$val = $valModel2->getLastInsertedId();

        //CON ESTO CONSULTO LA FUNCION DEL MODELO ValidacionModel PARA QUE ME TRAIGA EL ULTIMO ID DE LA TABLA
        $ult=$valModel2->obtenerUltimoCampoDeseado();
        echo "El último ID insertado con la otra funcion: $ult";
        $ult = $ult + 1;
        

        // Recibimos los datos del formulario
        $personsData = $this->request->getPost('persons');

        $otraTablaModel = new TitulosPostgradoModel();
        // Insertamos cada persona en la base de datos
        foreach ($personsData as &$person) { // Usamos "&" para pasar por referencia y modificar directamente el arreglo original
            // Obtener el valor seleccionado del campo de selección
            $opcionSeleccionada = $person['opciones'];
            // Extraer solo el número de la cadena
            $numeroOpcion = intval(preg_replace('/[^0-9]+/', '', $opcionSeleccionada));
            echo"entro en el foreach";
            echo $numeroOpcion;

            //$person['opciones'] = $numeroOpcion;
            // Suponiendo que tienes un modelo para la tabla de otra tabla relacionada por el DNI
            // Aquí obtienes el dato de la otra tabla basado en el DNI de la persona
            //$datoRelacionado = $otraTablaModel->obtenerDatoRelacionadoPorDNI($person['dni']); // Por ejemplo
            // Agregar el dato relacionado al array de datos de la persona
           //echo $datoRelacionado;
           //$person['nuevo_dato'] = $datoRelacionado;

           $person['id_valoracion'] = $ult;
           $person['id_titulo_postgrado'] = $numeroOpcion;
           //$personModel->insert($person);
           $valPosModel->insert($person);
           
            
        }

        
        // Insertar la persona en la base de datos
        //$personModel->insert($person);

        //return redirect()->to(base_url('/'));
    }
    */

    public function cargarValoracion2()
    {

        //ACA EMPIEZA EL PROCESO PARA GUARDAR EN LA TABLA `valoracion`
        $db = \Config\Database::connect();

        $p = ($_POST['id_titulo']);

        $dni = ($_POST['dni']);
        $j1 = ($_POST['j1']);
        $j2 = ($_POST['j2']);
        $j3 = ($_POST['j3']);
        $id_m = ($_POST['id_materia']);
        $condicion = ($_POST['id_condicion']);
      
        $arreglo = [
        
            'dni'=>$dni,
            'id_titulo'=>$p,
            'j1'=>$j1,
            'j2'=>$j2,
            'j3'=>$j3,
            'id_materia_valoracion'=>$id_m,
            'id_condicion'=>$condicion
        ]; 

        $valoracionModel = new ValidacionModel();
       
        //echo $this->materiaModel->insert($arreglo); // DEVUELVE EL ID DEL REGISTRO INGRESADO
        $valoracionModel->insert($arreglo ,false); //SI LO PONGO ASÍ ME DEVUELVE 1 SI INSERTO Y 0 SINO
        //$ii = $this->valoracionModel->getInsertID(); //CON ESTO OBTENGO EL ÚLTIMO ID INSERTADO



        //ACA EMPIEZA EL PROCESO PARA GUARDAR EN LA TABLA `valoracion_postgrado`

        $valPosModel = new ValoracionPostgradoModel();
        $personModel = new PersonModel();

        $valModel2 = new ValidacionModel();
        //$val = $valModel2->getLastInsertedId();

        //CON ESTO CONSULTO LA FUNCION DEL MODELO ValidacionModel PARA QUE ME TRAIGA EL ULTIMO ID DE LA TABLA
        $ult=$valModel2->obtenerUltimoCampoDeseado();
        echo "El último ID insertado con la otra funcion: $ult";
        //$ult = $ult + 1;
        

        // Recibimos los datos del formulario
        $personsData = $this->request->getPost('persons');

        $otraTablaModel = new TitulosPostgradoModel();
        // Insertamos cada persona en la base de datos
        foreach ($personsData as &$person) { // Usamos "&" para pasar por referencia y modificar directamente el arreglo original
            // Obtener el valor seleccionado del campo de selección
            echo"ENTRO POR FOR DE TITULO DE POSTGRADO";
            $opcionSeleccionada = $person['opciones'];
            // Extraer solo el número de la cadena
            $numeroOpcion = intval(preg_replace('/[^0-9]+/', '', $opcionSeleccionada));
            //echo"entro en el foreach";
            //echo $numeroOpcion;

           $person['id_valoracion'] = $ult;
           $person['id_titulo_postgrado'] = $numeroOpcion;
           //$personModel->insert($person);
           $valPosModel->insert($person);
        }  


        //ACA EMPIEZA EL PROCESO PARA GUARDAR EN LA TABLA `capacitacion`

        $capModel = new CapacitacionModel();

        $capsData = $this->request->getPost('caps');

        $otraTablaModel = new TitulosPostgradoModel();
        // Insertamos cada persona en la base de datos

        if ($capsData !== null) {
        foreach ($capsData as &$cap) { // Usamos "&" para pasar por referencia y modificar directamente el arreglo original
            // Obtener el valor seleccionado del campo de selección

            echo"ENTRO POR FOR";
            $opcionSeleccionada = $cap['opciones'];
            // Extraer solo el número de la cadena
            $numeroOpcion = intval(preg_replace('/[^0-9]+/', '', $opcionSeleccionada));
            //echo"entro en el foreach";
            //echo $numeroOpcion;

           $cap['id_valoracion'] = $ult;
           $cap['id_detalle_capacitacion'] = $numeroOpcion;
           //$personModel->insert($person);
           $capModel->insert($cap);
        }
        } else {
            echo"el arreglo caps viene vacío";
        // Maneja la situación cuando no se reciben datos de capacitaciones
        // Puedes mostrar un mensaje de error o realizar cualquier otra acción necesaria
        }
        

        //ACA EMPIEZA EL PROCESO PARA GUARDAR EN LA TABLA `antecedentes_docentes`

        //$valPosModel = new ValoracionPostgradoModel();
        //$personModel = new PersonModel();

        //$valModel2 = new ValidacionModel();
        //$val = $valModel2->getLastInsertedId();

        //CON ESTO CONSULTO LA FUNCION DEL MODELO ValidacionModel PARA QUE ME TRAIGA EL ULTIMO ID DE LA TABLA
        //$ult=$valModel2->obtenerUltimoCampoDeseado();
        //echo "El último ID insertado con la otra funcion: $ult";
        //$ult = $ult + 1;
        
        $antModel = new AntecedentesDocModel();
        // Recibimos los datos del formulario
        $antData = $this->request->getPost('doc');

        $otraTablaModel = new TitulosPostgradoModel();
        // Insertamos cada persona en la base de datos
        if ($antData !== null) {
        foreach ($antData as &$ant) { // Usamos "&" para pasar por referencia y modificar directamente el arreglo original
            // Obtener el valor seleccionado del campo de selección
            $opcionSeleccionada = $ant['opciones'];
            // Extraer solo el número de la cadena
            $numeroOpcion = intval(preg_replace('/[^0-9]+/', '', $opcionSeleccionada));
            //echo"entro en el foreach";
            //echo $numeroOpcion;

           $ant['id_valoracion'] = $ult;
           $ant['cant_anos'] = $ult;
           $ant['id_detalle_doc'] = $numeroOpcion;
           //$personModel->insert($person);
           $antModel->insert($ant);
        }  
        }
        else {
            echo"el arreglo antecedentes viene vacío";
        
        }

        

        return  redirect()->to(base_url().'/');

        //redirect(base_url('http://localhost/framework_ci4_ministerio/public/cargarValoracion'));
    }




    //PRUEBA DE PAGINACION

    //PRUEBA DE PAGINACION

    //PRUEBA DE PAGINACION

    public function paso1()
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

        $sql3 = $db->table('condicion_docente');
        //$sql->select('id_carrera,nombre_carrera');
        $query3 = $sql3->get();
        $resultado3 = $query3->getResultArray();

        $data3 = ['titulo'=> 'Listado de Materias', 'condicion'=>$resultado3];
        


        helper('form');
        //return view('cargarValoracion', $data+$data2+$data3);
        return view('valoracion/cargar_titulo.php', $data+$data2+$data3);
    }

    public function guardarTitulo()
    {
        // Recuperar los datos del formulario
        $datos = $this->request->getPost();

        print_r($datos);

        if (empty($datos)) {
            throw new \Exception("No se recibieron datos del formulario titulo");
        }

        // Comprobar si existen datos en la sesión
        $datosSesion = session()->get('datos_paso1') ?? [];

        // Fusionar los datos actuales con los existentes en la sesión
        $datosSesion = array_merge($datosSesion, $datos);

        // Guardar los datos en la sesión
        session()->set('datos_paso1', $datosSesion);

        return redirect()->to('paso2');
    }
    
    public function paso2()
    {
        return view('valoracion/cargar_titulo_postgrado');
    }

    public function guardarPostgrado()
    {
        // Recuperar los datos del formulario
        $datos = $this->request->getPost();

        print_r($datos);

        if (empty($datos)) {
            throw new \Exception("No se recibieron datos del formulario postgrado");
        }

        // Comprobar si existen datos en la sesión
        $datosSesion = session()->get('datos_paso2') ?? [];

        // Fusionar los datos actuales con los existentes en la sesión
        $datosSesion = array_merge($datosSesion, $datos);

        // Guardar los datos en la sesión
        session()->set('datos_paso2', $datosSesion);

        //return redirect()->to('paso3');
        return redirect()->to('paso3');
    }
    
    public function paso3()
    {
        return view('valoracion/cargar_capacitacion');
    }

    public function guardarCapacitacion()
    {
        // Recuperar los datos del formulario
        $datos = $this->request->getPost();

        // Comprobar si existen datos en la sesión
        $datosSesion = session()->get('datos_paso3') ?? [];

        // Fusionar los datos actuales con los existentes en la sesión
        $datosSesion = array_merge($datosSesion, $datos);

        // Guardar los datos en la sesión
        session()->set('datos_paso3', $datosSesion);

        return redirect()->to('paso4');
    }

   
    public function paso4()
    {
        return view('valoracion/cargar_ant_docentes');
    }

    public function guardarAntDocentes()
    {
        // Recuperar los datos del formulario
        $datos = $this->request->getPost();

        // Comprobar si existen datos en la sesión
        $datosSesion = session()->get('datos_paso4') ?? [];

        // Fusionar los datos actuales con los existentes en la sesión
        $datosSesion = array_merge($datosSesion, $datos);

        // Guardar los datos en la sesión
        session()->set('datos_paso4', $datosSesion);

        //return redirect()->to('paso5');
        return redirect()->to('paso5');
    }
    
    public function paso5()
    {
        return view('valoracion/cargar_ant_laborales');
    }

    public function guardarAntLab()
    {
        // Recuperar los datos del formulario
        $datos = $this->request->getPost();

        // Comprobar si existen datos en la sesión
        $datosSesion = session()->get('datos_paso5') ?? [];

        // Fusionar los datos actuales con los existentes en la sesión
        $datosSesion = array_merge($datosSesion, $datos);

        // Guardar los datos en la sesión
        session()->set('datos_paso5', $datosSesion);

        //return redirect()->to('paso5');
        return redirect()->to('confirmacion');
    }

  
    public function confirmar()
    {
        // Recuperar los datos de la sesión
        $datosPaso1 = session()->get('datos_paso1');
        $datosPaso2 = session()->get('datos_paso2');
        $datosPaso3 = session()->get('datos_paso3');
        $datosPaso4 = session()->get('datos_paso4');
        $datosPaso5 = session()->get('datos_paso5');
        //$datosPaso3 = session()->get('datos_paso3');
        //$datosPaso4 = session()->get('datos_paso4');
        //$datosPaso5 = session()->get('datos_paso5');

        //$m1 = new Model1();
        //$m2 = new Model2();

        print_r($datosPaso1);
        print_r($datosPaso2);
        print_r($datosPaso3);

        // Iterar sobre los datos de paso 1
    if ($datosPaso1) {
        echo "Datos del Paso 1:<br>";
        foreach ($datosPaso1 as $key => $value) {
            echo "$key: $value<br>";
        }
    } else {
        echo "No hay datos en el Paso 1.<br>";
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

    // Iterar sobre los datos de paso 2
    // Iterar sobre los datos de paso 2 y añadir el nuevo campo
    if (isset($datosPaso2['persons']) && is_array($datosPaso2['persons'])) {
        echo "Datos del Paso 2:<br>";
        foreach ($datosPaso2['persons'] as &$person) {
            echo "Opción: " . $person['id_titulo_postgrado'] . "<br>";
            echo "Detalle: " . $person['detalle_valoracion_postgrado'] . "<br>";
            echo "Fecha: " . $person['fecha'] . "<br><br>";
            
            // Agregar el campo 'id_valoracion'
            $person['id_valoracion'] = $nuevoIdValoracion;
            echo "Id Valoración: " . $person['id_valoracion'] . "<br><br>";
        }
        unset($person); // Romper la referencia
    } else {
        echo "No hay datos en el Paso 2.<br>";
    }

    // Iterar sobre los datos de paso 3
    // Iterar sobre los datos de paso 3 y añadir el nuevo campo
    if (isset($datosPaso3['persons2']) && is_array($datosPaso3['persons2'])) {
        echo "Datos del Paso 3:<br>";
        foreach ($datosPaso3['persons2'] as &$person2) {
            echo "Opción: " . $person2['id_detalle_capacitacion'] . "<br>";
            echo "Detalle: " . $person2['detalle_capacitacion'] . "<br>";
            echo "Fecha: " . $person2['fecha'] . "<br><br>";
            
            // Agregar el campo 'id_valoracion'
            $person2['id_valoracion'] = $nuevoIdValoracion;
            echo "Id Valoración: " . $person2['id_valoracion'] . "<br><br>";
        }
        unset($person2); // Romper la referencia
    } else {
        echo "No hay datos en el Paso 3.<br>";
    }

    // Iterar sobre los datos de paso 4
    // Iterar sobre los datos de paso 4 y añadir el nuevo campo
    if (isset($datosPaso4['persons3']) && is_array($datosPaso4['persons3'])) {
        echo "Datos del Paso 4:<br>";
        foreach ($datosPaso4['persons3'] as &$person3) {
            echo "Opción: " . $person3['id_detalle_doc'] . "<br>";
            echo "Detalle: " . $person3['detalle_ant_doc'] . "<br>";
            echo "Fecha: " . $person3['fecha'] . "<br><br>";
            
            // Agregar el campo 'id_valoracion'
            $person3['id_valoracion'] = $nuevoIdValoracion;
            echo "Id Valoración: " . $person3['id_valoracion'] . "<br><br>";
        }
        unset($person3); // Romper la referencia
    } else {
        echo "No hay datos en el Paso 4.<br>";
    }

    // Iterar sobre los datos de paso 5
    // Iterar sobre los datos de paso 5 y añadir el nuevo campo
    if (isset($datosPaso5['persons4']) && is_array($datosPaso5['persons4'])) {
        echo "Datos del Paso 5:<br>";
        foreach ($datosPaso5['persons4'] as &$person4) {
            echo "Opción: " . $person4['id_detalle_lab'] . "<br>";
            echo "Detalle: " . $person4['detalle_ant_lab'] . "<br>";
            echo "Fecha: " . $person4['fecha'] . "<br><br>";
            
            // Agregar el campo 'id_valoracion'
            $person4['id_valoracion'] = $nuevoIdValoracion;
            echo "Id Valoración: " . $person4['id_valoracion'] . "<br><br>";
        }
        unset($person4); // Romper la referencia
    } else {
        echo "No hay datos en el Paso 5.<br>";
    }

        
        $valp = new ValoracionPostgradoModel();
        $cap = new CapacitacionModel();
        $ant_doc = new AntecedentesDocModel();
        $ant_lab = new AntecedentesLabModel();
        //ACA FALTA EL MODELO ANTECEDENTES LABORALES

          // Preparar los datos para la inserción
        $datosParaInsertar = $datosPaso2['persons'] ?? [];
        $datosParaInsertar3 = $datosPaso3['persons2'] ?? [];
        $datosParaInsertar4 = $datosPaso4['persons3'] ?? [];
        $datosParaInsertar5 = $datosPaso5['persons4'] ?? [];

        
        if (!empty($datosParaInsertar)) {
         foreach ($datosParaInsertar as $dato) {
            $valp->insert($dato);
         }
        }
        if (!empty($datosParaInsertar3)) {
            foreach ($datosParaInsertar3 as $dato3) {
               $cap->insert($dato3);
            }
           }

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

        // Borrar los datos de la sesión después de guardar en la base de datos
        session()->remove('datos_paso1');
        session()->remove('datos_paso2');
        session()->remove('datos_paso3');
        session()->remove('datos_paso4');
        session()->remove('datos_paso5');

        return "Datos guardados correctamente.";

        /*
        if ($datosPaso1) {
            // Guardar los datos en la base de datos
            // Aquí llamas a tus modelos y métodos para guardar los datos en la base de datos
            $val->insert($datosPaso1);
            //$valp->insert($datosPaso2);
            //$cap->insert($datosPaso3);
            //$ant_doc->insert($datosPaso4);
            //$ant_lab->insert($datosPaso5);

            // Después de guardar en la base de datos, borra los datos de la sesión
            session()->remove('datos_paso1');
            //session()->remove('datos_paso2');
            //session()->remove('datos_paso3');
            //session()->remove('datos_paso4');
            //session()->remove('datos_paso5');

            return "Datos de valoracion guardados correctamente.";
        } else {
            return "No hay datos suficientes para guardar.";
        }

        if ($datosPaso2) {
            // Guardar los datos en la base de datos
            // Aquí llamas a tus modelos y métodos para guardar los datos en la base de datos
            $valp->insert($datosPaso2);
            // Después de guardar en la base de datos, borra los datos de la sesión
            session()->remove('datos_paso2');
            //session()->remove('datos_paso3');
            //session()->remove('datos_paso4');
            //session()->remove('datos_paso5');

            return "Datos de postgrado guardados correctamente.";
        } else {
            return "No hay datos suficientes para guardar.";
        }
       
        */
    }

}

