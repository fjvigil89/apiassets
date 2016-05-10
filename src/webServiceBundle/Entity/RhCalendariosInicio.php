<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCalendariosInicio
 *
 * @ORM\Table(name="RH_Calendarios_Inicio")
 * @ORM\Entity
 */
class RhCalendariosInicio
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
     * @var integer
     *
     * @ORM\Column(name="Dias_Laborables", type="smallint", nullable=false)
     */
    private $diasLaborables;

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasFondoJornaleros1Q", type="smallint", nullable=false)
     */
    private $diasfondojornaleros1q;

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasFondoJornaleros2Q", type="smallint", nullable=false)
     */
    private $diasfondojornaleros2q;



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
     * Set diasLaborables
     *
     * @param integer $diasLaborables
     * @return RhCalendariosInicio
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
     * Set diasfondojornaleros1q
     *
     * @param integer $diasfondojornaleros1q
     * @return RhCalendariosInicio
     */
    public function setDiasfondojornaleros1q($diasfondojornaleros1q)
    {
        $this->diasfondojornaleros1q = $diasfondojornaleros1q;

        return $this;
    }

    /**
     * Get diasfondojornaleros1q
     *
     * @return integer 
     */
    public function getDiasfondojornaleros1q()
    {
        return $this->diasfondojornaleros1q;
    }

    /**
     * Set diasfondojornaleros2q
     *
     * @param integer $diasfondojornaleros2q
     * @return RhCalendariosInicio
     */
    public function setDiasfondojornaleros2q($diasfondojornaleros2q)
    {
        $this->diasfondojornaleros2q = $diasfondojornaleros2q;

        return $this;
    }

    /**
     * Get diasfondojornaleros2q
     *
     * @return integer 
     */
    public function getDiasfondojornaleros2q()
    {
        return $this->diasfondojornaleros2q;
    }
}
