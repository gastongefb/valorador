<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/validacion', 'Validacion::index');
//$routes->get('/validacion/(:num)/(:num)', 'Validacion::busca/$1/$2');
//$routes->post('/validacion', 'Validacion::busca2');
$routes->get('/buscarporid/(:num)', 'Validacion::buscarporid/$1');
$routes->get('/insertar', 'Validacion::insertar');
$routes->get('/actualizar', 'Validacion::actualizar');
$routes->get('/eliminar', 'Validacion::eliminar');

//RUTA PARA MOSTRAR LAS MATERIAS
$routes->get('/mostrar_materias', 'Validacion::mostrar_materias');

//$routes->get('/mostrar_validaciones/(:num)', 'Validacion::mostrar_validaciones/$1');
//$routes->post('/mostrar_validaciones', 'Validacion::mostrar_validaciones');

//RUTAS PARA MOSTRAR TODAS LAS VALORACIONES POR MATERIA
$routes->get('/Mostrar_Valoraciones_Por_Materia', 'Validacion::Mostrar_Valoraciones_Por_Materia');
$routes->post('Mostrar_Valoraciones_Por_Materia3', 'Validacion::Mostrar_Valoraciones_Por_Materia3');

//RUTAS PARA MOSTRAR TODAS LAS VALORACIONES
$routes->get('/mostrar_valoraciones', 'Validacion::mostrar_valoraciones');
$routes->post('/mostrar_valoraciones', 'Validacion::mostrar_valoraciones');
//$routes->post('/mostrar_validaciones_desde_nuevo', 'Validacion::mostrar_validaciones');

$routes->get('/nuevo', 'Validacion::nuevo');

$routes->post('/guardar', 'Validacion::guardar');


//RUTAS PARA CARGAR UNA MATERIA
$routes->get('/insertar_materia1', 'Validacion::insertar_materia1');
$routes->post('/insertar_materia2', 'Validacion::insertar_materia2');

//$routes->get('/cargarValoracion', 'Validacion::cargarValoracion');  ESTAS RUTAS FUNCIONAN CON EL CONTROLADOR VALIDACION
//$routes->post('/cargarValoracion2', 'Validacion::cargarValoracion2'); LAS HICE MAS ABAJO PARA QUE FUNIONEN CON EL CONTROLADOR PERSONCONTROLLER

//RUTAS PATA MOSTRAR PLANES DE ESTUDIO
$routes->get('/mostrarPlanes', 'Validacion::mostrarPlanes');
$routes->post('/mostrarPlanes3', 'Validacion::mostrarPlanes3'); // con esto muestro los planes

//$routes->get('dynamicinputs', 'DynamicInputs::index');
//$routes->post('dynamicinputs/save_data', 'DynamicInputs::save_data');


//$routes->get('add_persons', 'PersonController::index');
//$routes->post('personcontroller/save', 'PersonController::save');

//$routes->get('/cargarValoracion', 'PersonController::cargarValoracion');
//$routes->post('/cargarValoracion2', 'PersonController::cargarValoracion2');


//EJEMPLO DE PAGINACION
//$routes->get('/paso1', 'PersonController::paso1');

//RUTAS PARA CARGAR NUEVA VALORACIÓN
$routes->get('cargar_valoracion', 'PersonController::paso1');
$routes->post('guardarTitulo', 'PersonController::guardarTitulo');
$routes->get('paso2', 'PersonController::paso2');
$routes->post('guardarPostgrado', 'PersonController::guardarPostgrado');
$routes->get('paso3', 'PersonController::paso3');
$routes->post('guardarCapacitacion', 'PersonController::guardarCapacitacion');
$routes->get('paso4', 'PersonController::paso4');
$routes->post('guardarAntDocentes', 'PersonController::guardarAntDocentes');
$routes->get('paso5', 'PersonController::paso5');
$routes->post('guardarAntLab', 'PersonController::guardarAntLab');
$routes->get('confirmacion', 'PersonController::confirmar');

$routes->get('/Docente', 'DocenteController::index');
$routes->get('/Docente/create', 'DocenteController::create');
$routes->post('/Docente', 'DocenteController::store');
$routes->get('/Docente/(:num)', 'DocenteController::show/$1');

$routes->get('/Docente/:id/edit', 'DocenteController::edit');
$routes->put('/Docente/:id', 'DocenteController::update');
$routes->delete('/Docente/(:num)', 'DocenteController::destroy/$1',[ 'as' => 'Docente.destroy' ]);
//$routes->delete('/Docente/:id', 'DocenteController::destroy')->filter('authGuard');









