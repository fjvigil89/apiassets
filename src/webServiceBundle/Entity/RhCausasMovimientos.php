<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCausasMovimientos
 *
 * @ORM\Table(name="RH_Causas_Movimientos")
 * @ORM\Entity
 */
class RhCausasMovimientos
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
     * @return RhCausasMovimientos
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
