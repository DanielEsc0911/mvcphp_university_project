<?php
include_once "modelos/Pan.php";

//// panes controller

class Panes
{
    private $pan;
    public function __construct()
    {
        $this->pan = new Pan();
    }

    public function index()
    {
        $panes = $this->pan->lista();
        require_once 'vistas/panes/index.php';
    }

    public function agregar()
    {
        require_once 'vistas/panes/agregar.php';
    }

    public function editar()
    {
        $id = $_GET['id'];
        $pan = $this->pan->buscar($id);
        require_once 'vistas/panes/editar.php';
    }



    public function guardar()
    {
        extract($_POST);
        if (!isset($id)) {
            $pan = new Pan($tipo_de_pan, $nombre, $pais_de_origen, $tamano_promedio);
            $pan->registrar();
        } else {
            $this->pan->id = $id;
            $this->pan->tipo_de_pan = $tipo_de_pan;
            $this->pan->nombre = $nombre;
            $this->pan->pais_de_origen = $pais_de_origen;
            $this->pan->tamano_promedio = $tamano_promedio;
            $this->pan->editar();
        }

        header('location: index.php?controlador=panes&action=index');
    }

    public function eliminar()
    {
        $id = $_GET['id'];
        $this->pan->id = $id;
        $this->pan->eliminar();
        header('location: index.php?controlador=panes&action=index');
    }
}