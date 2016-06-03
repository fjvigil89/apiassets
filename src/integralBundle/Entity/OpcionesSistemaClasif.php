<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpcionesSistemaClasif
 *
 * @ORM\Table(name="Opciones_Sistema_Clasif")
 * @ORM\Entity
 */
class OpcionesSistemaClasif
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Opcion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOpcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Opcion", type="string", length=100, nullable=false)
     */
    private $descOpcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;



    /**
     * Get idOpcion
     *
     * @return string 
     */
    public function getIdOpcion()
    {
        return $this->idOpcion;
    }

    /**
     * Set descOpcion
     *
     * @param string $descOpcion
     * @return OpcionesSistemaClasif
     */
    public function setDescOpcion($descOpcion)
    {
        $this->descOpcion = $descOpcion;

        return $this;
    }

    /**
     * Get descOpcion
     *
     * @return string 
     */
    public function getDescOpcion()
    {
        return $this->descOpcion;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return OpcionesSistemaClasif
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
