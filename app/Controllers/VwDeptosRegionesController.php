<?php

namespace App\Controllers;
use App\Models\VwDeptosRegionesModel;

class VwDeptosRegionesController extends BaseController
{
    public function index(): string
    {
        $depto = new VwDeptosRegionesModel();
        $datos['datos']=$depto->findAll();
        return view('vwdeptosregiones',$datos);
    }
    public function insertar()
    {
        /*crar un array con los datos del formulario*/
        $datos = [
            'cod_depto' => $this->request->getPost('txt_depto'),
            'nombre_depto' => $this->request->getPost('txt_nombredepto'),
            'cod_region' => $this->request->getPost('txt_region'),
             'nombre' => $this->request->getPost('txt_nombre')
        ];
        // crear un objeto 
        $depto = new VwDeptosRegionesModel();
        // utilizar el objeto para insertar
        $depto->insert($datos);
        //llamar al metodo index (realiza la busqueda y carga datos)
         return $this->index();


    }
    public function eliminar($codigo)

    {
        $depto = new VwDeptosRegionesModel();
        $depto->delete($codigo);
        return $this->index();
    }
    public function buscar($codigo)
    {
        $depto = new VwDeptosRegionesModel();
        $datos['datos']= $depto->find($codigo);
        return view ('form_modificar_deptos',$datos);
    }
    public function modificar()
    {
        $depto = new VwDeptosRegionesModel();
        //id del registro a modificar
        $codigo=$this->request->getPost('txt_depto');
        //recibir datos del formulario
        $datos=[
            'nombre_depto'=>$this->request->getPost('txt_nombredepto'),
            'cod_region'=>$this->request->getPost('txt_region'),
            'nombre'=>$this->request->getPost('txt_nombre')
        ];
        $depto->update($codigo,$datos);
        return $this->index();
        

    }



}