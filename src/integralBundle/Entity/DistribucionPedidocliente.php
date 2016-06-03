<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DistribucionPedidocliente
 *
 * @ORM\Table(name="Distribucion_PedidoCliente", indexes={@ORM\Index(name="IX_Distribucion_PedidoCliente", columns={"Contador"})})
 * @ORM\Entity
 */
class DistribucionPedidocliente
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
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Pedida", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidadPedida;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_a_Facturar", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidadAFacturar;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Facturada", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidadFacturada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Generar_Orden", type="boolean", nullable=false)
     */
    private $generarOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=15, nullable=false)
     */
    private $referencia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Generar_Vale", type="boolean", nullable=false)
     */
    private $generarVale;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmaVale", type="string", length=5, nullable=false)
     */
    private $idAlmavale;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;



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
     * @return DistribucionPedidocliente
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
     * @return DistribucionPedidocliente
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return DistribucionPedidocliente
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
     * @return DistribucionPedidocliente
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
     * Set idProducto
     *
     * @param string $idProducto
     * @return DistribucionPedidocliente
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
     * Set cantidadPedida
     *
     * @param string $cantidadPedida
     * @return DistribucionPedidocliente
     */
    public function setCantidadPedida($cantidadPedida)
    {
        $this->cantidadPedida = $cantidadPedida;

        return $this;
    }

    /**
     * Get cantidadPedida
     *
     * @return string 
     */
    public function getCantidadPedida()
    {
        return $this->cantidadPedida;
    }

    /**
     * Set cantidadAFacturar
     *
     * @param string $cantidadAFacturar
     * @return DistribucionPedidocliente
     */
    public function setCantidadAFacturar($cantidadAFacturar)
    {
        $this->cantidadAFacturar = $cantidadAFacturar;

        return $this;
    }

    /**
     * Get cantidadAFacturar
     *
     * @return string 
     */
    public function getCantidadAFacturar()
    {
        return $this->cantidadAFacturar;
    }

    /**
     * Set cantidadFacturada
     *
     * @param string $cantidadFacturada
     * @return DistribucionPedidocliente
     */
    public function setCantidadFacturada($cantidadFacturada)
    {
        $this->cantidadFacturada = $cantidadFacturada;

        return $this;
    }

    /**
     * Get cantidadFacturada
     *
     * @return string 
     */
    public function getCantidadFacturada()
    {
        return $this->cantidadFacturada;
    }

    /**
     * Set generarOrden
     *
     * @param boolean $generarOrden
     * @return DistribucionPedidocliente
     */
    public function setGenerarOrden($generarOrden)
    {
        $this->generarOrden = $generarOrden;

        return $this;
    }

    /**
     * Get generarOrden
     *
     * @return boolean 
     */
    public function getGenerarOrden()
    {
        return $this->generarOrden;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return DistribucionPedidocliente
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
     * Set generarVale
     *
     * @param boolean $generarVale
     * @return DistribucionPedidocliente
     */
    public function setGenerarVale($generarVale)
    {
        $this->generarVale = $generarVale;

        return $this;
    }

    /**
     * Get generarVale
     *
     * @return boolean 
     */
    public function getGenerarVale()
    {
        return $this->generarVale;
    }

    /**
     * Set idAlmavale
     *
     * @param string $idAlmavale
     * @return DistribucionPedidocliente
     */
    public function setIdAlmavale($idAlmavale)
    {
        $this->idAlmavale = $idAlmavale;

        return $this;
    }

    /**
     * Get idAlmavale
     *
     * @return string 
     */
    public function getIdAlmavale()
    {
        return $this->idAlmavale;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return DistribucionPedidocliente
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
}
