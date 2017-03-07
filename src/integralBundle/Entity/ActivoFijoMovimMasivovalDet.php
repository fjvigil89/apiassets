<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoMovimMasivovalDet
 *
 * @ORM\Table(name="Activo_Fijo_Movim_MasivoVal_Det")
 * @ORM\Entity
 */
class ActivoFijoMovimMasivovalDet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_MovVal", type="integer", nullable=false)
     */
    private $idMovval;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_MovVal", type="integer", nullable=false)
     */
    private $anoMovval;

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
     * @ORM\Column(name="Id_Clasificacion", type="string", length=5, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Subclasificacion", type="string", length=5, nullable=false)
     */
    private $idSubclasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Especificacion", type="string", length=15, nullable=false)
     */
    private $idEspecificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="CNMB", type="string", length=50, nullable=false)
     */
    private $cnmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialOld", type="integer", nullable=false)
     */
    private $valorInicialold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialNew", type="integer", nullable=false)
     */
    private $valorInicialnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialMCOld", type="integer", nullable=false)
     */
    private $valorInicialmcold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialMCNew", type="integer", nullable=false)
     */
    private $valorInicialmcnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_ResidualOld", type="integer", nullable=false)
     */
    private $valorResidualold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_ResidualNew", type="integer", nullable=false)
     */
    private $valorResidualnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_ResidualMCOld", type="integer", nullable=false)
     */
    private $valorResidualmcold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_ResidualMCNew", type="integer", nullable=false)
     */
    private $valorResidualmcnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_AcumuladaOld", type="integer", nullable=false)
     */
    private $depreciacionAcumuladaold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_AcumuladaNew", type="integer", nullable=false)
     */
    private $depreciacionAcumuladanew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_AcumuladaMCOld", type="integer", nullable=false)
     */
    private $depreciacionAcumuladamcold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_AcumuladaMCNew", type="integer", nullable=false)
     */
    private $depreciacionAcumuladamcnew;



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
     * Set idMovval
     *
     * @param integer $idMovval
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setIdMovval($idMovval)
    {
        $this->idMovval = $idMovval;

        return $this;
    }

    /**
     * Get idMovval
     *
     * @return integer 
     */
    public function getIdMovval()
    {
        return $this->idMovval;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return ActivoFijoMovimMasivovalDet
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
     * Set anoMovval
     *
     * @param integer $anoMovval
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setAnoMovval($anoMovval)
    {
        $this->anoMovval = $anoMovval;

        return $this;
    }

    /**
     * Get anoMovval
     *
     * @return integer 
     */
    public function getAnoMovval()
    {
        return $this->anoMovval;
    }

    /**
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return ActivoFijoMovimMasivovalDet
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
     * @return ActivoFijoMovimMasivovalDet
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
     * @return ActivoFijoMovimMasivovalDet
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return ActivoFijoMovimMasivovalDet
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
     * @return ActivoFijoMovimMasivovalDet
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
     * @return ActivoFijoMovimMasivovalDet
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
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return ActivoFijoMovimMasivovalDet
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
     * Set idSubclasificacion
     *
     * @param string $idSubclasificacion
     * @return ActivoFijoMovimMasivovalDet
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
     * Set idEspecificacion
     *
     * @param string $idEspecificacion
     * @return ActivoFijoMovimMasivovalDet
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
     * Set cnmb
     *
     * @param string $cnmb
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setCnmb($cnmb)
    {
        $this->cnmb = $cnmb;

        return $this;
    }

    /**
     * Get cnmb
     *
     * @return string 
     */
    public function getCnmb()
    {
        return $this->cnmb;
    }

    /**
     * Set valorInicialold
     *
     * @param integer $valorInicialold
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setValorInicialold($valorInicialold)
    {
        $this->valorInicialold = $valorInicialold;

        return $this;
    }

    /**
     * Get valorInicialold
     *
     * @return integer 
     */
    public function getValorInicialold()
    {
        return $this->valorInicialold;
    }

    /**
     * Set valorInicialnew
     *
     * @param integer $valorInicialnew
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setValorInicialnew($valorInicialnew)
    {
        $this->valorInicialnew = $valorInicialnew;

        return $this;
    }

    /**
     * Get valorInicialnew
     *
     * @return integer 
     */
    public function getValorInicialnew()
    {
        return $this->valorInicialnew;
    }

    /**
     * Set valorInicialmcold
     *
     * @param integer $valorInicialmcold
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setValorInicialmcold($valorInicialmcold)
    {
        $this->valorInicialmcold = $valorInicialmcold;

        return $this;
    }

    /**
     * Get valorInicialmcold
     *
     * @return integer 
     */
    public function getValorInicialmcold()
    {
        return $this->valorInicialmcold;
    }

    /**
     * Set valorInicialmcnew
     *
     * @param integer $valorInicialmcnew
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setValorInicialmcnew($valorInicialmcnew)
    {
        $this->valorInicialmcnew = $valorInicialmcnew;

        return $this;
    }

    /**
     * Get valorInicialmcnew
     *
     * @return integer 
     */
    public function getValorInicialmcnew()
    {
        return $this->valorInicialmcnew;
    }

    /**
     * Set valorResidualold
     *
     * @param integer $valorResidualold
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setValorResidualold($valorResidualold)
    {
        $this->valorResidualold = $valorResidualold;

        return $this;
    }

    /**
     * Get valorResidualold
     *
     * @return integer 
     */
    public function getValorResidualold()
    {
        return $this->valorResidualold;
    }

    /**
     * Set valorResidualnew
     *
     * @param integer $valorResidualnew
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setValorResidualnew($valorResidualnew)
    {
        $this->valorResidualnew = $valorResidualnew;

        return $this;
    }

    /**
     * Get valorResidualnew
     *
     * @return integer 
     */
    public function getValorResidualnew()
    {
        return $this->valorResidualnew;
    }

    /**
     * Set valorResidualmcold
     *
     * @param integer $valorResidualmcold
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setValorResidualmcold($valorResidualmcold)
    {
        $this->valorResidualmcold = $valorResidualmcold;

        return $this;
    }

    /**
     * Get valorResidualmcold
     *
     * @return integer 
     */
    public function getValorResidualmcold()
    {
        return $this->valorResidualmcold;
    }

    /**
     * Set valorResidualmcnew
     *
     * @param integer $valorResidualmcnew
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setValorResidualmcnew($valorResidualmcnew)
    {
        $this->valorResidualmcnew = $valorResidualmcnew;

        return $this;
    }

    /**
     * Get valorResidualmcnew
     *
     * @return integer 
     */
    public function getValorResidualmcnew()
    {
        return $this->valorResidualmcnew;
    }

    /**
     * Set depreciacionAcumuladaold
     *
     * @param integer $depreciacionAcumuladaold
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setDepreciacionAcumuladaold($depreciacionAcumuladaold)
    {
        $this->depreciacionAcumuladaold = $depreciacionAcumuladaold;

        return $this;
    }

    /**
     * Get depreciacionAcumuladaold
     *
     * @return integer 
     */
    public function getDepreciacionAcumuladaold()
    {
        return $this->depreciacionAcumuladaold;
    }

    /**
     * Set depreciacionAcumuladanew
     *
     * @param integer $depreciacionAcumuladanew
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setDepreciacionAcumuladanew($depreciacionAcumuladanew)
    {
        $this->depreciacionAcumuladanew = $depreciacionAcumuladanew;

        return $this;
    }

    /**
     * Get depreciacionAcumuladanew
     *
     * @return integer 
     */
    public function getDepreciacionAcumuladanew()
    {
        return $this->depreciacionAcumuladanew;
    }

    /**
     * Set depreciacionAcumuladamcold
     *
     * @param integer $depreciacionAcumuladamcold
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setDepreciacionAcumuladamcold($depreciacionAcumuladamcold)
    {
        $this->depreciacionAcumuladamcold = $depreciacionAcumuladamcold;

        return $this;
    }

    /**
     * Get depreciacionAcumuladamcold
     *
     * @return integer 
     */
    public function getDepreciacionAcumuladamcold()
    {
        return $this->depreciacionAcumuladamcold;
    }

    /**
     * Set depreciacionAcumuladamcnew
     *
     * @param integer $depreciacionAcumuladamcnew
     * @return ActivoFijoMovimMasivovalDet
     */
    public function setDepreciacionAcumuladamcnew($depreciacionAcumuladamcnew)
    {
        $this->depreciacionAcumuladamcnew = $depreciacionAcumuladamcnew;

        return $this;
    }

    /**
     * Get depreciacionAcumuladamcnew
     *
     * @return integer 
     */
    public function getDepreciacionAcumuladamcnew()
    {
        return $this->depreciacionAcumuladamcnew;
    }
}
