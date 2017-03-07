<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ajuste
 *
 * @ORM\Table(name="Ajuste", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Ajuste", columns={"Contador"})}, indexes={@ORM\Index(name="IX_Ajuste_Fecha", columns={"Fecha_Confirmacion", "Id_Almacen"})})
 * @ORM\Entity
 */
class Ajuste
{
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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $confirmada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Ajuste", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAjuste;

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
     * @ORM\Column(name="Ano_Ajuste", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoAjuste;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Ajuste", type="datetime", nullable=false)
     */
    private $fechaAjuste;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=5, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=60, nullable=false)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ajuste_Cantidad", type="boolean", nullable=false)
     */
    private $ajusteCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteA_MB", type="integer", nullable=false)
     */
    private $importeaMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteD_MB", type="integer", nullable=false)
     */
    private $importedMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteA_MC", type="integer", nullable=false)
     */
    private $importeaMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteD_MC", type="integer", nullable=false)
     */
    private $importedMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMB", type="integer", nullable=false)
     */
    private $importetotalmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMC", type="integer", nullable=false)
     */
    private $importetotalmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro", type="smallint", nullable=false)
     */
    private $anoCompro;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=500, nullable=false)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizado", type="boolean", nullable=false)
     */
    private $contabilizado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca_Conteo", type="boolean", nullable=false)
     */
    private $marcaConteo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Compro", type="smallint", nullable=false)
     */
    private $mesCompro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var integer
     *
     * @ORM\Column(name="Prorrateo", type="smallint", nullable=false)
     */
    private $prorrateo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ValorProMB", type="integer", nullable=false)
     */
    private $valorpromb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ValorProMC", type="integer", nullable=false)
     */
    private $valorpromc;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

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
     * @ORM\Column(name="DisminuyeGasto", type="boolean", nullable=false)
     */
    private $disminuyegasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var integer
     *
     * @ORM\Column(name="No_Prelacion", type="integer", nullable=false)
     */
    private $noPrelacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Adespacho", type="string", length=4, nullable=false)
     */
    private $adespacho;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MerNoDeclare", type="boolean", nullable=false)
     */
    private $mernodeclare;

    /**
     * @var boolean
     *
     * @ORM\Column(name="InOrOut", type="boolean", nullable=false)
     */
    private $inorout;

    /**
     * @var integer
     *
     * @ORM\Column(name="IRnoDeclare", type="integer", nullable=false)
     */
    private $irnodeclare;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Gen_Auto", type="boolean", nullable=false)
     */
    private $genAuto;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return Ajuste
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
     * @return Ajuste
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
     * Set idAjuste
     *
     * @param integer $idAjuste
     * @return Ajuste
     */
    public function setIdAjuste($idAjuste)
    {
        $this->idAjuste = $idAjuste;

        return $this;
    }

    /**
     * Get idAjuste
     *
     * @return integer 
     */
    public function getIdAjuste()
    {
        return $this->idAjuste;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Ajuste
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
     * Set anoAjuste
     *
     * @param integer $anoAjuste
     * @return Ajuste
     */
    public function setAnoAjuste($anoAjuste)
    {
        $this->anoAjuste = $anoAjuste;

        return $this;
    }

    /**
     * Get anoAjuste
     *
     * @return integer 
     */
    public function getAnoAjuste()
    {
        return $this->anoAjuste;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return Ajuste
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
     * Set fechaAjuste
     *
     * @param \DateTime $fechaAjuste
     * @return Ajuste
     */
    public function setFechaAjuste($fechaAjuste)
    {
        $this->fechaAjuste = $fechaAjuste;

        return $this;
    }

    /**
     * Get fechaAjuste
     *
     * @return \DateTime 
     */
    public function getFechaAjuste()
    {
        return $this->fechaAjuste;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return Ajuste
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
     * Set nombre
     *
     * @param string $nombre
     * @return Ajuste
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set ajusteCantidad
     *
     * @param boolean $ajusteCantidad
     * @return Ajuste
     */
    public function setAjusteCantidad($ajusteCantidad)
    {
        $this->ajusteCantidad = $ajusteCantidad;

        return $this;
    }

    /**
     * Get ajusteCantidad
     *
     * @return boolean 
     */
    public function getAjusteCantidad()
    {
        return $this->ajusteCantidad;
    }

    /**
     * Set importeaMb
     *
     * @param integer $importeaMb
     * @return Ajuste
     */
    public function setImporteaMb($importeaMb)
    {
        $this->importeaMb = $importeaMb;

        return $this;
    }

    /**
     * Get importeaMb
     *
     * @return integer 
     */
    public function getImporteaMb()
    {
        return $this->importeaMb;
    }

    /**
     * Set importedMb
     *
     * @param integer $importedMb
     * @return Ajuste
     */
    public function setImportedMb($importedMb)
    {
        $this->importedMb = $importedMb;

        return $this;
    }

    /**
     * Get importedMb
     *
     * @return integer 
     */
    public function getImportedMb()
    {
        return $this->importedMb;
    }

    /**
     * Set importeaMc
     *
     * @param integer $importeaMc
     * @return Ajuste
     */
    public function setImporteaMc($importeaMc)
    {
        $this->importeaMc = $importeaMc;

        return $this;
    }

    /**
     * Get importeaMc
     *
     * @return integer 
     */
    public function getImporteaMc()
    {
        return $this->importeaMc;
    }

    /**
     * Set importedMc
     *
     * @param integer $importedMc
     * @return Ajuste
     */
    public function setImportedMc($importedMc)
    {
        $this->importedMc = $importedMc;

        return $this;
    }

    /**
     * Get importedMc
     *
     * @return integer 
     */
    public function getImportedMc()
    {
        return $this->importedMc;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return Ajuste
     */
    public function setImportetotalmb($importetotalmb)
    {
        $this->importetotalmb = $importetotalmb;

        return $this;
    }

    /**
     * Get importetotalmb
     *
     * @return integer 
     */
    public function getImportetotalmb()
    {
        return $this->importetotalmb;
    }

    /**
     * Set importetotalmc
     *
     * @param integer $importetotalmc
     * @return Ajuste
     */
    public function setImportetotalmc($importetotalmc)
    {
        $this->importetotalmc = $importetotalmc;

        return $this;
    }

    /**
     * Get importetotalmc
     *
     * @return integer 
     */
    public function getImportetotalmc()
    {
        return $this->importetotalmc;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return Ajuste
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
     * Set anoCompro
     *
     * @param integer $anoCompro
     * @return Ajuste
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
     * Set nota
     *
     * @param string $nota
     * @return Ajuste
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
     * @return Ajuste
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
     * Set marcaConteo
     *
     * @param boolean $marcaConteo
     * @return Ajuste
     */
    public function setMarcaConteo($marcaConteo)
    {
        $this->marcaConteo = $marcaConteo;

        return $this;
    }

    /**
     * Get marcaConteo
     *
     * @return boolean 
     */
    public function getMarcaConteo()
    {
        return $this->marcaConteo;
    }

    /**
     * Set mesCompro
     *
     * @param integer $mesCompro
     * @return Ajuste
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return Ajuste
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
     * Set prorrateo
     *
     * @param integer $prorrateo
     * @return Ajuste
     */
    public function setProrrateo($prorrateo)
    {
        $this->prorrateo = $prorrateo;

        return $this;
    }

    /**
     * Get prorrateo
     *
     * @return integer 
     */
    public function getProrrateo()
    {
        return $this->prorrateo;
    }

    /**
     * Set valorpromb
     *
     * @param integer $valorpromb
     * @return Ajuste
     */
    public function setValorpromb($valorpromb)
    {
        $this->valorpromb = $valorpromb;

        return $this;
    }

    /**
     * Get valorpromb
     *
     * @return integer 
     */
    public function getValorpromb()
    {
        return $this->valorpromb;
    }

    /**
     * Set valorpromc
     *
     * @param integer $valorpromc
     * @return Ajuste
     */
    public function setValorpromc($valorpromc)
    {
        $this->valorpromc = $valorpromc;

        return $this;
    }

    /**
     * Get valorpromc
     *
     * @return integer 
     */
    public function getValorpromc()
    {
        return $this->valorpromc;
    }

    /**
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return Ajuste
     */
    public function setDescAlmacen($descAlmacen)
    {
        $this->descAlmacen = $descAlmacen;

        return $this;
    }

    /**
     * Get descAlmacen
     *
     * @return string 
     */
    public function getDescAlmacen()
    {
        return $this->descAlmacen;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Ajuste
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
     * @return Ajuste
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
     * Set disminuyegasto
     *
     * @param boolean $disminuyegasto
     * @return Ajuste
     */
    public function setDisminuyegasto($disminuyegasto)
    {
        $this->disminuyegasto = $disminuyegasto;

        return $this;
    }

    /**
     * Get disminuyegasto
     *
     * @return boolean 
     */
    public function getDisminuyegasto()
    {
        return $this->disminuyegasto;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return Ajuste
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
     * Set noPrelacion
     *
     * @param integer $noPrelacion
     * @return Ajuste
     */
    public function setNoPrelacion($noPrelacion)
    {
        $this->noPrelacion = $noPrelacion;

        return $this;
    }

    /**
     * Get noPrelacion
     *
     * @return integer 
     */
    public function getNoPrelacion()
    {
        return $this->noPrelacion;
    }

    /**
     * Set adespacho
     *
     * @param string $adespacho
     * @return Ajuste
     */
    public function setAdespacho($adespacho)
    {
        $this->adespacho = $adespacho;

        return $this;
    }

    /**
     * Get adespacho
     *
     * @return string 
     */
    public function getAdespacho()
    {
        return $this->adespacho;
    }

    /**
     * Set mernodeclare
     *
     * @param boolean $mernodeclare
     * @return Ajuste
     */
    public function setMernodeclare($mernodeclare)
    {
        $this->mernodeclare = $mernodeclare;

        return $this;
    }

    /**
     * Get mernodeclare
     *
     * @return boolean 
     */
    public function getMernodeclare()
    {
        return $this->mernodeclare;
    }

    /**
     * Set inorout
     *
     * @param boolean $inorout
     * @return Ajuste
     */
    public function setInorout($inorout)
    {
        $this->inorout = $inorout;

        return $this;
    }

    /**
     * Get inorout
     *
     * @return boolean 
     */
    public function getInorout()
    {
        return $this->inorout;
    }

    /**
     * Set irnodeclare
     *
     * @param integer $irnodeclare
     * @return Ajuste
     */
    public function setIrnodeclare($irnodeclare)
    {
        $this->irnodeclare = $irnodeclare;

        return $this;
    }

    /**
     * Get irnodeclare
     *
     * @return integer 
     */
    public function getIrnodeclare()
    {
        return $this->irnodeclare;
    }

    /**
     * Set genAuto
     *
     * @param boolean $genAuto
     * @return Ajuste
     */
    public function setGenAuto($genAuto)
    {
        $this->genAuto = $genAuto;

        return $this;
    }

    /**
     * Get genAuto
     *
     * @return boolean 
     */
    public function getGenAuto()
    {
        return $this->genAuto;
    }
}
