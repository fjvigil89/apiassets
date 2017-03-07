<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CosteoPecConfig
 *
 * @ORM\Table(name="Costeo_Pec_Config")
 * @ORM\Entity
 */
class CosteoPecConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cta;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cuenta", type="string", length=200, nullable=false)
     */
    private $descCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CCosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Incluir", type="boolean", nullable=false)
     */
    private $incluir;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     */
    private $contador1;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cuenta_Credito", type="string", length=50, nullable=false)
     */
    private $idCuentaCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="CTA_Credito", type="string", length=20, nullable=false)
     */
    private $ctaCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta_Credito", type="string", length=20, nullable=false)
     */
    private $subctaCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis_Credito", type="string", length=20, nullable=false)
     */
    private $analisisCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis_Credito", type="string", length=20, nullable=false)
     */
    private $subanalisisCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe_Credito", type="string", length=20, nullable=false)
     */
    private $epigrafeCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida_Credito", type="string", length=20, nullable=false)
     */
    private $partidaCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cuenta_Credito", type="string", length=200, nullable=false)
     */
    private $descCuentaCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cuenta_Debito", type="string", length=50, nullable=false)
     */
    private $idCuentaDebito;

    /**
     * @var string
     *
     * @ORM\Column(name="CTA_Debito", type="string", length=20, nullable=false)
     */
    private $ctaDebito;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta_Debito", type="string", length=20, nullable=false)
     */
    private $subctaDebito;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis_Debito", type="string", length=20, nullable=false)
     */
    private $analisisDebito;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis_Debito", type="string", length=20, nullable=false)
     */
    private $subanalisisDebito;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe_Debito", type="string", length=20, nullable=false)
     */
    private $epigrafeDebito;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida_Debito", type="string", length=20, nullable=false)
     */
    private $partidaDebito;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cuenta_Debito", type="string", length=200, nullable=false)
     */
    private $descCuentaDebito;

    /**
     * @var integer
     *
     * @ORM\Column(name="De_MB", type="smallint", nullable=false)
     */
    private $deMb;



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
     * Set descCuenta
     *
     * @param string $descCuenta
     * @return CosteoPecConfig
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return CosteoPecConfig
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set incluir
     *
     * @param boolean $incluir
     * @return CosteoPecConfig
     */
    public function setIncluir($incluir)
    {
        $this->incluir = $incluir;

        return $this;
    }

    /**
     * Get incluir
     *
     * @return boolean 
     */
    public function getIncluir()
    {
        return $this->incluir;
    }

    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return CosteoPecConfig
     */
    public function setContador1($contador1)
    {
        $this->contador1 = $contador1;

        return $this;
    }

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
     * Set idCuentaCredito
     *
     * @param string $idCuentaCredito
     * @return CosteoPecConfig
     */
    public function setIdCuentaCredito($idCuentaCredito)
    {
        $this->idCuentaCredito = $idCuentaCredito;

        return $this;
    }

    /**
     * Get idCuentaCredito
     *
     * @return string 
     */
    public function getIdCuentaCredito()
    {
        return $this->idCuentaCredito;
    }

    /**
     * Set ctaCredito
     *
     * @param string $ctaCredito
     * @return CosteoPecConfig
     */
    public function setCtaCredito($ctaCredito)
    {
        $this->ctaCredito = $ctaCredito;

        return $this;
    }

    /**
     * Get ctaCredito
     *
     * @return string 
     */
    public function getCtaCredito()
    {
        return $this->ctaCredito;
    }

    /**
     * Set subctaCredito
     *
     * @param string $subctaCredito
     * @return CosteoPecConfig
     */
    public function setSubctaCredito($subctaCredito)
    {
        $this->subctaCredito = $subctaCredito;

        return $this;
    }

    /**
     * Get subctaCredito
     *
     * @return string 
     */
    public function getSubctaCredito()
    {
        return $this->subctaCredito;
    }

    /**
     * Set analisisCredito
     *
     * @param string $analisisCredito
     * @return CosteoPecConfig
     */
    public function setAnalisisCredito($analisisCredito)
    {
        $this->analisisCredito = $analisisCredito;

        return $this;
    }

    /**
     * Get analisisCredito
     *
     * @return string 
     */
    public function getAnalisisCredito()
    {
        return $this->analisisCredito;
    }

    /**
     * Set subanalisisCredito
     *
     * @param string $subanalisisCredito
     * @return CosteoPecConfig
     */
    public function setSubanalisisCredito($subanalisisCredito)
    {
        $this->subanalisisCredito = $subanalisisCredito;

        return $this;
    }

    /**
     * Get subanalisisCredito
     *
     * @return string 
     */
    public function getSubanalisisCredito()
    {
        return $this->subanalisisCredito;
    }

    /**
     * Set epigrafeCredito
     *
     * @param string $epigrafeCredito
     * @return CosteoPecConfig
     */
    public function setEpigrafeCredito($epigrafeCredito)
    {
        $this->epigrafeCredito = $epigrafeCredito;

        return $this;
    }

    /**
     * Get epigrafeCredito
     *
     * @return string 
     */
    public function getEpigrafeCredito()
    {
        return $this->epigrafeCredito;
    }

    /**
     * Set partidaCredito
     *
     * @param string $partidaCredito
     * @return CosteoPecConfig
     */
    public function setPartidaCredito($partidaCredito)
    {
        $this->partidaCredito = $partidaCredito;

        return $this;
    }

    /**
     * Get partidaCredito
     *
     * @return string 
     */
    public function getPartidaCredito()
    {
        return $this->partidaCredito;
    }

    /**
     * Set descCuentaCredito
     *
     * @param string $descCuentaCredito
     * @return CosteoPecConfig
     */
    public function setDescCuentaCredito($descCuentaCredito)
    {
        $this->descCuentaCredito = $descCuentaCredito;

        return $this;
    }

    /**
     * Get descCuentaCredito
     *
     * @return string 
     */
    public function getDescCuentaCredito()
    {
        return $this->descCuentaCredito;
    }

    /**
     * Set idCuentaDebito
     *
     * @param string $idCuentaDebito
     * @return CosteoPecConfig
     */
    public function setIdCuentaDebito($idCuentaDebito)
    {
        $this->idCuentaDebito = $idCuentaDebito;

        return $this;
    }

    /**
     * Get idCuentaDebito
     *
     * @return string 
     */
    public function getIdCuentaDebito()
    {
        return $this->idCuentaDebito;
    }

    /**
     * Set ctaDebito
     *
     * @param string $ctaDebito
     * @return CosteoPecConfig
     */
    public function setCtaDebito($ctaDebito)
    {
        $this->ctaDebito = $ctaDebito;

        return $this;
    }

    /**
     * Get ctaDebito
     *
     * @return string 
     */
    public function getCtaDebito()
    {
        return $this->ctaDebito;
    }

    /**
     * Set subctaDebito
     *
     * @param string $subctaDebito
     * @return CosteoPecConfig
     */
    public function setSubctaDebito($subctaDebito)
    {
        $this->subctaDebito = $subctaDebito;

        return $this;
    }

    /**
     * Get subctaDebito
     *
     * @return string 
     */
    public function getSubctaDebito()
    {
        return $this->subctaDebito;
    }

    /**
     * Set analisisDebito
     *
     * @param string $analisisDebito
     * @return CosteoPecConfig
     */
    public function setAnalisisDebito($analisisDebito)
    {
        $this->analisisDebito = $analisisDebito;

        return $this;
    }

    /**
     * Get analisisDebito
     *
     * @return string 
     */
    public function getAnalisisDebito()
    {
        return $this->analisisDebito;
    }

    /**
     * Set subanalisisDebito
     *
     * @param string $subanalisisDebito
     * @return CosteoPecConfig
     */
    public function setSubanalisisDebito($subanalisisDebito)
    {
        $this->subanalisisDebito = $subanalisisDebito;

        return $this;
    }

    /**
     * Get subanalisisDebito
     *
     * @return string 
     */
    public function getSubanalisisDebito()
    {
        return $this->subanalisisDebito;
    }

    /**
     * Set epigrafeDebito
     *
     * @param string $epigrafeDebito
     * @return CosteoPecConfig
     */
    public function setEpigrafeDebito($epigrafeDebito)
    {
        $this->epigrafeDebito = $epigrafeDebito;

        return $this;
    }

    /**
     * Get epigrafeDebito
     *
     * @return string 
     */
    public function getEpigrafeDebito()
    {
        return $this->epigrafeDebito;
    }

    /**
     * Set partidaDebito
     *
     * @param string $partidaDebito
     * @return CosteoPecConfig
     */
    public function setPartidaDebito($partidaDebito)
    {
        $this->partidaDebito = $partidaDebito;

        return $this;
    }

    /**
     * Get partidaDebito
     *
     * @return string 
     */
    public function getPartidaDebito()
    {
        return $this->partidaDebito;
    }

    /**
     * Set descCuentaDebito
     *
     * @param string $descCuentaDebito
     * @return CosteoPecConfig
     */
    public function setDescCuentaDebito($descCuentaDebito)
    {
        $this->descCuentaDebito = $descCuentaDebito;

        return $this;
    }

    /**
     * Get descCuentaDebito
     *
     * @return string 
     */
    public function getDescCuentaDebito()
    {
        return $this->descCuentaDebito;
    }

    /**
     * Set deMb
     *
     * @param integer $deMb
     * @return CosteoPecConfig
     */
    public function setDeMb($deMb)
    {
        $this->deMb = $deMb;

        return $this;
    }

    /**
     * Get deMb
     *
     * @return integer 
     */
    public function getDeMb()
    {
        return $this->deMb;
    }
}
