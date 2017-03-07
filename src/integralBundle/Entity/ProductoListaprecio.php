<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoListaprecio
 *
 * @ORM\Table(name="Producto_ListaPrecio")
 * @ORM\Entity
 */
class ProductoListaprecio
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Lista", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLista;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_VentaUsd", type="integer", nullable=false)
     */
    private $precioVentausd;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_VentaMn", type="integer", nullable=false)
     */
    private $precioVentamn;



    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return ProductoListaprecio
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
     * Set idLista
     *
     * @param string $idLista
     * @return ProductoListaprecio
     */
    public function setIdLista($idLista)
    {
        $this->idLista = $idLista;

        return $this;
    }

    /**
     * Get idLista
     *
     * @return string 
     */
    public function getIdLista()
    {
        return $this->idLista;
    }

    /**
     * Set precioVentausd
     *
     * @param integer $precioVentausd
     * @return ProductoListaprecio
     */
    public function setPrecioVentausd($precioVentausd)
    {
        $this->precioVentausd = $precioVentausd;

        return $this;
    }

    /**
     * Get precioVentausd
     *
     * @return integer 
     */
    public function getPrecioVentausd()
    {
        return $this->precioVentausd;
    }

    /**
     * Set precioVentamn
     *
     * @param integer $precioVentamn
     * @return ProductoListaprecio
     */
    public function setPrecioVentamn($precioVentamn)
    {
        $this->precioVentamn = $precioVentamn;

        return $this;
    }

    /**
     * Get precioVentamn
     *
     * @return integer 
     */
    public function getPrecioVentamn()
    {
        return $this->precioVentamn;
    }
}
