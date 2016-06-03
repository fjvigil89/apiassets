<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CfConfiguracion
 *
 * @ORM\Table(name="CF_Configuracion")
 * @ORM\Entity
 */
class CfConfiguracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero_Configuracion", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numeroConfiguracion;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=120, nullable=false)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Metodo_Pronostico", type="smallint", nullable=false)
     */
    private $metodoPronostico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_INI", type="datetime", nullable=false)
     */
    private $fechaIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_FIN", type="datetime", nullable=false)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupaciones", type="string", length=200, nullable=false)
     */
    private $idAgrupaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Hecho_Por", type="string", length=20, nullable=false)
     */
    private $hechoPor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Show_Fila_InRep", type="boolean", nullable=false)
     */
    private $showFilaInrep;



    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return CfConfiguracion
     */
    public function setContador1($contador1)
    {
        $this->contador1 = $contador1;

        return $this;
    }

    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Get numeroConfiguracion
     *
     * @return integer 
     */
    public function getNumeroConfiguracion()
    {
        return $this->numeroConfiguracion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return CfConfiguracion
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set metodoPronostico
     *
     * @param integer $metodoPronostico
     * @return CfConfiguracion
     */
    public function setMetodoPronostico($metodoPronostico)
    {
        $this->metodoPronostico = $metodoPronostico;

        return $this;
    }

    /**
     * Get metodoPronostico
     *
     * @return integer 
     */
    public function getMetodoPronostico()
    {
        return $this->metodoPronostico;
    }

    /**
     * Set fechaIni
     *
     * @param \DateTime $fechaIni
     * @return CfConfiguracion
     */
    public function setFechaIni($fechaIni)
    {
        $this->fechaIni = $fechaIni;

        return $this;
    }

    /**
     * Get fechaIni
     *
     * @return \DateTime 
     */
    public function getFechaIni()
    {
        return $this->fechaIni;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return CfConfiguracion
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
     * Set idAgrupaciones
     *
     * @param string $idAgrupaciones
     * @return CfConfiguracion
     */
    public function setIdAgrupaciones($idAgrupaciones)
    {
        $this->idAgrupaciones = $idAgrupaciones;

        return $this;
    }

    /**
     * Get idAgrupaciones
     *
     * @return string 
     */
    public function getIdAgrupaciones()
    {
        return $this->idAgrupaciones;
    }

    /**
     * Set hechoPor
     *
     * @param string $hechoPor
     * @return CfConfiguracion
     */
    public function setHechoPor($hechoPor)
    {
        $this->hechoPor = $hechoPor;

        return $this;
    }

    /**
     * Get hechoPor
     *
     * @return string 
     */
    public function getHechoPor()
    {
        return $this->hechoPor;
    }

    /**
     * Set showFilaInrep
     *
     * @param boolean $showFilaInrep
     * @return CfConfiguracion
     */
    public function setShowFilaInrep($showFilaInrep)
    {
        $this->showFilaInrep = $showFilaInrep;

        return $this;
    }

    /**
     * Get showFilaInrep
     *
     * @return boolean 
     */
    public function getShowFilaInrep()
    {
        return $this->showFilaInrep;
    }
}
