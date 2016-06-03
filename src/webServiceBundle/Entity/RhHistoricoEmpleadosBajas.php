<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhHistoricoEmpleadosBajas
 *
 * @ORM\Table(name="RH_Historico_Empleados_Bajas")
 * @ORM\Entity
 */
class RhHistoricoEmpleadosBajas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="No_CI", type="string", length=15, nullable=false)
     */
    private $noCi;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     */
    private $idDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cargo", type="string", length=5, nullable=false)
     */
    private $idCargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="AnosServicio", type="smallint", nullable=false)
     */
    private $anosservicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Contratacion", type="datetime", nullable=false)
     */
    private $fechaContratacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Baja", type="datetime", nullable=false)
     */
    private $fechaBaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausaBaja", type="string", length=5, nullable=false)
     */
    private $idCausabaja;

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
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=5, nullable=false)
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Provincia", type="string", length=5, nullable=false)
     */
    private $idProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Municipio", type="string", length=5, nullable=false)
     */
    private $idMunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero_Radicacion_Plaza", type="string", length=50, nullable=false)
     */
    private $numeroRadicacionPlaza;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Terminacion_Contrato", type="datetime", nullable=false)
     */
    private $fechaTerminacionContrato;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Divisa", type="integer", nullable=false)
     */
    private $salarioDivisa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;



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
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhHistoricoEmpleadosBajas
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
     * Set noCi
     *
     * @param string $noCi
     * @return RhHistoricoEmpleadosBajas
     */
    public function setNoCi($noCi)
    {
        $this->noCi = $noCi;

        return $this;
    }

    /**
     * Get noCi
     *
     * @return string 
     */
    public function getNoCi()
    {
        return $this->noCi;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return RhHistoricoEmpleadosBajas
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set idDireccion
     *
     * @param string $idDireccion
     * @return RhHistoricoEmpleadosBajas
     */
    public function setIdDireccion($idDireccion)
    {
        $this->idDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get idDireccion
     *
     * @return string 
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }

    /**
     * Set idCargo
     *
     * @param string $idCargo
     * @return RhHistoricoEmpleadosBajas
     */
    public function setIdCargo($idCargo)
    {
        $this->idCargo = $idCargo;

        return $this;
    }

    /**
     * Get idCargo
     *
     * @return string 
     */
    public function getIdCargo()
    {
        return $this->idCargo;
    }

    /**
     * Set anosservicio
     *
     * @param integer $anosservicio
     * @return RhHistoricoEmpleadosBajas
     */
    public function setAnosservicio($anosservicio)
    {
        $this->anosservicio = $anosservicio;

        return $this;
    }

    /**
     * Get anosservicio
     *
     * @return integer 
     */
    public function getAnosservicio()
    {
        return $this->anosservicio;
    }

    /**
     * Set fechaContratacion
     *
     * @param \DateTime $fechaContratacion
     * @return RhHistoricoEmpleadosBajas
     */
    public function setFechaContratacion($fechaContratacion)
    {
        $this->fechaContratacion = $fechaContratacion;

        return $this;
    }

    /**
     * Get fechaContratacion
     *
     * @return \DateTime 
     */
    public function getFechaContratacion()
    {
        return $this->fechaContratacion;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     * @return RhHistoricoEmpleadosBajas
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime 
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    /**
     * Set idCausabaja
     *
     * @param string $idCausabaja
     * @return RhHistoricoEmpleadosBajas
     */
    public function setIdCausabaja($idCausabaja)
    {
        $this->idCausabaja = $idCausabaja;

        return $this;
    }

    /**
     * Get idCausabaja
     *
     * @return string 
     */
    public function getIdCausabaja()
    {
        return $this->idCausabaja;
    }

    /**
     * Set salarioBasico
     *
     * @param integer $salarioBasico
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * Set invalidezParcial
     *
     * @param integer $invalidezParcial
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * Set idoneidadFijo
     *
     * @param integer $idoneidadFijo
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * @return RhHistoricoEmpleadosBajas
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
     * Set idUser
     *
     * @param string $idUser
     * @return RhHistoricoEmpleadosBajas
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
     * Set idCategoria
     *
     * @param string $idCategoria
     * @return RhHistoricoEmpleadosBajas
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return string 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set idProvincia
     *
     * @param string $idProvincia
     * @return RhHistoricoEmpleadosBajas
     */
    public function setIdProvincia($idProvincia)
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }

    /**
     * Get idProvincia
     *
     * @return string 
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * Set idMunicipio
     *
     * @param string $idMunicipio
     * @return RhHistoricoEmpleadosBajas
     */
    public function setIdMunicipio($idMunicipio)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return string 
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * Set numeroRadicacionPlaza
     *
     * @param string $numeroRadicacionPlaza
     * @return RhHistoricoEmpleadosBajas
     */
    public function setNumeroRadicacionPlaza($numeroRadicacionPlaza)
    {
        $this->numeroRadicacionPlaza = $numeroRadicacionPlaza;

        return $this;
    }

    /**
     * Get numeroRadicacionPlaza
     *
     * @return string 
     */
    public function getNumeroRadicacionPlaza()
    {
        return $this->numeroRadicacionPlaza;
    }

    /**
     * Set fechaTerminacionContrato
     *
     * @param \DateTime $fechaTerminacionContrato
     * @return RhHistoricoEmpleadosBajas
     */
    public function setFechaTerminacionContrato($fechaTerminacionContrato)
    {
        $this->fechaTerminacionContrato = $fechaTerminacionContrato;

        return $this;
    }

    /**
     * Get fechaTerminacionContrato
     *
     * @return \DateTime 
     */
    public function getFechaTerminacionContrato()
    {
        return $this->fechaTerminacionContrato;
    }

    /**
     * Set salarioDivisa
     *
     * @param integer $salarioDivisa
     * @return RhHistoricoEmpleadosBajas
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
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return RhHistoricoEmpleadosBajas
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
}
