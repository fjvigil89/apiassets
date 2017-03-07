<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValeSalida
 *
 * @ORM\Table(name="Vale_Salida", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Vale_Salida", columns={"Contador"})}, indexes={@ORM\Index(name="IX_Vale_Salida_1", columns={"Fecha_Confirmacion", "Id_Almacen"})})
 * @ORM\Entity
 */
class ValeSalida
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
     * @ORM\Column(name="Id_ValeSalida", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idValesalida;

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
     * @ORM\Column(name="Ano_ValeSalida", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoValesalida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_ValeSalida", type="datetime", nullable=false)
     */
    private $fechaValesalida;

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
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=15, nullable=false)
     */
    private $referencia;

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
     * @ORM\Column(name="Id_AreaResponsabilidad", type="string", length=10, nullable=false)
     */
    private $idArearesponsabilidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Destino", type="smallint", nullable=false)
     */
    private $destino;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Insumo", type="string", length=10, nullable=false)
     */
    private $idInsumo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenDestino", type="string", length=5, nullable=false)
     */
    private $idAlmacendestino;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ref_OTrabajo", type="smallint", nullable=false)
     */
    private $refOtrabajo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_DocRef", type="integer", nullable=false)
     */
    private $idDocref;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_DocRef", type="smallint", nullable=false)
     */
    private $anoDocref;

    /**
     * @var integer
     *
     * @ORM\Column(name="Recep_Contador", type="integer", nullable=false)
     */
    private $recepContador;

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
     * @ORM\Column(name="Hora_Sal", type="string", length=10, nullable=false)
     */
    private $horaSal;

    /**
     * @var string
     *
     * @ORM\Column(name="Chofer", type="string", length=50, nullable=false)
     */
    private $chofer;

    /**
     * @var string
     *
     * @ORM\Column(name="ChoferCI", type="string", length=11, nullable=false)
     */
    private $choferci;

    /**
     * @var string
     *
     * @ORM\Column(name="Despachado_Por", type="string", length=60, nullable=false)
     */
    private $despachadoPor;

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
     * @var boolean
     *
     * @ORM\Column(name="Marca_Conteo", type="boolean", nullable=false)
     */
    private $marcaConteo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca_Alertas", type="boolean", nullable=false)
     */
    private $marcaAlertas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_AlmacenD", type="string", length=50, nullable=false)
     */
    private $descAlmacend;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_AreaResponsabilidad", type="string", length=50, nullable=false)
     */
    private $descArearesponsabilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmDocRef", type="string", length=5, nullable=false)
     */
    private $idAlmdocref;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_DevueltoMB", type="integer", nullable=false)
     */
    private $importeDevueltomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_DevueltoMC", type="integer", nullable=false)
     */
    private $importeDevueltomc;

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
     * @ORM\Column(name="Cant_Art", type="integer", nullable=false)
     */
    private $cantArt;

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
     * @ORM\Column(name="NoRemision", type="string", length=10, nullable=false)
     */
    private $noremision;

    /**
     * @var string
     *
     * @ORM\Column(name="DmToT", type="string", length=10, nullable=false)
     */
    private $dmtot;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ultima_Remi", type="boolean", nullable=false)
     */
    private $ultimaRemi;

    /**
     * @var string
     *
     * @ORM\Column(name="Etapa", type="string", length=50, nullable=false)
     */
    private $etapa;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return ValeSalida
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
     * @return ValeSalida
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
     * Set idValesalida
     *
     * @param integer $idValesalida
     * @return ValeSalida
     */
    public function setIdValesalida($idValesalida)
    {
        $this->idValesalida = $idValesalida;

        return $this;
    }

    /**
     * Get idValesalida
     *
     * @return integer 
     */
    public function getIdValesalida()
    {
        return $this->idValesalida;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return ValeSalida
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
     * Set anoValesalida
     *
     * @param integer $anoValesalida
     * @return ValeSalida
     */
    public function setAnoValesalida($anoValesalida)
    {
        $this->anoValesalida = $anoValesalida;

        return $this;
    }

    /**
     * Get anoValesalida
     *
     * @return integer 
     */
    public function getAnoValesalida()
    {
        return $this->anoValesalida;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return ValeSalida
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
     * Set fechaValesalida
     *
     * @param \DateTime $fechaValesalida
     * @return ValeSalida
     */
    public function setFechaValesalida($fechaValesalida)
    {
        $this->fechaValesalida = $fechaValesalida;

        return $this;
    }

    /**
     * Get fechaValesalida
     *
     * @return \DateTime 
     */
    public function getFechaValesalida()
    {
        return $this->fechaValesalida;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return ValeSalida
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
     * @return ValeSalida
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
     * Set referencia
     *
     * @param string $referencia
     * @return ValeSalida
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return ValeSalida
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
     * @return ValeSalida
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
     * Set idArearesponsabilidad
     *
     * @param string $idArearesponsabilidad
     * @return ValeSalida
     */
    public function setIdArearesponsabilidad($idArearesponsabilidad)
    {
        $this->idArearesponsabilidad = $idArearesponsabilidad;

        return $this;
    }

    /**
     * Get idArearesponsabilidad
     *
     * @return string 
     */
    public function getIdArearesponsabilidad()
    {
        return $this->idArearesponsabilidad;
    }

    /**
     * Set destino
     *
     * @param integer $destino
     * @return ValeSalida
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get destino
     *
     * @return integer 
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set idInsumo
     *
     * @param string $idInsumo
     * @return ValeSalida
     */
    public function setIdInsumo($idInsumo)
    {
        $this->idInsumo = $idInsumo;

        return $this;
    }

    /**
     * Get idInsumo
     *
     * @return string 
     */
    public function getIdInsumo()
    {
        return $this->idInsumo;
    }

    /**
     * Set idAlmacendestino
     *
     * @param string $idAlmacendestino
     * @return ValeSalida
     */
    public function setIdAlmacendestino($idAlmacendestino)
    {
        $this->idAlmacendestino = $idAlmacendestino;

        return $this;
    }

    /**
     * Get idAlmacendestino
     *
     * @return string 
     */
    public function getIdAlmacendestino()
    {
        return $this->idAlmacendestino;
    }

    /**
     * Set refOtrabajo
     *
     * @param integer $refOtrabajo
     * @return ValeSalida
     */
    public function setRefOtrabajo($refOtrabajo)
    {
        $this->refOtrabajo = $refOtrabajo;

        return $this;
    }

    /**
     * Get refOtrabajo
     *
     * @return integer 
     */
    public function getRefOtrabajo()
    {
        return $this->refOtrabajo;
    }

    /**
     * Set idDocref
     *
     * @param integer $idDocref
     * @return ValeSalida
     */
    public function setIdDocref($idDocref)
    {
        $this->idDocref = $idDocref;

        return $this;
    }

    /**
     * Get idDocref
     *
     * @return integer 
     */
    public function getIdDocref()
    {
        return $this->idDocref;
    }

    /**
     * Set anoDocref
     *
     * @param integer $anoDocref
     * @return ValeSalida
     */
    public function setAnoDocref($anoDocref)
    {
        $this->anoDocref = $anoDocref;

        return $this;
    }

    /**
     * Get anoDocref
     *
     * @return integer 
     */
    public function getAnoDocref()
    {
        return $this->anoDocref;
    }

    /**
     * Set recepContador
     *
     * @param integer $recepContador
     * @return ValeSalida
     */
    public function setRecepContador($recepContador)
    {
        $this->recepContador = $recepContador;

        return $this;
    }

    /**
     * Get recepContador
     *
     * @return integer 
     */
    public function getRecepContador()
    {
        return $this->recepContador;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return ValeSalida
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
     * @return ValeSalida
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
     * @return ValeSalida
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
     * @return ValeSalida
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
     * @return ValeSalida
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
     * Set horaSal
     *
     * @param string $horaSal
     * @return ValeSalida
     */
    public function setHoraSal($horaSal)
    {
        $this->horaSal = $horaSal;

        return $this;
    }

    /**
     * Get horaSal
     *
     * @return string 
     */
    public function getHoraSal()
    {
        return $this->horaSal;
    }

    /**
     * Set chofer
     *
     * @param string $chofer
     * @return ValeSalida
     */
    public function setChofer($chofer)
    {
        $this->chofer = $chofer;

        return $this;
    }

    /**
     * Get chofer
     *
     * @return string 
     */
    public function getChofer()
    {
        return $this->chofer;
    }

    /**
     * Set choferci
     *
     * @param string $choferci
     * @return ValeSalida
     */
    public function setChoferci($choferci)
    {
        $this->choferci = $choferci;

        return $this;
    }

    /**
     * Get choferci
     *
     * @return string 
     */
    public function getChoferci()
    {
        return $this->choferci;
    }

    /**
     * Set despachadoPor
     *
     * @param string $despachadoPor
     * @return ValeSalida
     */
    public function setDespachadoPor($despachadoPor)
    {
        $this->despachadoPor = $despachadoPor;

        return $this;
    }

    /**
     * Get despachadoPor
     *
     * @return string 
     */
    public function getDespachadoPor()
    {
        return $this->despachadoPor;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return ValeSalida
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
     * @return ValeSalida
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
     * @return ValeSalida
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
     * Set marcaAlertas
     *
     * @param boolean $marcaAlertas
     * @return ValeSalida
     */
    public function setMarcaAlertas($marcaAlertas)
    {
        $this->marcaAlertas = $marcaAlertas;

        return $this;
    }

    /**
     * Get marcaAlertas
     *
     * @return boolean 
     */
    public function getMarcaAlertas()
    {
        return $this->marcaAlertas;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ValeSalida
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
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return ValeSalida
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
     * Set descAlmacend
     *
     * @param string $descAlmacend
     * @return ValeSalida
     */
    public function setDescAlmacend($descAlmacend)
    {
        $this->descAlmacend = $descAlmacend;

        return $this;
    }

    /**
     * Get descAlmacend
     *
     * @return string 
     */
    public function getDescAlmacend()
    {
        return $this->descAlmacend;
    }

    /**
     * Set descArearesponsabilidad
     *
     * @param string $descArearesponsabilidad
     * @return ValeSalida
     */
    public function setDescArearesponsabilidad($descArearesponsabilidad)
    {
        $this->descArearesponsabilidad = $descArearesponsabilidad;

        return $this;
    }

    /**
     * Get descArearesponsabilidad
     *
     * @return string 
     */
    public function getDescArearesponsabilidad()
    {
        return $this->descArearesponsabilidad;
    }

    /**
     * Set idAlmdocref
     *
     * @param string $idAlmdocref
     * @return ValeSalida
     */
    public function setIdAlmdocref($idAlmdocref)
    {
        $this->idAlmdocref = $idAlmdocref;

        return $this;
    }

    /**
     * Get idAlmdocref
     *
     * @return string 
     */
    public function getIdAlmdocref()
    {
        return $this->idAlmdocref;
    }

    /**
     * Set importeDevueltomb
     *
     * @param integer $importeDevueltomb
     * @return ValeSalida
     */
    public function setImporteDevueltomb($importeDevueltomb)
    {
        $this->importeDevueltomb = $importeDevueltomb;

        return $this;
    }

    /**
     * Get importeDevueltomb
     *
     * @return integer 
     */
    public function getImporteDevueltomb()
    {
        return $this->importeDevueltomb;
    }

    /**
     * Set importeDevueltomc
     *
     * @param integer $importeDevueltomc
     * @return ValeSalida
     */
    public function setImporteDevueltomc($importeDevueltomc)
    {
        $this->importeDevueltomc = $importeDevueltomc;

        return $this;
    }

    /**
     * Get importeDevueltomc
     *
     * @return integer 
     */
    public function getImporteDevueltomc()
    {
        return $this->importeDevueltomc;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return ValeSalida
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
     * @return ValeSalida
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
     * Set cantArt
     *
     * @param integer $cantArt
     * @return ValeSalida
     */
    public function setCantArt($cantArt)
    {
        $this->cantArt = $cantArt;

        return $this;
    }

    /**
     * Get cantArt
     *
     * @return integer 
     */
    public function getCantArt()
    {
        return $this->cantArt;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return ValeSalida
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
     * @return ValeSalida
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
     * Set noremision
     *
     * @param string $noremision
     * @return ValeSalida
     */
    public function setNoremision($noremision)
    {
        $this->noremision = $noremision;

        return $this;
    }

    /**
     * Get noremision
     *
     * @return string 
     */
    public function getNoremision()
    {
        return $this->noremision;
    }

    /**
     * Set dmtot
     *
     * @param string $dmtot
     * @return ValeSalida
     */
    public function setDmtot($dmtot)
    {
        $this->dmtot = $dmtot;

        return $this;
    }

    /**
     * Get dmtot
     *
     * @return string 
     */
    public function getDmtot()
    {
        return $this->dmtot;
    }

    /**
     * Set ultimaRemi
     *
     * @param boolean $ultimaRemi
     * @return ValeSalida
     */
    public function setUltimaRemi($ultimaRemi)
    {
        $this->ultimaRemi = $ultimaRemi;

        return $this;
    }

    /**
     * Get ultimaRemi
     *
     * @return boolean 
     */
    public function getUltimaRemi()
    {
        return $this->ultimaRemi;
    }

    /**
     * Set etapa
     *
     * @param string $etapa
     * @return ValeSalida
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get etapa
     *
     * @return string 
     */
    public function getEtapa()
    {
        return $this->etapa;
    }
}
