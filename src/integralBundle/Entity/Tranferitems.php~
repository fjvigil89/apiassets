<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tranferitems
 *
 * @ORM\Table(name="TranferItems")
 * @ORM\Entity
 */
class Tranferitems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SPID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpid;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="integer", nullable=false)
     */
    private $items;

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
     * @var integer
     *
     * @ORM\Column(name="Cantidad_Factura", type="integer", nullable=false)
     */
    private $cantidadFactura;

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
     * @ORM\Column(name="Precio_VentaMB", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $precioVentamb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaMC", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $precioVentamc;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaTotalMB", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $precioVentatotalmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaTotalMC", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $precioVentatotalmc;

    /**
     * @var string
     *
     * @ORM\Column(name="DescuentoMB", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $descuentomb;

    /**
     * @var string
     *
     * @ORM\Column(name="DescuentoMC", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $descuentomc;

    /**
     * @var string
     *
     * @ORM\Column(name="RecargoMB", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $recargomb;

    /**
     * @var string
     *
     * @ORM\Column(name="RecargoMC", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $recargomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoRecargoMB", type="smallint", nullable=false)
     */
    private $tiporecargomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoRecargoMC", type="smallint", nullable=false)
     */
    private $tiporecargomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoDescuentoMB", type="smallint", nullable=false)
     */
    private $tipodescuentomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoDescuentoMC", type="smallint", nullable=false)
     */
    private $tipodescuentomc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnCatalogo", type="boolean", nullable=false)
     */
    private $encatalogo;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_Venta_Original", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $precioVentaOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="Paquete", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $paquete;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Producto_oServicio", type="boolean", nullable=false)
     */
    private $productoOservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto_Caja", type="string", length=60, nullable=false)
     */
    private $descProductoCaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Ean13", type="string", length=13, nullable=false)
     */
    private $ean13;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Ean13", type="string", length=100, nullable=false)
     */
    private $descEan13;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdEspec", type="integer", nullable=false)
     */
    private $idespec;

    /**
     * @var string
     *
     * @ORM\Column(name="DescEspec", type="string", length=255, nullable=false)
     */
    private $descespec;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdMarca", type="integer", nullable=false)
     */
    private $idmarca;

    /**
     * @var string
     *
     * @ORM\Column(name="DescMarca", type="string", length=255, nullable=false)
     */
    private $descmarca;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ProdCat", type="string", length=20, nullable=false)
     */
    private $idProdcat;

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
     * @ORM\Column(name="FactorEmpaque", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $factorempaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Empaque", type="integer", nullable=false)
     */
    private $empaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cubicaje", type="integer", nullable=false)
     */
    private $cubicaje;



    /**
     * Get idSpid
     *
     * @return integer 
     */
    public function getIdSpid()
    {
        return $this->idSpid;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return Tranferitems
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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Tranferitems
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
     * Set items
     *
     * @param integer $items
     * @return Tranferitems
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
     * Set idProducto
     *
     * @param string $idProducto
     * @return Tranferitems
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
     * @return Tranferitems
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
     * @return Tranferitems
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
     * @return Tranferitems
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
     * Set cantidadFactura
     *
     * @param integer $cantidadFactura
     * @return Tranferitems
     */
    public function setCantidadFactura($cantidadFactura)
    {
        $this->cantidadFactura = $cantidadFactura;

        return $this;
    }

    /**
     * Get cantidadFactura
     *
     * @return integer 
     */
    public function getCantidadFactura()
    {
        return $this->cantidadFactura;
    }

    /**
     * Set saldoDisponible
     *
     * @param string $saldoDisponible
     * @return Tranferitems
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
     * @return Tranferitems
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
     * Set precioVentamb
     *
     * @param string $precioVentamb
     * @return Tranferitems
     */
    public function setPrecioVentamb($precioVentamb)
    {
        $this->precioVentamb = $precioVentamb;

        return $this;
    }

    /**
     * Get precioVentamb
     *
     * @return string 
     */
    public function getPrecioVentamb()
    {
        return $this->precioVentamb;
    }

    /**
     * Set precioVentamc
     *
     * @param string $precioVentamc
     * @return Tranferitems
     */
    public function setPrecioVentamc($precioVentamc)
    {
        $this->precioVentamc = $precioVentamc;

        return $this;
    }

    /**
     * Get precioVentamc
     *
     * @return string 
     */
    public function getPrecioVentamc()
    {
        return $this->precioVentamc;
    }

    /**
     * Set precioVentatotalmb
     *
     * @param string $precioVentatotalmb
     * @return Tranferitems
     */
    public function setPrecioVentatotalmb($precioVentatotalmb)
    {
        $this->precioVentatotalmb = $precioVentatotalmb;

        return $this;
    }

    /**
     * Get precioVentatotalmb
     *
     * @return string 
     */
    public function getPrecioVentatotalmb()
    {
        return $this->precioVentatotalmb;
    }

    /**
     * Set precioVentatotalmc
     *
     * @param string $precioVentatotalmc
     * @return Tranferitems
     */
    public function setPrecioVentatotalmc($precioVentatotalmc)
    {
        $this->precioVentatotalmc = $precioVentatotalmc;

        return $this;
    }

    /**
     * Get precioVentatotalmc
     *
     * @return string 
     */
    public function getPrecioVentatotalmc()
    {
        return $this->precioVentatotalmc;
    }

    /**
     * Set descuentomb
     *
     * @param string $descuentomb
     * @return Tranferitems
     */
    public function setDescuentomb($descuentomb)
    {
        $this->descuentomb = $descuentomb;

        return $this;
    }

    /**
     * Get descuentomb
     *
     * @return string 
     */
    public function getDescuentomb()
    {
        return $this->descuentomb;
    }

    /**
     * Set descuentomc
     *
     * @param string $descuentomc
     * @return Tranferitems
     */
    public function setDescuentomc($descuentomc)
    {
        $this->descuentomc = $descuentomc;

        return $this;
    }

    /**
     * Get descuentomc
     *
     * @return string 
     */
    public function getDescuentomc()
    {
        return $this->descuentomc;
    }

    /**
     * Set recargomb
     *
     * @param string $recargomb
     * @return Tranferitems
     */
    public function setRecargomb($recargomb)
    {
        $this->recargomb = $recargomb;

        return $this;
    }

    /**
     * Get recargomb
     *
     * @return string 
     */
    public function getRecargomb()
    {
        return $this->recargomb;
    }

    /**
     * Set recargomc
     *
     * @param string $recargomc
     * @return Tranferitems
     */
    public function setRecargomc($recargomc)
    {
        $this->recargomc = $recargomc;

        return $this;
    }

    /**
     * Get recargomc
     *
     * @return string 
     */
    public function getRecargomc()
    {
        return $this->recargomc;
    }

    /**
     * Set tiporecargomb
     *
     * @param integer $tiporecargomb
     * @return Tranferitems
     */
    public function setTiporecargomb($tiporecargomb)
    {
        $this->tiporecargomb = $tiporecargomb;

        return $this;
    }

    /**
     * Get tiporecargomb
     *
     * @return integer 
     */
    public function getTiporecargomb()
    {
        return $this->tiporecargomb;
    }

    /**
     * Set tiporecargomc
     *
     * @param integer $tiporecargomc
     * @return Tranferitems
     */
    public function setTiporecargomc($tiporecargomc)
    {
        $this->tiporecargomc = $tiporecargomc;

        return $this;
    }

    /**
     * Get tiporecargomc
     *
     * @return integer 
     */
    public function getTiporecargomc()
    {
        return $this->tiporecargomc;
    }

    /**
     * Set tipodescuentomb
     *
     * @param integer $tipodescuentomb
     * @return Tranferitems
     */
    public function setTipodescuentomb($tipodescuentomb)
    {
        $this->tipodescuentomb = $tipodescuentomb;

        return $this;
    }

    /**
     * Get tipodescuentomb
     *
     * @return integer 
     */
    public function getTipodescuentomb()
    {
        return $this->tipodescuentomb;
    }

    /**
     * Set tipodescuentomc
     *
     * @param integer $tipodescuentomc
     * @return Tranferitems
     */
    public function setTipodescuentomc($tipodescuentomc)
    {
        $this->tipodescuentomc = $tipodescuentomc;

        return $this;
    }

    /**
     * Get tipodescuentomc
     *
     * @return integer 
     */
    public function getTipodescuentomc()
    {
        return $this->tipodescuentomc;
    }

    /**
     * Set encatalogo
     *
     * @param boolean $encatalogo
     * @return Tranferitems
     */
    public function setEncatalogo($encatalogo)
    {
        $this->encatalogo = $encatalogo;

        return $this;
    }

    /**
     * Get encatalogo
     *
     * @return boolean 
     */
    public function getEncatalogo()
    {
        return $this->encatalogo;
    }

    /**
     * Set precioVentaOriginal
     *
     * @param string $precioVentaOriginal
     * @return Tranferitems
     */
    public function setPrecioVentaOriginal($precioVentaOriginal)
    {
        $this->precioVentaOriginal = $precioVentaOriginal;

        return $this;
    }

    /**
     * Get precioVentaOriginal
     *
     * @return string 
     */
    public function getPrecioVentaOriginal()
    {
        return $this->precioVentaOriginal;
    }

    /**
     * Set paquete
     *
     * @param string $paquete
     * @return Tranferitems
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
     * Set productoOservicio
     *
     * @param boolean $productoOservicio
     * @return Tranferitems
     */
    public function setProductoOservicio($productoOservicio)
    {
        $this->productoOservicio = $productoOservicio;

        return $this;
    }

    /**
     * Get productoOservicio
     *
     * @return boolean 
     */
    public function getProductoOservicio()
    {
        return $this->productoOservicio;
    }

    /**
     * Set descProductoCaja
     *
     * @param string $descProductoCaja
     * @return Tranferitems
     */
    public function setDescProductoCaja($descProductoCaja)
    {
        $this->descProductoCaja = $descProductoCaja;

        return $this;
    }

    /**
     * Get descProductoCaja
     *
     * @return string 
     */
    public function getDescProductoCaja()
    {
        return $this->descProductoCaja;
    }

    /**
     * Set ean13
     *
     * @param string $ean13
     * @return Tranferitems
     */
    public function setEan13($ean13)
    {
        $this->ean13 = $ean13;

        return $this;
    }

    /**
     * Get ean13
     *
     * @return string 
     */
    public function getEan13()
    {
        return $this->ean13;
    }

    /**
     * Set descEan13
     *
     * @param string $descEan13
     * @return Tranferitems
     */
    public function setDescEan13($descEan13)
    {
        $this->descEan13 = $descEan13;

        return $this;
    }

    /**
     * Get descEan13
     *
     * @return string 
     */
    public function getDescEan13()
    {
        return $this->descEan13;
    }

    /**
     * Set idespec
     *
     * @param integer $idespec
     * @return Tranferitems
     */
    public function setIdespec($idespec)
    {
        $this->idespec = $idespec;

        return $this;
    }

    /**
     * Get idespec
     *
     * @return integer 
     */
    public function getIdespec()
    {
        return $this->idespec;
    }

    /**
     * Set descespec
     *
     * @param string $descespec
     * @return Tranferitems
     */
    public function setDescespec($descespec)
    {
        $this->descespec = $descespec;

        return $this;
    }

    /**
     * Get descespec
     *
     * @return string 
     */
    public function getDescespec()
    {
        return $this->descespec;
    }

    /**
     * Set idmarca
     *
     * @param integer $idmarca
     * @return Tranferitems
     */
    public function setIdmarca($idmarca)
    {
        $this->idmarca = $idmarca;

        return $this;
    }

    /**
     * Get idmarca
     *
     * @return integer 
     */
    public function getIdmarca()
    {
        return $this->idmarca;
    }

    /**
     * Set descmarca
     *
     * @param string $descmarca
     * @return Tranferitems
     */
    public function setDescmarca($descmarca)
    {
        $this->descmarca = $descmarca;

        return $this;
    }

    /**
     * Get descmarca
     *
     * @return string 
     */
    public function getDescmarca()
    {
        return $this->descmarca;
    }

    /**
     * Set idProdcat
     *
     * @param string $idProdcat
     * @return Tranferitems
     */
    public function setIdProdcat($idProdcat)
    {
        $this->idProdcat = $idProdcat;

        return $this;
    }

    /**
     * Get idProdcat
     *
     * @return string 
     */
    public function getIdProdcat()
    {
        return $this->idProdcat;
    }

    /**
     * Set precioCostoumalmacenmb
     *
     * @param string $precioCostoumalmacenmb
     * @return Tranferitems
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
     * @return Tranferitems
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
     * Set seccion
     *
     * @param string $seccion
     * @return Tranferitems
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
     * @return Tranferitems
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
     * @return Tranferitems
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
     * Set factorempaque
     *
     * @param string $factorempaque
     * @return Tranferitems
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

    /**
     * Set empaque
     *
     * @param integer $empaque
     * @return Tranferitems
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
     * Set cubicaje
     *
     * @param integer $cubicaje
     * @return Tranferitems
     */
    public function setCubicaje($cubicaje)
    {
        $this->cubicaje = $cubicaje;

        return $this;
    }

    /**
     * Get cubicaje
     *
     * @return integer 
     */
    public function getCubicaje()
    {
        return $this->cubicaje;
    }
}
