<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhColectivos
 *
 * @ORM\Table(name="RH_Colectivos")
 * @ORM\Entity
 */
class RhColectivos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Colectivo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idColectivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Colectivo", type="string", length=50, nullable=false)
     */
    private $descColectivo;



    /**
     * Get idColectivo
     *
     * @return string 
     */
    public function getIdColectivo()
    {
        return $this->idColectivo;
    }

    /**
     * Set descColectivo
     *
     * @param string $descColectivo
     * @return RhColectivos
     */
    public function setDescColectivo($descColectivo)
    {
        $this->descColectivo = $descColectivo;

        return $this;
    }

    /**
     * Get descColectivo
     *
     * @return string 
     */
    public function getDescColectivo()
    {
        return $this->descColectivo;
    }
}
