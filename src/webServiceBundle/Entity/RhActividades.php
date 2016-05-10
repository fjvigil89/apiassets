<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhActividades
 *
 * @ORM\Table(name="RH_Actividades")
 * @ORM\Entity
 */
class RhActividades
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Actividad", type="string", length=50, nullable=false)
     */
    private $descActividad;



    /**
     * Get idActividad
     *
     * @return string 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set descActividad
     *
     * @param string $descActividad
     * @return RhActividades
     */
    public function setDescActividad($descActividad)
    {
        $this->descActividad = $descActividad;

        return $this;
    }

    /**
     * Get descActividad
     *
     * @return string 
     */
    public function getDescActividad()
    {
        return $this->descActividad;
    }
}
