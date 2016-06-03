<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoServfact
 *
 * @ORM\Table(name="Activo_Fijo_ServFact")
 * @ORM\Entity
 */
class ActivoFijoServfact
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Servicio", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Servicio", type="string", length=100, nullable=false)
     */
    private $descServicio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Facturar", type="boolean", nullable=false)
     */
    private $facturar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MB", type="integer", nullable=false)
     */
    private $tarifaMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MC", type="integer", nullable=false)
     */
    private $tarifaMc;



    /**
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return ActivoFijoServfact
     */
    public function setIdActivofijo($idActivofijo)
    {
        $this->idActivofijo = $idActivofijo;

        return $this;
    }

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
     * Set idServicio
     *
     * @param string $idServicio
     * @return ActivoFijoServfact
     */
    public function setIdServicio($idServicio)
    {
        $this->idServicio = $idServicio;

        return $this;
    }

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
     * @return ActivoFijoServfact
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
     * Set facturar
     *
     * @param boolean $facturar
     * @return ActivoFijoServfact
     */
    public function setFacturar($facturar)
    {
        $this->facturar = $facturar;

        return $this;
    }

    /**
     * Get facturar
     *
     * @return boolean 
     */
    public function getFacturar()
    {
        return $this->facturar;
    }

    /**
     * Set tarifaMb
     *
     * @param integer $tarifaMb
     * @return ActivoFijoServfact
     */
    public function setTarifaMb($tarifaMb)
    {
        $this->tarifaMb = $tarifaMb;

        return $this;
    }

    /**
     * Get tarifaMb
     *
     * @return integer 
     */
    public function getTarifaMb()
    {
        return $this->tarifaMb;
    }

    /**
     * Set tarifaMc
     *
     * @param integer $tarifaMc
     * @return ActivoFijoServfact
     */
    public function setTarifaMc($tarifaMc)
    {
        $this->tarifaMc = $tarifaMc;

        return $this;
    }

    /**
     * Get tarifaMc
     *
     * @return integer 
     */
    public function getTarifaMc()
    {
        return $this->tarifaMc;
    }
}
