<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhUbicacionDefensa
 *
 * @ORM\Table(name="RH_Ubicacion_Defensa")
 * @ORM\Entity
 */
class RhUbicacionDefensa
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ubicacion_Defensa", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUbicacionDefensa;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Ubicacion_Defensa", type="string", length=50, nullable=false)
     */
    private $descUbicacionDefensa;

    /**
     * @var string
     *
     * @ORM\Column(name="Siglas", type="string", length=5, nullable=false)
     */
    private $siglas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;



    /**
     * Get idUbicacionDefensa
     *
     * @return string 
     */
    public function getIdUbicacionDefensa()
    {
        return $this->idUbicacionDefensa;
    }

    /**
     * Set descUbicacionDefensa
     *
     * @param string $descUbicacionDefensa
     * @return RhUbicacionDefensa
     */
    public function setDescUbicacionDefensa($descUbicacionDefensa)
    {
        $this->descUbicacionDefensa = $descUbicacionDefensa;

        return $this;
    }

    /**
     * Get descUbicacionDefensa
     *
     * @return string 
     */
    public function getDescUbicacionDefensa()
    {
        return $this->descUbicacionDefensa;
    }

    /**
     * Set siglas
     *
     * @param string $siglas
     * @return RhUbicacionDefensa
     */
    public function setSiglas($siglas)
    {
        $this->siglas = $siglas;

        return $this;
    }

    /**
     * Get siglas
     *
     * @return string 
     */
    public function getSiglas()
    {
        return $this->siglas;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhUbicacionDefensa
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return integer 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }
}
