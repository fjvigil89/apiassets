<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmCatSolicTipos
 *
 * @ORM\Table(name="CRM_Cat_Solic_Tipos")
 * @ORM\Entity
 */
class CrmCatSolicTipos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Activa", type="boolean", nullable=false)
     */
    private $activa;



    /**
     * Get idTipo
     *
     * @return string 
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CrmCatSolicTipos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set activa
     *
     * @param boolean $activa
     * @return CrmCatSolicTipos
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return boolean 
     */
    public function getActiva()
    {
        return $this->activa;
    }
}
