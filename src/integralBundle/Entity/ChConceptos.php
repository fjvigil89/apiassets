<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChConceptos
 *
 * @ORM\Table(name="CH_Conceptos")
 * @ORM\Entity
 */
class ChConceptos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     */
    private $contador1;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFondo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Concepto", type="string", length=50, nullable=false)
     */
    private $descConcepto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Entrada_AlFondo", type="boolean", nullable=false)
     */
    private $entradaAlfondo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Inicial", type="integer", nullable=false)
     */
    private $consecInicial;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_Bank_Fin", type="string", length=15, nullable=false)
     */
    private $ctaBankFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_Bank_CH", type="string", length=15, nullable=false)
     */
    private $ctaBankCh;

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
     * @var boolean
     *
     * @ORM\Column(name="Reembolsable", type="boolean", nullable=false)
     */
    private $reembolsable;



    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return ChConceptos
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
     * Set idFondo
     *
     * @param string $idFondo
     * @return ChConceptos
     */
    public function setIdFondo($idFondo)
    {
        $this->idFondo = $idFondo;

        return $this;
    }

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
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return ChConceptos
     */
    public function setIdConcepto($idConcepto)
    {
        $this->idConcepto = $idConcepto;

        return $this;
    }

    /**
     * Get idConcepto
     *
     * @return string 
     */
    public function getIdConcepto()
    {
        return $this->idConcepto;
    }

    /**
     * Set descConcepto
     *
     * @param string $descConcepto
     * @return ChConceptos
     */
    public function setDescConcepto($descConcepto)
    {
        $this->descConcepto = $descConcepto;

        return $this;
    }

    /**
     * Get descConcepto
     *
     * @return string 
     */
    public function getDescConcepto()
    {
        return $this->descConcepto;
    }

    /**
     * Set entradaAlfondo
     *
     * @param boolean $entradaAlfondo
     * @return ChConceptos
     */
    public function setEntradaAlfondo($entradaAlfondo)
    {
        $this->entradaAlfondo = $entradaAlfondo;

        return $this;
    }

    /**
     * Get entradaAlfondo
     *
     * @return boolean 
     */
    public function getEntradaAlfondo()
    {
        return $this->entradaAlfondo;
    }

    /**
     * Set consecInicial
     *
     * @param integer $consecInicial
     * @return ChConceptos
     */
    public function setConsecInicial($consecInicial)
    {
        $this->consecInicial = $consecInicial;

        return $this;
    }

    /**
     * Get consecInicial
     *
     * @return integer 
     */
    public function getConsecInicial()
    {
        return $this->consecInicial;
    }

    /**
     * Set ctaBankFin
     *
     * @param string $ctaBankFin
     * @return ChConceptos
     */
    public function setCtaBankFin($ctaBankFin)
    {
        $this->ctaBankFin = $ctaBankFin;

        return $this;
    }

    /**
     * Get ctaBankFin
     *
     * @return string 
     */
    public function getCtaBankFin()
    {
        return $this->ctaBankFin;
    }

    /**
     * Set ctaBankCh
     *
     * @param string $ctaBankCh
     * @return ChConceptos
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
     * Set consecInicialAnticipos
     *
     * @param integer $consecInicialAnticipos
     * @return ChConceptos
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
     * @return ChConceptos
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
     * @return ChConceptos
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
     * @return ChConceptos
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
     * Set reembolsable
     *
     * @param boolean $reembolsable
     * @return ChConceptos
     */
    public function setReembolsable($reembolsable)
    {
        $this->reembolsable = $reembolsable;

        return $this;
    }

    /**
     * Get reembolsable
     *
     * @return boolean 
     */
    public function getReembolsable()
    {
        return $this->reembolsable;
    }
}
