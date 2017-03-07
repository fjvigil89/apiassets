<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleOrdencompra
 *
 * @ORM\Table(name="Detalle_OrdenCompra", indexes={@ORM\Index(name="IX_Detalle_OrdenCompra_1", columns={"Contador"}), @ORM\Index(name="IX_Detalle_OrdenCompra", columns={"Id_Almacen", "Id_Producto"})})
 * @ORM\Entity
 */
class DetalleOrdencompra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_OrdenCompra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdencompra;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_OrdenCompra", type="smallint", nullable=false)
     */
    private $anoOrdencompra;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ProdProveedor", type="string", length=30, nullable=false)
     */
    private $idProdproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_ProdProveedor", type="string", length=255, nullable=false)
     */
    private $nombreProdproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Um_Proveedor", type="string", length=5, nullable=false)
     */
    private $umProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Ordenada", type="decimal", precision=13, scale=4, nullable=false)
     */
    private $cantidadOrdenada;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Recibida", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidadRecibida;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoProveedor", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostoproveedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoProveedorMn", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostoproveedormn;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMN", type="integer", nullable=false)
     */
    private $importemn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrada", type="boolean", nullable=false)
     */
    private $cerrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="integer", nullable=false)
     */
    private $items;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Resto", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $resto;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado", type="boolean", nullable=false)
     */
    private $cerrado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Entrega", type="datetime", nullable=false)
     */
    private $fechaEntrega;



    /**
     * Get idOrdencompra
     *
     * @return integer 
     */
    public function getIdOrdencompra()
    {
        return $this->idOrdencompra;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetalleOrdencompra
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
     * Set anoOrdencompra
     *
     * @param integer $anoOrdencompra
     * @return DetalleOrdencompra
     */
    public function setAnoOrdencompra($anoOrdencompra)
    {
        $this->anoOrdencompra = $anoOrdencompra;

        return $this;
    }

    /**
     * Get anoOrdencompra
     *
     * @return integer 
     */
    public function getAnoOrdencompra()
    {
        return $this->anoOrdencompra;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return DetalleOrdencompra
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
     * Set idProdproveedor
     *
     * @param string $idProdproveedor
     * @return DetalleOrdencompra
     */
    public function setIdProdproveedor($idProdproveedor)
    {
        $this->idProdproveedor = $idProdproveedor;

        return $this;
    }

    /**
     * Get idProdproveedor
     *
     * @return string 
     */
    public function getIdProdproveedor()
    {
        return $this->idProdproveedor;
    }

    /**
     * Set nombreProdproveedor
     *
     * @param string $nombreProdproveedor
     * @return DetalleOrdencompra
     */
    public function setNombreProdproveedor($nombreProdproveedor)
    {
        $this->nombreProdproveedor = $nombreProdproveedor;

        return $this;
    }

    /**
     * Get nombreProdproveedor
     *
     * @return string 
     */
    public function getNombreProdproveedor()
    {
        return $this->nombreProdproveedor;
    }

    /**
     * Set umProveedor
     *
     * @param string $umProveedor
     * @return DetalleOrdencompra
     */
    public function setUmProveedor($umProveedor)
    {
        $this->umProveedor = $umProveedor;

        return $this;
    }

    /**
     * Get umProveedor
     *
     * @return string 
     */
    public function getUmProveedor()
    {
        return $this->umProveedor;
    }

    /**
     * Set cantidadOrdenada
     *
     * @param string $cantidadOrdenada
     * @return DetalleOrdencompra
     */
    public function setCantidadOrdenada($cantidadOrdenada)
    {
        $this->cantidadOrdenada = $cantidadOrdenada;

        return $this;
    }

    /**
     * Get cantidadOrdenada
     *
     * @return string 
     */
    public function getCantidadOrdenada()
    {
        return $this->cantidadOrdenada;
    }

    /**
     * Set cantidadRecibida
     *
     * @param string $cantidadRecibida
     * @return DetalleOrdencompra
     */
    public function setCantidadRecibida($cantidadRecibida)
    {
        $this->cantidadRecibida = $cantidadRecibida;

        return $this;
    }

    /**
     * Get cantidadRecibida
     *
     * @return string 
     */
    public function getCantidadRecibida()
    {
        return $this->cantidadRecibida;
    }

    /**
     * Set precioCostoproveedor
     *
     * @param string $precioCostoproveedor
     * @return DetalleOrdencompra
     */
    public function setPrecioCostoproveedor($precioCostoproveedor)
    {
        $this->precioCostoproveedor = $precioCostoproveedor;

        return $this;
    }

    /**
     * Get precioCostoproveedor
     *
     * @return string 
     */
    public function getPrecioCostoproveedor()
    {
        return $this->precioCostoproveedor;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return DetalleOrdencompra
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
     * Set precioCostoproveedormn
     *
     * @param string $precioCostoproveedormn
     * @return DetalleOrdencompra
     */
    public function setPrecioCostoproveedormn($precioCostoproveedormn)
    {
        $this->precioCostoproveedormn = $precioCostoproveedormn;

        return $this;
    }

    /**
     * Get precioCostoproveedormn
     *
     * @return string 
     */
    public function getPrecioCostoproveedormn()
    {
        return $this->precioCostoproveedormn;
    }

    /**
     * Set importemn
     *
     * @param integer $importemn
     * @return DetalleOrdencompra
     */
    public function setImportemn($importemn)
    {
        $this->importemn = $importemn;

        return $this;
    }

    /**
     * Get importemn
     *
     * @return integer 
     */
    public function getImportemn()
    {
        return $this->importemn;
    }

    /**
     * Set cerrada
     *
     * @param boolean $cerrada
     * @return DetalleOrdencompra
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
     * Set items
     *
     * @param integer $items
     * @return DetalleOrdencompra
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
     * Set contador
     *
     * @param integer $contador
     * @return DetalleOrdencompra
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
     * Set resto
     *
     * @param string $resto
     * @return DetalleOrdencompra
     */
    public function setResto($resto)
    {
        $this->resto = $resto;

        return $this;
    }

    /**
     * Get resto
     *
     * @return string 
     */
    public function getResto()
    {
        return $this->resto;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return DetalleOrdencompra
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
     * Set cerrado
     *
     * @param boolean $cerrado
     * @return DetalleOrdencompra
     */
    public function setCerrado($cerrado)
    {
        $this->cerrado = $cerrado;

        return $this;
    }

    /**
     * Get cerrado
     *
     * @return boolean 
     */
    public function getCerrado()
    {
        return $this->cerrado;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return DetalleOrdencompra
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
}
