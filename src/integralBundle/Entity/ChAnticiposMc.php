<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChAnticiposMc
 *
 * @ORM\Table(name="CH_Anticipos_MC", indexes={@ORM\Index(name="IX_Anticipos_MC_Fecha", columns={"Fecha"})})
 * @ORM\Entity
 */
class ChAnticiposMc
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
     * @ORM\Column(name="Id_Fondo", type="string", length=10, nullable=false)
     */
    private $idFondo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Anticipo", type="integer", nullable=false)
     */
    private $idAnticipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cancelacion", type="datetime", nullable=false)
     */
    private $fechaCancelacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Liquidacion", type="datetime", nullable=false)
     */
    private $fechaLiquidacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     */
    private $idConcepto;

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
     * @ORM\Column(name="Recibido_Por", type="string", length=20, nullable=false)
     */
    private $recibidoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Entregado_Por", type="string", length=20, nullable=false)
     */
    private $entregadoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Aprobado_Por", type="string", length=20, nullable=false)
     */
    private $aprobadoPor;

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
     * @ORM\Column(name="Id_Compro_Liq", type="integer", nullable=false)
     */
    private $idComproLiq;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Compro_Liq", type="smallint", nullable=false)
     */
    private $mesComproLiq;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro_Liq", type="smallint", nullable=false)
     */
    private $anoComproLiq;

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
     * @var integer
     *
     * @ORM\Column(name="Reembolsado", type="smallint", nullable=false)
     */
    private $reembolsado;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

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
     * Set idFondo
     *
     * @param string $idFondo
     * @return ChAnticiposMc
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
     * Set idAnticipo
     *
     * @param integer $idAnticipo
     * @return ChAnticiposMc
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
     * Set ano
     *
     * @param integer $ano
     * @return ChAnticiposMc
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
     * Set estado
     *
     * @param integer $estado
     * @return ChAnticiposMc
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ChAnticiposMc
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
     * Set fechaCancelacion
     *
     * @param \DateTime $fechaCancelacion
     * @return ChAnticiposMc
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
     * Set fechaLiquidacion
     *
     * @param \DateTime $fechaLiquidacion
     * @return ChAnticiposMc
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
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return ChAnticiposMc
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
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * Set recibidoPor
     *
     * @param string $recibidoPor
     * @return ChAnticiposMc
     */
    public function setRecibidoPor($recibidoPor)
    {
        $this->recibidoPor = $recibidoPor;

        return $this;
    }

    /**
     * Get recibidoPor
     *
     * @return string 
     */
    public function getRecibidoPor()
    {
        return $this->recibidoPor;
    }

    /**
     * Set entregadoPor
     *
     * @param string $entregadoPor
     * @return ChAnticiposMc
     */
    public function setEntregadoPor($entregadoPor)
    {
        $this->entregadoPor = $entregadoPor;

        return $this;
    }

    /**
     * Get entregadoPor
     *
     * @return string 
     */
    public function getEntregadoPor()
    {
        return $this->entregadoPor;
    }

    /**
     * Set aprobadoPor
     *
     * @param string $aprobadoPor
     * @return ChAnticiposMc
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
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * Set idComproLiq
     *
     * @param integer $idComproLiq
     * @return ChAnticiposMc
     */
    public function setIdComproLiq($idComproLiq)
    {
        $this->idComproLiq = $idComproLiq;

        return $this;
    }

    /**
     * Get idComproLiq
     *
     * @return integer 
     */
    public function getIdComproLiq()
    {
        return $this->idComproLiq;
    }

    /**
     * Set mesComproLiq
     *
     * @param integer $mesComproLiq
     * @return ChAnticiposMc
     */
    public function setMesComproLiq($mesComproLiq)
    {
        $this->mesComproLiq = $mesComproLiq;

        return $this;
    }

    /**
     * Get mesComproLiq
     *
     * @return integer 
     */
    public function getMesComproLiq()
    {
        return $this->mesComproLiq;
    }

    /**
     * Set anoComproLiq
     *
     * @param integer $anoComproLiq
     * @return ChAnticiposMc
     */
    public function setAnoComproLiq($anoComproLiq)
    {
        $this->anoComproLiq = $anoComproLiq;

        return $this;
    }

    /**
     * Get anoComproLiq
     *
     * @return integer 
     */
    public function getAnoComproLiq()
    {
        return $this->anoComproLiq;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * @return ChAnticiposMc
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
     * Set reembolsado
     *
     * @param integer $reembolsado
     * @return ChAnticiposMc
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
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return ChAnticiposMc
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
     * Set contabilizado
     *
     * @param integer $contabilizado
     * @return ChAnticiposMc
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
