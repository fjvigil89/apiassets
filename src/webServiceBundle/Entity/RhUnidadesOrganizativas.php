<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhUnidadesOrganizativas
 *
 * @ORM\Table(name="RH_Unidades_Organizativas")
 * @ORM\Entity
 */
class RhUnidadesOrganizativas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Direccion", type="string", length=100, nullable=false)
     */
    private $descDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Clasificacion", type="string", length=5, nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="GrupoNomina", type="string", length=15, nullable=false)
     */
    private $gruponomina;

    /**
     * @var string
     *
     * @ORM\Column(name="GrupoDisciplinaLab", type="string", length=15, nullable=false)
     */
    private $grupodisciplinalab;

    /**
     * @var string
     *
     * @ORM\Column(name="CodGrpSendRec", type="string", length=7, nullable=false)
     */
    private $codgrpsendrec;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Area", type="string", length=3, nullable=false)
     */
    private $idArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="NivelPadre", type="smallint", nullable=false)
     */
    private $nivelpadre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_DireccionPadre", type="string", length=15, nullable=false)
     */
    private $idDireccionpadre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Alta", type="datetime", nullable=false)
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Baja", type="datetime", nullable=false)
     */
    private $fechaBaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=false)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Baja", type="boolean", nullable=false)
     */
    private $baja;

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
     * Set nivel
     *
     * @param integer $nivel
     * @return RhUnidadesOrganizativas
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
     * @return RhUnidadesOrganizativas
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
     * Set descDireccion
     *
     * @param string $descDireccion
     * @return RhUnidadesOrganizativas
     */
    public function setDescDireccion($descDireccion)
    {
        $this->descDireccion = $descDireccion;

        return $this;
    }

    /**
     * Get descDireccion
     *
     * @return string 
     */
    public function getDescDireccion()
    {
        return $this->descDireccion;
    }

    /**
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return RhUnidadesOrganizativas
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
     * Set gruponomina
     *
     * @param string $gruponomina
     * @return RhUnidadesOrganizativas
     */
    public function setGruponomina($gruponomina)
    {
        $this->gruponomina = $gruponomina;

        return $this;
    }

    /**
     * Get gruponomina
     *
     * @return string 
     */
    public function getGruponomina()
    {
        return $this->gruponomina;
    }

    /**
     * Set grupodisciplinalab
     *
     * @param string $grupodisciplinalab
     * @return RhUnidadesOrganizativas
     */
    public function setGrupodisciplinalab($grupodisciplinalab)
    {
        $this->grupodisciplinalab = $grupodisciplinalab;

        return $this;
    }

    /**
     * Get grupodisciplinalab
     *
     * @return string 
     */
    public function getGrupodisciplinalab()
    {
        return $this->grupodisciplinalab;
    }

    /**
     * Set codgrpsendrec
     *
     * @param string $codgrpsendrec
     * @return RhUnidadesOrganizativas
     */
    public function setCodgrpsendrec($codgrpsendrec)
    {
        $this->codgrpsendrec = $codgrpsendrec;

        return $this;
    }

    /**
     * Get codgrpsendrec
     *
     * @return string 
     */
    public function getCodgrpsendrec()
    {
        return $this->codgrpsendrec;
    }

    /**
     * Set idArea
     *
     * @param string $idArea
     * @return RhUnidadesOrganizativas
     */
    public function setIdArea($idArea)
    {
        $this->idArea = $idArea;

        return $this;
    }

    /**
     * Get idArea
     *
     * @return string 
     */
    public function getIdArea()
    {
        return $this->idArea;
    }

    /**
     * Set nivelpadre
     *
     * @param integer $nivelpadre
     * @return RhUnidadesOrganizativas
     */
    public function setNivelpadre($nivelpadre)
    {
        $this->nivelpadre = $nivelpadre;

        return $this;
    }

    /**
     * Get nivelpadre
     *
     * @return integer 
     */
    public function getNivelpadre()
    {
        return $this->nivelpadre;
    }

    /**
     * Set idDireccionpadre
     *
     * @param string $idDireccionpadre
     * @return RhUnidadesOrganizativas
     */
    public function setIdDireccionpadre($idDireccionpadre)
    {
        $this->idDireccionpadre = $idDireccionpadre;

        return $this;
    }

    /**
     * Get idDireccionpadre
     *
     * @return string 
     */
    public function getIdDireccionpadre()
    {
        return $this->idDireccionpadre;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return RhUnidadesOrganizativas
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     * @return RhUnidadesOrganizativas
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
     * Set nota
     *
     * @param string $nota
     * @return RhUnidadesOrganizativas
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
     * Set baja
     *
     * @param boolean $baja
     * @return RhUnidadesOrganizativas
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
     * Set idProvincia
     *
     * @param string $idProvincia
     * @return RhUnidadesOrganizativas
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
     * @return RhUnidadesOrganizativas
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
}
