<?php


namespace App\Modelos;

class Persona
{
    private $Nombres;
    private $Apellidos;
    private $Telefono;
    private $Direccion;

    /**
     * Persona constructor.
     * @param $Nombres
     * @param $Apellidos
     * @param $Telefono
     * @param $Direccion
     */
    public function __construct($Nombres, $Apellidos, $Telefono, $Direccion)
    {
        $this->Nombres = $Nombres;
        $this->Apellidos = $Apellidos;
        $this->Telefono = $Telefono;
        $this->Direccion = $Direccion;
    }

    /**
     * @return mixed
     */
    public function getNombres()
    {
        return $this->Nombres;
    }

    /**
     * @param mixed $Nombres
     */
    public function setNombres($Nombres)
    {
        $this->Nombres = $Nombres;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->Apellidos;
    }

    /**
     * @param mixed $Apellidos
     */
    public function setApellidos($Apellidos)
    {
        $this->Apellidos = $Apellidos;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @param mixed $Telefono
     */
    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * @param mixed $Direccion
     */
    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }

    public function MostarDatos()
    {
        echo "<H4>Los datos del cliente son: </H4>";
        echo "<ul>";
        echo   "<li><strong>Nombres: </strong>".$this->getNombres()."</li>";
        echo   "<li><strong>Apellidos: </strong>".$this->getApellidos()."</li>";
        echo   "<li><strong>Telefono: </strong>".$this->getTelefono()."</li>";
        echo   "<li><strong>Direccion: </strong>".$this->getDireccion()."</li>";
        echo "</ul>";

    }

}