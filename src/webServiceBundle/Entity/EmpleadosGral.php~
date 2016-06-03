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


}
