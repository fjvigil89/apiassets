<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCalendariosTipos
 *
 * @ORM\Table(name="RH_Calendarios_Tipos")
 * @ORM\Entity
 */
class RhCalendariosTipos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Calendario", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $calendario;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Calendario", type="string", length=25, nullable=false)
     */
    private $descCalendario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Laborables", type="smallint", nullable=false)
     */
    private $diasLaborables;

    /**
     * @var string
     *
     * @ORM\Column(name="FondoTiempoMes", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $fondotiempomes;

    /**
     * @var string
     *
     * @ORM\Column(name="FondoTiempoDia", type="decimal", precision=6, scale=4, nullable=false)
     */
    private $fondotiempodia;



    /**
     * Get calendario
     *
     * @return string 
     */
    public function getCalendario()
    {
        return $this->calendario;
    }

    /**
     * Set descCalendario
     *
     * @param string $descCalendario
     * @return RhCalendariosTipos
     */
    public function setDescCalendario($descCalendario)
    {
        $this->descCalendario = $descCalendario;

        return $this;
    }

    /**
     * Get descCalendario
     *
     * @return string 
     */
    public function getDescCalendario()
    {
        return $this->descCalendario;
    }

    /**
     * Set diasLaborables
     *
     * @param integer $diasLaborables
     * @return RhCalendariosTipos
     */
    public function setDiasLaborables($diasLaborables)
    {
        $this->diasLaborables = $diasLaborables;

        return $this;
    }

    /**
     * Get diasLaborables
     *
     * @return integer 
     */
    public function getDiasLaborables()
    {
        return $this->diasLaborables;
    }

    /**
     * Set fondotiempomes
     *
     * @param string $fondotiempomes
     * @return RhCalendariosTipos
     */
    public function setFondotiempomes($fondotiempomes)
    {
        $this->fondotiempomes = $fondotiempomes;

        return $this;
    }

    /**
     * Get fondotiempomes
     *
     * @return string 
     */
    public function getFondotiempomes()
    {
        return $this->fondotiempomes;
    }

    /**
     * Set fondotiempodia
     *
     * @param string $fondotiempodia
     * @return RhCalendariosTipos
     */
    public function setFondotiempodia($fondotiempodia)
    {
        $this->fondotiempodia = $fondotiempodia;

        return $this;
    }

    /**
     * Get fondotiempodia
     *
     * @return string 
     */
    public function getFondotiempodia()
    {
        return $this->fondotiempodia;
    }
}
