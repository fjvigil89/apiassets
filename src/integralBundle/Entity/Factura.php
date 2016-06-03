<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="Factura", uniqueConstraints={@ORM\UniqueConstraint(name="Cont_Factura", columns={"Contador"})}, indexes={@ORM\Index(name="Fech_Factura", columns={"Fecha_Confirmacion", "Id_Almacen"})})
 * @ORM\Entity
 */
class Factura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $confirmada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Factura", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Factura", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoFactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Factura", type="datetime", nullable=false)
     */
    private $fechaFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=false)
     */
    private $descCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Atte", type="string", length=50, nullable=false)
     */
    private $atte;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=5, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Empleado", type="string", length=50, nullable=false)
     */
    private $descEmpleado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Pedido", type="integer", nullable=false)
     */
    private $idPedido;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Oferta", type="smallint", nullable=false)
     */
    private $anoOferta;

    /**
     * @var string
     *
     * @ORM\Column(name="Enviado_A", type="string", length=50, nullable=false)
     */
    private $enviadoA;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_Cambio", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $tasaCambio;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMB", type="integer", nullable=false)
     */
    private $importetotalmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMC", type="integer", nullable=false)
     */
    private $importetotalmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecargoMB", type="integer", nullable=false)
     */
    private $recargomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecargoMC", type="integer", nullable=false)
     */
    private $recargomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMB", type="integer", nullable=false)
     */
    private $descuentomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMC", type="integer", nullable=false)
     */
    private $descuentomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ArancelMB", type="integer", nullable=false)
     */
    private $arancelmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ArancelMC", type="integer", nullable=false)
     */
    private $arancelmc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="RecargoMB_Porc", type="boolean", nullable=false)
     */
    private $recargombPorc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="RecargoMC_Porc", type="boolean", nullable=false)
     */
    private $recargomcPorc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DescuentoMB_Porc", type="boolean", nullable=false)
     */
    private $descuentombPorc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DescuentoMC_Porc", type="boolean", nullable=false)
     */
    private $descuentomcPorc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ArancelMB_Porc", type="boolean", nullable=false)
     */
    private $arancelmbPorc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ArancelMC_Porc", type="boolean", nullable=false)
     */
    private $arancelmcPorc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AplicaArancel", type="boolean", nullable=false)
     */
    private $aplicaarancel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AplicaPlazoCobro", type="boolean", nullable=false)
     */
    private $aplicaplazocobro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnPorciento", type="boolean", nullable=false)
     */
    private $enporciento;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=500, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Bandera", type="string", length=1, nullable=false)
     */
    private $bandera;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Despachado", type="boolean", nullable=false)
     */
    private $despachado;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=20, nullable=false)
     */
    private $referencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Credito", type="smallint", nullable=false)
     */
    private $credito;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_DevueltoMB", type="integer", nullable=false)
     */
    private $importeDevueltomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_DevueltoMC", type="integer", nullable=false)
     */
    private $importeDevueltomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Impuesto_Devuelto", type="integer", nullable=false)
     */
    private $impuestoDevuelto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Forma_Pago", type="smallint", nullable=false)
     */
    private $formaPago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Periodo_Anterior", type="boolean", nullable=false)
     */
    private $periodoAnterior;

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
     * @var string
     *
     * @ORM\Column(name="Conduce", type="string", length=15, nullable=false)
     */
    private $conduce;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hora_Sal", type="datetime", nullable=false)
     */
    private $horaSal;

    /**
     * @var string
     *
     * @ORM\Column(name="ChoferCI", type="string", length=11, nullable=false)
     */
    private $choferci;

    /**
     * @var string
     *
     * @ORM\Column(name="Despachado_Por", type="string", length=60, nullable=false)
     */
    private $despachadoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Transportadopor", type="string", length=60, nullable=false)
     */
    private $transportadopor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Factura_Activos", type="boolean", nullable=false)
     */
    private $facturaActivos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Financiamiento", type="boolean", nullable=false)
     */
    private $financiamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Agrupacion", type="string", length=5, nullable=false)
     */
    private $agrupacion;

    /**
     * @var string
     *
     * @ORM\Column(name="clasif_credito_factura", type="string", length=10, nullable=false)
     */
    private $clasifCreditoFactura;

    /**
     * @var boolean
     *
     * @ORM\Column(name="O_Trabajo", type="boolean", nullable=false)
     */
    private $oTrabajo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizado", type="boolean", nullable=false)
     */
    private $contabilizado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca_Conteo", type="boolean", nullable=false)
     */
    private $marcaConteo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca_Alertas", type="boolean", nullable=false)
     */
    private $marcaAlertas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tributable", type="boolean", nullable=false)
     */
    private $tributable;

    /**
     * @var integer
     *
     * @ORM\Column(name="Impuesto_Total", type="integer", nullable=false)
     */
    private $impuestoTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Comision_Total", type="integer", nullable=false)
     */
    private $comisionTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Comision_Devuelta", type="integer", nullable=false)
     */
    private $comisionDevuelta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cant_Art", type="integer", nullable=false)
     */
    private $cantArt;

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
     * @ORM\Column(name="Contrato", type="string", length=20, nullable=false)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion_Pto", type="string", length=60, nullable=false)
     */
    private $direccionPto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fpago", type="string", length=5, nullable=false)
     */
    private $idFpago;

    /**
     * @var string
     *
     * @ORM\Column(name="Pais", type="string", length=10, nullable=false)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="BL", type="string", length=25, nullable=false)
     */
    private $bl;

    /**
     * @var string
     *
     * @ORM\Column(name="Naviera", type="string", length=30, nullable=false)
     */
    private $naviera;

    /**
     * @var string
     *
     * @ORM\Column(name="Puerto", type="string", length=25, nullable=false)
     */
    private $puerto;

    /**
     * @var string
     *
     * @ORM\Column(name="Buque", type="string", length=25, nullable=false)
     */
    private $buque;

    /**
     * @var string
     *
     * @ORM\Column(name="Mtto", type="string", length=10, nullable=false)
     */
    private $mtto;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida", type="string", length=10, nullable=false)
     */
    private $partida;

    /**
     * @var string
     *
     * @ORM\Column(name="Bultos", type="string", length=10, nullable=false)
     */
    private $bultos;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenedor", type="string", length=60, nullable=false)
     */
    private $contenedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Declarante", type="string", length=60, nullable=false)
     */
    private $declarante;

    /**
     * @var string
     *
     * @ORM\Column(name="Declaracion", type="string", length=15, nullable=false)
     */
    private $declaracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaOt", type="integer", nullable=false)
     */
    private $contaot;

    /**
     * @var string
     *
     * @ORM\Column(name="Porc_Retencion", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcRetencion;

    /**
     * @var string
     *
     * @ORM\Column(name="Porc_RetencionMC", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcRetencionmc;

    /**
     * @var string
     *
     * @ORM\Column(name="NoServicio", type="string", length=20, nullable=false)
     */
    private $noservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var integer
     *
     * @ORM\Column(name="No_Prelacion", type="integer", nullable=false)
     */
    private $noPrelacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Factura_Nominas", type="smallint", nullable=false)
     */
    private $facturaNominas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Descto_Total", type="integer", nullable=false)
     */
    private $desctoTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporTarjeta", type="integer", nullable=false)
     */
    private $importarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporEfectivo", type="integer", nullable=false)
     */
    private $imporefectivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporCheque", type="integer", nullable=false)
     */
    private $imporcheque;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporCambio", type="integer", nullable=false)
     */
    private $imporcambio;

    /**
     * @var integer
     *
     * @ORM\Column(name="contador_impresion", type="smallint", nullable=false)
     */
    private $contadorImpresion;

    /**
     * @var string
     *
     * @ORM\Column(name="NCF", type="string", length=20, nullable=false)
     */
    private $ncf;

    /**
     * @var string
     *
     * @ORM\Column(name="NoRemision", type="string", length=10, nullable=false)
     */
    private $noremision;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ultima_Remi", type="boolean", nullable=false)
     */
    private $ultimaRemi;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devuelve_oCancela", type="smallint", nullable=false)
     */
    private $devuelveOcancela;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrada", type="boolean", nullable=false)
     */
    private $cerrada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="O_Entrega", type="boolean", nullable=false)
     */
    private $oEntrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Remision", type="datetime", nullable=false)
     */
    private $fechaRemision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Declaracion", type="datetime", nullable=false)
     */
    private $fechaDeclaracion;

    /**
     * @var string
     *
     * @ORM\Column(name="NoSellos", type="string", length=60, nullable=false)
     */
    private $nosellos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Guia_Bl", type="boolean", nullable=false)
     */
    private $guiaBl;

    /**
     * @var string
     *
     * @ORM\Column(name="Lc_Chofer", type="string", length=11, nullable=false)
     */
    private $lcChofer;

    /**
     * @var string
     *
     * @ORM\Column(name="Chapa", type="string", length=7, nullable=false)
     */
    private $chapa;

    /**
     * @var string
     *
     * @ORM\Column(name="Adespacho", type="string", length=4, nullable=false)
     */
    private $adespacho;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoMov_Aduana", type="smallint", nullable=false)
     */
    private $tipomovAduana;

    /**
     * @var string
     *
     * @ORM\Column(name="AEntradaSalida", type="string", length=4, nullable=false)
     */
    private $aentradasalida;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FactAlcosto", type="boolean", nullable=false)
     */
    private $factalcosto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Nolimite", type="boolean", nullable=false)
     */
    private $nolimite;

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoPorc", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $saldoporc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_AFavor", type="integer", nullable=false)
     */
    private $importeAfavor;

    /**
     * @var string
     *
     * @ORM\Column(name="Porc_Financia", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcFinancia;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return Factura
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
     * Set confirmada
     *
     * @param integer $confirmada
     * @return Factura
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return integer 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * Set idFactura
     *
     * @param integer $idFactura
     * @return Factura
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return integer 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Factura
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
     * Set anoFactura
     *
     * @param integer $anoFactura
     * @return Factura
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
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return Factura
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Get fechaConfirmacion
     *
     * @return \DateTime 
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Set fechaFactura
     *
     * @param \DateTime $fechaFactura
     * @return Factura
     */
    public function setFechaFactura($fechaFactura)
    {
        $this->fechaFactura = $fechaFactura;

        return $this;
    }

    /**
     * Get fechaFactura
     *
     * @return \DateTime 
     */
    public function getFechaFactura()
    {
        return $this->fechaFactura;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return Factura
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
     * Set descCliente
     *
     * @param string $descCliente
     * @return Factura
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
     * Set atte
     *
     * @param string $atte
     * @return Factura
     */
    public function setAtte($atte)
    {
        $this->atte = $atte;

        return $this;
    }

    /**
     * Get atte
     *
     * @return string 
     */
    public function getAtte()
    {
        return $this->atte;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return Factura
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set descEmpleado
     *
     * @param string $descEmpleado
     * @return Factura
     */
    public function setDescEmpleado($descEmpleado)
    {
        $this->descEmpleado = $descEmpleado;

        return $this;
    }

    /**
     * Get descEmpleado
     *
     * @return string 
     */
    public function getDescEmpleado()
    {
        return $this->descEmpleado;
    }

    /**
     * Set idPedido
     *
     * @param integer $idPedido
     * @return Factura
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get idPedido
     *
     * @return integer 
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set anoOferta
     *
     * @param integer $anoOferta
     * @return Factura
     */
    public function setAnoOferta($anoOferta)
    {
        $this->anoOferta = $anoOferta;

        return $this;
    }

    /**
     * Get anoOferta
     *
     * @return integer 
     */
    public function getAnoOferta()
    {
        return $this->anoOferta;
    }

    /**
     * Set enviadoA
     *
     * @param string $enviadoA
     * @return Factura
     */
    public function setEnviadoA($enviadoA)
    {
        $this->enviadoA = $enviadoA;

        return $this;
    }

    /**
     * Get enviadoA
     *
     * @return string 
     */
    public function getEnviadoA()
    {
        return $this->enviadoA;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Factura
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
     * Set tasaCambio
     *
     * @param string $tasaCambio
     * @return Factura
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
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return Factura
     */
    public function setImportetotalmb($importetotalmb)
    {
        $this->importetotalmb = $importetotalmb;

        return $this;
    }

    /**
     * Get importetotalmb
     *
     * @return integer 
     */
    public function getImportetotalmb()
    {
        return $this->importetotalmb;
    }

    /**
     * Set importetotalmc
     *
     * @param integer $importetotalmc
     * @return Factura
     */
    public function setImportetotalmc($importetotalmc)
    {
        $this->importetotalmc = $importetotalmc;

        return $this;
    }

    /**
     * Get importetotalmc
     *
     * @return integer 
     */
    public function getImportetotalmc()
    {
        return $this->importetotalmc;
    }

    /**
     * Set recargomb
     *
     * @param integer $recargomb
     * @return Factura
     */
    public function setRecargomb($recargomb)
    {
        $this->recargomb = $recargomb;

        return $this;
    }

    /**
     * Get recargomb
     *
     * @return integer 
     */
    public function getRecargomb()
    {
        return $this->recargomb;
    }

    /**
     * Set recargomc
     *
     * @param integer $recargomc
     * @return Factura
     */
    public function setRecargomc($recargomc)
    {
        $this->recargomc = $recargomc;

        return $this;
    }

    /**
     * Get recargomc
     *
     * @return integer 
     */
    public function getRecargomc()
    {
        return $this->recargomc;
    }

    /**
     * Set descuentomb
     *
     * @param integer $descuentomb
     * @return Factura
     */
    public function setDescuentomb($descuentomb)
    {
        $this->descuentomb = $descuentomb;

        return $this;
    }

    /**
     * Get descuentomb
     *
     * @return integer 
     */
    public function getDescuentomb()
    {
        return $this->descuentomb;
    }

    /**
     * Set descuentomc
     *
     * @param integer $descuentomc
     * @return Factura
     */
    public function setDescuentomc($descuentomc)
    {
        $this->descuentomc = $descuentomc;

        return $this;
    }

    /**
     * Get descuentomc
     *
     * @return integer 
     */
    public function getDescuentomc()
    {
        return $this->descuentomc;
    }

    /**
     * Set arancelmb
     *
     * @param integer $arancelmb
     * @return Factura
     */
    public function setArancelmb($arancelmb)
    {
        $this->arancelmb = $arancelmb;

        return $this;
    }

    /**
     * Get arancelmb
     *
     * @return integer 
     */
    public function getArancelmb()
    {
        return $this->arancelmb;
    }

    /**
     * Set arancelmc
     *
     * @param integer $arancelmc
     * @return Factura
     */
    public function setArancelmc($arancelmc)
    {
        $this->arancelmc = $arancelmc;

        return $this;
    }

    /**
     * Get arancelmc
     *
     * @return integer 
     */
    public function getArancelmc()
    {
        return $this->arancelmc;
    }

    /**
     * Set recargombPorc
     *
     * @param boolean $recargombPorc
     * @return Factura
     */
    public function setRecargombPorc($recargombPorc)
    {
        $this->recargombPorc = $recargombPorc;

        return $this;
    }

    /**
     * Get recargombPorc
     *
     * @return boolean 
     */
    public function getRecargombPorc()
    {
        return $this->recargombPorc;
    }

    /**
     * Set recargomcPorc
     *
     * @param boolean $recargomcPorc
     * @return Factura
     */
    public function setRecargomcPorc($recargomcPorc)
    {
        $this->recargomcPorc = $recargomcPorc;

        return $this;
    }

    /**
     * Get recargomcPorc
     *
     * @return boolean 
     */
    public function getRecargomcPorc()
    {
        return $this->recargomcPorc;
    }

    /**
     * Set descuentombPorc
     *
     * @param boolean $descuentombPorc
     * @return Factura
     */
    public function setDescuentombPorc($descuentombPorc)
    {
        $this->descuentombPorc = $descuentombPorc;

        return $this;
    }

    /**
     * Get descuentombPorc
     *
     * @return boolean 
     */
    public function getDescuentombPorc()
    {
        return $this->descuentombPorc;
    }

    /**
     * Set descuentomcPorc
     *
     * @param boolean $descuentomcPorc
     * @return Factura
     */
    public function setDescuentomcPorc($descuentomcPorc)
    {
        $this->descuentomcPorc = $descuentomcPorc;

        return $this;
    }

    /**
     * Get descuentomcPorc
     *
     * @return boolean 
     */
    public function getDescuentomcPorc()
    {
        return $this->descuentomcPorc;
    }

    /**
     * Set arancelmbPorc
     *
     * @param boolean $arancelmbPorc
     * @return Factura
     */
    public function setArancelmbPorc($arancelmbPorc)
    {
        $this->arancelmbPorc = $arancelmbPorc;

        return $this;
    }

    /**
     * Get arancelmbPorc
     *
     * @return boolean 
     */
    public function getArancelmbPorc()
    {
        return $this->arancelmbPorc;
    }

    /**
     * Set arancelmcPorc
     *
     * @param boolean $arancelmcPorc
     * @return Factura
     */
    public function setArancelmcPorc($arancelmcPorc)
    {
        $this->arancelmcPorc = $arancelmcPorc;

        return $this;
    }

    /**
     * Get arancelmcPorc
     *
     * @return boolean 
     */
    public function getArancelmcPorc()
    {
        return $this->arancelmcPorc;
    }

    /**
     * Set aplicaarancel
     *
     * @param boolean $aplicaarancel
     * @return Factura
     */
    public function setAplicaarancel($aplicaarancel)
    {
        $this->aplicaarancel = $aplicaarancel;

        return $this;
    }

    /**
     * Get aplicaarancel
     *
     * @return boolean 
     */
    public function getAplicaarancel()
    {
        return $this->aplicaarancel;
    }

    /**
     * Set aplicaplazocobro
     *
     * @param boolean $aplicaplazocobro
     * @return Factura
     */
    public function setAplicaplazocobro($aplicaplazocobro)
    {
        $this->aplicaplazocobro = $aplicaplazocobro;

        return $this;
    }

    /**
     * Get aplicaplazocobro
     *
     * @return boolean 
     */
    public function getAplicaplazocobro()
    {
        return $this->aplicaplazocobro;
    }

    /**
     * Set enporciento
     *
     * @param boolean $enporciento
     * @return Factura
     */
    public function setEnporciento($enporciento)
    {
        $this->enporciento = $enporciento;

        return $this;
    }

    /**
     * Get enporciento
     *
     * @return boolean 
     */
    public function getEnporciento()
    {
        return $this->enporciento;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return Factura
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
     * Set bandera
     *
     * @param string $bandera
     * @return Factura
     */
    public function setBandera($bandera)
    {
        $this->bandera = $bandera;

        return $this;
    }

    /**
     * Get bandera
     *
     * @return string 
     */
    public function getBandera()
    {
        return $this->bandera;
    }

    /**
     * Set despachado
     *
     * @param boolean $despachado
     * @return Factura
     */
    public function setDespachado($despachado)
    {
        $this->despachado = $despachado;

        return $this;
    }

    /**
     * Get despachado
     *
     * @return boolean 
     */
    public function getDespachado()
    {
        return $this->despachado;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return Factura
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
     * Set credito
     *
     * @param integer $credito
     * @return Factura
     */
    public function setCredito($credito)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return integer 
     */
    public function getCredito()
    {
        return $this->credito;
    }

    /**
     * Set importeDevueltomb
     *
     * @param integer $importeDevueltomb
     * @return Factura
     */
    public function setImporteDevueltomb($importeDevueltomb)
    {
        $this->importeDevueltomb = $importeDevueltomb;

        return $this;
    }

    /**
     * Get importeDevueltomb
     *
     * @return integer 
     */
    public function getImporteDevueltomb()
    {
        return $this->importeDevueltomb;
    }

    /**
     * Set importeDevueltomc
     *
     * @param integer $importeDevueltomc
     * @return Factura
     */
    public function setImporteDevueltomc($importeDevueltomc)
    {
        $this->importeDevueltomc = $importeDevueltomc;

        return $this;
    }

    /**
     * Get importeDevueltomc
     *
     * @return integer 
     */
    public function getImporteDevueltomc()
    {
        return $this->importeDevueltomc;
    }

    /**
     * Set impuestoDevuelto
     *
     * @param integer $impuestoDevuelto
     * @return Factura
     */
    public function setImpuestoDevuelto($impuestoDevuelto)
    {
        $this->impuestoDevuelto = $impuestoDevuelto;

        return $this;
    }

    /**
     * Get impuestoDevuelto
     *
     * @return integer 
     */
    public function getImpuestoDevuelto()
    {
        return $this->impuestoDevuelto;
    }

    /**
     * Set formaPago
     *
     * @param integer $formaPago
     * @return Factura
     */
    public function setFormaPago($formaPago)
    {
        $this->formaPago = $formaPago;

        return $this;
    }

    /**
     * Get formaPago
     *
     * @return integer 
     */
    public function getFormaPago()
    {
        return $this->formaPago;
    }

    /**
     * Set periodoAnterior
     *
     * @param boolean $periodoAnterior
     * @return Factura
     */
    public function setPeriodoAnterior($periodoAnterior)
    {
        $this->periodoAnterior = $periodoAnterior;

        return $this;
    }

    /**
     * Get periodoAnterior
     *
     * @return boolean 
     */
    public function getPeriodoAnterior()
    {
        return $this->periodoAnterior;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return Factura
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
     * @return Factura
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
     * @return Factura
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
     * Set conduce
     *
     * @param string $conduce
     * @return Factura
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
     * Set horaSal
     *
     * @param \DateTime $horaSal
     * @return Factura
     */
    public function setHoraSal($horaSal)
    {
        $this->horaSal = $horaSal;

        return $this;
    }

    /**
     * Get horaSal
     *
     * @return \DateTime 
     */
    public function getHoraSal()
    {
        return $this->horaSal;
    }

    /**
     * Set choferci
     *
     * @param string $choferci
     * @return Factura
     */
    public function setChoferci($choferci)
    {
        $this->choferci = $choferci;

        return $this;
    }

    /**
     * Get choferci
     *
     * @return string 
     */
    public function getChoferci()
    {
        return $this->choferci;
    }

    /**
     * Set despachadoPor
     *
     * @param string $despachadoPor
     * @return Factura
     */
    public function setDespachadoPor($despachadoPor)
    {
        $this->despachadoPor = $despachadoPor;

        return $this;
    }

    /**
     * Get despachadoPor
     *
     * @return string 
     */
    public function getDespachadoPor()
    {
        return $this->despachadoPor;
    }

    /**
     * Set transportadopor
     *
     * @param string $transportadopor
     * @return Factura
     */
    public function setTransportadopor($transportadopor)
    {
        $this->transportadopor = $transportadopor;

        return $this;
    }

    /**
     * Get transportadopor
     *
     * @return string 
     */
    public function getTransportadopor()
    {
        return $this->transportadopor;
    }

    /**
     * Set facturaActivos
     *
     * @param boolean $facturaActivos
     * @return Factura
     */
    public function setFacturaActivos($facturaActivos)
    {
        $this->facturaActivos = $facturaActivos;

        return $this;
    }

    /**
     * Get facturaActivos
     *
     * @return boolean 
     */
    public function getFacturaActivos()
    {
        return $this->facturaActivos;
    }

    /**
     * Set financiamiento
     *
     * @param boolean $financiamiento
     * @return Factura
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
     * Set agrupacion
     *
     * @param string $agrupacion
     * @return Factura
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
     * Set clasifCreditoFactura
     *
     * @param string $clasifCreditoFactura
     * @return Factura
     */
    public function setClasifCreditoFactura($clasifCreditoFactura)
    {
        $this->clasifCreditoFactura = $clasifCreditoFactura;

        return $this;
    }

    /**
     * Get clasifCreditoFactura
     *
     * @return string 
     */
    public function getClasifCreditoFactura()
    {
        return $this->clasifCreditoFactura;
    }

    /**
     * Set oTrabajo
     *
     * @param boolean $oTrabajo
     * @return Factura
     */
    public function setOTrabajo($oTrabajo)
    {
        $this->oTrabajo = $oTrabajo;

        return $this;
    }

    /**
     * Get oTrabajo
     *
     * @return boolean 
     */
    public function getOTrabajo()
    {
        return $this->oTrabajo;
    }

    /**
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return Factura
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
     * Set marcaConteo
     *
     * @param boolean $marcaConteo
     * @return Factura
     */
    public function setMarcaConteo($marcaConteo)
    {
        $this->marcaConteo = $marcaConteo;

        return $this;
    }

    /**
     * Get marcaConteo
     *
     * @return boolean 
     */
    public function getMarcaConteo()
    {
        return $this->marcaConteo;
    }

    /**
     * Set marcaAlertas
     *
     * @param boolean $marcaAlertas
     * @return Factura
     */
    public function setMarcaAlertas($marcaAlertas)
    {
        $this->marcaAlertas = $marcaAlertas;

        return $this;
    }

    /**
     * Get marcaAlertas
     *
     * @return boolean 
     */
    public function getMarcaAlertas()
    {
        return $this->marcaAlertas;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return Factura
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
     * Set tributable
     *
     * @param boolean $tributable
     * @return Factura
     */
    public function setTributable($tributable)
    {
        $this->tributable = $tributable;

        return $this;
    }

    /**
     * Get tributable
     *
     * @return boolean 
     */
    public function getTributable()
    {
        return $this->tributable;
    }

    /**
     * Set impuestoTotal
     *
     * @param integer $impuestoTotal
     * @return Factura
     */
    public function setImpuestoTotal($impuestoTotal)
    {
        $this->impuestoTotal = $impuestoTotal;

        return $this;
    }

    /**
     * Get impuestoTotal
     *
     * @return integer 
     */
    public function getImpuestoTotal()
    {
        return $this->impuestoTotal;
    }

    /**
     * Set comisionTotal
     *
     * @param integer $comisionTotal
     * @return Factura
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
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return Factura
     */
    public function setDescAlmacen($descAlmacen)
    {
        $this->descAlmacen = $descAlmacen;

        return $this;
    }

    /**
     * Get descAlmacen
     *
     * @return string 
     */
    public function getDescAlmacen()
    {
        return $this->descAlmacen;
    }

    /**
     * Set comisionDevuelta
     *
     * @param integer $comisionDevuelta
     * @return Factura
     */
    public function setComisionDevuelta($comisionDevuelta)
    {
        $this->comisionDevuelta = $comisionDevuelta;

        return $this;
    }

    /**
     * Get comisionDevuelta
     *
     * @return integer 
     */
    public function getComisionDevuelta()
    {
        return $this->comisionDevuelta;
    }

    /**
     * Set cantArt
     *
     * @param integer $cantArt
     * @return Factura
     */
    public function setCantArt($cantArt)
    {
        $this->cantArt = $cantArt;

        return $this;
    }

    /**
     * Get cantArt
     *
     * @return integer 
     */
    public function getCantArt()
    {
        return $this->cantArt;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Factura
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
     * @return Factura
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
     * Set contrato
     *
     * @param string $contrato
     * @return Factura
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
     * Set direccionPto
     *
     * @param string $direccionPto
     * @return Factura
     */
    public function setDireccionPto($direccionPto)
    {
        $this->direccionPto = $direccionPto;

        return $this;
    }

    /**
     * Get direccionPto
     *
     * @return string 
     */
    public function getDireccionPto()
    {
        return $this->direccionPto;
    }

    /**
     * Set idFpago
     *
     * @param string $idFpago
     * @return Factura
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
     * Set pais
     *
     * @param string $pais
     * @return Factura
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set bl
     *
     * @param string $bl
     * @return Factura
     */
    public function setBl($bl)
    {
        $this->bl = $bl;

        return $this;
    }

    /**
     * Get bl
     *
     * @return string 
     */
    public function getBl()
    {
        return $this->bl;
    }

    /**
     * Set naviera
     *
     * @param string $naviera
     * @return Factura
     */
    public function setNaviera($naviera)
    {
        $this->naviera = $naviera;

        return $this;
    }

    /**
     * Get naviera
     *
     * @return string 
     */
    public function getNaviera()
    {
        return $this->naviera;
    }

    /**
     * Set puerto
     *
     * @param string $puerto
     * @return Factura
     */
    public function setPuerto($puerto)
    {
        $this->puerto = $puerto;

        return $this;
    }

    /**
     * Get puerto
     *
     * @return string 
     */
    public function getPuerto()
    {
        return $this->puerto;
    }

    /**
     * Set buque
     *
     * @param string $buque
     * @return Factura
     */
    public function setBuque($buque)
    {
        $this->buque = $buque;

        return $this;
    }

    /**
     * Get buque
     *
     * @return string 
     */
    public function getBuque()
    {
        return $this->buque;
    }

    /**
     * Set mtto
     *
     * @param string $mtto
     * @return Factura
     */
    public function setMtto($mtto)
    {
        $this->mtto = $mtto;

        return $this;
    }

    /**
     * Get mtto
     *
     * @return string 
     */
    public function getMtto()
    {
        return $this->mtto;
    }

    /**
     * Set partida
     *
     * @param string $partida
     * @return Factura
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return string 
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * Set bultos
     *
     * @param string $bultos
     * @return Factura
     */
    public function setBultos($bultos)
    {
        $this->bultos = $bultos;

        return $this;
    }

    /**
     * Get bultos
     *
     * @return string 
     */
    public function getBultos()
    {
        return $this->bultos;
    }

    /**
     * Set contenedor
     *
     * @param string $contenedor
     * @return Factura
     */
    public function setContenedor($contenedor)
    {
        $this->contenedor = $contenedor;

        return $this;
    }

    /**
     * Get contenedor
     *
     * @return string 
     */
    public function getContenedor()
    {
        return $this->contenedor;
    }

    /**
     * Set declarante
     *
     * @param string $declarante
     * @return Factura
     */
    public function setDeclarante($declarante)
    {
        $this->declarante = $declarante;

        return $this;
    }

    /**
     * Get declarante
     *
     * @return string 
     */
    public function getDeclarante()
    {
        return $this->declarante;
    }

    /**
     * Set declaracion
     *
     * @param string $declaracion
     * @return Factura
     */
    public function setDeclaracion($declaracion)
    {
        $this->declaracion = $declaracion;

        return $this;
    }

    /**
     * Get declaracion
     *
     * @return string 
     */
    public function getDeclaracion()
    {
        return $this->declaracion;
    }

    /**
     * Set contaot
     *
     * @param integer $contaot
     * @return Factura
     */
    public function setContaot($contaot)
    {
        $this->contaot = $contaot;

        return $this;
    }

    /**
     * Get contaot
     *
     * @return integer 
     */
    public function getContaot()
    {
        return $this->contaot;
    }

    /**
     * Set porcRetencion
     *
     * @param string $porcRetencion
     * @return Factura
     */
    public function setPorcRetencion($porcRetencion)
    {
        $this->porcRetencion = $porcRetencion;

        return $this;
    }

    /**
     * Get porcRetencion
     *
     * @return string 
     */
    public function getPorcRetencion()
    {
        return $this->porcRetencion;
    }

    /**
     * Set porcRetencionmc
     *
     * @param string $porcRetencionmc
     * @return Factura
     */
    public function setPorcRetencionmc($porcRetencionmc)
    {
        $this->porcRetencionmc = $porcRetencionmc;

        return $this;
    }

    /**
     * Get porcRetencionmc
     *
     * @return string 
     */
    public function getPorcRetencionmc()
    {
        return $this->porcRetencionmc;
    }

    /**
     * Set noservicio
     *
     * @param string $noservicio
     * @return Factura
     */
    public function setNoservicio($noservicio)
    {
        $this->noservicio = $noservicio;

        return $this;
    }

    /**
     * Get noservicio
     *
     * @return string 
     */
    public function getNoservicio()
    {
        return $this->noservicio;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return Factura
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
     * Set noPrelacion
     *
     * @param integer $noPrelacion
     * @return Factura
     */
    public function setNoPrelacion($noPrelacion)
    {
        $this->noPrelacion = $noPrelacion;

        return $this;
    }

    /**
     * Get noPrelacion
     *
     * @return integer 
     */
    public function getNoPrelacion()
    {
        return $this->noPrelacion;
    }

    /**
     * Set facturaNominas
     *
     * @param integer $facturaNominas
     * @return Factura
     */
    public function setFacturaNominas($facturaNominas)
    {
        $this->facturaNominas = $facturaNominas;

        return $this;
    }

    /**
     * Get facturaNominas
     *
     * @return integer 
     */
    public function getFacturaNominas()
    {
        return $this->facturaNominas;
    }

    /**
     * Set desctoTotal
     *
     * @param integer $desctoTotal
     * @return Factura
     */
    public function setDesctoTotal($desctoTotal)
    {
        $this->desctoTotal = $desctoTotal;

        return $this;
    }

    /**
     * Get desctoTotal
     *
     * @return integer 
     */
    public function getDesctoTotal()
    {
        return $this->desctoTotal;
    }

    /**
     * Set importarjeta
     *
     * @param integer $importarjeta
     * @return Factura
     */
    public function setImportarjeta($importarjeta)
    {
        $this->importarjeta = $importarjeta;

        return $this;
    }

    /**
     * Get importarjeta
     *
     * @return integer 
     */
    public function getImportarjeta()
    {
        return $this->importarjeta;
    }

    /**
     * Set imporefectivo
     *
     * @param integer $imporefectivo
     * @return Factura
     */
    public function setImporefectivo($imporefectivo)
    {
        $this->imporefectivo = $imporefectivo;

        return $this;
    }

    /**
     * Get imporefectivo
     *
     * @return integer 
     */
    public function getImporefectivo()
    {
        return $this->imporefectivo;
    }

    /**
     * Set imporcheque
     *
     * @param integer $imporcheque
     * @return Factura
     */
    public function setImporcheque($imporcheque)
    {
        $this->imporcheque = $imporcheque;

        return $this;
    }

    /**
     * Get imporcheque
     *
     * @return integer 
     */
    public function getImporcheque()
    {
        return $this->imporcheque;
    }

    /**
     * Set imporcambio
     *
     * @param integer $imporcambio
     * @return Factura
     */
    public function setImporcambio($imporcambio)
    {
        $this->imporcambio = $imporcambio;

        return $this;
    }

    /**
     * Get imporcambio
     *
     * @return integer 
     */
    public function getImporcambio()
    {
        return $this->imporcambio;
    }

    /**
     * Set contadorImpresion
     *
     * @param integer $contadorImpresion
     * @return Factura
     */
    public function setContadorImpresion($contadorImpresion)
    {
        $this->contadorImpresion = $contadorImpresion;

        return $this;
    }

    /**
     * Get contadorImpresion
     *
     * @return integer 
     */
    public function getContadorImpresion()
    {
        return $this->contadorImpresion;
    }

    /**
     * Set ncf
     *
     * @param string $ncf
     * @return Factura
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
     * Set noremision
     *
     * @param string $noremision
     * @return Factura
     */
    public function setNoremision($noremision)
    {
        $this->noremision = $noremision;

        return $this;
    }

    /**
     * Get noremision
     *
     * @return string 
     */
    public function getNoremision()
    {
        return $this->noremision;
    }

    /**
     * Set ultimaRemi
     *
     * @param boolean $ultimaRemi
     * @return Factura
     */
    public function setUltimaRemi($ultimaRemi)
    {
        $this->ultimaRemi = $ultimaRemi;

        return $this;
    }

    /**
     * Get ultimaRemi
     *
     * @return boolean 
     */
    public function getUltimaRemi()
    {
        return $this->ultimaRemi;
    }

    /**
     * Set devuelveOcancela
     *
     * @param integer $devuelveOcancela
     * @return Factura
     */
    public function setDevuelveOcancela($devuelveOcancela)
    {
        $this->devuelveOcancela = $devuelveOcancela;

        return $this;
    }

    /**
     * Get devuelveOcancela
     *
     * @return integer 
     */
    public function getDevuelveOcancela()
    {
        return $this->devuelveOcancela;
    }

    /**
     * Set cerrada
     *
     * @param boolean $cerrada
     * @return Factura
     */
    public function setCerrada($cerrada)
    {
        $this->cerrada = $cerrada;

        return $this;
    }

    /**
     * Get cerrada
     *
     * @return boolean 
     */
    public function getCerrada()
    {
        return $this->cerrada;
    }

    /**
     * Set oEntrega
     *
     * @param boolean $oEntrega
     * @return Factura
     */
    public function setOEntrega($oEntrega)
    {
        $this->oEntrega = $oEntrega;

        return $this;
    }

    /**
     * Get oEntrega
     *
     * @return boolean 
     */
    public function getOEntrega()
    {
        return $this->oEntrega;
    }

    /**
     * Set fechaRemision
     *
     * @param \DateTime $fechaRemision
     * @return Factura
     */
    public function setFechaRemision($fechaRemision)
    {
        $this->fechaRemision = $fechaRemision;

        return $this;
    }

    /**
     * Get fechaRemision
     *
     * @return \DateTime 
     */
    public function getFechaRemision()
    {
        return $this->fechaRemision;
    }

    /**
     * Set fechaDeclaracion
     *
     * @param \DateTime $fechaDeclaracion
     * @return Factura
     */
    public function setFechaDeclaracion($fechaDeclaracion)
    {
        $this->fechaDeclaracion = $fechaDeclaracion;

        return $this;
    }

    /**
     * Get fechaDeclaracion
     *
     * @return \DateTime 
     */
    public function getFechaDeclaracion()
    {
        return $this->fechaDeclaracion;
    }

    /**
     * Set nosellos
     *
     * @param string $nosellos
     * @return Factura
     */
    public function setNosellos($nosellos)
    {
        $this->nosellos = $nosellos;

        return $this;
    }

    /**
     * Get nosellos
     *
     * @return string 
     */
    public function getNosellos()
    {
        return $this->nosellos;
    }

    /**
     * Set guiaBl
     *
     * @param boolean $guiaBl
     * @return Factura
     */
    public function setGuiaBl($guiaBl)
    {
        $this->guiaBl = $guiaBl;

        return $this;
    }

    /**
     * Get guiaBl
     *
     * @return boolean 
     */
    public function getGuiaBl()
    {
        return $this->guiaBl;
    }

    /**
     * Set lcChofer
     *
     * @param string $lcChofer
     * @return Factura
     */
    public function setLcChofer($lcChofer)
    {
        $this->lcChofer = $lcChofer;

        return $this;
    }

    /**
     * Get lcChofer
     *
     * @return string 
     */
    public function getLcChofer()
    {
        return $this->lcChofer;
    }

    /**
     * Set chapa
     *
     * @param string $chapa
     * @return Factura
     */
    public function setChapa($chapa)
    {
        $this->chapa = $chapa;

        return $this;
    }

    /**
     * Get chapa
     *
     * @return string 
     */
    public function getChapa()
    {
        return $this->chapa;
    }

    /**
     * Set adespacho
     *
     * @param string $adespacho
     * @return Factura
     */
    public function setAdespacho($adespacho)
    {
        $this->adespacho = $adespacho;

        return $this;
    }

    /**
     * Get adespacho
     *
     * @return string 
     */
    public function getAdespacho()
    {
        return $this->adespacho;
    }

    /**
     * Set tipomovAduana
     *
     * @param integer $tipomovAduana
     * @return Factura
     */
    public function setTipomovAduana($tipomovAduana)
    {
        $this->tipomovAduana = $tipomovAduana;

        return $this;
    }

    /**
     * Get tipomovAduana
     *
     * @return integer 
     */
    public function getTipomovAduana()
    {
        return $this->tipomovAduana;
    }

    /**
     * Set aentradasalida
     *
     * @param string $aentradasalida
     * @return Factura
     */
    public function setAentradasalida($aentradasalida)
    {
        $this->aentradasalida = $aentradasalida;

        return $this;
    }

    /**
     * Get aentradasalida
     *
     * @return string 
     */
    public function getAentradasalida()
    {
        return $this->aentradasalida;
    }

    /**
     * Set factalcosto
     *
     * @param boolean $factalcosto
     * @return Factura
     */
    public function setFactalcosto($factalcosto)
    {
        $this->factalcosto = $factalcosto;

        return $this;
    }

    /**
     * Get factalcosto
     *
     * @return boolean 
     */
    public function getFactalcosto()
    {
        return $this->factalcosto;
    }

    /**
     * Set nolimite
     *
     * @param boolean $nolimite
     * @return Factura
     */
    public function setNolimite($nolimite)
    {
        $this->nolimite = $nolimite;

        return $this;
    }

    /**
     * Get nolimite
     *
     * @return boolean 
     */
    public function getNolimite()
    {
        return $this->nolimite;
    }

    /**
     * Set saldoporc
     *
     * @param string $saldoporc
     * @return Factura
     */
    public function setSaldoporc($saldoporc)
    {
        $this->saldoporc = $saldoporc;

        return $this;
    }

    /**
     * Get saldoporc
     *
     * @return string 
     */
    public function getSaldoporc()
    {
        return $this->saldoporc;
    }

    /**
     * Set importeAfavor
     *
     * @param integer $importeAfavor
     * @return Factura
     */
    public function setImporteAfavor($importeAfavor)
    {
        $this->importeAfavor = $importeAfavor;

        return $this;
    }

    /**
     * Get importeAfavor
     *
     * @return integer 
     */
    public function getImporteAfavor()
    {
        return $this->importeAfavor;
    }

    /**
     * Set porcFinancia
     *
     * @param string $porcFinancia
     * @return Factura
     */
    public function setPorcFinancia($porcFinancia)
    {
        $this->porcFinancia = $porcFinancia;

        return $this;
    }

    /**
     * Get porcFinancia
     *
     * @return string 
     */
    public function getPorcFinancia()
    {
        return $this->porcFinancia;
    }
}
