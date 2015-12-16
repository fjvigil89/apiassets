<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturaDef
 *
 * @ORM\Table(name="Factura_Def")
 * @ORM\Entity
 */
class FacturaDef
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Factura", type="integer", nullable=false)
     */
    private $idFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=15, nullable=false)
     */
    private $referencia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AplicaArancel", type="boolean", nullable=false)
     */
    private $aplicaarancel;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioMB", type="decimal", precision=21, scale=6, nullable=false)
     */
    private $preciomb;

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioMC", type="decimal", precision=21, scale=6, nullable=false)
     */
    private $preciomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecMB", type="integer", nullable=false)
     */
    private $recmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecMC", type="integer", nullable=false)
     */
    private $recmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescMB", type="integer", nullable=false)
     */
    private $descmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescMC", type="integer", nullable=false)
     */
    private $descmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMB", type="integer", nullable=false)
     */
    private $importemb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMC", type="integer", nullable=false)
     */
    private $importemc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devuelto", type="integer", nullable=false)
     */
    private $devuelto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AplicaPlazoCobro", type="boolean", nullable=false)
     */
    private $aplicaplazocobro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tributable", type="boolean", nullable=false)
     */
    private $tributable;

    /**
     * @var string
     *
     * @ORM\Column(name="ImporDevueltoMB", type="decimal", precision=23, scale=8, nullable=false)
     */
    private $impordevueltomb;

    /**
     * @var string
     *
     * @ORM\Column(name="ImporDevueltoMC", type="decimal", precision=23, scale=8, nullable=false)
     */
    private $impordevueltomc;



    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set idFactura
     *
     * @param integer $idFactura
     * @return FacturaDef
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
     * Set referencia
     *
     * @param string $referencia
     * @return FacturaDef
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set aplicaarancel
     *
     * @param boolean $aplicaarancel
     * @return FacturaDef
     */
    public function setAplicaarancel($aplicaarancel)
    {
        $this->aplicaarancel = $aplicaarancel;

        return $this;
    }

    /**
     * Get aplicaarancel
     *
     * @return boolean 
     */
    public function getAplicaarancel()
    {
        return $this->aplicaarancel;
    }

    /**
     * Set preciomb
     *
     * @param string $preciomb
     * @return FacturaDef
     */
    public function setPreciomb($preciomb)
    {
        $this->preciomb = $preciomb;

        return $this;
    }

    /**
     * Get preciomb
     *
     * @return string 
     */
    public function getPreciomb()
    {
        return $this->preciomb;
    }

    /**
     * Set preciomc
     *
     * @param string $preciomc
     * @return FacturaDef
     */
    public function setPreciomc($preciomc)
    {
        $this->preciomc = $preciomc;

        return $this;
    }

    /**
     * Get preciomc
     *
     * @return string 
     */
    public function getPreciomc()
    {
        return $this->preciomc;
    }

    /**
     * Set recmb
     *
     * @param integer $recmb
     * @return FacturaDef
     */
    public function setRecmb($recmb)
    {
        $this->recmb = $recmb;

        return $this;
    }

    /**
     * Get recmb
     *
     * @return integer 
     */
    public function getRecmb()
    {
        return $this->recmb;
    }

    /**
     * Set recmc
     *
     * @param integer $recmc
     * @return FacturaDef
     */
    public function setRecmc($recmc)
    {
        $this->recmc = $recmc;

        return $this;
    }

    /**
     * Get recmc
     *
     * @return integer 
     */
    public function getRecmc()
    {
        return $this->recmc;
    }

    /**
     * Set descmb
     *
     * @param integer $descmb
     * @return FacturaDef
     */
    public function setDescmb($descmb)
    {
        $this->descmb = $descmb;

        return $this;
    }

    /**
     * Get descmb
     *
     * @return integer 
     */
    public function getDescmb()
    {
        return $this->descmb;
    }

    /**
     * Set descmc
     *
     * @param integer $descmc
     * @return FacturaDef
     */
    public function setDescmc($descmc)
    {
        $this->descmc = $descmc;

        return $this;
    }

    /**
     * Get descmc
     *
     * @return integer 
     */
    public function getDescmc()
    {
        return $this->descmc;
    }

    /**
     * Set importemb
     *
     * @param integer $importemb
     * @return FacturaDef
     */
    public function setImportemb($importemb)
    {
        $this->importemb = $importemb;

        return $this;
    }

    /**
     * Get importemb
     *
     * @return integer 
     */
    public function getImportemb()
    {
        return $this->importemb;
    }

    /**
     * Set importemc
     *
     * @param integer $importemc
     * @return FacturaDef
     */
    public function setImportemc($importemc)
    {
        $this->importemc = $importemc;

        return $this;
    }

    /**
     * Get importemc
     *
     * @return integer 
     */
    public function getImportemc()
    {
        return $this->importemc;
    }

    /**
     * Set devuelto
     *
     * @param integer $devuelto
     * @return FacturaDef
     */
    public function setDevuelto($devuelto)
    {
        $this->devuelto = $devuelto;

        return $this;
    }

    /**
     * Get devuelto
     *
     * @return integer 
     */
    public function getDevuelto()
    {
        return $this->devuelto;
    }

    /**
     * Set aplicaplazocobro
     *
     * @param boolean $aplicaplazocobro
     * @return FacturaDef
     */
    public function setAplicaplazocobro($aplicaplazocobro)
    {
        $this->aplicaplazocobro = $aplicaplazocobro;

        return $this;
    }

    /**
     * Get aplicaplazocobro
     *
     * @return boolean 
     */
    public function getAplicaplazocobro()
    {
        return $this->aplicaplazocobro;
    }

    /**
     * Set tributable
     *
     * @param boolean $tributable
     * @return FacturaDef
     */
    public function setTributable($tributable)
    {
        $this->tributable = $tributable;

        return $this;
    }

    /**
     * Get tributable
     *
     * @return boolean 
     */
    public function getTributable()
    {
        return $this->tributable;
    }

    /**
     * Set impordevueltomb
     *
     * @param string $impordevueltomb
     * @return FacturaDef
     */
    public function setImpordevueltomb($impordevueltomb)
    {
        $this->impordevueltomb = $impordevueltomb;

        return $this;
    }

    /**
     * Get impordevueltomb
     *
     * @return string 
     */
    public function getImpordevueltomb()
    {
        return $this->impordevueltomb;
    }

    /**
     * Set impordevueltomc
     *
     * @param string $impordevueltomc
     * @return FacturaDef
     */
    public function setImpordevueltomc($impordevueltomc)
    {
        $this->impordevueltomc = $impordevueltomc;

        return $this;
    }

    /**
     * Get impordevueltomc
     *
     * @return string 
     */
    public function getImpordevueltomc()
    {
        return $this->impordevueltomc;
    }
}
