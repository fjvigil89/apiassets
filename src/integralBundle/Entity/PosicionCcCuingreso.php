<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosicionCcCuingreso
 *
 * @ORM\Table(name="Posicion_CC_CuIngreso")
 * @ORM\Entity
 */
class PosicionCcCuingreso
{
    /**
     * @var string
     *
     * @ORM\Column(name="Cta_Ingreso", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctaIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="Centro_Costo", type="string", length=15, nullable=false)
     */
    private $centroCosto;



    /**
     * Get ctaIngreso
     *
     * @return string 
     */
    public function getCtaIngreso()
    {
        return $this->ctaIngreso;
    }

    /**
     * Set centroCosto
     *
     * @param string $centroCosto
     * @return PosicionCcCuingreso
     */
    public function setCentroCosto($centroCosto)
    {
        $this->centroCosto = $centroCosto;

        return $this;
    }

    /**
     * Get centroCosto
     *
     * @return string 
     */
    public function getCentroCosto()
    {
        return $this->centroCosto;
    }
}
