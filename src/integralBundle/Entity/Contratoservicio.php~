<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contratoservicio
 *
 * @ORM\Table(name="ContratoServicio")
 * @ORM\Entity
 */
class Contratoservicio
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
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaEmision", type="datetime", nullable=false)
     */
    private $fechaemision;

    /**
     * @var string
     *
     * @ORM\Column(name="NoContrato", type="string", length=30, nullable=false)
     */
    private $nocontrato;

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
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto", type="string", length=200, nullable=false)
     */
    private $descProducto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnPorciento", type="boolean", nullable=false)
     */
    private $enporciento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Generar_Factura", type="boolean", nullable=false)
     */
    private $generarFactura;

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
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Anno", type="smallint", nullable=false)
     */
    private $anno;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=500, nullable=false)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Facturado", type="boolean", nullable=false)
     */
    private $facturado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Generar_Confirmada", type="boolean", nullable=false)
     */
    private $generarConfirmada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Periodo", type="smallint", nullable=false)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="clasif_credito_factura", type="string", length=10, nullable=false)
     */
    private $clasifCreditoFactura;



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
     * Set confirmada
     *
     * @param integer $confirmada
     * @return Contratoservicio
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return integer 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * Set fechaemision
     *
     * @param \DateTime $fechaemision
     * @return Contratoservicio
     */
    public function setFechaemision($fechaemision)
    {
        $this->fechaemision = $fechaemision;

        return $this;
    }

    /**
     * Get fechaemision
     *
     * @return \DateTime 
     */
    public function getFechaemision()
    {
        return $this->fechaemision;
    }

    /**
     * Set nocontrato
     *
     * @param string $nocontrato
     * @return Contratoservicio
     */
    public function setNocontrato($nocontrato)
    {
        $this->nocontrato = $nocontrato;

        return $this;
    }

    /**
     * Get nocontrato
     *
     * @return string 
     */
    public function getNocontrato()
    {
        return $this->nocontrato;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return Contratoservicio
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
     * @return Contratoservicio
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
     * Set idProducto
     *
     * @param string $idProducto
     * @return Contratoservicio
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return string 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set descProducto
     *
     * @param string $descProducto
     * @return Contratoservicio
     */
    public function setDescProducto($descProducto)
    {
        $this->descProducto = $descProducto;

        return $this;
    }

    /**
     * Get descProducto
     *
     * @return string 
     */
    public function getDescProducto()
    {
        return $this->descProducto;
    }

    /**
     * Set enporciento
     *
     * @param boolean $enporciento
     * @return Contratoservicio
     */
    public function setEnporciento($enporciento)
    {
        $this->enporciento = $enporciento;

        return $this;
    }

    /**
     * Get enporciento
     *
     * @return boolean 
     */
    public function getEnporciento()
    {
        return $this->enporciento;
    }

    /**
     * Set generarFactura
     *
     * @param boolean $generarFactura
     * @return Contratoservicio
     */
    public function setGenerarFactura($generarFactura)
    {
        $this->generarFactura = $generarFactura;

        return $this;
    }

    /**
     * Get generarFactura
     *
     * @return boolean 
     */
    public function getGenerarFactura()
    {
        return $this->generarFactura;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return Contratoservicio
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
     * @return Contratoservicio
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
     * Set mes
     *
     * @param integer $mes
     * @return Contratoservicio
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set anno
     *
     * @param integer $anno
     * @return Contratoservicio
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;

        return $this;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return Contratoservicio
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set facturado
     *
     * @param boolean $facturado
     * @return Contratoservicio
     */
    public function setFacturado($facturado)
    {
        $this->facturado = $facturado;

        return $this;
    }

    /**
     * Get facturado
     *
     * @return boolean 
     */
    public function getFacturado()
    {
        return $this->facturado;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Contratoservicio
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
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return Contratoservicio
     */
    public function setDescAlmacen($descAlmacen)
    {
        $this->descAlmacen = $descAlmacen;

        return $this;
    }

    /**
     * Get descAlmacen
     *
     * @return string 
     */
    public function getDescAlmacen()
    {
        return $this->descAlmacen;
    }

    /**
     * Set generarConfirmada
     *
     * @param boolean $generarConfirmada
     * @return Contratoservicio
     */
    public function setGenerarConfirmada($generarConfirmada)
    {
        $this->generarConfirmada = $generarConfirmada;

        return $this;
    }

    /**
     * Get generarConfirmada
     *
     * @return boolean 
     */
    public function getGenerarConfirmada()
    {
        return $this->generarConfirmada;
    }

    /**
     * Set periodo
     *
     * @param integer $periodo
     * @return Contratoservicio
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return integer 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set clasifCreditoFactura
     *
     * @param string $clasifCreditoFactura
     * @return Contratoservicio
     */
    public function setClasifCreditoFactura($clasifCreditoFactura)
    {
        $this->clasifCreditoFactura = $clasifCreditoFactura;

        return $this;
    }

    /**
     * Get clasifCreditoFactura
     *
     * @return string 
     */
    public function getClasifCreditoFactura()
    {
        return $this->clasifCreditoFactura;
    }
}
