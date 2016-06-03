<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CobroPtoventa
 *
 * @ORM\Table(name="Cobro_PtoVenta")
 * @ORM\Entity
 */
class CobroPtoventa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FormaPago", type="string", length=3, nullable=false)
     */
    private $idFormapago;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_FormaPago", type="string", length=50, nullable=false)
     */
    private $descFormapago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Doc", type="string", length=15, nullable=false)
     */
    private $idDoc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Efectivo_PVenta", type="boolean", nullable=false)
     */
    private $efectivoPventa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Anticipo", type="boolean", nullable=false)
     */
    private $anticipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Original", type="integer", nullable=false)
     */
    private $importeOriginal;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContadorC", type="integer", nullable=false)
     */
    private $contadorc;



    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set idFormapago
     *
     * @param string $idFormapago
     * @return CobroPtoventa
     */
    public function setIdFormapago($idFormapago)
    {
        $this->idFormapago = $idFormapago;

        return $this;
    }

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
     * @return CobroPtoventa
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
     * Set importe
     *
     * @param integer $importe
     * @return CobroPtoventa
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set idDoc
     *
     * @param string $idDoc
     * @return CobroPtoventa
     */
    public function setIdDoc($idDoc)
    {
        $this->idDoc = $idDoc;

        return $this;
    }

    /**
     * Get idDoc
     *
     * @return string 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set efectivoPventa
     *
     * @param boolean $efectivoPventa
     * @return CobroPtoventa
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
     * Set anticipo
     *
     * @param boolean $anticipo
     * @return CobroPtoventa
     */
    public function setAnticipo($anticipo)
    {
        $this->anticipo = $anticipo;

        return $this;
    }

    /**
     * Get anticipo
     *
     * @return boolean 
     */
    public function getAnticipo()
    {
        return $this->anticipo;
    }

    /**
     * Set importeOriginal
     *
     * @param integer $importeOriginal
     * @return CobroPtoventa
     */
    public function setImporteOriginal($importeOriginal)
    {
        $this->importeOriginal = $importeOriginal;

        return $this;
    }

    /**
     * Get importeOriginal
     *
     * @return integer 
     */
    public function getImporteOriginal()
    {
        return $this->importeOriginal;
    }

    /**
     * Set contadorc
     *
     * @param integer $contadorc
     * @return CobroPtoventa
     */
    public function setContadorc($contadorc)
    {
        $this->contadorc = $contadorc;

        return $this;
    }

    /**
     * Get contadorc
     *
     * @return integer 
     */
    public function getContadorc()
    {
        return $this->contadorc;
    }
}
