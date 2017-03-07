<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDesglosepagoefectivobancoporcientos
 *
 * @ORM\Table(name="RH_DesglosePagoEfectivoBancoPorcientos")
 * @ORM\Entity
 */
class RhDesglosepagoefectivobancoporcientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TipoNomina", type="smallint", nullable=false)
     */
    private $tiponomina;

    /**
     * @var integer
     *
     * @ORM\Column(name="UltimaBaseCalculoUtilizada", type="smallint", nullable=false)
     */
    private $ultimabasecalculoutilizada;

    /**
     * @var integer
     *
     * @ORM\Column(name="PorcBilletes100", type="integer", nullable=false)
     */
    private $porcbilletes100;

    /**
     * @var integer
     *
     * @ORM\Column(name="PorcBilletes50", type="integer", nullable=false)
     */
    private $porcbilletes50;

    /**
     * @var integer
     *
     * @ORM\Column(name="PorcBilletes20", type="integer", nullable=false)
     */
    private $porcbilletes20;

    /**
     * @var integer
     *
     * @ORM\Column(name="PorcBilletes10", type="integer", nullable=false)
     */
    private $porcbilletes10;

    /**
     * @var integer
     *
     * @ORM\Column(name="PorcBilletes5", type="integer", nullable=false)
     */
    private $porcbilletes5;

    /**
     * @var integer
     *
     * @ORM\Column(name="PorcBilletes3", type="integer", nullable=false)
     */
    private $porcbilletes3;

    /**
     * @var integer
     *
     * @ORM\Column(name="PorcBilletes1", type="integer", nullable=false)
     */
    private $porcbilletes1;

    /**
     * @var integer
     *
     * @ORM\Column(name="PorcMonedas5o3Pesos", type="integer", nullable=false)
     */
    private $porcmonedas5o3pesos;

    /**
     * @var integer
     *
     * @ORM\Column(name="PorcMonedas1Peso", type="integer", nullable=false)
     */
    private $porcmonedas1peso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Billetes100", type="boolean", nullable=false)
     */
    private $billetes100;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Billetes50", type="boolean", nullable=false)
     */
    private $billetes50;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Billetes20", type="boolean", nullable=false)
     */
    private $billetes20;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Billetes10", type="boolean", nullable=false)
     */
    private $billetes10;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Billetes5", type="boolean", nullable=false)
     */
    private $billetes5;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Billetes3", type="boolean", nullable=false)
     */
    private $billetes3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Billetes1", type="boolean", nullable=false)
     */
    private $billetes1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Monedas5o3Pesos", type="boolean", nullable=false)
     */
    private $monedas5o3pesos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Monedas1Peso", type="boolean", nullable=false)
     */
    private $monedas1peso;

    /**
     * @var integer
     *
     * @ORM\Column(name="BaseCalculoReDist", type="smallint", nullable=false)
     */
    private $basecalculoredist;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoInforme", type="smallint", nullable=false)
     */
    private $tipoinforme;

    /**
     * @var integer
     *
     * @ORM\Column(name="TotalACobrar", type="integer", nullable=false)
     */
    private $totalacobrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="CB100", type="integer", nullable=false)
     */
    private $cb100;

    /**
     * @var integer
     *
     * @ORM\Column(name="CB50", type="integer", nullable=false)
     */
    private $cb50;

    /**
     * @var integer
     *
     * @ORM\Column(name="CB20", type="integer", nullable=false)
     */
    private $cb20;

    /**
     * @var integer
     *
     * @ORM\Column(name="CB10", type="integer", nullable=false)
     */
    private $cb10;

    /**
     * @var integer
     *
     * @ORM\Column(name="CB5", type="integer", nullable=false)
     */
    private $cb5;

    /**
     * @var integer
     *
     * @ORM\Column(name="CB3", type="integer", nullable=false)
     */
    private $cb3;

    /**
     * @var integer
     *
     * @ORM\Column(name="CB1", type="integer", nullable=false)
     */
    private $cb1;

    /**
     * @var integer
     *
     * @ORM\Column(name="CM5o3P", type="integer", nullable=false)
     */
    private $cm5o3p;

    /**
     * @var integer
     *
     * @ORM\Column(name="CM1P", type="integer", nullable=false)
     */
    private $cm1p;

    /**
     * @var integer
     *
     * @ORM\Column(name="CM50o20C", type="integer", nullable=false)
     */
    private $cm50o20c;

    /**
     * @var integer
     *
     * @ORM\Column(name="CM25o5C", type="integer", nullable=false)
     */
    private $cm25o5c;

    /**
     * @var integer
     *
     * @ORM\Column(name="CM10o2C", type="integer", nullable=false)
     */
    private $cm10o2c;

    /**
     * @var integer
     *
     * @ORM\Column(name="CM5o1C", type="integer", nullable=false)
     */
    private $cm5o1c;

    /**
     * @var integer
     *
     * @ORM\Column(name="BB100", type="integer", nullable=false)
     */
    private $bb100;

    /**
     * @var integer
     *
     * @ORM\Column(name="BB50", type="integer", nullable=false)
     */
    private $bb50;

    /**
     * @var integer
     *
     * @ORM\Column(name="BB20", type="integer", nullable=false)
     */
    private $bb20;

    /**
     * @var integer
     *
     * @ORM\Column(name="BB10", type="integer", nullable=false)
     */
    private $bb10;

    /**
     * @var integer
     *
     * @ORM\Column(name="BB5", type="integer", nullable=false)
     */
    private $bb5;

    /**
     * @var integer
     *
     * @ORM\Column(name="BB3", type="integer", nullable=false)
     */
    private $bb3;

    /**
     * @var integer
     *
     * @ORM\Column(name="BB1", type="integer", nullable=false)
     */
    private $bb1;

    /**
     * @var integer
     *
     * @ORM\Column(name="BM5o3P", type="integer", nullable=false)
     */
    private $bm5o3p;

    /**
     * @var integer
     *
     * @ORM\Column(name="BM1P", type="integer", nullable=false)
     */
    private $bm1p;

    /**
     * @var integer
     *
     * @ORM\Column(name="BM50o20C", type="integer", nullable=false)
     */
    private $bm50o20c;

    /**
     * @var integer
     *
     * @ORM\Column(name="BM25o5C", type="integer", nullable=false)
     */
    private $bm25o5c;

    /**
     * @var integer
     *
     * @ORM\Column(name="BM10o2C", type="integer", nullable=false)
     */
    private $bm10o2c;

    /**
     * @var integer
     *
     * @ORM\Column(name="BM5o1C", type="integer", nullable=false)
     */
    private $bm5o1c;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="CM1C", type="integer", nullable=false)
     */
    private $cm1c;

    /**
     * @var integer
     *
     * @ORM\Column(name="BM1C", type="integer", nullable=false)
     */
    private $bm1c;



    /**
     * Set tiponomina
     *
     * @param integer $tiponomina
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setTiponomina($tiponomina)
    {
        $this->tiponomina = $tiponomina;

        return $this;
    }

    /**
     * Get tiponomina
     *
     * @return integer 
     */
    public function getTiponomina()
    {
        return $this->tiponomina;
    }

    /**
     * Set ultimabasecalculoutilizada
     *
     * @param integer $ultimabasecalculoutilizada
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setUltimabasecalculoutilizada($ultimabasecalculoutilizada)
    {
        $this->ultimabasecalculoutilizada = $ultimabasecalculoutilizada;

        return $this;
    }

    /**
     * Get ultimabasecalculoutilizada
     *
     * @return integer 
     */
    public function getUltimabasecalculoutilizada()
    {
        return $this->ultimabasecalculoutilizada;
    }

    /**
     * Set porcbilletes100
     *
     * @param integer $porcbilletes100
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setPorcbilletes100($porcbilletes100)
    {
        $this->porcbilletes100 = $porcbilletes100;

        return $this;
    }

    /**
     * Get porcbilletes100
     *
     * @return integer 
     */
    public function getPorcbilletes100()
    {
        return $this->porcbilletes100;
    }

    /**
     * Set porcbilletes50
     *
     * @param integer $porcbilletes50
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setPorcbilletes50($porcbilletes50)
    {
        $this->porcbilletes50 = $porcbilletes50;

        return $this;
    }

    /**
     * Get porcbilletes50
     *
     * @return integer 
     */
    public function getPorcbilletes50()
    {
        return $this->porcbilletes50;
    }

    /**
     * Set porcbilletes20
     *
     * @param integer $porcbilletes20
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setPorcbilletes20($porcbilletes20)
    {
        $this->porcbilletes20 = $porcbilletes20;

        return $this;
    }

    /**
     * Get porcbilletes20
     *
     * @return integer 
     */
    public function getPorcbilletes20()
    {
        return $this->porcbilletes20;
    }

    /**
     * Set porcbilletes10
     *
     * @param integer $porcbilletes10
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setPorcbilletes10($porcbilletes10)
    {
        $this->porcbilletes10 = $porcbilletes10;

        return $this;
    }

    /**
     * Get porcbilletes10
     *
     * @return integer 
     */
    public function getPorcbilletes10()
    {
        return $this->porcbilletes10;
    }

    /**
     * Set porcbilletes5
     *
     * @param integer $porcbilletes5
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setPorcbilletes5($porcbilletes5)
    {
        $this->porcbilletes5 = $porcbilletes5;

        return $this;
    }

    /**
     * Get porcbilletes5
     *
     * @return integer 
     */
    public function getPorcbilletes5()
    {
        return $this->porcbilletes5;
    }

    /**
     * Set porcbilletes3
     *
     * @param integer $porcbilletes3
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setPorcbilletes3($porcbilletes3)
    {
        $this->porcbilletes3 = $porcbilletes3;

        return $this;
    }

    /**
     * Get porcbilletes3
     *
     * @return integer 
     */
    public function getPorcbilletes3()
    {
        return $this->porcbilletes3;
    }

    /**
     * Set porcbilletes1
     *
     * @param integer $porcbilletes1
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setPorcbilletes1($porcbilletes1)
    {
        $this->porcbilletes1 = $porcbilletes1;

        return $this;
    }

    /**
     * Get porcbilletes1
     *
     * @return integer 
     */
    public function getPorcbilletes1()
    {
        return $this->porcbilletes1;
    }

    /**
     * Set porcmonedas5o3pesos
     *
     * @param integer $porcmonedas5o3pesos
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setPorcmonedas5o3pesos($porcmonedas5o3pesos)
    {
        $this->porcmonedas5o3pesos = $porcmonedas5o3pesos;

        return $this;
    }

    /**
     * Get porcmonedas5o3pesos
     *
     * @return integer 
     */
    public function getPorcmonedas5o3pesos()
    {
        return $this->porcmonedas5o3pesos;
    }

    /**
     * Set porcmonedas1peso
     *
     * @param integer $porcmonedas1peso
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setPorcmonedas1peso($porcmonedas1peso)
    {
        $this->porcmonedas1peso = $porcmonedas1peso;

        return $this;
    }

    /**
     * Get porcmonedas1peso
     *
     * @return integer 
     */
    public function getPorcmonedas1peso()
    {
        return $this->porcmonedas1peso;
    }

    /**
     * Set billetes100
     *
     * @param boolean $billetes100
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBilletes100($billetes100)
    {
        $this->billetes100 = $billetes100;

        return $this;
    }

    /**
     * Get billetes100
     *
     * @return boolean 
     */
    public function getBilletes100()
    {
        return $this->billetes100;
    }

    /**
     * Set billetes50
     *
     * @param boolean $billetes50
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBilletes50($billetes50)
    {
        $this->billetes50 = $billetes50;

        return $this;
    }

    /**
     * Get billetes50
     *
     * @return boolean 
     */
    public function getBilletes50()
    {
        return $this->billetes50;
    }

    /**
     * Set billetes20
     *
     * @param boolean $billetes20
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBilletes20($billetes20)
    {
        $this->billetes20 = $billetes20;

        return $this;
    }

    /**
     * Get billetes20
     *
     * @return boolean 
     */
    public function getBilletes20()
    {
        return $this->billetes20;
    }

    /**
     * Set billetes10
     *
     * @param boolean $billetes10
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBilletes10($billetes10)
    {
        $this->billetes10 = $billetes10;

        return $this;
    }

    /**
     * Get billetes10
     *
     * @return boolean 
     */
    public function getBilletes10()
    {
        return $this->billetes10;
    }

    /**
     * Set billetes5
     *
     * @param boolean $billetes5
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBilletes5($billetes5)
    {
        $this->billetes5 = $billetes5;

        return $this;
    }

    /**
     * Get billetes5
     *
     * @return boolean 
     */
    public function getBilletes5()
    {
        return $this->billetes5;
    }

    /**
     * Set billetes3
     *
     * @param boolean $billetes3
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBilletes3($billetes3)
    {
        $this->billetes3 = $billetes3;

        return $this;
    }

    /**
     * Get billetes3
     *
     * @return boolean 
     */
    public function getBilletes3()
    {
        return $this->billetes3;
    }

    /**
     * Set billetes1
     *
     * @param boolean $billetes1
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBilletes1($billetes1)
    {
        $this->billetes1 = $billetes1;

        return $this;
    }

    /**
     * Get billetes1
     *
     * @return boolean 
     */
    public function getBilletes1()
    {
        return $this->billetes1;
    }

    /**
     * Set monedas5o3pesos
     *
     * @param boolean $monedas5o3pesos
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setMonedas5o3pesos($monedas5o3pesos)
    {
        $this->monedas5o3pesos = $monedas5o3pesos;

        return $this;
    }

    /**
     * Get monedas5o3pesos
     *
     * @return boolean 
     */
    public function getMonedas5o3pesos()
    {
        return $this->monedas5o3pesos;
    }

    /**
     * Set monedas1peso
     *
     * @param boolean $monedas1peso
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setMonedas1peso($monedas1peso)
    {
        $this->monedas1peso = $monedas1peso;

        return $this;
    }

    /**
     * Get monedas1peso
     *
     * @return boolean 
     */
    public function getMonedas1peso()
    {
        return $this->monedas1peso;
    }

    /**
     * Set basecalculoredist
     *
     * @param integer $basecalculoredist
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBasecalculoredist($basecalculoredist)
    {
        $this->basecalculoredist = $basecalculoredist;

        return $this;
    }

    /**
     * Get basecalculoredist
     *
     * @return integer 
     */
    public function getBasecalculoredist()
    {
        return $this->basecalculoredist;
    }

    /**
     * Set tipoinforme
     *
     * @param integer $tipoinforme
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setTipoinforme($tipoinforme)
    {
        $this->tipoinforme = $tipoinforme;

        return $this;
    }

    /**
     * Get tipoinforme
     *
     * @return integer 
     */
    public function getTipoinforme()
    {
        return $this->tipoinforme;
    }

    /**
     * Set totalacobrar
     *
     * @param integer $totalacobrar
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setTotalacobrar($totalacobrar)
    {
        $this->totalacobrar = $totalacobrar;

        return $this;
    }

    /**
     * Get totalacobrar
     *
     * @return integer 
     */
    public function getTotalacobrar()
    {
        return $this->totalacobrar;
    }

    /**
     * Set cb100
     *
     * @param integer $cb100
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCb100($cb100)
    {
        $this->cb100 = $cb100;

        return $this;
    }

    /**
     * Get cb100
     *
     * @return integer 
     */
    public function getCb100()
    {
        return $this->cb100;
    }

    /**
     * Set cb50
     *
     * @param integer $cb50
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCb50($cb50)
    {
        $this->cb50 = $cb50;

        return $this;
    }

    /**
     * Get cb50
     *
     * @return integer 
     */
    public function getCb50()
    {
        return $this->cb50;
    }

    /**
     * Set cb20
     *
     * @param integer $cb20
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCb20($cb20)
    {
        $this->cb20 = $cb20;

        return $this;
    }

    /**
     * Get cb20
     *
     * @return integer 
     */
    public function getCb20()
    {
        return $this->cb20;
    }

    /**
     * Set cb10
     *
     * @param integer $cb10
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCb10($cb10)
    {
        $this->cb10 = $cb10;

        return $this;
    }

    /**
     * Get cb10
     *
     * @return integer 
     */
    public function getCb10()
    {
        return $this->cb10;
    }

    /**
     * Set cb5
     *
     * @param integer $cb5
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCb5($cb5)
    {
        $this->cb5 = $cb5;

        return $this;
    }

    /**
     * Get cb5
     *
     * @return integer 
     */
    public function getCb5()
    {
        return $this->cb5;
    }

    /**
     * Set cb3
     *
     * @param integer $cb3
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCb3($cb3)
    {
        $this->cb3 = $cb3;

        return $this;
    }

    /**
     * Get cb3
     *
     * @return integer 
     */
    public function getCb3()
    {
        return $this->cb3;
    }

    /**
     * Set cb1
     *
     * @param integer $cb1
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCb1($cb1)
    {
        $this->cb1 = $cb1;

        return $this;
    }

    /**
     * Get cb1
     *
     * @return integer 
     */
    public function getCb1()
    {
        return $this->cb1;
    }

    /**
     * Set cm5o3p
     *
     * @param integer $cm5o3p
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCm5o3p($cm5o3p)
    {
        $this->cm5o3p = $cm5o3p;

        return $this;
    }

    /**
     * Get cm5o3p
     *
     * @return integer 
     */
    public function getCm5o3p()
    {
        return $this->cm5o3p;
    }

    /**
     * Set cm1p
     *
     * @param integer $cm1p
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCm1p($cm1p)
    {
        $this->cm1p = $cm1p;

        return $this;
    }

    /**
     * Get cm1p
     *
     * @return integer 
     */
    public function getCm1p()
    {
        return $this->cm1p;
    }

    /**
     * Set cm50o20c
     *
     * @param integer $cm50o20c
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCm50o20c($cm50o20c)
    {
        $this->cm50o20c = $cm50o20c;

        return $this;
    }

    /**
     * Get cm50o20c
     *
     * @return integer 
     */
    public function getCm50o20c()
    {
        return $this->cm50o20c;
    }

    /**
     * Set cm25o5c
     *
     * @param integer $cm25o5c
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCm25o5c($cm25o5c)
    {
        $this->cm25o5c = $cm25o5c;

        return $this;
    }

    /**
     * Get cm25o5c
     *
     * @return integer 
     */
    public function getCm25o5c()
    {
        return $this->cm25o5c;
    }

    /**
     * Set cm10o2c
     *
     * @param integer $cm10o2c
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCm10o2c($cm10o2c)
    {
        $this->cm10o2c = $cm10o2c;

        return $this;
    }

    /**
     * Get cm10o2c
     *
     * @return integer 
     */
    public function getCm10o2c()
    {
        return $this->cm10o2c;
    }

    /**
     * Set cm5o1c
     *
     * @param integer $cm5o1c
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCm5o1c($cm5o1c)
    {
        $this->cm5o1c = $cm5o1c;

        return $this;
    }

    /**
     * Get cm5o1c
     *
     * @return integer 
     */
    public function getCm5o1c()
    {
        return $this->cm5o1c;
    }

    /**
     * Set bb100
     *
     * @param integer $bb100
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBb100($bb100)
    {
        $this->bb100 = $bb100;

        return $this;
    }

    /**
     * Get bb100
     *
     * @return integer 
     */
    public function getBb100()
    {
        return $this->bb100;
    }

    /**
     * Set bb50
     *
     * @param integer $bb50
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBb50($bb50)
    {
        $this->bb50 = $bb50;

        return $this;
    }

    /**
     * Get bb50
     *
     * @return integer 
     */
    public function getBb50()
    {
        return $this->bb50;
    }

    /**
     * Set bb20
     *
     * @param integer $bb20
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBb20($bb20)
    {
        $this->bb20 = $bb20;

        return $this;
    }

    /**
     * Get bb20
     *
     * @return integer 
     */
    public function getBb20()
    {
        return $this->bb20;
    }

    /**
     * Set bb10
     *
     * @param integer $bb10
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBb10($bb10)
    {
        $this->bb10 = $bb10;

        return $this;
    }

    /**
     * Get bb10
     *
     * @return integer 
     */
    public function getBb10()
    {
        return $this->bb10;
    }

    /**
     * Set bb5
     *
     * @param integer $bb5
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBb5($bb5)
    {
        $this->bb5 = $bb5;

        return $this;
    }

    /**
     * Get bb5
     *
     * @return integer 
     */
    public function getBb5()
    {
        return $this->bb5;
    }

    /**
     * Set bb3
     *
     * @param integer $bb3
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBb3($bb3)
    {
        $this->bb3 = $bb3;

        return $this;
    }

    /**
     * Get bb3
     *
     * @return integer 
     */
    public function getBb3()
    {
        return $this->bb3;
    }

    /**
     * Set bb1
     *
     * @param integer $bb1
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBb1($bb1)
    {
        $this->bb1 = $bb1;

        return $this;
    }

    /**
     * Get bb1
     *
     * @return integer 
     */
    public function getBb1()
    {
        return $this->bb1;
    }

    /**
     * Set bm5o3p
     *
     * @param integer $bm5o3p
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBm5o3p($bm5o3p)
    {
        $this->bm5o3p = $bm5o3p;

        return $this;
    }

    /**
     * Get bm5o3p
     *
     * @return integer 
     */
    public function getBm5o3p()
    {
        return $this->bm5o3p;
    }

    /**
     * Set bm1p
     *
     * @param integer $bm1p
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBm1p($bm1p)
    {
        $this->bm1p = $bm1p;

        return $this;
    }

    /**
     * Get bm1p
     *
     * @return integer 
     */
    public function getBm1p()
    {
        return $this->bm1p;
    }

    /**
     * Set bm50o20c
     *
     * @param integer $bm50o20c
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBm50o20c($bm50o20c)
    {
        $this->bm50o20c = $bm50o20c;

        return $this;
    }

    /**
     * Get bm50o20c
     *
     * @return integer 
     */
    public function getBm50o20c()
    {
        return $this->bm50o20c;
    }

    /**
     * Set bm25o5c
     *
     * @param integer $bm25o5c
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBm25o5c($bm25o5c)
    {
        $this->bm25o5c = $bm25o5c;

        return $this;
    }

    /**
     * Get bm25o5c
     *
     * @return integer 
     */
    public function getBm25o5c()
    {
        return $this->bm25o5c;
    }

    /**
     * Set bm10o2c
     *
     * @param integer $bm10o2c
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBm10o2c($bm10o2c)
    {
        $this->bm10o2c = $bm10o2c;

        return $this;
    }

    /**
     * Get bm10o2c
     *
     * @return integer 
     */
    public function getBm10o2c()
    {
        return $this->bm10o2c;
    }

    /**
     * Set bm5o1c
     *
     * @param integer $bm5o1c
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBm5o1c($bm5o1c)
    {
        $this->bm5o1c = $bm5o1c;

        return $this;
    }

    /**
     * Get bm5o1c
     *
     * @return integer 
     */
    public function getBm5o1c()
    {
        return $this->bm5o1c;
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
     * @return RhDesglosepagoefectivobancoporcientos
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
     * Set cm1c
     *
     * @param integer $cm1c
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setCm1c($cm1c)
    {
        $this->cm1c = $cm1c;

        return $this;
    }

    /**
     * Get cm1c
     *
     * @return integer 
     */
    public function getCm1c()
    {
        return $this->cm1c;
    }

    /**
     * Set bm1c
     *
     * @param integer $bm1c
     * @return RhDesglosepagoefectivobancoporcientos
     */
    public function setBm1c($bm1c)
    {
        $this->bm1c = $bm1c;

        return $this;
    }

    /**
     * Get bm1c
     *
     * @return integer 
     */
    public function getBm1c()
    {
        return $this->bm1c;
    }
}
