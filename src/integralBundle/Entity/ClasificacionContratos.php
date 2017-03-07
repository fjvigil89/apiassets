<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionContratos
 *
 * @ORM\Table(name="Clasificacion_Contratos")
 * @ORM\Entity
 */
class ClasificacionContratos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasiContrato", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasicontrato;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ClasiContrato", type="string", length=50, nullable=false)
     */
    private $descClasicontrato;



    /**
     * Get idClasicontrato
     *
     * @return string 
     */
    public function getIdClasicontrato()
    {
        return $this->idClasicontrato;
    }

    /**
     * Set descClasicontrato
     *
     * @param string $descClasicontrato
     * @return ClasificacionContratos
     */
    public function setDescClasicontrato($descClasicontrato)
    {
        $this->descClasicontrato = $descClasicontrato;

        return $this;
    }

    /**
     * Get descClasicontrato
     *
     * @return string 
     */
    public function getDescClasicontrato()
    {
        return $this->descClasicontrato;
    }
}
