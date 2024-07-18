<?php

namespace App\Controllers;
use App\Models\LineasTelefonicasModel;
class LineasTelefonicasController extends BaseController
{
    public function index(): string
    {
        $linea = new LineasTelefonicasModel();
        $datos['datos']=$linea->findAll();
        return view('lineas_telefonicas',$datos);
    }
    public function nuevaLinea(): string
    {
        return view('lineas_nuevas');
    }

    public function agregarLinea()
    {
        $datos=[
            'no_telefono' => $this->request->getVar('txtTelefono'),
            'fecha_pago' => $this->request->getVar('txtFechaPago'),
            'meses_atraso' => $this->request->getVar('txtMeses'),
            'plan_id' => $this->request->getVar('txtPlanId'),
            'cliente_id' => $this->request->getVar('txtClienteId')
        ];
        $lineas = new LineasTelefonicasModel();
        $lineas->insert($datos);
        echo "Datos guardados";
        return redirect()->route('lineas');
    }
}