<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoTipos
 *
 * @ORM\Table(name="Activo_Fijo_Tipos")
 * @ORM\Entity
 */
class ActivoFijoTipos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_TipoActivoFijo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoactivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_TipoActivoFijo", type="string", length=30, nullable=false)
     */
    private $descTipoactivofijo;



    /**
     * Get idTipoactivofijo
     *
     * @return string 
     */
    public function getIdTipoactivofijo()
    {
        return $this->idTipoactivofijo;
    }

    /**
     * Set descTipoactivofijo
     *
     * @param string $descTipoactivofijo
     * @return ActivoFijoTipos
     */
    public function setDescTipoactivofijo($descTipoactivofijo)
    {
        $this->descTipoactivofijo = $descTipoactivofijo;

        return $this;
    }

    /**
     * Get descTipoactivofijo
     *
     * @return string 
     */
    public function getDescTipoactivofijo()
    {
        return $this->descTipoactivofijo;
    }
}
