<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRxauZoef3BcompSal
 *
 * @ORM\Table(name="Fz_RxAU_ZoEF3_BComp_Sal")
 * @ORM\Entity
 */
class FzRxauZoef3BcompSal
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fin", type="datetime", nullable=false)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     */
    private $cta;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta", type="string", length=20, nullable=false)
     */
    private $subcta;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis", type="string", length=20, nullable=false)
     */
    private $analisis;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis", type="string", length=20, nullable=false)
     */
    private $subanalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe", type="string", length=20, nullable=false)
     */
    private $epigrafe;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida", type="string", length=20, nullable=false)
     */
    private $partida;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Natu", type="boolean", nullable=false)
     */
    private $natu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Debe_Acum", type="integer", nullable=false)
     */
    private $debeAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Haber_Acum", type="integer", nullable=false)
     */
    private $haberAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Acum", type="integer", nullable=false)
     */
    private $saldoAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Debe_Ant", type="integer", nullable=false)
     */
    private $debeAnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Haber_Ant", type="integer", nullable=false)
     */
    private $haberAnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Ant", type="integer", nullable=false)
     */
    private $saldoAnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Debe_Per", type="integer", nullable=false)
     */
    private $debePer;

    /**
     * @var integer
     *
     * @ORM\Column(name="Haber_Per", type="integer", nullable=false)
     */
    private $haberPer;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Per", type="integer", nullable=false)
     */
    private $saldoPer;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_INI_ANO", type="integer", nullable=false)
     */
    private $saldoIniAno;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsync;



    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return FzRxauZoef3BcompSal
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return FzRxauZoef3BcompSal
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return FzRxauZoef3BcompSal
     */
    public function setCta($cta)
    {
        $this->cta = $cta;

        return $this;
    }

    /**
     * Get cta
     *
     * @return string 
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set subcta
     *
     * @param string $subcta
     * @return FzRxauZoef3BcompSal
     */
    public function setSubcta($subcta)
    {
        $this->subcta = $subcta;

        return $this;
    }

    /**
     * Get subcta
     *
     * @return string 
     */
    public function getSubcta()
    {
        return $this->subcta;
    }

    /**
     * Set analisis
     *
     * @param string $analisis
     * @return FzRxauZoef3BcompSal
     */
    public function setAnalisis($analisis)
    {
        $this->analisis = $analisis;

        return $this;
    }

    /**
     * Get analisis
     *
     * @return string 
     */
    public function getAnalisis()
    {
        return $this->analisis;
    }

    /**
     * Set subanalisis
     *
     * @param string $subanalisis
     * @return FzRxauZoef3BcompSal
     */
    public function setSubanalisis($subanalisis)
    {
        $this->subanalisis = $subanalisis;

        return $this;
    }

    /**
     * Get subanalisis
     *
     * @return string 
     */
    public function getSubanalisis()
    {
        return $this->subanalisis;
    }

    /**
     * Set epigrafe
     *
     * @param string $epigrafe
     * @return FzRxauZoef3BcompSal
     */
    public function setEpigrafe($epigrafe)
    {
        $this->epigrafe = $epigrafe;

        return $this;
    }

    /**
     * Get epigrafe
     *
     * @return string 
     */
    public function getEpigrafe()
    {
        return $this->epigrafe;
    }

    /**
     * Set partida
     *
     * @param string $partida
     * @return FzRxauZoef3BcompSal
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return string 
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return FzRxauZoef3BcompSal
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set natu
     *
     * @param boolean $natu
     * @return FzRxauZoef3BcompSal
     */
    public function setNatu($natu)
    {
        $this->natu = $natu;

        return $this;
    }

    /**
     * Get natu
     *
     * @return boolean 
     */
    public function getNatu()
    {
        return $this->natu;
    }

    /**
     * Set debeAcum
     *
     * @param integer $debeAcum
     * @return FzRxauZoef3BcompSal
     */
    public function setDebeAcum($debeAcum)
    {
        $this->debeAcum = $debeAcum;

        return $this;
    }

    /**
     * Get debeAcum
     *
     * @return integer 
     */
    public function getDebeAcum()
    {
        return $this->debeAcum;
    }

    /**
     * Set haberAcum
     *
     * @param integer $haberAcum
     * @return FzRxauZoef3BcompSal
     */
    public function setHaberAcum($haberAcum)
    {
        $this->haberAcum = $haberAcum;

        return $this;
    }

    /**
     * Get haberAcum
     *
     * @return integer 
     */
    public function getHaberAcum()
    {
        return $this->haberAcum;
    }

    /**
     * Set saldoAcum
     *
     * @param integer $saldoAcum
     * @return FzRxauZoef3BcompSal
     */
    public function setSaldoAcum($saldoAcum)
    {
        $this->saldoAcum = $saldoAcum;

        return $this;
    }

    /**
     * Get saldoAcum
     *
     * @return integer 
     */
    public function getSaldoAcum()
    {
        return $this->saldoAcum;
    }

    /**
     * Set debeAnt
     *
     * @param integer $debeAnt
     * @return FzRxauZoef3BcompSal
     */
    public function setDebeAnt($debeAnt)
    {
        $this->debeAnt = $debeAnt;

        return $this;
    }

    /**
     * Get debeAnt
     *
     * @return integer 
     */
    public function getDebeAnt()
    {
        return $this->debeAnt;
    }

    /**
     * Set haberAnt
     *
     * @param integer $haberAnt
     * @return FzRxauZoef3BcompSal
     */
    public function setHaberAnt($haberAnt)
    {
        $this->haberAnt = $haberAnt;

        return $this;
    }

    /**
     * Get haberAnt
     *
     * @return integer 
     */
    public function getHaberAnt()
    {
        return $this->haberAnt;
    }

    /**
     * Set saldoAnt
     *
     * @param integer $saldoAnt
     * @return FzRxauZoef3BcompSal
     */
    public function setSaldoAnt($saldoAnt)
    {
        $this->saldoAnt = $saldoAnt;

        return $this;
    }

    /**
     * Get saldoAnt
     *
     * @return integer 
     */
    public function getSaldoAnt()
    {
        return $this->saldoAnt;
    }

    /**
     * Set debePer
     *
     * @param integer $debePer
     * @return FzRxauZoef3BcompSal
     */
    public function setDebePer($debePer)
    {
        $this->debePer = $debePer;

        return $this;
    }

    /**
     * Get debePer
     *
     * @return integer 
     */
    public function getDebePer()
    {
        return $this->debePer;
    }

    /**
     * Set haberPer
     *
     * @param integer $haberPer
     * @return FzRxauZoef3BcompSal
     */
    public function setHaberPer($haberPer)
    {
        $this->haberPer = $haberPer;

        return $this;
    }

    /**
     * Get haberPer
     *
     * @return integer 
     */
    public function getHaberPer()
    {
        return $this->haberPer;
    }

    /**
     * Set saldoPer
     *
     * @param integer $saldoPer
     * @return FzRxauZoef3BcompSal
     */
    public function setSaldoPer($saldoPer)
    {
        $this->saldoPer = $saldoPer;

        return $this;
    }

    /**
     * Get saldoPer
     *
     * @return integer 
     */
    public function getSaldoPer()
    {
        return $this->saldoPer;
    }

    /**
     * Set saldoIniAno
     *
     * @param integer $saldoIniAno
     * @return FzRxauZoef3BcompSal
     */
    public function setSaldoIniAno($saldoIniAno)
    {
        $this->saldoIniAno = $saldoIniAno;

        return $this;
    }

    /**
     * Get saldoIniAno
     *
     * @return integer 
     */
    public function getSaldoIniAno()
    {
        return $this->saldoIniAno;
    }

    /**
     * Get idsync
     *
     * @return uniqueidentifier 
     */
    public function getIdsync()
    {
        return $this->idsync;
    }
}
