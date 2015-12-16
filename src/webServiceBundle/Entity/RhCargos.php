<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCargos
 *
 * @ORM\Table(name="RH_Cargos")
 * @ORM\Entity
 */
class RhCargos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cargo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cargo", type="string", length=120, nullable=false)
     */
    private $descCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="RGrupo", type="string", length=5, nullable=false)
     */
    private $rgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="NGrupo", type="string", length=3, nullable=false)
     */
    private $ngrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=5, nullable=false)
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Categoria", type="string", length=25, nullable=false)
     */
    private $descCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Subcategoria", type="string", length=5, nullable=false)
     */
    private $idSubcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Subcategoria", type="string", length=50, nullable=false)
     */
    private $descSubcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Resolucion", type="string", length=20, nullable=false)
     */
    private $resolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="Clasificacion", type="string", length=1, nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Simultaneidad", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $porcientoSimultaneidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Funcionario", type="boolean", nullable=false)
     */
    private $funcionario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ejecutivo", type="boolean", nullable=false)
     */
    private $ejecutivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Apoyo", type="boolean", nullable=false)
     */
    private $apoyo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ReportFlag", type="boolean", nullable=false)
     */
    private $reportflag;

    /**
     * @var string
     *
     * @ORM\Column(name="Coeficiente_Multioficio", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $coeficienteMultioficio;

    /**
     * @var string
     *
     * @ORM\Column(name="Coeficente_Empresa_Empleadora", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $coeficenteEmpresaEmpleadora;

    /**
     * @var string
     *
     * @ORM\Column(name="MSCodGrupo", type="string", length=3, nullable=false)
     */
    private $mscodgrupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico", type="integer", nullable=false)
     */
    private $salarioBasico;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plus", type="integer", nullable=false)
     */
    private $plus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Cargo", type="integer", nullable=false)
     */
    private $salarioCargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulo", type="integer", nullable=false)
     */
    private $estimulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros", type="integer", nullable=false)
     */
    private $otros;

    /**
     * @var integer
     *
     * @ORM\Column(name="Antiguedad", type="integer", nullable=false)
     */
    private $antiguedad;

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
     * @ORM\Column(name="OtrasRetribuciones", type="decimal", precision=8, scale=2, nullable=false)
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
     * @ORM\Column(name="Id_Clasif_P2", type="string", length=3, nullable=false)
     */
    private $idClasifP2;


}
