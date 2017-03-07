<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRxpexport
 *
 * @ORM\Table(name="Fz_RXPExport")
 * @ORM\Entity
 */
class FzRxpexport
{
    /**
     * @var string
     *
     * @ORM\Column(name="Agrup_Ini", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agrupIni;

    /**
     * @var string
     *
     * @ORM\Column(name="Agrup_Fin", type="string", length=5, nullable=false)
     */
    private $agrupFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Ejecucion", type="datetime", nullable=false)
     */
    private $fechaEjecucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Exportado", type="smallint", nullable=false)
     */
    private $anoExportado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Exportado", type="smallint", nullable=false)
     */
    private $mesExportado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Exportado_Inv", type="boolean", nullable=false)
     */
    private $exportadoInv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Exportado_Fin", type="boolean", nullable=false)
     */
    private $exportadoFin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Exportado_Contab", type="boolean", nullable=false)
     */
    private $exportadoContab;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado_Inv", type="boolean", nullable=false)
     */
    private $cerradoInv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado_Fin", type="boolean", nullable=false)
     */
    private $cerradoFin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado_Contab", type="boolean", nullable=false)
     */
    private $cerradoContab;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel_AgrupIni", type="smallint", nullable=false)
     */
    private $nivelAgrupini;

    /**
     * @var string
     *
     * @ORM\Column(name="IdNivel_AgrupIni", type="string", length=5, nullable=false)
     */
    private $idnivelAgrupini;



    /**
     * Get agrupIni
     *
     * @return string 
     */
    public function getAgrupIni()
    {
        return $this->agrupIni;
    }

    /**
     * Set agrupFin
     *
     * @param string $agrupFin
     * @return FzRxpexport
     */
    public function setAgrupFin($agrupFin)
    {
        $this->agrupFin = $agrupFin;

        return $this;
    }

    /**
     * Get agrupFin
     *
     * @return string 
     */
    public function getAgrupFin()
    {
        return $this->agrupFin;
    }

    /**
     * Set fechaEjecucion
     *
     * @param \DateTime $fechaEjecucion
     * @return FzRxpexport
     */
    public function setFechaEjecucion($fechaEjecucion)
    {
        $this->fechaEjecucion = $fechaEjecucion;

        return $this;
    }

    /**
     * Get fechaEjecucion
     *
     * @return \DateTime 
     */
    public function getFechaEjecucion()
    {
        return $this->fechaEjecucion;
    }

    /**
     * Set anoExportado
     *
     * @param integer $anoExportado
     * @return FzRxpexport
     */
    public function setAnoExportado($anoExportado)
    {
        $this->anoExportado = $anoExportado;

        return $this;
    }

    /**
     * Get anoExportado
     *
     * @return integer 
     */
    public function getAnoExportado()
    {
        return $this->anoExportado;
    }

    /**
     * Set mesExportado
     *
     * @param integer $mesExportado
     * @return FzRxpexport
     */
    public function setMesExportado($mesExportado)
    {
        $this->mesExportado = $mesExportado;

        return $this;
    }

    /**
     * Get mesExportado
     *
     * @return integer 
     */
    public function getMesExportado()
    {
        return $this->mesExportado;
    }

    /**
     * Set exportadoInv
     *
     * @param boolean $exportadoInv
     * @return FzRxpexport
     */
    public function setExportadoInv($exportadoInv)
    {
        $this->exportadoInv = $exportadoInv;

        return $this;
    }

    /**
     * Get exportadoInv
     *
     * @return boolean 
     */
    public function getExportadoInv()
    {
        return $this->exportadoInv;
    }

    /**
     * Set exportadoFin
     *
     * @param boolean $exportadoFin
     * @return FzRxpexport
     */
    public function setExportadoFin($exportadoFin)
    {
        $this->exportadoFin = $exportadoFin;

        return $this;
    }

    /**
     * Get exportadoFin
     *
     * @return boolean 
     */
    public function getExportadoFin()
    {
        return $this->exportadoFin;
    }

    /**
     * Set exportadoContab
     *
     * @param boolean $exportadoContab
     * @return FzRxpexport
     */
    public function setExportadoContab($exportadoContab)
    {
        $this->exportadoContab = $exportadoContab;

        return $this;
    }

    /**
     * Get exportadoContab
     *
     * @return boolean 
     */
    public function getExportadoContab()
    {
        return $this->exportadoContab;
    }

    /**
     * Set cerradoInv
     *
     * @param boolean $cerradoInv
     * @return FzRxpexport
     */
    public function setCerradoInv($cerradoInv)
    {
        $this->cerradoInv = $cerradoInv;

        return $this;
    }

    /**
     * Get cerradoInv
     *
     * @return boolean 
     */
    public function getCerradoInv()
    {
        return $this->cerradoInv;
    }

    /**
     * Set cerradoFin
     *
     * @param boolean $cerradoFin
     * @return FzRxpexport
     */
    public function setCerradoFin($cerradoFin)
    {
        $this->cerradoFin = $cerradoFin;

        return $this;
    }

    /**
     * Get cerradoFin
     *
     * @return boolean 
     */
    public function getCerradoFin()
    {
        return $this->cerradoFin;
    }

    /**
     * Set cerradoContab
     *
     * @param boolean $cerradoContab
     * @return FzRxpexport
     */
    public function setCerradoContab($cerradoContab)
    {
        $this->cerradoContab = $cerradoContab;

        return $this;
    }

    /**
     * Get cerradoContab
     *
     * @return boolean 
     */
    public function getCerradoContab()
    {
        return $this->cerradoContab;
    }

    /**
     * Set nivelAgrupini
     *
     * @param integer $nivelAgrupini
     * @return FzRxpexport
     */
    public function setNivelAgrupini($nivelAgrupini)
    {
        $this->nivelAgrupini = $nivelAgrupini;

        return $this;
    }

    /**
     * Get nivelAgrupini
     *
     * @return integer 
     */
    public function getNivelAgrupini()
    {
        return $this->nivelAgrupini;
    }

    /**
     * Set idnivelAgrupini
     *
     * @param string $idnivelAgrupini
     * @return FzRxpexport
     */
    public function setIdnivelAgrupini($idnivelAgrupini)
    {
        $this->idnivelAgrupini = $idnivelAgrupini;

        return $this;
    }

    /**
     * Get idnivelAgrupini
     *
     * @return string 
     */
    public function getIdnivelAgrupini()
    {
        return $this->idnivelAgrupini;
    }
}
