<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="Pedido", uniqueConstraints={@ORM\UniqueConstraint(name="Cont_Pedido", columns={"Contador"})})
 * @ORM\Entity
 */
class Pedido
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
     * @ORM\Column(name="Id_Pedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPedido;

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
     * @ORM\Column(name="Ano_Pedido", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoPedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Pedido", type="datetime", nullable=false)
     */
    private $fechaPedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

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
     * @ORM\Column(name="Id_Comercial", type="string", length=5, nullable=false)
     */
    private $idComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Comercial", type="string", length=50, nullable=false)
     */
    private $descComercial;

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
     * @var boolean
     *
     * @ORM\Column(name="AplicaArancel", type="boolean", nullable=false)
     */
    private $aplicaarancel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ImprimeCod", type="boolean", nullable=false)
     */
    private $imprimecod;

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
     * @var integer
     *
     * @ORM\Column(name="Credito", type="smallint", nullable=false)
     */
    private $credito;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=500, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Entrega", type="string", length=50, nullable=false)
     */
    private $entrega;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Imprimir_Codigo", type="boolean", nullable=false)
     */
    private $imprimirCodigo;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Entrega", type="datetime", nullable=false)
     */
    private $fechaEntrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hora_Entrega", type="datetime", nullable=false)
     */
    private $horaEntrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Valido_Hasta", type="datetime", nullable=false)
     */
    private $validoHasta;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasifica", type="string", length=5, nullable=false)
     */
    private $idClasifica;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fpago", type="string", length=5, nullable=false)
     */
    private $idFpago;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

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
     * @ORM\Column(name="Doc_primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Reservar", type="boolean", nullable=false)
     */
    private $reservar;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion_Pto", type="string", length=60, nullable=false)
     */
    private $direccionPto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CotizaMultiple", type="boolean", nullable=false)
     */
    private $cotizamultiple;

    /**
     * @var string
     *
     * @ORM\Column(name="Contrato", type="string", length=20, nullable=false)
     */
    private $contrato;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrada", type="boolean", nullable=false)
     */
    private $cerrada;

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
     * @return Pedido
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
     * @return Pedido
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
     * Set idPedido
     *
     * @param integer $idPedido
     * @return Pedido
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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Pedido
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
     * Set anoPedido
     *
     * @param integer $anoPedido
     * @return Pedido
     */
    public function setAnoPedido($anoPedido)
    {
        $this->anoPedido = $anoPedido;

        return $this;
    }

    /**
     * Get anoPedido
     *
     * @return integer 
     */
    public function getAnoPedido()
    {
        return $this->anoPedido;
    }

    /**
     * Set fechaPedido
     *
     * @param \DateTime $fechaPedido
     * @return Pedido
     */
    public function setFechaPedido($fechaPedido)
    {
        $this->fechaPedido = $fechaPedido;

        return $this;
    }

    /**
     * Get fechaPedido
     *
     * @return \DateTime 
     */
    public function getFechaPedido()
    {
        return $this->fechaPedido;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return Pedido
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * Set idComercial
     *
     * @param string $idComercial
     * @return Pedido
     */
    public function setIdComercial($idComercial)
    {
        $this->idComercial = $idComercial;

        return $this;
    }

    /**
     * Get idComercial
     *
     * @return string 
     */
    public function getIdComercial()
    {
        return $this->idComercial;
    }

    /**
     * Set descComercial
     *
     * @param string $descComercial
     * @return Pedido
     */
    public function setDescComercial($descComercial)
    {
        $this->descComercial = $descComercial;

        return $this;
    }

    /**
     * Get descComercial
     *
     * @return string 
     */
    public function getDescComercial()
    {
        return $this->descComercial;
    }

    /**
     * Set recargomb
     *
     * @param integer $recargomb
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return Pedido
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
     * @return Pedido
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
     * Set moneda
     *
     * @param string $moneda
     * @return Pedido
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
     * @return Pedido
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
     * Set aplicaarancel
     *
     * @param boolean $aplicaarancel
     * @return Pedido
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
     * Set imprimecod
     *
     * @param boolean $imprimecod
     * @return Pedido
     */
    public function setImprimecod($imprimecod)
    {
        $this->imprimecod = $imprimecod;

        return $this;
    }

    /**
     * Get imprimecod
     *
     * @return boolean 
     */
    public function getImprimecod()
    {
        return $this->imprimecod;
    }

    /**
     * Set aplicaplazocobro
     *
     * @param boolean $aplicaplazocobro
     * @return Pedido
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
     * @return Pedido
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
     * Set credito
     *
     * @param integer $credito
     * @return Pedido
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
     * Set nota
     *
     * @param string $nota
     * @return Pedido
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
     * Set entrega
     *
     * @param string $entrega
     * @return Pedido
     */
    public function setEntrega($entrega)
    {
        $this->entrega = $entrega;

        return $this;
    }

    /**
     * Get entrega
     *
     * @return string 
     */
    public function getEntrega()
    {
        return $this->entrega;
    }

    /**
     * Set imprimirCodigo
     *
     * @param boolean $imprimirCodigo
     * @return Pedido
     */
    public function setImprimirCodigo($imprimirCodigo)
    {
        $this->imprimirCodigo = $imprimirCodigo;

        return $this;
    }

    /**
     * Get imprimirCodigo
     *
     * @return boolean 
     */
    public function getImprimirCodigo()
    {
        return $this->imprimirCodigo;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * @return Pedido
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
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return Pedido
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set horaEntrega
     *
     * @param \DateTime $horaEntrega
     * @return Pedido
     */
    public function setHoraEntrega($horaEntrega)
    {
        $this->horaEntrega = $horaEntrega;

        return $this;
    }

    /**
     * Get horaEntrega
     *
     * @return \DateTime 
     */
    public function getHoraEntrega()
    {
        return $this->horaEntrega;
    }

    /**
     * Set validoHasta
     *
     * @param \DateTime $validoHasta
     * @return Pedido
     */
    public function setValidoHasta($validoHasta)
    {
        $this->validoHasta = $validoHasta;

        return $this;
    }

    /**
     * Get validoHasta
     *
     * @return \DateTime 
     */
    public function getValidoHasta()
    {
        return $this->validoHasta;
    }

    /**
     * Set idClasifica
     *
     * @param string $idClasifica
     * @return Pedido
     */
    public function setIdClasifica($idClasifica)
    {
        $this->idClasifica = $idClasifica;

        return $this;
    }

    /**
     * Get idClasifica
     *
     * @return string 
     */
    public function getIdClasifica()
    {
        return $this->idClasifica;
    }

    /**
     * Set idFpago
     *
     * @param string $idFpago
     * @return Pedido
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
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return Pedido
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
     * Set idUser
     *
     * @param string $idUser
     * @return Pedido
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
     * @return Pedido
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
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return Pedido
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
     * Set reservar
     *
     * @param boolean $reservar
     * @return Pedido
     */
    public function setReservar($reservar)
    {
        $this->reservar = $reservar;

        return $this;
    }

    /**
     * Get reservar
     *
     * @return boolean 
     */
    public function getReservar()
    {
        return $this->reservar;
    }

    /**
     * Set direccionPto
     *
     * @param string $direccionPto
     * @return Pedido
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
     * Set cotizamultiple
     *
     * @param boolean $cotizamultiple
     * @return Pedido
     */
    public function setCotizamultiple($cotizamultiple)
    {
        $this->cotizamultiple = $cotizamultiple;

        return $this;
    }

    /**
     * Get cotizamultiple
     *
     * @return boolean 
     */
    public function getCotizamultiple()
    {
        return $this->cotizamultiple;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     * @return Pedido
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
     * Set cerrada
     *
     * @param boolean $cerrada
     * @return Pedido
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
     * Set porcFinancia
     *
     * @param string $porcFinancia
     * @return Pedido
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
