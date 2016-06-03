<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoServiciosZerodayajt
 *
 * @ORM\Table(name="Activo_Fijo_Servicios_ZeroDayAjt")
 * @ORM\Entity
 */
class ActivoFijoServiciosZerodayajt
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Servicio", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Servicio", type="string", length=100, nullable=false)
     */
    private $descServicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MBMin", type="integer", nullable=false)
     */
    private $tarifaMbmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MBMed", type="integer", nullable=false)
     */
    private $tarifaMbmed;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MBMax", type="integer", nullable=false)
     */
    private $tarifaMbmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MCMin", type="integer", nullable=false)
     */
    private $tarifaMcmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MCMed", type="integer", nullable=false)
     */
    private $tarifaMcmed;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MCMax", type="integer", nullable=false)
     */
    private $tarifaMcmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_CUPMin", type="integer", nullable=false)
     */
    private $tarifaCupmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_CUPMed", type="integer", nullable=false)
     */
    private $tarifaCupmed;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_CUPMax", type="integer", nullable=false)
     */
    private $tarifaCupmax;



    /**
     * Get idServicio
     *
     * @return string 
     */
    public function getIdServicio()
    {
        return $this->idServicio;
    }

    /**
     * Set descServicio
     *
     * @param string $descServicio
     * @return ActivoFijoServiciosZerodayajt
     */
    public function setDescServicio($descServicio)
    {
        $this->descServicio = $descServicio;

        return $this;
    }

    /**
     * Get descServicio
     *
     * @return string 
     */
    public function getDescServicio()
    {
        return $this->descServicio;
    }

    /**
     * Set tarifaMbmin
     *
     * @param integer $tarifaMbmin
     * @return ActivoFijoServiciosZerodayajt
     */
    public function setTarifaMbmin($tarifaMbmin)
    {
        $this->tarifaMbmin = $tarifaMbmin;

        return $this;
    }

    /**
     * Get tarifaMbmin
     *
     * @return integer 
     */
    public function getTarifaMbmin()
    {
        return $this->tarifaMbmin;
    }

    /**
     * Set tarifaMbmed
     *
     * @param integer $tarifaMbmed
     * @return ActivoFijoServiciosZerodayajt
     */
    public function setTarifaMbmed($tarifaMbmed)
    {
        $this->tarifaMbmed = $tarifaMbmed;

        return $this;
    }

    /**
     * Get tarifaMbmed
     *
     * @return integer 
     */
    public function getTarifaMbmed()
    {
        return $this->tarifaMbmed;
    }

    /**
     * Set tarifaMbmax
     *
     * @param integer $tarifaMbmax
     * @return ActivoFijoServiciosZerodayajt
     */
    public function setTarifaMbmax($tarifaMbmax)
    {
        $this->tarifaMbmax = $tarifaMbmax;

        return $this;
    }

    /**
     * Get tarifaMbmax
     *
     * @return integer 
     */
    public function getTarifaMbmax()
    {
        return $this->tarifaMbmax;
    }

    /**
     * Set tarifaMcmin
     *
     * @param integer $tarifaMcmin
     * @return ActivoFijoServiciosZerodayajt
     */
    public function setTarifaMcmin($tarifaMcmin)
    {
        $this->tarifaMcmin = $tarifaMcmin;

        return $this;
    }

    /**
     * Get tarifaMcmin
     *
     * @return integer 
     */
    public function getTarifaMcmin()
    {
        return $this->tarifaMcmin;
    }

    /**
     * Set tarifaMcmed
     *
     * @param integer $tarifaMcmed
     * @return ActivoFijoServiciosZerodayajt
     */
    public function setTarifaMcmed($tarifaMcmed)
    {
        $this->tarifaMcmed = $tarifaMcmed;

        return $this;
    }

    /**
     * Get tarifaMcmed
     *
     * @return integer 
     */
    public function getTarifaMcmed()
    {
        return $this->tarifaMcmed;
    }

    /**
     * Set tarifaMcmax
     *
     * @param integer $tarifaMcmax
     * @return ActivoFijoServiciosZerodayajt
     */
    public function setTarifaMcmax($tarifaMcmax)
    {
        $this->tarifaMcmax = $tarifaMcmax;

        return $this;
    }

    /**
     * Get tarifaMcmax
     *
     * @return integer 
     */
    public function getTarifaMcmax()
    {
        return $this->tarifaMcmax;
    }

    /**
     * Set tarifaCupmin
     *
     * @param integer $tarifaCupmin
     * @return ActivoFijoServiciosZerodayajt
     */
    public function setTarifaCupmin($tarifaCupmin)
    {
        $this->tarifaCupmin = $tarifaCupmin;

        return $this;
    }

    /**
     * Get tarifaCupmin
     *
     * @return integer 
     */
    public function getTarifaCupmin()
    {
        return $this->tarifaCupmin;
    }

    /**
     * Set tarifaCupmed
     *
     * @param integer $tarifaCupmed
     * @return ActivoFijoServiciosZerodayajt
     */
    public function setTarifaCupmed($tarifaCupmed)
    {
        $this->tarifaCupmed = $tarifaCupmed;

        return $this;
    }

    /**
     * Get tarifaCupmed
     *
     * @return integer 
     */
    public function getTarifaCupmed()
    {
        return $this->tarifaCupmed;
    }

    /**
     * Set tarifaCupmax
     *
     * @param integer $tarifaCupmax
     * @return ActivoFijoServiciosZerodayajt
     */
    public function setTarifaCupmax($tarifaCupmax)
    {
        $this->tarifaCupmax = $tarifaCupmax;

        return $this;
    }

    /**
     * Get tarifaCupmax
     *
     * @return integer 
     */
    public function getTarifaCupmax()
    {
        return $this->tarifaCupmax;
    }
}
