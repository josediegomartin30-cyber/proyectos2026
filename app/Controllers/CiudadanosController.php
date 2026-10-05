<?php

namespace App\Controllers;
use App\Models\CiudadanosModel;

class CiudadanosController extends BaseController

{
    public function index(): string
    {
        $ciudadanos = new CiudadanosModel();
        $datos ['datos'] =$ciudadanos->findall();

        return view('ciudadanos',$datos);
    }
    public function insertar()
    {
        /*crar un array con los datos del formulario*/
        $datos = [
            'dpi' => $this->request->getPost('txt_dpi'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'direccion' => $this->request->getPost('txt_direccion'),
            'tel_casa' => $this->request->getPost('txt_casa'),
            'tel_movil' => $this->request->getPost('txt_movil'),
            'email' => $this->request->getPost('txt_email'),
            'fechanac' => $this->request->getPost('txt_nacimiento'),
            'cod_nivel_acad' => $this->request->getPost('txt_academico'),
            'cod_muni' => $this->request->getPost('txt_muni'),
            'contra' => $this->request->getPost('txt_contraseña')

        ];
        // crear un objeto 
        $ciudadanos = new CiudadanosModel();
        // utilizar el objeto para insertar
        $ciudadanos->insert($datos);
        //llamar al metodo index (realiza la busqueda y carga datos)
         return $this->index();


    }
    public function eliminar($codigo)

    {
        $ciudadanos = new CiudadanosModel();
        $ciudadanos->delete($codigo);
        return $this->index();
    }
    public function buscar($codigo)
    {
        $ciudadanos = new CiudadanosModel();
        $datos['datos']= $ciudadanos->find($codigo);
        return view ('form_modificar_ciudadanos',$datos);
    }
    public function modificar()
    {
        $ciudadanos = new CiudadanosModel();
        //id del registro a modificar
        $codigo=$this->request->getPost('txt_dpi');
        //recibir datos del formulario
        $datos=[
            

            'apellido' => $this->request->getPost('txt_apellido'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'direccion' => $this->request->getPost('txt_direccion'),
            'tel_casa' => $this->request->getPost('txt_casa'),
            'tel_movil' => $this->request->getPost('txt_movil'),
            'email' => $this->request->getPost('txt_email'),
            'fechanac' => $this->request->getPost('txt_nacimiento'),
            'cod_nivel_acad' => $this->request->getPost('txt_academico'),
            'cod_muni' => $this->request->getPost('txt_muni'),
            'contra' => $this->request->getPost('txt_contraseña')

        ];
        $ciudadanos->update($codigo,$datos);
        return $this->index();
        

    }
}
