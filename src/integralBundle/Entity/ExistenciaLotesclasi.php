<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExistenciaLotesclasi
 *
 * @ORM\Table(name="Existencia_LotesClasi")
 * @ORM\Entity
 */
class ExistenciaLotesclasi
{
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
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Lote", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLote;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=15, nullable=false)
     */
    private $referencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Entrada", type="datetime", nullable=false)
     */
    private $fechaEntrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo_Existencia", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $saldoExistencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Reservadas", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $reservadas;

    /**
     * @var string
     *
     * @ORM\Column(name="Disponibles", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $disponibles;

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
     * @ORM\Column(name="Precio_CostoMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostomb;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_CostoMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioCostomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_ArancelMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoArancelmb;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo_ArancelMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costoArancelmc;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Inicio", type="datetime", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Existencia_Inicio", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $existenciaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_InicioMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioIniciomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_InicioMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $precioIniciomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_InicioMB", type="integer", nullable=false)
     */
    private $importeIniciomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_InicioMC", type="integer", nullable=false)
     */
    private $importeIniciomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Zona", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $zona;

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
     * @var boolean
     *
     * @ORM\Column(name="Marca", type="boolean", nullable=false)
     */
    private $marca;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_LastMov", type="datetime", nullable=false)
     */
    private $fechaLastmov;

    /**
     * @var string
     *
     * @ORM\Column(name="Documto", type="string", length=15, nullable=false)
     */
    private $documto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Empaque", type="integer", nullable=false)
     */
    private $empaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Empaque_Inicio", type="integer", nullable=false)
     */
    private $empaqueInicio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="InvFisico", type="boolean", nullable=false)
     */
    private $invfisico;



    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return ExistenciaLotesclasi
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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return ExistenciaLotesclasi
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
     * Set idLote
     *
     * @param string $idLote
     * @return ExistenciaLotesclasi
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
     * Set referencia
     *
     * @param string $referencia
     * @return ExistenciaLotesclasi
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set fechaEntrada
     *
     * @param \DateTime $fechaEntrada
     * @return ExistenciaLotesclasi
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;

        return $this;
    }

    /**
     * Get fechaEntrada
     *
     * @return \DateTime 
     */
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }

    /**
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return ExistenciaLotesclasi
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
     * Set saldoExistencia
     *
     * @param string $saldoExistencia
     * @return ExistenciaLotesclasi
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
     * Set reservadas
     *
     * @param string $reservadas
     * @return ExistenciaLotesclasi
     */
    public function setReservadas($reservadas)
    {
        $this->reservadas = $reservadas;

        return $this;
    }

    /**
     * Get reservadas
     *
     * @return string 
     */
    public function getReservadas()
    {
        return $this->reservadas;
    }

    /**
     * Set disponibles
     *
     * @param string $disponibles
     * @return ExistenciaLotesclasi
     */
    public function setDisponibles($disponibles)
    {
        $this->disponibles = $disponibles;

        return $this;
    }

    /**
     * Get disponibles
     *
     * @return string 
     */
    public function getDisponibles()
    {
        return $this->disponibles;
    }

    /**
     * Set seccion
     *
     * @param string $seccion
     * @return ExistenciaLotesclasi
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
     * @return ExistenciaLotesclasi
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
     * @return ExistenciaLotesclasi
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
     * Set precioCostomb
     *
     * @param string $precioCostomb
     * @return ExistenciaLotesclasi
     */
    public function setPrecioCostomb($precioCostomb)
    {
        $this->precioCostomb = $precioCostomb;

        return $this;
    }

    /**
     * Get precioCostomb
     *
     * @return string 
     */
    public function getPrecioCostomb()
    {
        return $this->precioCostomb;
    }

    /**
     * Set precioCostomc
     *
     * @param string $precioCostomc
     * @return ExistenciaLotesclasi
     */
    public function setPrecioCostomc($precioCostomc)
    {
        $this->precioCostomc = $precioCostomc;

        return $this;
    }

    /**
     * Get precioCostomc
     *
     * @return string 
     */
    public function getPrecioCostomc()
    {
        return $this->precioCostomc;
    }

    /**
     * Set costoArancelmb
     *
     * @param string $costoArancelmb
     * @return ExistenciaLotesclasi
     */
    public function setCostoArancelmb($costoArancelmb)
    {
        $this->costoArancelmb = $costoArancelmb;

        return $this;
    }

    /**
     * Get costoArancelmb
     *
     * @return string 
     */
    public function getCostoArancelmb()
    {
        return $this->costoArancelmb;
    }

    /**
     * Set costoArancelmc
     *
     * @param string $costoArancelmc
     * @return ExistenciaLotesclasi
     */
    public function setCostoArancelmc($costoArancelmc)
    {
        $this->costoArancelmc = $costoArancelmc;

        return $this;
    }

    /**
     * Get costoArancelmc
     *
     * @return string 
     */
    public function getCostoArancelmc()
    {
        return $this->costoArancelmc;
    }

    /**
     * Set importemb
     *
     * @param integer $importemb
     * @return ExistenciaLotesclasi
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
     * @return ExistenciaLotesclasi
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return ExistenciaLotesclasi
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set existenciaInicio
     *
     * @param string $existenciaInicio
     * @return ExistenciaLotesclasi
     */
    public function setExistenciaInicio($existenciaInicio)
    {
        $this->existenciaInicio = $existenciaInicio;

        return $this;
    }

    /**
     * Get existenciaInicio
     *
     * @return string 
     */
    public function getExistenciaInicio()
    {
        return $this->existenciaInicio;
    }

    /**
     * Set precioIniciomc
     *
     * @param string $precioIniciomc
     * @return ExistenciaLotesclasi
     */
    public function setPrecioIniciomc($precioIniciomc)
    {
        $this->precioIniciomc = $precioIniciomc;

        return $this;
    }

    /**
     * Get precioIniciomc
     *
     * @return string 
     */
    public function getPrecioIniciomc()
    {
        return $this->precioIniciomc;
    }

    /**
     * Set precioIniciomb
     *
     * @param string $precioIniciomb
     * @return ExistenciaLotesclasi
     */
    public function setPrecioIniciomb($precioIniciomb)
    {
        $this->precioIniciomb = $precioIniciomb;

        return $this;
    }

    /**
     * Get precioIniciomb
     *
     * @return string 
     */
    public function getPrecioIniciomb()
    {
        return $this->precioIniciomb;
    }

    /**
     * Set importeIniciomb
     *
     * @param integer $importeIniciomb
     * @return ExistenciaLotesclasi
     */
    public function setImporteIniciomb($importeIniciomb)
    {
        $this->importeIniciomb = $importeIniciomb;

        return $this;
    }

    /**
     * Get importeIniciomb
     *
     * @return integer 
     */
    public function getImporteIniciomb()
    {
        return $this->importeIniciomb;
    }

    /**
     * Set importeIniciomc
     *
     * @param integer $importeIniciomc
     * @return ExistenciaLotesclasi
     */
    public function setImporteIniciomc($importeIniciomc)
    {
        $this->importeIniciomc = $importeIniciomc;

        return $this;
    }

    /**
     * Get importeIniciomc
     *
     * @return integer 
     */
    public function getImporteIniciomc()
    {
        return $this->importeIniciomc;
    }

    /**
     * Set zona
     *
     * @param string $zona
     * @return ExistenciaLotesclasi
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return string 
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set conteo
     *
     * @param string $conteo
     * @return ExistenciaLotesclasi
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
     * @return ExistenciaLotesclasi
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
     * Set marca
     *
     * @param boolean $marca
     * @return ExistenciaLotesclasi
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return boolean 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set fechaLastmov
     *
     * @param \DateTime $fechaLastmov
     * @return ExistenciaLotesclasi
     */
    public function setFechaLastmov($fechaLastmov)
    {
        $this->fechaLastmov = $fechaLastmov;

        return $this;
    }

    /**
     * Get fechaLastmov
     *
     * @return \DateTime 
     */
    public function getFechaLastmov()
    {
        return $this->fechaLastmov;
    }

    /**
     * Set documto
     *
     * @param string $documto
     * @return ExistenciaLotesclasi
     */
    public function setDocumto($documto)
    {
        $this->documto = $documto;

        return $this;
    }

    /**
     * Get documto
     *
     * @return string 
     */
    public function getDocumto()
    {
        return $this->documto;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return ExistenciaLotesclasi
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set empaque
     *
     * @param integer $empaque
     * @return ExistenciaLotesclasi
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
     * Set empaqueInicio
     *
     * @param integer $empaqueInicio
     * @return ExistenciaLotesclasi
     */
    public function setEmpaqueInicio($empaqueInicio)
    {
        $this->empaqueInicio = $empaqueInicio;

        return $this;
    }

    /**
     * Get empaqueInicio
     *
     * @return integer 
     */
    public function getEmpaqueInicio()
    {
        return $this->empaqueInicio;
    }

    /**
     * Set invfisico
     *
     * @param boolean $invfisico
     * @return ExistenciaLotesclasi
     */
    public function setInvfisico($invfisico)
    {
        $this->invfisico = $invfisico;

        return $this;
    }

    /**
     * Get invfisico
     *
     * @return boolean 
     */
    public function getInvfisico()
    {
        return $this->invfisico;
    }
}
