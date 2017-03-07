<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhProvincias
 *
 * @ORM\Table(name="RH_Provincias")
 * @ORM\Entity
 */
class RhProvincias
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Provincia", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Provincia", type="string", length=50, nullable=false)
     */
    private $descProvincia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="RepMovPendular", type="boolean", nullable=false)
     */
    private $repmovpendular;



    /**
     * Get idProvincia
     *
     * @return string 
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * Set descProvincia
     *
     * @param string $descProvincia
     * @return RhProvincias
     */
    public function setDescProvincia($descProvincia)
    {
        $this->descProvincia = $descProvincia;

        return $this;
    }

    /**
     * Get descProvincia
     *
     * @return string 
     */
    public function getDescProvincia()
    {
        return $this->descProvincia;
    }

    /**
     * Set repmovpendular
     *
     * @param boolean $repmovpendular
     * @return RhProvincias
     */
    public function setRepmovpendular($repmovpendular)
    {
        $this->repmovpendular = $repmovpendular;

        return $this;
    }

    /**
     * Get repmovpendular
     *
     * @return boolean 
     */
    public function getRepmovpendular()
    {
        return $this->repmovpendular;
    }
}
