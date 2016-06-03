<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmSolicitudesClientes
 *
 * @ORM\Table(name="CRM_Solicitudes_Clientes")
 * @ORM\Entity
 */
class CrmSolicitudesClientes
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Solicitud", type="integer", nullable=false)
     */
    private $idSolicitud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Entrada", type="datetime", nullable=false)
     */
    private $fechaEntrada;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Forma", type="string", length=8, nullable=false)
     */
    private $idForma;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo", type="string", length=8, nullable=false)
     */
    private $idTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Solicitud_Ini", type="integer", nullable=false)
     */
    private $idSolicitudIni;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota_Solicitud", type="string", length=100, nullable=false)
     */
    private $notaSolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Contacto", type="string", length=15, nullable=false)
     */
    private $idContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado_Rx", type="string", length=5, nullable=false)
     */
    private $idEmpleadoRx;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Answer", type="string", length=8, nullable=false)
     */
    private $idAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota_Answer", type="string", length=180, nullable=false)
     */
    private $notaAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado_Resp", type="string", length=15, nullable=false)
     */
    private $idEmpleadoResp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado_Exec", type="string", length=15, nullable=false)
     */
    private $idEmpleadoExec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Exec", type="datetime", nullable=false)
     */
    private $fechaExec;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fin", type="datetime", nullable=false)
     */
    private $fechaFin;

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
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     */
    private $contador1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fin_Real", type="datetime", nullable=false)
     */
    private $fechaFinReal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Solicitud_Ini", type="smallint", nullable=false)
     */
    private $anoSolicitudIni;



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
     * Set idSolicitud
     *
     * @param integer $idSolicitud
     * @return CrmSolicitudesClientes
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
     * Set fechaEntrada
     *
     * @param \DateTime $fechaEntrada
     * @return CrmSolicitudesClientes
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;

        return $this;
    }

    /**
     * Get fechaEntrada
     *
     * @return \DateTime 
     */
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }

    /**
     * Set idForma
     *
     * @param string $idForma
     * @return CrmSolicitudesClientes
     */
    public function setIdForma($idForma)
    {
        $this->idForma = $idForma;

        return $this;
    }

    /**
     * Get idForma
     *
     * @return string 
     */
    public function getIdForma()
    {
        return $this->idForma;
    }

    /**
     * Set idTipo
     *
     * @param string $idTipo
     * @return CrmSolicitudesClientes
     */
    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;

        return $this;
    }

    /**
     * Get idTipo
     *
     * @return string 
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Set idSolicitudIni
     *
     * @param integer $idSolicitudIni
     * @return CrmSolicitudesClientes
     */
    public function setIdSolicitudIni($idSolicitudIni)
    {
        $this->idSolicitudIni = $idSolicitudIni;

        return $this;
    }

    /**
     * Get idSolicitudIni
     *
     * @return integer 
     */
    public function getIdSolicitudIni()
    {
        return $this->idSolicitudIni;
    }

    /**
     * Set notaSolicitud
     *
     * @param string $notaSolicitud
     * @return CrmSolicitudesClientes
     */
    public function setNotaSolicitud($notaSolicitud)
    {
        $this->notaSolicitud = $notaSolicitud;

        return $this;
    }

    /**
     * Get notaSolicitud
     *
     * @return string 
     */
    public function getNotaSolicitud()
    {
        return $this->notaSolicitud;
    }

    /**
     * Set idContacto
     *
     * @param string $idContacto
     * @return CrmSolicitudesClientes
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
     * Set idEmpleadoRx
     *
     * @param string $idEmpleadoRx
     * @return CrmSolicitudesClientes
     */
    public function setIdEmpleadoRx($idEmpleadoRx)
    {
        $this->idEmpleadoRx = $idEmpleadoRx;

        return $this;
    }

    /**
     * Get idEmpleadoRx
     *
     * @return string 
     */
    public function getIdEmpleadoRx()
    {
        return $this->idEmpleadoRx;
    }

    /**
     * Set idAnswer
     *
     * @param string $idAnswer
     * @return CrmSolicitudesClientes
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
     * Set notaAnswer
     *
     * @param string $notaAnswer
     * @return CrmSolicitudesClientes
     */
    public function setNotaAnswer($notaAnswer)
    {
        $this->notaAnswer = $notaAnswer;

        return $this;
    }

    /**
     * Get notaAnswer
     *
     * @return string 
     */
    public function getNotaAnswer()
    {
        return $this->notaAnswer;
    }

    /**
     * Set idEmpleadoResp
     *
     * @param string $idEmpleadoResp
     * @return CrmSolicitudesClientes
     */
    public function setIdEmpleadoResp($idEmpleadoResp)
    {
        $this->idEmpleadoResp = $idEmpleadoResp;

        return $this;
    }

    /**
     * Get idEmpleadoResp
     *
     * @return string 
     */
    public function getIdEmpleadoResp()
    {
        return $this->idEmpleadoResp;
    }

    /**
     * Set idEmpleadoExec
     *
     * @param string $idEmpleadoExec
     * @return CrmSolicitudesClientes
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
     * Set fechaExec
     *
     * @param \DateTime $fechaExec
     * @return CrmSolicitudesClientes
     */
    public function setFechaExec($fechaExec)
    {
        $this->fechaExec = $fechaExec;

        return $this;
    }

    /**
     * Get fechaExec
     *
     * @return \DateTime 
     */
    public function getFechaExec()
    {
        return $this->fechaExec;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return CrmSolicitudesClientes
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
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return CrmSolicitudesClientes
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
     * Set idUser
     *
     * @param string $idUser
     * @return CrmSolicitudesClientes
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
     * @return CrmSolicitudesClientes
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
     * Set contador1
     *
     * @param integer $contador1
     * @return CrmSolicitudesClientes
     */
    public function setContador1($contador1)
    {
        $this->contador1 = $contador1;

        return $this;
    }

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
     * Set fechaFinReal
     *
     * @param \DateTime $fechaFinReal
     * @return CrmSolicitudesClientes
     */
    public function setFechaFinReal($fechaFinReal)
    {
        $this->fechaFinReal = $fechaFinReal;

        return $this;
    }

    /**
     * Get fechaFinReal
     *
     * @return \DateTime 
     */
    public function getFechaFinReal()
    {
        return $this->fechaFinReal;
    }

    /**
     * Set anoSolicitudIni
     *
     * @param integer $anoSolicitudIni
     * @return CrmSolicitudesClientes
     */
    public function setAnoSolicitudIni($anoSolicitudIni)
    {
        $this->anoSolicitudIni = $anoSolicitudIni;

        return $this;
    }

    /**
     * Get anoSolicitudIni
     *
     * @return integer 
     */
    public function getAnoSolicitudIni()
    {
        return $this->anoSolicitudIni;
    }
}
