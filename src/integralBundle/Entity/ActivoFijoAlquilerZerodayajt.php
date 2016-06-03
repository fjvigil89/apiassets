<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoAlquilerZerodayajt
 *
 * @ORM\Table(name="Activo_Fijo_Alquiler_ZeroDayAjt")
 * @ORM\Entity
 */
class ActivoFijoAlquilerZerodayajt
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ActivoFijo", type="string", length=255, nullable=false)
     */
    private $descActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Rotulo", type="string", length=15, nullable=false)
     */
    private $idRotulo;

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
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set descActivofijo
     *
     * @param string $descActivofijo
     * @return ActivoFijoAlquilerZerodayajt
     */
    public function setDescActivofijo($descActivofijo)
    {
        $this->descActivofijo = $descActivofijo;

        return $this;
    }

    /**
     * Get descActivofijo
     *
     * @return string 
     */
    public function getDescActivofijo()
    {
        return $this->descActivofijo;
    }

    /**
     * Set idRotulo
     *
     * @param string $idRotulo
     * @return ActivoFijoAlquilerZerodayajt
     */
    public function setIdRotulo($idRotulo)
    {
        $this->idRotulo = $idRotulo;

        return $this;
    }

    /**
     * Get idRotulo
     *
     * @return string 
     */
    public function getIdRotulo()
    {
        return $this->idRotulo;
    }

    /**
     * Set tarifaMbmin
     *
     * @param integer $tarifaMbmin
     * @return ActivoFijoAlquilerZerodayajt
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
     * @return ActivoFijoAlquilerZerodayajt
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
     * @return ActivoFijoAlquilerZerodayajt
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
     * @return ActivoFijoAlquilerZerodayajt
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
     * @return ActivoFijoAlquilerZerodayajt
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
     * @return ActivoFijoAlquilerZerodayajt
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
     * @return ActivoFijoAlquilerZerodayajt
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
     * @return ActivoFijoAlquilerZerodayajt
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
     * @return ActivoFijoAlquilerZerodayajt
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
