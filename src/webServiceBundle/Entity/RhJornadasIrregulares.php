<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhJornadasIrregulares
 *
 * @ORM\Table(name="RH_Jornadas_Irregulares")
 * @ORM\Entity
 */
class RhJornadasIrregulares
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Jornada", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJornada;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Jornada", type="string", length=50, nullable=false)
     */
    private $descJornada;



    /**
     * Get idJornada
     *
     * @return string 
     */
    public function getIdJornada()
    {
        return $this->idJornada;
    }

    /**
     * Set descJornada
     *
     * @param string $descJornada
     * @return RhJornadasIrregulares
     */
    public function setDescJornada($descJornada)
    {
        $this->descJornada = $descJornada;

        return $this;
    }

    /**
     * Get descJornada
     *
     * @return string 
     */
    public function getDescJornada()
    {
        return $this->descJornada;
    }
}
