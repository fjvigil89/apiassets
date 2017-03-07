<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CfRelacion
 *
 * @ORM\Table(name="CF_Relacion")
 * @ORM\Entity
 */
class CfRelacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Relacion", type="string", length=20, nullable=false)
     */
    private $idRelacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Relacion", type="string", length=70, nullable=false)
     */
    private $descRelacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;



    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set idRelacion
     *
     * @param string $idRelacion
     * @return CfRelacion
     */
    public function setIdRelacion($idRelacion)
    {
        $this->idRelacion = $idRelacion;

        return $this;
    }

    /**
     * Get idRelacion
     *
     * @return string 
     */
    public function getIdRelacion()
    {
        return $this->idRelacion;
    }

    /**
     * Set descRelacion
     *
     * @param string $descRelacion
     * @return CfRelacion
     */
    public function setDescRelacion($descRelacion)
    {
        $this->descRelacion = $descRelacion;

        return $this;
    }

    /**
     * Get descRelacion
     *
     * @return string 
     */
    public function getDescRelacion()
    {
        return $this->descRelacion;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return CfRelacion
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return CfRelacion
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
