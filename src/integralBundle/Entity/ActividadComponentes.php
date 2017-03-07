<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActividadComponentes
 *
 * @ORM\Table(name="Actividad_Componentes")
 * @ORM\Entity
 */
class ActividadComponentes
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @var boolean
     *
     * @ORM\Column(name="Producto_oServicio", type="boolean", nullable=false)
     */
    private $productoOservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Etapa", type="string", length=50, nullable=false)
     */
    private $etapa;



    /**
     * Set idActividad
     *
     * @param string $idActividad
     * @return ActividadComponentes
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
     * @return ActividadComponentes
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
     * @return ActividadComponentes
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
     * @return ActividadComponentes
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
     * @return ActividadComponentes
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
     * Set costofijomb
     *
     * @param integer $costofijomb
     * @return ActividadComponentes
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
     * @return ActividadComponentes
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
     * @return ActividadComponentes
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
     * @return ActividadComponentes
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
     * Set productoOservicio
     *
     * @param boolean $productoOservicio
     * @return ActividadComponentes
     */
    public function setProductoOservicio($productoOservicio)
    {
        $this->productoOservicio = $productoOservicio;

        return $this;
    }

    /**
     * Get productoOservicio
     *
     * @return boolean 
     */
    public function getProductoOservicio()
    {
        return $this->productoOservicio;
    }

    /**
     * Set etapa
     *
     * @param string $etapa
     * @return ActividadComponentes
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
