<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoTiposSalidas
 *
 * @ORM\Table(name="Activo_Fijo_Tipos_Salidas")
 * @ORM\Entity
 */
class ActivoFijoTiposSalidas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Salida_Activo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSalidaActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Salida_Activo", type="string", length=30, nullable=false)
     */
    private $descSalidaActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Estado_Activo", type="string", length=3, nullable=false)
     */
    private $idEstadoActivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Depreciar", type="boolean", nullable=false)
     */
    private $depreciar;

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
     * Get idSalidaActivo
     *
     * @return string 
     */
    public function getIdSalidaActivo()
    {
        return $this->idSalidaActivo;
    }

    /**
     * Set descSalidaActivo
     *
     * @param string $descSalidaActivo
     * @return ActivoFijoTiposSalidas
     */
    public function setDescSalidaActivo($descSalidaActivo)
    {
        $this->descSalidaActivo = $descSalidaActivo;

        return $this;
    }

    /**
     * Get descSalidaActivo
     *
     * @return string 
     */
    public function getDescSalidaActivo()
    {
        return $this->descSalidaActivo;
    }

    /**
     * Set idEstadoActivo
     *
     * @param string $idEstadoActivo
     * @return ActivoFijoTiposSalidas
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
     * Set depreciar
     *
     * @param boolean $depreciar
     * @return ActivoFijoTiposSalidas
     */
    public function setDepreciar($depreciar)
    {
        $this->depreciar = $depreciar;

        return $this;
    }

    /**
     * Get depreciar
     *
     * @return boolean 
     */
    public function getDepreciar()
    {
        return $this->depreciar;
    }

    /**
     * Set contabiliza
     *
     * @param boolean $contabiliza
     * @return ActivoFijoTiposSalidas
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
     * @return ActivoFijoTiposSalidas
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
