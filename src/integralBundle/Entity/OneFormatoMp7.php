<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OneFormatoMp7
 *
 * @ORM\Table(name="ONE_Formato_MP7")
 * @ORM\Entity
 */
class OneFormatoMp7
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
     * @ORM\Column(name="Id_ElemGasto", type="string", length=50, nullable=false)
     */
    private $idElemgasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubElemGasto", type="string", length=50, nullable=false)
     */
    private $idSubelemgasto;

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
     * @var string
     *
     * @ORM\Column(name="Formula_Suma", type="string", length=150, nullable=false)
     */
    private $formulaSuma;

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
     * @ORM\Column(name="UM", type="string", length=5, nullable=false)
     */
    private $um;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=10, nullable=false)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Real_Cierre_ANO_ANT", type="integer", nullable=false)
     */
    private $realCierreAnoAnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Real_PER_ANO_ANT", type="integer", nullable=false)
     */
    private $realPerAnoAnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_ANO_TOT", type="integer", nullable=false)
     */
    private $planAnoTot;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_ANO_ACUM", type="integer", nullable=false)
     */
    private $planAnoAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Real_PER_ANO_ACT", type="integer", nullable=false)
     */
    private $realPerAnoAct;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_ANO_NEXT", type="integer", nullable=false)
     */
    private $planAnoNext;

    /**
     * @var integer
     *
     * @ORM\Column(name="contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Formula_Ktes", type="string", length=150, nullable=false)
     */
    private $formulaKtes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Editable", type="boolean", nullable=false)
     */
    private $editable;

    /**
     * @var integer
     *
     * @ORM\Column(name="Field1", type="integer", nullable=false)
     */
    private $field1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Field2", type="integer", nullable=false)
     */
    private $field2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Field3", type="integer", nullable=false)
     */
    private $field3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Field4", type="integer", nullable=false)
     */
    private $field4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Field5", type="integer", nullable=false)
     */
    private $field5;

    /**
     * @var integer
     *
     * @ORM\Column(name="Field6", type="integer", nullable=false)
     */
    private $field6;



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
     * @return OneFormatoMp7
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
     * Set idElemgasto
     *
     * @param string $idElemgasto
     * @return OneFormatoMp7
     */
    public function setIdElemgasto($idElemgasto)
    {
        $this->idElemgasto = $idElemgasto;

        return $this;
    }

    /**
     * Get idElemgasto
     *
     * @return string 
     */
    public function getIdElemgasto()
    {
        return $this->idElemgasto;
    }

    /**
     * Set idSubelemgasto
     *
     * @param string $idSubelemgasto
     * @return OneFormatoMp7
     */
    public function setIdSubelemgasto($idSubelemgasto)
    {
        $this->idSubelemgasto = $idSubelemgasto;

        return $this;
    }

    /**
     * Get idSubelemgasto
     *
     * @return string 
     */
    public function getIdSubelemgasto()
    {
        return $this->idSubelemgasto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * Set formulaSuma
     *
     * @param string $formulaSuma
     * @return OneFormatoMp7
     */
    public function setFormulaSuma($formulaSuma)
    {
        $this->formulaSuma = $formulaSuma;

        return $this;
    }

    /**
     * Get formulaSuma
     *
     * @return string 
     */
    public function getFormulaSuma()
    {
        return $this->formulaSuma;
    }

    /**
     * Set operadorCondicion
     *
     * @param string $operadorCondicion
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * @return OneFormatoMp7
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
     * Set um
     *
     * @param string $um
     * @return OneFormatoMp7
     */
    public function setUm($um)
    {
        $this->um = $um;

        return $this;
    }

    /**
     * Get um
     *
     * @return string 
     */
    public function getUm()
    {
        return $this->um;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return OneFormatoMp7
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set realCierreAnoAnt
     *
     * @param integer $realCierreAnoAnt
     * @return OneFormatoMp7
     */
    public function setRealCierreAnoAnt($realCierreAnoAnt)
    {
        $this->realCierreAnoAnt = $realCierreAnoAnt;

        return $this;
    }

    /**
     * Get realCierreAnoAnt
     *
     * @return integer 
     */
    public function getRealCierreAnoAnt()
    {
        return $this->realCierreAnoAnt;
    }

    /**
     * Set realPerAnoAnt
     *
     * @param integer $realPerAnoAnt
     * @return OneFormatoMp7
     */
    public function setRealPerAnoAnt($realPerAnoAnt)
    {
        $this->realPerAnoAnt = $realPerAnoAnt;

        return $this;
    }

    /**
     * Get realPerAnoAnt
     *
     * @return integer 
     */
    public function getRealPerAnoAnt()
    {
        return $this->realPerAnoAnt;
    }

    /**
     * Set planAnoTot
     *
     * @param integer $planAnoTot
     * @return OneFormatoMp7
     */
    public function setPlanAnoTot($planAnoTot)
    {
        $this->planAnoTot = $planAnoTot;

        return $this;
    }

    /**
     * Get planAnoTot
     *
     * @return integer 
     */
    public function getPlanAnoTot()
    {
        return $this->planAnoTot;
    }

    /**
     * Set planAnoAcum
     *
     * @param integer $planAnoAcum
     * @return OneFormatoMp7
     */
    public function setPlanAnoAcum($planAnoAcum)
    {
        $this->planAnoAcum = $planAnoAcum;

        return $this;
    }

    /**
     * Get planAnoAcum
     *
     * @return integer 
     */
    public function getPlanAnoAcum()
    {
        return $this->planAnoAcum;
    }

    /**
     * Set realPerAnoAct
     *
     * @param integer $realPerAnoAct
     * @return OneFormatoMp7
     */
    public function setRealPerAnoAct($realPerAnoAct)
    {
        $this->realPerAnoAct = $realPerAnoAct;

        return $this;
    }

    /**
     * Get realPerAnoAct
     *
     * @return integer 
     */
    public function getRealPerAnoAct()
    {
        return $this->realPerAnoAct;
    }

    /**
     * Set planAnoNext
     *
     * @param integer $planAnoNext
     * @return OneFormatoMp7
     */
    public function setPlanAnoNext($planAnoNext)
    {
        $this->planAnoNext = $planAnoNext;

        return $this;
    }

    /**
     * Get planAnoNext
     *
     * @return integer 
     */
    public function getPlanAnoNext()
    {
        return $this->planAnoNext;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return OneFormatoMp7
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set formulaKtes
     *
     * @param string $formulaKtes
     * @return OneFormatoMp7
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

    /**
     * Set editable
     *
     * @param boolean $editable
     * @return OneFormatoMp7
     */
    public function setEditable($editable)
    {
        $this->editable = $editable;

        return $this;
    }

    /**
     * Get editable
     *
     * @return boolean 
     */
    public function getEditable()
    {
        return $this->editable;
    }

    /**
     * Set field1
     *
     * @param integer $field1
     * @return OneFormatoMp7
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;

        return $this;
    }

    /**
     * Get field1
     *
     * @return integer 
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * Set field2
     *
     * @param integer $field2
     * @return OneFormatoMp7
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;

        return $this;
    }

    /**
     * Get field2
     *
     * @return integer 
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Set field3
     *
     * @param integer $field3
     * @return OneFormatoMp7
     */
    public function setField3($field3)
    {
        $this->field3 = $field3;

        return $this;
    }

    /**
     * Get field3
     *
     * @return integer 
     */
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * Set field4
     *
     * @param integer $field4
     * @return OneFormatoMp7
     */
    public function setField4($field4)
    {
        $this->field4 = $field4;

        return $this;
    }

    /**
     * Get field4
     *
     * @return integer 
     */
    public function getField4()
    {
        return $this->field4;
    }

    /**
     * Set field5
     *
     * @param integer $field5
     * @return OneFormatoMp7
     */
    public function setField5($field5)
    {
        $this->field5 = $field5;

        return $this;
    }

    /**
     * Get field5
     *
     * @return integer 
     */
    public function getField5()
    {
        return $this->field5;
    }

    /**
     * Set field6
     *
     * @param integer $field6
     * @return OneFormatoMp7
     */
    public function setField6($field6)
    {
        $this->field6 = $field6;

        return $this;
    }

    /**
     * Get field6
     *
     * @return integer 
     */
    public function getField6()
    {
        return $this->field6;
    }
}
