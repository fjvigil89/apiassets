<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alquiler
 *
 * @ORM\Table(name="Alquiler", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Alquiler", columns={"Contador"})})
 * @ORM\Entity
 */
class Alquiler
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Alquiler", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlquiler;

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
     * @ORM\Column(name="Ano_Alquiler", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoAlquiler;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Estado", type="smallint", nullable=false)
     */
    private $idEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=5, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Alquiler", type="datetime", nullable=false)
     */
    private $fechaAlquiler;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Atte", type="string", length=50, nullable=false)
     */
    private $atte;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_Alquiler", type="string", length=10, nullable=false)
     */
    private $idTipoAlquiler;

    /**
     * @var string
     *
     * @ORM\Column(name="No_Contrato", type="string", length=25, nullable=false)
     */
    private $noContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Firma_Contrato", type="datetime", nullable=false)
     */
    private $fechaFirmaContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Ini_Contrato", type="datetime", nullable=false)
     */
    private $fechaIniContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fin_Contrato", type="datetime", nullable=false)
     */
    private $fechaFinContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cierre", type="datetime", nullable=false)
     */
    private $fechaCierre;

    /**
     * @var string
     *
     * @ORM\Column(name="Bandera", type="string", length=1, nullable=false)
     */
    private $bandera;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen_Factura", type="string", length=5, nullable=false)
     */
    private $idAlmacenFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var integer
     *
     * @ORM\Column(name="Credito", type="smallint", nullable=false)
     */
    private $credito;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=false)
     */
    private $descCliente;



    /**
     * Set idAlquiler
     *
     * @param integer $idAlquiler
     * @return Alquiler
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
     * @return Alquiler
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
     * @return Alquiler
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
     * Set idEstado
     *
     * @param integer $idEstado
     * @return Alquiler
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return integer 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return Alquiler
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
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return Alquiler
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set fechaAlquiler
     *
     * @param \DateTime $fechaAlquiler
     * @return Alquiler
     */
    public function setFechaAlquiler($fechaAlquiler)
    {
        $this->fechaAlquiler = $fechaAlquiler;

        return $this;
    }

    /**
     * Get fechaAlquiler
     *
     * @return \DateTime 
     */
    public function getFechaAlquiler()
    {
        return $this->fechaAlquiler;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return Alquiler
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
     * Set atte
     *
     * @param string $atte
     * @return Alquiler
     */
    public function setAtte($atte)
    {
        $this->atte = $atte;

        return $this;
    }

    /**
     * Get atte
     *
     * @return string 
     */
    public function getAtte()
    {
        return $this->atte;
    }

    /**
     * Set idTipoAlquiler
     *
     * @param string $idTipoAlquiler
     * @return Alquiler
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
     * Set noContrato
     *
     * @param string $noContrato
     * @return Alquiler
     */
    public function setNoContrato($noContrato)
    {
        $this->noContrato = $noContrato;

        return $this;
    }

    /**
     * Get noContrato
     *
     * @return string 
     */
    public function getNoContrato()
    {
        return $this->noContrato;
    }

    /**
     * Set fechaFirmaContrato
     *
     * @param \DateTime $fechaFirmaContrato
     * @return Alquiler
     */
    public function setFechaFirmaContrato($fechaFirmaContrato)
    {
        $this->fechaFirmaContrato = $fechaFirmaContrato;

        return $this;
    }

    /**
     * Get fechaFirmaContrato
     *
     * @return \DateTime 
     */
    public function getFechaFirmaContrato()
    {
        return $this->fechaFirmaContrato;
    }

    /**
     * Set fechaIniContrato
     *
     * @param \DateTime $fechaIniContrato
     * @return Alquiler
     */
    public function setFechaIniContrato($fechaIniContrato)
    {
        $this->fechaIniContrato = $fechaIniContrato;

        return $this;
    }

    /**
     * Get fechaIniContrato
     *
     * @return \DateTime 
     */
    public function getFechaIniContrato()
    {
        return $this->fechaIniContrato;
    }

    /**
     * Set fechaFinContrato
     *
     * @param \DateTime $fechaFinContrato
     * @return Alquiler
     */
    public function setFechaFinContrato($fechaFinContrato)
    {
        $this->fechaFinContrato = $fechaFinContrato;

        return $this;
    }

    /**
     * Get fechaFinContrato
     *
     * @return \DateTime 
     */
    public function getFechaFinContrato()
    {
        return $this->fechaFinContrato;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     * @return Alquiler
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime 
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set bandera
     *
     * @param string $bandera
     * @return Alquiler
     */
    public function setBandera($bandera)
    {
        $this->bandera = $bandera;

        return $this;
    }

    /**
     * Get bandera
     *
     * @return string 
     */
    public function getBandera()
    {
        return $this->bandera;
    }

    /**
     * Set idAlmacenFactura
     *
     * @param string $idAlmacenFactura
     * @return Alquiler
     */
    public function setIdAlmacenFactura($idAlmacenFactura)
    {
        $this->idAlmacenFactura = $idAlmacenFactura;

        return $this;
    }

    /**
     * Get idAlmacenFactura
     *
     * @return string 
     */
    public function getIdAlmacenFactura()
    {
        return $this->idAlmacenFactura;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return Alquiler
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return Alquiler
     */
    public function setXtrans($xtrans)
    {
        $this->xtrans = $xtrans;

        return $this;
    }

    /**
     * Get xtrans
     *
     * @return boolean 
     */
    public function getXtrans()
    {
        return $this->xtrans;
    }

    /**
     * Set credito
     *
     * @param integer $credito
     * @return Alquiler
     */
    public function setCredito($credito)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return integer 
     */
    public function getCredito()
    {
        return $this->credito;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Alquiler
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return Alquiler
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set descCliente
     *
     * @param string $descCliente
     * @return Alquiler
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
}
