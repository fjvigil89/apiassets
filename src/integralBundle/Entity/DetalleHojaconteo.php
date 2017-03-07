<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleHojaconteo
 *
 * @ORM\Table(name="Detalle_HojaConteo")
 * @ORM\Entity
 */
class DetalleHojaconteo
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
     * @ORM\Column(name="Seccion", type="string", length=10, nullable=false)
     */
    private $seccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Estante", type="string", length=10, nullable=false)
     */
    private $estante;

    /**
     * @var string
     *
     * @ORM\Column(name="Casilla", type="string", length=10, nullable=false)
     */
    private $casilla;

    /**
     * @var string
     *
     * @ORM\Column(name="Conteo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $conteo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Conteo", type="datetime", nullable=false)
     */
    private $fechaConteo;

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
     * @ORM\Column(name="Empaque", type="integer", nullable=false)
     */
    private $empaque;

    /**
     * @var string
     *
     * @ORM\Column(name="Segundo_Conteo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $segundoConteo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SegundaFecha_Conteo", type="datetime", nullable=false)
     */
    private $segundafechaConteo;

    /**
     * @var string
     *
     * @ORM\Column(name="Tercer_Conteo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $tercerConteo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TercerFecha_Conteo", type="datetime", nullable=false)
     */
    private $tercerfechaConteo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Segundo_Empaque", type="integer", nullable=false)
     */
    private $segundoEmpaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tercer_Empaque", type="integer", nullable=false)
     */
    private $tercerEmpaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Empaque", type="integer", nullable=false)
     */
    private $saldoEmpaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad_Empaque", type="integer", nullable=false)
     */
    private $cantidadEmpaque;

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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * Set cantidadAjuste
     *
     * @param string $cantidadAjuste
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * Set seccion
     *
     * @param string $seccion
     * @return DetalleHojaconteo
     */
    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;

        return $this;
    }

    /**
     * Get seccion
     *
     * @return string 
     */
    public function getSeccion()
    {
        return $this->seccion;
    }

    /**
     * Set estante
     *
     * @param string $estante
     * @return DetalleHojaconteo
     */
    public function setEstante($estante)
    {
        $this->estante = $estante;

        return $this;
    }

    /**
     * Get estante
     *
     * @return string 
     */
    public function getEstante()
    {
        return $this->estante;
    }

    /**
     * Set casilla
     *
     * @param string $casilla
     * @return DetalleHojaconteo
     */
    public function setCasilla($casilla)
    {
        $this->casilla = $casilla;

        return $this;
    }

    /**
     * Get casilla
     *
     * @return string 
     */
    public function getCasilla()
    {
        return $this->casilla;
    }

    /**
     * Set conteo
     *
     * @param string $conteo
     * @return DetalleHojaconteo
     */
    public function setConteo($conteo)
    {
        $this->conteo = $conteo;

        return $this;
    }

    /**
     * Get conteo
     *
     * @return string 
     */
    public function getConteo()
    {
        return $this->conteo;
    }

    /**
     * Set fechaConteo
     *
     * @param \DateTime $fechaConteo
     * @return DetalleHojaconteo
     */
    public function setFechaConteo($fechaConteo)
    {
        $this->fechaConteo = $fechaConteo;

        return $this;
    }

    /**
     * Get fechaConteo
     *
     * @return \DateTime 
     */
    public function getFechaConteo()
    {
        return $this->fechaConteo;
    }

    /**
     * Set precioCostoumalmacenmb
     *
     * @param string $precioCostoumalmacenmb
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * @return DetalleHojaconteo
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
     * Set empaque
     *
     * @param integer $empaque
     * @return DetalleHojaconteo
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
     * Set segundoConteo
     *
     * @param string $segundoConteo
     * @return DetalleHojaconteo
     */
    public function setSegundoConteo($segundoConteo)
    {
        $this->segundoConteo = $segundoConteo;

        return $this;
    }

    /**
     * Get segundoConteo
     *
     * @return string 
     */
    public function getSegundoConteo()
    {
        return $this->segundoConteo;
    }

    /**
     * Set segundafechaConteo
     *
     * @param \DateTime $segundafechaConteo
     * @return DetalleHojaconteo
     */
    public function setSegundafechaConteo($segundafechaConteo)
    {
        $this->segundafechaConteo = $segundafechaConteo;

        return $this;
    }

    /**
     * Get segundafechaConteo
     *
     * @return \DateTime 
     */
    public function getSegundafechaConteo()
    {
        return $this->segundafechaConteo;
    }

    /**
     * Set tercerConteo
     *
     * @param string $tercerConteo
     * @return DetalleHojaconteo
     */
    public function setTercerConteo($tercerConteo)
    {
        $this->tercerConteo = $tercerConteo;

        return $this;
    }

    /**
     * Get tercerConteo
     *
     * @return string 
     */
    public function getTercerConteo()
    {
        return $this->tercerConteo;
    }

    /**
     * Set tercerfechaConteo
     *
     * @param \DateTime $tercerfechaConteo
     * @return DetalleHojaconteo
     */
    public function setTercerfechaConteo($tercerfechaConteo)
    {
        $this->tercerfechaConteo = $tercerfechaConteo;

        return $this;
    }

    /**
     * Get tercerfechaConteo
     *
     * @return \DateTime 
     */
    public function getTercerfechaConteo()
    {
        return $this->tercerfechaConteo;
    }

    /**
     * Set segundoEmpaque
     *
     * @param integer $segundoEmpaque
     * @return DetalleHojaconteo
     */
    public function setSegundoEmpaque($segundoEmpaque)
    {
        $this->segundoEmpaque = $segundoEmpaque;

        return $this;
    }

    /**
     * Get segundoEmpaque
     *
     * @return integer 
     */
    public function getSegundoEmpaque()
    {
        return $this->segundoEmpaque;
    }

    /**
     * Set tercerEmpaque
     *
     * @param integer $tercerEmpaque
     * @return DetalleHojaconteo
     */
    public function setTercerEmpaque($tercerEmpaque)
    {
        $this->tercerEmpaque = $tercerEmpaque;

        return $this;
    }

    /**
     * Get tercerEmpaque
     *
     * @return integer 
     */
    public function getTercerEmpaque()
    {
        return $this->tercerEmpaque;
    }

    /**
     * Set saldoEmpaque
     *
     * @param integer $saldoEmpaque
     * @return DetalleHojaconteo
     */
    public function setSaldoEmpaque($saldoEmpaque)
    {
        $this->saldoEmpaque = $saldoEmpaque;

        return $this;
    }

    /**
     * Get saldoEmpaque
     *
     * @return integer 
     */
    public function getSaldoEmpaque()
    {
        return $this->saldoEmpaque;
    }

    /**
     * Set cantidadEmpaque
     *
     * @param integer $cantidadEmpaque
     * @return DetalleHojaconteo
     */
    public function setCantidadEmpaque($cantidadEmpaque)
    {
        $this->cantidadEmpaque = $cantidadEmpaque;

        return $this;
    }

    /**
     * Get cantidadEmpaque
     *
     * @return integer 
     */
    public function getCantidadEmpaque()
    {
        return $this->cantidadEmpaque;
    }

    /**
     * Set factorempaque
     *
     * @param string $factorempaque
     * @return DetalleHojaconteo
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
