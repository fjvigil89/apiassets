<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChAnticiposMcDet
 *
 * @ORM\Table(name="CH_Anticipos_MC_Det", indexes={@ORM\Index(name="IX_AnticiposMC1_Det", columns={"Estado", "Id_Anticipo", "Fecha", "Id_Empleado"})})
 * @ORM\Entity
 */
class ChAnticiposMcDet
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
     * @ORM\Column(name="Id_Anticipo", type="integer", nullable=false)
     */
    private $idAnticipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CCosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=20, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Empleado", type="string", length=65, nullable=false)
     */
    private $descEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     */
    private $idConcepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Gastado", type="integer", nullable=false)
     */
    private $importeGastado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Devuelto", type="integer", nullable=false)
     */
    private $importeDevuelto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Extra_Entregado", type="integer", nullable=false)
     */
    private $importeExtraEntregado;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=120, nullable=false)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Compro_Liq", type="integer", nullable=false)
     */
    private $idComproLiq;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Compro_Liq", type="smallint", nullable=false)
     */
    private $mesComproLiq;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro_Liq", type="smallint", nullable=false)
     */
    private $anoComproLiq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Liquidacion", type="datetime", nullable=false)
     */
    private $fechaLiquidacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="integer", nullable=false)
     */
    private $item;



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
     * Set idAnticipo
     *
     * @param integer $idAnticipo
     * @return ChAnticiposMcDet
     */
    public function setIdAnticipo($idAnticipo)
    {
        $this->idAnticipo = $idAnticipo;

        return $this;
    }

    /**
     * Get idAnticipo
     *
     * @return integer 
     */
    public function getIdAnticipo()
    {
        return $this->idAnticipo;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return ChAnticiposMcDet
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ChAnticiposMcDet
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
     * Set estado
     *
     * @param integer $estado
     * @return ChAnticiposMcDet
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return ChAnticiposMcDet
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return ChAnticiposMcDet
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set descEmpleado
     *
     * @param string $descEmpleado
     * @return ChAnticiposMcDet
     */
    public function setDescEmpleado($descEmpleado)
    {
        $this->descEmpleado = $descEmpleado;

        return $this;
    }

    /**
     * Get descEmpleado
     *
     * @return string 
     */
    public function getDescEmpleado()
    {
        return $this->descEmpleado;
    }

    /**
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return ChAnticiposMcDet
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
     * Set importe
     *
     * @param integer $importe
     * @return ChAnticiposMcDet
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set importeGastado
     *
     * @param integer $importeGastado
     * @return ChAnticiposMcDet
     */
    public function setImporteGastado($importeGastado)
    {
        $this->importeGastado = $importeGastado;

        return $this;
    }

    /**
     * Get importeGastado
     *
     * @return integer 
     */
    public function getImporteGastado()
    {
        return $this->importeGastado;
    }

    /**
     * Set importeDevuelto
     *
     * @param integer $importeDevuelto
     * @return ChAnticiposMcDet
     */
    public function setImporteDevuelto($importeDevuelto)
    {
        $this->importeDevuelto = $importeDevuelto;

        return $this;
    }

    /**
     * Get importeDevuelto
     *
     * @return integer 
     */
    public function getImporteDevuelto()
    {
        return $this->importeDevuelto;
    }

    /**
     * Set importeExtraEntregado
     *
     * @param integer $importeExtraEntregado
     * @return ChAnticiposMcDet
     */
    public function setImporteExtraEntregado($importeExtraEntregado)
    {
        $this->importeExtraEntregado = $importeExtraEntregado;

        return $this;
    }

    /**
     * Get importeExtraEntregado
     *
     * @return integer 
     */
    public function getImporteExtraEntregado()
    {
        return $this->importeExtraEntregado;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return ChAnticiposMcDet
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

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
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return ChAnticiposMcDet
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
     * Set idComproLiq
     *
     * @param integer $idComproLiq
     * @return ChAnticiposMcDet
     */
    public function setIdComproLiq($idComproLiq)
    {
        $this->idComproLiq = $idComproLiq;

        return $this;
    }

    /**
     * Get idComproLiq
     *
     * @return integer 
     */
    public function getIdComproLiq()
    {
        return $this->idComproLiq;
    }

    /**
     * Set mesComproLiq
     *
     * @param integer $mesComproLiq
     * @return ChAnticiposMcDet
     */
    public function setMesComproLiq($mesComproLiq)
    {
        $this->mesComproLiq = $mesComproLiq;

        return $this;
    }

    /**
     * Get mesComproLiq
     *
     * @return integer 
     */
    public function getMesComproLiq()
    {
        return $this->mesComproLiq;
    }

    /**
     * Set anoComproLiq
     *
     * @param integer $anoComproLiq
     * @return ChAnticiposMcDet
     */
    public function setAnoComproLiq($anoComproLiq)
    {
        $this->anoComproLiq = $anoComproLiq;

        return $this;
    }

    /**
     * Get anoComproLiq
     *
     * @return integer 
     */
    public function getAnoComproLiq()
    {
        return $this->anoComproLiq;
    }

    /**
     * Set fechaLiquidacion
     *
     * @param \DateTime $fechaLiquidacion
     * @return ChAnticiposMcDet
     */
    public function setFechaLiquidacion($fechaLiquidacion)
    {
        $this->fechaLiquidacion = $fechaLiquidacion;

        return $this;
    }

    /**
     * Get fechaLiquidacion
     *
     * @return \DateTime 
     */
    public function getFechaLiquidacion()
    {
        return $this->fechaLiquidacion;
    }

    /**
     * Set item
     *
     * @param integer $item
     * @return ChAnticiposMcDet
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }
}
