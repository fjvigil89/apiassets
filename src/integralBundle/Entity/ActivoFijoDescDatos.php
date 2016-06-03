<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoDescDatos
 *
 * @ORM\Table(name="Activo_Fijo_Desc_Datos")
 * @ORM\Entity
 */
class ActivoFijoDescDatos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Dato", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $descDato;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Dato", type="string", length=1, nullable=false)
     */
    private $tipoDato;



    /**
     * Get descDato
     *
     * @return string 
     */
    public function getDescDato()
    {
        return $this->descDato;
    }

    /**
     * Set tipoDato
     *
     * @param string $tipoDato
     * @return ActivoFijoDescDatos
     */
    public function setTipoDato($tipoDato)
    {
        $this->tipoDato = $tipoDato;

        return $this;
    }

    /**
     * Get tipoDato
     *
     * @return string 
     */
    public function getTipoDato()
    {
        return $this->tipoDato;
    }
}
