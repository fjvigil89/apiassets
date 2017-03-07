<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devolucion
 *
 * @ORM\Table(name="Devolucion", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Devolucion", columns={"Contador"})}, indexes={@ORM\Index(name="IX_Devolucion_1", columns={"Fecha_Confirmacion", "Id_Almacen"})})
 * @ORM\Entity
 */
class Devolucion
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
     * @ORM\Column(name="Id_Devolucion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDevolucion;

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
     * @ORM\Column(name="Ano_Devolucion", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoDevolucion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Devolucion", type="datetime", nullable=false)
     */
    private $fechaDevolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=5, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Empleado", type="string", length=60, nullable=false)
     */
    private $descEmpleado;

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
     * @var integer
     *
     * @ORM\Column(name="Id_Referencia", type="integer", nullable=false)
     */
    private $idReferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Año_Referencia", type="smallint", nullable=false)
     */
    private $añoReferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Devolucion", type="smallint", nullable=false)
     */
    private $tipoDevolucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devuelve_oCancela", type="smallint", nullable=false)
     */
    private $devuelveOcancela;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad_oValor", type="smallint", nullable=false)
     */
    private $cantidadOvalor;

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
     * @var integer
     *
     * @ORM\Column(name="Tipo_Documento", type="smallint", nullable=false)
     */
    private $tipoDocumento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var integer
     *
     * @ORM\Column(name="Impuesto_Total", type="integer", nullable=false)
     */
    private $impuestoTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Comision_Total", type="integer", nullable=false)
     */
    private $comisionTotal;

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
     * @var integer
     *
     * @ORM\Column(name="No_Prelacion", type="integer", nullable=false)
     */
    private $noPrelacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImpuestoProve", type="integer", nullable=false)
     */
    private $impuestoprove;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImpuestoReten", type="integer", nullable=false)
     */
    private $impuestoreten;

    /**
     * @var string
     *
     * @ORM\Column(name="IddocPago", type="string", length=15, nullable=false)
     */
    private $iddocpago;

    /**
     * @var string
     *
     * @ORM\Column(name="DescFP", type="string", length=50, nullable=false)
     */
    private $descfp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devolucion_Nominas", type="smallint", nullable=false)
     */
    private $devolucionNominas;

    /**
     * @var string
     *
     * @ORM\Column(name="NCF", type="string", length=20, nullable=false)
     */
    private $ncf;

    /**
     * @var integer
     *
     * @ORM\Column(name="OtrasReten", type="integer", nullable=false)
     */
    private $otrasreten;

    /**
     * @var string
     *
     * @ORM\Column(name="Adespacho", type="string", length=4, nullable=false)
     */
    private $adespacho;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteAduana", type="string", length=2, nullable=false)
     */
    private $ajusteaduana;

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoPorc", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $saldoporc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_AFavor", type="integer", nullable=false)
     */
    private $importeAfavor;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return Devolucion
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
     * @return Devolucion
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
     * Set idDevolucion
     *
     * @param integer $idDevolucion
     * @return Devolucion
     */
    public function setIdDevolucion($idDevolucion)
    {
        $this->idDevolucion = $idDevolucion;

        return $this;
    }

    /**
     * Get idDevolucion
     *
     * @return integer 
     */
    public function getIdDevolucion()
    {
        return $this->idDevolucion;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Devolucion
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
     * Set anoDevolucion
     *
     * @param integer $anoDevolucion
     * @return Devolucion
     */
    public function setAnoDevolucion($anoDevolucion)
    {
        $this->anoDevolucion = $anoDevolucion;

        return $this;
    }

    /**
     * Get anoDevolucion
     *
     * @return integer 
     */
    public function getAnoDevolucion()
    {
        return $this->anoDevolucion;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return Devolucion
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
     * Set fechaDevolucion
     *
     * @param \DateTime $fechaDevolucion
     * @return Devolucion
     */
    public function setFechaDevolucion($fechaDevolucion)
    {
        $this->fechaDevolucion = $fechaDevolucion;

        return $this;
    }

    /**
     * Get fechaDevolucion
     *
     * @return \DateTime 
     */
    public function getFechaDevolucion()
    {
        return $this->fechaDevolucion;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return Devolucion
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
     * @return Devolucion
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return Devolucion
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
     * @return Devolucion
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
     * Set idReferencia
     *
     * @param integer $idReferencia
     * @return Devolucion
     */
    public function setIdReferencia($idReferencia)
    {
        $this->idReferencia = $idReferencia;

        return $this;
    }

    /**
     * Get idReferencia
     *
     * @return integer 
     */
    public function getIdReferencia()
    {
        return $this->idReferencia;
    }

    /**
     * Set añoReferencia
     *
     * @param integer $añoReferencia
     * @return Devolucion
     */
    public function setAñoReferencia($añoReferencia)
    {
        $this->añoReferencia = $añoReferencia;

        return $this;
    }

    /**
     * Get añoReferencia
     *
     * @return integer 
     */
    public function getAñoReferencia()
    {
        return $this->añoReferencia;
    }

    /**
     * Set tipoDevolucion
     *
     * @param integer $tipoDevolucion
     * @return Devolucion
     */
    public function setTipoDevolucion($tipoDevolucion)
    {
        $this->tipoDevolucion = $tipoDevolucion;

        return $this;
    }

    /**
     * Get tipoDevolucion
     *
     * @return integer 
     */
    public function getTipoDevolucion()
    {
        return $this->tipoDevolucion;
    }

    /**
     * Set devuelveOcancela
     *
     * @param integer $devuelveOcancela
     * @return Devolucion
     */
    public function setDevuelveOcancela($devuelveOcancela)
    {
        $this->devuelveOcancela = $devuelveOcancela;

        return $this;
    }

    /**
     * Get devuelveOcancela
     *
     * @return integer 
     */
    public function getDevuelveOcancela()
    {
        return $this->devuelveOcancela;
    }

    /**
     * Set cantidadOvalor
     *
     * @param integer $cantidadOvalor
     * @return Devolucion
     */
    public function setCantidadOvalor($cantidadOvalor)
    {
        $this->cantidadOvalor = $cantidadOvalor;

        return $this;
    }

    /**
     * Get cantidadOvalor
     *
     * @return integer 
     */
    public function getCantidadOvalor()
    {
        return $this->cantidadOvalor;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return Devolucion
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
     * @return Devolucion
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
     * @return Devolucion
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
     * @return Devolucion
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
     * @return Devolucion
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
     * @return Devolucion
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
     * @return Devolucion
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
     * @return Devolucion
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
     * Set tipoDocumento
     *
     * @param integer $tipoDocumento
     * @return Devolucion
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return integer 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return Devolucion
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
     * Set impuestoTotal
     *
     * @param integer $impuestoTotal
     * @return Devolucion
     */
    public function setImpuestoTotal($impuestoTotal)
    {
        $this->impuestoTotal = $impuestoTotal;

        return $this;
    }

    /**
     * Get impuestoTotal
     *
     * @return integer 
     */
    public function getImpuestoTotal()
    {
        return $this->impuestoTotal;
    }

    /**
     * Set comisionTotal
     *
     * @param integer $comisionTotal
     * @return Devolucion
     */
    public function setComisionTotal($comisionTotal)
    {
        $this->comisionTotal = $comisionTotal;

        return $this;
    }

    /**
     * Get comisionTotal
     *
     * @return integer 
     */
    public function getComisionTotal()
    {
        return $this->comisionTotal;
    }

    /**
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return Devolucion
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
     * @return Devolucion
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
     * @return Devolucion
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
     * @return Devolucion
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
     * @return Devolucion
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
     * Set impuestoprove
     *
     * @param integer $impuestoprove
     * @return Devolucion
     */
    public function setImpuestoprove($impuestoprove)
    {
        $this->impuestoprove = $impuestoprove;

        return $this;
    }

    /**
     * Get impuestoprove
     *
     * @return integer 
     */
    public function getImpuestoprove()
    {
        return $this->impuestoprove;
    }

    /**
     * Set impuestoreten
     *
     * @param integer $impuestoreten
     * @return Devolucion
     */
    public function setImpuestoreten($impuestoreten)
    {
        $this->impuestoreten = $impuestoreten;

        return $this;
    }

    /**
     * Get impuestoreten
     *
     * @return integer 
     */
    public function getImpuestoreten()
    {
        return $this->impuestoreten;
    }

    /**
     * Set iddocpago
     *
     * @param string $iddocpago
     * @return Devolucion
     */
    public function setIddocpago($iddocpago)
    {
        $this->iddocpago = $iddocpago;

        return $this;
    }

    /**
     * Get iddocpago
     *
     * @return string 
     */
    public function getIddocpago()
    {
        return $this->iddocpago;
    }

    /**
     * Set descfp
     *
     * @param string $descfp
     * @return Devolucion
     */
    public function setDescfp($descfp)
    {
        $this->descfp = $descfp;

        return $this;
    }

    /**
     * Get descfp
     *
     * @return string 
     */
    public function getDescfp()
    {
        return $this->descfp;
    }

    /**
     * Set devolucionNominas
     *
     * @param integer $devolucionNominas
     * @return Devolucion
     */
    public function setDevolucionNominas($devolucionNominas)
    {
        $this->devolucionNominas = $devolucionNominas;

        return $this;
    }

    /**
     * Get devolucionNominas
     *
     * @return integer 
     */
    public function getDevolucionNominas()
    {
        return $this->devolucionNominas;
    }

    /**
     * Set ncf
     *
     * @param string $ncf
     * @return Devolucion
     */
    public function setNcf($ncf)
    {
        $this->ncf = $ncf;

        return $this;
    }

    /**
     * Get ncf
     *
     * @return string 
     */
    public function getNcf()
    {
        return $this->ncf;
    }

    /**
     * Set otrasreten
     *
     * @param integer $otrasreten
     * @return Devolucion
     */
    public function setOtrasreten($otrasreten)
    {
        $this->otrasreten = $otrasreten;

        return $this;
    }

    /**
     * Get otrasreten
     *
     * @return integer 
     */
    public function getOtrasreten()
    {
        return $this->otrasreten;
    }

    /**
     * Set adespacho
     *
     * @param string $adespacho
     * @return Devolucion
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
     * Set ajusteaduana
     *
     * @param string $ajusteaduana
     * @return Devolucion
     */
    public function setAjusteaduana($ajusteaduana)
    {
        $this->ajusteaduana = $ajusteaduana;

        return $this;
    }

    /**
     * Get ajusteaduana
     *
     * @return string 
     */
    public function getAjusteaduana()
    {
        return $this->ajusteaduana;
    }

    /**
     * Set saldoporc
     *
     * @param string $saldoporc
     * @return Devolucion
     */
    public function setSaldoporc($saldoporc)
    {
        $this->saldoporc = $saldoporc;

        return $this;
    }

    /**
     * Get saldoporc
     *
     * @return string 
     */
    public function getSaldoporc()
    {
        return $this->saldoporc;
    }

    /**
     * Set importeAfavor
     *
     * @param integer $importeAfavor
     * @return Devolucion
     */
    public function setImporteAfavor($importeAfavor)
    {
        $this->importeAfavor = $importeAfavor;

        return $this;
    }

    /**
     * Get importeAfavor
     *
     * @return integer 
     */
    public function getImporteAfavor()
    {
        return $this->importeAfavor;
    }
}
