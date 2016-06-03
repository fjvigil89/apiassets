<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recepcion
 *
 * @ORM\Table(name="Recepcion", uniqueConstraints={@ORM\UniqueConstraint(name="Contador", columns={"Contador"})}, indexes={@ORM\Index(name="IX_Recepcion", columns={"Fecha_Confirmacion", "Id_Almacen"})})
 * @ORM\Entity
 */
class Recepcion
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
     * @ORM\Column(name="Id_Recepcion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idRecepcion;

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
     * @ORM\Column(name="Ano_Recepcion", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoRecepcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Referencia", type="integer", nullable=false)
     */
    private $idReferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Año_Referencia", type="smallint", nullable=false)
     */
    private $añoReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FacturaProveedor", type="string", length=40, nullable=false)
     */
    private $idFacturaproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Declaracion", type="string", length=15, nullable=false)
     */
    private $declaracion;

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
     * @ORM\Column(name="Tipo_Recepcion", type="smallint", nullable=false)
     */
    private $tipoRecepcion;

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
     * @ORM\Column(name="Credito", type="smallint", nullable=false)
     */
    private $credito;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Proveedor", type="datetime", nullable=false)
     */
    private $fechaProveedor;

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
     * @var boolean
     *
     * @ORM\Column(name="Rec_Producto", type="boolean", nullable=false)
     */
    private $recProducto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Recepcion_Activos", type="boolean", nullable=false)
     */
    private $recepcionActivos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AplicaArancel", type="boolean", nullable=false)
     */
    private $aplicaarancel;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_RecepcionProducto", type="integer", nullable=false)
     */
    private $idRecepcionproducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_RecepcionProducto", type="smallint", nullable=false)
     */
    private $anoRecepcionproducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Recepcion_ProductosMn", type="integer", nullable=false)
     */
    private $importeRecepcionProductosmn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Financiamiento", type="boolean", nullable=false)
     */
    private $financiamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Costo_EstimadoMB", type="integer", nullable=false)
     */
    private $costoEstimadomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Costo_EstimadoMC", type="integer", nullable=false)
     */
    private $costoEstimadomc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cancelado", type="boolean", nullable=false)
     */
    private $cancelado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contabilizar_A", type="smallint", nullable=false)
     */
    private $contabilizarA;

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
     * @var string
     *
     * @ORM\Column(name="Ano_Compro", type="string", length=4, nullable=false)
     */
    private $anoCompro;

    /**
     * @var string
     *
     * @ORM\Column(name="Recibido_Por", type="string", length=50, nullable=false)
     */
    private $recibidoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Contrato", type="string", length=20, nullable=false)
     */
    private $contrato;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_ent", type="datetime", nullable=false)
     */
    private $fechaEnt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hora_Ent", type="datetime", nullable=false)
     */
    private $horaEnt;

    /**
     * @var string
     *
     * @ORM\Column(name="Chofer", type="string", length=50, nullable=false)
     */
    private $chofer;

    /**
     * @var string
     *
     * @ORM\Column(name="ChoferCI", type="string", length=11, nullable=false)
     */
    private $choferci;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasiRecep", type="string", length=10, nullable=false)
     */
    private $idClasirecep;

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
     * @ORM\Column(name="Periodo_Anterior", type="boolean", nullable=false)
     */
    private $periodoAnterior;

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
     * @var string
     *
     * @ORM\Column(name="Id_Ficha", type="string", length=50, nullable=false)
     */
    private $idFicha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Impuesto", type="integer", nullable=false)
     */
    private $impuesto;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImpuestoDevuelto", type="integer", nullable=false)
     */
    private $impuestodevuelto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaOrden", type="integer", nullable=false)
     */
    private $contaorden;

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
     * @var boolean
     *
     * @ORM\Column(name="Facturar", type="boolean", nullable=false)
     */
    private $facturar;

    /**
     * @var string
     *
     * @ORM\Column(name="Declarante", type="string", length=60, nullable=false)
     */
    private $declarante;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Gen_Auto", type="boolean", nullable=false)
     */
    private $genAuto;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var integer
     *
     * @ORM\Column(name="No_Prelacion", type="integer", nullable=false)
     */
    private $noPrelacion;

    /**
     * @var string
     *
     * @ORM\Column(name="NoRemision", type="string", length=10, nullable=false)
     */
    private $noremision;

    /**
     * @var string
     *
     * @ORM\Column(name="DmToT", type="string", length=10, nullable=false)
     */
    private $dmtot;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoMov_Aduana", type="smallint", nullable=false)
     */
    private $tipomovAduana;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ultima_Remi", type="boolean", nullable=false)
     */
    private $ultimaRemi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FactServImport", type="boolean", nullable=false)
     */
    private $factservimport;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImpuestoProve", type="integer", nullable=false)
     */
    private $impuestoprove;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImpuestoReten", type="integer", nullable=false)
     */
    private $impuestoreten;

    /**
     * @var string
     *
     * @ORM\Column(name="NCF", type="string", length=20, nullable=false)
     */
    private $ncf;

    /**
     * @var integer
     *
     * @ORM\Column(name="OtrasReten", type="integer", nullable=false)
     */
    private $otrasreten;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devuelve_oCancela", type="smallint", nullable=false)
     */
    private $devuelveOcancela;

    /**
     * @var string
     *
     * @ORM\Column(name="DmTres", type="string", length=10, nullable=false)
     */
    private $dmtres;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoMov_Aduana2", type="smallint", nullable=false)
     */
    private $tipomovAduana2;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoMov_Aduana3", type="smallint", nullable=false)
     */
    private $tipomovAduana3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Moneda", type="integer", nullable=false)
     */
    private $importeMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmaOP", type="string", length=5, nullable=false)
     */
    private $idAlmaop;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tipo_Refe", type="boolean", nullable=false)
     */
    private $tipoRefe;

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
     * @ORM\Column(name="Lc_Chofer", type="string", length=7, nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="AEntradaSalida", type="string", length=4, nullable=false)
     */
    private $aentradasalida;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoProrrateo", type="smallint", nullable=false)
     */
    private $tipoprorrateo;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return Recepcion
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
     * @return Recepcion
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
     * Set idRecepcion
     *
     * @param integer $idRecepcion
     * @return Recepcion
     */
    public function setIdRecepcion($idRecepcion)
    {
        $this->idRecepcion = $idRecepcion;

        return $this;
    }

    /**
     * Get idRecepcion
     *
     * @return integer 
     */
    public function getIdRecepcion()
    {
        return $this->idRecepcion;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Recepcion
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
     * Set anoRecepcion
     *
     * @param integer $anoRecepcion
     * @return Recepcion
     */
    public function setAnoRecepcion($anoRecepcion)
    {
        $this->anoRecepcion = $anoRecepcion;

        return $this;
    }

    /**
     * Get anoRecepcion
     *
     * @return integer 
     */
    public function getAnoRecepcion()
    {
        return $this->anoRecepcion;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return Recepcion
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
     * Set idReferencia
     *
     * @param integer $idReferencia
     * @return Recepcion
     */
    public function setIdReferencia($idReferencia)
    {
        $this->idReferencia = $idReferencia;

        return $this;
    }

    /**
     * Get idReferencia
     *
     * @return integer 
     */
    public function getIdReferencia()
    {
        return $this->idReferencia;
    }

    /**
     * Set añoReferencia
     *
     * @param integer $añoReferencia
     * @return Recepcion
     */
    public function setAñoReferencia($añoReferencia)
    {
        $this->añoReferencia = $añoReferencia;

        return $this;
    }

    /**
     * Get añoReferencia
     *
     * @return integer 
     */
    public function getAñoReferencia()
    {
        return $this->añoReferencia;
    }

    /**
     * Set idFacturaproveedor
     *
     * @param string $idFacturaproveedor
     * @return Recepcion
     */
    public function setIdFacturaproveedor($idFacturaproveedor)
    {
        $this->idFacturaproveedor = $idFacturaproveedor;

        return $this;
    }

    /**
     * Get idFacturaproveedor
     *
     * @return string 
     */
    public function getIdFacturaproveedor()
    {
        return $this->idFacturaproveedor;
    }

    /**
     * Set declaracion
     *
     * @param string $declaracion
     * @return Recepcion
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
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return Recepcion
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
     * @return Recepcion
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
     * Set idComercial
     *
     * @param string $idComercial
     * @return Recepcion
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
     * @return Recepcion
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
     * Set tipoRecepcion
     *
     * @param integer $tipoRecepcion
     * @return Recepcion
     */
    public function setTipoRecepcion($tipoRecepcion)
    {
        $this->tipoRecepcion = $tipoRecepcion;

        return $this;
    }

    /**
     * Get tipoRecepcion
     *
     * @return integer 
     */
    public function getTipoRecepcion()
    {
        return $this->tipoRecepcion;
    }

    /**
     * Set recargomb
     *
     * @param integer $recargomb
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * Set credito
     *
     * @param integer $credito
     * @return Recepcion
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
     * Set fechaProveedor
     *
     * @param \DateTime $fechaProveedor
     * @return Recepcion
     */
    public function setFechaProveedor($fechaProveedor)
    {
        $this->fechaProveedor = $fechaProveedor;

        return $this;
    }

    /**
     * Get fechaProveedor
     *
     * @return \DateTime 
     */
    public function getFechaProveedor()
    {
        return $this->fechaProveedor;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return Recepcion
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
     * @return Recepcion
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
     * Set importeDevueltomb
     *
     * @param integer $importeDevueltomb
     * @return Recepcion
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
     * @return Recepcion
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
     * Set moneda
     *
     * @param string $moneda
     * @return Recepcion
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
     * @return Recepcion
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
     * Set aplicaplazocobro
     *
     * @param boolean $aplicaplazocobro
     * @return Recepcion
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
     * @return Recepcion
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
     * Set recProducto
     *
     * @param boolean $recProducto
     * @return Recepcion
     */
    public function setRecProducto($recProducto)
    {
        $this->recProducto = $recProducto;

        return $this;
    }

    /**
     * Get recProducto
     *
     * @return boolean 
     */
    public function getRecProducto()
    {
        return $this->recProducto;
    }

    /**
     * Set recepcionActivos
     *
     * @param boolean $recepcionActivos
     * @return Recepcion
     */
    public function setRecepcionActivos($recepcionActivos)
    {
        $this->recepcionActivos = $recepcionActivos;

        return $this;
    }

    /**
     * Get recepcionActivos
     *
     * @return boolean 
     */
    public function getRecepcionActivos()
    {
        return $this->recepcionActivos;
    }

    /**
     * Set aplicaarancel
     *
     * @param boolean $aplicaarancel
     * @return Recepcion
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
     * Set idRecepcionproducto
     *
     * @param integer $idRecepcionproducto
     * @return Recepcion
     */
    public function setIdRecepcionproducto($idRecepcionproducto)
    {
        $this->idRecepcionproducto = $idRecepcionproducto;

        return $this;
    }

    /**
     * Get idRecepcionproducto
     *
     * @return integer 
     */
    public function getIdRecepcionproducto()
    {
        return $this->idRecepcionproducto;
    }

    /**
     * Set anoRecepcionproducto
     *
     * @param integer $anoRecepcionproducto
     * @return Recepcion
     */
    public function setAnoRecepcionproducto($anoRecepcionproducto)
    {
        $this->anoRecepcionproducto = $anoRecepcionproducto;

        return $this;
    }

    /**
     * Get anoRecepcionproducto
     *
     * @return integer 
     */
    public function getAnoRecepcionproducto()
    {
        return $this->anoRecepcionproducto;
    }

    /**
     * Set importeRecepcionProductosmn
     *
     * @param integer $importeRecepcionProductosmn
     * @return Recepcion
     */
    public function setImporteRecepcionProductosmn($importeRecepcionProductosmn)
    {
        $this->importeRecepcionProductosmn = $importeRecepcionProductosmn;

        return $this;
    }

    /**
     * Get importeRecepcionProductosmn
     *
     * @return integer 
     */
    public function getImporteRecepcionProductosmn()
    {
        return $this->importeRecepcionProductosmn;
    }

    /**
     * Set financiamiento
     *
     * @param boolean $financiamiento
     * @return Recepcion
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
     * Set costoEstimadomb
     *
     * @param integer $costoEstimadomb
     * @return Recepcion
     */
    public function setCostoEstimadomb($costoEstimadomb)
    {
        $this->costoEstimadomb = $costoEstimadomb;

        return $this;
    }

    /**
     * Get costoEstimadomb
     *
     * @return integer 
     */
    public function getCostoEstimadomb()
    {
        return $this->costoEstimadomb;
    }

    /**
     * Set costoEstimadomc
     *
     * @param integer $costoEstimadomc
     * @return Recepcion
     */
    public function setCostoEstimadomc($costoEstimadomc)
    {
        $this->costoEstimadomc = $costoEstimadomc;

        return $this;
    }

    /**
     * Get costoEstimadomc
     *
     * @return integer 
     */
    public function getCostoEstimadomc()
    {
        return $this->costoEstimadomc;
    }

    /**
     * Set cancelado
     *
     * @param boolean $cancelado
     * @return Recepcion
     */
    public function setCancelado($cancelado)
    {
        $this->cancelado = $cancelado;

        return $this;
    }

    /**
     * Get cancelado
     *
     * @return boolean 
     */
    public function getCancelado()
    {
        return $this->cancelado;
    }

    /**
     * Set contabilizarA
     *
     * @param integer $contabilizarA
     * @return Recepcion
     */
    public function setContabilizarA($contabilizarA)
    {
        $this->contabilizarA = $contabilizarA;

        return $this;
    }

    /**
     * Get contabilizarA
     *
     * @return integer 
     */
    public function getContabilizarA()
    {
        return $this->contabilizarA;
    }

    /**
     * Set idCompro
     *
     * @param string $idCompro
     * @return Recepcion
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
     * @return Recepcion
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
     * @param string $anoCompro
     * @return Recepcion
     */
    public function setAnoCompro($anoCompro)
    {
        $this->anoCompro = $anoCompro;

        return $this;
    }

    /**
     * Get anoCompro
     *
     * @return string 
     */
    public function getAnoCompro()
    {
        return $this->anoCompro;
    }

    /**
     * Set recibidoPor
     *
     * @param string $recibidoPor
     * @return Recepcion
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
     * Set contrato
     *
     * @param string $contrato
     * @return Recepcion
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
     * Set pais
     *
     * @param string $pais
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * Set fechaEnt
     *
     * @param \DateTime $fechaEnt
     * @return Recepcion
     */
    public function setFechaEnt($fechaEnt)
    {
        $this->fechaEnt = $fechaEnt;

        return $this;
    }

    /**
     * Get fechaEnt
     *
     * @return \DateTime 
     */
    public function getFechaEnt()
    {
        return $this->fechaEnt;
    }

    /**
     * Set horaEnt
     *
     * @param \DateTime $horaEnt
     * @return Recepcion
     */
    public function setHoraEnt($horaEnt)
    {
        $this->horaEnt = $horaEnt;

        return $this;
    }

    /**
     * Get horaEnt
     *
     * @return \DateTime 
     */
    public function getHoraEnt()
    {
        return $this->horaEnt;
    }

    /**
     * Set chofer
     *
     * @param string $chofer
     * @return Recepcion
     */
    public function setChofer($chofer)
    {
        $this->chofer = $chofer;

        return $this;
    }

    /**
     * Get chofer
     *
     * @return string 
     */
    public function getChofer()
    {
        return $this->chofer;
    }

    /**
     * Set choferci
     *
     * @param string $choferci
     * @return Recepcion
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
     * Set nota
     *
     * @param string $nota
     * @return Recepcion
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
     * Set idClasirecep
     *
     * @param string $idClasirecep
     * @return Recepcion
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
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return Recepcion
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
     * @return Recepcion
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
     * Set periodoAnterior
     *
     * @param boolean $periodoAnterior
     * @return Recepcion
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
     * Set marcaAlertas
     *
     * @param boolean $marcaAlertas
     * @return Recepcion
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
     * @return Recepcion
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
     * Set idFicha
     *
     * @param string $idFicha
     * @return Recepcion
     */
    public function setIdFicha($idFicha)
    {
        $this->idFicha = $idFicha;

        return $this;
    }

    /**
     * Get idFicha
     *
     * @return string 
     */
    public function getIdFicha()
    {
        return $this->idFicha;
    }

    /**
     * Set impuesto
     *
     * @param integer $impuesto
     * @return Recepcion
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get impuesto
     *
     * @return integer 
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set impuestodevuelto
     *
     * @param integer $impuestodevuelto
     * @return Recepcion
     */
    public function setImpuestodevuelto($impuestodevuelto)
    {
        $this->impuestodevuelto = $impuestodevuelto;

        return $this;
    }

    /**
     * Get impuestodevuelto
     *
     * @return integer 
     */
    public function getImpuestodevuelto()
    {
        return $this->impuestodevuelto;
    }

    /**
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return Recepcion
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
     * Set contaorden
     *
     * @param integer $contaorden
     * @return Recepcion
     */
    public function setContaorden($contaorden)
    {
        $this->contaorden = $contaorden;

        return $this;
    }

    /**
     * Get contaorden
     *
     * @return integer 
     */
    public function getContaorden()
    {
        return $this->contaorden;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Recepcion
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
     * @return Recepcion
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
     * Set facturar
     *
     * @param boolean $facturar
     * @return Recepcion
     */
    public function setFacturar($facturar)
    {
        $this->facturar = $facturar;

        return $this;
    }

    /**
     * Get facturar
     *
     * @return boolean 
     */
    public function getFacturar()
    {
        return $this->facturar;
    }

    /**
     * Set declarante
     *
     * @param string $declarante
     * @return Recepcion
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
     * Set genAuto
     *
     * @param boolean $genAuto
     * @return Recepcion
     */
    public function setGenAuto($genAuto)
    {
        $this->genAuto = $genAuto;

        return $this;
    }

    /**
     * Get genAuto
     *
     * @return boolean 
     */
    public function getGenAuto()
    {
        return $this->genAuto;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return Recepcion
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
     * @return Recepcion
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
     * Set noremision
     *
     * @param string $noremision
     * @return Recepcion
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
     * Set dmtot
     *
     * @param string $dmtot
     * @return Recepcion
     */
    public function setDmtot($dmtot)
    {
        $this->dmtot = $dmtot;

        return $this;
    }

    /**
     * Get dmtot
     *
     * @return string 
     */
    public function getDmtot()
    {
        return $this->dmtot;
    }

    /**
     * Set tipomovAduana
     *
     * @param integer $tipomovAduana
     * @return Recepcion
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
     * Set ultimaRemi
     *
     * @param boolean $ultimaRemi
     * @return Recepcion
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
     * Set factservimport
     *
     * @param boolean $factservimport
     * @return Recepcion
     */
    public function setFactservimport($factservimport)
    {
        $this->factservimport = $factservimport;

        return $this;
    }

    /**
     * Get factservimport
     *
     * @return boolean 
     */
    public function getFactservimport()
    {
        return $this->factservimport;
    }

    /**
     * Set impuestoprove
     *
     * @param integer $impuestoprove
     * @return Recepcion
     */
    public function setImpuestoprove($impuestoprove)
    {
        $this->impuestoprove = $impuestoprove;

        return $this;
    }

    /**
     * Get impuestoprove
     *
     * @return integer 
     */
    public function getImpuestoprove()
    {
        return $this->impuestoprove;
    }

    /**
     * Set impuestoreten
     *
     * @param integer $impuestoreten
     * @return Recepcion
     */
    public function setImpuestoreten($impuestoreten)
    {
        $this->impuestoreten = $impuestoreten;

        return $this;
    }

    /**
     * Get impuestoreten
     *
     * @return integer 
     */
    public function getImpuestoreten()
    {
        return $this->impuestoreten;
    }

    /**
     * Set ncf
     *
     * @param string $ncf
     * @return Recepcion
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
     * Set otrasreten
     *
     * @param integer $otrasreten
     * @return Recepcion
     */
    public function setOtrasreten($otrasreten)
    {
        $this->otrasreten = $otrasreten;

        return $this;
    }

    /**
     * Get otrasreten
     *
     * @return integer 
     */
    public function getOtrasreten()
    {
        return $this->otrasreten;
    }

    /**
     * Set devuelveOcancela
     *
     * @param integer $devuelveOcancela
     * @return Recepcion
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
     * Set dmtres
     *
     * @param string $dmtres
     * @return Recepcion
     */
    public function setDmtres($dmtres)
    {
        $this->dmtres = $dmtres;

        return $this;
    }

    /**
     * Get dmtres
     *
     * @return string 
     */
    public function getDmtres()
    {
        return $this->dmtres;
    }

    /**
     * Set tipomovAduana2
     *
     * @param integer $tipomovAduana2
     * @return Recepcion
     */
    public function setTipomovAduana2($tipomovAduana2)
    {
        $this->tipomovAduana2 = $tipomovAduana2;

        return $this;
    }

    /**
     * Get tipomovAduana2
     *
     * @return integer 
     */
    public function getTipomovAduana2()
    {
        return $this->tipomovAduana2;
    }

    /**
     * Set tipomovAduana3
     *
     * @param integer $tipomovAduana3
     * @return Recepcion
     */
    public function setTipomovAduana3($tipomovAduana3)
    {
        $this->tipomovAduana3 = $tipomovAduana3;

        return $this;
    }

    /**
     * Get tipomovAduana3
     *
     * @return integer 
     */
    public function getTipomovAduana3()
    {
        return $this->tipomovAduana3;
    }

    /**
     * Set importeMoneda
     *
     * @param integer $importeMoneda
     * @return Recepcion
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
     * Set idAlmaop
     *
     * @param string $idAlmaop
     * @return Recepcion
     */
    public function setIdAlmaop($idAlmaop)
    {
        $this->idAlmaop = $idAlmaop;

        return $this;
    }

    /**
     * Get idAlmaop
     *
     * @return string 
     */
    public function getIdAlmaop()
    {
        return $this->idAlmaop;
    }

    /**
     * Set tipoRefe
     *
     * @param boolean $tipoRefe
     * @return Recepcion
     */
    public function setTipoRefe($tipoRefe)
    {
        $this->tipoRefe = $tipoRefe;

        return $this;
    }

    /**
     * Get tipoRefe
     *
     * @return boolean 
     */
    public function getTipoRefe()
    {
        return $this->tipoRefe;
    }

    /**
     * Set fechaRemision
     *
     * @param \DateTime $fechaRemision
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * @return Recepcion
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
     * Set aentradasalida
     *
     * @param string $aentradasalida
     * @return Recepcion
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
     * Set tipoprorrateo
     *
     * @param integer $tipoprorrateo
     * @return Recepcion
     */
    public function setTipoprorrateo($tipoprorrateo)
    {
        $this->tipoprorrateo = $tipoprorrateo;

        return $this;
    }

    /**
     * Get tipoprorrateo
     *
     * @return integer 
     */
    public function getTipoprorrateo()
    {
        return $this->tipoprorrateo;
    }
}
