<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SectorCliente
 *
 * @ORM\Table(name="Sector_Cliente")
 * @ORM\Entity
 */
class SectorCliente
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Sector", type="string", length=1, nullable=true)
     */
    private $idSector;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Sector", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $descSector;



    /**
     * Set idSector
     *
     * @param string $idSector
     * @return SectorCliente
     */
    public function setIdSector($idSector)
    {
        $this->idSector = $idSector;

        return $this;
    }

    /**
     * Get idSector
     *
     * @return string 
     */
    public function getIdSector()
    {
        return $this->idSector;
    }

    /**
     * Get descSector
     *
     * @return string 
     */
    public function getDescSector()
    {
        return $this->descSector;
    }
}
