<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlquilerPrefacturadetalle
 *
 * @ORM\Table(name="Alquiler_PreFacturaDetalle")
 * @ORM\Entity
 */
class AlquilerPrefacturadetalle
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
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto", type="string", length=255, nullable=false)
     */
    private $descProducto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Alquiler", type="datetime", nullable=false)
     */
    private $fechaAlquiler;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_VentaUmFacturaMB", type="integer", nullable=false)
     */
    private $precioVentaumfacturamb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_VentaUmFacturaMC", type="integer", nullable=false)
     */
    private $precioVentaumfacturamc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad_Factura", type="integer", nullable=false)
     */
    private $cantidadFactura;

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
     * @var integer
     *
     * @ORM\Column(name="Importe_MB", type="integer", nullable=false)
     */
    private $importeMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_MC", type="integer", nullable=false)
     */
    private $importeMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Factura", type="smallint", nullable=false)
     */
    private $tipoFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=200, nullable=false)
     */
    private $observaciones;



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
     * Set idProducto
     *
     * @param string $idProducto
     * @return AlquilerPrefacturadetalle
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
     * @return AlquilerPrefacturadetalle
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
     * Set fechaAlquiler
     *
     * @param \DateTime $fechaAlquiler
     * @return AlquilerPrefacturadetalle
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
     * Set precioVentaumfacturamb
     *
     * @param integer $precioVentaumfacturamb
     * @return AlquilerPrefacturadetalle
     */
    public function setPrecioVentaumfacturamb($precioVentaumfacturamb)
    {
        $this->precioVentaumfacturamb = $precioVentaumfacturamb;

        return $this;
    }

    /**
     * Get precioVentaumfacturamb
     *
     * @return integer 
     */
    public function getPrecioVentaumfacturamb()
    {
        return $this->precioVentaumfacturamb;
    }

    /**
     * Set precioVentaumfacturamc
     *
     * @param integer $precioVentaumfacturamc
     * @return AlquilerPrefacturadetalle
     */
    public function setPrecioVentaumfacturamc($precioVentaumfacturamc)
    {
        $this->precioVentaumfacturamc = $precioVentaumfacturamc;

        return $this;
    }

    /**
     * Get precioVentaumfacturamc
     *
     * @return integer 
     */
    public function getPrecioVentaumfacturamc()
    {
        return $this->precioVentaumfacturamc;
    }

    /**
     * Set cantidadFactura
     *
     * @param integer $cantidadFactura
     * @return AlquilerPrefacturadetalle
     */
    public function setCantidadFactura($cantidadFactura)
    {
        $this->cantidadFactura = $cantidadFactura;

        return $this;
    }

    /**
     * Get cantidadFactura
     *
     * @return integer 
     */
    public function getCantidadFactura()
    {
        return $this->cantidadFactura;
    }

    /**
     * Set descuentomb
     *
     * @param string $descuentomb
     * @return AlquilerPrefacturadetalle
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
     * @return AlquilerPrefacturadetalle
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
     * @return AlquilerPrefacturadetalle
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
     * @return AlquilerPrefacturadetalle
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
     * Set importeMb
     *
     * @param integer $importeMb
     * @return AlquilerPrefacturadetalle
     */
    public function setImporteMb($importeMb)
    {
        $this->importeMb = $importeMb;

        return $this;
    }

    /**
     * Get importeMb
     *
     * @return integer 
     */
    public function getImporteMb()
    {
        return $this->importeMb;
    }

    /**
     * Set importeMc
     *
     * @param integer $importeMc
     * @return AlquilerPrefacturadetalle
     */
    public function setImporteMc($importeMc)
    {
        $this->importeMc = $importeMc;

        return $this;
    }

    /**
     * Get importeMc
     *
     * @return integer 
     */
    public function getImporteMc()
    {
        return $this->importeMc;
    }

    /**
     * Set tipoFactura
     *
     * @param integer $tipoFactura
     * @return AlquilerPrefacturadetalle
     */
    public function setTipoFactura($tipoFactura)
    {
        $this->tipoFactura = $tipoFactura;

        return $this;
    }

    /**
     * Get tipoFactura
     *
     * @return integer 
     */
    public function getTipoFactura()
    {
        return $this->tipoFactura;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return AlquilerPrefacturadetalle
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}
