<?php

namespace App\Controllers;
use App\Models\ClientesModel;
class ClientesController extends BaseController
{
    public function index(): string
    {
        $cliente = new ClientesModel();
        $datos['datos']=$cliente->findAll();
        return view('clientes',$datos);
    }
    public function nuevoCliente(): string
    {
        return view('clientes_nuevos');
    }
    
    public function agregarCliente()
    {
        $datos=[
            'cliente_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'calle_avenida' => $this->request->getVar('txtCalleAvenida'),
            'no_casa' => $this->request->getVar('txtNoCasa'),
            'zona' => $this->request->getVar('txtZona')
        ];
        //print_r($datos);
        //crear objeto de tipo ClientesModel
        $clientes = new ClientesModel();
        $clientes->insert($datos); //insert into cliente values(...);
        //echo "Datos guardados";
        return redirect()->route('clientes');
    }
    public function eliminarCliente($id=null)
    {
        $clientes = new ClientesModel();
        $clientes->delete(['cliente_id'=>$id]);
        return redirect()->route('clientes');
    }
    public function buscarCliente($id=null){
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->where('cliente_id',$id)->first();
        return view('form_modificar_cliente',$datos);
    }
    public function modificarCliente(){
        $datos=[
            'cliente_id'=>$this->request->getVar('txtClienteId'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'correo_electronico'=>$this->request->getVar('txtCorreo'),
            'calle_avenida'=>$this->request->getVar('txtCalle'),
            'no_casa'=>$this->request->getVar('txtNoCasa'),
            'zona'=>$this->request->getVar('txtZona')
        ];
        $clientes = new ClientesModel();
        $clientes->update($datos['cliente_id'],$datos);
        return redirect()->route('clientes');
    }
}