<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brigadas
 *
 * @ORM\Table(name="Brigadas")
 * @ORM\Entity
 */
class Brigadas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Brigada", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBrigada;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Brigada", type="string", length=50, nullable=false)
     */
    private $descBrigada;



    /**
     * Get idBrigada
     *
     * @return string 
     */
    public function getIdBrigada()
    {
        return $this->idBrigada;
    }

    /**
     * Set descBrigada
     *
     * @param string $descBrigada
     * @return Brigadas
     */
    public function setDescBrigada($descBrigada)
    {
        $this->descBrigada = $descBrigada;

        return $this;
    }

    /**
     * Get descBrigada
     *
     * @return string 
     */
    public function getDescBrigada()
    {
        return $this->descBrigada;
    }
}
