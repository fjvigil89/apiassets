<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaseAlZun
 *
 * @ORM\Table(name="Pase_al_Zun")
 * @ORM\Entity
 */
class PaseAlZun
{
    /**
     * @var integer
     *
     * @ORM\Column(name="COMPROBANT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comprobant;

    /**
     * @var string
     *
     * @ORM\Column(name="EMPRESA", type="string", length=3, nullable=false)
     */
    private $empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="CUENTA", type="string", length=100, nullable=false)
     */
    private $cuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="CTO_GTO", type="string", length=4, nullable=false)
     */
    private $ctoGto;

    /**
     * @var string
     *
     * @ORM\Column(name="DOC", type="string", length=10, nullable=false)
     */
    private $doc;

    /**
     * @var string
     *
     * @ORM\Column(name="CONCEPTO", type="string", length=2, nullable=false)
     */
    private $concepto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FEC_VAL", type="datetime", nullable=false)
     */
    private $fecVal;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIP", type="string", length=30, nullable=false)
     */
    private $descrip;

    /**
     * @var integer
     *
     * @ORM\Column(name="IMPORTE", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DEBITO", type="boolean", nullable=false)
     */
    private $debito;

    /**
     * @var string
     *
     * @ORM\Column(name="COD_FC", type="string", length=2, nullable=false)
     */
    private $codFc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FEC_CON", type="datetime", nullable=false)
     */
    private $fecCon;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBRO", type="string", length=1, nullable=false)
     */
    private $libro;

    /**
     * @var string
     *
     * @ORM\Column(name="TASA", type="decimal", precision=5, scale=0, nullable=false)
     */
    private $tasa;

    /**
     * @var string
     *
     * @ORM\Column(name="MONEDA", type="string", length=3, nullable=false)
     */
    private $moneda;



    /**
     * Get comprobant
     *
     * @return integer 
     */
    public function getComprobant()
    {
        return $this->comprobant;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return PaseAlZun
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set cuenta
     *
     * @param string $cuenta
     * @return PaseAlZun
     */
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get cuenta
     *
     * @return string 
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * Set ctoGto
     *
     * @param string $ctoGto
     * @return PaseAlZun
     */
    public function setCtoGto($ctoGto)
    {
        $this->ctoGto = $ctoGto;

        return $this;
    }

    /**
     * Get ctoGto
     *
     * @return string 
     */
    public function getCtoGto()
    {
        return $this->ctoGto;
    }

    /**
     * Set doc
     *
     * @param string $doc
     * @return PaseAlZun
     */
    public function setDoc($doc)
    {
        $this->doc = $doc;

        return $this;
    }

    /**
     * Get doc
     *
     * @return string 
     */
    public function getDoc()
    {
        return $this->doc;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     * @return PaseAlZun
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string 
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set fecVal
     *
     * @param \DateTime $fecVal
     * @return PaseAlZun
     */
    public function setFecVal($fecVal)
    {
        $this->fecVal = $fecVal;

        return $this;
    }

    /**
     * Get fecVal
     *
     * @return \DateTime 
     */
    public function getFecVal()
    {
        return $this->fecVal;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return PaseAlZun
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;

        return $this;
    }

    /**
     * Get descrip
     *
     * @return string 
     */
    public function getDescrip()
    {
        return $this->descrip;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return PaseAlZun
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
     * Set debito
     *
     * @param boolean $debito
     * @return PaseAlZun
     */
    public function setDebito($debito)
    {
        $this->debito = $debito;

        return $this;
    }

    /**
     * Get debito
     *
     * @return boolean 
     */
    public function getDebito()
    {
        return $this->debito;
    }

    /**
     * Set codFc
     *
     * @param string $codFc
     * @return PaseAlZun
     */
    public function setCodFc($codFc)
    {
        $this->codFc = $codFc;

        return $this;
    }

    /**
     * Get codFc
     *
     * @return string 
     */
    public function getCodFc()
    {
        return $this->codFc;
    }

    /**
     * Set fecCon
     *
     * @param \DateTime $fecCon
     * @return PaseAlZun
     */
    public function setFecCon($fecCon)
    {
        $this->fecCon = $fecCon;

        return $this;
    }

    /**
     * Get fecCon
     *
     * @return \DateTime 
     */
    public function getFecCon()
    {
        return $this->fecCon;
    }

    /**
     * Set libro
     *
     * @param string $libro
     * @return PaseAlZun
     */
    public function setLibro($libro)
    {
        $this->libro = $libro;

        return $this;
    }

    /**
     * Get libro
     *
     * @return string 
     */
    public function getLibro()
    {
        return $this->libro;
    }

    /**
     * Set tasa
     *
     * @param string $tasa
     * @return PaseAlZun
     */
    public function setTasa($tasa)
    {
        $this->tasa = $tasa;

        return $this;
    }

    /**
     * Get tasa
     *
     * @return string 
     */
    public function getTasa()
    {
        return $this->tasa;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return PaseAlZun
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
}
