<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhEstadisticas
 *
 * @ORM\Table(name="RH_ESTADISTICAS")
 * @ORM\Entity
 */
class RhEstadisticas
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
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=true)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="No_CI", type="string", length=15, nullable=true)
     */
    private $noCi;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido_1", type="string", length=50, nullable=true)
     */
    private $apellido1;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido_2", type="string", length=50, nullable=true)
     */
    private $apellido2;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_Contrato", type="string", length=3, nullable=true)
     */
    private $idTipoContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Tipo_Contrato", type="string", length=25, nullable=true)
     */
    private $descTipoContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=5, nullable=true)
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Categoria", type="string", length=25, nullable=true)
     */
    private $descCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Color_Piel", type="smallint", nullable=true)
     */
    private $colorPiel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Provincia", type="string", length=5, nullable=true)
     */
    private $idProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Provincia", type="string", length=50, nullable=true)
     */
    private $descProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Municipio", type="string", length=5, nullable=true)
     */
    private $idMunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Municipio", type="string", length=50, nullable=true)
     */
    private $descMunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Nivel_Escolaridad", type="string", length=3, nullable=true)
     */
    private $idNivelEscolaridad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Nivel_Escolaridad", type="string", length=50, nullable=true)
     */
    private $descNivelEscolaridad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria_DI", type="string", length=5, nullable=true)
     */
    private $idCategoriaDi;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Categoria_DI", type="string", length=50, nullable=true)
     */
    private $descCategoriaDi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Docente", type="boolean", nullable=true)
     */
    private $docente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Investigador", type="boolean", nullable=true)
     */
    private $investigador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Grado_Cientifico", type="string", length=5, nullable=true)
     */
    private $idGradoCientifico;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Grado_Cientifico", type="string", length=50, nullable=true)
     */
    private $descGradoCientifico;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico", type="integer", nullable=true)
     */
    private $salarioBasico;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulo", type="integer", nullable=true)
     */
    private $estimulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Estimulo", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $porcientoEstimulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Antiguedad", type="integer", nullable=true)
     */
    private $antiguedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plus", type="integer", nullable=true)
     */
    private $plus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros", type="integer", nullable=true)
     */
    private $otros;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cargo", type="string", length=5, nullable=true)
     */
    private $idCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cargo", type="string", length=120, nullable=true)
     */
    private $descCargo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cargo", type="datetime", nullable=true)
     */
    private $fechaCargo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Alta", type="boolean", nullable=true)
     */
    private $alta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Baja", type="boolean", nullable=true)
     */
    private $baja;



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
     * @return RhEstadisticas
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
     * @return RhEstadisticas
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
     * @return RhEstadisticas
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
     * @return RhEstadisticas
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
     * Set apellido2
     *
     * @param string $apellido2
     * @return RhEstadisticas
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
     * Set idTipoContrato
     *
     * @param string $idTipoContrato
     * @return RhEstadisticas
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
     * Set descTipoContrato
     *
     * @param string $descTipoContrato
     * @return RhEstadisticas
     */
    public function setDescTipoContrato($descTipoContrato)
    {
        $this->descTipoContrato = $descTipoContrato;

        return $this;
    }

    /**
     * Get descTipoContrato
     *
     * @return string 
     */
    public function getDescTipoContrato()
    {
        return $this->descTipoContrato;
    }

    /**
     * Set idCategoria
     *
     * @param string $idCategoria
     * @return RhEstadisticas
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
     * @return RhEstadisticas
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
     * Set sexo
     *
     * @param string $sexo
     * @return RhEstadisticas
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
     * @return RhEstadisticas
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
     * Set idProvincia
     *
     * @param string $idProvincia
     * @return RhEstadisticas
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
     * Set descProvincia
     *
     * @param string $descProvincia
     * @return RhEstadisticas
     */
    public function setDescProvincia($descProvincia)
    {
        $this->descProvincia = $descProvincia;

        return $this;
    }

    /**
     * Get descProvincia
     *
     * @return string 
     */
    public function getDescProvincia()
    {
        return $this->descProvincia;
    }

    /**
     * Set idMunicipio
     *
     * @param string $idMunicipio
     * @return RhEstadisticas
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
     * Set descMunicipio
     *
     * @param string $descMunicipio
     * @return RhEstadisticas
     */
    public function setDescMunicipio($descMunicipio)
    {
        $this->descMunicipio = $descMunicipio;

        return $this;
    }

    /**
     * Get descMunicipio
     *
     * @return string 
     */
    public function getDescMunicipio()
    {
        return $this->descMunicipio;
    }

    /**
     * Set idNivelEscolaridad
     *
     * @param string $idNivelEscolaridad
     * @return RhEstadisticas
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
     * Set descNivelEscolaridad
     *
     * @param string $descNivelEscolaridad
     * @return RhEstadisticas
     */
    public function setDescNivelEscolaridad($descNivelEscolaridad)
    {
        $this->descNivelEscolaridad = $descNivelEscolaridad;

        return $this;
    }

    /**
     * Get descNivelEscolaridad
     *
     * @return string 
     */
    public function getDescNivelEscolaridad()
    {
        return $this->descNivelEscolaridad;
    }

    /**
     * Set idCategoriaDi
     *
     * @param string $idCategoriaDi
     * @return RhEstadisticas
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
     * Set descCategoriaDi
     *
     * @param string $descCategoriaDi
     * @return RhEstadisticas
     */
    public function setDescCategoriaDi($descCategoriaDi)
    {
        $this->descCategoriaDi = $descCategoriaDi;

        return $this;
    }

    /**
     * Get descCategoriaDi
     *
     * @return string 
     */
    public function getDescCategoriaDi()
    {
        return $this->descCategoriaDi;
    }

    /**
     * Set docente
     *
     * @param boolean $docente
     * @return RhEstadisticas
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
     * @return RhEstadisticas
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
     * Set idGradoCientifico
     *
     * @param string $idGradoCientifico
     * @return RhEstadisticas
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
     * Set descGradoCientifico
     *
     * @param string $descGradoCientifico
     * @return RhEstadisticas
     */
    public function setDescGradoCientifico($descGradoCientifico)
    {
        $this->descGradoCientifico = $descGradoCientifico;

        return $this;
    }

    /**
     * Get descGradoCientifico
     *
     * @return string 
     */
    public function getDescGradoCientifico()
    {
        return $this->descGradoCientifico;
    }

    /**
     * Set salarioBasico
     *
     * @param integer $salarioBasico
     * @return RhEstadisticas
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
     * @return RhEstadisticas
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
     * @return RhEstadisticas
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
     * @return RhEstadisticas
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
     * Set plus
     *
     * @param integer $plus
     * @return RhEstadisticas
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
     * Set otros
     *
     * @param integer $otros
     * @return RhEstadisticas
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
     * Set idCargo
     *
     * @param string $idCargo
     * @return RhEstadisticas
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
     * Set descCargo
     *
     * @param string $descCargo
     * @return RhEstadisticas
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
     * Set fechaCargo
     *
     * @param \DateTime $fechaCargo
     * @return RhEstadisticas
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
     * Set alta
     *
     * @param boolean $alta
     * @return RhEstadisticas
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
     * Set baja
     *
     * @param boolean $baja
     * @return RhEstadisticas
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
}
