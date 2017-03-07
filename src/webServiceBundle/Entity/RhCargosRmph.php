<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCargosRmph
 *
 * @ORM\Table(name="RH_Cargos_RMPH")
 * @ORM\Entity
 */
class RhCargosRmph
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cargo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cargo", type="string", length=120, nullable=false)
     */
    private $descCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="Requisitos", type="text", length=-1, nullable=false)
     */
    private $requisitos;

    /**
     * @var string
     *
     * @ORM\Column(name="Medidas_Proteccion_Higiene", type="text", length=-1, nullable=false)
     */
    private $medidasProteccionHigiene;



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
     * @return RhCargosRmph
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
     * Set requisitos
     *
     * @param string $requisitos
     * @return RhCargosRmph
     */
    public function setRequisitos($requisitos)
    {
        $this->requisitos = $requisitos;

        return $this;
    }

    /**
     * Get requisitos
     *
     * @return string 
     */
    public function getRequisitos()
    {
        return $this->requisitos;
    }

    /**
     * Set medidasProteccionHigiene
     *
     * @param string $medidasProteccionHigiene
     * @return RhCargosRmph
     */
    public function setMedidasProteccionHigiene($medidasProteccionHigiene)
    {
        $this->medidasProteccionHigiene = $medidasProteccionHigiene;

        return $this;
    }

    /**
     * Get medidasProteccionHigiene
     *
     * @return string 
     */
    public function getMedidasProteccionHigiene()
    {
        return $this->medidasProteccionHigiene;
    }
}
