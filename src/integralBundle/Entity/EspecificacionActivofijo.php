<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EspecificacionActivofijo
 *
 * @ORM\Table(name="Especificacion_ActivoFijo")
 * @ORM\Entity
 */
class EspecificacionActivofijo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Espec_ActivoFijo", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codEspecActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Espec_ActivoFijo", type="string", length=50, nullable=false)
     */
    private $descEspecActivofijo;



    /**
     * Get codEspecActivofijo
     *
     * @return string 
     */
    public function getCodEspecActivofijo()
    {
        return $this->codEspecActivofijo;
    }

    /**
     * Set descEspecActivofijo
     *
     * @param string $descEspecActivofijo
     * @return EspecificacionActivofijo
     */
    public function setDescEspecActivofijo($descEspecActivofijo)
    {
        $this->descEspecActivofijo = $descEspecActivofijo;

        return $this;
    }

    /**
     * Get descEspecActivofijo
     *
     * @return string 
     */
    public function getDescEspecActivofijo()
    {
        return $this->descEspecActivofijo;
    }
}
