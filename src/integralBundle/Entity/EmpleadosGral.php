<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmpleadosGral
 *
 * @ORM\Table(name="Empleados_Gral")
 * @ORM\Entity
 */
class EmpleadosGral
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="No_CI", type="string", length=15, nullable=true)
     */
    private $noCi;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=30, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellidos", type="string", length=30, nullable=true)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Ciudad", type="string", length=50, nullable=true)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="Region", type="string", length=50, nullable=true)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo_Postal", type="string", length=20, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Pais", type="string", length=50, nullable=true)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="Exttelef", type="string", length=15, nullable=true)
     */
    private $exttelef;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono_Particular", type="string", length=15, nullable=true)
     */
    private $telefonoParticular;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=true)
     */
    private $idCcosto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Nacimiento", type="datetime", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=true)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Baja", type="boolean", nullable=true)
     */
    private $baja;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Alta", type="boolean", nullable=true)
     */
    private $alta;



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
     * Set noCi
     *
     * @param string $noCi
     * @return EmpleadosGral
     */
    public function setNoCi($noCi)
    {
        $this->noCi = $noCi;

        return $this;
    }

    /**
     * Get noCi
     *
     * @return string 
     */
    public function getNoCi()
    {
        return $this->noCi;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return EmpleadosGral
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return EmpleadosGral
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return EmpleadosGral
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
     * @return EmpleadosGral
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
     * Set region
     *
     * @param string $region
     * @return EmpleadosGral
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     * @return EmpleadosGral
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return EmpleadosGral
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
     * Set exttelef
     *
     * @param string $exttelef
     * @return EmpleadosGral
     */
    public function setExttelef($exttelef)
    {
        $this->exttelef = $exttelef;

        return $this;
    }

    /**
     * Get exttelef
     *
     * @return string 
     */
    public function getExttelef()
    {
        return $this->exttelef;
    }

    /**
     * Set telefonoParticular
     *
     * @param string $telefonoParticular
     * @return EmpleadosGral
     */
    public function setTelefonoParticular($telefonoParticular)
    {
        $this->telefonoParticular = $telefonoParticular;

        return $this;
    }

    /**
     * Get telefonoParticular
     *
     * @return string 
     */
    public function getTelefonoParticular()
    {
        return $this->telefonoParticular;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return EmpleadosGral
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return EmpleadosGral
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return EmpleadosGral
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
     * Set baja
     *
     * @param boolean $baja
     * @return EmpleadosGral
     */
    public function setBaja($baja)
    {
        $this->baja = $baja;

        return $this;
    }

    /**
     * Get baja
     *
     * @return boolean 
     */
    public function getBaja()
    {
        return $this->baja;
    }

    /**
     * Set alta
     *
     * @param boolean $alta
     * @return EmpleadosGral
     */
    public function setAlta($alta)
    {
        $this->alta = $alta;

        return $this;
    }

    /**
     * Get alta
     *
     * @return boolean 
     */
    public function getAlta()
    {
        return $this->alta;
    }
}
