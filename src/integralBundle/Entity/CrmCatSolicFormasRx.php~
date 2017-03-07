<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmCatSolicFormasRx
 *
 * @ORM\Table(name="CRM_Cat_Solic_Formas_Rx")
 * @ORM\Entity
 */
class CrmCatSolicFormasRx
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Forma", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idForma;

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
     * Get idForma
     *
     * @return string 
     */
    public function getIdForma()
    {
        return $this->idForma;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CrmCatSolicFormasRx
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
     * @return CrmCatSolicFormasRx
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
