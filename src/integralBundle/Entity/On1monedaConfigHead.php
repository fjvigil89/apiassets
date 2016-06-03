<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * On1monedaConfigHead
 *
 * @ORM\Table(name="ON_1Moneda_Config_Head")
 * @ORM\Entity
 */
class On1monedaConfigHead
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tipoMoneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Calculo", type="smallint", nullable=false)
     */
    private $tipoCalculo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cuenta", type="string", length=50, nullable=false)
     */
    private $idCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cuenta", type="string", length=100, nullable=false)
     */
    private $descCuenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tasa", type="integer", nullable=false)
     */
    private $tasa;

    /**
     * @var integer
     *
     * @ORM\Column(name="IRPM", type="integer", nullable=false)
     */
    private $irpm;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Compro", type="integer", nullable=false)
     */
    private $contadorCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro", type="smallint", nullable=false)
     */
    private $anoCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Compro", type="smallint", nullable=false)
     */
    private $mesCompro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AgrupacionRef", type="string", length=5, nullable=false)
     */
    private $idAgrupacionref;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Compro", type="datetime", nullable=false)
     */
    private $fechaCompro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Apertura_Contable", type="boolean", nullable=false)
     */
    private $aperturaContable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Apertura_FIN_Unificacion", type="boolean", nullable=false)
     */
    private $aperturaFinUnificacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Auditoria_OK", type="boolean", nullable=false)
     */
    private $auditoriaOk;



    /**
     * Get tipoMoneda
     *
     * @return integer 
     */
    public function getTipoMoneda()
    {
        return $this->tipoMoneda;
    }

    /**
     * Set tipoCalculo
     *
     * @param integer $tipoCalculo
     * @return On1monedaConfigHead
     */
    public function setTipoCalculo($tipoCalculo)
    {
        $this->tipoCalculo = $tipoCalculo;

        return $this;
    }

    /**
     * Get tipoCalculo
     *
     * @return integer 
     */
    public function getTipoCalculo()
    {
        return $this->tipoCalculo;
    }

    /**
     * Set idCuenta
     *
     * @param string $idCuenta
     * @return On1monedaConfigHead
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
     * Set descCuenta
     *
     * @param string $descCuenta
     * @return On1monedaConfigHead
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
     * Set tasa
     *
     * @param integer $tasa
     * @return On1monedaConfigHead
     */
    public function setTasa($tasa)
    {
        $this->tasa = $tasa;

        return $this;
    }

    /**
     * Get tasa
     *
     * @return integer 
     */
    public function getTasa()
    {
        return $this->tasa;
    }

    /**
     * Set irpm
     *
     * @param integer $irpm
     * @return On1monedaConfigHead
     */
    public function setIrpm($irpm)
    {
        $this->irpm = $irpm;

        return $this;
    }

    /**
     * Get irpm
     *
     * @return integer 
     */
    public function getIrpm()
    {
        return $this->irpm;
    }

    /**
     * Set contadorCompro
     *
     * @param integer $contadorCompro
     * @return On1monedaConfigHead
     */
    public function setContadorCompro($contadorCompro)
    {
        $this->contadorCompro = $contadorCompro;

        return $this;
    }

    /**
     * Get contadorCompro
     *
     * @return integer 
     */
    public function getContadorCompro()
    {
        return $this->contadorCompro;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return On1monedaConfigHead
     */
    public function setIdCompro($idCompro)
    {
        $this->idCompro = $idCompro;

        return $this;
    }

    /**
     * Get idCompro
     *
     * @return integer 
     */
    public function getIdCompro()
    {
        return $this->idCompro;
    }

    /**
     * Set anoCompro
     *
     * @param integer $anoCompro
     * @return On1monedaConfigHead
     */
    public function setAnoCompro($anoCompro)
    {
        $this->anoCompro = $anoCompro;

        return $this;
    }

    /**
     * Get anoCompro
     *
     * @return integer 
     */
    public function getAnoCompro()
    {
        return $this->anoCompro;
    }

    /**
     * Set mesCompro
     *
     * @param integer $mesCompro
     * @return On1monedaConfigHead
     */
    public function setMesCompro($mesCompro)
    {
        $this->mesCompro = $mesCompro;

        return $this;
    }

    /**
     * Get mesCompro
     *
     * @return integer 
     */
    public function getMesCompro()
    {
        return $this->mesCompro;
    }

    /**
     * Set idAgrupacionref
     *
     * @param string $idAgrupacionref
     * @return On1monedaConfigHead
     */
    public function setIdAgrupacionref($idAgrupacionref)
    {
        $this->idAgrupacionref = $idAgrupacionref;

        return $this;
    }

    /**
     * Get idAgrupacionref
     *
     * @return string 
     */
    public function getIdAgrupacionref()
    {
        return $this->idAgrupacionref;
    }

    /**
     * Set fechaCompro
     *
     * @param \DateTime $fechaCompro
     * @return On1monedaConfigHead
     */
    public function setFechaCompro($fechaCompro)
    {
        $this->fechaCompro = $fechaCompro;

        return $this;
    }

    /**
     * Get fechaCompro
     *
     * @return \DateTime 
     */
    public function getFechaCompro()
    {
        return $this->fechaCompro;
    }

    /**
     * Set aperturaContable
     *
     * @param boolean $aperturaContable
     * @return On1monedaConfigHead
     */
    public function setAperturaContable($aperturaContable)
    {
        $this->aperturaContable = $aperturaContable;

        return $this;
    }

    /**
     * Get aperturaContable
     *
     * @return boolean 
     */
    public function getAperturaContable()
    {
        return $this->aperturaContable;
    }

    /**
     * Set aperturaFinUnificacion
     *
     * @param boolean $aperturaFinUnificacion
     * @return On1monedaConfigHead
     */
    public function setAperturaFinUnificacion($aperturaFinUnificacion)
    {
        $this->aperturaFinUnificacion = $aperturaFinUnificacion;

        return $this;
    }

    /**
     * Get aperturaFinUnificacion
     *
     * @return boolean 
     */
    public function getAperturaFinUnificacion()
    {
        return $this->aperturaFinUnificacion;
    }

    /**
     * Set auditoriaOk
     *
     * @param boolean $auditoriaOk
     * @return On1monedaConfigHead
     */
    public function setAuditoriaOk($auditoriaOk)
    {
        $this->auditoriaOk = $auditoriaOk;

        return $this;
    }

    /**
     * Get auditoriaOk
     *
     * @return boolean 
     */
    public function getAuditoriaOk()
    {
        return $this->auditoriaOk;
    }
}
