<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alquilercierres
 *
 * @ORM\Table(name="AlquilerCierres")
 * @ORM\Entity
 */
class Alquilercierres
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_CierreIni", type="datetime", nullable=false)
     */
    private $fechaCierreini;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_CierreFin", type="datetime", nullable=false)
     */
    private $fechaCierrefin;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Alquiler", type="integer", nullable=false)
     */
    private $idAlquiler;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Alquiler", type="integer", nullable=false)
     */
    private $anoAlquiler;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContadorFactura", type="integer", nullable=false)
     */
    private $contadorfactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Factura", type="integer", nullable=false)
     */
    private $idFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenFactura", type="string", length=5, nullable=false)
     */
    private $idAlmacenfactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Factura", type="smallint", nullable=false)
     */
    private $anoFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Comprobante", type="integer", nullable=false)
     */
    private $idComprobante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Comprobante", type="integer", nullable=false)
     */
    private $anoComprobante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Comprobante", type="smallint", nullable=false)
     */
    private $mesComprobante;



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
     * Set fechaCierreini
     *
     * @param \DateTime $fechaCierreini
     * @return Alquilercierres
     */
    public function setFechaCierreini($fechaCierreini)
    {
        $this->fechaCierreini = $fechaCierreini;

        return $this;
    }

    /**
     * Get fechaCierreini
     *
     * @return \DateTime 
     */
    public function getFechaCierreini()
    {
        return $this->fechaCierreini;
    }

    /**
     * Set fechaCierrefin
     *
     * @param \DateTime $fechaCierrefin
     * @return Alquilercierres
     */
    public function setFechaCierrefin($fechaCierrefin)
    {
        $this->fechaCierrefin = $fechaCierrefin;

        return $this;
    }

    /**
     * Get fechaCierrefin
     *
     * @return \DateTime 
     */
    public function getFechaCierrefin()
    {
        return $this->fechaCierrefin;
    }

    /**
     * Set idAlquiler
     *
     * @param integer $idAlquiler
     * @return Alquilercierres
     */
    public function setIdAlquiler($idAlquiler)
    {
        $this->idAlquiler = $idAlquiler;

        return $this;
    }

    /**
     * Get idAlquiler
     *
     * @return integer 
     */
    public function getIdAlquiler()
    {
        return $this->idAlquiler;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Alquilercierres
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
     * Set anoAlquiler
     *
     * @param integer $anoAlquiler
     * @return Alquilercierres
     */
    public function setAnoAlquiler($anoAlquiler)
    {
        $this->anoAlquiler = $anoAlquiler;

        return $this;
    }

    /**
     * Get anoAlquiler
     *
     * @return integer 
     */
    public function getAnoAlquiler()
    {
        return $this->anoAlquiler;
    }

    /**
     * Set contadorfactura
     *
     * @param integer $contadorfactura
     * @return Alquilercierres
     */
    public function setContadorfactura($contadorfactura)
    {
        $this->contadorfactura = $contadorfactura;

        return $this;
    }

    /**
     * Get contadorfactura
     *
     * @return integer 
     */
    public function getContadorfactura()
    {
        return $this->contadorfactura;
    }

    /**
     * Set idFactura
     *
     * @param integer $idFactura
     * @return Alquilercierres
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
     * Set idAlmacenfactura
     *
     * @param string $idAlmacenfactura
     * @return Alquilercierres
     */
    public function setIdAlmacenfactura($idAlmacenfactura)
    {
        $this->idAlmacenfactura = $idAlmacenfactura;

        return $this;
    }

    /**
     * Get idAlmacenfactura
     *
     * @return string 
     */
    public function getIdAlmacenfactura()
    {
        return $this->idAlmacenfactura;
    }

    /**
     * Set anoFactura
     *
     * @param integer $anoFactura
     * @return Alquilercierres
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
     * Set idComprobante
     *
     * @param integer $idComprobante
     * @return Alquilercierres
     */
    public function setIdComprobante($idComprobante)
    {
        $this->idComprobante = $idComprobante;

        return $this;
    }

    /**
     * Get idComprobante
     *
     * @return integer 
     */
    public function getIdComprobante()
    {
        return $this->idComprobante;
    }

    /**
     * Set anoComprobante
     *
     * @param integer $anoComprobante
     * @return Alquilercierres
     */
    public function setAnoComprobante($anoComprobante)
    {
        $this->anoComprobante = $anoComprobante;

        return $this;
    }

    /**
     * Get anoComprobante
     *
     * @return integer 
     */
    public function getAnoComprobante()
    {
        return $this->anoComprobante;
    }

    /**
     * Set mesComprobante
     *
     * @param integer $mesComprobante
     * @return Alquilercierres
     */
    public function setMesComprobante($mesComprobante)
    {
        $this->mesComprobante = $mesComprobante;

        return $this;
    }

    /**
     * Get mesComprobante
     *
     * @return integer 
     */
    public function getMesComprobante()
    {
        return $this->mesComprobante;
    }
}
