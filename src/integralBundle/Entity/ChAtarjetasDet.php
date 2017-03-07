<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChAtarjetasDet
 *
 * @ORM\Table(name="CH_ATarjetas_Det")
 * @ORM\Entity
 */
class ChAtarjetasDet
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
     * @ORM\Column(name="Id_Tarjeta", type="integer", nullable=false)
     */
    private $idTarjeta;

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
     * @ORM\Column(name="Item", type="integer", nullable=false)
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Movim", type="smallint", nullable=false)
     */
    private $tipoMovim;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo", type="string", length=10, nullable=false)
     */
    private $idFondo;

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
     * @ORM\Column(name="Importe_Liquidado", type="integer", nullable=false)
     */
    private $importeLiquidado;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=120, nullable=false)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Compro", type="smallint", nullable=false)
     */
    private $mesCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro", type="smallint", nullable=false)
     */
    private $anoCompro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contabilizado", type="smallint", nullable=false)
     */
    private $contabilizado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contabilizado_Liquidado", type="smallint", nullable=false)
     */
    private $contabilizadoLiquidado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Reembolsado", type="smallint", nullable=false)
     */
    private $reembolsado;



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
     * Set idTarjeta
     *
     * @param integer $idTarjeta
     * @return ChAtarjetasDet
     */
    public function setIdTarjeta($idTarjeta)
    {
        $this->idTarjeta = $idTarjeta;

        return $this;
    }

    /**
     * Get idTarjeta
     *
     * @return integer 
     */
    public function getIdTarjeta()
    {
        return $this->idTarjeta;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return ChAtarjetasDet
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
     * @return ChAtarjetasDet
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
     * Set item
     *
     * @param integer $item
     * @return ChAtarjetasDet
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

    /**
     * Set tipoMovim
     *
     * @param integer $tipoMovim
     * @return ChAtarjetasDet
     */
    public function setTipoMovim($tipoMovim)
    {
        $this->tipoMovim = $tipoMovim;

        return $this;
    }

    /**
     * Get tipoMovim
     *
     * @return integer 
     */
    public function getTipoMovim()
    {
        return $this->tipoMovim;
    }

    /**
     * Set idFondo
     *
     * @param string $idFondo
     * @return ChAtarjetasDet
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
     * Set estado
     *
     * @param integer $estado
     * @return ChAtarjetasDet
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
     * @return ChAtarjetasDet
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
     * @return ChAtarjetasDet
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
     * @return ChAtarjetasDet
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
     * @return ChAtarjetasDet
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
     * @return ChAtarjetasDet
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
     * Set importeLiquidado
     *
     * @param integer $importeLiquidado
     * @return ChAtarjetasDet
     */
    public function setImporteLiquidado($importeLiquidado)
    {
        $this->importeLiquidado = $importeLiquidado;

        return $this;
    }

    /**
     * Get importeLiquidado
     *
     * @return integer 
     */
    public function getImporteLiquidado()
    {
        return $this->importeLiquidado;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return ChAtarjetasDet
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
     * Set idCompro
     *
     * @param integer $idCompro
     * @return ChAtarjetasDet
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
     * Set mesCompro
     *
     * @param integer $mesCompro
     * @return ChAtarjetasDet
     */
    public function setMesCompro($mesCompro)
    {
        $this->mesCompro = $mesCompro;

        return $this;
    }

    /**
     * Get mesCompro
     *
     * @return integer 
     */
    public function getMesCompro()
    {
        return $this->mesCompro;
    }

    /**
     * Set anoCompro
     *
     * @param integer $anoCompro
     * @return ChAtarjetasDet
     */
    public function setAnoCompro($anoCompro)
    {
        $this->anoCompro = $anoCompro;

        return $this;
    }

    /**
     * Get anoCompro
     *
     * @return integer 
     */
    public function getAnoCompro()
    {
        return $this->anoCompro;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return ChAtarjetasDet
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
     * Set contabilizado
     *
     * @param integer $contabilizado
     * @return ChAtarjetasDet
     */
    public function setContabilizado($contabilizado)
    {
        $this->contabilizado = $contabilizado;

        return $this;
    }

    /**
     * Get contabilizado
     *
     * @return integer 
     */
    public function getContabilizado()
    {
        return $this->contabilizado;
    }

    /**
     * Set contabilizadoLiquidado
     *
     * @param integer $contabilizadoLiquidado
     * @return ChAtarjetasDet
     */
    public function setContabilizadoLiquidado($contabilizadoLiquidado)
    {
        $this->contabilizadoLiquidado = $contabilizadoLiquidado;

        return $this;
    }

    /**
     * Get contabilizadoLiquidado
     *
     * @return integer 
     */
    public function getContabilizadoLiquidado()
    {
        return $this->contabilizadoLiquidado;
    }

    /**
     * Set reembolsado
     *
     * @param integer $reembolsado
     * @return ChAtarjetasDet
     */
    public function setReembolsado($reembolsado)
    {
        $this->reembolsado = $reembolsado;

        return $this;
    }

    /**
     * Get reembolsado
     *
     * @return integer 
     */
    public function getReembolsado()
    {
        return $this->reembolsado;
    }
}
