<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saldo
 *
 * @ORM\Table(name="Saldo", indexes={@ORM\Index(name="Pk_Saldo", columns={"Agrupacion", "Cta"})})
 * @ORM\Entity
 */
class Saldo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Agrupacion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agrupacion;

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
     * @var string
     *
     * @ORM\Column(name="Clasificacion", type="string", length=10, nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="SubClasificacion", type="string", length=10, nullable=false)
     */
    private $subclasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Ini", type="integer", nullable=false)
     */
    private $saldoIni;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Natu", type="boolean", nullable=false)
     */
    private $natu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo", type="integer", nullable=false)
     */
    private $saldo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Ini", type="datetime", nullable=false)
     */
    private $fechaIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cierre_Mes", type="boolean", nullable=false)
     */
    private $cierreMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Ano", type="integer", nullable=false)
     */
    private $saldoAno;



    /**
     * Get agrupacion
     *
     * @return string 
     */
    public function getAgrupacion()
    {
        return $this->agrupacion;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return Saldo
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
     * @return Saldo
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
     * @return Saldo
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
     * @return Saldo
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
     * @return Saldo
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
     * @return Saldo
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
     * @return Saldo
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
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return Saldo
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set subclasificacion
     *
     * @param string $subclasificacion
     * @return Saldo
     */
    public function setSubclasificacion($subclasificacion)
    {
        $this->subclasificacion = $subclasificacion;

        return $this;
    }

    /**
     * Get subclasificacion
     *
     * @return string 
     */
    public function getSubclasificacion()
    {
        return $this->subclasificacion;
    }

    /**
     * Set saldoIni
     *
     * @param integer $saldoIni
     * @return Saldo
     */
    public function setSaldoIni($saldoIni)
    {
        $this->saldoIni = $saldoIni;

        return $this;
    }

    /**
     * Get saldoIni
     *
     * @return integer 
     */
    public function getSaldoIni()
    {
        return $this->saldoIni;
    }

    /**
     * Set natu
     *
     * @param boolean $natu
     * @return Saldo
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
     * Set saldo
     *
     * @param integer $saldo
     * @return Saldo
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return integer 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set fechaIni
     *
     * @param \DateTime $fechaIni
     * @return Saldo
     */
    public function setFechaIni($fechaIni)
    {
        $this->fechaIni = $fechaIni;

        return $this;
    }

    /**
     * Get fechaIni
     *
     * @return \DateTime 
     */
    public function getFechaIni()
    {
        return $this->fechaIni;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Saldo
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return Saldo
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
     * Set cierreMes
     *
     * @param boolean $cierreMes
     * @return Saldo
     */
    public function setCierreMes($cierreMes)
    {
        $this->cierreMes = $cierreMes;

        return $this;
    }

    /**
     * Get cierreMes
     *
     * @return boolean 
     */
    public function getCierreMes()
    {
        return $this->cierreMes;
    }

    /**
     * Set saldoAno
     *
     * @param integer $saldoAno
     * @return Saldo
     */
    public function setSaldoAno($saldoAno)
    {
        $this->saldoAno = $saldoAno;

        return $this;
    }

    /**
     * Get saldoAno
     *
     * @return integer 
     */
    public function getSaldoAno()
    {
        return $this->saldoAno;
    }
}
