<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenProduccion
 *
 * @ORM\Table(name="Orden_Produccion", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Orden_Produccion", columns={"Contador"})})
 * @ORM\Entity
 */
class OrdenProduccion
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
     * @ORM\Column(name="Id_OProduccion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOproduccion;

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
     * @ORM\Column(name="Ano_OProduccion", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoOproduccion;

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
     * @var integer
     *
     * @ORM\Column(name="Id_Recepcion", type="integer", nullable=false)
     */
    private $idRecepcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Recepcion", type="smallint", nullable=false)
     */
    private $anoRecepcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Generar_Recepcion", type="boolean", nullable=false)
     */
    private $generarRecepcion;

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
     * @ORM\Column(name="Nota", type="string", length=2000, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto", type="string", length=200, nullable=false)
     */
    private $descProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Plan", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidadPlan;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Real", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidadReal;

    /**
     * @var string
     *
     * @ORM\Column(name="UM_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContaRecep", type="integer", nullable=false)
     */
    private $contarecep;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=15, nullable=false)
     */
    private $referencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Vence", type="datetime", nullable=false)
     */
    private $fechaVence;

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
     * @var boolean
     *
     * @ORM\Column(name="Contabilizado", type="boolean", nullable=false)
     */
    private $contabilizado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen2", type="string", length=5, nullable=false)
     */
    private $idAlmacen2;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen2", type="string", length=50, nullable=false)
     */
    private $descAlmacen2;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoEFMB", type="integer", nullable=false)
     */
    private $costoefmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostoEFMC", type="integer", nullable=false)
     */
    private $costoefmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var integer
     *
     * @ORM\Column(name="PesoBruto", type="integer", nullable=false)
     */
    private $pesobruto;

    /**
     * @var integer
     *
     * @ORM\Column(name="PesoNeto", type="integer", nullable=false)
     */
    private $pesoneto;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * Set idOproduccion
     *
     * @param integer $idOproduccion
     * @return OrdenProduccion
     */
    public function setIdOproduccion($idOproduccion)
    {
        $this->idOproduccion = $idOproduccion;

        return $this;
    }

    /**
     * Get idOproduccion
     *
     * @return integer 
     */
    public function getIdOproduccion()
    {
        return $this->idOproduccion;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return OrdenProduccion
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
     * Set anoOproduccion
     *
     * @param integer $anoOproduccion
     * @return OrdenProduccion
     */
    public function setAnoOproduccion($anoOproduccion)
    {
        $this->anoOproduccion = $anoOproduccion;

        return $this;
    }

    /**
     * Get anoOproduccion
     *
     * @return integer 
     */
    public function getAnoOproduccion()
    {
        return $this->anoOproduccion;
    }

    /**
     * Set fechaApertura
     *
     * @param \DateTime $fechaApertura
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * Set idComercial
     *
     * @param string $idComercial
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * Set idRecepcion
     *
     * @param integer $idRecepcion
     * @return OrdenProduccion
     */
    public function setIdRecepcion($idRecepcion)
    {
        $this->idRecepcion = $idRecepcion;

        return $this;
    }

    /**
     * Get idRecepcion
     *
     * @return integer 
     */
    public function getIdRecepcion()
    {
        return $this->idRecepcion;
    }

    /**
     * Set anoRecepcion
     *
     * @param integer $anoRecepcion
     * @return OrdenProduccion
     */
    public function setAnoRecepcion($anoRecepcion)
    {
        $this->anoRecepcion = $anoRecepcion;

        return $this;
    }

    /**
     * Get anoRecepcion
     *
     * @return integer 
     */
    public function getAnoRecepcion()
    {
        return $this->anoRecepcion;
    }

    /**
     * Set generarRecepcion
     *
     * @param boolean $generarRecepcion
     * @return OrdenProduccion
     */
    public function setGenerarRecepcion($generarRecepcion)
    {
        $this->generarRecepcion = $generarRecepcion;

        return $this;
    }

    /**
     * Get generarRecepcion
     *
     * @return boolean 
     */
    public function getGenerarRecepcion()
    {
        return $this->generarRecepcion;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * Set idProducto
     *
     * @param string $idProducto
     * @return OrdenProduccion
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return string 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set descProducto
     *
     * @param string $descProducto
     * @return OrdenProduccion
     */
    public function setDescProducto($descProducto)
    {
        $this->descProducto = $descProducto;

        return $this;
    }

    /**
     * Get descProducto
     *
     * @return string 
     */
    public function getDescProducto()
    {
        return $this->descProducto;
    }

    /**
     * Set cantidadPlan
     *
     * @param string $cantidadPlan
     * @return OrdenProduccion
     */
    public function setCantidadPlan($cantidadPlan)
    {
        $this->cantidadPlan = $cantidadPlan;

        return $this;
    }

    /**
     * Get cantidadPlan
     *
     * @return string 
     */
    public function getCantidadPlan()
    {
        return $this->cantidadPlan;
    }

    /**
     * Set cantidadReal
     *
     * @param string $cantidadReal
     * @return OrdenProduccion
     */
    public function setCantidadReal($cantidadReal)
    {
        $this->cantidadReal = $cantidadReal;

        return $this;
    }

    /**
     * Get cantidadReal
     *
     * @return string 
     */
    public function getCantidadReal()
    {
        return $this->cantidadReal;
    }

    /**
     * Set umAlmacen
     *
     * @param string $umAlmacen
     * @return OrdenProduccion
     */
    public function setUmAlmacen($umAlmacen)
    {
        $this->umAlmacen = $umAlmacen;

        return $this;
    }

    /**
     * Get umAlmacen
     *
     * @return string 
     */
    public function getUmAlmacen()
    {
        return $this->umAlmacen;
    }

    /**
     * Set contarecep
     *
     * @param integer $contarecep
     * @return OrdenProduccion
     */
    public function setContarecep($contarecep)
    {
        $this->contarecep = $contarecep;

        return $this;
    }

    /**
     * Get contarecep
     *
     * @return integer 
     */
    public function getContarecep()
    {
        return $this->contarecep;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return OrdenProduccion
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
     * Set fechaVence
     *
     * @param \DateTime $fechaVence
     * @return OrdenProduccion
     */
    public function setFechaVence($fechaVence)
    {
        $this->fechaVence = $fechaVence;

        return $this;
    }

    /**
     * Get fechaVence
     *
     * @return \DateTime 
     */
    public function getFechaVence()
    {
        return $this->fechaVence;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * @return OrdenProduccion
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
     * Set idAlmacen2
     *
     * @param string $idAlmacen2
     * @return OrdenProduccion
     */
    public function setIdAlmacen2($idAlmacen2)
    {
        $this->idAlmacen2 = $idAlmacen2;

        return $this;
    }

    /**
     * Get idAlmacen2
     *
     * @return string 
     */
    public function getIdAlmacen2()
    {
        return $this->idAlmacen2;
    }

    /**
     * Set descAlmacen2
     *
     * @param string $descAlmacen2
     * @return OrdenProduccion
     */
    public function setDescAlmacen2($descAlmacen2)
    {
        $this->descAlmacen2 = $descAlmacen2;

        return $this;
    }

    /**
     * Get descAlmacen2
     *
     * @return string 
     */
    public function getDescAlmacen2()
    {
        return $this->descAlmacen2;
    }

    /**
     * Set costoefmb
     *
     * @param integer $costoefmb
     * @return OrdenProduccion
     */
    public function setCostoefmb($costoefmb)
    {
        $this->costoefmb = $costoefmb;

        return $this;
    }

    /**
     * Get costoefmb
     *
     * @return integer 
     */
    public function getCostoefmb()
    {
        return $this->costoefmb;
    }

    /**
     * Set costoefmc
     *
     * @param integer $costoefmc
     * @return OrdenProduccion
     */
    public function setCostoefmc($costoefmc)
    {
        $this->costoefmc = $costoefmc;

        return $this;
    }

    /**
     * Get costoefmc
     *
     * @return integer 
     */
    public function getCostoefmc()
    {
        return $this->costoefmc;
    }

    /**
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return OrdenProduccion
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
     * Set pesobruto
     *
     * @param integer $pesobruto
     * @return OrdenProduccion
     */
    public function setPesobruto($pesobruto)
    {
        $this->pesobruto = $pesobruto;

        return $this;
    }

    /**
     * Get pesobruto
     *
     * @return integer 
     */
    public function getPesobruto()
    {
        return $this->pesobruto;
    }

    /**
     * Set pesoneto
     *
     * @param integer $pesoneto
     * @return OrdenProduccion
     */
    public function setPesoneto($pesoneto)
    {
        $this->pesoneto = $pesoneto;

        return $this;
    }

    /**
     * Get pesoneto
     *
     * @return integer 
     */
    public function getPesoneto()
    {
        return $this->pesoneto;
    }
}
