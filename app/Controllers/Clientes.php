<?php
namespace App\Controllers;
//Utilizar el modelo
use App\Models\ClientesModel;
class Clientes extends BaseController
{
    public function index(): string
    {
        //Crear un objeto de tipo ClientesModel
        $cliente = new ClientesModel();
        $datos['datos']=$cliente->findAll();
        return view('clientes',$datos);
    }
}