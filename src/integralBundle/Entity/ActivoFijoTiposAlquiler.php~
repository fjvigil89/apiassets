<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoTiposAlquiler
 *
 * @ORM\Table(name="Activo_Fijo_Tipos_Alquiler")
 * @ORM\Entity
 */
class ActivoFijoTiposAlquiler
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_Alquiler", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoAlquiler;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Tipo_Alquiler", type="string", length=50, nullable=false)
     */
    private $descTipoAlquiler;



    /**
     * Get idTipoAlquiler
     *
     * @return string 
     */
    public function getIdTipoAlquiler()
    {
        return $this->idTipoAlquiler;
    }

    /**
     * Set descTipoAlquiler
     *
     * @param string $descTipoAlquiler
     * @return ActivoFijoTiposAlquiler
     */
    public function setDescTipoAlquiler($descTipoAlquiler)
    {
        $this->descTipoAlquiler = $descTipoAlquiler;

        return $this;
    }

    /**
     * Get descTipoAlquiler
     *
     * @return string 
     */
    public function getDescTipoAlquiler()
    {
        return $this->descTipoAlquiler;
    }
}
