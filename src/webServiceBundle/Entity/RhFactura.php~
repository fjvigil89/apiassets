<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhFactura
 *
 * @ORM\Table(name="RH_Factura")
 * @ORM\Entity
 */
class RhFactura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Factura", type="integer", nullable=false)
     */
    private $idFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Factura", type="smallint", nullable=false)
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


}
