<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRzo2estadoSit
 *
 * @ORM\Table(name="Fz_RZo2Estado_Sit")
 * @ORM\Entity
 */
class FzRzo2estadoSit
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
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion_CALC", type="string", length=5, nullable=false)
     */
    private $idAgrupacionCalc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     */
    private $cta;

    /**
     * @var string
     *
     * @ORM\Column(name="subCta", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="Clasificacion", type="string", length=2, nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="SubClasific", type="string", length=2, nullable=false)
     */
    private $subclasific;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Reguladora", type="boolean", nullable=false)
     */
    private $reguladora;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Naturaleza", type="boolean", nullable=false)
     */
    private $naturaleza;

    /**
     * @var string
     *
     * @ORM\Column(name="Especificacion", type="string", length=50, nullable=false)
     */
    private $especificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_MY", type="datetime", nullable=false)
     */
    private $fechaMy;

    /**
     * @var string
     *
     * @ORM\Column(name="Nivel", type="string", length=2, nullable=false)
     */
    private $nivel;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden", type="smallint", nullable=false)
     */
    private $orden;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_INI", type="integer", nullable=false)
     */
    private $saldoIni;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo", type="integer", nullable=false)
     */
    private $saldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_XX", type="integer", nullable=false)
     */
    private $saldoXx;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Cta", type="integer", nullable=false)
     */
    private $saldoCta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_SubCta", type="integer", nullable=false)
     */
    private $saldoSubcta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Analisis", type="integer", nullable=false)
     */
    private $saldoAnalisis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_SubAnalisis", type="integer", nullable=false)
     */
    private $saldoSubanalisis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Epigrafe", type="integer", nullable=false)
     */
    private $saldoEpigrafe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Partida", type="integer", nullable=false)
     */
    private $saldoPartida;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     */
    private $idsync;



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
     * Set idAgrupacionCalc
     *
     * @param string $idAgrupacionCalc
     * @return FzRzo2estadoSit
     */
    public function setIdAgrupacionCalc($idAgrupacionCalc)
    {
        $this->idAgrupacionCalc = $idAgrupacionCalc;

        return $this;
    }

    /**
     * Get idAgrupacionCalc
     *
     * @return string 
     */
    public function getIdAgrupacionCalc()
    {
        return $this->idAgrupacionCalc;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return FzRzo2estadoSit
     */
    public function setTipoMoneda($tipoMoneda)
    {
        $this->tipoMoneda = $tipoMoneda;

        return $this;
    }

    /**
     * Get tipoMoneda
     *
     * @return integer 
     */
    public function getTipoMoneda()
    {
        return $this->tipoMoneda;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return FzRzo2estadoSit
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
     * @return FzRzo2estadoSit
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
     * @return FzRzo2estadoSit
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
     * @return FzRzo2estadoSit
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
     * @return FzRzo2estadoSit
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
     * @return FzRzo2estadoSit
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
     * @return FzRzo2estadoSit
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
     * @return FzRzo2estadoSit
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
     * Set subclasific
     *
     * @param string $subclasific
     * @return FzRzo2estadoSit
     */
    public function setSubclasific($subclasific)
    {
        $this->subclasific = $subclasific;

        return $this;
    }

    /**
     * Get subclasific
     *
     * @return string 
     */
    public function getSubclasific()
    {
        return $this->subclasific;
    }

    /**
     * Set reguladora
     *
     * @param boolean $reguladora
     * @return FzRzo2estadoSit
     */
    public function setReguladora($reguladora)
    {
        $this->reguladora = $reguladora;

        return $this;
    }

    /**
     * Get reguladora
     *
     * @return boolean 
     */
    public function getReguladora()
    {
        return $this->reguladora;
    }

    /**
     * Set naturaleza
     *
     * @param boolean $naturaleza
     * @return FzRzo2estadoSit
     */
    public function setNaturaleza($naturaleza)
    {
        $this->naturaleza = $naturaleza;

        return $this;
    }

    /**
     * Get naturaleza
     *
     * @return boolean 
     */
    public function getNaturaleza()
    {
        return $this->naturaleza;
    }

    /**
     * Set especificacion
     *
     * @param string $especificacion
     * @return FzRzo2estadoSit
     */
    public function setEspecificacion($especificacion)
    {
        $this->especificacion = $especificacion;

        return $this;
    }

    /**
     * Get especificacion
     *
     * @return string 
     */
    public function getEspecificacion()
    {
        return $this->especificacion;
    }

    /**
     * Set fechaMy
     *
     * @param \DateTime $fechaMy
     * @return FzRzo2estadoSit
     */
    public function setFechaMy($fechaMy)
    {
        $this->fechaMy = $fechaMy;

        return $this;
    }

    /**
     * Get fechaMy
     *
     * @return \DateTime 
     */
    public function getFechaMy()
    {
        return $this->fechaMy;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     * @return FzRzo2estadoSit
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return FzRzo2estadoSit
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set saldoIni
     *
     * @param integer $saldoIni
     * @return FzRzo2estadoSit
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
     * Set saldo
     *
     * @param integer $saldo
     * @return FzRzo2estadoSit
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
     * Set saldoXx
     *
     * @param integer $saldoXx
     * @return FzRzo2estadoSit
     */
    public function setSaldoXx($saldoXx)
    {
        $this->saldoXx = $saldoXx;

        return $this;
    }

    /**
     * Get saldoXx
     *
     * @return integer 
     */
    public function getSaldoXx()
    {
        return $this->saldoXx;
    }

    /**
     * Set saldoCta
     *
     * @param integer $saldoCta
     * @return FzRzo2estadoSit
     */
    public function setSaldoCta($saldoCta)
    {
        $this->saldoCta = $saldoCta;

        return $this;
    }

    /**
     * Get saldoCta
     *
     * @return integer 
     */
    public function getSaldoCta()
    {
        return $this->saldoCta;
    }

    /**
     * Set saldoSubcta
     *
     * @param integer $saldoSubcta
     * @return FzRzo2estadoSit
     */
    public function setSaldoSubcta($saldoSubcta)
    {
        $this->saldoSubcta = $saldoSubcta;

        return $this;
    }

    /**
     * Get saldoSubcta
     *
     * @return integer 
     */
    public function getSaldoSubcta()
    {
        return $this->saldoSubcta;
    }

    /**
     * Set saldoAnalisis
     *
     * @param integer $saldoAnalisis
     * @return FzRzo2estadoSit
     */
    public function setSaldoAnalisis($saldoAnalisis)
    {
        $this->saldoAnalisis = $saldoAnalisis;

        return $this;
    }

    /**
     * Get saldoAnalisis
     *
     * @return integer 
     */
    public function getSaldoAnalisis()
    {
        return $this->saldoAnalisis;
    }

    /**
     * Set saldoSubanalisis
     *
     * @param integer $saldoSubanalisis
     * @return FzRzo2estadoSit
     */
    public function setSaldoSubanalisis($saldoSubanalisis)
    {
        $this->saldoSubanalisis = $saldoSubanalisis;

        return $this;
    }

    /**
     * Get saldoSubanalisis
     *
     * @return integer 
     */
    public function getSaldoSubanalisis()
    {
        return $this->saldoSubanalisis;
    }

    /**
     * Set saldoEpigrafe
     *
     * @param integer $saldoEpigrafe
     * @return FzRzo2estadoSit
     */
    public function setSaldoEpigrafe($saldoEpigrafe)
    {
        $this->saldoEpigrafe = $saldoEpigrafe;

        return $this;
    }

    /**
     * Get saldoEpigrafe
     *
     * @return integer 
     */
    public function getSaldoEpigrafe()
    {
        return $this->saldoEpigrafe;
    }

    /**
     * Set saldoPartida
     *
     * @param integer $saldoPartida
     * @return FzRzo2estadoSit
     */
    public function setSaldoPartida($saldoPartida)
    {
        $this->saldoPartida = $saldoPartida;

        return $this;
    }

    /**
     * Get saldoPartida
     *
     * @return integer 
     */
    public function getSaldoPartida()
    {
        return $this->saldoPartida;
    }

    /**
     * Set idsync
     *
     * @param uniqueidentifier $idsync
     * @return FzRzo2estadoSit
     */
    public function setIdsync($idsync)
    {
        $this->idsync = $idsync;

        return $this;
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
