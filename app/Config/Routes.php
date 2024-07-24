<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//VISTAS
$routes->get('/', 'Home::index');
$routes->get('clientes', 'ClientesController::index');
$routes->get('lineas', 'LineasTelefonicasController::index');
$routes->get('planes', 'PlanesController::index');

//AGREGAR
$routes->post('agregar_cliente','ClientesController::agregarCliente');
$routes->get('nuevo_cliente','ClientesController::nuevoCliente');

$routes->post('agregar_linea','LineasTelefonicasController::agregarLinea');
$routes->get('nueva_linea','LineasTelefonicasController::nuevaLinea');

$routes->post('agregar_plan','PlanesController::agregarPlan');
$routes->get('nuevo_plan','PlanesController::nuevoPlan');

//ELIMINAR
$routes->get('eliminar_cliente/(:num)','ClientesController::eliminarCliente/$1');
$routes->get('eliminar_linea/(:num)','LineasTelefonicasController::eliminarLinea/$1');
$routes->get('eliminar_plan/(:num)','PlanesController::eliminarPlan/$1');

//ACTUALIZAR
$routes->get('buscar_cliente/(:num)','ClientesController::buscarCliente/$1');
$routes->post('modificar_cliente','ClientesController::modificarCliente');
$routes->get('buscar_linea/(:num)','LineasTelefonicasController::buscarLinea/$1');
$routes->post('modificar_linea','LineasTelefonicasController::modificarLinea');
$routes->get('buscar_plan/(:num)','PlanesController::buscarPlan/$1');
$routes->post('modificar_plan','PlanesController::modificarPlan');