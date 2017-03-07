<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhAjustessubmayorretenciones
 *
 * @ORM\Table(name="RH_AjustesSubmayorRetenciones")
 * @ORM\Entity
 */
class RhAjustessubmayorretenciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     */
    private $tipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente_Deduccion", type="string", length=15, nullable=false)
     */
    private $idExpedienteDeduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=152, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Deduccion", type="string", length=5, nullable=false)
     */
    private $idDeduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Deduccion", type="string", length=50, nullable=false)
     */
    private $descDeduccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Deduccion", type="integer", nullable=false)
     */
    private $valorDeduccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo", type="integer", nullable=false)
     */
    private $saldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ajuste", type="integer", nullable=false)
     */
    private $ajuste;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=100, nullable=false)
     */
    private $observaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ProcesarAjuste", type="boolean", nullable=false)
     */
    private $procesarajuste;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Procesado", type="boolean", nullable=false)
     */
    private $procesado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Deduccion1", type="integer", nullable=false)
     */
    private $valorDeduccion1;



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
     * Set contador
     *
     * @param integer $contador
     * @return RhAjustessubmayorretenciones
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
     * Set ano
     *
     * @param integer $ano
     * @return RhAjustessubmayorretenciones
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
     * Set mes
     *
     * @param integer $mes
     * @return RhAjustessubmayorretenciones
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set tipoPago
     *
     * @param integer $tipoPago
     * @return RhAjustessubmayorretenciones
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    /**
     * Get tipoPago
     *
     * @return integer 
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
    }

    /**
     * Set idExpedienteDeduccion
     *
     * @param string $idExpedienteDeduccion
     * @return RhAjustessubmayorretenciones
     */
    public function setIdExpedienteDeduccion($idExpedienteDeduccion)
    {
        $this->idExpedienteDeduccion = $idExpedienteDeduccion;

        return $this;
    }

    /**
     * Get idExpedienteDeduccion
     *
     * @return string 
     */
    public function getIdExpedienteDeduccion()
    {
        return $this->idExpedienteDeduccion;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhAjustessubmayorretenciones
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return RhAjustessubmayorretenciones
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set idDeduccion
     *
     * @param string $idDeduccion
     * @return RhAjustessubmayorretenciones
     */
    public function setIdDeduccion($idDeduccion)
    {
        $this->idDeduccion = $idDeduccion;

        return $this;
    }

    /**
     * Get idDeduccion
     *
     * @return string 
     */
    public function getIdDeduccion()
    {
        return $this->idDeduccion;
    }

    /**
     * Set descDeduccion
     *
     * @param string $descDeduccion
     * @return RhAjustessubmayorretenciones
     */
    public function setDescDeduccion($descDeduccion)
    {
        $this->descDeduccion = $descDeduccion;

        return $this;
    }

    /**
     * Get descDeduccion
     *
     * @return string 
     */
    public function getDescDeduccion()
    {
        return $this->descDeduccion;
    }

    /**
     * Set valorDeduccion
     *
     * @param integer $valorDeduccion
     * @return RhAjustessubmayorretenciones
     */
    public function setValorDeduccion($valorDeduccion)
    {
        $this->valorDeduccion = $valorDeduccion;

        return $this;
    }

    /**
     * Get valorDeduccion
     *
     * @return integer 
     */
    public function getValorDeduccion()
    {
        return $this->valorDeduccion;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return RhAjustessubmayorretenciones
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
     * Set ajuste
     *
     * @param integer $ajuste
     * @return RhAjustessubmayorretenciones
     */
    public function setAjuste($ajuste)
    {
        $this->ajuste = $ajuste;

        return $this;
    }

    /**
     * Get ajuste
     *
     * @return integer 
     */
    public function getAjuste()
    {
        return $this->ajuste;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return RhAjustessubmayorretenciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set procesarajuste
     *
     * @param boolean $procesarajuste
     * @return RhAjustessubmayorretenciones
     */
    public function setProcesarajuste($procesarajuste)
    {
        $this->procesarajuste = $procesarajuste;

        return $this;
    }

    /**
     * Get procesarajuste
     *
     * @return boolean 
     */
    public function getProcesarajuste()
    {
        return $this->procesarajuste;
    }

    /**
     * Set procesado
     *
     * @param boolean $procesado
     * @return RhAjustessubmayorretenciones
     */
    public function setProcesado($procesado)
    {
        $this->procesado = $procesado;

        return $this;
    }

    /**
     * Get procesado
     *
     * @return boolean 
     */
    public function getProcesado()
    {
        return $this->procesado;
    }

    /**
     * Set valorDeduccion1
     *
     * @param integer $valorDeduccion1
     * @return RhAjustessubmayorretenciones
     */
    public function setValorDeduccion1($valorDeduccion1)
    {
        $this->valorDeduccion1 = $valorDeduccion1;

        return $this;
    }

    /**
     * Get valorDeduccion1
     *
     * @return integer 
     */
    public function getValorDeduccion1()
    {
        return $this->valorDeduccion1;
    }
}
