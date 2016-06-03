<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmCatRespDocsQuegenera
 *
 * @ORM\Table(name="CRM_Cat_Resp_Docs_QueGenera")
 * @ORM\Entity
 */
class CrmCatRespDocsQuegenera
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Doc_QueGenera", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDocQuegenera;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=25, nullable=false)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Activa", type="boolean", nullable=false)
     */
    private $activa;



    /**
     * Get idDocQuegenera
     *
     * @return string 
     */
    public function getIdDocQuegenera()
    {
        return $this->idDocQuegenera;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CrmCatRespDocsQuegenera
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
     * @return CrmCatRespDocsQuegenera
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
