<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrBancaria
 *
 * @ORM\Table(name="Tr_Bancaria")
 * @ORM\Entity
 */
class TrBancaria
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
     * @ORM\Column(name="Id_Transferencia", type="string", length=15, nullable=false)
     */
    private $idTransferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Referencia", type="string", length=40, nullable=false)
     */
    private $idReferencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cancelacion", type="datetime", nullable=false)
     */
    private $fechaCancelacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas", type="string", length=200, nullable=false)
     */
    private $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="Recibido_Por", type="string", length=20, nullable=false)
     */
    private $recibidoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Entregado_Por", type="string", length=20, nullable=false)
     */
    private $entregadoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Aprobado_Por", type="string", length=20, nullable=false)
     */
    private $aprobadoPor;

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
     * @ORM\Column(name="Id_Agrupacion_Cobro", type="string", length=5, nullable=false)
     */
    private $idAgrupacionCobro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Cobro", type="integer", nullable=false)
     */
    private $contadorCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Doc_Cobro", type="string", length=15, nullable=false)
     */
    private $idDocCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=20, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FPago_Cobro", type="string", length=3, nullable=false)
     */
    private $idFpagoCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto_Cobro", type="string", length=10, nullable=false)
     */
    private $idConceptoCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="CBank_Cobro", type="string", length=30, nullable=false)
     */
    private $cbankCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo_Cobro", type="string", length=10, nullable=false)
     */
    private $idFondoCobro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tx_ACaja_Chica", type="smallint", nullable=false)
     */
    private $txAcajaChica;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion_Pago", type="string", length=5, nullable=false)
     */
    private $idAgrupacionPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Pago", type="integer", nullable=false)
     */
    private $contadorPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Doc_Pago", type="string", length=15, nullable=false)
     */
    private $idDocPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=20, nullable=false)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FPago_Pago", type="string", length=3, nullable=false)
     */
    private $idFpagoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto_Pago", type="string", length=10, nullable=false)
     */
    private $idConceptoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="CBank_Pago", type="string", length=30, nullable=false)
     */
    private $cbankPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo_Pago", type="string", length=10, nullable=false)
     */
    private $idFondoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var string
     *
     * @ORM\Column(name="Res", type="string", length=50, nullable=false)
     */
    private $res;

    /**
     * @var boolean
     *
     * @ORM\Column(name="XTrans", type="boolean", nullable=false)
     */
    private $xtrans;

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
     * @var boolean
     *
     * @ORM\Column(name="Recibido_Banco", type="boolean", nullable=false)
     */
    private $recibidoBanco;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_ACCESS", type="integer", nullable=false)
     */
    private $contadorAccess;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PreAssets", type="boolean", nullable=false)
     */
    private $preassets;



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
     * Set idTransferencia
     *
     * @param string $idTransferencia
     * @return TrBancaria
     */
    public function setIdTransferencia($idTransferencia)
    {
        $this->idTransferencia = $idTransferencia;

        return $this;
    }

    /**
     * Get idTransferencia
     *
     * @return string 
     */
    public function getIdTransferencia()
    {
        return $this->idTransferencia;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return TrBancaria
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
     * Set estado
     *
     * @param integer $estado
     * @return TrBancaria
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
     * Set idReferencia
     *
     * @param string $idReferencia
     * @return TrBancaria
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return TrBancaria
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
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return TrBancaria
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
     * Set fechaCancelacion
     *
     * @param \DateTime $fechaCancelacion
     * @return TrBancaria
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
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return TrBancaria
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
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return TrBancaria
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
     * Set importe
     *
     * @param integer $importe
     * @return TrBancaria
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
     * Set notas
     *
     * @param string $notas
     * @return TrBancaria
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;

        return $this;
    }

    /**
     * Get notas
     *
     * @return string 
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Set recibidoPor
     *
     * @param string $recibidoPor
     * @return TrBancaria
     */
    public function setRecibidoPor($recibidoPor)
    {
        $this->recibidoPor = $recibidoPor;

        return $this;
    }

    /**
     * Get recibidoPor
     *
     * @return string 
     */
    public function getRecibidoPor()
    {
        return $this->recibidoPor;
    }

    /**
     * Set entregadoPor
     *
     * @param string $entregadoPor
     * @return TrBancaria
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
     * Set aprobadoPor
     *
     * @param string $aprobadoPor
     * @return TrBancaria
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
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return TrBancaria
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
     * @return TrBancaria
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
     * Set idAgrupacionCobro
     *
     * @param string $idAgrupacionCobro
     * @return TrBancaria
     */
    public function setIdAgrupacionCobro($idAgrupacionCobro)
    {
        $this->idAgrupacionCobro = $idAgrupacionCobro;

        return $this;
    }

    /**
     * Get idAgrupacionCobro
     *
     * @return string 
     */
    public function getIdAgrupacionCobro()
    {
        return $this->idAgrupacionCobro;
    }

    /**
     * Set contadorCobro
     *
     * @param integer $contadorCobro
     * @return TrBancaria
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
     * Set idDocCobro
     *
     * @param string $idDocCobro
     * @return TrBancaria
     */
    public function setIdDocCobro($idDocCobro)
    {
        $this->idDocCobro = $idDocCobro;

        return $this;
    }

    /**
     * Get idDocCobro
     *
     * @return string 
     */
    public function getIdDocCobro()
    {
        return $this->idDocCobro;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return TrBancaria
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
     * Set idFpagoCobro
     *
     * @param string $idFpagoCobro
     * @return TrBancaria
     */
    public function setIdFpagoCobro($idFpagoCobro)
    {
        $this->idFpagoCobro = $idFpagoCobro;

        return $this;
    }

    /**
     * Get idFpagoCobro
     *
     * @return string 
     */
    public function getIdFpagoCobro()
    {
        return $this->idFpagoCobro;
    }

    /**
     * Set idConceptoCobro
     *
     * @param string $idConceptoCobro
     * @return TrBancaria
     */
    public function setIdConceptoCobro($idConceptoCobro)
    {
        $this->idConceptoCobro = $idConceptoCobro;

        return $this;
    }

    /**
     * Get idConceptoCobro
     *
     * @return string 
     */
    public function getIdConceptoCobro()
    {
        return $this->idConceptoCobro;
    }

    /**
     * Set cbankCobro
     *
     * @param string $cbankCobro
     * @return TrBancaria
     */
    public function setCbankCobro($cbankCobro)
    {
        $this->cbankCobro = $cbankCobro;

        return $this;
    }

    /**
     * Get cbankCobro
     *
     * @return string 
     */
    public function getCbankCobro()
    {
        return $this->cbankCobro;
    }

    /**
     * Set idFondoCobro
     *
     * @param string $idFondoCobro
     * @return TrBancaria
     */
    public function setIdFondoCobro($idFondoCobro)
    {
        $this->idFondoCobro = $idFondoCobro;

        return $this;
    }

    /**
     * Get idFondoCobro
     *
     * @return string 
     */
    public function getIdFondoCobro()
    {
        return $this->idFondoCobro;
    }

    /**
     * Set txAcajaChica
     *
     * @param integer $txAcajaChica
     * @return TrBancaria
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
     * Set idAgrupacionPago
     *
     * @param string $idAgrupacionPago
     * @return TrBancaria
     */
    public function setIdAgrupacionPago($idAgrupacionPago)
    {
        $this->idAgrupacionPago = $idAgrupacionPago;

        return $this;
    }

    /**
     * Get idAgrupacionPago
     *
     * @return string 
     */
    public function getIdAgrupacionPago()
    {
        return $this->idAgrupacionPago;
    }

    /**
     * Set contadorPago
     *
     * @param integer $contadorPago
     * @return TrBancaria
     */
    public function setContadorPago($contadorPago)
    {
        $this->contadorPago = $contadorPago;

        return $this;
    }

    /**
     * Get contadorPago
     *
     * @return integer 
     */
    public function getContadorPago()
    {
        return $this->contadorPago;
    }

    /**
     * Set idDocPago
     *
     * @param string $idDocPago
     * @return TrBancaria
     */
    public function setIdDocPago($idDocPago)
    {
        $this->idDocPago = $idDocPago;

        return $this;
    }

    /**
     * Get idDocPago
     *
     * @return string 
     */
    public function getIdDocPago()
    {
        return $this->idDocPago;
    }

    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return TrBancaria
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
     * Set idFpagoPago
     *
     * @param string $idFpagoPago
     * @return TrBancaria
     */
    public function setIdFpagoPago($idFpagoPago)
    {
        $this->idFpagoPago = $idFpagoPago;

        return $this;
    }

    /**
     * Get idFpagoPago
     *
     * @return string 
     */
    public function getIdFpagoPago()
    {
        return $this->idFpagoPago;
    }

    /**
     * Set idConceptoPago
     *
     * @param string $idConceptoPago
     * @return TrBancaria
     */
    public function setIdConceptoPago($idConceptoPago)
    {
        $this->idConceptoPago = $idConceptoPago;

        return $this;
    }

    /**
     * Get idConceptoPago
     *
     * @return string 
     */
    public function getIdConceptoPago()
    {
        return $this->idConceptoPago;
    }

    /**
     * Set cbankPago
     *
     * @param string $cbankPago
     * @return TrBancaria
     */
    public function setCbankPago($cbankPago)
    {
        $this->cbankPago = $cbankPago;

        return $this;
    }

    /**
     * Get cbankPago
     *
     * @return string 
     */
    public function getCbankPago()
    {
        return $this->cbankPago;
    }

    /**
     * Set idFondoPago
     *
     * @param string $idFondoPago
     * @return TrBancaria
     */
    public function setIdFondoPago($idFondoPago)
    {
        $this->idFondoPago = $idFondoPago;

        return $this;
    }

    /**
     * Get idFondoPago
     *
     * @return string 
     */
    public function getIdFondoPago()
    {
        return $this->idFondoPago;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return TrBancaria
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
     * Set res
     *
     * @param string $res
     * @return TrBancaria
     */
    public function setRes($res)
    {
        $this->res = $res;

        return $this;
    }

    /**
     * Get res
     *
     * @return string 
     */
    public function getRes()
    {
        return $this->res;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return TrBancaria
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
     * Set idUser
     *
     * @param string $idUser
     * @return TrBancaria
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
     * @return TrBancaria
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
     * @return TrBancaria
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
     * Set recibidoBanco
     *
     * @param boolean $recibidoBanco
     * @return TrBancaria
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
     * Set contadorAccess
     *
     * @param integer $contadorAccess
     * @return TrBancaria
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
     * Set preassets
     *
     * @param boolean $preassets
     * @return TrBancaria
     */
    public function setPreassets($preassets)
    {
        $this->preassets = $preassets;

        return $this;
    }

    /**
     * Get preassets
     *
     * @return boolean 
     */
    public function getPreassets()
    {
        return $this->preassets;
    }
}
