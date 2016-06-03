<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormatoPresupuesto
 *
 * @ORM\Table(name="Formato_Presupuesto")
 * @ORM\Entity
 */
class FormatoPresupuesto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Fila", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fila;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden_Listado", type="integer", nullable=false)
     */
    private $ordenListado;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_I", type="string", length=50, nullable=false)
     */
    private $ctaI;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_F", type="string", length=50, nullable=false)
     */
    private $ctaF;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Operacion", type="string", length=15, nullable=false)
     */
    private $operacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila_Inicio", type="integer", nullable=false)
     */
    private $filaInicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila_Final", type="integer", nullable=false)
     */
    private $filaFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Valor", type="string", length=15, nullable=false)
     */
    private $tipoValor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo", type="integer", nullable=false)
     */
    private $saldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila_Porciento", type="integer", nullable=false)
     */
    private $filaPorciento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Listado", type="integer", nullable=false)
     */
    private $saldoListado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_AImprimir", type="integer", nullable=false)
     */
    private $saldoAimprimir;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Listado_Acum", type="integer", nullable=true)
     */
    private $saldoListadoAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_AImprimir_Acum", type="integer", nullable=true)
     */
    private $saldoAimprimirAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Real_Mes", type="integer", nullable=true)
     */
    private $realMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Real_Acum", type="integer", nullable=true)
     */
    private $realAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Mes", type="integer", nullable=true)
     */
    private $planMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Acum", type="integer", nullable=true)
     */
    private $planAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porciento_Mes", type="integer", nullable=true)
     */
    private $porcientoMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porciento_Acum", type="integer", nullable=true)
     */
    private $porcientoAcum;

    /**
     * @var string
     *
     * @ORM\Column(name="Formula", type="string", length=150, nullable=false)
     */
    private $formula;

    /**
     * @var string
     *
     * @ORM\Column(name="Formula_Ktes", type="string", length=150, nullable=true)
     */
    private $formulaKtes;



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
     * Set ordenListado
     *
     * @param integer $ordenListado
     * @return FormatoPresupuesto
     */
    public function setOrdenListado($ordenListado)
    {
        $this->ordenListado = $ordenListado;

        return $this;
    }

    /**
     * Get ordenListado
     *
     * @return integer 
     */
    public function getOrdenListado()
    {
        return $this->ordenListado;
    }

    /**
     * Set ctaI
     *
     * @param string $ctaI
     * @return FormatoPresupuesto
     */
    public function setCtaI($ctaI)
    {
        $this->ctaI = $ctaI;

        return $this;
    }

    /**
     * Get ctaI
     *
     * @return string 
     */
    public function getCtaI()
    {
        return $this->ctaI;
    }

    /**
     * Set ctaF
     *
     * @param string $ctaF
     * @return FormatoPresupuesto
     */
    public function setCtaF($ctaF)
    {
        $this->ctaF = $ctaF;

        return $this;
    }

    /**
     * Get ctaF
     *
     * @return string 
     */
    public function getCtaF()
    {
        return $this->ctaF;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return FormatoPresupuesto
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
     * Set operacion
     *
     * @param string $operacion
     * @return FormatoPresupuesto
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;

        return $this;
    }

    /**
     * Get operacion
     *
     * @return string 
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * Set filaInicio
     *
     * @param integer $filaInicio
     * @return FormatoPresupuesto
     */
    public function setFilaInicio($filaInicio)
    {
        $this->filaInicio = $filaInicio;

        return $this;
    }

    /**
     * Get filaInicio
     *
     * @return integer 
     */
    public function getFilaInicio()
    {
        return $this->filaInicio;
    }

    /**
     * Set filaFinal
     *
     * @param integer $filaFinal
     * @return FormatoPresupuesto
     */
    public function setFilaFinal($filaFinal)
    {
        $this->filaFinal = $filaFinal;

        return $this;
    }

    /**
     * Get filaFinal
     *
     * @return integer 
     */
    public function getFilaFinal()
    {
        return $this->filaFinal;
    }

    /**
     * Set tipoValor
     *
     * @param string $tipoValor
     * @return FormatoPresupuesto
     */
    public function setTipoValor($tipoValor)
    {
        $this->tipoValor = $tipoValor;

        return $this;
    }

    /**
     * Get tipoValor
     *
     * @return string 
     */
    public function getTipoValor()
    {
        return $this->tipoValor;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return FormatoPresupuesto
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
     * Set filaPorciento
     *
     * @param integer $filaPorciento
     * @return FormatoPresupuesto
     */
    public function setFilaPorciento($filaPorciento)
    {
        $this->filaPorciento = $filaPorciento;

        return $this;
    }

    /**
     * Get filaPorciento
     *
     * @return integer 
     */
    public function getFilaPorciento()
    {
        return $this->filaPorciento;
    }

    /**
     * Set saldoListado
     *
     * @param integer $saldoListado
     * @return FormatoPresupuesto
     */
    public function setSaldoListado($saldoListado)
    {
        $this->saldoListado = $saldoListado;

        return $this;
    }

    /**
     * Get saldoListado
     *
     * @return integer 
     */
    public function getSaldoListado()
    {
        return $this->saldoListado;
    }

    /**
     * Set saldoAimprimir
     *
     * @param integer $saldoAimprimir
     * @return FormatoPresupuesto
     */
    public function setSaldoAimprimir($saldoAimprimir)
    {
        $this->saldoAimprimir = $saldoAimprimir;

        return $this;
    }

    /**
     * Get saldoAimprimir
     *
     * @return integer 
     */
    public function getSaldoAimprimir()
    {
        return $this->saldoAimprimir;
    }

    /**
     * Set saldoListadoAcum
     *
     * @param integer $saldoListadoAcum
     * @return FormatoPresupuesto
     */
    public function setSaldoListadoAcum($saldoListadoAcum)
    {
        $this->saldoListadoAcum = $saldoListadoAcum;

        return $this;
    }

    /**
     * Get saldoListadoAcum
     *
     * @return integer 
     */
    public function getSaldoListadoAcum()
    {
        return $this->saldoListadoAcum;
    }

    /**
     * Set saldoAimprimirAcum
     *
     * @param integer $saldoAimprimirAcum
     * @return FormatoPresupuesto
     */
    public function setSaldoAimprimirAcum($saldoAimprimirAcum)
    {
        $this->saldoAimprimirAcum = $saldoAimprimirAcum;

        return $this;
    }

    /**
     * Get saldoAimprimirAcum
     *
     * @return integer 
     */
    public function getSaldoAimprimirAcum()
    {
        return $this->saldoAimprimirAcum;
    }

    /**
     * Set realMes
     *
     * @param integer $realMes
     * @return FormatoPresupuesto
     */
    public function setRealMes($realMes)
    {
        $this->realMes = $realMes;

        return $this;
    }

    /**
     * Get realMes
     *
     * @return integer 
     */
    public function getRealMes()
    {
        return $this->realMes;
    }

    /**
     * Set realAcum
     *
     * @param integer $realAcum
     * @return FormatoPresupuesto
     */
    public function setRealAcum($realAcum)
    {
        $this->realAcum = $realAcum;

        return $this;
    }

    /**
     * Get realAcum
     *
     * @return integer 
     */
    public function getRealAcum()
    {
        return $this->realAcum;
    }

    /**
     * Set planMes
     *
     * @param integer $planMes
     * @return FormatoPresupuesto
     */
    public function setPlanMes($planMes)
    {
        $this->planMes = $planMes;

        return $this;
    }

    /**
     * Get planMes
     *
     * @return integer 
     */
    public function getPlanMes()
    {
        return $this->planMes;
    }

    /**
     * Set planAcum
     *
     * @param integer $planAcum
     * @return FormatoPresupuesto
     */
    public function setPlanAcum($planAcum)
    {
        $this->planAcum = $planAcum;

        return $this;
    }

    /**
     * Get planAcum
     *
     * @return integer 
     */
    public function getPlanAcum()
    {
        return $this->planAcum;
    }

    /**
     * Set porcientoMes
     *
     * @param integer $porcientoMes
     * @return FormatoPresupuesto
     */
    public function setPorcientoMes($porcientoMes)
    {
        $this->porcientoMes = $porcientoMes;

        return $this;
    }

    /**
     * Get porcientoMes
     *
     * @return integer 
     */
    public function getPorcientoMes()
    {
        return $this->porcientoMes;
    }

    /**
     * Set porcientoAcum
     *
     * @param integer $porcientoAcum
     * @return FormatoPresupuesto
     */
    public function setPorcientoAcum($porcientoAcum)
    {
        $this->porcientoAcum = $porcientoAcum;

        return $this;
    }

    /**
     * Get porcientoAcum
     *
     * @return integer 
     */
    public function getPorcientoAcum()
    {
        return $this->porcientoAcum;
    }

    /**
     * Set formula
     *
     * @param string $formula
     * @return FormatoPresupuesto
     */
    public function setFormula($formula)
    {
        $this->formula = $formula;

        return $this;
    }

    /**
     * Get formula
     *
     * @return string 
     */
    public function getFormula()
    {
        return $this->formula;
    }

    /**
     * Set formulaKtes
     *
     * @param string $formulaKtes
     * @return FormatoPresupuesto
     */
    public function setFormulaKtes($formulaKtes)
    {
        $this->formulaKtes = $formulaKtes;

        return $this;
    }

    /**
     * Get formulaKtes
     *
     * @return string 
     */
    public function getFormulaKtes()
    {
        return $this->formulaKtes;
    }
}
