<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tranferventas
 *
 * @ORM\Table(name="TranferVentas")
 * @ORM\Entity
 */
class Tranferventas
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
     * @var integer
     *
     * @ORM\Column(name="ItemsComp", type="smallint", nullable=false)
     */
    private $itemscomp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Lista_Precio", type="smallint", nullable=false)
     */
    private $listaPrecio;



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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * @return Tranferventas
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
     * Set itemscomp
     *
     * @param integer $itemscomp
     * @return Tranferventas
     */
    public function setItemscomp($itemscomp)
    {
        $this->itemscomp = $itemscomp;

        return $this;
    }

    /**
     * Get itemscomp
     *
     * @return integer 
     */
    public function getItemscomp()
    {
        return $this->itemscomp;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return Tranferventas
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
     * Set listaPrecio
     *
     * @param integer $listaPrecio
     * @return Tranferventas
     */
    public function setListaPrecio($listaPrecio)
    {
        $this->listaPrecio = $listaPrecio;

        return $this;
    }

    /**
     * Get listaPrecio
     *
     * @return integer 
     */
    public function getListaPrecio()
    {
        return $this->listaPrecio;
    }
}
