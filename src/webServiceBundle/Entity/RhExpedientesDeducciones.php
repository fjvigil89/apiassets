<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhExpedientesDeducciones
 *
 * @ORM\Table(name="RH_Expedientes_Deducciones")
 * @ORM\Entity
 */
class RhExpedientesDeducciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente_Deduccion", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExpedienteDeduccion;

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
     * @ORM\Column(name="Id_Deduccion", type="string", length=5, nullable=false)
     */
    private $idDeduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Deduccion", type="string", length=50, nullable=false)
     */
    private $descDeduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Beneficiario", type="string", length=50, nullable=false)
     */
    private $beneficiario;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion_Beneficiario", type="string", length=60, nullable=false)
     */
    private $direccionBeneficiario;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=60, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Deduccion", type="integer", nullable=false)
     */
    private $valorDeduccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Inicio", type="integer", nullable=false)
     */
    private $saldoInicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Actual", type="integer", nullable=false)
     */
    private $saldoActual;

    /**
     * @var integer
     *
     * @ORM\Column(name="Recargo", type="integer", nullable=false)
     */
    private $recargo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Prioridad", type="smallint", nullable=false)
     */
    private $prioridad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Primer_Pago", type="boolean", nullable=false)
     */
    private $primerPago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Segundo_Pago", type="boolean", nullable=false)
     */
    private $segundoPago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Activa", type="boolean", nullable=false)
     */
    private $activa;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescAutom", type="smallint", nullable=false)
     */
    private $descautom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca", type="boolean", nullable=false)
     */
    private $marca;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Deduccion1", type="integer", nullable=false)
     */
    private $valorDeduccion1;



    /**
     * Get idExpedienteDeduccion
     *
     * @return string 
     */
    public function getIdExpedienteDeduccion()
    {
        return $this->idExpedienteDeduccion;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhExpedientesDeducciones
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
     * @return RhExpedientesDeducciones
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
     * Set idDeduccion
     *
     * @param string $idDeduccion
     * @return RhExpedientesDeducciones
     */
    public function setIdDeduccion($idDeduccion)
    {
        $this->idDeduccion = $idDeduccion;

        return $this;
    }

    /**
     * Get idDeduccion
     *
     * @return string 
     */
    public function getIdDeduccion()
    {
        return $this->idDeduccion;
    }

    /**
     * Set descDeduccion
     *
     * @param string $descDeduccion
     * @return RhExpedientesDeducciones
     */
    public function setDescDeduccion($descDeduccion)
    {
        $this->descDeduccion = $descDeduccion;

        return $this;
    }

    /**
     * Get descDeduccion
     *
     * @return string 
     */
    public function getDescDeduccion()
    {
        return $this->descDeduccion;
    }

    /**
     * Set beneficiario
     *
     * @param string $beneficiario
     * @return RhExpedientesDeducciones
     */
    public function setBeneficiario($beneficiario)
    {
        $this->beneficiario = $beneficiario;

        return $this;
    }

    /**
     * Get beneficiario
     *
     * @return string 
     */
    public function getBeneficiario()
    {
        return $this->beneficiario;
    }

    /**
     * Set direccionBeneficiario
     *
     * @param string $direccionBeneficiario
     * @return RhExpedientesDeducciones
     */
    public function setDireccionBeneficiario($direccionBeneficiario)
    {
        $this->direccionBeneficiario = $direccionBeneficiario;

        return $this;
    }

    /**
     * Get direccionBeneficiario
     *
     * @return string 
     */
    public function getDireccionBeneficiario()
    {
        return $this->direccionBeneficiario;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return RhExpedientesDeducciones
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
     * Set valorDeduccion
     *
     * @param integer $valorDeduccion
     * @return RhExpedientesDeducciones
     */
    public function setValorDeduccion($valorDeduccion)
    {
        $this->valorDeduccion = $valorDeduccion;

        return $this;
    }

    /**
     * Get valorDeduccion
     *
     * @return integer 
     */
    public function getValorDeduccion()
    {
        return $this->valorDeduccion;
    }

    /**
     * Set saldoInicio
     *
     * @param integer $saldoInicio
     * @return RhExpedientesDeducciones
     */
    public function setSaldoInicio($saldoInicio)
    {
        $this->saldoInicio = $saldoInicio;

        return $this;
    }

    /**
     * Get saldoInicio
     *
     * @return integer 
     */
    public function getSaldoInicio()
    {
        return $this->saldoInicio;
    }

    /**
     * Set saldoActual
     *
     * @param integer $saldoActual
     * @return RhExpedientesDeducciones
     */
    public function setSaldoActual($saldoActual)
    {
        $this->saldoActual = $saldoActual;

        return $this;
    }

    /**
     * Get saldoActual
     *
     * @return integer 
     */
    public function getSaldoActual()
    {
        return $this->saldoActual;
    }

    /**
     * Set recargo
     *
     * @param integer $recargo
     * @return RhExpedientesDeducciones
     */
    public function setRecargo($recargo)
    {
        $this->recargo = $recargo;

        return $this;
    }

    /**
     * Get recargo
     *
     * @return integer 
     */
    public function getRecargo()
    {
        return $this->recargo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return RhExpedientesDeducciones
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return RhExpedientesDeducciones
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set primerPago
     *
     * @param boolean $primerPago
     * @return RhExpedientesDeducciones
     */
    public function setPrimerPago($primerPago)
    {
        $this->primerPago = $primerPago;

        return $this;
    }

    /**
     * Get primerPago
     *
     * @return boolean 
     */
    public function getPrimerPago()
    {
        return $this->primerPago;
    }

    /**
     * Set segundoPago
     *
     * @param boolean $segundoPago
     * @return RhExpedientesDeducciones
     */
    public function setSegundoPago($segundoPago)
    {
        $this->segundoPago = $segundoPago;

        return $this;
    }

    /**
     * Get segundoPago
     *
     * @return boolean 
     */
    public function getSegundoPago()
    {
        return $this->segundoPago;
    }

    /**
     * Set activa
     *
     * @param boolean $activa
     * @return RhExpedientesDeducciones
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return boolean 
     */
    public function getActiva()
    {
        return $this->activa;
    }

    /**
     * Set descautom
     *
     * @param integer $descautom
     * @return RhExpedientesDeducciones
     */
    public function setDescautom($descautom)
    {
        $this->descautom = $descautom;

        return $this;
    }

    /**
     * Get descautom
     *
     * @return integer 
     */
    public function getDescautom()
    {
        return $this->descautom;
    }

    /**
     * Set marca
     *
     * @param boolean $marca
     * @return RhExpedientesDeducciones
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return boolean 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set valorDeduccion1
     *
     * @param integer $valorDeduccion1
     * @return RhExpedientesDeducciones
     */
    public function setValorDeduccion1($valorDeduccion1)
    {
        $this->valorDeduccion1 = $valorDeduccion1;

        return $this;
    }

    /**
     * Get valorDeduccion1
     *
     * @return integer 
     */
    public function getValorDeduccion1()
    {
        return $this->valorDeduccion1;
    }
}
