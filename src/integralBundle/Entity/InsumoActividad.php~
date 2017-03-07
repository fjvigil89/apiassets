<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InsumoActividad
 *
 * @ORM\Table(name="Insumo_Actividad")
 * @ORM\Entity
 */
class InsumoActividad
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Actividad", type="string", length=60, nullable=false)
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
     * @return InsumoActividad
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
