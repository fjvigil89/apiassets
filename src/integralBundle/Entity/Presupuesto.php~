<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presupuesto
 *
 * @ORM\Table(name="Presupuesto", indexes={@ORM\Index(name="Clu_Ano_Varian_Presup", columns={"Ano", "Variante"})})
 * @ORM\Entity
 */
class Presupuesto
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
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cuenta", type="string", length=50, nullable=false)
     */
    private $idCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cuenta", type="string", length=200, nullable=false)
     */
    private $descCuenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Enero", type="integer", nullable=false)
     */
    private $planEnero;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Febrero", type="integer", nullable=false)
     */
    private $planFebrero;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Marzo", type="integer", nullable=false)
     */
    private $planMarzo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Abril", type="integer", nullable=false)
     */
    private $planAbril;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Mayo", type="integer", nullable=false)
     */
    private $planMayo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Junio", type="integer", nullable=false)
     */
    private $planJunio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Julio", type="integer", nullable=false)
     */
    private $planJulio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Agosto", type="integer", nullable=false)
     */
    private $planAgosto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Septiembre", type="integer", nullable=false)
     */
    private $planSeptiembre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Octubre", type="integer", nullable=false)
     */
    private $planOctubre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Noviembre", type="integer", nullable=false)
     */
    private $planNoviembre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Diciembre", type="integer", nullable=false)
     */
    private $planDiciembre;

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
     * @ORM\Column(name="Variante", type="string", length=3, nullable=false)
     */
    private $variante;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;



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
     * Set ano
     *
     * @param integer $ano
     * @return Presupuesto
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
     * Set idCuenta
     *
     * @param string $idCuenta
     * @return Presupuesto
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
     * Set descCuenta
     *
     * @param string $descCuenta
     * @return Presupuesto
     */
    public function setDescCuenta($descCuenta)
    {
        $this->descCuenta = $descCuenta;

        return $this;
    }

    /**
     * Get descCuenta
     *
     * @return string 
     */
    public function getDescCuenta()
    {
        return $this->descCuenta;
    }

    /**
     * Set planEnero
     *
     * @param integer $planEnero
     * @return Presupuesto
     */
    public function setPlanEnero($planEnero)
    {
        $this->planEnero = $planEnero;

        return $this;
    }

    /**
     * Get planEnero
     *
     * @return integer 
     */
    public function getPlanEnero()
    {
        return $this->planEnero;
    }

    /**
     * Set planFebrero
     *
     * @param integer $planFebrero
     * @return Presupuesto
     */
    public function setPlanFebrero($planFebrero)
    {
        $this->planFebrero = $planFebrero;

        return $this;
    }

    /**
     * Get planFebrero
     *
     * @return integer 
     */
    public function getPlanFebrero()
    {
        return $this->planFebrero;
    }

    /**
     * Set planMarzo
     *
     * @param integer $planMarzo
     * @return Presupuesto
     */
    public function setPlanMarzo($planMarzo)
    {
        $this->planMarzo = $planMarzo;

        return $this;
    }

    /**
     * Get planMarzo
     *
     * @return integer 
     */
    public function getPlanMarzo()
    {
        return $this->planMarzo;
    }

    /**
     * Set planAbril
     *
     * @param integer $planAbril
     * @return Presupuesto
     */
    public function setPlanAbril($planAbril)
    {
        $this->planAbril = $planAbril;

        return $this;
    }

    /**
     * Get planAbril
     *
     * @return integer 
     */
    public function getPlanAbril()
    {
        return $this->planAbril;
    }

    /**
     * Set planMayo
     *
     * @param integer $planMayo
     * @return Presupuesto
     */
    public function setPlanMayo($planMayo)
    {
        $this->planMayo = $planMayo;

        return $this;
    }

    /**
     * Get planMayo
     *
     * @return integer 
     */
    public function getPlanMayo()
    {
        return $this->planMayo;
    }

    /**
     * Set planJunio
     *
     * @param integer $planJunio
     * @return Presupuesto
     */
    public function setPlanJunio($planJunio)
    {
        $this->planJunio = $planJunio;

        return $this;
    }

    /**
     * Get planJunio
     *
     * @return integer 
     */
    public function getPlanJunio()
    {
        return $this->planJunio;
    }

    /**
     * Set planJulio
     *
     * @param integer $planJulio
     * @return Presupuesto
     */
    public function setPlanJulio($planJulio)
    {
        $this->planJulio = $planJulio;

        return $this;
    }

    /**
     * Get planJulio
     *
     * @return integer 
     */
    public function getPlanJulio()
    {
        return $this->planJulio;
    }

    /**
     * Set planAgosto
     *
     * @param integer $planAgosto
     * @return Presupuesto
     */
    public function setPlanAgosto($planAgosto)
    {
        $this->planAgosto = $planAgosto;

        return $this;
    }

    /**
     * Get planAgosto
     *
     * @return integer 
     */
    public function getPlanAgosto()
    {
        return $this->planAgosto;
    }

    /**
     * Set planSeptiembre
     *
     * @param integer $planSeptiembre
     * @return Presupuesto
     */
    public function setPlanSeptiembre($planSeptiembre)
    {
        $this->planSeptiembre = $planSeptiembre;

        return $this;
    }

    /**
     * Get planSeptiembre
     *
     * @return integer 
     */
    public function getPlanSeptiembre()
    {
        return $this->planSeptiembre;
    }

    /**
     * Set planOctubre
     *
     * @param integer $planOctubre
     * @return Presupuesto
     */
    public function setPlanOctubre($planOctubre)
    {
        $this->planOctubre = $planOctubre;

        return $this;
    }

    /**
     * Get planOctubre
     *
     * @return integer 
     */
    public function getPlanOctubre()
    {
        return $this->planOctubre;
    }

    /**
     * Set planNoviembre
     *
     * @param integer $planNoviembre
     * @return Presupuesto
     */
    public function setPlanNoviembre($planNoviembre)
    {
        $this->planNoviembre = $planNoviembre;

        return $this;
    }

    /**
     * Get planNoviembre
     *
     * @return integer 
     */
    public function getPlanNoviembre()
    {
        return $this->planNoviembre;
    }

    /**
     * Set planDiciembre
     *
     * @param integer $planDiciembre
     * @return Presupuesto
     */
    public function setPlanDiciembre($planDiciembre)
    {
        $this->planDiciembre = $planDiciembre;

        return $this;
    }

    /**
     * Get planDiciembre
     *
     * @return integer 
     */
    public function getPlanDiciembre()
    {
        return $this->planDiciembre;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Presupuesto
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
     * @return Presupuesto
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
     * @return Presupuesto
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
     * Set variante
     *
     * @param string $variante
     * @return Presupuesto
     */
    public function setVariante($variante)
    {
        $this->variante = $variante;

        return $this;
    }

    /**
     * Get variante
     *
     * @return string 
     */
    public function getVariante()
    {
        return $this->variante;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return Presupuesto
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
}
