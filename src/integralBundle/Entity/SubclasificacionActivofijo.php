<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubclasificacionActivofijo
 *
 * @ORM\Table(name="SubClasificacion_ActivoFijo")
 * @ORM\Entity
 */
class SubclasificacionActivofijo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Subclasificacion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSubclasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Subclasificacion", type="string", length=50, nullable=false)
     */
    private $descSubclasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ManipActivoFijo", type="string", length=3, nullable=false)
     */
    private $idManipactivofijo;



    /**
     * Get idSubclasificacion
     *
     * @return string 
     */
    public function getIdSubclasificacion()
    {
        return $this->idSubclasificacion;
    }

    /**
     * Set descSubclasificacion
     *
     * @param string $descSubclasificacion
     * @return SubclasificacionActivofijo
     */
    public function setDescSubclasificacion($descSubclasificacion)
    {
        $this->descSubclasificacion = $descSubclasificacion;

        return $this;
    }

    /**
     * Get descSubclasificacion
     *
     * @return string 
     */
    public function getDescSubclasificacion()
    {
        return $this->descSubclasificacion;
    }

    /**
     * Set idManipactivofijo
     *
     * @param string $idManipactivofijo
     * @return SubclasificacionActivofijo
     */
    public function setIdManipactivofijo($idManipactivofijo)
    {
        $this->idManipactivofijo = $idManipactivofijo;

        return $this;
    }

    /**
     * Get idManipactivofijo
     *
     * @return string 
     */
    public function getIdManipactivofijo()
    {
        return $this->idManipactivofijo;
    }
}
