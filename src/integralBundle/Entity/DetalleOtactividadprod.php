<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleOtactividadprod
 *
 * @ORM\Table(name="Detalle_OtActividadProd")
 * @ORM\Entity
 */
class DetalleOtactividadprod
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
     * @ORM\Column(name="Id_Actividad", type="string", length=10, nullable=false)
     */
    private $idActividad;

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
     * @ORM\Column(name="Um_Producto", type="string", length=5, nullable=false)
     */
    private $umProducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Existencia", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $existencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoFijoMB", type="integer", nullable=false)
     */
    private $costofijomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoFijoMC", type="integer", nullable=false)
     */
    private $costofijomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMB", type="integer", nullable=false)
     */
    private $importemb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMC", type="integer", nullable=false)
     */
    private $importemc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="smallint", nullable=false)
     */
    private $items;

    /**
     * @var string
     *
     * @ORM\Column(name="Etapa", type="string", length=50, nullable=false)
     */
    private $etapa;



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
     * Set idActividad
     *
     * @param string $idActividad
     * @return DetalleOtactividadprod
     */
    public function setIdActividad($idActividad)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad
     *
     * @return string 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return DetalleOtactividadprod
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
     * @return DetalleOtactividadprod
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
     * Set umProducto
     *
     * @param string $umProducto
     * @return DetalleOtactividadprod
     */
    public function setUmProducto($umProducto)
    {
        $this->umProducto = $umProducto;

        return $this;
    }

    /**
     * Get umProducto
     *
     * @return string 
     */
    public function getUmProducto()
    {
        return $this->umProducto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return DetalleOtactividadprod
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
     * Set existencia
     *
     * @param string $existencia
     * @return DetalleOtactividadprod
     */
    public function setExistencia($existencia)
    {
        $this->existencia = $existencia;

        return $this;
    }

    /**
     * Get existencia
     *
     * @return string 
     */
    public function getExistencia()
    {
        return $this->existencia;
    }

    /**
     * Set costofijomb
     *
     * @param integer $costofijomb
     * @return DetalleOtactividadprod
     */
    public function setCostofijomb($costofijomb)
    {
        $this->costofijomb = $costofijomb;

        return $this;
    }

    /**
     * Get costofijomb
     *
     * @return integer 
     */
    public function getCostofijomb()
    {
        return $this->costofijomb;
    }

    /**
     * Set costofijomc
     *
     * @param integer $costofijomc
     * @return DetalleOtactividadprod
     */
    public function setCostofijomc($costofijomc)
    {
        $this->costofijomc = $costofijomc;

        return $this;
    }

    /**
     * Get costofijomc
     *
     * @return integer 
     */
    public function getCostofijomc()
    {
        return $this->costofijomc;
    }

    /**
     * Set importemb
     *
     * @param integer $importemb
     * @return DetalleOtactividadprod
     */
    public function setImportemb($importemb)
    {
        $this->importemb = $importemb;

        return $this;
    }

    /**
     * Get importemb
     *
     * @return integer 
     */
    public function getImportemb()
    {
        return $this->importemb;
    }

    /**
     * Set importemc
     *
     * @param integer $importemc
     * @return DetalleOtactividadprod
     */
    public function setImportemc($importemc)
    {
        $this->importemc = $importemc;

        return $this;
    }

    /**
     * Get importemc
     *
     * @return integer 
     */
    public function getImportemc()
    {
        return $this->importemc;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return DetalleOtactividadprod
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
     * Set etapa
     *
     * @param string $etapa
     * @return DetalleOtactividadprod
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get etapa
     *
     * @return string 
     */
    public function getEtapa()
    {
        return $this->etapa;
    }
}
