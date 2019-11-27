<?php


namespace App\Modelos;


class Carro
{
    private $Marca;
    private $Modelo;
    private $Tipo;
    private $Color;

    /**
     * Carro constructor.
     * @param $Marca
     * @param $Modelo
     * @param $Tipo
     * @param $Color
     */
    public function __construct($Marca, $Modelo, $Tipo, $Color)
    {
        $this->Marca = $Marca;
        $this->Modelo = $Modelo;
        $this->Tipo = $Tipo;
        $this->Color = $Color;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->Marca;
    }

    /**
     * @param mixed $Marca
     */
    public function setMarca($Marca)
    {
        $this->Marca = $Marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->Modelo;
    }

    /**
     * @param mixed $Modelo
     */
    public function setModelo($Modelo)
    {
        $this->Modelo = $Modelo;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * @param mixed $Tipo
     */
    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->Color;
    }

    /**
     * @param mixed $Color
     */
    public function setColor($Color)
    {
        $this->Color = $Color;
    }

    public function MostrarDatos()
    {
        echo "<H5> Los Datos del Carro Son: </H5>";
        echo "<ul>";
        echo   "<li><strong>Marca: </strong>".$this->getMarca()."</li>";
        echo   "<li><strong>Modelo: </strong>".$this->getModelo()."</li>";
        echo   "<li><strong>Tipo: </strong>".$this->getTipo()."</li>";
        echo   "<li><strong>Color: </strong>".$this->getColor()."</li>";
        echo "</ul>";
    }

}