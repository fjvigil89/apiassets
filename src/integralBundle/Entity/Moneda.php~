<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moneda
 *
 * @ORM\Table(name="Moneda")
 * @ORM\Entity
 */
class Moneda
{
    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Moneda", type="string", length=30, nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=3, nullable=false)
     */
    private $codigo;



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
     * Set descMoneda
     *
     * @param string $descMoneda
     * @return Moneda
     */
    public function setDescMoneda($descMoneda)
    {
        $this->descMoneda = $descMoneda;

        return $this;
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
     * @return Moneda
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
     * @return Moneda
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

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Moneda
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
