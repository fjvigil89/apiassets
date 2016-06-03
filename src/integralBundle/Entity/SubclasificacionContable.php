<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubclasificacionContable
 *
 * @ORM\Table(name="Subclasificacion_Contable")
 * @ORM\Entity
 */
class SubclasificacionContable
{
    /**
     * @var string
     *
     * @ORM\Column(name="Clasificacion", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Subclasificacion", type="string", length=2, nullable=false)
     */
    private $subclasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Especificacion", type="string", length=50, nullable=false)
     */
    private $especificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden", type="smallint", nullable=false)
     */
    private $orden;



    /**
     * Get clasificacion
     *
     * @return string 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set subclasificacion
     *
     * @param string $subclasificacion
     * @return SubclasificacionContable
     */
    public function setSubclasificacion($subclasificacion)
    {
        $this->subclasificacion = $subclasificacion;

        return $this;
    }

    /**
     * Get subclasificacion
     *
     * @return string 
     */
    public function getSubclasificacion()
    {
        return $this->subclasificacion;
    }

    /**
     * Set especificacion
     *
     * @param string $especificacion
     * @return SubclasificacionContable
     */
    public function setEspecificacion($especificacion)
    {
        $this->especificacion = $especificacion;

        return $this;
    }

    /**
     * Get especificacion
     *
     * @return string 
     */
    public function getEspecificacion()
    {
        return $this->especificacion;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return SubclasificacionContable
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }
}
