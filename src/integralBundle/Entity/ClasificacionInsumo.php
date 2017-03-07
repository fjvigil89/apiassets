<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionInsumo
 *
 * @ORM\Table(name="Clasificacion_Insumo")
 * @ORM\Entity
 */
class ClasificacionInsumo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Insumo", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInsumo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Insumo", type="string", length=50, nullable=false)
     */
    private $descInsumo;



    /**
     * Get idInsumo
     *
     * @return string 
     */
    public function getIdInsumo()
    {
        return $this->idInsumo;
    }

    /**
     * Set descInsumo
     *
     * @param string $descInsumo
     * @return ClasificacionInsumo
     */
    public function setDescInsumo($descInsumo)
    {
        $this->descInsumo = $descInsumo;

        return $this;
    }

    /**
     * Get descInsumo
     *
     * @return string 
     */
    public function getDescInsumo()
    {
        return $this->descInsumo;
    }
}
