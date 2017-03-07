<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTemporalSalario
 *
 * @ORM\Table(name="RH_Temporal_Salario")
 * @ORM\Entity
 */
class RhTemporalSalario
{
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
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     */
    private $tipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExpediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico", type="integer", nullable=false)
     */
    private $salarioBasico;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico_Medidas", type="integer", nullable=false)
     */
    private $salarioBasicoMedidas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_por_Cargo", type="integer", nullable=false)
     */
    private $salarioPorCargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros", type="integer", nullable=false)
     */
    private $otros;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plus", type="integer", nullable=false)
     */
    private $plus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Antiguedad", type="integer", nullable=false)
     */
    private $antiguedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Albergamiento", type="integer", nullable=false)
     */
    private $albergamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="OtrasRetribuciones", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $otrasretribuciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="HorarioIrregular", type="integer", nullable=false)
     */
    private $horarioirregular;

    /**
     * @var string
     *
     * @ORM\Column(name="IETerritorial", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ieterritorial;

    /**
     * @var string
     *
     * @ORM\Column(name="ETSector", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $etsector;

    /**
     * @var integer
     *
     * @ORM\Column(name="Condiciones", type="integer", nullable=false)
     */
    private $condiciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_Fijo", type="integer", nullable=false)
     */
    private $idoneidadFijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_Movil", type="integer", nullable=false)
     */
    private $idoneidadMovil;

    /**
     * @var integer
     *
     * @ORM\Column(name="Retribucion_Complementaria", type="integer", nullable=false)
     */
    private $retribucionComplementaria;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Trabajados", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasTrabajados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_por_Subsidio", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasPorSubsidio;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar_por_Interruptos_Reubicados", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAPagarPorInterruptosReubicados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar_por_Interrupcion", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAPagarPorInterrupcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar_por_Interrupcion60", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAPagarPorInterrupcion60;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar_por_Interrupcion100", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAPagarPorInterrupcion100;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado", type="integer", nullable=false)
     */
    private $devengado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_por_Subsidio", type="integer", nullable=false)
     */
    private $devengadoPorSubsidio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_por_Interrupcion", type="integer", nullable=false)
     */
    private $devengadoPorInterrupcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado60", type="integer", nullable=false)
     */
    private $devengado60;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado100", type="integer", nullable=false)
     */
    private $devengado100;

    /**
     * @var integer
     *
     * @ORM\Column(name="DevengadoReubicados", type="integer", nullable=false)
     */
    private $devengadoreubicados;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Divisa", type="integer", nullable=false)
     */
    private $devengadoDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="DevengadoporSombrecumplimiento", type="integer", nullable=false)
     */
    private $devengadoporsombrecumplimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Deducciones", type="integer", nullable=false)
     */
    private $deducciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesSalario", type="integer", nullable=false)
     */
    private $deduccionessalario;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesReubicados", type="integer", nullable=false)
     */
    private $deduccionesreubicados;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesInterrupto", type="integer", nullable=false)
     */
    private $deduccionesinterrupto;

    /**
     * @var integer
     *
     * @ORM\Column(name="OtrosDescuentosInterrupto", type="integer", nullable=false)
     */
    private $otrosdescuentosinterrupto;

    /**
     * @var integer
     *
     * @ORM\Column(name="OtrosDescuentosReubicados", type="integer", nullable=false)
     */
    private $otrosdescuentosreubicados;

    /**
     * @var integer
     *
     * @ORM\Column(name="OtrosDescuentosSalario", type="integer", nullable=false)
     */
    private $otrosdescuentossalario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Recargo_Total", type="integer", nullable=false)
     */
    private $recargoTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Acobrar", type="integer", nullable=false)
     */
    private $acobrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="PerfecInterrupto", type="integer", nullable=false)
     */
    private $perfecinterrupto;

    /**
     * @var integer
     *
     * @ORM\Column(name="PerfecReubicados", type="integer", nullable=false)
     */
    private $perfecreubicados;

    /**
     * @var integer
     *
     * @ORM\Column(name="PerfecSalario", type="integer", nullable=false)
     */
    private $perfecsalario;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Acumulado_Pago", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAcumuladoPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado_Pago", type="integer", nullable=false)
     */
    private $salarioAcumuladoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Acumulado", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAcumulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado", type="integer", nullable=false)
     */
    private $salarioAcumulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Perfeccionamiento", type="integer", nullable=false)
     */
    private $perfeccionamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Descuento", type="integer", nullable=false)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="TarifaInterrupto", type="integer", nullable=false)
     */
    private $tarifainterrupto;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteCentavos", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ajustecentavos;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContraValor", type="integer", nullable=false)
     */
    private $contravalor;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMS", type="integer", nullable=false)
     */
    private $importems;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulacion", type="integer", nullable=false)
     */
    private $estimulacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_por_Suspension", type="integer", nullable=false)
     */
    private $devengadoPorSuspension;

    /**
     * @var integer
     *
     * @ORM\Column(name="PagoOtros", type="integer", nullable=false)
     */
    private $pagootros;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMS_ET", type="integer", nullable=false)
     */
    private $importemsEt;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMS_EE", type="integer", nullable=false)
     */
    private $importemsEe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Comedor_CUC", type="boolean", nullable=false)
     */
    private $pagoComedorCuc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Tarifa", type="integer", nullable=false)
     */
    private $pagoComedorTarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Dias", type="smallint", nullable=false)
     */
    private $pagoComedorDias;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor", type="integer", nullable=false)
     */
    private $pagoComedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros_Pagos", type="integer", nullable=false)
     */
    private $otrosPagos;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMasivo", type="integer", nullable=false)
     */
    private $descuentomasivo;



    /**
     * Set ano
     *
     * @param integer $ano
     * @return RhTemporalSalario
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
     * @return RhTemporalSalario
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
     * Set tipoPago
     *
     * @param integer $tipoPago
     * @return RhTemporalSalario
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    /**
     * Get tipoPago
     *
     * @return integer 
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set salarioBasico
     *
     * @param integer $salarioBasico
     * @return RhTemporalSalario
     */
    public function setSalarioBasico($salarioBasico)
    {
        $this->salarioBasico = $salarioBasico;

        return $this;
    }

    /**
     * Get salarioBasico
     *
     * @return integer 
     */
    public function getSalarioBasico()
    {
        return $this->salarioBasico;
    }

    /**
     * Set salarioBasicoMedidas
     *
     * @param integer $salarioBasicoMedidas
     * @return RhTemporalSalario
     */
    public function setSalarioBasicoMedidas($salarioBasicoMedidas)
    {
        $this->salarioBasicoMedidas = $salarioBasicoMedidas;

        return $this;
    }

    /**
     * Get salarioBasicoMedidas
     *
     * @return integer 
     */
    public function getSalarioBasicoMedidas()
    {
        return $this->salarioBasicoMedidas;
    }

    /**
     * Set salarioPorCargo
     *
     * @param integer $salarioPorCargo
     * @return RhTemporalSalario
     */
    public function setSalarioPorCargo($salarioPorCargo)
    {
        $this->salarioPorCargo = $salarioPorCargo;

        return $this;
    }

    /**
     * Get salarioPorCargo
     *
     * @return integer 
     */
    public function getSalarioPorCargo()
    {
        return $this->salarioPorCargo;
    }

    /**
     * Set otros
     *
     * @param integer $otros
     * @return RhTemporalSalario
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return integer 
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set plus
     *
     * @param integer $plus
     * @return RhTemporalSalario
     */
    public function setPlus($plus)
    {
        $this->plus = $plus;

        return $this;
    }

    /**
     * Get plus
     *
     * @return integer 
     */
    public function getPlus()
    {
        return $this->plus;
    }

    /**
     * Set antiguedad
     *
     * @param integer $antiguedad
     * @return RhTemporalSalario
     */
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    /**
     * Get antiguedad
     *
     * @return integer 
     */
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    /**
     * Set albergamiento
     *
     * @param integer $albergamiento
     * @return RhTemporalSalario
     */
    public function setAlbergamiento($albergamiento)
    {
        $this->albergamiento = $albergamiento;

        return $this;
    }

    /**
     * Get albergamiento
     *
     * @return integer 
     */
    public function getAlbergamiento()
    {
        return $this->albergamiento;
    }

    /**
     * Set otrasretribuciones
     *
     * @param string $otrasretribuciones
     * @return RhTemporalSalario
     */
    public function setOtrasretribuciones($otrasretribuciones)
    {
        $this->otrasretribuciones = $otrasretribuciones;

        return $this;
    }

    /**
     * Get otrasretribuciones
     *
     * @return string 
     */
    public function getOtrasretribuciones()
    {
        return $this->otrasretribuciones;
    }

    /**
     * Set horarioirregular
     *
     * @param integer $horarioirregular
     * @return RhTemporalSalario
     */
    public function setHorarioirregular($horarioirregular)
    {
        $this->horarioirregular = $horarioirregular;

        return $this;
    }

    /**
     * Get horarioirregular
     *
     * @return integer 
     */
    public function getHorarioirregular()
    {
        return $this->horarioirregular;
    }

    /**
     * Set ieterritorial
     *
     * @param string $ieterritorial
     * @return RhTemporalSalario
     */
    public function setIeterritorial($ieterritorial)
    {
        $this->ieterritorial = $ieterritorial;

        return $this;
    }

    /**
     * Get ieterritorial
     *
     * @return string 
     */
    public function getIeterritorial()
    {
        return $this->ieterritorial;
    }

    /**
     * Set etsector
     *
     * @param string $etsector
     * @return RhTemporalSalario
     */
    public function setEtsector($etsector)
    {
        $this->etsector = $etsector;

        return $this;
    }

    /**
     * Get etsector
     *
     * @return string 
     */
    public function getEtsector()
    {
        return $this->etsector;
    }

    /**
     * Set condiciones
     *
     * @param integer $condiciones
     * @return RhTemporalSalario
     */
    public function setCondiciones($condiciones)
    {
        $this->condiciones = $condiciones;

        return $this;
    }

    /**
     * Get condiciones
     *
     * @return integer 
     */
    public function getCondiciones()
    {
        return $this->condiciones;
    }

    /**
     * Set idoneidadFijo
     *
     * @param integer $idoneidadFijo
     * @return RhTemporalSalario
     */
    public function setIdoneidadFijo($idoneidadFijo)
    {
        $this->idoneidadFijo = $idoneidadFijo;

        return $this;
    }

    /**
     * Get idoneidadFijo
     *
     * @return integer 
     */
    public function getIdoneidadFijo()
    {
        return $this->idoneidadFijo;
    }

    /**
     * Set idoneidadMovil
     *
     * @param integer $idoneidadMovil
     * @return RhTemporalSalario
     */
    public function setIdoneidadMovil($idoneidadMovil)
    {
        $this->idoneidadMovil = $idoneidadMovil;

        return $this;
    }

    /**
     * Get idoneidadMovil
     *
     * @return integer 
     */
    public function getIdoneidadMovil()
    {
        return $this->idoneidadMovil;
    }

    /**
     * Set retribucionComplementaria
     *
     * @param integer $retribucionComplementaria
     * @return RhTemporalSalario
     */
    public function setRetribucionComplementaria($retribucionComplementaria)
    {
        $this->retribucionComplementaria = $retribucionComplementaria;

        return $this;
    }

    /**
     * Get retribucionComplementaria
     *
     * @return integer 
     */
    public function getRetribucionComplementaria()
    {
        return $this->retribucionComplementaria;
    }

    /**
     * Set diasTrabajados
     *
     * @param string $diasTrabajados
     * @return RhTemporalSalario
     */
    public function setDiasTrabajados($diasTrabajados)
    {
        $this->diasTrabajados = $diasTrabajados;

        return $this;
    }

    /**
     * Get diasTrabajados
     *
     * @return string 
     */
    public function getDiasTrabajados()
    {
        return $this->diasTrabajados;
    }

    /**
     * Set diasPorSubsidio
     *
     * @param string $diasPorSubsidio
     * @return RhTemporalSalario
     */
    public function setDiasPorSubsidio($diasPorSubsidio)
    {
        $this->diasPorSubsidio = $diasPorSubsidio;

        return $this;
    }

    /**
     * Get diasPorSubsidio
     *
     * @return string 
     */
    public function getDiasPorSubsidio()
    {
        return $this->diasPorSubsidio;
    }

    /**
     * Set diasAPagarPorInterruptosReubicados
     *
     * @param string $diasAPagarPorInterruptosReubicados
     * @return RhTemporalSalario
     */
    public function setDiasAPagarPorInterruptosReubicados($diasAPagarPorInterruptosReubicados)
    {
        $this->diasAPagarPorInterruptosReubicados = $diasAPagarPorInterruptosReubicados;

        return $this;
    }

    /**
     * Get diasAPagarPorInterruptosReubicados
     *
     * @return string 
     */
    public function getDiasAPagarPorInterruptosReubicados()
    {
        return $this->diasAPagarPorInterruptosReubicados;
    }

    /**
     * Set diasAPagarPorInterrupcion
     *
     * @param string $diasAPagarPorInterrupcion
     * @return RhTemporalSalario
     */
    public function setDiasAPagarPorInterrupcion($diasAPagarPorInterrupcion)
    {
        $this->diasAPagarPorInterrupcion = $diasAPagarPorInterrupcion;

        return $this;
    }

    /**
     * Get diasAPagarPorInterrupcion
     *
     * @return string 
     */
    public function getDiasAPagarPorInterrupcion()
    {
        return $this->diasAPagarPorInterrupcion;
    }

    /**
     * Set diasAPagarPorInterrupcion60
     *
     * @param string $diasAPagarPorInterrupcion60
     * @return RhTemporalSalario
     */
    public function setDiasAPagarPorInterrupcion60($diasAPagarPorInterrupcion60)
    {
        $this->diasAPagarPorInterrupcion60 = $diasAPagarPorInterrupcion60;

        return $this;
    }

    /**
     * Get diasAPagarPorInterrupcion60
     *
     * @return string 
     */
    public function getDiasAPagarPorInterrupcion60()
    {
        return $this->diasAPagarPorInterrupcion60;
    }

    /**
     * Set diasAPagarPorInterrupcion100
     *
     * @param string $diasAPagarPorInterrupcion100
     * @return RhTemporalSalario
     */
    public function setDiasAPagarPorInterrupcion100($diasAPagarPorInterrupcion100)
    {
        $this->diasAPagarPorInterrupcion100 = $diasAPagarPorInterrupcion100;

        return $this;
    }

    /**
     * Get diasAPagarPorInterrupcion100
     *
     * @return string 
     */
    public function getDiasAPagarPorInterrupcion100()
    {
        return $this->diasAPagarPorInterrupcion100;
    }

    /**
     * Set devengado
     *
     * @param integer $devengado
     * @return RhTemporalSalario
     */
    public function setDevengado($devengado)
    {
        $this->devengado = $devengado;

        return $this;
    }

    /**
     * Get devengado
     *
     * @return integer 
     */
    public function getDevengado()
    {
        return $this->devengado;
    }

    /**
     * Set devengadoPorSubsidio
     *
     * @param integer $devengadoPorSubsidio
     * @return RhTemporalSalario
     */
    public function setDevengadoPorSubsidio($devengadoPorSubsidio)
    {
        $this->devengadoPorSubsidio = $devengadoPorSubsidio;

        return $this;
    }

    /**
     * Get devengadoPorSubsidio
     *
     * @return integer 
     */
    public function getDevengadoPorSubsidio()
    {
        return $this->devengadoPorSubsidio;
    }

    /**
     * Set devengadoPorInterrupcion
     *
     * @param integer $devengadoPorInterrupcion
     * @return RhTemporalSalario
     */
    public function setDevengadoPorInterrupcion($devengadoPorInterrupcion)
    {
        $this->devengadoPorInterrupcion = $devengadoPorInterrupcion;

        return $this;
    }

    /**
     * Get devengadoPorInterrupcion
     *
     * @return integer 
     */
    public function getDevengadoPorInterrupcion()
    {
        return $this->devengadoPorInterrupcion;
    }

    /**
     * Set devengado60
     *
     * @param integer $devengado60
     * @return RhTemporalSalario
     */
    public function setDevengado60($devengado60)
    {
        $this->devengado60 = $devengado60;

        return $this;
    }

    /**
     * Get devengado60
     *
     * @return integer 
     */
    public function getDevengado60()
    {
        return $this->devengado60;
    }

    /**
     * Set devengado100
     *
     * @param integer $devengado100
     * @return RhTemporalSalario
     */
    public function setDevengado100($devengado100)
    {
        $this->devengado100 = $devengado100;

        return $this;
    }

    /**
     * Get devengado100
     *
     * @return integer 
     */
    public function getDevengado100()
    {
        return $this->devengado100;
    }

    /**
     * Set devengadoreubicados
     *
     * @param integer $devengadoreubicados
     * @return RhTemporalSalario
     */
    public function setDevengadoreubicados($devengadoreubicados)
    {
        $this->devengadoreubicados = $devengadoreubicados;

        return $this;
    }

    /**
     * Get devengadoreubicados
     *
     * @return integer 
     */
    public function getDevengadoreubicados()
    {
        return $this->devengadoreubicados;
    }

    /**
     * Set devengadoDivisa
     *
     * @param integer $devengadoDivisa
     * @return RhTemporalSalario
     */
    public function setDevengadoDivisa($devengadoDivisa)
    {
        $this->devengadoDivisa = $devengadoDivisa;

        return $this;
    }

    /**
     * Get devengadoDivisa
     *
     * @return integer 
     */
    public function getDevengadoDivisa()
    {
        return $this->devengadoDivisa;
    }

    /**
     * Set devengadoporsombrecumplimiento
     *
     * @param integer $devengadoporsombrecumplimiento
     * @return RhTemporalSalario
     */
    public function setDevengadoporsombrecumplimiento($devengadoporsombrecumplimiento)
    {
        $this->devengadoporsombrecumplimiento = $devengadoporsombrecumplimiento;

        return $this;
    }

    /**
     * Get devengadoporsombrecumplimiento
     *
     * @return integer 
     */
    public function getDevengadoporsombrecumplimiento()
    {
        return $this->devengadoporsombrecumplimiento;
    }

    /**
     * Set deducciones
     *
     * @param integer $deducciones
     * @return RhTemporalSalario
     */
    public function setDeducciones($deducciones)
    {
        $this->deducciones = $deducciones;

        return $this;
    }

    /**
     * Get deducciones
     *
     * @return integer 
     */
    public function getDeducciones()
    {
        return $this->deducciones;
    }

    /**
     * Set deduccionessalario
     *
     * @param integer $deduccionessalario
     * @return RhTemporalSalario
     */
    public function setDeduccionessalario($deduccionessalario)
    {
        $this->deduccionessalario = $deduccionessalario;

        return $this;
    }

    /**
     * Get deduccionessalario
     *
     * @return integer 
     */
    public function getDeduccionessalario()
    {
        return $this->deduccionessalario;
    }

    /**
     * Set deduccionesreubicados
     *
     * @param integer $deduccionesreubicados
     * @return RhTemporalSalario
     */
    public function setDeduccionesreubicados($deduccionesreubicados)
    {
        $this->deduccionesreubicados = $deduccionesreubicados;

        return $this;
    }

    /**
     * Get deduccionesreubicados
     *
     * @return integer 
     */
    public function getDeduccionesreubicados()
    {
        return $this->deduccionesreubicados;
    }

    /**
     * Set deduccionesinterrupto
     *
     * @param integer $deduccionesinterrupto
     * @return RhTemporalSalario
     */
    public function setDeduccionesinterrupto($deduccionesinterrupto)
    {
        $this->deduccionesinterrupto = $deduccionesinterrupto;

        return $this;
    }

    /**
     * Get deduccionesinterrupto
     *
     * @return integer 
     */
    public function getDeduccionesinterrupto()
    {
        return $this->deduccionesinterrupto;
    }

    /**
     * Set otrosdescuentosinterrupto
     *
     * @param integer $otrosdescuentosinterrupto
     * @return RhTemporalSalario
     */
    public function setOtrosdescuentosinterrupto($otrosdescuentosinterrupto)
    {
        $this->otrosdescuentosinterrupto = $otrosdescuentosinterrupto;

        return $this;
    }

    /**
     * Get otrosdescuentosinterrupto
     *
     * @return integer 
     */
    public function getOtrosdescuentosinterrupto()
    {
        return $this->otrosdescuentosinterrupto;
    }

    /**
     * Set otrosdescuentosreubicados
     *
     * @param integer $otrosdescuentosreubicados
     * @return RhTemporalSalario
     */
    public function setOtrosdescuentosreubicados($otrosdescuentosreubicados)
    {
        $this->otrosdescuentosreubicados = $otrosdescuentosreubicados;

        return $this;
    }

    /**
     * Get otrosdescuentosreubicados
     *
     * @return integer 
     */
    public function getOtrosdescuentosreubicados()
    {
        return $this->otrosdescuentosreubicados;
    }

    /**
     * Set otrosdescuentossalario
     *
     * @param integer $otrosdescuentossalario
     * @return RhTemporalSalario
     */
    public function setOtrosdescuentossalario($otrosdescuentossalario)
    {
        $this->otrosdescuentossalario = $otrosdescuentossalario;

        return $this;
    }

    /**
     * Get otrosdescuentossalario
     *
     * @return integer 
     */
    public function getOtrosdescuentossalario()
    {
        return $this->otrosdescuentossalario;
    }

    /**
     * Set recargoTotal
     *
     * @param integer $recargoTotal
     * @return RhTemporalSalario
     */
    public function setRecargoTotal($recargoTotal)
    {
        $this->recargoTotal = $recargoTotal;

        return $this;
    }

    /**
     * Get recargoTotal
     *
     * @return integer 
     */
    public function getRecargoTotal()
    {
        return $this->recargoTotal;
    }

    /**
     * Set acobrar
     *
     * @param integer $acobrar
     * @return RhTemporalSalario
     */
    public function setAcobrar($acobrar)
    {
        $this->acobrar = $acobrar;

        return $this;
    }

    /**
     * Get acobrar
     *
     * @return integer 
     */
    public function getAcobrar()
    {
        return $this->acobrar;
    }

    /**
     * Set perfecinterrupto
     *
     * @param integer $perfecinterrupto
     * @return RhTemporalSalario
     */
    public function setPerfecinterrupto($perfecinterrupto)
    {
        $this->perfecinterrupto = $perfecinterrupto;

        return $this;
    }

    /**
     * Get perfecinterrupto
     *
     * @return integer 
     */
    public function getPerfecinterrupto()
    {
        return $this->perfecinterrupto;
    }

    /**
     * Set perfecreubicados
     *
     * @param integer $perfecreubicados
     * @return RhTemporalSalario
     */
    public function setPerfecreubicados($perfecreubicados)
    {
        $this->perfecreubicados = $perfecreubicados;

        return $this;
    }

    /**
     * Get perfecreubicados
     *
     * @return integer 
     */
    public function getPerfecreubicados()
    {
        return $this->perfecreubicados;
    }

    /**
     * Set perfecsalario
     *
     * @param integer $perfecsalario
     * @return RhTemporalSalario
     */
    public function setPerfecsalario($perfecsalario)
    {
        $this->perfecsalario = $perfecsalario;

        return $this;
    }

    /**
     * Get perfecsalario
     *
     * @return integer 
     */
    public function getPerfecsalario()
    {
        return $this->perfecsalario;
    }

    /**
     * Set diasAcumuladoPago
     *
     * @param string $diasAcumuladoPago
     * @return RhTemporalSalario
     */
    public function setDiasAcumuladoPago($diasAcumuladoPago)
    {
        $this->diasAcumuladoPago = $diasAcumuladoPago;

        return $this;
    }

    /**
     * Get diasAcumuladoPago
     *
     * @return string 
     */
    public function getDiasAcumuladoPago()
    {
        return $this->diasAcumuladoPago;
    }

    /**
     * Set salarioAcumuladoPago
     *
     * @param integer $salarioAcumuladoPago
     * @return RhTemporalSalario
     */
    public function setSalarioAcumuladoPago($salarioAcumuladoPago)
    {
        $this->salarioAcumuladoPago = $salarioAcumuladoPago;

        return $this;
    }

    /**
     * Get salarioAcumuladoPago
     *
     * @return integer 
     */
    public function getSalarioAcumuladoPago()
    {
        return $this->salarioAcumuladoPago;
    }

    /**
     * Set diasAcumulado
     *
     * @param string $diasAcumulado
     * @return RhTemporalSalario
     */
    public function setDiasAcumulado($diasAcumulado)
    {
        $this->diasAcumulado = $diasAcumulado;

        return $this;
    }

    /**
     * Get diasAcumulado
     *
     * @return string 
     */
    public function getDiasAcumulado()
    {
        return $this->diasAcumulado;
    }

    /**
     * Set salarioAcumulado
     *
     * @param integer $salarioAcumulado
     * @return RhTemporalSalario
     */
    public function setSalarioAcumulado($salarioAcumulado)
    {
        $this->salarioAcumulado = $salarioAcumulado;

        return $this;
    }

    /**
     * Get salarioAcumulado
     *
     * @return integer 
     */
    public function getSalarioAcumulado()
    {
        return $this->salarioAcumulado;
    }

    /**
     * Set perfeccionamiento
     *
     * @param integer $perfeccionamiento
     * @return RhTemporalSalario
     */
    public function setPerfeccionamiento($perfeccionamiento)
    {
        $this->perfeccionamiento = $perfeccionamiento;

        return $this;
    }

    /**
     * Get perfeccionamiento
     *
     * @return integer 
     */
    public function getPerfeccionamiento()
    {
        return $this->perfeccionamiento;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     * @return RhTemporalSalario
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set tarifainterrupto
     *
     * @param integer $tarifainterrupto
     * @return RhTemporalSalario
     */
    public function setTarifainterrupto($tarifainterrupto)
    {
        $this->tarifainterrupto = $tarifainterrupto;

        return $this;
    }

    /**
     * Get tarifainterrupto
     *
     * @return integer 
     */
    public function getTarifainterrupto()
    {
        return $this->tarifainterrupto;
    }

    /**
     * Set ajustecentavos
     *
     * @param string $ajustecentavos
     * @return RhTemporalSalario
     */
    public function setAjustecentavos($ajustecentavos)
    {
        $this->ajustecentavos = $ajustecentavos;

        return $this;
    }

    /**
     * Get ajustecentavos
     *
     * @return string 
     */
    public function getAjustecentavos()
    {
        return $this->ajustecentavos;
    }

    /**
     * Set contravalor
     *
     * @param integer $contravalor
     * @return RhTemporalSalario
     */
    public function setContravalor($contravalor)
    {
        $this->contravalor = $contravalor;

        return $this;
    }

    /**
     * Get contravalor
     *
     * @return integer 
     */
    public function getContravalor()
    {
        return $this->contravalor;
    }

    /**
     * Set importems
     *
     * @param integer $importems
     * @return RhTemporalSalario
     */
    public function setImportems($importems)
    {
        $this->importems = $importems;

        return $this;
    }

    /**
     * Get importems
     *
     * @return integer 
     */
    public function getImportems()
    {
        return $this->importems;
    }

    /**
     * Set estimulacion
     *
     * @param integer $estimulacion
     * @return RhTemporalSalario
     */
    public function setEstimulacion($estimulacion)
    {
        $this->estimulacion = $estimulacion;

        return $this;
    }

    /**
     * Get estimulacion
     *
     * @return integer 
     */
    public function getEstimulacion()
    {
        return $this->estimulacion;
    }

    /**
     * Set devengadoPorSuspension
     *
     * @param integer $devengadoPorSuspension
     * @return RhTemporalSalario
     */
    public function setDevengadoPorSuspension($devengadoPorSuspension)
    {
        $this->devengadoPorSuspension = $devengadoPorSuspension;

        return $this;
    }

    /**
     * Get devengadoPorSuspension
     *
     * @return integer 
     */
    public function getDevengadoPorSuspension()
    {
        return $this->devengadoPorSuspension;
    }

    /**
     * Set pagootros
     *
     * @param integer $pagootros
     * @return RhTemporalSalario
     */
    public function setPagootros($pagootros)
    {
        $this->pagootros = $pagootros;

        return $this;
    }

    /**
     * Get pagootros
     *
     * @return integer 
     */
    public function getPagootros()
    {
        return $this->pagootros;
    }

    /**
     * Set importemsEt
     *
     * @param integer $importemsEt
     * @return RhTemporalSalario
     */
    public function setImportemsEt($importemsEt)
    {
        $this->importemsEt = $importemsEt;

        return $this;
    }

    /**
     * Get importemsEt
     *
     * @return integer 
     */
    public function getImportemsEt()
    {
        return $this->importemsEt;
    }

    /**
     * Set importemsEe
     *
     * @param integer $importemsEe
     * @return RhTemporalSalario
     */
    public function setImportemsEe($importemsEe)
    {
        $this->importemsEe = $importemsEe;

        return $this;
    }

    /**
     * Get importemsEe
     *
     * @return integer 
     */
    public function getImportemsEe()
    {
        return $this->importemsEe;
    }

    /**
     * Set pagoComedorCuc
     *
     * @param boolean $pagoComedorCuc
     * @return RhTemporalSalario
     */
    public function setPagoComedorCuc($pagoComedorCuc)
    {
        $this->pagoComedorCuc = $pagoComedorCuc;

        return $this;
    }

    /**
     * Get pagoComedorCuc
     *
     * @return boolean 
     */
    public function getPagoComedorCuc()
    {
        return $this->pagoComedorCuc;
    }

    /**
     * Set pagoComedorTarifa
     *
     * @param integer $pagoComedorTarifa
     * @return RhTemporalSalario
     */
    public function setPagoComedorTarifa($pagoComedorTarifa)
    {
        $this->pagoComedorTarifa = $pagoComedorTarifa;

        return $this;
    }

    /**
     * Get pagoComedorTarifa
     *
     * @return integer 
     */
    public function getPagoComedorTarifa()
    {
        return $this->pagoComedorTarifa;
    }

    /**
     * Set pagoComedorDias
     *
     * @param integer $pagoComedorDias
     * @return RhTemporalSalario
     */
    public function setPagoComedorDias($pagoComedorDias)
    {
        $this->pagoComedorDias = $pagoComedorDias;

        return $this;
    }

    /**
     * Get pagoComedorDias
     *
     * @return integer 
     */
    public function getPagoComedorDias()
    {
        return $this->pagoComedorDias;
    }

    /**
     * Set pagoComedor
     *
     * @param integer $pagoComedor
     * @return RhTemporalSalario
     */
    public function setPagoComedor($pagoComedor)
    {
        $this->pagoComedor = $pagoComedor;

        return $this;
    }

    /**
     * Get pagoComedor
     *
     * @return integer 
     */
    public function getPagoComedor()
    {
        return $this->pagoComedor;
    }

    /**
     * Set otrosPagos
     *
     * @param integer $otrosPagos
     * @return RhTemporalSalario
     */
    public function setOtrosPagos($otrosPagos)
    {
        $this->otrosPagos = $otrosPagos;

        return $this;
    }

    /**
     * Get otrosPagos
     *
     * @return integer 
     */
    public function getOtrosPagos()
    {
        return $this->otrosPagos;
    }

    /**
     * Set descuentomasivo
     *
     * @param integer $descuentomasivo
     * @return RhTemporalSalario
     */
    public function setDescuentomasivo($descuentomasivo)
    {
        $this->descuentomasivo = $descuentomasivo;

        return $this;
    }

    /**
     * Get descuentomasivo
     *
     * @return integer 
     */
    public function getDescuentomasivo()
    {
        return $this->descuentomasivo;
    }
}
