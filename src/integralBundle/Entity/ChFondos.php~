<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChFondos
 *
 * @ORM\Table(name="CH_Fondos")
 * @ORM\Entity
 */
class ChFondos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFondo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Fondo", type="string", length=50, nullable=false)
     */
    private $descFondo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Anticipos", type="boolean", nullable=false)
     */
    private $anticipos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pagos_Menores", type="boolean", nullable=false)
     */
    private $pagosMenores;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cobros_xDepositar", type="boolean", nullable=false)
     */
    private $cobrosXdepositar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Otros", type="boolean", nullable=false)
     */
    private $otros;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fondo_Inicial", type="integer", nullable=false)
     */
    private $fondoInicial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fondo_Maximo", type="integer", nullable=false)
     */
    private $fondoMaximo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Fondo", type="smallint", nullable=false)
     */
    private $tipoFondo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Consec_xConcepto", type="boolean", nullable=false)
     */
    private $consecXconcepto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Se_Arquea", type="boolean", nullable=false)
     */
    private $seArquea;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Se_Reembolsa", type="boolean", nullable=false)
     */
    private $seReembolsa;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_Bank_CH", type="string", length=30, nullable=false)
     */
    private $ctaBankCh;

    /**
     * @var string
     *
     * @ORM\Column(name="Trace", type="string", length=400, nullable=false)
     */
    private $trace;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Recibe_Pagos", type="boolean", nullable=false)
     */
    private $recibePagos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Inicial_Anticipos", type="integer", nullable=false)
     */
    private $consecInicialAnticipos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Inicial_Arqueos", type="integer", nullable=false)
     */
    private $consecInicialArqueos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Inicial_Reembolsos", type="integer", nullable=false)
     */
    private $consecInicialReembolsos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Inicial_Liquidaciones", type="integer", nullable=false)
     */
    private $consecInicialLiquidaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Inicial_Tarjetas", type="integer", nullable=false)
     */
    private $consecInicialTarjetas;



    /**
     * Get idFondo
     *
     * @return string 
     */
    public function getIdFondo()
    {
        return $this->idFondo;
    }

    /**
     * Set descFondo
     *
     * @param string $descFondo
     * @return ChFondos
     */
    public function setDescFondo($descFondo)
    {
        $this->descFondo = $descFondo;

        return $this;
    }

    /**
     * Get descFondo
     *
     * @return string 
     */
    public function getDescFondo()
    {
        return $this->descFondo;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return ChFondos
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
     * Set anticipos
     *
     * @param boolean $anticipos
     * @return ChFondos
     */
    public function setAnticipos($anticipos)
    {
        $this->anticipos = $anticipos;

        return $this;
    }

    /**
     * Get anticipos
     *
     * @return boolean 
     */
    public function getAnticipos()
    {
        return $this->anticipos;
    }

    /**
     * Set pagosMenores
     *
     * @param boolean $pagosMenores
     * @return ChFondos
     */
    public function setPagosMenores($pagosMenores)
    {
        $this->pagosMenores = $pagosMenores;

        return $this;
    }

    /**
     * Get pagosMenores
     *
     * @return boolean 
     */
    public function getPagosMenores()
    {
        return $this->pagosMenores;
    }

    /**
     * Set cobrosXdepositar
     *
     * @param boolean $cobrosXdepositar
     * @return ChFondos
     */
    public function setCobrosXdepositar($cobrosXdepositar)
    {
        $this->cobrosXdepositar = $cobrosXdepositar;

        return $this;
    }

    /**
     * Get cobrosXdepositar
     *
     * @return boolean 
     */
    public function getCobrosXdepositar()
    {
        return $this->cobrosXdepositar;
    }

    /**
     * Set otros
     *
     * @param boolean $otros
     * @return ChFondos
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return boolean 
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set fondoInicial
     *
     * @param integer $fondoInicial
     * @return ChFondos
     */
    public function setFondoInicial($fondoInicial)
    {
        $this->fondoInicial = $fondoInicial;

        return $this;
    }

    /**
     * Get fondoInicial
     *
     * @return integer 
     */
    public function getFondoInicial()
    {
        return $this->fondoInicial;
    }

    /**
     * Set fondoMaximo
     *
     * @param integer $fondoMaximo
     * @return ChFondos
     */
    public function setFondoMaximo($fondoMaximo)
    {
        $this->fondoMaximo = $fondoMaximo;

        return $this;
    }

    /**
     * Get fondoMaximo
     *
     * @return integer 
     */
    public function getFondoMaximo()
    {
        return $this->fondoMaximo;
    }

    /**
     * Set tipoFondo
     *
     * @param integer $tipoFondo
     * @return ChFondos
     */
    public function setTipoFondo($tipoFondo)
    {
        $this->tipoFondo = $tipoFondo;

        return $this;
    }

    /**
     * Get tipoFondo
     *
     * @return integer 
     */
    public function getTipoFondo()
    {
        return $this->tipoFondo;
    }

    /**
     * Set consecXconcepto
     *
     * @param boolean $consecXconcepto
     * @return ChFondos
     */
    public function setConsecXconcepto($consecXconcepto)
    {
        $this->consecXconcepto = $consecXconcepto;

        return $this;
    }

    /**
     * Get consecXconcepto
     *
     * @return boolean 
     */
    public function getConsecXconcepto()
    {
        return $this->consecXconcepto;
    }

    /**
     * Set seArquea
     *
     * @param boolean $seArquea
     * @return ChFondos
     */
    public function setSeArquea($seArquea)
    {
        $this->seArquea = $seArquea;

        return $this;
    }

    /**
     * Get seArquea
     *
     * @return boolean 
     */
    public function getSeArquea()
    {
        return $this->seArquea;
    }

    /**
     * Set seReembolsa
     *
     * @param boolean $seReembolsa
     * @return ChFondos
     */
    public function setSeReembolsa($seReembolsa)
    {
        $this->seReembolsa = $seReembolsa;

        return $this;
    }

    /**
     * Get seReembolsa
     *
     * @return boolean 
     */
    public function getSeReembolsa()
    {
        return $this->seReembolsa;
    }

    /**
     * Set ctaBankCh
     *
     * @param string $ctaBankCh
     * @return ChFondos
     */
    public function setCtaBankCh($ctaBankCh)
    {
        $this->ctaBankCh = $ctaBankCh;

        return $this;
    }

    /**
     * Get ctaBankCh
     *
     * @return string 
     */
    public function getCtaBankCh()
    {
        return $this->ctaBankCh;
    }

    /**
     * Set trace
     *
     * @param string $trace
     * @return ChFondos
     */
    public function setTrace($trace)
    {
        $this->trace = $trace;

        return $this;
    }

    /**
     * Get trace
     *
     * @return string 
     */
    public function getTrace()
    {
        return $this->trace;
    }

    /**
     * Set recibePagos
     *
     * @param boolean $recibePagos
     * @return ChFondos
     */
    public function setRecibePagos($recibePagos)
    {
        $this->recibePagos = $recibePagos;

        return $this;
    }

    /**
     * Get recibePagos
     *
     * @return boolean 
     */
    public function getRecibePagos()
    {
        return $this->recibePagos;
    }

    /**
     * Set consecInicialAnticipos
     *
     * @param integer $consecInicialAnticipos
     * @return ChFondos
     */
    public function setConsecInicialAnticipos($consecInicialAnticipos)
    {
        $this->consecInicialAnticipos = $consecInicialAnticipos;

        return $this;
    }

    /**
     * Get consecInicialAnticipos
     *
     * @return integer 
     */
    public function getConsecInicialAnticipos()
    {
        return $this->consecInicialAnticipos;
    }

    /**
     * Set consecInicialArqueos
     *
     * @param integer $consecInicialArqueos
     * @return ChFondos
     */
    public function setConsecInicialArqueos($consecInicialArqueos)
    {
        $this->consecInicialArqueos = $consecInicialArqueos;

        return $this;
    }

    /**
     * Get consecInicialArqueos
     *
     * @return integer 
     */
    public function getConsecInicialArqueos()
    {
        return $this->consecInicialArqueos;
    }

    /**
     * Set consecInicialReembolsos
     *
     * @param integer $consecInicialReembolsos
     * @return ChFondos
     */
    public function setConsecInicialReembolsos($consecInicialReembolsos)
    {
        $this->consecInicialReembolsos = $consecInicialReembolsos;

        return $this;
    }

    /**
     * Get consecInicialReembolsos
     *
     * @return integer 
     */
    public function getConsecInicialReembolsos()
    {
        return $this->consecInicialReembolsos;
    }

    /**
     * Set consecInicialLiquidaciones
     *
     * @param integer $consecInicialLiquidaciones
     * @return ChFondos
     */
    public function setConsecInicialLiquidaciones($consecInicialLiquidaciones)
    {
        $this->consecInicialLiquidaciones = $consecInicialLiquidaciones;

        return $this;
    }

    /**
     * Get consecInicialLiquidaciones
     *
     * @return integer 
     */
    public function getConsecInicialLiquidaciones()
    {
        return $this->consecInicialLiquidaciones;
    }

    /**
     * Set consecInicialTarjetas
     *
     * @param integer $consecInicialTarjetas
     * @return ChFondos
     */
    public function setConsecInicialTarjetas($consecInicialTarjetas)
    {
        $this->consecInicialTarjetas = $consecInicialTarjetas;

        return $this;
    }

    /**
     * Get consecInicialTarjetas
     *
     * @return integer 
     */
    public function getConsecInicialTarjetas()
    {
        return $this->consecInicialTarjetas;
    }
}
