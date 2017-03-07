<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChCobros
 *
 * @ORM\Table(name="CH_Cobros", indexes={@ORM\Index(name="ix_Fecha", columns={"Fecha"})})
 * @ORM\Entity
 */
class ChCobros
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
     * @ORM\Column(name="Id_Recibo", type="integer", nullable=false)
     */
    private $idRecibo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Referencia", type="string", length=40, nullable=false)
     */
    private $idReferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Cobro", type="integer", nullable=false)
     */
    private $contadorCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Cobro", type="string", length=15, nullable=false)
     */
    private $idCobro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Doc", type="smallint", nullable=false)
     */
    private $anoDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Pago", type="datetime", nullable=false)
     */
    private $fechaPago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

    /**
     * @var string
     *
     * @ORM\Column(name="Forma_Pago", type="string", length=50, nullable=false)
     */
    private $formaPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Cobro", type="smallint", nullable=false)
     */
    private $tipoCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=70, nullable=false)
     */
    private $descCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     */
    private $idConcepto;

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
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var string
     *
     * @ORM\Column(name="DC_CTACOD", type="string", length=30, nullable=false)
     */
    private $dcCtacod;

    /**
     * @var string
     *
     * @ORM\Column(name="Entregado_Por", type="string", length=50, nullable=false)
     */
    private $entregadoPor;

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
     * @var integer
     *
     * @ORM\Column(name="Item", type="integer", nullable=false)
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FPago", type="string", length=3, nullable=false)
     */
    private $idFpago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden_Impresion", type="integer", nullable=false)
     */
    private $ordenImpresion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo", type="string", length=10, nullable=false)
     */
    private $idFondo;



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
     * Set idRecibo
     *
     * @param integer $idRecibo
     * @return ChCobros
     */
    public function setIdRecibo($idRecibo)
    {
        $this->idRecibo = $idRecibo;

        return $this;
    }

    /**
     * Get idRecibo
     *
     * @return integer 
     */
    public function getIdRecibo()
    {
        return $this->idRecibo;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return ChCobros
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ChCobros
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idReferencia
     *
     * @param string $idReferencia
     * @return ChCobros
     */
    public function setIdReferencia($idReferencia)
    {
        $this->idReferencia = $idReferencia;

        return $this;
    }

    /**
     * Get idReferencia
     *
     * @return string 
     */
    public function getIdReferencia()
    {
        return $this->idReferencia;
    }

    /**
     * Set contadorCobro
     *
     * @param integer $contadorCobro
     * @return ChCobros
     */
    public function setContadorCobro($contadorCobro)
    {
        $this->contadorCobro = $contadorCobro;

        return $this;
    }

    /**
     * Get contadorCobro
     *
     * @return integer 
     */
    public function getContadorCobro()
    {
        return $this->contadorCobro;
    }

    /**
     * Set idCobro
     *
     * @param string $idCobro
     * @return ChCobros
     */
    public function setIdCobro($idCobro)
    {
        $this->idCobro = $idCobro;

        return $this;
    }

    /**
     * Get idCobro
     *
     * @return string 
     */
    public function getIdCobro()
    {
        return $this->idCobro;
    }

    /**
     * Set anoDoc
     *
     * @param integer $anoDoc
     * @return ChCobros
     */
    public function setAnoDoc($anoDoc)
    {
        $this->anoDoc = $anoDoc;

        return $this;
    }

    /**
     * Get anoDoc
     *
     * @return integer 
     */
    public function getAnoDoc()
    {
        return $this->anoDoc;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return ChCobros
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechaPago
     *
     * @param \DateTime $fechaPago
     * @return ChCobros
     */
    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;

        return $this;
    }

    /**
     * Get fechaPago
     *
     * @return \DateTime 
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }

    /**
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return ChCobros
     */
    public function setFechaVence($fechaVence)
    {
        $this->fechaVence = $fechaVence;

        return $this;
    }

    /**
     * Get fechaVence
     *
     * @return \DateTime 
     */
    public function getFechaVence()
    {
        return $this->fechaVence;
    }

    /**
     * Set formaPago
     *
     * @param string $formaPago
     * @return ChCobros
     */
    public function setFormaPago($formaPago)
    {
        $this->formaPago = $formaPago;

        return $this;
    }

    /**
     * Get formaPago
     *
     * @return string 
     */
    public function getFormaPago()
    {
        return $this->formaPago;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return ChCobros
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
     * Set moneda
     *
     * @param string $moneda
     * @return ChCobros
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set tipoCobro
     *
     * @param integer $tipoCobro
     * @return ChCobros
     */
    public function setTipoCobro($tipoCobro)
    {
        $this->tipoCobro = $tipoCobro;

        return $this;
    }

    /**
     * Get tipoCobro
     *
     * @return integer 
     */
    public function getTipoCobro()
    {
        return $this->tipoCobro;
    }

    /**
     * Set descCliente
     *
     * @param string $descCliente
     * @return ChCobros
     */
    public function setDescCliente($descCliente)
    {
        $this->descCliente = $descCliente;

        return $this;
    }

    /**
     * Get descCliente
     *
     * @return string 
     */
    public function getDescCliente()
    {
        return $this->descCliente;
    }

    /**
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return ChCobros
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
     * Set importe
     *
     * @param integer $importe
     * @return ChCobros
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
     * @return ChCobros
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
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return ChCobros
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set dcCtacod
     *
     * @param string $dcCtacod
     * @return ChCobros
     */
    public function setDcCtacod($dcCtacod)
    {
        $this->dcCtacod = $dcCtacod;

        return $this;
    }

    /**
     * Get dcCtacod
     *
     * @return string 
     */
    public function getDcCtacod()
    {
        return $this->dcCtacod;
    }

    /**
     * Set entregadoPor
     *
     * @param string $entregadoPor
     * @return ChCobros
     */
    public function setEntregadoPor($entregadoPor)
    {
        $this->entregadoPor = $entregadoPor;

        return $this;
    }

    /**
     * Get entregadoPor
     *
     * @return string 
     */
    public function getEntregadoPor()
    {
        return $this->entregadoPor;
    }

    /**
     * Set estadoDepositado
     *
     * @param integer $estadoDepositado
     * @return ChCobros
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
     * @return ChCobros
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

    /**
     * Set item
     *
     * @param integer $item
     * @return ChCobros
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
     * Set idFpago
     *
     * @param string $idFpago
     * @return ChCobros
     */
    public function setIdFpago($idFpago)
    {
        $this->idFpago = $idFpago;

        return $this;
    }

    /**
     * Get idFpago
     *
     * @return string 
     */
    public function getIdFpago()
    {
        return $this->idFpago;
    }

    /**
     * Set ordenImpresion
     *
     * @param integer $ordenImpresion
     * @return ChCobros
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ChCobros
     */
    public function setXtrans($xtrans)
    {
        $this->xtrans = $xtrans;

        return $this;
    }

    /**
     * Get xtrans
     *
     * @return boolean 
     */
    public function getXtrans()
    {
        return $this->xtrans;
    }

    /**
     * Set idFondo
     *
     * @param string $idFondo
     * @return ChCobros
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
}
