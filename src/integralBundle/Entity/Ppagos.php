<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ppagos
 *
 * @ORM\Table(name="PPagos", indexes={@ORM\Index(name="Ix2_PPagos", columns={"Id_Doc", "Ano_Doc", "Id_Proveedor"}), @ORM\Index(name="Ix3_PPagos", columns={"Agrupacion"}), @ORM\Index(name="Ix4_PPagos", columns={"Fecha_Pago", "Confirmado"})})
 * @ORM\Entity
 */
class Ppagos
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
     * @ORM\Column(name="Id_Doc", type="string", length=15, nullable=false)
     */
    private $idDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Doc", type="smallint", nullable=false)
     */
    private $anoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Forma_Pago", type="string", length=50, nullable=false)
     */
    private $formaPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Cobro", type="smallint", nullable=false)
     */
    private $tipoCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Proveedor", type="string", length=50, nullable=false)
     */
    private $descProveedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_DocQuePaga", type="integer", nullable=false)
     */
    private $idDocquepaga;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Pago", type="datetime", nullable=false)
     */
    private $fechaPago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cheque", type="datetime", nullable=false)
     */
    private $fechaCheque;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Recargo", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $recargo;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Cobro", type="integer", nullable=false)
     */
    private $importeCobro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Pendiente", type="integer", nullable=false)
     */
    private $importePendiente;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_CambioMB", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tasaCambiomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_CambioMP", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tasaCambiomp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Confirmado", type="boolean", nullable=false)
     */
    private $confirmado;

    /**
     * @var string
     *
     * @ORM\Column(name="Anulado", type="string", length=1, nullable=false)
     */
    private $anulado;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Compro", type="string", length=5, nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Compro", type="smallint", nullable=false)
     */
    private $mesCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro", type="smallint", nullable=false)
     */
    private $anoCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_ComproAnulado", type="integer", nullable=false)
     */
    private $idComproanulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Anul", type="smallint", nullable=false)
     */
    private $mesAnul;

    /**
     * @var string
     *
     * @ORM\Column(name="Ano_Anulado", type="string", length=4, nullable=false)
     */
    private $anoAnulado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_vsAnticipo", type="boolean", nullable=false)
     */
    private $pagoVsanticipo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Anticipo_PreAssets", type="boolean", nullable=false)
     */
    private $anticipoPreassets;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Moneda", type="integer", nullable=false)
     */
    private $importeMoneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_MonedaPagado", type="integer", nullable=false)
     */
    private $importeMonedapagado;

    /**
     * @var string
     *
     * @ORM\Column(name="DC_CTACOD", type="string", length=30, nullable=false)
     */
    private $dcCtacod;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cancelacion_Anticipo", type="boolean", nullable=false)
     */
    private $cancelacionAnticipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cancelacion", type="datetime", nullable=false)
     */
    private $fechaCancelacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Factor_Conversion", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $factorConversion;

    /**
     * @var string
     *
     * @ORM\Column(name="Agrupacion", type="string", length=5, nullable=false)
     */
    private $agrupacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizado", type="boolean", nullable=false)
     */
    private $contabilizado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Anulado_Contabilizado", type="boolean", nullable=false)
     */
    private $anuladoContabilizado;

    /**
     * @var string
     *
     * @ORM\Column(name="Que_Paga", type="string", length=15, nullable=false)
     */
    private $quePaga;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasiRecep", type="string", length=2, nullable=false)
     */
    private $idClasirecep;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="Entregado_Por", type="string", length=50, nullable=false)
     */
    private $entregadoPor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="XTrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca", type="boolean", nullable=false)
     */
    private $marca;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cobrado_Ef_xCobrar", type="boolean", nullable=false)
     */
    private $cobradoEfXcobrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_ComproEfecto_Canc", type="integer", nullable=false)
     */
    private $idComproefectoCanc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Efecto_Canc", type="smallint", nullable=false)
     */
    private $mesEfectoCanc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Efecto_Canc", type="smallint", nullable=false)
     */
    private $anoEfectoCanc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Efecto_Canc", type="datetime", nullable=false)
     */
    private $fechaEfectoCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     */
    private $idConcepto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IG_Menores", type="boolean", nullable=false)
     */
    private $igMenores;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_ACCESS", type="integer", nullable=false)
     */
    private $contadorAccess;

    /**
     * @var integer
     *
     * @ORM\Column(name="NoCheque", type="integer", nullable=false)
     */
    private $nocheque;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cheque_Folio_Updt", type="boolean", nullable=false)
     */
    private $chequeFolioUpdt;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;

    /**
     * @var string
     *
     * @ORM\Column(name="Beneficiario", type="string", length=50, nullable=false)
     */
    private $beneficiario;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Doc_Pago_Letra", type="string", length=15, nullable=false)
     */
    private $idDocPagoLetra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Recibido_Banco", type="boolean", nullable=false)
     */
    private $recibidoBanco;

    /**
     * @var string
     *
     * @ORM\Column(name="Contrato", type="string", length=20, nullable=false)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Reembolsado", type="smallint", nullable=false)
     */
    private $reembolsado;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=15, nullable=false)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Aprobado_Por", type="string", length=20, nullable=false)
     */
    private $aprobadoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Caja_Chica", type="smallint", nullable=false)
     */
    private $cajaChica;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo", type="string", length=10, nullable=false)
     */
    private $idFondo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CCosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_Cambio_Real", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tasaCambioReal;

    /**
     * @var string
     *
     * @ORM\Column(name="NCF", type="string", length=22, nullable=false)
     */
    private $ncf;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usa_NCF", type="boolean", nullable=false)
     */
    private $usaNcf;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nro_Doc", type="integer", nullable=false)
     */
    private $nroDoc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_Tasa_Actual", type="boolean", nullable=false)
     */
    private $usarTasaActual;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_MonedaPendiente", type="integer", nullable=false)
     */
    private $importeMonedapendiente;



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
     * @return Ppagos
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
     * @return Ppagos
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
     * Set formaPago
     *
     * @param string $formaPago
     * @return Ppagos
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
     * Set tipoCobro
     *
     * @param integer $tipoCobro
     * @return Ppagos
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
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return Ppagos
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
     * Set descProveedor
     *
     * @param string $descProveedor
     * @return Ppagos
     */
    public function setDescProveedor($descProveedor)
    {
        $this->descProveedor = $descProveedor;

        return $this;
    }

    /**
     * Get descProveedor
     *
     * @return string 
     */
    public function getDescProveedor()
    {
        return $this->descProveedor;
    }

    /**
     * Set idDocquepaga
     *
     * @param integer $idDocquepaga
     * @return Ppagos
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
     * Set fechaPago
     *
     * @param \DateTime $fechaPago
     * @return Ppagos
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
     * Set fechaCheque
     *
     * @param \DateTime $fechaCheque
     * @return Ppagos
     */
    public function setFechaCheque($fechaCheque)
    {
        $this->fechaCheque = $fechaCheque;

        return $this;
    }

    /**
     * Get fechaCheque
     *
     * @return \DateTime 
     */
    public function getFechaCheque()
    {
        return $this->fechaCheque;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Ppagos
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
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return Ppagos
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
     * Set recargo
     *
     * @param string $recargo
     * @return Ppagos
     */
    public function setRecargo($recargo)
    {
        $this->recargo = $recargo;

        return $this;
    }

    /**
     * Get recargo
     *
     * @return string 
     */
    public function getRecargo()
    {
        return $this->recargo;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     * @return Ppagos
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return Ppagos
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
     * Set importeCobro
     *
     * @param integer $importeCobro
     * @return Ppagos
     */
    public function setImporteCobro($importeCobro)
    {
        $this->importeCobro = $importeCobro;

        return $this;
    }

    /**
     * Get importeCobro
     *
     * @return integer 
     */
    public function getImporteCobro()
    {
        return $this->importeCobro;
    }

    /**
     * Set importePendiente
     *
     * @param integer $importePendiente
     * @return Ppagos
     */
    public function setImportePendiente($importePendiente)
    {
        $this->importePendiente = $importePendiente;

        return $this;
    }

    /**
     * Get importePendiente
     *
     * @return integer 
     */
    public function getImportePendiente()
    {
        return $this->importePendiente;
    }

    /**
     * Set tasaCambiomb
     *
     * @param string $tasaCambiomb
     * @return Ppagos
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
     * Set tasaCambiomp
     *
     * @param string $tasaCambiomp
     * @return Ppagos
     */
    public function setTasaCambiomp($tasaCambiomp)
    {
        $this->tasaCambiomp = $tasaCambiomp;

        return $this;
    }

    /**
     * Get tasaCambiomp
     *
     * @return string 
     */
    public function getTasaCambiomp()
    {
        return $this->tasaCambiomp;
    }

    /**
     * Set confirmado
     *
     * @param boolean $confirmado
     * @return Ppagos
     */
    public function setConfirmado($confirmado)
    {
        $this->confirmado = $confirmado;

        return $this;
    }

    /**
     * Get confirmado
     *
     * @return boolean 
     */
    public function getConfirmado()
    {
        return $this->confirmado;
    }

    /**
     * Set anulado
     *
     * @param string $anulado
     * @return Ppagos
     */
    public function setAnulado($anulado)
    {
        $this->anulado = $anulado;

        return $this;
    }

    /**
     * Get anulado
     *
     * @return string 
     */
    public function getAnulado()
    {
        return $this->anulado;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return Ppagos
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
     * Set idCompro
     *
     * @param string $idCompro
     * @return Ppagos
     */
    public function setIdCompro($idCompro)
    {
        $this->idCompro = $idCompro;

        return $this;
    }

    /**
     * Get idCompro
     *
     * @return string 
     */
    public function getIdCompro()
    {
        return $this->idCompro;
    }

    /**
     * Set mesCompro
     *
     * @param integer $mesCompro
     * @return Ppagos
     */
    public function setMesCompro($mesCompro)
    {
        $this->mesCompro = $mesCompro;

        return $this;
    }

    /**
     * Get mesCompro
     *
     * @return integer 
     */
    public function getMesCompro()
    {
        return $this->mesCompro;
    }

    /**
     * Set anoCompro
     *
     * @param integer $anoCompro
     * @return Ppagos
     */
    public function setAnoCompro($anoCompro)
    {
        $this->anoCompro = $anoCompro;

        return $this;
    }

    /**
     * Get anoCompro
     *
     * @return integer 
     */
    public function getAnoCompro()
    {
        return $this->anoCompro;
    }

    /**
     * Set idComproanulado
     *
     * @param integer $idComproanulado
     * @return Ppagos
     */
    public function setIdComproanulado($idComproanulado)
    {
        $this->idComproanulado = $idComproanulado;

        return $this;
    }

    /**
     * Get idComproanulado
     *
     * @return integer 
     */
    public function getIdComproanulado()
    {
        return $this->idComproanulado;
    }

    /**
     * Set mesAnul
     *
     * @param integer $mesAnul
     * @return Ppagos
     */
    public function setMesAnul($mesAnul)
    {
        $this->mesAnul = $mesAnul;

        return $this;
    }

    /**
     * Get mesAnul
     *
     * @return integer 
     */
    public function getMesAnul()
    {
        return $this->mesAnul;
    }

    /**
     * Set anoAnulado
     *
     * @param string $anoAnulado
     * @return Ppagos
     */
    public function setAnoAnulado($anoAnulado)
    {
        $this->anoAnulado = $anoAnulado;

        return $this;
    }

    /**
     * Get anoAnulado
     *
     * @return string 
     */
    public function getAnoAnulado()
    {
        return $this->anoAnulado;
    }

    /**
     * Set pagoVsanticipo
     *
     * @param boolean $pagoVsanticipo
     * @return Ppagos
     */
    public function setPagoVsanticipo($pagoVsanticipo)
    {
        $this->pagoVsanticipo = $pagoVsanticipo;

        return $this;
    }

    /**
     * Get pagoVsanticipo
     *
     * @return boolean 
     */
    public function getPagoVsanticipo()
    {
        return $this->pagoVsanticipo;
    }

    /**
     * Set anticipoPreassets
     *
     * @param boolean $anticipoPreassets
     * @return Ppagos
     */
    public function setAnticipoPreassets($anticipoPreassets)
    {
        $this->anticipoPreassets = $anticipoPreassets;

        return $this;
    }

    /**
     * Get anticipoPreassets
     *
     * @return boolean 
     */
    public function getAnticipoPreassets()
    {
        return $this->anticipoPreassets;
    }

    /**
     * Set importeMoneda
     *
     * @param integer $importeMoneda
     * @return Ppagos
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
     * Set importeMonedapagado
     *
     * @param integer $importeMonedapagado
     * @return Ppagos
     */
    public function setImporteMonedapagado($importeMonedapagado)
    {
        $this->importeMonedapagado = $importeMonedapagado;

        return $this;
    }

    /**
     * Get importeMonedapagado
     *
     * @return integer 
     */
    public function getImporteMonedapagado()
    {
        return $this->importeMonedapagado;
    }

    /**
     * Set dcCtacod
     *
     * @param string $dcCtacod
     * @return Ppagos
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
     * Set cancelacionAnticipo
     *
     * @param boolean $cancelacionAnticipo
     * @return Ppagos
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
     * Set fechaCancelacion
     *
     * @param \DateTime $fechaCancelacion
     * @return Ppagos
     */
    public function setFechaCancelacion($fechaCancelacion)
    {
        $this->fechaCancelacion = $fechaCancelacion;

        return $this;
    }

    /**
     * Get fechaCancelacion
     *
     * @return \DateTime 
     */
    public function getFechaCancelacion()
    {
        return $this->fechaCancelacion;
    }

    /**
     * Set factorConversion
     *
     * @param string $factorConversion
     * @return Ppagos
     */
    public function setFactorConversion($factorConversion)
    {
        $this->factorConversion = $factorConversion;

        return $this;
    }

    /**
     * Get factorConversion
     *
     * @return string 
     */
    public function getFactorConversion()
    {
        return $this->factorConversion;
    }

    /**
     * Set agrupacion
     *
     * @param string $agrupacion
     * @return Ppagos
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
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return Ppagos
     */
    public function setContabilizado($contabilizado)
    {
        $this->contabilizado = $contabilizado;

        return $this;
    }

    /**
     * Get contabilizado
     *
     * @return boolean 
     */
    public function getContabilizado()
    {
        return $this->contabilizado;
    }

    /**
     * Set anuladoContabilizado
     *
     * @param boolean $anuladoContabilizado
     * @return Ppagos
     */
    public function setAnuladoContabilizado($anuladoContabilizado)
    {
        $this->anuladoContabilizado = $anuladoContabilizado;

        return $this;
    }

    /**
     * Get anuladoContabilizado
     *
     * @return boolean 
     */
    public function getAnuladoContabilizado()
    {
        return $this->anuladoContabilizado;
    }

    /**
     * Set quePaga
     *
     * @param string $quePaga
     * @return Ppagos
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
     * Set idClasirecep
     *
     * @param string $idClasirecep
     * @return Ppagos
     */
    public function setIdClasirecep($idClasirecep)
    {
        $this->idClasirecep = $idClasirecep;

        return $this;
    }

    /**
     * Get idClasirecep
     *
     * @return string 
     */
    public function getIdClasirecep()
    {
        return $this->idClasirecep;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Ppagos
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set entregadoPor
     *
     * @param string $entregadoPor
     * @return Ppagos
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return Ppagos
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
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return Ppagos
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
     * Set marca
     *
     * @param boolean $marca
     * @return Ppagos
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
     * Set cobradoEfXcobrar
     *
     * @param boolean $cobradoEfXcobrar
     * @return Ppagos
     */
    public function setCobradoEfXcobrar($cobradoEfXcobrar)
    {
        $this->cobradoEfXcobrar = $cobradoEfXcobrar;

        return $this;
    }

    /**
     * Get cobradoEfXcobrar
     *
     * @return boolean 
     */
    public function getCobradoEfXcobrar()
    {
        return $this->cobradoEfXcobrar;
    }

    /**
     * Set idComproefectoCanc
     *
     * @param integer $idComproefectoCanc
     * @return Ppagos
     */
    public function setIdComproefectoCanc($idComproefectoCanc)
    {
        $this->idComproefectoCanc = $idComproefectoCanc;

        return $this;
    }

    /**
     * Get idComproefectoCanc
     *
     * @return integer 
     */
    public function getIdComproefectoCanc()
    {
        return $this->idComproefectoCanc;
    }

    /**
     * Set mesEfectoCanc
     *
     * @param integer $mesEfectoCanc
     * @return Ppagos
     */
    public function setMesEfectoCanc($mesEfectoCanc)
    {
        $this->mesEfectoCanc = $mesEfectoCanc;

        return $this;
    }

    /**
     * Get mesEfectoCanc
     *
     * @return integer 
     */
    public function getMesEfectoCanc()
    {
        return $this->mesEfectoCanc;
    }

    /**
     * Set anoEfectoCanc
     *
     * @param integer $anoEfectoCanc
     * @return Ppagos
     */
    public function setAnoEfectoCanc($anoEfectoCanc)
    {
        $this->anoEfectoCanc = $anoEfectoCanc;

        return $this;
    }

    /**
     * Get anoEfectoCanc
     *
     * @return integer 
     */
    public function getAnoEfectoCanc()
    {
        return $this->anoEfectoCanc;
    }

    /**
     * Set fechaEfectoCanc
     *
     * @param \DateTime $fechaEfectoCanc
     * @return Ppagos
     */
    public function setFechaEfectoCanc($fechaEfectoCanc)
    {
        $this->fechaEfectoCanc = $fechaEfectoCanc;

        return $this;
    }

    /**
     * Get fechaEfectoCanc
     *
     * @return \DateTime 
     */
    public function getFechaEfectoCanc()
    {
        return $this->fechaEfectoCanc;
    }

    /**
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return Ppagos
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
     * Set igMenores
     *
     * @param boolean $igMenores
     * @return Ppagos
     */
    public function setIgMenores($igMenores)
    {
        $this->igMenores = $igMenores;

        return $this;
    }

    /**
     * Get igMenores
     *
     * @return boolean 
     */
    public function getIgMenores()
    {
        return $this->igMenores;
    }

    /**
     * Set contadorAccess
     *
     * @param integer $contadorAccess
     * @return Ppagos
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
     * Set nocheque
     *
     * @param integer $nocheque
     * @return Ppagos
     */
    public function setNocheque($nocheque)
    {
        $this->nocheque = $nocheque;

        return $this;
    }

    /**
     * Get nocheque
     *
     * @return integer 
     */
    public function getNocheque()
    {
        return $this->nocheque;
    }

    /**
     * Set chequeFolioUpdt
     *
     * @param boolean $chequeFolioUpdt
     * @return Ppagos
     */
    public function setChequeFolioUpdt($chequeFolioUpdt)
    {
        $this->chequeFolioUpdt = $chequeFolioUpdt;

        return $this;
    }

    /**
     * Get chequeFolioUpdt
     *
     * @return boolean 
     */
    public function getChequeFolioUpdt()
    {
        return $this->chequeFolioUpdt;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Ppagos
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return Ppagos
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set beneficiario
     *
     * @param string $beneficiario
     * @return Ppagos
     */
    public function setBeneficiario($beneficiario)
    {
        $this->beneficiario = $beneficiario;

        return $this;
    }

    /**
     * Get beneficiario
     *
     * @return string 
     */
    public function getBeneficiario()
    {
        return $this->beneficiario;
    }

    /**
     * Set idDocPagoLetra
     *
     * @param string $idDocPagoLetra
     * @return Ppagos
     */
    public function setIdDocPagoLetra($idDocPagoLetra)
    {
        $this->idDocPagoLetra = $idDocPagoLetra;

        return $this;
    }

    /**
     * Get idDocPagoLetra
     *
     * @return string 
     */
    public function getIdDocPagoLetra()
    {
        return $this->idDocPagoLetra;
    }

    /**
     * Set recibidoBanco
     *
     * @param boolean $recibidoBanco
     * @return Ppagos
     */
    public function setRecibidoBanco($recibidoBanco)
    {
        $this->recibidoBanco = $recibidoBanco;

        return $this;
    }

    /**
     * Get recibidoBanco
     *
     * @return boolean 
     */
    public function getRecibidoBanco()
    {
        return $this->recibidoBanco;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     * @return Ppagos
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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Ppagos
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
     * Set reembolsado
     *
     * @param integer $reembolsado
     * @return Ppagos
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
     * Set referencia
     *
     * @param string $referencia
     * @return Ppagos
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set aprobadoPor
     *
     * @param string $aprobadoPor
     * @return Ppagos
     */
    public function setAprobadoPor($aprobadoPor)
    {
        $this->aprobadoPor = $aprobadoPor;

        return $this;
    }

    /**
     * Get aprobadoPor
     *
     * @return string 
     */
    public function getAprobadoPor()
    {
        return $this->aprobadoPor;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return Ppagos
     */
    public function setDocPrimario($docPrimario)
    {
        $this->docPrimario = $docPrimario;

        return $this;
    }

    /**
     * Get docPrimario
     *
     * @return string 
     */
    public function getDocPrimario()
    {
        return $this->docPrimario;
    }

    /**
     * Set cajaChica
     *
     * @param integer $cajaChica
     * @return Ppagos
     */
    public function setCajaChica($cajaChica)
    {
        $this->cajaChica = $cajaChica;

        return $this;
    }

    /**
     * Get cajaChica
     *
     * @return integer 
     */
    public function getCajaChica()
    {
        return $this->cajaChica;
    }

    /**
     * Set idFondo
     *
     * @param string $idFondo
     * @return Ppagos
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return Ppagos
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set tasaCambioReal
     *
     * @param string $tasaCambioReal
     * @return Ppagos
     */
    public function setTasaCambioReal($tasaCambioReal)
    {
        $this->tasaCambioReal = $tasaCambioReal;

        return $this;
    }

    /**
     * Get tasaCambioReal
     *
     * @return string 
     */
    public function getTasaCambioReal()
    {
        return $this->tasaCambioReal;
    }

    /**
     * Set ncf
     *
     * @param string $ncf
     * @return Ppagos
     */
    public function setNcf($ncf)
    {
        $this->ncf = $ncf;

        return $this;
    }

    /**
     * Get ncf
     *
     * @return string 
     */
    public function getNcf()
    {
        return $this->ncf;
    }

    /**
     * Set usaNcf
     *
     * @param boolean $usaNcf
     * @return Ppagos
     */
    public function setUsaNcf($usaNcf)
    {
        $this->usaNcf = $usaNcf;

        return $this;
    }

    /**
     * Get usaNcf
     *
     * @return boolean 
     */
    public function getUsaNcf()
    {
        return $this->usaNcf;
    }

    /**
     * Set nroDoc
     *
     * @param integer $nroDoc
     * @return Ppagos
     */
    public function setNroDoc($nroDoc)
    {
        $this->nroDoc = $nroDoc;

        return $this;
    }

    /**
     * Get nroDoc
     *
     * @return integer 
     */
    public function getNroDoc()
    {
        return $this->nroDoc;
    }

    /**
     * Set usarTasaActual
     *
     * @param boolean $usarTasaActual
     * @return Ppagos
     */
    public function setUsarTasaActual($usarTasaActual)
    {
        $this->usarTasaActual = $usarTasaActual;

        return $this;
    }

    /**
     * Get usarTasaActual
     *
     * @return boolean 
     */
    public function getUsarTasaActual()
    {
        return $this->usarTasaActual;
    }

    /**
     * Set importeMonedapendiente
     *
     * @param integer $importeMonedapendiente
     * @return Ppagos
     */
    public function setImporteMonedapendiente($importeMonedapendiente)
    {
        $this->importeMonedapendiente = $importeMonedapendiente;

        return $this;
    }

    /**
     * Get importeMonedapendiente
     *
     * @return integer 
     */
    public function getImporteMonedapendiente()
    {
        return $this->importeMonedapendiente;
    }
}
