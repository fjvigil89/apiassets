<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntradaActivofijo
 *
 * @ORM\Table(name="Entrada_ActivoFijo", indexes={@ORM\Index(name="IX_Entrada_ActivoFijo", columns={"Id_ActivoFijo"})})
 * @ORM\Entity
 */
class EntradaActivofijo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Entrada", type="integer", nullable=false)
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
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ActivoFijo", type="string", length=255, nullable=false)
     */
    private $descActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Rotulo", type="string", length=15, nullable=false)
     */
    private $idRotulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_TipoActivoFijo", type="string", length=3, nullable=false)
     */
    private $idTipoactivofijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Inicial", type="integer", nullable=false)
     */
    private $valorInicial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialMC", type="integer", nullable=false)
     */
    private $valorInicialmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tasa_Depreciacion", type="integer", nullable=false)
     */
    private $tasaDepreciacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Entrada", type="string", length=3, nullable=false)
     */
    private $tipoEntrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Alta", type="datetime", nullable=false)
     */
    private $fechaAlta;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=5, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Subclasificacion", type="string", length=5, nullable=false)
     */
    private $idSubclasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Especificacion", type="string", length=15, nullable=false)
     */
    private $idEspecificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AreaResp", type="string", length=10, nullable=false)
     */
    private $idArearesp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="CNMB", type="string", length=50, nullable=false)
     */
    private $cnmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="referencia", type="integer", nullable=false)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenRef", type="string", length=5, nullable=false)
     */
    private $idAlmacenref;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Referencia", type="smallint", nullable=false)
     */
    private $anoReferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_Acumulada", type="integer", nullable=false)
     */
    private $depreciacionAcumulada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_AcumuladaMC", type="integer", nullable=false)
     */
    private $depreciacionAcumuladamc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Residual", type="integer", nullable=false)
     */
    private $valorResidual;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_ResidualMC", type="integer", nullable=false)
     */
    private $valorResidualmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero_Serie", type="string", length=30, nullable=false)
     */
    private $numeroSerie;

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
     * @return EntradaActivofijo
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
     * @return EntradaActivofijo
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
     * @return EntradaActivofijo
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
     * @return EntradaActivofijo
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
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return EntradaActivofijo
     */
    public function setIdActivofijo($idActivofijo)
    {
        $this->idActivofijo = $idActivofijo;

        return $this;
    }

    /**
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set descActivofijo
     *
     * @param string $descActivofijo
     * @return EntradaActivofijo
     */
    public function setDescActivofijo($descActivofijo)
    {
        $this->descActivofijo = $descActivofijo;

        return $this;
    }

    /**
     * Get descActivofijo
     *
     * @return string 
     */
    public function getDescActivofijo()
    {
        return $this->descActivofijo;
    }

    /**
     * Set idRotulo
     *
     * @param string $idRotulo
     * @return EntradaActivofijo
     */
    public function setIdRotulo($idRotulo)
    {
        $this->idRotulo = $idRotulo;

        return $this;
    }

    /**
     * Get idRotulo
     *
     * @return string 
     */
    public function getIdRotulo()
    {
        return $this->idRotulo;
    }

    /**
     * Set idTipoactivofijo
     *
     * @param string $idTipoactivofijo
     * @return EntradaActivofijo
     */
    public function setIdTipoactivofijo($idTipoactivofijo)
    {
        $this->idTipoactivofijo = $idTipoactivofijo;

        return $this;
    }

    /**
     * Get idTipoactivofijo
     *
     * @return string 
     */
    public function getIdTipoactivofijo()
    {
        return $this->idTipoactivofijo;
    }

    /**
     * Set valorInicial
     *
     * @param integer $valorInicial
     * @return EntradaActivofijo
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
     * Set valorInicialmc
     *
     * @param integer $valorInicialmc
     * @return EntradaActivofijo
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
     * Set tasaDepreciacion
     *
     * @param integer $tasaDepreciacion
     * @return EntradaActivofijo
     */
    public function setTasaDepreciacion($tasaDepreciacion)
    {
        $this->tasaDepreciacion = $tasaDepreciacion;

        return $this;
    }

    /**
     * Get tasaDepreciacion
     *
     * @return integer 
     */
    public function getTasaDepreciacion()
    {
        return $this->tasaDepreciacion;
    }

    /**
     * Set tipoEntrada
     *
     * @param string $tipoEntrada
     * @return EntradaActivofijo
     */
    public function setTipoEntrada($tipoEntrada)
    {
        $this->tipoEntrada = $tipoEntrada;

        return $this;
    }

    /**
     * Get tipoEntrada
     *
     * @return string 
     */
    public function getTipoEntrada()
    {
        return $this->tipoEntrada;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return EntradaActivofijo
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
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return EntradaActivofijo
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set idSubclasificacion
     *
     * @param string $idSubclasificacion
     * @return EntradaActivofijo
     */
    public function setIdSubclasificacion($idSubclasificacion)
    {
        $this->idSubclasificacion = $idSubclasificacion;

        return $this;
    }

    /**
     * Get idSubclasificacion
     *
     * @return string 
     */
    public function getIdSubclasificacion()
    {
        return $this->idSubclasificacion;
    }

    /**
     * Set idEspecificacion
     *
     * @param string $idEspecificacion
     * @return EntradaActivofijo
     */
    public function setIdEspecificacion($idEspecificacion)
    {
        $this->idEspecificacion = $idEspecificacion;

        return $this;
    }

    /**
     * Get idEspecificacion
     *
     * @return string 
     */
    public function getIdEspecificacion()
    {
        return $this->idEspecificacion;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return EntradaActivofijo
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
     * Set idArearesp
     *
     * @param string $idArearesp
     * @return EntradaActivofijo
     */
    public function setIdArearesp($idArearesp)
    {
        $this->idArearesp = $idArearesp;

        return $this;
    }

    /**
     * Get idArearesp
     *
     * @return string 
     */
    public function getIdArearesp()
    {
        return $this->idArearesp;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return EntradaActivofijo
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
     * @return EntradaActivofijo
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
     * @return EntradaActivofijo
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
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return EntradaActivofijo
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
     * @return EntradaActivofijo
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
     * @return EntradaActivofijo
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
     * @return EntradaActivofijo
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
     * Set cnmb
     *
     * @param string $cnmb
     * @return EntradaActivofijo
     */
    public function setCnmb($cnmb)
    {
        $this->cnmb = $cnmb;

        return $this;
    }

    /**
     * Get cnmb
     *
     * @return string 
     */
    public function getCnmb()
    {
        return $this->cnmb;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return EntradaActivofijo
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set referencia
     *
     * @param integer $referencia
     * @return EntradaActivofijo
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return integer 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set idAlmacenref
     *
     * @param string $idAlmacenref
     * @return EntradaActivofijo
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
     * @param integer $anoReferencia
     * @return EntradaActivofijo
     */
    public function setAnoReferencia($anoReferencia)
    {
        $this->anoReferencia = $anoReferencia;

        return $this;
    }

    /**
     * Get anoReferencia
     *
     * @return integer 
     */
    public function getAnoReferencia()
    {
        return $this->anoReferencia;
    }

    /**
     * Set depreciacionAcumulada
     *
     * @param integer $depreciacionAcumulada
     * @return EntradaActivofijo
     */
    public function setDepreciacionAcumulada($depreciacionAcumulada)
    {
        $this->depreciacionAcumulada = $depreciacionAcumulada;

        return $this;
    }

    /**
     * Get depreciacionAcumulada
     *
     * @return integer 
     */
    public function getDepreciacionAcumulada()
    {
        return $this->depreciacionAcumulada;
    }

    /**
     * Set depreciacionAcumuladamc
     *
     * @param integer $depreciacionAcumuladamc
     * @return EntradaActivofijo
     */
    public function setDepreciacionAcumuladamc($depreciacionAcumuladamc)
    {
        $this->depreciacionAcumuladamc = $depreciacionAcumuladamc;

        return $this;
    }

    /**
     * Get depreciacionAcumuladamc
     *
     * @return integer 
     */
    public function getDepreciacionAcumuladamc()
    {
        return $this->depreciacionAcumuladamc;
    }

    /**
     * Set valorResidual
     *
     * @param integer $valorResidual
     * @return EntradaActivofijo
     */
    public function setValorResidual($valorResidual)
    {
        $this->valorResidual = $valorResidual;

        return $this;
    }

    /**
     * Get valorResidual
     *
     * @return integer 
     */
    public function getValorResidual()
    {
        return $this->valorResidual;
    }

    /**
     * Set valorResidualmc
     *
     * @param integer $valorResidualmc
     * @return EntradaActivofijo
     */
    public function setValorResidualmc($valorResidualmc)
    {
        $this->valorResidualmc = $valorResidualmc;

        return $this;
    }

    /**
     * Get valorResidualmc
     *
     * @return integer 
     */
    public function getValorResidualmc()
    {
        return $this->valorResidualmc;
    }

    /**
     * Set numeroSerie
     *
     * @param string $numeroSerie
     * @return EntradaActivofijo
     */
    public function setNumeroSerie($numeroSerie)
    {
        $this->numeroSerie = $numeroSerie;

        return $this;
    }

    /**
     * Get numeroSerie
     *
     * @return string 
     */
    public function getNumeroSerie()
    {
        return $this->numeroSerie;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return EntradaActivofijo
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
     * @return EntradaActivofijo
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
     * Set idUser
     *
     * @param string $idUser
     * @return EntradaActivofijo
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
     * @return EntradaActivofijo
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
     * @return EntradaActivofijo
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
