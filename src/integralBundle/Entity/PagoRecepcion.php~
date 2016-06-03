<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagoRecepcion
 *
 * @ORM\Table(name="Pago_Recepcion")
 * @ORM\Entity
 */
class PagoRecepcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Factura", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Pago", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoPago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cobrada", type="boolean", nullable=false)
     */
    private $cobrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Cobrado", type="integer", nullable=false)
     */
    private $importeCobrado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CobradaMC", type="boolean", nullable=false)
     */
    private $cobradamc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_CobradoMC", type="integer", nullable=false)
     */
    private $importeCobradomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteRec_MB", type="integer", nullable=false)
     */
    private $importerecMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteRec_MC", type="integer", nullable=false)
     */
    private $importerecMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteDes_MB", type="integer", nullable=false)
     */
    private $importedesMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteDes_MC", type="integer", nullable=false)
     */
    private $importedesMc;



    /**
     * Set idFactura
     *
     * @param integer $idFactura
     * @return PagoRecepcion
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return integer 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return PagoRecepcion
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set anoPago
     *
     * @param integer $anoPago
     * @return PagoRecepcion
     */
    public function setAnoPago($anoPago)
    {
        $this->anoPago = $anoPago;

        return $this;
    }

    /**
     * Get anoPago
     *
     * @return integer 
     */
    public function getAnoPago()
    {
        return $this->anoPago;
    }

    /**
     * Set cobrada
     *
     * @param boolean $cobrada
     * @return PagoRecepcion
     */
    public function setCobrada($cobrada)
    {
        $this->cobrada = $cobrada;

        return $this;
    }

    /**
     * Get cobrada
     *
     * @return boolean 
     */
    public function getCobrada()
    {
        return $this->cobrada;
    }

    /**
     * Set importeCobrado
     *
     * @param integer $importeCobrado
     * @return PagoRecepcion
     */
    public function setImporteCobrado($importeCobrado)
    {
        $this->importeCobrado = $importeCobrado;

        return $this;
    }

    /**
     * Get importeCobrado
     *
     * @return integer 
     */
    public function getImporteCobrado()
    {
        return $this->importeCobrado;
    }

    /**
     * Set cobradamc
     *
     * @param boolean $cobradamc
     * @return PagoRecepcion
     */
    public function setCobradamc($cobradamc)
    {
        $this->cobradamc = $cobradamc;

        return $this;
    }

    /**
     * Get cobradamc
     *
     * @return boolean 
     */
    public function getCobradamc()
    {
        return $this->cobradamc;
    }

    /**
     * Set importeCobradomc
     *
     * @param integer $importeCobradomc
     * @return PagoRecepcion
     */
    public function setImporteCobradomc($importeCobradomc)
    {
        $this->importeCobradomc = $importeCobradomc;

        return $this;
    }

    /**
     * Get importeCobradomc
     *
     * @return integer 
     */
    public function getImporteCobradomc()
    {
        return $this->importeCobradomc;
    }

    /**
     * Set importerecMb
     *
     * @param integer $importerecMb
     * @return PagoRecepcion
     */
    public function setImporterecMb($importerecMb)
    {
        $this->importerecMb = $importerecMb;

        return $this;
    }

    /**
     * Get importerecMb
     *
     * @return integer 
     */
    public function getImporterecMb()
    {
        return $this->importerecMb;
    }

    /**
     * Set importerecMc
     *
     * @param integer $importerecMc
     * @return PagoRecepcion
     */
    public function setImporterecMc($importerecMc)
    {
        $this->importerecMc = $importerecMc;

        return $this;
    }

    /**
     * Get importerecMc
     *
     * @return integer 
     */
    public function getImporterecMc()
    {
        return $this->importerecMc;
    }

    /**
     * Set importedesMb
     *
     * @param integer $importedesMb
     * @return PagoRecepcion
     */
    public function setImportedesMb($importedesMb)
    {
        $this->importedesMb = $importedesMb;

        return $this;
    }

    /**
     * Get importedesMb
     *
     * @return integer 
     */
    public function getImportedesMb()
    {
        return $this->importedesMb;
    }

    /**
     * Set importedesMc
     *
     * @param integer $importedesMc
     * @return PagoRecepcion
     */
    public function setImportedesMc($importedesMc)
    {
        $this->importedesMc = $importedesMc;

        return $this;
    }

    /**
     * Get importedesMc
     *
     * @return integer 
     */
    public function getImportedesMc()
    {
        return $this->importedesMc;
    }
}
