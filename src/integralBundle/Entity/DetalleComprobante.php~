<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleComprobante
 *
 * @ORM\Table(name="Detalle_Comprobante", indexes={@ORM\Index(name="IX_Compro", columns={"Cta", "SubCta", "Analisis", "SubAnalisis", "Epigrafe", "Partida", "Id_AgrupacionRef"}), @ORM\Index(name="Ix_Det_Compro", columns={"Id_Compro", "Ano", "Mes", "Id_Agrupacion"})})
 * @ORM\Entity
 */
class DetalleComprobante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Compro", type="string", length=15, nullable=false)
     */
    private $tipoCompro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Doc", type="string", length=20, nullable=false)
     */
    private $idDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Doc", type="string", length=10, nullable=false)
     */
    private $tipoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     */
    private $cta;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta", type="string", length=20, nullable=false)
     */
    private $subcta;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis", type="string", length=20, nullable=false)
     */
    private $analisis;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis", type="string", length=20, nullable=false)
     */
    private $subanalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe", type="string", length=20, nullable=false)
     */
    private $epigrafe;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida", type="string", length=20, nullable=false)
     */
    private $partida;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="DEBE", type="integer", nullable=false)
     */
    private $debe;

    /**
     * @var integer
     *
     * @ORM\Column(name="HABER", type="integer", nullable=false)
     */
    private $haber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Transito", type="boolean", nullable=false)
     */
    private $transito;

    /**
     * @var string
     *
     * @ORM\Column(name="Clasificacion", type="string", length=2, nullable=false)
     */
    private $clasificacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Natu", type="boolean", nullable=false)
     */
    private $natu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="integer", nullable=false)
     */
    private $items;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_ComproRef", type="integer", nullable=false)
     */
    private $idComproref;

    /**
     * @var integer
     *
     * @ORM\Column(name="AnoRef", type="smallint", nullable=false)
     */
    private $anoref;

    /**
     * @var integer
     *
     * @ORM\Column(name="MesRef", type="smallint", nullable=false)
     */
    private $mesref;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AgrupacionRef", type="string", length=5, nullable=false)
     */
    private $idAgrupacionref;

    /**
     * @var string
     *
     * @ORM\Column(name="SubControl", type="string", length=10, nullable=false)
     */
    private $subcontrol;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca_Conciliacion", type="boolean", nullable=false)
     */
    private $marcaConciliacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Conciliacion", type="datetime", nullable=false)
     */
    private $fechaConciliacion;



    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return DetalleComprobante
     */
    public function setIdCompro($idCompro)
    {
        $this->idCompro = $idCompro;

        return $this;
    }

    /**
     * Get idCompro
     *
     * @return integer 
     */
    public function getIdCompro()
    {
        return $this->idCompro;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return DetalleComprobante
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
     * Set mes
     *
     * @param integer $mes
     * @return DetalleComprobante
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set tipoCompro
     *
     * @param string $tipoCompro
     * @return DetalleComprobante
     */
    public function setTipoCompro($tipoCompro)
    {
        $this->tipoCompro = $tipoCompro;

        return $this;
    }

    /**
     * Get tipoCompro
     *
     * @return string 
     */
    public function getTipoCompro()
    {
        return $this->tipoCompro;
    }

    /**
     * Set idDoc
     *
     * @param string $idDoc
     * @return DetalleComprobante
     */
    public function setIdDoc($idDoc)
    {
        $this->idDoc = $idDoc;

        return $this;
    }

    /**
     * Get idDoc
     *
     * @return string 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set tipoDoc
     *
     * @param string $tipoDoc
     * @return DetalleComprobante
     */
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }

    /**
     * Get tipoDoc
     *
     * @return string 
     */
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return DetalleComprobante
     */
    public function setCta($cta)
    {
        $this->cta = $cta;

        return $this;
    }

    /**
     * Get cta
     *
     * @return string 
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set subcta
     *
     * @param string $subcta
     * @return DetalleComprobante
     */
    public function setSubcta($subcta)
    {
        $this->subcta = $subcta;

        return $this;
    }

    /**
     * Get subcta
     *
     * @return string 
     */
    public function getSubcta()
    {
        return $this->subcta;
    }

    /**
     * Set analisis
     *
     * @param string $analisis
     * @return DetalleComprobante
     */
    public function setAnalisis($analisis)
    {
        $this->analisis = $analisis;

        return $this;
    }

    /**
     * Get analisis
     *
     * @return string 
     */
    public function getAnalisis()
    {
        return $this->analisis;
    }

    /**
     * Set subanalisis
     *
     * @param string $subanalisis
     * @return DetalleComprobante
     */
    public function setSubanalisis($subanalisis)
    {
        $this->subanalisis = $subanalisis;

        return $this;
    }

    /**
     * Get subanalisis
     *
     * @return string 
     */
    public function getSubanalisis()
    {
        return $this->subanalisis;
    }

    /**
     * Set epigrafe
     *
     * @param string $epigrafe
     * @return DetalleComprobante
     */
    public function setEpigrafe($epigrafe)
    {
        $this->epigrafe = $epigrafe;

        return $this;
    }

    /**
     * Get epigrafe
     *
     * @return string 
     */
    public function getEpigrafe()
    {
        return $this->epigrafe;
    }

    /**
     * Set partida
     *
     * @param string $partida
     * @return DetalleComprobante
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return string 
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return DetalleComprobante
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
     * Set debe
     *
     * @param integer $debe
     * @return DetalleComprobante
     */
    public function setDebe($debe)
    {
        $this->debe = $debe;

        return $this;
    }

    /**
     * Get debe
     *
     * @return integer 
     */
    public function getDebe()
    {
        return $this->debe;
    }

    /**
     * Set haber
     *
     * @param integer $haber
     * @return DetalleComprobante
     */
    public function setHaber($haber)
    {
        $this->haber = $haber;

        return $this;
    }

    /**
     * Get haber
     *
     * @return integer 
     */
    public function getHaber()
    {
        return $this->haber;
    }

    /**
     * Set transito
     *
     * @param boolean $transito
     * @return DetalleComprobante
     */
    public function setTransito($transito)
    {
        $this->transito = $transito;

        return $this;
    }

    /**
     * Get transito
     *
     * @return boolean 
     */
    public function getTransito()
    {
        return $this->transito;
    }

    /**
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return DetalleComprobante
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set natu
     *
     * @param boolean $natu
     * @return DetalleComprobante
     */
    public function setNatu($natu)
    {
        $this->natu = $natu;

        return $this;
    }

    /**
     * Get natu
     *
     * @return boolean 
     */
    public function getNatu()
    {
        return $this->natu;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return DetalleComprobante
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
     * Set idComproref
     *
     * @param integer $idComproref
     * @return DetalleComprobante
     */
    public function setIdComproref($idComproref)
    {
        $this->idComproref = $idComproref;

        return $this;
    }

    /**
     * Get idComproref
     *
     * @return integer 
     */
    public function getIdComproref()
    {
        return $this->idComproref;
    }

    /**
     * Set anoref
     *
     * @param integer $anoref
     * @return DetalleComprobante
     */
    public function setAnoref($anoref)
    {
        $this->anoref = $anoref;

        return $this;
    }

    /**
     * Get anoref
     *
     * @return integer 
     */
    public function getAnoref()
    {
        return $this->anoref;
    }

    /**
     * Set mesref
     *
     * @param integer $mesref
     * @return DetalleComprobante
     */
    public function setMesref($mesref)
    {
        $this->mesref = $mesref;

        return $this;
    }

    /**
     * Get mesref
     *
     * @return integer 
     */
    public function getMesref()
    {
        return $this->mesref;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return DetalleComprobante
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set idAgrupacionref
     *
     * @param string $idAgrupacionref
     * @return DetalleComprobante
     */
    public function setIdAgrupacionref($idAgrupacionref)
    {
        $this->idAgrupacionref = $idAgrupacionref;

        return $this;
    }

    /**
     * Get idAgrupacionref
     *
     * @return string 
     */
    public function getIdAgrupacionref()
    {
        return $this->idAgrupacionref;
    }

    /**
     * Set subcontrol
     *
     * @param string $subcontrol
     * @return DetalleComprobante
     */
    public function setSubcontrol($subcontrol)
    {
        $this->subcontrol = $subcontrol;

        return $this;
    }

    /**
     * Get subcontrol
     *
     * @return string 
     */
    public function getSubcontrol()
    {
        return $this->subcontrol;
    }

    /**
     * Set marcaConciliacion
     *
     * @param boolean $marcaConciliacion
     * @return DetalleComprobante
     */
    public function setMarcaConciliacion($marcaConciliacion)
    {
        $this->marcaConciliacion = $marcaConciliacion;

        return $this;
    }

    /**
     * Get marcaConciliacion
     *
     * @return boolean 
     */
    public function getMarcaConciliacion()
    {
        return $this->marcaConciliacion;
    }

    /**
     * Set fechaConciliacion
     *
     * @param \DateTime $fechaConciliacion
     * @return DetalleComprobante
     */
    public function setFechaConciliacion($fechaConciliacion)
    {
        $this->fechaConciliacion = $fechaConciliacion;

        return $this;
    }

    /**
     * Get fechaConciliacion
     *
     * @return \DateTime 
     */
    public function getFechaConciliacion()
    {
        return $this->fechaConciliacion;
    }
}
