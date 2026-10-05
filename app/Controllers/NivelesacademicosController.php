<?php

namespace App\Controllers;
use App\Models\NivelesacademicosModel;

class NivelesacademicosController extends BaseController
{
    public function index(): string
    {
        $nivel = new NivelesacademicosModel();
        $datos['datos']=$nivel->findAll();
        return view('nivelesacademicos',$datos);
    }
    public function insertar()
    {
        /*crar un array con los datos del formulario*/
        $datos = [
            'cod_nivel_acad' => $this->request->getPost('txt_nivel'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'descripcion' => $this->request->getPost('txt_descripcion')
        ];
        // crear un objeto 
        $nivel = new NivelesacademicosModel();
        // utilizar el objeto para insertar
        $nivel->insert($datos);
        //llamar al metodo index (realiza la busqueda y carga datos)
         return $this->index();


    }
    public function eliminar($codigo)

    {
        $nivel = new NivelesacademicosModel();
        $nivel->delete($codigo);
        return $this->index();
    }
    public function buscar($codigo)
    {
        $nivel= new NivelesacademicosModel();
        $datos['datos']= $nivel->find($codigo);
        return view ('form_modificar_niveles',$datos);
    }
    public function modificar()
    {
        $nivel = new NivelesacademicosModel();
        //id del registro a modificar
        $codigo=$this->request->getPost('txt_nivel');
        //recibir datos del formulario
        $datos=[
            'nombre'=>$this->request->getPost('txt_nombre'),
            'descripcion'=>$this->request->getPost('txt_descripcion')
        ];
        $nivel->update($codigo,$datos);
        return $this->index();
        

    }



}