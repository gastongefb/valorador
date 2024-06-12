<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//$routes->get('/', 'Home::index');
//$routes->get('/validacion', 'Validacion::index');
//$routes->get('/buscarporid/(:num)', 'Validacion::buscarporid/$1');
//$routes->get('/insertar', 'Validacion::insertar');
//$routes->get('/actualizar', 'Validacion::actualizar');
//$routes->get('/eliminar', 'Validacion::eliminar');

//RUTA PARA MOSTRAR LAS MATERIAS
$routes->get('/mostrar_materias', 'Validacion::mostrar_materias');

//RUTAS PARA CARGAR UNA MATERIA
$routes->get('/insertar_materia1', 'Validacion::insertar_materia1');
$routes->post('/insertar_materia2', 'Validacion::insertar_materia2');


//RUTAS PARA MOSTRAR TODAS LAS VALORACIONES POR MATERIA
$routes->get('/Mostrar_Valoraciones_Por_Materia', 'Validacion::Mostrar_Valoraciones_Por_Materia');
$routes->post('Mostrar_Valoraciones_Por_Materia3', 'Validacion::Mostrar_Valoraciones_Por_Materia3');

//RUTAS PARA MOSTRAR TODAS LAS VALORACIONES
$routes->get('/mostrar_valoraciones', 'Validacion::mostrar_valoraciones');
$routes->post('/mostrar_valoraciones', 'Validacion::mostrar_valoraciones');

$routes->get('/nuevo', 'Validacion::nuevo');

$routes->post('/guardar', 'Validacion::guardar');




//RUTAS PATA MOSTRAR PLANES DE ESTUDIO
$routes->get('/mostrarPlanes', 'Validacion::mostrarPlanes');
$routes->post('/mostrarPlanes3', 'Validacion::mostrarPlanes3'); // con esto muestro los planes


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

//RUTAS PARA BUSCAR UNA VALORACIÓN
$routes->get('/busqueda', 'PersonController::index');
$routes->post('/buscar_valoracion', 'PersonController::buscar_valoracion');









