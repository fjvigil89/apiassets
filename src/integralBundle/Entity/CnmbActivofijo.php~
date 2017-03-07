<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CnmbActivofijo
 *
 * @ORM\Table(name="CNMB_ActivoFijo")
 * @ORM\Entity
 */
class CnmbActivofijo
{
    /**
     * @var string
     *
     * @ORM\Column(name="CNMB", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cnmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CNMB", type="string", length=100, nullable=false)
     */
    private $descCnmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tasa_Depreciacion", type="integer", nullable=false)
     */
    private $tasaDepreciacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tasa_Rep", type="integer", nullable=false)
     */
    private $tasaRep;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tasa_Cap", type="integer", nullable=false)
     */
    private $tasaCap;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Deprecia_Mensual", type="boolean", nullable=false)
     */
    private $depreciaMensual;



    /**
     * Get cnmb
     *
     * @return string 
     */
    public function getCnmb()
    {
        return $this->cnmb;
    }

    /**
     * Set descCnmb
     *
     * @param string $descCnmb
     * @return CnmbActivofijo
     */
    public function setDescCnmb($descCnmb)
    {
        $this->descCnmb = $descCnmb;

        return $this;
    }

    /**
     * Get descCnmb
     *
     * @return string 
     */
    public function getDescCnmb()
    {
        return $this->descCnmb;
    }

    /**
     * Set tasaDepreciacion
     *
     * @param integer $tasaDepreciacion
     * @return CnmbActivofijo
     */
    public function setTasaDepreciacion($tasaDepreciacion)
    {
        $this->tasaDepreciacion = $tasaDepreciacion;

        return $this;
    }

    /**
     * Get tasaDepreciacion
     *
     * @return integer 
     */
    public function getTasaDepreciacion()
    {
        return $this->tasaDepreciacion;
    }

    /**
     * Set tasaRep
     *
     * @param integer $tasaRep
     * @return CnmbActivofijo
     */
    public function setTasaRep($tasaRep)
    {
        $this->tasaRep = $tasaRep;

        return $this;
    }

    /**
     * Get tasaRep
     *
     * @return integer 
     */
    public function getTasaRep()
    {
        return $this->tasaRep;
    }

    /**
     * Set tasaCap
     *
     * @param integer $tasaCap
     * @return CnmbActivofijo
     */
    public function setTasaCap($tasaCap)
    {
        $this->tasaCap = $tasaCap;

        return $this;
    }

    /**
     * Get tasaCap
     *
     * @return integer 
     */
    public function getTasaCap()
    {
        return $this->tasaCap;
    }

    /**
     * Set depreciaMensual
     *
     * @param boolean $depreciaMensual
     * @return CnmbActivofijo
     */
    public function setDepreciaMensual($depreciaMensual)
    {
        $this->depreciaMensual = $depreciaMensual;

        return $this;
    }

    /**
     * Get depreciaMensual
     *
     * @return boolean 
     */
    public function getDepreciaMensual()
    {
        return $this->depreciaMensual;
    }
}
