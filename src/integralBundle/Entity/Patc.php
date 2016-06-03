<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patc
 *
 * @ORM\Table(name="PaTC")
 * @ORM\Entity
 */
class Patc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_CambioUB", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $tasaCambioub;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;



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
     * Set moneda
     *
     * @param string $moneda
     * @return Patc
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
     * Set tasaCambioub
     *
     * @param string $tasaCambioub
     * @return Patc
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Patc
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
