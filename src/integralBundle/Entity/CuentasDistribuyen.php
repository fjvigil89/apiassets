<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuentasDistribuyen
 *
 * @ORM\Table(name="Cuentas_Distribuyen", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Distrib_UNIQUE", columns={"Tipo_Moneda", "Id_Cuenta"})}, indexes={@ORM\Index(name="Pk_Cuentas_Distribuyen", columns={"CTA", "SubCta", "Analisis", "SubAnalisis", "Epigrafe", "Partida"})})
 * @ORM\Entity
 */
class CuentasDistribuyen
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
     * @ORM\Column(name="Desc_Cuenta", type="string", length=200, nullable=false)
     */
    private $descCuenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="saldo", type="integer", nullable=false)
     */
    private $saldo;

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
     * @ORM\Column(name="Desc_Cuenta_Trasp", type="string", length=200, nullable=false)
     */
    private $descCuentaTrasp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Confirmado", type="boolean", nullable=false)
     */
    private $confirmado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Base_Calculo", type="smallint", nullable=false)
     */
    private $baseCalculo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Fijo", type="integer", nullable=false)
     */
    private $valorFijo;



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
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * Set descCuenta
     *
     * @param string $descCuenta
     * @return CuentasDistribuyen
     */
    public function setDescCuenta($descCuenta)
    {
        $this->descCuenta = $descCuenta;

        return $this;
    }

    /**
     * Get descCuenta
     *
     * @return string 
     */
    public function getDescCuenta()
    {
        return $this->descCuenta;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return CuentasDistribuyen
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
     * Set idCuentaTrasp
     *
     * @param string $idCuentaTrasp
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * @return CuentasDistribuyen
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
     * Set descCuentaTrasp
     *
     * @param string $descCuentaTrasp
     * @return CuentasDistribuyen
     */
    public function setDescCuentaTrasp($descCuentaTrasp)
    {
        $this->descCuentaTrasp = $descCuentaTrasp;

        return $this;
    }

    /**
     * Get descCuentaTrasp
     *
     * @return string 
     */
    public function getDescCuentaTrasp()
    {
        return $this->descCuentaTrasp;
    }

    /**
     * Set confirmado
     *
     * @param boolean $confirmado
     * @return CuentasDistribuyen
     */
    public function setConfirmado($confirmado)
    {
        $this->confirmado = $confirmado;

        return $this;
    }

    /**
     * Get confirmado
     *
     * @return boolean 
     */
    public function getConfirmado()
    {
        return $this->confirmado;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return CuentasDistribuyen
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return CuentasDistribuyen
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return CuentasDistribuyen
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
     * Set baseCalculo
     *
     * @param integer $baseCalculo
     * @return CuentasDistribuyen
     */
    public function setBaseCalculo($baseCalculo)
    {
        $this->baseCalculo = $baseCalculo;

        return $this;
    }

    /**
     * Get baseCalculo
     *
     * @return integer 
     */
    public function getBaseCalculo()
    {
        return $this->baseCalculo;
    }

    /**
     * Set valorFijo
     *
     * @param integer $valorFijo
     * @return CuentasDistribuyen
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
}
