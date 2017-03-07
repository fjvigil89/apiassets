<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhClavesImpuntualidades
 *
 * @ORM\Table(name="RH_Claves_Impuntualidades")
 * @ORM\Entity
 */
class RhClavesImpuntualidades
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClave;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clave", type="string", length=50, nullable=false)
     */
    private $descClave;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Justificada", type="boolean", nullable=false)
     */
    private $justificada;



    /**
     * Get idClave
     *
     * @return string 
     */
    public function getIdClave()
    {
        return $this->idClave;
    }

    /**
     * Set descClave
     *
     * @param string $descClave
     * @return RhClavesImpuntualidades
     */
    public function setDescClave($descClave)
    {
        $this->descClave = $descClave;

        return $this;
    }

    /**
     * Get descClave
     *
     * @return string 
     */
    public function getDescClave()
    {
        return $this->descClave;
    }

    /**
     * Set justificada
     *
     * @param boolean $justificada
     * @return RhClavesImpuntualidades
     */
    public function setJustificada($justificada)
    {
        $this->justificada = $justificada;

        return $this;
    }

    /**
     * Get justificada
     *
     * @return boolean 
     */
    public function getJustificada()
    {
        return $this->justificada;
    }
}
