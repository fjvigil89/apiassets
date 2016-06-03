<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChArqueos
 *
 * @ORM\Table(name="CH_Arqueos", indexes={@ORM\Index(name="Ix_Arqueo_Fecha", columns={"Fecha", "Id_Arqueo"})})
 * @ORM\Entity
 */
class ChArqueos
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
     * @ORM\Column(name="Id_Arqueo", type="integer", nullable=false)
     */
    private $idArqueo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

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
     * @ORM\Column(name="Id_Referencia", type="string", length=40, nullable=false)
     */
    private $idReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=120, nullable=false)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo", type="string", length=10, nullable=false)
     */
    private $idFondo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Real", type="integer", nullable=false)
     */
    private $impReal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Imp_Esperado", type="integer", nullable=false)
     */
    private $impEsperado;

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
     * @ORM\Column(name="Cajero", type="string", length=20, nullable=false)
     */
    private $cajero;

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
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Conceptokk", type="string", length=10, nullable=false)
     */
    private $idConceptokk;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacionkk", type="datetime", nullable=false)
     */
    private $fechaConfirmacionkk;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Fondo_Dif", type="string", length=10, nullable=false)
     */
    private $idFondoDif;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contabilizado", type="smallint", nullable=false)
     */
    private $contabilizado;



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
     * Set idArqueo
     *
     * @param integer $idArqueo
     * @return ChArqueos
     */
    public function setIdArqueo($idArqueo)
    {
        $this->idArqueo = $idArqueo;

        return $this;
    }

    /**
     * Get idArqueo
     *
     * @return integer 
     */
    public function getIdArqueo()
    {
        return $this->idArqueo;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return ChArqueos
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ChArqueos
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
     * @return ChArqueos
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
     * Set idReferencia
     *
     * @param string $idReferencia
     * @return ChArqueos
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return ChArqueos
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
     * Set idFondo
     *
     * @param string $idFondo
     * @return ChArqueos
     */
    public function setIdFondo($idFondo)
    {
        $this->idFondo = $idFondo;

        return $this;
    }

    /**
     * Get idFondo
     *
     * @return string 
     */
    public function getIdFondo()
    {
        return $this->idFondo;
    }

    /**
     * Set impReal
     *
     * @param integer $impReal
     * @return ChArqueos
     */
    public function setImpReal($impReal)
    {
        $this->impReal = $impReal;

        return $this;
    }

    /**
     * Get impReal
     *
     * @return integer 
     */
    public function getImpReal()
    {
        return $this->impReal;
    }

    /**
     * Set impEsperado
     *
     * @param integer $impEsperado
     * @return ChArqueos
     */
    public function setImpEsperado($impEsperado)
    {
        $this->impEsperado = $impEsperado;

        return $this;
    }

    /**
     * Get impEsperado
     *
     * @return integer 
     */
    public function getImpEsperado()
    {
        return $this->impEsperado;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return ChArqueos
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
     * @return ChArqueos
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
     * @return ChArqueos
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
     * @return ChArqueos
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
     * Set cajero
     *
     * @param string $cajero
     * @return ChArqueos
     */
    public function setCajero($cajero)
    {
        $this->cajero = $cajero;

        return $this;
    }

    /**
     * Get cajero
     *
     * @return string 
     */
    public function getCajero()
    {
        return $this->cajero;
    }

    /**
     * Set hechoPor
     *
     * @param string $hechoPor
     * @return ChArqueos
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
     * @return ChArqueos
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
     * Set idUser
     *
     * @param string $idUser
     * @return ChArqueos
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
     * @return ChArqueos
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ChArqueos
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
     * Set idConceptokk
     *
     * @param string $idConceptokk
     * @return ChArqueos
     */
    public function setIdConceptokk($idConceptokk)
    {
        $this->idConceptokk = $idConceptokk;

        return $this;
    }

    /**
     * Get idConceptokk
     *
     * @return string 
     */
    public function getIdConceptokk()
    {
        return $this->idConceptokk;
    }

    /**
     * Set fechaConfirmacionkk
     *
     * @param \DateTime $fechaConfirmacionkk
     * @return ChArqueos
     */
    public function setFechaConfirmacionkk($fechaConfirmacionkk)
    {
        $this->fechaConfirmacionkk = $fechaConfirmacionkk;

        return $this;
    }

    /**
     * Get fechaConfirmacionkk
     *
     * @return \DateTime 
     */
    public function getFechaConfirmacionkk()
    {
        return $this->fechaConfirmacionkk;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return ChArqueos
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
     * Set idFondoDif
     *
     * @param string $idFondoDif
     * @return ChArqueos
     */
    public function setIdFondoDif($idFondoDif)
    {
        $this->idFondoDif = $idFondoDif;

        return $this;
    }

    /**
     * Get idFondoDif
     *
     * @return string 
     */
    public function getIdFondoDif()
    {
        return $this->idFondoDif;
    }

    /**
     * Set contabilizado
     *
     * @param integer $contabilizado
     * @return ChArqueos
     */
    public function setContabilizado($contabilizado)
    {
        $this->contabilizado = $contabilizado;

        return $this;
    }

    /**
     * Get contabilizado
     *
     * @return integer 
     */
    public function getContabilizado()
    {
        return $this->contabilizado;
    }
}
