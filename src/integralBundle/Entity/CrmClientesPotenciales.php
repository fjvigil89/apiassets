<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmClientesPotenciales
 *
 * @ORM\Table(name="CRM_Clientes_Potenciales")
 * @ORM\Entity
 */
class CrmClientesPotenciales
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
     * @var string
     *
     * @ORM\Column(name="Nombre_Contacto", type="string", length=30, nullable=false)
     */
    private $nombreContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Cargo_Contacto", type="string", length=30, nullable=false)
     */
    private $cargoContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=80, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Ciudad", type="string", length=15, nullable=false)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="Pais", type="string", length=5, nullable=false)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=24, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=24, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="e_mail", type="string", length=50, nullable=false)
     */
    private $eMail;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Motivo", type="string", length=8, nullable=false)
     */
    private $idMotivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Answer", type="string", length=8, nullable=false)
     */
    private $idAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas", type="string", length=180, nullable=false)
     */
    private $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=10, nullable=false)
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado_Mec", type="string", length=5, nullable=false)
     */
    private $idEmpleadoMec;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empl_Contacto", type="string", length=15, nullable=false)
     */
    private $idEmplContacto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

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
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return CrmClientesPotenciales
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
     * @return CrmClientesPotenciales
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
     * @return CrmClientesPotenciales
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
     * Set nombreContacto
     *
     * @param string $nombreContacto
     * @return CrmClientesPotenciales
     */
    public function setNombreContacto($nombreContacto)
    {
        $this->nombreContacto = $nombreContacto;

        return $this;
    }

    /**
     * Get nombreContacto
     *
     * @return string 
     */
    public function getNombreContacto()
    {
        return $this->nombreContacto;
    }

    /**
     * Set cargoContacto
     *
     * @param string $cargoContacto
     * @return CrmClientesPotenciales
     */
    public function setCargoContacto($cargoContacto)
    {
        $this->cargoContacto = $cargoContacto;

        return $this;
    }

    /**
     * Get cargoContacto
     *
     * @return string 
     */
    public function getCargoContacto()
    {
        return $this->cargoContacto;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return CrmClientesPotenciales
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return CrmClientesPotenciales
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return CrmClientesPotenciales
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return CrmClientesPotenciales
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return CrmClientesPotenciales
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     * @return CrmClientesPotenciales
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set idMotivo
     *
     * @param string $idMotivo
     * @return CrmClientesPotenciales
     */
    public function setIdMotivo($idMotivo)
    {
        $this->idMotivo = $idMotivo;

        return $this;
    }

    /**
     * Get idMotivo
     *
     * @return string 
     */
    public function getIdMotivo()
    {
        return $this->idMotivo;
    }

    /**
     * Set idAnswer
     *
     * @param string $idAnswer
     * @return CrmClientesPotenciales
     */
    public function setIdAnswer($idAnswer)
    {
        $this->idAnswer = $idAnswer;

        return $this;
    }

    /**
     * Get idAnswer
     *
     * @return string 
     */
    public function getIdAnswer()
    {
        return $this->idAnswer;
    }

    /**
     * Set notas
     *
     * @param string $notas
     * @return CrmClientesPotenciales
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;

        return $this;
    }

    /**
     * Get notas
     *
     * @return string 
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Set idCategoria
     *
     * @param string $idCategoria
     * @return CrmClientesPotenciales
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return string 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return CrmClientesPotenciales
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
     * Set idEmpleadoMec
     *
     * @param string $idEmpleadoMec
     * @return CrmClientesPotenciales
     */
    public function setIdEmpleadoMec($idEmpleadoMec)
    {
        $this->idEmpleadoMec = $idEmpleadoMec;

        return $this;
    }

    /**
     * Get idEmpleadoMec
     *
     * @return string 
     */
    public function getIdEmpleadoMec()
    {
        return $this->idEmpleadoMec;
    }

    /**
     * Set idEmplContacto
     *
     * @param string $idEmplContacto
     * @return CrmClientesPotenciales
     */
    public function setIdEmplContacto($idEmplContacto)
    {
        $this->idEmplContacto = $idEmplContacto;

        return $this;
    }

    /**
     * Get idEmplContacto
     *
     * @return string 
     */
    public function getIdEmplContacto()
    {
        return $this->idEmplContacto;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return CrmClientesPotenciales
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return CrmClientesPotenciales
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
     * @return CrmClientesPotenciales
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
}
