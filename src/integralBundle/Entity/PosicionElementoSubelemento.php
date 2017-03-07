<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosicionElementoSubelemento
 *
 * @ORM\Table(name="Posicion_Elemento_SubElemento", indexes={@ORM\Index(name="Px_Pos2", columns={"Elemento", "Subelemento", "Centro_Costo"})})
 * @ORM\Entity
 */
class PosicionElementoSubelemento
{
    /**
     * @var string
     *
     * @ORM\Column(name="Cta_Gasto", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctaGasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Elemento", type="string", length=15, nullable=false)
     */
    private $elemento;

    /**
     * @var string
     *
     * @ORM\Column(name="Subelemento", type="string", length=15, nullable=false)
     */
    private $subelemento;

    /**
     * @var string
     *
     * @ORM\Column(name="Centro_Costo", type="string", length=15, nullable=false)
     */
    private $centroCosto;



    /**
     * Get ctaGasto
     *
     * @return string 
     */
    public function getCtaGasto()
    {
        return $this->ctaGasto;
    }

    /**
     * Set elemento
     *
     * @param string $elemento
     * @return PosicionElementoSubelemento
     */
    public function setElemento($elemento)
    {
        $this->elemento = $elemento;

        return $this;
    }

    /**
     * Get elemento
     *
     * @return string 
     */
    public function getElemento()
    {
        return $this->elemento;
    }

    /**
     * Set subelemento
     *
     * @param string $subelemento
     * @return PosicionElementoSubelemento
     */
    public function setSubelemento($subelemento)
    {
        $this->subelemento = $subelemento;

        return $this;
    }

    /**
     * Get subelemento
     *
     * @return string 
     */
    public function getSubelemento()
    {
        return $this->subelemento;
    }

    /**
     * Set centroCosto
     *
     * @param string $centroCosto
     * @return PosicionElementoSubelemento
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
