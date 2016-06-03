<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresupuestoEjec
 *
 * @ORM\Table(name="Presupuesto_Ejec")
 * @ORM\Entity
 */
class PresupuestoEjec
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
     * @ORM\Column(name="Id_Cuenta", type="string", length=50, nullable=false)
     */
    private $idCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     */
    private $cta;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta", type="string", length=20, nullable=false)
     */
    private $subcta;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis", type="string", length=20, nullable=false)
     */
    private $analisis;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis", type="string", length=20, nullable=false)
     */
    private $subanalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe", type="string", length=20, nullable=false)
     */
    private $epigrafe;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida", type="string", length=20, nullable=false)
     */
    private $partida;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Mes", type="integer", nullable=false)
     */
    private $planMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Real_Mes", type="integer", nullable=false)
     */
    private $realMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porciento_Mes", type="integer", nullable=false)
     */
    private $porcientoMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Acum", type="integer", nullable=false)
     */
    private $planAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Real_Acum", type="integer", nullable=false)
     */
    private $realAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porciento_Acum", type="integer", nullable=false)
     */
    private $porcientoAcum;

    /**
     * @var string
     *
     * @ORM\Column(name="Elemento", type="string", length=15, nullable=false)
     */
    private $elemento;

    /**
     * @var string
     *
     * @ORM\Column(name="SubElemento", type="string", length=15, nullable=false)
     */
    private $subelemento;

    /**
     * @var string
     *
     * @ORM\Column(name="C_Costo", type="string", length=15, nullable=false)
     */
    private $cCosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Elemento", type="string", length=50, nullable=false)
     */
    private $descElemento;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Subelemento", type="string", length=50, nullable=false)
     */
    private $descSubelemento;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Ccosto", type="string", length=50, nullable=false)
     */
    private $descCcosto;



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
     * Set idCuenta
     *
     * @param string $idCuenta
     * @return PresupuestoEjec
     */
    public function setIdCuenta($idCuenta)
    {
        $this->idCuenta = $idCuenta;

        return $this;
    }

    /**
     * Get idCuenta
     *
     * @return string 
     */
    public function getIdCuenta()
    {
        return $this->idCuenta;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return PresupuestoEjec
     */
    public function setCta($cta)
    {
        $this->cta = $cta;

        return $this;
    }

    /**
     * Get cta
     *
     * @return string 
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set subcta
     *
     * @param string $subcta
     * @return PresupuestoEjec
     */
    public function setSubcta($subcta)
    {
        $this->subcta = $subcta;

        return $this;
    }

    /**
     * Get subcta
     *
     * @return string 
     */
    public function getSubcta()
    {
        return $this->subcta;
    }

    /**
     * Set analisis
     *
     * @param string $analisis
     * @return PresupuestoEjec
     */
    public function setAnalisis($analisis)
    {
        $this->analisis = $analisis;

        return $this;
    }

    /**
     * Get analisis
     *
     * @return string 
     */
    public function getAnalisis()
    {
        return $this->analisis;
    }

    /**
     * Set subanalisis
     *
     * @param string $subanalisis
     * @return PresupuestoEjec
     */
    public function setSubanalisis($subanalisis)
    {
        $this->subanalisis = $subanalisis;

        return $this;
    }

    /**
     * Get subanalisis
     *
     * @return string 
     */
    public function getSubanalisis()
    {
        return $this->subanalisis;
    }

    /**
     * Set epigrafe
     *
     * @param string $epigrafe
     * @return PresupuestoEjec
     */
    public function setEpigrafe($epigrafe)
    {
        $this->epigrafe = $epigrafe;

        return $this;
    }

    /**
     * Get epigrafe
     *
     * @return string 
     */
    public function getEpigrafe()
    {
        return $this->epigrafe;
    }

    /**
     * Set partida
     *
     * @param string $partida
     * @return PresupuestoEjec
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return string 
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return PresupuestoEjec
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return PresupuestoEjec
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set planMes
     *
     * @param integer $planMes
     * @return PresupuestoEjec
     */
    public function setPlanMes($planMes)
    {
        $this->planMes = $planMes;

        return $this;
    }

    /**
     * Get planMes
     *
     * @return integer 
     */
    public function getPlanMes()
    {
        return $this->planMes;
    }

    /**
     * Set realMes
     *
     * @param integer $realMes
     * @return PresupuestoEjec
     */
    public function setRealMes($realMes)
    {
        $this->realMes = $realMes;

        return $this;
    }

    /**
     * Get realMes
     *
     * @return integer 
     */
    public function getRealMes()
    {
        return $this->realMes;
    }

    /**
     * Set porcientoMes
     *
     * @param integer $porcientoMes
     * @return PresupuestoEjec
     */
    public function setPorcientoMes($porcientoMes)
    {
        $this->porcientoMes = $porcientoMes;

        return $this;
    }

    /**
     * Get porcientoMes
     *
     * @return integer 
     */
    public function getPorcientoMes()
    {
        return $this->porcientoMes;
    }

    /**
     * Set planAcum
     *
     * @param integer $planAcum
     * @return PresupuestoEjec
     */
    public function setPlanAcum($planAcum)
    {
        $this->planAcum = $planAcum;

        return $this;
    }

    /**
     * Get planAcum
     *
     * @return integer 
     */
    public function getPlanAcum()
    {
        return $this->planAcum;
    }

    /**
     * Set realAcum
     *
     * @param integer $realAcum
     * @return PresupuestoEjec
     */
    public function setRealAcum($realAcum)
    {
        $this->realAcum = $realAcum;

        return $this;
    }

    /**
     * Get realAcum
     *
     * @return integer 
     */
    public function getRealAcum()
    {
        return $this->realAcum;
    }

    /**
     * Set porcientoAcum
     *
     * @param integer $porcientoAcum
     * @return PresupuestoEjec
     */
    public function setPorcientoAcum($porcientoAcum)
    {
        $this->porcientoAcum = $porcientoAcum;

        return $this;
    }

    /**
     * Get porcientoAcum
     *
     * @return integer 
     */
    public function getPorcientoAcum()
    {
        return $this->porcientoAcum;
    }

    /**
     * Set elemento
     *
     * @param string $elemento
     * @return PresupuestoEjec
     */
    public function setElemento($elemento)
    {
        $this->elemento = $elemento;

        return $this;
    }

    /**
     * Get elemento
     *
     * @return string 
     */
    public function getElemento()
    {
        return $this->elemento;
    }

    /**
     * Set subelemento
     *
     * @param string $subelemento
     * @return PresupuestoEjec
     */
    public function setSubelemento($subelemento)
    {
        $this->subelemento = $subelemento;

        return $this;
    }

    /**
     * Get subelemento
     *
     * @return string 
     */
    public function getSubelemento()
    {
        return $this->subelemento;
    }

    /**
     * Set cCosto
     *
     * @param string $cCosto
     * @return PresupuestoEjec
     */
    public function setCCosto($cCosto)
    {
        $this->cCosto = $cCosto;

        return $this;
    }

    /**
     * Get cCosto
     *
     * @return string 
     */
    public function getCCosto()
    {
        return $this->cCosto;
    }

    /**
     * Set descElemento
     *
     * @param string $descElemento
     * @return PresupuestoEjec
     */
    public function setDescElemento($descElemento)
    {
        $this->descElemento = $descElemento;

        return $this;
    }

    /**
     * Get descElemento
     *
     * @return string 
     */
    public function getDescElemento()
    {
        return $this->descElemento;
    }

    /**
     * Set descSubelemento
     *
     * @param string $descSubelemento
     * @return PresupuestoEjec
     */
    public function setDescSubelemento($descSubelemento)
    {
        $this->descSubelemento = $descSubelemento;

        return $this;
    }

    /**
     * Get descSubelemento
     *
     * @return string 
     */
    public function getDescSubelemento()
    {
        return $this->descSubelemento;
    }

    /**
     * Set descCcosto
     *
     * @param string $descCcosto
     * @return PresupuestoEjec
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
}
