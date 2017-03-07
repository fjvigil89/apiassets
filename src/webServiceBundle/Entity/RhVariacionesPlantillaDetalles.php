<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhVariacionesPlantillaDetalles
 *
 * @ORM\Table(name="RH_Variaciones_Plantilla_Detalles")
 * @ORM\Entity
 */
class RhVariacionesPlantillaDetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NoVariacion", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $novariacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cargo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cargo", type="string", length=120, nullable=false)
     */
    private $descCargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Propuesta", type="integer", nullable=false)
     */
    private $propuesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Aprobadas", type="integer", nullable=false)
     */
    private $aprobadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Exceso", type="integer", nullable=false)
     */
    private $exceso;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantidadPlazasAnterior", type="integer", nullable=false)
     */
    private $cantidadplazasanterior;



    /**
     * Set novariacion
     *
     * @param integer $novariacion
     * @return RhVariacionesPlantillaDetalles
     */
    public function setNovariacion($novariacion)
    {
        $this->novariacion = $novariacion;

        return $this;
    }

    /**
     * Get novariacion
     *
     * @return integer 
     */
    public function getNovariacion()
    {
        return $this->novariacion;
    }

    /**
     * Set idCargo
     *
     * @param string $idCargo
     * @return RhVariacionesPlantillaDetalles
     */
    public function setIdCargo($idCargo)
    {
        $this->idCargo = $idCargo;

        return $this;
    }

    /**
     * Get idCargo
     *
     * @return string 
     */
    public function getIdCargo()
    {
        return $this->idCargo;
    }

    /**
     * Set descCargo
     *
     * @param string $descCargo
     * @return RhVariacionesPlantillaDetalles
     */
    public function setDescCargo($descCargo)
    {
        $this->descCargo = $descCargo;

        return $this;
    }

    /**
     * Get descCargo
     *
     * @return string 
     */
    public function getDescCargo()
    {
        return $this->descCargo;
    }

    /**
     * Set propuesta
     *
     * @param integer $propuesta
     * @return RhVariacionesPlantillaDetalles
     */
    public function setPropuesta($propuesta)
    {
        $this->propuesta = $propuesta;

        return $this;
    }

    /**
     * Get propuesta
     *
     * @return integer 
     */
    public function getPropuesta()
    {
        return $this->propuesta;
    }

    /**
     * Set aprobadas
     *
     * @param integer $aprobadas
     * @return RhVariacionesPlantillaDetalles
     */
    public function setAprobadas($aprobadas)
    {
        $this->aprobadas = $aprobadas;

        return $this;
    }

    /**
     * Get aprobadas
     *
     * @return integer 
     */
    public function getAprobadas()
    {
        return $this->aprobadas;
    }

    /**
     * Set exceso
     *
     * @param integer $exceso
     * @return RhVariacionesPlantillaDetalles
     */
    public function setExceso($exceso)
    {
        $this->exceso = $exceso;

        return $this;
    }

    /**
     * Get exceso
     *
     * @return integer 
     */
    public function getExceso()
    {
        return $this->exceso;
    }

    /**
     * Set cantidadplazasanterior
     *
     * @param integer $cantidadplazasanterior
     * @return RhVariacionesPlantillaDetalles
     */
    public function setCantidadplazasanterior($cantidadplazasanterior)
    {
        $this->cantidadplazasanterior = $cantidadplazasanterior;

        return $this;
    }

    /**
     * Get cantidadplazasanterior
     *
     * @return integer 
     */
    public function getCantidadplazasanterior()
    {
        return $this->cantidadplazasanterior;
    }
}
