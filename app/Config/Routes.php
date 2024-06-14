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

//RUTAS PATA MOSTRAR PLANES DE ESTUDIO
$routes->get('/mostrarPlanes', 'PlanesController::mostrarPlanes');
$routes->post('/mostrarPlanes3', 'PlanesController::mostrarPlanes3'); 

//RUTA PARA MOSTRAR LAS MATERIAS
$routes->get('/mostrar_materias', 'MateriasController::mostrar_materias');

//RUTAS PARA CARGAR UNA NUEVA MATERIA
$routes->get('/insertar_materia1', 'MateriasController::insertar_materia1');
$routes->post('/insertar_materia2', 'MateriasController::insertar_materia2');

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

//$routes->delete('/Docente/:num', 'DocenteController::destroy');
//$routes->delete('/Docente/:id', 'DocenteController::destroy')->filter('authGuard');
/*$routes->get('/Docente', 'DocenteController::index');
$routes->get('/Docente/create', 'DocenteController::create');
$routes->post('/Docente', 'DocenteController::store');
$routes->get('/Docente/(:num)', 'DocenteController::show/$1');

$routes->get('/Docente/:id/edit', 'DocenteController::edit');
$routes->put('/Docente/:id', 'DocenteController::update');
$routes->delete('/Docente/(:num)', 'DocenteController::destroy/$1',[ 'as' => 'Docente.destroy' ]); */










