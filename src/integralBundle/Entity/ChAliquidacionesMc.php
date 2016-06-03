<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChAliquidacionesMc
 *
 * @ORM\Table(name="CH_ALiquidaciones_MC", indexes={@ORM\Index(name="Ix3_Liquid_MC", columns={"Id_Liquidacion", "Id_Agrupacion", "Ano"})})
 * @ORM\Entity
 */
class ChAliquidacionesMc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Liquidacion", type="integer", nullable=false)
     */
    private $idLiquidacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Liquidacion", type="datetime", nullable=false)
     */
    private $fechaLiquidacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cancelacion", type="datetime", nullable=false)
     */
    private $fechaCancelacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=20, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CCosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Referencia", type="string", length=40, nullable=false)
     */
    private $idReferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Total", type="integer", nullable=false)
     */
    private $importeTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=120, nullable=false)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Recibido_Por_LIQ", type="string", length=20, nullable=false)
     */
    private $recibidoPorLiq;

    /**
     * @var string
     *
     * @ORM\Column(name="Entregado_Por_LIQ", type="string", length=20, nullable=false)
     */
    private $entregadoPorLiq;

    /**
     * @var string
     *
     * @ORM\Column(name="Aprobado_Por_LIQ", type="string", length=20, nullable=false)
     */
    private $aprobadoPorLiq;

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
     * @var integer
     *
     * @ORM\Column(name="Id_Compro_Anulado", type="integer", nullable=false)
     */
    private $idComproAnulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Anulado", type="smallint", nullable=false)
     */
    private $mesAnulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Anulado", type="smallint", nullable=false)
     */
    private $anoAnulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Anticipo", type="integer", nullable=false)
     */
    private $idAnticipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Anticipo", type="smallint", nullable=false)
     */
    private $anoAnticipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion_Anticipo", type="string", length=5, nullable=false)
     */
    private $idAgrupacionAnticipo;

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
     * @var string
     *
     * @ORM\Column(name="Id_Fondo", type="string", length=10, nullable=false)
     */
    private $idFondo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Reembolsado", type="smallint", nullable=false)
     */
    private $reembolsado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contabilizado", type="smallint", nullable=false)
     */
    private $contabilizado;



    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return ChAliquidacionesMc
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
     * Set estado
     *
     * @param integer $estado
     * @return ChAliquidacionesMc
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
     * Set idLiquidacion
     *
     * @param integer $idLiquidacion
     * @return ChAliquidacionesMc
     */
    public function setIdLiquidacion($idLiquidacion)
    {
        $this->idLiquidacion = $idLiquidacion;

        return $this;
    }

    /**
     * Get idLiquidacion
     *
     * @return integer 
     */
    public function getIdLiquidacion()
    {
        return $this->idLiquidacion;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return ChAliquidacionesMc
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
     * Set ano
     *
     * @param integer $ano
     * @return ChAliquidacionesMc
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
     * @return ChAliquidacionesMc
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
     * Set fechaLiquidacion
     *
     * @param \DateTime $fechaLiquidacion
     * @return ChAliquidacionesMc
     */
    public function setFechaLiquidacion($fechaLiquidacion)
    {
        $this->fechaLiquidacion = $fechaLiquidacion;

        return $this;
    }

    /**
     * Get fechaLiquidacion
     *
     * @return \DateTime 
     */
    public function getFechaLiquidacion()
    {
        return $this->fechaLiquidacion;
    }

    /**
     * Set fechaCancelacion
     *
     * @param \DateTime $fechaCancelacion
     * @return ChAliquidacionesMc
     */
    public function setFechaCancelacion($fechaCancelacion)
    {
        $this->fechaCancelacion = $fechaCancelacion;

        return $this;
    }

    /**
     * Get fechaCancelacion
     *
     * @return \DateTime 
     */
    public function getFechaCancelacion()
    {
        return $this->fechaCancelacion;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return ChAliquidacionesMc
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return ChAliquidacionesMc
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
     * Set idReferencia
     *
     * @param string $idReferencia
     * @return ChAliquidacionesMc
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
     * Set importeTotal
     *
     * @param integer $importeTotal
     * @return ChAliquidacionesMc
     */
    public function setImporteTotal($importeTotal)
    {
        $this->importeTotal = $importeTotal;

        return $this;
    }

    /**
     * Get importeTotal
     *
     * @return integer 
     */
    public function getImporteTotal()
    {
        return $this->importeTotal;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return ChAliquidacionesMc
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
     * Set recibidoPorLiq
     *
     * @param string $recibidoPorLiq
     * @return ChAliquidacionesMc
     */
    public function setRecibidoPorLiq($recibidoPorLiq)
    {
        $this->recibidoPorLiq = $recibidoPorLiq;

        return $this;
    }

    /**
     * Get recibidoPorLiq
     *
     * @return string 
     */
    public function getRecibidoPorLiq()
    {
        return $this->recibidoPorLiq;
    }

    /**
     * Set entregadoPorLiq
     *
     * @param string $entregadoPorLiq
     * @return ChAliquidacionesMc
     */
    public function setEntregadoPorLiq($entregadoPorLiq)
    {
        $this->entregadoPorLiq = $entregadoPorLiq;

        return $this;
    }

    /**
     * Get entregadoPorLiq
     *
     * @return string 
     */
    public function getEntregadoPorLiq()
    {
        return $this->entregadoPorLiq;
    }

    /**
     * Set aprobadoPorLiq
     *
     * @param string $aprobadoPorLiq
     * @return ChAliquidacionesMc
     */
    public function setAprobadoPorLiq($aprobadoPorLiq)
    {
        $this->aprobadoPorLiq = $aprobadoPorLiq;

        return $this;
    }

    /**
     * Get aprobadoPorLiq
     *
     * @return string 
     */
    public function getAprobadoPorLiq()
    {
        return $this->aprobadoPorLiq;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return ChAliquidacionesMc
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
     * @return ChAliquidacionesMc
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
     * @return ChAliquidacionesMc
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
     * Set idComproAnulado
     *
     * @param integer $idComproAnulado
     * @return ChAliquidacionesMc
     */
    public function setIdComproAnulado($idComproAnulado)
    {
        $this->idComproAnulado = $idComproAnulado;

        return $this;
    }

    /**
     * Get idComproAnulado
     *
     * @return integer 
     */
    public function getIdComproAnulado()
    {
        return $this->idComproAnulado;
    }

    /**
     * Set mesAnulado
     *
     * @param integer $mesAnulado
     * @return ChAliquidacionesMc
     */
    public function setMesAnulado($mesAnulado)
    {
        $this->mesAnulado = $mesAnulado;

        return $this;
    }

    /**
     * Get mesAnulado
     *
     * @return integer 
     */
    public function getMesAnulado()
    {
        return $this->mesAnulado;
    }

    /**
     * Set anoAnulado
     *
     * @param integer $anoAnulado
     * @return ChAliquidacionesMc
     */
    public function setAnoAnulado($anoAnulado)
    {
        $this->anoAnulado = $anoAnulado;

        return $this;
    }

    /**
     * Get anoAnulado
     *
     * @return integer 
     */
    public function getAnoAnulado()
    {
        return $this->anoAnulado;
    }

    /**
     * Set idAnticipo
     *
     * @param integer $idAnticipo
     * @return ChAliquidacionesMc
     */
    public function setIdAnticipo($idAnticipo)
    {
        $this->idAnticipo = $idAnticipo;

        return $this;
    }

    /**
     * Get idAnticipo
     *
     * @return integer 
     */
    public function getIdAnticipo()
    {
        return $this->idAnticipo;
    }

    /**
     * Set anoAnticipo
     *
     * @param integer $anoAnticipo
     * @return ChAliquidacionesMc
     */
    public function setAnoAnticipo($anoAnticipo)
    {
        $this->anoAnticipo = $anoAnticipo;

        return $this;
    }

    /**
     * Get anoAnticipo
     *
     * @return integer 
     */
    public function getAnoAnticipo()
    {
        return $this->anoAnticipo;
    }

    /**
     * Set idAgrupacionAnticipo
     *
     * @param string $idAgrupacionAnticipo
     * @return ChAliquidacionesMc
     */
    public function setIdAgrupacionAnticipo($idAgrupacionAnticipo)
    {
        $this->idAgrupacionAnticipo = $idAgrupacionAnticipo;

        return $this;
    }

    /**
     * Get idAgrupacionAnticipo
     *
     * @return string 
     */
    public function getIdAgrupacionAnticipo()
    {
        return $this->idAgrupacionAnticipo;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ChAliquidacionesMc
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
     * @return ChAliquidacionesMc
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
     * @return ChAliquidacionesMc
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
     * @return ChAliquidacionesMc
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
     * Set idFondo
     *
     * @param string $idFondo
     * @return ChAliquidacionesMc
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
     * Set reembolsado
     *
     * @param integer $reembolsado
     * @return ChAliquidacionesMc
     */
    public function setReembolsado($reembolsado)
    {
        $this->reembolsado = $reembolsado;

        return $this;
    }

    /**
     * Get reembolsado
     *
     * @return integer 
     */
    public function getReembolsado()
    {
        return $this->reembolsado;
    }

    /**
     * Set contabilizado
     *
     * @param integer $contabilizado
     * @return ChAliquidacionesMc
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
