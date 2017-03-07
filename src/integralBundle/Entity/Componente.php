<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Componente
 *
 * @ORM\Table(name="Componente")
 * @ORM\Entity
 */
class Componente
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ProductoPadre", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductopadre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ProductoHijo", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductohijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ProductoHijo", type="string", length=255, nullable=false)
     */
    private $descProductohijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Um_ProductoHijo", type="string", length=5, nullable=false)
     */
    private $umProductohijo;

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
     * @var string
     *
     * @ORM\Column(name="CantidadSP", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidadsp;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcPerdida", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcperdida;

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
     * @ORM\Column(name="CostoFJMB", type="integer", nullable=false)
     */
    private $costofjmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoMPMB", type="integer", nullable=false)
     */
    private $costompmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoEMMB", type="integer", nullable=false)
     */
    private $costoemmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoDPMB", type="integer", nullable=false)
     */
    private $costodpmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoFJMC", type="integer", nullable=false)
     */
    private $costofjmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoMPMC", type="integer", nullable=false)
     */
    private $costompmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoEMMC", type="integer", nullable=false)
     */
    private $costoemmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoDPMC", type="integer", nullable=false)
     */
    private $costodpmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="GastoFJMB", type="integer", nullable=false)
     */
    private $gastofjmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="GastoVRMB", type="integer", nullable=false)
     */
    private $gastovrmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="GastoFJMC", type="integer", nullable=false)
     */
    private $gastofjmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="GastoVRMC", type="integer", nullable=false)
     */
    private $gastovrmc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Descontinuado", type="boolean", nullable=false)
     */
    private $descontinuado;



    /**
     * Set idProductopadre
     *
     * @param string $idProductopadre
     * @return Componente
     */
    public function setIdProductopadre($idProductopadre)
    {
        $this->idProductopadre = $idProductopadre;

        return $this;
    }

    /**
     * Get idProductopadre
     *
     * @return string 
     */
    public function getIdProductopadre()
    {
        return $this->idProductopadre;
    }

    /**
     * Set idProductohijo
     *
     * @param string $idProductohijo
     * @return Componente
     */
    public function setIdProductohijo($idProductohijo)
    {
        $this->idProductohijo = $idProductohijo;

        return $this;
    }

    /**
     * Get idProductohijo
     *
     * @return string 
     */
    public function getIdProductohijo()
    {
        return $this->idProductohijo;
    }

    /**
     * Set descProductohijo
     *
     * @param string $descProductohijo
     * @return Componente
     */
    public function setDescProductohijo($descProductohijo)
    {
        $this->descProductohijo = $descProductohijo;

        return $this;
    }

    /**
     * Get descProductohijo
     *
     * @return string 
     */
    public function getDescProductohijo()
    {
        return $this->descProductohijo;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Componente
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
     * Set umProductohijo
     *
     * @param string $umProductohijo
     * @return Componente
     */
    public function setUmProductohijo($umProductohijo)
    {
        $this->umProductohijo = $umProductohijo;

        return $this;
    }

    /**
     * Get umProductohijo
     *
     * @return string 
     */
    public function getUmProductohijo()
    {
        return $this->umProductohijo;
    }

    /**
     * Set costofijomb
     *
     * @param integer $costofijomb
     * @return Componente
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
     * @return Componente
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
     * Set cantidadsp
     *
     * @param string $cantidadsp
     * @return Componente
     */
    public function setCantidadsp($cantidadsp)
    {
        $this->cantidadsp = $cantidadsp;

        return $this;
    }

    /**
     * Get cantidadsp
     *
     * @return string 
     */
    public function getCantidadsp()
    {
        return $this->cantidadsp;
    }

    /**
     * Set porcperdida
     *
     * @param string $porcperdida
     * @return Componente
     */
    public function setPorcperdida($porcperdida)
    {
        $this->porcperdida = $porcperdida;

        return $this;
    }

    /**
     * Get porcperdida
     *
     * @return string 
     */
    public function getPorcperdida()
    {
        return $this->porcperdida;
    }

    /**
     * Set importemb
     *
     * @param integer $importemb
     * @return Componente
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
     * @return Componente
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
     * Set costofjmb
     *
     * @param integer $costofjmb
     * @return Componente
     */
    public function setCostofjmb($costofjmb)
    {
        $this->costofjmb = $costofjmb;

        return $this;
    }

    /**
     * Get costofjmb
     *
     * @return integer 
     */
    public function getCostofjmb()
    {
        return $this->costofjmb;
    }

    /**
     * Set costompmb
     *
     * @param integer $costompmb
     * @return Componente
     */
    public function setCostompmb($costompmb)
    {
        $this->costompmb = $costompmb;

        return $this;
    }

    /**
     * Get costompmb
     *
     * @return integer 
     */
    public function getCostompmb()
    {
        return $this->costompmb;
    }

    /**
     * Set costoemmb
     *
     * @param integer $costoemmb
     * @return Componente
     */
    public function setCostoemmb($costoemmb)
    {
        $this->costoemmb = $costoemmb;

        return $this;
    }

    /**
     * Get costoemmb
     *
     * @return integer 
     */
    public function getCostoemmb()
    {
        return $this->costoemmb;
    }

    /**
     * Set costodpmb
     *
     * @param integer $costodpmb
     * @return Componente
     */
    public function setCostodpmb($costodpmb)
    {
        $this->costodpmb = $costodpmb;

        return $this;
    }

    /**
     * Get costodpmb
     *
     * @return integer 
     */
    public function getCostodpmb()
    {
        return $this->costodpmb;
    }

    /**
     * Set costofjmc
     *
     * @param integer $costofjmc
     * @return Componente
     */
    public function setCostofjmc($costofjmc)
    {
        $this->costofjmc = $costofjmc;

        return $this;
    }

    /**
     * Get costofjmc
     *
     * @return integer 
     */
    public function getCostofjmc()
    {
        return $this->costofjmc;
    }

    /**
     * Set costompmc
     *
     * @param integer $costompmc
     * @return Componente
     */
    public function setCostompmc($costompmc)
    {
        $this->costompmc = $costompmc;

        return $this;
    }

    /**
     * Get costompmc
     *
     * @return integer 
     */
    public function getCostompmc()
    {
        return $this->costompmc;
    }

    /**
     * Set costoemmc
     *
     * @param integer $costoemmc
     * @return Componente
     */
    public function setCostoemmc($costoemmc)
    {
        $this->costoemmc = $costoemmc;

        return $this;
    }

    /**
     * Get costoemmc
     *
     * @return integer 
     */
    public function getCostoemmc()
    {
        return $this->costoemmc;
    }

    /**
     * Set costodpmc
     *
     * @param integer $costodpmc
     * @return Componente
     */
    public function setCostodpmc($costodpmc)
    {
        $this->costodpmc = $costodpmc;

        return $this;
    }

    /**
     * Get costodpmc
     *
     * @return integer 
     */
    public function getCostodpmc()
    {
        return $this->costodpmc;
    }

    /**
     * Set gastofjmb
     *
     * @param integer $gastofjmb
     * @return Componente
     */
    public function setGastofjmb($gastofjmb)
    {
        $this->gastofjmb = $gastofjmb;

        return $this;
    }

    /**
     * Get gastofjmb
     *
     * @return integer 
     */
    public function getGastofjmb()
    {
        return $this->gastofjmb;
    }

    /**
     * Set gastovrmb
     *
     * @param integer $gastovrmb
     * @return Componente
     */
    public function setGastovrmb($gastovrmb)
    {
        $this->gastovrmb = $gastovrmb;

        return $this;
    }

    /**
     * Get gastovrmb
     *
     * @return integer 
     */
    public function getGastovrmb()
    {
        return $this->gastovrmb;
    }

    /**
     * Set gastofjmc
     *
     * @param integer $gastofjmc
     * @return Componente
     */
    public function setGastofjmc($gastofjmc)
    {
        $this->gastofjmc = $gastofjmc;

        return $this;
    }

    /**
     * Get gastofjmc
     *
     * @return integer 
     */
    public function getGastofjmc()
    {
        return $this->gastofjmc;
    }

    /**
     * Set gastovrmc
     *
     * @param integer $gastovrmc
     * @return Componente
     */
    public function setGastovrmc($gastovrmc)
    {
        $this->gastovrmc = $gastovrmc;

        return $this;
    }

    /**
     * Get gastovrmc
     *
     * @return integer 
     */
    public function getGastovrmc()
    {
        return $this->gastovrmc;
    }

    /**
     * Set descontinuado
     *
     * @param boolean $descontinuado
     * @return Componente
     */
    public function setDescontinuado($descontinuado)
    {
        $this->descontinuado = $descontinuado;

        return $this;
    }

    /**
     * Get descontinuado
     *
     * @return boolean 
     */
    public function getDescontinuado()
    {
        return $this->descontinuado;
    }
}
