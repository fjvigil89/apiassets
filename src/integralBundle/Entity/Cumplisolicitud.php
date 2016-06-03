<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cumplisolicitud
 *
 * @ORM\Table(name="CumpliSolicitud", uniqueConstraints={@ORM\UniqueConstraint(name="IX_CumpliSolicitud", columns={"Contador"})})
 * @ORM\Entity
 */
class Cumplisolicitud
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
     * @ORM\Column(name="Id_SoliMerca", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSolimerca;

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
     * @ORM\Column(name="Ano_SoliMerca", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoSolimerca;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_SoliMerca", type="datetime", nullable=false)
     */
    private $fechaSolimerca;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Comercial", type="string", length=5, nullable=false)
     */
    private $idComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Comercial", type="string", length=50, nullable=false)
     */
    private $descComercial;

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
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=500, nullable=false)
     */
    private $nota;

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
     * @ORM\Column(name="Doc_primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SolicMC", type="string", length=50, nullable=false)
     */
    private $idSolicmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenSM", type="string", length=5, nullable=false)
     */
    private $idAlmacensm;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_AlmacenSM", type="string", length=50, nullable=false)
     */
    private $descAlmacensm;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=false)
     */
    private $descCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Factura", type="string", length=20, nullable=false)
     */
    private $factura;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaFactura", type="integer", nullable=false)
     */
    private $contafactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipodoc", type="smallint", nullable=false)
     */
    private $tipodoc;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return Cumplisolicitud
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
     * @return Cumplisolicitud
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
     * Set idSolimerca
     *
     * @param integer $idSolimerca
     * @return Cumplisolicitud
     */
    public function setIdSolimerca($idSolimerca)
    {
        $this->idSolimerca = $idSolimerca;

        return $this;
    }

    /**
     * Get idSolimerca
     *
     * @return integer 
     */
    public function getIdSolimerca()
    {
        return $this->idSolimerca;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Cumplisolicitud
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
     * Set anoSolimerca
     *
     * @param integer $anoSolimerca
     * @return Cumplisolicitud
     */
    public function setAnoSolimerca($anoSolimerca)
    {
        $this->anoSolimerca = $anoSolimerca;

        return $this;
    }

    /**
     * Get anoSolimerca
     *
     * @return integer 
     */
    public function getAnoSolimerca()
    {
        return $this->anoSolimerca;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return Cumplisolicitud
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
     * Set fechaSolimerca
     *
     * @param \DateTime $fechaSolimerca
     * @return Cumplisolicitud
     */
    public function setFechaSolimerca($fechaSolimerca)
    {
        $this->fechaSolimerca = $fechaSolimerca;

        return $this;
    }

    /**
     * Get fechaSolimerca
     *
     * @return \DateTime 
     */
    public function getFechaSolimerca()
    {
        return $this->fechaSolimerca;
    }

    /**
     * Set idComercial
     *
     * @param string $idComercial
     * @return Cumplisolicitud
     */
    public function setIdComercial($idComercial)
    {
        $this->idComercial = $idComercial;

        return $this;
    }

    /**
     * Get idComercial
     *
     * @return string 
     */
    public function getIdComercial()
    {
        return $this->idComercial;
    }

    /**
     * Set descComercial
     *
     * @param string $descComercial
     * @return Cumplisolicitud
     */
    public function setDescComercial($descComercial)
    {
        $this->descComercial = $descComercial;

        return $this;
    }

    /**
     * Get descComercial
     *
     * @return string 
     */
    public function getDescComercial()
    {
        return $this->descComercial;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return Cumplisolicitud
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
     * @return Cumplisolicitud
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
     * Set nota
     *
     * @param string $nota
     * @return Cumplisolicitud
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return Cumplisolicitud
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
     * @return Cumplisolicitud
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
     * @return Cumplisolicitud
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
     * @return Cumplisolicitud
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
     * @return Cumplisolicitud
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
     * Set idSolicmc
     *
     * @param string $idSolicmc
     * @return Cumplisolicitud
     */
    public function setIdSolicmc($idSolicmc)
    {
        $this->idSolicmc = $idSolicmc;

        return $this;
    }

    /**
     * Get idSolicmc
     *
     * @return string 
     */
    public function getIdSolicmc()
    {
        return $this->idSolicmc;
    }

    /**
     * Set idAlmacensm
     *
     * @param string $idAlmacensm
     * @return Cumplisolicitud
     */
    public function setIdAlmacensm($idAlmacensm)
    {
        $this->idAlmacensm = $idAlmacensm;

        return $this;
    }

    /**
     * Get idAlmacensm
     *
     * @return string 
     */
    public function getIdAlmacensm()
    {
        return $this->idAlmacensm;
    }

    /**
     * Set descAlmacensm
     *
     * @param string $descAlmacensm
     * @return Cumplisolicitud
     */
    public function setDescAlmacensm($descAlmacensm)
    {
        $this->descAlmacensm = $descAlmacensm;

        return $this;
    }

    /**
     * Get descAlmacensm
     *
     * @return string 
     */
    public function getDescAlmacensm()
    {
        return $this->descAlmacensm;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return Cumplisolicitud
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set descCliente
     *
     * @param string $descCliente
     * @return Cumplisolicitud
     */
    public function setDescCliente($descCliente)
    {
        $this->descCliente = $descCliente;

        return $this;
    }

    /**
     * Get descCliente
     *
     * @return string 
     */
    public function getDescCliente()
    {
        return $this->descCliente;
    }

    /**
     * Set factura
     *
     * @param string $factura
     * @return Cumplisolicitud
     */
    public function setFactura($factura)
    {
        $this->factura = $factura;

        return $this;
    }

    /**
     * Get factura
     *
     * @return string 
     */
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set contafactura
     *
     * @param integer $contafactura
     * @return Cumplisolicitud
     */
    public function setContafactura($contafactura)
    {
        $this->contafactura = $contafactura;

        return $this;
    }

    /**
     * Get contafactura
     *
     * @return integer 
     */
    public function getContafactura()
    {
        return $this->contafactura;
    }

    /**
     * Set tipodoc
     *
     * @param integer $tipodoc
     * @return Cumplisolicitud
     */
    public function setTipodoc($tipodoc)
    {
        $this->tipodoc = $tipodoc;

        return $this;
    }

    /**
     * Get tipodoc
     *
     * @return integer 
     */
    public function getTipodoc()
    {
        return $this->tipodoc;
    }
}
