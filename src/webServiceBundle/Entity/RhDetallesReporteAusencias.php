<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteAusencias
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Ausencias", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Ausencias", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteAusencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     */
    private $tipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=152, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave", type="string", length=5, nullable=false)
     */
    private $idClave;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $dias;

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
     * @ORM\Column(name="Deducible", type="boolean", nullable=false)
     */
    private $deducible;

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
     * @var boolean
     *
     * @ORM\Column(name="Prenomina_Hrs", type="boolean", nullable=false)
     */
    private $prenominaHrs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Suma_Reporte_Ausencia", type="boolean", nullable=false)
     */
    private $sumaReporteAusencia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AfectaPromTrabajTot", type="boolean", nullable=false)
     */
    private $afectapromtrabajtot;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

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
     * @ORM\Column(name="Origen", type="smallint", nullable=false)
     */
    private $origen;



    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return RhDetallesReporteAusencias
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

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
     * Set ano
     *
     * @param integer $ano
     * @return RhDetallesReporteAusencias
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return RhDetallesReporteAusencias
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set tipoPago
     *
     * @param integer $tipoPago
     * @return RhDetallesReporteAusencias
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
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhDetallesReporteAusencias
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
     * Set nombre
     *
     * @param string $nombre
     * @return RhDetallesReporteAusencias
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
     * Set idClave
     *
     * @param string $idClave
     * @return RhDetallesReporteAusencias
     */
    public function setIdClave($idClave)
    {
        $this->idClave = $idClave;

        return $this;
    }

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
     * Set dias
     *
     * @param string $dias
     * @return RhDetallesReporteAusencias
     */
    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

    /**
     * Get dias
     *
     * @return string 
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set porciento
     *
     * @param string $porciento
     * @return RhDetallesReporteAusencias
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
     * @return RhDetallesReporteAusencias
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
     * Set deducible
     *
     * @param boolean $deducible
     * @return RhDetallesReporteAusencias
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
     * Set afectaSubsidio
     *
     * @param boolean $afectaSubsidio
     * @return RhDetallesReporteAusencias
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
     * @return RhDetallesReporteAusencias
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
     * @return RhDetallesReporteAusencias
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
     * @return RhDetallesReporteAusencias
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
     * @return RhDetallesReporteAusencias
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
     * @return RhDetallesReporteAusencias
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
     * @return RhDetallesReporteAusencias
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
     * Set prenominaHrs
     *
     * @param boolean $prenominaHrs
     * @return RhDetallesReporteAusencias
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

    /**
     * Set sumaReporteAusencia
     *
     * @param boolean $sumaReporteAusencia
     * @return RhDetallesReporteAusencias
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
     * Set afectapromtrabajtot
     *
     * @param boolean $afectapromtrabajtot
     * @return RhDetallesReporteAusencias
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
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhDetallesReporteAusencias
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
     * Set nivel
     *
     * @param integer $nivel
     * @return RhDetallesReporteAusencias
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
     * @return RhDetallesReporteAusencias
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
     * Set origen
     *
     * @param integer $origen
     * @return RhDetallesReporteAusencias
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return integer 
     */
    public function getOrigen()
    {
        return $this->origen;
    }
}
