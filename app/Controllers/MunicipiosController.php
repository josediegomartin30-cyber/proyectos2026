<?php

namespace App\Controllers;
use App\Models\MunicipiosModel;

class MunicipiosController extends BaseController
{
    public function index(): string
    {
        $municipios = new MunicipiosModel();
        $datos['datos']=$municipios->findAll();
        return view('municipios',$datos);
    }
    public function insertar()
    {
        /*crar un array con los datos del formulario*/
        $datos = [
            'cod_muni' => $this->request->getPost('txt_muni'),
            'nombre_municipio' => $this->request->getPost('txt_nombre'),
            'cod_depto' => $this->request->getPost('txt_departamento')
        ];
        // crear un objeto 
        $municipios = new MunicipiosModel();
        // utilizar el objeto para insertar
        $municipios->insert($datos);
        //llamar al metodo index (realiza la busqueda y carga datos)
         return $this->index();


    }
    public function eliminar($codigo)

    {
        $municipios = new MunicipiosModel();
        $municipios->delete($codigo);
        return $this->index();
    }
    public function buscar($codigo)
    {
        $municipios = new MunicipiosModel();
        $datos['datos']= $municipios->find($codigo);
        return view ('form_modificar_municipios',$datos);
    }
    public function modificar()
    {
        $municipios = new MunicipiosModel();
        //id del registro a modificar
        $codigo=$this->request->getPost('txt_muni');
        //recibir datos del formulario
        $datos=[
            'nombre_municipio'=>$this->request->getPost('txt_nombre'),
            'cod_depto'=>$this->request->getPost('txt_departamento')
        ];
        $municipios->update($codigo,$datos);
        return $this->index();
        

    }



}