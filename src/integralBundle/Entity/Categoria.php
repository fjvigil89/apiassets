<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="Categoria")
 * @ORM\Entity
 */
class Categoria
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=70, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Ilustracion", type="text", length=16, nullable=true)
     */
    private $ilustracion;

    /**
     * @var string
     *
     * @ORM\Column(name="RecargoMB", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $recargomb;

    /**
     * @var string
     *
     * @ORM\Column(name="DescuentoMB", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $descuentomb;

    /**
     * @var string
     *
     * @ORM\Column(name="RecargoMC", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $recargomc;

    /**
     * @var string
     *
     * @ORM\Column(name="DescuentoMC", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $descuentomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoRecargoMB", type="smallint", nullable=false)
     */
    private $tiporecargomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoRecargoMC", type="smallint", nullable=false)
     */
    private $tiporecargomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoDescuentoMB", type="smallint", nullable=false)
     */
    private $tipodescuentomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoDescuentoMC", type="smallint", nullable=false)
     */
    private $tipodescuentomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Impuesto", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $impuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="Comision", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $comision;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMBL1", type="integer", nullable=false)
     */
    private $preciovenmbl1;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMBL2", type="integer", nullable=false)
     */
    private $preciovenmbl2;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMBL3", type="integer", nullable=false)
     */
    private $preciovenmbl3;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMBL4", type="integer", nullable=false)
     */
    private $preciovenmbl4;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMBL5", type="integer", nullable=false)
     */
    private $preciovenmbl5;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMBL6", type="integer", nullable=false)
     */
    private $preciovenmbl6;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMBL7", type="integer", nullable=false)
     */
    private $preciovenmbl7;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMBL8", type="integer", nullable=false)
     */
    private $preciovenmbl8;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMBL9", type="integer", nullable=false)
     */
    private $preciovenmbl9;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMBL10", type="integer", nullable=false)
     */
    private $preciovenmbl10;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMCL1", type="integer", nullable=false)
     */
    private $preciovenmcl1;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMCL2", type="integer", nullable=false)
     */
    private $preciovenmcl2;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMCL3", type="integer", nullable=false)
     */
    private $preciovenmcl3;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMCL4", type="integer", nullable=false)
     */
    private $preciovenmcl4;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMCL5", type="integer", nullable=false)
     */
    private $preciovenmcl5;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMCL6", type="integer", nullable=false)
     */
    private $preciovenmcl6;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMCL7", type="integer", nullable=false)
     */
    private $preciovenmcl7;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMCL8", type="integer", nullable=false)
     */
    private $preciovenmcl8;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMCL9", type="integer", nullable=false)
     */
    private $preciovenmcl9;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioVenMCL10", type="integer", nullable=false)
     */
    private $preciovenmcl10;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoRecargoL", type="smallint", nullable=false)
     */
    private $tiporecargol;

    /**
     * @var boolean
     *
     * @ORM\Column(name="VIP", type="boolean", nullable=false)
     */
    private $vip;



    /**
     * Get idCategoria
     *
     * @return string 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Categoria
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Categoria
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set ilustracion
     *
     * @param string $ilustracion
     * @return Categoria
     */
    public function setIlustracion($ilustracion)
    {
        $this->ilustracion = $ilustracion;

        return $this;
    }

    /**
     * Get ilustracion
     *
     * @return string 
     */
    public function getIlustracion()
    {
        return $this->ilustracion;
    }

    /**
     * Set recargomb
     *
     * @param string $recargomb
     * @return Categoria
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
     * Set descuentomb
     *
     * @param string $descuentomb
     * @return Categoria
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
     * Set recargomc
     *
     * @param string $recargomc
     * @return Categoria
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
     * Set descuentomc
     *
     * @param string $descuentomc
     * @return Categoria
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
     * Set tiporecargomb
     *
     * @param integer $tiporecargomb
     * @return Categoria
     */
    public function setTiporecargomb($tiporecargomb)
    {
        $this->tiporecargomb = $tiporecargomb;

        return $this;
    }

    /**
     * Get tiporecargomb
     *
     * @return integer 
     */
    public function getTiporecargomb()
    {
        return $this->tiporecargomb;
    }

    /**
     * Set tiporecargomc
     *
     * @param integer $tiporecargomc
     * @return Categoria
     */
    public function setTiporecargomc($tiporecargomc)
    {
        $this->tiporecargomc = $tiporecargomc;

        return $this;
    }

    /**
     * Get tiporecargomc
     *
     * @return integer 
     */
    public function getTiporecargomc()
    {
        return $this->tiporecargomc;
    }

    /**
     * Set tipodescuentomb
     *
     * @param integer $tipodescuentomb
     * @return Categoria
     */
    public function setTipodescuentomb($tipodescuentomb)
    {
        $this->tipodescuentomb = $tipodescuentomb;

        return $this;
    }

    /**
     * Get tipodescuentomb
     *
     * @return integer 
     */
    public function getTipodescuentomb()
    {
        return $this->tipodescuentomb;
    }

    /**
     * Set tipodescuentomc
     *
     * @param integer $tipodescuentomc
     * @return Categoria
     */
    public function setTipodescuentomc($tipodescuentomc)
    {
        $this->tipodescuentomc = $tipodescuentomc;

        return $this;
    }

    /**
     * Get tipodescuentomc
     *
     * @return integer 
     */
    public function getTipodescuentomc()
    {
        return $this->tipodescuentomc;
    }

    /**
     * Set impuesto
     *
     * @param string $impuesto
     * @return Categoria
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get impuesto
     *
     * @return string 
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set comision
     *
     * @param string $comision
     * @return Categoria
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return string 
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set preciovenmbl1
     *
     * @param integer $preciovenmbl1
     * @return Categoria
     */
    public function setPreciovenmbl1($preciovenmbl1)
    {
        $this->preciovenmbl1 = $preciovenmbl1;

        return $this;
    }

    /**
     * Get preciovenmbl1
     *
     * @return integer 
     */
    public function getPreciovenmbl1()
    {
        return $this->preciovenmbl1;
    }

    /**
     * Set preciovenmbl2
     *
     * @param integer $preciovenmbl2
     * @return Categoria
     */
    public function setPreciovenmbl2($preciovenmbl2)
    {
        $this->preciovenmbl2 = $preciovenmbl2;

        return $this;
    }

    /**
     * Get preciovenmbl2
     *
     * @return integer 
     */
    public function getPreciovenmbl2()
    {
        return $this->preciovenmbl2;
    }

    /**
     * Set preciovenmbl3
     *
     * @param integer $preciovenmbl3
     * @return Categoria
     */
    public function setPreciovenmbl3($preciovenmbl3)
    {
        $this->preciovenmbl3 = $preciovenmbl3;

        return $this;
    }

    /**
     * Get preciovenmbl3
     *
     * @return integer 
     */
    public function getPreciovenmbl3()
    {
        return $this->preciovenmbl3;
    }

    /**
     * Set preciovenmbl4
     *
     * @param integer $preciovenmbl4
     * @return Categoria
     */
    public function setPreciovenmbl4($preciovenmbl4)
    {
        $this->preciovenmbl4 = $preciovenmbl4;

        return $this;
    }

    /**
     * Get preciovenmbl4
     *
     * @return integer 
     */
    public function getPreciovenmbl4()
    {
        return $this->preciovenmbl4;
    }

    /**
     * Set preciovenmbl5
     *
     * @param integer $preciovenmbl5
     * @return Categoria
     */
    public function setPreciovenmbl5($preciovenmbl5)
    {
        $this->preciovenmbl5 = $preciovenmbl5;

        return $this;
    }

    /**
     * Get preciovenmbl5
     *
     * @return integer 
     */
    public function getPreciovenmbl5()
    {
        return $this->preciovenmbl5;
    }

    /**
     * Set preciovenmbl6
     *
     * @param integer $preciovenmbl6
     * @return Categoria
     */
    public function setPreciovenmbl6($preciovenmbl6)
    {
        $this->preciovenmbl6 = $preciovenmbl6;

        return $this;
    }

    /**
     * Get preciovenmbl6
     *
     * @return integer 
     */
    public function getPreciovenmbl6()
    {
        return $this->preciovenmbl6;
    }

    /**
     * Set preciovenmbl7
     *
     * @param integer $preciovenmbl7
     * @return Categoria
     */
    public function setPreciovenmbl7($preciovenmbl7)
    {
        $this->preciovenmbl7 = $preciovenmbl7;

        return $this;
    }

    /**
     * Get preciovenmbl7
     *
     * @return integer 
     */
    public function getPreciovenmbl7()
    {
        return $this->preciovenmbl7;
    }

    /**
     * Set preciovenmbl8
     *
     * @param integer $preciovenmbl8
     * @return Categoria
     */
    public function setPreciovenmbl8($preciovenmbl8)
    {
        $this->preciovenmbl8 = $preciovenmbl8;

        return $this;
    }

    /**
     * Get preciovenmbl8
     *
     * @return integer 
     */
    public function getPreciovenmbl8()
    {
        return $this->preciovenmbl8;
    }

    /**
     * Set preciovenmbl9
     *
     * @param integer $preciovenmbl9
     * @return Categoria
     */
    public function setPreciovenmbl9($preciovenmbl9)
    {
        $this->preciovenmbl9 = $preciovenmbl9;

        return $this;
    }

    /**
     * Get preciovenmbl9
     *
     * @return integer 
     */
    public function getPreciovenmbl9()
    {
        return $this->preciovenmbl9;
    }

    /**
     * Set preciovenmbl10
     *
     * @param integer $preciovenmbl10
     * @return Categoria
     */
    public function setPreciovenmbl10($preciovenmbl10)
    {
        $this->preciovenmbl10 = $preciovenmbl10;

        return $this;
    }

    /**
     * Get preciovenmbl10
     *
     * @return integer 
     */
    public function getPreciovenmbl10()
    {
        return $this->preciovenmbl10;
    }

    /**
     * Set preciovenmcl1
     *
     * @param integer $preciovenmcl1
     * @return Categoria
     */
    public function setPreciovenmcl1($preciovenmcl1)
    {
        $this->preciovenmcl1 = $preciovenmcl1;

        return $this;
    }

    /**
     * Get preciovenmcl1
     *
     * @return integer 
     */
    public function getPreciovenmcl1()
    {
        return $this->preciovenmcl1;
    }

    /**
     * Set preciovenmcl2
     *
     * @param integer $preciovenmcl2
     * @return Categoria
     */
    public function setPreciovenmcl2($preciovenmcl2)
    {
        $this->preciovenmcl2 = $preciovenmcl2;

        return $this;
    }

    /**
     * Get preciovenmcl2
     *
     * @return integer 
     */
    public function getPreciovenmcl2()
    {
        return $this->preciovenmcl2;
    }

    /**
     * Set preciovenmcl3
     *
     * @param integer $preciovenmcl3
     * @return Categoria
     */
    public function setPreciovenmcl3($preciovenmcl3)
    {
        $this->preciovenmcl3 = $preciovenmcl3;

        return $this;
    }

    /**
     * Get preciovenmcl3
     *
     * @return integer 
     */
    public function getPreciovenmcl3()
    {
        return $this->preciovenmcl3;
    }

    /**
     * Set preciovenmcl4
     *
     * @param integer $preciovenmcl4
     * @return Categoria
     */
    public function setPreciovenmcl4($preciovenmcl4)
    {
        $this->preciovenmcl4 = $preciovenmcl4;

        return $this;
    }

    /**
     * Get preciovenmcl4
     *
     * @return integer 
     */
    public function getPreciovenmcl4()
    {
        return $this->preciovenmcl4;
    }

    /**
     * Set preciovenmcl5
     *
     * @param integer $preciovenmcl5
     * @return Categoria
     */
    public function setPreciovenmcl5($preciovenmcl5)
    {
        $this->preciovenmcl5 = $preciovenmcl5;

        return $this;
    }

    /**
     * Get preciovenmcl5
     *
     * @return integer 
     */
    public function getPreciovenmcl5()
    {
        return $this->preciovenmcl5;
    }

    /**
     * Set preciovenmcl6
     *
     * @param integer $preciovenmcl6
     * @return Categoria
     */
    public function setPreciovenmcl6($preciovenmcl6)
    {
        $this->preciovenmcl6 = $preciovenmcl6;

        return $this;
    }

    /**
     * Get preciovenmcl6
     *
     * @return integer 
     */
    public function getPreciovenmcl6()
    {
        return $this->preciovenmcl6;
    }

    /**
     * Set preciovenmcl7
     *
     * @param integer $preciovenmcl7
     * @return Categoria
     */
    public function setPreciovenmcl7($preciovenmcl7)
    {
        $this->preciovenmcl7 = $preciovenmcl7;

        return $this;
    }

    /**
     * Get preciovenmcl7
     *
     * @return integer 
     */
    public function getPreciovenmcl7()
    {
        return $this->preciovenmcl7;
    }

    /**
     * Set preciovenmcl8
     *
     * @param integer $preciovenmcl8
     * @return Categoria
     */
    public function setPreciovenmcl8($preciovenmcl8)
    {
        $this->preciovenmcl8 = $preciovenmcl8;

        return $this;
    }

    /**
     * Get preciovenmcl8
     *
     * @return integer 
     */
    public function getPreciovenmcl8()
    {
        return $this->preciovenmcl8;
    }

    /**
     * Set preciovenmcl9
     *
     * @param integer $preciovenmcl9
     * @return Categoria
     */
    public function setPreciovenmcl9($preciovenmcl9)
    {
        $this->preciovenmcl9 = $preciovenmcl9;

        return $this;
    }

    /**
     * Get preciovenmcl9
     *
     * @return integer 
     */
    public function getPreciovenmcl9()
    {
        return $this->preciovenmcl9;
    }

    /**
     * Set preciovenmcl10
     *
     * @param integer $preciovenmcl10
     * @return Categoria
     */
    public function setPreciovenmcl10($preciovenmcl10)
    {
        $this->preciovenmcl10 = $preciovenmcl10;

        return $this;
    }

    /**
     * Get preciovenmcl10
     *
     * @return integer 
     */
    public function getPreciovenmcl10()
    {
        return $this->preciovenmcl10;
    }

    /**
     * Set tiporecargol
     *
     * @param integer $tiporecargol
     * @return Categoria
     */
    public function setTiporecargol($tiporecargol)
    {
        $this->tiporecargol = $tiporecargol;

        return $this;
    }

    /**
     * Get tiporecargol
     *
     * @return integer 
     */
    public function getTiporecargol()
    {
        return $this->tiporecargol;
    }

    /**
     * Set vip
     *
     * @param boolean $vip
     * @return Categoria
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return boolean 
     */
    public function getVip()
    {
        return $this->vip;
    }
}
