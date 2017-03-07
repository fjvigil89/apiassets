<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transfersm
 *
 * @ORM\Table(name="TransferSM")
 * @ORM\Entity
 */
class Transfersm
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
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

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
     * @ORM\Column(name="Um_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Almacen", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidadAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_SolicMerca", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidadSolicmerca;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo_Existencia", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $saldoExistencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoUmAlmacenMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostoumalmacenmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoUmAlmacenMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostoumalmacenmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteCosto_MB", type="integer", nullable=false)
     */
    private $importecostoMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteCosto_MC", type="integer", nullable=false)
     */
    private $importecostoMc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Lote", type="string", length=20, nullable=false)
     */
    private $idLote;

    /**
     * @var string
     *
     * @ORM\Column(name="Minimo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $minimo;

    /**
     * @var string
     *
     * @ORM\Column(name="Maximo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $maximo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

    /**
     * @var string
     *
     * @ORM\Column(name="FactorEmpaque", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $factorempaque;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=12, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Consigna", type="boolean", nullable=false)
     */
    private $consigna;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Partida", type="string", length=10, nullable=false)
     */
    private $idPartida;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ProductoProveedor", type="string", length=30, nullable=false)
     */
    private $idProductoproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Error", type="string", length=5, nullable=false)
     */
    private $error;

    /**
     * @var string
     *
     * @ORM\Column(name="Um_Import", type="string", length=5, nullable=false)
     */
    private $umImport;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consignamn", type="integer", nullable=false)
     */
    private $consignamn;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consignacuc", type="integer", nullable=false)
     */
    private $consignacuc;



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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Transfersm
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
     * Set idProducto
     *
     * @param string $idProducto
     * @return Transfersm
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
     * @return Transfersm
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
     * @return Transfersm
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
     * Set cantidadAlmacen
     *
     * @param string $cantidadAlmacen
     * @return Transfersm
     */
    public function setCantidadAlmacen($cantidadAlmacen)
    {
        $this->cantidadAlmacen = $cantidadAlmacen;

        return $this;
    }

    /**
     * Get cantidadAlmacen
     *
     * @return string 
     */
    public function getCantidadAlmacen()
    {
        return $this->cantidadAlmacen;
    }

    /**
     * Set cantidadSolicmerca
     *
     * @param string $cantidadSolicmerca
     * @return Transfersm
     */
    public function setCantidadSolicmerca($cantidadSolicmerca)
    {
        $this->cantidadSolicmerca = $cantidadSolicmerca;

        return $this;
    }

    /**
     * Get cantidadSolicmerca
     *
     * @return string 
     */
    public function getCantidadSolicmerca()
    {
        return $this->cantidadSolicmerca;
    }

    /**
     * Set saldoExistencia
     *
     * @param string $saldoExistencia
     * @return Transfersm
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
     * Set precioCostoumalmacenmb
     *
     * @param string $precioCostoumalmacenmb
     * @return Transfersm
     */
    public function setPrecioCostoumalmacenmb($precioCostoumalmacenmb)
    {
        $this->precioCostoumalmacenmb = $precioCostoumalmacenmb;

        return $this;
    }

    /**
     * Get precioCostoumalmacenmb
     *
     * @return string 
     */
    public function getPrecioCostoumalmacenmb()
    {
        return $this->precioCostoumalmacenmb;
    }

    /**
     * Set precioCostoumalmacenmc
     *
     * @param string $precioCostoumalmacenmc
     * @return Transfersm
     */
    public function setPrecioCostoumalmacenmc($precioCostoumalmacenmc)
    {
        $this->precioCostoumalmacenmc = $precioCostoumalmacenmc;

        return $this;
    }

    /**
     * Get precioCostoumalmacenmc
     *
     * @return string 
     */
    public function getPrecioCostoumalmacenmc()
    {
        return $this->precioCostoumalmacenmc;
    }

    /**
     * Set importecostoMb
     *
     * @param integer $importecostoMb
     * @return Transfersm
     */
    public function setImportecostoMb($importecostoMb)
    {
        $this->importecostoMb = $importecostoMb;

        return $this;
    }

    /**
     * Get importecostoMb
     *
     * @return integer 
     */
    public function getImportecostoMb()
    {
        return $this->importecostoMb;
    }

    /**
     * Set importecostoMc
     *
     * @param integer $importecostoMc
     * @return Transfersm
     */
    public function setImportecostoMc($importecostoMc)
    {
        $this->importecostoMc = $importecostoMc;

        return $this;
    }

    /**
     * Get importecostoMc
     *
     * @return integer 
     */
    public function getImportecostoMc()
    {
        return $this->importecostoMc;
    }

    /**
     * Set idLote
     *
     * @param string $idLote
     * @return Transfersm
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
     * Set minimo
     *
     * @param string $minimo
     * @return Transfersm
     */
    public function setMinimo($minimo)
    {
        $this->minimo = $minimo;

        return $this;
    }

    /**
     * Get minimo
     *
     * @return string 
     */
    public function getMinimo()
    {
        return $this->minimo;
    }

    /**
     * Set maximo
     *
     * @param string $maximo
     * @return Transfersm
     */
    public function setMaximo($maximo)
    {
        $this->maximo = $maximo;

        return $this;
    }

    /**
     * Get maximo
     *
     * @return string 
     */
    public function getMaximo()
    {
        return $this->maximo;
    }

    /**
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return Transfersm
     */
    public function setFechaVence($fechaVence)
    {
        $this->fechaVence = $fechaVence;

        return $this;
    }

    /**
     * Get fechaVence
     *
     * @return \DateTime 
     */
    public function getFechaVence()
    {
        return $this->fechaVence;
    }

    /**
     * Set factorempaque
     *
     * @param string $factorempaque
     * @return Transfersm
     */
    public function setFactorempaque($factorempaque)
    {
        $this->factorempaque = $factorempaque;

        return $this;
    }

    /**
     * Get factorempaque
     *
     * @return string 
     */
    public function getFactorempaque()
    {
        return $this->factorempaque;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return Transfersm
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
     * Set consigna
     *
     * @param boolean $consigna
     * @return Transfersm
     */
    public function setConsigna($consigna)
    {
        $this->consigna = $consigna;

        return $this;
    }

    /**
     * Get consigna
     *
     * @return boolean 
     */
    public function getConsigna()
    {
        return $this->consigna;
    }

    /**
     * Set idPartida
     *
     * @param string $idPartida
     * @return Transfersm
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
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return Transfersm
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return string 
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set idProductoproveedor
     *
     * @param string $idProductoproveedor
     * @return Transfersm
     */
    public function setIdProductoproveedor($idProductoproveedor)
    {
        $this->idProductoproveedor = $idProductoproveedor;

        return $this;
    }

    /**
     * Get idProductoproveedor
     *
     * @return string 
     */
    public function getIdProductoproveedor()
    {
        return $this->idProductoproveedor;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Transfersm
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set error
     *
     * @param string $error
     * @return Transfersm
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get error
     *
     * @return string 
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set umImport
     *
     * @param string $umImport
     * @return Transfersm
     */
    public function setUmImport($umImport)
    {
        $this->umImport = $umImport;

        return $this;
    }

    /**
     * Get umImport
     *
     * @return string 
     */
    public function getUmImport()
    {
        return $this->umImport;
    }

    /**
     * Set consignamn
     *
     * @param integer $consignamn
     * @return Transfersm
     */
    public function setConsignamn($consignamn)
    {
        $this->consignamn = $consignamn;

        return $this;
    }

    /**
     * Get consignamn
     *
     * @return integer 
     */
    public function getConsignamn()
    {
        return $this->consignamn;
    }

    /**
     * Set consignacuc
     *
     * @param integer $consignacuc
     * @return Transfersm
     */
    public function setConsignacuc($consignacuc)
    {
        $this->consignacuc = $consignacuc;

        return $this;
    }

    /**
     * Get consignacuc
     *
     * @return integer 
     */
    public function getConsignacuc()
    {
        return $this->consignacuc;
    }
}
