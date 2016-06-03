<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormasPago
 *
 * @ORM\Table(name="Formas_Pago")
 * @ORM\Entity
 */
class FormasPago
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_FormaPago", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormapago;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_FormaPago", type="string", length=50, nullable=false)
     */
    private $descFormapago;

    /**
     * @var string
     *
     * @ORM\Column(name="DC_CTACOD", type="string", length=30, nullable=false)
     */
    private $dcCtacod;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cheque_Folio_Updt", type="boolean", nullable=false)
     */
    private $chequeFolioUpdt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Caja_Chica", type="boolean", nullable=false)
     */
    private $cajaChica;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo", type="smallint", nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo_Cobro", type="string", length=10, nullable=false)
     */
    private $idFondoCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo_Pago", type="string", length=10, nullable=false)
     */
    private $idFondoPago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Requiere_Desc", type="boolean", nullable=false)
     */
    private $requiereDesc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Efectivo_PVenta", type="boolean", nullable=false)
     */
    private $efectivoPventa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Requiere_Clave", type="boolean", nullable=false)
     */
    private $requiereClave;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Efectivo", type="integer", nullable=false)
     */
    private $consecEfectivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=8, nullable=false)
     */
    private $idClasificacion;



    /**
     * Get idFormapago
     *
     * @return string 
     */
    public function getIdFormapago()
    {
        return $this->idFormapago;
    }

    /**
     * Set descFormapago
     *
     * @param string $descFormapago
     * @return FormasPago
     */
    public function setDescFormapago($descFormapago)
    {
        $this->descFormapago = $descFormapago;

        return $this;
    }

    /**
     * Get descFormapago
     *
     * @return string 
     */
    public function getDescFormapago()
    {
        return $this->descFormapago;
    }

    /**
     * Set dcCtacod
     *
     * @param string $dcCtacod
     * @return FormasPago
     */
    public function setDcCtacod($dcCtacod)
    {
        $this->dcCtacod = $dcCtacod;

        return $this;
    }

    /**
     * Get dcCtacod
     *
     * @return string 
     */
    public function getDcCtacod()
    {
        return $this->dcCtacod;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return FormasPago
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
     * Set moneda
     *
     * @param string $moneda
     * @return FormasPago
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set chequeFolioUpdt
     *
     * @param boolean $chequeFolioUpdt
     * @return FormasPago
     */
    public function setChequeFolioUpdt($chequeFolioUpdt)
    {
        $this->chequeFolioUpdt = $chequeFolioUpdt;

        return $this;
    }

    /**
     * Get chequeFolioUpdt
     *
     * @return boolean 
     */
    public function getChequeFolioUpdt()
    {
        return $this->chequeFolioUpdt;
    }

    /**
     * Set cajaChica
     *
     * @param boolean $cajaChica
     * @return FormasPago
     */
    public function setCajaChica($cajaChica)
    {
        $this->cajaChica = $cajaChica;

        return $this;
    }

    /**
     * Get cajaChica
     *
     * @return boolean 
     */
    public function getCajaChica()
    {
        return $this->cajaChica;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return FormasPago
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idFondoCobro
     *
     * @param string $idFondoCobro
     * @return FormasPago
     */
    public function setIdFondoCobro($idFondoCobro)
    {
        $this->idFondoCobro = $idFondoCobro;

        return $this;
    }

    /**
     * Get idFondoCobro
     *
     * @return string 
     */
    public function getIdFondoCobro()
    {
        return $this->idFondoCobro;
    }

    /**
     * Set idFondoPago
     *
     * @param string $idFondoPago
     * @return FormasPago
     */
    public function setIdFondoPago($idFondoPago)
    {
        $this->idFondoPago = $idFondoPago;

        return $this;
    }

    /**
     * Get idFondoPago
     *
     * @return string 
     */
    public function getIdFondoPago()
    {
        return $this->idFondoPago;
    }

    /**
     * Set requiereDesc
     *
     * @param boolean $requiereDesc
     * @return FormasPago
     */
    public function setRequiereDesc($requiereDesc)
    {
        $this->requiereDesc = $requiereDesc;

        return $this;
    }

    /**
     * Get requiereDesc
     *
     * @return boolean 
     */
    public function getRequiereDesc()
    {
        return $this->requiereDesc;
    }

    /**
     * Set efectivoPventa
     *
     * @param boolean $efectivoPventa
     * @return FormasPago
     */
    public function setEfectivoPventa($efectivoPventa)
    {
        $this->efectivoPventa = $efectivoPventa;

        return $this;
    }

    /**
     * Get efectivoPventa
     *
     * @return boolean 
     */
    public function getEfectivoPventa()
    {
        return $this->efectivoPventa;
    }

    /**
     * Set requiereClave
     *
     * @param boolean $requiereClave
     * @return FormasPago
     */
    public function setRequiereClave($requiereClave)
    {
        $this->requiereClave = $requiereClave;

        return $this;
    }

    /**
     * Get requiereClave
     *
     * @return boolean 
     */
    public function getRequiereClave()
    {
        return $this->requiereClave;
    }

    /**
     * Set consecEfectivo
     *
     * @param integer $consecEfectivo
     * @return FormasPago
     */
    public function setConsecEfectivo($consecEfectivo)
    {
        $this->consecEfectivo = $consecEfectivo;

        return $this;
    }

    /**
     * Get consecEfectivo
     *
     * @return integer 
     */
    public function getConsecEfectivo()
    {
        return $this->consecEfectivo;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return FormasPago
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }
}
