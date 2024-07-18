<?php

namespace App\Controllers;
use App\Models\PlanesModel;
class PlanesController extends BaseController
{
    public function index(): string
    {
        $plan = new PlanesModel();
        $datos['datos']=$plan->findAll();
        return view('planes',$datos);
    }
    public function nuevoPlan(): string
    {
        return view('planes_nuevos');
    }
    
    public function agregarPlan()
    {
        $datos=[
            'plan_id' => $this->request->getVar('txtPlanId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'pago_mensual' => $this->request->getVar('txtPagoMensual'),
            'cantidad_minutos' => $this->request->getVar('txtMinutos'),
            'cantidad_mensajes' => $this->request->getVar('txtMensajes')
        ];
        $planes = new PlanesModel();
        $planes->insert($datos);
        echo "Datos guardados";
        return redirect()->route('planes');
    }
}