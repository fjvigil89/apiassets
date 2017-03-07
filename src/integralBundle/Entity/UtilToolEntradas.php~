<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilToolEntradas
 *
 * @ORM\Table(name="Util_Tool_Entradas", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Util_Tool_Entradas_Contador", columns={"Contador"})})
 * @ORM\Entity
 */
class UtilToolEntradas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Entrada", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEntrada;

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
     * @ORM\Column(name="Ano_Entrada", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoEntrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_UH", type="string", length=20, nullable=false)
     */
    private $idUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_UH", type="string", length=255, nullable=false)
     */
    private $descUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Entrada_UH", type="string", length=3, nullable=false)
     */
    private $idClasifEntradaUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_UH", type="string", length=3, nullable=false)
     */
    private $idClasifUh;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Inicial", type="integer", nullable=false)
     */
    private $valorInicial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Alta", type="datetime", nullable=false)
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=10, nullable=false)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenRef", type="string", length=5, nullable=false)
     */
    private $idAlmacenref;

    /**
     * @var string
     *
     * @ORM\Column(name="Ano_Referencia", type="string", length=4, nullable=false)
     */
    private $anoReferencia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizado", type="boolean", nullable=false)
     */
    private $contabilizado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Comprobante", type="integer", nullable=false)
     */
    private $idComprobante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Comprobante", type="integer", nullable=false)
     */
    private $anoComprobante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Comprobante", type="smallint", nullable=false)
     */
    private $mesComprobante;

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
     * @ORM\Column(name="Valor_InicialMC", type="integer", nullable=false)
     */
    private $valorInicialmc;

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
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;



    /**
     * Set idEntrada
     *
     * @param integer $idEntrada
     * @return UtilToolEntradas
     */
    public function setIdEntrada($idEntrada)
    {
        $this->idEntrada = $idEntrada;

        return $this;
    }

    /**
     * Get idEntrada
     *
     * @return integer 
     */
    public function getIdEntrada()
    {
        return $this->idEntrada;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return UtilToolEntradas
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
     * Set anoEntrada
     *
     * @param integer $anoEntrada
     * @return UtilToolEntradas
     */
    public function setAnoEntrada($anoEntrada)
    {
        $this->anoEntrada = $anoEntrada;

        return $this;
    }

    /**
     * Get anoEntrada
     *
     * @return integer 
     */
    public function getAnoEntrada()
    {
        return $this->anoEntrada;
    }

    /**
     * Set confirmada
     *
     * @param integer $confirmada
     * @return UtilToolEntradas
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return integer 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * Set idUh
     *
     * @param string $idUh
     * @return UtilToolEntradas
     */
    public function setIdUh($idUh)
    {
        $this->idUh = $idUh;

        return $this;
    }

    /**
     * Get idUh
     *
     * @return string 
     */
    public function getIdUh()
    {
        return $this->idUh;
    }

    /**
     * Set descUh
     *
     * @param string $descUh
     * @return UtilToolEntradas
     */
    public function setDescUh($descUh)
    {
        $this->descUh = $descUh;

        return $this;
    }

    /**
     * Get descUh
     *
     * @return string 
     */
    public function getDescUh()
    {
        return $this->descUh;
    }

    /**
     * Set idClasifEntradaUh
     *
     * @param string $idClasifEntradaUh
     * @return UtilToolEntradas
     */
    public function setIdClasifEntradaUh($idClasifEntradaUh)
    {
        $this->idClasifEntradaUh = $idClasifEntradaUh;

        return $this;
    }

    /**
     * Get idClasifEntradaUh
     *
     * @return string 
     */
    public function getIdClasifEntradaUh()
    {
        return $this->idClasifEntradaUh;
    }

    /**
     * Set idClasifUh
     *
     * @param string $idClasifUh
     * @return UtilToolEntradas
     */
    public function setIdClasifUh($idClasifUh)
    {
        $this->idClasifUh = $idClasifUh;

        return $this;
    }

    /**
     * Get idClasifUh
     *
     * @return string 
     */
    public function getIdClasifUh()
    {
        return $this->idClasifUh;
    }

    /**
     * Set valorInicial
     *
     * @param integer $valorInicial
     * @return UtilToolEntradas
     */
    public function setValorInicial($valorInicial)
    {
        $this->valorInicial = $valorInicial;

        return $this;
    }

    /**
     * Get valorInicial
     *
     * @return integer 
     */
    public function getValorInicial()
    {
        return $this->valorInicial;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return UtilToolEntradas
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return UtilToolEntradas
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
     * Set nota
     *
     * @param string $nota
     * @return UtilToolEntradas
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
     * Set referencia
     *
     * @param string $referencia
     * @return UtilToolEntradas
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set idAlmacenref
     *
     * @param string $idAlmacenref
     * @return UtilToolEntradas
     */
    public function setIdAlmacenref($idAlmacenref)
    {
        $this->idAlmacenref = $idAlmacenref;

        return $this;
    }

    /**
     * Get idAlmacenref
     *
     * @return string 
     */
    public function getIdAlmacenref()
    {
        return $this->idAlmacenref;
    }

    /**
     * Set anoReferencia
     *
     * @param string $anoReferencia
     * @return UtilToolEntradas
     */
    public function setAnoReferencia($anoReferencia)
    {
        $this->anoReferencia = $anoReferencia;

        return $this;
    }

    /**
     * Get anoReferencia
     *
     * @return string 
     */
    public function getAnoReferencia()
    {
        return $this->anoReferencia;
    }

    /**
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return UtilToolEntradas
     */
    public function setContabilizado($contabilizado)
    {
        $this->contabilizado = $contabilizado;

        return $this;
    }

    /**
     * Get contabilizado
     *
     * @return boolean 
     */
    public function getContabilizado()
    {
        return $this->contabilizado;
    }

    /**
     * Set idComprobante
     *
     * @param integer $idComprobante
     * @return UtilToolEntradas
     */
    public function setIdComprobante($idComprobante)
    {
        $this->idComprobante = $idComprobante;

        return $this;
    }

    /**
     * Get idComprobante
     *
     * @return integer 
     */
    public function getIdComprobante()
    {
        return $this->idComprobante;
    }

    /**
     * Set anoComprobante
     *
     * @param integer $anoComprobante
     * @return UtilToolEntradas
     */
    public function setAnoComprobante($anoComprobante)
    {
        $this->anoComprobante = $anoComprobante;

        return $this;
    }

    /**
     * Get anoComprobante
     *
     * @return integer 
     */
    public function getAnoComprobante()
    {
        return $this->anoComprobante;
    }

    /**
     * Set mesComprobante
     *
     * @param integer $mesComprobante
     * @return UtilToolEntradas
     */
    public function setMesComprobante($mesComprobante)
    {
        $this->mesComprobante = $mesComprobante;

        return $this;
    }

    /**
     * Get mesComprobante
     *
     * @return integer 
     */
    public function getMesComprobante()
    {
        return $this->mesComprobante;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return UtilToolEntradas
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
     * @return UtilToolEntradas
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
     * Set valorInicialmc
     *
     * @param integer $valorInicialmc
     * @return UtilToolEntradas
     */
    public function setValorInicialmc($valorInicialmc)
    {
        $this->valorInicialmc = $valorInicialmc;

        return $this;
    }

    /**
     * Get valorInicialmc
     *
     * @return integer 
     */
    public function getValorInicialmc()
    {
        return $this->valorInicialmc;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return UtilToolEntradas
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
     * @return UtilToolEntradas
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
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return UtilToolEntradas
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
