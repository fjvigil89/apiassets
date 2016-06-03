<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuentasBase
 *
 * @ORM\Table(name="Cuentas_Base", indexes={@ORM\Index(name="pk_Cuentas_Base", columns={"CTA", "SubCta", "Analisis", "SubAnalisis", "Epigrafe", "Partida"})})
 * @ORM\Entity
 */
class CuentasBase
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cuenta", type="string", length=50, nullable=false)
     */
    private $idCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="CTA", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="Id_Cuenta_Trasp", type="string", length=50, nullable=false)
     */
    private $idCuentaTrasp;

    /**
     * @var string
     *
     * @ORM\Column(name="CTA_Trasp", type="string", length=20, nullable=false)
     */
    private $ctaTrasp;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta_Trasp", type="string", length=20, nullable=false)
     */
    private $subctaTrasp;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis_Trasp", type="string", length=20, nullable=false)
     */
    private $analisisTrasp;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis_Trasp", type="string", length=20, nullable=false)
     */
    private $subanalisisTrasp;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe_Trasp", type="string", length=20, nullable=false)
     */
    private $epigrafeTrasp;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida_Trasp", type="string", length=20, nullable=false)
     */
    private $partidaTrasp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cuenta_Base", type="string", length=50, nullable=false)
     */
    private $idCuentaBase;

    /**
     * @var string
     *
     * @ORM\Column(name="CTA_Base", type="string", length=20, nullable=false)
     */
    private $ctaBase;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta_Base", type="string", length=20, nullable=false)
     */
    private $subctaBase;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis_Base", type="string", length=20, nullable=false)
     */
    private $analisisBase;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis_Base", type="string", length=20, nullable=false)
     */
    private $subanalisisBase;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe_Base", type="string", length=20, nullable=false)
     */
    private $epigrafeBase;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida_Base", type="string", length=20, nullable=false)
     */
    private $partidaBase;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cuenta_Base", type="string", length=200, nullable=false)
     */
    private $descCuentaBase;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoMB_Cta_Base", type="integer", nullable=false)
     */
    private $saldombCtaBase;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoMB_Tot_Cta_Rx", type="integer", nullable=false)
     */
    private $saldombTotCtaRx;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoMB_Tot_Cta_Dis", type="integer", nullable=false)
     */
    private $saldombTotCtaDis;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoMC_Cta_Base", type="integer", nullable=false)
     */
    private $saldomcCtaBase;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoMC_Tot_Cta_Rx", type="integer", nullable=false)
     */
    private $saldomcTotCtaRx;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoMC_Tot_Cta_Dis", type="integer", nullable=false)
     */
    private $saldomcTotCtaDis;

    /**
     * @var string
     *
     * @ORM\Column(name="Coeficiente", type="decimal", precision=18, scale=9, nullable=false)
     */
    private $coeficiente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Cta_Base", type="integer", nullable=false)
     */
    private $saldoCtaBase;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Tot_Cta_Rx", type="integer", nullable=false)
     */
    private $saldoTotCtaRx;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Tot_Cta_Dis", type="integer", nullable=false)
     */
    private $saldoTotCtaDis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Fijo", type="integer", nullable=false)
     */
    private $valorFijo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_Valor_Fijo", type="boolean", nullable=false)
     */
    private $usarValorFijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador8", type="integer", nullable=false)
     */
    private $contador8;



    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set idCuenta
     *
     * @param string $idCuenta
     * @return CuentasBase
     */
    public function setIdCuenta($idCuenta)
    {
        $this->idCuenta = $idCuenta;

        return $this;
    }

    /**
     * Get idCuenta
     *
     * @return string 
     */
    public function getIdCuenta()
    {
        return $this->idCuenta;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return CuentasBase
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
     * @return CuentasBase
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
     * @return CuentasBase
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
     * @return CuentasBase
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
     * @return CuentasBase
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
     * @return CuentasBase
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
     * Set idCuentaTrasp
     *
     * @param string $idCuentaTrasp
     * @return CuentasBase
     */
    public function setIdCuentaTrasp($idCuentaTrasp)
    {
        $this->idCuentaTrasp = $idCuentaTrasp;

        return $this;
    }

    /**
     * Get idCuentaTrasp
     *
     * @return string 
     */
    public function getIdCuentaTrasp()
    {
        return $this->idCuentaTrasp;
    }

    /**
     * Set ctaTrasp
     *
     * @param string $ctaTrasp
     * @return CuentasBase
     */
    public function setCtaTrasp($ctaTrasp)
    {
        $this->ctaTrasp = $ctaTrasp;

        return $this;
    }

    /**
     * Get ctaTrasp
     *
     * @return string 
     */
    public function getCtaTrasp()
    {
        return $this->ctaTrasp;
    }

    /**
     * Set subctaTrasp
     *
     * @param string $subctaTrasp
     * @return CuentasBase
     */
    public function setSubctaTrasp($subctaTrasp)
    {
        $this->subctaTrasp = $subctaTrasp;

        return $this;
    }

    /**
     * Get subctaTrasp
     *
     * @return string 
     */
    public function getSubctaTrasp()
    {
        return $this->subctaTrasp;
    }

    /**
     * Set analisisTrasp
     *
     * @param string $analisisTrasp
     * @return CuentasBase
     */
    public function setAnalisisTrasp($analisisTrasp)
    {
        $this->analisisTrasp = $analisisTrasp;

        return $this;
    }

    /**
     * Get analisisTrasp
     *
     * @return string 
     */
    public function getAnalisisTrasp()
    {
        return $this->analisisTrasp;
    }

    /**
     * Set subanalisisTrasp
     *
     * @param string $subanalisisTrasp
     * @return CuentasBase
     */
    public function setSubanalisisTrasp($subanalisisTrasp)
    {
        $this->subanalisisTrasp = $subanalisisTrasp;

        return $this;
    }

    /**
     * Get subanalisisTrasp
     *
     * @return string 
     */
    public function getSubanalisisTrasp()
    {
        return $this->subanalisisTrasp;
    }

    /**
     * Set epigrafeTrasp
     *
     * @param string $epigrafeTrasp
     * @return CuentasBase
     */
    public function setEpigrafeTrasp($epigrafeTrasp)
    {
        $this->epigrafeTrasp = $epigrafeTrasp;

        return $this;
    }

    /**
     * Get epigrafeTrasp
     *
     * @return string 
     */
    public function getEpigrafeTrasp()
    {
        return $this->epigrafeTrasp;
    }

    /**
     * Set partidaTrasp
     *
     * @param string $partidaTrasp
     * @return CuentasBase
     */
    public function setPartidaTrasp($partidaTrasp)
    {
        $this->partidaTrasp = $partidaTrasp;

        return $this;
    }

    /**
     * Get partidaTrasp
     *
     * @return string 
     */
    public function getPartidaTrasp()
    {
        return $this->partidaTrasp;
    }

    /**
     * Set idCuentaBase
     *
     * @param string $idCuentaBase
     * @return CuentasBase
     */
    public function setIdCuentaBase($idCuentaBase)
    {
        $this->idCuentaBase = $idCuentaBase;

        return $this;
    }

    /**
     * Get idCuentaBase
     *
     * @return string 
     */
    public function getIdCuentaBase()
    {
        return $this->idCuentaBase;
    }

    /**
     * Set ctaBase
     *
     * @param string $ctaBase
     * @return CuentasBase
     */
    public function setCtaBase($ctaBase)
    {
        $this->ctaBase = $ctaBase;

        return $this;
    }

    /**
     * Get ctaBase
     *
     * @return string 
     */
    public function getCtaBase()
    {
        return $this->ctaBase;
    }

    /**
     * Set subctaBase
     *
     * @param string $subctaBase
     * @return CuentasBase
     */
    public function setSubctaBase($subctaBase)
    {
        $this->subctaBase = $subctaBase;

        return $this;
    }

    /**
     * Get subctaBase
     *
     * @return string 
     */
    public function getSubctaBase()
    {
        return $this->subctaBase;
    }

    /**
     * Set analisisBase
     *
     * @param string $analisisBase
     * @return CuentasBase
     */
    public function setAnalisisBase($analisisBase)
    {
        $this->analisisBase = $analisisBase;

        return $this;
    }

    /**
     * Get analisisBase
     *
     * @return string 
     */
    public function getAnalisisBase()
    {
        return $this->analisisBase;
    }

    /**
     * Set subanalisisBase
     *
     * @param string $subanalisisBase
     * @return CuentasBase
     */
    public function setSubanalisisBase($subanalisisBase)
    {
        $this->subanalisisBase = $subanalisisBase;

        return $this;
    }

    /**
     * Get subanalisisBase
     *
     * @return string 
     */
    public function getSubanalisisBase()
    {
        return $this->subanalisisBase;
    }

    /**
     * Set epigrafeBase
     *
     * @param string $epigrafeBase
     * @return CuentasBase
     */
    public function setEpigrafeBase($epigrafeBase)
    {
        $this->epigrafeBase = $epigrafeBase;

        return $this;
    }

    /**
     * Get epigrafeBase
     *
     * @return string 
     */
    public function getEpigrafeBase()
    {
        return $this->epigrafeBase;
    }

    /**
     * Set partidaBase
     *
     * @param string $partidaBase
     * @return CuentasBase
     */
    public function setPartidaBase($partidaBase)
    {
        $this->partidaBase = $partidaBase;

        return $this;
    }

    /**
     * Get partidaBase
     *
     * @return string 
     */
    public function getPartidaBase()
    {
        return $this->partidaBase;
    }

    /**
     * Set descCuentaBase
     *
     * @param string $descCuentaBase
     * @return CuentasBase
     */
    public function setDescCuentaBase($descCuentaBase)
    {
        $this->descCuentaBase = $descCuentaBase;

        return $this;
    }

    /**
     * Get descCuentaBase
     *
     * @return string 
     */
    public function getDescCuentaBase()
    {
        return $this->descCuentaBase;
    }

    /**
     * Set saldombCtaBase
     *
     * @param integer $saldombCtaBase
     * @return CuentasBase
     */
    public function setSaldombCtaBase($saldombCtaBase)
    {
        $this->saldombCtaBase = $saldombCtaBase;

        return $this;
    }

    /**
     * Get saldombCtaBase
     *
     * @return integer 
     */
    public function getSaldombCtaBase()
    {
        return $this->saldombCtaBase;
    }

    /**
     * Set saldombTotCtaRx
     *
     * @param integer $saldombTotCtaRx
     * @return CuentasBase
     */
    public function setSaldombTotCtaRx($saldombTotCtaRx)
    {
        $this->saldombTotCtaRx = $saldombTotCtaRx;

        return $this;
    }

    /**
     * Get saldombTotCtaRx
     *
     * @return integer 
     */
    public function getSaldombTotCtaRx()
    {
        return $this->saldombTotCtaRx;
    }

    /**
     * Set saldombTotCtaDis
     *
     * @param integer $saldombTotCtaDis
     * @return CuentasBase
     */
    public function setSaldombTotCtaDis($saldombTotCtaDis)
    {
        $this->saldombTotCtaDis = $saldombTotCtaDis;

        return $this;
    }

    /**
     * Get saldombTotCtaDis
     *
     * @return integer 
     */
    public function getSaldombTotCtaDis()
    {
        return $this->saldombTotCtaDis;
    }

    /**
     * Set saldomcCtaBase
     *
     * @param integer $saldomcCtaBase
     * @return CuentasBase
     */
    public function setSaldomcCtaBase($saldomcCtaBase)
    {
        $this->saldomcCtaBase = $saldomcCtaBase;

        return $this;
    }

    /**
     * Get saldomcCtaBase
     *
     * @return integer 
     */
    public function getSaldomcCtaBase()
    {
        return $this->saldomcCtaBase;
    }

    /**
     * Set saldomcTotCtaRx
     *
     * @param integer $saldomcTotCtaRx
     * @return CuentasBase
     */
    public function setSaldomcTotCtaRx($saldomcTotCtaRx)
    {
        $this->saldomcTotCtaRx = $saldomcTotCtaRx;

        return $this;
    }

    /**
     * Get saldomcTotCtaRx
     *
     * @return integer 
     */
    public function getSaldomcTotCtaRx()
    {
        return $this->saldomcTotCtaRx;
    }

    /**
     * Set saldomcTotCtaDis
     *
     * @param integer $saldomcTotCtaDis
     * @return CuentasBase
     */
    public function setSaldomcTotCtaDis($saldomcTotCtaDis)
    {
        $this->saldomcTotCtaDis = $saldomcTotCtaDis;

        return $this;
    }

    /**
     * Get saldomcTotCtaDis
     *
     * @return integer 
     */
    public function getSaldomcTotCtaDis()
    {
        return $this->saldomcTotCtaDis;
    }

    /**
     * Set coeficiente
     *
     * @param string $coeficiente
     * @return CuentasBase
     */
    public function setCoeficiente($coeficiente)
    {
        $this->coeficiente = $coeficiente;

        return $this;
    }

    /**
     * Get coeficiente
     *
     * @return string 
     */
    public function getCoeficiente()
    {
        return $this->coeficiente;
    }

    /**
     * Set saldoCtaBase
     *
     * @param integer $saldoCtaBase
     * @return CuentasBase
     */
    public function setSaldoCtaBase($saldoCtaBase)
    {
        $this->saldoCtaBase = $saldoCtaBase;

        return $this;
    }

    /**
     * Get saldoCtaBase
     *
     * @return integer 
     */
    public function getSaldoCtaBase()
    {
        return $this->saldoCtaBase;
    }

    /**
     * Set saldoTotCtaRx
     *
     * @param integer $saldoTotCtaRx
     * @return CuentasBase
     */
    public function setSaldoTotCtaRx($saldoTotCtaRx)
    {
        $this->saldoTotCtaRx = $saldoTotCtaRx;

        return $this;
    }

    /**
     * Get saldoTotCtaRx
     *
     * @return integer 
     */
    public function getSaldoTotCtaRx()
    {
        return $this->saldoTotCtaRx;
    }

    /**
     * Set saldoTotCtaDis
     *
     * @param integer $saldoTotCtaDis
     * @return CuentasBase
     */
    public function setSaldoTotCtaDis($saldoTotCtaDis)
    {
        $this->saldoTotCtaDis = $saldoTotCtaDis;

        return $this;
    }

    /**
     * Get saldoTotCtaDis
     *
     * @return integer 
     */
    public function getSaldoTotCtaDis()
    {
        return $this->saldoTotCtaDis;
    }

    /**
     * Set valorFijo
     *
     * @param integer $valorFijo
     * @return CuentasBase
     */
    public function setValorFijo($valorFijo)
    {
        $this->valorFijo = $valorFijo;

        return $this;
    }

    /**
     * Get valorFijo
     *
     * @return integer 
     */
    public function getValorFijo()
    {
        return $this->valorFijo;
    }

    /**
     * Set usarValorFijo
     *
     * @param boolean $usarValorFijo
     * @return CuentasBase
     */
    public function setUsarValorFijo($usarValorFijo)
    {
        $this->usarValorFijo = $usarValorFijo;

        return $this;
    }

    /**
     * Get usarValorFijo
     *
     * @return boolean 
     */
    public function getUsarValorFijo()
    {
        return $this->usarValorFijo;
    }

    /**
     * Set contador8
     *
     * @param integer $contador8
     * @return CuentasBase
     */
    public function setContador8($contador8)
    {
        $this->contador8 = $contador8;

        return $this;
    }

    /**
     * Get contador8
     *
     * @return integer 
     */
    public function getContador8()
    {
        return $this->contador8;
    }
}
