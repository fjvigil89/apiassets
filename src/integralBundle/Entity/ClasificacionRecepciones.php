<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionRecepciones
 *
 * @ORM\Table(name="Clasificacion_Recepciones")
 * @ORM\Entity
 */
class ClasificacionRecepciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasirecep", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasirecep;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ClasiRecep", type="string", length=50, nullable=false)
     */
    private $descClasirecep;



    /**
     * Get idClasirecep
     *
     * @return string 
     */
    public function getIdClasirecep()
    {
        return $this->idClasirecep;
    }

    /**
     * Set descClasirecep
     *
     * @param string $descClasirecep
     * @return ClasificacionRecepciones
     */
    public function setDescClasirecep($descClasirecep)
    {
        $this->descClasirecep = $descClasirecep;

        return $this;
    }

    /**
     * Get descClasirecep
     *
     * @return string 
     */
    public function getDescClasirecep()
    {
        return $this->descClasirecep;
    }
}
