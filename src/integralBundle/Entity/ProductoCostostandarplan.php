<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoCostostandarplan
 *
 * @ORM\Table(name="Producto_CostoStandarPlan")
 * @ORM\Entity
 */
class ProductoCostostandarplan
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Periodo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPeriodo;

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
     * @ORM\Column(name="CostoStandarMB", type="integer", nullable=false)
     */
    private $costostandarmb;

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
     * @ORM\Column(name="CostoStandarMC", type="integer", nullable=false)
     */
    private $costostandarmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="UnidadesporPrecio", type="integer", nullable=false)
     */
    private $unidadesporprecio;

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
     * Set idPeriodo
     *
     * @param integer $idPeriodo
     * @return ProductoCostostandarplan
     */
    public function setIdPeriodo($idPeriodo)
    {
        $this->idPeriodo = $idPeriodo;

        return $this;
    }

    /**
     * Get idPeriodo
     *
     * @return integer 
     */
    public function getIdPeriodo()
    {
        return $this->idPeriodo;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return ProductoCostostandarplan
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
     * @return ProductoCostostandarplan
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
     * @return ProductoCostostandarplan
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
     * Set costofjmb
     *
     * @param integer $costofjmb
     * @return ProductoCostostandarplan
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
     * @return ProductoCostostandarplan
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
     * @return ProductoCostostandarplan
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
     * @return ProductoCostostandarplan
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
     * Set costostandarmb
     *
     * @param integer $costostandarmb
     * @return ProductoCostostandarplan
     */
    public function setCostostandarmb($costostandarmb)
    {
        $this->costostandarmb = $costostandarmb;

        return $this;
    }

    /**
     * Get costostandarmb
     *
     * @return integer 
     */
    public function getCostostandarmb()
    {
        return $this->costostandarmb;
    }

    /**
     * Set costofjmc
     *
     * @param integer $costofjmc
     * @return ProductoCostostandarplan
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
     * @return ProductoCostostandarplan
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
     * @return ProductoCostostandarplan
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
     * @return ProductoCostostandarplan
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
     * Set costostandarmc
     *
     * @param integer $costostandarmc
     * @return ProductoCostostandarplan
     */
    public function setCostostandarmc($costostandarmc)
    {
        $this->costostandarmc = $costostandarmc;

        return $this;
    }

    /**
     * Get costostandarmc
     *
     * @return integer 
     */
    public function getCostostandarmc()
    {
        return $this->costostandarmc;
    }

    /**
     * Set unidadesporprecio
     *
     * @param integer $unidadesporprecio
     * @return ProductoCostostandarplan
     */
    public function setUnidadesporprecio($unidadesporprecio)
    {
        $this->unidadesporprecio = $unidadesporprecio;

        return $this;
    }

    /**
     * Get unidadesporprecio
     *
     * @return integer 
     */
    public function getUnidadesporprecio()
    {
        return $this->unidadesporprecio;
    }

    /**
     * Set gastofjmb
     *
     * @param integer $gastofjmb
     * @return ProductoCostostandarplan
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
     * @return ProductoCostostandarplan
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
     * @return ProductoCostostandarplan
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
     * @return ProductoCostostandarplan
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
}
