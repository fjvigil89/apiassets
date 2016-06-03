<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CobrosFacturas
 *
 * @ORM\Table(name="Cobros_Facturas")
 * @ORM\Entity
 */
class CobrosFacturas
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
     * @ORM\Column(name="Ano_Factura", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Factura", type="smallint", nullable=false)
     */
    private $tipoFactura;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cobrada", type="boolean", nullable=false)
     */
    private $cobrada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cobrada_MC", type="boolean", nullable=false)
     */
    private $cobradaMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Cobrado", type="integer", nullable=false)
     */
    private $importeCobrado;

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
     * @return CobrosFacturas
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
     * @return CobrosFacturas
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
     * Set anoFactura
     *
     * @param integer $anoFactura
     * @return CobrosFacturas
     */
    public function setAnoFactura($anoFactura)
    {
        $this->anoFactura = $anoFactura;

        return $this;
    }

    /**
     * Get anoFactura
     *
     * @return integer 
     */
    public function getAnoFactura()
    {
        return $this->anoFactura;
    }

    /**
     * Set tipoFactura
     *
     * @param integer $tipoFactura
     * @return CobrosFacturas
     */
    public function setTipoFactura($tipoFactura)
    {
        $this->tipoFactura = $tipoFactura;

        return $this;
    }

    /**
     * Get tipoFactura
     *
     * @return integer 
     */
    public function getTipoFactura()
    {
        return $this->tipoFactura;
    }

    /**
     * Set cobrada
     *
     * @param boolean $cobrada
     * @return CobrosFacturas
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
     * Set cobradaMc
     *
     * @param boolean $cobradaMc
     * @return CobrosFacturas
     */
    public function setCobradaMc($cobradaMc)
    {
        $this->cobradaMc = $cobradaMc;

        return $this;
    }

    /**
     * Get cobradaMc
     *
     * @return boolean 
     */
    public function getCobradaMc()
    {
        return $this->cobradaMc;
    }

    /**
     * Set importeCobrado
     *
     * @param integer $importeCobrado
     * @return CobrosFacturas
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
     * Set importeCobradomc
     *
     * @param integer $importeCobradomc
     * @return CobrosFacturas
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
     * @return CobrosFacturas
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
     * @return CobrosFacturas
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
     * @return CobrosFacturas
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
     * @return CobrosFacturas
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
