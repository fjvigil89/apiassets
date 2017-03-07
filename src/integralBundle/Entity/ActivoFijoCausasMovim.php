<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoCausasMovim
 *
 * @ORM\Table(name="Activo_Fijo_Causas_Movim")
 * @ORM\Entity
 */
class ActivoFijoCausasMovim
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausaMov", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCausamov;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CausaMov", type="string", length=50, nullable=false)
     */
    private $descCausamov;



    /**
     * Get idCausamov
     *
     * @return string 
     */
    public function getIdCausamov()
    {
        return $this->idCausamov;
    }

    /**
     * Set descCausamov
     *
     * @param string $descCausamov
     * @return ActivoFijoCausasMovim
     */
    public function setDescCausamov($descCausamov)
    {
        $this->descCausamov = $descCausamov;

        return $this;
    }

    /**
     * Get descCausamov
     *
     * @return string 
     */
    public function getDescCausamov()
    {
        return $this->descCausamov;
    }
}
