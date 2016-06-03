<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoAlltotales
 *
 * @ORM\Table(name="Estado_ALLTotales")
 * @ORM\Entity
 */
class EstadoAlltotales
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cuenta", type="string", length=22, nullable=true)
     */
    private $idCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cuenta", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $descCuenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Ini", type="integer", nullable=true)
     */
    private $saldoIni;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tot_Debe", type="integer", nullable=true)
     */
    private $totDebe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tot_Haber", type="integer", nullable=true)
     */
    private $totHaber;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Fin", type="integer", nullable=true)
     */
    private $saldoFin;

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
     * @return EstadoAlltotales
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
     * Get descCuenta
     *
     * @return string 
     */
    public function getDescCuenta()
    {
        return $this->descCuenta;
    }

    /**
     * Set saldoIni
     *
     * @param integer $saldoIni
     * @return EstadoAlltotales
     */
    public function setSaldoIni($saldoIni)
    {
        $this->saldoIni = $saldoIni;

        return $this;
    }

    /**
     * Get saldoIni
     *
     * @return integer 
     */
    public function getSaldoIni()
    {
        return $this->saldoIni;
    }

    /**
     * Set totDebe
     *
     * @param integer $totDebe
     * @return EstadoAlltotales
     */
    public function setTotDebe($totDebe)
    {
        $this->totDebe = $totDebe;

        return $this;
    }

    /**
     * Get totDebe
     *
     * @return integer 
     */
    public function getTotDebe()
    {
        return $this->totDebe;
    }

    /**
     * Set totHaber
     *
     * @param integer $totHaber
     * @return EstadoAlltotales
     */
    public function setTotHaber($totHaber)
    {
        $this->totHaber = $totHaber;

        return $this;
    }

    /**
     * Get totHaber
     *
     * @return integer 
     */
    public function getTotHaber()
    {
        return $this->totHaber;
    }

    /**
     * Set saldoFin
     *
     * @param integer $saldoFin
     * @return EstadoAlltotales
     */
    public function setSaldoFin($saldoFin)
    {
        $this->saldoFin = $saldoFin;

        return $this;
    }

    /**
     * Get saldoFin
     *
     * @return integer 
     */
    public function getSaldoFin()
    {
        return $this->saldoFin;
    }

    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return EstadoAlltotales
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
