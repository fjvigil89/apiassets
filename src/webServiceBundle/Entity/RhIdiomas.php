<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhIdiomas
 *
 * @ORM\Table(name="RH_Idiomas")
 * @ORM\Entity
 */
class RhIdiomas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Idioma", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIdioma;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Idioma", type="string", length=15, nullable=false)
     */
    private $descIdioma;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ReportFlag", type="boolean", nullable=false)
     */
    private $reportflag;



    /**
     * Get idIdioma
     *
     * @return string 
     */
    public function getIdIdioma()
    {
        return $this->idIdioma;
    }

    /**
     * Set descIdioma
     *
     * @param string $descIdioma
     * @return RhIdiomas
     */
    public function setDescIdioma($descIdioma)
    {
        $this->descIdioma = $descIdioma;

        return $this;
    }

    /**
     * Get descIdioma
     *
     * @return string 
     */
    public function getDescIdioma()
    {
        return $this->descIdioma;
    }

    /**
     * Set reportflag
     *
     * @param boolean $reportflag
     * @return RhIdiomas
     */
    public function setReportflag($reportflag)
    {
        $this->reportflag = $reportflag;

        return $this;
    }

    /**
     * Get reportflag
     *
     * @return boolean 
     */
    public function getReportflag()
    {
        return $this->reportflag;
    }
}
