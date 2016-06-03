<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Analisisclasiseleccion
 *
 * @ORM\Table(name="AnalisisClasiSeleccion")
 * @ORM\Entity
 */
class Analisisclasiseleccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SPID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Clave", type="smallint", nullable=false)
     */
    private $idClave;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=20, nullable=false)
     */
    private $idConcepto;

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
     * Get idSpid
     *
     * @return integer 
     */
    public function getIdSpid()
    {
        return $this->idSpid;
    }

    /**
     * Set idClave
     *
     * @param integer $idClave
     * @return Analisisclasiseleccion
     */
    public function setIdClave($idClave)
    {
        $this->idClave = $idClave;

        return $this;
    }

    /**
     * Get idClave
     *
     * @return integer 
     */
    public function getIdClave()
    {
        return $this->idClave;
    }

    /**
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return Analisisclasiseleccion
     */
    public function setIdConcepto($idConcepto)
    {
        $this->idConcepto = $idConcepto;

        return $this;
    }

    /**
     * Get idConcepto
     *
     * @return string 
     */
    public function getIdConcepto()
    {
        return $this->idConcepto;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Analisisclasiseleccion
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
     * @return Analisisclasiseleccion
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
}
