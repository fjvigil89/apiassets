<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuenta
 *
 * @ORM\Table(name="Cuenta", indexes={@ORM\Index(name="PK_Cuenta", columns={"CTA", "SubCta", "Analisis", "SubAnalisis", "Epigrafe", "Partida"}), @ORM\Index(name="XI_IdCuenta", columns={"Id_Cuenta"}), @ORM\Index(name="XI4_Cont_Cuenta", columns={"Clasificacion", "SubClasific"}), @ORM\Index(name="XI5_Cuenta", columns={"Ultimo_Nivel"})})
 * @ORM\Entity
 */
class Cuenta
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
     * @ORM\Column(name="Id_Cuenta", type="string", length=80, nullable=false)
     */
    private $idCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="CTA", type="string", length=20, nullable=false)
     */
    private $cta;

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
     * @var string
     *
     * @ORM\Column(name="Desc_Cuenta", type="string", length=200, nullable=false)
     */
    private $descCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Nivel", type="string", length=2, nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Clasificacion", type="string", length=2, nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO", type="string", length=10, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Ultimo_Nivel", type="string", length=2, nullable=false)
     */
    private $ultimoNivel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="identificador", type="boolean", nullable=false)
     */
    private $identificador;

    /**
     * @var string
     *
     * @ORM\Column(name="SubClasific", type="string", length=2, nullable=false)
     */
    private $subclasific;

    /**
     * @var string
     *
     * @ORM\Column(name="Presupuesto", type="string", length=10, nullable=false)
     */
    private $presupuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Cuenta_Externo", type="string", length=20, nullable=false)
     */
    private $codCuentaExterno;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Ingles", type="string", length=200, nullable=false)
     */
    private $nombreIngles;

    /**
     * @var integer
     *
     * @ORM\Column(name="saldo", type="integer", nullable=false)
     */
    private $saldo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Naturaleza", type="boolean", nullable=false)
     */
    private $naturaleza;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Banco", type="boolean", nullable=false)
     */
    private $banco;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Descontinuada", type="boolean", nullable=false)
     */
    private $descontinuada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cuenta_deMB", type="smallint", nullable=false)
     */
    private $cuentaDemb;

    /**
     * @var string
     *
     * @ORM\Column(name="CTA_Corp", type="string", length=20, nullable=false)
     */
    private $ctaCorp;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta_Corp", type="string", length=20, nullable=false)
     */
    private $subctaCorp;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis_Corp", type="string", length=20, nullable=false)
     */
    private $analisisCorp;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis_Corp", type="string", length=20, nullable=false)
     */
    private $subanalisisCorp;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe_Corp", type="string", length=20, nullable=false)
     */
    private $epigrafeCorp;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida_Corp", type="string", length=20, nullable=false)
     */
    private $partidaCorp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Reguladora", type="boolean", nullable=false)
     */
    private $reguladora;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IncluirEn_AGastos", type="boolean", nullable=false)
     */
    private $incluirenAgastos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Enviar_Abierta", type="smallint", nullable=false)
     */
    private $enviarAbierta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Activ_Cuenta", type="smallint", nullable=false)
     */
    private $activCuenta;



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
     * Set idCuenta
     *
     * @param string $idCuenta
     * @return Cuenta
     */
    public function setIdCuenta($idCuenta)
    {
        $this->idCuenta = $idCuenta;

        return $this;
    }

    /**
     * Get idCuenta
     *
     * @return string 
     */
    public function getIdCuenta()
    {
        return $this->idCuenta;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return Cuenta
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
     * Set subcta
     *
     * @param string $subcta
     * @return Cuenta
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
     * @return Cuenta
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
     * @return Cuenta
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
     * @return Cuenta
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
     * @return Cuenta
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
     * Set descCuenta
     *
     * @param string $descCuenta
     * @return Cuenta
     */
    public function setDescCuenta($descCuenta)
    {
        $this->descCuenta = $descCuenta;

        return $this;
    }

    /**
     * Get descCuenta
     *
     * @return string 
     */
    public function getDescCuenta()
    {
        return $this->descCuenta;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     * @return Cuenta
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return Cuenta
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
     * Set tipo
     *
     * @param string $tipo
     * @return Cuenta
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set ultimoNivel
     *
     * @param string $ultimoNivel
     * @return Cuenta
     */
    public function setUltimoNivel($ultimoNivel)
    {
        $this->ultimoNivel = $ultimoNivel;

        return $this;
    }

    /**
     * Get ultimoNivel
     *
     * @return string 
     */
    public function getUltimoNivel()
    {
        return $this->ultimoNivel;
    }

    /**
     * Set identificador
     *
     * @param boolean $identificador
     * @return Cuenta
     */
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;

        return $this;
    }

    /**
     * Get identificador
     *
     * @return boolean 
     */
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Set subclasific
     *
     * @param string $subclasific
     * @return Cuenta
     */
    public function setSubclasific($subclasific)
    {
        $this->subclasific = $subclasific;

        return $this;
    }

    /**
     * Get subclasific
     *
     * @return string 
     */
    public function getSubclasific()
    {
        return $this->subclasific;
    }

    /**
     * Set presupuesto
     *
     * @param string $presupuesto
     * @return Cuenta
     */
    public function setPresupuesto($presupuesto)
    {
        $this->presupuesto = $presupuesto;

        return $this;
    }

    /**
     * Get presupuesto
     *
     * @return string 
     */
    public function getPresupuesto()
    {
        return $this->presupuesto;
    }

    /**
     * Set codCuentaExterno
     *
     * @param string $codCuentaExterno
     * @return Cuenta
     */
    public function setCodCuentaExterno($codCuentaExterno)
    {
        $this->codCuentaExterno = $codCuentaExterno;

        return $this;
    }

    /**
     * Get codCuentaExterno
     *
     * @return string 
     */
    public function getCodCuentaExterno()
    {
        return $this->codCuentaExterno;
    }

    /**
     * Set nombreIngles
     *
     * @param string $nombreIngles
     * @return Cuenta
     */
    public function setNombreIngles($nombreIngles)
    {
        $this->nombreIngles = $nombreIngles;

        return $this;
    }

    /**
     * Get nombreIngles
     *
     * @return string 
     */
    public function getNombreIngles()
    {
        return $this->nombreIngles;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return Cuenta
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return integer 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set naturaleza
     *
     * @param boolean $naturaleza
     * @return Cuenta
     */
    public function setNaturaleza($naturaleza)
    {
        $this->naturaleza = $naturaleza;

        return $this;
    }

    /**
     * Get naturaleza
     *
     * @return boolean 
     */
    public function getNaturaleza()
    {
        return $this->naturaleza;
    }

    /**
     * Set banco
     *
     * @param boolean $banco
     * @return Cuenta
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return boolean 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set descontinuada
     *
     * @param boolean $descontinuada
     * @return Cuenta
     */
    public function setDescontinuada($descontinuada)
    {
        $this->descontinuada = $descontinuada;

        return $this;
    }

    /**
     * Get descontinuada
     *
     * @return boolean 
     */
    public function getDescontinuada()
    {
        return $this->descontinuada;
    }

    /**
     * Set cuentaDemb
     *
     * @param integer $cuentaDemb
     * @return Cuenta
     */
    public function setCuentaDemb($cuentaDemb)
    {
        $this->cuentaDemb = $cuentaDemb;

        return $this;
    }

    /**
     * Get cuentaDemb
     *
     * @return integer 
     */
    public function getCuentaDemb()
    {
        return $this->cuentaDemb;
    }

    /**
     * Set ctaCorp
     *
     * @param string $ctaCorp
     * @return Cuenta
     */
    public function setCtaCorp($ctaCorp)
    {
        $this->ctaCorp = $ctaCorp;

        return $this;
    }

    /**
     * Get ctaCorp
     *
     * @return string 
     */
    public function getCtaCorp()
    {
        return $this->ctaCorp;
    }

    /**
     * Set subctaCorp
     *
     * @param string $subctaCorp
     * @return Cuenta
     */
    public function setSubctaCorp($subctaCorp)
    {
        $this->subctaCorp = $subctaCorp;

        return $this;
    }

    /**
     * Get subctaCorp
     *
     * @return string 
     */
    public function getSubctaCorp()
    {
        return $this->subctaCorp;
    }

    /**
     * Set analisisCorp
     *
     * @param string $analisisCorp
     * @return Cuenta
     */
    public function setAnalisisCorp($analisisCorp)
    {
        $this->analisisCorp = $analisisCorp;

        return $this;
    }

    /**
     * Get analisisCorp
     *
     * @return string 
     */
    public function getAnalisisCorp()
    {
        return $this->analisisCorp;
    }

    /**
     * Set subanalisisCorp
     *
     * @param string $subanalisisCorp
     * @return Cuenta
     */
    public function setSubanalisisCorp($subanalisisCorp)
    {
        $this->subanalisisCorp = $subanalisisCorp;

        return $this;
    }

    /**
     * Get subanalisisCorp
     *
     * @return string 
     */
    public function getSubanalisisCorp()
    {
        return $this->subanalisisCorp;
    }

    /**
     * Set epigrafeCorp
     *
     * @param string $epigrafeCorp
     * @return Cuenta
     */
    public function setEpigrafeCorp($epigrafeCorp)
    {
        $this->epigrafeCorp = $epigrafeCorp;

        return $this;
    }

    /**
     * Get epigrafeCorp
     *
     * @return string 
     */
    public function getEpigrafeCorp()
    {
        return $this->epigrafeCorp;
    }

    /**
     * Set partidaCorp
     *
     * @param string $partidaCorp
     * @return Cuenta
     */
    public function setPartidaCorp($partidaCorp)
    {
        $this->partidaCorp = $partidaCorp;

        return $this;
    }

    /**
     * Get partidaCorp
     *
     * @return string 
     */
    public function getPartidaCorp()
    {
        return $this->partidaCorp;
    }

    /**
     * Set reguladora
     *
     * @param boolean $reguladora
     * @return Cuenta
     */
    public function setReguladora($reguladora)
    {
        $this->reguladora = $reguladora;

        return $this;
    }

    /**
     * Get reguladora
     *
     * @return boolean 
     */
    public function getReguladora()
    {
        return $this->reguladora;
    }

    /**
     * Set incluirenAgastos
     *
     * @param boolean $incluirenAgastos
     * @return Cuenta
     */
    public function setIncluirenAgastos($incluirenAgastos)
    {
        $this->incluirenAgastos = $incluirenAgastos;

        return $this;
    }

    /**
     * Get incluirenAgastos
     *
     * @return boolean 
     */
    public function getIncluirenAgastos()
    {
        return $this->incluirenAgastos;
    }

    /**
     * Set enviarAbierta
     *
     * @param integer $enviarAbierta
     * @return Cuenta
     */
    public function setEnviarAbierta($enviarAbierta)
    {
        $this->enviarAbierta = $enviarAbierta;

        return $this;
    }

    /**
     * Get enviarAbierta
     *
     * @return integer 
     */
    public function getEnviarAbierta()
    {
        return $this->enviarAbierta;
    }

    /**
     * Set activCuenta
     *
     * @param integer $activCuenta
     * @return Cuenta
     */
    public function setActivCuenta($activCuenta)
    {
        $this->activCuenta = $activCuenta;

        return $this;
    }

    /**
     * Get activCuenta
     *
     * @return integer 
     */
    public function getActivCuenta()
    {
        return $this->activCuenta;
    }
}
