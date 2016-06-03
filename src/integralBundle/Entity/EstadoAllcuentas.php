<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoAllcuentas
 *
 * @ORM\Table(name="Estado_ALLCuentas")
 * @ORM\Entity
 */
class EstadoAllcuentas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cuenta", type="string", length=22, nullable=true)
     */
    private $idCuenta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Transaccion", type="string", length=50, nullable=true)
     */
    private $transaccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=70, nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="Debe", type="integer", nullable=true)
     */
    private $debe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Haber", type="integer", nullable=true)
     */
    private $haber;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo", type="integer", nullable=true)
     */
    private $saldo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Concepto", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $descConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=true)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=true)
     */
    private $contador1;



    /**
     * Set idCuenta
     *
     * @param string $idCuenta
     * @return EstadoAllcuentas
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return EstadoAllcuentas
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
     * Set transaccion
     *
     * @param string $transaccion
     * @return EstadoAllcuentas
     */
    public function setTransaccion($transaccion)
    {
        $this->transaccion = $transaccion;

        return $this;
    }

    /**
     * Get transaccion
     *
     * @return string 
     */
    public function getTransaccion()
    {
        return $this->transaccion;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return EstadoAllcuentas
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set debe
     *
     * @param integer $debe
     * @return EstadoAllcuentas
     */
    public function setDebe($debe)
    {
        $this->debe = $debe;

        return $this;
    }

    /**
     * Get debe
     *
     * @return integer 
     */
    public function getDebe()
    {
        return $this->debe;
    }

    /**
     * Set haber
     *
     * @param integer $haber
     * @return EstadoAllcuentas
     */
    public function setHaber($haber)
    {
        $this->haber = $haber;

        return $this;
    }

    /**
     * Get haber
     *
     * @return integer 
     */
    public function getHaber()
    {
        return $this->haber;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return EstadoAllcuentas
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
     * Get descConcepto
     *
     * @return string 
     */
    public function getDescConcepto()
    {
        return $this->descConcepto;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return EstadoAllcuentas
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
     * Set contador1
     *
     * @param integer $contador1
     * @return EstadoAllcuentas
     */
    public function setContador1($contador1)
    {
        $this->contador1 = $contador1;

        return $this;
    }

    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }
}
