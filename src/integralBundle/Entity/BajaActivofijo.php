<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BajaActivofijo
 *
 * @ORM\Table(name="Baja_ActivoFijo")
 * @ORM\Entity
 */
class BajaActivofijo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Baja", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idBaja;

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
     * @ORM\Column(name="Ano_Baja", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoBaja;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Baja", type="datetime", nullable=false)
     */
    private $fechaBaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Rotulo", type="string", length=15, nullable=false)
     */
    private $idRotulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ActivoFijo", type="string", length=255, nullable=false)
     */
    private $descActivofijo;

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
     * @ORM\Column(name="Tipo_Baja", type="string", length=3, nullable=false)
     */
    private $tipoBaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad", type="integer", nullable=false)
     */
    private $cantidad;

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
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;



    /**
     * Set idBaja
     *
     * @param integer $idBaja
     * @return BajaActivofijo
     */
    public function setIdBaja($idBaja)
    {
        $this->idBaja = $idBaja;

        return $this;
    }

    /**
     * Get idBaja
     *
     * @return integer 
     */
    public function getIdBaja()
    {
        return $this->idBaja;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return BajaActivofijo
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
     * Set anoBaja
     *
     * @param integer $anoBaja
     * @return BajaActivofijo
     */
    public function setAnoBaja($anoBaja)
    {
        $this->anoBaja = $anoBaja;

        return $this;
    }

    /**
     * Get anoBaja
     *
     * @return integer 
     */
    public function getAnoBaja()
    {
        return $this->anoBaja;
    }

    /**
     * Set confirmada
     *
     * @param integer $confirmada
     * @return BajaActivofijo
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
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     * @return BajaActivofijo
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime 
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    /**
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return BajaActivofijo
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
     * Set idRotulo
     *
     * @param string $idRotulo
     * @return BajaActivofijo
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
     * Set descActivofijo
     *
     * @param string $descActivofijo
     * @return BajaActivofijo
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
     * Set depreciacionAcumulada
     *
     * @param integer $depreciacionAcumulada
     * @return BajaActivofijo
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
     * @return BajaActivofijo
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return BajaActivofijo
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
     * @return BajaActivofijo
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
     * @return BajaActivofijo
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
     * Set tipoBaja
     *
     * @param string $tipoBaja
     * @return BajaActivofijo
     */
    public function setTipoBaja($tipoBaja)
    {
        $this->tipoBaja = $tipoBaja;

        return $this;
    }

    /**
     * Get tipoBaja
     *
     * @return string 
     */
    public function getTipoBaja()
    {
        return $this->tipoBaja;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return BajaActivofijo
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
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return BajaActivofijo
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
     * @return BajaActivofijo
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
     * @return BajaActivofijo
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
     * @return BajaActivofijo
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
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return BajaActivofijo
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return BajaActivofijo
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
     * Set contador
     *
     * @param integer $contador
     * @return BajaActivofijo
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
     * @return BajaActivofijo
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
     * @return BajaActivofijo
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
     * @return BajaActivofijo
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
     * Set valorInicial
     *
     * @param integer $valorInicial
     * @return BajaActivofijo
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
     * @return BajaActivofijo
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
     * Set valorResidual
     *
     * @param integer $valorResidual
     * @return BajaActivofijo
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
     * @return BajaActivofijo
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
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return BajaActivofijo
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
