<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comproitem
 *
 * @ORM\Table(name="ComproItem")
 * @ORM\Entity
 */
class Comproitem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CompNumero", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $compnumero;

    /**
     * @var string
     *
     * @ORM\Column(name="PartCuenta", type="string", length=20, nullable=true)
     */
    private $partcuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="PartSubCuenta", type="string", length=20, nullable=true)
     */
    private $partsubcuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="PartSubControl", type="string", length=20, nullable=true)
     */
    private $partsubcontrol;

    /**
     * @var string
     *
     * @ORM\Column(name="PartAnalisis", type="string", length=20, nullable=true)
     */
    private $partanalisis;

    /**
     * @var integer
     *
     * @ORM\Column(name="PartImporte", type="integer", nullable=true)
     */
    private $partimporte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PartDebito", type="boolean", nullable=true)
     */
    private $partdebito;

    /**
     * @var integer
     *
     * @ORM\Column(name="PartOC", type="integer", nullable=true)
     */
    private $partoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="PartFijo", type="integer", nullable=true)
     */
    private $partfijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="PartCB", type="integer", nullable=true)
     */
    private $partcb;



    /**
     * Get compnumero
     *
     * @return integer 
     */
    public function getCompnumero()
    {
        return $this->compnumero;
    }

    /**
     * Set partcuenta
     *
     * @param string $partcuenta
     * @return Comproitem
     */
    public function setPartcuenta($partcuenta)
    {
        $this->partcuenta = $partcuenta;

        return $this;
    }

    /**
     * Get partcuenta
     *
     * @return string 
     */
    public function getPartcuenta()
    {
        return $this->partcuenta;
    }

    /**
     * Set partsubcuenta
     *
     * @param string $partsubcuenta
     * @return Comproitem
     */
    public function setPartsubcuenta($partsubcuenta)
    {
        $this->partsubcuenta = $partsubcuenta;

        return $this;
    }

    /**
     * Get partsubcuenta
     *
     * @return string 
     */
    public function getPartsubcuenta()
    {
        return $this->partsubcuenta;
    }

    /**
     * Set partsubcontrol
     *
     * @param string $partsubcontrol
     * @return Comproitem
     */
    public function setPartsubcontrol($partsubcontrol)
    {
        $this->partsubcontrol = $partsubcontrol;

        return $this;
    }

    /**
     * Get partsubcontrol
     *
     * @return string 
     */
    public function getPartsubcontrol()
    {
        return $this->partsubcontrol;
    }

    /**
     * Set partanalisis
     *
     * @param string $partanalisis
     * @return Comproitem
     */
    public function setPartanalisis($partanalisis)
    {
        $this->partanalisis = $partanalisis;

        return $this;
    }

    /**
     * Get partanalisis
     *
     * @return string 
     */
    public function getPartanalisis()
    {
        return $this->partanalisis;
    }

    /**
     * Set partimporte
     *
     * @param integer $partimporte
     * @return Comproitem
     */
    public function setPartimporte($partimporte)
    {
        $this->partimporte = $partimporte;

        return $this;
    }

    /**
     * Get partimporte
     *
     * @return integer 
     */
    public function getPartimporte()
    {
        return $this->partimporte;
    }

    /**
     * Set partdebito
     *
     * @param boolean $partdebito
     * @return Comproitem
     */
    public function setPartdebito($partdebito)
    {
        $this->partdebito = $partdebito;

        return $this;
    }

    /**
     * Get partdebito
     *
     * @return boolean 
     */
    public function getPartdebito()
    {
        return $this->partdebito;
    }

    /**
     * Set partoc
     *
     * @param integer $partoc
     * @return Comproitem
     */
    public function setPartoc($partoc)
    {
        $this->partoc = $partoc;

        return $this;
    }

    /**
     * Get partoc
     *
     * @return integer 
     */
    public function getPartoc()
    {
        return $this->partoc;
    }

    /**
     * Set partfijo
     *
     * @param integer $partfijo
     * @return Comproitem
     */
    public function setPartfijo($partfijo)
    {
        $this->partfijo = $partfijo;

        return $this;
    }

    /**
     * Get partfijo
     *
     * @return integer 
     */
    public function getPartfijo()
    {
        return $this->partfijo;
    }

    /**
     * Set partcb
     *
     * @param integer $partcb
     * @return Comproitem
     */
    public function setPartcb($partcb)
    {
        $this->partcb = $partcb;

        return $this;
    }

    /**
     * Get partcb
     *
     * @return integer 
     */
    public function getPartcb()
    {
        return $this->partcb;
    }
}
