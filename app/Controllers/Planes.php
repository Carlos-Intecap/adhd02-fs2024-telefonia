<?php
namespace App\Controllers;
//Utilizar el modelo
use App\Models\PlanesModel;
class Planes extends BaseController
{
    public function index(): string
    {
        //Crear un objeto de tipo PlanesModel
        $plan = new PlanesModel();
        $datos['datos']=$plan->findAll();
        return view('planes',$datos);
    }
}