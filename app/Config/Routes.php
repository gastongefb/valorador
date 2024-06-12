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

//RUTAS PARA MOSTRAR UNA VALORACIÓN POR DOCENTE
$routes->get('/buscar_valoracion_por_docente', 'PersonController::buscar_valoracion_por_docente');
$routes->post('/buscar_valoracion_por_docente2', 'PersonController::buscar_valoracion_por_docente2');


//RUTAS PARA MOSTRAR TODAS LAS VALORACIONES POR MATERIA
$routes->get('/Mostrar_Valoraciones_Por_Materia', 'PersonController::Mostrar_Valoraciones_Por_Materia');
$routes->post('Mostrar_Valoraciones_Por_Materia3', 'PersonController::Mostrar_Valoraciones_Por_Materia3');

//RUTAS PARA MOSTRAR TODAS LAS VALORACIONES
$routes->get('/mostrar_valoraciones', 'PersonController::mostrar_valoraciones');
$routes->post('/mostrar_valoraciones', 'PersonController::mostrar_valoraciones');



$routes->get('/nuevo', 'Validacion::nuevo');

$routes->post('/guardar', 'Validacion::guardar');














