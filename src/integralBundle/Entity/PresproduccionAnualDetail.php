<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresproduccionAnualDetail
 *
 * @ORM\Table(name="PresProduccion_Anual_Detail")
 * @ORM\Entity
 */
class PresproduccionAnualDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

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
     * @ORM\Column(name="Um_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="M01", type="integer", nullable=false)
     */
    private $m01;

    /**
     * @var integer
     *
     * @ORM\Column(name="M02", type="integer", nullable=false)
     */
    private $m02;

    /**
     * @var integer
     *
     * @ORM\Column(name="M03", type="integer", nullable=false)
     */
    private $m03;

    /**
     * @var integer
     *
     * @ORM\Column(name="M04", type="integer", nullable=false)
     */
    private $m04;

    /**
     * @var integer
     *
     * @ORM\Column(name="M05", type="integer", nullable=false)
     */
    private $m05;

    /**
     * @var integer
     *
     * @ORM\Column(name="M06", type="integer", nullable=false)
     */
    private $m06;

    /**
     * @var integer
     *
     * @ORM\Column(name="M07", type="integer", nullable=false)
     */
    private $m07;

    /**
     * @var integer
     *
     * @ORM\Column(name="M08", type="integer", nullable=false)
     */
    private $m08;

    /**
     * @var integer
     *
     * @ORM\Column(name="M09", type="integer", nullable=false)
     */
    private $m09;

    /**
     * @var integer
     *
     * @ORM\Column(name="M10", type="integer", nullable=false)
     */
    private $m10;

    /**
     * @var integer
     *
     * @ORM\Column(name="M11", type="integer", nullable=false)
     */
    private $m11;

    /**
     * @var integer
     *
     * @ORM\Column(name="M12", type="integer", nullable=false)
     */
    private $m12;

    /**
     * @var integer
     *
     * @ORM\Column(name="Total", type="integer", nullable=false)
     */
    private $total;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_CostoMB", type="integer", nullable=false)
     */
    private $precioCostomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Precio_CostoMC", type="integer", nullable=false)
     */
    private $precioCostomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="UnidadesporReceta", type="integer", nullable=false)
     */
    private $unidadesporreceta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Producto_Semielaborado", type="boolean", nullable=false)
     */
    private $productoSemielaborado;



    /**
     * Set ano
     *
     * @param integer $ano
     * @return PresproduccionAnualDetail
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return PresproduccionAnualDetail
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
     * @return PresproduccionAnualDetail
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
     * @return PresproduccionAnualDetail
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
     * Set m01
     *
     * @param integer $m01
     * @return PresproduccionAnualDetail
     */
    public function setM01($m01)
    {
        $this->m01 = $m01;

        return $this;
    }

    /**
     * Get m01
     *
     * @return integer 
     */
    public function getM01()
    {
        return $this->m01;
    }

    /**
     * Set m02
     *
     * @param integer $m02
     * @return PresproduccionAnualDetail
     */
    public function setM02($m02)
    {
        $this->m02 = $m02;

        return $this;
    }

    /**
     * Get m02
     *
     * @return integer 
     */
    public function getM02()
    {
        return $this->m02;
    }

    /**
     * Set m03
     *
     * @param integer $m03
     * @return PresproduccionAnualDetail
     */
    public function setM03($m03)
    {
        $this->m03 = $m03;

        return $this;
    }

    /**
     * Get m03
     *
     * @return integer 
     */
    public function getM03()
    {
        return $this->m03;
    }

    /**
     * Set m04
     *
     * @param integer $m04
     * @return PresproduccionAnualDetail
     */
    public function setM04($m04)
    {
        $this->m04 = $m04;

        return $this;
    }

    /**
     * Get m04
     *
     * @return integer 
     */
    public function getM04()
    {
        return $this->m04;
    }

    /**
     * Set m05
     *
     * @param integer $m05
     * @return PresproduccionAnualDetail
     */
    public function setM05($m05)
    {
        $this->m05 = $m05;

        return $this;
    }

    /**
     * Get m05
     *
     * @return integer 
     */
    public function getM05()
    {
        return $this->m05;
    }

    /**
     * Set m06
     *
     * @param integer $m06
     * @return PresproduccionAnualDetail
     */
    public function setM06($m06)
    {
        $this->m06 = $m06;

        return $this;
    }

    /**
     * Get m06
     *
     * @return integer 
     */
    public function getM06()
    {
        return $this->m06;
    }

    /**
     * Set m07
     *
     * @param integer $m07
     * @return PresproduccionAnualDetail
     */
    public function setM07($m07)
    {
        $this->m07 = $m07;

        return $this;
    }

    /**
     * Get m07
     *
     * @return integer 
     */
    public function getM07()
    {
        return $this->m07;
    }

    /**
     * Set m08
     *
     * @param integer $m08
     * @return PresproduccionAnualDetail
     */
    public function setM08($m08)
    {
        $this->m08 = $m08;

        return $this;
    }

    /**
     * Get m08
     *
     * @return integer 
     */
    public function getM08()
    {
        return $this->m08;
    }

    /**
     * Set m09
     *
     * @param integer $m09
     * @return PresproduccionAnualDetail
     */
    public function setM09($m09)
    {
        $this->m09 = $m09;

        return $this;
    }

    /**
     * Get m09
     *
     * @return integer 
     */
    public function getM09()
    {
        return $this->m09;
    }

    /**
     * Set m10
     *
     * @param integer $m10
     * @return PresproduccionAnualDetail
     */
    public function setM10($m10)
    {
        $this->m10 = $m10;

        return $this;
    }

    /**
     * Get m10
     *
     * @return integer 
     */
    public function getM10()
    {
        return $this->m10;
    }

    /**
     * Set m11
     *
     * @param integer $m11
     * @return PresproduccionAnualDetail
     */
    public function setM11($m11)
    {
        $this->m11 = $m11;

        return $this;
    }

    /**
     * Get m11
     *
     * @return integer 
     */
    public function getM11()
    {
        return $this->m11;
    }

    /**
     * Set m12
     *
     * @param integer $m12
     * @return PresproduccionAnualDetail
     */
    public function setM12($m12)
    {
        $this->m12 = $m12;

        return $this;
    }

    /**
     * Get m12
     *
     * @return integer 
     */
    public function getM12()
    {
        return $this->m12;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return PresproduccionAnualDetail
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set precioCostomb
     *
     * @param integer $precioCostomb
     * @return PresproduccionAnualDetail
     */
    public function setPrecioCostomb($precioCostomb)
    {
        $this->precioCostomb = $precioCostomb;

        return $this;
    }

    /**
     * Get precioCostomb
     *
     * @return integer 
     */
    public function getPrecioCostomb()
    {
        return $this->precioCostomb;
    }

    /**
     * Set precioCostomc
     *
     * @param integer $precioCostomc
     * @return PresproduccionAnualDetail
     */
    public function setPrecioCostomc($precioCostomc)
    {
        $this->precioCostomc = $precioCostomc;

        return $this;
    }

    /**
     * Get precioCostomc
     *
     * @return integer 
     */
    public function getPrecioCostomc()
    {
        return $this->precioCostomc;
    }

    /**
     * Set unidadesporreceta
     *
     * @param integer $unidadesporreceta
     * @return PresproduccionAnualDetail
     */
    public function setUnidadesporreceta($unidadesporreceta)
    {
        $this->unidadesporreceta = $unidadesporreceta;

        return $this;
    }

    /**
     * Get unidadesporreceta
     *
     * @return integer 
     */
    public function getUnidadesporreceta()
    {
        return $this->unidadesporreceta;
    }

    /**
     * Set productoSemielaborado
     *
     * @param boolean $productoSemielaborado
     * @return PresproduccionAnualDetail
     */
    public function setProductoSemielaborado($productoSemielaborado)
    {
        $this->productoSemielaborado = $productoSemielaborado;

        return $this;
    }

    /**
     * Get productoSemielaborado
     *
     * @return boolean 
     */
    public function getProductoSemielaborado()
    {
        return $this->productoSemielaborado;
    }
}
