<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmCatMotivosInteres
 *
 * @ORM\Table(name="CRM_Cat_Motivos_Interes")
 * @ORM\Entity
 */
class CrmCatMotivosInteres
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Motivo", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMotivo;

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
     * Get idMotivo
     *
     * @return string 
     */
    public function getIdMotivo()
    {
        return $this->idMotivo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CrmCatMotivosInteres
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
     * @return CrmCatMotivosInteres
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
