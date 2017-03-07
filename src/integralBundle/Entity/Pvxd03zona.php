<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvxd03zona
 *
 * @ORM\Table(name="PVXD_03Zona")
 * @ORM\Entity
 */
class Pvxd03zona
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Zona", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idZona;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Zona", type="string", length=50, nullable=false)
     */
    private $descZona;



    /**
     * Get idZona
     *
     * @return string 
     */
    public function getIdZona()
    {
        return $this->idZona;
    }

    /**
     * Set descZona
     *
     * @param string $descZona
     * @return Pvxd03zona
     */
    public function setDescZona($descZona)
    {
        $this->descZona = $descZona;

        return $this;
    }

    /**
     * Get descZona
     *
     * @return string 
     */
    public function getDescZona()
    {
        return $this->descZona;
    }
}
