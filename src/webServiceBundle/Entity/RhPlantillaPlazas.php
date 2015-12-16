<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhPlantillaPlazas
 *
 * @ORM\Table(name="RH_Plantilla_Plazas")
 * @ORM\Entity
 */
class RhPlantillaPlazas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Plaza", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $plaza;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     */
    private $idDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cargo", type="string", length=5, nullable=false)
     */
    private $idCargo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Vacante", type="boolean", nullable=false)
     */
    private $vacante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden", type="bigint", nullable=false)
     */
    private $orden;



    /**
     * Get plaza
     *
     * @return integer 
     */
    public function getPlaza()
    {
        return $this->plaza;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return RhPlantillaPlazas
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
     * @return RhPlantillaPlazas
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
     * @return RhPlantillaPlazas
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
     * Set vacante
     *
     * @param boolean $vacante
     * @return RhPlantillaPlazas
     */
    public function setVacante($vacante)
    {
        $this->vacante = $vacante;

        return $this;
    }

    /**
     * Get vacante
     *
     * @return boolean 
     */
    public function getVacante()
    {
        return $this->vacante;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return RhPlantillaPlazas
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }
}
