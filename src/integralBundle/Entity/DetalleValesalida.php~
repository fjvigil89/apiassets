<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleValesalida
 *
 * @ORM\Table(name="Detalle_ValeSalida")
 * @ORM\Entity
 */
class DetalleValesalida
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
     * @ORM\Column(name="Items", type="smallint", nullable=false)
     */
    private $items;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_ValeSalida", type="integer", nullable=false)
     */
    private $idValesalida;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_ValeSalida", type="smallint", nullable=false)
     */
    private $anoValesalida;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Lote", type="string", length=20, nullable=false)
     */
    private $idLote;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto", type="string", length=255, nullable=false)
     */
    private $descProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Um_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Entregada", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidadEntregada;

    /**
     * @var string
     *
     * @ORM\Column(name="Reservadas", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $reservadas;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo_Disponible", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $saldoDisponible;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo_Existencia", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $saldoExistencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoUmAlmacenMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostoumalmacenmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoUmAlmacenMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostoumalmacenmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteCosto_MB", type="integer", nullable=false)
     */
    private $importecostoMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteCosto_MC", type="integer", nullable=false)
     */
    private $importecostoMc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ElemGasto", type="string", length=10, nullable=false)
     */
    private $idElemgasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubElemGasto", type="string", length=15, nullable=false)
     */
    private $idSubelemgasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Insumo", type="string", length=10, nullable=false)
     */
    private $idInsumo;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaUMAlmacenMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaumalmacenmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaUMAlmacenMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaumalmacenmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Etapa", type="string", length=50, nullable=false)
     */
    private $etapa;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ElemGastoMC", type="string", length=10, nullable=false)
     */
    private $idElemgastomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubElemGastoMC", type="string", length=15, nullable=false)
     */
    private $idSubelemgastomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Seccion", type="string", length=10, nullable=false)
     */
    private $seccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Estante", type="string", length=10, nullable=false)
     */
    private $estante;

    /**
     * @var string
     *
     * @ORM\Column(name="Casilla", type="string", length=10, nullable=false)
     */
    private $casilla;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Devuelta", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidadDevuelta;

    /**
     * @var string
     *
     * @ORM\Column(name="Paquete", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $paquete;

    /**
     * @var string
     *
     * @ORM\Column(name="Bultos", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $bultos;

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
     * @ORM\Column(name="Id_Destino", type="string", length=10, nullable=false)
     */
    private $idDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=10, nullable=false)
     */
    private $idActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioConsigna", type="integer", nullable=false)
     */
    private $precioconsigna;

    /**
     * @var string
     *
     * @ORM\Column(name="LoteSM", type="string", length=20, nullable=false)
     */
    private $lotesm;

    /**
     * @var string
     *
     * @ORM\Column(name="IRConsigna", type="string", length=20, nullable=false)
     */
    private $irconsigna;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaIRConsigna", type="integer", nullable=false)
     */
    private $contairconsigna;

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
     * @var integer
     *
     * @ORM\Column(name="Empaque", type="integer", nullable=false)
     */
    private $empaque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

    /**
     * @var string
     *
     * @ORM\Column(name="FactorEmpaque", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $factorempaque;



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
     * Set items
     *
     * @param integer $items
     * @return DetalleValesalida
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
     * Set idValesalida
     *
     * @param integer $idValesalida
     * @return DetalleValesalida
     */
    public function setIdValesalida($idValesalida)
    {
        $this->idValesalida = $idValesalida;

        return $this;
    }

    /**
     * Get idValesalida
     *
     * @return integer 
     */
    public function getIdValesalida()
    {
        return $this->idValesalida;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetalleValesalida
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
     * Set anoValesalida
     *
     * @param integer $anoValesalida
     * @return DetalleValesalida
     */
    public function setAnoValesalida($anoValesalida)
    {
        $this->anoValesalida = $anoValesalida;

        return $this;
    }

    /**
     * Get anoValesalida
     *
     * @return integer 
     */
    public function getAnoValesalida()
    {
        return $this->anoValesalida;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return DetalleValesalida
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return string 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set idLote
     *
     * @param string $idLote
     * @return DetalleValesalida
     */
    public function setIdLote($idLote)
    {
        $this->idLote = $idLote;

        return $this;
    }

    /**
     * Get idLote
     *
     * @return string 
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * Set descProducto
     *
     * @param string $descProducto
     * @return DetalleValesalida
     */
    public function setDescProducto($descProducto)
    {
        $this->descProducto = $descProducto;

        return $this;
    }

    /**
     * Get descProducto
     *
     * @return string 
     */
    public function getDescProducto()
    {
        return $this->descProducto;
    }

    /**
     * Set umAlmacen
     *
     * @param string $umAlmacen
     * @return DetalleValesalida
     */
    public function setUmAlmacen($umAlmacen)
    {
        $this->umAlmacen = $umAlmacen;

        return $this;
    }

    /**
     * Get umAlmacen
     *
     * @return string 
     */
    public function getUmAlmacen()
    {
        return $this->umAlmacen;
    }

    /**
     * Set cantidadEntregada
     *
     * @param string $cantidadEntregada
     * @return DetalleValesalida
     */
    public function setCantidadEntregada($cantidadEntregada)
    {
        $this->cantidadEntregada = $cantidadEntregada;

        return $this;
    }

    /**
     * Get cantidadEntregada
     *
     * @return string 
     */
    public function getCantidadEntregada()
    {
        return $this->cantidadEntregada;
    }

    /**
     * Set reservadas
     *
     * @param string $reservadas
     * @return DetalleValesalida
     */
    public function setReservadas($reservadas)
    {
        $this->reservadas = $reservadas;

        return $this;
    }

    /**
     * Get reservadas
     *
     * @return string 
     */
    public function getReservadas()
    {
        return $this->reservadas;
    }

    /**
     * Set saldoDisponible
     *
     * @param string $saldoDisponible
     * @return DetalleValesalida
     */
    public function setSaldoDisponible($saldoDisponible)
    {
        $this->saldoDisponible = $saldoDisponible;

        return $this;
    }

    /**
     * Get saldoDisponible
     *
     * @return string 
     */
    public function getSaldoDisponible()
    {
        return $this->saldoDisponible;
    }

    /**
     * Set saldoExistencia
     *
     * @param string $saldoExistencia
     * @return DetalleValesalida
     */
    public function setSaldoExistencia($saldoExistencia)
    {
        $this->saldoExistencia = $saldoExistencia;

        return $this;
    }

    /**
     * Get saldoExistencia
     *
     * @return string 
     */
    public function getSaldoExistencia()
    {
        return $this->saldoExistencia;
    }

    /**
     * Set precioCostoumalmacenmb
     *
     * @param string $precioCostoumalmacenmb
     * @return DetalleValesalida
     */
    public function setPrecioCostoumalmacenmb($precioCostoumalmacenmb)
    {
        $this->precioCostoumalmacenmb = $precioCostoumalmacenmb;

        return $this;
    }

    /**
     * Get precioCostoumalmacenmb
     *
     * @return string 
     */
    public function getPrecioCostoumalmacenmb()
    {
        return $this->precioCostoumalmacenmb;
    }

    /**
     * Set precioCostoumalmacenmc
     *
     * @param string $precioCostoumalmacenmc
     * @return DetalleValesalida
     */
    public function setPrecioCostoumalmacenmc($precioCostoumalmacenmc)
    {
        $this->precioCostoumalmacenmc = $precioCostoumalmacenmc;

        return $this;
    }

    /**
     * Get precioCostoumalmacenmc
     *
     * @return string 
     */
    public function getPrecioCostoumalmacenmc()
    {
        return $this->precioCostoumalmacenmc;
    }

    /**
     * Set importecostoMb
     *
     * @param integer $importecostoMb
     * @return DetalleValesalida
     */
    public function setImportecostoMb($importecostoMb)
    {
        $this->importecostoMb = $importecostoMb;

        return $this;
    }

    /**
     * Get importecostoMb
     *
     * @return integer 
     */
    public function getImportecostoMb()
    {
        return $this->importecostoMb;
    }

    /**
     * Set importecostoMc
     *
     * @param integer $importecostoMc
     * @return DetalleValesalida
     */
    public function setImportecostoMc($importecostoMc)
    {
        $this->importecostoMc = $importecostoMc;

        return $this;
    }

    /**
     * Get importecostoMc
     *
     * @return integer 
     */
    public function getImportecostoMc()
    {
        return $this->importecostoMc;
    }

    /**
     * Set idElemgasto
     *
     * @param string $idElemgasto
     * @return DetalleValesalida
     */
    public function setIdElemgasto($idElemgasto)
    {
        $this->idElemgasto = $idElemgasto;

        return $this;
    }

    /**
     * Get idElemgasto
     *
     * @return string 
     */
    public function getIdElemgasto()
    {
        return $this->idElemgasto;
    }

    /**
     * Set idSubelemgasto
     *
     * @param string $idSubelemgasto
     * @return DetalleValesalida
     */
    public function setIdSubelemgasto($idSubelemgasto)
    {
        $this->idSubelemgasto = $idSubelemgasto;

        return $this;
    }

    /**
     * Get idSubelemgasto
     *
     * @return string 
     */
    public function getIdSubelemgasto()
    {
        return $this->idSubelemgasto;
    }

    /**
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return DetalleValesalida
     */
    public function setIdActivofijo($idActivofijo)
    {
        $this->idActivofijo = $idActivofijo;

        return $this;
    }

    /**
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return DetalleValesalida
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
     * Set idInsumo
     *
     * @param string $idInsumo
     * @return DetalleValesalida
     */
    public function setIdInsumo($idInsumo)
    {
        $this->idInsumo = $idInsumo;

        return $this;
    }

    /**
     * Get idInsumo
     *
     * @return string 
     */
    public function getIdInsumo()
    {
        return $this->idInsumo;
    }

    /**
     * Set precioVentaumalmacenmb
     *
     * @param string $precioVentaumalmacenmb
     * @return DetalleValesalida
     */
    public function setPrecioVentaumalmacenmb($precioVentaumalmacenmb)
    {
        $this->precioVentaumalmacenmb = $precioVentaumalmacenmb;

        return $this;
    }

    /**
     * Get precioVentaumalmacenmb
     *
     * @return string 
     */
    public function getPrecioVentaumalmacenmb()
    {
        return $this->precioVentaumalmacenmb;
    }

    /**
     * Set precioVentaumalmacenmc
     *
     * @param string $precioVentaumalmacenmc
     * @return DetalleValesalida
     */
    public function setPrecioVentaumalmacenmc($precioVentaumalmacenmc)
    {
        $this->precioVentaumalmacenmc = $precioVentaumalmacenmc;

        return $this;
    }

    /**
     * Get precioVentaumalmacenmc
     *
     * @return string 
     */
    public function getPrecioVentaumalmacenmc()
    {
        return $this->precioVentaumalmacenmc;
    }

    /**
     * Set etapa
     *
     * @param string $etapa
     * @return DetalleValesalida
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get etapa
     *
     * @return string 
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set idElemgastomc
     *
     * @param string $idElemgastomc
     * @return DetalleValesalida
     */
    public function setIdElemgastomc($idElemgastomc)
    {
        $this->idElemgastomc = $idElemgastomc;

        return $this;
    }

    /**
     * Get idElemgastomc
     *
     * @return string 
     */
    public function getIdElemgastomc()
    {
        return $this->idElemgastomc;
    }

    /**
     * Set idSubelemgastomc
     *
     * @param string $idSubelemgastomc
     * @return DetalleValesalida
     */
    public function setIdSubelemgastomc($idSubelemgastomc)
    {
        $this->idSubelemgastomc = $idSubelemgastomc;

        return $this;
    }

    /**
     * Get idSubelemgastomc
     *
     * @return string 
     */
    public function getIdSubelemgastomc()
    {
        return $this->idSubelemgastomc;
    }

    /**
     * Set seccion
     *
     * @param string $seccion
     * @return DetalleValesalida
     */
    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;

        return $this;
    }

    /**
     * Get seccion
     *
     * @return string 
     */
    public function getSeccion()
    {
        return $this->seccion;
    }

    /**
     * Set estante
     *
     * @param string $estante
     * @return DetalleValesalida
     */
    public function setEstante($estante)
    {
        $this->estante = $estante;

        return $this;
    }

    /**
     * Get estante
     *
     * @return string 
     */
    public function getEstante()
    {
        return $this->estante;
    }

    /**
     * Set casilla
     *
     * @param string $casilla
     * @return DetalleValesalida
     */
    public function setCasilla($casilla)
    {
        $this->casilla = $casilla;

        return $this;
    }

    /**
     * Get casilla
     *
     * @return string 
     */
    public function getCasilla()
    {
        return $this->casilla;
    }

    /**
     * Set cantidadDevuelta
     *
     * @param string $cantidadDevuelta
     * @return DetalleValesalida
     */
    public function setCantidadDevuelta($cantidadDevuelta)
    {
        $this->cantidadDevuelta = $cantidadDevuelta;

        return $this;
    }

    /**
     * Get cantidadDevuelta
     *
     * @return string 
     */
    public function getCantidadDevuelta()
    {
        return $this->cantidadDevuelta;
    }

    /**
     * Set paquete
     *
     * @param string $paquete
     * @return DetalleValesalida
     */
    public function setPaquete($paquete)
    {
        $this->paquete = $paquete;

        return $this;
    }

    /**
     * Get paquete
     *
     * @return string 
     */
    public function getPaquete()
    {
        return $this->paquete;
    }

    /**
     * Set bultos
     *
     * @param string $bultos
     * @return DetalleValesalida
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
     * Set importeDevueltomb
     *
     * @param integer $importeDevueltomb
     * @return DetalleValesalida
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
     * @return DetalleValesalida
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
     * Set idDestino
     *
     * @param string $idDestino
     * @return DetalleValesalida
     */
    public function setIdDestino($idDestino)
    {
        $this->idDestino = $idDestino;

        return $this;
    }

    /**
     * Get idDestino
     *
     * @return string 
     */
    public function getIdDestino()
    {
        return $this->idDestino;
    }

    /**
     * Set idActividad
     *
     * @param string $idActividad
     * @return DetalleValesalida
     */
    public function setIdActividad($idActividad)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad
     *
     * @return string 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set precioconsigna
     *
     * @param integer $precioconsigna
     * @return DetalleValesalida
     */
    public function setPrecioconsigna($precioconsigna)
    {
        $this->precioconsigna = $precioconsigna;

        return $this;
    }

    /**
     * Get precioconsigna
     *
     * @return integer 
     */
    public function getPrecioconsigna()
    {
        return $this->precioconsigna;
    }

    /**
     * Set lotesm
     *
     * @param string $lotesm
     * @return DetalleValesalida
     */
    public function setLotesm($lotesm)
    {
        $this->lotesm = $lotesm;

        return $this;
    }

    /**
     * Get lotesm
     *
     * @return string 
     */
    public function getLotesm()
    {
        return $this->lotesm;
    }

    /**
     * Set irconsigna
     *
     * @param string $irconsigna
     * @return DetalleValesalida
     */
    public function setIrconsigna($irconsigna)
    {
        $this->irconsigna = $irconsigna;

        return $this;
    }

    /**
     * Get irconsigna
     *
     * @return string 
     */
    public function getIrconsigna()
    {
        return $this->irconsigna;
    }

    /**
     * Set contairconsigna
     *
     * @param integer $contairconsigna
     * @return DetalleValesalida
     */
    public function setContairconsigna($contairconsigna)
    {
        $this->contairconsigna = $contairconsigna;

        return $this;
    }

    /**
     * Get contairconsigna
     *
     * @return integer 
     */
    public function getContairconsigna()
    {
        return $this->contairconsigna;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return DetalleValesalida
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
     * @return DetalleValesalida
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
     * Set empaque
     *
     * @param integer $empaque
     * @return DetalleValesalida
     */
    public function setEmpaque($empaque)
    {
        $this->empaque = $empaque;

        return $this;
    }

    /**
     * Get empaque
     *
     * @return integer 
     */
    public function getEmpaque()
    {
        return $this->empaque;
    }

    /**
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return DetalleValesalida
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
     * Set factorempaque
     *
     * @param string $factorempaque
     * @return DetalleValesalida
     */
    public function setFactorempaque($factorempaque)
    {
        $this->factorempaque = $factorempaque;

        return $this;
    }

    /**
     * Get factorempaque
     *
     * @return string 
     */
    public function getFactorempaque()
    {
        return $this->factorempaque;
    }
}
