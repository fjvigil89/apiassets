<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuentasAuto
 *
 * @ORM\Table(name="Cuentas_Auto", indexes={@ORM\Index(name="Clu_Cuenta_Auto", columns={"CTA", "SubCta", "Analisis", "SubAnalisis", "Epigrafe", "Partida", "Copiar"})})
 * @ORM\Entity
 */
class CuentasAuto
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
     * @ORM\Column(name="Id_Cuenta", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="SubClasific", type="string", length=2, nullable=false)
     */
    private $subclasific;

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
     * @ORM\Column(name="De_MB", type="boolean", nullable=false)
     */
    private $deMb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Copiar", type="boolean", nullable=false)
     */
    private $copiar;



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
     * @return CuentasAuto
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
     * @return CuentasAuto
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
     * @return CuentasAuto
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
     * @return CuentasAuto
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
     * @return CuentasAuto
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
     * @return CuentasAuto
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
     * @return CuentasAuto
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
     * @return CuentasAuto
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
     * @return CuentasAuto
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
     * @return CuentasAuto
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
     * Set subclasific
     *
     * @param string $subclasific
     * @return CuentasAuto
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
     * Set ultimoNivel
     *
     * @param string $ultimoNivel
     * @return CuentasAuto
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
     * @return CuentasAuto
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
     * Set naturaleza
     *
     * @param boolean $naturaleza
     * @return CuentasAuto
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
     * @return CuentasAuto
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
     * Set deMb
     *
     * @param boolean $deMb
     * @return CuentasAuto
     */
    public function setDeMb($deMb)
    {
        $this->deMb = $deMb;

        return $this;
    }

    /**
     * Get deMb
     *
     * @return boolean 
     */
    public function getDeMb()
    {
        return $this->deMb;
    }

    /**
     * Set copiar
     *
     * @param boolean $copiar
     * @return CuentasAuto
     */
    public function setCopiar($copiar)
    {
        $this->copiar = $copiar;

        return $this;
    }

    /**
     * Get copiar
     *
     * @return boolean 
     */
    public function getCopiar()
    {
        return $this->copiar;
    }
}
