<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCalendariosFeriados
 *
 * @ORM\Table(name="RH_Calendarios_Feriados")
 * @ORM\Entity
 */
class RhCalendariosFeriados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dia", type="smallint", nullable=false)
     */
    private $dia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Laborable", type="boolean", nullable=false)
     */
    private $laborable;



    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return RhCalendariosFeriados
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return RhCalendariosFeriados
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set dia
     *
     * @param integer $dia
     * @return RhCalendariosFeriados
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return integer 
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set laborable
     *
     * @param boolean $laborable
     * @return RhCalendariosFeriados
     */
    public function setLaborable($laborable)
    {
        $this->laborable = $laborable;

        return $this;
    }

    /**
     * Get laborable
     *
     * @return boolean 
     */
    public function getLaborable()
    {
        return $this->laborable;
    }
}
