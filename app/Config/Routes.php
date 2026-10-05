<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('regiones','RegionesController::index');
$routes->post('agregar_region','RegionesController::insertar');
$routes->get('eliminar/(:num)','RegionesController::eliminar/$1');
$routes->get('buscar/(:num)','RegionesController::buscar/$1');
$routes->post('modificar_region','RegionesController::modificar');

$routes->get('ciudadanos','CiudadanosController::index');
$routes->post('agregar_ciudadanos','CiudadanosController::insertar');
$routes->get('eliminar_ciudadanos/(:num)','CiudadanosController::eliminar/$1');
$routes->get('buscar_ciudadanos/(:num)','CiudadanosController::buscar/$1');
$routes->post('modificar_ciudadanos','CiudadanosController::modificar');

$routes->get('municipios','MunicipiosController::index');
$routes->post('agregar_municipios','MunicipiosController::insertar');
$routes->get('eliminar_municipios/(:num)','MunicipiosController::eliminar/$1');
$routes->get('buscar_municipios/(:num)','MunicipiosController::buscar/$1');
$routes->post('modificar_municipios','MunicipiosController::modificar');

$routes->get('departamentos','DepartamentosController::index');
$routes->post('agregar_departamentos','DepartamentosController::insertar');
$routes->get('eliminar_departamentos/(:num)','DepartamentosController::eliminar/$1');
$routes->get('buscar_departamentos/(:num)','DepartamentosController::buscar/$1');
$routes->post('modificar_departamentos','DepartamentosController::modificar');

$routes->get('vwdeptosregiones','VwDeptosRegionesController::index');
$routes->post('agregar_vwdeptosregiones','VwDeptosRegionesController::insertar');
$routes->get('eliminar_vwdeptosregiones/(:num)','VwDeptosRegionesController::eliminar/$1');
$routes->get('buscar_vwdeptosregiones/(:num)','VwDeptosRegionesController::buscar/$1');
$routes->post('modificar_vwdeptosregiones','VwDeptosRegionesController::modificar');

$routes->get('nivelesacademicos','NivelesacademicosController::index');
$routes->post('agregar_nivelesacademicos','NivelesacademicosController::insertar');
$routes->get('eliminar_nivelesacademicos/(:num)','NivelesacademicosController::eliminar/$1');
$routes->get('buscar_nivelesacademicos/(:num)','NivelesacademicosController::buscar/$1');
$routes->post('modificar_nivelesacademicos','NivelesacademicosController::modificar');