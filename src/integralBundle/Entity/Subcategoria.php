<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subcategoria
 *
 * @ORM\Table(name="SubCategoria")
 * @ORM\Entity
 */
class Subcategoria
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubCategoria", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSubcategoria;

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
     * @var boolean
     *
     * @ORM\Column(name="VIP", type="boolean", nullable=false)
     */
    private $vip;



    /**
     * Get idSubcategoria
     *
     * @return string 
     */
    public function getIdSubcategoria()
    {
        return $this->idSubcategoria;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Subcategoria
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
     * @return Subcategoria
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
     * @return Subcategoria
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

    /**
     * Set vip
     *
     * @param boolean $vip
     * @return Subcategoria
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return boolean 
     */
    public function getVip()
    {
        return $this->vip;
    }
}
