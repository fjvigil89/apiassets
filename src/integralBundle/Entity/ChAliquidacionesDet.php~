<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChAliquidacionesDet
 *
 * @ORM\Table(name="CH_ALiquidaciones_Det", indexes={@ORM\Index(name="Ix1_DetLiquidac", columns={"Contador1"}), @ORM\Index(name="ix2_DetLiquidac", columns={"Id_Liquidacion", "Id_Agrupacion", "Ano"})})
 * @ORM\Entity
 */
class ChAliquidacionesDet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Liquidacion", type="integer", nullable=false)
     */
    private $idLiquidacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marcado_Liquidar", type="boolean", nullable=false)
     */
    private $marcadoLiquidar;

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
     * @ORM\Column(name="Id_CCosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

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
     * @var integer
     *
     * @ORM\Column(name="Item_Anticipo", type="integer", nullable=false)
     */
    private $itemAnticipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;



    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return ChAliquidacionesDet
     */
    public function setContador1($contador1)
    {
        $this->contador1 = $contador1;

        return $this;
    }

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
     * Set idLiquidacion
     *
     * @param integer $idLiquidacion
     * @return ChAliquidacionesDet
     */
    public function setIdLiquidacion($idLiquidacion)
    {
        $this->idLiquidacion = $idLiquidacion;

        return $this;
    }

    /**
     * Get idLiquidacion
     *
     * @return integer 
     */
    public function getIdLiquidacion()
    {
        return $this->idLiquidacion;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return ChAliquidacionesDet
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
     * Set ano
     *
     * @param integer $ano
     * @return ChAliquidacionesDet
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
     * Set marcadoLiquidar
     *
     * @param boolean $marcadoLiquidar
     * @return ChAliquidacionesDet
     */
    public function setMarcadoLiquidar($marcadoLiquidar)
    {
        $this->marcadoLiquidar = $marcadoLiquidar;

        return $this;
    }

    /**
     * Get marcadoLiquidar
     *
     * @return boolean 
     */
    public function getMarcadoLiquidar()
    {
        return $this->marcadoLiquidar;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return ChAliquidacionesDet
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
     * @return ChAliquidacionesDet
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return ChAliquidacionesDet
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
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return ChAliquidacionesDet
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
     * @return ChAliquidacionesDet
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
     * @return ChAliquidacionesDet
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
     * @return ChAliquidacionesDet
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
     * @return ChAliquidacionesDet
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
     * @return ChAliquidacionesDet
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
     * Set itemAnticipo
     *
     * @param integer $itemAnticipo
     * @return ChAliquidacionesDet
     */
    public function setItemAnticipo($itemAnticipo)
    {
        $this->itemAnticipo = $itemAnticipo;

        return $this;
    }

    /**
     * Get itemAnticipo
     *
     * @return integer 
     */
    public function getItemAnticipo()
    {
        return $this->itemAnticipo;
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
