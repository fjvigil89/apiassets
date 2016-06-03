<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleAlquiler
 *
 * @ORM\Table(name="Detalle_Alquiler", indexes={@ORM\Index(name="Idx_Contador", columns={"Contador"})})
 * @ORM\Entity
 */
class DetalleAlquiler
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Alquiler", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anoAlquiler;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Alquiler", type="integer", nullable=false)
     */
    private $idAlquiler;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Activofijo", type="string", length=15, nullable=false)
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Rotulo", type="string", length=15, nullable=false)
     */
    private $idRotulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ActivoFijo", type="string", length=255, nullable=false)
     */
    private $descActivofijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo", type="smallint", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodUM", type="smallint", nullable=false)
     */
    private $codum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_Venta", type="integer", nullable=false)
     */
    private $precioVenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_VentaMC", type="integer", nullable=false)
     */
    private $precioVentamc;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Alquiler", type="datetime", nullable=false)
     */
    private $fechaAlquiler;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Devolucion", type="datetime", nullable=false)
     */
    private $fechaDevolucion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca_Devolucion", type="boolean", nullable=false)
     */
    private $marcaDevolucion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca", type="boolean", nullable=false)
     */
    private $marca;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="bigint", nullable=false)
     */
    private $items;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Facturar_Servicio", type="boolean", nullable=false)
     */
    private $facturarServicio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="In_to_Out", type="boolean", nullable=false)
     */
    private $inToOut;



    /**
     * Get anoAlquiler
     *
     * @return integer 
     */
    public function getAnoAlquiler()
    {
        return $this->anoAlquiler;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetalleAlquiler
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
     * Set idAlquiler
     *
     * @param integer $idAlquiler
     * @return DetalleAlquiler
     */
    public function setIdAlquiler($idAlquiler)
    {
        $this->idAlquiler = $idAlquiler;

        return $this;
    }

    /**
     * Get idAlquiler
     *
     * @return integer 
     */
    public function getIdAlquiler()
    {
        return $this->idAlquiler;
    }

    /**
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return DetalleAlquiler
     */
    public function setIdActivofijo($idActivofijo)
    {
        $this->idActivofijo = $idActivofijo;

        return $this;
    }

    /**
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set idRotulo
     *
     * @param string $idRotulo
     * @return DetalleAlquiler
     */
    public function setIdRotulo($idRotulo)
    {
        $this->idRotulo = $idRotulo;

        return $this;
    }

    /**
     * Get idRotulo
     *
     * @return string 
     */
    public function getIdRotulo()
    {
        return $this->idRotulo;
    }

    /**
     * Set descActivofijo
     *
     * @param string $descActivofijo
     * @return DetalleAlquiler
     */
    public function setDescActivofijo($descActivofijo)
    {
        $this->descActivofijo = $descActivofijo;

        return $this;
    }

    /**
     * Get descActivofijo
     *
     * @return string 
     */
    public function getDescActivofijo()
    {
        return $this->descActivofijo;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return DetalleAlquiler
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return DetalleAlquiler
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set codum
     *
     * @param integer $codum
     * @return DetalleAlquiler
     */
    public function setCodum($codum)
    {
        $this->codum = $codum;

        return $this;
    }

    /**
     * Get codum
     *
     * @return integer 
     */
    public function getCodum()
    {
        return $this->codum;
    }

    /**
     * Set precioVenta
     *
     * @param integer $precioVenta
     * @return DetalleAlquiler
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->precioVenta = $precioVenta;

        return $this;
    }

    /**
     * Get precioVenta
     *
     * @return integer 
     */
    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }

    /**
     * Set precioVentamc
     *
     * @param integer $precioVentamc
     * @return DetalleAlquiler
     */
    public function setPrecioVentamc($precioVentamc)
    {
        $this->precioVentamc = $precioVentamc;

        return $this;
    }

    /**
     * Get precioVentamc
     *
     * @return integer 
     */
    public function getPrecioVentamc()
    {
        return $this->precioVentamc;
    }

    /**
     * Set descuentomb
     *
     * @param string $descuentomb
     * @return DetalleAlquiler
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
     * @return DetalleAlquiler
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
     * @return DetalleAlquiler
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
     * @return DetalleAlquiler
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
     * Set fechaAlquiler
     *
     * @param \DateTime $fechaAlquiler
     * @return DetalleAlquiler
     */
    public function setFechaAlquiler($fechaAlquiler)
    {
        $this->fechaAlquiler = $fechaAlquiler;

        return $this;
    }

    /**
     * Get fechaAlquiler
     *
     * @return \DateTime 
     */
    public function getFechaAlquiler()
    {
        return $this->fechaAlquiler;
    }

    /**
     * Set fechaDevolucion
     *
     * @param \DateTime $fechaDevolucion
     * @return DetalleAlquiler
     */
    public function setFechaDevolucion($fechaDevolucion)
    {
        $this->fechaDevolucion = $fechaDevolucion;

        return $this;
    }

    /**
     * Get fechaDevolucion
     *
     * @return \DateTime 
     */
    public function getFechaDevolucion()
    {
        return $this->fechaDevolucion;
    }

    /**
     * Set marcaDevolucion
     *
     * @param boolean $marcaDevolucion
     * @return DetalleAlquiler
     */
    public function setMarcaDevolucion($marcaDevolucion)
    {
        $this->marcaDevolucion = $marcaDevolucion;

        return $this;
    }

    /**
     * Get marcaDevolucion
     *
     * @return boolean 
     */
    public function getMarcaDevolucion()
    {
        return $this->marcaDevolucion;
    }

    /**
     * Set marca
     *
     * @param boolean $marca
     * @return DetalleAlquiler
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return boolean 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return DetalleAlquiler
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
     * Set items
     *
     * @param integer $items
     * @return DetalleAlquiler
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
     * Set facturarServicio
     *
     * @param boolean $facturarServicio
     * @return DetalleAlquiler
     */
    public function setFacturarServicio($facturarServicio)
    {
        $this->facturarServicio = $facturarServicio;

        return $this;
    }

    /**
     * Get facturarServicio
     *
     * @return boolean 
     */
    public function getFacturarServicio()
    {
        return $this->facturarServicio;
    }

    /**
     * Set inToOut
     *
     * @param boolean $inToOut
     * @return DetalleAlquiler
     */
    public function setInToOut($inToOut)
    {
        $this->inToOut = $inToOut;

        return $this;
    }

    /**
     * Get inToOut
     *
     * @return boolean 
     */
    public function getInToOut()
    {
        return $this->inToOut;
    }
}
