<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubmayorProductoclasi
 *
 * @ORM\Table(name="Submayor_ProductoClasi")
 * @ORM\Entity
 */
class SubmayorProductoclasi
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Lote", type="string", length=20, nullable=false)
     */
    private $idLote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=12, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Documto", type="string", length=3, nullable=false)
     */
    private $tipoDocumto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Documto", type="integer", nullable=false)
     */
    private $idDocumto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Documto", type="smallint", nullable=false)
     */
    private $anoDocumto;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=30, nullable=false)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidad;

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
     * @var string
     *
     * @ORM\Column(name="Saldo_Cantidad", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $saldoCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_ImporteMB", type="integer", nullable=false)
     */
    private $saldoImportemb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_ImporteMC", type="integer", nullable=false)
     */
    private $saldoImportemc;

    /**
     * @var string
     *
     * @ORM\Column(name="CostoMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costomb;

    /**
     * @var string
     *
     * @ORM\Column(name="CostoMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costomc;

    /**
     * @var string
     *
     * @ORM\Column(name="CostoFinalMB", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costofinalmb;

    /**
     * @var string
     *
     * @ORM\Column(name="CostoFinalMC", type="decimal", precision=19, scale=8, nullable=false)
     */
    private $costofinalmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Entidad", type="string", length=60, nullable=false)
     */
    private $entidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Exist_en_Almacen", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $existEnAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="No_Prelacion", type="integer", nullable=false)
     */
    private $noPrelacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Um_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Empaque", type="integer", nullable=false)
     */
    private $empaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Empaque", type="integer", nullable=false)
     */
    private $saldoEmpaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consecutivo", type="bigint", nullable=false)
     */
    private $consecutivo;



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
     * @return SubmayorProductoclasi
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
     * @return SubmayorProductoclasi
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return SubmayorProductoclasi
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return SubmayorProductoclasi
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
     * Set tipoDocumto
     *
     * @param string $tipoDocumto
     * @return SubmayorProductoclasi
     */
    public function setTipoDocumto($tipoDocumto)
    {
        $this->tipoDocumto = $tipoDocumto;

        return $this;
    }

    /**
     * Get tipoDocumto
     *
     * @return string 
     */
    public function getTipoDocumto()
    {
        return $this->tipoDocumto;
    }

    /**
     * Set idDocumto
     *
     * @param integer $idDocumto
     * @return SubmayorProductoclasi
     */
    public function setIdDocumto($idDocumto)
    {
        $this->idDocumto = $idDocumto;

        return $this;
    }

    /**
     * Get idDocumto
     *
     * @return integer 
     */
    public function getIdDocumto()
    {
        return $this->idDocumto;
    }

    /**
     * Set anoDocumto
     *
     * @param integer $anoDocumto
     * @return SubmayorProductoclasi
     */
    public function setAnoDocumto($anoDocumto)
    {
        $this->anoDocumto = $anoDocumto;

        return $this;
    }

    /**
     * Get anoDocumto
     *
     * @return integer 
     */
    public function getAnoDocumto()
    {
        return $this->anoDocumto;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return SubmayorProductoclasi
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
     * Set cantidad
     *
     * @param string $cantidad
     * @return SubmayorProductoclasi
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
     * Set importemb
     *
     * @param integer $importemb
     * @return SubmayorProductoclasi
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
     * @return SubmayorProductoclasi
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
     * Set saldoCantidad
     *
     * @param string $saldoCantidad
     * @return SubmayorProductoclasi
     */
    public function setSaldoCantidad($saldoCantidad)
    {
        $this->saldoCantidad = $saldoCantidad;

        return $this;
    }

    /**
     * Get saldoCantidad
     *
     * @return string 
     */
    public function getSaldoCantidad()
    {
        return $this->saldoCantidad;
    }

    /**
     * Set saldoImportemb
     *
     * @param integer $saldoImportemb
     * @return SubmayorProductoclasi
     */
    public function setSaldoImportemb($saldoImportemb)
    {
        $this->saldoImportemb = $saldoImportemb;

        return $this;
    }

    /**
     * Get saldoImportemb
     *
     * @return integer 
     */
    public function getSaldoImportemb()
    {
        return $this->saldoImportemb;
    }

    /**
     * Set saldoImportemc
     *
     * @param integer $saldoImportemc
     * @return SubmayorProductoclasi
     */
    public function setSaldoImportemc($saldoImportemc)
    {
        $this->saldoImportemc = $saldoImportemc;

        return $this;
    }

    /**
     * Get saldoImportemc
     *
     * @return integer 
     */
    public function getSaldoImportemc()
    {
        return $this->saldoImportemc;
    }

    /**
     * Set costomb
     *
     * @param string $costomb
     * @return SubmayorProductoclasi
     */
    public function setCostomb($costomb)
    {
        $this->costomb = $costomb;

        return $this;
    }

    /**
     * Get costomb
     *
     * @return string 
     */
    public function getCostomb()
    {
        return $this->costomb;
    }

    /**
     * Set costomc
     *
     * @param string $costomc
     * @return SubmayorProductoclasi
     */
    public function setCostomc($costomc)
    {
        $this->costomc = $costomc;

        return $this;
    }

    /**
     * Get costomc
     *
     * @return string 
     */
    public function getCostomc()
    {
        return $this->costomc;
    }

    /**
     * Set costofinalmb
     *
     * @param string $costofinalmb
     * @return SubmayorProductoclasi
     */
    public function setCostofinalmb($costofinalmb)
    {
        $this->costofinalmb = $costofinalmb;

        return $this;
    }

    /**
     * Get costofinalmb
     *
     * @return string 
     */
    public function getCostofinalmb()
    {
        return $this->costofinalmb;
    }

    /**
     * Set costofinalmc
     *
     * @param string $costofinalmc
     * @return SubmayorProductoclasi
     */
    public function setCostofinalmc($costofinalmc)
    {
        $this->costofinalmc = $costofinalmc;

        return $this;
    }

    /**
     * Get costofinalmc
     *
     * @return string 
     */
    public function getCostofinalmc()
    {
        return $this->costofinalmc;
    }

    /**
     * Set entidad
     *
     * @param string $entidad
     * @return SubmayorProductoclasi
     */
    public function setEntidad($entidad)
    {
        $this->entidad = $entidad;

        return $this;
    }

    /**
     * Get entidad
     *
     * @return string 
     */
    public function getEntidad()
    {
        return $this->entidad;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return SubmayorProductoclasi
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

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
     * Set existEnAlmacen
     *
     * @param string $existEnAlmacen
     * @return SubmayorProductoclasi
     */
    public function setExistEnAlmacen($existEnAlmacen)
    {
        $this->existEnAlmacen = $existEnAlmacen;

        return $this;
    }

    /**
     * Get existEnAlmacen
     *
     * @return string 
     */
    public function getExistEnAlmacen()
    {
        return $this->existEnAlmacen;
    }

    /**
     * Set noPrelacion
     *
     * @param integer $noPrelacion
     * @return SubmayorProductoclasi
     */
    public function setNoPrelacion($noPrelacion)
    {
        $this->noPrelacion = $noPrelacion;

        return $this;
    }

    /**
     * Get noPrelacion
     *
     * @return integer 
     */
    public function getNoPrelacion()
    {
        return $this->noPrelacion;
    }

    /**
     * Set umAlmacen
     *
     * @param string $umAlmacen
     * @return SubmayorProductoclasi
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
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return SubmayorProductoclasi
     */
    public function setDocPrimario($docPrimario)
    {
        $this->docPrimario = $docPrimario;

        return $this;
    }

    /**
     * Get docPrimario
     *
     * @return string 
     */
    public function getDocPrimario()
    {
        return $this->docPrimario;
    }

    /**
     * Set empaque
     *
     * @param integer $empaque
     * @return SubmayorProductoclasi
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
     * Set saldoEmpaque
     *
     * @param integer $saldoEmpaque
     * @return SubmayorProductoclasi
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
     * Set consecutivo
     *
     * @param integer $consecutivo
     * @return SubmayorProductoclasi
     */
    public function setConsecutivo($consecutivo)
    {
        $this->consecutivo = $consecutivo;

        return $this;
    }

    /**
     * Get consecutivo
     *
     * @return integer 
     */
    public function getConsecutivo()
    {
        return $this->consecutivo;
    }
}
