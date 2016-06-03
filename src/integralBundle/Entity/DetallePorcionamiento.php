<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetallePorcionamiento
 *
 * @ORM\Table(name="Detalle_Porcionamiento")
 * @ORM\Entity
 */
class DetallePorcionamiento
{
    /**
     * @var string
     *
     * @ORM\Column(name="Ano_Porcionamiento", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anoPorcionamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Porcionamiento", type="string", length=15, nullable=true)
     */
    private $idPorcionamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=true)
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=15, nullable=true)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto", type="string", length=255, nullable=true)
     */
    private $descProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Um", type="string", length=5, nullable=true)
     */
    private $um;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_UmOrigen", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cantidadUmorigen;



    /**
     * Get anoPorcionamiento
     *
     * @return string 
     */
    public function getAnoPorcionamiento()
    {
        return $this->anoPorcionamiento;
    }

    /**
     * Set idPorcionamiento
     *
     * @param string $idPorcionamiento
     * @return DetallePorcionamiento
     */
    public function setIdPorcionamiento($idPorcionamiento)
    {
        $this->idPorcionamiento = $idPorcionamiento;

        return $this;
    }

    /**
     * Get idPorcionamiento
     *
     * @return string 
     */
    public function getIdPorcionamiento()
    {
        return $this->idPorcionamiento;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetallePorcionamiento
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
     * Set idProducto
     *
     * @param string $idProducto
     * @return DetallePorcionamiento
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
     * @return DetallePorcionamiento
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
     * Set um
     *
     * @param string $um
     * @return DetallePorcionamiento
     */
    public function setUm($um)
    {
        $this->um = $um;

        return $this;
    }

    /**
     * Get um
     *
     * @return string 
     */
    public function getUm()
    {
        return $this->um;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return DetallePorcionamiento
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
     * Set cantidadUmorigen
     *
     * @param string $cantidadUmorigen
     * @return DetallePorcionamiento
     */
    public function setCantidadUmorigen($cantidadUmorigen)
    {
        $this->cantidadUmorigen = $cantidadUmorigen;

        return $this;
    }

    /**
     * Get cantidadUmorigen
     *
     * @return string 
     */
    public function getCantidadUmorigen()
    {
        return $this->cantidadUmorigen;
    }
}
