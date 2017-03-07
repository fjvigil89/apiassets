<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoEstados
 *
 * @ORM\Table(name="Activo_Fijo_Estados")
 * @ORM\Entity
 */
class ActivoFijoEstados
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Estado_Activo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstadoActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Estado_Activo", type="string", length=30, nullable=false)
     */
    private $descEstadoActivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Disponible", type="boolean", nullable=false)
     */
    private $disponible;



    /**
     * Get idEstadoActivo
     *
     * @return string 
     */
    public function getIdEstadoActivo()
    {
        return $this->idEstadoActivo;
    }

    /**
     * Set descEstadoActivo
     *
     * @param string $descEstadoActivo
     * @return ActivoFijoEstados
     */
    public function setDescEstadoActivo($descEstadoActivo)
    {
        $this->descEstadoActivo = $descEstadoActivo;

        return $this;
    }

    /**
     * Get descEstadoActivo
     *
     * @return string 
     */
    public function getDescEstadoActivo()
    {
        return $this->descEstadoActivo;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     * @return ActivoFijoEstados
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }
}
