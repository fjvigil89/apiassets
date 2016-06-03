<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marca
 *
 * @ORM\Table(name="Marca")
 * @ORM\Entity
 */
class Marca
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Marca", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMarca;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=70, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Ilustracion", type="text", length=16, nullable=true)
     */
    private $ilustracion;



    /**
     * Get idMarca
     *
     * @return string 
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Marca
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Marca
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set ilustracion
     *
     * @param string $ilustracion
     * @return Marca
     */
    public function setIlustracion($ilustracion)
    {
        $this->ilustracion = $ilustracion;

        return $this;
    }

    /**
     * Get ilustracion
     *
     * @return string 
     */
    public function getIlustracion()
    {
        return $this->ilustracion;
    }
}
