<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BajaActivofijoMasivaHead
 *
 * @ORM\Table(name="Baja_ActivoFijo_Masiva_Head", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Baja_ActivoFijo_Masiva_Head", columns={"Contador"})})
 * @ORM\Entity
 */
class BajaActivofijoMasivaHead
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
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

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
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Ccosto", type="string", length=50, nullable=false)
     */
    private $descCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AreaResp", type="string", length=10, nullable=false)
     */
    private $idArearesp;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_AreaResp", type="string", length=50, nullable=false)
     */
    private $descArearesp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Empleado", type="string", length=61, nullable=false)
     */
    private $descEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=5, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasificacion", type="string", length=50, nullable=false)
     */
    private $descClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Subclasificacion", type="string", length=5, nullable=false)
     */
    private $idSubclasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Subclasificacion", type="string", length=50, nullable=false)
     */
    private $descSubclasificacion;

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
     * @ORM\Column(name="Id_Especificacion", type="string", length=15, nullable=false)
     */
    private $idEspecificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Especificacion", type="string", length=50, nullable=false)
     */
    private $descEspecificacion;



    /**
     * Set idBaja
     *
     * @param integer $idBaja
     * @return BajaActivofijoMasivaHead
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
     * @return BajaActivofijoMasivaHead
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
     * @return BajaActivofijoMasivaHead
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
     * Set contador
     *
     * @param integer $contador
     * @return BajaActivofijoMasivaHead
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
     * Set confirmada
     *
     * @param integer $confirmada
     * @return BajaActivofijoMasivaHead
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
     * @return BajaActivofijoMasivaHead
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
     * Set tipoBaja
     *
     * @param string $tipoBaja
     * @return BajaActivofijoMasivaHead
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
     * @return BajaActivofijoMasivaHead
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return BajaActivofijoMasivaHead
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
     * Set descCcosto
     *
     * @param string $descCcosto
     * @return BajaActivofijoMasivaHead
     */
    public function setDescCcosto($descCcosto)
    {
        $this->descCcosto = $descCcosto;

        return $this;
    }

    /**
     * Get descCcosto
     *
     * @return string 
     */
    public function getDescCcosto()
    {
        return $this->descCcosto;
    }

    /**
     * Set idArearesp
     *
     * @param string $idArearesp
     * @return BajaActivofijoMasivaHead
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
     * Set descArearesp
     *
     * @param string $descArearesp
     * @return BajaActivofijoMasivaHead
     */
    public function setDescArearesp($descArearesp)
    {
        $this->descArearesp = $descArearesp;

        return $this;
    }

    /**
     * Get descArearesp
     *
     * @return string 
     */
    public function getDescArearesp()
    {
        return $this->descArearesp;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return BajaActivofijoMasivaHead
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
     * Set descEmpleado
     *
     * @param string $descEmpleado
     * @return BajaActivofijoMasivaHead
     */
    public function setDescEmpleado($descEmpleado)
    {
        $this->descEmpleado = $descEmpleado;

        return $this;
    }

    /**
     * Get descEmpleado
     *
     * @return string 
     */
    public function getDescEmpleado()
    {
        return $this->descEmpleado;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return BajaActivofijoMasivaHead
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
     * Set descClasificacion
     *
     * @param string $descClasificacion
     * @return BajaActivofijoMasivaHead
     */
    public function setDescClasificacion($descClasificacion)
    {
        $this->descClasificacion = $descClasificacion;

        return $this;
    }

    /**
     * Get descClasificacion
     *
     * @return string 
     */
    public function getDescClasificacion()
    {
        return $this->descClasificacion;
    }

    /**
     * Set idSubclasificacion
     *
     * @param string $idSubclasificacion
     * @return BajaActivofijoMasivaHead
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
     * Set descSubclasificacion
     *
     * @param string $descSubclasificacion
     * @return BajaActivofijoMasivaHead
     */
    public function setDescSubclasificacion($descSubclasificacion)
    {
        $this->descSubclasificacion = $descSubclasificacion;

        return $this;
    }

    /**
     * Get descSubclasificacion
     *
     * @return string 
     */
    public function getDescSubclasificacion()
    {
        return $this->descSubclasificacion;
    }

    /**
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return BajaActivofijoMasivaHead
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
     * @return BajaActivofijoMasivaHead
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
     * @return BajaActivofijoMasivaHead
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
     * @return BajaActivofijoMasivaHead
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
     * @return BajaActivofijoMasivaHead
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return BajaActivofijoMasivaHead
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
     * @return BajaActivofijoMasivaHead
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
     * @return BajaActivofijoMasivaHead
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
     * @return BajaActivofijoMasivaHead
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
     * Set idEspecificacion
     *
     * @param string $idEspecificacion
     * @return BajaActivofijoMasivaHead
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
     * Set descEspecificacion
     *
     * @param string $descEspecificacion
     * @return BajaActivofijoMasivaHead
     */
    public function setDescEspecificacion($descEspecificacion)
    {
        $this->descEspecificacion = $descEspecificacion;

        return $this;
    }

    /**
     * Get descEspecificacion
     *
     * @return string 
     */
    public function getDescEspecificacion()
    {
        return $this->descEspecificacion;
    }
}
