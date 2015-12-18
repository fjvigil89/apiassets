<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhEmpleadosNomina
 *
 * @ORM\Table(name="RH_Empleados_Nomina", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Empleados_Nomina", columns={"Id_Expediente"})})
 * @ORM\Entity
 */
class RhEmpleadosNomina
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido_1", type="string", length=50, nullable=false)
     */
    private $apellido1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Nomina", type="boolean", nullable=false)
     */
    private $nomina;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Seleccionado_para_Pago", type="boolean", nullable=false)
     */
    private $seleccionadoParaPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa", type="integer", nullable=false)
     */
    private $tarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Diaria", type="integer", nullable=false)
     */
    private $tarifaDiaria;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico", type="integer", nullable=false)
     */
    private $salarioBasico;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulo", type="integer", nullable=false)
     */
    private $estimulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Estimulo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoEstimulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Antiguedad", type="integer", nullable=false)
     */
    private $antiguedad;

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
     * @ORM\Column(name="Salario_por_Cargo", type="integer", nullable=false)
     */
    private $salarioPorCargo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Acumula_Vacaciones", type="boolean", nullable=false)
     */
    private $acumulaVacaciones;

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
     * @var string
     *
     * @ORM\Column(name="Dias_Acumulado_Temporal", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAcumuladoTemporal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado_Temporal", type="integer", nullable=false)
     */
    private $salarioAcumuladoTemporal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel_Nomina", type="smallint", nullable=false)
     */
    private $nivelNomina;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion_Nomina", type="string", length=15, nullable=false)
     */
    private $idDireccionNomina;

    /**
     * @var integer
     *
     * @ORM\Column(name="Invalidez_Parcial", type="integer", nullable=false)
     */
    private $invalidezParcial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ex_Combatientes", type="integer", nullable=false)
     */
    private $exCombatientes;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Perfeccionamiento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoPerfeccionamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Divisa", type="integer", nullable=false)
     */
    private $valorDivisa;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Pago_Divisa", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoPagoDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulacion", type="integer", nullable=false)
     */
    private $estimulacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Estimulacion", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoEstimulacion;

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
     * @var integer
     *
     * @ORM\Column(name="Otras_CLA", type="integer", nullable=false)
     */
    private $otrasCla;

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
     * @var string
     *
     * @ORM\Column(name="Coeficente_Empresa_Empleadora", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $coeficenteEmpresaEmpleadora;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_Participacion", type="string", length=3, nullable=false)
     */
    private $idTipoParticipacion;

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
     * @var integer
     *
     * @ORM\Column(name="CoeficienteTarifa", type="integer", nullable=false)
     */
    private $coeficientetarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Descuento", type="integer", nullable=false)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMasivo", type="integer", nullable=false)
     */
    private $descuentomasivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Estipendio_por_Estudio", type="boolean", nullable=false)
     */
    private $estipendioPorEstudio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cuantia_Estipendio", type="integer", nullable=false)
     */
    private $cuantiaEstipendio;

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
     * @var string
     *
     * @ORM\Column(name="Cta_MNac", type="string", length=16, nullable=false)
     */
    private $ctaMnac;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_Divisa", type="string", length=16, nullable=false)
     */
    private $ctaDivisa;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomb_Apell", type="string", length=25, nullable=false)
     */
    private $nombApell;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PagoMSAntig", type="boolean", nullable=false)
     */
    private $pagomsantig;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PagoTarjetaMagnetica", type="boolean", nullable=false)
     */
    private $pagotarjetamagnetica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Calculo_por_tarifa_diaria", type="boolean", nullable=false)
     */
    private $calculoPorTarifaDiaria;

    /**
     * @var string
     *
     * @ORM\Column(name="CodTurno", type="string", length=3, nullable=false)
     */
    private $codturno;

    /**
     * @var string
     *
     * @ORM\Column(name="CodMSClasifEmplEstim", type="string", length=3, nullable=false)
     */
    private $codmsclasifemplestim;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Divisa", type="boolean", nullable=false)
     */
    private $pagoDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Vacaciones_Adelantadas", type="integer", nullable=false)
     */
    private $importeVacacionesAdelantadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Vacaciones_Mes", type="integer", nullable=false)
     */
    private $importeVacacionesMes;

    /**
     * @var string
     *
     * @ORM\Column(name="Vacaciones_Descontadas", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $vacacionesDescontadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Descontado", type="integer", nullable=false)
     */
    private $importeDescontado;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Vacaciones_Adelantados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasVacacionesAdelantados;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden_Salidas", type="integer", nullable=false)
     */
    private $ordenSalidas;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NominaSeparada", type="boolean", nullable=false)
     */
    private $nominaseparada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Divisa", type="integer", nullable=false)
     */
    private $tarifaDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Divisa", type="integer", nullable=false)
     */
    private $salarioDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pension", type="integer", nullable=false)
     */
    private $pension;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido_2", type="string", length=50, nullable=false)
     */
    private $apellido2;

    /**
     * @var integer
     *
     * @ORM\Column(name="CUPEstimuloAcumVac", type="integer", nullable=false)
     */
    private $cupestimuloacumvac;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Beneficiario", type="string", length=15, nullable=false)
     */
    private $idBeneficiario;

    /**
     * @var string
     *
     * @ORM\Column(name="Beneficiario", type="string", length=50, nullable=false)
     */
    private $beneficiario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PagoTarjetaMagneticaCUC", type="boolean", nullable=false)
     */
    private $pagotarjetamagneticacuc;

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
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhEmpleadosNomina
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
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
     * Set nombre
     *
     * @param string $nombre
     * @return RhEmpleadosNomina
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido1
     *
     * @param string $apellido1
     * @return RhEmpleadosNomina
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get apellido1
     *
     * @return string 
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set nomina
     *
     * @param boolean $nomina
     * @return RhEmpleadosNomina
     */
    public function setNomina($nomina)
    {
        $this->nomina = $nomina;

        return $this;
    }

    /**
     * Get nomina
     *
     * @return boolean 
     */
    public function getNomina()
    {
        return $this->nomina;
    }

    /**
     * Set seleccionadoParaPago
     *
     * @param boolean $seleccionadoParaPago
     * @return RhEmpleadosNomina
     */
    public function setSeleccionadoParaPago($seleccionadoParaPago)
    {
        $this->seleccionadoParaPago = $seleccionadoParaPago;

        return $this;
    }

    /**
     * Get seleccionadoParaPago
     *
     * @return boolean 
     */
    public function getSeleccionadoParaPago()
    {
        return $this->seleccionadoParaPago;
    }

    /**
     * Set tarifa
     *
     * @param integer $tarifa
     * @return RhEmpleadosNomina
     */
    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;

        return $this;
    }

    /**
     * Get tarifa
     *
     * @return integer 
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * Set tarifaDiaria
     *
     * @param integer $tarifaDiaria
     * @return RhEmpleadosNomina
     */
    public function setTarifaDiaria($tarifaDiaria)
    {
        $this->tarifaDiaria = $tarifaDiaria;

        return $this;
    }

    /**
     * Get tarifaDiaria
     *
     * @return integer 
     */
    public function getTarifaDiaria()
    {
        return $this->tarifaDiaria;
    }

    /**
     * Set salarioBasico
     *
     * @param integer $salarioBasico
     * @return RhEmpleadosNomina
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
     * Set estimulo
     *
     * @param integer $estimulo
     * @return RhEmpleadosNomina
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
     * Set porcientoEstimulo
     *
     * @param string $porcientoEstimulo
     * @return RhEmpleadosNomina
     */
    public function setPorcientoEstimulo($porcientoEstimulo)
    {
        $this->porcientoEstimulo = $porcientoEstimulo;

        return $this;
    }

    /**
     * Get porcientoEstimulo
     *
     * @return string 
     */
    public function getPorcientoEstimulo()
    {
        return $this->porcientoEstimulo;
    }

    /**
     * Set antiguedad
     *
     * @param integer $antiguedad
     * @return RhEmpleadosNomina
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
     * Set otros
     *
     * @param integer $otros
     * @return RhEmpleadosNomina
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
     * @return RhEmpleadosNomina
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
     * Set salarioPorCargo
     *
     * @param integer $salarioPorCargo
     * @return RhEmpleadosNomina
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
     * Set acumulaVacaciones
     *
     * @param boolean $acumulaVacaciones
     * @return RhEmpleadosNomina
     */
    public function setAcumulaVacaciones($acumulaVacaciones)
    {
        $this->acumulaVacaciones = $acumulaVacaciones;

        return $this;
    }

    /**
     * Get acumulaVacaciones
     *
     * @return boolean 
     */
    public function getAcumulaVacaciones()
    {
        return $this->acumulaVacaciones;
    }

    /**
     * Set diasAcumulado
     *
     * @param string $diasAcumulado
     * @return RhEmpleadosNomina
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
     * @return RhEmpleadosNomina
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
     * Set diasAcumuladoTemporal
     *
     * @param string $diasAcumuladoTemporal
     * @return RhEmpleadosNomina
     */
    public function setDiasAcumuladoTemporal($diasAcumuladoTemporal)
    {
        $this->diasAcumuladoTemporal = $diasAcumuladoTemporal;

        return $this;
    }

    /**
     * Get diasAcumuladoTemporal
     *
     * @return string 
     */
    public function getDiasAcumuladoTemporal()
    {
        return $this->diasAcumuladoTemporal;
    }

    /**
     * Set salarioAcumuladoTemporal
     *
     * @param integer $salarioAcumuladoTemporal
     * @return RhEmpleadosNomina
     */
    public function setSalarioAcumuladoTemporal($salarioAcumuladoTemporal)
    {
        $this->salarioAcumuladoTemporal = $salarioAcumuladoTemporal;

        return $this;
    }

    /**
     * Get salarioAcumuladoTemporal
     *
     * @return integer 
     */
    public function getSalarioAcumuladoTemporal()
    {
        return $this->salarioAcumuladoTemporal;
    }

    /**
     * Set nivelNomina
     *
     * @param integer $nivelNomina
     * @return RhEmpleadosNomina
     */
    public function setNivelNomina($nivelNomina)
    {
        $this->nivelNomina = $nivelNomina;

        return $this;
    }

    /**
     * Get nivelNomina
     *
     * @return integer 
     */
    public function getNivelNomina()
    {
        return $this->nivelNomina;
    }

    /**
     * Set idDireccionNomina
     *
     * @param string $idDireccionNomina
     * @return RhEmpleadosNomina
     */
    public function setIdDireccionNomina($idDireccionNomina)
    {
        $this->idDireccionNomina = $idDireccionNomina;

        return $this;
    }

    /**
     * Get idDireccionNomina
     *
     * @return string 
     */
    public function getIdDireccionNomina()
    {
        return $this->idDireccionNomina;
    }

    /**
     * Set invalidezParcial
     *
     * @param integer $invalidezParcial
     * @return RhEmpleadosNomina
     */
    public function setInvalidezParcial($invalidezParcial)
    {
        $this->invalidezParcial = $invalidezParcial;

        return $this;
    }

    /**
     * Get invalidezParcial
     *
     * @return integer 
     */
    public function getInvalidezParcial()
    {
        return $this->invalidezParcial;
    }

    /**
     * Set exCombatientes
     *
     * @param integer $exCombatientes
     * @return RhEmpleadosNomina
     */
    public function setExCombatientes($exCombatientes)
    {
        $this->exCombatientes = $exCombatientes;

        return $this;
    }

    /**
     * Get exCombatientes
     *
     * @return integer 
     */
    public function getExCombatientes()
    {
        return $this->exCombatientes;
    }

    /**
     * Set porcientoPerfeccionamiento
     *
     * @param string $porcientoPerfeccionamiento
     * @return RhEmpleadosNomina
     */
    public function setPorcientoPerfeccionamiento($porcientoPerfeccionamiento)
    {
        $this->porcientoPerfeccionamiento = $porcientoPerfeccionamiento;

        return $this;
    }

    /**
     * Get porcientoPerfeccionamiento
     *
     * @return string 
     */
    public function getPorcientoPerfeccionamiento()
    {
        return $this->porcientoPerfeccionamiento;
    }

    /**
     * Set valorDivisa
     *
     * @param integer $valorDivisa
     * @return RhEmpleadosNomina
     */
    public function setValorDivisa($valorDivisa)
    {
        $this->valorDivisa = $valorDivisa;

        return $this;
    }

    /**
     * Get valorDivisa
     *
     * @return integer 
     */
    public function getValorDivisa()
    {
        return $this->valorDivisa;
    }

    /**
     * Set porcientoPagoDivisa
     *
     * @param string $porcientoPagoDivisa
     * @return RhEmpleadosNomina
     */
    public function setPorcientoPagoDivisa($porcientoPagoDivisa)
    {
        $this->porcientoPagoDivisa = $porcientoPagoDivisa;

        return $this;
    }

    /**
     * Get porcientoPagoDivisa
     *
     * @return string 
     */
    public function getPorcientoPagoDivisa()
    {
        return $this->porcientoPagoDivisa;
    }

    /**
     * Set estimulacion
     *
     * @param integer $estimulacion
     * @return RhEmpleadosNomina
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
     * Set porcientoEstimulacion
     *
     * @param string $porcientoEstimulacion
     * @return RhEmpleadosNomina
     */
    public function setPorcientoEstimulacion($porcientoEstimulacion)
    {
        $this->porcientoEstimulacion = $porcientoEstimulacion;

        return $this;
    }

    /**
     * Get porcientoEstimulacion
     *
     * @return string 
     */
    public function getPorcientoEstimulacion()
    {
        return $this->porcientoEstimulacion;
    }

    /**
     * Set albergamiento
     *
     * @param integer $albergamiento
     * @return RhEmpleadosNomina
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
     * @return RhEmpleadosNomina
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
     * @return RhEmpleadosNomina
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
     * Set otrasCla
     *
     * @param integer $otrasCla
     * @return RhEmpleadosNomina
     */
    public function setOtrasCla($otrasCla)
    {
        $this->otrasCla = $otrasCla;

        return $this;
    }

    /**
     * Get otrasCla
     *
     * @return integer 
     */
    public function getOtrasCla()
    {
        return $this->otrasCla;
    }

    /**
     * Set ieterritorial
     *
     * @param string $ieterritorial
     * @return RhEmpleadosNomina
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
     * @return RhEmpleadosNomina
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
     * Set coeficenteEmpresaEmpleadora
     *
     * @param string $coeficenteEmpresaEmpleadora
     * @return RhEmpleadosNomina
     */
    public function setCoeficenteEmpresaEmpleadora($coeficenteEmpresaEmpleadora)
    {
        $this->coeficenteEmpresaEmpleadora = $coeficenteEmpresaEmpleadora;

        return $this;
    }

    /**
     * Get coeficenteEmpresaEmpleadora
     *
     * @return string 
     */
    public function getCoeficenteEmpresaEmpleadora()
    {
        return $this->coeficenteEmpresaEmpleadora;
    }

    /**
     * Set idTipoParticipacion
     *
     * @param string $idTipoParticipacion
     * @return RhEmpleadosNomina
     */
    public function setIdTipoParticipacion($idTipoParticipacion)
    {
        $this->idTipoParticipacion = $idTipoParticipacion;

        return $this;
    }

    /**
     * Get idTipoParticipacion
     *
     * @return string 
     */
    public function getIdTipoParticipacion()
    {
        return $this->idTipoParticipacion;
    }

    /**
     * Set idoneidadFijo
     *
     * @param integer $idoneidadFijo
     * @return RhEmpleadosNomina
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
     * @return RhEmpleadosNomina
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
     * @return RhEmpleadosNomina
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
     * Set coeficientetarifa
     *
     * @param integer $coeficientetarifa
     * @return RhEmpleadosNomina
     */
    public function setCoeficientetarifa($coeficientetarifa)
    {
        $this->coeficientetarifa = $coeficientetarifa;

        return $this;
    }

    /**
     * Get coeficientetarifa
     *
     * @return integer 
     */
    public function getCoeficientetarifa()
    {
        return $this->coeficientetarifa;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     * @return RhEmpleadosNomina
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
     * Set descuentomasivo
     *
     * @param integer $descuentomasivo
     * @return RhEmpleadosNomina
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

    /**
     * Set estipendioPorEstudio
     *
     * @param boolean $estipendioPorEstudio
     * @return RhEmpleadosNomina
     */
    public function setEstipendioPorEstudio($estipendioPorEstudio)
    {
        $this->estipendioPorEstudio = $estipendioPorEstudio;

        return $this;
    }

    /**
     * Get estipendioPorEstudio
     *
     * @return boolean 
     */
    public function getEstipendioPorEstudio()
    {
        return $this->estipendioPorEstudio;
    }

    /**
     * Set cuantiaEstipendio
     *
     * @param integer $cuantiaEstipendio
     * @return RhEmpleadosNomina
     */
    public function setCuantiaEstipendio($cuantiaEstipendio)
    {
        $this->cuantiaEstipendio = $cuantiaEstipendio;

        return $this;
    }

    /**
     * Get cuantiaEstipendio
     *
     * @return integer 
     */
    public function getCuantiaEstipendio()
    {
        return $this->cuantiaEstipendio;
    }

    /**
     * Set horasExtra
     *
     * @param integer $horasExtra
     * @return RhEmpleadosNomina
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
     * @return RhEmpleadosNomina
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
     * Set ctaMnac
     *
     * @param string $ctaMnac
     * @return RhEmpleadosNomina
     */
    public function setCtaMnac($ctaMnac)
    {
        $this->ctaMnac = $ctaMnac;

        return $this;
    }

    /**
     * Get ctaMnac
     *
     * @return string 
     */
    public function getCtaMnac()
    {
        return $this->ctaMnac;
    }

    /**
     * Set ctaDivisa
     *
     * @param string $ctaDivisa
     * @return RhEmpleadosNomina
     */
    public function setCtaDivisa($ctaDivisa)
    {
        $this->ctaDivisa = $ctaDivisa;

        return $this;
    }

    /**
     * Get ctaDivisa
     *
     * @return string 
     */
    public function getCtaDivisa()
    {
        return $this->ctaDivisa;
    }

    /**
     * Set nombApell
     *
     * @param string $nombApell
     * @return RhEmpleadosNomina
     */
    public function setNombApell($nombApell)
    {
        $this->nombApell = $nombApell;

        return $this;
    }

    /**
     * Get nombApell
     *
     * @return string 
     */
    public function getNombApell()
    {
        return $this->nombApell;
    }

    /**
     * Set pagomsantig
     *
     * @param boolean $pagomsantig
     * @return RhEmpleadosNomina
     */
    public function setPagomsantig($pagomsantig)
    {
        $this->pagomsantig = $pagomsantig;

        return $this;
    }

    /**
     * Get pagomsantig
     *
     * @return boolean 
     */
    public function getPagomsantig()
    {
        return $this->pagomsantig;
    }

    /**
     * Set pagotarjetamagnetica
     *
     * @param boolean $pagotarjetamagnetica
     * @return RhEmpleadosNomina
     */
    public function setPagotarjetamagnetica($pagotarjetamagnetica)
    {
        $this->pagotarjetamagnetica = $pagotarjetamagnetica;

        return $this;
    }

    /**
     * Get pagotarjetamagnetica
     *
     * @return boolean 
     */
    public function getPagotarjetamagnetica()
    {
        return $this->pagotarjetamagnetica;
    }

    /**
     * Set calculoPorTarifaDiaria
     *
     * @param boolean $calculoPorTarifaDiaria
     * @return RhEmpleadosNomina
     */
    public function setCalculoPorTarifaDiaria($calculoPorTarifaDiaria)
    {
        $this->calculoPorTarifaDiaria = $calculoPorTarifaDiaria;

        return $this;
    }

    /**
     * Get calculoPorTarifaDiaria
     *
     * @return boolean 
     */
    public function getCalculoPorTarifaDiaria()
    {
        return $this->calculoPorTarifaDiaria;
    }

    /**
     * Set codturno
     *
     * @param string $codturno
     * @return RhEmpleadosNomina
     */
    public function setCodturno($codturno)
    {
        $this->codturno = $codturno;

        return $this;
    }

    /**
     * Get codturno
     *
     * @return string 
     */
    public function getCodturno()
    {
        return $this->codturno;
    }

    /**
     * Set codmsclasifemplestim
     *
     * @param string $codmsclasifemplestim
     * @return RhEmpleadosNomina
     */
    public function setCodmsclasifemplestim($codmsclasifemplestim)
    {
        $this->codmsclasifemplestim = $codmsclasifemplestim;

        return $this;
    }

    /**
     * Get codmsclasifemplestim
     *
     * @return string 
     */
    public function getCodmsclasifemplestim()
    {
        return $this->codmsclasifemplestim;
    }

    /**
     * Set pagoDivisa
     *
     * @param boolean $pagoDivisa
     * @return RhEmpleadosNomina
     */
    public function setPagoDivisa($pagoDivisa)
    {
        $this->pagoDivisa = $pagoDivisa;

        return $this;
    }

    /**
     * Get pagoDivisa
     *
     * @return boolean 
     */
    public function getPagoDivisa()
    {
        return $this->pagoDivisa;
    }

    /**
     * Set importeVacacionesAdelantadas
     *
     * @param integer $importeVacacionesAdelantadas
     * @return RhEmpleadosNomina
     */
    public function setImporteVacacionesAdelantadas($importeVacacionesAdelantadas)
    {
        $this->importeVacacionesAdelantadas = $importeVacacionesAdelantadas;

        return $this;
    }

    /**
     * Get importeVacacionesAdelantadas
     *
     * @return integer 
     */
    public function getImporteVacacionesAdelantadas()
    {
        return $this->importeVacacionesAdelantadas;
    }

    /**
     * Set importeVacacionesMes
     *
     * @param integer $importeVacacionesMes
     * @return RhEmpleadosNomina
     */
    public function setImporteVacacionesMes($importeVacacionesMes)
    {
        $this->importeVacacionesMes = $importeVacacionesMes;

        return $this;
    }

    /**
     * Get importeVacacionesMes
     *
     * @return integer 
     */
    public function getImporteVacacionesMes()
    {
        return $this->importeVacacionesMes;
    }

    /**
     * Set vacacionesDescontadas
     *
     * @param string $vacacionesDescontadas
     * @return RhEmpleadosNomina
     */
    public function setVacacionesDescontadas($vacacionesDescontadas)
    {
        $this->vacacionesDescontadas = $vacacionesDescontadas;

        return $this;
    }

    /**
     * Get vacacionesDescontadas
     *
     * @return string 
     */
    public function getVacacionesDescontadas()
    {
        return $this->vacacionesDescontadas;
    }

    /**
     * Set importeDescontado
     *
     * @param integer $importeDescontado
     * @return RhEmpleadosNomina
     */
    public function setImporteDescontado($importeDescontado)
    {
        $this->importeDescontado = $importeDescontado;

        return $this;
    }

    /**
     * Get importeDescontado
     *
     * @return integer 
     */
    public function getImporteDescontado()
    {
        return $this->importeDescontado;
    }

    /**
     * Set diasVacacionesAdelantados
     *
     * @param string $diasVacacionesAdelantados
     * @return RhEmpleadosNomina
     */
    public function setDiasVacacionesAdelantados($diasVacacionesAdelantados)
    {
        $this->diasVacacionesAdelantados = $diasVacacionesAdelantados;

        return $this;
    }

    /**
     * Get diasVacacionesAdelantados
     *
     * @return string 
     */
    public function getDiasVacacionesAdelantados()
    {
        return $this->diasVacacionesAdelantados;
    }

    /**
     * Set ordenSalidas
     *
     * @param integer $ordenSalidas
     * @return RhEmpleadosNomina
     */
    public function setOrdenSalidas($ordenSalidas)
    {
        $this->ordenSalidas = $ordenSalidas;

        return $this;
    }

    /**
     * Get ordenSalidas
     *
     * @return integer 
     */
    public function getOrdenSalidas()
    {
        return $this->ordenSalidas;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return RhEmpleadosNomina
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return RhEmpleadosNomina
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set nominaseparada
     *
     * @param boolean $nominaseparada
     * @return RhEmpleadosNomina
     */
    public function setNominaseparada($nominaseparada)
    {
        $this->nominaseparada = $nominaseparada;

        return $this;
    }

    /**
     * Get nominaseparada
     *
     * @return boolean 
     */
    public function getNominaseparada()
    {
        return $this->nominaseparada;
    }

    /**
     * Set tarifaDivisa
     *
     * @param integer $tarifaDivisa
     * @return RhEmpleadosNomina
     */
    public function setTarifaDivisa($tarifaDivisa)
    {
        $this->tarifaDivisa = $tarifaDivisa;

        return $this;
    }

    /**
     * Get tarifaDivisa
     *
     * @return integer 
     */
    public function getTarifaDivisa()
    {
        return $this->tarifaDivisa;
    }

    /**
     * Set salarioDivisa
     *
     * @param integer $salarioDivisa
     * @return RhEmpleadosNomina
     */
    public function setSalarioDivisa($salarioDivisa)
    {
        $this->salarioDivisa = $salarioDivisa;

        return $this;
    }

    /**
     * Get salarioDivisa
     *
     * @return integer 
     */
    public function getSalarioDivisa()
    {
        return $this->salarioDivisa;
    }

    /**
     * Set pension
     *
     * @param integer $pension
     * @return RhEmpleadosNomina
     */
    public function setPension($pension)
    {
        $this->pension = $pension;

        return $this;
    }

    /**
     * Get pension
     *
     * @return integer 
     */
    public function getPension()
    {
        return $this->pension;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     * @return RhEmpleadosNomina
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get apellido2
     *
     * @return string 
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set cupestimuloacumvac
     *
     * @param integer $cupestimuloacumvac
     * @return RhEmpleadosNomina
     */
    public function setCupestimuloacumvac($cupestimuloacumvac)
    {
        $this->cupestimuloacumvac = $cupestimuloacumvac;

        return $this;
    }

    /**
     * Get cupestimuloacumvac
     *
     * @return integer 
     */
    public function getCupestimuloacumvac()
    {
        return $this->cupestimuloacumvac;
    }

    /**
     * Set idBeneficiario
     *
     * @param string $idBeneficiario
     * @return RhEmpleadosNomina
     */
    public function setIdBeneficiario($idBeneficiario)
    {
        $this->idBeneficiario = $idBeneficiario;

        return $this;
    }

    /**
     * Get idBeneficiario
     *
     * @return string 
     */
    public function getIdBeneficiario()
    {
        return $this->idBeneficiario;
    }

    /**
     * Set beneficiario
     *
     * @param string $beneficiario
     * @return RhEmpleadosNomina
     */
    public function setBeneficiario($beneficiario)
    {
        $this->beneficiario = $beneficiario;

        return $this;
    }

    /**
     * Get beneficiario
     *
     * @return string 
     */
    public function getBeneficiario()
    {
        return $this->beneficiario;
    }

    /**
     * Set pagotarjetamagneticacuc
     *
     * @param boolean $pagotarjetamagneticacuc
     * @return RhEmpleadosNomina
     */
    public function setPagotarjetamagneticacuc($pagotarjetamagneticacuc)
    {
        $this->pagotarjetamagneticacuc = $pagotarjetamagneticacuc;

        return $this;
    }

    /**
     * Get pagotarjetamagneticacuc
     *
     * @return boolean 
     */
    public function getPagotarjetamagneticacuc()
    {
        return $this->pagotarjetamagneticacuc;
    }

    /**
     * Set pagoComedorCuc
     *
     * @param boolean $pagoComedorCuc
     * @return RhEmpleadosNomina
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
     * @return RhEmpleadosNomina
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
}
