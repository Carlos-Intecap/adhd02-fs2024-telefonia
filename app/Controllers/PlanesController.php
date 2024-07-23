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
    public function eliminarPlan($id=null){
        $planes = new PlanesModel();
        $planes->delete([$id]);
        return redirect()->route('planes');
    }
    public function buscarPlan($id=null){
        //echo "codigo: ".$id;
        $planes = new PlanesModel();
        //select * from planes where plan_id=$id;
        $datos['datos']=$planes->where('plan_id',$id)->first();
        //print_r($datos);
        return view('form_modificar_plan',$datos);
    }
    public function modificarPlan(){
        $datos=[
            'plan_id'=>$this->request->getVar('txtPlanId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'pago_mensual'=>$this->request->getVar('txtPago'),
            'cantidad_minutos'=>$this->request->getVar('txtMinutos'),
            'cantidad_mensajes'=>$this->request->getVar('txtMensajes')
        ];
        //print_r($datos);
        $planes = new PlanesModel();
        //update planes set nombre=...., pago=... where plan_id=#
        $planes->update($datos['plan_id'],$datos);
        return redirect()->route('planes');
    }

}