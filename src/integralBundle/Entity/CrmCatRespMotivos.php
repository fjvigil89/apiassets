<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmCatRespMotivos
 *
 * @ORM\Table(name="CRM_Cat_Resp_Motivos")
 * @ORM\Entity
 */
class CrmCatRespMotivos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Causa", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCausa;

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
     * Get idCausa
     *
     * @return string 
     */
    public function getIdCausa()
    {
        return $this->idCausa;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CrmCatRespMotivos
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
     * @return CrmCatRespMotivos
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
