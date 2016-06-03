<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormatoEstadoResultado8
 *
 * @ORM\Table(name="Formato_Estado_Resultado8")
 * @ORM\Entity
 */
class FormatoEstadoResultado8
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Fila", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fila;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden_Listado", type="smallint", nullable=false)
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
     * @ORM\Column(name="Fila_Inicio", type="smallint", nullable=false)
     */
    private $filaInicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila_Final", type="smallint", nullable=false)
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
     * @ORM\Column(name="Saldo_INI", type="integer", nullable=false)
     */
    private $saldoIni;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_PER", type="integer", nullable=false)
     */
    private $saldoPer;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo", type="integer", nullable=false)
     */
    private $saldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila_Porciento", type="smallint", nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="Descripcion_Alterna", type="string", length=100, nullable=false)
     */
    private $descripcionAlterna;

    /**
     * @var integer
     *
     * @ORM\Column(name="Column_ToUse", type="smallint", nullable=false)
     */
    private $columnTouse;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_FIN", type="integer", nullable=false)
     */
    private $saldoFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoX_INI", type="integer", nullable=false)
     */
    private $saldoxIni;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoX_PER", type="integer", nullable=false)
     */
    private $saldoxPer;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoX_FIN", type="integer", nullable=false)
     */
    private $saldoxFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Operador_Condicion", type="string", length=6, nullable=false)
     */
    private $operadorCondicion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Condicion", type="integer", nullable=false)
     */
    private $valorCondicion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Imprimir", type="boolean", nullable=false)
     */
    private $imprimir;

    /**
     * @var string
     *
     * @ORM\Column(name="Operacion1", type="string", length=15, nullable=false)
     */
    private $operacion1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila_i1", type="smallint", nullable=false)
     */
    private $filaI1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila_F1", type="smallint", nullable=false)
     */
    private $filaF1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor1", type="integer", nullable=false)
     */
    private $valor1;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo_AUsar1", type="string", length=5, nullable=false)
     */
    private $saldoAusar1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Resultado1", type="integer", nullable=false)
     */
    private $resultado1;

    /**
     * @var string
     *
     * @ORM\Column(name="Operacion2", type="string", length=15, nullable=false)
     */
    private $operacion2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila_i2", type="smallint", nullable=false)
     */
    private $filaI2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila_F2", type="smallint", nullable=false)
     */
    private $filaF2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor2", type="integer", nullable=false)
     */
    private $valor2;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo_AUsar2", type="string", length=5, nullable=false)
     */
    private $saldoAusar2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Resultado2", type="integer", nullable=false)
     */
    private $resultado2;

    /**
     * @var string
     *
     * @ORM\Column(name="Operacion3", type="string", length=15, nullable=false)
     */
    private $operacion3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila_i3", type="smallint", nullable=false)
     */
    private $filaI3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fila_F3", type="smallint", nullable=false)
     */
    private $filaF3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor3", type="integer", nullable=false)
     */
    private $valor3;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo_AUsar3", type="string", length=5, nullable=false)
     */
    private $saldoAusar3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Resultado3", type="integer", nullable=false)
     */
    private $resultado3;

    /**
     * @var string
     *
     * @ORM\Column(name="Formula", type="string", length=150, nullable=false)
     */
    private $formula;



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
     * @return FormatoEstadoResultado8
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
     * @return FormatoEstadoResultado8
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
     * @return FormatoEstadoResultado8
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
     * @return FormatoEstadoResultado8
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
     * @return FormatoEstadoResultado8
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
     * @return FormatoEstadoResultado8
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
     * @return FormatoEstadoResultado8
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
     * @return FormatoEstadoResultado8
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
     * Set saldoIni
     *
     * @param integer $saldoIni
     * @return FormatoEstadoResultado8
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
     * Set saldoPer
     *
     * @param integer $saldoPer
     * @return FormatoEstadoResultado8
     */
    public function setSaldoPer($saldoPer)
    {
        $this->saldoPer = $saldoPer;

        return $this;
    }

    /**
     * Get saldoPer
     *
     * @return integer 
     */
    public function getSaldoPer()
    {
        return $this->saldoPer;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return FormatoEstadoResultado8
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
     * @return FormatoEstadoResultado8
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
     * @return FormatoEstadoResultado8
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
     * @return FormatoEstadoResultado8
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
     * Set descripcionAlterna
     *
     * @param string $descripcionAlterna
     * @return FormatoEstadoResultado8
     */
    public function setDescripcionAlterna($descripcionAlterna)
    {
        $this->descripcionAlterna = $descripcionAlterna;

        return $this;
    }

    /**
     * Get descripcionAlterna
     *
     * @return string 
     */
    public function getDescripcionAlterna()
    {
        return $this->descripcionAlterna;
    }

    /**
     * Set columnTouse
     *
     * @param integer $columnTouse
     * @return FormatoEstadoResultado8
     */
    public function setColumnTouse($columnTouse)
    {
        $this->columnTouse = $columnTouse;

        return $this;
    }

    /**
     * Get columnTouse
     *
     * @return integer 
     */
    public function getColumnTouse()
    {
        return $this->columnTouse;
    }

    /**
     * Set saldoFin
     *
     * @param integer $saldoFin
     * @return FormatoEstadoResultado8
     */
    public function setSaldoFin($saldoFin)
    {
        $this->saldoFin = $saldoFin;

        return $this;
    }

    /**
     * Get saldoFin
     *
     * @return integer 
     */
    public function getSaldoFin()
    {
        return $this->saldoFin;
    }

    /**
     * Set saldoxIni
     *
     * @param integer $saldoxIni
     * @return FormatoEstadoResultado8
     */
    public function setSaldoxIni($saldoxIni)
    {
        $this->saldoxIni = $saldoxIni;

        return $this;
    }

    /**
     * Get saldoxIni
     *
     * @return integer 
     */
    public function getSaldoxIni()
    {
        return $this->saldoxIni;
    }

    /**
     * Set saldoxPer
     *
     * @param integer $saldoxPer
     * @return FormatoEstadoResultado8
     */
    public function setSaldoxPer($saldoxPer)
    {
        $this->saldoxPer = $saldoxPer;

        return $this;
    }

    /**
     * Get saldoxPer
     *
     * @return integer 
     */
    public function getSaldoxPer()
    {
        return $this->saldoxPer;
    }

    /**
     * Set saldoxFin
     *
     * @param integer $saldoxFin
     * @return FormatoEstadoResultado8
     */
    public function setSaldoxFin($saldoxFin)
    {
        $this->saldoxFin = $saldoxFin;

        return $this;
    }

    /**
     * Get saldoxFin
     *
     * @return integer 
     */
    public function getSaldoxFin()
    {
        return $this->saldoxFin;
    }

    /**
     * Set operadorCondicion
     *
     * @param string $operadorCondicion
     * @return FormatoEstadoResultado8
     */
    public function setOperadorCondicion($operadorCondicion)
    {
        $this->operadorCondicion = $operadorCondicion;

        return $this;
    }

    /**
     * Get operadorCondicion
     *
     * @return string 
     */
    public function getOperadorCondicion()
    {
        return $this->operadorCondicion;
    }

    /**
     * Set valorCondicion
     *
     * @param integer $valorCondicion
     * @return FormatoEstadoResultado8
     */
    public function setValorCondicion($valorCondicion)
    {
        $this->valorCondicion = $valorCondicion;

        return $this;
    }

    /**
     * Get valorCondicion
     *
     * @return integer 
     */
    public function getValorCondicion()
    {
        return $this->valorCondicion;
    }

    /**
     * Set imprimir
     *
     * @param boolean $imprimir
     * @return FormatoEstadoResultado8
     */
    public function setImprimir($imprimir)
    {
        $this->imprimir = $imprimir;

        return $this;
    }

    /**
     * Get imprimir
     *
     * @return boolean 
     */
    public function getImprimir()
    {
        return $this->imprimir;
    }

    /**
     * Set operacion1
     *
     * @param string $operacion1
     * @return FormatoEstadoResultado8
     */
    public function setOperacion1($operacion1)
    {
        $this->operacion1 = $operacion1;

        return $this;
    }

    /**
     * Get operacion1
     *
     * @return string 
     */
    public function getOperacion1()
    {
        return $this->operacion1;
    }

    /**
     * Set filaI1
     *
     * @param integer $filaI1
     * @return FormatoEstadoResultado8
     */
    public function setFilaI1($filaI1)
    {
        $this->filaI1 = $filaI1;

        return $this;
    }

    /**
     * Get filaI1
     *
     * @return integer 
     */
    public function getFilaI1()
    {
        return $this->filaI1;
    }

    /**
     * Set filaF1
     *
     * @param integer $filaF1
     * @return FormatoEstadoResultado8
     */
    public function setFilaF1($filaF1)
    {
        $this->filaF1 = $filaF1;

        return $this;
    }

    /**
     * Get filaF1
     *
     * @return integer 
     */
    public function getFilaF1()
    {
        return $this->filaF1;
    }

    /**
     * Set valor1
     *
     * @param integer $valor1
     * @return FormatoEstadoResultado8
     */
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

        return $this;
    }

    /**
     * Get valor1
     *
     * @return integer 
     */
    public function getValor1()
    {
        return $this->valor1;
    }

    /**
     * Set saldoAusar1
     *
     * @param string $saldoAusar1
     * @return FormatoEstadoResultado8
     */
    public function setSaldoAusar1($saldoAusar1)
    {
        $this->saldoAusar1 = $saldoAusar1;

        return $this;
    }

    /**
     * Get saldoAusar1
     *
     * @return string 
     */
    public function getSaldoAusar1()
    {
        return $this->saldoAusar1;
    }

    /**
     * Set resultado1
     *
     * @param integer $resultado1
     * @return FormatoEstadoResultado8
     */
    public function setResultado1($resultado1)
    {
        $this->resultado1 = $resultado1;

        return $this;
    }

    /**
     * Get resultado1
     *
     * @return integer 
     */
    public function getResultado1()
    {
        return $this->resultado1;
    }

    /**
     * Set operacion2
     *
     * @param string $operacion2
     * @return FormatoEstadoResultado8
     */
    public function setOperacion2($operacion2)
    {
        $this->operacion2 = $operacion2;

        return $this;
    }

    /**
     * Get operacion2
     *
     * @return string 
     */
    public function getOperacion2()
    {
        return $this->operacion2;
    }

    /**
     * Set filaI2
     *
     * @param integer $filaI2
     * @return FormatoEstadoResultado8
     */
    public function setFilaI2($filaI2)
    {
        $this->filaI2 = $filaI2;

        return $this;
    }

    /**
     * Get filaI2
     *
     * @return integer 
     */
    public function getFilaI2()
    {
        return $this->filaI2;
    }

    /**
     * Set filaF2
     *
     * @param integer $filaF2
     * @return FormatoEstadoResultado8
     */
    public function setFilaF2($filaF2)
    {
        $this->filaF2 = $filaF2;

        return $this;
    }

    /**
     * Get filaF2
     *
     * @return integer 
     */
    public function getFilaF2()
    {
        return $this->filaF2;
    }

    /**
     * Set valor2
     *
     * @param integer $valor2
     * @return FormatoEstadoResultado8
     */
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    /**
     * Get valor2
     *
     * @return integer 
     */
    public function getValor2()
    {
        return $this->valor2;
    }

    /**
     * Set saldoAusar2
     *
     * @param string $saldoAusar2
     * @return FormatoEstadoResultado8
     */
    public function setSaldoAusar2($saldoAusar2)
    {
        $this->saldoAusar2 = $saldoAusar2;

        return $this;
    }

    /**
     * Get saldoAusar2
     *
     * @return string 
     */
    public function getSaldoAusar2()
    {
        return $this->saldoAusar2;
    }

    /**
     * Set resultado2
     *
     * @param integer $resultado2
     * @return FormatoEstadoResultado8
     */
    public function setResultado2($resultado2)
    {
        $this->resultado2 = $resultado2;

        return $this;
    }

    /**
     * Get resultado2
     *
     * @return integer 
     */
    public function getResultado2()
    {
        return $this->resultado2;
    }

    /**
     * Set operacion3
     *
     * @param string $operacion3
     * @return FormatoEstadoResultado8
     */
    public function setOperacion3($operacion3)
    {
        $this->operacion3 = $operacion3;

        return $this;
    }

    /**
     * Get operacion3
     *
     * @return string 
     */
    public function getOperacion3()
    {
        return $this->operacion3;
    }

    /**
     * Set filaI3
     *
     * @param integer $filaI3
     * @return FormatoEstadoResultado8
     */
    public function setFilaI3($filaI3)
    {
        $this->filaI3 = $filaI3;

        return $this;
    }

    /**
     * Get filaI3
     *
     * @return integer 
     */
    public function getFilaI3()
    {
        return $this->filaI3;
    }

    /**
     * Set filaF3
     *
     * @param integer $filaF3
     * @return FormatoEstadoResultado8
     */
    public function setFilaF3($filaF3)
    {
        $this->filaF3 = $filaF3;

        return $this;
    }

    /**
     * Get filaF3
     *
     * @return integer 
     */
    public function getFilaF3()
    {
        return $this->filaF3;
    }

    /**
     * Set valor3
     *
     * @param integer $valor3
     * @return FormatoEstadoResultado8
     */
    public function setValor3($valor3)
    {
        $this->valor3 = $valor3;

        return $this;
    }

    /**
     * Get valor3
     *
     * @return integer 
     */
    public function getValor3()
    {
        return $this->valor3;
    }

    /**
     * Set saldoAusar3
     *
     * @param string $saldoAusar3
     * @return FormatoEstadoResultado8
     */
    public function setSaldoAusar3($saldoAusar3)
    {
        $this->saldoAusar3 = $saldoAusar3;

        return $this;
    }

    /**
     * Get saldoAusar3
     *
     * @return string 
     */
    public function getSaldoAusar3()
    {
        return $this->saldoAusar3;
    }

    /**
     * Set resultado3
     *
     * @param integer $resultado3
     * @return FormatoEstadoResultado8
     */
    public function setResultado3($resultado3)
    {
        $this->resultado3 = $resultado3;

        return $this;
    }

    /**
     * Get resultado3
     *
     * @return integer 
     */
    public function getResultado3()
    {
        return $this->resultado3;
    }

    /**
     * Set formula
     *
     * @param string $formula
     * @return FormatoEstadoResultado8
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
}
