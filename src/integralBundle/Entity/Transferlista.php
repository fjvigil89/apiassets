<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transferlista
 *
 * @ORM\Table(name="TransferLista")
 * @ORM\Entity
 */
class Transferlista
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
     * @ORM\Column(name="PrecioVenMBL1", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl1;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL2", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl2;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL3", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl3;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL4", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl4;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL5", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl5;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL1", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl1;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL2", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl2;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL3", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl3;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL4", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl4;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL5", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl5;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL6", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl6;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL7", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl7;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL8", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl8;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL9", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl9;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL10", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl10;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL6", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl6;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL7", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl7;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL8", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl8;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL9", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl9;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL10", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl10;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL11", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl11;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL21", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl21;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL31", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl31;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL41", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl41;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL51", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl51;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL11", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl11;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL21", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl21;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL31", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl31;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL41", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl41;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL51", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl51;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL61", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl61;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL71", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl71;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL81", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl81;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL91", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl91;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMBL101", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmbl101;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL61", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl61;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL71", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl71;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL81", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl81;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL91", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl91;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioVenMCL101", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $preciovenmcl101;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Calcular", type="boolean", nullable=false)
     */
    private $calcular;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioCostoCalculoMB", type="decimal", precision=18, scale=8, nullable=false)
     */
    private $preciocostocalculomb;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioCostoCalculoMC", type="decimal", precision=18, scale=8, nullable=false)
     */
    private $preciocostocalculomc;

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
     * @var boolean
     *
     * @ORM\Column(name="Producto_oServicio", type="boolean", nullable=false)
     */
    private $productoOservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="ListaModif", type="string", length=10, nullable=false)
     */
    private $listamodif;

    /**
     * @var string
     *
     * @ORM\Column(name="ListaModifMC", type="string", length=10, nullable=false)
     */
    private $listamodifmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=10, nullable=false)
     */
    private $idCategoria;



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
     * @return Transferlista
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
     * @return Transferlista
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
     * @return Transferlista
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
     * Set preciovenmbl1
     *
     * @param string $preciovenmbl1
     * @return Transferlista
     */
    public function setPreciovenmbl1($preciovenmbl1)
    {
        $this->preciovenmbl1 = $preciovenmbl1;

        return $this;
    }

    /**
     * Get preciovenmbl1
     *
     * @return string 
     */
    public function getPreciovenmbl1()
    {
        return $this->preciovenmbl1;
    }

    /**
     * Set preciovenmbl2
     *
     * @param string $preciovenmbl2
     * @return Transferlista
     */
    public function setPreciovenmbl2($preciovenmbl2)
    {
        $this->preciovenmbl2 = $preciovenmbl2;

        return $this;
    }

    /**
     * Get preciovenmbl2
     *
     * @return string 
     */
    public function getPreciovenmbl2()
    {
        return $this->preciovenmbl2;
    }

    /**
     * Set preciovenmbl3
     *
     * @param string $preciovenmbl3
     * @return Transferlista
     */
    public function setPreciovenmbl3($preciovenmbl3)
    {
        $this->preciovenmbl3 = $preciovenmbl3;

        return $this;
    }

    /**
     * Get preciovenmbl3
     *
     * @return string 
     */
    public function getPreciovenmbl3()
    {
        return $this->preciovenmbl3;
    }

    /**
     * Set preciovenmbl4
     *
     * @param string $preciovenmbl4
     * @return Transferlista
     */
    public function setPreciovenmbl4($preciovenmbl4)
    {
        $this->preciovenmbl4 = $preciovenmbl4;

        return $this;
    }

    /**
     * Get preciovenmbl4
     *
     * @return string 
     */
    public function getPreciovenmbl4()
    {
        return $this->preciovenmbl4;
    }

    /**
     * Set preciovenmbl5
     *
     * @param string $preciovenmbl5
     * @return Transferlista
     */
    public function setPreciovenmbl5($preciovenmbl5)
    {
        $this->preciovenmbl5 = $preciovenmbl5;

        return $this;
    }

    /**
     * Get preciovenmbl5
     *
     * @return string 
     */
    public function getPreciovenmbl5()
    {
        return $this->preciovenmbl5;
    }

    /**
     * Set preciovenmcl1
     *
     * @param string $preciovenmcl1
     * @return Transferlista
     */
    public function setPreciovenmcl1($preciovenmcl1)
    {
        $this->preciovenmcl1 = $preciovenmcl1;

        return $this;
    }

    /**
     * Get preciovenmcl1
     *
     * @return string 
     */
    public function getPreciovenmcl1()
    {
        return $this->preciovenmcl1;
    }

    /**
     * Set preciovenmcl2
     *
     * @param string $preciovenmcl2
     * @return Transferlista
     */
    public function setPreciovenmcl2($preciovenmcl2)
    {
        $this->preciovenmcl2 = $preciovenmcl2;

        return $this;
    }

    /**
     * Get preciovenmcl2
     *
     * @return string 
     */
    public function getPreciovenmcl2()
    {
        return $this->preciovenmcl2;
    }

    /**
     * Set preciovenmcl3
     *
     * @param string $preciovenmcl3
     * @return Transferlista
     */
    public function setPreciovenmcl3($preciovenmcl3)
    {
        $this->preciovenmcl3 = $preciovenmcl3;

        return $this;
    }

    /**
     * Get preciovenmcl3
     *
     * @return string 
     */
    public function getPreciovenmcl3()
    {
        return $this->preciovenmcl3;
    }

    /**
     * Set preciovenmcl4
     *
     * @param string $preciovenmcl4
     * @return Transferlista
     */
    public function setPreciovenmcl4($preciovenmcl4)
    {
        $this->preciovenmcl4 = $preciovenmcl4;

        return $this;
    }

    /**
     * Get preciovenmcl4
     *
     * @return string 
     */
    public function getPreciovenmcl4()
    {
        return $this->preciovenmcl4;
    }

    /**
     * Set preciovenmcl5
     *
     * @param string $preciovenmcl5
     * @return Transferlista
     */
    public function setPreciovenmcl5($preciovenmcl5)
    {
        $this->preciovenmcl5 = $preciovenmcl5;

        return $this;
    }

    /**
     * Get preciovenmcl5
     *
     * @return string 
     */
    public function getPreciovenmcl5()
    {
        return $this->preciovenmcl5;
    }

    /**
     * Set preciovenmbl6
     *
     * @param string $preciovenmbl6
     * @return Transferlista
     */
    public function setPreciovenmbl6($preciovenmbl6)
    {
        $this->preciovenmbl6 = $preciovenmbl6;

        return $this;
    }

    /**
     * Get preciovenmbl6
     *
     * @return string 
     */
    public function getPreciovenmbl6()
    {
        return $this->preciovenmbl6;
    }

    /**
     * Set preciovenmbl7
     *
     * @param string $preciovenmbl7
     * @return Transferlista
     */
    public function setPreciovenmbl7($preciovenmbl7)
    {
        $this->preciovenmbl7 = $preciovenmbl7;

        return $this;
    }

    /**
     * Get preciovenmbl7
     *
     * @return string 
     */
    public function getPreciovenmbl7()
    {
        return $this->preciovenmbl7;
    }

    /**
     * Set preciovenmbl8
     *
     * @param string $preciovenmbl8
     * @return Transferlista
     */
    public function setPreciovenmbl8($preciovenmbl8)
    {
        $this->preciovenmbl8 = $preciovenmbl8;

        return $this;
    }

    /**
     * Get preciovenmbl8
     *
     * @return string 
     */
    public function getPreciovenmbl8()
    {
        return $this->preciovenmbl8;
    }

    /**
     * Set preciovenmbl9
     *
     * @param string $preciovenmbl9
     * @return Transferlista
     */
    public function setPreciovenmbl9($preciovenmbl9)
    {
        $this->preciovenmbl9 = $preciovenmbl9;

        return $this;
    }

    /**
     * Get preciovenmbl9
     *
     * @return string 
     */
    public function getPreciovenmbl9()
    {
        return $this->preciovenmbl9;
    }

    /**
     * Set preciovenmbl10
     *
     * @param string $preciovenmbl10
     * @return Transferlista
     */
    public function setPreciovenmbl10($preciovenmbl10)
    {
        $this->preciovenmbl10 = $preciovenmbl10;

        return $this;
    }

    /**
     * Get preciovenmbl10
     *
     * @return string 
     */
    public function getPreciovenmbl10()
    {
        return $this->preciovenmbl10;
    }

    /**
     * Set preciovenmcl6
     *
     * @param string $preciovenmcl6
     * @return Transferlista
     */
    public function setPreciovenmcl6($preciovenmcl6)
    {
        $this->preciovenmcl6 = $preciovenmcl6;

        return $this;
    }

    /**
     * Get preciovenmcl6
     *
     * @return string 
     */
    public function getPreciovenmcl6()
    {
        return $this->preciovenmcl6;
    }

    /**
     * Set preciovenmcl7
     *
     * @param string $preciovenmcl7
     * @return Transferlista
     */
    public function setPreciovenmcl7($preciovenmcl7)
    {
        $this->preciovenmcl7 = $preciovenmcl7;

        return $this;
    }

    /**
     * Get preciovenmcl7
     *
     * @return string 
     */
    public function getPreciovenmcl7()
    {
        return $this->preciovenmcl7;
    }

    /**
     * Set preciovenmcl8
     *
     * @param string $preciovenmcl8
     * @return Transferlista
     */
    public function setPreciovenmcl8($preciovenmcl8)
    {
        $this->preciovenmcl8 = $preciovenmcl8;

        return $this;
    }

    /**
     * Get preciovenmcl8
     *
     * @return string 
     */
    public function getPreciovenmcl8()
    {
        return $this->preciovenmcl8;
    }

    /**
     * Set preciovenmcl9
     *
     * @param string $preciovenmcl9
     * @return Transferlista
     */
    public function setPreciovenmcl9($preciovenmcl9)
    {
        $this->preciovenmcl9 = $preciovenmcl9;

        return $this;
    }

    /**
     * Get preciovenmcl9
     *
     * @return string 
     */
    public function getPreciovenmcl9()
    {
        return $this->preciovenmcl9;
    }

    /**
     * Set preciovenmcl10
     *
     * @param string $preciovenmcl10
     * @return Transferlista
     */
    public function setPreciovenmcl10($preciovenmcl10)
    {
        $this->preciovenmcl10 = $preciovenmcl10;

        return $this;
    }

    /**
     * Get preciovenmcl10
     *
     * @return string 
     */
    public function getPreciovenmcl10()
    {
        return $this->preciovenmcl10;
    }

    /**
     * Set preciovenmbl11
     *
     * @param string $preciovenmbl11
     * @return Transferlista
     */
    public function setPreciovenmbl11($preciovenmbl11)
    {
        $this->preciovenmbl11 = $preciovenmbl11;

        return $this;
    }

    /**
     * Get preciovenmbl11
     *
     * @return string 
     */
    public function getPreciovenmbl11()
    {
        return $this->preciovenmbl11;
    }

    /**
     * Set preciovenmbl21
     *
     * @param string $preciovenmbl21
     * @return Transferlista
     */
    public function setPreciovenmbl21($preciovenmbl21)
    {
        $this->preciovenmbl21 = $preciovenmbl21;

        return $this;
    }

    /**
     * Get preciovenmbl21
     *
     * @return string 
     */
    public function getPreciovenmbl21()
    {
        return $this->preciovenmbl21;
    }

    /**
     * Set preciovenmbl31
     *
     * @param string $preciovenmbl31
     * @return Transferlista
     */
    public function setPreciovenmbl31($preciovenmbl31)
    {
        $this->preciovenmbl31 = $preciovenmbl31;

        return $this;
    }

    /**
     * Get preciovenmbl31
     *
     * @return string 
     */
    public function getPreciovenmbl31()
    {
        return $this->preciovenmbl31;
    }

    /**
     * Set preciovenmbl41
     *
     * @param string $preciovenmbl41
     * @return Transferlista
     */
    public function setPreciovenmbl41($preciovenmbl41)
    {
        $this->preciovenmbl41 = $preciovenmbl41;

        return $this;
    }

    /**
     * Get preciovenmbl41
     *
     * @return string 
     */
    public function getPreciovenmbl41()
    {
        return $this->preciovenmbl41;
    }

    /**
     * Set preciovenmbl51
     *
     * @param string $preciovenmbl51
     * @return Transferlista
     */
    public function setPreciovenmbl51($preciovenmbl51)
    {
        $this->preciovenmbl51 = $preciovenmbl51;

        return $this;
    }

    /**
     * Get preciovenmbl51
     *
     * @return string 
     */
    public function getPreciovenmbl51()
    {
        return $this->preciovenmbl51;
    }

    /**
     * Set preciovenmcl11
     *
     * @param string $preciovenmcl11
     * @return Transferlista
     */
    public function setPreciovenmcl11($preciovenmcl11)
    {
        $this->preciovenmcl11 = $preciovenmcl11;

        return $this;
    }

    /**
     * Get preciovenmcl11
     *
     * @return string 
     */
    public function getPreciovenmcl11()
    {
        return $this->preciovenmcl11;
    }

    /**
     * Set preciovenmcl21
     *
     * @param string $preciovenmcl21
     * @return Transferlista
     */
    public function setPreciovenmcl21($preciovenmcl21)
    {
        $this->preciovenmcl21 = $preciovenmcl21;

        return $this;
    }

    /**
     * Get preciovenmcl21
     *
     * @return string 
     */
    public function getPreciovenmcl21()
    {
        return $this->preciovenmcl21;
    }

    /**
     * Set preciovenmcl31
     *
     * @param string $preciovenmcl31
     * @return Transferlista
     */
    public function setPreciovenmcl31($preciovenmcl31)
    {
        $this->preciovenmcl31 = $preciovenmcl31;

        return $this;
    }

    /**
     * Get preciovenmcl31
     *
     * @return string 
     */
    public function getPreciovenmcl31()
    {
        return $this->preciovenmcl31;
    }

    /**
     * Set preciovenmcl41
     *
     * @param string $preciovenmcl41
     * @return Transferlista
     */
    public function setPreciovenmcl41($preciovenmcl41)
    {
        $this->preciovenmcl41 = $preciovenmcl41;

        return $this;
    }

    /**
     * Get preciovenmcl41
     *
     * @return string 
     */
    public function getPreciovenmcl41()
    {
        return $this->preciovenmcl41;
    }

    /**
     * Set preciovenmcl51
     *
     * @param string $preciovenmcl51
     * @return Transferlista
     */
    public function setPreciovenmcl51($preciovenmcl51)
    {
        $this->preciovenmcl51 = $preciovenmcl51;

        return $this;
    }

    /**
     * Get preciovenmcl51
     *
     * @return string 
     */
    public function getPreciovenmcl51()
    {
        return $this->preciovenmcl51;
    }

    /**
     * Set preciovenmbl61
     *
     * @param string $preciovenmbl61
     * @return Transferlista
     */
    public function setPreciovenmbl61($preciovenmbl61)
    {
        $this->preciovenmbl61 = $preciovenmbl61;

        return $this;
    }

    /**
     * Get preciovenmbl61
     *
     * @return string 
     */
    public function getPreciovenmbl61()
    {
        return $this->preciovenmbl61;
    }

    /**
     * Set preciovenmbl71
     *
     * @param string $preciovenmbl71
     * @return Transferlista
     */
    public function setPreciovenmbl71($preciovenmbl71)
    {
        $this->preciovenmbl71 = $preciovenmbl71;

        return $this;
    }

    /**
     * Get preciovenmbl71
     *
     * @return string 
     */
    public function getPreciovenmbl71()
    {
        return $this->preciovenmbl71;
    }

    /**
     * Set preciovenmbl81
     *
     * @param string $preciovenmbl81
     * @return Transferlista
     */
    public function setPreciovenmbl81($preciovenmbl81)
    {
        $this->preciovenmbl81 = $preciovenmbl81;

        return $this;
    }

    /**
     * Get preciovenmbl81
     *
     * @return string 
     */
    public function getPreciovenmbl81()
    {
        return $this->preciovenmbl81;
    }

    /**
     * Set preciovenmbl91
     *
     * @param string $preciovenmbl91
     * @return Transferlista
     */
    public function setPreciovenmbl91($preciovenmbl91)
    {
        $this->preciovenmbl91 = $preciovenmbl91;

        return $this;
    }

    /**
     * Get preciovenmbl91
     *
     * @return string 
     */
    public function getPreciovenmbl91()
    {
        return $this->preciovenmbl91;
    }

    /**
     * Set preciovenmbl101
     *
     * @param string $preciovenmbl101
     * @return Transferlista
     */
    public function setPreciovenmbl101($preciovenmbl101)
    {
        $this->preciovenmbl101 = $preciovenmbl101;

        return $this;
    }

    /**
     * Get preciovenmbl101
     *
     * @return string 
     */
    public function getPreciovenmbl101()
    {
        return $this->preciovenmbl101;
    }

    /**
     * Set preciovenmcl61
     *
     * @param string $preciovenmcl61
     * @return Transferlista
     */
    public function setPreciovenmcl61($preciovenmcl61)
    {
        $this->preciovenmcl61 = $preciovenmcl61;

        return $this;
    }

    /**
     * Get preciovenmcl61
     *
     * @return string 
     */
    public function getPreciovenmcl61()
    {
        return $this->preciovenmcl61;
    }

    /**
     * Set preciovenmcl71
     *
     * @param string $preciovenmcl71
     * @return Transferlista
     */
    public function setPreciovenmcl71($preciovenmcl71)
    {
        $this->preciovenmcl71 = $preciovenmcl71;

        return $this;
    }

    /**
     * Get preciovenmcl71
     *
     * @return string 
     */
    public function getPreciovenmcl71()
    {
        return $this->preciovenmcl71;
    }

    /**
     * Set preciovenmcl81
     *
     * @param string $preciovenmcl81
     * @return Transferlista
     */
    public function setPreciovenmcl81($preciovenmcl81)
    {
        $this->preciovenmcl81 = $preciovenmcl81;

        return $this;
    }

    /**
     * Get preciovenmcl81
     *
     * @return string 
     */
    public function getPreciovenmcl81()
    {
        return $this->preciovenmcl81;
    }

    /**
     * Set preciovenmcl91
     *
     * @param string $preciovenmcl91
     * @return Transferlista
     */
    public function setPreciovenmcl91($preciovenmcl91)
    {
        $this->preciovenmcl91 = $preciovenmcl91;

        return $this;
    }

    /**
     * Get preciovenmcl91
     *
     * @return string 
     */
    public function getPreciovenmcl91()
    {
        return $this->preciovenmcl91;
    }

    /**
     * Set preciovenmcl101
     *
     * @param string $preciovenmcl101
     * @return Transferlista
     */
    public function setPreciovenmcl101($preciovenmcl101)
    {
        $this->preciovenmcl101 = $preciovenmcl101;

        return $this;
    }

    /**
     * Get preciovenmcl101
     *
     * @return string 
     */
    public function getPreciovenmcl101()
    {
        return $this->preciovenmcl101;
    }

    /**
     * Set calcular
     *
     * @param boolean $calcular
     * @return Transferlista
     */
    public function setCalcular($calcular)
    {
        $this->calcular = $calcular;

        return $this;
    }

    /**
     * Get calcular
     *
     * @return boolean 
     */
    public function getCalcular()
    {
        return $this->calcular;
    }

    /**
     * Set preciocostocalculomb
     *
     * @param string $preciocostocalculomb
     * @return Transferlista
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
     * @return Transferlista
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
     * Set precioVentaumalmacenmb
     *
     * @param string $precioVentaumalmacenmb
     * @return Transferlista
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
     * @return Transferlista
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
     * Set productoOservicio
     *
     * @param boolean $productoOservicio
     * @return Transferlista
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
     * Set listamodif
     *
     * @param string $listamodif
     * @return Transferlista
     */
    public function setListamodif($listamodif)
    {
        $this->listamodif = $listamodif;

        return $this;
    }

    /**
     * Get listamodif
     *
     * @return string 
     */
    public function getListamodif()
    {
        return $this->listamodif;
    }

    /**
     * Set listamodifmc
     *
     * @param string $listamodifmc
     * @return Transferlista
     */
    public function setListamodifmc($listamodifmc)
    {
        $this->listamodifmc = $listamodifmc;

        return $this;
    }

    /**
     * Get listamodifmc
     *
     * @return string 
     */
    public function getListamodifmc()
    {
        return $this->listamodifmc;
    }

    /**
     * Set idCategoria
     *
     * @param string $idCategoria
     * @return Transferlista
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return string 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
}
