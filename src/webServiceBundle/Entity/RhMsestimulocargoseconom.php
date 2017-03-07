<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhMsestimulocargoseconom
 *
 * @ORM\Table(name="RH_MSEstimuloCargosEconom")
 * @ORM\Entity
 */
class RhMsestimulocargoseconom
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
     * @var integer
     *
     * @ORM\Column(name="Cuantia", type="integer", nullable=false)
     */
    private $cuantia;



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
     * @return RhMsestimulocargoseconom
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
     * Set cuantia
     *
     * @param integer $cuantia
     * @return RhMsestimulocargoseconom
     */
    public function setCuantia($cuantia)
    {
        $this->cuantia = $cuantia;

        return $this;
    }

    /**
     * Get cuantia
     *
     * @return integer 
     */
    public function getCuantia()
    {
        return $this->cuantia;
    }
}
