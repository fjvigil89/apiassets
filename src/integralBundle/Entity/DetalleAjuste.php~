<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleAjuste
 *
 * @ORM\Table(name="Detalle_Ajuste")
 * @ORM\Entity
 */
class DetalleAjuste
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
     * @ORM\Column(name="Id_Ajuste", type="integer", nullable=false)
     */
    private $idAjuste;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Ajuste", type="smallint", nullable=false)
     */
    private $anoAjuste;

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
     * @ORM\Column(name="Cantidad_Ajuste", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $cantidadAjuste;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo_Existencia", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $saldoExistencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_NuevoMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoNuevomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoUmAlmacenMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostoumalmacenmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_NuevoMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoNuevomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoUmAlmacenMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostoumalmacenmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteA_MB", type="integer", nullable=false)
     */
    private $importeaMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteD_MB", type="integer", nullable=false)
     */
    private $importedMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteA_MC", type="integer", nullable=false)
     */
    private $importeaMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteD_MC", type="integer", nullable=false)
     */
    private $importedMc;

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
     * @ORM\Column(name="Nota", type="string", length=255, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="Producto_oServicio_c", type="smallint", nullable=false)
     */
    private $productoOservicioC;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ElemGasto", type="string", length=10, nullable=false)
     */
    private $idElemgasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubElemGasto", type="string", length=15, nullable=false)
     */
    private $idSubelemgasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ElemGastoMC", type="string", length=10, nullable=false)
     */
    private $idElemgastomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubElemGastoMC", type="string", length=15, nullable=false)
     */
    private $idSubelemgastomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Empaque", type="integer", nullable=false)
     */
    private $empaque;

    /**
     * @var string
     *
     * @ORM\Column(name="NewClasi", type="string", length=12, nullable=false)
     */
    private $newclasi;

    /**
     * @var string
     *
     * @ORM\Column(name="FactorEmpaque", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $factorempaque;



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
     * Set idAjuste
     *
     * @param integer $idAjuste
     * @return DetalleAjuste
     */
    public function setIdAjuste($idAjuste)
    {
        $this->idAjuste = $idAjuste;

        return $this;
    }

    /**
     * Get idAjuste
     *
     * @return integer 
     */
    public function getIdAjuste()
    {
        return $this->idAjuste;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetalleAjuste
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
     * Set anoAjuste
     *
     * @param integer $anoAjuste
     * @return DetalleAjuste
     */
    public function setAnoAjuste($anoAjuste)
    {
        $this->anoAjuste = $anoAjuste;

        return $this;
    }

    /**
     * Get anoAjuste
     *
     * @return integer 
     */
    public function getAnoAjuste()
    {
        return $this->anoAjuste;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return DetalleAjuste
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
     * @return DetalleAjuste
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
     * @return DetalleAjuste
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
     * @return DetalleAjuste
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
     * @return DetalleAjuste
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
     * Set idCausasajuste
     *
     * @param string $idCausasajuste
     * @return DetalleAjuste
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
     * @return DetalleAjuste
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
     * Set cantidadAjuste
     *
     * @param string $cantidadAjuste
     * @return DetalleAjuste
     */
    public function setCantidadAjuste($cantidadAjuste)
    {
        $this->cantidadAjuste = $cantidadAjuste;

        return $this;
    }

    /**
     * Get cantidadAjuste
     *
     * @return string 
     */
    public function getCantidadAjuste()
    {
        return $this->cantidadAjuste;
    }

    /**
     * Set saldoExistencia
     *
     * @param string $saldoExistencia
     * @return DetalleAjuste
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
     * Set costoNuevomb
     *
     * @param string $costoNuevomb
     * @return DetalleAjuste
     */
    public function setCostoNuevomb($costoNuevomb)
    {
        $this->costoNuevomb = $costoNuevomb;

        return $this;
    }

    /**
     * Get costoNuevomb
     *
     * @return string 
     */
    public function getCostoNuevomb()
    {
        return $this->costoNuevomb;
    }

    /**
     * Set precioCostoumalmacenmb
     *
     * @param string $precioCostoumalmacenmb
     * @return DetalleAjuste
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
     * Set costoNuevomc
     *
     * @param string $costoNuevomc
     * @return DetalleAjuste
     */
    public function setCostoNuevomc($costoNuevomc)
    {
        $this->costoNuevomc = $costoNuevomc;

        return $this;
    }

    /**
     * Get costoNuevomc
     *
     * @return string 
     */
    public function getCostoNuevomc()
    {
        return $this->costoNuevomc;
    }

    /**
     * Set precioCostoumalmacenmc
     *
     * @param string $precioCostoumalmacenmc
     * @return DetalleAjuste
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
     * Set importeaMb
     *
     * @param integer $importeaMb
     * @return DetalleAjuste
     */
    public function setImporteaMb($importeaMb)
    {
        $this->importeaMb = $importeaMb;

        return $this;
    }

    /**
     * Get importeaMb
     *
     * @return integer 
     */
    public function getImporteaMb()
    {
        return $this->importeaMb;
    }

    /**
     * Set importedMb
     *
     * @param integer $importedMb
     * @return DetalleAjuste
     */
    public function setImportedMb($importedMb)
    {
        $this->importedMb = $importedMb;

        return $this;
    }

    /**
     * Get importedMb
     *
     * @return integer 
     */
    public function getImportedMb()
    {
        return $this->importedMb;
    }

    /**
     * Set importeaMc
     *
     * @param integer $importeaMc
     * @return DetalleAjuste
     */
    public function setImporteaMc($importeaMc)
    {
        $this->importeaMc = $importeaMc;

        return $this;
    }

    /**
     * Get importeaMc
     *
     * @return integer 
     */
    public function getImporteaMc()
    {
        return $this->importeaMc;
    }

    /**
     * Set importedMc
     *
     * @param integer $importedMc
     * @return DetalleAjuste
     */
    public function setImportedMc($importedMc)
    {
        $this->importedMc = $importedMc;

        return $this;
    }

    /**
     * Get importedMc
     *
     * @return integer 
     */
    public function getImportedMc()
    {
        return $this->importedMc;
    }

    /**
     * Set importecostoMb
     *
     * @param integer $importecostoMb
     * @return DetalleAjuste
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
     * @return DetalleAjuste
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
     * Set nota
     *
     * @param string $nota
     * @return DetalleAjuste
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set productoOservicioC
     *
     * @param integer $productoOservicioC
     * @return DetalleAjuste
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
     * Set idElemgasto
     *
     * @param string $idElemgasto
     * @return DetalleAjuste
     */
    public function setIdElemgasto($idElemgasto)
    {
        $this->idElemgasto = $idElemgasto;

        return $this;
    }

    /**
     * Get idElemgasto
     *
     * @return string 
     */
    public function getIdElemgasto()
    {
        return $this->idElemgasto;
    }

    /**
     * Set idSubelemgasto
     *
     * @param string $idSubelemgasto
     * @return DetalleAjuste
     */
    public function setIdSubelemgasto($idSubelemgasto)
    {
        $this->idSubelemgasto = $idSubelemgasto;

        return $this;
    }

    /**
     * Get idSubelemgasto
     *
     * @return string 
     */
    public function getIdSubelemgasto()
    {
        return $this->idSubelemgasto;
    }

    /**
     * Set idElemgastomc
     *
     * @param string $idElemgastomc
     * @return DetalleAjuste
     */
    public function setIdElemgastomc($idElemgastomc)
    {
        $this->idElemgastomc = $idElemgastomc;

        return $this;
    }

    /**
     * Get idElemgastomc
     *
     * @return string 
     */
    public function getIdElemgastomc()
    {
        return $this->idElemgastomc;
    }

    /**
     * Set idSubelemgastomc
     *
     * @param string $idSubelemgastomc
     * @return DetalleAjuste
     */
    public function setIdSubelemgastomc($idSubelemgastomc)
    {
        $this->idSubelemgastomc = $idSubelemgastomc;

        return $this;
    }

    /**
     * Get idSubelemgastomc
     *
     * @return string 
     */
    public function getIdSubelemgastomc()
    {
        return $this->idSubelemgastomc;
    }

    /**
     * Set empaque
     *
     * @param integer $empaque
     * @return DetalleAjuste
     */
    public function setEmpaque($empaque)
    {
        $this->empaque = $empaque;

        return $this;
    }

    /**
     * Get empaque
     *
     * @return integer 
     */
    public function getEmpaque()
    {
        return $this->empaque;
    }

    /**
     * Set newclasi
     *
     * @param string $newclasi
     * @return DetalleAjuste
     */
    public function setNewclasi($newclasi)
    {
        $this->newclasi = $newclasi;

        return $this;
    }

    /**
     * Get newclasi
     *
     * @return string 
     */
    public function getNewclasi()
    {
        return $this->newclasi;
    }

    /**
     * Set factorempaque
     *
     * @param string $factorempaque
     * @return DetalleAjuste
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
}
