<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecepcionCambiosClasifBhead
 *
 * @ORM\Table(name="Recepcion_Cambios_Clasif_BHead")
 * @ORM\Entity
 */
class RecepcionCambiosClasifBhead
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
     * @var integer
     *
     * @ORM\Column(name="Id_Doc", type="integer", nullable=false)
     */
    private $idDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Doc", type="smallint", nullable=false)
     */
    private $anoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Referencia", type="string", length=40, nullable=false)
     */
    private $idReferencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Rx_Ini", type="string", length=10, nullable=false)
     */
    private $idClasifRxIni;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Rx_Fin", type="string", length=10, nullable=false)
     */
    private $idClasifRxFin;

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
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Compro", type="smallint", nullable=false)
     */
    private $mesCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro", type="smallint", nullable=false)
     */
    private $anoCompro;

    /**
     * @var string
     *
     * @ORM\Column(name="PC_NAME", type="string", length=40, nullable=false)
     */
    private $pcName;

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
     * @ORM\Column(name="Notas", type="string", length=70, nullable=false)
     */
    private $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="Hecho_Por", type="string", length=20, nullable=false)
     */
    private $hechoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Aprobado_Por", type="string", length=20, nullable=false)
     */
    private $aprobadoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;



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
     * Set idDoc
     *
     * @param integer $idDoc
     * @return RecepcionCambiosClasifBhead
     */
    public function setIdDoc($idDoc)
    {
        $this->idDoc = $idDoc;

        return $this;
    }

    /**
     * Get idDoc
     *
     * @return integer 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set anoDoc
     *
     * @param integer $anoDoc
     * @return RecepcionCambiosClasifBhead
     */
    public function setAnoDoc($anoDoc)
    {
        $this->anoDoc = $anoDoc;

        return $this;
    }

    /**
     * Get anoDoc
     *
     * @return integer 
     */
    public function getAnoDoc()
    {
        return $this->anoDoc;
    }

    /**
     * Set idReferencia
     *
     * @param string $idReferencia
     * @return RecepcionCambiosClasifBhead
     */
    public function setIdReferencia($idReferencia)
    {
        $this->idReferencia = $idReferencia;

        return $this;
    }

    /**
     * Get idReferencia
     *
     * @return string 
     */
    public function getIdReferencia()
    {
        return $this->idReferencia;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return RecepcionCambiosClasifBhead
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
     * Set estado
     *
     * @param integer $estado
     * @return RecepcionCambiosClasifBhead
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
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return RecepcionCambiosClasifBhead
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
     * Set idClasifRxIni
     *
     * @param string $idClasifRxIni
     * @return RecepcionCambiosClasifBhead
     */
    public function setIdClasifRxIni($idClasifRxIni)
    {
        $this->idClasifRxIni = $idClasifRxIni;

        return $this;
    }

    /**
     * Get idClasifRxIni
     *
     * @return string 
     */
    public function getIdClasifRxIni()
    {
        return $this->idClasifRxIni;
    }

    /**
     * Set idClasifRxFin
     *
     * @param string $idClasifRxFin
     * @return RecepcionCambiosClasifBhead
     */
    public function setIdClasifRxFin($idClasifRxFin)
    {
        $this->idClasifRxFin = $idClasifRxFin;

        return $this;
    }

    /**
     * Get idClasifRxFin
     *
     * @return string 
     */
    public function getIdClasifRxFin()
    {
        return $this->idClasifRxFin;
    }

    /**
     * Set fechaIni
     *
     * @param \DateTime $fechaIni
     * @return RecepcionCambiosClasifBhead
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
     * @return RecepcionCambiosClasifBhead
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
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return RecepcionCambiosClasifBhead
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return RecepcionCambiosClasifBhead
     */
    public function setIdCompro($idCompro)
    {
        $this->idCompro = $idCompro;

        return $this;
    }

    /**
     * Get idCompro
     *
     * @return integer 
     */
    public function getIdCompro()
    {
        return $this->idCompro;
    }

    /**
     * Set mesCompro
     *
     * @param integer $mesCompro
     * @return RecepcionCambiosClasifBhead
     */
    public function setMesCompro($mesCompro)
    {
        $this->mesCompro = $mesCompro;

        return $this;
    }

    /**
     * Get mesCompro
     *
     * @return integer 
     */
    public function getMesCompro()
    {
        return $this->mesCompro;
    }

    /**
     * Set anoCompro
     *
     * @param integer $anoCompro
     * @return RecepcionCambiosClasifBhead
     */
    public function setAnoCompro($anoCompro)
    {
        $this->anoCompro = $anoCompro;

        return $this;
    }

    /**
     * Get anoCompro
     *
     * @return integer 
     */
    public function getAnoCompro()
    {
        return $this->anoCompro;
    }

    /**
     * Set pcName
     *
     * @param string $pcName
     * @return RecepcionCambiosClasifBhead
     */
    public function setPcName($pcName)
    {
        $this->pcName = $pcName;

        return $this;
    }

    /**
     * Get pcName
     *
     * @return string 
     */
    public function getPcName()
    {
        return $this->pcName;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return RecepcionCambiosClasifBhead
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
     * @return RecepcionCambiosClasifBhead
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
     * Set notas
     *
     * @param string $notas
     * @return RecepcionCambiosClasifBhead
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
     * Set hechoPor
     *
     * @param string $hechoPor
     * @return RecepcionCambiosClasifBhead
     */
    public function setHechoPor($hechoPor)
    {
        $this->hechoPor = $hechoPor;

        return $this;
    }

    /**
     * Get hechoPor
     *
     * @return string 
     */
    public function getHechoPor()
    {
        return $this->hechoPor;
    }

    /**
     * Set aprobadoPor
     *
     * @param string $aprobadoPor
     * @return RecepcionCambiosClasifBhead
     */
    public function setAprobadoPor($aprobadoPor)
    {
        $this->aprobadoPor = $aprobadoPor;

        return $this;
    }

    /**
     * Get aprobadoPor
     *
     * @return string 
     */
    public function getAprobadoPor()
    {
        return $this->aprobadoPor;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return RecepcionCambiosClasifBhead
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
}
