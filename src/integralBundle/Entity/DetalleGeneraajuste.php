<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleGeneraajuste
 *
 * @ORM\Table(name="Detalle_GeneraAjuste")
 * @ORM\Entity
 */
class DetalleGeneraajuste
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
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="integer", nullable=false)
     */
    private $items;

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
     * @var string
     *
     * @ORM\Column(name="Id_ProductoNew", type="string", length=20, nullable=false)
     */
    private $idProductonew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausasAjuste", type="string", length=5, nullable=false)
     */
    private $idCausasajuste;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Aumenta", type="boolean", nullable=false)
     */
    private $aumenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo_Existencia", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $saldoExistencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Producto_oServicio_c", type="smallint", nullable=false)
     */
    private $productoOservicioC;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=12, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasificacionNew", type="string", length=12, nullable=false)
     */
    private $idClasificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Partida", type="string", length=10, nullable=false)
     */
    private $idPartida;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ParNew", type="string", length=10, nullable=false)
     */
    private $idParnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Pais", type="string", length=5, nullable=false)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="PaisNew", type="string", length=5, nullable=false)
     */
    private $paisnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_New", type="string", length=255, nullable=false)
     */
    private $descNew;

    /**
     * @var string
     *
     * @ORM\Column(name="Um_New", type="string", length=5, nullable=false)
     */
    private $umNew;

    /**
     * @var string
     *
     * @ORM\Column(name="FactorConver", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $factorconver;

    /**
     * @var integer
     *
     * @ORM\Column(name="PesoBruto", type="integer", nullable=false)
     */
    private $pesobruto;

    /**
     * @var integer
     *
     * @ORM\Column(name="PesoBNew", type="integer", nullable=false)
     */
    private $pesobnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="PesoNeto", type="integer", nullable=false)
     */
    private $pesoneto;

    /**
     * @var integer
     *
     * @ORM\Column(name="PesoNNew", type="integer", nullable=false)
     */
    private $pesonnew;

    /**
     * @var string
     *
     * @ORM\Column(name="SubGrupo", type="string", length=4, nullable=false)
     */
    private $subgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="SubGNew", type="string", length=4, nullable=false)
     */
    private $subgnew;



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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetalleGeneraajuste
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
     * Set items
     *
     * @param integer $items
     * @return DetalleGeneraajuste
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
     * Set idProducto
     *
     * @param string $idProducto
     * @return DetalleGeneraajuste
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
     * @return DetalleGeneraajuste
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
     * Set descProducto
     *
     * @param string $descProducto
     * @return DetalleGeneraajuste
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
     * @return DetalleGeneraajuste
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
     * Set idProductonew
     *
     * @param string $idProductonew
     * @return DetalleGeneraajuste
     */
    public function setIdProductonew($idProductonew)
    {
        $this->idProductonew = $idProductonew;

        return $this;
    }

    /**
     * Get idProductonew
     *
     * @return string 
     */
    public function getIdProductonew()
    {
        return $this->idProductonew;
    }

    /**
     * Set idCausasajuste
     *
     * @param string $idCausasajuste
     * @return DetalleGeneraajuste
     */
    public function setIdCausasajuste($idCausasajuste)
    {
        $this->idCausasajuste = $idCausasajuste;

        return $this;
    }

    /**
     * Get idCausasajuste
     *
     * @return string 
     */
    public function getIdCausasajuste()
    {
        return $this->idCausasajuste;
    }

    /**
     * Set aumenta
     *
     * @param boolean $aumenta
     * @return DetalleGeneraajuste
     */
    public function setAumenta($aumenta)
    {
        $this->aumenta = $aumenta;

        return $this;
    }

    /**
     * Get aumenta
     *
     * @return boolean 
     */
    public function getAumenta()
    {
        return $this->aumenta;
    }

    /**
     * Set saldoExistencia
     *
     * @param string $saldoExistencia
     * @return DetalleGeneraajuste
     */
    public function setSaldoExistencia($saldoExistencia)
    {
        $this->saldoExistencia = $saldoExistencia;

        return $this;
    }

    /**
     * Get saldoExistencia
     *
     * @return string 
     */
    public function getSaldoExistencia()
    {
        return $this->saldoExistencia;
    }

    /**
     * Set productoOservicioC
     *
     * @param integer $productoOservicioC
     * @return DetalleGeneraajuste
     */
    public function setProductoOservicioC($productoOservicioC)
    {
        $this->productoOservicioC = $productoOservicioC;

        return $this;
    }

    /**
     * Get productoOservicioC
     *
     * @return integer 
     */
    public function getProductoOservicioC()
    {
        return $this->productoOservicioC;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return DetalleGeneraajuste
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set idClasificacionnew
     *
     * @param string $idClasificacionnew
     * @return DetalleGeneraajuste
     */
    public function setIdClasificacionnew($idClasificacionnew)
    {
        $this->idClasificacionnew = $idClasificacionnew;

        return $this;
    }

    /**
     * Get idClasificacionnew
     *
     * @return string 
     */
    public function getIdClasificacionnew()
    {
        return $this->idClasificacionnew;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return DetalleGeneraajuste
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
     * Set idPartida
     *
     * @param string $idPartida
     * @return DetalleGeneraajuste
     */
    public function setIdPartida($idPartida)
    {
        $this->idPartida = $idPartida;

        return $this;
    }

    /**
     * Get idPartida
     *
     * @return string 
     */
    public function getIdPartida()
    {
        return $this->idPartida;
    }

    /**
     * Set idParnew
     *
     * @param string $idParnew
     * @return DetalleGeneraajuste
     */
    public function setIdParnew($idParnew)
    {
        $this->idParnew = $idParnew;

        return $this;
    }

    /**
     * Get idParnew
     *
     * @return string 
     */
    public function getIdParnew()
    {
        return $this->idParnew;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return DetalleGeneraajuste
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set paisnew
     *
     * @param string $paisnew
     * @return DetalleGeneraajuste
     */
    public function setPaisnew($paisnew)
    {
        $this->paisnew = $paisnew;

        return $this;
    }

    /**
     * Get paisnew
     *
     * @return string 
     */
    public function getPaisnew()
    {
        return $this->paisnew;
    }

    /**
     * Set descNew
     *
     * @param string $descNew
     * @return DetalleGeneraajuste
     */
    public function setDescNew($descNew)
    {
        $this->descNew = $descNew;

        return $this;
    }

    /**
     * Get descNew
     *
     * @return string 
     */
    public function getDescNew()
    {
        return $this->descNew;
    }

    /**
     * Set umNew
     *
     * @param string $umNew
     * @return DetalleGeneraajuste
     */
    public function setUmNew($umNew)
    {
        $this->umNew = $umNew;

        return $this;
    }

    /**
     * Get umNew
     *
     * @return string 
     */
    public function getUmNew()
    {
        return $this->umNew;
    }

    /**
     * Set factorconver
     *
     * @param string $factorconver
     * @return DetalleGeneraajuste
     */
    public function setFactorconver($factorconver)
    {
        $this->factorconver = $factorconver;

        return $this;
    }

    /**
     * Get factorconver
     *
     * @return string 
     */
    public function getFactorconver()
    {
        return $this->factorconver;
    }

    /**
     * Set pesobruto
     *
     * @param integer $pesobruto
     * @return DetalleGeneraajuste
     */
    public function setPesobruto($pesobruto)
    {
        $this->pesobruto = $pesobruto;

        return $this;
    }

    /**
     * Get pesobruto
     *
     * @return integer 
     */
    public function getPesobruto()
    {
        return $this->pesobruto;
    }

    /**
     * Set pesobnew
     *
     * @param integer $pesobnew
     * @return DetalleGeneraajuste
     */
    public function setPesobnew($pesobnew)
    {
        $this->pesobnew = $pesobnew;

        return $this;
    }

    /**
     * Get pesobnew
     *
     * @return integer 
     */
    public function getPesobnew()
    {
        return $this->pesobnew;
    }

    /**
     * Set pesoneto
     *
     * @param integer $pesoneto
     * @return DetalleGeneraajuste
     */
    public function setPesoneto($pesoneto)
    {
        $this->pesoneto = $pesoneto;

        return $this;
    }

    /**
     * Get pesoneto
     *
     * @return integer 
     */
    public function getPesoneto()
    {
        return $this->pesoneto;
    }

    /**
     * Set pesonnew
     *
     * @param integer $pesonnew
     * @return DetalleGeneraajuste
     */
    public function setPesonnew($pesonnew)
    {
        $this->pesonnew = $pesonnew;

        return $this;
    }

    /**
     * Get pesonnew
     *
     * @return integer 
     */
    public function getPesonnew()
    {
        return $this->pesonnew;
    }

    /**
     * Set subgrupo
     *
     * @param string $subgrupo
     * @return DetalleGeneraajuste
     */
    public function setSubgrupo($subgrupo)
    {
        $this->subgrupo = $subgrupo;

        return $this;
    }

    /**
     * Get subgrupo
     *
     * @return string 
     */
    public function getSubgrupo()
    {
        return $this->subgrupo;
    }

    /**
     * Set subgnew
     *
     * @param string $subgnew
     * @return DetalleGeneraajuste
     */
    public function setSubgnew($subgnew)
    {
        $this->subgnew = $subgnew;

        return $this;
    }

    /**
     * Get subgnew
     *
     * @return string 
     */
    public function getSubgnew()
    {
        return $this->subgnew;
    }
}
