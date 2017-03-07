<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetallePpagos
 *
 * @ORM\Table(name="Detalle_PPagos", indexes={@ORM\Index(name="IX_Det_PPagos", columns={"Id_Doc", "Ano_Doc", "Id_Proveedor"}), @ORM\Index(name="Ix3_Det_PPagos", columns={"Agrupacion"})})
 * @ORM\Entity
 */
class DetallePpagos
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
     * @ORM\Column(name="Ano_Doc", type="smallint", nullable=false)
     */
    private $anoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Doc", type="string", length=15, nullable=false)
     */
    private $idDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_DocQuePaga", type="integer", nullable=false)
     */
    private $idDocquepaga;

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
     * @ORM\Column(name="Porc_Recargo", type="decimal", precision=7, scale=4, nullable=false)
     */
    private $porcRecargo;

    /**
     * @var string
     *
     * @ORM\Column(name="Recargos", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $recargos;

    /**
     * @var string
     *
     * @ORM\Column(name="Porc_Descuento", type="decimal", precision=7, scale=4, nullable=false)
     */
    private $porcDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="Descuentos", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $descuentos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Total", type="integer", nullable=false)
     */
    private $impTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Credito", type="smallint", nullable=false)
     */
    private $diasCredito;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Despacho", type="datetime", nullable=false)
     */
    private $fechaDespacho;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

    /**
     * @var string
     *
     * @ORM\Column(name="Factura_Proveedor", type="string", length=40, nullable=false)
     */
    private $facturaProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_Cambio", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tasaCambio;

    /**
     * @var string
     *
     * @ORM\Column(name="Importe_Moneda", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $importeMoneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Max_APagar", type="integer", nullable=false)
     */
    private $maxApagar;

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
     * @var boolean
     *
     * @ORM\Column(name="Marca", type="boolean", nullable=false)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

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
     * @var integer
     *
     * @ORM\Column(name="Items", type="integer", nullable=false)
     */
    private $items;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Que_Paga", type="string", length=5, nullable=false)
     */
    private $quePaga;

    /**
     * @var string
     *
     * @ORM\Column(name="Captar_QuePaga", type="string", length=50, nullable=false)
     */
    private $captarQuepaga;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Rx", type="smallint", nullable=false)
     */
    private $anoRx;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rx_PreAssets", type="boolean", nullable=false)
     */
    private $rxPreassets;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Rx", type="integer", nullable=false)
     */
    private $contadorRx;

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
     * @ORM\Column(name="Importe_MR", type="integer", nullable=false)
     */
    private $importeMr;

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
     * @ORM\Column(name="Imp_Total_MR", type="integer", nullable=false)
     */
    private $impTotalMr;

    /**
     * @var integer
     *
     * @ORM\Column(name="SobrePagoMB_xTC", type="integer", nullable=false)
     */
    private $sobrepagombXtc;

    /**
     * @var string
     *
     * @ORM\Column(name="T_Cambio_ActualMB_MR", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tCambioActualmbMr;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda_R", type="string", length=5, nullable=false)
     */
    private $monedaR;

    /**
     * @var string
     *
     * @ORM\Column(name="T_Cambio_IniMB_MP", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tCambioInimbMp;

    /**
     * @var string
     *
     * @ORM\Column(name="T_Cambio_ActualMB_MP", type="decimal", precision=14, scale=6, nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="SobrePago_MP", type="integer", nullable=false)
     */
    private $sobrepagoMp;



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
     * Set anoDoc
     *
     * @param integer $anoDoc
     * @return DetallePpagos
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
     * Set idDoc
     *
     * @param string $idDoc
     * @return DetallePpagos
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
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return DetallePpagos
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return string 
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set idDocquepaga
     *
     * @param integer $idDocquepaga
     * @return DetallePpagos
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
     * Set fechaEmision
     *
     * @param \DateTime $fechaEmision
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * Set recargos
     *
     * @param string $recargos
     * @return DetallePpagos
     */
    public function setRecargos($recargos)
    {
        $this->recargos = $recargos;

        return $this;
    }

    /**
     * Get recargos
     *
     * @return string 
     */
    public function getRecargos()
    {
        return $this->recargos;
    }

    /**
     * Set porcDescuento
     *
     * @param string $porcDescuento
     * @return DetallePpagos
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
     * Set descuentos
     *
     * @param string $descuentos
     * @return DetallePpagos
     */
    public function setDescuentos($descuentos)
    {
        $this->descuentos = $descuentos;

        return $this;
    }

    /**
     * Get descuentos
     *
     * @return string 
     */
    public function getDescuentos()
    {
        return $this->descuentos;
    }

    /**
     * Set impTotal
     *
     * @param integer $impTotal
     * @return DetallePpagos
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
     * Set diasCredito
     *
     * @param integer $diasCredito
     * @return DetallePpagos
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
     * Set fechaDespacho
     *
     * @param \DateTime $fechaDespacho
     * @return DetallePpagos
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
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return DetallePpagos
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
     * Set facturaProveedor
     *
     * @param string $facturaProveedor
     * @return DetallePpagos
     */
    public function setFacturaProveedor($facturaProveedor)
    {
        $this->facturaProveedor = $facturaProveedor;

        return $this;
    }

    /**
     * Get facturaProveedor
     *
     * @return string 
     */
    public function getFacturaProveedor()
    {
        return $this->facturaProveedor;
    }

    /**
     * Set tasaCambio
     *
     * @param string $tasaCambio
     * @return DetallePpagos
     */
    public function setTasaCambio($tasaCambio)
    {
        $this->tasaCambio = $tasaCambio;

        return $this;
    }

    /**
     * Get tasaCambio
     *
     * @return string 
     */
    public function getTasaCambio()
    {
        return $this->tasaCambio;
    }

    /**
     * Set importeMoneda
     *
     * @param string $importeMoneda
     * @return DetallePpagos
     */
    public function setImporteMoneda($importeMoneda)
    {
        $this->importeMoneda = $importeMoneda;

        return $this;
    }

    /**
     * Get importeMoneda
     *
     * @return string 
     */
    public function getImporteMoneda()
    {
        return $this->importeMoneda;
    }

    /**
     * Set maxApagar
     *
     * @param integer $maxApagar
     * @return DetallePpagos
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
     * Set financiamiento
     *
     * @param boolean $financiamiento
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * Set marca
     *
     * @param boolean $marca
     * @return DetallePpagos
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
     * Set nota
     *
     * @param string $nota
     * @return DetallePpagos
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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetallePpagos
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
     * Set agrupacion
     *
     * @param string $agrupacion
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * Set items
     *
     * @param integer $items
     * @return DetallePpagos
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return DetallePpagos
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
     * Set quePaga
     *
     * @param string $quePaga
     * @return DetallePpagos
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
     * Set captarQuepaga
     *
     * @param string $captarQuepaga
     * @return DetallePpagos
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
     * Set anoRx
     *
     * @param integer $anoRx
     * @return DetallePpagos
     */
    public function setAnoRx($anoRx)
    {
        $this->anoRx = $anoRx;

        return $this;
    }

    /**
     * Get anoRx
     *
     * @return integer 
     */
    public function getAnoRx()
    {
        return $this->anoRx;
    }

    /**
     * Set rxPreassets
     *
     * @param boolean $rxPreassets
     * @return DetallePpagos
     */
    public function setRxPreassets($rxPreassets)
    {
        $this->rxPreassets = $rxPreassets;

        return $this;
    }

    /**
     * Get rxPreassets
     *
     * @return boolean 
     */
    public function getRxPreassets()
    {
        return $this->rxPreassets;
    }

    /**
     * Set contadorRx
     *
     * @param integer $contadorRx
     * @return DetallePpagos
     */
    public function setContadorRx($contadorRx)
    {
        $this->contadorRx = $contadorRx;

        return $this;
    }

    /**
     * Get contadorRx
     *
     * @return integer 
     */
    public function getContadorRx()
    {
        return $this->contadorRx;
    }

    /**
     * Set contadorAccess
     *
     * @param integer $contadorAccess
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * Set contrato
     *
     * @param string $contrato
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * Set importeMr
     *
     * @param integer $importeMr
     * @return DetallePpagos
     */
    public function setImporteMr($importeMr)
    {
        $this->importeMr = $importeMr;

        return $this;
    }

    /**
     * Get importeMr
     *
     * @return integer 
     */
    public function getImporteMr()
    {
        return $this->importeMr;
    }

    /**
     * Set recargoMp
     *
     * @param integer $recargoMp
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * Set impTotalMr
     *
     * @param integer $impTotalMr
     * @return DetallePpagos
     */
    public function setImpTotalMr($impTotalMr)
    {
        $this->impTotalMr = $impTotalMr;

        return $this;
    }

    /**
     * Get impTotalMr
     *
     * @return integer 
     */
    public function getImpTotalMr()
    {
        return $this->impTotalMr;
    }

    /**
     * Set sobrepagombXtc
     *
     * @param integer $sobrepagombXtc
     * @return DetallePpagos
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
     * Set tCambioActualmbMr
     *
     * @param string $tCambioActualmbMr
     * @return DetallePpagos
     */
    public function setTCambioActualmbMr($tCambioActualmbMr)
    {
        $this->tCambioActualmbMr = $tCambioActualmbMr;

        return $this;
    }

    /**
     * Get tCambioActualmbMr
     *
     * @return string 
     */
    public function getTCambioActualmbMr()
    {
        return $this->tCambioActualmbMr;
    }

    /**
     * Set monedaR
     *
     * @param string $monedaR
     * @return DetallePpagos
     */
    public function setMonedaR($monedaR)
    {
        $this->monedaR = $monedaR;

        return $this;
    }

    /**
     * Get monedaR
     *
     * @return string 
     */
    public function getMonedaR()
    {
        return $this->monedaR;
    }

    /**
     * Set tCambioInimbMp
     *
     * @param string $tCambioInimbMp
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * @return DetallePpagos
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
     * @return DetallePpagos
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

    /**
     * Set sobrepagoMp
     *
     * @param integer $sobrepagoMp
     * @return DetallePpagos
     */
    public function setSobrepagoMp($sobrepagoMp)
    {
        $this->sobrepagoMp = $sobrepagoMp;

        return $this;
    }

    /**
     * Get sobrepagoMp
     *
     * @return integer 
     */
    public function getSobrepagoMp()
    {
        return $this->sobrepagoMp;
    }
}
