<?php
include_once 'modelos/Modelo.php';

//// Model de Panes

class Pan extends Modelo
{
    public $id;
    public $tipo_de_pan;
    public $nombre;
    public $pais_de_origen;
    public $tamano_promedio;

    public function __construct($tipo_de_pan = null, $nombre = null, $pais_de_origen = null, $tamano_promedio = null)
    {
        $this->tipo_de_pan = $tipo_de_pan;
        $this->nombre = $nombre;
        $this->pais_de_origen = $pais_de_origen;
        $this->tamano_promedio = $tamano_promedio;
    }

    public function registrar()
    {
        $sql = "INSERT INTO panes(tipo_de_pan, nombre, pais_de_origen, tamano_promedio, fecha_de_creacion, fecha_de_edicion) VALUES('$this->tipo_de_pan', '$this->nombre', ' $this->pais_de_origen', $this->tamano_promedio, NOW(),  NOW())";
        return $this->ejecutar($sql);
    }

    public function editar()
    {
        $sql = "UPDATE panes SET tipo_de_pan = '$this->tipo_de_pan', nombre = '$this->nombre', pais_de_origen = '$this->pais_de_origen', tamano_promedio = $this->tamano_promedio, fecha_de_edicion = NOW() WHERE id = $this->id";
        return $this->ejecutar($sql);
    }

    public function lista()
    {
        $sql = "SELECT * FROM panes";
        return $this->ejecutar($sql);
    }

    public function buscar($id)
    {
        $sql = "SELECT * FROM panes WHERE id=$id";
        $result = $this->ejecutar($sql);
        if ($result) {
            return mysqli_fetch_assoc($result);
        }
        return null;
    }

    public function eliminar()
    {
        $sql = "DELETE FROM panes WHERE id=$this->id";
        return $this->ejecutar($sql);
    }
}