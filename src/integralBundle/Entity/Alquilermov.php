<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alquilermov
 *
 * @ORM\Table(name="AlquilerMov", uniqueConstraints={@ORM\UniqueConstraint(name="IX_AlquilerMov", columns={"Contador"})})
 * @ORM\Entity
 */
class Alquilermov
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_AlquilerMov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlquilermov;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenMov", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlmacenmov;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_AlquilerMov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoAlquilermov;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_AlquilerMov", type="datetime", nullable=false)
     */
    private $fechaAlquilermov;

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
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Ultimo_Cierre", type="datetime", nullable=false)
     */
    private $fechaUltimoCierre;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContadorAlquiler", type="integer", nullable=false)
     */
    private $contadoralquiler;

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
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

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
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var string
     *
     * @ORM\Column(name="No_Contrato", type="string", length=25, nullable=false)
     */
    private $noContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fin_Contrato", type="datetime", nullable=false)
     */
    private $fechaFinContrato;



    /**
     * Set idAlquilermov
     *
     * @param integer $idAlquilermov
     * @return Alquilermov
     */
    public function setIdAlquilermov($idAlquilermov)
    {
        $this->idAlquilermov = $idAlquilermov;

        return $this;
    }

    /**
     * Get idAlquilermov
     *
     * @return integer 
     */
    public function getIdAlquilermov()
    {
        return $this->idAlquilermov;
    }

    /**
     * Set idAlmacenmov
     *
     * @param string $idAlmacenmov
     * @return Alquilermov
     */
    public function setIdAlmacenmov($idAlmacenmov)
    {
        $this->idAlmacenmov = $idAlmacenmov;

        return $this;
    }

    /**
     * Get idAlmacenmov
     *
     * @return string 
     */
    public function getIdAlmacenmov()
    {
        return $this->idAlmacenmov;
    }

    /**
     * Set anoAlquilermov
     *
     * @param integer $anoAlquilermov
     * @return Alquilermov
     */
    public function setAnoAlquilermov($anoAlquilermov)
    {
        $this->anoAlquilermov = $anoAlquilermov;

        return $this;
    }

    /**
     * Get anoAlquilermov
     *
     * @return integer 
     */
    public function getAnoAlquilermov()
    {
        return $this->anoAlquilermov;
    }

    /**
     * Set fechaAlquilermov
     *
     * @param \DateTime $fechaAlquilermov
     * @return Alquilermov
     */
    public function setFechaAlquilermov($fechaAlquilermov)
    {
        $this->fechaAlquilermov = $fechaAlquilermov;

        return $this;
    }

    /**
     * Get fechaAlquilermov
     *
     * @return \DateTime 
     */
    public function getFechaAlquilermov()
    {
        return $this->fechaAlquilermov;
    }

    /**
     * Set idEstado
     *
     * @param integer $idEstado
     * @return Alquilermov
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
     * @return Alquilermov
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
     * @return Alquilermov
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
     * Set nota
     *
     * @param string $nota
     * @return Alquilermov
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
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return Alquilermov
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Get fechaConfirmacion
     *
     * @return \DateTime 
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Set fechaUltimoCierre
     *
     * @param \DateTime $fechaUltimoCierre
     * @return Alquilermov
     */
    public function setFechaUltimoCierre($fechaUltimoCierre)
    {
        $this->fechaUltimoCierre = $fechaUltimoCierre;

        return $this;
    }

    /**
     * Get fechaUltimoCierre
     *
     * @return \DateTime 
     */
    public function getFechaUltimoCierre()
    {
        return $this->fechaUltimoCierre;
    }

    /**
     * Set contadoralquiler
     *
     * @param integer $contadoralquiler
     * @return Alquilermov
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
     * Set idAlquiler
     *
     * @param integer $idAlquiler
     * @return Alquilermov
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
     * @return Alquilermov
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
     * @return Alquilermov
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
     * Set contador
     *
     * @param integer $contador
     * @return Alquilermov
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
     * Set idUser
     *
     * @param string $idUser
     * @return Alquilermov
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
     * @return Alquilermov
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
     * @return Alquilermov
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
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return Alquilermov
     */
    public function setDocPrimario($docPrimario)
    {
        $this->docPrimario = $docPrimario;

        return $this;
    }

    /**
     * Get docPrimario
     *
     * @return string 
     */
    public function getDocPrimario()
    {
        return $this->docPrimario;
    }

    /**
     * Set noContrato
     *
     * @param string $noContrato
     * @return Alquilermov
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
     * Set fechaFinContrato
     *
     * @param \DateTime $fechaFinContrato
     * @return Alquilermov
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
}
