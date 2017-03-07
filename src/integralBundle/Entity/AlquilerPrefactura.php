<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlquilerPrefactura
 *
 * @ORM\Table(name="Alquiler_PreFactura")
 * @ORM\Entity
 */
class AlquilerPrefactura
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
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_CierreIni", type="datetime", nullable=false)
     */
    private $fechaCierreini;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Factura", type="datetime", nullable=false)
     */
    private $fechaFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=false)
     */
    private $descCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMB", type="integer", nullable=false)
     */
    private $importetotalmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMC", type="integer", nullable=false)
     */
    private $importetotalmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Alquiler", type="integer", nullable=false)
     */
    private $idAlquiler;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Alquiler", type="integer", nullable=false)
     */
    private $anoAlquiler;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContadorAlquiler", type="integer", nullable=false)
     */
    private $contadoralquiler;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Imprimir", type="boolean", nullable=false)
     */
    private $imprimir;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_Alquiler", type="string", length=10, nullable=false)
     */
    private $idTipoAlquiler;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Tipo_Alquiler", type="string", length=50, nullable=false)
     */
    private $descTipoAlquiler;

    /**
     * @var integer
     *
     * @ORM\Column(name="In_Tot", type="integer", nullable=false)
     */
    private $inTot;

    /**
     * @var integer
     *
     * @ORM\Column(name="Out_Tot", type="integer", nullable=false)
     */
    private $outTot;



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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return AlquilerPrefactura
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
     * Set fechaCierreini
     *
     * @param \DateTime $fechaCierreini
     * @return AlquilerPrefactura
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
     * Set fechaFactura
     *
     * @param \DateTime $fechaFactura
     * @return AlquilerPrefactura
     */
    public function setFechaFactura($fechaFactura)
    {
        $this->fechaFactura = $fechaFactura;

        return $this;
    }

    /**
     * Get fechaFactura
     *
     * @return \DateTime 
     */
    public function getFechaFactura()
    {
        return $this->fechaFactura;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return AlquilerPrefactura
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set descCliente
     *
     * @param string $descCliente
     * @return AlquilerPrefactura
     */
    public function setDescCliente($descCliente)
    {
        $this->descCliente = $descCliente;

        return $this;
    }

    /**
     * Get descCliente
     *
     * @return string 
     */
    public function getDescCliente()
    {
        return $this->descCliente;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return AlquilerPrefactura
     */
    public function setImportetotalmb($importetotalmb)
    {
        $this->importetotalmb = $importetotalmb;

        return $this;
    }

    /**
     * Get importetotalmb
     *
     * @return integer 
     */
    public function getImportetotalmb()
    {
        return $this->importetotalmb;
    }

    /**
     * Set importetotalmc
     *
     * @param integer $importetotalmc
     * @return AlquilerPrefactura
     */
    public function setImportetotalmc($importetotalmc)
    {
        $this->importetotalmc = $importetotalmc;

        return $this;
    }

    /**
     * Get importetotalmc
     *
     * @return integer 
     */
    public function getImportetotalmc()
    {
        return $this->importetotalmc;
    }

    /**
     * Set idAlquiler
     *
     * @param integer $idAlquiler
     * @return AlquilerPrefactura
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
     * Set anoAlquiler
     *
     * @param integer $anoAlquiler
     * @return AlquilerPrefactura
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
     * Set contadoralquiler
     *
     * @param integer $contadoralquiler
     * @return AlquilerPrefactura
     */
    public function setContadoralquiler($contadoralquiler)
    {
        $this->contadoralquiler = $contadoralquiler;

        return $this;
    }

    /**
     * Get contadoralquiler
     *
     * @return integer 
     */
    public function getContadoralquiler()
    {
        return $this->contadoralquiler;
    }

    /**
     * Set imprimir
     *
     * @param boolean $imprimir
     * @return AlquilerPrefactura
     */
    public function setImprimir($imprimir)
    {
        $this->imprimir = $imprimir;

        return $this;
    }

    /**
     * Get imprimir
     *
     * @return boolean 
     */
    public function getImprimir()
    {
        return $this->imprimir;
    }

    /**
     * Set idTipoAlquiler
     *
     * @param string $idTipoAlquiler
     * @return AlquilerPrefactura
     */
    public function setIdTipoAlquiler($idTipoAlquiler)
    {
        $this->idTipoAlquiler = $idTipoAlquiler;

        return $this;
    }

    /**
     * Get idTipoAlquiler
     *
     * @return string 
     */
    public function getIdTipoAlquiler()
    {
        return $this->idTipoAlquiler;
    }

    /**
     * Set descTipoAlquiler
     *
     * @param string $descTipoAlquiler
     * @return AlquilerPrefactura
     */
    public function setDescTipoAlquiler($descTipoAlquiler)
    {
        $this->descTipoAlquiler = $descTipoAlquiler;

        return $this;
    }

    /**
     * Get descTipoAlquiler
     *
     * @return string 
     */
    public function getDescTipoAlquiler()
    {
        return $this->descTipoAlquiler;
    }

    /**
     * Set inTot
     *
     * @param integer $inTot
     * @return AlquilerPrefactura
     */
    public function setInTot($inTot)
    {
        $this->inTot = $inTot;

        return $this;
    }

    /**
     * Get inTot
     *
     * @return integer 
     */
    public function getInTot()
    {
        return $this->inTot;
    }

    /**
     * Set outTot
     *
     * @param integer $outTot
     * @return AlquilerPrefactura
     */
    public function setOutTot($outTot)
    {
        $this->outTot = $outTot;

        return $this;
    }

    /**
     * Get outTot
     *
     * @return integer 
     */
    public function getOutTot()
    {
        return $this->outTot;
    }
}
