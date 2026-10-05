<?php

namespace App\Controllers;
use App\Models\DepartamentosModel;

class DepartamentosController extends BaseController
{
    public function index(): string
    {
        $departamentos = new DepartamentosModel();
        $datos['datos']=$departamentos->findAll();
        return view('departamentos',$datos);
    }
    public function insertar()
    {
        /*crar un array con los datos del formulario*/
        $datos = [
            'cod_depto' => $this->request->getPost('txt_depto'),
            'nombre_depto' => $this->request->getPost('txt_nombre'),
            'cod_region' => $this->request->getPost('txt_region')
        ];
        // crear un objeto 
        $departamentos = new DepartamentosModel();
        // utilizar el objeto para insertar
        $departamentos->insert($datos);
        //llamar al metodo index (realiza la busqueda y carga datos)
         return $this->index();


    }
    public function eliminar($codigo)

    {
        $departamentos = new DepartamentosModel();
        $departamentos->delete($codigo);
        return $this->index();
    }
    public function buscar($codigo)
    {
        $departamentos = new DepartamentosModel();
        $datos['datos']= $departamentos->find($codigo);
        return view ('form_modificar_departamentos',$datos);
    }
    public function modificar()
    {
        $departamentos = new DepartamentosModel();
        //id del registro a modificar
        $codigo=$this->request->getPost('txt_depto');
        //recibir datos del formulario
        $datos=[
            'nombre_depto'=>$this->request->getPost('txt_nombre'),
            'cod_region'=>$this->request->getPost('txt_region')
        ];
        $departamento->update($codigo,$datos);
        return $this->index();
        

    }



}