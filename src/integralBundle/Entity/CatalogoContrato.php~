<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatalogoContrato
 *
 * @ORM\Table(name="Catalogo_Contrato")
 * @ORM\Entity
 */
class CatalogoContrato
{
    /**
     * @var string
     *
     * @ORM\Column(name="NoContrato", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Proveedor", type="string", length=50, nullable=false)
     */
    private $descProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaFin", type="datetime", nullable=false)
     */
    private $fechafin;

    /**
     * @var string
     *
     * @ORM\Column(name="Clasificacion", type="string", length=50, nullable=false)
     */
    private $clasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor", type="integer", nullable=false)
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="ValorMC", type="integer", nullable=false)
     */
    private $valormc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_Ini", type="integer", nullable=false)
     */
    private $saldoIni;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo_IniMC", type="integer", nullable=false)
     */
    private $saldoInimc;



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
     * @return CatalogoContrato
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
     * @return CatalogoContrato
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return CatalogoContrato
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return CatalogoContrato
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return CatalogoContrato
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return string 
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set descProveedor
     *
     * @param string $descProveedor
     * @return CatalogoContrato
     */
    public function setDescProveedor($descProveedor)
    {
        $this->descProveedor = $descProveedor;

        return $this;
    }

    /**
     * Get descProveedor
     *
     * @return string 
     */
    public function getDescProveedor()
    {
        return $this->descProveedor;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CatalogoContrato
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return CatalogoContrato
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return CatalogoContrato
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     * @return CatalogoContrato
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set valormc
     *
     * @param integer $valormc
     * @return CatalogoContrato
     */
    public function setValormc($valormc)
    {
        $this->valormc = $valormc;

        return $this;
    }

    /**
     * Get valormc
     *
     * @return integer 
     */
    public function getValormc()
    {
        return $this->valormc;
    }

    /**
     * Set saldoIni
     *
     * @param integer $saldoIni
     * @return CatalogoContrato
     */
    public function setSaldoIni($saldoIni)
    {
        $this->saldoIni = $saldoIni;

        return $this;
    }

    /**
     * Get saldoIni
     *
     * @return integer 
     */
    public function getSaldoIni()
    {
        return $this->saldoIni;
    }

    /**
     * Set saldoInimc
     *
     * @param integer $saldoInimc
     * @return CatalogoContrato
     */
    public function setSaldoInimc($saldoInimc)
    {
        $this->saldoInimc = $saldoInimc;

        return $this;
    }

    /**
     * Get saldoInimc
     *
     * @return integer 
     */
    public function getSaldoInimc()
    {
        return $this->saldoInimc;
    }
}
