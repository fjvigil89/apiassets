<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resumen
 *
 * @ORM\Table(name="Resumen")
 * @ORM\Entity
 */
class Resumen
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Inicio", type="integer", nullable=true)
     */
    private $importeInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Entrada", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cantidadEntrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Entrada", type="integer", nullable=true)
     */
    private $importeEntrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Salida", type="integer", nullable=true)
     */
    private $importeSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Salida", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cantidadSalida;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Mermas", type="integer", nullable=true)
     */
    private $importeMermas;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Mermas", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cantidadMermas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio", type="integer", nullable=true)
     */
    private $precio;



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
     * Set cantidad
     *
     * @param string $cantidad
     * @return Resumen
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
     * Set importeInicio
     *
     * @param integer $importeInicio
     * @return Resumen
     */
    public function setImporteInicio($importeInicio)
    {
        $this->importeInicio = $importeInicio;

        return $this;
    }

    /**
     * Get importeInicio
     *
     * @return integer 
     */
    public function getImporteInicio()
    {
        return $this->importeInicio;
    }

    /**
     * Set cantidadEntrada
     *
     * @param string $cantidadEntrada
     * @return Resumen
     */
    public function setCantidadEntrada($cantidadEntrada)
    {
        $this->cantidadEntrada = $cantidadEntrada;

        return $this;
    }

    /**
     * Get cantidadEntrada
     *
     * @return string 
     */
    public function getCantidadEntrada()
    {
        return $this->cantidadEntrada;
    }

    /**
     * Set importeEntrada
     *
     * @param integer $importeEntrada
     * @return Resumen
     */
    public function setImporteEntrada($importeEntrada)
    {
        $this->importeEntrada = $importeEntrada;

        return $this;
    }

    /**
     * Get importeEntrada
     *
     * @return integer 
     */
    public function getImporteEntrada()
    {
        return $this->importeEntrada;
    }

    /**
     * Set importeSalida
     *
     * @param integer $importeSalida
     * @return Resumen
     */
    public function setImporteSalida($importeSalida)
    {
        $this->importeSalida = $importeSalida;

        return $this;
    }

    /**
     * Get importeSalida
     *
     * @return integer 
     */
    public function getImporteSalida()
    {
        return $this->importeSalida;
    }

    /**
     * Set cantidadSalida
     *
     * @param string $cantidadSalida
     * @return Resumen
     */
    public function setCantidadSalida($cantidadSalida)
    {
        $this->cantidadSalida = $cantidadSalida;

        return $this;
    }

    /**
     * Get cantidadSalida
     *
     * @return string 
     */
    public function getCantidadSalida()
    {
        return $this->cantidadSalida;
    }

    /**
     * Set importeMermas
     *
     * @param integer $importeMermas
     * @return Resumen
     */
    public function setImporteMermas($importeMermas)
    {
        $this->importeMermas = $importeMermas;

        return $this;
    }

    /**
     * Get importeMermas
     *
     * @return integer 
     */
    public function getImporteMermas()
    {
        return $this->importeMermas;
    }

    /**
     * Set cantidadMermas
     *
     * @param string $cantidadMermas
     * @return Resumen
     */
    public function setCantidadMermas($cantidadMermas)
    {
        $this->cantidadMermas = $cantidadMermas;

        return $this;
    }

    /**
     * Get cantidadMermas
     *
     * @return string 
     */
    public function getCantidadMermas()
    {
        return $this->cantidadMermas;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Resumen
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}
