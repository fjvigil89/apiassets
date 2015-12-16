<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmpleadosGral
 *
 * @ORM\Table(name="Empleados_Gral", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Empleados_Gral", columns={"Id_Expediente"})})
 * @ORM\Entity
 */
class EmpleadosGral
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
     * @ORM\Column(name="No_CI", type="string", length=15, nullable=false)
     */
    private $noCi;

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
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Ciudad", type="string", length=50, nullable=false)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="Region", type="string", length=50, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo_Postal", type="string", length=20, nullable=false)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Pais", type="string", length=50, nullable=false)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="Exttelef", type="string", length=15, nullable=false)
     */
    private $exttelef;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono_Particular", type="string", length=30, nullable=false)
     */
    private $telefonoParticular;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CCosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Nacimiento", type="datetime", nullable=false)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     */
    private $tipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_Contrato", type="string", length=3, nullable=false)
     */
    private $idTipoContrato;

    /**
     * @var integer
     *
     * @ORM\Column(name="Regimen_Salarial", type="smallint", nullable=false)
     */
    private $regimenSalarial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tarifa_Horaria_con_Reporte", type="boolean", nullable=false)
     */
    private $tarifaHorariaConReporte;

    /**
     * @var string
     *
     * @ORM\Column(name="Calendario", type="string", length=3, nullable=false)
     */
    private $calendario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DescontarSabado", type="boolean", nullable=false)
     */
    private $descontarsabado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Baja", type="boolean", nullable=false)
     */
    private $baja;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Alta", type="boolean", nullable=false)
     */
    private $alta;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cargo", type="string", length=5, nullable=false)
     */
    private $idCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=5, nullable=false)
     */
    private $idCategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="NGrupo", type="smallint", nullable=false)
     */
    private $ngrupo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cargo", type="datetime", nullable=false)
     */
    private $fechaCargo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Asignacion_por_Cargo", type="boolean", nullable=false)
     */
    private $asignacionPorCargo;

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
     * @var integer
     *
     * @ORM\Column(name="Plaza", type="bigint", nullable=false)
     */
    private $plaza;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausaAlta", type="string", length=5, nullable=false)
     */
    private $idCausaalta;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FundamentacionAlta", type="string", length=5, nullable=false)
     */
    private $idFundamentacionalta;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausaBaja", type="string", length=5, nullable=false)
     */
    private $idCausabaja;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Baja", type="datetime", nullable=false)
     */
    private $fechaBaja;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Descontar_Alta", type="smallint", nullable=false)
     */
    private $diasDescontarAlta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Descontar_Mov", type="smallint", nullable=false)
     */
    private $diasDescontarMov;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Descontar_Baja", type="smallint", nullable=false)
     */
    private $diasDescontarBaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Saya", type="string", length=5, nullable=false)
     */
    private $saya;

    /**
     * @var string
     *
     * @ORM\Column(name="Pantalon", type="string", length=5, nullable=false)
     */
    private $pantalon;

    /**
     * @var string
     *
     * @ORM\Column(name="Camisa", type="string", length=5, nullable=false)
     */
    private $camisa;

    /**
     * @var string
     *
     * @ORM\Column(name="Zapato", type="string", length=5, nullable=false)
     */
    private $zapato;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexo", type="string", length=1, nullable=false)
     */
    private $sexo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Color_Piel", type="smallint", nullable=false)
     */
    private $colorPiel;

    /**
     * @var integer
     *
     * @ORM\Column(name="Color_Pelo", type="smallint", nullable=false)
     */
    private $colorPelo;

    /**
     * @var string
     *
     * @ORM\Column(name="Estatura", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $estatura;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Madre", type="string", length=50, nullable=false)
     */
    private $nombreMadre;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Padre", type="string", length=50, nullable=false)
     */
    private $nombrePadre;

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
     * @ORM\Column(name="Id_Nivel_Escolaridad", type="string", length=3, nullable=false)
     */
    private $idNivelEscolaridad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Profesion", type="string", length=5, nullable=false)
     */
    private $idProfesion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Contratacion", type="datetime", nullable=false)
     */
    private $fechaContratacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Terminacion_Contrato", type="datetime", nullable=false)
     */
    private $fechaTerminacionContrato;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Docente", type="boolean", nullable=false)
     */
    private $docente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Investigador", type="boolean", nullable=false)
     */
    private $investigador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria_DI", type="string", length=5, nullable=false)
     */
    private $idCategoriaDi;

    /**
     * @var integer
     *
     * @ORM\Column(name="AnoInicioDocencia", type="integer", nullable=false)
     */
    private $anoiniciodocencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="AnoInterruptoDocencia", type="integer", nullable=false)
     */
    private $anointerruptodocencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero_Radicacion_Plaza", type="string", length=50, nullable=false)
     */
    private $numeroRadicacionPlaza;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ubicacion_Defensa", type="string", length=5, nullable=false)
     */
    private $idUbicacionDefensa;

    /**
     * @var string
     *
     * @ORM\Column(name="Especificacion_Defensa", type="string", length=50, nullable=false)
     */
    private $especificacionDefensa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Imprescindible", type="boolean", nullable=false)
     */
    private $imprescindible;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaMilitar", type="datetime", nullable=false)
     */
    private $fechamilitar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="OC", type="boolean", nullable=false)
     */
    private $oc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Militancia", type="smallint", nullable=false)
     */
    private $militancia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="RequisitoIdiomatico", type="boolean", nullable=false)
     */
    private $requisitoidiomatico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="RequisitoTecnico", type="boolean", nullable=false)
     */
    private $requisitotecnico;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Obra", type="string", length=10, nullable=false)
     */
    private $idObra;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Vacuna", type="smallint", nullable=false)
     */
    private $tipoVacuna;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vacuna", type="datetime", nullable=false)
     */
    private $fechaVacuna;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota_Vacuna", type="string", length=100, nullable=false)
     */
    private $notaVacuna;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel_CP", type="smallint", nullable=false)
     */
    private $nivelCp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion_CP", type="string", length=15, nullable=false)
     */
    private $idDireccionCp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cargo_CP", type="string", length=5, nullable=false)
     */
    private $idCargoCp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria_CP", type="string", length=5, nullable=false)
     */
    private $idCategoriaCp;

    /**
     * @var integer
     *
     * @ORM\Column(name="NGrupo_CP", type="smallint", nullable=false)
     */
    private $ngrupoCp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cargo_CP", type="datetime", nullable=false)
     */
    private $fechaCargoCp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Asignacion_por_Cargo_CP", type="boolean", nullable=false)
     */
    private $asignacionPorCargoCp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_GrpEvaluativo", type="string", length=7, nullable=false)
     */
    private $idGrpevaluativo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_GrpSendRec", type="string", length=7, nullable=false)
     */
    private $idGrpsendrec;

    /**
     * @var integer
     *
     * @ORM\Column(name="CuadroReserva", type="smallint", nullable=false)
     */
    private $cuadroreserva;

    /**
     * @var integer
     *
     * @ORM\Column(name="ClasifCuadros", type="smallint", nullable=false)
     */
    private $clasifcuadros;

    /**
     * @var integer
     *
     * @ORM\Column(name="SituacionReserva", type="smallint", nullable=false)
     */
    private $situacionreserva;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel_Reserva", type="smallint", nullable=false)
     */
    private $nivelReserva;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion_Reserva", type="string", length=15, nullable=false)
     */
    private $idDireccionReserva;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cargo_Reserva", type="string", length=5, nullable=false)
     */
    private $idCargoReserva;

    /**
     * @var integer
     *
     * @ORM\Column(name="AnosServicio", type="smallint", nullable=false)
     */
    private $anosservicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="AntiguedadDispensa", type="smallint", nullable=false)
     */
    private $antiguedaddispensa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Situacion", type="smallint", nullable=false)
     */
    private $situacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=3, nullable=false)
     */
    private $idActividad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Albergado", type="boolean", nullable=false)
     */
    private $albergado;

    /**
     * @var string
     *
     * @ORM\Column(name="Cubiculo", type="string", length=5, nullable=false)
     */
    private $cubiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="ModuloUniforme", type="string", length=50, nullable=false)
     */
    private $modulouniforme;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaSector", type="datetime", nullable=false)
     */
    private $fechasector;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaDireccion", type="datetime", nullable=false)
     */
    private $fechadireccion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Mision_Civil", type="boolean", nullable=false)
     */
    private $misionCivil;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Mision_Militar", type="boolean", nullable=false)
     */
    private $misionMilitar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ayuda_Tecnica", type="boolean", nullable=false)
     */
    private $ayudaTecnica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Microbrigada", type="boolean", nullable=false)
     */
    private $microbrigada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Doble_Expediente", type="boolean", nullable=false)
     */
    private $dobleExpediente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DisposicionCargo", type="boolean", nullable=false)
     */
    private $disposicioncargo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Prestacion_Servicio", type="boolean", nullable=false)
     */
    private $prestacionServicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Prestacion_Servicio", type="datetime", nullable=false)
     */
    private $fechaPrestacionServicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mision", type="smallint", nullable=false)
     */
    private $mision;

    /**
     * @var string
     *
     * @ORM\Column(name="Foto", type="text", length=16, nullable=true)
     */
    private $foto;

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
     * @var string
     *
     * @ORM\Column(name="Id_Subcategoria", type="string", length=5, nullable=false)
     */
    private $idSubcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria_IT", type="string", length=5, nullable=false)
     */
    private $idCategoriaIt;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Jornada", type="string", length=5, nullable=false)
     */
    private $idJornada;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tarjeta_Reloj", type="string", length=15, nullable=false)
     */
    private $idTarjetaReloj;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tarjeta_Reloj_On", type="boolean", nullable=false)
     */
    private $tarjetaRelojOn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Designacion", type="boolean", nullable=false)
     */
    private $designacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Dec_Ley_91", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasDecLey91;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Dec_Ley_91_Saldo", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasDecLey91Saldo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Horario_Regular", type="boolean", nullable=false)
     */
    private $horarioRegular;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido_2", type="string", length=50, nullable=false)
     */
    private $apellido2;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Grado_Cientifico", type="string", length=5, nullable=false)
     */
    private $idGradoCientifico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Categoria_Docente", type="datetime", nullable=false)
     */
    private $fechaCategoriaDocente;



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
     * @return EmpleadosGral
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
     * @return EmpleadosGral
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
     * Set nombre
     *
     * @param string $nombre
     * @return EmpleadosGral
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
     * @return EmpleadosGral
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
     * Set direccion
     *
     * @param string $direccion
     * @return EmpleadosGral
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return EmpleadosGral
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return EmpleadosGral
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     * @return EmpleadosGral
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return EmpleadosGral
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set exttelef
     *
     * @param string $exttelef
     * @return EmpleadosGral
     */
    public function setExttelef($exttelef)
    {
        $this->exttelef = $exttelef;

        return $this;
    }

    /**
     * Get exttelef
     *
     * @return string 
     */
    public function getExttelef()
    {
        return $this->exttelef;
    }

    /**
     * Set telefonoParticular
     *
     * @param string $telefonoParticular
     * @return EmpleadosGral
     */
    public function setTelefonoParticular($telefonoParticular)
    {
        $this->telefonoParticular = $telefonoParticular;

        return $this;
    }

    /**
     * Get telefonoParticular
     *
     * @return string 
     */
    public function getTelefonoParticular()
    {
        return $this->telefonoParticular;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return EmpleadosGral
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
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return EmpleadosGral
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return EmpleadosGral
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set tipoPago
     *
     * @param integer $tipoPago
     * @return EmpleadosGral
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
     * Set idTipoContrato
     *
     * @param string $idTipoContrato
     * @return EmpleadosGral
     */
    public function setIdTipoContrato($idTipoContrato)
    {
        $this->idTipoContrato = $idTipoContrato;

        return $this;
    }

    /**
     * Get idTipoContrato
     *
     * @return string 
     */
    public function getIdTipoContrato()
    {
        return $this->idTipoContrato;
    }

    /**
     * Set regimenSalarial
     *
     * @param integer $regimenSalarial
     * @return EmpleadosGral
     */
    public function setRegimenSalarial($regimenSalarial)
    {
        $this->regimenSalarial = $regimenSalarial;

        return $this;
    }

    /**
     * Get regimenSalarial
     *
     * @return integer 
     */
    public function getRegimenSalarial()
    {
        return $this->regimenSalarial;
    }

    /**
     * Set tarifaHorariaConReporte
     *
     * @param boolean $tarifaHorariaConReporte
     * @return EmpleadosGral
     */
    public function setTarifaHorariaConReporte($tarifaHorariaConReporte)
    {
        $this->tarifaHorariaConReporte = $tarifaHorariaConReporte;

        return $this;
    }

    /**
     * Get tarifaHorariaConReporte
     *
     * @return boolean 
     */
    public function getTarifaHorariaConReporte()
    {
        return $this->tarifaHorariaConReporte;
    }

    /**
     * Set calendario
     *
     * @param string $calendario
     * @return EmpleadosGral
     */
    public function setCalendario($calendario)
    {
        $this->calendario = $calendario;

        return $this;
    }

    /**
     * Get calendario
     *
     * @return string 
     */
    public function getCalendario()
    {
        return $this->calendario;
    }

    /**
     * Set descontarsabado
     *
     * @param boolean $descontarsabado
     * @return EmpleadosGral
     */
    public function setDescontarsabado($descontarsabado)
    {
        $this->descontarsabado = $descontarsabado;

        return $this;
    }

    /**
     * Get descontarsabado
     *
     * @return boolean 
     */
    public function getDescontarsabado()
    {
        return $this->descontarsabado;
    }

    /**
     * Set baja
     *
     * @param boolean $baja
     * @return EmpleadosGral
     */
    public function setBaja($baja)
    {
        $this->baja = $baja;

        return $this;
    }

    /**
     * Get baja
     *
     * @return boolean 
     */
    public function getBaja()
    {
        return $this->baja;
    }

    /**
     * Set alta
     *
     * @param boolean $alta
     * @return EmpleadosGral
     */
    public function setAlta($alta)
    {
        $this->alta = $alta;

        return $this;
    }

    /**
     * Get alta
     *
     * @return boolean 
     */
    public function getAlta()
    {
        return $this->alta;
    }

    /**
     * Set idCargo
     *
     * @param string $idCargo
     * @return EmpleadosGral
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
     * Set idCategoria
     *
     * @param string $idCategoria
     * @return EmpleadosGral
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
     * Set ngrupo
     *
     * @param integer $ngrupo
     * @return EmpleadosGral
     */
    public function setNgrupo($ngrupo)
    {
        $this->ngrupo = $ngrupo;

        return $this;
    }

    /**
     * Get ngrupo
     *
     * @return integer 
     */
    public function getNgrupo()
    {
        return $this->ngrupo;
    }

    /**
     * Set fechaCargo
     *
     * @param \DateTime $fechaCargo
     * @return EmpleadosGral
     */
    public function setFechaCargo($fechaCargo)
    {
        $this->fechaCargo = $fechaCargo;

        return $this;
    }

    /**
     * Get fechaCargo
     *
     * @return \DateTime 
     */
    public function getFechaCargo()
    {
        return $this->fechaCargo;
    }

    /**
     * Set asignacionPorCargo
     *
     * @param boolean $asignacionPorCargo
     * @return EmpleadosGral
     */
    public function setAsignacionPorCargo($asignacionPorCargo)
    {
        $this->asignacionPorCargo = $asignacionPorCargo;

        return $this;
    }

    /**
     * Get asignacionPorCargo
     *
     * @return boolean 
     */
    public function getAsignacionPorCargo()
    {
        return $this->asignacionPorCargo;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return EmpleadosGral
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
     * @return EmpleadosGral
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
     * Set plaza
     *
     * @param integer $plaza
     * @return EmpleadosGral
     */
    public function setPlaza($plaza)
    {
        $this->plaza = $plaza;

        return $this;
    }

    /**
     * Get plaza
     *
     * @return integer 
     */
    public function getPlaza()
    {
        return $this->plaza;
    }

    /**
     * Set idCausaalta
     *
     * @param string $idCausaalta
     * @return EmpleadosGral
     */
    public function setIdCausaalta($idCausaalta)
    {
        $this->idCausaalta = $idCausaalta;

        return $this;
    }

    /**
     * Get idCausaalta
     *
     * @return string 
     */
    public function getIdCausaalta()
    {
        return $this->idCausaalta;
    }

    /**
     * Set idFundamentacionalta
     *
     * @param string $idFundamentacionalta
     * @return EmpleadosGral
     */
    public function setIdFundamentacionalta($idFundamentacionalta)
    {
        $this->idFundamentacionalta = $idFundamentacionalta;

        return $this;
    }

    /**
     * Get idFundamentacionalta
     *
     * @return string 
     */
    public function getIdFundamentacionalta()
    {
        return $this->idFundamentacionalta;
    }

    /**
     * Set idCausabaja
     *
     * @param string $idCausabaja
     * @return EmpleadosGral
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
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     * @return EmpleadosGral
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
     * Set diasDescontarAlta
     *
     * @param integer $diasDescontarAlta
     * @return EmpleadosGral
     */
    public function setDiasDescontarAlta($diasDescontarAlta)
    {
        $this->diasDescontarAlta = $diasDescontarAlta;

        return $this;
    }

    /**
     * Get diasDescontarAlta
     *
     * @return integer 
     */
    public function getDiasDescontarAlta()
    {
        return $this->diasDescontarAlta;
    }

    /**
     * Set diasDescontarMov
     *
     * @param integer $diasDescontarMov
     * @return EmpleadosGral
     */
    public function setDiasDescontarMov($diasDescontarMov)
    {
        $this->diasDescontarMov = $diasDescontarMov;

        return $this;
    }

    /**
     * Get diasDescontarMov
     *
     * @return integer 
     */
    public function getDiasDescontarMov()
    {
        return $this->diasDescontarMov;
    }

    /**
     * Set diasDescontarBaja
     *
     * @param integer $diasDescontarBaja
     * @return EmpleadosGral
     */
    public function setDiasDescontarBaja($diasDescontarBaja)
    {
        $this->diasDescontarBaja = $diasDescontarBaja;

        return $this;
    }

    /**
     * Get diasDescontarBaja
     *
     * @return integer 
     */
    public function getDiasDescontarBaja()
    {
        return $this->diasDescontarBaja;
    }

    /**
     * Set saya
     *
     * @param string $saya
     * @return EmpleadosGral
     */
    public function setSaya($saya)
    {
        $this->saya = $saya;

        return $this;
    }

    /**
     * Get saya
     *
     * @return string 
     */
    public function getSaya()
    {
        return $this->saya;
    }

    /**
     * Set pantalon
     *
     * @param string $pantalon
     * @return EmpleadosGral
     */
    public function setPantalon($pantalon)
    {
        $this->pantalon = $pantalon;

        return $this;
    }

    /**
     * Get pantalon
     *
     * @return string 
     */
    public function getPantalon()
    {
        return $this->pantalon;
    }

    /**
     * Set camisa
     *
     * @param string $camisa
     * @return EmpleadosGral
     */
    public function setCamisa($camisa)
    {
        $this->camisa = $camisa;

        return $this;
    }

    /**
     * Get camisa
     *
     * @return string 
     */
    public function getCamisa()
    {
        return $this->camisa;
    }

    /**
     * Set zapato
     *
     * @param string $zapato
     * @return EmpleadosGral
     */
    public function setZapato($zapato)
    {
        $this->zapato = $zapato;

        return $this;
    }

    /**
     * Get zapato
     *
     * @return string 
     */
    public function getZapato()
    {
        return $this->zapato;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return EmpleadosGral
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set colorPiel
     *
     * @param integer $colorPiel
     * @return EmpleadosGral
     */
    public function setColorPiel($colorPiel)
    {
        $this->colorPiel = $colorPiel;

        return $this;
    }

    /**
     * Get colorPiel
     *
     * @return integer 
     */
    public function getColorPiel()
    {
        return $this->colorPiel;
    }

    /**
     * Set colorPelo
     *
     * @param integer $colorPelo
     * @return EmpleadosGral
     */
    public function setColorPelo($colorPelo)
    {
        $this->colorPelo = $colorPelo;

        return $this;
    }

    /**
     * Get colorPelo
     *
     * @return integer 
     */
    public function getColorPelo()
    {
        return $this->colorPelo;
    }

    /**
     * Set estatura
     *
     * @param string $estatura
     * @return EmpleadosGral
     */
    public function setEstatura($estatura)
    {
        $this->estatura = $estatura;

        return $this;
    }

    /**
     * Get estatura
     *
     * @return string 
     */
    public function getEstatura()
    {
        return $this->estatura;
    }

    /**
     * Set nombreMadre
     *
     * @param string $nombreMadre
     * @return EmpleadosGral
     */
    public function setNombreMadre($nombreMadre)
    {
        $this->nombreMadre = $nombreMadre;

        return $this;
    }

    /**
     * Get nombreMadre
     *
     * @return string 
     */
    public function getNombreMadre()
    {
        return $this->nombreMadre;
    }

    /**
     * Set nombrePadre
     *
     * @param string $nombrePadre
     * @return EmpleadosGral
     */
    public function setNombrePadre($nombrePadre)
    {
        $this->nombrePadre = $nombrePadre;

        return $this;
    }

    /**
     * Get nombrePadre
     *
     * @return string 
     */
    public function getNombrePadre()
    {
        return $this->nombrePadre;
    }

    /**
     * Set idProvincia
     *
     * @param string $idProvincia
     * @return EmpleadosGral
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
     * @return EmpleadosGral
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
     * Set idNivelEscolaridad
     *
     * @param string $idNivelEscolaridad
     * @return EmpleadosGral
     */
    public function setIdNivelEscolaridad($idNivelEscolaridad)
    {
        $this->idNivelEscolaridad = $idNivelEscolaridad;

        return $this;
    }

    /**
     * Get idNivelEscolaridad
     *
     * @return string 
     */
    public function getIdNivelEscolaridad()
    {
        return $this->idNivelEscolaridad;
    }

    /**
     * Set idProfesion
     *
     * @param string $idProfesion
     * @return EmpleadosGral
     */
    public function setIdProfesion($idProfesion)
    {
        $this->idProfesion = $idProfesion;

        return $this;
    }

    /**
     * Get idProfesion
     *
     * @return string 
     */
    public function getIdProfesion()
    {
        return $this->idProfesion;
    }

    /**
     * Set fechaContratacion
     *
     * @param \DateTime $fechaContratacion
     * @return EmpleadosGral
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
     * Set fechaTerminacionContrato
     *
     * @param \DateTime $fechaTerminacionContrato
     * @return EmpleadosGral
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
     * Set docente
     *
     * @param boolean $docente
     * @return EmpleadosGral
     */
    public function setDocente($docente)
    {
        $this->docente = $docente;

        return $this;
    }

    /**
     * Get docente
     *
     * @return boolean 
     */
    public function getDocente()
    {
        return $this->docente;
    }

    /**
     * Set investigador
     *
     * @param boolean $investigador
     * @return EmpleadosGral
     */
    public function setInvestigador($investigador)
    {
        $this->investigador = $investigador;

        return $this;
    }

    /**
     * Get investigador
     *
     * @return boolean 
     */
    public function getInvestigador()
    {
        return $this->investigador;
    }

    /**
     * Set idCategoriaDi
     *
     * @param string $idCategoriaDi
     * @return EmpleadosGral
     */
    public function setIdCategoriaDi($idCategoriaDi)
    {
        $this->idCategoriaDi = $idCategoriaDi;

        return $this;
    }

    /**
     * Get idCategoriaDi
     *
     * @return string 
     */
    public function getIdCategoriaDi()
    {
        return $this->idCategoriaDi;
    }

    /**
     * Set anoiniciodocencia
     *
     * @param integer $anoiniciodocencia
     * @return EmpleadosGral
     */
    public function setAnoiniciodocencia($anoiniciodocencia)
    {
        $this->anoiniciodocencia = $anoiniciodocencia;

        return $this;
    }

    /**
     * Get anoiniciodocencia
     *
     * @return integer 
     */
    public function getAnoiniciodocencia()
    {
        return $this->anoiniciodocencia;
    }

    /**
     * Set anointerruptodocencia
     *
     * @param integer $anointerruptodocencia
     * @return EmpleadosGral
     */
    public function setAnointerruptodocencia($anointerruptodocencia)
    {
        $this->anointerruptodocencia = $anointerruptodocencia;

        return $this;
    }

    /**
     * Get anointerruptodocencia
     *
     * @return integer 
     */
    public function getAnointerruptodocencia()
    {
        return $this->anointerruptodocencia;
    }

    /**
     * Set numeroRadicacionPlaza
     *
     * @param string $numeroRadicacionPlaza
     * @return EmpleadosGral
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
     * Set idUbicacionDefensa
     *
     * @param string $idUbicacionDefensa
     * @return EmpleadosGral
     */
    public function setIdUbicacionDefensa($idUbicacionDefensa)
    {
        $this->idUbicacionDefensa = $idUbicacionDefensa;

        return $this;
    }

    /**
     * Get idUbicacionDefensa
     *
     * @return string 
     */
    public function getIdUbicacionDefensa()
    {
        return $this->idUbicacionDefensa;
    }

    /**
     * Set especificacionDefensa
     *
     * @param string $especificacionDefensa
     * @return EmpleadosGral
     */
    public function setEspecificacionDefensa($especificacionDefensa)
    {
        $this->especificacionDefensa = $especificacionDefensa;

        return $this;
    }

    /**
     * Get especificacionDefensa
     *
     * @return string 
     */
    public function getEspecificacionDefensa()
    {
        return $this->especificacionDefensa;
    }

    /**
     * Set imprescindible
     *
     * @param boolean $imprescindible
     * @return EmpleadosGral
     */
    public function setImprescindible($imprescindible)
    {
        $this->imprescindible = $imprescindible;

        return $this;
    }

    /**
     * Get imprescindible
     *
     * @return boolean 
     */
    public function getImprescindible()
    {
        return $this->imprescindible;
    }

    /**
     * Set fechamilitar
     *
     * @param \DateTime $fechamilitar
     * @return EmpleadosGral
     */
    public function setFechamilitar($fechamilitar)
    {
        $this->fechamilitar = $fechamilitar;

        return $this;
    }

    /**
     * Get fechamilitar
     *
     * @return \DateTime 
     */
    public function getFechamilitar()
    {
        return $this->fechamilitar;
    }

    /**
     * Set oc
     *
     * @param boolean $oc
     * @return EmpleadosGral
     */
    public function setOc($oc)
    {
        $this->oc = $oc;

        return $this;
    }

    /**
     * Get oc
     *
     * @return boolean 
     */
    public function getOc()
    {
        return $this->oc;
    }

    /**
     * Set militancia
     *
     * @param integer $militancia
     * @return EmpleadosGral
     */
    public function setMilitancia($militancia)
    {
        $this->militancia = $militancia;

        return $this;
    }

    /**
     * Get militancia
     *
     * @return integer 
     */
    public function getMilitancia()
    {
        return $this->militancia;
    }

    /**
     * Set requisitoidiomatico
     *
     * @param boolean $requisitoidiomatico
     * @return EmpleadosGral
     */
    public function setRequisitoidiomatico($requisitoidiomatico)
    {
        $this->requisitoidiomatico = $requisitoidiomatico;

        return $this;
    }

    /**
     * Get requisitoidiomatico
     *
     * @return boolean 
     */
    public function getRequisitoidiomatico()
    {
        return $this->requisitoidiomatico;
    }

    /**
     * Set requisitotecnico
     *
     * @param boolean $requisitotecnico
     * @return EmpleadosGral
     */
    public function setRequisitotecnico($requisitotecnico)
    {
        $this->requisitotecnico = $requisitotecnico;

        return $this;
    }

    /**
     * Get requisitotecnico
     *
     * @return boolean 
     */
    public function getRequisitotecnico()
    {
        return $this->requisitotecnico;
    }

    /**
     * Set idObra
     *
     * @param string $idObra
     * @return EmpleadosGral
     */
    public function setIdObra($idObra)
    {
        $this->idObra = $idObra;

        return $this;
    }

    /**
     * Get idObra
     *
     * @return string 
     */
    public function getIdObra()
    {
        return $this->idObra;
    }

    /**
     * Set tipoVacuna
     *
     * @param integer $tipoVacuna
     * @return EmpleadosGral
     */
    public function setTipoVacuna($tipoVacuna)
    {
        $this->tipoVacuna = $tipoVacuna;

        return $this;
    }

    /**
     * Get tipoVacuna
     *
     * @return integer 
     */
    public function getTipoVacuna()
    {
        return $this->tipoVacuna;
    }

    /**
     * Set fechaVacuna
     *
     * @param \DateTime $fechaVacuna
     * @return EmpleadosGral
     */
    public function setFechaVacuna($fechaVacuna)
    {
        $this->fechaVacuna = $fechaVacuna;

        return $this;
    }

    /**
     * Get fechaVacuna
     *
     * @return \DateTime 
     */
    public function getFechaVacuna()
    {
        return $this->fechaVacuna;
    }

    /**
     * Set notaVacuna
     *
     * @param string $notaVacuna
     * @return EmpleadosGral
     */
    public function setNotaVacuna($notaVacuna)
    {
        $this->notaVacuna = $notaVacuna;

        return $this;
    }

    /**
     * Get notaVacuna
     *
     * @return string 
     */
    public function getNotaVacuna()
    {
        return $this->notaVacuna;
    }

    /**
     * Set nivelCp
     *
     * @param integer $nivelCp
     * @return EmpleadosGral
     */
    public function setNivelCp($nivelCp)
    {
        $this->nivelCp = $nivelCp;

        return $this;
    }

    /**
     * Get nivelCp
     *
     * @return integer 
     */
    public function getNivelCp()
    {
        return $this->nivelCp;
    }

    /**
     * Set idDireccionCp
     *
     * @param string $idDireccionCp
     * @return EmpleadosGral
     */
    public function setIdDireccionCp($idDireccionCp)
    {
        $this->idDireccionCp = $idDireccionCp;

        return $this;
    }

    /**
     * Get idDireccionCp
     *
     * @return string 
     */
    public function getIdDireccionCp()
    {
        return $this->idDireccionCp;
    }

    /**
     * Set idCargoCp
     *
     * @param string $idCargoCp
     * @return EmpleadosGral
     */
    public function setIdCargoCp($idCargoCp)
    {
        $this->idCargoCp = $idCargoCp;

        return $this;
    }

    /**
     * Get idCargoCp
     *
     * @return string 
     */
    public function getIdCargoCp()
    {
        return $this->idCargoCp;
    }

    /**
     * Set idCategoriaCp
     *
     * @param string $idCategoriaCp
     * @return EmpleadosGral
     */
    public function setIdCategoriaCp($idCategoriaCp)
    {
        $this->idCategoriaCp = $idCategoriaCp;

        return $this;
    }

    /**
     * Get idCategoriaCp
     *
     * @return string 
     */
    public function getIdCategoriaCp()
    {
        return $this->idCategoriaCp;
    }

    /**
     * Set ngrupoCp
     *
     * @param integer $ngrupoCp
     * @return EmpleadosGral
     */
    public function setNgrupoCp($ngrupoCp)
    {
        $this->ngrupoCp = $ngrupoCp;

        return $this;
    }

    /**
     * Get ngrupoCp
     *
     * @return integer 
     */
    public function getNgrupoCp()
    {
        return $this->ngrupoCp;
    }

    /**
     * Set fechaCargoCp
     *
     * @param \DateTime $fechaCargoCp
     * @return EmpleadosGral
     */
    public function setFechaCargoCp($fechaCargoCp)
    {
        $this->fechaCargoCp = $fechaCargoCp;

        return $this;
    }

    /**
     * Get fechaCargoCp
     *
     * @return \DateTime 
     */
    public function getFechaCargoCp()
    {
        return $this->fechaCargoCp;
    }

    /**
     * Set asignacionPorCargoCp
     *
     * @param boolean $asignacionPorCargoCp
     * @return EmpleadosGral
     */
    public function setAsignacionPorCargoCp($asignacionPorCargoCp)
    {
        $this->asignacionPorCargoCp = $asignacionPorCargoCp;

        return $this;
    }

    /**
     * Get asignacionPorCargoCp
     *
     * @return boolean 
     */
    public function getAsignacionPorCargoCp()
    {
        return $this->asignacionPorCargoCp;
    }

    /**
     * Set idGrpevaluativo
     *
     * @param string $idGrpevaluativo
     * @return EmpleadosGral
     */
    public function setIdGrpevaluativo($idGrpevaluativo)
    {
        $this->idGrpevaluativo = $idGrpevaluativo;

        return $this;
    }

    /**
     * Get idGrpevaluativo
     *
     * @return string 
     */
    public function getIdGrpevaluativo()
    {
        return $this->idGrpevaluativo;
    }

    /**
     * Set idGrpsendrec
     *
     * @param string $idGrpsendrec
     * @return EmpleadosGral
     */
    public function setIdGrpsendrec($idGrpsendrec)
    {
        $this->idGrpsendrec = $idGrpsendrec;

        return $this;
    }

    /**
     * Get idGrpsendrec
     *
     * @return string 
     */
    public function getIdGrpsendrec()
    {
        return $this->idGrpsendrec;
    }

    /**
     * Set cuadroreserva
     *
     * @param integer $cuadroreserva
     * @return EmpleadosGral
     */
    public function setCuadroreserva($cuadroreserva)
    {
        $this->cuadroreserva = $cuadroreserva;

        return $this;
    }

    /**
     * Get cuadroreserva
     *
     * @return integer 
     */
    public function getCuadroreserva()
    {
        return $this->cuadroreserva;
    }

    /**
     * Set clasifcuadros
     *
     * @param integer $clasifcuadros
     * @return EmpleadosGral
     */
    public function setClasifcuadros($clasifcuadros)
    {
        $this->clasifcuadros = $clasifcuadros;

        return $this;
    }

    /**
     * Get clasifcuadros
     *
     * @return integer 
     */
    public function getClasifcuadros()
    {
        return $this->clasifcuadros;
    }

    /**
     * Set situacionreserva
     *
     * @param integer $situacionreserva
     * @return EmpleadosGral
     */
    public function setSituacionreserva($situacionreserva)
    {
        $this->situacionreserva = $situacionreserva;

        return $this;
    }

    /**
     * Get situacionreserva
     *
     * @return integer 
     */
    public function getSituacionreserva()
    {
        return $this->situacionreserva;
    }

    /**
     * Set nivelReserva
     *
     * @param integer $nivelReserva
     * @return EmpleadosGral
     */
    public function setNivelReserva($nivelReserva)
    {
        $this->nivelReserva = $nivelReserva;

        return $this;
    }

    /**
     * Get nivelReserva
     *
     * @return integer 
     */
    public function getNivelReserva()
    {
        return $this->nivelReserva;
    }

    /**
     * Set idDireccionReserva
     *
     * @param string $idDireccionReserva
     * @return EmpleadosGral
     */
    public function setIdDireccionReserva($idDireccionReserva)
    {
        $this->idDireccionReserva = $idDireccionReserva;

        return $this;
    }

    /**
     * Get idDireccionReserva
     *
     * @return string 
     */
    public function getIdDireccionReserva()
    {
        return $this->idDireccionReserva;
    }

    /**
     * Set idCargoReserva
     *
     * @param string $idCargoReserva
     * @return EmpleadosGral
     */
    public function setIdCargoReserva($idCargoReserva)
    {
        $this->idCargoReserva = $idCargoReserva;

        return $this;
    }

    /**
     * Get idCargoReserva
     *
     * @return string 
     */
    public function getIdCargoReserva()
    {
        return $this->idCargoReserva;
    }

    /**
     * Set anosservicio
     *
     * @param integer $anosservicio
     * @return EmpleadosGral
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
     * Set antiguedaddispensa
     *
     * @param integer $antiguedaddispensa
     * @return EmpleadosGral
     */
    public function setAntiguedaddispensa($antiguedaddispensa)
    {
        $this->antiguedaddispensa = $antiguedaddispensa;

        return $this;
    }

    /**
     * Get antiguedaddispensa
     *
     * @return integer 
     */
    public function getAntiguedaddispensa()
    {
        return $this->antiguedaddispensa;
    }

    /**
     * Set situacion
     *
     * @param integer $situacion
     * @return EmpleadosGral
     */
    public function setSituacion($situacion)
    {
        $this->situacion = $situacion;

        return $this;
    }

    /**
     * Get situacion
     *
     * @return integer 
     */
    public function getSituacion()
    {
        return $this->situacion;
    }

    /**
     * Set idActividad
     *
     * @param string $idActividad
     * @return EmpleadosGral
     */
    public function setIdActividad($idActividad)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad
     *
     * @return string 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set albergado
     *
     * @param boolean $albergado
     * @return EmpleadosGral
     */
    public function setAlbergado($albergado)
    {
        $this->albergado = $albergado;

        return $this;
    }

    /**
     * Get albergado
     *
     * @return boolean 
     */
    public function getAlbergado()
    {
        return $this->albergado;
    }

    /**
     * Set cubiculo
     *
     * @param string $cubiculo
     * @return EmpleadosGral
     */
    public function setCubiculo($cubiculo)
    {
        $this->cubiculo = $cubiculo;

        return $this;
    }

    /**
     * Get cubiculo
     *
     * @return string 
     */
    public function getCubiculo()
    {
        return $this->cubiculo;
    }

    /**
     * Set modulouniforme
     *
     * @param string $modulouniforme
     * @return EmpleadosGral
     */
    public function setModulouniforme($modulouniforme)
    {
        $this->modulouniforme = $modulouniforme;

        return $this;
    }

    /**
     * Get modulouniforme
     *
     * @return string 
     */
    public function getModulouniforme()
    {
        return $this->modulouniforme;
    }

    /**
     * Set fechasector
     *
     * @param \DateTime $fechasector
     * @return EmpleadosGral
     */
    public function setFechasector($fechasector)
    {
        $this->fechasector = $fechasector;

        return $this;
    }

    /**
     * Get fechasector
     *
     * @return \DateTime 
     */
    public function getFechasector()
    {
        return $this->fechasector;
    }

    /**
     * Set fechadireccion
     *
     * @param \DateTime $fechadireccion
     * @return EmpleadosGral
     */
    public function setFechadireccion($fechadireccion)
    {
        $this->fechadireccion = $fechadireccion;

        return $this;
    }

    /**
     * Get fechadireccion
     *
     * @return \DateTime 
     */
    public function getFechadireccion()
    {
        return $this->fechadireccion;
    }

    /**
     * Set misionCivil
     *
     * @param boolean $misionCivil
     * @return EmpleadosGral
     */
    public function setMisionCivil($misionCivil)
    {
        $this->misionCivil = $misionCivil;

        return $this;
    }

    /**
     * Get misionCivil
     *
     * @return boolean 
     */
    public function getMisionCivil()
    {
        return $this->misionCivil;
    }

    /**
     * Set misionMilitar
     *
     * @param boolean $misionMilitar
     * @return EmpleadosGral
     */
    public function setMisionMilitar($misionMilitar)
    {
        $this->misionMilitar = $misionMilitar;

        return $this;
    }

    /**
     * Get misionMilitar
     *
     * @return boolean 
     */
    public function getMisionMilitar()
    {
        return $this->misionMilitar;
    }

    /**
     * Set ayudaTecnica
     *
     * @param boolean $ayudaTecnica
     * @return EmpleadosGral
     */
    public function setAyudaTecnica($ayudaTecnica)
    {
        $this->ayudaTecnica = $ayudaTecnica;

        return $this;
    }

    /**
     * Get ayudaTecnica
     *
     * @return boolean 
     */
    public function getAyudaTecnica()
    {
        return $this->ayudaTecnica;
    }

    /**
     * Set microbrigada
     *
     * @param boolean $microbrigada
     * @return EmpleadosGral
     */
    public function setMicrobrigada($microbrigada)
    {
        $this->microbrigada = $microbrigada;

        return $this;
    }

    /**
     * Get microbrigada
     *
     * @return boolean 
     */
    public function getMicrobrigada()
    {
        return $this->microbrigada;
    }

    /**
     * Set dobleExpediente
     *
     * @param boolean $dobleExpediente
     * @return EmpleadosGral
     */
    public function setDobleExpediente($dobleExpediente)
    {
        $this->dobleExpediente = $dobleExpediente;

        return $this;
    }

    /**
     * Get dobleExpediente
     *
     * @return boolean 
     */
    public function getDobleExpediente()
    {
        return $this->dobleExpediente;
    }

    /**
     * Set disposicioncargo
     *
     * @param boolean $disposicioncargo
     * @return EmpleadosGral
     */
    public function setDisposicioncargo($disposicioncargo)
    {
        $this->disposicioncargo = $disposicioncargo;

        return $this;
    }

    /**
     * Get disposicioncargo
     *
     * @return boolean 
     */
    public function getDisposicioncargo()
    {
        return $this->disposicioncargo;
    }

    /**
     * Set prestacionServicio
     *
     * @param boolean $prestacionServicio
     * @return EmpleadosGral
     */
    public function setPrestacionServicio($prestacionServicio)
    {
        $this->prestacionServicio = $prestacionServicio;

        return $this;
    }

    /**
     * Get prestacionServicio
     *
     * @return boolean 
     */
    public function getPrestacionServicio()
    {
        return $this->prestacionServicio;
    }

    /**
     * Set fechaPrestacionServicio
     *
     * @param \DateTime $fechaPrestacionServicio
     * @return EmpleadosGral
     */
    public function setFechaPrestacionServicio($fechaPrestacionServicio)
    {
        $this->fechaPrestacionServicio = $fechaPrestacionServicio;

        return $this;
    }

    /**
     * Get fechaPrestacionServicio
     *
     * @return \DateTime 
     */
    public function getFechaPrestacionServicio()
    {
        return $this->fechaPrestacionServicio;
    }

    /**
     * Set mision
     *
     * @param integer $mision
     * @return EmpleadosGral
     */
    public function setMision($mision)
    {
        $this->mision = $mision;

        return $this;
    }

    /**
     * Get mision
     *
     * @return integer 
     */
    public function getMision()
    {
        return $this->mision;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return EmpleadosGral
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return EmpleadosGral
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
     * @return EmpleadosGral
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
     * Set idSubcategoria
     *
     * @param string $idSubcategoria
     * @return EmpleadosGral
     */
    public function setIdSubcategoria($idSubcategoria)
    {
        $this->idSubcategoria = $idSubcategoria;

        return $this;
    }

    /**
     * Get idSubcategoria
     *
     * @return string 
     */
    public function getIdSubcategoria()
    {
        return $this->idSubcategoria;
    }

    /**
     * Set idCategoriaIt
     *
     * @param string $idCategoriaIt
     * @return EmpleadosGral
     */
    public function setIdCategoriaIt($idCategoriaIt)
    {
        $this->idCategoriaIt = $idCategoriaIt;

        return $this;
    }

    /**
     * Get idCategoriaIt
     *
     * @return string 
     */
    public function getIdCategoriaIt()
    {
        return $this->idCategoriaIt;
    }

    /**
     * Set idJornada
     *
     * @param string $idJornada
     * @return EmpleadosGral
     */
    public function setIdJornada($idJornada)
    {
        $this->idJornada = $idJornada;

        return $this;
    }

    /**
     * Get idJornada
     *
     * @return string 
     */
    public function getIdJornada()
    {
        return $this->idJornada;
    }

    /**
     * Set idTarjetaReloj
     *
     * @param string $idTarjetaReloj
     * @return EmpleadosGral
     */
    public function setIdTarjetaReloj($idTarjetaReloj)
    {
        $this->idTarjetaReloj = $idTarjetaReloj;

        return $this;
    }

    /**
     * Get idTarjetaReloj
     *
     * @return string 
     */
    public function getIdTarjetaReloj()
    {
        return $this->idTarjetaReloj;
    }

    /**
     * Set tarjetaRelojOn
     *
     * @param boolean $tarjetaRelojOn
     * @return EmpleadosGral
     */
    public function setTarjetaRelojOn($tarjetaRelojOn)
    {
        $this->tarjetaRelojOn = $tarjetaRelojOn;

        return $this;
    }

    /**
     * Get tarjetaRelojOn
     *
     * @return boolean 
     */
    public function getTarjetaRelojOn()
    {
        return $this->tarjetaRelojOn;
    }

    /**
     * Set designacion
     *
     * @param boolean $designacion
     * @return EmpleadosGral
     */
    public function setDesignacion($designacion)
    {
        $this->designacion = $designacion;

        return $this;
    }

    /**
     * Get designacion
     *
     * @return boolean 
     */
    public function getDesignacion()
    {
        return $this->designacion;
    }

    /**
     * Set diasDecLey91
     *
     * @param string $diasDecLey91
     * @return EmpleadosGral
     */
    public function setDiasDecLey91($diasDecLey91)
    {
        $this->diasDecLey91 = $diasDecLey91;

        return $this;
    }

    /**
     * Get diasDecLey91
     *
     * @return string 
     */
    public function getDiasDecLey91()
    {
        return $this->diasDecLey91;
    }

    /**
     * Set diasDecLey91Saldo
     *
     * @param string $diasDecLey91Saldo
     * @return EmpleadosGral
     */
    public function setDiasDecLey91Saldo($diasDecLey91Saldo)
    {
        $this->diasDecLey91Saldo = $diasDecLey91Saldo;

        return $this;
    }

    /**
     * Get diasDecLey91Saldo
     *
     * @return string 
     */
    public function getDiasDecLey91Saldo()
    {
        return $this->diasDecLey91Saldo;
    }

    /**
     * Set horarioRegular
     *
     * @param boolean $horarioRegular
     * @return EmpleadosGral
     */
    public function setHorarioRegular($horarioRegular)
    {
        $this->horarioRegular = $horarioRegular;

        return $this;
    }

    /**
     * Get horarioRegular
     *
     * @return boolean 
     */
    public function getHorarioRegular()
    {
        return $this->horarioRegular;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     * @return EmpleadosGral
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
     * Set idGradoCientifico
     *
     * @param string $idGradoCientifico
     * @return EmpleadosGral
     */
    public function setIdGradoCientifico($idGradoCientifico)
    {
        $this->idGradoCientifico = $idGradoCientifico;

        return $this;
    }

    /**
     * Get idGradoCientifico
     *
     * @return string 
     */
    public function getIdGradoCientifico()
    {
        return $this->idGradoCientifico;
    }

    /**
     * Set fechaCategoriaDocente
     *
     * @param \DateTime $fechaCategoriaDocente
     * @return EmpleadosGral
     */
    public function setFechaCategoriaDocente($fechaCategoriaDocente)
    {
        $this->fechaCategoriaDocente = $fechaCategoriaDocente;

        return $this;
    }

    /**
     * Get fechaCategoriaDocente
     *
     * @return \DateTime 
     */
    public function getFechaCategoriaDocente()
    {
        return $this->fechaCategoriaDocente;
    }
}
