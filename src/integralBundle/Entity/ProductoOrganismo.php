<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoOrganismo
 *
 * @ORM\Table(name="Producto_Organismo", indexes={@ORM\Index(name="IX_Producto_Cliente", columns={"Id_Cliente", "Id_Producto"})})
 * @ORM\Entity
 */
class ProductoOrganismo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ProdDelCliente", type="string", length=20, nullable=false)
     */
    private $idProddelcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_VentaUMAlmacenMB", type="integer", nullable=false)
     */
    private $precioVentaumalmacenmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_VentaUMAlmacenMC", type="integer", nullable=false)
     */
    private $precioVentaumalmacenmc;



    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return ProductoOrganismo
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return ProductoOrganismo
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
     * Set idProddelcliente
     *
     * @param string $idProddelcliente
     * @return ProductoOrganismo
     */
    public function setIdProddelcliente($idProddelcliente)
    {
        $this->idProddelcliente = $idProddelcliente;

        return $this;
    }

    /**
     * Get idProddelcliente
     *
     * @return string 
     */
    public function getIdProddelcliente()
    {
        return $this->idProddelcliente;
    }

    /**
     * Set precioVentaumalmacenmb
     *
     * @param integer $precioVentaumalmacenmb
     * @return ProductoOrganismo
     */
    public function setPrecioVentaumalmacenmb($precioVentaumalmacenmb)
    {
        $this->precioVentaumalmacenmb = $precioVentaumalmacenmb;

        return $this;
    }

    /**
     * Get precioVentaumalmacenmb
     *
     * @return integer 
     */
    public function getPrecioVentaumalmacenmb()
    {
        return $this->precioVentaumalmacenmb;
    }

    /**
     * Set precioVentaumalmacenmc
     *
     * @param integer $precioVentaumalmacenmc
     * @return ProductoOrganismo
     */
    public function setPrecioVentaumalmacenmc($precioVentaumalmacenmc)
    {
        $this->precioVentaumalmacenmc = $precioVentaumalmacenmc;

        return $this;
    }

    /**
     * Get precioVentaumalmacenmc
     *
     * @return integer 
     */
    public function getPrecioVentaumalmacenmc()
    {
        return $this->precioVentaumalmacenmc;
    }
}
