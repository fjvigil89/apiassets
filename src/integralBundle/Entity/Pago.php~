<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pago
 *
 * @ORM\Table(name="Pago", indexes={@ORM\Index(name="CL_Pago", columns={"Fecha_Pago", "Confirmado"}), @ORM\Index(name="Ix_Pago8_Id_Cli_FechaP", columns={"Id_Cliente", "Fecha_Pago"}), @ORM\Index(name="Ix1_Pago", columns={"Agrupacion"}), @ORM\Index(name="Ix2_Pago", columns={"ID_Doc", "Ano_Doc", "Id_Cliente", "Forma_Pago"})})
 * @ORM\Entity
 */
class Pago
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
     * @var string
     *
     * @ORM\Column(name="Forma_Pago", type="string", length=50, nullable=false)
     */
    private $formaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Cobro", type="smallint", nullable=false)
     */
    private $tipoCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=false)
     */
    private $descCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Que_Paga", type="string", length=3, nullable=false)
     */
    private $quePaga;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

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
     * @ORM\Column(name="ImportePendiente", type="integer", nullable=false)
     */
    private $importependiente;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_CambioMB", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tasaCambiomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_CambioMF", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tasaCambiomf;

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
     * @var integer
     *
     * @ORM\Column(name="Id_Compro", type="integer", nullable=false)
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
     * @ORM\Column(name="MesAnul", type="smallint", nullable=false)
     */
    private $mesanul;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Anulado", type="smallint", nullable=false)
     */
    private $anoAnulado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cobro_vsAnticipo", type="boolean", nullable=false)
     */
    private $cobroVsanticipo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Anticipo_Preassets", type="boolean", nullable=false)
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
     * @ORM\Column(name="Importe_MonedaCobrado", type="integer", nullable=false)
     */
    private $importeMonedacobrado;

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
     * @ORM\Column(name="Entregado_Por", type="string", length=50, nullable=false)
     */
    private $entregadoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Agrupacion", type="string", length=5, nullable=false)
     */
    private $agrupacion;

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
     * @var boolean
     *
     * @ORM\Column(name="Deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="XTrans", type="boolean", nullable=false)
     */
    private $xtrans;

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
     * @var boolean
     *
     * @ORM\Column(name="Client_Requiere_Desc", type="boolean", nullable=false)
     */
    private $clientRequiereDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcInteres_Letra", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcinteresLetra;

    /**
     * @var integer
     *
     * @ORM\Column(name="Interes_Letra", type="integer", nullable=false)
     */
    private $interesLetra;

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
     * @ORM\Column(name="ID_Doc_Pago_Letra", type="string", length=15, nullable=false)
     */
    private $idDocPagoLetra;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tx_ACaja_Chica", type="smallint", nullable=false)
     */
    private $txAcajaChica;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ya_Tx_ACaja_Chica", type="smallint", nullable=false)
     */
    private $yaTxAcajaChica;

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
     * @ORM\Column(name="Id_Fondo_Efecto", type="string", length=10, nullable=false)
     */
    private $idFondoEfecto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Depositado", type="boolean", nullable=false)
     */
    private $depositado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Efecto_ACaja", type="boolean", nullable=false)
     */
    private $efectoAcaja;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Efecto_Contab_EnCaja", type="boolean", nullable=false)
     */
    private $efectoContabEncaja;

    /**
     * @var integer
     *
     * @ORM\Column(name="Comision_Bank_Porc", type="integer", nullable=false)
     */
    private $comisionBankPorc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Comision_Bank", type="integer", nullable=false)
     */
    private $comisionBank;

    /**
     * @var integer
     *
     * @ORM\Column(name="ITBIS_Retenido_Porc", type="integer", nullable=false)
     */
    private $itbisRetenidoPorc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ITBIS_Retenido", type="integer", nullable=false)
     */
    private $itbisRetenido;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_Cambio_Real", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $tasaCambioReal;

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
     * @var integer
     *
     * @ORM\Column(name="POS", type="smallint", nullable=false)
     */
    private $pos;

    /**
     * @var string
     *
     * @ORM\Column(name="Contrato", type="string", length=20, nullable=false)
     */
    private $contrato;

    /**
     * @var integer
     *
     * @ORM\Column(name="Anticipo_XLS", type="smallint", nullable=false)
     */
    private $anticipoXls;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nro_Doc", type="integer", nullable=false)
     */
    private $nroDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porc_IRenta", type="integer", nullable=false)
     */
    private $porcIrenta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Gen_Auto_xDevol_Fa", type="boolean", nullable=false)
     */
    private $genAutoXdevolFa;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CCosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Efectivo", type="integer", nullable=false)
     */
    private $consecEfectivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Fa", type="string", length=10, nullable=false)
     */
    private $idClasifFa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cobro_vsSaldo_Cli", type="smallint", nullable=false)
     */
    private $cobroVssaldoCli;



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
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return Pago
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
     * Set tipoCobro
     *
     * @param integer $tipoCobro
     * @return Pago
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
     * @return Pago
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
     * Set quePaga
     *
     * @param string $quePaga
     * @return Pago
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
     * Set idDocquepaga
     *
     * @param integer $idDocquepaga
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return Pago
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
     * Set moneda
     *
     * @param string $moneda
     * @return Pago
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
     * @return Pago
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
     * @param integer $recargo
     * @return Pago
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
     * @return Pago
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
     * Set importe
     *
     * @param integer $importe
     * @return Pago
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
     * @return Pago
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
     * Set importependiente
     *
     * @param integer $importependiente
     * @return Pago
     */
    public function setImportependiente($importependiente)
    {
        $this->importependiente = $importependiente;

        return $this;
    }

    /**
     * Get importependiente
     *
     * @return integer 
     */
    public function getImportependiente()
    {
        return $this->importependiente;
    }

    /**
     * Set tasaCambiomb
     *
     * @param string $tasaCambiomb
     * @return Pago
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
     * Set tasaCambiomf
     *
     * @param string $tasaCambiomf
     * @return Pago
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
     * Set confirmado
     *
     * @param boolean $confirmado
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
     * @param integer $idCompro
     * @return Pago
     */
    public function setIdCompro($idCompro)
    {
        $this->idCompro = $idCompro;

        return $this;
    }

    /**
     * Get idCompro
     *
     * @return integer 
     */
    public function getIdCompro()
    {
        return $this->idCompro;
    }

    /**
     * Set mesCompro
     *
     * @param integer $mesCompro
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
     * Set mesanul
     *
     * @param integer $mesanul
     * @return Pago
     */
    public function setMesanul($mesanul)
    {
        $this->mesanul = $mesanul;

        return $this;
    }

    /**
     * Get mesanul
     *
     * @return integer 
     */
    public function getMesanul()
    {
        return $this->mesanul;
    }

    /**
     * Set anoAnulado
     *
     * @param integer $anoAnulado
     * @return Pago
     */
    public function setAnoAnulado($anoAnulado)
    {
        $this->anoAnulado = $anoAnulado;

        return $this;
    }

    /**
     * Get anoAnulado
     *
     * @return integer 
     */
    public function getAnoAnulado()
    {
        return $this->anoAnulado;
    }

    /**
     * Set cobroVsanticipo
     *
     * @param boolean $cobroVsanticipo
     * @return Pago
     */
    public function setCobroVsanticipo($cobroVsanticipo)
    {
        $this->cobroVsanticipo = $cobroVsanticipo;

        return $this;
    }

    /**
     * Get cobroVsanticipo
     *
     * @return boolean 
     */
    public function getCobroVsanticipo()
    {
        return $this->cobroVsanticipo;
    }

    /**
     * Set anticipoPreassets
     *
     * @param boolean $anticipoPreassets
     * @return Pago
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
     * @return Pago
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
     * Set importeMonedacobrado
     *
     * @param integer $importeMonedacobrado
     * @return Pago
     */
    public function setImporteMonedacobrado($importeMonedacobrado)
    {
        $this->importeMonedacobrado = $importeMonedacobrado;

        return $this;
    }

    /**
     * Get importeMonedacobrado
     *
     * @return integer 
     */
    public function getImporteMonedacobrado()
    {
        return $this->importeMonedacobrado;
    }

    /**
     * Set dcCtacod
     *
     * @param string $dcCtacod
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
     * Set entregadoPor
     *
     * @param string $entregadoPor
     * @return Pago
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
     * Set agrupacion
     *
     * @param string $agrupacion
     * @return Pago
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
     * Set marca
     *
     * @param boolean $marca
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return Pago
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
     * @return Pago
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return Pago
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return Pago
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
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
     * Set clientRequiereDesc
     *
     * @param boolean $clientRequiereDesc
     * @return Pago
     */
    public function setClientRequiereDesc($clientRequiereDesc)
    {
        $this->clientRequiereDesc = $clientRequiereDesc;

        return $this;
    }

    /**
     * Get clientRequiereDesc
     *
     * @return boolean 
     */
    public function getClientRequiereDesc()
    {
        return $this->clientRequiereDesc;
    }

    /**
     * Set porcinteresLetra
     *
     * @param string $porcinteresLetra
     * @return Pago
     */
    public function setPorcinteresLetra($porcinteresLetra)
    {
        $this->porcinteresLetra = $porcinteresLetra;

        return $this;
    }

    /**
     * Get porcinteresLetra
     *
     * @return string 
     */
    public function getPorcinteresLetra()
    {
        return $this->porcinteresLetra;
    }

    /**
     * Set interesLetra
     *
     * @param integer $interesLetra
     * @return Pago
     */
    public function setInteresLetra($interesLetra)
    {
        $this->interesLetra = $interesLetra;

        return $this;
    }

    /**
     * Get interesLetra
     *
     * @return integer 
     */
    public function getInteresLetra()
    {
        return $this->interesLetra;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Pago
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
     * @return Pago
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
     * Set idDocPagoLetra
     *
     * @param string $idDocPagoLetra
     * @return Pago
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
     * Set txAcajaChica
     *
     * @param integer $txAcajaChica
     * @return Pago
     */
    public function setTxAcajaChica($txAcajaChica)
    {
        $this->txAcajaChica = $txAcajaChica;

        return $this;
    }

    /**
     * Get txAcajaChica
     *
     * @return integer 
     */
    public function getTxAcajaChica()
    {
        return $this->txAcajaChica;
    }

    /**
     * Set yaTxAcajaChica
     *
     * @param integer $yaTxAcajaChica
     * @return Pago
     */
    public function setYaTxAcajaChica($yaTxAcajaChica)
    {
        $this->yaTxAcajaChica = $yaTxAcajaChica;

        return $this;
    }

    /**
     * Get yaTxAcajaChica
     *
     * @return integer 
     */
    public function getYaTxAcajaChica()
    {
        return $this->yaTxAcajaChica;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
     * Set idFondoEfecto
     *
     * @param string $idFondoEfecto
     * @return Pago
     */
    public function setIdFondoEfecto($idFondoEfecto)
    {
        $this->idFondoEfecto = $idFondoEfecto;

        return $this;
    }

    /**
     * Get idFondoEfecto
     *
     * @return string 
     */
    public function getIdFondoEfecto()
    {
        return $this->idFondoEfecto;
    }

    /**
     * Set depositado
     *
     * @param boolean $depositado
     * @return Pago
     */
    public function setDepositado($depositado)
    {
        $this->depositado = $depositado;

        return $this;
    }

    /**
     * Get depositado
     *
     * @return boolean 
     */
    public function getDepositado()
    {
        return $this->depositado;
    }

    /**
     * Set efectoAcaja
     *
     * @param boolean $efectoAcaja
     * @return Pago
     */
    public function setEfectoAcaja($efectoAcaja)
    {
        $this->efectoAcaja = $efectoAcaja;

        return $this;
    }

    /**
     * Get efectoAcaja
     *
     * @return boolean 
     */
    public function getEfectoAcaja()
    {
        return $this->efectoAcaja;
    }

    /**
     * Set efectoContabEncaja
     *
     * @param boolean $efectoContabEncaja
     * @return Pago
     */
    public function setEfectoContabEncaja($efectoContabEncaja)
    {
        $this->efectoContabEncaja = $efectoContabEncaja;

        return $this;
    }

    /**
     * Get efectoContabEncaja
     *
     * @return boolean 
     */
    public function getEfectoContabEncaja()
    {
        return $this->efectoContabEncaja;
    }

    /**
     * Set comisionBankPorc
     *
     * @param integer $comisionBankPorc
     * @return Pago
     */
    public function setComisionBankPorc($comisionBankPorc)
    {
        $this->comisionBankPorc = $comisionBankPorc;

        return $this;
    }

    /**
     * Get comisionBankPorc
     *
     * @return integer 
     */
    public function getComisionBankPorc()
    {
        return $this->comisionBankPorc;
    }

    /**
     * Set comisionBank
     *
     * @param integer $comisionBank
     * @return Pago
     */
    public function setComisionBank($comisionBank)
    {
        $this->comisionBank = $comisionBank;

        return $this;
    }

    /**
     * Get comisionBank
     *
     * @return integer 
     */
    public function getComisionBank()
    {
        return $this->comisionBank;
    }

    /**
     * Set itbisRetenidoPorc
     *
     * @param integer $itbisRetenidoPorc
     * @return Pago
     */
    public function setItbisRetenidoPorc($itbisRetenidoPorc)
    {
        $this->itbisRetenidoPorc = $itbisRetenidoPorc;

        return $this;
    }

    /**
     * Get itbisRetenidoPorc
     *
     * @return integer 
     */
    public function getItbisRetenidoPorc()
    {
        return $this->itbisRetenidoPorc;
    }

    /**
     * Set itbisRetenido
     *
     * @param integer $itbisRetenido
     * @return Pago
     */
    public function setItbisRetenido($itbisRetenido)
    {
        $this->itbisRetenido = $itbisRetenido;

        return $this;
    }

    /**
     * Get itbisRetenido
     *
     * @return integer 
     */
    public function getItbisRetenido()
    {
        return $this->itbisRetenido;
    }

    /**
     * Set tasaCambioReal
     *
     * @param string $tasaCambioReal
     * @return Pago
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
     * Set usarTasaActual
     *
     * @param boolean $usarTasaActual
     * @return Pago
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
     * @return Pago
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

    /**
     * Set pos
     *
     * @param integer $pos
     * @return Pago
     */
    public function setPos($pos)
    {
        $this->pos = $pos;

        return $this;
    }

    /**
     * Get pos
     *
     * @return integer 
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     * @return Pago
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
     * Set anticipoXls
     *
     * @param integer $anticipoXls
     * @return Pago
     */
    public function setAnticipoXls($anticipoXls)
    {
        $this->anticipoXls = $anticipoXls;

        return $this;
    }

    /**
     * Get anticipoXls
     *
     * @return integer 
     */
    public function getAnticipoXls()
    {
        return $this->anticipoXls;
    }

    /**
     * Set nroDoc
     *
     * @param integer $nroDoc
     * @return Pago
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
     * Set porcIrenta
     *
     * @param integer $porcIrenta
     * @return Pago
     */
    public function setPorcIrenta($porcIrenta)
    {
        $this->porcIrenta = $porcIrenta;

        return $this;
    }

    /**
     * Get porcIrenta
     *
     * @return integer 
     */
    public function getPorcIrenta()
    {
        return $this->porcIrenta;
    }

    /**
     * Set genAutoXdevolFa
     *
     * @param boolean $genAutoXdevolFa
     * @return Pago
     */
    public function setGenAutoXdevolFa($genAutoXdevolFa)
    {
        $this->genAutoXdevolFa = $genAutoXdevolFa;

        return $this;
    }

    /**
     * Get genAutoXdevolFa
     *
     * @return boolean 
     */
    public function getGenAutoXdevolFa()
    {
        return $this->genAutoXdevolFa;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return Pago
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
     * Set consecEfectivo
     *
     * @param integer $consecEfectivo
     * @return Pago
     */
    public function setConsecEfectivo($consecEfectivo)
    {
        $this->consecEfectivo = $consecEfectivo;

        return $this;
    }

    /**
     * Get consecEfectivo
     *
     * @return integer 
     */
    public function getConsecEfectivo()
    {
        return $this->consecEfectivo;
    }

    /**
     * Set idClasifFa
     *
     * @param string $idClasifFa
     * @return Pago
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
     * Set cobroVssaldoCli
     *
     * @param integer $cobroVssaldoCli
     * @return Pago
     */
    public function setCobroVssaldoCli($cobroVssaldoCli)
    {
        $this->cobroVssaldoCli = $cobroVssaldoCli;

        return $this;
    }

    /**
     * Get cobroVssaldoCli
     *
     * @return integer 
     */
    public function getCobroVssaldoCli()
    {
        return $this->cobroVssaldoCli;
    }
}
