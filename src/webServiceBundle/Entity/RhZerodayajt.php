<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhZerodayajt
 *
 * @ORM\Table(name="RH_ZeroDayAjt")
 * @ORM\Entity
 */
class RhZerodayajt
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido_1", type="string", length=50, nullable=false)
     */
    private $apellido1;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido_2", type="string", length=50, nullable=false)
     */
    private $apellido2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Divisa", type="integer", nullable=false)
     */
    private $valorDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Divisa_CUP", type="integer", nullable=false)
     */
    private $valorDivisaCup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Comedor_CUC", type="boolean", nullable=false)
     */
    private $pagoComedorCuc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Tarifa", type="integer", nullable=false)
     */
    private $pagoComedorTarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Tarifa_CUP", type="integer", nullable=false)
     */
    private $pagoComedorTarifaCup;



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
     * @return RhZerodayajt
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
     * Set apellido1
     *
     * @param string $apellido1
     * @return RhZerodayajt
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get apellido1
     *
     * @return string 
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     * @return RhZerodayajt
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get apellido2
     *
     * @return string 
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set valorDivisa
     *
     * @param integer $valorDivisa
     * @return RhZerodayajt
     */
    public function setValorDivisa($valorDivisa)
    {
        $this->valorDivisa = $valorDivisa;

        return $this;
    }

    /**
     * Get valorDivisa
     *
     * @return integer 
     */
    public function getValorDivisa()
    {
        return $this->valorDivisa;
    }

    /**
     * Set valorDivisaCup
     *
     * @param integer $valorDivisaCup
     * @return RhZerodayajt
     */
    public function setValorDivisaCup($valorDivisaCup)
    {
        $this->valorDivisaCup = $valorDivisaCup;

        return $this;
    }

    /**
     * Get valorDivisaCup
     *
     * @return integer 
     */
    public function getValorDivisaCup()
    {
        return $this->valorDivisaCup;
    }

    /**
     * Set pagoComedorCuc
     *
     * @param boolean $pagoComedorCuc
     * @return RhZerodayajt
     */
    public function setPagoComedorCuc($pagoComedorCuc)
    {
        $this->pagoComedorCuc = $pagoComedorCuc;

        return $this;
    }

    /**
     * Get pagoComedorCuc
     *
     * @return boolean 
     */
    public function getPagoComedorCuc()
    {
        return $this->pagoComedorCuc;
    }

    /**
     * Set pagoComedorTarifa
     *
     * @param integer $pagoComedorTarifa
     * @return RhZerodayajt
     */
    public function setPagoComedorTarifa($pagoComedorTarifa)
    {
        $this->pagoComedorTarifa = $pagoComedorTarifa;

        return $this;
    }

    /**
     * Get pagoComedorTarifa
     *
     * @return integer 
     */
    public function getPagoComedorTarifa()
    {
        return $this->pagoComedorTarifa;
    }

    /**
     * Set pagoComedorTarifaCup
     *
     * @param integer $pagoComedorTarifaCup
     * @return RhZerodayajt
     */
    public function setPagoComedorTarifaCup($pagoComedorTarifaCup)
    {
        $this->pagoComedorTarifaCup = $pagoComedorTarifaCup;

        return $this;
    }

    /**
     * Get pagoComedorTarifaCup
     *
     * @return integer 
     */
    public function getPagoComedorTarifaCup()
    {
        return $this->pagoComedorTarifaCup;
    }
}
