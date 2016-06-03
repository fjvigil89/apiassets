<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuadreAfijosConfig
 *
 * @ORM\Table(name="Cuadre_AFijos_Config")
 * @ORM\Entity
 */
class CuadreAfijosConfig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var string
     *
     * @ORM\Column(name="Documento", type="string", length=1, nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Especif_AFijo", type="string", length=15, nullable=false)
     */
    private $idEspecifAfijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_GrupoCC", type="string", length=10, nullable=false)
     */
    private $idGrupocc;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     */
    private $cta;

    /**
     * @var integer
     *
     * @ORM\Column(name="De_MB", type="smallint", nullable=false)
     */
    private $deMb;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta", type="string", length=20, nullable=false)
     */
    private $subcta;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis", type="string", length=20, nullable=false)
     */
    private $analisis;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis", type="string", length=20, nullable=false)
     */
    private $subanalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe", type="string", length=20, nullable=false)
     */
    private $epigrafe;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida", type="string", length=20, nullable=false)
     */
    private $partida;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Calcular", type="boolean", nullable=false)
     */
    private $calcular;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Cuenta", type="smallint", nullable=false)
     */
    private $tipoCuenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Grupo", type="integer", nullable=false)
     */
    private $grupo;



    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return CuadreAfijosConfig
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set idEspecifAfijo
     *
     * @param string $idEspecifAfijo
     * @return CuadreAfijosConfig
     */
    public function setIdEspecifAfijo($idEspecifAfijo)
    {
        $this->idEspecifAfijo = $idEspecifAfijo;

        return $this;
    }

    /**
     * Get idEspecifAfijo
     *
     * @return string 
     */
    public function getIdEspecifAfijo()
    {
        return $this->idEspecifAfijo;
    }

    /**
     * Set idGrupocc
     *
     * @param string $idGrupocc
     * @return CuadreAfijosConfig
     */
    public function setIdGrupocc($idGrupocc)
    {
        $this->idGrupocc = $idGrupocc;

        return $this;
    }

    /**
     * Get idGrupocc
     *
     * @return string 
     */
    public function getIdGrupocc()
    {
        return $this->idGrupocc;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return CuadreAfijosConfig
     */
    public function setCta($cta)
    {
        $this->cta = $cta;

        return $this;
    }

    /**
     * Get cta
     *
     * @return string 
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set deMb
     *
     * @param integer $deMb
     * @return CuadreAfijosConfig
     */
    public function setDeMb($deMb)
    {
        $this->deMb = $deMb;

        return $this;
    }

    /**
     * Get deMb
     *
     * @return integer 
     */
    public function getDeMb()
    {
        return $this->deMb;
    }

    /**
     * Set subcta
     *
     * @param string $subcta
     * @return CuadreAfijosConfig
     */
    public function setSubcta($subcta)
    {
        $this->subcta = $subcta;

        return $this;
    }

    /**
     * Get subcta
     *
     * @return string 
     */
    public function getSubcta()
    {
        return $this->subcta;
    }

    /**
     * Set analisis
     *
     * @param string $analisis
     * @return CuadreAfijosConfig
     */
    public function setAnalisis($analisis)
    {
        $this->analisis = $analisis;

        return $this;
    }

    /**
     * Get analisis
     *
     * @return string 
     */
    public function getAnalisis()
    {
        return $this->analisis;
    }

    /**
     * Set subanalisis
     *
     * @param string $subanalisis
     * @return CuadreAfijosConfig
     */
    public function setSubanalisis($subanalisis)
    {
        $this->subanalisis = $subanalisis;

        return $this;
    }

    /**
     * Get subanalisis
     *
     * @return string 
     */
    public function getSubanalisis()
    {
        return $this->subanalisis;
    }

    /**
     * Set epigrafe
     *
     * @param string $epigrafe
     * @return CuadreAfijosConfig
     */
    public function setEpigrafe($epigrafe)
    {
        $this->epigrafe = $epigrafe;

        return $this;
    }

    /**
     * Get epigrafe
     *
     * @return string 
     */
    public function getEpigrafe()
    {
        return $this->epigrafe;
    }

    /**
     * Set partida
     *
     * @param string $partida
     * @return CuadreAfijosConfig
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return string 
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * Set calcular
     *
     * @param boolean $calcular
     * @return CuadreAfijosConfig
     */
    public function setCalcular($calcular)
    {
        $this->calcular = $calcular;

        return $this;
    }

    /**
     * Get calcular
     *
     * @return boolean 
     */
    public function getCalcular()
    {
        return $this->calcular;
    }

    /**
     * Set tipoCuenta
     *
     * @param integer $tipoCuenta
     * @return CuadreAfijosConfig
     */
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;

        return $this;
    }

    /**
     * Get tipoCuenta
     *
     * @return integer 
     */
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    /**
     * Set grupo
     *
     * @param integer $grupo
     * @return CuadreAfijosConfig
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return integer 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
}
