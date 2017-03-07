<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleAlquilermovajt
 *
 * @ORM\Table(name="Detalle_AlquilerMovAjt", indexes={@ORM\Index(name="IX_Detalle_AlquilerMovAjt", columns={"Contador"})})
 * @ORM\Entity
 */
class DetalleAlquilermovajt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_AlquilerMov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anoAlquilermov;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenMov", type="string", length=5, nullable=false)
     */
    private $idAlmacenmov;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_AlquilerMov", type="integer", nullable=false)
     */
    private $idAlquilermov;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo", type="smallint", nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Rotulo", type="string", length=15, nullable=false)
     */
    private $idRotulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Activofijo", type="string", length=15, nullable=false)
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ActivoFijo", type="string", length=255, nullable=false)
     */
    private $descActivofijo;

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
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

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
     * Get anoAlquilermov
     *
     * @return integer 
     */
    public function getAnoAlquilermov()
    {
        return $this->anoAlquilermov;
    }

    /**
     * Set idAlmacenmov
     *
     * @param string $idAlmacenmov
     * @return DetalleAlquilermovajt
     */
    public function setIdAlmacenmov($idAlmacenmov)
    {
        $this->idAlmacenmov = $idAlmacenmov;

        return $this;
    }

    /**
     * Get idAlmacenmov
     *
     * @return string 
     */
    public function getIdAlmacenmov()
    {
        return $this->idAlmacenmov;
    }

    /**
     * Set idAlquilermov
     *
     * @param integer $idAlquilermov
     * @return DetalleAlquilermovajt
     */
    public function setIdAlquilermov($idAlquilermov)
    {
        $this->idAlquilermov = $idAlquilermov;

        return $this;
    }

    /**
     * Get idAlquilermov
     *
     * @return integer 
     */
    public function getIdAlquilermov()
    {
        return $this->idAlquilermov;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return DetalleAlquilermovajt
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
     * Set idRotulo
     *
     * @param string $idRotulo
     * @return DetalleAlquilermovajt
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
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return DetalleAlquilermovajt
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
     * Set descActivofijo
     *
     * @param string $descActivofijo
     * @return DetalleAlquilermovajt
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
     * Set codum
     *
     * @param integer $codum
     * @return DetalleAlquilermovajt
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
     * @return DetalleAlquilermovajt
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
     * @return DetalleAlquilermovajt
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
     * @return DetalleAlquilermovajt
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
     * @return DetalleAlquilermovajt
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
     * @return DetalleAlquilermovajt
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
     * @return DetalleAlquilermovajt
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
     * Set contador
     *
     * @param integer $contador
     * @return DetalleAlquilermovajt
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
     * Set fechaAlquiler
     *
     * @param \DateTime $fechaAlquiler
     * @return DetalleAlquilermovajt
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
     * @return DetalleAlquilermovajt
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
}
