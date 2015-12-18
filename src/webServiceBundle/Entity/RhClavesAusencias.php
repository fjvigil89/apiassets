<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhClavesAusencias
 *
 * @ORM\Table(name="RH_Claves_Ausencias")
 * @ORM\Entity
 */
class RhClavesAusencias
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClave;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clave", type="string", length=50, nullable=false)
     */
    private $descClave;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Deducible", type="boolean", nullable=false)
     */
    private $deducible;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porciento;

    /**
     * @var integer
     *
     * @ORM\Column(name="A_pagar_por", type="smallint", nullable=false)
     */
    private $aPagarPor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Subsidio", type="boolean", nullable=false)
     */
    private $afectaSubsidio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Vacaciones", type="boolean", nullable=false)
     */
    private $afectaVacaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Vacaciones_Imp", type="boolean", nullable=false)
     */
    private $afectaVacacionesImp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_SNC_225", type="boolean", nullable=false)
     */
    private $afectaSnc225;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_SNC_225_Imp", type="boolean", nullable=false)
     */
    private $afectaSnc225Imp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Evaluacion_Tecnicos", type="boolean", nullable=false)
     */
    private $afectaEvaluacionTecnicos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Estimulo", type="boolean", nullable=false)
     */
    private $afectaEstimulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Suma_Reporte_Ausencia", type="boolean", nullable=false)
     */
    private $sumaReporteAusencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave_Externa", type="string", length=5, nullable=false)
     */
    private $idClaveExterna;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clave_Externa", type="string", length=100, nullable=false)
     */
    private $descClaveExterna;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AfectaPromTrabajTot", type="boolean", nullable=false)
     */
    private $afectapromtrabajtot;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodFondodeTiempo", type="smallint", nullable=false)
     */
    private $codfondodetiempo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Prenomina_Hrs", type="boolean", nullable=false)
     */
    private $prenominaHrs;



    /**
     * Get idClave
     *
     * @return string 
     */
    public function getIdClave()
    {
        return $this->idClave;
    }

    /**
     * Set descClave
     *
     * @param string $descClave
     * @return RhClavesAusencias
     */
    public function setDescClave($descClave)
    {
        $this->descClave = $descClave;

        return $this;
    }

    /**
     * Get descClave
     *
     * @return string 
     */
    public function getDescClave()
    {
        return $this->descClave;
    }

    /**
     * Set deducible
     *
     * @param boolean $deducible
     * @return RhClavesAusencias
     */
    public function setDeducible($deducible)
    {
        $this->deducible = $deducible;

        return $this;
    }

    /**
     * Get deducible
     *
     * @return boolean 
     */
    public function getDeducible()
    {
        return $this->deducible;
    }

    /**
     * Set porciento
     *
     * @param string $porciento
     * @return RhClavesAusencias
     */
    public function setPorciento($porciento)
    {
        $this->porciento = $porciento;

        return $this;
    }

    /**
     * Get porciento
     *
     * @return string 
     */
    public function getPorciento()
    {
        return $this->porciento;
    }

    /**
     * Set aPagarPor
     *
     * @param integer $aPagarPor
     * @return RhClavesAusencias
     */
    public function setAPagarPor($aPagarPor)
    {
        $this->aPagarPor = $aPagarPor;

        return $this;
    }

    /**
     * Get aPagarPor
     *
     * @return integer 
     */
    public function getAPagarPor()
    {
        return $this->aPagarPor;
    }

    /**
     * Set afectaSubsidio
     *
     * @param boolean $afectaSubsidio
     * @return RhClavesAusencias
     */
    public function setAfectaSubsidio($afectaSubsidio)
    {
        $this->afectaSubsidio = $afectaSubsidio;

        return $this;
    }

    /**
     * Get afectaSubsidio
     *
     * @return boolean 
     */
    public function getAfectaSubsidio()
    {
        return $this->afectaSubsidio;
    }

    /**
     * Set afectaVacaciones
     *
     * @param boolean $afectaVacaciones
     * @return RhClavesAusencias
     */
    public function setAfectaVacaciones($afectaVacaciones)
    {
        $this->afectaVacaciones = $afectaVacaciones;

        return $this;
    }

    /**
     * Get afectaVacaciones
     *
     * @return boolean 
     */
    public function getAfectaVacaciones()
    {
        return $this->afectaVacaciones;
    }

    /**
     * Set afectaVacacionesImp
     *
     * @param boolean $afectaVacacionesImp
     * @return RhClavesAusencias
     */
    public function setAfectaVacacionesImp($afectaVacacionesImp)
    {
        $this->afectaVacacionesImp = $afectaVacacionesImp;

        return $this;
    }

    /**
     * Get afectaVacacionesImp
     *
     * @return boolean 
     */
    public function getAfectaVacacionesImp()
    {
        return $this->afectaVacacionesImp;
    }

    /**
     * Set afectaSnc225
     *
     * @param boolean $afectaSnc225
     * @return RhClavesAusencias
     */
    public function setAfectaSnc225($afectaSnc225)
    {
        $this->afectaSnc225 = $afectaSnc225;

        return $this;
    }

    /**
     * Get afectaSnc225
     *
     * @return boolean 
     */
    public function getAfectaSnc225()
    {
        return $this->afectaSnc225;
    }

    /**
     * Set afectaSnc225Imp
     *
     * @param boolean $afectaSnc225Imp
     * @return RhClavesAusencias
     */
    public function setAfectaSnc225Imp($afectaSnc225Imp)
    {
        $this->afectaSnc225Imp = $afectaSnc225Imp;

        return $this;
    }

    /**
     * Get afectaSnc225Imp
     *
     * @return boolean 
     */
    public function getAfectaSnc225Imp()
    {
        return $this->afectaSnc225Imp;
    }

    /**
     * Set afectaEvaluacionTecnicos
     *
     * @param boolean $afectaEvaluacionTecnicos
     * @return RhClavesAusencias
     */
    public function setAfectaEvaluacionTecnicos($afectaEvaluacionTecnicos)
    {
        $this->afectaEvaluacionTecnicos = $afectaEvaluacionTecnicos;

        return $this;
    }

    /**
     * Get afectaEvaluacionTecnicos
     *
     * @return boolean 
     */
    public function getAfectaEvaluacionTecnicos()
    {
        return $this->afectaEvaluacionTecnicos;
    }

    /**
     * Set afectaEstimulo
     *
     * @param boolean $afectaEstimulo
     * @return RhClavesAusencias
     */
    public function setAfectaEstimulo($afectaEstimulo)
    {
        $this->afectaEstimulo = $afectaEstimulo;

        return $this;
    }

    /**
     * Get afectaEstimulo
     *
     * @return boolean 
     */
    public function getAfectaEstimulo()
    {
        return $this->afectaEstimulo;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhClavesAusencias
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return integer 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set sumaReporteAusencia
     *
     * @param boolean $sumaReporteAusencia
     * @return RhClavesAusencias
     */
    public function setSumaReporteAusencia($sumaReporteAusencia)
    {
        $this->sumaReporteAusencia = $sumaReporteAusencia;

        return $this;
    }

    /**
     * Get sumaReporteAusencia
     *
     * @return boolean 
     */
    public function getSumaReporteAusencia()
    {
        return $this->sumaReporteAusencia;
    }

    /**
     * Set idClaveExterna
     *
     * @param string $idClaveExterna
     * @return RhClavesAusencias
     */
    public function setIdClaveExterna($idClaveExterna)
    {
        $this->idClaveExterna = $idClaveExterna;

        return $this;
    }

    /**
     * Get idClaveExterna
     *
     * @return string 
     */
    public function getIdClaveExterna()
    {
        return $this->idClaveExterna;
    }

    /**
     * Set descClaveExterna
     *
     * @param string $descClaveExterna
     * @return RhClavesAusencias
     */
    public function setDescClaveExterna($descClaveExterna)
    {
        $this->descClaveExterna = $descClaveExterna;

        return $this;
    }

    /**
     * Get descClaveExterna
     *
     * @return string 
     */
    public function getDescClaveExterna()
    {
        return $this->descClaveExterna;
    }

    /**
     * Set afectapromtrabajtot
     *
     * @param boolean $afectapromtrabajtot
     * @return RhClavesAusencias
     */
    public function setAfectapromtrabajtot($afectapromtrabajtot)
    {
        $this->afectapromtrabajtot = $afectapromtrabajtot;

        return $this;
    }

    /**
     * Get afectapromtrabajtot
     *
     * @return boolean 
     */
    public function getAfectapromtrabajtot()
    {
        return $this->afectapromtrabajtot;
    }

    /**
     * Set codfondodetiempo
     *
     * @param integer $codfondodetiempo
     * @return RhClavesAusencias
     */
    public function setCodfondodetiempo($codfondodetiempo)
    {
        $this->codfondodetiempo = $codfondodetiempo;

        return $this;
    }

    /**
     * Get codfondodetiempo
     *
     * @return integer 
     */
    public function getCodfondodetiempo()
    {
        return $this->codfondodetiempo;
    }

    /**
     * Set prenominaHrs
     *
     * @param boolean $prenominaHrs
     * @return RhClavesAusencias
     */
    public function setPrenominaHrs($prenominaHrs)
    {
        $this->prenominaHrs = $prenominaHrs;

        return $this;
    }

    /**
     * Get prenominaHrs
     *
     * @return boolean 
     */
    public function getPrenominaHrs()
    {
        return $this->prenominaHrs;
    }
}
