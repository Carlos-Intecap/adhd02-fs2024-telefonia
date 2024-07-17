<?php
namespace App\Controllers;
//Utilizar el modelo
use App\Models\LineasTelefonicasModel;
class LineasTelefonicas extends BaseController
{
    public function index(): string
    {
        //Crear un objeto de tipo LineasTelefonicasModel
        $linea = new LineasTelefonicasModel();
        $datos['datos']=$linea->findAll();
        return view('lineas_telefonicas',$datos);
    }
}