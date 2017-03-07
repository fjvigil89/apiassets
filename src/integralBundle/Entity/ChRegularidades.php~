<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChRegularidades
 *
 * @ORM\Table(name="CH_Regularidades", indexes={@ORM\Index(name="PK_CH_Regularidades", columns={"items"}), @ORM\Index(name="Ix_CH_Regul_Concepto", columns={"Id_Concepto", "Id_Fondo", "Transaccion"})})
 * @ORM\Entity
 */
class ChRegularidades
{
    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Subcontrol", type="string", length=10, nullable=false)
     */
    private $subcontrol;

    /**
     * @var string
     *
     * @ORM\Column(name="Gpo_CCosto", type="string", length=10, nullable=false)
     */
    private $gpoCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo", type="string", length=10, nullable=false)
     */
    private $idFondo;

    /**
     * @var string
     *
     * @ORM\Column(name="Transaccion", type="string", length=3, nullable=false)
     */
    private $transaccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     */
    private $idConcepto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Operacion", type="boolean", nullable=false)
     */
    private $operacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=50, nullable=false)
     */
    private $cta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_SubCta", type="smallint", nullable=false)
     */
    private $tipoSubcta;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta", type="string", length=50, nullable=false)
     */
    private $subcta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Analisis", type="smallint", nullable=false)
     */
    private $tipoAnalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis", type="string", length=50, nullable=false)
     */
    private $analisis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Subanalisis", type="smallint", nullable=false)
     */
    private $tipoSubanalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis", type="string", length=50, nullable=false)
     */
    private $subanalisis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Epigrafe", type="smallint", nullable=false)
     */
    private $tipoEpigrafe;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe", type="string", length=50, nullable=false)
     */
    private $epigrafe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Partida", type="smallint", nullable=false)
     */
    private $tipoPartida;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida", type="string", length=50, nullable=false)
     */
    private $partida;

    /**
     * @var integer
     *
     * @ORM\Column(name="Afecta", type="smallint", nullable=false)
     */
    private $afecta;

    /**
     * @var integer
     *
     * @ORM\Column(name="items", type="integer", nullable=false)
     */
    private $items;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Copiar", type="boolean", nullable=false)
     */
    private $copiar;

    /**
     * @var integer
     *
     * @ORM\Column(name="PORCIENTO", type="integer", nullable=false)
     */
    private $porciento;



    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set subcontrol
     *
     * @param string $subcontrol
     * @return ChRegularidades
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
     * Set gpoCcosto
     *
     * @param string $gpoCcosto
     * @return ChRegularidades
     */
    public function setGpoCcosto($gpoCcosto)
    {
        $this->gpoCcosto = $gpoCcosto;

        return $this;
    }

    /**
     * Get gpoCcosto
     *
     * @return string 
     */
    public function getGpoCcosto()
    {
        return $this->gpoCcosto;
    }

    /**
     * Set idFondo
     *
     * @param string $idFondo
     * @return ChRegularidades
     */
    public function setIdFondo($idFondo)
    {
        $this->idFondo = $idFondo;

        return $this;
    }

    /**
     * Get idFondo
     *
     * @return string 
     */
    public function getIdFondo()
    {
        return $this->idFondo;
    }

    /**
     * Set transaccion
     *
     * @param string $transaccion
     * @return ChRegularidades
     */
    public function setTransaccion($transaccion)
    {
        $this->transaccion = $transaccion;

        return $this;
    }

    /**
     * Get transaccion
     *
     * @return string 
     */
    public function getTransaccion()
    {
        return $this->transaccion;
    }

    /**
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return ChRegularidades
     */
    public function setIdConcepto($idConcepto)
    {
        $this->idConcepto = $idConcepto;

        return $this;
    }

    /**
     * Get idConcepto
     *
     * @return string 
     */
    public function getIdConcepto()
    {
        return $this->idConcepto;
    }

    /**
     * Set operacion
     *
     * @param boolean $operacion
     * @return ChRegularidades
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;

        return $this;
    }

    /**
     * Get operacion
     *
     * @return boolean 
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return ChRegularidades
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
     * Set tipoSubcta
     *
     * @param integer $tipoSubcta
     * @return ChRegularidades
     */
    public function setTipoSubcta($tipoSubcta)
    {
        $this->tipoSubcta = $tipoSubcta;

        return $this;
    }

    /**
     * Get tipoSubcta
     *
     * @return integer 
     */
    public function getTipoSubcta()
    {
        return $this->tipoSubcta;
    }

    /**
     * Set subcta
     *
     * @param string $subcta
     * @return ChRegularidades
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
     * Set tipoAnalisis
     *
     * @param integer $tipoAnalisis
     * @return ChRegularidades
     */
    public function setTipoAnalisis($tipoAnalisis)
    {
        $this->tipoAnalisis = $tipoAnalisis;

        return $this;
    }

    /**
     * Get tipoAnalisis
     *
     * @return integer 
     */
    public function getTipoAnalisis()
    {
        return $this->tipoAnalisis;
    }

    /**
     * Set analisis
     *
     * @param string $analisis
     * @return ChRegularidades
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
     * Set tipoSubanalisis
     *
     * @param integer $tipoSubanalisis
     * @return ChRegularidades
     */
    public function setTipoSubanalisis($tipoSubanalisis)
    {
        $this->tipoSubanalisis = $tipoSubanalisis;

        return $this;
    }

    /**
     * Get tipoSubanalisis
     *
     * @return integer 
     */
    public function getTipoSubanalisis()
    {
        return $this->tipoSubanalisis;
    }

    /**
     * Set subanalisis
     *
     * @param string $subanalisis
     * @return ChRegularidades
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
     * Set tipoEpigrafe
     *
     * @param integer $tipoEpigrafe
     * @return ChRegularidades
     */
    public function setTipoEpigrafe($tipoEpigrafe)
    {
        $this->tipoEpigrafe = $tipoEpigrafe;

        return $this;
    }

    /**
     * Get tipoEpigrafe
     *
     * @return integer 
     */
    public function getTipoEpigrafe()
    {
        return $this->tipoEpigrafe;
    }

    /**
     * Set epigrafe
     *
     * @param string $epigrafe
     * @return ChRegularidades
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
     * Set tipoPartida
     *
     * @param integer $tipoPartida
     * @return ChRegularidades
     */
    public function setTipoPartida($tipoPartida)
    {
        $this->tipoPartida = $tipoPartida;

        return $this;
    }

    /**
     * Get tipoPartida
     *
     * @return integer 
     */
    public function getTipoPartida()
    {
        return $this->tipoPartida;
    }

    /**
     * Set partida
     *
     * @param string $partida
     * @return ChRegularidades
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
     * Set afecta
     *
     * @param integer $afecta
     * @return ChRegularidades
     */
    public function setAfecta($afecta)
    {
        $this->afecta = $afecta;

        return $this;
    }

    /**
     * Get afecta
     *
     * @return integer 
     */
    public function getAfecta()
    {
        return $this->afecta;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return ChRegularidades
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
     * Set copiar
     *
     * @param boolean $copiar
     * @return ChRegularidades
     */
    public function setCopiar($copiar)
    {
        $this->copiar = $copiar;

        return $this;
    }

    /**
     * Get copiar
     *
     * @return boolean 
     */
    public function getCopiar()
    {
        return $this->copiar;
    }

    /**
     * Set porciento
     *
     * @param integer $porciento
     * @return ChRegularidades
     */
    public function setPorciento($porciento)
    {
        $this->porciento = $porciento;

        return $this;
    }

    /**
     * Get porciento
     *
     * @return integer 
     */
    public function getPorciento()
    {
        return $this->porciento;
    }
}
