<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClienteProductos
 *
 * @ORM\Table(name="Cliente_Productos", indexes={@ORM\Index(name="Ix_Cliente_Prod1", columns={"Id_Cliente", "Id_Producto"})})
 * @ORM\Entity
 */
class ClienteProductos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=10, nullable=false)
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="UM_Venta", type="string", length=5, nullable=false)
     */
    private $umVenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Frecuencia_Compra", type="integer", nullable=false)
     */
    private $frecuenciaCompra;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad", type="integer", nullable=false)
     */
    private $cantidad;



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
     * Set idProducto
     *
     * @param string $idProducto
     * @return ClienteProductos
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return ClienteProductos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set idCategoria
     *
     * @param string $idCategoria
     * @return ClienteProductos
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return string 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set umVenta
     *
     * @param string $umVenta
     * @return ClienteProductos
     */
    public function setUmVenta($umVenta)
    {
        $this->umVenta = $umVenta;

        return $this;
    }

    /**
     * Get umVenta
     *
     * @return string 
     */
    public function getUmVenta()
    {
        return $this->umVenta;
    }

    /**
     * Set frecuenciaCompra
     *
     * @param integer $frecuenciaCompra
     * @return ClienteProductos
     */
    public function setFrecuenciaCompra($frecuenciaCompra)
    {
        $this->frecuenciaCompra = $frecuenciaCompra;

        return $this;
    }

    /**
     * Get frecuenciaCompra
     *
     * @return integer 
     */
    public function getFrecuenciaCompra()
    {
        return $this->frecuenciaCompra;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return ClienteProductos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}
