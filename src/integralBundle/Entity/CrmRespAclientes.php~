<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmRespAclientes
 *
 * @ORM\Table(name="CRM_Resp_AClientes")
 * @ORM\Entity
 */
class CrmRespAclientes
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
     * @var integer
     *
     * @ORM\Column(name="Id_Visita", type="integer", nullable=false)
     */
    private $idVisita;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Ini", type="datetime", nullable=false)
     */
    private $fechaIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fin", type="datetime", nullable=false)
     */
    private $fechaFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="Duracion", type="integer", nullable=false)
     */
    private $duracion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Motivo_Resp", type="string", length=8, nullable=false)
     */
    private $idMotivoResp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Via_Resp", type="string", length=8, nullable=false)
     */
    private $idViaResp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Solicitud", type="integer", nullable=false)
     */
    private $idSolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Contacto", type="string", length=15, nullable=false)
     */
    private $idContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado_Mec", type="string", length=5, nullable=false)
     */
    private $idEmpleadoMec;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado_Exec", type="string", length=15, nullable=false)
     */
    private $idEmpleadoExec;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Doc_QueGenera", type="string", length=8, nullable=false)
     */
    private $tipoDocQuegenera;

    /**
     * @var string
     *
     * @ORM\Column(name="Datos_Doc_QueGenera", type="string", length=45, nullable=false)
     */
    private $datosDocQuegenera;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Hora", type="integer", nullable=false)
     */
    private $tarifaHora;

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
     * @var integer
     *
     * @ORM\Column(name="Ano_Solicitud", type="smallint", nullable=false)
     */
    private $anoSolicitud;



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
     * @return CrmRespAclientes
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
     * Set idVisita
     *
     * @param integer $idVisita
     * @return CrmRespAclientes
     */
    public function setIdVisita($idVisita)
    {
        $this->idVisita = $idVisita;

        return $this;
    }

    /**
     * Get idVisita
     *
     * @return integer 
     */
    public function getIdVisita()
    {
        return $this->idVisita;
    }

    /**
     * Set fechaIni
     *
     * @param \DateTime $fechaIni
     * @return CrmRespAclientes
     */
    public function setFechaIni($fechaIni)
    {
        $this->fechaIni = $fechaIni;

        return $this;
    }

    /**
     * Get fechaIni
     *
     * @return \DateTime 
     */
    public function getFechaIni()
    {
        return $this->fechaIni;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return CrmRespAclientes
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     * @return CrmRespAclientes
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return integer 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set idMotivoResp
     *
     * @param string $idMotivoResp
     * @return CrmRespAclientes
     */
    public function setIdMotivoResp($idMotivoResp)
    {
        $this->idMotivoResp = $idMotivoResp;

        return $this;
    }

    /**
     * Get idMotivoResp
     *
     * @return string 
     */
    public function getIdMotivoResp()
    {
        return $this->idMotivoResp;
    }

    /**
     * Set idViaResp
     *
     * @param string $idViaResp
     * @return CrmRespAclientes
     */
    public function setIdViaResp($idViaResp)
    {
        $this->idViaResp = $idViaResp;

        return $this;
    }

    /**
     * Get idViaResp
     *
     * @return string 
     */
    public function getIdViaResp()
    {
        return $this->idViaResp;
    }

    /**
     * Set idSolicitud
     *
     * @param integer $idSolicitud
     * @return CrmRespAclientes
     */
    public function setIdSolicitud($idSolicitud)
    {
        $this->idSolicitud = $idSolicitud;

        return $this;
    }

    /**
     * Get idSolicitud
     *
     * @return integer 
     */
    public function getIdSolicitud()
    {
        return $this->idSolicitud;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return CrmRespAclientes
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
     * Set idContacto
     *
     * @param string $idContacto
     * @return CrmRespAclientes
     */
    public function setIdContacto($idContacto)
    {
        $this->idContacto = $idContacto;

        return $this;
    }

    /**
     * Get idContacto
     *
     * @return string 
     */
    public function getIdContacto()
    {
        return $this->idContacto;
    }

    /**
     * Set idEmpleadoMec
     *
     * @param string $idEmpleadoMec
     * @return CrmRespAclientes
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
     * Set idEmpleadoExec
     *
     * @param string $idEmpleadoExec
     * @return CrmRespAclientes
     */
    public function setIdEmpleadoExec($idEmpleadoExec)
    {
        $this->idEmpleadoExec = $idEmpleadoExec;

        return $this;
    }

    /**
     * Get idEmpleadoExec
     *
     * @return string 
     */
    public function getIdEmpleadoExec()
    {
        return $this->idEmpleadoExec;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return CrmRespAclientes
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
     * Set tipoDocQuegenera
     *
     * @param string $tipoDocQuegenera
     * @return CrmRespAclientes
     */
    public function setTipoDocQuegenera($tipoDocQuegenera)
    {
        $this->tipoDocQuegenera = $tipoDocQuegenera;

        return $this;
    }

    /**
     * Get tipoDocQuegenera
     *
     * @return string 
     */
    public function getTipoDocQuegenera()
    {
        return $this->tipoDocQuegenera;
    }

    /**
     * Set datosDocQuegenera
     *
     * @param string $datosDocQuegenera
     * @return CrmRespAclientes
     */
    public function setDatosDocQuegenera($datosDocQuegenera)
    {
        $this->datosDocQuegenera = $datosDocQuegenera;

        return $this;
    }

    /**
     * Get datosDocQuegenera
     *
     * @return string 
     */
    public function getDatosDocQuegenera()
    {
        return $this->datosDocQuegenera;
    }

    /**
     * Set tarifaHora
     *
     * @param integer $tarifaHora
     * @return CrmRespAclientes
     */
    public function setTarifaHora($tarifaHora)
    {
        $this->tarifaHora = $tarifaHora;

        return $this;
    }

    /**
     * Get tarifaHora
     *
     * @return integer 
     */
    public function getTarifaHora()
    {
        return $this->tarifaHora;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return CrmRespAclientes
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
     * @return CrmRespAclientes
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
     * Set anoSolicitud
     *
     * @param integer $anoSolicitud
     * @return CrmRespAclientes
     */
    public function setAnoSolicitud($anoSolicitud)
    {
        $this->anoSolicitud = $anoSolicitud;

        return $this;
    }

    /**
     * Get anoSolicitud
     *
     * @return integer 
     */
    public function getAnoSolicitud()
    {
        return $this->anoSolicitud;
    }
}
