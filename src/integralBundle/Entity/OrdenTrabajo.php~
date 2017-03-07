<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenTrabajo
 *
 * @ORM\Table(name="Orden_Trabajo", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Orden_Trabajo", columns={"Contador"})})
 * @ORM\Entity
 */
class OrdenTrabajo
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
     * @ORM\Column(name="Id_Otrabajo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOtrabajo;

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
     * @ORM\Column(name="Ano_Otrabajo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoOtrabajo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Apertura", type="datetime", nullable=false)
     */
    private $fechaApertura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cierre", type="datetime", nullable=false)
     */
    private $fechaCierre;

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
     * @ORM\Column(name="Id_Clasificacion", type="string", length=10, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Factura", type="integer", nullable=false)
     */
    private $idFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Factura", type="smallint", nullable=false)
     */
    private $anoFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=15, nullable=false)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Atte", type="string", length=50, nullable=false)
     */
    private $atte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Generar_Factura", type="boolean", nullable=false)
     */
    private $generarFactura;

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
     * @ORM\Column(name="Despachado_Por", type="string", length=60, nullable=false)
     */
    private $despachadoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=2000, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaFactura", type="integer", nullable=false)
     */
    private $contafactura;

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
     * @ORM\Column(name="Id_Equipo", type="string", length=20, nullable=false)
     */
    private $idEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Equipo", type="string", length=60, nullable=false)
     */
    private $descEquipo;

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
     * @ORM\Column(name="Contabilizado", type="boolean", nullable=false)
     */
    private $contabilizado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Servicio", type="string", length=20, nullable=false)
     */
    private $idServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Servicio", type="string", length=60, nullable=false)
     */
    private $descServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota2", type="string", length=500, nullable=false)
     */
    private $nota2;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var string
     *
     * @ORM\Column(name="Enviado_A", type="string", length=50, nullable=false)
     */
    private $enviadoA;

    /**
     * @var string
     *
     * @ORM\Column(name="Contrato", type="string", length=20, nullable=false)
     */
    private $contrato;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return OrdenTrabajo
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
     * @return OrdenTrabajo
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
     * Set idOtrabajo
     *
     * @param integer $idOtrabajo
     * @return OrdenTrabajo
     */
    public function setIdOtrabajo($idOtrabajo)
    {
        $this->idOtrabajo = $idOtrabajo;

        return $this;
    }

    /**
     * Get idOtrabajo
     *
     * @return integer 
     */
    public function getIdOtrabajo()
    {
        return $this->idOtrabajo;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return OrdenTrabajo
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
     * Set anoOtrabajo
     *
     * @param integer $anoOtrabajo
     * @return OrdenTrabajo
     */
    public function setAnoOtrabajo($anoOtrabajo)
    {
        $this->anoOtrabajo = $anoOtrabajo;

        return $this;
    }

    /**
     * Get anoOtrabajo
     *
     * @return integer 
     */
    public function getAnoOtrabajo()
    {
        return $this->anoOtrabajo;
    }

    /**
     * Set fechaApertura
     *
     * @param \DateTime $fechaApertura
     * @return OrdenTrabajo
     */
    public function setFechaApertura($fechaApertura)
    {
        $this->fechaApertura = $fechaApertura;

        return $this;
    }

    /**
     * Get fechaApertura
     *
     * @return \DateTime 
     */
    public function getFechaApertura()
    {
        return $this->fechaApertura;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     * @return OrdenTrabajo
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime 
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return OrdenTrabajo
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
     * @return OrdenTrabajo
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
     * Set idComercial
     *
     * @param string $idComercial
     * @return OrdenTrabajo
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
     * @return OrdenTrabajo
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return OrdenTrabajo
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
     * @return OrdenTrabajo
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
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return OrdenTrabajo
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
     * Set idFactura
     *
     * @param integer $idFactura
     * @return OrdenTrabajo
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return integer 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set anoFactura
     *
     * @param integer $anoFactura
     * @return OrdenTrabajo
     */
    public function setAnoFactura($anoFactura)
    {
        $this->anoFactura = $anoFactura;

        return $this;
    }

    /**
     * Get anoFactura
     *
     * @return integer 
     */
    public function getAnoFactura()
    {
        return $this->anoFactura;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return OrdenTrabajo
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
     * Set atte
     *
     * @param string $atte
     * @return OrdenTrabajo
     */
    public function setAtte($atte)
    {
        $this->atte = $atte;

        return $this;
    }

    /**
     * Get atte
     *
     * @return string 
     */
    public function getAtte()
    {
        return $this->atte;
    }

    /**
     * Set generarFactura
     *
     * @param boolean $generarFactura
     * @return OrdenTrabajo
     */
    public function setGenerarFactura($generarFactura)
    {
        $this->generarFactura = $generarFactura;

        return $this;
    }

    /**
     * Get generarFactura
     *
     * @return boolean 
     */
    public function getGenerarFactura()
    {
        return $this->generarFactura;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return OrdenTrabajo
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
     * @return OrdenTrabajo
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
     * @return OrdenTrabajo
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
     * @return OrdenTrabajo
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
     * @return OrdenTrabajo
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
     * Set despachadoPor
     *
     * @param string $despachadoPor
     * @return OrdenTrabajo
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
     * @return OrdenTrabajo
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
     * Set contafactura
     *
     * @param integer $contafactura
     * @return OrdenTrabajo
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return OrdenTrabajo
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
     * @return OrdenTrabajo
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
     * Set idEquipo
     *
     * @param string $idEquipo
     * @return OrdenTrabajo
     */
    public function setIdEquipo($idEquipo)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return string 
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }

    /**
     * Set descEquipo
     *
     * @param string $descEquipo
     * @return OrdenTrabajo
     */
    public function setDescEquipo($descEquipo)
    {
        $this->descEquipo = $descEquipo;

        return $this;
    }

    /**
     * Get descEquipo
     *
     * @return string 
     */
    public function getDescEquipo()
    {
        return $this->descEquipo;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return OrdenTrabajo
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
     * @return OrdenTrabajo
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
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return OrdenTrabajo
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
     * Set idServicio
     *
     * @param string $idServicio
     * @return OrdenTrabajo
     */
    public function setIdServicio($idServicio)
    {
        $this->idServicio = $idServicio;

        return $this;
    }

    /**
     * Get idServicio
     *
     * @return string 
     */
    public function getIdServicio()
    {
        return $this->idServicio;
    }

    /**
     * Set descServicio
     *
     * @param string $descServicio
     * @return OrdenTrabajo
     */
    public function setDescServicio($descServicio)
    {
        $this->descServicio = $descServicio;

        return $this;
    }

    /**
     * Get descServicio
     *
     * @return string 
     */
    public function getDescServicio()
    {
        return $this->descServicio;
    }

    /**
     * Set nota2
     *
     * @param string $nota2
     * @return OrdenTrabajo
     */
    public function setNota2($nota2)
    {
        $this->nota2 = $nota2;

        return $this;
    }

    /**
     * Get nota2
     *
     * @return string 
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return OrdenTrabajo
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
     * Set enviadoA
     *
     * @param string $enviadoA
     * @return OrdenTrabajo
     */
    public function setEnviadoA($enviadoA)
    {
        $this->enviadoA = $enviadoA;

        return $this;
    }

    /**
     * Get enviadoA
     *
     * @return string 
     */
    public function getEnviadoA()
    {
        return $this->enviadoA;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     * @return OrdenTrabajo
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return string 
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
