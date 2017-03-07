<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoTiposEntradas
 *
 * @ORM\Table(name="Activo_Fijo_Tipos_Entradas")
 * @ORM\Entity
 */
class ActivoFijoTiposEntradas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Entrada_Activo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntradaActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Entrada_Activo", type="string", length=30, nullable=false)
     */
    private $descEntradaActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Estado_Activo", type="string", length=3, nullable=false)
     */
    private $idEstadoActivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabiliza", type="boolean", nullable=false)
     */
    private $contabiliza;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;



    /**
     * Get idEntradaActivo
     *
     * @return string 
     */
    public function getIdEntradaActivo()
    {
        return $this->idEntradaActivo;
    }

    /**
     * Set descEntradaActivo
     *
     * @param string $descEntradaActivo
     * @return ActivoFijoTiposEntradas
     */
    public function setDescEntradaActivo($descEntradaActivo)
    {
        $this->descEntradaActivo = $descEntradaActivo;

        return $this;
    }

    /**
     * Get descEntradaActivo
     *
     * @return string 
     */
    public function getDescEntradaActivo()
    {
        return $this->descEntradaActivo;
    }

    /**
     * Set idEstadoActivo
     *
     * @param string $idEstadoActivo
     * @return ActivoFijoTiposEntradas
     */
    public function setIdEstadoActivo($idEstadoActivo)
    {
        $this->idEstadoActivo = $idEstadoActivo;

        return $this;
    }

    /**
     * Get idEstadoActivo
     *
     * @return string 
     */
    public function getIdEstadoActivo()
    {
        return $this->idEstadoActivo;
    }

    /**
     * Set contabiliza
     *
     * @param boolean $contabiliza
     * @return ActivoFijoTiposEntradas
     */
    public function setContabiliza($contabiliza)
    {
        $this->contabiliza = $contabiliza;

        return $this;
    }

    /**
     * Get contabiliza
     *
     * @return boolean 
     */
    public function getContabiliza()
    {
        return $this->contabiliza;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return ActivoFijoTiposEntradas
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
