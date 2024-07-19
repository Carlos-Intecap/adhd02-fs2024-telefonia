<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('clientes', 'ClientesController::index');
$routes->get('lineas', 'LineasTelefonicasController::index');
$routes->get('planes', 'PlanesController::index');
$routes->post('agregar_cliente','ClientesController::agregarCliente');
$routes->get('nuevo_cliente','ClientesController::nuevoCliente');
$routes->post('agregar_plan','PlanesController::agregarPlan');
$routes->get('nuevo_plan','PlanesController::nuevoPlan');
$routes->post('agregar_linea','LineasTelefonicasController::agregarLinea');
$routes->get('nueva_linea','LineasTelefonicasController::nuevaLinea');

$routes->get('eliminar_plan/(:num)','PlanesController::eliminarPlan/$1');

$routes->get('eliminar_cliente/(:num)','ClientesController::eliminarCliente/$1');