<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentoPago
 *
 * @ORM\Table(name="Documento_Pago", indexes={@ORM\Index(name="Ix1_Doc_Pago", columns={"ID_Doc", "Ano_Doc", "Id_Cliente"}), @ORM\Index(name="Ix2_Doc_Pago", columns={"Agrupacion"})})
 * @ORM\Entity
 */
class DocumentoPago
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
     * @var string
     *
     * @ORM\Column(name="ID_Doc", type="string", length=15, nullable=false)
     */
    private $idDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Doc", type="smallint", nullable=false)
     */
    private $anoDoc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca", type="boolean", nullable=false)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_DocQuePaga", type="integer", nullable=false)
     */
    private $idDocquepaga;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Factura", type="smallint", nullable=false)
     */
    private $anoFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Emision", type="datetime", nullable=false)
     */
    private $fechaEmision;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Porc_Recargo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcRecargo;

    /**
     * @var string
     *
     * @ORM\Column(name="Porc_Descuento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcDescuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Recargo", type="integer", nullable=false)
     */
    private $recargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="descuento", type="integer", nullable=false)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Total", type="integer", nullable=false)
     */
    private $impTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Max_APagar", type="integer", nullable=false)
     */
    private $maxApagar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Despacho", type="datetime", nullable=false)
     */
    private $fechaDespacho;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Credito", type="smallint", nullable=false)
     */
    private $diasCredito;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Factura", type="smallint", nullable=false)
     */
    private $tipoFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_CambioMF", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tasaCambiomf;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_CambioMB", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tasaCambiomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Moneda", type="integer", nullable=false)
     */
    private $importeMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Conduce", type="string", length=50, nullable=false)
     */
    private $conduce;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Financiamiento", type="boolean", nullable=false)
     */
    private $financiamiento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cancelacion_Anticipo", type="boolean", nullable=false)
     */
    private $cancelacionAnticipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Agrupacion", type="string", length=5, nullable=false)
     */
    private $agrupacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Forma_Pago", type="string", length=50, nullable=false)
     */
    private $formaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Captar_QuePaga", type="string", length=50, nullable=false)
     */
    private $captarQuepaga;

    /**
     * @var string
     *
     * @ORM\Column(name="Que_Paga", type="string", length=2, nullable=false)
     */
    private $quePaga;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="integer", nullable=false)
     */
    private $items;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_FacturaProvee", type="integer", nullable=false)
     */
    private $idFacturaprovee;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fa_PreAssets", type="boolean", nullable=false)
     */
    private $faPreassets;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_ACCESS", type="integer", nullable=true)
     */
    private $contadorAccess;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Impuesto", type="integer", nullable=false)
     */
    private $importeImpuesto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Fa", type="integer", nullable=false)
     */
    private $contadorFa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Comision_Total", type="integer", nullable=false)
     */
    private $comisionTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Renta_Adelantada", type="integer", nullable=false)
     */
    private $rentaAdelantada;

    /**
     * @var integer
     *
     * @ORM\Column(name="ACobrar_SinR_EnITBIS", type="integer", nullable=false)
     */
    private $acobrarSinrEnitbis;

    /**
     * @var integer
     *
     * @ORM\Column(name="ACobrar_ConR_EnITBIS", type="integer", nullable=false)
     */
    private $acobrarConrEnitbis;

    /**
     * @var string
     *
     * @ORM\Column(name="Contrato", type="string", length=20, nullable=false)
     */
    private $contrato;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Deuda_Dir", type="boolean", nullable=false)
     */
    private $deudaDir;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_MFa", type="integer", nullable=false)
     */
    private $importeMfa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Recargo_MP", type="integer", nullable=false)
     */
    private $recargoMp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Descuento_MP", type="integer", nullable=false)
     */
    private $descuentoMp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Total_MP", type="integer", nullable=false)
     */
    private $impTotalMp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Total_MF", type="integer", nullable=false)
     */
    private $impTotalMf;

    /**
     * @var integer
     *
     * @ORM\Column(name="SobrePagoMB_xTC", type="integer", nullable=false)
     */
    private $sobrepagombXtc;

    /**
     * @var string
     *
     * @ORM\Column(name="T_Cambio_ActualMB_MF", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $tCambioActualmbMf;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda_Fa", type="string", length=5, nullable=false)
     */
    private $monedaFa;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Fa", type="string", length=10, nullable=false)
     */
    private $idClasifFa;

    /**
     * @var string
     *
     * @ORM\Column(name="T_Cambio_IniMB_MP", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $tCambioInimbMp;

    /**
     * @var string
     *
     * @ORM\Column(name="T_Cambio_ActualMB_MP", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $tCambioActualmbMp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porc_Otras_Ret", type="integer", nullable=false)
     */
    private $porcOtrasRet;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Otras_Ret", type="integer", nullable=false)
     */
    private $impOtrasRet;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porc_Otros_ITBIS_Ret", type="integer", nullable=false)
     */
    private $porcOtrosItbisRet;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Otros_ITBIS_Ret", type="integer", nullable=false)
     */
    private $impOtrosItbisRet;



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
     * @param string $idDoc
     * @return DocumentoPago
     */
    public function setIdDoc($idDoc)
    {
        $this->idDoc = $idDoc;

        return $this;
    }

    /**
     * Get idDoc
     *
     * @return string 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set anoDoc
     *
     * @param integer $anoDoc
     * @return DocumentoPago
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
     * Set marca
     *
     * @param boolean $marca
     * @return DocumentoPago
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return boolean 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return DocumentoPago
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idDocquepaga
     *
     * @param integer $idDocquepaga
     * @return DocumentoPago
     */
    public function setIdDocquepaga($idDocquepaga)
    {
        $this->idDocquepaga = $idDocquepaga;

        return $this;
    }

    /**
     * Get idDocquepaga
     *
     * @return integer 
     */
    public function getIdDocquepaga()
    {
        return $this->idDocquepaga;
    }

    /**
     * Set anoFactura
     *
     * @param integer $anoFactura
     * @return DocumentoPago
     */
    public function setAnoFactura($anoFactura)
    {
        $this->anoFactura = $anoFactura;

        return $this;
    }

    /**
     * Get anoFactura
     *
     * @return integer 
     */
    public function getAnoFactura()
    {
        return $this->anoFactura;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DocumentoPago
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set fechaEmision
     *
     * @param \DateTime $fechaEmision
     * @return DocumentoPago
     */
    public function setFechaEmision($fechaEmision)
    {
        $this->fechaEmision = $fechaEmision;

        return $this;
    }

    /**
     * Get fechaEmision
     *
     * @return \DateTime 
     */
    public function getFechaEmision()
    {
        return $this->fechaEmision;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return DocumentoPago
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
     * Set porcRecargo
     *
     * @param string $porcRecargo
     * @return DocumentoPago
     */
    public function setPorcRecargo($porcRecargo)
    {
        $this->porcRecargo = $porcRecargo;

        return $this;
    }

    /**
     * Get porcRecargo
     *
     * @return string 
     */
    public function getPorcRecargo()
    {
        return $this->porcRecargo;
    }

    /**
     * Set porcDescuento
     *
     * @param string $porcDescuento
     * @return DocumentoPago
     */
    public function setPorcDescuento($porcDescuento)
    {
        $this->porcDescuento = $porcDescuento;

        return $this;
    }

    /**
     * Get porcDescuento
     *
     * @return string 
     */
    public function getPorcDescuento()
    {
        return $this->porcDescuento;
    }

    /**
     * Set recargo
     *
     * @param integer $recargo
     * @return DocumentoPago
     */
    public function setRecargo($recargo)
    {
        $this->recargo = $recargo;

        return $this;
    }

    /**
     * Get recargo
     *
     * @return integer 
     */
    public function getRecargo()
    {
        return $this->recargo;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     * @return DocumentoPago
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set impTotal
     *
     * @param integer $impTotal
     * @return DocumentoPago
     */
    public function setImpTotal($impTotal)
    {
        $this->impTotal = $impTotal;

        return $this;
    }

    /**
     * Get impTotal
     *
     * @return integer 
     */
    public function getImpTotal()
    {
        return $this->impTotal;
    }

    /**
     * Set maxApagar
     *
     * @param integer $maxApagar
     * @return DocumentoPago
     */
    public function setMaxApagar($maxApagar)
    {
        $this->maxApagar = $maxApagar;

        return $this;
    }

    /**
     * Get maxApagar
     *
     * @return integer 
     */
    public function getMaxApagar()
    {
        return $this->maxApagar;
    }

    /**
     * Set fechaDespacho
     *
     * @param \DateTime $fechaDespacho
     * @return DocumentoPago
     */
    public function setFechaDespacho($fechaDespacho)
    {
        $this->fechaDespacho = $fechaDespacho;

        return $this;
    }

    /**
     * Get fechaDespacho
     *
     * @return \DateTime 
     */
    public function getFechaDespacho()
    {
        return $this->fechaDespacho;
    }

    /**
     * Set diasCredito
     *
     * @param integer $diasCredito
     * @return DocumentoPago
     */
    public function setDiasCredito($diasCredito)
    {
        $this->diasCredito = $diasCredito;

        return $this;
    }

    /**
     * Get diasCredito
     *
     * @return integer 
     */
    public function getDiasCredito()
    {
        return $this->diasCredito;
    }

    /**
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return DocumentoPago
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
     * Set tipoFactura
     *
     * @param integer $tipoFactura
     * @return DocumentoPago
     */
    public function setTipoFactura($tipoFactura)
    {
        $this->tipoFactura = $tipoFactura;

        return $this;
    }

    /**
     * Get tipoFactura
     *
     * @return integer 
     */
    public function getTipoFactura()
    {
        return $this->tipoFactura;
    }

    /**
     * Set tasaCambiomf
     *
     * @param string $tasaCambiomf
     * @return DocumentoPago
     */
    public function setTasaCambiomf($tasaCambiomf)
    {
        $this->tasaCambiomf = $tasaCambiomf;

        return $this;
    }

    /**
     * Get tasaCambiomf
     *
     * @return string 
     */
    public function getTasaCambiomf()
    {
        return $this->tasaCambiomf;
    }

    /**
     * Set tasaCambiomb
     *
     * @param string $tasaCambiomb
     * @return DocumentoPago
     */
    public function setTasaCambiomb($tasaCambiomb)
    {
        $this->tasaCambiomb = $tasaCambiomb;

        return $this;
    }

    /**
     * Get tasaCambiomb
     *
     * @return string 
     */
    public function getTasaCambiomb()
    {
        return $this->tasaCambiomb;
    }

    /**
     * Set importeMoneda
     *
     * @param integer $importeMoneda
     * @return DocumentoPago
     */
    public function setImporteMoneda($importeMoneda)
    {
        $this->importeMoneda = $importeMoneda;

        return $this;
    }

    /**
     * Get importeMoneda
     *
     * @return integer 
     */
    public function getImporteMoneda()
    {
        return $this->importeMoneda;
    }

    /**
     * Set conduce
     *
     * @param string $conduce
     * @return DocumentoPago
     */
    public function setConduce($conduce)
    {
        $this->conduce = $conduce;

        return $this;
    }

    /**
     * Get conduce
     *
     * @return string 
     */
    public function getConduce()
    {
        return $this->conduce;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return DocumentoPago
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
     * Set financiamiento
     *
     * @param boolean $financiamiento
     * @return DocumentoPago
     */
    public function setFinanciamiento($financiamiento)
    {
        $this->financiamiento = $financiamiento;

        return $this;
    }

    /**
     * Get financiamiento
     *
     * @return boolean 
     */
    public function getFinanciamiento()
    {
        return $this->financiamiento;
    }

    /**
     * Set cancelacionAnticipo
     *
     * @param boolean $cancelacionAnticipo
     * @return DocumentoPago
     */
    public function setCancelacionAnticipo($cancelacionAnticipo)
    {
        $this->cancelacionAnticipo = $cancelacionAnticipo;

        return $this;
    }

    /**
     * Get cancelacionAnticipo
     *
     * @return boolean 
     */
    public function getCancelacionAnticipo()
    {
        return $this->cancelacionAnticipo;
    }

    /**
     * Set agrupacion
     *
     * @param string $agrupacion
     * @return DocumentoPago
     */
    public function setAgrupacion($agrupacion)
    {
        $this->agrupacion = $agrupacion;

        return $this;
    }

    /**
     * Get agrupacion
     *
     * @return string 
     */
    public function getAgrupacion()
    {
        return $this->agrupacion;
    }

    /**
     * Set formaPago
     *
     * @param string $formaPago
     * @return DocumentoPago
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
     * Set captarQuepaga
     *
     * @param string $captarQuepaga
     * @return DocumentoPago
     */
    public function setCaptarQuepaga($captarQuepaga)
    {
        $this->captarQuepaga = $captarQuepaga;

        return $this;
    }

    /**
     * Get captarQuepaga
     *
     * @return string 
     */
    public function getCaptarQuepaga()
    {
        return $this->captarQuepaga;
    }

    /**
     * Set quePaga
     *
     * @param string $quePaga
     * @return DocumentoPago
     */
    public function setQuePaga($quePaga)
    {
        $this->quePaga = $quePaga;

        return $this;
    }

    /**
     * Get quePaga
     *
     * @return string 
     */
    public function getQuePaga()
    {
        return $this->quePaga;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return DocumentoPago
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items
     *
     * @return integer 
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set idFacturaprovee
     *
     * @param integer $idFacturaprovee
     * @return DocumentoPago
     */
    public function setIdFacturaprovee($idFacturaprovee)
    {
        $this->idFacturaprovee = $idFacturaprovee;

        return $this;
    }

    /**
     * Get idFacturaprovee
     *
     * @return integer 
     */
    public function getIdFacturaprovee()
    {
        return $this->idFacturaprovee;
    }

    /**
     * Set faPreassets
     *
     * @param boolean $faPreassets
     * @return DocumentoPago
     */
    public function setFaPreassets($faPreassets)
    {
        $this->faPreassets = $faPreassets;

        return $this;
    }

    /**
     * Get faPreassets
     *
     * @return boolean 
     */
    public function getFaPreassets()
    {
        return $this->faPreassets;
    }

    /**
     * Set contadorAccess
     *
     * @param integer $contadorAccess
     * @return DocumentoPago
     */
    public function setContadorAccess($contadorAccess)
    {
        $this->contadorAccess = $contadorAccess;

        return $this;
    }

    /**
     * Get contadorAccess
     *
     * @return integer 
     */
    public function getContadorAccess()
    {
        return $this->contadorAccess;
    }

    /**
     * Set importeImpuesto
     *
     * @param integer $importeImpuesto
     * @return DocumentoPago
     */
    public function setImporteImpuesto($importeImpuesto)
    {
        $this->importeImpuesto = $importeImpuesto;

        return $this;
    }

    /**
     * Get importeImpuesto
     *
     * @return integer 
     */
    public function getImporteImpuesto()
    {
        return $this->importeImpuesto;
    }

    /**
     * Set contadorFa
     *
     * @param integer $contadorFa
     * @return DocumentoPago
     */
    public function setContadorFa($contadorFa)
    {
        $this->contadorFa = $contadorFa;

        return $this;
    }

    /**
     * Get contadorFa
     *
     * @return integer 
     */
    public function getContadorFa()
    {
        return $this->contadorFa;
    }

    /**
     * Set comisionTotal
     *
     * @param integer $comisionTotal
     * @return DocumentoPago
     */
    public function setComisionTotal($comisionTotal)
    {
        $this->comisionTotal = $comisionTotal;

        return $this;
    }

    /**
     * Get comisionTotal
     *
     * @return integer 
     */
    public function getComisionTotal()
    {
        return $this->comisionTotal;
    }

    /**
     * Set rentaAdelantada
     *
     * @param integer $rentaAdelantada
     * @return DocumentoPago
     */
    public function setRentaAdelantada($rentaAdelantada)
    {
        $this->rentaAdelantada = $rentaAdelantada;

        return $this;
    }

    /**
     * Get rentaAdelantada
     *
     * @return integer 
     */
    public function getRentaAdelantada()
    {
        return $this->rentaAdelantada;
    }

    /**
     * Set acobrarSinrEnitbis
     *
     * @param integer $acobrarSinrEnitbis
     * @return DocumentoPago
     */
    public function setAcobrarSinrEnitbis($acobrarSinrEnitbis)
    {
        $this->acobrarSinrEnitbis = $acobrarSinrEnitbis;

        return $this;
    }

    /**
     * Get acobrarSinrEnitbis
     *
     * @return integer 
     */
    public function getAcobrarSinrEnitbis()
    {
        return $this->acobrarSinrEnitbis;
    }

    /**
     * Set acobrarConrEnitbis
     *
     * @param integer $acobrarConrEnitbis
     * @return DocumentoPago
     */
    public function setAcobrarConrEnitbis($acobrarConrEnitbis)
    {
        $this->acobrarConrEnitbis = $acobrarConrEnitbis;

        return $this;
    }

    /**
     * Get acobrarConrEnitbis
     *
     * @return integer 
     */
    public function getAcobrarConrEnitbis()
    {
        return $this->acobrarConrEnitbis;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     * @return DocumentoPago
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return string 
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set deudaDir
     *
     * @param boolean $deudaDir
     * @return DocumentoPago
     */
    public function setDeudaDir($deudaDir)
    {
        $this->deudaDir = $deudaDir;

        return $this;
    }

    /**
     * Get deudaDir
     *
     * @return boolean 
     */
    public function getDeudaDir()
    {
        return $this->deudaDir;
    }

    /**
     * Set importeMfa
     *
     * @param integer $importeMfa
     * @return DocumentoPago
     */
    public function setImporteMfa($importeMfa)
    {
        $this->importeMfa = $importeMfa;

        return $this;
    }

    /**
     * Get importeMfa
     *
     * @return integer 
     */
    public function getImporteMfa()
    {
        return $this->importeMfa;
    }

    /**
     * Set recargoMp
     *
     * @param integer $recargoMp
     * @return DocumentoPago
     */
    public function setRecargoMp($recargoMp)
    {
        $this->recargoMp = $recargoMp;

        return $this;
    }

    /**
     * Get recargoMp
     *
     * @return integer 
     */
    public function getRecargoMp()
    {
        return $this->recargoMp;
    }

    /**
     * Set descuentoMp
     *
     * @param integer $descuentoMp
     * @return DocumentoPago
     */
    public function setDescuentoMp($descuentoMp)
    {
        $this->descuentoMp = $descuentoMp;

        return $this;
    }

    /**
     * Get descuentoMp
     *
     * @return integer 
     */
    public function getDescuentoMp()
    {
        return $this->descuentoMp;
    }

    /**
     * Set impTotalMp
     *
     * @param integer $impTotalMp
     * @return DocumentoPago
     */
    public function setImpTotalMp($impTotalMp)
    {
        $this->impTotalMp = $impTotalMp;

        return $this;
    }

    /**
     * Get impTotalMp
     *
     * @return integer 
     */
    public function getImpTotalMp()
    {
        return $this->impTotalMp;
    }

    /**
     * Set impTotalMf
     *
     * @param integer $impTotalMf
     * @return DocumentoPago
     */
    public function setImpTotalMf($impTotalMf)
    {
        $this->impTotalMf = $impTotalMf;

        return $this;
    }

    /**
     * Get impTotalMf
     *
     * @return integer 
     */
    public function getImpTotalMf()
    {
        return $this->impTotalMf;
    }

    /**
     * Set sobrepagombXtc
     *
     * @param integer $sobrepagombXtc
     * @return DocumentoPago
     */
    public function setSobrepagombXtc($sobrepagombXtc)
    {
        $this->sobrepagombXtc = $sobrepagombXtc;

        return $this;
    }

    /**
     * Get sobrepagombXtc
     *
     * @return integer 
     */
    public function getSobrepagombXtc()
    {
        return $this->sobrepagombXtc;
    }

    /**
     * Set tCambioActualmbMf
     *
     * @param string $tCambioActualmbMf
     * @return DocumentoPago
     */
    public function setTCambioActualmbMf($tCambioActualmbMf)
    {
        $this->tCambioActualmbMf = $tCambioActualmbMf;

        return $this;
    }

    /**
     * Get tCambioActualmbMf
     *
     * @return string 
     */
    public function getTCambioActualmbMf()
    {
        return $this->tCambioActualmbMf;
    }

    /**
     * Set monedaFa
     *
     * @param string $monedaFa
     * @return DocumentoPago
     */
    public function setMonedaFa($monedaFa)
    {
        $this->monedaFa = $monedaFa;

        return $this;
    }

    /**
     * Get monedaFa
     *
     * @return string 
     */
    public function getMonedaFa()
    {
        return $this->monedaFa;
    }

    /**
     * Set idClasifFa
     *
     * @param string $idClasifFa
     * @return DocumentoPago
     */
    public function setIdClasifFa($idClasifFa)
    {
        $this->idClasifFa = $idClasifFa;

        return $this;
    }

    /**
     * Get idClasifFa
     *
     * @return string 
     */
    public function getIdClasifFa()
    {
        return $this->idClasifFa;
    }

    /**
     * Set tCambioInimbMp
     *
     * @param string $tCambioInimbMp
     * @return DocumentoPago
     */
    public function setTCambioInimbMp($tCambioInimbMp)
    {
        $this->tCambioInimbMp = $tCambioInimbMp;

        return $this;
    }

    /**
     * Get tCambioInimbMp
     *
     * @return string 
     */
    public function getTCambioInimbMp()
    {
        return $this->tCambioInimbMp;
    }

    /**
     * Set tCambioActualmbMp
     *
     * @param string $tCambioActualmbMp
     * @return DocumentoPago
     */
    public function setTCambioActualmbMp($tCambioActualmbMp)
    {
        $this->tCambioActualmbMp = $tCambioActualmbMp;

        return $this;
    }

    /**
     * Get tCambioActualmbMp
     *
     * @return string 
     */
    public function getTCambioActualmbMp()
    {
        return $this->tCambioActualmbMp;
    }

    /**
     * Set porcOtrasRet
     *
     * @param integer $porcOtrasRet
     * @return DocumentoPago
     */
    public function setPorcOtrasRet($porcOtrasRet)
    {
        $this->porcOtrasRet = $porcOtrasRet;

        return $this;
    }

    /**
     * Get porcOtrasRet
     *
     * @return integer 
     */
    public function getPorcOtrasRet()
    {
        return $this->porcOtrasRet;
    }

    /**
     * Set impOtrasRet
     *
     * @param integer $impOtrasRet
     * @return DocumentoPago
     */
    public function setImpOtrasRet($impOtrasRet)
    {
        $this->impOtrasRet = $impOtrasRet;

        return $this;
    }

    /**
     * Get impOtrasRet
     *
     * @return integer 
     */
    public function getImpOtrasRet()
    {
        return $this->impOtrasRet;
    }

    /**
     * Set porcOtrosItbisRet
     *
     * @param integer $porcOtrosItbisRet
     * @return DocumentoPago
     */
    public function setPorcOtrosItbisRet($porcOtrosItbisRet)
    {
        $this->porcOtrosItbisRet = $porcOtrosItbisRet;

        return $this;
    }

    /**
     * Get porcOtrosItbisRet
     *
     * @return integer 
     */
    public function getPorcOtrosItbisRet()
    {
        return $this->porcOtrosItbisRet;
    }

    /**
     * Set impOtrosItbisRet
     *
     * @param integer $impOtrosItbisRet
     * @return DocumentoPago
     */
    public function setImpOtrosItbisRet($impOtrosItbisRet)
    {
        $this->impOtrosItbisRet = $impOtrosItbisRet;

        return $this;
    }

    /**
     * Get impOtrosItbisRet
     *
     * @return integer 
     */
    public function getImpOtrosItbisRet()
    {
        return $this->impOtrosItbisRet;
    }
}
