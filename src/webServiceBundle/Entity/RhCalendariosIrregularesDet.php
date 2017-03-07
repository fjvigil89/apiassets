<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCalendariosIrregularesDet
 *
 * @ORM\Table(name="RH_Calendarios_Irregulares_Det")
 * @ORM\Entity
 */
class RhCalendariosIrregularesDet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Jornada", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idJornada;

    /**
     * @var integer
     *
     * @ORM\Column(name="IniDia", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $inidia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="IniHora", type="datetime", nullable=false)
     */
    private $inihora;

    /**
     * @var integer
     *
     * @ORM\Column(name="FinDia", type="smallint", nullable=false)
     */
    private $findia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FinHora", type="datetime", nullable=false)
     */
    private $finhora;



    /**
     * Set ano
     *
     * @param integer $ano
     * @return RhCalendariosIrregularesDet
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
     * @return RhCalendariosIrregularesDet
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
     * Set idJornada
     *
     * @param string $idJornada
     * @return RhCalendariosIrregularesDet
     */
    public function setIdJornada($idJornada)
    {
        $this->idJornada = $idJornada;

        return $this;
    }

    /**
     * Get idJornada
     *
     * @return string 
     */
    public function getIdJornada()
    {
        return $this->idJornada;
    }

    /**
     * Set inidia
     *
     * @param integer $inidia
     * @return RhCalendariosIrregularesDet
     */
    public function setInidia($inidia)
    {
        $this->inidia = $inidia;

        return $this;
    }

    /**
     * Get inidia
     *
     * @return integer 
     */
    public function getInidia()
    {
        return $this->inidia;
    }

    /**
     * Set inihora
     *
     * @param \DateTime $inihora
     * @return RhCalendariosIrregularesDet
     */
    public function setInihora($inihora)
    {
        $this->inihora = $inihora;

        return $this;
    }

    /**
     * Get inihora
     *
     * @return \DateTime 
     */
    public function getInihora()
    {
        return $this->inihora;
    }

    /**
     * Set findia
     *
     * @param integer $findia
     * @return RhCalendariosIrregularesDet
     */
    public function setFindia($findia)
    {
        $this->findia = $findia;

        return $this;
    }

    /**
     * Get findia
     *
     * @return integer 
     */
    public function getFindia()
    {
        return $this->findia;
    }

    /**
     * Set finhora
     *
     * @param \DateTime $finhora
     * @return RhCalendariosIrregularesDet
     */
    public function setFinhora($finhora)
    {
        $this->finhora = $finhora;

        return $this;
    }

    /**
     * Get finhora
     *
     * @return \DateTime 
     */
    public function getFinhora()
    {
        return $this->finhora;
    }
}
