<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvxd18ciclo
 *
 * @ORM\Table(name="PVXD_18Ciclo")
 * @ORM\Entity
 */
class Pvxd18ciclo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ciclo", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCiclo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Ciclo", type="string", length=50, nullable=false)
     */
    private $descCiclo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clase", type="smallint", nullable=false)
     */
    private $clase;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Inicio", type="datetime", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fin", type="datetime", nullable=false)
     */
    private $fechaFin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Activo", type="boolean", nullable=false)
     */
    private $activo;



    /**
     * Get idCiclo
     *
     * @return string 
     */
    public function getIdCiclo()
    {
        return $this->idCiclo;
    }

    /**
     * Set descCiclo
     *
     * @param string $descCiclo
     * @return Pvxd18ciclo
     */
    public function setDescCiclo($descCiclo)
    {
        $this->descCiclo = $descCiclo;

        return $this;
    }

    /**
     * Get descCiclo
     *
     * @return string 
     */
    public function getDescCiclo()
    {
        return $this->descCiclo;
    }

    /**
     * Set clase
     *
     * @param integer $clase
     * @return Pvxd18ciclo
     */
    public function setClase($clase)
    {
        $this->clase = $clase;

        return $this;
    }

    /**
     * Get clase
     *
     * @return integer 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Pvxd18ciclo
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Pvxd18ciclo
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Pvxd18ciclo
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
