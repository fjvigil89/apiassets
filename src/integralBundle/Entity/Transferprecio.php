<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transferprecio
 *
 * @ORM\Table(name="TransferPrecio")
 * @ORM\Entity
 */
class Transferprecio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SPID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpid;

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
     * @var string
     *
     * @ORM\Column(name="UM_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaUMAlmacenMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaumalmacenmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_VentaUmAlmacenMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioVentaumalmacenmc;

    /**
     * @var string
     *
     * @ORM\Column(name="PreOriginalMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preoriginalmb;

    /**
     * @var string
     *
     * @ORM\Column(name="PreOriginalMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preoriginalmc;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioCostoCalculoMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciocostocalculomb;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioCostoCalculoMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciocostocalculomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_ArancelCalculoMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoArancelcalculomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_ArancelCalculoMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoArancelcalculomc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Seleccionado", type="boolean", nullable=false)
     */
    private $seleccionado;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Padre", type="boolean", nullable=false)
     */
    private $padre;



    /**
     * Get idSpid
     *
     * @return integer 
     */
    public function getIdSpid()
    {
        return $this->idSpid;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return Transferprecio
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
     * @return Transferprecio
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
     * Set umAlmacen
     *
     * @param string $umAlmacen
     * @return Transferprecio
     */
    public function setUmAlmacen($umAlmacen)
    {
        $this->umAlmacen = $umAlmacen;

        return $this;
    }

    /**
     * Get umAlmacen
     *
     * @return string 
     */
    public function getUmAlmacen()
    {
        return $this->umAlmacen;
    }

    /**
     * Set precioVentaumalmacenmb
     *
     * @param string $precioVentaumalmacenmb
     * @return Transferprecio
     */
    public function setPrecioVentaumalmacenmb($precioVentaumalmacenmb)
    {
        $this->precioVentaumalmacenmb = $precioVentaumalmacenmb;

        return $this;
    }

    /**
     * Get precioVentaumalmacenmb
     *
     * @return string 
     */
    public function getPrecioVentaumalmacenmb()
    {
        return $this->precioVentaumalmacenmb;
    }

    /**
     * Set precioVentaumalmacenmc
     *
     * @param string $precioVentaumalmacenmc
     * @return Transferprecio
     */
    public function setPrecioVentaumalmacenmc($precioVentaumalmacenmc)
    {
        $this->precioVentaumalmacenmc = $precioVentaumalmacenmc;

        return $this;
    }

    /**
     * Get precioVentaumalmacenmc
     *
     * @return string 
     */
    public function getPrecioVentaumalmacenmc()
    {
        return $this->precioVentaumalmacenmc;
    }

    /**
     * Set preoriginalmb
     *
     * @param string $preoriginalmb
     * @return Transferprecio
     */
    public function setPreoriginalmb($preoriginalmb)
    {
        $this->preoriginalmb = $preoriginalmb;

        return $this;
    }

    /**
     * Get preoriginalmb
     *
     * @return string 
     */
    public function getPreoriginalmb()
    {
        return $this->preoriginalmb;
    }

    /**
     * Set preoriginalmc
     *
     * @param string $preoriginalmc
     * @return Transferprecio
     */
    public function setPreoriginalmc($preoriginalmc)
    {
        $this->preoriginalmc = $preoriginalmc;

        return $this;
    }

    /**
     * Get preoriginalmc
     *
     * @return string 
     */
    public function getPreoriginalmc()
    {
        return $this->preoriginalmc;
    }

    /**
     * Set preciocostocalculomb
     *
     * @param string $preciocostocalculomb
     * @return Transferprecio
     */
    public function setPreciocostocalculomb($preciocostocalculomb)
    {
        $this->preciocostocalculomb = $preciocostocalculomb;

        return $this;
    }

    /**
     * Get preciocostocalculomb
     *
     * @return string 
     */
    public function getPreciocostocalculomb()
    {
        return $this->preciocostocalculomb;
    }

    /**
     * Set preciocostocalculomc
     *
     * @param string $preciocostocalculomc
     * @return Transferprecio
     */
    public function setPreciocostocalculomc($preciocostocalculomc)
    {
        $this->preciocostocalculomc = $preciocostocalculomc;

        return $this;
    }

    /**
     * Get preciocostocalculomc
     *
     * @return string 
     */
    public function getPreciocostocalculomc()
    {
        return $this->preciocostocalculomc;
    }

    /**
     * Set costoArancelcalculomb
     *
     * @param string $costoArancelcalculomb
     * @return Transferprecio
     */
    public function setCostoArancelcalculomb($costoArancelcalculomb)
    {
        $this->costoArancelcalculomb = $costoArancelcalculomb;

        return $this;
    }

    /**
     * Get costoArancelcalculomb
     *
     * @return string 
     */
    public function getCostoArancelcalculomb()
    {
        return $this->costoArancelcalculomb;
    }

    /**
     * Set costoArancelcalculomc
     *
     * @param string $costoArancelcalculomc
     * @return Transferprecio
     */
    public function setCostoArancelcalculomc($costoArancelcalculomc)
    {
        $this->costoArancelcalculomc = $costoArancelcalculomc;

        return $this;
    }

    /**
     * Get costoArancelcalculomc
     *
     * @return string 
     */
    public function getCostoArancelcalculomc()
    {
        return $this->costoArancelcalculomc;
    }

    /**
     * Set seleccionado
     *
     * @param boolean $seleccionado
     * @return Transferprecio
     */
    public function setSeleccionado($seleccionado)
    {
        $this->seleccionado = $seleccionado;

        return $this;
    }

    /**
     * Get seleccionado
     *
     * @return boolean 
     */
    public function getSeleccionado()
    {
        return $this->seleccionado;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Transferprecio
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
     * Set padre
     *
     * @param boolean $padre
     * @return Transferprecio
     */
    public function setPadre($padre)
    {
        $this->padre = $padre;

        return $this;
    }

    /**
     * Get padre
     *
     * @return boolean 
     */
    public function getPadre()
    {
        return $this->padre;
    }
}
