<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoClasifMovim
 *
 * @ORM\Table(name="Activo_Fijo_Clasif_Movim")
 * @ORM\Entity
 */
class ActivoFijoClasifMovim
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasifMov", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasifmov;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ClasifMov", type="string", length=50, nullable=false)
     */
    private $descClasifmov;



    /**
     * Get idClasifmov
     *
     * @return string 
     */
    public function getIdClasifmov()
    {
        return $this->idClasifmov;
    }

    /**
     * Set descClasifmov
     *
     * @param string $descClasifmov
     * @return ActivoFijoClasifMovim
     */
    public function setDescClasifmov($descClasifmov)
    {
        $this->descClasifmov = $descClasifmov;

        return $this;
    }

    /**
     * Get descClasifmov
     *
     * @return string 
     */
    public function getDescClasifmov()
    {
        return $this->descClasifmov;
    }
}
