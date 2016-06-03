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
     * Set descCargo
     *
     * @param string $descCargo
     * @return RhCargos
     */
    public function setDescCargo($descCargo)
    {
        $this->descCargo = $descCargo;

        return $this;
    }

    /**
     * Get descCargo
     *
     * @return string 
     */
    public function getDescCargo()
    {
        return $this->descCargo;
    }

    /**
     * Set rgrupo
     *
     * @param string $rgrupo
     * @return RhCargos
     */
    public function setRgrupo($rgrupo)
    {
        $this->rgrupo = $rgrupo;

        return $this;
    }

    /**
     * Get rgrupo
     *
     * @return string 
     */
    public function getRgrupo()
    {
        return $this->rgrupo;
    }

    /**
     * Set ngrupo
     *
     * @param string $ngrupo
     * @return RhCargos
     */
    public function setNgrupo($ngrupo)
    {
        $this->ngrupo = $ngrupo;

        return $this;
    }

    /**
     * Get ngrupo
     *
     * @return string 
     */
    public function getNgrupo()
    {
        return $this->ngrupo;
    }

    /**
     * Set idCategoria
     *
     * @param string $idCategoria
     * @return RhCargos
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
     * Set descCategoria
     *
     * @param string $descCategoria
     * @return RhCargos
     */
    public function setDescCategoria($descCategoria)
    {
        $this->descCategoria = $descCategoria;

        return $this;
    }

    /**
     * Get descCategoria
     *
     * @return string 
     */
    public function getDescCategoria()
    {
        return $this->descCategoria;
    }

    /**
     * Set idSubcategoria
     *
     * @param string $idSubcategoria
     * @return RhCargos
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
     * Set descSubcategoria
     *
     * @param string $descSubcategoria
     * @return RhCargos
     */
    public function setDescSubcategoria($descSubcategoria)
    {
        $this->descSubcategoria = $descSubcategoria;

        return $this;
    }

    /**
     * Get descSubcategoria
     *
     * @return string 
     */
    public function getDescSubcategoria()
    {
        return $this->descSubcategoria;
    }

    /**
     * Set resolucion
     *
     * @param string $resolucion
     * @return RhCargos
     */
    public function setResolucion($resolucion)
    {
        $this->resolucion = $resolucion;

        return $this;
    }

    /**
     * Get resolucion
     *
     * @return string 
     */
    public function getResolucion()
    {
        return $this->resolucion;
    }

    /**
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return RhCargos
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set porcientoSimultaneidad
     *
     * @param string $porcientoSimultaneidad
     * @return RhCargos
     */
    public function setPorcientoSimultaneidad($porcientoSimultaneidad)
    {
        $this->porcientoSimultaneidad = $porcientoSimultaneidad;

        return $this;
    }

    /**
     * Get porcientoSimultaneidad
     *
     * @return string 
     */
    public function getPorcientoSimultaneidad()
    {
        return $this->porcientoSimultaneidad;
    }

    /**
     * Set funcionario
     *
     * @param boolean $funcionario
     * @return RhCargos
     */
    public function setFuncionario($funcionario)
    {
        $this->funcionario = $funcionario;

        return $this;
    }

    /**
     * Get funcionario
     *
     * @return boolean 
     */
    public function getFuncionario()
    {
        return $this->funcionario;
    }

    /**
     * Set ejecutivo
     *
     * @param boolean $ejecutivo
     * @return RhCargos
     */
    public function setEjecutivo($ejecutivo)
    {
        $this->ejecutivo = $ejecutivo;

        return $this;
    }

    /**
     * Get ejecutivo
     *
     * @return boolean 
     */
    public function getEjecutivo()
    {
        return $this->ejecutivo;
    }

    /**
     * Set apoyo
     *
     * @param boolean $apoyo
     * @return RhCargos
     */
    public function setApoyo($apoyo)
    {
        $this->apoyo = $apoyo;

        return $this;
    }

    /**
     * Get apoyo
     *
     * @return boolean 
     */
    public function getApoyo()
    {
        return $this->apoyo;
    }

    /**
     * Set reportflag
     *
     * @param boolean $reportflag
     * @return RhCargos
     */
    public function setReportflag($reportflag)
    {
        $this->reportflag = $reportflag;

        return $this;
    }

    /**
     * Get reportflag
     *
     * @return boolean 
     */
    public function getReportflag()
    {
        return $this->reportflag;
    }

    /**
     * Set coeficienteMultioficio
     *
     * @param string $coeficienteMultioficio
     * @return RhCargos
     */
    public function setCoeficienteMultioficio($coeficienteMultioficio)
    {
        $this->coeficienteMultioficio = $coeficienteMultioficio;

        return $this;
    }

    /**
     * Get coeficienteMultioficio
     *
     * @return string 
     */
    public function getCoeficienteMultioficio()
    {
        return $this->coeficienteMultioficio;
    }

    /**
     * Set coeficenteEmpresaEmpleadora
     *
     * @param string $coeficenteEmpresaEmpleadora
     * @return RhCargos
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
     * Set mscodgrupo
     *
     * @param string $mscodgrupo
     * @return RhCargos
     */
    public function setMscodgrupo($mscodgrupo)
    {
        $this->mscodgrupo = $mscodgrupo;

        return $this;
    }

    /**
     * Get mscodgrupo
     *
     * @return string 
     */
    public function getMscodgrupo()
    {
        return $this->mscodgrupo;
    }

    /**
     * Set salarioBasico
     *
     * @param integer $salarioBasico
     * @return RhCargos
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
     * Set plus
     *
     * @param integer $plus
     * @return RhCargos
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
     * Set salarioCargo
     *
     * @param integer $salarioCargo
     * @return RhCargos
     */
    public function setSalarioCargo($salarioCargo)
    {
        $this->salarioCargo = $salarioCargo;

        return $this;
    }

    /**
     * Get salarioCargo
     *
     * @return integer 
     */
    public function getSalarioCargo()
    {
        return $this->salarioCargo;
    }

    /**
     * Set estimulo
     *
     * @param integer $estimulo
     * @return RhCargos
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
     * Set otros
     *
     * @param integer $otros
     * @return RhCargos
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
     * Set antiguedad
     *
     * @param integer $antiguedad
     * @return RhCargos
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
     * Set ieterritorial
     *
     * @param string $ieterritorial
     * @return RhCargos
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
     * @return RhCargos
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
     * Set otrasretribuciones
     *
     * @param string $otrasretribuciones
     * @return RhCargos
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
     * @return RhCargos
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
     * @return RhCargos
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
     * Set idClasifP2
     *
     * @param string $idClasifP2
     * @return RhCargos
     */
    public function setIdClasifP2($idClasifP2)
    {
        $this->idClasifP2 = $idClasifP2;

        return $this;
    }

    /**
     * Get idClasifP2
     *
     * @return string 
     */
    public function getIdClasifP2()
    {
        return $this->idClasifP2;
    }
}
