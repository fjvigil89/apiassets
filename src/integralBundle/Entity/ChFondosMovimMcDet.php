<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChFondosMovimMcDet
 *
 * @ORM\Table(name="CH_Fondos_Movim_MC_Det")
 * @ORM\Entity
 */
class ChFondosMovimMcDet
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
     * @var integer
     *
     * @ORM\Column(name="Id_Doc", type="integer", nullable=false)
     */
    private $idDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo", type="string", length=10, nullable=false)
     */
    private $idFondo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     */
    private $idConcepto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Entrada_AlFondo", type="boolean", nullable=false)
     */
    private $entradaAlfondo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="integer", nullable=false)
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila", type="integer", nullable=false)
     */
    private $fila;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden_Impresion", type="integer", nullable=false)
     */
    private $ordenImpresion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Reembolsado", type="smallint", nullable=false)
     */
    private $reembolsado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado_Depositado", type="smallint", nullable=false)
     */
    private $estadoDepositado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Depositado", type="datetime", nullable=false)
     */
    private $fechaDepositado;



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
     * Set idDoc
     *
     * @param integer $idDoc
     * @return ChFondosMovimMcDet
     */
    public function setIdDoc($idDoc)
    {
        $this->idDoc = $idDoc;

        return $this;
    }

    /**
     * Get idDoc
     *
     * @return integer 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return ChFondosMovimMcDet
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set idFondo
     *
     * @param string $idFondo
     * @return ChFondosMovimMcDet
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
     * @return ChFondosMovimMcDet
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
     * Set entradaAlfondo
     *
     * @param boolean $entradaAlfondo
     * @return ChFondosMovimMcDet
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
     * Set importe
     *
     * @param integer $importe
     * @return ChFondosMovimMcDet
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return ChFondosMovimMcDet
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set item
     *
     * @param integer $item
     * @return ChFondosMovimMcDet
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

    /**
     * Set fila
     *
     * @param integer $fila
     * @return ChFondosMovimMcDet
     */
    public function setFila($fila)
    {
        $this->fila = $fila;

        return $this;
    }

    /**
     * Get fila
     *
     * @return integer 
     */
    public function getFila()
    {
        return $this->fila;
    }

    /**
     * Set ordenImpresion
     *
     * @param integer $ordenImpresion
     * @return ChFondosMovimMcDet
     */
    public function setOrdenImpresion($ordenImpresion)
    {
        $this->ordenImpresion = $ordenImpresion;

        return $this;
    }

    /**
     * Get ordenImpresion
     *
     * @return integer 
     */
    public function getOrdenImpresion()
    {
        return $this->ordenImpresion;
    }

    /**
     * Set reembolsado
     *
     * @param integer $reembolsado
     * @return ChFondosMovimMcDet
     */
    public function setReembolsado($reembolsado)
    {
        $this->reembolsado = $reembolsado;

        return $this;
    }

    /**
     * Get reembolsado
     *
     * @return integer 
     */
    public function getReembolsado()
    {
        return $this->reembolsado;
    }

    /**
     * Set estadoDepositado
     *
     * @param integer $estadoDepositado
     * @return ChFondosMovimMcDet
     */
    public function setEstadoDepositado($estadoDepositado)
    {
        $this->estadoDepositado = $estadoDepositado;

        return $this;
    }

    /**
     * Get estadoDepositado
     *
     * @return integer 
     */
    public function getEstadoDepositado()
    {
        return $this->estadoDepositado;
    }

    /**
     * Set fechaDepositado
     *
     * @param \DateTime $fechaDepositado
     * @return ChFondosMovimMcDet
     */
    public function setFechaDepositado($fechaDepositado)
    {
        $this->fechaDepositado = $fechaDepositado;

        return $this;
    }

    /**
     * Get fechaDepositado
     *
     * @return \DateTime 
     */
    public function getFechaDepositado()
    {
        return $this->fechaDepositado;
    }
}
