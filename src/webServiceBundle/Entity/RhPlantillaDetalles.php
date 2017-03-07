<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhPlantillaDetalles
 *
 * @ORM\Table(name="RH_Plantilla_Detalles")
 * @ORM\Entity
 */
class RhPlantillaDetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDireccion;

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
     * Set nivel
     *
     * @param integer $nivel
     * @return RhPlantillaDetalles
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set idDireccion
     *
     * @param string $idDireccion
     * @return RhPlantillaDetalles
     */
    public function setIdDireccion($idDireccion)
    {
        $this->idDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get idDireccion
     *
     * @return string 
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }

    /**
     * Set idCargo
     *
     * @param string $idCargo
     * @return RhPlantillaDetalles
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
     * @return RhPlantillaDetalles
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
     * @return RhPlantillaDetalles
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
     * @return RhPlantillaDetalles
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
     * @return RhPlantillaDetalles
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
     * @return RhPlantillaDetalles
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
