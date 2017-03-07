<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductosEquivalentes
 *
 * @ORM\Table(name="Productos_Equivalentes", indexes={@ORM\Index(name="IX_Productos_Equivalentes", columns={"Id_Producto_Destino", "Id_Almacen", "Producto_Padre"})})
 * @ORM\Entity
 */
class ProductosEquivalentes
{
    /**
     * @var string
     *
     * @ORM\Column(name="Producto_Padre", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productoPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto_Destino", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductoDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Producto_Destino", type="string", length=200, nullable=false)
     */
    private $nombreProductoDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="Um_Destino", type="string", length=5, nullable=false)
     */
    private $umDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="Factor_Conversion", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $factorConversion;



    /**
     * Set productoPadre
     *
     * @param string $productoPadre
     * @return ProductosEquivalentes
     */
    public function setProductoPadre($productoPadre)
    {
        $this->productoPadre = $productoPadre;

        return $this;
    }

    /**
     * Get productoPadre
     *
     * @return string 
     */
    public function getProductoPadre()
    {
        return $this->productoPadre;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return ProductosEquivalentes
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
     * Set idProductoDestino
     *
     * @param string $idProductoDestino
     * @return ProductosEquivalentes
     */
    public function setIdProductoDestino($idProductoDestino)
    {
        $this->idProductoDestino = $idProductoDestino;

        return $this;
    }

    /**
     * Get idProductoDestino
     *
     * @return string 
     */
    public function getIdProductoDestino()
    {
        return $this->idProductoDestino;
    }

    /**
     * Set nombreProductoDestino
     *
     * @param string $nombreProductoDestino
     * @return ProductosEquivalentes
     */
    public function setNombreProductoDestino($nombreProductoDestino)
    {
        $this->nombreProductoDestino = $nombreProductoDestino;

        return $this;
    }

    /**
     * Get nombreProductoDestino
     *
     * @return string 
     */
    public function getNombreProductoDestino()
    {
        return $this->nombreProductoDestino;
    }

    /**
     * Set umDestino
     *
     * @param string $umDestino
     * @return ProductosEquivalentes
     */
    public function setUmDestino($umDestino)
    {
        $this->umDestino = $umDestino;

        return $this;
    }

    /**
     * Get umDestino
     *
     * @return string 
     */
    public function getUmDestino()
    {
        return $this->umDestino;
    }

    /**
     * Set factorConversion
     *
     * @param string $factorConversion
     * @return ProductosEquivalentes
     */
    public function setFactorConversion($factorConversion)
    {
        $this->factorConversion = $factorConversion;

        return $this;
    }

    /**
     * Get factorConversion
     *
     * @return string 
     */
    public function getFactorConversion()
    {
        return $this->factorConversion;
    }
}
