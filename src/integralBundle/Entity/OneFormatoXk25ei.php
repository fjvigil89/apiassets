<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OneFormatoXk25ei
 *
 * @ORM\Table(name="ONE_Formato_xK25EI")
 * @ORM\Entity
 */
class OneFormatoXk25ei
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
     * @var integer
     *
     * @ORM\Column(name="Cta_Elem", type="smallint", nullable=false)
     */
    private $ctaElem;

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
     * @var integer
     *
     * @ORM\Column(name="Fila_Porciento", type="smallint", nullable=false)
     */
    private $filaPorciento;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Valor", type="string", length=15, nullable=false)
     */
    private $tipoValor;

    /**
     * @var string
     *
     * @ORM\Column(name="Formula_Suma", type="string", length=150, nullable=false)
     */
    private $formulaSuma;

    /**
     * @var string
     *
     * @ORM\Column(name="Formula_Ktes", type="string", length=150, nullable=false)
     */
    private $formulaKtes;

    /**
     * @var string
     *
     * @ORM\Column(name="UM", type="string", length=5, nullable=false)
     */
    private $um;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Ano", type="integer", nullable=false)
     */
    private $planAno;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Ano_hFecha", type="integer", nullable=false)
     */
    private $planAnoHfecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Ano_hFecha", type="integer", nullable=false)
     */
    private $saldoAnoHfecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo", type="integer", nullable=false)
     */
    private $saldo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Imprimir", type="boolean", nullable=false)
     */
    private $imprimir;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=10, nullable=false)
     */
    private $codigo;

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
     * @var string
     *
     * @ORM\Column(name="Calculos", type="string", length=120, nullable=false)
     */
    private $calculos;



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
     * @return OneFormatoXk25ei
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
     * Set ctaElem
     *
     * @param integer $ctaElem
     * @return OneFormatoXk25ei
     */
    public function setCtaElem($ctaElem)
    {
        $this->ctaElem = $ctaElem;

        return $this;
    }

    /**
     * Get ctaElem
     *
     * @return integer 
     */
    public function getCtaElem()
    {
        return $this->ctaElem;
    }

    /**
     * Set idElemgasto
     *
     * @param string $idElemgasto
     * @return OneFormatoXk25ei
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
     * @return OneFormatoXk25ei
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
     * @return OneFormatoXk25ei
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
     * @return OneFormatoXk25ei
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
     * @return OneFormatoXk25ei
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
     * @return OneFormatoXk25ei
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
     * Set filaPorciento
     *
     * @param integer $filaPorciento
     * @return OneFormatoXk25ei
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
     * Set tipoValor
     *
     * @param string $tipoValor
     * @return OneFormatoXk25ei
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
     * Set formulaSuma
     *
     * @param string $formulaSuma
     * @return OneFormatoXk25ei
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
     * Set formulaKtes
     *
     * @param string $formulaKtes
     * @return OneFormatoXk25ei
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
     * Set um
     *
     * @param string $um
     * @return OneFormatoXk25ei
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
     * Set planAno
     *
     * @param integer $planAno
     * @return OneFormatoXk25ei
     */
    public function setPlanAno($planAno)
    {
        $this->planAno = $planAno;

        return $this;
    }

    /**
     * Get planAno
     *
     * @return integer 
     */
    public function getPlanAno()
    {
        return $this->planAno;
    }

    /**
     * Set planAnoHfecha
     *
     * @param integer $planAnoHfecha
     * @return OneFormatoXk25ei
     */
    public function setPlanAnoHfecha($planAnoHfecha)
    {
        $this->planAnoHfecha = $planAnoHfecha;

        return $this;
    }

    /**
     * Get planAnoHfecha
     *
     * @return integer 
     */
    public function getPlanAnoHfecha()
    {
        return $this->planAnoHfecha;
    }

    /**
     * Set saldoAnoHfecha
     *
     * @param integer $saldoAnoHfecha
     * @return OneFormatoXk25ei
     */
    public function setSaldoAnoHfecha($saldoAnoHfecha)
    {
        $this->saldoAnoHfecha = $saldoAnoHfecha;

        return $this;
    }

    /**
     * Get saldoAnoHfecha
     *
     * @return integer 
     */
    public function getSaldoAnoHfecha()
    {
        return $this->saldoAnoHfecha;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return OneFormatoXk25ei
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
     * Set imprimir
     *
     * @param boolean $imprimir
     * @return OneFormatoXk25ei
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
     * Set contador
     *
     * @param integer $contador
     * @return OneFormatoXk25ei
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
     * Set codigo
     *
     * @param string $codigo
     * @return OneFormatoXk25ei
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
     * Set editable
     *
     * @param boolean $editable
     * @return OneFormatoXk25ei
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
     * @return OneFormatoXk25ei
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
     * @return OneFormatoXk25ei
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
     * @return OneFormatoXk25ei
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
     * Set calculos
     *
     * @param string $calculos
     * @return OneFormatoXk25ei
     */
    public function setCalculos($calculos)
    {
        $this->calculos = $calculos;

        return $this;
    }

    /**
     * Get calculos
     *
     * @return string 
     */
    public function getCalculos()
    {
        return $this->calculos;
    }
}
