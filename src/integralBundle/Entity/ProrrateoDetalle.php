<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProrrateoDetalle
 *
 * @ORM\Table(name="Prorrateo_Detalle")
 * @ORM\Entity
 */
class ProrrateoDetalle
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
     * @var integer
     *
     * @ORM\Column(name="Saldo", type="integer", nullable=false)
     */
    private $saldo;

    /**
     * @var string
     *
     * @ORM\Column(name="Coeficiente", type="decimal", precision=18, scale=12, nullable=false)
     */
    private $coeficiente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cuenta_Distr", type="string", length=50, nullable=false)
     */
    private $idCuentaDistr;

    /**
     * @var string
     *
     * @ORM\Column(name="CTA_Distr", type="string", length=20, nullable=false)
     */
    private $ctaDistr;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta_Distr", type="string", length=20, nullable=false)
     */
    private $subctaDistr;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis_Distr", type="string", length=20, nullable=false)
     */
    private $analisisDistr;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis_Distr", type="string", length=20, nullable=false)
     */
    private $subanalisisDistr;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe_Distr", type="string", length=20, nullable=false)
     */
    private $epigrafeDistr;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida_Distr", type="string", length=20, nullable=false)
     */
    private $partidaDistr;

    /**
     * @var integer
     *
     * @ORM\Column(name="CONTADOR_ACCESS", type="integer", nullable=true)
     */
    private $contadorAccess;

    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="integer", nullable=false)
     */
    private $item;



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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * Set idCuentaTrasp
     *
     * @param string $idCuentaTrasp
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * @return ProrrateoDetalle
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
     * Set saldo
     *
     * @param integer $saldo
     * @return ProrrateoDetalle
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
     * Set coeficiente
     *
     * @param string $coeficiente
     * @return ProrrateoDetalle
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
     * Set idCuentaDistr
     *
     * @param string $idCuentaDistr
     * @return ProrrateoDetalle
     */
    public function setIdCuentaDistr($idCuentaDistr)
    {
        $this->idCuentaDistr = $idCuentaDistr;

        return $this;
    }

    /**
     * Get idCuentaDistr
     *
     * @return string 
     */
    public function getIdCuentaDistr()
    {
        return $this->idCuentaDistr;
    }

    /**
     * Set ctaDistr
     *
     * @param string $ctaDistr
     * @return ProrrateoDetalle
     */
    public function setCtaDistr($ctaDistr)
    {
        $this->ctaDistr = $ctaDistr;

        return $this;
    }

    /**
     * Get ctaDistr
     *
     * @return string 
     */
    public function getCtaDistr()
    {
        return $this->ctaDistr;
    }

    /**
     * Set subctaDistr
     *
     * @param string $subctaDistr
     * @return ProrrateoDetalle
     */
    public function setSubctaDistr($subctaDistr)
    {
        $this->subctaDistr = $subctaDistr;

        return $this;
    }

    /**
     * Get subctaDistr
     *
     * @return string 
     */
    public function getSubctaDistr()
    {
        return $this->subctaDistr;
    }

    /**
     * Set analisisDistr
     *
     * @param string $analisisDistr
     * @return ProrrateoDetalle
     */
    public function setAnalisisDistr($analisisDistr)
    {
        $this->analisisDistr = $analisisDistr;

        return $this;
    }

    /**
     * Get analisisDistr
     *
     * @return string 
     */
    public function getAnalisisDistr()
    {
        return $this->analisisDistr;
    }

    /**
     * Set subanalisisDistr
     *
     * @param string $subanalisisDistr
     * @return ProrrateoDetalle
     */
    public function setSubanalisisDistr($subanalisisDistr)
    {
        $this->subanalisisDistr = $subanalisisDistr;

        return $this;
    }

    /**
     * Get subanalisisDistr
     *
     * @return string 
     */
    public function getSubanalisisDistr()
    {
        return $this->subanalisisDistr;
    }

    /**
     * Set epigrafeDistr
     *
     * @param string $epigrafeDistr
     * @return ProrrateoDetalle
     */
    public function setEpigrafeDistr($epigrafeDistr)
    {
        $this->epigrafeDistr = $epigrafeDistr;

        return $this;
    }

    /**
     * Get epigrafeDistr
     *
     * @return string 
     */
    public function getEpigrafeDistr()
    {
        return $this->epigrafeDistr;
    }

    /**
     * Set partidaDistr
     *
     * @param string $partidaDistr
     * @return ProrrateoDetalle
     */
    public function setPartidaDistr($partidaDistr)
    {
        $this->partidaDistr = $partidaDistr;

        return $this;
    }

    /**
     * Get partidaDistr
     *
     * @return string 
     */
    public function getPartidaDistr()
    {
        return $this->partidaDistr;
    }

    /**
     * Set contadorAccess
     *
     * @param integer $contadorAccess
     * @return ProrrateoDetalle
     */
    public function setContadorAccess($contadorAccess)
    {
        $this->contadorAccess = $contadorAccess;

        return $this;
    }

    /**
     * Get contadorAccess
     *
     * @return integer 
     */
    public function getContadorAccess()
    {
        return $this->contadorAccess;
    }

    /**
     * Set item
     *
     * @param integer $item
     * @return ProrrateoDetalle
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }
}
