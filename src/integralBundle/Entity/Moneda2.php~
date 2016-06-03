<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moneda2
 *
 * @ORM\Table(name="Moneda2")
 * @ORM\Entity
 */
class Moneda2
{
    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Moneda", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $descMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_Cambio", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $tasaCambio;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_CambioUB", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $tasaCambioub;



    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Moneda2
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Get descMoneda
     *
     * @return string 
     */
    public function getDescMoneda()
    {
        return $this->descMoneda;
    }

    /**
     * Set tasaCambio
     *
     * @param string $tasaCambio
     * @return Moneda2
     */
    public function setTasaCambio($tasaCambio)
    {
        $this->tasaCambio = $tasaCambio;

        return $this;
    }

    /**
     * Get tasaCambio
     *
     * @return string 
     */
    public function getTasaCambio()
    {
        return $this->tasaCambio;
    }

    /**
     * Set tasaCambioub
     *
     * @param string $tasaCambioub
     * @return Moneda2
     */
    public function setTasaCambioub($tasaCambioub)
    {
        $this->tasaCambioub = $tasaCambioub;

        return $this;
    }

    /**
     * Get tasaCambioub
     *
     * @return string 
     */
    public function getTasaCambioub()
    {
        return $this->tasaCambioub;
    }
}
