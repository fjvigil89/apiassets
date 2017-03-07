<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTemporalNominaVinculados
 *
 * @ORM\Table(name="RH_Temporal_Nomina_Vinculados")
 * @ORM\Entity
 */
class RhTemporalNominaVinculados
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
     * @ORM\Column(name="Estimulo", type="integer", nullable=false)
     */
    private $estimulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plus", type="integer", nullable=false)
     */
    private $plus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Horas_Extra", type="integer", nullable=false)
     */
    private $horasExtra;

    /**
     * @var integer
     *
     * @ORM\Column(name="Condiciones", type="integer", nullable=false)
     */
    private $condiciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_por_Cargo", type="integer", nullable=false)
     */
    private $salarioPorCargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Antiguedad", type="integer", nullable=false)
     */
    private $antiguedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulacion", type="integer", nullable=false)
     */
    private $estimulacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros", type="integer", nullable=false)
     */
    private $otros;

    /**
     * @var integer
     *
     * @ORM\Column(name="TarifaInterrupto", type="integer", nullable=false)
     */
    private $tarifainterrupto;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Trabajadas", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasTrabajadas;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Interrupto", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasInterrupto;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Actividad", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Real_Trabajadas", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasRealTrabajadas;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Adelantadas", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasAdelantadas;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar_por_Subsidio_sin_Reporte", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAPagarPorSubsidioSinReporte;

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
     * @ORM\Column(name="Dias_a_Pagar_por_Suspension", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAPagarPorSuspension;

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
     * @ORM\Column(name="Devengado_Tarjeta", type="integer", nullable=false)
     */
    private $devengadoTarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="DevengadoporSombrecumplimiento", type="integer", nullable=false)
     */
    private $devengadoporsombrecumplimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Horas_Interrupcion", type="integer", nullable=false)
     */
    private $devengadoHorasInterrupcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Horas_Tasadas", type="integer", nullable=false)
     */
    private $devengadoHorasTasadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Horas_Adelantadas", type="integer", nullable=false)
     */
    private $devengadoHorasAdelantadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Actividad", type="integer", nullable=false)
     */
    private $devengadoActividad;

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
     * @ORM\Column(name="Devengado_por_Interrupcion", type="integer", nullable=false)
     */
    private $devengadoPorInterrupcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_por_Suspension", type="integer", nullable=false)
     */
    private $devengadoPorSuspension;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_por_Subsidio_sin_Reporte", type="integer", nullable=false)
     */
    private $devengadoPorSubsidioSinReporte;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Divisa", type="integer", nullable=false)
     */
    private $devengadoDivisa;

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
     * @var integer
     *
     * @ORM\Column(name="Importe_Adelantado_Rebajado", type="integer", nullable=false)
     */
    private $importeAdelantadoRebajado;

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
     * @ORM\Column(name="Descuento", type="integer", nullable=false)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Perfeccionamiento", type="integer", nullable=false)
     */
    private $perfeccionamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteCentavos", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ajustecentavos;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMS", type="integer", nullable=false)
     */
    private $importems;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContraValor", type="integer", nullable=false)
     */
    private $contravalor;

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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * Set estimulo
     *
     * @param integer $estimulo
     * @return RhTemporalNominaVinculados
     */
    public function setEstimulo($estimulo)
    {
        $this->estimulo = $estimulo;

        return $this;
    }

    /**
     * Get estimulo
     *
     * @return integer 
     */
    public function getEstimulo()
    {
        return $this->estimulo;
    }

    /**
     * Set plus
     *
     * @param integer $plus
     * @return RhTemporalNominaVinculados
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
     * Set horasExtra
     *
     * @param integer $horasExtra
     * @return RhTemporalNominaVinculados
     */
    public function setHorasExtra($horasExtra)
    {
        $this->horasExtra = $horasExtra;

        return $this;
    }

    /**
     * Get horasExtra
     *
     * @return integer 
     */
    public function getHorasExtra()
    {
        return $this->horasExtra;
    }

    /**
     * Set condiciones
     *
     * @param integer $condiciones
     * @return RhTemporalNominaVinculados
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
     * Set salarioPorCargo
     *
     * @param integer $salarioPorCargo
     * @return RhTemporalNominaVinculados
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
     * Set antiguedad
     *
     * @param integer $antiguedad
     * @return RhTemporalNominaVinculados
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
     * Set estimulacion
     *
     * @param integer $estimulacion
     * @return RhTemporalNominaVinculados
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
     * Set otros
     *
     * @param integer $otros
     * @return RhTemporalNominaVinculados
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
     * Set tarifainterrupto
     *
     * @param integer $tarifainterrupto
     * @return RhTemporalNominaVinculados
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
     * Set horasTrabajadas
     *
     * @param string $horasTrabajadas
     * @return RhTemporalNominaVinculados
     */
    public function setHorasTrabajadas($horasTrabajadas)
    {
        $this->horasTrabajadas = $horasTrabajadas;

        return $this;
    }

    /**
     * Get horasTrabajadas
     *
     * @return string 
     */
    public function getHorasTrabajadas()
    {
        return $this->horasTrabajadas;
    }

    /**
     * Set horasInterrupto
     *
     * @param string $horasInterrupto
     * @return RhTemporalNominaVinculados
     */
    public function setHorasInterrupto($horasInterrupto)
    {
        $this->horasInterrupto = $horasInterrupto;

        return $this;
    }

    /**
     * Get horasInterrupto
     *
     * @return string 
     */
    public function getHorasInterrupto()
    {
        return $this->horasInterrupto;
    }

    /**
     * Set horasActividad
     *
     * @param string $horasActividad
     * @return RhTemporalNominaVinculados
     */
    public function setHorasActividad($horasActividad)
    {
        $this->horasActividad = $horasActividad;

        return $this;
    }

    /**
     * Get horasActividad
     *
     * @return string 
     */
    public function getHorasActividad()
    {
        return $this->horasActividad;
    }

    /**
     * Set horasRealTrabajadas
     *
     * @param string $horasRealTrabajadas
     * @return RhTemporalNominaVinculados
     */
    public function setHorasRealTrabajadas($horasRealTrabajadas)
    {
        $this->horasRealTrabajadas = $horasRealTrabajadas;

        return $this;
    }

    /**
     * Get horasRealTrabajadas
     *
     * @return string 
     */
    public function getHorasRealTrabajadas()
    {
        return $this->horasRealTrabajadas;
    }

    /**
     * Set horasAdelantadas
     *
     * @param string $horasAdelantadas
     * @return RhTemporalNominaVinculados
     */
    public function setHorasAdelantadas($horasAdelantadas)
    {
        $this->horasAdelantadas = $horasAdelantadas;

        return $this;
    }

    /**
     * Get horasAdelantadas
     *
     * @return string 
     */
    public function getHorasAdelantadas()
    {
        return $this->horasAdelantadas;
    }

    /**
     * Set diasAPagarPorSubsidioSinReporte
     *
     * @param string $diasAPagarPorSubsidioSinReporte
     * @return RhTemporalNominaVinculados
     */
    public function setDiasAPagarPorSubsidioSinReporte($diasAPagarPorSubsidioSinReporte)
    {
        $this->diasAPagarPorSubsidioSinReporte = $diasAPagarPorSubsidioSinReporte;

        return $this;
    }

    /**
     * Get diasAPagarPorSubsidioSinReporte
     *
     * @return string 
     */
    public function getDiasAPagarPorSubsidioSinReporte()
    {
        return $this->diasAPagarPorSubsidioSinReporte;
    }

    /**
     * Set diasAPagarPorInterruptosReubicados
     *
     * @param string $diasAPagarPorInterruptosReubicados
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * Set diasAPagarPorSuspension
     *
     * @param string $diasAPagarPorSuspension
     * @return RhTemporalNominaVinculados
     */
    public function setDiasAPagarPorSuspension($diasAPagarPorSuspension)
    {
        $this->diasAPagarPorSuspension = $diasAPagarPorSuspension;

        return $this;
    }

    /**
     * Get diasAPagarPorSuspension
     *
     * @return string 
     */
    public function getDiasAPagarPorSuspension()
    {
        return $this->diasAPagarPorSuspension;
    }

    /**
     * Set diasAPagarPorInterrupcion60
     *
     * @param string $diasAPagarPorInterrupcion60
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * Set devengadoTarjeta
     *
     * @param integer $devengadoTarjeta
     * @return RhTemporalNominaVinculados
     */
    public function setDevengadoTarjeta($devengadoTarjeta)
    {
        $this->devengadoTarjeta = $devengadoTarjeta;

        return $this;
    }

    /**
     * Get devengadoTarjeta
     *
     * @return integer 
     */
    public function getDevengadoTarjeta()
    {
        return $this->devengadoTarjeta;
    }

    /**
     * Set devengadoporsombrecumplimiento
     *
     * @param integer $devengadoporsombrecumplimiento
     * @return RhTemporalNominaVinculados
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
     * Set devengadoHorasInterrupcion
     *
     * @param integer $devengadoHorasInterrupcion
     * @return RhTemporalNominaVinculados
     */
    public function setDevengadoHorasInterrupcion($devengadoHorasInterrupcion)
    {
        $this->devengadoHorasInterrupcion = $devengadoHorasInterrupcion;

        return $this;
    }

    /**
     * Get devengadoHorasInterrupcion
     *
     * @return integer 
     */
    public function getDevengadoHorasInterrupcion()
    {
        return $this->devengadoHorasInterrupcion;
    }

    /**
     * Set devengadoHorasTasadas
     *
     * @param integer $devengadoHorasTasadas
     * @return RhTemporalNominaVinculados
     */
    public function setDevengadoHorasTasadas($devengadoHorasTasadas)
    {
        $this->devengadoHorasTasadas = $devengadoHorasTasadas;

        return $this;
    }

    /**
     * Get devengadoHorasTasadas
     *
     * @return integer 
     */
    public function getDevengadoHorasTasadas()
    {
        return $this->devengadoHorasTasadas;
    }

    /**
     * Set devengadoHorasAdelantadas
     *
     * @param integer $devengadoHorasAdelantadas
     * @return RhTemporalNominaVinculados
     */
    public function setDevengadoHorasAdelantadas($devengadoHorasAdelantadas)
    {
        $this->devengadoHorasAdelantadas = $devengadoHorasAdelantadas;

        return $this;
    }

    /**
     * Get devengadoHorasAdelantadas
     *
     * @return integer 
     */
    public function getDevengadoHorasAdelantadas()
    {
        return $this->devengadoHorasAdelantadas;
    }

    /**
     * Set devengadoActividad
     *
     * @param integer $devengadoActividad
     * @return RhTemporalNominaVinculados
     */
    public function setDevengadoActividad($devengadoActividad)
    {
        $this->devengadoActividad = $devengadoActividad;

        return $this;
    }

    /**
     * Get devengadoActividad
     *
     * @return integer 
     */
    public function getDevengadoActividad()
    {
        return $this->devengadoActividad;
    }

    /**
     * Set devengado60
     *
     * @param integer $devengado60
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * Set devengadoPorInterrupcion
     *
     * @param integer $devengadoPorInterrupcion
     * @return RhTemporalNominaVinculados
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
     * Set devengadoPorSuspension
     *
     * @param integer $devengadoPorSuspension
     * @return RhTemporalNominaVinculados
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
     * Set devengadoPorSubsidioSinReporte
     *
     * @param integer $devengadoPorSubsidioSinReporte
     * @return RhTemporalNominaVinculados
     */
    public function setDevengadoPorSubsidioSinReporte($devengadoPorSubsidioSinReporte)
    {
        $this->devengadoPorSubsidioSinReporte = $devengadoPorSubsidioSinReporte;

        return $this;
    }

    /**
     * Get devengadoPorSubsidioSinReporte
     *
     * @return integer 
     */
    public function getDevengadoPorSubsidioSinReporte()
    {
        return $this->devengadoPorSubsidioSinReporte;
    }

    /**
     * Set devengadoDivisa
     *
     * @param integer $devengadoDivisa
     * @return RhTemporalNominaVinculados
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
     * Set deducciones
     *
     * @param integer $deducciones
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * Set importeAdelantadoRebajado
     *
     * @param integer $importeAdelantadoRebajado
     * @return RhTemporalNominaVinculados
     */
    public function setImporteAdelantadoRebajado($importeAdelantadoRebajado)
    {
        $this->importeAdelantadoRebajado = $importeAdelantadoRebajado;

        return $this;
    }

    /**
     * Get importeAdelantadoRebajado
     *
     * @return integer 
     */
    public function getImporteAdelantadoRebajado()
    {
        return $this->importeAdelantadoRebajado;
    }

    /**
     * Set diasAcumuladoPago
     *
     * @param string $diasAcumuladoPago
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * Set descuento
     *
     * @param integer $descuento
     * @return RhTemporalNominaVinculados
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
     * Set perfeccionamiento
     *
     * @param integer $perfeccionamiento
     * @return RhTemporalNominaVinculados
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
     * Set ajustecentavos
     *
     * @param string $ajustecentavos
     * @return RhTemporalNominaVinculados
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
     * Set importems
     *
     * @param integer $importems
     * @return RhTemporalNominaVinculados
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
     * Set contravalor
     *
     * @param integer $contravalor
     * @return RhTemporalNominaVinculados
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
     * Set importemsEt
     *
     * @param integer $importemsEt
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
     * @return RhTemporalNominaVinculados
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
