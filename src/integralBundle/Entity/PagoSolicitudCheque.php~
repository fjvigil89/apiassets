<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagoSolicitudCheque
 *
 * @ORM\Table(name="Pago_Solicitud_Cheque", uniqueConstraints={@ORM\UniqueConstraint(name="PSCH1", columns={"Contador1"})}, indexes={@ORM\Index(name="PSCH2", columns={"Fecha"})})
 * @ORM\Entity
 */
class PagoSolicitudCheque
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Localidad", type="string", length=60, nullable=false)
     */
    private $localidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Solicitud", type="smallint", nullable=false)
     */
    private $tipoSolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Beneficiario", type="string", length=60, nullable=false)
     */
    private $beneficiario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=150, nullable=false)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=2, nullable=false)
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="Solicitado_Por", type="string", length=60, nullable=false)
     */
    private $solicitadoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Revisado_Por", type="string", length=60, nullable=false)
     */
    private $revisadoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Autorizado_Por", type="string", length=60, nullable=false)
     */
    private $autorizadoPor;

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
     * @var string
     *
     * @ORM\Column(name="ID_DocRef", type="string", length=15, nullable=false)
     */
    private $idDocref;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CCosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var integer
     *
     * @ORM\Column(name="IG_Menores", type="smallint", nullable=false)
     */
    private $igMenores;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_YaGenerado", type="boolean", nullable=false)
     */
    private $pagoYagenerado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1_Pago", type="integer", nullable=false)
     */
    private $contador1Pago;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nro_Doc", type="integer", nullable=false)
     */
    private $nroDoc;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return PagoSolicitudCheque
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
     * Set localidad
     *
     * @param string $localidad
     * @return PagoSolicitudCheque
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set tipoSolicitud
     *
     * @param integer $tipoSolicitud
     * @return PagoSolicitudCheque
     */
    public function setTipoSolicitud($tipoSolicitud)
    {
        $this->tipoSolicitud = $tipoSolicitud;

        return $this;
    }

    /**
     * Get tipoSolicitud
     *
     * @return integer 
     */
    public function getTipoSolicitud()
    {
        return $this->tipoSolicitud;
    }

    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return PagoSolicitudCheque
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
     * Set beneficiario
     *
     * @param string $beneficiario
     * @return PagoSolicitudCheque
     */
    public function setBeneficiario($beneficiario)
    {
        $this->beneficiario = $beneficiario;

        return $this;
    }

    /**
     * Get beneficiario
     *
     * @return string 
     */
    public function getBeneficiario()
    {
        return $this->beneficiario;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return PagoSolicitudCheque
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return PagoSolicitudCheque
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return PagoSolicitudCheque
     */
    public function setIdConcepto($idConcepto)
    {
        $this->idConcepto = $idConcepto;

        return $this;
    }

    /**
     * Get idConcepto
     *
     * @return string 
     */
    public function getIdConcepto()
    {
        return $this->idConcepto;
    }

    /**
     * Set solicitadoPor
     *
     * @param string $solicitadoPor
     * @return PagoSolicitudCheque
     */
    public function setSolicitadoPor($solicitadoPor)
    {
        $this->solicitadoPor = $solicitadoPor;

        return $this;
    }

    /**
     * Get solicitadoPor
     *
     * @return string 
     */
    public function getSolicitadoPor()
    {
        return $this->solicitadoPor;
    }

    /**
     * Set revisadoPor
     *
     * @param string $revisadoPor
     * @return PagoSolicitudCheque
     */
    public function setRevisadoPor($revisadoPor)
    {
        $this->revisadoPor = $revisadoPor;

        return $this;
    }

    /**
     * Get revisadoPor
     *
     * @return string 
     */
    public function getRevisadoPor()
    {
        return $this->revisadoPor;
    }

    /**
     * Set autorizadoPor
     *
     * @param string $autorizadoPor
     * @return PagoSolicitudCheque
     */
    public function setAutorizadoPor($autorizadoPor)
    {
        $this->autorizadoPor = $autorizadoPor;

        return $this;
    }

    /**
     * Get autorizadoPor
     *
     * @return string 
     */
    public function getAutorizadoPor()
    {
        return $this->autorizadoPor;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return PagoSolicitudCheque
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
     * @return PagoSolicitudCheque
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
     * @return PagoSolicitudCheque
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
     * Set idDocref
     *
     * @param string $idDocref
     * @return PagoSolicitudCheque
     */
    public function setIdDocref($idDocref)
    {
        $this->idDocref = $idDocref;

        return $this;
    }

    /**
     * Get idDocref
     *
     * @return string 
     */
    public function getIdDocref()
    {
        return $this->idDocref;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return PagoSolicitudCheque
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
     * Set igMenores
     *
     * @param integer $igMenores
     * @return PagoSolicitudCheque
     */
    public function setIgMenores($igMenores)
    {
        $this->igMenores = $igMenores;

        return $this;
    }

    /**
     * Get igMenores
     *
     * @return integer 
     */
    public function getIgMenores()
    {
        return $this->igMenores;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return PagoSolicitudCheque
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
     * Set pagoYagenerado
     *
     * @param boolean $pagoYagenerado
     * @return PagoSolicitudCheque
     */
    public function setPagoYagenerado($pagoYagenerado)
    {
        $this->pagoYagenerado = $pagoYagenerado;

        return $this;
    }

    /**
     * Get pagoYagenerado
     *
     * @return boolean 
     */
    public function getPagoYagenerado()
    {
        return $this->pagoYagenerado;
    }

    /**
     * Set contador1Pago
     *
     * @param integer $contador1Pago
     * @return PagoSolicitudCheque
     */
    public function setContador1Pago($contador1Pago)
    {
        $this->contador1Pago = $contador1Pago;

        return $this;
    }

    /**
     * Get contador1Pago
     *
     * @return integer 
     */
    public function getContador1Pago()
    {
        return $this->contador1Pago;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return PagoSolicitudCheque
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
     * Set nroDoc
     *
     * @param integer $nroDoc
     * @return PagoSolicitudCheque
     */
    public function setNroDoc($nroDoc)
    {
        $this->nroDoc = $nroDoc;

        return $this;
    }

    /**
     * Get nroDoc
     *
     * @return integer 
     */
    public function getNroDoc()
    {
        return $this->nroDoc;
    }
}
