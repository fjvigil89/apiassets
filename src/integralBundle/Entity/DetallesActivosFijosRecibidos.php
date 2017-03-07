<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetallesActivosFijosRecibidos
 *
 * @ORM\Table(name="Detalles_Activos_Fijos_Recibidos", indexes={@ORM\Index(name="IX_Detalles_Activos_Fijos_Recibidos_1", columns={"Id_ActivoFijo"})})
 * @ORM\Entity
 */
class DetallesActivosFijosRecibidos
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
     * @var integer
     *
     * @ORM\Column(name="Items", type="smallint", nullable=false)
     */
    private $items;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Recepcion", type="integer", nullable=false)
     */
    private $idRecepcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Recepcion", type="smallint", nullable=false)
     */
    private $anoRecepcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Lote", type="string", length=20, nullable=false)
     */
    private $idLote;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
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
     * @ORM\Column(name="Cantidad", type="smallint", nullable=false)
     */
    private $cantidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="En_Almacen", type="boolean", nullable=false)
     */
    private $enAlmacen;



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
     * @return DetallesActivosFijosRecibidos
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
     * Set idRecepcion
     *
     * @param integer $idRecepcion
     * @return DetallesActivosFijosRecibidos
     */
    public function setIdRecepcion($idRecepcion)
    {
        $this->idRecepcion = $idRecepcion;

        return $this;
    }

    /**
     * Get idRecepcion
     *
     * @return integer 
     */
    public function getIdRecepcion()
    {
        return $this->idRecepcion;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetallesActivosFijosRecibidos
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
     * Set anoRecepcion
     *
     * @param integer $anoRecepcion
     * @return DetallesActivosFijosRecibidos
     */
    public function setAnoRecepcion($anoRecepcion)
    {
        $this->anoRecepcion = $anoRecepcion;

        return $this;
    }

    /**
     * Get anoRecepcion
     *
     * @return integer 
     */
    public function getAnoRecepcion()
    {
        return $this->anoRecepcion;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return DetallesActivosFijosRecibidos
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
     * Set idLote
     *
     * @param string $idLote
     * @return DetallesActivosFijosRecibidos
     */
    public function setIdLote($idLote)
    {
        $this->idLote = $idLote;

        return $this;
    }

    /**
     * Get idLote
     *
     * @return string 
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return DetallesActivosFijosRecibidos
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
     * @return DetallesActivosFijosRecibidos
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return DetallesActivosFijosRecibidos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set enAlmacen
     *
     * @param boolean $enAlmacen
     * @return DetallesActivosFijosRecibidos
     */
    public function setEnAlmacen($enAlmacen)
    {
        $this->enAlmacen = $enAlmacen;

        return $this;
    }

    /**
     * Get enAlmacen
     *
     * @return boolean 
     */
    public function getEnAlmacen()
    {
        return $this->enAlmacen;
    }
}
