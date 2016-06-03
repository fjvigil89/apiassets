<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetallesGenocompra
 *
 * @ORM\Table(name="Detalles_genOcompra")
 * @ORM\Entity
 */
class DetallesGenocompra
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
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="smallint", nullable=false)
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
     * @ORM\Column(name="Desc_Producto", type="string", length=200, nullable=false)
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
     * @ORM\Column(name="Cantidad", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor1", type="string", length=15, nullable=false)
     */
    private $idProveedor1;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoMB1", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostomb1;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoMC1", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostomc1;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor2", type="string", length=15, nullable=false)
     */
    private $idProveedor2;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoMB2", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostomb2;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoMC2", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostomc2;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor3", type="string", length=15, nullable=false)
     */
    private $idProveedor3;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoMB3", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostomb3;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoMC3", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostomc3;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Factura", type="string", length=20, nullable=false)
     */
    private $factura;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaFactura", type="integer", nullable=false)
     */
    private $contafactura;

    /**
     * @var string
     *
     * @ORM\Column(name="dias_demora", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $diasDemora;

    /**
     * @var string
     *
     * @ORM\Column(name="Maximo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $maximo;

    /**
     * @var string
     *
     * @ORM\Column(name="Pto_Reorder", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $ptoReorder;

    /**
     * @var string
     *
     * @ORM\Column(name="Venta_Promedio", type="decimal", precision=19, scale=4, nullable=false)
     */
    private $ventaPromedio;

    /**
     * @var string
     *
     * @ORM\Column(name="minimo_pedir", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $minimoPedir;

    /**
     * @var string
     *
     * @ORM\Column(name="Existencia_Actual", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $existenciaActual;



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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetallesGenocompra
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
     * @return DetallesGenocompra
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
     * @return DetallesGenocompra
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
     * Set descProducto
     *
     * @param string $descProducto
     * @return DetallesGenocompra
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
     * @return DetallesGenocompra
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
     * Set cantidad
     *
     * @param string $cantidad
     * @return DetallesGenocompra
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set idProveedor1
     *
     * @param string $idProveedor1
     * @return DetallesGenocompra
     */
    public function setIdProveedor1($idProveedor1)
    {
        $this->idProveedor1 = $idProveedor1;

        return $this;
    }

    /**
     * Get idProveedor1
     *
     * @return string 
     */
    public function getIdProveedor1()
    {
        return $this->idProveedor1;
    }

    /**
     * Set precioCostomb1
     *
     * @param string $precioCostomb1
     * @return DetallesGenocompra
     */
    public function setPrecioCostomb1($precioCostomb1)
    {
        $this->precioCostomb1 = $precioCostomb1;

        return $this;
    }

    /**
     * Get precioCostomb1
     *
     * @return string 
     */
    public function getPrecioCostomb1()
    {
        return $this->precioCostomb1;
    }

    /**
     * Set precioCostomc1
     *
     * @param string $precioCostomc1
     * @return DetallesGenocompra
     */
    public function setPrecioCostomc1($precioCostomc1)
    {
        $this->precioCostomc1 = $precioCostomc1;

        return $this;
    }

    /**
     * Get precioCostomc1
     *
     * @return string 
     */
    public function getPrecioCostomc1()
    {
        return $this->precioCostomc1;
    }

    /**
     * Set idProveedor2
     *
     * @param string $idProveedor2
     * @return DetallesGenocompra
     */
    public function setIdProveedor2($idProveedor2)
    {
        $this->idProveedor2 = $idProveedor2;

        return $this;
    }

    /**
     * Get idProveedor2
     *
     * @return string 
     */
    public function getIdProveedor2()
    {
        return $this->idProveedor2;
    }

    /**
     * Set precioCostomb2
     *
     * @param string $precioCostomb2
     * @return DetallesGenocompra
     */
    public function setPrecioCostomb2($precioCostomb2)
    {
        $this->precioCostomb2 = $precioCostomb2;

        return $this;
    }

    /**
     * Get precioCostomb2
     *
     * @return string 
     */
    public function getPrecioCostomb2()
    {
        return $this->precioCostomb2;
    }

    /**
     * Set precioCostomc2
     *
     * @param string $precioCostomc2
     * @return DetallesGenocompra
     */
    public function setPrecioCostomc2($precioCostomc2)
    {
        $this->precioCostomc2 = $precioCostomc2;

        return $this;
    }

    /**
     * Get precioCostomc2
     *
     * @return string 
     */
    public function getPrecioCostomc2()
    {
        return $this->precioCostomc2;
    }

    /**
     * Set idProveedor3
     *
     * @param string $idProveedor3
     * @return DetallesGenocompra
     */
    public function setIdProveedor3($idProveedor3)
    {
        $this->idProveedor3 = $idProveedor3;

        return $this;
    }

    /**
     * Get idProveedor3
     *
     * @return string 
     */
    public function getIdProveedor3()
    {
        return $this->idProveedor3;
    }

    /**
     * Set precioCostomb3
     *
     * @param string $precioCostomb3
     * @return DetallesGenocompra
     */
    public function setPrecioCostomb3($precioCostomb3)
    {
        $this->precioCostomb3 = $precioCostomb3;

        return $this;
    }

    /**
     * Get precioCostomb3
     *
     * @return string 
     */
    public function getPrecioCostomb3()
    {
        return $this->precioCostomb3;
    }

    /**
     * Set precioCostomc3
     *
     * @param string $precioCostomc3
     * @return DetallesGenocompra
     */
    public function setPrecioCostomc3($precioCostomc3)
    {
        $this->precioCostomc3 = $precioCostomc3;

        return $this;
    }

    /**
     * Get precioCostomc3
     *
     * @return string 
     */
    public function getPrecioCostomc3()
    {
        return $this->precioCostomc3;
    }

    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return DetallesGenocompra
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
     * Set factura
     *
     * @param string $factura
     * @return DetallesGenocompra
     */
    public function setFactura($factura)
    {
        $this->factura = $factura;

        return $this;
    }

    /**
     * Get factura
     *
     * @return string 
     */
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set contafactura
     *
     * @param integer $contafactura
     * @return DetallesGenocompra
     */
    public function setContafactura($contafactura)
    {
        $this->contafactura = $contafactura;

        return $this;
    }

    /**
     * Get contafactura
     *
     * @return integer 
     */
    public function getContafactura()
    {
        return $this->contafactura;
    }

    /**
     * Set diasDemora
     *
     * @param string $diasDemora
     * @return DetallesGenocompra
     */
    public function setDiasDemora($diasDemora)
    {
        $this->diasDemora = $diasDemora;

        return $this;
    }

    /**
     * Get diasDemora
     *
     * @return string 
     */
    public function getDiasDemora()
    {
        return $this->diasDemora;
    }

    /**
     * Set maximo
     *
     * @param string $maximo
     * @return DetallesGenocompra
     */
    public function setMaximo($maximo)
    {
        $this->maximo = $maximo;

        return $this;
    }

    /**
     * Get maximo
     *
     * @return string 
     */
    public function getMaximo()
    {
        return $this->maximo;
    }

    /**
     * Set ptoReorder
     *
     * @param string $ptoReorder
     * @return DetallesGenocompra
     */
    public function setPtoReorder($ptoReorder)
    {
        $this->ptoReorder = $ptoReorder;

        return $this;
    }

    /**
     * Get ptoReorder
     *
     * @return string 
     */
    public function getPtoReorder()
    {
        return $this->ptoReorder;
    }

    /**
     * Set ventaPromedio
     *
     * @param string $ventaPromedio
     * @return DetallesGenocompra
     */
    public function setVentaPromedio($ventaPromedio)
    {
        $this->ventaPromedio = $ventaPromedio;

        return $this;
    }

    /**
     * Get ventaPromedio
     *
     * @return string 
     */
    public function getVentaPromedio()
    {
        return $this->ventaPromedio;
    }

    /**
     * Set minimoPedir
     *
     * @param string $minimoPedir
     * @return DetallesGenocompra
     */
    public function setMinimoPedir($minimoPedir)
    {
        $this->minimoPedir = $minimoPedir;

        return $this;
    }

    /**
     * Get minimoPedir
     *
     * @return string 
     */
    public function getMinimoPedir()
    {
        return $this->minimoPedir;
    }

    /**
     * Set existenciaActual
     *
     * @param string $existenciaActual
     * @return DetallesGenocompra
     */
    public function setExistenciaActual($existenciaActual)
    {
        $this->existenciaActual = $existenciaActual;

        return $this;
    }

    /**
     * Get existenciaActual
     *
     * @return string 
     */
    public function getExistenciaActual()
    {
        return $this->existenciaActual;
    }
}
