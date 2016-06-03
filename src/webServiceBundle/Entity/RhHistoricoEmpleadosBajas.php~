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


}
