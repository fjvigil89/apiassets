<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormatoEstadoSituacion5
 *
 * @ORM\Table(name="Formato_Estado_Situacion5")
 * @ORM\Entity
 */
class FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
     * @return FormatoEstadoSituacion5
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
}
